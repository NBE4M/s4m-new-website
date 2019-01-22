<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
      <meta charset="ISO-8859-1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="content-language" content="hi,en-IN" />         
      <!-- CSRF Token Start-->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- CSRF Token End-->
      <!-- Meta details Start-->
      @if(isset($metatitle) && !empty($metatitle))
      <title>{{$metatitle}} - Samachar4media</title>
      @else
      <title>Media News, Advertising News, Media Industry Updates – Samachar4media</title>
      @endif
      @if(isset($metadescription) && !empty($metadescription))
      <meta name="description" content="{{$metadescription}}" />
      @else
      <meta name="description" content="Samachar4media has best and latest media news, advertising news, media industry updates for more information visit our website." />
      @endif 

      <meta property="fb:pages" content="349239931811206" />
      @if(isset($metatitle) && !empty($metatitle))
      <meta name="title" content="{{$metatitle}}"/>
      @else
      <meta name="title" content="Media News, Advertising News, Media Industry Updates – Samachar4media"/>
      @endif
      @if(isset($metadescription) && !empty($metadescription))
      <meta itemprop="description" name="description" content="{{$metadescription}}" />
      @else
      <meta itemprop="description" name="description" content="Samachar4media has best and latest media news, advertising news, media industry updates for more information visit our website." />
      @endif
      @if(isset($metatag) && !empty($metatag))
      <meta name="keywords" content="{{$metatag}}" />
      @else
      <meta name="keywords" content="media news, advertising news, media industry updates" />
      @endif
      @if(isset($metatag) && !empty($metatag))
      <meta name="news_keywords" content="{{$metatag}}" />
      @else
      <meta name="news_keywords" content="media news, advertising news, media industry updates" />
      @endif
      @if(isset($ogimage) && !empty($ogimage)) 
      <meta itemprop="thumbnailUrl" name="image_src" content="{{$ogimage}}"/>
      @else
      <meta itemprop="thumbnailUrl" content="http://www.samachar4media.com/images/logo.png"/>
      @endif
      @if(isset($metatitle) && !empty($metatitle))
      <meta property="og:title" content="{{$metatitle}} - Samachar4media"/>
      @else
      <meta property="og:title" content="Media News, Advertising News, Media Industry Updates – Samachar4media"/>
      @endif
      <meta property="og:type" content="article" />
      @if(isset($ogurl) && !empty($ogurl))
      <meta itemprop="url" property="og:url" content="{{$ogurl}}" />
      @else 
      <meta itemprop="url" property="og:url" content="{{url('')}}"/>
      @endif
      <meta property="og:site_name" content="{{url('')}}"/>
      @if(isset($metadescription) && !empty($metadescription))    
      <meta property="og:description" content="{{$metadescription}}"/>
      @else
      <meta property="og:description" content="Samachar4media has best and latest media news, advertising news, media industry updates for more information visit our website."/>
      @endif
      @if(isset($ogimage) && !empty($ogimage)) 
      <meta property="og:image"  itemprop="image"  content="{{$ogimage}}"/>
      @else
      <meta property="og:image" content="http://www.samachar4media.com/images/logo.png"/>
      @endif
      <meta property="og:image:width" content="870"/>
      <meta property="og:image:height" content="470"/>
      <!-- Twitter Metatags Start -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@samachar4media">
      <meta name="twitter:creator" content="@samachar4media">
      @if(isset($metatitle) && !empty($metatitle))
      <meta name="twitter:title" content="{{$metatitle}}">
      @else
      <meta name="twitter:title" content="{{ config('app.name', 'Media News, Advertising News, Media Industry Updates – Samachar4media') }}"/>
      @endif
      @if(isset($metadescription) && !empty($metadescription))
      <meta name="twitter:description" content="{{$metadescription}}">
      @else
      <meta name="twitter:description" content="Samachar4media has best and latest media news, advertising news, media industry updates for more information visit our website." />
      @endif
      @if(isset($ogimage) && !empty($ogimage)) 
      <meta name="twitter:image:src" content="{{$ogimage}}">
      @else
      <meta name="twitter:image:src" content="http://www.samachar4media.com/images/logo.png"/>
      @endif
      <!-- Twitter Metatags Ends -->
      <meta property="fb:app_id" content="287404455019045"/>
      <meta name="article:publisher" content="https://www.facebook.com/Samachar4media/"/>
      @if(isset($canonical) && !empty($canonical))
      <link rel="amphtml" href="{{$canonical}}"/>
      <link rel="canonical" href="{{ Request::url()}}" />
      @else
      <link rel="canonical" href="{{ Request::url()}}"/>
      @endif
     
      <!-- Global site tag (gtag.js) - Google Analytics -->
     <!--  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37285268-1"></script>
      <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());
       gtag('config', 'UA-37285268-1');
      </script> -->
      <meta property="og:locale" content="en_US"/>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700" rel="stylesheet">
      <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=PT+Serif|PT+Serif+Caption" rel="stylesheet"> -->
      <link rel="stylesheet" href="{{asset('css/bootstrap-4.0.0.css')}}">
      <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/all.css')}}">
      <link rel="stylesheet" href="{{asset('css/custom.css')}}">
      <link rel="stylesheet" href="{{asset('css/menu.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.css">
      <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
        <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
      <!-- <script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>  -->
      <!-- <script async type='text/javascript' src="{{asset('js/sticky-sidebar.js')}}"></script> -->

