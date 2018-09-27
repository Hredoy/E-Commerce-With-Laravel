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

          <a href="{{route('post.index')}}">Product</a>

        </li>

        <li class="breadcrumb-item active">Create Product</li>

      </ol>





      <form action="{{ route('post.store') }}" method="post" enctype="multipart/formdata">

	<div class="row">

		

		<div class="col-sm-8">

				 {{ csrf_field() }}

				<div class="form-group">

					<label for="">Product Title</label>

					<input type="text" name='name' class="form-control">

				</div>

				<div class="form-group">

					<label for="">Product Detail</label>

					<textarea id='detail' name="content" class="form-control"></textarea>

				</div>
				
				<div class="card">
					<div class="card-header text-white bg-primary">
						Additional Info
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="size"> Price </label><br>
							<input type="number" id='size' name="price" class="form-control">
						</div>
						<div class="form-group">
							<label for="size"> Size</label><br>
							<input type="Checkbox" id='size' name="size[]" value="S">S
							<input type="Checkbox" id='size' name="size[]" value="M">M
							<input type="Checkbox" id='size' name="size[]" value="L">L
							<input type="Checkbox" id='size' name="size[]" value="XL">XL
						</div>
						<div class="form-group">
							<label for="size"> Materials </label><br>
							<input type="text" id='size' name="materials" class="form-control">
						</div>
						
						<div class="form-group">
							<label for="size"> Color </label><br>
							<input type="text" id='size' name="color" class="form-control">
						</div>
					</div>
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

							 <img id="holder" style="margin-top:15px;max-height:100px;">

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

