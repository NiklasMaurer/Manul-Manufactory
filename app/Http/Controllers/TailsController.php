<?php

namespace App\Http\Controllers;

use App\Models\Tail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class TailsController extends Controller
{

    /**
     * Display a listing of the tails.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $tails = Tail::paginate(25);

        return view('tails.index', compact('tails'));
    }

    /**
     * Show the form for creating a new tail.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('tails.create');
    }

    /**
     * Store a new tail in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Tail::create($data);

            return redirect()->route('tails.tail.index')
                             ->with('success_message', 'Tail was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified tail.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $tail = Tail::findOrFail($id);

        return view('tails.show', compact('tail'));
    }

    /**
     * Show the form for editing the specified tail.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $tail = Tail::findOrFail($id);
        

        return view('tails.edit', compact('tail'));
    }

    /**
     * Update the specified tail in the storage.
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
            
            $tail = Tail::findOrFail($id);
            $tail->update($data);

            return redirect()->route('tails.tail.index')
                             ->with('success_message', 'Tail was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified tail from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $tail = Tail::findOrFail($id);
            $tail->delete();

            return redirect()->route('tails.tail.index')
                             ->with('success_message', 'Tail was successfully deleted!');

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
