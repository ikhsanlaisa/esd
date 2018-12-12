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
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <strong>Soal 1</strong>
                                        </h4>
                                        <p>
                                            <a href="https://id.wikipedia.org/wiki/Sistem_bilangan_biner">Binary</a> merupakan sistem bilangan basis 2 atau disusun oleh 2 element yaitu 0 dan 1,
                                            anda dapat menggunakan bantuan Tools online untuk menterjemahkan kumpulan binary berikut ini.
                                        </p>
                                        <p>01100101 01110011 01100100 01111011 01110011 01101111 01100001 01101100 01011111
                                            01100010 01101001 01101110 01100001 01110010 01111001 01111101
                                        </p>
                                        <form action="/postsoal1" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <input type="text" class="form-control" placeholder="Flag" aria-label="Flag" name="soal1">
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
