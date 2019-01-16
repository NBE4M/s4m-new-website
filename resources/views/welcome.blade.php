@extends('partials.app')
@section('content')

  <!--middle-body-->
  <div class="container mt-65">

<!--Breaking News-->
<div class="row m-lg-0">
  <div class="breaking_news">
  <div class="label ripple">Breaking News</div>
  <div class="news_title"><strong><a href="#">चौथी दुनिया का बड़ा खुलासा: दैनिक भास्कर के पूर्व ग्रुप एडिटर कल्पेश याग्निक की ‘हत्या’!</a></strong></div>
</div>  
</div>
<!--Breaking News-->


    <!--top news section-->
    <div class="row top-news-section section-style pt-3 pb-3 m-lg-0">
  <div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard">
     <div id="topslider" class="carousel slide carousel-fade" data-ride="carousel">
     <div class="carousel-inner">
@php $rows_articlehomeslide='1'; @endphp
  @foreach($homeSlide as $keyhomeslide)
    @if($rows_articlehomeslide=='1')
    @php $rows_articlehomeslide++; @endphp
      <div class="carousel-item active">        
        <div class="card bg-dark text-white">
            <img class="card-img img-fluid" src="images/top-story1.jpg" alt="">
            <div class="card-img-overlay d-flex linkfeat">
              <a href="{{$keyhomeslide->url}}" class="align-self-end">
              <span class="badge">{{strtoupper($keyhomeslide->category_name)}}</span> 
                <h4 class="card-title">{{$keyhomeslide->title}}</h4>
               
              </a>
            </div>
          </div>
        </div>
      @elseif ($rows_articlehomeslide=='2')
      @php  $rows_articlehomeslide++; @endphp
    <div class="carousel-item">       
      <div class="card bg-dark text-white">
            <img class="card-img img-fluid" src="images/top-story2.jpg" alt="">
            <div class="card-img-overlay d-flex linkfeat">
              <a href="{{$keyhomeslide->url}}" class="align-self-end">
              <span class="badge">{{strtoupper($keyhomeslide->category_name)}}</span> 
                <h4 class="card-title">{{$keyhomeslide->title}}</h4>
               
              </a>
            </div>
          </div>
        </div>
      @elseif ($rows_articlehomeslide=='3')
      @php  $rows_articlehomeslide++; @endphp
    <div class="carousel-item">       
      <div class="card bg-dark text-white">
            <img class="card-img img-fluid" src="images/top-story3.jpg" alt="">
            <div class="card-img-overlay d-flex linkfeat">
              <a href="{{$keyhomeslide->url}}" class="align-self-end">
              <span class="badge">{{strtoupper($keyhomeslide->category_name)}}</span> 
                <h4 class="card-title">{{$keyhomeslide->title}}</h4>
               
              </a>
            </div>
          </div>
        </div>
        @elseif ($rows_articlehomeslide=='4')
        @php  $rows_articlehomeslide++; @endphp
          <div class="carousel-item">       
            <div class="card bg-dark text-white">
                  <img class="card-img img-fluid" src="images/top-story4.jpg" alt="">
                  <div class="card-img-overlay d-flex linkfeat">
                    <a href="{{$keyhomeslide->url}}" class="align-self-end">
                    <span class="badge">{{strtoupper($keyhomeslide->category_name)}}</span> 
                      <h4 class="card-title">{{$keyhomeslide->title}}</h4>                    
                    </a>
                  </div>
                </div>
              </div>
              @php  $rows_articlehomeslide++; @endphp          
            @endif 
          @endforeach

    
