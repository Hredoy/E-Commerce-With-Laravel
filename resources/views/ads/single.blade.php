@extends('layout.admin')
@section('style')
<link rel="stylesheet" href="{{ asset('css/front.css') }}">
@stop()
@section('content')
 <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row">
        <div class="left-content-area">
            <div class="row">
                <div class="col-sm-12">
                    <br>
                </div>
                <div class="col-sm-12">
                    <div class="img-responsive hidden-xs" style="padding-bottom:5px;">
                           
                            @foreach($ad14 as $ads15)
                                @if($ads15->type == 0)
                                <img style="width:100%;" src="{{$ads15->ads}}" class="img-responsive" alt=""> 
                                @else
                                    {{$ads15->ads}}
                                @endif
                                <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/{{$ads15->id}}', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
                            @endforeach

                      </div>
                </div>
            </div>
            <div class="col-sm-12" id="fbz">
                <div class="row mt20">
                    <div class="col-sm-12 details-heading">
                        <h1 style="color:#000;">Title</h1>
                    </div>
                    <div class="col-sm-12">
                        
                          </div>
                            </div>
                        </div>
                        <div class="row marginTop20 DDetailsContent" style="
    padding-left: 25px;
">
                            <div class="col-sm-12" id="main-article">
                                <center>
                                    <table class="image">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="grid">
                                                        <figure class="effect-layla">
                                                            <img style="width:100%;" src="#" alt="#" class="img-responsive">
                                                        </figure>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </center>

                                    <div class="newsitem_text">
                                       #
                                    </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                                <span>#</span>| <span>দেশবিদেশ২৪.কম</span>
                            </div>
                            <div class="col-sm-6 pt10">
                                <span>আপডেট: #</span>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-right">
                                    <div class="addthis_inline_share_toolbox"></div>
                              
                        </div>
                        <div class="row marginTop30">
                            <div class="col-sm-12">
                                <div class="addthis_inline_share_toolbox_705s"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 DCopyRight"><p>দেশবিদেশ২৪.কম'র প্রকাশিত/প্রচারিত কোনো সংবাদ, তথ্য, ছবি, আলোকচিত্র, রেখাচিত্র, ভিডিওচিত্র, অডিও কনটেন্ট কপিরাইট আইনে পূর্বানুমতি ছাড়া ব্যবহার করা যাবে না।</div></p></div>
                    </div>
                </div>
            </div>
        <div class="right-content-area">
           <aside class="col-sm-12">
               <div class="row hidden-xs">
                   <div class="col-sm-12">
                       <div class="img-responsive hidden-xs" style="padding-bottom:5px;">
                           
                            @foreach($ad15 as $ads16)
                                @if($ads16->type == 0)
                                <img style="width:100%;" src="{{$ads16->ads}}" class="img-responsive" alt=""> 
                                @else
                                    {{$ads16->ads}}
                                @endif
                                <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/{{$ads16->id}}', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
                            @endforeach

                            </div>
                       <div class="img-responsive hidden-xs" style="padding-bottom:5px;">
                           
                            @foreach($ad16 as $ads17)
                                @if($ads17->type == 0)
                                <img style="width:100%;" src="{{$ads17->ads}}" class="img-responsive" alt=""> 
                                @else
                                    {{$ads17->ads}}
                                @endif
                                <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/{{$ads17->id}}', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
                            @endforeach

                            </div>
                       <div class="img-responsive hidden-xs" style="padding-bottom:5px;">
                           
                            @foreach($ad17 as $ads18)
                                @if($ads18->type == 0)
                                <img style="width:100%;" src="{{$ads18->ads}}" class="img-responsive" alt=""> 
                                @else
                                    {{$ads18->ads}}
                                @endif
                                <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/{{$ads18->id}}', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
                            @endforeach

                            </div>
                        <div class="img-responsive hidden-xs" style="padding-bottom:5px;">
                           
                            @foreach($ad18 as $ads19)
                                @if($ads19->type == 0)
                                <img style="width:100%;" src="{{$ads19->ads}}" class="img-responsive" alt=""> 
                                @else
                                    {{$ads19->ads}}
                                @endif
                                <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/{{$ads19->id}}', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
                            @endforeach

                            </div>
                   </div>
               </div>
               <h3 class="DHeadingHeader">Heading</h3>
               <div class="row DDetailsRight clearM">
                   <div class="col-sm-12">
                       <div class="row">
                            <div class="col-xs-5 col-sm-5">
                                <a href="#">
                                    <div class="bin" target="_blank">
                                        <img style="width:100%;" src="#" alt="" title="" class="img-responsive">
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-7 col-sm-7">
                                <a href="#">#
                                </a>
                            </div>
                        </div>
                   </div>
                   <div class="col-sm-12 btn-all-news">
                        <a href="#" class="btn btn-block btn-success">এই বিভাগের সব খবর</a>
                    </div>
                    <br>
                   <h1>
                    Facebook Page Like box
                   </h1>
                    <br>
                    <div class="img-responsive hidden-xs" style="padding-bottom:5px;">
                           
                            @foreach($ad19 as $ads20)
                                @if($ads20->type == 0)
                                <img style="width:100%;" src="{{$ads20->ads}}" class="img-responsive" alt=""> 
                                @else
                                    {{$ads20->ads}}
                                @endif
                                <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/{{$ads20->id}}', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
                            @endforeach

                            </div>
                    <div class="img-responsive hidden-xs" style="padding-bottom:5px;">
                           
                            @foreach($ad20 as $ads21)
                                @if($ads21->type == 0)
                                <img style="width:100%;" src="{{$ads21->ads}}" class="img-responsive" alt=""> 
                                @else
                                    {{$ads21->ads}}
                                @endif
                                <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/{{$ads21->id}}', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
                            @endforeach

                            </div>
                  <div class="img-responsive hidden-xs" style="padding-bottom:5px;">
                           
                            @foreach($ad21 as $ads22)
                                @if($ads22->type == 0)
                                <img style="width:100%;" src="{{$ads22->ads}}" class="img-responsive" alt=""> 
                                @else
                                    {{$ads22->ads}}
                                @endif
                                <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/{{$ads22->id}}', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
                            @endforeach

                            </div>
                    <div class="img-responsive hidden-xs" style="padding-bottom:5px;">
                           
                            @foreach($ad22 as $ads23)
                                @if($ads23->type == 0)
                                <img style="width:100%;" src="{{$ads23->ads}}" class="img-responsive" alt=""> 
                                @else
                                    {{$ads23->ads}}
                                @endif
                                <a href="" onclick="window.open('{{URL('/')}}/admin/ads_manager/{{$ads23->id}}', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >Add</a>
                            @endforeach

                            </div>


               </div>
           </aside>
        </div><!-- end row -->
</div></div></div></div>
@stop()