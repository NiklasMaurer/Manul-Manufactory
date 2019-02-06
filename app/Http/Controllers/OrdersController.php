<?php

namespace App\Http\Controllers;

use App\User;

use App\Models\Ear;
use App\Models\Eye;

use App\Models\Nose;
use App\Models\Tail;
use App\Models\Shoe;
use App\Models\Order;
use App\Models\Mouth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Exception;

class OrdersController extends Controller
{

    /**
     * Display a listing of the orders.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $orders = Order::with('user','ear','eye','nose','mouth','tail','shoe','creator','updater')->paginate(25);

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new order.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();
        $ears = Ear::pluck('name','id')->all();
        $eyes = Eye::pluck('name','id')->all();
        $noses = Nose::pluck('name','id')->all();
        $mouths = Mouth::pluck('name','id')->all();
        $tails = Tail::pluck('name','id')->all();
        $shoes = Shoe::pluck('name','id')->all();
        $creators = User::pluck('name','id')->all();
        $updaters = User::pluck('name','id')->all();
        
        return view('orders.create', compact('users','ears','eyes','noses','mouths','tails','shoes','creators','updaters'));
    }

    /**
     * Store a new order in the storage.
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
            Order::create($data);

            return redirect()->route('orders.order.index')
                             ->with('success_message', 'Order was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified order.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $order = Order::with('user','ear','eye','nose','mouth','tail','shoe','creator','updater')->findOrFail($id);

        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified order.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $users = User::pluck('name','id')->all();
        $ears = Ear::pluck('name','id')->all();
        $eyes = Eye::pluck('name','id')->all();
        $noses = Nose::pluck('name','id')->all();
        $mouths = Mouth::pluck('name','id')->all();
        $tails = Tail::pluck('name','id')->all();
        $shoes = Shoe::pluck('name','id')->all();
        $creators = User::pluck('name','id')->all();
        $updaters = User::pluck('name','id')->all();

        return view('orders.edit', compact('order','users','ears','eyes','noses','mouths','tails','shoes','creators','updaters'));
    }

    /**
     * Update the specified order in the storage.
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
            $order = Order::findOrFail($id);
            $order->update($data);

            return redirect()->route('orders.order.index')
                             ->with('success_message', 'Order was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified order from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $order = Order::findOrFail($id);
            $order->delete();

            return redirect()->route('orders.order.index')
                             ->with('success_message', 'Order was successfully deleted!');

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
            'users_id' => 'required',
            'ears_id' => 'required',
            'eyes_id' => 'required',
            'noses_id' => 'required',
            'mouths_id' => 'required',
            'tails_id' => 'required',
            'shoes_id' => 'required',
            'created_by' => 'nullable',
            'updated_by' => 'nullable',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
