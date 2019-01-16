<div class="col-md-12 col-xs-12 col-lg-4 col-sm-5 titlem sidebar rightSidebar">
  <div class="theiaStickySidebar">
<div class="row no-gutters plr15">


 
<div class="col-lg-12 col-md-6 float-left no-padding">
<h6 class="text-uppercase flama-font titlest"><a href="{{url('feature-news.html')}}">TOP NEWS</a></h6>
 @foreach($ArrRecentFeatureNewsList as   $ArrRecenttopnews)
 <div class="media pt-2 flama mb-3 topnews"> <a href="{{$ArrRecenttopnews->url}}"><img src="@if($ArrRecenttopnews->story_type =='video'){{ $ArrRecenttopnews->photopath }}@elseif($ArrRecenttopnews->story_type =='album'){{config('constants.awsbaseurl').config('constants.awalbumimagedir')}}{{ $ArrRecenttopnews->photopath }}@else{{config('constants.awsbaseurl')}}{{ $ArrRecenttopnews->photopath }}@endif" alt="{{ $ArrRecenttopnews->phototitle }}" class="mr-2"></a>
  <p class="media-body pb-2 mb-0 small2 lh-125"> 
  <a href="{{$ArrRecenttopnews->url}}">{{Str::limit($ArrRecenttopnews->title, $limit = 90, $end = '...')}}</a><br>
  <span class="date d-block mt-2"><i class="far fa-clock"></i><a href="{{url('')}}/articles/{{(new DateTime($ArrRecenttopnews->publish_date))->format('Y-m-d')}}.html" >@if(Carbon\Carbon::parse($ArrRecenttopnews->updated_at)->diffInWeeks() > 1)
                            {{(new DateTime($ArrRecenttopnews->publish_date))->format('d-F-Y')}} 
                            @else 
                            {{ Carbon\Carbon::parse($ArrRecenttopnews->publish_date)->diffForHumans()}}
                            @endif</a></span>
  </p>
</div>
@endforeach
<div class="col-lg-12 col-12">
        <p class="text-right flama-font small mt-2"><a href="{{url('feature-news.html')}}" class="pnk">SEE MORE <i class="fas fa-arrow-circle-right"></i></a></p>
        </div>
 </div>
   <div class="col-lg-12 col-md-6 float-left no-padding text-center desktopadd">@if(isset($parents[8])) @if($parents[8]->forpage=='story')@if($parents[8]->status==1){!!$parents[8]->bscript!!}@else @endif @else  @if($parents[8]->status==1){!!$parents[8]->bscript!!}@else @endif @endif @endif</div>
   
   <div class="col-lg-12 col-md-6 float-left no-padding titlem mt-3 editorpick">
