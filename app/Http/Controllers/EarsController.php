<?php

namespace App\Http\Controllers;

use App\Models\Ear;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class EarsController extends Controller
{

    /**
     * Display a listing of the ears.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $ears = Ear::paginate(25);

        return view('ears.index', compact('ears'));
    }

    /**
     * Show the form for creating a new ear.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('ears.create');
    }

    /**
     * Store a new ear in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Ear::create($data);

            return redirect()->route('ears.ear.index')
                             ->with('success_message', 'Ear was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified ear.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $ear = Ear::findOrFail($id);

        return view('ears.show', compact('ear'));
    }

    /**
     * Show the form for editing the specified ear.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $ear = Ear::findOrFail($id);
        

        return view('ears.edit', compact('ear'));
    }

    /**
     * Update the specified ear in the storage.
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
            
            $ear = Ear::findOrFail($id);
            $ear->update($data);

            return redirect()->route('ears.ear.index')
                             ->with('success_message', 'Ear was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified ear from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $ear = Ear::findOrFail($id);
            $ear->delete();

            return redirect()->route('ears.ear.index')
                             ->with('success_message', 'Ear was successfully deleted!');

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
