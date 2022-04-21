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

    <div class="container h-100 " style="margin-top: 10%">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">


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

                    <div class="row">
                        <div class="col-sm">
                        </div>
                        <div class="col-sm">
                            <h3>Tambah Jadwal Konseling</h3>

                            <div class="card p-3" style="background-color: white; width : 380px;">
                                <form action="/guru/store" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}



                                    Nama Guru
                                    <select name="nama_guru" id="nama_guru" class="form-control mb-3">
                                        <option selected class="form-select form-check disabled text-muted"
                                            aria-label="disabled select example" disabled>Nama Anda</option>
                                        <option value='Bu Lina'> Bu Lina</option>
                                        <option value='Bu Sarah'> Bu Sarah</option>
                                    </select>

                                    <div class="form-floating">
                                        <label for="floatingInputGrid">Tanggal</label>
                                        <input required type="date" name="tanggal" class="form-control"
                                            id="tanggal" value="">
                                    </div>

                                    <div class="form-floating" style="margin-top: 10px">

                                        <label for="floatingInputGrid">Jam</label>
                                        <input required type="time" name="jam" class="form-control"
                                            id="jam" value="">
                                    </div>

                                    <div class="col mt-3">
                                        <a href="{{ route('guru.dashboard')}}"> Kembali</a>
                                        <input class="btn btn-success ml-3" type="submit" value="Simpan Data">
                                    </div>

                                </form>
                            </div>

                        </div>
                        <div class="col-sm">
                        </div>
                    </div>
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