<!--       <script type="text/javascript">
      $(function() {
      var x = readCookie('e4m')
      x = "";   //Uncomment this for cookies less site capture
      if(!x)
      {
      createCookie('e4m','overlay',null)
      $('#myModal').modal('show');
      $('#myModal').modal({
      backdrop: 'static',
      keyboard: false
      });
      setTimeout(function(){
      $('#myModal').modal('hide')
      }, 15000);
      $('#myModal').on('hidden.bs.modal', function () {
      $('#myModalNew').modal('show');
      });
      setTimeout(function() {
      $('#myModalNew').modal('hide')},20000);
      }
      });
      function createCookie(name,value,days) 
      {
      if (days) 
      {
      var date = new Date();
      date.setTime(date.getTime()+(days*24*60*60*1000));
      var expires = "; expires="+date.toGMTString();
      }
      else var expires = "";
      document.cookie = name+"="+ value + expires +"; path=/";
      }
      function readCookie(name) 
      {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for(var i=0;i < ca.length;i++) 
      {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      }
      return null;
      }
      function eraseCookie(name) 
      {
      createCookie(name,"",-1);
      }
      </script> -->
      <!-- <script>
      window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
      </script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-12770313-1');
            $(function () {
         var currentHash = window.location.pathname;
          $(document).scroll(function () {
              $('.views').each(function () {
                   var hash = $(this).attr('href');
                  var top = window.pageYOffset;
                  var distance = top - $(this).offset().top;
                  if (distance < 120 && distance > -120 && currentHash != hash) {
                     var url = window.location.pathname;
                  gtag('config', 'UA-12770313-1', {
                  'page_path': url
                  });
                  }
              });
          });
      });
      </script> -->

      @if(\Request::is('/'))
      <script type="application/ld+json">
      {"@context": "https://schema.org","@type": "Organization","name": "Samachar4media",   "url": "{{url('')}}","logo": "http://www.samachar4media.com/images/logo.png",  "sameAs": [     "https://www.facebook.com/Samachar4media/","https://twitter.com/samachar4media"]}
    </script>
    <script type="application/ld+json">
      {"@context": "https://schema.org","@type": "WebSite",    "url": "{{url('')}}","potentialAction": {"@type": "SearchAction","target": "https://www.samachar4media.com/searcharticle?search_text={search_term_string}","query-input": "required name=search_term_string"}}
    </script>
    @endif

      <link rel="shortcut icon" type="image/png" href="http://cms.samachar4media.com/favicon.ico"/>
      <link href="https://www.samachar4media.com/manifest.json" rel="manifest">
</head>
<body>
  @include('partials.header')
    @yield('content')
  @include('partials.footer')
</body>
</html>