</div>
    <a class="carousel-control-prev" href="#topslider" data-slide="prev">
      <i class="fas fa-angle-left text-white"></i>
    </a>
    <a class="carousel-control-next" href="#topslider" data-slide="next">
      <i class="fas fa-angle-right text-white"></i>
    </a>
       
    </div>
  </div>
  <div class="col-6 py-0 px-1 d-none d-lg-block d-md-block">
    <div class="row">
      @php $rows_articlehomeslide='1'; @endphp
        @if(count($homeSlide)>0)
          @foreach($homeSlide as $keyhomeslide)
            @if($rows_articlehomeslide=='1')
              @php  $rows_articlehomeslide++; @endphp
                <div class="col-6 pb-2 mg-1 ml-md-2">
                  <div class="card bg-dark text-white">
                      <img class="card-img img-fluid" src="images/top-story1.jpg" alt="">
                      <div class="card-img-overlay d-flex top-hed">
                        <a href="{{$keyhomeslide->url}}" class="align-self-end">
                        <span class="badge d-md-none">Finansial</span> 
                          <h6 class="card-title mb-0">{{$keyhomeslide->title}}</h6>
                        </a>
                      </div>
                    </div>
                </div>
            @elseif($rows_articlehomeslide=='2')
                @php $rows_articlehomeslide++; @endphp
                  <div class="col-6 pb-2 mg-2 ">
                    <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="images/top-story2.jpg" alt="">
                        <div class="card-img-overlay d-flex top-hed">
                          <a href="{{$keyhomeslide->url}}" class="align-self-end">
                          <span class="badge d-md-none">Industri</span> 
                            <h6 class="card-title mb-0">{{$keyhomeslide->title}}</h6>
                          </a>
                        </div>
                      </div>
                  </div>
          @elseif ($rows_articlehomeslide=='3')
            @php  $rows_articlehomeslide++; @endphp
              <div class="col-6 pb-2 mg-3 ml-md-2 mt-md-2 mt-lg-0">
                <div class="card bg-dark text-white">
                    <img class="card-img img-fluid" src="images/top-story3.jpg" alt="">
                    <div class="card-img-overlay d-flex top-hed">
                      <a href="{{$keyhomeslide->url}}" class="align-self-end">
                      <span class="badge d-md-none">Ekspor</span> 
                        <h6 class="card-title mb-0">{{$keyhomeslide->title}}</h6>
                      </a>
                    </div>
                  </div>
              </div>
          @elseif ($rows_articlehomeslide=='4')
            @php  $rows_articlehomeslide++; @endphp
              <div class="col-6 pb-2 mg-4 mt-md-2 mt-lg-0">
                <div class="card bg-dark text-white">
                    <img class="card-img img-fluid" src="images/top-story4.jpg" alt="">
                    <div class="card-img-overlay d-flex top-hed">
                      <a href="{{$keyhomeslide->url}}" class="align-self-end">
                      <span class="badge d-md-none">Pertumbuhan Ekonomi</span> 
                        <h6 class="card-title mb-0">{{$keyhomeslide->title}}</h6>
                      </a>
                    </div>
                  </div>
              </div>
            @php  $rows_articlehomeslide++; @endphp          
          @endif 
        @endforeach
      @endif
    </div>
  </div>
</div>
        <!--top news section-->
    
    <hr class="mt-4" style="border: dashed 0.5px #dee2e6;">
    
    
    <!--2nd section-->
<div class="row pl-0 mb-3 mob-m-0 title-holder m-lg-0">
  <h5 class="mb-0 bdr-solid-l border-warning heading-bdr">
    @if(isset($industryBriefing))
    @for($iB=0;$iB < 1;$iB++)
    <strong>
      <a href="{{$industryBriefing[$iB]->category_name}}-news.html">
      <span class="bg-white pl-3 pr-3">इंडस्ट्री ब्रीफिंग</span>
      </a>
    </strong>
    <small>
      <a href="{{$industryBriefing[$iB]->category_name}}-news.html" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
        <strong>और पढ़ें</strong>
      </a>
    </small>
    @endfor
  </h5>
