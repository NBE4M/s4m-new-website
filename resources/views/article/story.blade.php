@extends('partials.app')
@section('content')
<!--main div start here-->
@if(isset($articles))
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
        <div class="col-md-7 col-lg-9 dashed-bdr-r mob-p-0 mob-bdr-0 pl-md-0 pl-lg-3">
            @foreach($articles as $article)
            <nav aria-label="breadcrumb">
                <small>
                    <ol class="breadcrumb bg-white text-warning p-0">
                    <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                    @php $a = explode('/',Request::path()); @endphp
                    @for($p=0;$p < 1 ; $p++)
                    <li class="breadcrumb-item"><a href="{{url('')}}/{{ $a[$p] }}-news.html">{{ ucwords($a[$p]) }}</a></li>
                    @endfor
                    
                    <li class="breadcrumb-item active">{{$article->title}}</li>
                    
                    </ol>
                </small>
            </nav>
                 
            <h3 class="story-page-hed mt-2 red-bdr-l">{{$article->title}}
                <input type="hidden" name="desc" class="desc" value="{{ $article->description }}">
                <a class="views" href="{{$article->url}}" ></a>
                <input type="hidden" name="title" class="title" value="{{ $article->title }}">
                <input type="hidden" name="img" class="imgc" value="{{$article->photopath }}" onerror="this.onerror=null;this.src='https://storage.googleapis.com/media-news/default-story.jpg';"> 
            </h3>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6 pr-0">
                    <small class="date">
                        <span class="text-warning">Published At:</span> 
                        <em> {{date("l, d F, Y", strtotime($article->publish_date))}} </em>
                    </small>
                </div>
                <div class="col-lg-6 col-md-6 col-6 text-right pl-0"> 
                    <small class="date">
                        <span class="text-warning">Last Modified:</span> 
                        <em>{{date("l, d F, Y", strtotime($article->publish_date))}}</em>
                    </small>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mob-p-0">
                    <img src="{{asset('images/top-story2.jpg')}}" width="100%" class="img-thumbnail img-fluid mt-2 mob-bdr-0">
                </div>
            </div>
            <div class="col pl-0 text-danger">
                <small><strong>{{$article->authorname}} ।।</strong></small>
            </div>
            <div class="row">
                <div class="col-md-12 share-icon">
                    <ul>
                    <li class="border-0">Share</li>
                        <li><a class="social-share facebook"><i class="fab fa-facebook-f "></i></a></li>
                        <li><a class="social-share twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="social-share linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="social-share whatsup"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a class="social-share mail"><i class="fas fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>        
            <div class="row mt-2">
                <div class="col-md-12 responsible">
                    {!! html_entity_decode($article->description,ENT_COMPAT, 'UTF-8') !!}
                </div>
            </div>        
            <div class="row">
                <div class="col-md-12 tags-buttons">
                    <span class="tags"><i class="fas fa-tags"></i> TAGS</span>
                    @if(isset($article->tags) || !empty($article->tags))
                        @foreach(explode(',', $article->tags) as $tag)
                            <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">{{$tag}}</a> 
                            <span class="text-warning">|</span> 
                        @endforeach
                    @else
                        <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">{{$article->category_name}}</a>
                    @endif
                </div>
            </div>
        <div class="row mt-3">
            <div class="col-lg-9 col-md-6 col-12 share-buttons">            
                <!--Facebook-->
                <button type="button" class="btn btn-fb pl-2 pr-2 pt-1 pb-1 mr-0 ml-0 social-share facebook"><i class="fab fa-facebook-f pr-1"></i> Share</button>
                <!--Twitter-->
                <button type="button" class="btn btn-tw pl-2 pr-2 pt-1 pb-1 mr-0 btn-info social-share twitter"><i class="fab fa-twitter pr-1"></i> Share</button>
                <!--linkedin-->
                <button type="button" class="btn btn-li pl-2 pr-2 pt-1 pb-1 mr-0 social-share linkedin"><i class="fab fa-linkedin-in pr-1"></i> Share</button>
                <!--whatsup-->
                <button type="button" class="btn btn-slack pl-2 pr-2 pt-1 pb-1 mr-0 social-share whatsup"><i class="fab fa-whatsapp pr-1"></i> Share</button>
                            <!--mail-->
                <button type="button" class="btn btn-email pl-2 pr-2 pt-1 pb-1 mr-0 social-share mail"><i class="fas fa-envelope pr-1"></i> Share</button>
                <!--Github-->
            </div>
            <div class="col-lg-3 col-md-6 col-9 m-auto text-center">
                <img src="{{asset('images/whatsapp.png')}}" class="img-fluid whatsup">
            </div>
        </div>        
        <hr class="dashed-bdr-t mb-1">
        <div class="row mt-3 m-0 author">
            <div class="col-lg-2 col-md-4 col-4 text-center border-dark bdr-solid-r pl-0 mob-bdr-0 mob-m-auto mob-p-0">         
                <img src="{{asset('images/author.jpg')}}" class="img-fluid img-thumbnail rounded-circle bg-warning mob-mt-8 mob-mb-8">
            </div>
            <div class="col-lg-10 pt-2" style="background: #f1f1f1;">
                <h5 class="mb-0"><strong>समाचार4मीडिया Staff</strong></h5>
                <p class="mb-0 mt-1">
                    <small><i class="fas fa-envelope text-muted"></i> 
                        <a href="#">e4medit@exchange4media.com</a>
                    </small>
                </p>
                <p class="mt-0 mb-1">
                    <small><i class="fab fa-twitter text-muted"s></i> 
                        <a href="#">@samachar4media</a>
                    </small>
                </p>
                <p class="quotation mt-0 mb-0 text-center"> 
                    <small>samachar4media staff</small>
                </p>
            </div>            
        </div>
        <div class="row m-0 mob-mt-15"><span class="heading-bdr pt-5 ml-0"></span></div>
        <div class="row mt-3 mb-2">
          <div class="col-md-12 text-center"><img src="{{asset('images/top-banner-728x90-2.jpg')}}" class="img-fluid border"></div>
        </div>
    @endforeach
