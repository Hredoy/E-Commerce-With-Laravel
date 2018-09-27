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

        <li class="breadcrumb-item active">Create Categorys</li>

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

	              	@foreach($cat as $cats)


	              <tr role="row">

	              	

	                  <td>{{$i++}}</td>

	              	@if($cats->parent == 0)
	                  <td>{{$cats->name}}</td>
					@else 
					<td>-- {{$cats->name}}</td>
	                @endif
	                @if(Auth::user()->hasRole('superadministrator'))
	                  <td><a href="{{ route('categorys.edit',$cats->id) }}" class='btn btn-outline-dark rounded-circle'><i class="fa fa-pencil"></i></a>
						<a href="{{route('categorys.destroy',$cats->id)}}" onclick="event.preventDefault();
                                                     document.getElementById('des{{$cats->id}}').submit();" class='btn rounded-circle btn-outline-danger'><i class="fa fa-trash"></i></a>
                                        <form id='des{{$cats->id}}' action="{{route('categorys.destroy',$cats->id)}}" method="POST" role='form'  style="display: none;">
                                        {{ csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        </form>  
	                  </td>

	                @endif

	                </tr>


	                 @endforeach



            	</tbody>

            </table>

            {!! $cat->links() !!}


		</div>
			@if(Auth::user()->hasRole('superadministrator'))
		<div class="col-sm-4">

			 <form action="{{ route('categorys.store') }}" method="post" enctype="multipart/formdata">

			 	{{ csrf_field() }}

			 	<div class="card">

			 		<div class="card-body">

			 			<div class="form-group">

					 		<label for="">PARENT</label>

					 		<select name="parent" id="" class="form-control">

					 			<option value="0">NONE</option>

					 			@foreach($parent as $cats)

						 			@if($cats->parent == 0)

						 				<option value="{{$cats->id}}">{{$cats->name}}</option>

						 			@endif

					 			@endforeach

					 		</select>

					 	</div>

					 	<div class="form-group">

					 		<label for="">NAME</label>

					 		<input type="text" name='name' class='form-control'>

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

