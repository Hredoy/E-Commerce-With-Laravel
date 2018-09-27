@extends('layout.admin')
@section('content')
 <div class="content-wrapper">
    <div class="container-fluid">
<div class="container">

    <div class="latestnews">

        <br>

        <div class="outer" style="margin-bottom: 10px;"> 

                                                      

                            <!-- Begin .newsticker -->                             
                            <div class="row">
                                <div class="breaking-ribbon bg-red"> 

                                <h5>শিরোনাম</h5> 

                            </div>   
                                 <div class="marquee" style="position: absolute; height: 39px; overflow: hidden;    width: 88%;margin-left: 5px;" > 

                                

                                  <marquee behavior="" direction="left">

                                    <ul>

                                 
                                    </ul>
    
                                  </marquee>                        

                            </div> 
                            <br>    
                            </div>
                                                   

                            <!-- End .newsticker -->                             

             </div>

            <div class="row">
                <div class="col-sm-8">
                                <br>
                    <div class="module-title"> 

                    <h3 class="title"><a href=" "><span class="bg-1">প্রধান সংবাদ </span></a></h3> 


                </div>
                <div class='row'>
                    <div class="col-sm-12">
                       
                    
                

                    </div>
                </div>
            
            <div class="row"><br></div>
            <div class="row">

           <div class="img-responsive hidden-xs" >

                        @foreach($ad as $ads1)

                            <img style="width:100%;" src="{{$ads1->ads}}" class="img-responsive" alt=""> 

                        @endforeach

                            <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/1', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
            
                        </div>



        </div>
        <div class="row"><br></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-default">
                        <div class="card-header text-center">
                            <h3><a href="{{url('')}}/category/শীর্ষ-সংবাদ" class=""><span class=text-dark">শীর্ষ-সংবাদ </span></a></h3>
                        </div>
                        <div class="card-body">

                            <br>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{url('')}}/category/শীর্ষ-সংবাদ" class="text-center"><span class=text-dark">আরো খবর দেখুন </span></a>
                        </div>
                    </div>
                    <br>
                </div>
                
            </div>
            <div class="row">
                        <div class="col-sm-6">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/জাতীয়" class=""><span class=text-dark">জাতীয়</span></a></h3>
                                  </div>
                               
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/জাতীয়">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/রাজনীতি" class=""><span class=text-dark">রাজনীতি</span></a></h3>
                                  </div>
                                 
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/রাজনীতি">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>  
            </div>
            <div class="row"><br></div>
            <div class="row">

           <div class="img-responsive hidden-xs" >

                        @foreach($ad1 as $ads2)

                            <img style="width:100%;" src="{{$ads2->ads}}" class="img-responsive" alt=""> 

                        @endforeach

                            <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/2', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
            
                        </div>



        </div>
            <div class="row"><br></div>

            <div class="row">
                        <div class="col-sm-6">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/নগরে  বন্দরে" class=""><span class=text-dark">নগরে  বন্দরে</span></a></h3>
                                  </div>
                                 
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/নগরে  বন্দরে">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/প্রবাসীর কথা এবং প্রবাসে  সংস্কৃতি" class=""><span class=text-dark">প্রবাসীর কথা এবং প্রবাসে  সংস্কৃতি</span></a></h3>
                                  </div>
                                 
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/প্রবাসীর কথা এবং প্রবাসে  সংস্কৃতি">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>  
            </div>
            <div class="row"><br></div>
        
        </div><!-- left side-->
                <div class="col-sm-4">
                    <div class="sidebar-add-place bg-dark">

                        <div class="block-title-1"> 

                            <h3><a href="#" class="text-white"><strong>সকল</strong> খবর</a></h3> 

                        </div>

                        <div class="sidebar-newsfeed">

                            <div class="newsfeed-3" id="scroll" style="position: relative; height: 525px; overflow: hidden;"> 

                                 <ul style="margin: 0px; position: absolute; top: 0px;">                                                        
                                </ul>                                       

                             </div>

                        </div>
                </div><!--Right Side--->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-default">
                            <div class="card-header text-primary">
                                <h3 class="h4">সম্পাদক -  এ কে এম সামশুজ্জামান ভূঁইয়া সোহেল</h3>
                                <img src="{{ asset('img/client.jpg') }}" alt="" class="img-responsive card-img-top">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="fb-root"></div>
                        <div class="fb-page" data-href="https://www.facebook.com/UnPrajudis/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                    </div>
                </div>
            </div>
                
        </div>
        <div class="row">
            <br>
        </div>
        <div class="row ">
            <div class="col-sm-8 ">
                <div class="card card-default">
                    <div class="card-header">
                        <h3><a href="{{url('')}}/category/সারা বাংলা" class=""><span class=text-dark">সারা বাংলা</span></a></h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5" style="border-right: 1px solid #dfdfdf">
                               
                            </div>
                            <div class="col-sm-7">
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{url('')}}/category/সারা বাংলা">এ বিভাগের আরো খবর দেখুন</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/অর্থনীতি ও শিল্প ও বাণিজ্য" class=""><span class=text-dark">অর্থনীতি ও শিল্প ও বাণিজ্য</span></a></h3>
                                  </div>
                                 
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/অর্থনীতি ও শিল্প ও বাণিজ্য">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div><!--col end-->
        </div>
        <div class="row"><br></div>
        <div class="row">

           <div class="img-responsive hidden-xs" >

                        @foreach($ad2 as $ads3)

                            <img style="width:100%;" src="{{$ads3->ads}}" class="img-responsive" alt=""> 

                        @endforeach

                            <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/3', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
            
                        </div>



        </div>
        <div class="row"><br></div>
        <div class="row">
                        <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/বিজ্ঞান ও প্রযুক্তি" class=""><span class=text-dark">বিজ্ঞান ও প্রযুক্তি</span></a></h3>
                                  </div>
                                
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/বিজ্ঞান ও প্রযুক্তি">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/পর্যটন" class=""><span class=text-dark">পর্যটন</span></a></h3>
                                  </div>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/পর্যটন">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/আইন আদালত" class=""><span class=text-dark">আইন আদালত</span></a></h3>
                                  </div>
                                 
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/আইন আদালত">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>  
            </div>
            <div class="row"><br></div>
            <div class="row">

           <div class="img-responsive hidden-xs" >

                        @foreach($ad7 as $ads8)

                            <img style="width:100%;" src="{{$ads8->ads}}" class="img-responsive" alt=""> 

                        @endforeach

                            <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/8', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
            
                        </div>



        </div>
            <div class="row"><br></div>
            <div class="row">
                        <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/ক্যাম্পাস" class=""><span class=text-dark">ক্যাম্পাস</span></a></h3>
                                  </div>
                                 
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/ক্যাম্পাস">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/আমাদের কথা" class=""><span class=text-dark">আমাদের কথা</span></a></h3>
                                  </div>
                                 
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/আমাদের কথা">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/লাইফ স্টাইল" class=""><span class=text-dark">লাইফ স্টাইল</span></a></h3>
                                  </div>
                                  
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/লাইফ স্টাইল">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>  
            </div>
            <div class="row"><br></div>
            <div class="row">

           <div class="img-responsive hidden-xs" >

                        @foreach($ad3 as $ads4)

                            <img style="width:100%;" src="{{$ads4->ads}}" class="img-responsive" alt=""> 

                        @endforeach

                            <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/4', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
            
                        </div>



        </div>
        <div class="row"><br></div>
            <div class="row">

           <div class="img-responsive hidden-xs" >

                        @foreach($ad6 as $ads7)

                            <img style="width:100%;" src="{{$ads7->ads}}" class="img-responsive" alt=""> 

                        @endforeach

                            <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/7', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
            
                        </div>



        </div>
            <div class="row"><br></div>

            <div class="row">
                <div class="col-sm-6 ">
                <div class="card card-default">
                    <div class="card-header">
                        <h3><a href="{{url('')}}/category/খেলা" class=""><span class=text-dark">খেলা</span></a></h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5" style="border-right: 1px solid #dfdfdf">
                                
                            </div>
                            <div class="col-sm-7">
                               
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{url('')}}/category/খেলা">এ বিভাগের আরো খবর দেখুন</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="card card-default">
                    <div class="card-header">
                        <h3><a href="{{url('')}}/category/বিনোদন" class=""><span class=text-dark">বিনোদন</span></a></h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5" style="border-right: 1px solid #dfdfdf">
                              
                            </div>
                            <div class="col-sm-7">
                               
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{url('')}}/category/বিনোদন">এ বিভাগের আরো খবর দেখুন</a>
                    </div>
                </div>
            </div>
            </div>
            <div class="row"><br></div>
            <div class="row">

           <div class="img-responsive hidden-xs" >

                        @foreach($ad5 as $ads6)

                            <img style="width:100%;" src="{{$ads6->ads}}" class="img-responsive" alt=""> 

                        @endforeach

                            <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/6', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
            
                        </div>



        </div>
            <div class="row"><br></div>

            <div class="row">
                        <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/ফিচার" class=""><span class=text-dark">ফিচার</span></a></h3>
                                  </div>
                                
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/ফিচার">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/প্রকাশক ও প্রকাশনীর  কথা হবে" class=""><span class=text-dark">প্রকাশক ও প্রকাশনীর  কথা হবে</span></a></h3>
                                  </div>
                                  
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/প্রকাশক ও প্রকাশনীর  কথা হবে">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/ইসলাম" class=""><span class=text-dark">ইসলাম</span></a></h3>
                                  </div>
                                 
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/ইসলাম">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>  
            </div>
            <div class="row"><br></div>
            <div class="row">

           <div class="img-responsive hidden-xs" >

                        @foreach($ad4 as $ads5)

                            <img style="width:100%;" src="{{$ads5->ads}}" class="img-responsive" alt=""> 

                        @endforeach

                            <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/5', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
            
                        </div>



        </div>
            <div class="row"><br></div>
            <div class="row">
                        <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/চট্টগ্রাম" class=""><span class=text-dark">চট্টগ্রাম</span></a></h3>
                                  </div>
                                
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/চট্টগ্রাম">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/ঢাকা" class=""><span class=text-dark">ঢাকা</span></a></h3>
                                  </div>
                                  
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/ঢাকা">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="card card-default" >
                                 <div class="card-header">
                                    <h3><a href="{{url('')}}/category/বরিশাল" class=""><span class=text-dark">বরিশাল</span></a></h3>
                                  </div>
                                 
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{url('')}}/category/বরিশাল">এ বিভাগের আরো খবর দেখুন</a>
                                </div>
                            </div>  
            </div>
            <div class="row"><br></div>
</div>

</div><!--main row-->
</div>

</div>
</div>


