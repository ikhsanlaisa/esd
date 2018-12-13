<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class TaskController extends Controller
{

    public function snake(){
        return view('Soal.snake');
    }

    public function rockpaperscsr(){
        return view('Soal.rockpaperscsr');
    }

    public function hideandseek(){
        return view('Soal.hideandseek');
    }

    public function storehideandseek(Request $request){
        if($request->input('flag') == "esd{hideandseek}"){
            return redirect('/highlight');
        }return redirect('/hideandseek')->with(['message' => 'Jawaban Salah']);
    }

    public function highlight(){
        return view('Soal.highlight');
    }

    public function storehighlight(Request $request){
        if($request->input('flag') == "esd{color_visible_but_invisible}"){
            return redirect('/secretimage');
        }return redirect('/highlight')->with(['message' => 'Jawaban Salah']);
    }

    public function secretimage(){
        return view('Soal.secretimage');
    }

    public function storesecretimage(Request $request){
        if($request->input('flag') == "esd{kucingkeren}"){
            return redirect('/hex');
        }return redirect('/secretimage')->with(['message' => 'Jawaban Salah']);
    }

    public function hex(){
        return view('Soal.hex');
    }

    public function storehex(Request $request){
        if($request->input('flag') == "esd{#000000}"){
            return redirect('/abstrackwords');
        }return redirect('/hex')->with(['message' => 'Jawaban Salah']);
    }

    public function abstrackwords(){
        return view('Soal.abstrackwords');
    }

    public function storeabstrackwords(Request $request){
        if($request->input('flag') == "esd{peniti}"){
            return redirect('/binary');
        }return redirect('/abstrackwords')->with(['message' => 'Jawaban Salah']);
    }

    public function binary(){
        return view('Soal.binary');
    }

    public function storebinary(Request $request){
        if($request->input('flag') == "esd{soal_binary}"){
            return redirect('/convert13');
        }return redirect('/binary')->with(['message' => 'Jawaban Salah']);
    }

    public function convert13(){
        return view('Soal.convert13');
    }

    public function storeconvert13(Request $request){
        if($request->input('flag') == "esd{soalkesembilan}"){
            return redirect('/soalbonus');
        }return redirect('/convert13')->with(['message' => 'Jawaban Salah']);
    }

    public function soalbonus(){
        return view('Soal.soalbonus');
    }

    public function storesoalbonus(Request $request){
        if($request->input('flag') == "esd{takterlihatkan}"){
            return redirect('/abstrackwords2');
        }return redirect('/soalbonus')->with(['message' => 'Jawaban Salah']);
    }

    public function abstrackwords2(){
        return view('Soal.abstrackwords2');
    }

    public function storeabstrackwords2(Request $request){
        if($request->input('flag') == "esd{nomorsebelas}"){
            return redirect('/binary');
        }return redirect('/abstrackwords2')->with(['message' => 'Jawaban Salah']);
    }
}
