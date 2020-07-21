@extends('adminlte::page')

@section('title', 'Form Konfirmasi')

@section('content_header')
@stop

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<!-- general form elements -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Form Konfirmasi</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
            <form role="form">
				<div class="card-body">
					<div class="form-group">
						<label for="judul"> <br> Atas Nama : <!-- nama user disini -->
                        </label>
					</div>
					<div class="form-group">
						<label for="nominal">Jumlah Transfer</label>
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