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
                <img src="images/new-2.jpg" class="img-fluid img-thumbnail">
              </a>
            </div>
            <div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
              <p class="mb-2">{{$sectionArticles[$q]->summary}}
              </p>
              <p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> 
                <a href="#"> {{$sectionArticles[$q]->authorname}}</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sectionArticles[$q]->pickdate)->diffForHumans()}} </a>
              </p>
              <p class="mt-3">
                <a href="#"><i class="fab fa-facebook-f text-warning"></i></a> 
                <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> 
                <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> 
                <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> 
                <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a> 
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
                <a href="{{$sectionArticles[$q]->url}}"><img src="images/brand-2.jpg" class="img-fluid img-thumbnail"></a>
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
                <a href="#"><i class="fab fa-facebook-f text-warning"></i></a> 
                <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> 
                <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> 
                <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> 
                <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a> 
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
                <a href="{{$sectionArticles[$q]->url}}"><img src="images/top-story2.jpg" class="img-fluid img-thumbnail"></a>
            </div>
            <div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
              <p class="mb-2">{{$sectionArticles[$q]->summary}}
              </p>
              <p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> 
                <a href="#"> {{$sectionArticles[$q]->authorname}}</a> <i class="far fa-clock ml-2 mr-1"></i> 
                <a href="#">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sectionArticles[$q]->pickdate)->diffForHumans()}} </a>
              </p>
              <p class="mt-3">
                <a href="#"><i class="fab fa-facebook-f text-warning"></i></a> 
                <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> 
                <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> 
                <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> 
                <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a> 
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
    <!--right part-->
    <div class="col-md-5 col-lg-3 col-xs-6 pr-0 mob-p-0 mob-mt-30 rightSidebar">
      <div class="theiaStickySidebar">
        <!--top-news story page-->
        <div class="row mob-m-0">
         <div class="row pl-0 mb-3 ml-0 title-holder">
          <h5 class="mb-0 bdr-solid-l border-warning heading-bdr">
            <strong>
              <span class="bg-white pl-3 pr-3">टॉप न्यूज़</span>
            </strong>
            <small>
              <a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
                <strong>और पढ़ें</strong>
              </a>
            </small>
          </h5>
         </div>
         <div class="row m-0 p-0">
          @if(isset($mostRead))              
              <div class="col-md-12 p-0">
              <!--<i class="fa fa-arrow-up" id="nt-example1-prev"></i>-->
                <ul id="nt-example2" class="top-news-story">
                @foreach($mostRead as $mo)
                 <li>
                  <div class="card bg-dark text-white">
                    <img class="card-img img-fluid" src="images/brand-1.jpg" alt="">
                    <div class="card-img-overlay d-flex">
                      <a href="#" class="align-self-end">
                        <span class="badge">{{$mo->category_name}}</span> 
                      <h6 class="card-title mb-0">{{$mo->title}}</h6>
                      </a>
                    </div>
                  </div>
                 </li>
                 @endforeach 
                </ul>
                <!--<i class="fa fa-arrow-down" id="nt-example2-next"></i>-->                  
               </div>              
               
          </div>
        </div>
        <!--top-news story page-->       
        
        <hr class="bdr-solid p-0 mb-2">
        <!--whatsup-->
        <div class="row m-0">
          <div class="col-md-12 p-0 text-center">
            <p class="m-0text-center mb-0">
              <img src="images/whatsapp.png" class="img-fluid whatsup">
            </p>
          </div>
        </div>
        <!--whatsup-->
        <hr class="bdr-solid p-0 mb-2">
        <!--square banner add-->
        <div class="row">
          <div class="col-md-12 p-0 text-center">
            <p class="m-0 add-text text-right">
              <small class="text-muted">Advertisment</small>
            </p>
            <img src="images/ad-277x300-add.jpg" class="img-fluid">
          </div>
        </div>
        <!--square banner add-->
        <hr class="bdr-solid p-0 mb-2"> 
        <!--2nd section news-->
        <div class="row mt-3 mob-m-0 mob-mt-15">
          <div class="col-md-12 p-0">
            <div class="row pl-0 mb-3 ml-0 title-holder">
              <h5 class="mb-0 bdr-solid-l border-warning heading-bdr">
                <strong>
                  <span class="bg-white pl-2 pr-1">सबसे लोकप्रिय खबरें</span>
                </strong>
                <small>
                  <a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
                    <strong>और पढ़ें</strong>
                  </a>
                </small>
              </h5>
            </div>            
            <div class="row m-0">                
              <div class="row m-0">
                @for($z=0;$z < 1; $z++)
                <div class="col-md-12 bg-dark p-1 rounded"> 
                  <a href="{{$mostRead[$z]->url}}">
                    <img src="images/lok-news2.jpg" class="img-fluid">
                  </a>
                    <h5 class="mt-2 font-heading-1 text-white lh pl-1">
                      <a href="{{$mostRead[$z]->url}}">{{$mostRead[$z]->title}}</a>
                    </h5>
                </div>
                @endfor
              </div>  
              <div class="col-md-12 p-0">
                <hr class="dashed-bdr-t">
              </div>
              <div class="row">
                @for($z=1;$z < 3; $z++)
                <div class="col-6 col-sm-12 col-md-12 col-lg-5 pr-0">
                  <a href="{{$mostRead[$z]->url}}">
                    <img src="images/lok-news.jpg" class="img-fluid img-thumbnail">
                  </a>
                </div>
                <div class="col-6 col-sm-12 col-md-12 col-lg-7 pr-0 pl-2">
                  <h6 class="mb-0">
                    <a href="{{$mostRead[$z]->url}}">
                      <strong>{{$mostRead[$z]->title}}</strong>
                    </a>
                  </h6>      
                </div>
                @endfor      
              </div>
            </div>         
          </div>
        </div><!--2nd section news-->
        @endif  
        <hr class="bdr-solid p-0 mb-2">        
        <!--square banner add-->
        <div class="row">
          <div class="col-md-12 p-0 text-center">
            <p class="m-0 add-text text-right">
              <small class="text-muted">Advertisment</small>
            </p>
             <img src="images/ad-277x300-add2.jpg" class="img-fluid">
          </div>
        </div>
        <!--square banner add-->        
        <hr class="bdr-solid">        
        <!--right-third-news-->
        <div class="row mob-m-0">
          <div class="col-md-12 bg-dark p-2 rounded">
            <div class="row pl-0 mb-3 ml-0 title-holder">
              <h5 class="mb-0 bdr-solid-l border-warning heading-bdr">
                <strong>
                  <span class="bg-dark text-white pl-2 pr-1">इंडस्ट्री ब्रीफिंग
                  </span>
                </strong>
                <small>
                  <a href="#" title="और देखें" class="float-right mt-1 pl-2 text-warning mob-seemore bg-dark">
                    <strong>और पढ़ें</strong>
                  </a>
                </small>
              </h5>
            </div>
            <div class="row text-white">
         <div class="col-md-6 col-6"> <a href="#"><img src="images/interview-1.jpg" class="img-fluid border rounded"></a>
                    <h6 class="mt-1 font-heading-1"><a href="#">क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं</a></h6>                  
        </div>
            
             <div class="col-md-6 col-6"> <a href="#"><img src="images/telecop-story2.jpg" class="img-fluid border rounded"></a>
                <h6 class="mt-1 font-heading-1"><a href="#">क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं</a></h6>                  
        </div>  
        </div>
            
            <div class="row text-white">
         <div class="col-md-6 col-6"> <a href="#"><img src="images/top-story2.jpg" class="img-fluid border rounded"></a>
                    <h6 class="mt-1 font-heading-1"><a href="#">क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं</a></h6>                  
        </div>
            
             <div class="col-md-6 col-6"> <a href="#"><img src="images/top-story3.jpg" class="img-fluid border rounded"></a>
                <h6 class="mt-1 font-heading-1"><a href="#">क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं</a></h6>                  
        </div>  
        </div>
            
        </div>
        </div><!--right-third-news-->
        
        
        <hr class="bdr-solid p-0 mb-2">
        
        
        <!--सब्सक्राइब-->
        <div class="row mt-3 mob-m-0">
                <div class="col-md-12 text-white p-0 bg-dark rounded">
                    
        <h4 class="text-white bg-warning p-1 pl-3 rounded-top" style="border-bottom: dotted #000000 2px;font-family: 'Rajdhani', sans-serif; font-weight: 700;">सब्सक्राइब</h4> 
                    <h5 class="pl-3" style="line-height: 35px;">न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए</h5>
                      <div class="form-group p-3 mb-0">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
                    <p class="text-center"><button type="button" class="btn btn-warning btn-sm">Subscribe</button></p>
        
                </div>
                </div>
        <!--सब्सक्राइब-->
        
        
        <hr class="bdr-solid p-0 mb-2">
        
        
        
        
    <!--मुख्य खबरें-->
        <div class="row media-form mt-3 bg-dark p-2 rounded mob-m-0">
             <div class="row pl-0 mb-3 ml-0 title-holder">
        <h5 class="mb-0 bdr-solid-l border-white heading-bdr2"><strong><span class="bg-dark text-warning pl-2 pr-1">मुख्य खबरें

