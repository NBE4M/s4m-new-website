@extends('partials.app')
@section('content')

<main role="main">
<div class="container bw">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
   <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Topics</li>
  </ol>
</nav>

<!--MAIN FIRST ROW START-->
<div class="col no-padding mt10">
<div class="row">
<!--MIDDLE TOP NEWS START here-->
<div class="col-md-12 col-lg-8 col-12 col-sm-12 content box">
<div class="theiaStickySidebar">


 <div class="row mt-2 no-gutters border-bottom-pnk">
<h5 class="flama text-uppercase mb-0"><kbd><i class="fas fa-tags"></i> Topics</kbd>   </h5>            
                 </div> 
 
 
 
 
 
 
 <div class="row mt-5">
 <div class="col-lg-12">
        <ul class="pagination alltag">
        <li class="page-item"><a class="page-link" data-id="#">#</a></li>
        <li class="page-item"><a class="page-link" data-id="a">A</a></li>
        <li class="page-item"><a class="page-link" data-id="b">B</a></li>
        <li class="page-item"><a class="page-link" data-id="c">C</a></li>
        <li class="page-item"><a class="page-link" data-id="d">D</a></li>
        <li class="page-item"><a class="page-link" data-id="e">E</a></li>
        <li class="page-item"><a class="page-link" data-id="f">F</a></li>
        <li class="page-item"><a class="page-link" data-id="g">G</a></li>
        <li class="page-item"><a class="page-link" data-id="h">H</a></li>
        <li class="page-item"><a class="page-link" data-id="i">I</a></li>
        <li class="page-item"><a class="page-link" data-id="j">J</a></li>
        <li class="page-item"><a class="page-link" data-id="k">K</a></li>
        <li class="page-item"><a class="page-link" data-id="l">L</a></li>
        <li class="page-item"><a class="page-link" data-id="m">M</a></li>
        <li class="page-item"><a class="page-link" data-id="n">N</a></li>
        <li class="page-item"><a class="page-link" data-id="o">O</a></li>
        <li class="page-item"><a class="page-link" data-id="p">P</a></li>
        <li class="page-item"><a class="page-link" data-id="q">Q</a></li>
        <li class="page-item"><a class="page-link" data-id="r">R</a></li>
        <li class="page-item"><a class="page-link" data-id="s">S</a></li>
        <li class="page-item"><a class="page-link" data-id="t">T</a></li>
        <li class="page-item"><a class="page-link" data-id="u">U</a></li> 
        <li class="page-item"><a class="page-link" data-id="v">V</a></li>
        <li class="page-item"><a class="page-link" data-id="w">W</a></li>
        <li class="page-item"><a class="page-link" data-id="x">X</a></li>
        <li class="page-item"><a class="page-link" data-id="y">Y</a></li>
        <li class="page-item"><a class="page-link" data-id="z">Z</a></li>

        </ul>
  </div>
 </div>
 
 
 <div class="row mt-5 alltag" id="firstbox">
 <div class="col-lg-12">
 <h3 class="text-center btn-search"><strong><span id="tagss">Trending Topics</span></strong></h3>
 </div>
 <div class="col-lg-12" id="resulthide">
  
    @foreach($tagshash as $tag)<a href="https://www.exchange4media.com/tags/{{str_slug($tag->tag)}}.html" class="btn tags">{{$tag->tag}}</a>@endforeach

 </div>
  <div class="col-lg-12" id="result">

 </div>
 </div>
</div>
</div>

@include('partials.rightsidebar')
</div>
</main>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.page-link').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var id =($(this).attr("data-id"));
      
        $.ajax({
             type:"POST",
             url:"/tags_list/"+id,
             success : function(results) {
                  $("#resulthide").hide();
                  $("#tagss").text(id);
                  $("#result").empty();
                  $("#result").append(results);
             }
        }); 
    });
});  
</script>
<style type="text/css">
  .page-link{
        color: #ffffff !important;

  }
  #tagss{
    text-transform: capitalize;
  }
</style>
@endsection      