@extends('layouts.main')

@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <center>
        <div class="carousel-inner" style="width: 90%; height: 70%">
            <div class="carousel-item active">
                <img src="{{asset('image/test.jpg')}}" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/test1.jpg')}}" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/test2.jpg')}}" alt="New York" width="1100" height="500">
            </div>
        </div>
            </center>


            <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="container" style="margin-top: 30px">
        <center><h3>Our Work</h3></center>
        <div class="row">
            <div class="col-sm-4 py-2">
                <div class="card h-50 text-white bg-danger">
                    <div class="card-body">
                        <h3 class="card-title">Video Interview</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-outline-light" data-toggle="modal" data-target="#myModal">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 py-2">
                <div class="card h-50 text-white bg-danger">
                    <div class="card-body">
                        <h3 class="card-title">Novel</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-outline-light" data-toggle="modal" data-target="#myModal3">Chapter 1</a>
                        <a href="#" class="btn btn-outline-light" data-toggle="modal" data-target="#myModal4">Chapter 2</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 py-2">
                <div class="card h-50 text-white bg-danger">
                    <div class="card-body">
                        <h3 class="card-title">POSTER & VIDEO CAMPAIGN</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-outline-light" data-toggle="modal" data-target="#myModal1">Video</a>
                        <a href="#" class="btn btn-outline-light" data-toggle="modal" data-target="#myModal2">Poster</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 30px">
        <center><h3>Our Team</h3></center>
        <div class="row">
            <div class="col-sm-4 py-2">
                <div class="card h-20 text-white bg-danger">
                    <img class="card-img-top" src="{{asset('image/umam.jpg')}}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h3 class="card-title">Khaerul Umam</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 py-2">
                <div class="card h-20 text-white bg-danger">
                    <img class="card-img-top" src="{{asset('image/umam.jpg')}}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h3 class="card-title">Muhamad Ikhsan Laisa</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 py-2">
                <div class="card h-20 text-white bg-danger">
                    <img class="card-img-top" src="{{asset('image/umam.jpg')}}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h3 class="card-title">Yoel Febrian Tampubolon</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Video Interview</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://youtu.be/inty9rZZql8" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal3">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Chapter 1</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 py-3">
                            <div class="card h-20 text-white bg-danger">
                                <div class="card-body">
                                <p>Sebuah kisah mengenai Arif, Seorang chicken secret
                                    admirer dan plin plan yang menyukai Inez sejak kelas
                                    dua SMA. Ajakan taruhan mencari pasangan dari Andi
                                    akhirnya merubah hidupnya untuk selamanya, karena
                                    ternyata Andi mengincar wanita yang sama. Konflik makin
                                    membingungkan ketika ternyata Arif malah mendekati Kirana
                                    yang tak lain tak bukan sahabat Inez. Hal ini memicu
                                    konflik lain dengan mantan Kirana yaitu Rio. Mungkinkah
                                    pengalaman masa lalunya dengan Raisa membuka takbir masa
                                    depan kelanjutan cintanya? Ataukah sahabat dekatnya, Indi
                                    yang membimbinya menuju ke penantian cinta tak berbalasnya?
                                </p>
                                    <a href="/chapter1" class="btn btn-outline-light">Read Online</a>
                                    <a href="#" class="btn btn-outline-light" >Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card h-20 text-white bg-danger">
                                <img class="card-img-top" src="{{asset('image/cover1.png')}}" alt="Card image" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal4">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Chapter 2</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 py-3">
                            <div class="card h-20 text-white bg-danger">
                                <div class="card-body">
                                    <p>Sebuah kisah mengenai Arif, Seorang chicken secret
                                        admirer dan plin plan yang menyukai Inez sejak kelas
                                        dua SMA. Ajakan taruhan mencari pasangan dari Andi
                                        akhirnya merubah hidupnya untuk selamanya, karena
                                        ternyata Andi mengincar wanita yang sama. Konflik makin
                                        membingungkan ketika ternyata Arif malah mendekati Kirana
                                        yang tak lain tak bukan sahabat Inez. Hal ini memicu
                                        konflik lain dengan mantan Kirana yaitu Rio. Mungkinkah
                                        pengalaman masa lalunya dengan Raisa membuka takbir masa
                                        depan kelanjutan cintanya? Ataukah sahabat dekatnya, Indi
                                        yang membimbinya menuju ke penantian cinta tak berbalasnya?
                                    </p>
                                    <a href="/chapter2" class="btn btn-outline-light">Read Online</a>
                                    <a href="#" class="btn btn-outline-light">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card h-20 text-white bg-danger">
                                <img class="card-img-top" src="{{asset('image/cover2.png')}}" alt="Card image" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Video Campaign</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://youtu.be/inty9rZZql8" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Our Poster</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                    <div class="col-sm-4 py-2">
                        <div class="card h-20 text-white bg-danger">
                            <img class="card-img-top" src="{{asset('image/Kampanye.png')}}" alt="Card image" style="width:100%">
                        </div>
                    </div>
                    <div class="col-sm-4 py-2">
                        <div class="card h-20 text-white bg-danger">
                            <img class="card-img-top" src="{{asset('image/umam.jpg')}}" alt="Card image" style="width:100%">
                        </div>
                    </div>
                    <div class="col-sm-4 py-2">
                        <div class="card h-20 text-white bg-danger">
                            <img class="card-img-top" src="{{asset('image/umam.jpg')}}" alt="Card image" style="width:100%">
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
@endsection