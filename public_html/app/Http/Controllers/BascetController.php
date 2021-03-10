<?php

namespace App\Http\Controllers;

use App\Bascet;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BascetController extends Controller
{
    public function index()
    {
        $id= Auth::id();
        $sum = Bascet::where('c_id',$id)->where('status_id', 1)->get()->sum('b_sum');
        $product = Bascet::where('c_id',$id)->where('status_id', 1)->get();

        return view('basket',compact('product','sum'));

    }
    public static function upd(Request $request)
    {

        $request->validate([
            'kol' => ['required', 'between:1,10000', 'numeric',],
        ]);

        $id = $request->get("id");

        $kol = $request->get("kol");

        $pr = $request->get("sum");
        $sum=$kol *$pr;
        Bascet::where('id', '=', $id)->update(['b_quantity' => $kol,'b_sum' => $sum]);

        $id= Auth::id();
        $product = Bascet::where('c_id',$id)->where('status_id', 1)->get();
        $sum = Bascet::where('c_id',$id)->where('status_id', 1)->get()->sum('b_sum');
        return view('basket',compact('product','sum'));


    }
    public function del(Request $id) {
        $idi = $id->get("id");
        Bascet::where('id', '=', $idi)->delete();

        $id= Auth::id();
        $product = Bascet::where('c_id',$id)->where('status_id', 1)->get();
        $sum = Bascet::where('c_id',$id)->where('status_id', 1)->get()->sum('b_sum');
        return view('basket',compact('product','sum'));
    }

}
