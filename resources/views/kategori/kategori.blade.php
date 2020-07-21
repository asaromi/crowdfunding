@extends('adminlte::page')

@section('title', 'Kategori')

@section('content_header')
@stop

@section('content')
<div class="row justify-content-center">
	<div class="col-md-8">
		<!-- general form elements -->
		<div class="card card-lightblue">
			<div class="card-header">
				<h4 class="card-title">Kategori</h4>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
        <div class="card-body">
		berikut beberapa kategori yang tersedia : <br><br>
		
		<ul class="nav nav-pills nav-fill">
			<li class="nav-item">
				<a class="btn btn-info btn-lg" href="create"><i class="fas fa-school fa-lg"></i><br>Sekolah</a>			
			</li>
			<li class="nav-item">
				<a class="btn btn-info btn-lg" href="create"><i class="fas fa-graduation-cap fa-lg"></i><br>Beasiswa</a>
			</li>
			<li class="nav-item">
				<a class="btn btn-info btn-lg" href="create"><i class="fas fa-building fa-lg"></i><br>Pembangunan</a>
			</li>
			<li class="nav-item">
				<a class="btn btn-info btn-lg" href="create"><i class="fas fa-notes-medical fa-lg"></i><br>Pengobatan</a>			
			</li>
		</ul>
		<br><br>
		<ul class="nav nav-pills nav-fill">
			<li class="nav-item">
				<a class="btn btn-info btn-lg" href="create"><i class="fas fa-people-carry fa-lg"></i><br>Kegiatan sosial</a>
			</li>
			<li class="nav-item">
				<a class="btn btn-info btn-lg" href="create"><i class="fas fa-mountain fa-lg"></i><br>Bencana Alam</a>
			</li>
			<li class="nav-item">
				<a class="btn btn-info btn-lg" href="create"><i class="fas fa-hand-holding-usd fa-lg"></i><br>Zakat</a>
			</li>
			<li class="nav-item">
				<a class="btn btn-info btn-lg" href="create"><i class="fas fa-child fa-lg"></i><br>Santunan Anak Yatim</a>			
			</li>
		</ul>

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