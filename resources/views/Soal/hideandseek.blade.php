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
                                            <strong style="margin-left: 15px">Teka Teki 3</strong>
                                        </h4>
                                        <p class="card-text" style="margin-left: 15px">
                                            Periksa Semua Elemen pada halaman ini
                                        </p>
                                        <form action="/postsoal3" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <div class="input-group-prepend col-6">
                                                    <input type="text" class="form-control" placeholder="format jawab esd{jawaban}" aria-label="Flag" name="flag">
                                                </div>
                                            </div>
                                            <button style="margin-top: 15px; margin-left: 15px" class="btn waves-effect waves-light btn-outline-success">Submit<i class="ml-2 ti-control-forward"></i></button>
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
    <h2 style="visibility:hidden">hideandseek</h2>
@endsection