</div>
    
    <div class="row industry-brefing mt-lg-3 p-3 mob-mt-15 tab-mt-0 rounded mb-bg-light m-lg-0"> 
      @foreach($industryBriefing as $iB) 
      <div class="col-md-3 mob-mb-15">
        <div class="row">
          <div class="col-6 col-sm-12 col-md-12 col-lg-6 pr-0">
            <a href="story.html">
              <img src="images/industry-story1.jpg" class="img-fluid img-thumbnail">
            </a>
          </div>
          <div class="col-6 col-sm-12 col-md-12 col-lg-6 pr-0 pt-lg-0 pl-lg-2 pl-md-3 pt-md-1">
            <h6 class="mb-0">
              <a href="{{$iB->url}}">
                <strong>{{$iB->title}}</strong>
              </a>
            </h6>
            <small class="date text-white tab-date-muted">
              <i class="far fa-clock"></i> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $iB->pickdate)->diffForHumans()}}
            </small>   
          </div>    
        </div>  
      </div>
      @endforeach
    @endif  
  </div>
    <!--2nd section-->
    
    <hr class="mt-4 mb-4" style="border: dashed 0.5px #dee2e6;">
 
    <!--3rd section-->
    <div class="row mt-3">
      
      <div class="col-lg-3 col-md-7 media-form pl-3 pr-3 dashed-bdr-r mob-bdr-0">
      <div class="row ml-0 title-holder">
        @if(isset($mediaForum))
        @for($mf=0;$mf < 1;$mf++)
        <div class="widget-title-cover">
          <h5 class="widget-title">
            <a href="{{$mediaForum[$mf]->category_name}}-news.html">
            <span>मीडिया फोरम</span>
            </a>
          </h5>
          <a href="{{$mediaForum[$mf]->category_name}}-news.html" title="और देखें" class="float-right mt-2 text-danger mob-seemore"><strong>और पढ़ें</strong>
          </a>
        </div>
        @endfor
      </div>        
      <ul>
        @php $no='1'; @endphp
          @foreach($mediaForum as $mF)
            <li>
              <span class="big-number">{{$no}}.</span>
              <a href="#">{{$mF->title}}</a> 
              <small class="float-right date mt-2"> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $mF->pickdate)->diffForHumans()}}</small>
            </li>
            @php $no++; @endphp
          @endforeach
        @endif
        </ul>   
    </div>
 
  <div class="col-lg-6 col-md-12 pl-4 pr-4 dashed-bdr-r mob-p-0 mob-bdr-0">
    <div class="row mob-m-0">
      @if(isset($jobs))
      @for($x = 0; $x < 1; $x++ )
      <div class="row pl-0 mb-3 ml-0 title-holder mob-admsn-job">
        <h5 class="mb-0 bdr-solid-l border-warning heading-bdr">
          <strong>
            <a href="{{$jobs[$x]->category_name}}-news.html">
            <span class="bg-white pl-2 pr-3">एडमिशन/जॉब्स</span>
            </a>
          </strong>
          <small>
            <a href="{{$jobs[$x]->category_name}}-news.html" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
              <strong>और पढ़ें</strong>
            </a>
          </small>
        </h5>
      </div>
      
                  
          <div class="col-md-6 p-1 mob-p-0 admsn-top-stry"> 
            <a href="{{ $jobs[$x]->url }}">
              <img src="images/new-1.jpg" class="img-fluid img-thumbnail border-0">
            </a>
            <h6 class="mt-2 font-heading-1">
              <strong><a href="{{ $jobs[$x]->url }}">{{ $jobs[$x]->title }}</a></strong>
            </h6>
            <p>
              <small>{{ $jobs[$x]->summary }}</small>
            </p>
          </div>
        @endfor
     
      <div class="col-md-6 media-form mob-admsn-reltd">
        @for($x = 1; $x < count($jobs); $x++ )
          <div class="row mt-1">
            <div class="col-6 col-sm-12 col-md-5 col-lg-5 pr-0">
              <a href="{{ $jobs[$x]->url }}">
                <img src="images/admision-story2.jpg" class="img-fluid img-thumbnail">
              </a>
            </div>
            <div class="col-6 col-sm-12 col-md-7 col-lg-7 pr-0 pl-2">
              <h6 class="mb-0">
                <small>
                  <a href="{{ $jobs[$x]->url }}"><strong>{{ $jobs[$x]->title }}</strong></a>
                </small> 
                <small class="float-right date mt-2"><i class="far fa-clock"></i> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $jobs[$x]->pickdate)->diffForHumans()}}</small> 
              </h6>    
            </div>    
          </div>
          <hr>
        @endfor
        
       @endif         
      </div>
    </div>
  </div>
      
      
  <div class="col-lg-3 col-md-5 col-xs-3 col-sm-3 pl-3 pr-3 pb-0 pt-0 text-center mob-dspl-blck top-sq-bn">
    <p class="m-0 add-text text-right"><small class="text-muted">Advertisment</small></p>
      <img src="images/ad-277x220.jpg" class="img-fluid">
      <hr>
        <img src="images/whatsapp.png" class="img-fluid whatsup">
  </div>
</div>
      <!--3rd section-->  
