<?php

namespace App\Http\Controllers;

use App\Models\Bodypart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $users = User::findOrFail(auth()->id());
        return view('content.user', compact('users'));
    }


    public function edit(User $user)
    {
        /*$user = Auth::user();*/
        /*return view('users.edit', compact('user'));*/


        $users = User::findOrFail(auth()->id());
        return view('content.user', compact('users'));
    }

    public function update(User $user)
    {


        $this->validate(\request(), [
            /*'name' => 'required',
            //  'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'*/
            'name' => ['required','string','max:255'],
            'email' => ['required','string','max:255'],
            'password' => ['required','string','min:6','confirmed'],
            'street' => ['required','string','max:255'],
            'number' => ['required','max:11'],
            'zip' => ['required','max:11'],
            'city' => ['required','string','max:255'],
            'country' => ['required','string','max:255'],
        ]);


        $users = User::findOrFail(auth()->id());
        $users->fill(\request()->all());
        $users->password = Hash::make(\request('password'));
        $users->save();

            return back()->with('success_message', 'Information was successfully saved!');;


        }


    public function editAdress(User $user)
    {
        /*$user = Auth::user();*/
        /*return view('users.edit', compact('user'));*/


        $users = User::findOrFail(auth()->id());
        $cart = Session::get("cart");
        return view('content.checkout', compact('users', 'cart'));
    }


    public function updateAdress(User $user)
    {


        $this->validate(\request(), [
            /*'name' => 'required',
            //  'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'*/
            'street' => ['required','string','max:255'],
            'number' => ['required','max:11'],
            'zip' => ['required','max:11'],
            'city' => ['required','string','max:255'],
            'country' => ['required','string','max:255'],
        ]);


        $users = User::findOrFail(auth()->id());
        $users->fill(\request()->all());
        $users->save();

        return back()->with('success_message', 'Adress was successfully saved!');;


    }

    public function postAdress(Request $request) {
        /*Session::forget("cart")[$request->del_key];*/
        if($request->warenkorb_del == "set") {
            $updateCart = Session::get("cart");
            unset($updateCart[$request->del_key]);
            Session::put("cart", $updateCart);
            Session::save();
        }

        $order = new Order();

        foreach(Session::get("cart") as $key => $item) {
            foreach ($item as $bodypart_id => $brick):
                $bodypart = Bodypart::find($bodypart_id);
                $isPlural = substr($bodypart->name, -1);
                $isPlural = ($isPlural == "s") ? true : false;
                $bodypart = ($isPlural) ? $bodypart->name . "_id" : $bodypart->name . "s_id";
                $order->$bodypart = $brick["id"];
            endforeach;
        }
        $order->users_id = Auth::user()->id;
        $order->save();
        return redirect()->to("/checkout/success")->with("success", "Successfully ordered!");


    }

   /* public function showMyOrders()
    {
        $myOrders= Order::findOrFail(auth()->id());



        return view('content.myOrders', compact('myOrders'));
    }*/

}