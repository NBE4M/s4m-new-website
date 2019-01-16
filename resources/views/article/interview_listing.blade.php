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
    <li class="breadcrumb-item active" aria-current="page">{{ ucfirst(trans($display_name)) }} news</li>
  </ol>
</nav>
<!--MAIN FIRST ROW START-->
<div class="col no-padding mt10">
<div class="row">
<!--MIDDLE TOP NEWS START here-->
<div class="col-md-12 col-lg-8 col-xs-12 col-sm-12" id="results">
<div class="row mt-2 no-gutters border-bottom-pnk mb-4">
    <h5 class="flama text-uppercase mb-0"><kbd>{{$display_name}}</kbd> </h5>
</div>
    <div class="row no-gutters">
@if($display_name=='Authors')
<div class="col-md-12 col-12 col-lg-12 col-sm-12 no-padding mt-3 mb-5 d-flex border-blu">
                                    <div class="col-md-12 col-12 col-lg-12 col-sm-12 float-left borderleftpnk">
                                    <div class="media pt-2 flama mb-4 authorstory"> <a href="{{url('')}}/author/{{str_slug($authorbio->name)}}-{{$authorbio->author_id}}.html" ><img src="{{Config::get('constants.awsbaseurl')}}{{Config::get('constants.awauthordir')}}{{$authorbio->photo}}" class="mr-2" onerror="this.onerror=null;this.src='https://storage.googleapis.com/news-photos/default-story.jpg';"></a>
                                    <p class="media-body mb-0 small2 lh-125"> 
                                    <span class="flama mt-0 f20"><a href="{{url('')}}/author/{{str_slug($authorbio->name)}}-{{$authorbio->author_id}}.html" >{{$authorbio->name}}</a></span><br>
                                    @if(!empty($authorbio->designation))
                                    <span class="story-author d-block mt-1"><i class="fas fa-user"></i> <a href="mailto:{{$authorbio->email}}">{{$authorbio->designation}}</a></span>
                                    @endif
                                    <span class="story-author d-block mt-1"><i class="fas fa-envelope"></i> <a href="mailto:{{$authorbio->email}}">{{$authorbio->email}}</a></span>
                                    @if(!empty($authorbio->twitter))
                                    <span class="story-author d-block mt-1"><i class="fab fa-twitter"></i> <a href="https://twitter.com/{{$authorbio->twitter}}">{{$authorbio->twitter}}</a></span>
                                    @endif
                                    </p>
                                    </div>
                                    @if(!empty($authorbio->bio))
                                    <p class="quotation m-2"> 
                                    {{$authorbio->bio}}</p>
                                    @endif
                                    </div>
                                    </div> 
                                    @endif

 
</div>

    @foreach( $ArrlistingArticles as $ArrlistingArticlespinit)
    <div class="row pt-3 pb-1 border-top"><div class="col-md-12 col-lg-12"><h4 class="flama-font pb-1 mb-0"> <a class ="views" href="{{$ArrlistingArticlespinit->url}}">{{$ArrlistingArticlespinit->title}}</a></h4></div><div class="col-md-12 col-lg-12 media pt-2 mb-3 category"> <a class ="views" href="{{$ArrlistingArticlespinit->url}}"><img src="{{Config::get('constants.SiteCmsurl')}}{{ $ArrlistingArticlespinit->photopath }}" alt="{{ $ArrlistingArticlespinit->phototitle }}" class="mr-3" onerror="this.onerror=null;this.src='{{Config::get('constants.SiteCmsurl')}}default-story.jpg';"></a><div class="box media-body"><p class="b-font mb-2 mt-0">{{$ArrlistingArticlespinit->summary}}</p><p class="date mt-1 font-weight-bold"> <i class="fas fa-user"></i> <a href="{{url('')}}/author/{{str_slug($ArrlistingArticlespinit->authorname)}}-{{$ArrlistingArticlespinit->author_id}}.html">{{$ArrlistingArticlespinit->authorname}}</a> <i class="far fa-clock"></i> <a href="{{url('')}}/articles/{{$ArrlistingArticlespinit->publish_date}}.html">@if(Carbon\Carbon::parse($ArrlistingArticlespinit->publish_date && $ArrlistingArticlespinit->publish_date ? $ArrlistingArticlespinit->publish_date .' '. $ArrlistingArticlespinit->publish_time : '---')->diffInWeeks() > 1)
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
target="_blank"><i class="fab fa-whatsapp"></i></a></li><li> <a href="mailto:?subject={{$ArrlistingArticlespinit->title}}- exchange4media&body=Hi,%0A
 I thought you'd like this:%0A%0A
{{$ArrlistingArticlespinit->url}}&utm_source=desktop&utm_medium=email&utm_campaign=email&utm_term=email&utm_content=email"
target="_blank"><i class="fas fa-envelope"></i></a></li></ul></div></div></div></div>
@endforeach

<div class="row pt-3 pb-1">
<div class="col-md-12 col-xs-12 col-lg-12 text-center no-padding">@if(isset($parents[5])) @if($parents[5]->status==1){!!$parents[5]->bscript!!}@else @endif @endif</div>
</div>

{{ $ArrlistingArticles->links() }}
</div>
<!--RIGHT SIDE EDITOR'S PICK START here-->
@include('partials.rightsidebar')
<!--RIGHT SIDE EDITOR'S PICK END here-->
</div>
</div>
<!-- <script>
var page = 1; //track user scroll as page number, right now page number is 1
load_more(page); //initial content load
$(window).scroll(function() { //detect page scroll
    if($(window).scrollTop() + $(window).height() >= $(document).height()*0.7) { //if user scrolled from top to bottom of the page
        page++; //page number increment
        load_more(page); //load content   
    }
});   
$(document.body).on('touchstart touchend touchmove',function() {
        page++; //page number increment
        load_more(page); //load content  
});   
function load_more(page){
  $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html",
            beforeSend: function()
            {
                $('.ajax-loading').show();
            }
        })
        .done(function(data)
        {
            if(data.length == 0){
            console.log(data.length);
               
                //notify user if nothing to load
                $('.ajax-loading').html("No more records!");
                return;
            }
            $('.ajax-loading').hide(); //hide loading animation once data is received
            $("#results").append(data); //append data into #results element          
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
             
        });
 }
</script> -->
<!--MAIN FIRST ROW END-->
</div>
</main>
<!--main div end here-->


@endsection           