<hr class="mt-4 mb-4" style="border: dashed 0.5px #dee2e6;">
  
    <!--4th section-->
    <div class="row mt-3">
      <div class="row ml-0 title-holder pl-3 pr-3 pb-2 mob-mb-8">
        @if(isset($mostRead))
        @for($mre=0;$mre < 1;$mre++)
        <div class="widget-title-cover yellow-hed">
          <h5 class="widget-title">
            <a href="{{$mostRead[$mre]->category_name}}-news.html">
            <span>सबसे लोकप्रिय खबरें</span>
            </a>
          </h5>
          <a href="{{$mostRead[$mre]->category_name}}-news.html" title="और देखें" class="float-right mt-2 text-danger mob-seemore">
            <strong>और पढ़ें</strong>
          </a>
        </div>
        @endfor
      </div>
      
        @foreach($mostRead as $mR)
        <div class="col-lg-4 col-md-12 media-form dashed-bdr-r mob-p-0 mob-bdr-0"> 
          <a href="{{$mR->url}}"><img src="images/lok-news.jpg" class="img-fluid img-thumbnail"></a>
          <h5 class="mt-2 font-heading-1">
            <strong><a href="{{$mR->url}}">{{$mR->title}}</a></strong>
          </h5>
          <p>{{mb_substr($mR->summary,0,150)}}
            <small class="float-right date mt-2"><i class="far fa-clock"></i>
              {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $mR->pickdate)->diffForHumans()}}
            </small>
          </p>
        </div>
        @endforeach
      @endif    
    </div>
    <!--4th section-->    
    <hr class="mt-4" style="border: dashed 0.5px #dee2e6;">  
    <!--5th section-->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 m-auto red-r-bdr">
        <div class="row mb-3 tab-mb-0 ml-0 title-holder">
          <h5 class="mb-0 heading-bdr" style="font-size: 25px;"><span class="bg-white pr-3">इंटरव्यू</span>
            <small>
              <a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
                <strong>और पढ़ें</strong>
              </a>
            </small>
          </h5>      
        </div>
        @if(isset($interview))        
          <div class="row mob-bg-light-y">
            @for($i = 0; $i < 1; $i++)
            <div class="col-lg-6 col-md-12 col-sm-12 pb-2 mg-1 mob-bdr-0 tab-brd-b pb-md-3">
              <div class="card bg-dark text-white mob-bdr-solid mob-radius-0 mob-mt-15">
                <img class="card-img img-fluid" src="images/brand-1.jpg" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="{{$interview[$i]->url}}" class="align-self-end">
                  <span class="badge">{{strtoupper($interview[$i]->category_name)}}</span> 
                    <h6 class="card-title mb-0">{{$interview[$i]->title}}</h6>
                  </a>
                </div>
              </div>
            </div>
            @endfor
            @for($i = 1; $i < count($interview); $i++)
            <div class="col-lg-6 col-md-12 col-sm-12 pb-2 mg-1 pt-md-1">
              <div class="card bg-dark text-white mob-bdr-solid mob-radius-0 mob-mt-8 mob-mb-8">
                <img class="card-img img-fluid" src="images/brand-2.jpg" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="{{$interview[$i]->url}}" class="align-self-end">
                  <span class="badge">{{strtoupper($interview[$i]->category_name)}}</span> 
                    <h6 class="card-title mb-0">{{$interview[$i]->title}}</h6>
                  </a>
                </div>
              </div>
            </div>
            @endfor
          </div>
        @endif
      </div>
      
      <div class="col-lg-6 col-md-6 col-sm-12 m-auto">
        <div class="row mb-3 tab-mb-0 ml-0 title-holder mob-mt-30">
          <h5 class="mb-0 heading-bdr" style="font-size: 25px;">
            <span class="bg-white pr-3">विचार मंच</span>
            <small>
              <a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
                <strong>और पढ़ें</strong>
              </a>
            </small>
          </h5>      
        </div>
        @if(isset($vicharmanch))
        <div class="row mob-bg-light-y">
          @for($y = 0; $y < 1; $y++)
          <div class="col-lg-6 col-md-12 col-sm-12 pb-2 mg-1 mob-bdr-0 tab-brd-b pb-md-3">
            <div class="card bg-dark text-white mob-bdr-solid mob-radius-0 mob-mt-15">
              <img class="card-img img-fluid" src="images/new-1.jpg" alt="">
              <div class="card-img-overlay d-flex">
                <a href="{{$vicharmanch[$y]->title}}" class="align-self-end">
                <span class="badge">{{strtoupper($vicharmanch[$y]->category_name)}}</span> 
                  <h6 class="card-title mb-0">{{$vicharmanch[$y]->title}}</h6>
                </a>
              </div>
            </div>
          </div>
          @endfor
          @for($y = 1; $y < count($vicharmanch); $y++)
          <div class="col-lg-6 col-md-12 col-sm-12 pb-2 mg-1 pt-md-1">
            <div class="card bg-dark text-white mob-bdr-solid mob-radius-0 mob-mt-8 mob-mb-8">
              <img class="card-img img-fluid" src="images/new-2.jpg" alt="">
              <div class="card-img-overlay d-flex">
                <a href="{{$vicharmanch[$y]->title}}" class="align-self-end">
                <span class="badge">{{strtoupper($vicharmanch[$y]->category_name)}}</span> 
                  <h6 class="card-title mb-0">{{$vicharmanch[$y]->title}}</h6>
                </a>
              </div>
            </div>
          </div>
          @endfor
        </div>
        @endif    
      </div>    
    </div>
    <!--5th section-->

    <hr class="mt-4 mb-2 mob-bdr-0 mob-dspl-none" style="border: dashed 0.5px #dee2e6;">
    
    <!--horizontal add 1110px 75px-->
    <div class="row mt-0 mb-4">
      <div class="col-md-12 text-center mob-p-0">
        <p class="m-0 add-text text-right">
          <small class="text-muted">Advertisment</small>
        </p>
        <img src="images/horizontal-banner1110x75.gif" class="img-fluid">
      </div>
    </div>
    <!--horizontal add 1110px 75px-->
  
    <hr class="mt-4 mob-bdr-0" style="border: dashed 0.5px #dee2e6;">
  
    <!--6th section-->
    <div class="col-12  mt-4 p-0">
      <div class="row section_6">
        <div class="col-lg-2 col-md-2 text-center mob-dspl-none">
          <p class="m-0 add-text text-right">
            <small class="text-muted">Advertisment</small>
          </p>
          <img src="images/ad-160x480-add.jpg">
        </div>
        <div class="col-lg-4 col-md-6 pl-5 mob-p-0 p-md-3 red-r-bdr">
          <div class="row ml-0 mb-2 title-holder mob-p-10">
            <div class="widget-title-cover">
              <h5 class="widget-title"><span>ब्रैंड स्पीक्सस</span>
              </h5>
              <a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
                <strong>और पढ़ें</strong>
              </a>
            </div>
          </div>
          @if(isset($brandSpeaks))
            @for($z = 0; $z < 1; $z++)
              <a href="{{$brandSpeaks[$z]->url}}">
                <img src="images/interview-1.jpg" class="img-fluid img-thumbnail">
              </a>
              <h6 class="mt-2 mb-1 font-heading-1">
                <strong>
                  <a href="{{$brandSpeaks[$z]->url}}">{{$brandSpeaks[$z]->title}}</a>
                </strong>
              </h6>
              <p>
                {{$brandSpeaks[$z]->summary}}
                <small class="float-right date mt-2"><i class="far fa-clock"></i> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $brandSpeaks[$z]->pickdate)->diffForHumans()}}</small>
              </p>
              <hr>
            @endfor
            @for($z = 1; $z < count($brandSpeaks); $z++)  
              <div class="row p-0 m-0">
                <h6 class="mb-0">
                  <a href="{{$brandSpeaks[$z]->url}}">
                    <strong>{{$brandSpeaks[$z]->title}}</strong>
                    <small class="float-right date mt-2"><i class="far fa-clock"></i> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $brandSpeaks[$z]->pickdate)->diffForHumans()}}</small>
                  </a>
                </h6>   
              </div>    
              <hr>
            @endfor  
          @endif       
        </div>

        <div class="col-lg-4 col-md-6 pr-5 mob-mt-30 mob-p-0 p-md-3">
          <div class="row ml-0 mb-2 title-holder mob-p-10">
            <div class="widget-title-cover">
              <h5 class="widget-title">
                <span>ऐड वर्ल्ड</span>
              </h5>
              <a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
                <strong>और पढ़ें</strong>
              </a>
            </div>
          </div>
          @if(isset($Adv))
            @for($p = 0; $p < 1; $p++)
              <a href="{{$Adv[$p]->url}}"><img src="images/interview-2.jpg" class="img-fluid img-thumbnail"></a>
              <h6 class="mt-2 mb-1 font-heading-1">
                <strong>
                  <a href="{{$Adv[$p]->url}}">{{$Adv[$p]->title}}</a>
                </strong>
              </h6>
              <p>
                {{$Adv[$p]->summary}}
                <small class="float-right date mt-2"><i class="far fa-clock"></i> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Adv[$p]->pickdate)->diffForHumans()}}</small>
              </p>
              <hr>
            @endfor
            @for($p = 1; $p < count($Adv); $p++)  
              <div class="row p-0 m-0">
                <h6 class="mb-0">
                  <a href="{{$Adv[$p]->url}}">
                    <strong>{{$Adv[$p]->title}}</strong>
                    <small class="float-right date mt-2"><i class="far fa-clock"></i> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Adv[$p]->pickdate)->diffForHumans()}}</small>
                  </a>
                </h6>   
              </div>    
              <hr>
             @endfor 
          @endif
        </div>  
        <div class="col-lg-2 col-md-2 text-center mob-dspl-none">
          <p class="m-0 add-text text-right">
            <small class="text-muted">Advertisment</small>
          </p>
          <img src="images/ad-160x480-add2.jpg">
        </div>
      </div>      
    </div>
    <!--6th section-->
  
    <hr class="mt-4 mb-2 mob-bdr-0 mob-dspl-none" style="border: dashed 0.5px #dee2e6;">
    
    <!--horizontal add 1110px 75px-->
     <div class="row mt-0 mb-4">
      <div class="col-md-12 text-center mob-p-0">
        <p class="m-0 add-text text-right">
          <small class="text-muted">Advertisment</small>
        </p>
        <img src="images/horizontal-banner1110x75.gif" class="img-fluid">
      </div>
    </div>
    <!--horizontal add 1110px 75px-->
  
    <hr class="mt-4 mob-bdr-0" style="border: dashed 0.5px #dee2e6;">
  
    <!--7th section-->
    <div class="row mt-3 ml-lg-0">
      <div class="col-lg-9 col-md-12 pl-0 pr-4 dashed-bdr-r mob-p-10 mob-bdr-0 tab-bdr">
        <div class="row">
          <div class="col-12 ml-0 mb-2 title-holder mob-mb-15">
            <div class="widget-title-cover heading-3">
              <h5 class="widget-title">
                <span>मुख्य खबरें</span>
              </h5>
              <a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
                <strong>और पढ़ें</strong>
              </a>
            </div>
          </div>
  <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item mb-5" data-ride="carousel">

  <!--Controls-->
    <div class="controls-top custom-slides-control">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
    </div>
  <!--/.Controls-->

  <!--Indicators--
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  !--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    @if(isset($mainNews))
    <!--First slide-->
    <div class="carousel-item active">
      @for($q = 0; $q < 3; $q++)
      <div class="col-md-4 dashed-bdr-r mob-bdr-0"> 
        <a href="{{$mainNews[$q]->url}}">
          <img src="images/telecop-story1.jpg" class="img-fluid img-thumbnail">
        </a>
        <h6 class="mt-2 font-heading-1">
          <strong><a href="{{$mainNews[$q]->url}}">{{$mainNews[$q]->title}}</a>
          </strong>
        </h6>
        <p>
          <small>
            {{$mainNews[$q]->summary}}
            <small class="float-right date mt-2"><i class="far fa-clock"></i> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $mainNews[$q]->pickdate)->diffForHumans()}}</small>
          </small>
        </p>
      </div>

      @endfor

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">
      @for($q = 3; $q < 6; $q++)
       <div class="col-md-4 dashed-bdr-r mob-bdr-0"> 
        <a href="{{$mainNews[$q]->url}}">
          <img src="images/telecop-story1.jpg" class="img-fluid img-thumbnail">
        </a>
          <h6 class="mt-2 font-heading-1">
            <strong>
              <a href="{{$mainNews[$q]->url}}">{{$mainNews[$q]->title}}</a>
            </strong>
          </h6>
            <p>
              <small>{{$mainNews[$q]->summary}}<small class="float-right date mt-2"><i class="far fa-clock"></i> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $mainNews[$q]->pickdate)->diffForHumans()}}</small>
            </small>
          </p>
        </div>
      @endfor  
    </div>
    <!--/.Second slide-->    
    @endif
  </div>
  <!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->
