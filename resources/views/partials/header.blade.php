<div class="col-12 p-0">
  <!--header-->
  <div class="col-12 p-0">
    <!--top band add-->
      <div class="container top-band">
        <div class="row mt-2 mb-2">
          <div class="col-md-12 text-center"><img src="{{url('images/top-banner-728x90.jpg')}}" class="img-fluid"></div>
        </div>
      </div>
    <!--top band add-->

    <div class="col-12">
      <div class="container p-0">
        <header id="header">
          <div class="container">
            <div class="clearfix region-header">
              <div class="logo">
                <a rel="nofollow" href="/" class="site-logo"></a>
              </div>
              <div class="custom-search">
                <form accept-charset="UTF-8" id="views-exposed-form-search-result-page-1" method="get" action="/results">
                  <div class="form--inline clearfix">
                    <label for="edit-combine"> </label>
                    <input type="text" class="form-text" maxlength="128" size="30" value="" name="combine" id="edit-combine" />
                    <input type="submit" class="button js-form-submit form-submit" value="Apply" id="edit-submit-search-result" />
                  </div>
                </form>
              </div>
              <nav class="clearfix">
                <div id="menu" class="mt-md-0 mt-lg-1">
                  <ul class="clearfix menu">
                    <li><a href="{{url('')}}"><i class="fas fa-home"></i></a></li>
                    @if(isset($menus))
                      @foreach($menus as $menu)
                        <li><a href="{{url('')}}/{{$menu->e_name}}-news.html">{{$menu->name}}</a></li>
                      @endforeach
                    @endif
                  </ul>
                </div>
                <div class="menu-btn">
                  <div class="burger-container">
                    <div id="burger">
                    <div class="bar topBar"></div>
                    <div class="bar btmBar"></div>
                    </div>
                  </div>
                </div>
                <a class="search-icon" href="#">search</a>
              </nav>
            </div>
          </div>
        </header>
        </div>
    </div>
    
  </div>
  <!--header-->





   

