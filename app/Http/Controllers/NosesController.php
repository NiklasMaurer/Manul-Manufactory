<?php

namespace App\Http\Controllers;

use App\Models\Nose;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class NosesController extends Controller
{

    /**
     * Display a listing of the noses.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $noses = Nose::paginate(25);

        return view('noses.index', compact('noses'));
    }

    /**
     * Show the form for creating a new nose.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('noses.create');
    }

    /**
     * Store a new nose in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Nose::create($data);

            return redirect()->route('noses.nose.index')
                             ->with('success_message', 'Nose was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified nose.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $nose = Nose::findOrFail($id);

        return view('noses.show', compact('nose'));
    }

    /**
     * Show the form for editing the specified nose.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $nose = Nose::findOrFail($id);
        

        return view('noses.edit', compact('nose'));
    }

    /**
     * Update the specified nose in the storage.
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
            
            $nose = Nose::findOrFail($id);
            $nose->update($data);

            return redirect()->route('noses.nose.index')
                             ->with('success_message', 'Nose was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified nose from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $nose = Nose::findOrFail($id);
            $nose->delete();

            return redirect()->route('noses.nose.index')
                             ->with('success_message', 'Nose was successfully deleted!');

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
            'name' => 'nullable|string|min:0|max:100',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
