@extends('layouts.mains')
@section('title', 'Rock Paper Scissors Game')
@section('content')
    <header>
        <h1>Rock Paper Scissors</h1>
    </header>
    <div class="score-board">
        <div id="user-label" class="badge">user</div>
        <div id="comp-label" class="badge">comp</div>
        <span id="user-score">0</span>:<span id="comp-score">0</span>
    </div>

    <div class="result">
        <p>Paper covers rock. You win!</p>
    </div>

    <div class="choices">
        <div class="choice" id="r">
            <img src="{{asset('image/Rock.png')}}" alt="">
        </div>
        <div class="choice" id="p">
            <img src="{{asset('image/Paper.png')}}" alt="">
        </div>
        <div class="choice" id="s">
            <img src="{{asset('image/Scissors.png')}}" alt="">
        </div>
    </div>

    <p id="action-message">Make your move.</p>
    <script src="{{asset('js/apps.js')}}" charset="utf-8"></script>
@endsection