<h6 class="text-uppercase flama-font titlest"><a href="{{url('editor-picks.html')}}">EDITOR'S PICK</a></h6>
 <div id="editorspick" class="carousel vert carousel-showmanymoveone2 slide mt-3" data-ride="carousel" data-interval="900">
         <div class="carousel-inner">
           @foreach($ArrRecentImportaintNewsHeaderList as $index =>  $ArrRecentImportaintNewsHeaderList)
            @if($index == 0)
            <div class="carousel-item  mb-1 active">
            <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 no-padding" >
                  <a href="{{$ArrRecentImportaintNewsHeaderList->url}}"><img src="{{Config::get('constants.awsbaseurl')}}{{ $ArrRecentImportaintNewsHeaderList->photopath }}" alt="{{ $ArrRecentImportaintNewsHeaderList->phototitle }}" width="100%"></a>
                <p class="flama pb-2 mt-1 small lh-130 mb-0"> 
  <a href="{{$ArrRecentImportaintNewsHeaderList->url}}">{{Str::limit($ArrRecentImportaintNewsHeaderList->title, $limit = 90, $end = '...')}}</a><br>
  <span class="date"><i class="far fa-clock"></i> <a href="{{url('')}}/articles/{{$ArrRecentImportaintNewsHeaderList->publish_date}}.html" >@if(Carbon\Carbon::parse($ArrRecentImportaintNewsHeaderList->publish_date && $ArrRecentImportaintNewsHeaderList->publish_date ? $ArrRecentImportaintNewsHeaderList->publish_date .' '. $ArrRecentImportaintNewsHeaderList->publish_time : '---')->diffInWeeks() > 1)
                            {{(new DateTime($ArrRecentImportaintNewsHeaderList->publish_date && $ArrRecentImportaintNewsHeaderList->publish_date ? $ArrRecentImportaintNewsHeaderList->publish_date .' '. $ArrRecentImportaintNewsHeaderList->publish_time : '---'))->format('d-F-Y')}} 
                            @else 
                            {{ Carbon\Carbon::parse($ArrRecentImportaintNewsHeaderList->publish_date && $ArrRecentImportaintNewsHeaderList->publish_date ? $ArrRecentImportaintNewsHeaderList->publish_date .' '. $ArrRecentImportaintNewsHeaderList->publish_time : '---')->diffForHumans()}}
                            @endif</a></span>
  </p>
                </div>
            </div>
            @else
            <div class="carousel-item  mb-1">
            <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 no-padding" >
               <a href="{{$ArrRecentImportaintNewsHeaderList->url}}"><img src="{{Config::get('constants.awsbaseurl')}}{{ $ArrRecentImportaintNewsHeaderList->photopath }}" alt="{{ $ArrRecentImportaintNewsHeaderList->phototitle }}" width="100%"></a>
                <p class="flama pb-2 mt-1 small lh-130 mb-0"> 
  <a href="{{$ArrRecentImportaintNewsHeaderList->url}}">{{Str::limit($ArrRecentImportaintNewsHeaderList->title, $limit = 90, $end = '...')}}</a><br>
  <span class="date"><i class="far fa-clock"></i> <a href="{{url('')}}/articles/{{$ArrRecentImportaintNewsHeaderList->publish_date}}.html" >@if(Carbon\Carbon::parse($ArrRecentImportaintNewsHeaderList->publish_date && $ArrRecentImportaintNewsHeaderList->publish_date ? $ArrRecentImportaintNewsHeaderList->publish_date .' '. $ArrRecentImportaintNewsHeaderList->publish_time : '---')->diffInWeeks() > 1)
                            {{(new DateTime($ArrRecentImportaintNewsHeaderList->publish_date && $ArrRecentImportaintNewsHeaderList->publish_date ? $ArrRecentImportaintNewsHeaderList->publish_date .' '. $ArrRecentImportaintNewsHeaderList->publish_time : '---'))->format('d-F-Y')}} 
                            @else 
                            {{ Carbon\Carbon::parse($ArrRecentImportaintNewsHeaderList->publish_date && $ArrRecentImportaintNewsHeaderList->publish_date ? $ArrRecentImportaintNewsHeaderList->publish_date .' '. $ArrRecentImportaintNewsHeaderList->publish_time : '---')->diffForHumans()}}
                            @endif</a></span>
  </p>
                </div>
            </div>
            @endif
            @endforeach

        </div>
        <div class="col-lg-12 col-12">
        <p class="text-right flama-font small mt-2"><a href="{{url('editor-picks.html')}}" class="pnk">SEE MORE <i class="fas fa-arrow-circle-right"></i></a></p>
        </div>
    </div>
</div>
    
 <div class="col-lg-12 col-md-6 float-left no-padding text-center mb-3 desktopadd">@if(isset($parents[9])) @if($parents[9]->forpage=='story')@if($parents[9]->status==1){!!$parents[9]->bscript!!}@else @endif @else  @if($parents[9]->status==1){!!$parents[9]->bscript!!}@else @endif @endif @endif</div>

