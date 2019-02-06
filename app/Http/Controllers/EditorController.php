<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Bodypart;
use App\Models\Brick;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Exception;

class EditorController extends Controller
{
    public function index()
    {
        $bodyparts = Bodypart::with('creator','updater')->get();

        $bricks = Brick::with('bodypart')->get();

        $imgsrc = '/1-standard.png';


        return view('content.editor', compact('bodyparts', 'bricks', 'imgsrc'));



       /* return view('content.editor', compact('bricks'));*/

        /*return view('bodyparts.index', compact('bodyparts'));*/
    }

    /**
     * @param Request $request
     */

    public function editorPost(Request $request) {

        $cart = json_decode($request->cart, true);



   /*     for ($i = 1; $i<= count($cart); $i++) {
            echo $cart[$i]['name'];
        }*/



       //foreach($cart as $key => $items):
       // foreach($cart as $item):




            /*dd($key);*/
     /*   $name = Bodypart::with($items);*/
            /*$cart[$name->name] = $item;*/

        /*$name = Brick::with($item);
        $test = Bodypart::with($item);

        dd($test, $name );





        endforeach;*/


        /*dd($cart);*/

       // endforeach;

        return redirect()->to('/cart')->with(['cart' => $cart]);

/*        return redirect()->route('Merchant view')->with( ['merchant' => $merchant] );*/

       // return view('content.cart', compact('cart'));

    }


}