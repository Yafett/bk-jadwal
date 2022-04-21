<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Offcanvas template · Bootstrap v4.6</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">




    <!-- Bootstrap core CSS -->
    <link href="/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
</head>

<body >
    {{-- <body style="background-color: #41a5f7"> --}}
    @php
        function tgl_indo($tanggal)
        {
            $bulan = [
                1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];
            $pecahkan = explode('-', $tanggal);
            // variabel pecahkan 0 = tahun
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tanggal
            return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
        }
    @endphp


    <main role="main" class="container">

        <div class="display-4" style="margin-bottom: 5%; margin-top: 5%;">
            <a href="{{ route('murid.home')}}" style="color: black"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
               </svg></a> Jadwal Bimbingan Konseling
         </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Senin</h6>

            @if (!$senin->isEmpty())
                @foreach ($senin as $s)

                        <div class="media text-muted pt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                        class="bi bi-calendar mr-2" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>

                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark">{{ tgl_indo($s->tanggal) }} </strong>

                                    @if ($s->status == 'a')

                                    <a href="/murid/ikuti/{{ $s->id_jadwal }}" style="text-decoration : none">Ikuti</a>
                                    @else

                                    <a href="#" style="color : red; text-decoration : none;">Tidak tersedia</a>
                                    @endif
                                </div>
                                <span class="d-block">{{ $s->jam }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <small style="color : rgb(187, 187, 187);">
                        tidak tersedia
                    </small>
                @endif
        </div>

        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Selasa</h6>

            @if (!$selasa->isEmpty())
                @foreach ($selasa as $se)

                        <div class="media text-muted pt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                        class="bi bi-calendar mr-2" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>

                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark">{{ tgl_indo($se->tanggal) }} </strong>

                                    @if ($se->status == 'a')

                                    <a href="/murid/ikuti/{{ $r->id_jadwal }}" style="text-decoration : none">Ikuti</a>
                                    @else

                                    <a href="#" style="color : red; text-decoration : none;">Tidak tersedia</a>
                                    @endif
                                </div>
                                <span class="d-block">{{ $se->jam }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <small style="color : rgb(187, 187, 187);">
                        tidak tersedia
                    </small>
                @endif
        </div>

        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Rabu</h6>

            @if (!$rabu->isEmpty())
                @foreach ($rabu as $r)

                        <div class="media text-muted pt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                        class="bi bi-calendar mr-2" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>

                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark">{{ tgl_indo($r->tanggal) }}</strong>

                                    @if ($r->status == 'a')

                                    <a href="/murid/ikuti/{{ $r->id_jadwal }}" style="text-decoration : none">Ikuti</a>
                                    @else

                                    <a href="#" style="color : red; text-decoration : none;">Tidak tersedia</a>
                                    @endif
                                </div>
                                <span class="d-block"> {{ $r->jam }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <small style="color : rgb(187, 187, 187);">
                        tidak tersedia
                    </small>
                @endif
        </div>

        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Kamis</h6>

            @if (!$kamis->isEmpty())
                @foreach ($kamis as $k)

                        <div class="media text-muted pt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                        class="bi bi-calendar mr-2" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>

                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark">{{ tgl_indo($k->tanggal) }} </strong>

                                    @if ($k->status == 'a')

                                    <a href="/murid/ikuti/{{ $r->id_jadwal }}" style="text-decoration : none">Ikuti</a>
                                    @else

                                    <a href="#" style="color : red; text-decoration : none;">Tidak tersedia</a>
                                    @endif
                                </div>
                                <span class="d-block">{{ $k->jam }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <small style="color : rgb(187, 187, 187);">
                        tidak tersedia
                    </small>
                @endif
        </div>

        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Jumat</h6>

            @if (!$jumat->isEmpty())
                @foreach ($jumat as $j)

                        <div class="media text-muted pt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                        class="bi bi-calendar mr-2" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>

                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark">{{ tgl_indo($j->tanggal) }}</strong>

                                    @if ($j->status == 'a')

                                    <a href="/murid/ikuti/{{ $j->id_jadwal }}" style="text-decoration : none">Ikuti</a>
                                    @else

                                    <a href="#" style="color : red; text-decoration : none;">Tidak tersedia</a>
                                    @endif
                                </div>
                                <span class="d-block">{{ $j->jam }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <small style="color : rgb(187, 187, 187);">
                        tidak tersedia
                    </small>
                @endif
        </div>


    </main>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>


    <script src="offcanvas.js"></script>
</body>

</html>
