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
          <a href="{{route('categorys.index')}}">Categorys</a>
        </li>
        <li class="breadcrumb-item active">Edit Categorys</li>
      </ol>


     
	<div class="row">
		<div class="col-sm-12">
			 {!! Form::model($cat, ['route' => ['categorys.update', $cat->id], 'method' => 'PUT']) !!}
			 	<div class="card">
			 		<div class="card-body">
			 			<div class="form-group">
					 		<label for="">PARENT</label>
					 		<select name="parent" id="" class="form-control">
					 			<option value="0">NONE</option>
					 			@foreach($cats as $catss)
						 			@if($catss->parent == 0)
						 				<option value="{{$catss->id}}">{{$catss->name}}</option>
						 			@endif
					 			@endforeach
					 		</select>
					 	</div>
					 	<div class="form-group">
					 		<label for="">NAME</label>
					 		<input type="text" value="{{ $cat->name }}" name='name' class='form-control'>
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
