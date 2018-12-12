<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class TaskController extends Controller
{
    public function soal1(){
        return view('Soal.soal1');
    }

    public function postsoal1(Request $request){
        if($request->input('soal1') == "esd{soal_binary}"){
            return redirect('/soal2');
        }return redirect('/soal1')->with(['message' => 'Jawaban Salah']);
    }

    public function soal2(){
        return view('Soal.soal2');
    }

    public function postsoal2(Request $request){
        if($request->input('soal2') == "esd{color_visible_but_invisible}"){
            return redirect('/soal3');
        }return redirect('/soal2')->with(['message' => 'Jawaban Salah']);
    }

    public function soal3(Request $request){
//        Cookie::make('hello', 'esd{jawabannya_cookie}', 360);
        $data = $request->session()->put('flag', 'esd{jawabannya_cookie}');
        return view('Soal.soal3', compact('data'));
    }
}
