@extends('layout.admin')

@section('content')
 <div class="content-wrapper">
    <div class="container-fluid">
      
        <div class="row">
            
            <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="form-group">
                    <ul class='url{{$post->id}}'>
                     @foreach($post->categorys as $cata)
                         <li><div class='copy{{$cata->id}}'>
                            <span style="display: inline;">
                                {{url('')}}/news/{{$cata->name}}</span>/<span class="url{{$cata->id}}" style="display:inline">{{$post->title}}</span></div><br>
                         <button class="btn btn-default" onclick="copyToClipboard('.copy{{$cata->id}}')"><i class="fa fa-clipboard fa-lg"></i></button>
                                                </li>

                     @endforeach
                    </ul> 
                </div>
                      </div>
                      <div class="card-footer">
                          <a href="{{route('post.index')}}" class="btn btn-primary">Return To Home</a>
                      </div>
                  </div>
            </div>
          
        </div>
    </div>
</div>

@stop()
@section('script')
<script>
    @foreach($post->categorys as $catas)
        var url = $(".url{{$catas->id}}").text();
        var values = url.replace(/ /g, '%20');
        $('.url{{$catas->id}}').text(values);
        @endforeach
        function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
@stop()