</span>
</strong><small><a href="#" title="और देखें" class="float-right mt-1 pl-2 text-warning mob-seemore bg-dark"><strong>और पढ़ें</strong></a></small></h5></div>
                
            
              <ul class="scrollbar style-4 mt-0 pr-3 text-white story-mk">
                   <li class="mt-0"><span class="big-number text-warning">1.</span><a href="#">सामाजिक सरोकार की दिशा में ITV फाउंडेशन... </a><small class="float-right date mt-2 text-light"> 19 July, 2018</small></li>
                <li><span class="big-number text-warning">2.</span><a href="#">'केसी कुलिश' अवॉर्ड से सम्मानित ये हुए पत्रकार...</a><small class="float-right date mt-2 text-light"> 19 July, 2018</small></li>
                  <li><span class="big-number text-warning">3.</span><a href="#">वेब इंडस्ट्री से कैसे हो लाभ, जानकारोंं ने बताए गुर...</a><small class="float-right date mt-2 text-light"> 19 July, 2018</small></li>
                  <li><span class="big-number text-warning">4.</span><a href="#">जब इस बड़े अभिनेता ने पत्रकार से मांगी माफी...</a><small class="float-right date mt-2 text-light"> 19 July, 2018</small></li><li><span class="big-number text-warning">5.</span><a href="#">जब इस बड़े अभिनेता ने पत्रकार से मांगी माफी...</a><small class="float-right date mt-2 text-light"> 19 July, 2018</small></li>
                  <li><span class="big-number text-warning">6.</span><a href="#">जब इस बड़े अभिनेता ने पत्रकार से मांगी माफी...</a><small class="float-right date mt-2 text-light"> 19 July, 2018</small></li>
                  <li><span class="big-number text-warning">7.</span><a href="#">जब इस बड़े अभिनेता ने पत्रकार से मांगी माफी...</a><small class="float-right date mt-2 text-light"> 19 July, 2018</small></li>
                  <li><span class="big-number text-warning">8.</span><a href="#">जब इस बड़े अभिनेता ने पत्रकार से मांगी माफी...</a><small class="float-right date mt-2 text-light"> 19 July, 2018</small></li>
                  <li><span class="big-number text-warning">9.</span><a href="#">जब इस बड़े अभिनेता ने पत्रकार से मांगी माफी...</a><small class="float-right date mt-2 text-light"> 19 July, 2018</small></li>
                  <li class="border-0"><span class="big-number text-warning">10.</span><a href="#">जब इस बड़े अभिनेता ने पत्रकार से मांगी माफी...</a><small class="float-right date mt-2 text-light"> 19 July, 2018</small></li>
              </ul> 
                
        </div>
        <!--मुख्य खबरें-->
        
        
        <hr class="bdr-solid p-0 mb-2">
        
        <!--square banner add--><div class="row">
        <div class="col-md-12 p-0 text-center">
        <p class="m-0 add-text text-right"><small class="text-muted">Advertisment</small></p>
                <img src="images/ad-277x300-add.jpg" class="img-fluid">
        </div>
        </div><!--square banner add-->
            
            <hr class="bdr-solid p-0 mb-2">
            
            
            <!--story video slider-->
            <div class="row mt-3 bg-danger border-danger p-1 rounded mob-m-0">
            
                <div class="col-md-12 p-0">
