@extends('adminlte::page')

@section('title', 'utama')

@section('content_header')
@stop

@section('content')
<div class="card ">
	<div class="card-header">
		<a class="btn btn-success" href="create"><i class="fas fa-fw fa-plus"></i> Tambah</a>
	</div>
	<div class="card-body pb-0">
		<div class="row d-flex align-items-stretch">
			<div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
				<div class="card col-md-12 bg-light">
					<div class="card-header text-muted border-bottom-0">
						Digital Strategist
					</div>
					<div class="card-body pt-0 w-100">
						<div class="row">
							<div class="col-7">
								<h2 class="lead"><b>Nicole Pearson</b></h2>
								<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist
									/ Coffee Lover </p>
								<ul class="ml-4 mb-0 fa-ul text-muted">
									<li class="small"><span class="fa-li"><i
												class="fas fa-lg fa-building"></i></span> Address: Demo Street
										123, Demo City 04312, NJ</li>
									<li class="small"><span class="fa-li"><i
												class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23
										52</li>
								</ul>
							</div>
							<div class="col-5 text-center">
								<img alt="profile.jpg" class="img-circle img-fluid">
							</div>
						</div>
					</div>
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
					<div class="card-header text-muted border-bottom-0">
						Digital Strategist
					</div>
					<div class="card-body pt-0 w-100">
						<div class="row">
							<div class="col-7">
								<h2 class="lead"><b>Nicole Pearson</b></h2>
								<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist
									/ Coffee Lover </p>
								<ul class="ml-4 mb-0 fa-ul text-muted">
									<li class="small"><span class="fa-li"><i
												class="fas fa-lg fa-building"></i></span> Address: Demo Street
										123, Demo City 04312, NJ</li>
									<li class="small"><span class="fa-li"><i
												class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23
										52</li>
								</ul>
							</div>
							<div class="col-5 text-center">
								<img alt="profile.jpg" class="img-circle img-fluid">
							</div>
						</div>
					</div>
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