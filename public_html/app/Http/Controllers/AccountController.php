<?php

namespace App\Http\Controllers;

use App\Bascet;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{

    public function account()
    {
        $id= Auth::id();
        $date = User::where('id',$id)->get();
        return view('account',compact('date'));
    }
    public function pas(Request $request)
    {
        $request->validate([
            'pas' => ['required', 'string', 'min:8'],
            'new_pas' => ['required', 'string', 'min:8'],
            'new_pas_repeat' => ['required', 'string', 'min:8'],
        ]);

        $pas = $request->get("pas");
        $new_pas = $request->get("new_pas");
        $rep_pas = $request->get("new_pas_repeat");
        $email = Auth::user()->email;


        if (Auth::attempt(array('email' => $email, 'password' => $pas)))
        {
            $id= Auth::id();
            if($new_pas==$rep_pas){
                $password = Hash::make($new_pas);
                User::where('id', '=', $id)->update(['password' => $password]);
                $id= Auth::id();
                $date = User::where('id',$id)->get();
                return view('account',compact('date'));

            }
        }
    }
    public function inf(Request $request)
    {
        $id= Auth::id();
        $date = User::where('id',$id)->get();
        $name = $request->get("firm-name");
        $tel = $request->get("tel");
        $adr = $request->get("adr");
        $email = $request->get("email");
        foreach ($date as $d) {
            if (is_null($name)) {
                $name = $d->name;
            }
            if (is_null($tel)) {
                $tel = $d->tel_number;
            }
            if (is_null($adr)) {
                $adr = $d->adress;
            }
            if (is_null($email)) {
                $email = $d->email;
            }
        }
        User::where('id', '=', $id)->update(['name' => $name,'tel_number' => $tel,'email' => $email,
            'adress' => $adr]);
        $date = User::where('id',$id)->get();
        return view('account',compact('date'));
    }

}
