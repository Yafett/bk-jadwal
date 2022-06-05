<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        .contenedor {
            height: 100%;
            padding: 5% 0;
        }

        h1 {
            color: #FCFBFA;
        }

        .container_foto {
            background-color: rgba(57, 62, 93, 0.7);
            padding: 0;
            overflow: hidden;
            max-width: 350px;
            margin: 5px;
        }

        .container_foto article {
            padding: 10%;
            position: absolute;
            bottom: 0;
            z-index: 1;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        .container_foto h2 {
            color: #fff;
            font-weight: 800;
            font-size: 25px;
            border-bottom: #fff solid 1px;
        }

        .container_foto h4 {
            font-weight: 300;
            color: #fff;
            font-size: 16px;
        }

        .container_foto img {
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0.4;
            -webkit-transition: all 4s ease;
            -moz-transition: all 4s ease;
            -o-transition: all 4s ease;
            -ms-transition: all 4s ease;
            transition: all 4s ease;
        }

        .ver_mas {
            background-color: #e1e7f6;
            position: absolute;
            width: 100%;
            height: 70px;
            bottom: 0;
            z-index: 1;
            opacity: 0;
            transform: translate(0px, 70px);
            -webkit-transform: translate(0px, 70px);
            -moz-transform: translate(0px, 70px);
            -o-transform: translate(0px, 70px);
            -ms-transform: translate(0px, 70px);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .ver_mas span {
            font-size: 40px;
            color: #fff;
            position: relative;
            margin: 0 auto;
            width: 100%;
            top: 13px;
        }


        /*hovers*/

        .container_foto:hover {
            cursor: pointer;
        }

        .container_foto:hover img {
            opacity: 0.1;
            transform: scale(1.5);
        }

        .container_foto:hover article {
            transform: translate(2px, -69px);
            -webkit-transform: translate(2px, -69px);
            -moz-transform: translate(2px, -69px);
            -o-transform: translate(2px, -69px);
            -ms-transform: translate(2px, -69px);
        }

        .container_foto:hover .ver_mas {
            transform: translate(0px, 0px);
            -webkit-transform: translate(0px, 0px);
            -moz-transform: translate(0px, 0px);
            -o-transform: translate(0px, 0px);
            -ms-transform: translate(0px, 0px);
            opacity: 1;
        }

        body {
            /* background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('image/smk.jpg');
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover; */
        }

    </style>

</head>

<body style="background-color: #e1e7f6; ">

    <a style="color : grey" class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <div class="jumbotron" style="text-align: center;background-color: #e1e7f6">
        <h1 class="display-4 " style="font-weight : 600;  margin-top : 10%; color : rgb(41, 41, 41)">RESERVASI ONLINE</h1>
        <p class="lead">
            Yuk atur jadwal konselingmu bersama konselor dibawah ini!
        </p>
     {{-- <a type="button" style="background-color:  #000000; color  : #fbfbfb" href="/murid/jadwal/bulina"
            class="btn mr-3">Bu Lina</a>
        <a type="button"  style="background-color:  #fbfbfb; color  : #000000 " href="/murid/jadwal/busarah" class="btn">Bu Sarah</a> --}}


        <p class="lead">

{{--
        <div class="card ml-auto"
            style="width: 17rem; background-color : #e1e7f6; border-color: #e1e7f6;  margin-right : 35%">
            <img class="card-img-top " style="margin-right: 10px;" src="{{ asset('image/bk.jpg') }}" alt="">
        </div>
        <div class="card ml-auto"
            style="width: 17rem; border-color:  #e1e7f6; background-color : #e1e7f6; margin-top : -14.8%; margin-right : 50%">
            <img class="card-img-top " style="margin-right: 10px;" src="{{ asset('image/bk.jpg') }}" alt="">
        </div> --}}

        </p>



        <div class="container-fluid contenedor text-center" style=" margin-left : 10%; margin-top : -5%">
            <div class=" container text-center">

                <div style="height: 400px; width : 250px; margin-left : 15%;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto " href="/murid/jadwal/busarah">
                    <div class="ver_mas text-center">
                        <span class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-center">
                        <a class="text-white"  style="font-size: 16px; margin-left : 40px" href="/murid/jadwal/busarah">Sarah, S.Th; M.A.</a>
                        {{-- <h4>Descripción corta de la imagen en cuestión</h4> --}}
                    </article>
                    <img src="{{ asset('image/b.png') }}"  style="height: 465px;" href="/murid/jadwal/busarah"
                        alt="">
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto "  style=" margin-left : 40%; margin-top : -36.5%; height: 400px; width : 250px">
                    <div class="ver_mas text-center" style=" margin-right : 35%">
                        <span id="click" class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                        <a  href="/murid/jadwal/bulina" class="text-white"style="font-size: 16px">Martin Herlina, S.M.G; M.Pd.</a>

                        {{-- <h4>Descripción corta de la imagen en cuestión</h4> --}}
                    </article>
                    <img src="{{ asset('image/a.png') }}"  style="height: 465px;>
                </div>

            </div>
        </div>
    </div>
    </div>


    {{-- <div class="card ml-auto"
            style="width: 17rem; background-color : #e1e7f6; border-color: #e1e7f6; margin-right : 20%; margin-top: -18%;">
            <img class="card-img-top "
                style="margin-right: 10px;     border-top-left-radius: calc(7.25rem - 1px); border-bottom-right-radius: calc(7.25rem - 1px);"
                src="{{ asset('image/a.jpg') }}" alt="">
        </div>
        <div class="card ml-auto"
            style="width: 12rem; border-color:  #e1e7f6; background-color : #e1e7f6; margin-right : 10%; margin-top: -1%;">
            <img class="card-img-top "
                style="margin-right: 10px;     border-top-left-radius: calc(7.25rem - 1px); border-bottom-right-radius: calc(7.25rem - 1px);"
                src="{{ asset('image/a.jpg') }}" alt="">
        </div>
        </p> --}}
    </div>



    <div class="container h-100 text-center">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">

                <div class="d-flex justify-content-center" style="margin-top: 40%;">
                    {{-- <a type="button" href="/murid/jadwal/bulina" class="btn btn-outline-info mr-3">Bu Lina</a>
                    <a type="button" href="/murid/jadwal/busarah" class="btn btn-outline-success">Bu Sarah</a> --}}

                </div>

            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
