<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
  <!-- Place your kit's code here -->
  <!-- fontawesom -->
  <script src="https://kit.fontawesome.com/70d50d2d9f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/brands.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/regular.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/svg-with-js.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/v4-shims.css')}}">
  <script src="../fontawesome/js/all.js"></script>

  <!-- custom css and js-->
  <link rel="stylesheet" href="../custom/css/style.css">
  <script src="../custom/js/script.js"></script>
  <title>Tugas Siswa</title>
</head>

<body class="body">
  <br><br><br><br><br>
  <div class="content">
    <!-- content -->
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
        <a class="navbar-brand" href="#"><img src="{{asset('/img/logo_wikrama.png')}}" width="40" height="40" alt="">
          I-Learning</a>
        <!-- navbar left -->
        <ul class="navbar-nav mr-auto">
          <!-- navbar left -->
          <li class="nav-item">
            <a class="nav-link" href="/siswaa/{{ $m->slug }}">Dashboard</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/siswaa/{{ $m->slug }}/tugas">Tugas</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="">Nilai</a>
          </li> --}}
        </ul>
        <!-- navbar right -->
        <div class="nb-right">
          <!-- navbar right -->
          <ul class="navbar-nav ml-auto">
            <!-- navbar profile -->
            <li class="nav-item active dropdown float-sm-right">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
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
        <h5 class="text-white judul2 jdlmp">{{ $mapel }}</h5>
      </div>
    </div>
    <!-- judul -->
    <!-- card -->
    <div class="container crtr">
      <div class="row">

        <div class="col-sm-3 mt-2 mb-2">
          <div class="card cd dp-n" style="max-height: 325px;">
            <div class="card-body">
              <img
                src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/project_completed_w0oq.svg"
                alt="" class="card-img">
              <h5 class="card-title judul2">Mendatang</h5>
              <p class="card-text paragraf1">Tidak ada tugas yang perlu segera diselesaikan.</p>
              <a href="#" class="card-link float-sm-right judul2">Lihat Semua</a>
            </div>
          </div>
        </div>

        <div class="col-sm-8 offset-sm-1 crd">
          @foreach($tugas as $t)
          <div class="card mt-2 mb-2 cd">
            <div class="container">
              <a class="text-decoration-none text-dark" data-toggle="collapse" href="#Collapsekirimtugas" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                <div class="d-flex justify-content-between">
                  <i class="fa fa-list-alt fa-3x mt-auto mb-auto fo fs" style="color: #007bff;"></i>
                  <div class="card-body">
                    <p class="mb-0 paragraf1 font-weight-bold">{{ $mapel }} Memposting Tugas Baru : <small>{{ $t->judul }}</small>
                    </p>
                    <p class="mb-0 paragraf1"><small>{{ $t->created_at }}</small></p>
                    <p class="mb-0 paragraf1">Batas pengerjaan : <small>{{ $t->deadline }}</small></p>
                  </div>
                </div>
              </a>
              <div class="card-body">
              <a href="{{ asset('data_tugas') }}/{{ $t->file }}" class="text-decoration-none text-dark" download>
                <div class="card mt-2 fl" style="max-width: 300px;">
                  <div class="row no-gutters">
                    <div class="col-sm-4 card-header text-center">
                      <i class="far fa-file-word fa-3x" style="color: #007bff;"></i>
                    </div>
                    <div class="col-sm-8">
                      <div class="card-body">
                        <p class="card-text paragraf2 text-center">{{ $t->file }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            
              <!-- collapse -->
              <div class="collapse" id="Collapsekirimtugas">
                <form action="{{ route('upload_tugas',$m->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                  <input type="hidden" value="{{ $t->id }}" name="item_id">
                    <label for="exampleFormControlTextarea1" class="col-form-label col-form-label-sm">Catatan</label>
                    <textarea name="catatan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <!-- ----------- -->
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <div class="d-flex justify-content-between">
                        <div>
                          <!-- Modal file -->
                          <a class="text-decoration-none text-dark" href="" data-toggle="modal"
                            data-target="#ModalFile">
                            <i class="fas fa-file fa-lg mr-auto"></i>
                          </a>
                          <!-- Modal file -->
                          <div class="modal fade" id="ModalFile" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Tambahkan File</h5>
                                  <button type="submit" value="upload_tugas_siswa" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="custom-file">
                                      <!-- <input type="file" name="file" class="custom-file-input" id="customFile" multiple> -->
                                      <input type="file" id="input-country" class="form-control form-control-alternative" name="file">
                                    </div>   
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn btn-info">Tambahkan File</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Modal youtube-->
                          <a class="text-decoration-none text-danger" href="" data-toggle="modal"
                            data-target="#ModalYoutube"><i class="fab fa-youtube fa-lg mr-auto"></i>
                          </a>
                          <!-- Modal youtube-->
                          <div class="modal fade" id="ModalYoutube" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Sisipka Video</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="form-row">
                                      <div class="col">
                                        <input type="text" class="form-control input">
                                      </div>
                                      <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                      </div>
                                    </div>
                                    <span>Masukan penelusuran pada kotak di atas untuk menemukan video.</span>
                                    <div class="container">

                                    </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <button type="button" class="btn btn-info">Tambahkan</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Modal link-->
                          <a class="text-decoration-none text-dark" href="" data-toggle="modal"
                            data-target="#ModalLink"><i class="fas fa-link fa-lg mr-auto"></i>
                          </a>
                          <!-- Modal link-->
                          <div class="modal fade" id="ModalLink" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Tambahkan Link</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="form-row">
                                      <div class="col">
                                        <input type="text" class="form-control rounded-pill input">
                                      </div>
                                      <div class="col-auto">
                                        <button type="submit" class="btn btn-primary rounded-pill">Search</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <button type="button" class="btn btn-info">Tambahkan Link</button>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div>
                          <button type="button" class="btn btn-sm btn-dark mr-auto" data-toggle="collapse"
                            href="#Collapsekirimtugas" role="button" aria-expanded="false"
                            aria-controls="collapseExample">Batal</button>
                          <button type="submit" class="btn btn-sm btn-info">Posting</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ---- -->
                  <!-- ---- -->
                </form>
              </div>
              <!-- collapse -->
            </div>
          </div>
          @endforeach


  <!-- footer -->
  @include('siswa.includes._footer')
  <!-- footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="js/swiper.min.js"></script>
</body>

</html>