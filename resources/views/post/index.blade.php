@extends('layout.admin')

@section('content')

 <div class="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->

      <ol class="breadcrumb">

        <li class="breadcrumb-item">

          <a href="{{route('dashboard')}}">Dashboard</a>

        </li>

        <li class="breadcrumb-item active">Post Page</li>

      </ol>

      <a href="{{route('post.create')}}" class="btn btn-primary">CREATE</a>

      <div class="row">

      	<div class="col-sm-12 overflow-x">

      		<table class="table table-bordered dataTable" style="width: 100%;">

              <thead>

              	<tr>

              		<th>#</th>

              		<th width="60%">Name</th>

                  <th>Categorys</th>

              		<th width="18%">Action</th>

              	</tr>

              </thead>

              <tbody>

	                <?php $i=1; ?>

	              	@foreach($post as $posts)

		              <tr role="row">

		              	

		                  <td>{{$i++}}</td>

		                  <td>{{$posts->title}}</td>

		                  <td>@foreach($posts->categorys as $cat)<span class="badge badge-primary">{{$cat->name}}</span>@endforeach</td>

		                  <td>

                                <a href="{{route('post.show',$posts->id)}}" class='btn btn-outline-dark rounded-circle'><i class="fa fa-eye"></i></a>

                                <a href="{{route('post.edit',$posts->id)}}" class='btn btn-outline-dark rounded-circle'><i class="fa fa-pencil"></i></a>

                                <a href="{{route('post.destroy',$posts->id)}}" onclick="event.preventDefault();

                                                     document.getElementById('des{{$posts->id}}').submit();" class='btn rounded-circle btn-outline-danger'><i class="fa fa-trash"></i></a>

                                        <form id='des{{$posts->id}}' action="{{route('post.destroy',$posts->id)}}" method="POST" role='form'  style="display: none;">

                                        {{ csrf_field()}}

                                        {{ method_field('DELETE') }}

                                        </form>  

                            </td>

		                

		                </tr>

	                 @endforeach



            	</tbody>

            </table>

            {!! $post->links() !!}

      	</div>

      </div>