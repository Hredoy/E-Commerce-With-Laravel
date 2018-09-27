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

          <a href="{{route('user.index')}}">User</a>

        </li>

        <li class="breadcrumb-item active">Edit User</li>

      </ol>





     {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}

    <div class="row">

        

        <div class="col-sm-8">

                 {{ csrf_field() }}

                 {{method_field('PUT')}}

                 <div class="form-group row">



                                    <div class="col-sm-6">



                                        <label for="name">Name</label>



                                        <input type="text" name='name' class="form-control" required="required" value="{{ $user->name }}">



                                    </div>



                                    <div class="col-sm-6">



                                        <label for="email">Email</label>



                                        <input type="email" name='email' class="form-control" required="required" value="{{ $user->email }}">



                                    </div>



                                </div>



                                <div class="form-group row">



                                    <div class="col-sm-6 {{ $errors->has('password') ? ' has-error' : '' }}">



                                        <label for="password" class="col-md-4 control-label">Password</label>



                                        <input id="password" type="password" class="form-control" name="password" required>







                                        @if ($errors->has('password'))



                                            <span class="help-block">



                                                <strong>{{ $errors->first('password') }}</strong>



                                            </span>



                                        @endif



                                    </div>



                                    <div class="col-sm-6">



                                        <label for="password-confirm" class="control-label">Confirm Password</label>







                                   



                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>



                                    </div>

                                </div>

            

        </div>

        <div class="col-sm-4">

            <div class="row">

                <div class="col-sm-12">

                    <div class="card">

                        <div class="card-body">

                            <ul class="list-group">



                                @foreach($role as $role)



                              <li class="list-group-item"><input type="radio" name='roles' class='radios' value='{{$role->id}}'> {{$role->display_name}}</li>



                              @endforeach



                            </ul>

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

    

    {!!Form::close()!!}

@stop()