<div class="col-lg-12 col-md-6 float-left no-padding d-table titlem latestnews mt-4">
<h6 class="text-uppercase flama-font titlest"><a href="{{url('latest-news.html')}}">Latest News</a></h6>
<div class="scrollbar latestnews" id="style-4">
   @foreach($ArrRecentNewsMiddelbarList as $ArrRecentNewsMiddelbarList)
<div class="media pt-3 flama"> <a href="{{$ArrRecentNewsMiddelbarList->url}}"><img src="{{Config::get('constants.awsbaseurl')}}{{ $ArrRecentNewsMiddelbarList->photopath }}" alt="{{ $ArrRecentNewsMiddelbarList->phototitle }}" class="mr-2" ></a>
  <p class="media-body pb-1 mb-0 small lh-125"> 
  <a href="{{$ArrRecentNewsMiddelbarList->url}}">{{Str::limit($ArrRecentNewsMiddelbarList->title, $limit = 90, $end = '...')}}</a><br>
  <span class="date"><i class="far fa-clock"></i><a href="{{url('')}}/articles/{{$ArrRecentNewsMiddelbarList->publish_date}}.html" >@if(Carbon\Carbon::parse($ArrRecentNewsMiddelbarList->publish_date && $ArrRecentNewsMiddelbarList->publish_date ? $ArrRecentNewsMiddelbarList->publish_date .' '. $ArrRecentNewsMiddelbarList->publish_time : '---')->diffInWeeks() > 1)
                            {{(new DateTime($ArrRecentNewsMiddelbarList->publish_date && $ArrRecentNewsMiddelbarList->publish_date ? $ArrRecentNewsMiddelbarList->publish_date .' '. $ArrRecentNewsMiddelbarList->publish_time : '---'))->format('d-F-Y')}} 
                            @else 
                            {{ Carbon\Carbon::parse($ArrRecentNewsMiddelbarList->publish_date && $ArrRecentNewsMiddelbarList->publish_date ? $ArrRecentNewsMiddelbarList->publish_date .' '. $ArrRecentNewsMiddelbarList->publish_time : '---')->diffForHumans()}}
                            @endif</a></span>
  </p>
</div>
@endforeach
 <div class="col-lg-12 col-12">
        <p class="text-right flama-font small mt-2"><a href="{{url('latest-news.html')}}" class="pnk">SEE MORE <i class="fas fa-arrow-circle-right"></i></a></p>
        </div>
</div>

</div>


 <div class="col-lg-12 col-md-6 float-left no-padding text-center mt-4 desktopadd">@if(isset($parents[10])) @if($parents[10]->forpage=='story')@if($parents[10]->status==1){!!$parents[10]->bscript!!}@else @endif @else  @if($parents[10]->status==1){!!$parents[10]->bscript!!}@else @endif @endif @endif</div>

<div class="col-lg-12 col-md-6 float-left no-padding titlem mt-4 mostread">
<h6 class="text-uppercase flama-font titlest">MOST READ</h6>
<ol class="flama mt-3">
  @foreach($arrmostread as  $arrmostread)
 <div class="media pt-2 flama mb-3"> <a href="{{$arrmostread->url}}"><img src="{{Config::get('constants.awsbaseurl')}}{{ $arrmostread->photopath }}" class="mr-2" onerror="this.onerror=null;this.src='{{Config::get('constants.SiteCmsurl')}}default-story.jpg';"></a>
  <p class="media-body pb-2 mb-0 small2 lh-125"> 
  <a href="{{$arrmostread->url}}"> {{ $arrmostread->title}}</a><br>
  <span class="date d-block mt-2"><i class="far fa-clock"></i> <a href="{{url('')}}/articles/{{$arrmostread->publish_date}}.html" >@if(Carbon\Carbon::parse($arrmostread->publish_date)->diffInWeeks() > 1)
                            {{(new DateTime($arrmostread->publish_date))->format('d-F-Y')}} 
                            @else 
                            {{ Carbon\Carbon::parse($arrmostread->publish_date)->diffForHumans()}}
                            @endif</a></span>
  </p>
