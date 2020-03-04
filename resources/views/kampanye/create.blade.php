@extends('adminlte::page')

@section('title', 'utama')

@section('content_header')
@stop

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<!-- general form elements -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Buat Kampanye</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form">
				<div class="card-body">
					<div class="form-group">
						<label for="judul">judul</label>
						<input type="text" class="form-control" id="judul" placeholder="masukkan judul">
					</div>
					<div class="form-group">
						<label for="instansi">instansi</label>
						<input type="text" class="form-control" id="instansi" placeholder="masukkan nama instansi">
					</div>
					<div class="form-group">
						<label for="target">target</label>
						<input type="text" class="form-control" id="target" placeholder="masukkan jumlah">
					</div>
					<div class="form-group">
						<label for="deskripsi">deskripsi</label>
						<textarea type="text" class="form-control" id="deskripsi"
							placeholder="masukkan deskripsi"></textarea>
					</div>
					<div class="form-group">
						<label for="tenggat">tenggat</label>
						<input type="date" class="form-control" id="tenggat">
					</div>
	
					<div class="form-group">
						<label for="gambar">File input</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="gambar">
								<label class="custom-file-label" for="exampleInputFile">Choose file</label>
							</div>
							<div class="input-group-append">
								<span class="input-group-text" id="">Upload</span>
							</div>
						</div>
					</div>

				</div>
				<!-- /.card-body -->
	
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
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