@extends('partials.app')
@section('content')
<!--main div start here-->
<main role="main">
<div class="container bw">
   <div class="leftgate"> @if(isset($parents[7])) @if($parents[7]->status==1){!!$parents[7]->bscript!!}@else @endif @endif</div>
    <div class="rightgate">@if(isset($parents[6]))  @if($parents[6]->status==1){!!$parents[6]->bscript!!}@else @endif @endif</div>
<div class="col no-padding p10 text-center">
@if(isset($parents[4])) @if($parents[4]->status==1){!!$parents[4]->bscript!!}@else @endif @endif
</div>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Video</li>
  </ol>
</nav>
<!--MAIN FIRST ROW START-->
<div class="col no-padding mt10">
<div class="row">
<!--MIDDLE TOP NEWS START here-->
<div class="col-md-12 col-lg-8 col-xs-12 col-sm-12" id="results">
    <div class="row mt-2 no-gutters border-bottom-pnk">
<h5 class="flama text-uppercase mb-0"><kbd><i class="fas fa-play"></i> Video</kbd> </h5>            
</div>
@foreach($ArrlistingVideos  as $Photos)
<div class="col-md-12 col-lg-12 media pt-3 pb-3 category border-bottom"> <a href="{{url('')}}/videos/{{str_slug($Photos->title)}}-{{$Photos->yid}}.html" class="position-relative d-block"><img src="{{$Photos->img_thumb}}" class="img-fluid mr-3"><div class="vdthmb "><i class="fas fa-play"></i></div></a><div class="box media-body row no-gutters"><h6 class="flama-font pb-1 mb-0 lh-150"> <a href="{{url('')}}/videos/{{str_slug($Photos->title)}}-{{$Photos->yid}}.html">{{$Photos->title}}</a></h6>
    <p class="date"><i class="fas fa-user"></i> <a href="#" >exchange4media Staff</a>   <a href="#" >   <i class="far fa-clock"></i> @if(Carbon\Carbon::parse($Photos->created_at)->diffInWeeks() > 1)
                            {{(new DateTime($Photos->created_at))->format('d-F-Y')}} 
                            @else 
                            {{ Carbon\Carbon::parse($Photos->created_at)->diffForHumans()}}
                            @endif</a></p>
                <div class="col-md-12 col-lg-12 float-left no-padding font25 mt-3"><ul class="social-list float-left"><li><i class="fas fa-share-square"></i></li><li><a href="https://www.facebook.com/sharer.php?u={{url('')}}/videos/{{str_slug($Photos->title)}}-{{$Photos->yid}}.html&utm_source=desktop&utm_medium=facebook&utm_campaign=facebook&utm_term=facebook&utm_content=facebook"
target="_blank"><i class="fab fa-facebook-f"></i></a></li><li> <a href="https://twitter.com/intent/tweet?url={{url('')}}/videos/{{str_slug($Photos->title)}}-{{$Photos->yid}}.html&text={{$Photos->title}}
&via=e4mtweets&utm_source=desktop&utm_medium=twitter&utm_campaign=twitter&utm_term=twitter&utm_content=twitter"
target="_blank"><i class="fab fa-twitter"></i></a></li><li> <a href="https://www.linkedin.com/shareArticle?mini=true
&url={{url('')}}/videos/{{str_slug($Photos->title)}}-{{$Photos->yid}}.html
&title={{$Photos->title}}
&summary={{$Photos->title}}
&source=exchange4media.com&utm_source=desktop&utm_medium=linkedin&utm_campaign=linkedin&utm_term=linkedin&utm_content=linkedin"
target="_blank"><i class="fab fa-linkedin-in"></i></a></li><li> <a href="https://api.whatsapp.com/send?text={{$Photos->title}}{{url('')}}/videos/{{str_slug($Photos->title)}}-{{$Photos->yid}}.html&utm_source=desktop&utm_medium=whatsapp&utm_campaign=whatsapp&utm_term=whatsapp&utm_content=whatsapp"
target="_blank"><i class="fab fa-whatsapp"></i></a></li><li> <a href="mailto:?subject={{$Photos->title}}- exchange4media&body=Hi,%0A
 I thought you'd like this:%0A%0A
{{url('')}}/videos/{{str_slug($Photos->title)}}-{{$Photos->yid}}.html&utm_source=desktop&utm_medium=email&utm_campaign=email&utm_term=email&utm_content=email"
target="_blank"><i class="fas fa-envelope"></i></a></li></ul><span class="morebtn float-right"> <a href="{{url('')}}/videos/{{str_slug($Photos->title)}}-{{$Photos->yid}}.html" class="btn btn-dark btn-sm"><i class="far fa-image"></i> View Video</a></span></div></div></div>@endforeach


{!! $ArrlistingVideos->render()!!}

</div>
<!-- <div>
<center><p class="ajax-loading"><img src="{{ asset('img/loading.gif') }}" style="width: 10%;" /></p></center>
</div> -->
<!--RIGHT SIDE EDITOR'S PICK START here-->
@include('partials.rightsidebar')
<!--RIGHT SIDE EDITOR'S PICK END here-->
</div>
</div>
<!--MAIN FIRST ROW END-->
</div>
</main>
<!--main div end here-->


@endsection           