</div>
  @endforeach
</ol>
</div>
<div class="col-lg-12 col-md-6 float-left no-padding text-center mt-4 desktopadd">@if(isset($parents[11])) @if($parents[11]->forpage=='story')@if($parents[11]->status==1){!!$parents[11]->bscript!!}@else @endif @else  @if($parents[11]->status==1){!!$parents[11]->bscript!!}@else @endif @endif @endif</div>

 <div class="col-md-12 col-lg-12 col-sm-6 col-12 no-padding mt-0 float-left whatsappicon text-center">
<a href="https://wb.messengerpeople.com/?widget_hash=0ea36115f3d0671767cfbef55419271a&lang=en&wn=0&pre=1" target="_blank"><img src="https://storage.googleapis.com/news-photo/static-images/whatsapp.png" class="img-fluid"></a>
</div> 
<div class="col-md-12 col-lg-12 col-sm-6 col-12 no-padding mt-4 float-left" style="border: 2px solid #0f8ea8;
    padding: 15px 0;">
<form class="card card-sm contact_form" id="contact_form" method="post">
 
 
<div class="col float-left mt-0 pb-0">
<h4 class="flama-font mt-0 mtm pnk">e4m Daily Dozen</h4>
<p class="mb-2 mt-2 flama-font">Our top 12 headlines, in one daily newsletter.</p>

<div class="card-body row no-gutters align-items-center d-block">
<!--end of col-->
<div class="col">
<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
<input type="email" class="form-control form-control-sm form-control-borderless ui-autocomplete-input" id="s_email" required placeholder="E-mail" name="s_email">
<span id='mail_success' style="display: none;" class='success mail_success' ><img src='{{url('')}}/img/success.png'>Thanks For Subscribe!</span>
</div>
<!--end of col-->
<div class="col-auto mt-2">
<button class="btn btn-sm flama-font subscribe" id="subscribe" type="button">SUBSCRIBE</button>
</div>
<p class="f10 pb-0 mb-0 fira">By clicking Sign Up, I agree to the <a target="_blank" href="{{url('')}}/term-condition.html">Terms of Use</a> and <a target="_blank" href="{{url('')}}/privacy-policy.html">Privacy Policy</a>.</p>

<!--end of col-->
</div>
</div>

</form>
</div>

<div class="col-lg-12 col-md-6 col-12 float-left no-padding d-table titlem latestnews mt-4">
<h6 class="text-uppercase flama-font mt-0" style="border-bottom:2px solid #c12450;">#TRENDING <span class="pnk">Topic</span><span class="float-right flama-font pnk f18"><a href="https://www.exchange4media.com/tags.html" class="pnk"><i class="fas fa-arrow-circle-right"></i></a></span>
</h6>
<ul class="trend border p-3">
  @foreach((new \App\Helpers\Helper)->trand() as $tren)
  <li><a href="https://www.exchange4media.com/tags/{{str_slug($tren->tag)}}.html" class="trending">#{{$tren->tag}}</a></li>
  @endforeach
</ul>
</div>

