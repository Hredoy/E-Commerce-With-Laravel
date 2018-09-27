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

          <a href="{{route('youtubes.index')}}">YOUTUBE</a>

        </li>

        <li class="breadcrumb-item active">ADD YOUTUBE EMBIDED LINK</li>

      </ol>





     

	<div class="row">

		<div class="@if(Auth::user()->hasRole('superadministrator')) col-sm-8 @else col-sm-12 @endif overflow-x">

			<h2>Category</h2>

			<table class="table table-bordered dataTable" style="width: 100%;">

              <thead>

              	<tr>

              		<th>#</th>

              		<th>Name</th>
						@if(Auth::user()->hasRole('superadministrator'))
              		<th></th>
              		@endif

              	</tr>

              </thead>

              <tbody>

	                <?php $i=1; ?>

	              	@foreach($youtube as $cats)


	              <tr role="row">

	              	

	                  <td>{{$i++}}</td>

	               
					<td> {{$cats->link}}</td>
	                @if(Auth::user()->hasRole('superadministrator'))
	                  <td><a href="{{ route('youtubes.edit',$cats->id) }}" class='btn btn-outline-dark rounded-circle'><i class="fa fa-pencil"></i></a>
						<a href="{{route('youtubes.destroy',$cats->id)}}" onclick="event.preventDefault();
                                                     document.getElementById('des{{$cats->id}}').submit();" class='btn rounded-circle btn-outline-danger'><i class="fa fa-trash"></i></a>
                                        <form id='des{{$cats->id}}' action="{{route('youtubes.destroy',$cats->id)}}" method="POST" role='form'  style="display: none;">
                                        {{ csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        </form>  
	                  </td>

	                @endif

	                </tr>


	                 @endforeach



            	</tbody>

            </table>

            {!! $youtube->links() !!}


		</div>
			@if(Auth::user()->hasRole('superadministrator'))
		<div class="col-sm-4">

			 <form action="{{ route('youtubes.store') }}" method="post" enctype="multipart/formdata">

			 	{{ csrf_field() }}

			 	<div class="card">

			 		<div class="card-body">

					 	<div class="form-group">

					 		<label for="">LINK</label>

					 		<input type="text" placeholder="https://www.youtube.com/watch?v=jNQXAC9IVRw" name='link' class='form-control'>

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