</div>
        
<hr class="mt-1" style="border: dashed 0.5px #dee2e6;">
        
<div class="row mt-4 ml-lg-0">        
  <div class="col-lg-4 col-md-5 col-xs-4 col-sm-4 pr-4 mob-p-30">
    <div class="row media-form">
      <div class="row ml-0 title-holder">
        <div class="widget-title-cover yellow-hed">
          <h5 class="widget-title">
            <span>टेलिस्कोप</span>
          </h5>
          <a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white"><strong>और पढ़ें</strong>
          </a>
        </div>
      </div>        
      <ul class="scrollbar style-4 mt-3 pr-3">
        @php $sr = 1; @endphp
        @if(isset($telS))
          @foreach($telS as $tS)
            <li >
              <span class="big-number text-dark">{{$sr}}.</span>
              <a href="{{$tS->url}}">{{$tS->title}}</a> 
              <small class="float-right date mt-2"> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tS->pickdate)->diffForHumans()}}</small>
            </li>
          @php $sr++; @endphp  
          @endforeach  
        @endif
      </ul>   
    </div>
        <hr class="mt-4">
        
        <div class="row mt-4">
        <div class="col-md-12 text-white p-0 bg-dark rounded">
          
    <h4 class="text-white bg-warning p-1 pl-3 rounded-top" style="border-bottom: dotted #000000 2px;font-family: 'Rajdhani', sans-serif; font-weight: 700;">सब्सक्राइब</h4> 
          <h5 class="pl-3" style="line-height: 35px;">न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए</h5>
            <div class="form-group p-3 mb-0">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
          <p class="text-center"><button type="button" class="btn btn-warning btn-sm">Subscribe</button></p>
    
        </div>
        </div>

        
      </div>
      
      
      
      <div class="col-lg-8 col-md-7 text-left pt-0 pl-4">
        
        <div class="row pl-0 mb-3 ml-0 title-holder">
    <h5 class="mb-0 heading-bdr"><strong><span class="bg-white pr-3">अतिरिक्त</span>
