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

          <a href="{{route('post.index')}}">Posts</a>

        </li>

        <li class="breadcrumb-item active">Create Post</li>

      </ol>





      <form action="{{route('post.update', $post->id)}}" method="POST" id='form'>
      {{method_field('PUT')}}
      {{csrf_field()}}
	<div class="row">

		

		<div class="col-sm-8">


				<div class="form-group">

					<label for="">Name</label>

					<input type="text" value="{{ $post->title }}" name='name' class="form-control">

				</div>

				<div class="form-group">

					<label for="">Detail</label>

					<textarea id='detail' name="content" class="form-control"> {{ $post->details }}</textarea>

				</div>

			

		</div>

		<div class="col-sm-4">

			<div class="row">

				<div class="col-sm-12">

					<div class="card bg-primary text-white">

						<div class="card-header">

							Category

						</div>

						<div class="card-body">

							<div class="bg-white text-black">

								<ul class="list-group categorys text-dark">
									
									@foreach($cat as $cats)

										@if($cats->parent ==0)

										<li class="list-group-item "><input type="Checkbox" name="cat_id[]" value="{{$cats->id}}"> {{$cats->name}}</li>

										@elseif($cats->parent == 2)

										<li class="list-group-item"><input type="Checkbox" name="cat_id[]" value="{{$cats->id}}"> {{$cats->name}}</li>

										@endif

										@foreach($cats->subs as $sub)

										<li class="list-group-item"><input type="Checkbox" name="cat_id[]" value="{{$sub->id}}">-- {{$sub->name}}</li>

										@endforeach 

									@endforeach

								</ul>

							</div>

						</div>

					</div>

				</div>

				<div class="col-sm-12">

					<br>

				</div>

				<div class="col-sm-12">

					<div class="card bg-primary text-white">

						<div class="card-header">

							Featured Image

						</div>

						<div class="card-body">

							 <div class="input-group">

							   <span class="input-group-btn">

							     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">

							       <i class="fa fa-picture-o"></i> Choose

							     </a>

							   </span>

							   <input id="thumbnail" name='featured' class="form-control" type="text" name="filepath">

							 </div>

							 <img id="holder" src="{{ $post->featured }}" style="margin-top:15px;max-height:100px;">

			            </div>

						</div>

					</div>

				</div>

				<div class="col-sm-12">

					<br>

				</div>

				<div class="col-sm-12">

					<div class="card ">

						

						<div class="card-body">

							<input type="submit" value='Publish' class='btn-outline-primary btn'>

						</div>

					</div>

				</div>

			</div>

		</div>



	</div>

	</form>

@stop()

@section('script')
@stop()