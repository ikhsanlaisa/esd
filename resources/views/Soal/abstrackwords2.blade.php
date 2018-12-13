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
                                            <strong style="margin-left: 15px;">Teka Teki 11</strong>
                                        </h4>
                                        <p style="margin-left: 15px;">Temukan Clue pada Tumpukan Jerami</p>
                                        <p style="margin-left: 15px;">.muspI meroL fo snoisrev gnidulcni rekaMegaP sudlA
                                            ekil erawtfos gnihsilbup potksed htiw yltnecer erom dna ,segassap muspI
                                            meroL gniniatnoc steehs tesarteL fo esaeler eht htiw s0691 eht ni
                                            desiralupop saw tI .degnahcnu yllaitnesse gniniamer ,gnittesepyt cinortcele
                                            otni pael eht osla tub ,seirutnec evif ylno ton devivrus sah tI .koob
                                            nemiceps epyt a ekam ot ti delbmarcs dna epyt fo yellag a koot retnirp
                                            nwonknu na nehw ,s0051 eht ecnis reve txet ymmud dradnats s'yrtsudni eht
                                            neeb sah muspI meroL .yrtsudni gnittesepyt dna gnitnirp eht peniti muspI
                                            meroL.muspI meroL fo snoisrev gnidulcni gunakan ekil erawtfos gnihsilbup
                                            potksed htiw converter erom dna ,segassap muspI meroL gniniatnoc steehs
                                            tesarteL fo esaeler eht htiw s0691 eht ni desiralupop saw tI .degnahcnu
                                            yllaitnesse gniniamer ,gnittesepyt cinortcele otni pael eht osla tub
                                            ,seirutnec evif ylno ton devivrus sah tI .koob nemiceps epyt a ekam ot ti
                                            delbmarcs dna epyt fo yellag a koot retnirp nwonknu na nehw ,s0051 eht ecnis
                                            reve txet ymmud dradnats base64 neeb sah muspI meroL .yrtsudni gnittesepyt
                                            dna gnitnirp eht fo txet ymmud ylpmis si muspI meroL</p>
                                        <p style="margin-left: 15px">bm9tb3J0dWp1aA== | Base</p>
                                        <form action="/postsoal11" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <div class="input-group-prepend col-6">
                                                    <input type="text" class="form-control" style="margin-top: 5px"
                                                           placeholder="format jawab esd{jawaban}" aria-label="Flag"
                                                           name="flag">
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