<div class="col-lg-12 col-md-6 col-12 mt-2 float-left bg-light no-padding mt-4">
<h6 class="text-uppercase flama-font mt-0" style="border-bottom:2px solid #c12450;">STAY <span class="pnk">CONNECTED</span>
</h6>

            <div class="list-group">
                <a href="https://www.facebook.com/exchange4media" target="_blank" class="list-group-item facebook-like">
                    <h3 class="float-right">
                        <i class="fab fa-facebook-f"></i>
                    </h3>
                    <h4 class="list-group-item-heading count flama-font">
                        {{(new \App\Helpers\Helper)->stay()->fb_count}}</h4>
                    <p class="list-group-item-text">
                        Facebook Likes</p>
                </a>
                <a href="https://twitter.com/e4mtweets" target="_blank" class="list-group-item twitter">
                    <h3 class="float-right">
                        <i class="fab fa-twitter"></i>
                    </h3>
                    <h4 class="list-group-item-heading count flama-font">
                        {{(new \App\Helpers\Helper)->stay()->twiiter_count}}</h4>
                    <p class="list-group-item-text">
                        Twitter Followers</p>
                </a>
                <a href="https://in.linkedin.com/company/exchange4media" target="_blank" class="list-group-item linkedin">
                    <h3 class="float-right">
                        <i class="fab fa-linkedin-in"></i>
                    </h3>
                    <h4 class="list-group-item-heading count flama-font">
                      {{(new \App\Helpers\Helper)->stay()->linkedin_count}}</h4>
                    <p class="list-group-item-text">
                        Linkedin</p>
                </a>
                
                <a href="https://www.youtube.com/user/exchange4media" target="_blank" class="list-group-item youtube">
                    <h3 class="float-right">
                        <i class="fab fa-youtube"></i>
                    </h3>
                    <h4 class="list-group-item-heading count flama-font">
                      {{(new \App\Helpers\Helper)->stay()->youtube}}</h4>
                    <p class="list-group-item-text">
                        Youtube Subscribers</p>
                </a>
            </div>




 </div>
<div class="col-lg-12 col-md-12 float-left no-padding titlem mt-4">
<h6 class="text-uppercase flama-font titlest mt-3">Videos <span><a class="flama-font float-right small pnk" href="{{url('videos.html')}}" >SEE MORE <i class="fas fa-arrow-circle-right"></i></a></span></h6>

<div class="col no-padding text-center vid mt-2">
 <div id="sidegallery" class="carousel slide sidecap">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        @foreach($ArrMenuSLatestVideo as $key => $ArrMenuSLatestVideo)
                      @if($key == 0)
                        <div class="carousel-item active" data-slide-number="{{$key}}">
                            <a class="position-relative d-block" href="{{url('')}}/videos/{{str_slug($ArrMenuSLatestVideo->title)}}-{{$ArrMenuSLatestVideo->yid}}.html"><img src="{{$ArrMenuSLatestVideo->img_thumb}}" class="img-fluid">
                            <div class="vd"><i class="fas fa-play"></i></div></a>
                            <div class="figure-caption bg-dark p-2 cw">
                            <a href="{{url('')}}/videos/{{str_slug($ArrMenuSLatestVideo->title)}}-{{$ArrMenuSLatestVideo->yid}}.html" style="color: #fff;">{{$ArrMenuSLatestVideo->title}}</a>
                            </div>

                        </div>
                        @else
                          <div class="carousel-item" data-slide-number="{{$key}}">
                            <a class="position-relative d-block" href="{{url('')}}/videos/{{str_slug($ArrMenuSLatestVideo->title)}}-{{$ArrMenuSLatestVideo->yid}}.html"><img src="{{$ArrMenuSLatestVideo->img_thumb}}" class="img-fluid">
                            <div class="vd"><i class="fas fa-play"></i></div></a>
                            <div class="figure-caption bg-dark p-2 cw">
                            <a href="{{url('')}}/videos/{{str_slug($ArrMenuSLatestVideo->title)}}-{{$ArrMenuSLatestVideo->yid}}.html" style="color: #fff;">{{$ArrMenuSLatestVideo->title}}</a>
                            </div>

                        </div>
                        @endif
                         @endforeach
                         <a class="carousel-control-prev" href="#sidegallery" role="button" data-slide="prev">
    <i class="fas fa-angle-left"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#sidegallery" role="button" data-slide="next">
    <i class="fas fa-angle-right"></i>
    <span class="sr-only">Next</span>
  </a>          
                        </div></div>
</div>
</div>
</div>
</div>
</div>