@extends('layout.admin')

@section('content')
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('dashboard')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="{{route('youtubes.index')}}">YOUTUBE LINK</a>
        </li>
        <li class="breadcrumb-item active">Edit YOUTUBE LINK</li>
      </ol>


     
	<div class="row">
		<div class="col-sm-12">
			 {!! Form::model($cat, ['route' => ['youtubes.update', $cat->id], 'method' => 'PUT']) !!}
			 	<div class="card">
			 		<div class="card-body">
			 			
					 	<div class="form-group">
					 		<label for="">NAME</label>
					 		<input type="text" value="{{ $cat->link }}" name='link' class='form-control'>
					 	</div>
					 	<div class="form-group">
					 		<hr>
					 		<input type="submit" class="btn btn-outline-primary">
					 	</div>
			 		</div>
			 	</div>
			  	
			{!!Form::close()!!}
		</div>
	</div>
@stop()
