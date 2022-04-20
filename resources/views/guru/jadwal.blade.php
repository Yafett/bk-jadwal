<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="{{ asset('/css/jadwalguru.css') }}">

</head>
  <body>
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



      <div class="container">
        <div class="display-4" style="margin-bottom: 5%; margin-top: 5%;">
            Bimbingan Konseling
        </div>
        <div class="col-md-12">
            @foreach ($jadwal as $j)


            <div class="card b-1 hover-shadow mb-20">
                <div class="media card-body">
                    <div class="media-left pr-12">
                        <img class="avatar avatar-xl no-radius" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="...">
                    </div>
                    <div class="media-body">
                        <div class="mb-2">
                            <span class="fs-20 pr-16">{{ $j->nama_murid}}</span>
                        </div>
                        <small class="fs-16 fw-300 ls-1">{{ $j->keterangan }}</small>
                    </div>
                    <div class="media-right text-right d-none d-md-block">
                        <p class="fs-14 text-fade mb-12"><i class="fa fa-map-marker pr-1"></i>{{ $j->nama_guru }}</p>
                        {{-- <span class="text-fade"><i class="fa fa-money pr-1"></i> $40 per hourspan> --}}
                    </div>
                </div>

                <footer class="card-footer flexbox align-items-center">
                    <div>
                        <strong>diikuti pada: </strong>
                        <span>{{ $j->created_at }}</span>
                        {{-- <span>{{ tgl_indo($j->created_at) }}</span> --}}
                    </div>
                    <div class="card-hover-show">
                        <a class="btn btn-xs fs-10 btn-bold btn-warning" href="#">Delete</a>
                    </div>
                </footer>
            </div>
            @endforeach
        </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