</strong><small><a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white"><strong>और पढ़ें</strong></a></small></h5></div>
        
      <div class="row pb-3">
        
        <div class="col-md-6 dashed-bdr-r mob-bdr-0"> <a href="#"><img src="images/vichar-story1.jpg" class="img-fluid img-thumbnail"></a>
          <h6 class="mt-2 font-heading-1"><strong><a href="#">क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं नए चैनल की तैयारी....</a></strong></h6>
            <p>2019 चुनावी साल है, ऐसे में कई नए चैनल दर्शकों के सामने आने वाले है। पर आजकल मीडिया गलियारों में सबसे ज्यादा चर्चा है...<small class="float-right date mt-2"><i class="far fa-calendar"></i> 19 July, 2018</small></p>
        </div>
        <div class="col-md-6"> <a href="#"><img src="images/vichar-story2.jpg" class="img-fluid img-thumbnail"></a>
          <h6 class="mt-2 font-heading-1"><strong><a href="#">क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं नए चैनल की तैयारी....</a></strong></h6>
            <p>2019 चुनावी साल है, ऐसे में कई नए चैनल दर्शकों के सामने आने वाले है। पर आजकल मीडिया गलियारों में सबसे ज्यादा चर्चा है...<small class="float-right date mt-2"><i class="far fa-calendar"></i> 19 July, 2018</small></p>
        </div>
        </div>
        
        <div class="row mt-3">
        <div class="col-md-6 dashed-bdr-r mob-bdr-0"> <a href="#"><img src="images/vichar-story3.jpg" class="img-fluid img-thumbnail"></a>
          <h6 class="mt-2 font-heading-1"><strong><a href="#">क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं नए चैनल की तैयारी....</a></strong></h6>
            <p>2019 चुनावी साल है, ऐसे में कई नए चैनल दर्शकों के सामने आने वाले है। पर आजकल मीडिया गलियारों में सबसे ज्यादा चर्चा है...<small class="float-right date mt-2"><i class="far fa-calendar"></i> 19 July, 2018</small></p>
        </div>
        <div class="col-md-6"> <a href="#"><img src="images/vichar-story4.jpg" class="img-fluid img-thumbnail"></a>
          <h6 class="mt-2 font-heading-1"><strong><a href="#">क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं नए चैनल की तैयारी....</a></strong></h6>
            <p>2019 चुनावी साल है, ऐसे में कई नए चैनल दर्शकों के सामने आने वाले है। पर आजकल मीडिया गलियारों में सबसे ज्यादा चर्चा है...<small class="float-right date mt-2"><i class="far fa-calendar"></i> 19 July, 2018</small></p>
        </div>
        </div>
      </div>
      
        
        </div>    
    
    
    </div>
 
