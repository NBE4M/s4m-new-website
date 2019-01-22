<!-- Footer -->
<footer class="page-footer font-small lighten-5" style="background-color: #444444!important;">

    <div class="bg-dark">
      <div class="container">

        <!-- Grid row-->
        <div class="row p-3 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a href="https://www.facebook.com/Samachar4media/" class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a href="https://twitter.com/samachar4media?lang=en" class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- linkedin -->
            <a class="gplus-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--whatsup -->
            <a class="li-ic">
              <i class="fab fa-whatsapp white-text mr-4"> </i>
            </a>
         <!--mail -->
            <a class="li-ic">
              <i class="fas fa-envelope white-text mr-4"> </i>
            </a>
           

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3 text-white">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">ABOUT S4M</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>samachar4media was set up in year 2000 with the aim of publishing niche, relevant and quality publications for the marketing, advertising and media professionals.</p>

        </div>
        <!-- Grid column -->

      
       <!-- Grid column -->
        <div class="col-md-3 col-6 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      	  <div class="scrollbar style-4 footer-height">
      	  	@if(isset($menus))
      	  	@foreach($menus as $menu)
	          <p>
	            <a class="text-white" href="{{url('')}}/{{$menu->e_name}}-news.html">{{$menu->name}}</a>
	          </p>
	          @endforeach
	        @endif  
          </div>

        </div>
        <!-- Grid column -->
      
        <!-- Grid column -->
        <div class="col-md-2 col-6 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">OTHER LINK</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p>
            <a class="text-white" href="#!">इंडस्ट्री ब्रीफिंग</a>
          </p>
          <p>
            <a class="text-white" href="#!"> ऐड वर्ल्ड</a>
          </p>
          <p>
            <a class="text-white" href="#!">लोकप्रिय खबरें</a>
          </p>
          <p>
            <a class="text-white" href="#!">टेलिस्कोप</a>
          </p>
      

        </div>
        <!-- Grid column -->

       

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> ADSERT WEB SOLUTIONS PVT. LTD. B-20, SECTOR 57 NOIDA (U.P)</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">Copyright © {{date('Y')}} samachar4media.com
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer --> 
</div>
<!--main-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script> 
<script type='text/javascript' src="{{asset('js/sticky-sidebar.js')}}"></script>
<script src="{{asset('js/jquery.newsTicker.js')}}"></script>
<!--<script type="text/javascript" src="js/jquery.vticker-min.js"></script>-->
<script type="text/javascript" src="{{asset('js/post-block.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script> 
<script src="{{asset('js/bootstrap-4.0.0.js')}}"></script>
<script src="{{asset('js/mdb.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/s4m.js')}}"></script>
<script src="{{asset('js/social.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.js"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script  src="{{asset('js/story.js')}}" charset="utf-8"></script> 

 