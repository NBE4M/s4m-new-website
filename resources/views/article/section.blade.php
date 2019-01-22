@extends('partials.app')

@section('content')
<!--main div start here-->
<!--middle-body-->
<div class="container mt-65 mb-4 mob-mt-75">
<!--<div class="row">
  <div class="breaking_news">
  <div class="label ripple">Breaking News</div>
  <div class="news_title"><strong>चौथी दुनिया का बड़ा खुलासा: दैनिक भास्कर के पूर्व ग्रुप एडिटर कल्पेश याग्निक की ‘हत्या’!</strong></div>
</div>
        
</div>-->
<!--center-part-->
<div class="row mob-p-0 mob-m-0">
  <!--left-part-->
  <div class="col-md-7 col-lg-9 dashed-bdr-r mob-bdr-0 mob-p-0 pl-md-0 pl-lg-3">
    <nav aria-label="breadcrumb">
      <small> 
        <ol class="breadcrumb bg-white text-warning p-0">
          <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
          @php $a = explode('.',Request::path()); @endphp
          @for($p=0;$p < 1 ; $p++)
          <li class="breadcrumb-item"><a href="{{Request::url()}}">{{ $a[$p] }}</a></li>
          @endfor
          <li class="breadcrumb-item active">News</li>
        </ol>
      </small>
    </nav>
    @if(isset($sectionArticles))  
    <div class="row m-0">
      @for($q=0;$q < 2;$q++)
      <div class="row m-0">
        <div class="col p-0 mb-2">
          <h4 class="story-page-hed mt-2 red-bdr-l border-dark">
            <a href="{{$sectionArticles[$q]->url}}">{{$sectionArticles[$q]->title}}</a>
          </h4>
        </div>
        <div class="row m-0">
          <div class="col-lg-4 col-md-12 p-0">
            <a href="{{$sectionArticles[$q]->url}}">
              <img class="img-fluid img-thumbnail" src="{{Config::get('constants.storagepath')}}/{{$sectionArticles[$q]->photopath}}" alt="{{$sectionArticles[$q]->phototitle}}" onerror="this.onerror=null;this.src='images/new-2.jpg';">
            </a>
          </div>
          <div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
            <p class="mb-2">{{$sectionArticles[$q]->summary}}
            </p>
            <p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> 
              <a href="#"> {{$sectionArticles[$q]->authorname}}</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sectionArticles[$q]->pickdate)->diffForHumans()}} </a>
            </p>
            <p class="mt-3">
              <a href="https://www.facebook.com/sharer.php?u={{$sectionArticles[$q]->url}}&utm_source=desktop&utm_medium=facebook&utm_campaign=facebook&utm_term=facebook&utm_content=facebook" target="_blank">
                <i class="fab fa-facebook-f text-warning"></i>
              </a> 
              <a href="https://twitter.com/intent/tweet?&url={{$sectionArticles[$q]->url}}&text={{$sectionArticles[$q]->title}}
                &via=samachar4media&utm_source=desktop&utm_medium=twitter&utm_campaign=twitter&utm_term=twitter&utm_content=twitter" target="_blank">
                <i class="fab fa-twitter text-warning ml-2"></i>
              </a> 
              <a href="https://www.linkedin.com/shareArticle??mini=true&url={{$sectionArticles[$q]->url}}
                &title={{$sectionArticles[$q]->title}}
                &summary={{$sectionArticles[$q]->summary}}
                &source=samachar4media.com&utm_source=desktop&utm_medium=linkedin&utm_campaign=linkedin&utm_term=linkedin&utm_content=linkedin"
                target="_blank">
                <i class="fab fa-linkedin-in text-warning ml-2"></i>
              </a> 
              <a href="https://api.whatsapp.com/send?text={{$sectionArticles[$q]->title}} {{$sectionArticles[$q]->url}}&utm_source=desktop&utm_medium=whatsapp&utm_campaign=whatsapp&utm_term=whatsapp&utm_content=whatsapp"
              target="_blank">
                <i class="fab fa-whatsapp text-warning ml-2"></i>
              </a> 
              <a href="mailto:?subject={{$sectionArticles[$q]->title}}-samachar4media&body=Hi,%0A I thought you'd like this:%0A%0A
              {{$sectionArticles[$q]->url}}&utm_source=desktop&utm_medium=email&utm_campaign=email&utm_term=email&utm_content=email"
              target="_blank">
                <i class="fas fa-envelope text-warning ml-2"></i>
              </a> 
            </p>
          </div>
        </div>
      </div>
      <div class="col p-0 mt-2 mb-2"><hr class="dashed-bdr-t mb-1"></div>
      @endfor             
      <div class="row mt-4 mb-4 m-0">
        <div class="col-md-12 text-center">
          <img src="images/top-banner-728x90-2.jpg" class="img-fluid">
        </div>
      </div>
      @for($q=2;$q < 8;$q++)
      <div class="row m-0">
        <div class="col p-0 mb-2">
          <h4 class="story-page-hed mt-2 red-bdr-l border-dark">
            <a href="{{$sectionArticles[$q]->url}}">{{$sectionArticles[$q]->title}}</a>
          </h4>
        </div>          
        <div class="row m-0">
          <div class="col-lg-4 col-md-12 p-0"> 
            <a href="{{$sectionArticles[$q]->url}}">
              <img class="img-fluid img-thumbnail" src="{{Config::get('constants.storagepath')}}/{{$sectionArticles[$q]->photopath}}" alt="{{$sectionArticles[$q]->phototitle}}" onerror="this.onerror=null;this.src='images/brand-2.jpg';">
            </a>
          </div>
          <div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
            <p class="mb-2">
              {{$sectionArticles[$q]->summary}}
            </p>
            <p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> 
              <a href="#"> {{$sectionArticles[$q]->authorname}}</a> <i class="far fa-clock ml-2 mr-1"></i> 
              <a href="#">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sectionArticles[$q]->pickdate)->diffForHumans()}}</a>
            </p>
            <p class="mt-3">
              <a href="https://www.facebook.com/sharer.php?u={{$sectionArticles[$q]->url}}&utm_source=desktop&utm_medium=facebook&utm_campaign=facebook&utm_term=facebook&utm_content=facebook" target="_blank">
                <i class="fab fa-facebook-f text-warning"></i>
              </a> 
              <a href="https://twitter.com/intent/tweet?&url={{$sectionArticles[$q]->url}}&text={{$sectionArticles[$q]->title}}
                &via=samachar4media&utm_source=desktop&utm_medium=twitter&utm_campaign=twitter&utm_term=twitter&utm_content=twitter" target="_blank">
                <i class="fab fa-twitter text-warning ml-2"></i>
              </a> 
              <a href="https://www.linkedin.com/shareArticle??mini=true&url={{$sectionArticles[$q]->url}}
                &title={{$sectionArticles[$q]->title}}
                &summary={{$sectionArticles[$q]->summary}}
                &source=samachar4media.com&utm_source=desktop&utm_medium=linkedin&utm_campaign=linkedin&utm_term=linkedin&utm_content=linkedin"
                target="_blank">
                <i class="fab fa-linkedin-in text-warning ml-2"></i>
              </a> 
              <a href="https://api.whatsapp.com/send?text={{$sectionArticles[$q]->title}} {{$sectionArticles[$q]->url}}&utm_source=desktop&utm_medium=whatsapp&utm_campaign=whatsapp&utm_term=whatsapp&utm_content=whatsapp"
              target="_blank">
                <i class="fab fa-whatsapp text-warning ml-2"></i>
              </a> 
              <a href="mailto:?subject={{$sectionArticles[$q]->title}}-samachar4media&body=Hi,%0A I thought you'd like this:%0A%0A
              {{$sectionArticles[$q]->url}}&utm_source=desktop&utm_medium=email&utm_campaign=email&utm_term=email&utm_content=email"
              target="_blank">
                <i class="fas fa-envelope text-warning ml-2"></i>
              </a> 
            </p>
          </div>
        </div>
      </div>
      <div class="col p-0 mt-2 mb-2"><hr class="dashed-bdr-t mb-1"></div>
      @endfor      
      <div class="row mt-4 mb-4 m-0">
        <div class="col-md-12 text-center">
          <img src="images/top-banner-728x90-2.jpg" class="img-fluid">
        </div>
      </div>
      @for($q=8;$q < 20;$q++)            
      <div class="row m-0">
        <div class="col p-0 mb-2">
          <h4 class="story-page-hed mt-2 red-bdr-l border-dark">
            <a href="{{$sectionArticles[$q]->url}}">{{$sectionArticles[$q]->title}}</a>
          </h4>
        </div>
        <div class="row m-0">
          <div class="col-lg-4 col-md-12 p-0"> 
            <a href="{{$sectionArticles[$q]->url}}">
              <img class="img-fluid img-thumbnail" src="{{Config::get('constants.storagepath')}}/{{$sectionArticles[$q]->photopath}}" alt="{{$sectionArticles[$q]->phototitle}}" onerror="this.onerror=null;this.src='images/top-story2.jpg';">
            </a>
          </div>
          <div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
            <p class="mb-2">{{$sectionArticles[$q]->summary}}
            </p>
            <p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> 
              <a href="#"> {{$sectionArticles[$q]->authorname}}</a> <i class="far fa-clock ml-2 mr-1"></i> 
              <a href="#">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sectionArticles[$q]->pickdate)->diffForHumans()}} </a>
            </p>
            <p class="mt-3">
              <a href="https://www.facebook.com/sharer.php?u={{$sectionArticles[$q]->url}}&utm_source=desktop&utm_medium=facebook&utm_campaign=facebook&utm_term=facebook&utm_content=facebook" target="_blank">
                <i class="fab fa-facebook-f text-warning"></i>
              </a> 
              <a href="https://twitter.com/intent/tweet?&url={{$sectionArticles[$q]->url}}&text={{$sectionArticles[$q]->title}}
                &via=samachar4media&utm_source=desktop&utm_medium=twitter&utm_campaign=twitter&utm_term=twitter&utm_content=twitter" target="_blank">
                <i class="fab fa-twitter text-warning ml-2"></i>
              </a> 
              <a href="https://www.linkedin.com/shareArticle??mini=true&url={{$sectionArticles[$q]->url}}
                &title={{$sectionArticles[$q]->title}}
                &summary={{$sectionArticles[$q]->summary}}
                &source=samachar4media.com&utm_source=desktop&utm_medium=linkedin&utm_campaign=linkedin&utm_term=linkedin&utm_content=linkedin"
                target="_blank">
                <i class="fab fa-linkedin-in text-warning ml-2"></i>
              </a> 
              <a href="https://api.whatsapp.com/send?text={{$sectionArticles[$q]->title}} {{$sectionArticles[$q]->url}}&utm_source=desktop&utm_medium=whatsapp&utm_campaign=whatsapp&utm_term=whatsapp&utm_content=whatsapp"
              target="_blank">
                <i class="fab fa-whatsapp text-warning ml-2"></i>
              </a> 
              <a href="mailto:?subject={{$sectionArticles[$q]->title}}-samachar4media&body=Hi,%0A I thought you'd like this:%0A%0A
              {{$sectionArticles[$q]->url}}&utm_source=desktop&utm_medium=email&utm_campaign=email&utm_term=email&utm_content=email"
              target="_blank">
                <i class="fas fa-envelope text-warning ml-2"></i>
              </a>  
            </p>
          </div>
        </div>
      </div>
      <div class="col p-0 mt-2 mb-2"><hr class="dashed-bdr-t mb-1"></div>
      @endfor        
    </div>
    @endif        
  </div>
  <!--left-part-->
  @include('partials.rightsidebar')
</div><!--center-part-->



</div>
<!--middle-body-->
<!--main div end here-->

<!--  <script type="application/ld+json">
   {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList", "itemListElement":
    [{ "@type": "ListItem", "position": "1",
    "item": { "@id": " {{Request::url()}} ", "name": "Home" } }
    ,{ "@type": "ListItem", "position": "2",
    "item": { "@id": "{{Request::url()}}",
    "name": "{{Request::url()}}-news"
    } }] }
</script>

<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "WebPage",
 "name": "{{Request::url()}}-news",
 "description": "{{Request::url()}}",
 "url" : "{{Request::url()}}",
 "publisher": {
     "@type": "Organization",
     "name": "Exchange4media",
     "url" : "Request::url()",
     "logo" : {
             "@type": "ImageObject",
         "contentUrl": "Request::url()"
     }
 }
}
</script> -->
@endsection           