@extends('partials.app')

@section('content')
<!--main div start here-->
<main role="main">
<div class="container bw">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">HOME</a></li>
    <li class="breadcrumb-item active" aria-current="page">SEARCH</li>
  </ol>
</nav>
<!--MAIN FIRST ROW START-->
<div class="col no-padding mt10">
<div class="row">
<!--MIDDLE TOP NEWS START here-->
<div class="col-md-12 col-lg-8 col-xs-12 col-sm-12" id="results">
<div class="row mt-2 no-gutters border-bottom-pnk mb-4">
    <h5 class="flama-font text-uppercase mb-0"><kbd>SEARCH</kbd>   Results</h5>
</div>
    
    <div class="row no-gutters">
       @foreach( $ArrlistingArticles as $ArrlistingArticlespinit)
    <div class="row pt-3 pb-1 border-top"><div class="col-md-12 col-lg-12"><h4 class="flama-font pb-1 mb-0"> <a class ="views" href="{{$ArrlistingArticlespinit->url}}">{{$ArrlistingArticlespinit->title}}</a></h4></div><div class="col-md-12 col-lg-12 media pt-2 mb-3 category"> <a class ="views" href="{{$ArrlistingArticlespinit->url}}"><img src="{{Config::get('constants.SiteCmsurl')}}{{ $ArrlistingArticlespinit->photopath }}" alt="{{ $ArrlistingArticlespinit->phototitle }}" class="mr-3" onerror="this.onerror=null;this.src='{{Config::get('constants.SiteCmsurl')}}default-story.jpg';"></a><div class="box media-body"><p class="b-font mb-2 mt-0">{{$ArrlistingArticlespinit->summary}}</p><p class=" date mt-1 font-weight-bold"> <i class="fas fa-user"></i> <a href="{{url('')}}/author/{{str_slug($ArrlistingArticlespinit->authorname)}}-{{$ArrlistingArticlespinit->author_id}}.html">{{$ArrlistingArticlespinit->authorname}}</a> <i class="far fa-clock"></i> <a href="{{url('')}}/articles/{{$ArrlistingArticlespinit->publish_date}}.html">@if(Carbon\Carbon::parse($ArrlistingArticlespinit->publish_date && $ArrlistingArticlespinit->publish_date ? $ArrlistingArticlespinit->publish_date .' '. $ArrlistingArticlespinit->publish_time : '---')->diffInWeeks() > 1)
                            {{(new DateTime($ArrlistingArticlespinit->publish_date && $ArrlistingArticlespinit->publish_date ? $ArrlistingArticlespinit->publish_date .' '. $ArrlistingArticlespinit->publish_time : '---'))->format('d-F-Y')}} 
                            @else 
                            {{ Carbon\Carbon::parse($ArrlistingArticlespinit->publish_date && $ArrlistingArticlespinit->publish_date ? $ArrlistingArticlespinit->publish_date .' '. $ArrlistingArticlespinit->publish_time : '---')->diffForHumans()}}
                            @endif</a></p>

            <div class="col-md-12 col-lg-12 float-left no-padding font25 mt-3"><ul class="social-list"><li><i class="fas fa-share-square"></i></li><li><a href="https://www.facebook.com/sharer.php?u={{$ArrlistingArticlespinit->url}}&utm_source=desktop&utm_medium=facebook&utm_campaign=facebook&utm_term=facebook&utm_content=facebook"
target="_blank"><i class="fab fa-facebook-f"></i></a></li><li> <a href="https://twitter.com/intent/tweet?url={{$ArrlistingArticlespinit->url}}&text={{$ArrlistingArticlespinit->title}}
&via=e4mtweets&utm_source=desktop&utm_medium=twitter&utm_campaign=twitter&utm_term=twitter&utm_content=twitter"
target="_blank"><i class="fab fa-twitter"></i></a></li><li> <a href="https://www.linkedin.com/shareArticle??mini=true
&url={{$ArrlistingArticlespinit->url}}
&title={{$ArrlistingArticlespinit->title}}
&summary={{$ArrlistingArticlespinit->summary}}
&source=exchange4media.com&utm_source=desktop&utm_medium=linkedin&utm_campaign=linkedin&utm_term=linkedin&utm_content=linkedin"
target="_blank"><i class="fab fa-linkedin-in"></i></a></li><li> <a href="https://api.whatsapp.com/send?text={{$ArrlistingArticlespinit->title}}{{$ArrlistingArticlespinit->url}}&utm_source=desktop&utm_medium=whatsapp&utm_campaign=whatsapp&utm_term=whatsapp&utm_content=whatsapp"
target="_blank"><i class="fab fa-whatsapp"></i></a></li><li> <a href="mailto:?subject={{$ArrlistingArticlespinit->title}} - exchange4media&body=Hi,%0A
 I thought you'd like this:%0A%0A
{{$ArrlistingArticlespinit->url}}&utm_source=desktop&utm_medium=email&utm_campaign=email&utm_term=email&utm_content=email"
target="_blank"><i class="fas fa-envelope"></i></a></li></ul></div></div></div></div>
@endforeach
</div>
{{$ArrlistingArticles->appends(Request::only('search_text'))->links()}}
</div>
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