<?php

namespace App\Http\Controllers;

use App\Bascet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Mail;

class NewRequestController extends Controller
{
    public static function index(Request $request)
    {
        $request->validate([
            'tel' => ['required', 'size:11'],
            'email' => ['email'],
        ]);


        $adress =$request->get("adress");
        $email =$request->get("email");
        $tel =$request->get("tel");
        $comment =$request->get("comment");
        $sum=$request->get("sum");
        $c_id= Auth::id();
        if (is_null($comment)){
           $comment="нет комментария";
        }
       $id_req = DB::table('requests')->insertGetId(
           [
               'c_id' => $c_id,
               'b_sum' => $sum,
               'r_note' => $comment,
               'r_adress' => $adress,
               'r_mail' => $email,
               'r_te' => $tel,
           ]);

        $id= Auth::id();
        $product = Bascet::where('c_id',$id)->where('status_id', 1)->get();


        foreach ($product as $prod){
            $id_prod_iz_corz =$prod->id;
            $c_id_prod_iz_corz =$prod->c_id;
            Bascet::where('id',$id_prod_iz_corz )->where('c_id', $c_id_prod_iz_corz)
                ->where('status_id', 1)->update(['status_id' => 2,'r_id'=>$id_req]);

        }

        $data = [
            'id' => $id
        ];
        Mail::send('mail',$data, function ($m) {
            $m->from('darapana31@mail.ru', 'Sender');
            $m->to('harlamov1969@list.ru', 'Receiver')->subject('Тестовое письмо с HTML');
        });

        return view('zak_of');
    }
}