<div class="col-lg-3 col-md-12 mob-m-auto pl-4 mob-p-10">
  <div class="col-lg-12 col-md-7 m-0 p-0 float-md-left">
    <div class="col-12 p-0 ml-0 title-holder">
      <div class="widget-title-cover heading-3">
        <h5 class="widget-title">
          <span>सोशल मीडिया</span>
        </h5>
        <a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white">
          <strong>और पढ़ें</strong>
        </a>
      </div>
    </div>                  
    <ul id="nt-example1">
      @if(isset($socialM))
        @foreach($socialM as $sM)
          <li>
            <a href="{{$sM->url}}">{{$sM->title}}
              <small class="float-right text-white date mt-2"><i class="far fa-clock"></i> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sM->pickdate)->diffForHumans()}}</small>
            </a>
          </li>
        @endforeach  
      @endif
    </ul>
  </div>
        
        
        <div class="row col-lg-12 col-md-5 text-center pr-0 m-lg-0 p-lg-0">
          <div class="col-lg-12 p-lg-0 col-md-10 mt-3 m-md-auto">
        <p class="m-0 add-text text-right"><small class="text-muted">Advertisment</small></p>
        <img src="images/ad-277x300-add2.jpg" class="img-fluid">
            </div>
        
           <div class="col-lg-12 p-lg-0 col-md-10 mt-3 m-md-auto">
        <p class="m-0 add-text text-right"><small class="text-muted">Advertisment</small></p>
        <img src="images/ad-277x300-add3.jpg" class="img-fluid">
            </div>
      </div>

      </div>

    </div>
    
    
    <hr class="mt-4 mb-2 mob-bdr-0 mob-dspl-none" style="border: dashed 0.5px #dee2e6;">
    
    <!--horizontal add 1110px 75px-->
     <div class="row mt-0 mb-4">
      <div class="col-md-12 text-center mob-p-0">
        <p class="m-0 add-text text-right"><small class="text-muted">Advertisment</small></p>
        <img src="images/horizontal-banner1110x75.gif" class="img-fluid"></div>
    </div>
    <!--horizontal add 1110px 75px-->
    
    <hr class="mt-4 mb-0 mob-bdr-0 mob-dspl-none" style="border: dashed 0.5px #dee2e6;">
    
    
