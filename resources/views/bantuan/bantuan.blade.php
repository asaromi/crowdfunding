@extends('adminlte::page')

@section('title', 'utama')

@section('content_header')
@stop

@section('content')
<div class="row justify-content-center">
	<div class="col-md-8">
		<!-- general form elements -->
		<div class="card card-red">
			<div class="card-header">
				<h2 class="card-title"><h2>Bantuan</h2></h2>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
        <div class="card-body">
			<h3 class="text-justify"><br>
			Jika anda merasa kesulitan, anda dapat membaca beberapa bantuan dibawah. apabila jawaban yang anda cari tidak tersedia dibawah, maka anda dapat mempertanyakannya langsung ke laman pertanyaan. 
			</h3><br>
			<div class="row ">
				<div class="col-md-6 mb-2">
					<!-- general form elements -->
					<div class="card card-red h-100">
						<div class="card-header">
							<h4 class="card-title">Pembayaran</h4>
						</div>
					<!-- /.card-header -->
					<!-- form start -->
						<div class="card-body text-justify">
						 Untuk saat ini, pembayaran yang memungkinkan adalah Transfer dan Melakukan Pembayaran Langsung. Dana akan dikumpulkan melalui Instansi kami dan akan disalurkan kepada Instansi terkait tanpa ada pemotongan didalamnya.
						</div>
			
					</div>
				</div>

				<div class="col-md-6 mb-2">
					<!-- general form elements -->
					<div class="card card-red h-100">
						<div class="card-header">
							<h4 class="card-title">Konfirmasi Pembayaran</h4>
						</div>
					<!-- /.card-header -->
					<!-- form start -->
						<div class="card-body text-justify">
						Konfirmasi pembayaran adalah hal yang harus dilakukan jika anda memilih opsi Transfer. Hal ini ditujukan sebagai bukti Transaksi yang dapat dipertanggungjawabkan.
						</div>
			
					</div>
				</div>
				
				<div class="col-md-6 mb-2">
					<!-- general form elements -->
					<div class="card card-red h-100">
						<div class="card-header">
							<h4 class="card-title">Pembayaran Langsung</h4>
						</div>
					<!-- /.card-header -->
					<!-- form start -->
						<div class="card-body text-justify">
						Pembayaran langsung adalah opsi yang dapat anda gunakan apabila lokasi anda tidak berada jauh dari Instansi kami. Tentunya anda tidak akan diminta untuk membuat konfirmasi pembayaran. Lokasi Instansi kami dapat anda lihat pada Menu Pembayaran lalu pilih Pembayaran Langsung. 
						</div>
			
					</div>
				</div>
				<div class="col-md-6 mb-2">
					<div class="card card-red h-100">
						<div class="card-header">
							<h4 class="card-title">Bukti Transfer</h4>
						</div>
					<!-- /.card-header -->
					<!-- form start -->
						<div class="card-body text-justify">
						Pastikan Anda tidak membuang Bukti transfer yang anda lakukan. Untuk pengguna Mobile Banking dapat mengambil bukti transfer dengan melakukan Screenshot.
						</div>
			 
					</div>
				
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