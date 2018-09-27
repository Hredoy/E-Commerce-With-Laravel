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

      @if(Auth::user()->hasRole('superadministrator'))

      <a href="{{route('user.create')}}" class="btn btn-primary">CREATE</a>

      @endif

      <br>

      <div class="row">



        <div class="col-sm-12 overflow-x">



            <table class="table table-striped table-bordered table-hover">



                    <thead>



                        <tr>



                            <th>Username</th>



                            <th>Name</th>



                            <th >Email</th>



                            <th>Role</th>

                            @if(Auth::user()->hasRole('Superadministrator'))

                            <th width="15%"></th>

                            @endif

                        </tr>



                    </thead>



                    <tbody>



                        @foreach($user as $ur)



                        <tr>



                            <td>{{$ur->name}}</td>



                            <td>{{$ur->name}}</td>



                            <td>{{$ur->email}}</td>



                            <td>@foreach($ur->roles as $role) {{$role->display_name}} @endforeach</td>

                            @if(Auth::user()->hasRole('superadministrator'))

                            <td>

                              

                                <a href="{{route('user.edit',$ur->id)}}" class='btn rounded-circle btn-outline-dark'><i class="fa fa-pencil"></i></a>



                                  <a href="{{route('user.destroy',$ur->id)}}" onclick="event.preventDefault();



                                                     document.getElementById('des{{$ur->id}}').submit();" class='btn rounded-circle btn-outline-danger'><i class="fa fa-trash"></i></a>



                                        <form id='des{{$ur->id}}' action="{{route('user.destroy',$ur->id)}}" method="POST" role='form'  style="display: none;">



                                        {{ csrf_field()}}



                                        {{ method_field('DELETE') }}



                                        </form> 

                             

                            </td> 

                            @endif



                            



                            



                        </tr>



                        @endforeach



                    </tbody>



                </table>



        </div>



      </div>