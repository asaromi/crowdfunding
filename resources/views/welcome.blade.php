@extends('adminlte::page')

@section('title', 'utama')

@section('content_header')
@stop

@section('content')
        
    <div class="container-fluid text-center">    
      <div class="row content">
        <div class="col-sm-2 ">
        
        </div>
        <div class="col-sm-8 text-left "style="background-color:#fff"> 
           <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <hr>
            <h3>Test</h3>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nostrum modi ducimus veritatis ad quis nobis autem, pariatur doloremque eaque commodi quas nemo accusamus, repellendus neque iure itaque magnam quibusdam.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, maxime possimus! Cumque doloribus accusantium eaque sint alias dolorem facere molestias, voluptatibus natus neque praesentium nihil. Consequuntur possimus sapiente reiciendis adipisci.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut nemo itaque ad repellat repellendus. Debitis deleniti at mollitia nisi commodi distinctio, saepe possimus, repellendus delectus quod sequi nobis eveniet. Ut!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iste neque aliquid minus soluta, deleniti laudantium similique vitae doloremque nobis sequi labore alias voluptatibus! Iusto harum atque vero quisquam pariatur!</p>
        </div>

        <div class="col-sm-2 ">
        </div>
      
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
      .content-header{
        padding-top:0px;
        padding-bottom:0px; 

      }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
	</style>
@stop

@section('js')
    <script> console.log('Hello '); </script>
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
@stop