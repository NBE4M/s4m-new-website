@extends('partials.app')
@section('content')

<main role="main">
<div class="container bw">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">GDPR Compliance</li>
  </ol>
</nav>

<!--MAIN FIRST ROW START-->
<div class="col no-padding mt10">
<div class="row">
<!--MIDDLE TOP NEWS START here-->
<div class="col-md-12 col-lg-8 col-12 col-sm-12 content box">
<div class="theiaStickySidebar">


 <div class="row mt-2 no-gutters border-bottom-pnk">
<h5 class="flama text-uppercase mb-0"><kbd><i class="fas fa-tags"></i> GDPR</kbd>COMPLIANCE  </h5>            
                 </div> 
 
 <div class="row no-gutters">
                    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 no-padding term">
		<h3 class="flama-font mb-1 mt-2">GDPR Compliance</h3>
		
		<p>From May 25, 2018, The General Data Protection Regulation (GDPR) is effective and we at Exchange4Media are committed to protecting information that we collect in the best possible manner. In order to comply with the GDPR we have planned for some changes that include:</p>  
  <ul>      
<li>Opt - in: Where we control the information, we will ensure that your consent is taken before the information is collected. You will also be able to review our updated privacy policy.</li>
<li>Updating our legal agreements to ensure they are GDPR compliant</li>
<li>Updating our systems and processes to meet the requirements of GDPR</li>
</ul>




		</div>
                    
                                    </div>
</div>
</div>

@include('partials.rightsidebar')
</div>
</main>

@endsection      