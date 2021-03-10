<?php

namespace App\Http\Controllers;

use App\Events\onChooseProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class KatalogController extends Controller
{

    public function tep()
    {
        $product = Product::paginate(4);
        return view('katalog',compact('product'));

    }
    public function search(Request $request)
    {
        $value = $request->get("search");
        $valu = '%'.$value.'%';
        $product = Product::where('p_name','like',$valu)->paginate(4);

        return view('katalog',compact('product'));

    }
    public static function add_bas(Request $request)
    {

        $name = $request->get("name");
        $p_id = $request->get("p_id");
        $p_price = $request->get("p_price");
        $c_id= Auth::id();
        $unit_id = $request->get("unit_id");
        event(new onChooseProduct(  $name,$p_id,1,$p_price,$p_price,
            $c_id,1,null,$unit_id));

        $utente = new Product();
        $product = $utente::paginate(4);
        return view('katalog',compact('product'));

    }
    public function sous()
    {
        $product = Product::where('scat_id',4)->paginate(4);
        return view('katalog',compact('product'));

    }
    public function fish()
    {
        $product = Product::where('scat_id',1)->paginate(4);
        return view('katalog',compact('product'));

    }
    public function meet()
    {
        $product = Product::where('scat_id',2)->paginate(4);
        return view('katalog',compact('product'));

    }
    public function peas()
    {
        $product = Product::where('scat_id',3)->paginate(4);
        return view('katalog',compact('product'));

    }

}
