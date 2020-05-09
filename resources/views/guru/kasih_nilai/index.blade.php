<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../swiper/swiper.min.css" />
    <link rel="stylesheet" href="../swiper/swiper-custom.css" /> -->
    <!-- Place your kit's code here -->
    <!-- fontawesom -->
    <script src="https://kit.fontawesome.com/70d50d2d9f.js" crossorigin="anonymous"></script>

    <!-- hover master -->
    <link rel="stylesheet" href="../Hover/css/hover.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../custom/css/style.css">
    <script src="../custom/js/script.js"></script>

    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css" />


    <title>Lihat Tugas</title>
</head>

<body class="body">
    <br><br><br><br><br>
    <!-- content -->
    <div class="content">
        <!-- navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary shadow p-3 mb-5 fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nv-right">
                <!-- navbar profile -->
                <li class="list-inline-item active dropdown">
                    <a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="../img/belajar.jpg" alt="" class="rounded-circle" width=30 height=30>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="./examples/profile.html" class="dropdown-item">
                            <i class="fas fa-user fa-sm mr-auto"></i>
                            <span>My profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item">
                            <i class="fa fa-sign-out fa-sm mr-auto"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </div>
            <!-- collapse navbar -->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <a class="navbar-brand" href="/guruuu/{{ $m->slug }}"><img src="{{asset('/img/logo_wikrama.png')}}" width="40" height="40" alt="">
                    I-Learning</a>
                <!-- navbar left -->
                <ul class="navbar-nav mr-auto">
                    <!-- navbar left -->
                    <li class="nav-item">
                        <a class="nav-link" href="/guruuu/{{ $m->slug }}">Dashboard</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/guruuu/{{ $m->slug }}/tugas">Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/guruuu/{{ $m->slug }}/nilai">Nilai</a>
                    </li>
                </ul>
                <!-- navbar right -->
                <div class="nb-right">
                    <!-- navbar right -->
                    <ul class="navbar-nav ml-auto">
                        <!-- navbar profile -->
                        <li class="nav-item active dropdown float-sm-right">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../img/belajar.jpg" alt="" class="rounded-circle" width=40 height=40>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right drop">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="./examples/profile.html" class="dropdown-item">
                                    <i class="fas fa-user fa-sm mr-auto"></i>
                                    <span>My profile</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="/logout" class="dropdown-item">
                                    <i class="fa fa-sign-out fa-sm mr-auto"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- tutup navbar -->
        <!-- judul -->
        <div class="container jdl">
            <div class="container bg-dark rounded text-white shadow p-3 rounded">
                <h5 class="text-white judul2 jdlmp">Bahasa Indonesia</h5>
            </div>
        </div>
        <!-- judul -->

        <!-- card -->
        <div class="container crtr">
            <div class="row">
                <!-- ---------- -->
                <div class="col-sm-12 mt-2 mb-2 crd">
                    <div class="d-flex justify-content-between">
                        <a href="/guruuu/bdp-x-1" type="button" class="btn btn-warning rounded-pill"><i
                                class="fas fa-arrow-left"></i>
                            Kembali</a>
                        <a href="{{ route('nilai.excel',$id) }}" type="button" class="btn btn-success rounded-pill float-left"><i
                                class="fas fa-print"></i>
                            Excel</a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <!-- ---------- -->
                        <div class="col-sm-4 mt-2 mb-2 crd">
                            <div class="card shadow-sm">
                                <a class="text-decoration-none text-dark" data-toggle="collapse"
                                    href="#" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-0 judul2">DATA TERKUMPUL</h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- collapse hide -->
                                <div class="option1">
                                    <div class="card-body">
                                        <!-- tugas siswa -->
                                        @foreach($siswa as $fs)
                                        <div class="mb-2">
                                            <a href="">
                                                <div class="row no-gutters hd">
                                                    <div class="justify-content-between">
                                                        <img src="../img/belajar.jpg" alt="" class="rounded-circle"
                                                            width=35 height=35>
                                                    </div>
                                                    <div class="mt-1 ml-2">
                                                        <p class="font-weight-normal mb-0 judul2">{{ $fs->siswa->nama }}
                                                        </p>
                                                    </div>
                                                    <div class="badge badge-info text-wrap mt-1 ml-auto"
                                                        style="height: 20px;">
                                                        @if($fs->nilai == '')
                                                        <small>Belum Dinilai</small>
                                                        @else
                                                        {{ $fs->nilai }}
                                                        @endif
                                                        <!--nilai ditampilkan -->
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- collapse hide -->

                                <!-- Collapse Nama siswa -->
                                <div class="option2">
                                    <div class="card-body collapse" id="CollapseNamaSiswa">
                                        <!-- tugas siswa -->
                                        <div class="mb-2">
                                            <a href="">
                                                <div class="row no-gutters hd">
                                                    <div class="justify-content-between">
                                                        <img src="../img/belajar.jpg" alt="" class="rounded-circle"
                                                            width=35 height=35>
                                                    </div>
                                                    <div class="mt-1 ml-2">
                                                        <p class="font-weight-normal mb-0 judul2">Astrid Novika
                                                            Damayanti
                                                        </p>
                                                    </div>
                                                    <div class="badge badge-info text-wrap mt-1 ml-auto"
                                                        style="height: 20px;">
                                                        85
                                                        <!--nilai ditampilkan -->
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- tugas siswa -->
                                        <!-- tugas siswa -->
                                        <div class="mb-2">
                                            <a href="">
                                                <div class="row no-gutters hd">
                                                    <div class="justify-content-between">
                                                        <img src="../img/belajar.jpg" alt="" class="rounded-circle"
                                                            width=35 height=35>
                                                    </div>
                                                    <div class="mt-1 ml-2">
                                                        <p class="font-weight-normal mb-0 judul2">Azromi Amar</p>
                                                    </div>
                                                    <div class="badge badge-info text-wrap mt-1 ml-auto"
                                                        style="height: 20px;">
                                                        85
                                                        <!--nilai ditampilkan -->
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- tugas siswa -->
                                    </div>
                                </div>
                                <!-- Collapse Nama siswa -->
                            </div>
                        </div>
                        <!-- ---------- -->
                        <div class="col-sm-8 mt-2 mb-2 crd">
                            <div class="card shadow-sm">
                                <div class="container">
                                    <div class="d-flex justify-content-between">
                                        @foreach($siswa as $fs)
                                        <div class="card-body">
                                            <h5 class="mb-2 font-weight-normal text-dark judul2">{{ $fs->siswa->nama }}
                                            </h5>
                                            <!-- ----- -->
                                            <form action="{{ route('guru.nilai') }}" method="post">
                                            @csrf
                                                <input type="hidden" value="{{ $fs->id }}" name="item_id">
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <input class="form-control" type="text" name="nilai"
                                                            placeholder="Masukan Nilai, contoh 100" value="{{ $fs->nilai ? $fs->nilai : '' }}">
                                                    </div>
                                                    <div class="form-group col">
                                                        <button type="submit"
                                                            class="btn btn-primary">Nilai</button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                            <a href="{{ route('download.tugas', $fs->id) }}" class="text-decoration-none text-dark">
                                                <div class="card mt-2 fl" style="max-width: 300px;">
                                                    <div class="row no-gutters">
                                                        <div class="col-sm-4 card-header text-center">
                                                            <i class="far fa-file fa-3x text-center"
                                                                style="color: #6c757d;"></i>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-body">
                                                                <p class="card-text paragraf2 text-center">{{ $fs->file }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ---------- -->
                    </div>
                </div>
            </div>
        </div>
        <!-- card -->
    </div>
    <!-- content -->
    <!-- footer -->
    <div class="footer">
        <div class="text-white" style="background-color: #12293b;">
            <div class="container">
                <div class="row ml-auto mr-auto">
                    <div class="navbar navbar-expand-sm mx-auto">
                        <a onclick="facebook()" href="">
                            <div class="rounded-circle align-middle mr-4"
                                style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                                <i class="fab fa-facebook-f mr-auto"
                                    style="margin-top:5px; margin-left:10px; color: white; font-size: 1.5em;"></i>
                            </div>
                        </a>
                        <a onclick="instagram()" href="">
                            <div class="rounded-circle align-middle mr-4"
                                style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                                <i class="fab fa-instagram fa-lg mr-auto"
                                    style="margin-top:8px; margin-left:8px; color: white; font-size: 1.5em;"></i>
                            </div>
                        </a>
                        <a onclick="twitter()" href="">
                            <div class="rounded-circle align-middle mr-4"
                                style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                                <i class="fab fa-twitter fa-lg mr-auto"
                                    style="margin-top:9px; margin-left:7px; color: white; font-size: 1.5em;"></i>
                            </div>
                        </a>
                        <a onclick="youtube()" href="">
                            <div class="rounded-circle align-middle mr-4"
                                style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                                <i class="fab fa-youtube fa-lg mr-auto"
                                    style="margin-top:8px; margin-left:5px; color: white; font-size: 1.5em;"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- datatable -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>