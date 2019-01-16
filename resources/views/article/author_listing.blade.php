
@extends('partials.app')
@section('content')
<!--main div start here-->
<main role="main">
<div class="container bw">
<div class="col no-padding p10 text-center">
<!-- <img src="http://design.exchange4media.com/e4mdesigner/e4mnew/img/horizontal-banner.jpg" class="img-fluid"> -->
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"> {{$display_name}}</li>
  </ol>
</nav>
<!--MAIN FIRST ROW START-->
<div class="col no-padding mt10">
<div class="row">




<!--MIDDLE TOP NEWS START here-->
<div class="col-md-12 col-lg-8 col-xs-12 col-sm-12">


<div class="row mt-2 no-gutters border-bottom-pnk">
<h5 class="flama-font text-uppercase mb-0"><kbd><i class="fas fa-users"></i> {{$display_name}}</kbd></h5></div><br>
<input id="myInput" type="text" placeholder="Search Author" style="float: right;">  <br>
 <div class="row mt-2 video" id="results">
       @foreach($ArrAuthorListing as $aa)
        <div class="col-md-6 col-lg-4 col-sm-6 col-12 mt-4"><a href="/author/{{str_slug($aa->name)}}-{{$aa->author_id}}.html" class="authst"><img src="https://storage.googleapis.com/news-photo/album/{{$aa->photo}}" class="img-fluid"><h6 class="flama mt-2">{{$aa->name}}</h6></a></div>
        @endforeach
  </div>
  
   {!! $ArrAuthorListing->render() !!} 
  
     

</div>
@include('partials.rightsidebar')
<!--RIGHT SIDE EDITOR'S PICK END here-->
</div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#results .mt-4").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!--MAIN FIRST ROW END-->
</div>
</main>


@endsection           