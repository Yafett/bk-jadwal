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
</head>

<body>

    <div class="container h-100" style="margin-top: 3%">
        <div class="row">
            <div class="col mx-auto">


                <div class="container">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="display-4" style="margin-bottom: 5%;    ">
                        <a href="{{ route('guru.home')}}" style="color: black"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                             <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                           </svg></a>  Atur Jadwal
                     </div>

                    <a href="/guru/tambah" type="button" class="btn btn-primary mb-3">Tambah Jadwal</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Hari</th>
                                <th>Tanggal</th>
                                <th scope="col">Pukul</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal as $i => $j)
                                <tr>
                                    {{-- <td>{{ ++$i }}</td> --}}
                                    <td>{{ $j->nama_guru }}</td>
                                    <td>
                                        @if ($j->hari == 'Monday')
                                            Senin
                                        @elseif ($j->hari == 'Tuesday')
                                            Selasa
                                        @elseif ($j->hari == 'Wednesday')
                                            Rabu
                                        @elseif ($j->hari == 'Thursday')
                                            Kamis
                                        @elseif ($j->hari == 'Friday')
                                            Jumat
                                        @elseif ($j->hari == 'Saturday')
                                            Sabtu
                                        @elseif ($j->hari == 'Sunday')
                                            Minggu
                                        @endif
                                    </td>
                                    <td>{{ $j->tanggal }}</td>
                                    <td>{{ $j->jam }}</td>
                                    <td>
                                        @if ($j->status == 'a')
                                            <span class="badge badge-secondary">Kosong</span>
                                        @elseif ($j->status == 'b')
                                            <span class="badge badge-info">Dijadwalkan</span>
                                        @elseif ($j->status == 'c')
                                            <span class="badge badge-success">Sudah</span>
                                        @elseif ($j->status == 'd')
                                            <span class="badge badge-secondary">Dibatalkan</span>
                                        @endif

                                    </td>
                                    <td>
                                        <div class="row">

                                            @if($j->status == 'b')
                                            <form action="/guru/sudah/{{ $j->id_jadwal }}" method="post">
                                                {{ csrf_field() }}
                                                <input class="btn btn-success btn-sm mr-1" type="submit" value="sudah">
                                        </form>
                                        @endif

                                        @if($j->status == 'a' || $j->status == 'b'  )
                                        <form action="/guru/batal/{{ $j->id_jadwal }}" method="post">
                                            {{ csrf_field() }}
                                            <input class="btn btn-danger btn-sm mr-1" type="submit" value="batal">
                                    </form>
                                    @endif

                                    @if($j->status == 'd'  )
                                    <form action="/guru/reschedule/{{ $j->id_jadwal }}" method="post">
                                        {{ csrf_field() }}
                                        <input class="btn btn-info btn-sm mr-1" type="submit" value="reschedule ">
                                </form>
                                @endif

                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>




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
