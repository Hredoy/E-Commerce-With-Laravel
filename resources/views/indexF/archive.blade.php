@extends('layout.front')

@section('content')

<br>

<div class="container">

	<div class="latestnews">

		<div class="">

		<div class="outer"> 

                           <div class="breaking-ribbon bg-red"> 

                               <h4>ব্রেকিং নিউজ</h4> 

                           </div>                             

                           <!-- Begin .newsticker -->                             

                           <div class="marquee" style="position: absolute; height: 40px; overflow: hidden;" > 

                           	

	                             <marquee behavior="" direction="left">

	                             	<ul>

	                             		@foreach($breaking as $breaks)

	                             		<li>

	                             			<a href="{{url('')}}/@foreach($breaks->categorys as $cats){{$cats->name}}@endforeach/{{$breaks->title}}">{{$breaks->title}}</a>

	                             		</li>

	                             		@endforeach

	                             	</ul>

	                             </marquee>                        

                           </div>                             

                           <!-- End .newsticker -->                             

                       </div>

</div>

<div class="DCatLatestContent">

	



<div class="row">

		<div class="col-sm-12">

			@foreach($catpos as $posts)
				@foreach($posts->categorys as $cats)
			<div class="row">

				

				<div class="col-sm-6">

					<a href="{!!url('')!!}/news/{{ $cats->name }}/{{$posts->title}}">

						<img src="{{$posts->featured}}" alt="" class="img-responsive img-full">

					</a>

				</div>

				<div class="col-sm-6">

					<a href="{!!url('')!!}/news/{{ $cats->name }}/{{$posts->title}}">

						<h4>{{$posts->title}}</h4>

					</a>

					<div class="details">

						

					{!!$posts->details!!}

					</div>

				

				</div>

				<hr>

				<br>

			</div>
			@endforeach
			@endforeach

			<div class="row">

				<div class="col-sm-12">

					{!! $catpos->links() !!}

				</div>

			</div>

		</div>

	</div>

	</div>

	</div>

	</div>

	

@stop()



@section('script')

<script>

	$('.details>p').hide();

	$('.details>p:first-child').show();

</script>

@stop()