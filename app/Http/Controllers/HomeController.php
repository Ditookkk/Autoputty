<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class HomeController extends Controller
{
    public function ViewHome(){
        return view("home");
    }

    public function Autentikasi(Request $request){
        $dataInput = $request->all();
        $data=User::where('name',$request->uname)->where('password',$request->psw)->first();   
        // dd($dataInput, $request->uname,$data->email);
        if ($data == null){
            return redirect("/")->with(['warning' => 'Pesan Warning']);;
        }
        else {
            return redirect("homepage");
        }
    }
}
