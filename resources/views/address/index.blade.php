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

          <a href="{{route('address.index')}}">Address</a>

        </li>

        <li class="breadcrumb-item active">Change Address</li>

      </ol>

	<div class="row">

		
			@if(Auth::user()->hasRole('superadministrator'))
		<div class="col-sm-12">

			  <form action="{{route('address.update', $addr->id)}}" method="POST" id='form'>
      {{method_field('PUT')}}
      {{csrf_field()}}

			 	<div class="card">

			 		<div class="card-body">

					 	<div class="form-group">

					 		<label for="">Address</label>

					 		<textarea id='detail' name="content" class="form-control">{{ $addr->address }}</textarea>

					 	</div>

					 	<div class="form-group">

					 		<hr>

					 		<input type="submit" class="btn btn-outline-primary">

					 	</div>

			 		</div>

			 	</div>

			  	

			</form>

		</div>
	@endif
	</div>

@stop()

