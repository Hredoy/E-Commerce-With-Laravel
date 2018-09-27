@extends('layout.front')

@section('head')

    <meta property="og:url"           content="{{url()->full()}}" />

    <meta property="og:site_name" content="swopnokotha.com">

    <meta property="og:title" content="এবিএম সোহেল রশিদ">

    <meta property="og:type" content="article">

    <meta property="og:description" content="এবিএম সোহেল রশিদ">

   <meta property="og:image" content="http://swopnokotha.news/alokitosandwip/photos/5/38880918_218499535508547_5403780766377181184_n.jpg">

    <meta property="og:locale" content="en_US">



@stop()

@section('content')



<br>

<div class="container content-container">

	<div class="outer hidden-xs hidden-sm"> 

                            <div class="breaking-ribbon bg-red"> 

                                <h4>ব্রেকিং নিউজ</h4> 

                            </div>                             

                            <!-- Begin .newsticker -->                             

                            <div class="marquee" style="position: absolute; height: 40px; overflow: hidden;" > 

                            	

	                              <marquee behavior="" direction="left">

	                              	<ul>

	                              		@foreach($breaking as $breaks)

                                        @foreach($breaks->categorys as $cats)

	                              		<li>

	                              			<a href="{{url('')}}/{{$cats->name}}/{{$breaks->title}}">{{$breaks->title}}</a>

	                              		</li>

	                              		@endforeach

                                        @endforeach

	                              	</ul>

	                              </marquee>                        

                            </div>                             

                            <!-- End .newsticker -->                             

                        </div>

	<div class="row">

		<div class="left-content-area">

           

			<div class="col-sm-12">

				<br>

			</div>



			<div class="col-sm-12">

			<div class="img-responsive hidden-xs" style="padding-bottom:5px;">

                           

                            @foreach($ad14 as $ads)

                                @if($ads->type == 0)

                                <img src="{{$ads->ads}}" style="height: 160px" class="img-responsive" alt="{{$ads->ads}}" title="{{$ads->ads}}"> 

                                @else

                                    {{$ads->ads}}

                                @endif

                            @endforeach



            </div>

        </div>

			<div class="col-sm-12">

			<div class="post post-full col-sm-12 clearfix">

				<div class="entry-media">

					<a href="#">

						<img src="http://swopnokotha.news/alokitosandwip/photos/5/38880918_218499535508547_5403780766377181184_n.jpg" style="width: 100%" alt="" class="img-responsive"></a>

				</div>

				<div class="entry-main">

					<div class="entry-title">

						<h4 class="entry-title">

							<a href="#"  class=" h3">এবিএম সোহেল রশিদ</a></h4>

					</div>


					<div class="entry-content">

						<p>বুকে গুলি করো না,বাংলাদেশ জেগে যাবে<br>।। এবিএম সোহেল রশিদ।। .<br>পলাশের রঙ মেখে, রাজপথের কালো শরীরে<br>হাজার হাজার নিষ্পাপ মুখ, ফেলেছে নোঙর<br>খুঁজছে অনিয়মের হাঙর; প্রতিশোধ নিতে নয়<br>মিলিয়েছে কাঁধে কাঁধ, ভাঙবে অনিয়মের বাঁধ<br>না, আর কোন অরাজকতা নয়, জানাবে প্রতিবাদ<br>.<br>যে অনিয়ম<br>স্বজনদের প্রাণ দিয়েছে ঠেলে হায়েনার মুখে;<br>দুর্বৃত্তের রাহু, অনিয়মের জাল ফেলেছে এ মৃত্তিকায়<br>রক্তজবার প্রেমে শিমুলের ছায়ায় জল্লাদের বেশে<br>নিচ্ছে হেসে প্রাণ এ বাংলাদেশে; তাকে রুখবই<br>.<br>আমরা আর<br>অনাকাঙ্ক্ষিত লাশ নিয়ে হইচই করবো না এখন<br>রাষ্ট্রযন্ত্রের মেরামত কাজ চালাচ্ছে নতুন প্রজন্ম<br>তাদের শিরায় শিরায় সূর্য্যসেন তিতুমীর প্রীতিলতা<br>তাদের মেধায় আলাওল-কায়কোবাদ, রবীন্দ্র-নজরুল<br>তাদের কণ্ঠে রমেশ, লালন, হাসন,রাধারমণ<br>তাদের প্রেরণায় রফিক জব্বার সালাম বরকত<br>তাদের চেতনায় উনসত্তর, একাত্তর নিচ্ছে খবর<br>খুলেছে রুদ্ধ দরজা, পাল্টে দিচ্ছে মতামত<br>.<br>প্রতিদিন<br>রাজপথের রেড সিগন্যালে আমাকে দাড় করিয়ে<br>পলাশ শিমুলের আবীর, চারপাশে ধীরে ধীরে<br>বুক চিরে দেখায় অসমাপ্ত জীবনের ক্ষত<br>একেকটা পাপড়ির আর্তনাদে মৃত্যুর তালিকা দীর্ঘ<br>বিসর্গ স্বপ্নগুলো ফুটপাতে জ্বালিয়ে আগুন<br>বিভক্ত রাজনীতির স্রোতে ভাসায় স্বজনের রক্ত<br>দৃঢ়কণ্ঠে জানায়, বিচার নয় প্রতিকার চাই<br>নতজানু হয়ে বেচে থাকায় গৌরব নাই<br>.<br>আমরা-তো<br>স্বৈরতন্ত্রের করুণা নয়, অধিকার চাইতে এসেছি<br>অনিয়মের গ্যাঁড়াকলে যারা হয়ে যায় লাশ<br>তাদের মধ্যেই ঘুমিয়ে ছিল লিঙ্কন, লেসওয়েলেসা<br>ছিলো আইনস্টাইন, আলেকজান্ডার, নেপোলিয়ন, ম্যান্ডেলা<br>তাদেরকে হত্যার জন্যই কুয়াশার চাঁদর ছিঁড়ে<br>মৃত্যু মৃত্যু খেলা. ডেকে এনেছে সর্বনাশ<br>.<br>চেয়ে দেখ<br>কচি কচি মুখগুলো আজ কাঁদতে আসেনি<br>চায়নি কোন ক্ষতিপূরণ, বাড়ায়নি ভিক্ষার হাত<br>কাঁধে ছিল তাদের ব্যাগ ভর্তি বই<br>গায়ে ছিল নানা রঙের সাহসী পোশাক<br>দেখিয়েছে প্রজন্মের ডাকে অভিনব অহিংস আন্দোলন<br>ছোট ছোট শিশুরা নিজেরাই নিজেদের নিয়ন্ত্রক<br>দেশের সীমানা ছাড়িয়ে বিশ্বকে করেছে হতবাক<br>বিশ্বনেতারা বিস্ময়ে অবাক, শুনেছে নতুন ডাক<br>.<br>পর্দা সরাও<br>এই দেখ, ওদের হাতে দেশপ্রেমের চিরকুট<br>ফাঁসির দাবী নয়, দেশ গড়ার অঙ্গিকার<br>নীতির সংলাপ, একদিন ফুটবে অধিকারের গোলাপ<br>পূর্ণতা পাবে রক্তের বিনিময়ে অর্জিত সংবিধান<br>প্রাপ্তির যা ছিল অবশেষ, ফিরিয়ে আনবে তা বাংলাদেশ<br>আর এ প্রজন্মই বিনির্মান করবে নৈতিকতার হাতিয়ার <br>শোন<br>ওদেরকে ওদের মতো চলতে দাও<br>আলোর পথে সম্ভাবনাকে হাঁটতে দাও<br>মনে রেখ এ মিছিল থামবার নয়<br>যদি রূঢ় হও, সীমার হও<br>মাথায় গুলি করো, মেধা মরে যাবে<br>বুকে গুলি করো না,বাংলাদেশ জেগে যাবে</p>

					</div>
					<div class="row">
						<div class="col-sm-12">
							
					
						</div>
					</div>

                    <div class="row">

                        <div class="col-sm-12">

                            <div class="addthis_inline_share_toolbox"></div>

                        </div>

                    </div>
					
					<div class="row">

						<div class="col-sm-12">

							<div class="fb-comments" data-href="{{url()->full()}}" data-numposts="5"></div>

						</div>

					</div>

				</div>

			</div>

		</div>

		</div>

		<div class="right-content-area">

            <div class="col-sm-12">

                <div class="card card-default">

                            <div class="card-header text-primary">

                                <h3 class="h4">সম্পাদক -  এ কে এম সামশুজ্জামান ভূঁইয়া সোহেল</h3>

                                <img src="{{ asset('img/client.jpg') }}" alt="" class="img-responsive card-img-top">

                            </div>

                        </div>

            </div>

			<div class="col-sm-12">

				<br>

			</div>

			<div class="col-sm-12">

				<div class="row">

					<div class="col-sm-12">

			<div class="img-responsive hidden-xs" style="padding-bottom:5px;">

                           

                            @foreach($ad15 as $ads)

                                @if($ads->type == 0)

                                <img src="{{$ads->ads}}" width="100%" class="img-responsive" alt="{{$ads->ads}}" title="{{$ads->ads}}"> 

                                @else

                                    {{$ads->ads}}

                                @endif

                            @endforeach



            </div>

        </div>

        <div class="col-sm-12">

			<div class="img-responsive hidden-xs" style="padding-bottom:5px;">

                           

                            @foreach($ad16 as $ads)

                                @if($ads->type == 0)

                                <img src="{{$ads->ads}}" width="100%" class="img-responsive" alt="{{$ads->ads}}" title="{{$ads->ads}}"> 

                                @else

                                    {{$ads->ads}}

                                @endif

                            @endforeach



            </div>

        </div>

        <div class="col-sm-12">

			<div class="img-responsive hidden-xs" style="padding-bottom:5px;">

                           

                            @foreach($ad17 as $ads)

                                @if($ads->type == 0)

                                <img src="{{$ads->ads}}" width="100%" class="img-responsive" alt="{{$ads->ads}}" title="{{$ads->ads}}"> 

                                @else

                                    {{$ads->ads}}

                                @endif

                            @endforeach



            </div>

        </div>

        <div class="col-sm-12">

			<div class="img-responsive hidden-xs" style="padding-bottom:5px;">

                           

                            @foreach($ad18 as $ads)

                                @if($ads->type == 0)

                                <img src="{{$ads->ads}}" width="100%" class="img-responsive" alt="{{$ads->ads}}" title="{{$ads->ads}}"> 

                                @else

                                    {{$ads->ads}}

                                @endif

                            @endforeach



            </div>

        </div>

				</div>

			<div class="row">

				<div class="col-sm-12">

					<div id="fb-root"></div>

					<div class="fb-page" data-href="https://www.facebook.com/Swopnokotha.news/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Swopnokotha.news/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Swopnokotha.news/">Swopnokotha.news -  স্বপ্নকথা.নিউজ</a></blockquote></div>

				</div>



			</div><br>

			<div class="sidebar-add-place bg-danger">

				<div class="block-title-1 bg-success"> 

                	<h3><a href="#" class="text-white"><strong>সাম্প্রতিক</strong> খবর</a></h3> 

                </div>

                <div class="sidebar-newsfeed">

                	<div class="newsfeed-3" id='scroll' style="position: relative; height: 525px; overflow: hidden;color:#fff; background: red"> 

                                        <ul style="margin: 0px; position: absolute; top: 0px;">                                             

                                           @foreach($recent as $rec)  

                                           @foreach($rec->categorys as $cats)                                            

                                        <li style="margin: 0px;">

                                        		<div class="item"> 

                                                    <div class="item-image">

                                                        <a class="img-link" href="{{url('')}}/news/{{$cats->name}}/{{$rec->title}}">

                                                            <img class="img-responsive img-full" src="{{$rec->featured}}"alt="">

                                                        </a>

                                                    </div>                                                

                                                    <div class="item-content"> 

                                                        <h4 class="ellipsis text-white">

                                                        	<a href="{{url('')}}/news/@foreach($rec->categorys as $cats){{$cats->name}}@endforeach/{{$rec->title}}">{{$rec->title}}</a>

                                                        </h4>  

                                            	</div>     

                                        	</div>

                                                           

                                        </li>

                                        @endforeach

                                        @endforeach

                                        </ul>                                       

                     </div>

                </div>

			</div>

			

			<div class="row">

				<div class="col-sm-12">

			<div class="img-responsive hidden-xs" style="padding-bottom:5px;">

                           

                            @foreach($ad19 as $ads)

                                @if($ads->type == 0)

                                <img src="{{$ads->ads}}" width="100%" class="img-responsive" alt="{{$ads->ads}}" title="{{$ads->ads}}"> 

                                @else

                                    {{$ads->ads}}

                                @endif

                            @endforeach



            </div>

        </div>

        <div class="col-sm-12">

			<div class="img-responsive hidden-xs" style="padding-bottom:5px;">

                           

                            @foreach($ad20 as $ads)

                                @if($ads->type == 0)

                                <img src="{{$ads->ads}}" width="100%" class="img-responsive" alt="{{$ads->ads}}" title="{{$ads->ads}}"> 

                                @else

                                    {{$ads->ads}}

                                @endif

                            @endforeach



            </div>

        </div>

        <div class="col-sm-12">

			<div class="img-responsive hidden-xs" style="padding-bottom:5px;">

                           

                            @foreach($ad21 as $ads)

                                @if($ads->type == 0)

                                <img src="{{$ads->ads}}" width="100%" class="img-responsive" alt="{{$ads->ads}}" title="{{$ads->ads}}"> 

                                @else

                                    {{$ads->ads}}

                                @endif

                            @endforeach



            </div>

        </div>

        <div class="col-sm-12">

			<div class="img-responsive hidden-xs" style="padding-bottom:5px;">

                           

                            @foreach($ad22 as $ads)

                                @if($ads->type == 0)

                                <img src="{{$ads->ads}}" width="100%" class="img-responsive" alt="{{$ads->ads}}" title="{{$ads->ads}}"> 

                                @else

                                    {{$ads->ads}}

                                @endif

                            @endforeach



            </div>

        </div>

			</div>

		</div>

		</div>

		

	</div>

</div>

@stop()

@section('script')

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b3b4746bedad6c7"></script>

@stop()