<div class="row pl-0 mb-2 mt-1 ml-0 title-holder">
        <h5 class="mb-0 bdr-solid-l border-white heading-bdr2"><strong><span class="bg-danger text-white pl-2 pr-2">विडियो

</span>
</strong><small><a href="#" title="और देखें" class="float-right mt-1 pl-2 text-dark mob-seemore bg-danger"><strong>और पढ़ें</strong></a></small></h5></div>
                    <div id="demo" class="carousel slide story-video-slider" data-ride="carousel">
  <!--<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>-->
  <div class="carousel-inner">
    <div class="carousel-item active"> <a href="#"><img src="images/video-1.jpg" width="100%" height="100%"></a>
      <div class="carousel-caption">
        
        <p>न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए </p>
      </div>   
    </div>
      
      <div class="carousel-item"> <a href="#"><img src="images/video-2.jpg" width="100%" height="100%"></a>
      <div class="carousel-caption">
        
        <p>न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए </p>
      </div>   
    </div>
      
      <div class="carousel-item"> <a href="#"><img src="images/video-3.jpg" width="100%" height="100%"></a>
      <div class="carousel-caption">
        
        <p>न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए </p>
      </div>   
    </div>
      
      
  </div>
                        
                        
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <i class="fas fa-angle-left"></i>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <i class="fas fa-angle-right"></i>
  </a>
