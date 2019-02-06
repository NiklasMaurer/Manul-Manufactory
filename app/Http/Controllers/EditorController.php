<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Bodypart;
use App\Models\Brick;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class EditorController extends Controller
{
    public function index()
    {
        $bodyparts = Bodypart::with('creator','updater')->get();

        $bricks = Brick::with('bodypart')->get();

        $imgsrc = '/1-standard.png';



        return view('content.editor', compact('bodyparts', 'bricks', 'imgsrc'));
    }

    /**
     * @param Request $request
     */

    public function editorPost(Request $request) {
        /*Cookie::queue("cart", json_decode($request->cart, true), time() + 10 * 60);*/
        $cart = json_decode($request->cart, true);

        Session::push("cart", $cart);
        Session::save();

        return redirect()->to('/cart');

    }


}