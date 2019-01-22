@extends('partials.app')
@section('content')
<!--middle-body-->
<div class="container mt-65 mb-4 mob-mt-75">
	<!--center-part-->
	<div class="row mob-p-0 mob-m-0">
		<!--left-part-->
		<div class="col-md-7 col-lg-9 dashed-bdr-r mob-bdr-0 mob-p-0 pl-md-0 pl-lg-3">		
			<nav aria-label="breadcrumb">
				<small> 
					<ol class="breadcrumb bg-white text-warning p-0">
						<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Library</a></li>
						<li class="breadcrumb-item active">Data</li>
					</ol>
				</small>
			</nav>
			<div class="row m-0">
				<div class="row m-0">
					@if(isset($galleryPic))	
					<!--photo slider-->
					<div class="row">			
						<div class="col-md-12 col-lg-12 col-xs-12">
							<div class="col mt-1 p-0">         
								<div id="videoslider" class="carousel slide geffect">
									<!-- main slider carousel items -->
									<div class="carousel-inner">
										@for($x=0;$x < 1;$x++)
										<div class="carousel-item active" data-slide-number="0">
											<img class="img-fluid" src="{{Config::get('constants.storagepath')}}/album/{{$galleryPic[$x]->photopath}}" alt="{{$galleryPic[$x]->phototitle}}" width="100%" onerror="this.onerror=null;this.src='{{url("images/gallery-2.jpg")}}';">
											<div class="vd"></div>
											<div class="carousel-caption bg-dark">
												{{$galleryPic[$x]->photo_title}}
											</div>
										</div>
										@endfor
										@php $no='1'; @endphp
										@for($x=1;$x < count($galleryPic);$x++)
										<div class="carousel-item" data-slide-number="{{$no}}">
											<img class="img-fluid" src="{{Config::get('constants.storagepath')}}/album/{{$galleryPic[$x]->photopath}}" alt="{{$galleryPic[$x]->phototitle}}" width="100%" onerror="this.onerror=null;this.src='{{url("images/gallery-4.jpg")}}';">
											<div class="vd"></div>
											<div class="carousel-caption bg-dark">
												{{$galleryPic[$x]->photo_title}}
											</div>
										</div>
										@php $no++; @endphp
										@endfor
										
										<a class="carousel-control-prev" href="#videoslider" role="button" data-slide="prev">
											<i class="far fa-arrow-alt-circle-left text-white"></i>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#videoslider" role="button" data-slide="next">
											<i class="far fa-arrow-alt-circle-right text-white"></i>
											<span class="sr-only">Next</span>
										</a>
									</div>
									<!-- main slider carousel nav controls -->
								</div>
								<div id="videosliderthumb" class="carousel carousel-showmanymovevdthumb slide col border-blk mt-4 	geffectthumb" data-ride="carousel" data-interval="false">
									<div class="carousel-inner">
										<div class="carousel-item active">
											@php $NO='0'; @endphp
											@for($x=0;$x < count($galleryPic);$x++)
											<div class="col-md-3 col-lg-3 col-3 post-padding float-left">
												<a id="carousel-selector-0" class="selected" data-slide-to="{{$NO}}" data-target="#videoslider">
													<img class="img-fluid" src="{{Config::get('constants.storagepath')}}/album/{{$galleryPic[$x]->photopath}}" alt="{{$galleryPic[$x]->phototitle}}"  onerror="this.onerror=null;this.src='{{url("images/gallery-4.jpg")}}';">
													
													<div class="vdthmb"></div>
												</a>
											</div>
											@php $NO++; @endphp
											@endfor
										</div>
											<!-- <div class="carousel-item">
												<div class="col-md-3 col-lg-3 col-3 post-padding float-left">
													<a id="carousel-selector-4" data-slide-to="4" data-target="#videoslider">
														<img src="images/brand-1.jpg" class="img-fluid">
														<div class="vdthmb"></div>
													</a>
												</div>
												<div class="col-md-3 col-lg-3 col-3 post-padding float-left cloneditem-1">
													<a id="carousel-selector-5" data-slide-to="5" data-target="#videoslider">
														<img src="images/brand-1.jpg" class="img-fluid">
														<div class="vdthmb"></div>
													</a>
												</div><div class="col-md-3 col-lg-3 col-3 post-padding float-left cloneditem-2">
													<a id="carousel-selector-6" data-slide-to="6" data-target="#videoslider">
														<img src="images/brand-1.jpg" class="img-fluid">
														<div class="vdthmb"></div>
													</a>
												</div><div class="col-md-3 col-lg-3 col-3 post-padding float-left cloneditem-3">
													<a id="carousel-selector-7" data-slide-to="7" data-target="#videoslider">
														<img src="images/brand-1.jpg" class="img-fluid">
														<div class="vdthmb"></div>
													</a>
												</div>
											</div> -->

											</div>
											<a class="carousel-control-prev carousel-control" href="#videosliderthumb" role="button" data-slide="prev" style="width: 2%;color: #212121;top: -7%;">
												<i class="far fa-arrow-alt-circle-left"></i>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next text-faded carousel-control" href="#videosliderthumb" role="button" data-slide="next"  style="width: 2%;color: #212121;top: -7%;">
												<i class="far fa-arrow-alt-circle-right"></i>
												<span class="sr-only">Next</span>
											</a>
										</div>       
									</div>
								</div>
								<div class="col-12">
									<div class="row mt-3">

										<div class="col-md-5 mob-text-center mob-p-0">
											<h6><strong>Samachar4media staff</strong><br><small class="text-muted"><i class="far fa-clock mr-1"></i> 3 days ago</small></h6>
										</div>
										<div class="col-md-7 share-buttons text-right mob-p-0">
											<!--Facebook-->
											<button type="button" class="btn btn-fb pl-2 pr-2 pt-1 pb-1 mr-0 ml-0"><i class="fab fa-facebook-f pr-1"></i> Share</button>
											<!--Twitter-->
											<button type="button" class="btn btn-tw pl-2 pr-2 pt-1 pb-1 mr-0 btn-info"><i class="fab fa-twitter pr-1"></i> Share</button>
											<!--linkedin-->
											<button type="button" class="btn btn-li pl-2 pr-2 pt-1 pb-1 mr-0"><i class="fab fa-linkedin-in pr-1"></i> Share</button>
											<!--whatsup-->
											<button type="button" class="btn btn-slack pl-2 pr-2 pt-1 pb-1 mr-0"><i class="fab fa-whatsapp pr-1"></i> Share</button>
											<!--mail-->
											<button type="button" class="btn btn-email pl-2 pr-2 pt-1 pb-1 mr-0"><i class="fas fa-envelope pr-1"></i> Share</button>
											<!--Github-->
										</div>
									</div>
								</div>

							</div>
							<!--photo slider-->
							@endif
							<div class="col mt-3 p-0"><hr class="bdr-solid"></div>
							@if(isset($otherGallery))
							<div class="row m-0 mt-3">
								@for($z=0; $z < 1;$z++)
								<div class="col-lg-4 col-md-12 p-0"> 
									<a href="#">
										<img class="img-fluid img-thumbnail" src="{{Config::get('constants.storagepath')}}/album/{{$otherGallery[$z]->photopath}}" alt="{{$otherGallery[$z]->phototitle}}"  onerror="this.onerror=null;this.src='{{url("images/brand-1.jpg")}}';">										
									</a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">{{$otherGallery[$z]->album_title}}</a></h5>

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

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>
							@endfor
							@for($z=1;$z < count($galleryPic);$z++)
							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> 
									<a href="#">
										<img class="img-fluid img-thumbnail" src="{{Config::get('constants.storagepath')}}/album/{{$otherGallery[$z]->photopath}}" alt="{{$otherGallery[$z]->phototitle}}"  onerror="this.onerror=null;this.src='{{url("images/brand-1.jpg")}}';">
									</a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed">
										<a href="#">{{$otherGallery[$z]->album_title}}</a>
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
							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>
							@endfor
							@endif

							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-1.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-4.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-3.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-2.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-1.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-4.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-3.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>



							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-3.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-2.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-1.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-4.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-3.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-3.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-2.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-1.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-4.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-3.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>


							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-3.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-2.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-1.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-4.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-3.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-3.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-2.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-1.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-4.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>

							<div class="col p-0 mt-2 mb-3"><hr class="dashed-bdr-t mb-1"></div>


							<div class="row m-0">
								<div class="col-lg-4 col-md-12 p-0"> <a href="#"><img src="images/gallery-3.jpg" class="img-fluid img-thumbnail"></a>
								</div>

								<div class="col-lg-8 col-md-12 mob-p-0 mob-pt-10">
									<h5 class="story-page-hed"><a href="#">Sanjiv Mehta, CEO and MD, HUL and EVP, Unilever, SouthAsia at TechManch 2018</a></h5>

									<p class="date font-weight-bold text-muted mb-0 mt-0"> <i class="fas fa-user mr-1"></i> <a href="#"> samachar4media Staff</a> <i class="far fa-clock ml-2 mr-1"></i> <a href="#">5 days ago </a></p>
									<p class="mt-3"><a href="#"><i class="fab fa-facebook-f text-warning"></i></a> <a href="#"><i class="fab fa-twitter text-warning ml-2"></i></a> <a href="#"><i class="fab fa-linkedin-in text-warning ml-2"></i></a> <a href="#"><i class="fab fa-whatsapp text-warning ml-2"></i></a> <a href="#"><i class="fas fa-envelope text-warning ml-2"></i></a><a class="btn btn-dark btn-sm px-2 waves-effect export-to-snippet float-right mt-0"><i class="far fa-image m-1"></i> View Gallery</a></p>

								</div>
							</div>




						</div>

					</div>

				</div><!--left-part-->

				@include('partials.rightsidebar')



			</div><!--center-part-->



		</div>
		<!--middle-body-->

		@endsection 