<!--7th section--><!--8th add section-->
    <div class="row mt-3 ml-lg-0">
    <div class="col-lg-6 col-md-12 m-md-auto pl-0 dashed-bdr-r mob-p-0 mob-bdr-0 tab-bdr">
      <div class="row ml-0 mb-2 title-holder mob-p-10">
        <div class="widget-title-cover yellow-hed"><h5 class="widget-title">  <span>फोटो गैलरी</span></h5><a href="photos.html" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white"><strong>और पढ़ें</strong></a></div></div>
      <!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails mb-0" data-ride="carousel">
  <!--Slides-->
  <div class="carousel-inner full-gallery-img" role="listbox">
    <div class="carousel-item active"> <a href="#"><img class="d-block w-100" src="images/gallery-1.jpg" alt="First slide"></a>
    </div>
    <div class="carousel-item"> <a href="#"><img class="d-block w-100" src="images/gallery-2.jpg" alt="Second slide"></a>
    </div>
    <div class="carousel-item"> <a href="#"><img class="d-block w-100" src="images/gallery-3.jpg" alt="Third slide"></a>
    </div>
     <div class="carousel-item"> <a href="#"><img class="d-block w-100" src="images/gallery-4.jpg" alt="fourth slide"></a>
       </div>
     <div class="carousel-item"> <a href="#"><img class="d-block w-100" src="images/gallery-5.jpg" alt="fivth slide"></a>
       </div>
    <div class="carousel-item"> <a href="#"><img class="d-block w-100" src="images/gallery-6.jpg" alt="sixth slide"></a>
      </div>
    <div class="carousel-item"> <a href="#"><img class="d-block w-100" src="images/gallery-7.jpg" alt="seventh slide"></a>
      </div>
    <div class="carousel-item"> <a href="#"><img class="d-block w-100" src="images/gallery-8.jpg" alt="eight slide"></a>
      </div>
    <div class="carousel-item"> <a href="#"><img class="d-block w-100" src="images/gallery-9.jpg" alt="ninth slide"></a>
      </div>
  </div>
  
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev left115" href="#carousel-thumb" role="button" data-slide="prev">
   <i class="fas fa-angle-left text-white"></i>
  </a>
  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
    <i class="fas fa-angle-right text-white"></i>
  </a>  
  <!--/.Controls-->
  <ol class="carousel-indicators image-gallery scrollbar style-4">
    <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100 img-thumbnail" src="images/gallery-1.jpg"></li>
    <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100 img-thumbnail" src="images/gallery-2.jpg"></li>
    <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100 img-thumbnail" src="images/gallery-3.jpg"></li>
     <li data-target="#carousel-thumb" data-slide-to="3"><img class="d-block w-100 img-thumbnail" src="images/gallery-4.jpg"
></li>
     <li data-target="#carousel-thumb" data-slide-to="4"><img class="d-block w-100 img-thumbnail" src="images/gallery-5.jpg"></li>
    <li data-target="#carousel-thumb" data-slide-to="5"><img class="d-block w-100 img-thumbnail" src="images/gallery-6.jpg"></li>
    <li data-target="#carousel-thumb" data-slide-to="6"><img class="d-block w-100 img-thumbnail" src="images/gallery-7.jpg"></li>
    <li data-target="#carousel-thumb" data-slide-to="7"><img class="d-block w-100 img-thumbnail" src="images/gallery-8.jpg"></li>
    <li data-target="#carousel-thumb" data-slide-to="8"><img class="d-block w-100 img-thumbnail" src="images/gallery-9.jpg"></li>
    
    
    
  </ol>
</div>
<!--/.Carousel Wrapper-->
      </div>
      
      <div class="col-lg-6 col-md-12 m-md-auto">
      <div class="row ml-0 mb-2 title-holder mob-mt-30 mob-mb-15  mt-md-4">
        <div class="widget-title-cover heading-3"><h5 class="widget-title"><span>विडियो</span></h5><a href="videos.html" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white"><strong>और पढ़ें</strong></a></div></div>
      <div class="row">
    <div class="col-lg-9 col-md-12 video-selected mob-p-0">
      <div class="video-iframe">
        <iframe src="https://www.youtube.com/embed/TpnPzrvJp3Y?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
      
    <div class="col-lg-3 col-md-12 m-md-auto video-thumbnails video-gallery scrollbar style-4">

      <div class="video-thumb">
        <img src="images/video-1.jpg" class="img-thumbnail">
        <!--<p>Joe Fabian '08<br>
        Account Director at Reval</p>-->
        <iframe class="iframe" src="https://www.youtube.com/embed/TpnPzrvJp3Y?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-thumb">
        <img src="images/video-2.jpg" class="img-thumbnail">
        <!--<p>Lauren Lawlor '09<br>
        HR Professional at Central Hudson Gas &amp; Electric</p>-->
        <iframe class="iframe" src="https://www.youtube.com/embed/sFcUVK6XupY?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-thumb">
        <img src="images/video-3.jpg" class="img-thumbnail">
        <!--<p>Jamar Palmer '13<br>
        Marketing Analyst at UPS</p>-->
        <iframe class="iframe" src="https://www.youtube.com/embed/mLwqW8cG8aA?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    
     <div class="video-thumb">
        <img src="images/video-3.jpg" class="img-thumbnail">
        <!--<p>Jamar Palmer '13<br>
        Marketing Analyst at UPS</p>-->
        <iframe class="iframe" src="https://www.youtube.com/embed/mLwqW8cG8aA?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    
     <div class="video-thumb">
        <img src="images/video-3.jpg" class="img-thumbnail">
        <!--<p>Jamar Palmer '13<br>
        Marketing Analyst at UPS</p>-->
        <iframe class="iframe" src="https://www.youtube.com/embed/mLwqW8cG8aA?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    
     <div class="video-thumb">
        <img src="images/video-3.jpg" class="img-thumbnail">
        <!--<p>Jamar Palmer '13<br>
<h3>
        Marketing Analyst at UPS</p>-->
        <iframe class="iframe" src="https://www.youtube.com/embed/mLwqW8cG8aA?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    
    
    </div>
  

    
    </div>
      
      </div>
      
      </div>
<!--8th add section-->


  
  </div>
  <!--middle-body-->
@endsection
