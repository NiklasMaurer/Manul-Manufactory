<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Brick;
use App\Models\Bodypart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Exception;

class BricksController extends Controller
{

    /**
     * Display a listing of the bricks.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $bricks = Brick::with('bodypart')->paginate(15);

        return view('bricks.index', compact('bricks'));
    }

    /**
     * Show the form for creating a new brick.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $bodyparts = Bodypart::pluck('name','id')->all();
$creators = User::pluck('name','id')->all();
$updaters = User::pluck('name','id')->all();
        
        return view('bricks.create', compact('bodyparts','creators','updaters'));
    }

    /**
     * Store a new brick in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            $data['created_by'] = Auth::Id();
            Brick::create($data);

            return redirect()->route('bricks.brick.index')
                             ->with('success_message', 'Brick was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified brick.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $brick = Brick::with('bodypart','creator','updater')->findOrFail($id);

        return view('bricks.show', compact('brick'));
    }

    /**
     * Show the form for editing the specified brick.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $brick = Brick::findOrFail($id);
        $bodyparts = Bodypart::pluck('name','id')->all();
$creators = User::pluck('name','id')->all();
$updaters = User::pluck('name','id')->all();

        return view('bricks.edit', compact('brick','bodyparts','creators','updaters'));
    }

    /**
     * Update the specified brick in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            $data['updated_by'] = Auth::Id();
            $brick = Brick::findOrFail($id);
            $brick->update($data);

            return redirect()->route('bricks.brick.index')
                             ->with('success_message', 'Brick was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified brick from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $brick = Brick::findOrFail($id);
            $brick->delete();

            return redirect()->route('bricks.brick.index')
                             ->with('success_message', 'Brick was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'bodyparts_id' => 'required',
            'file' => ['nullable','file'],
            'name' => 'nullable|string|min:0|max:100',
            'created_by' => 'nullable',
            'updated_by' => 'nullable',
     
        ];

        
        $data = $request->validate($rules);

        if ($request->has('custom_delete_file')) {
            $data['file'] = null;
        }
        if ($request->hasFile('file')) {
            $data['file'] = $this->moveFile($request->file('file'));
        }



        return $data;
    }
  
    /**
     * Moves the attached file to the server.
     *
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return string
     */
    protected function moveFile($file)
    {
        if (!$file->isValid()) {
            return '';
        }
        
        $path = config('codegenerator.files_upload_path', 'uploads');
        $saved = $file->store('public/' . $path, config('filesystems.default'));

        return substr($saved, 7);
    }
}
