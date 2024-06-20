<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Kost Hunter</title>

    
    <!-- Custom fonts for this template -->
    <link href="{{asset('assetadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assetadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('assetadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mx-auto" style="max-width: 700px;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-center">Update Kos/Kontrakan
                            </h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('properti.update', $properti->id) }} }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <label class="form-label" for="form3Example3">Nama</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control bg-light border-1 small" name="nama" 
                                        placeholder="Masukkan Nama" aria-label="Search" aria-describedby="basic-addon2" value="{{ $properti->nama }}">
                                </div>
                                <label class="form-label" for="form3Example3">tipe</label>
                                <div class="input-group mb-3">
                                    <select class="form-control bg-light border-1 small" name="tipe" aria-label="Tipe" aria-describedby="basic-addon2" >
                                        <option value="" disabled {{ $properti->tipe == "" ? 'selected' : '' }}>Pilih Tipe Properti</option>
                                        <option value="kontrakan" {{ $properti->tipe == "kontrakan" ? 'selected' : '' }}>Kontrakan</option>
                                        <option value="kos" {{ $properti->tipe == "kos" ? 'selected' : '' }}>Kos</option>
                                    </select>
                                </div>
                                <label class="form-label" for="form3Example3">harga</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control bg-light border-1 small" name="harga"
                                        placeholder="Masukkan harga" aria-label="Search" aria-describedby="basic-addon2" value="{{ $properti->harga }}">
                                </div>
                                <label class="form-label" for="form3Example3">Alamat</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control bg-light border-1 small" name="alamat" placeholder="Masukkan Alamat" aria-label="Alamat" aria-describedby="basic-addon2" >{{ $properti->alamat }}</textarea>
                                </div>
                                <label class="form-label" for="form3Example3">wifi</label>
                                <div class="input-group mb-3">
                                    <select class="form-control bg-light border-1 small" name="wifi" aria-label="Tipe" aria-describedby="basic-addon2">
                                        <option value="" disabled {{ $properti->wifi == "" ? 'selected' : '' }}>Pilih Wifi</option>
                                        <option value="Ya" {{ $properti->wifi == "Ya" ? 'selected' : '' }}>Ya</option>
                                        <option value="Tidak" {{ $properti->wifi == "Tidak" ? 'selected' : '' }}>Tidak</option>
                                    </select>
                                </div>
                                <label class="form-label" for="form3Example3">Jumlah Kamar</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control bg-light border-1 small" name="jumlah_kamar"
                                        placeholder="jumlah kamar" aria-label="Search" aria-describedby="basic-addon2" value="{{ $properti->jumlah_kamar }}">
                                </div>
                                <label class="form-label" for="form3Example3">Tipe Kamar Mandi</label>
                                <div class="input-group mb-3">
                                    <select class="form-control bg-light border-1 small" name="tipe_kamarmandi" aria-label="Tipe" aria-describedby="basic-addon2">
                                        <option value="" disabled {{ $properti->tipe_kamarmandi == "" ? 'selected' : '' }}>Pilih Tipe Kamar Mandi</option>
                                        <option value="Luar" {{ $properti->tipe_kamarmandi == "Luar" ? 'selected' : '' }}>Luar</option>
                                        <option value="Dalam" {{ $properti->tipe_kamarmandi == "Dalam" ? 'selected' : '' }}>Dalam</option>
                                    </select>
                                </div>
                                <label class="form-label" for="form3Example3">Dapur</label>
                                <div class="input-group mb-3">
                                    <select class="form-control bg-light border-1 small" name="dapur" aria-label="Tipe" aria-describedby="basic-addon2">
                                        <option value="" disabled {{ $properti->dapur == "" ? 'selected' : '' }}>Pilih Dapur</option>
                                        <option value="Ya" {{ $properti->dapur == "Ya" ? 'selected' : '' }}>Ya</option>
                                        <option value="Tidak" {{ $properti->dapur == "Tidak" ? 'selected' : '' }}>Tidak</option>
                                    </select>
                                </div>
                                <label class="form-label" for="form3Example3">Lain</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control bg-light border-1 small" name="lain" placeholder="Masukkan lain" aria-label="lain" aria-describedby="basic-addon2">{{ $properti->lain }}</textarea>
                                </div>
                                
                                <label class="form-label" for="form3Example3">Gambar</label>
                                <div class="input-group mb-5">
                                    <div class="mb-3">
                                        <!-- Menampilkan gambar saat ini jika ada -->
                                        @if($properti->gambar)
                                            <img src="{{ asset('images/' . $properti->gambar) }}" alt="Current Image" style="max-width: 100px; height: auto;">
                                        @endif
                                    </div>
                                    <input type="file" class="form-control bg-light border-1 small" name="gambar" aria-label="Pilih Gambar" aria-describedby="basic-addon2">
                                </div>
                                
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success mr-2 w-50">Save</button>
                                    <a href="/properti" class="btn btn-danger w-50">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assetadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assetadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assetadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assetadmin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('assetadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assetadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('assetadmin/js/demo/datatables-demo.js')}}"></script>
</body>

</html>