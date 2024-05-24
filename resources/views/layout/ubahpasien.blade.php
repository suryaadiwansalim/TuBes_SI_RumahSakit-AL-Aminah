@include('layout.head')
@include('layout.sidebar')
@include('layout.navbar')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Pasien</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Data Pasien</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <form action="/updatedata/{{$pasien->id_pasien}}" method="post">
            @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Pasien</label>
    <input type="text" name="nama" value="{{$pasien->nama}}" class="form-control" id="exampleInputPassword1" placeholder="Nama Pasien">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Umur</label>
    <input type="text" name="umur" value="{{$pasien->umur}}" class="form-control" id="exampleInputPassword1" placeholder="umur">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="{{$pasien->jenis_kelamin}}" class="form-control" id="exampleInputPassword1" placeholder="jenis kelamin">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" name="alamat" value="{{$pasien->alamat}}" class="form-control" id="exampleInputPassword1" placeholder="alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kontak</label>
    <input type="text" name="kontak" value="{{$pasien->kontak}}" class="form-control" id="exampleInputPassword1" placeholder="kontak">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

            <!-- Footer -->
            @include('layout.footer')
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
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