</div>

                    
                </div>
            
            </div>
            <!--story video slider-->
            
<hr class="bdr-solid p-0 mb-2">
            
            
            <!--2nd section news--><div class="row mt-3 mob-m-0">
        <div class="col-md-12 p-0">
         <div class="row pl-0 mb-3 ml-0 title-holder">
        <h5 class="mb-0 bdr-solid-l border-warning heading-bdr"><strong><span class="bg-white text-dark pl-3 pr-3">विचार मंच

</span>
</strong><small><a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white"><strong>और पढ़ें</strong></a></small></h5></div>
            
            <div class="row m-0">
                
                <div class="row m-0">
                <div class="col-md-12 p-0"> <a href="#"><img src="images/vichar-story1.jpg" class="img-fluid"></a>
                    <h5 class="mt-2 font-heading-1 lh pl-1"><strong><a href="#">सुमित अवस्थी का बड़ा फैसला, जॉइन करेंगे ABP न्यूज...</a></strong></h5>
        </div>
            </div>  
                
                <div class="col-md-12 p-0"><hr class="dashed-bdr-t"></div>
                
             <div class="row">
        <div class="col-6 col-sm-12 col-md-12 col-lg-5 pr-0"><a href="#"><img src="images/vichar-story3.jpg" class="img-fluid img-thumbnail"></a></div>
        <div class="col-6 col-sm-12 col-md-12 col-lg-7 pr-0 pl-2"><h6 class="mb-0"><a href="#"><strong>इस DU में पत्रकारिता के छात्रों का विरोध प्रदर्शन, पुलिस पर लगाया</strong></a></h6>      
        </div>      
        </div>
                
                <div class="col-md-12 p-0"><hr class="dashed-bdr-t"></div>
                
             <div class="row">
        <div class="col-6 col-sm-12 col-md-12 col-lg-5 pr-0"><a href="#"><img src="images/vichar-story4.jpg" class="img-fluid img-thumbnail"></a></div>
        <div class="col-6 col-sm-12 col-md-12 col-lg-7 pr-0 pl-2"><h6 class="mb-0"><a href="#"><strong>इस DU में पत्रकारिता के छात्रों का विरोध प्रदर्शन, पुलिस पर लगाया</strong></a></h6>      
        </div>      
        </div>
            
            </div>

                
        </div>
        </div><!--2nd section news-->
            
            
            <hr class="bdr-solid p-0 mb-2 mob-mt-30">
            
        
            <!--story gallery slider-->
            <div class="row mt-3 bg-dark border-danger p-1 rounded mob-m-0 mob-mt-30">
            
                <div class="col-md-12 p-0">
<div class="row pl-0 mb-2 mt-1 ml-0 title-holder">
        <h5 class="mb-0 bdr-solid-l border-white heading-bdr2"><strong><span class="bg-dark text-warning pl-3 pr-3">फोटो गैलरी</span>
</strong><small><a href="#" title="और देखें" class="float-right mt-1 pl-2 text-warning mob-seemore bg-dark"><strong>और पढ़ें</strong></a></small></h5></div>
                    <div id="demo2" class="carousel slide story-video-slider" data-ride="carousel">
  <!--<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>-->
  <div class="carousel-inner">
    <div class="carousel-item active"> <a href="#"><img src="images/gallery-5.jpg" width="100%" height="100%"></a>
      <div class="carousel-caption bg-dark">
        
        <p>न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए </p>
      </div>   
    </div>
      
      <div class="carousel-item"> <a href="#"><img src="images/gallery-5.jpg" width="100%" height="100%"></a>
      <div class="carousel-caption bg-dark">
        
        <p>न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए </p>
      </div>   
    </div>
      
      <div class="carousel-item"> <a href="#"><img src="images/gallery-5.jpg" width="100%" height="100%"></a>
      <div class="carousel-caption bg-dark">
        
        <p>न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए </p>
      </div>   
    </div>
      
      
  </div>
                        
                        
  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
    <i class="fas fa-angle-left"></i>
  </a>
  <a class="carousel-control-next" href="#demo2" data-slide="next">
    <i class="fas fa-angle-right"></i>
  </a>
</div>

                    
                </div>
            
            </div>
            <!--story gallery slider-->
            
            
            
        
        
        </div>
        
        </div><!--right part-->
        
        
    
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