@endif   
    <!--second news-->
    @if(isset($articlesrelate))    
        @for($m=0;$m < 4; $m++)
            <div class="row">
                <div class="col-md-12">     
                    <h3 class="story-page-hed mt-4 red-bdr-l">{{$articlesrelate[$m]->title}}
                        <input type="hidden" name="desc" class="desc" value="{{ $articlesrelate[$m]->description }}">
                        <a class="views" href="{{$articlesrelate[$m]->url}}" ></a>
                        <input type="hidden" name="title" class="title" value="{{ $articlesrelate[$m]->title }}">
                        <input type="hidden" name="img" class="imgc" value="{{$articlesrelate[$m]->photopath }}" onerror="this.onerror=null;this.src='https://storage.googleapis.com/news-photos/default-story.jpg';"> 
                    </h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6 pr-0">
                            <small class="date">
                                <span class="text-warning">Published At:</span> 
                                <em> {{date("l, d F, Y", strtotime($articlesrelate[$m]->publish_date))}}</em>
                            </small>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6 text-right pl-0"> 
                            <small class="date">
                                <span class="text-warning">Last Modified:</span> 
                                <em>{{date("l, d F, Y", strtotime($articlesrelate[$m]->publish_date))}}</em>
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mob-p-0">
                            <img src="{{asset('images/top-story4.jpg')}}" width="100%" class="img-thumbnail img-fluid mt-2 mob-bdr-0">
                        </div>
                    </div>
                    <div class="col pl-0 text-danger">
                        <small><strong>{{$articlesrelate[$m]->authorname}} ।।</strong></small>
                    </div>           
                    <div class="row">
                        <div class="col-md-12 share-icon">
                            <ul>
                                <li class="border-0">Share</li>
                                <li><a class="social-share facebook"><i class="fab fa-facebook-f "></i></a></li>
                                <li><a class="social-share twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="social-share linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="social-share whatsup"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a class="social-share mail"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>                            
                    <div class="row mt-2">
                        <div class="col-md-12 responsible">
                        {!! html_entity_decode($articlesrelate[$m]->description,ENT_COMPAT, 'UTF-8') !!}                        
                        </div>
                    </div>                
                    <div class="row">
                        <div class="col-md-12 tags-buttons">
                            <span class="tags"><i class="fas fa-tags"></i> TAGS</span>
                            @if(isset($articlesrelate[$m]->tags) || !empty($articlesrelate[$m]->tags))
                                @foreach(explode(',', $articlesrelate[$m]->tags) as $tag)
                                    <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">{{$tag}}</a> 
                                    <span class="text-warning">|</span> 
                                @endforeach
                            @else
                                <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">{{$articlesrelate[$m]->category_name}}</a>
                            @endif
                        </div>
                    </div>                
                    <div class="row mt-3">
                        <div class="col-lg-9 col-md-6 col-12 share-buttons">                
                            <!--Facebook-->
                            <button type="button" class="btn btn-fb pl-2 pr-2 pt-1 pb-1 mr-0 ml-0 social-share facebook"><i class="fab fa-facebook-f pr-1"></i> Share</button>
                            <!--Twitter-->
                            <button type="button" class="btn btn-tw pl-2 pr-2 pt-1 pb-1 mr-0 btn-info social-share twitter"><i class="fab fa-twitter pr-1"></i> Share</button>
                            <!--linkedin-->
                            <button type="button" class="btn btn-li pl-2 pr-2 pt-1 pb-1 mr-0 social-share linkedin"><i class="fab fa-linkedin-in pr-1"></i> Share</button>
                            <!--whatsup-->
                            <button type="button" class="btn btn-slack pl-2 pr-2 pt-1 pb-1 mr-0 social-share whatsup"><i class="fab fa-whatsapp pr-1"></i> Share</button>
                                        <!--mail-->
                            <button type="button" class="btn btn-email pl-2 pr-2 pt-1 pb-1 mr-0 social-share mail"><i class="fas fa-envelope pr-1"></i> Share</button>
                            <!--Github-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-9 m-auto text-center">
                            <img src="{{asset('images/whatsapp.png')}}" class="img-fluid whatsup">
                        </div>
                    </div>                
                    <hr class="dashed-bdr-t mb-1">
                    <div class="row mt-3 m-0 author">
                        <div class="col-lg-2 col-md-4 col-4 text-center border-dark bdr-solid-r pl-0 mob-bdr-0 mob-m-auto mob-p-0">  
                            <img src="{{asset('images/author.jpg')}}" class="img-fluid img-thumbnail rounded-circle bg-warning mob-mt-8 mob-mb-8">
                        </div>
                        <div class="col-lg-10 pt-2" style="background: #f1f1f1;">
                            <h5 class="mb-0"><strong>समाचार4मीडिया Staff</strong></h5>
                            <p class="mb-0 mt-1">
                                <small>
                                    <i class="fas fa-envelope text-muted"></i> 
                                    <a href="#">e4medit@exchange4media.com</a>
                                </small>
                            </p>
                            <p class="mt-0 mb-1">
                                <small><i class="fab fa-twitter text-muted"s></i> <a href="#">@samachar4media</a></small>
                            </p>
                            <p class="quotation mt-0 mb-0 text-center"> 
                                <small>samachar4media staff</small>
                            </p>
                        </div>                
                    </div>                
                </div>
            </div>
            <div class="row m-0 mob-mt-15"><span class="heading-bdr pt-5 ml-0"></span></div>
        @endfor 
    @endif
    <!--second news-->
     <div class="row mt-4 mb-4">
        <div class="col-md-12 text-center"><img src="{{asset('images/top-banner-728x90-2.jpg')}}" class="img-fluid border"></div>
    </div>
    <!--third news-->
    @if(isset($articlesrelate))    
        @for($m=4;$m < 10; $m++)
            <div class="row">
                <div class="col-md-12">     
                    <h3 class="story-page-hed mt-4 red-bdr-l">{{$articlesrelate[$m]->title}}
                        <input type="hidden" name="desc" class="desc" value="{{ $articlesrelate[$m]->description }}">
                        <a class="views" href="{{$articlesrelate[$m]->url}}" ></a>
                        <input type="hidden" name="title" class="title" value="{{ $articlesrelate[$m]->title }}">
                        <input type="hidden" name="img" class="imgc" value="{{$articlesrelate[$m]->photopath }}" onerror="this.onerror=null;this.src='https://storage.googleapis.com/news-photos/default-story.jpg';">
                    </h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6 pr-0">
                            <small class="date">
                                <span class="text-warning">Published At:</span> 
                                <em> {{date("l, d F, Y", strtotime($articlesrelate[$m]->publish_date))}}</em>
                            </small>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6 text-right pl-0"> 
                            <small class="date">
                                <span class="text-warning">Last Modified:</span> 
                                <em>{{date("l, d F, Y", strtotime($articlesrelate[$m]->publish_date))}}</em>
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mob-p-0">
                            <img src="{{asset('images/top-story4.jpg')}}" width="100%" class="img-thumbnail img-fluid mt-2 mob-bdr-0">
                        </div>
                    </div>
                    <div class="col pl-0 text-danger">
                        <small><strong>{{$articlesrelate[$m]->authorname}} ।।</strong></small>
                    </div>           
                    <div class="row">
                        <div class="col-md-12 share-icon">
                            <ul>
                                <li class="border-0">Share</li>
                                <li><a class="social-share facebook"><i class="fab fa-facebook-f "></i></a></li>
                                <li><a class="social-share twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="social-share linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="social-share whatsup"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a class="social-share mail"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>                            
                    <div class="row mt-2">
                        <div class="col-md-12 responsible">
                        {!! html_entity_decode($articlesrelate[$m]->description,ENT_COMPAT, 'UTF-8') !!}                        
                        </div>
                    </div>                
                    <div class="row">
                        <div class="col-md-12 tags-buttons">
                            <span class="tags"><i class="fas fa-tags"></i> TAGS</span>
                            @if(isset($articlesrelate[$m]->tags) || !empty($articlesrelate[$m]->tags))
                                @foreach(explode(',', $articlesrelate[$m]->tags) as $tag)
                                    <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">{{$tag}}</a> 
                                    <span class="text-warning">|</span> 
                                @endforeach
                            @else
                                <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">{{$articlesrelate[$m]->category_name}}</a>
                            @endif
                        </div>
                    </div>                
                    <div class="row mt-3">
                        <div class="col-lg-9 col-md-6 col-12 share-buttons">                
                            <!--Facebook-->
                            <button type="button" class="btn btn-fb pl-2 pr-2 pt-1 pb-1 mr-0 ml-0 social-share facebook"><i class="fab fa-facebook-f pr-1"></i> Share</button>
                            <!--Twitter-->
                            <button type="button" class="btn btn-tw pl-2 pr-2 pt-1 pb-1 mr-0 btn-info social-share twitter"><i class="fab fa-twitter pr-1"></i> Share</button>
                            <!--linkedin-->
                            <button type="button" class="btn btn-li pl-2 pr-2 pt-1 pb-1 mr-0 social-share linkedin"><i class="fab fa-linkedin-in pr-1"></i> Share</button>
                            <!--whatsup-->
                            <button type="button" class="btn btn-slack pl-2 pr-2 pt-1 pb-1 mr-0 social-share whatsup"><i class="fab fa-whatsapp pr-1"></i> Share</button>
                                        <!--mail-->
                            <button type="button" class="btn btn-email pl-2 pr-2 pt-1 pb-1 mr-0 social-share mail"><i class="fas fa-envelope pr-1"></i> Share</button>
                            <!--Github-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-9 m-auto text-center">
                            <img src="{{asset('images/whatsapp.png')}}" class="img-fluid whatsup">
                        </div>
                    </div>                
                    <hr class="dashed-bdr-t mb-1">
                    <div class="row mt-3 m-0 author">
                        <div class="col-lg-2 col-md-4 col-4 text-center border-dark bdr-solid-r pl-0 mob-bdr-0 mob-m-auto mob-p-0">  
                            <img src="{{asset('images/author.jpg')}}" class="img-fluid img-thumbnail rounded-circle bg-warning mob-mt-8 mob-mb-8">
                        </div>
                        <div class="col-lg-10 pt-2" style="background: #f1f1f1;">
                            <h5 class="mb-0"><strong>समाचार4मीडिया Staff</strong></h5>
                            <p class="mb-0 mt-1">
                                <small>
                                    <i class="fas fa-envelope text-muted"></i> 
                                    <a href="#">e4medit@exchange4media.com</a>
                                </small>
                            </p>
                            <p class="mt-0 mb-1">
                                <small><i class="fab fa-twitter text-muted"s></i> <a href="#">@samachar4media</a></small>
                            </p>
                            <p class="quotation mt-0 mb-0 text-center"> 
                                <small>samachar4media staff</small>
                            </p>
                        </div>                
                    </div>                
                </div>
            </div>
            <div class="row m-0 mob-mt-15"><span class="heading-bdr pt-5 ml-0"></span></div>
        @endfor 
    @endif
    <!--third news-->
    <div class="row mt-4 mb-4">
        <div class="col-md-12 text-center"><img src="{{asset('images/top-banner-728x90-2.jpg')}}" class="img-fluid border"></div>
    </div>
    <!--third-section-news-->
    <!--Social media-section-news-->
    @if(isset($socialM))
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row pl-0 mb-3 ml-0 title-holder">
                    <h5 class="mb-0 bdr-solid-l border-warning heading-bdr">
                        @for($a=0; $a < 1; $a++)
                        <strong>                       
                            <a href="{{url('/')}}/{{$socialM[$a]->category_name}}-news.html" title="">
                                <span class="bg-white pl-3 pr-3">{{$socialM[$a]->category_name}}</span>
                            </a>
                        </strong>
                        <small>
                            <a href="{{url('/')}}/{{$socialM[$a]->category_name}}-news.html" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
                                <strong>और पढ़ें</strong>
                            </a>
                        </small>
                        @endfor
                    </h5>
                </div>
                <div class="row">
                    @for($a=0; $a < 3; $a++)
                    <div class="col-md-12 col-lg-4 dashed-bdr-r mob-bdr-0 mob-p-0 mob-mb-15">
                        <img src="{{asset('images/telecop-story2.jpg')}}" class="img-fluid rounded mob-radius-0">
                        <h6 class="mt-2 font-heading-1 mob-p-10">
                            <strong>{{$socialM[$a]->title}}</strong>
                        </h6>                 
                    </div>
                    @endfor                  
                </div>
                <hr class="dashed-bdr-t mob-bdr-0">        
                <div class="row mt-3 mob-mt-30">
                    @for($a=3; $a < 6; $a++)                 
                    <div class="col-md-12 col-lg-4 dashed-bdr-r mob-bdr-0 mob-p-0 mob-mb-15">
                        <img src="{{asset('images/gallery-4.jpg')}}" class="img-fluid rounded mob-radius-0">
                        <h6 class="mt-2 font-heading-1 mob-p-10">
                            <strong>{{$socialM[$a]->title}}</strong>
                        </h6>                 
                    </div>
                    @endfor                  
                </div>     
            </div>
        </div>
    @endif        
