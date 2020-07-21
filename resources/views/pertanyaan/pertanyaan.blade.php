@extends('adminlte::page')

@section('title', 'Pertanyaan')

@section('content_header')
@stop

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<!-- general form elements -->
		<div class="card card-primary">
			<div class="card-header">
				<h4 class="card-title">Pertanyaan</h4>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
        <div class="card-body">
		<form role="form">
				<div class="card-body">
					<div class="form-group">
						<label for="pertanyaan">apa ada yang ingin kamu tanyakan?</label>
						<input type="text" class="form-control" id="pertanyaan" placeholder="masukkan pertanyaan"><br>
						<label for="email">email</label>
						<input type="text" class="form-control" id="email" placeholder="isikan emailmu disini"><br>

						pertanyaan dari anda akan kami tanggapi sebaik mungkin. Balasannya akan dikirimkan kepada email anda. harap bersabar menunggu balasannya, Terimakasih.
					</div>
					

				</div>
				<!-- /.card-body -->
	
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>

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