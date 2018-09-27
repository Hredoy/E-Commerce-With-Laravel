@extends('layout.admin')
@section('content')
<div class="middle-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" style="margin-bottom: 2px;">
					<a href="{{url('')}}"><img src="http://www.deshbidesh24.com/wp-content/uploads/2016/06/Deshbidesh24.png" alt="Deshbidesh24" style="max-height:130px!important; width:50%;margin-left: 14%;display: inline-block;" title="bangla news" class="img-responsive">

						@foreach($ad23 as $ads24)

                            <img src="{{$ads24->ads}}" onclick="window.open('{{URL('/')}}/admin/ads_manager/24', 'ads_manager',

'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" class="img-responsive" style="width: 20%;display: inline-block;" alt=""> 

                        @endforeach
                        
					</a>

				</div>
			</div>
		</div>
</div>
@stop()