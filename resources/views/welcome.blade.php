@extends('adminlte::page')

@section('title', 'utama')

@section('content_header')
@stop

@section('content')
<div class="card ">
	
	<div class="card-body pb-0">
		<div class="row d-flex align-items-stretch">
			<div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
				<div class="card col-md-12 bg-light">

					<!-- template kartu -->
					<br><br>
					<div class="card-body pt-0 w-100">
						<div class="row">
							<div class="col-7">
								<h2 class="lead"><b>Bantuan untuk mereka yang membutuhkan</b></h2>
								<p class="text-muted text-sm" style="text-overflow: ellipsis;width: 300px;height: 200px;overflow: hidden;">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, amet nobis? Commodi sapiente recusandae, praesentium placeat atque, accusantium nihil laudantium repellat ipsam dignissimos enim facere. Illo, tempore! Nobis, reprehenderit enim! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam distinctio quos aliquam enim at facilis eligendi ipsum assumenda possimus ullam, dolorem dolorum corporis sint autem magni omnis numquam quas dignissimos.
								</p>
								
							</div>
							<div class="col-5 text-center">
								<img alt="profile.jpg" class="img-circle img-fluid">
							</div>
						</div>
					</div>
					<!-- template kartu -->


					<div class="card-footer m-0">
						<div class="text-right">
							
							<a href="detail" class="btn btn-md w-25 btn-primary">
								Lihat
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
				<div class="card col-md-12 bg-light">

					<!-- template kartu -->
					<br><br>
					<div class="card-body pt-0 w-100">
						<div class="row">
							<div class="col-7">
								<h2 class="lead"><b>Bantuan untuk mereka yang membutuhkan</b></h2>
								<p class="text-muted text-sm" style="text-overflow: ellipsis;width: 300px;height: 200px;overflow: hidden;">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, amet nobis? Commodi sapiente recusandae, praesentium placeat atque, accusantium nihil laudantium repellat ipsam dignissimos enim facere. Illo, tempore! Nobis, reprehenderit enim! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam distinctio quos aliquam enim at facilis eligendi ipsum assumenda possimus ullam, dolorem dolorum corporis sint autem magni omnis numquam quas dignissimos.
								</p>
								
							</div>
							<div class="col-5 text-center">
								<img alt="profile.jpg" class="img-circle img-fluid">
							</div>
						</div>
					</div>
					<!-- template kartu -->
					
					<div class="card-footer m-0">
						<div class="text-right">
							<a href="detail" class="btn btn-md w-25 btn-primary">
								Lihat
							</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<nav aria-label="Contacts Page Navigation">
			<ul class="pagination justify-content-center m-0">
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">4</a></li>
				<li class="page-item"><a class="page-link" href="#">5</a></li>
				<li class="page-item"><a class="page-link" href="#">6</a></li>
				<li class="page-item"><a class="page-link" href="#">7</a></li>
				<li class="page-item"><a class="page-link" href="#">8</a></li>
			</ul>
		</nav>
	</div>
	<!-- /.card-footer -->
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