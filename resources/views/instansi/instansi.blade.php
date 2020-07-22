@extends('adminlte::page')

@section('title', 'Daftar instansi')

@section('content_header')
@stop

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<!-- general form elements -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Instansi</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Daftar Instansi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tambahkan instansi</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> <br><br>
                <!-- tabel start -->
                <table class="table table-borderless">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Instansi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. telp</th>
                    <th scope="col">No. Rek</th>
                    <th scope="col">Bank</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>apel</td>
                        <td>jl. raya surakarta</td>
                        <td>0808080808</td>
                        <td>080080808</td>
                        <td>BRI</td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                    
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                    </tr>
                </tbody>
                </table>

       			<!-- tabel end -->

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form role="form" method="POST" action="/store">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_instansi">Nama Instansi</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="masukkan judul">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="instansi" name="instansi" placeholder="masukkan nama instansi">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No. Telepon</label>
                            <input type="text" class="form-control" id="target" name="target" placeholder="masukkan jumlah">
                        </div>
                        <div class="form-group">
                            <label for="no_rek">No. Rekening</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="masukkan judul">
                        </div>
                        <div class="form-group">
                            <label for="bank">Nama Bank</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="masukkan judul">
                        </div>


                    </div>
                    <!-- /.card-body -->
        
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
                </div>
            </div>
		</div>
		<!-- /.card -->
	</div>
</div>



@endsection

@section('css')
<link rel="stylesheet" href="vendor/adminlte/dist/css/adminlte.css">
@stop

@section('js')
<script> console.log('Hello '); </script>
<script type="text/javascript" src="/vendor/jquery/jquery.js"></script>
<script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.js"></script>
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

@stop