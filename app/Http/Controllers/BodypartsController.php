<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Bodypart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Exception;

class BodypartsController extends Controller
{

    /**
     * Display a listing of the bodyparts.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $bodyparts = Bodypart::with('creator','updater')->paginate(25);

       /* return view('content.editor', compact('bodyparts'));*/

        return view('bodyparts.index', compact('bodyparts'));
    }

    /**
     * Show the form for creating a new bodypart.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $creators = User::pluck('name','id')->all();
$updaters = User::pluck('name','id')->all();
        
        return view('bodyparts.create', compact('creators','updaters'));
    }

    /**
     * Store a new bodypart in the storage.
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
            Bodypart::create($data);

            return redirect()->route('bodyparts.bodypart.index')
                             ->with('success_message', 'Bodypart was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified bodypart.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $bodypart = Bodypart::with('creator','updater')->findOrFail($id);

        return view('bodyparts.show', compact('bodypart'));
    }

    /**
     * Show the form for editing the specified bodypart.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $bodypart = Bodypart::findOrFail($id);
        $creators = User::pluck('name','id')->all();
$updaters = User::pluck('name','id')->all();

        return view('bodyparts.edit', compact('bodypart','creators','updaters'));
    }

    /**
     * Update the specified bodypart in the storage.
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
            $bodypart = Bodypart::findOrFail($id);
            $bodypart->update($data);

            return redirect()->route('bodyparts.bodypart.index')
                             ->with('success_message', 'Bodypart was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified bodypart from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $bodypart = Bodypart::findOrFail($id);
            $bodypart->delete();

            return redirect()->route('bodyparts.bodypart.index')
                             ->with('success_message', 'Bodypart was successfully deleted!');

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
            'name' => 'nullable|string|min:0|max:50',
            'created_by' => 'nullable',
            'updated_by' => 'nullable',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