<!--third-section-news-->
</div>
<!--left-part-->
@include('partials.rightsidebar') 
        
    
        </div><!--center-part-->
        

    
    </div>
    <!--middle-body-->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "{{$article->title}}",
        "description": "{{$article->summary}}",
        "keywords":"{{$article->tags}}",
        "url" : "{{Request::url()}}"
    }
</script>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "ImageObject",
     "name": "{{$article->title}}",
     "author": "{{$article->authorname}}",
     "datePublished": "{{$article->publish_date}}"
   }
   </script>
<script type="application/ld+json">
       [{
         "@context": "https://schema.org",
         "mainEntityOfPage":"{{Request::url()}}",
         "@type": "NewsArticle",
         "url": "{{Request::url()}}",
          "articleBody":"  {!!strip_tags(str_replace('"','',$article->description))!!}",
         "articleSection":"{{$article->name}}",
         "headline": "{{$article->title}}",
         "description":"{!!strip_tags($article->summary)!!}",
         "author": "{{$article->authorname}}",
         "datePublished": "{{$article->publish_date}}",
         "dateModified": "{{$article->publish_date}}",
         "image":{
               "@context": "https://schema.org",
               "@type": "ImageObject",
               "width": "100px",
               "height": "100px",
               "url":"{{Config::get('constants.awsbaseurl')}}{{$article->photopath}}"
             },
         "publisher":{
               "@context": "https://schema.org",
               "@type": "Organization",
               "name": "Exchange4media",
               "logo": {
                       "@context": "https://schema.org",
                       "@type": "ImageObject",
                       "width": "100px",
                       "height": "100px",
                     "url": "https://exchange4media.com/images/e4m_logo.png"
                   },
               "url":"{{url('/')}}"
             }
       }]
   </script>
  <script type="application/ld+json">
   {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList", "itemListElement":
    [{ "@type": "ListItem", "position": "1",
    "item": { "@id": " https://www.exchange4media.com/ ", "name": "Home" } }
    ,{ "@type": "ListItem", "position": "2",
    "item": { "@id": "{{url('')}}/{{str_slug($article->category_name)}}-news.html",
    "name": "{{$article->category_name}}-news"
    } }] }
</script>

@endsection           