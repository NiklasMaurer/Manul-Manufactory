<?php

namespace App\Http\Controllers;

use App\Models\Eye;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class EyesController extends Controller
{

    /**
     * Display a listing of the eyes.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $eyes = Eye::paginate(25);

        return view('eyes.index', compact('eyes'));
    }

    /**
     * Show the form for creating a new eye.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('eyes.create');
    }

    /**
     * Store a new eye in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Eye::create($data);

            return redirect()->route('eyes.eye.index')
                             ->with('success_message', 'Eye was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified eye.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $eye = Eye::findOrFail($id);

        return view('eyes.show', compact('eye'));
    }

    /**
     * Show the form for editing the specified eye.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $eye = Eye::findOrFail($id);
        

        return view('eyes.edit', compact('eye'));
    }

    /**
     * Update the specified eye in the storage.
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
            
            $eye = Eye::findOrFail($id);
            $eye->update($data);

            return redirect()->route('eyes.eye.index')
                             ->with('success_message', 'Eye was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified eye from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $eye = Eye::findOrFail($id);
            $eye->delete();

            return redirect()->route('eyes.eye.index')
                             ->with('success_message', 'Eye was successfully deleted!');

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
