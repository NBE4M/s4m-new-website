@extends('partials.app')
@section('content')
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
    @if(isset($shareAlbum))
    <nav aria-label="breadcrumb">
      <small>
        <ol class="breadcrumb bg-white text-warning p-0">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{Request::url()}}">News</a></li>
          <!-- <li class="breadcrumb-item active">Data</li> -->
        </ol>
      </small>
    </nav>
    <div class="row m-0">
      <div class="row m-0">
        @foreach($shareAlbum as $sam)
        <div class="row m-0">
          <div class="col-lg-4 col-md-12 p-0"> 
            <a href="{{url('')}}/photo/{{strtolower(str_replace(' ','-',$sam->album_title))}}-{{$sam->id}}.html">
              <img class="img-fluid img-thumbnail" src="{{Config::get('constants.storagepath')}}/album/{{$sam->photopath}}" alt="{{$sam->phototitle}}" onerror="this.onerror=null;this.src='{{url("images/brand-1.jpg")}}';">
            </a>
          </div>        
          <div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
            <h5 class="story-page-hed">
              <a href="{{url('')}}/photo/{{strtolower(str_replace(' ','-',$sam->album_title))}}-{{$sam->id}}.html">{{$sam->album_title}}</a>
            </h5>
            <p class="date font-weight-bold text-muted mb-0 mt-0"> 
              <i class="fas fa-user mr-1"></i> 
              <a href="#"> samachar4media Staff</a> 
              <i class="far fa-clock ml-2 mr-1"></i> 
              <a href="#">5 days ago </a>
            </p>
            <p class="mt-3">
              <a href="#">
                <i class="fab fa-facebook-f text-warning"></i>
              </a> 
              <a href="#">
                <i class="fab fa-twitter text-warning ml-2"></i>
              </a> 
              <a href="#">
                <i class="fab fa-linkedin-in text-warning ml-2"></i>
              </a> 
              <a href="#">
                <i class="fab fa-whatsapp text-warning ml-2"></i>
              </a> 
              <a href="#">
                <i class="fas fa-envelope text-warning ml-2"></i>
              </a> 
              <a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0">
                <i class="far fa-image m-1"></i> View Gallery
              </a>
            </p>
          </div>
        </div>        
        <div class="col p-0 mt-2 mb-3">
          <hr class="dashed-bdr-t mb-1">
        </div>
        @endforeach
      </div>
    </div>
    @endif
    {{ $shareAlbum->links() }}
  </div>
  
  <!--left-part-->
  @include('partials.rightsidebar')
</div>
<!--center-part-->
</div>
<!--middle-body-->
@endsection           