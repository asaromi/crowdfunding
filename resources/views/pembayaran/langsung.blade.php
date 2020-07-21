@extends('adminlte::page')

@section('title', 'Metode Pembayaran Langsung')

@section('content_header')
@stop

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<!-- general form elements -->
		<div class="card card-red">
			<div class="card-header">
				<h4 class="card-title">Metode Pembayaran Langsung</h4>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
        <div class="card-body">
        Jika anda ingin memberikan donasi langsung melalui kami, anda dapat menemui kami di alamat berikut : <br><br>
		Nama Instansi : <br>
		Alamat : <br>
		No. Telp : <br><br>


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