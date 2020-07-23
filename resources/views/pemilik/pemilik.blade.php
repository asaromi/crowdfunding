@extends('adminlte::page')

@section('title', 'Halaman Admin')

@section('content_header')
@stop

@section('content')
<div class="row justify-content-center">
	<div class="col-md-8">
		<!-- general form elements -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Halaman Admin</h3>
            </div>    
            <!-- /.card-header -->
			<!-- form start -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-donasi-tab" data-toggle="pill" href="#pills-donasi" role="tab" aria-controls="pills-donasi" aria-selected="true">Donasi Hari Ini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-konfkampanye-tab" data-toggle="pill" href="#pills-konfkampanye" role="tab" aria-controls="pills-konfkampanye" aria-selected="false">Konfirmasi Kampanye</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-donasilang-tab" data-toggle="pill" href="#pills-donasilang" role="tab" aria-controls="pills-donasilang" aria-selected="false">Donasi Ditempat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-daftarins-tab" data-toggle="pill" href="#pills-daftarins" role="tab" aria-controls="pills-daftarins" aria-selected="false">Daftar Instansi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-diagram-tab" data-toggle="pill" href="#pills-diagram" role="tab" aria-controls="pills-diagram" aria-selected="false">Diagram Donasi</a>
                </li>


            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-donasi" role="tabpanel" aria-labelledby="pills-donasi-tab"> <br><br>
                <!-- tabel start -->
                    <table class="table table-borderless">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Donatur</th>
                        <th scope="col">Id Donatur</th>
                        <th scope="col">Jumlah donasi</th>
                        <th scope="col">Status</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>apel</td>
                            <td>jl. raya surakarta</td>
                            <td>0808080808</td>
                            <td>080080808</td>
                            

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
                
                
                <div class="tab-pane fade show" id="pills-konfkampanye" role="tabpanel" aria-labelledby="pills-konfkampanye-tab"> <br><br>
                <!-- tabel start -->
                    <table class="table table-borderless">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Kampanye</th>
                        <th scope="col">Nama pengaju</th>
                        <th scope="col">Nama Instansi</th>
                        <th scope="col">Jumlah target</th>
                        <th scope="col">Status</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>apel</td>
                            <td>jl. raya surakarta</td>
                            <td>0808080808</td>
                            <td>080080808</td>
                            

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

                <div class="tab-pane fade" id="pills-donasilang" role="tabpanel" aria-labelledby="pills-donasilang-tab">
                    <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul"> <br> Atas Nama : <!-- nama user disini -->
                            </label>
                            <input type="text" class="form-control" id="Nama" placeholder="masukkan nama">

                        </div>
                        <div class="form-group">
                            <label for="nominal">Jumlah Donasi</label>
                            <input type="text" class="form-control" id="nominal" placeholder="masukkan nominal transfer yang sesuai">
                        </div>
                        <div class="form-group">
                            <label for="id_kampanye">No. Kampanye</label>
                            <input type="text" class="form-control" id="id_kampanye" placeholder="masukkan no kampanye yang sesuai">
                        </div>
                        

                    </div>
                    <!-- /.card-body -->
        
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                </div>

                <div class="tab-pane fade" id="pills-daftarins" role="tabpanel" aria-labelledby="pills-daftarins-tab">
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

                <div class="tab-pane fade" id="pills-diagram" role="tabpanel" aria-labelledby="pills-diagram-tab">
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