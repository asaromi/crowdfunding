@extends('adminlte::page')

@section('title', 'pilih metode pembayaran')

@section('content_header')
@stop

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<!-- general form elements -->
		<div class="card card-red">
			<div class="card-header">
				<h4 class="card-title">Pilih metode pembayaran</h4>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
        <div class="card-body">
            Untuk melanjutkan pembayaran ini, kamu dapat melakukanya dengan memilih satu dari dua metode dibawah ini.
			<br>
			<br>
			<a href="/transfer" class="btn btn-primary btn-block">
								Transfer
			</a>
			<br>
			<a href="/langsung" class="btn btn-primary btn-block">
								Langsung
			</a>
		
		
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