<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class ShoesController extends Controller
{

    /**
     * Display a listing of the shoes.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $shoes = Shoe::paginate(25);

        return view('shoes.index', compact('shoes'));
    }

    /**
     * Show the form for creating a new shoe.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('shoes.create');
    }

    /**
     * Store a new shoe in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Shoe::create($data);

            return redirect()->route('shoes.shoe.index')
                             ->with('success_message', 'Shoe was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified shoe.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $shoe = Shoe::findOrFail($id);

        return view('shoes.show', compact('shoe'));
    }

    /**
     * Show the form for editing the specified shoe.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $shoe = Shoe::findOrFail($id);
        

        return view('shoes.edit', compact('shoe'));
    }

    /**
     * Update the specified shoe in the storage.
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
            
            $shoe = Shoe::findOrFail($id);
            $shoe->update($data);

            return redirect()->route('shoes.shoe.index')
                             ->with('success_message', 'Shoe was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified shoe from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $shoe = Shoe::findOrFail($id);
            $shoe->delete();

            return redirect()->route('shoes.shoe.index')
                             ->with('success_message', 'Shoe was successfully deleted!');

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
