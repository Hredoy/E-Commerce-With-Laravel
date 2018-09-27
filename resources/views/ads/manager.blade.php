

<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('social')

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">



    <!-- MetisMenu CSS -->

    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">



    <!-- Custom CSS -->

    

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Morris Charts CSS -->

    <link href=" {{ asset('vendor/morrisjs/morris.css')}}" rel="stylesheet">

    

    <!-- Custom Fonts -->

    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->



    <!-- Scripts -->

   

    <!-- Bootstrap Core JavaScript -->

    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>



    @yield('head')

</head>

<body>

    



    <div id="app">

    	<form action="{{route('ads_update.update',$ad->id)}}" method="post">

    		{{csrf_field()}}

    		{{method_field('PUT')}}

    	<div class="row">
            <input type="hidden" name='ads' value="1">
    		<div class="col-xs-6 text-center">

    			<input type="radio" name='type' class='form-control one' value='0'>Ad Type Image

    		</div>

    		<div class="col-xs-6 text-center">

    			<input type="radio" name='type' class='form-control two' value='1'>Ad Type Code

    		</div>

    	</div>

			

			



        <div class="panel panel-primary onep hidden">

            <div class="panel-heading">

                <h3>Ads Image</h3>

            </div>

            <div class="panel-body">

                <div class="input-group">

                   <span class="input-group-btn">

                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">

                       <i class="fa fa-picture-o"></i> Choose

                     </a>

                   </span>

                   <input id="thumbnail" class="form-control" type="text" name="filepath">

                </div>

                 <img id="holder" style="margin-top:15px;max-height:100px;">

            </div>

        </div>

        <div class="panel panel-primary twop hidden">

            <div class="panel-heading">

                <h3>Ads Code</h3>

            </div>

            <div class="panel-body">

                <textarea name="code" id="" cols="30" rows="10" class='form-control'></textarea>

            </div>

        </div>

        <div class="panel panel-primary">

            <div class="panel-body">

                <input type="submit" class='btn btn-primary'>

            </div>

        </div>







        </form>

    </div>



     <script src="{{ asset('js/app.js') }}"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->

    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>



    <!-- Morris Charts JavaScript -->

    <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>



    <!-- Custom Theme JavaScript -->

    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>

    <script>

        $('#user_dropdown').click(function(){

            $(this).parent().toggleClass('open');

        })

    </script>

    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>

	<script>

	     $('#lfm').filemanager('image');





	    $('.one').change(function(){



	      $('.twop').addClass('hidden');

	      $('.onep').removeClass('hidden');

	     })

	    $('.two').change(function(){

	      $('.twop').removeClass('hidden');

	      $('.onep').addClass('hidden');

	     })

	</script>

    @yield('script')

        

</body>

</html>

