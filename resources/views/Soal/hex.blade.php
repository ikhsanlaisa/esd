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
                                            <strong style="margin-left: 15px;">Teka Teki 6</strong>
                                        </h4>
                                        <p style="margin-left: 15px;">Perhatikan Warnanya</p>
                                        <div class="" style="background-color:black;">
                                            <label for="" style="color:black">Warna apa ya ?</label>
                                        </div>
                                        <label for="" style="color:black; margin-left: 15px">Clue Tambahan : Hex</label>
                                        <form action="/postsoal6" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <div class="input-group-prepend col-6">
                                                    <input type="text" class="form-control" style="margin-top: 5px" placeholder="format jawab esd{jawaban}" aria-label="Flag" name="flag">
                                                </div>
                                            </div>
                                            <button style="margin-top: 15px;margin-left: 15px;"
                                                    class="btn waves-effect waves-light btn-outline-success">Submit<i
                                                        class="ml-2 ti-control-forward"></i></button>
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
