@extends('layouts.main')
@section('content')
    <div class="page-wrapper" style="display: block; margin-top: 15px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-warning">
                                    <p>{{ Session::get('message') }}</p>
                                </div>
                            @endif
                            <div class="row">
                                <div class="card col-12">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <strong>Soal 2</strong>
                                        </h4>
                                        <p>Ini jawabannya buat kamu <span style="color: #ffffff">esd{color_visible_but_invisible}</span>
                                        </p>
                                        <div class="alert alert-success" id="hint">Hint! :
                                            <ul>
                                                <li>Lihat Soalnya.. Benar-Benar perhatikan Soalnya</li>
                                            </ul>
                                        </div>
                                        <form action="/postsoal2" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <input type="text" class="form-control" placeholder="Flag" aria-label="Flag" name="soal2">
                                                </div>
                                            </div>
                                            <button style="margin-top: 15px" class="btn waves-effect waves-light btn-outline-success">Submit<i class="ml-2 ti-control-forward"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
