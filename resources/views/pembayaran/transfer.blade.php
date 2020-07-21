@extends('adminlte::page')

@section('title', 'Metode Pembayaran Transfer')

@section('content_header')
@stop

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<!-- general form elements -->
		<div class="card card-red">
			<div class="card-header">
				<h3 class="card-title">Metode Pembayaran Transfer</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
        <div class="card-body">
			Bagi anda yang melakukan transfer, anda dapat mengirimkan donasi anda ke rekening perusahaan kami dengan informasi sebagai berikut : <br>
			<br>
			Nama     : <br>
			No. Rek  : <br>
			Nama Bank: <br>
			<br>
			jika sudah melakukan transfer, isi form berikut untuk mendapatkan konfirmasi dari kami <br>
			
			<a href="konfirmasi" class="btn btn-md w-25 btn-primary">
								Form 
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