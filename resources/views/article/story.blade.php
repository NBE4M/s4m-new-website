@extends('partials.app')
@section('content')
<!--main div start here-->
@if(isset($articles))
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
        <div class="col-md-7 col-lg-9 dashed-bdr-r mob-p-0 mob-bdr-0 pl-md-0 pl-lg-3">
            @foreach($articles as $article)
            <nav aria-label="breadcrumb">
                <small>
                    <ol class="breadcrumb bg-white text-warning p-0">
                    <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                    @php $a = explode('/',Request::path()); @endphp
                    @for($p=0;$p < 1 ; $p++)
                    <li class="breadcrumb-item"><a href="{{url('')}}/{{ $a[$p] }}-news.html">{{ ucwords($a[$p]) }}</a></li>
                    @endfor
                    
                    <li class="breadcrumb-item active">{{$article->title}}</li>
                    
                    </ol>
                </small>
            </nav>        
            <h3 class="story-page-hed mt-2 red-bdr-l">{{$article->title}}
            </h3>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6 pr-0">
                    <small class="date">
                        <span class="text-warning">Published At:</span> 
                        <em> {{date("l, d F, Y", strtotime($article->publish_date))}} </em>
                    </small>
                </div>
                <div class="col-lg-6 col-md-6 col-6 text-right pl-0"> 
                    <small class="date">
                        <span class="text-warning">Last Modified:</span> 
                        <em>{{date("l, d F, Y", strtotime($article->publish_date))}}</em>
                    </small>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mob-p-0">
                    <img src="images/top-story2.jpg" width="100%" class="img-thumbnail img-fluid mt-2 mob-bdr-0">
                </div>
            </div>
            <div class="col pl-0 text-danger">
                <small><strong>समाचार4मीडिया ब्यूरो ।।</strong></small>
            </div>
            <div class="row">
                <div class="col-md-12 share-icon">
                    <ul>
                    <li class="border-0">Share</li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>        
            <div class="row mt-2">
                <div class="col-md-12 responsible">
                    <p>‘द एसोसिएटेड जर्नल्स लिमिटेड’ (एजेएल) के साप्ताहिक अखबार ‘संडे नवजीवन’ ने बाजार में दस्तक दे दी है। ‘द एसोसिएटेड जर्नल्स लिमिटेड’ ग्रुप की सीनियर एडिटोरियल एडवाइजर और वरिष्ठ पत्रकार मृणाल पांडे ने अपने बयान में कहा कि यह अखबार व्यापक जनभावनाओं की आवाज बनेगा। बयान में उन्होंने यह भी कहा, ‘यह आधुनिक, लोकतांत्रिक, न्यायसंगत, निष्पक्ष, उदार और सामाजिक समरसता को बढ़ावा देने वाले विचारों का मंच बनेगा।’
                    </p>
                    <p>वहीं ‘एजेएल’ के चेयरमैन मोतीलाल वोरा ने कहा, ‘संडे नवजीवनअखबार की शुरुआत समूह की एक और उपलब्धि है। मुझे उम्मीद है कि जल्द ही यह अखबार अपनी एक अलग पहचान बना लेगा।’
                    </p>
                    
                    <p>अखबार के प्रधान संपादक जफर आगा ने कहा, ‘ऐसे समय में जब मुख्यधारा की मीडिया का ज्यादातर वर्ग केवल एक ही तरह के विचार को बढ़ावा देने में लगा हुआ है,  ‘संडे नवजीवन’ न केवल हर तरह के विचारों को एक मंच देगा बल्कि वे खबरें भी प्रकाशित करेगा, जिन्हें दूसरे नजरअंदाज कर रहे हैं।’ कंपनी की ओर से हिन्दी में www.navjivanindia.com वेबसाइट भी संचालित की जा रही है, जिसे पिछले साल 28 अगस्त को लॉन्च किया गया था।
                    </p>
                    <p>अखबार की कीमत 15 रुपए रखी गई है। इसके साथ ही कंपनी ने विशेष मेगा ऑफर के तहत पाठकों के लिए एक सबस्क्रिप्शन फॉर्म भी जारी किया है। इस ऑफर के तहत संडे नवजीवन साप्ताहिक के 145 अंकों के लिए पाठक को 2000 रुपए जमा करने होंगे।
                    </p>
                    <img src="images/inside.jpg">                    
                    <p>इस फॉर्म को भरकर और एकमुश्त सबस्क्रिप्शन राशि जमा करने के बाद पाठक इस अखबार को घर बैठे हासिल कर सकते हैं। कंपनी के अनुसार, यह ऑफर निर्धारित समय के लिए मान्य होगा।
                    </p>
                    <p>सबस्क्रिप्शन फॉर्म डाउनलोड करने और अन्य नियम-शर्तों की जानकारी के लिए नीचे दिए गए लिंक पर क्लिक करें -
                    </p>
                </div>
            </div>        
            <div class="row">
                <div class="col-md-12 tags-buttons">
                    <span class="tags"><i class="fas fa-tags"></i> TAGS</span>
                    <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Vishwaroopam-2</a> 
                    <span class="text-warning">|</span> 
                    <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Diwali</a> 
                    <span class="text-warning">|</span> 
                    <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Rajinikanth</a> 
                    <span class="text-warning">|</span> 
                    <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Kapil Sharma show</a>
                </div>
            </div>
        
        
        
        <div class="row mt-3">
        <div class="col-lg-9 col-md-6 col-12 share-buttons">
            
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
            
            <div class="col-lg-3 col-md-6 col-9 m-auto text-center"><img src="images/whatsapp.png" class="img-fluid whatsup"></div>

        </div>
        
        <hr class="dashed-bdr-t mb-1">
        <div class="row mt-3 m-0 author">
        <div class="col-lg-2 col-md-4 col-4 text-center border-dark bdr-solid-r pl-0 mob-bdr-0 mob-m-auto mob-p-0">         
<img src="images/author.jpg" class="img-fluid img-thumbnail rounded-circle bg-warning mob-mt-8 mob-mb-8">
</div>
            <div class="col-lg-10 pt-2" style="background: #f1f1f1;">
            <h5 class="mb-0"><strong>समाचार4मीडिया Staff</strong></h5>
                <p class="mb-0 mt-1"><small><i class="fas fa-envelope text-muted"></i> <a href="#">e4medit@exchange4media.com</a></small></p>
                <p class="mt-0 mb-1"><small><i class="fab fa-twitter text-muted"s></i> <a href="#">@e4mtweets</a></small></p>
              <p class="quotation mt-0 mb-0 text-center"> 
                                    <small>samachar4media staff</small></p>
            </div>
            
            
        </div>
    @endforeach
    
    <div class="row m-0 mob-mt-15"><span class="heading-bdr pt-5 ml-0"></span></div>
        

        <div class="row mt-3 mb-2">
          <div class="col-md-12 text-center"><img src="images/top-banner-728x90-2.jpg" class="img-fluid border"></div>
      </div>

        <!--second news--><div class="row">
        <div class="col-md-12">
            
            
            <h3 class="story-page-hed mt-4 red-bdr-l">रजत शर्मा की इस टीम से तीन लोगों ने दिया इस्तीफा...Miliar</h3>
        <div class="row">
        <div class="col-lg-6 col-md-6 col-6 pr-0"><small class="date"><span class="text-warning">Published At:</span> <em> Tuesday, 16 October, 2018</em></small></div>
            <div class="col-lg-6 col-md-6 col-6 text-right pl-0"> <small class="date"><span class="text-warning">Last Modified:</span> <em>Tuesday, 16 October, 2018</em></small></div>
        </div>

        <div class="row"><div class="col-12 mob-p-0"><img src="images/top-story4.jpg" width="100%" class="img-thumbnail img-fluid mt-2 mob-bdr-0"></div></div>
        <div class="col pl-0 text-danger"><small><strong>समाचार4मीडिया ब्यूरो ।।</strong></small></div>
        
        <div class="row">
        <div class="col-md-12 share-icon">
            <ul>
            <li class="border-0">Share</li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
            </ul>
            </div>
        </div>
            
            
            <div class="row mt-2">
        <div class="col-md-12 responsible">
        <p>‘द एसोसिएटेड जर्नल्स लिमिटेड’ (एजेएल) के साप्ताहिक अखबार ‘संडे नवजीवन’ ने बाजार में दस्तक दे दी है। ‘द एसोसिएटेड जर्नल्स लिमिटेड’ ग्रुप की सीनियर एडिटोरियल एडवाइजर और वरिष्ठ पत्रकार मृणाल पांडे ने अपने बयान में कहा कि यह अखबार व्यापक जनभावनाओं की आवाज बनेगा। बयान में उन्होंने यह भी कहा, ‘यह आधुनिक, लोकतांत्रिक, न्यायसंगत, निष्पक्ष, उदार और सामाजिक समरसता को बढ़ावा देने वाले विचारों का मंच बनेगा।’</p>
            <p>वहीं ‘एजेएल’ के चेयरमैन मोतीलाल वोरा ने कहा, ‘संडे नवजीवनअखबार की शुरुआत समूह की एक और उपलब्धि है। मुझे उम्मीद है कि जल्द ही यह अखबार अपनी एक अलग पहचान बना लेगा।’</p>
            <p>अखबार के प्रधान संपादक जफर आगा ने कहा, ‘ऐसे समय में जब मुख्यधारा की मीडिया का ज्यादातर वर्ग केवल एक ही तरह के विचार को बढ़ावा देने में लगा हुआ है, ‘संडे नवजीवन’ न केवल हर तरह के विचारों को एक मंच देगा बल्कि वे खबरें भी प्रकाशित करेगा, जिन्हें दूसरे नजरअंदाज कर रहे हैं।’ कंपनी की ओर से हिन्दी में www.navjivanindia.com वेबसाइट भी संचालित की जा रही है, जिसे पिछले साल 28 अगस्त को लॉन्च किया गया था।</p>
            <p>अखबार की कीमत 15 रुपए रखी गई है। इसके साथ ही कंपनी ने विशेष मेगा ऑफर के तहत पाठकों के लिए एक सबस्क्रिप्शन फॉर्म भी जारी किया है। इस ऑफर के तहत संडे नवजीवन साप्ताहिक के 145 अंकों के लिए पाठक को 2000 रुपए जमा करने होंगे।</p>
            <p>इस फॉर्म को भरकर और एकमुश्त सबस्क्रिप्शन राशि जमा करने के बाद पाठक इस अखबार को घर बैठे हासिल कर सकते हैं। कंपनी के अनुसार, यह ऑफर निर्धारित समय के लिए मान्य होगा।</p>
            <p>सबस्क्रिप्शन फॉर्म डाउनलोड करने और अन्य नियम-शर्तों की जानकारी के लिए नीचे दिए गए लिंक पर क्लिक करें -</p>
        </div>
        </div>
            
            <div class="row">
        <div class="col-md-12 tags-buttons"><span class="tags"><i class="fas fa-tags"></i> TAGS</span>
            <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Vishwaroopam-2</a> <span class="text-warning">|</span> <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Diwali</a> <span class="text-warning">|</span> <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Rajinikanth</a> <span class="text-warning">|</span> <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Kapil Sharma show</a>
            </div>
        </div>
            
            <div class="row mt-3">
        <div class="col-lg-9 col-md-6 col-12 share-buttons">
            
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
            
            <div class="col-lg-3 col-md-6 col-9 m-auto text-center"><img src="images/whatsapp.png" class="img-fluid whatsup"></div>

        </div>
            
            <hr class="dashed-bdr-t mb-1">
            <div class="row mt-3 m-0 author">
        <div class="col-lg-2 col-md-4 col-4 text-center border-dark bdr-solid-r pl-0 mob-bdr-0 mob-m-auto mob-p-0">         
<img src="images/author.jpg" class="img-fluid img-thumbnail rounded-circle bg-warning mob-mt-8 mob-mb-8">
</div>
            <div class="col-lg-10 pt-2" style="background: #f1f1f1;">
            <h5 class="mb-0"><strong>समाचार4मीडिया Staff</strong></h5>
                <p class="mb-0 mt-1"><small><i class="fas fa-envelope text-muted"></i> <a href="#">e4medit@exchange4media.com</a></small></p>
                <p class="mt-0 mb-1"><small><i class="fab fa-twitter text-muted"s></i> <a href="#">@e4mtweets</a></small></p>
              <p class="quotation mt-0 mb-0 text-center"> 
                                    <small>samachar4media staff</small></p>
            </div>
            
            
        </div>
    
            
            </div>

        </div><!--second news-->
        
        
                <div class="row m-0 mob-mt-15"><span class="heading-bdr pt-5 ml-0"></span></div>

    
        
        <!--second news--><div class="row">
        <div class="col-md-12">
            
            
            <h3 class="story-page-hed mt-4 red-bdr-l">रजत शर्मा की इस टीम से तीन लोगों ने दिया इस्तीफा...Miliar</h3>
        <div class="row">
        <div class="col-lg-6 col-md-6 col-6 pr-0"><small class="date"><span class="text-warning">Published At:</span> <em> Tuesday, 16 October, 2018</em></small></div>
            <div class="col-lg-6 col-md-6 col-6 text-right pl-0"> <small class="date"><span class="text-warning">Last Modified:</span> <em>Tuesday, 16 October, 2018</em></small></div>
        </div>

        <div class="row"><div class="col-12 mob-p-0"><img src="images/industry-story2.jpg" width="100%" class="img-thumbnail img-fluid mt-2 mob-bdr-0"></div></div>
        <div class="col pl-0 text-danger"><small><strong>समाचार4मीडिया ब्यूरो ।।</strong></small></div>
        
        <div class="row">
        <div class="col-md-12 share-icon">
            <ul>
            <li class="border-0">Share</li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
            </ul>
            </div>
        </div>
            
            
            <div class="row mt-2">
        <div class="col-md-12 responsible">
        <p>‘द एसोसिएटेड जर्नल्स लिमिटेड’ (एजेएल) के साप्ताहिक अखबार ‘संडे नवजीवन’ ने बाजार में दस्तक दे दी है। ‘द एसोसिएटेड जर्नल्स लिमिटेड’ ग्रुप की सीनियर एडिटोरियल एडवाइजर और वरिष्ठ पत्रकार मृणाल पांडे ने अपने बयान में कहा कि यह अखबार व्यापक जनभावनाओं की आवाज बनेगा। बयान में उन्होंने यह भी कहा, ‘यह आधुनिक, लोकतांत्रिक, न्यायसंगत, निष्पक्ष, उदार और सामाजिक समरसता को बढ़ावा देने वाले विचारों का मंच बनेगा।’</p>
            <p>वहीं ‘एजेएल’ के चेयरमैन मोतीलाल वोरा ने कहा, ‘संडे नवजीवनअखबार की शुरुआत समूह की एक और उपलब्धि है। मुझे उम्मीद है कि जल्द ही यह अखबार अपनी एक अलग पहचान बना लेगा।’</p>
            <p>अखबार के प्रधान संपादक जफर आगा ने कहा, ‘ऐसे समय में जब मुख्यधारा की मीडिया का ज्यादातर वर्ग केवल एक ही तरह के विचार को बढ़ावा देने में लगा हुआ है, ‘संडे नवजीवन’ न केवल हर तरह के विचारों को एक मंच देगा बल्कि वे खबरें भी प्रकाशित करेगा, जिन्हें दूसरे नजरअंदाज कर रहे हैं।’ कंपनी की ओर से हिन्दी में www.navjivanindia.com वेबसाइट भी संचालित की जा रही है, जिसे पिछले साल 28 अगस्त को लॉन्च किया गया था।</p>
            <p>अखबार की कीमत 15 रुपए रखी गई है। इसके साथ ही कंपनी ने विशेष मेगा ऑफर के तहत पाठकों के लिए एक सबस्क्रिप्शन फॉर्म भी जारी किया है। इस ऑफर के तहत संडे नवजीवन साप्ताहिक के 145 अंकों के लिए पाठक को 2000 रुपए जमा करने होंगे।</p>
            <p>इस फॉर्म को भरकर और एकमुश्त सबस्क्रिप्शन राशि जमा करने के बाद पाठक इस अखबार को घर बैठे हासिल कर सकते हैं। कंपनी के अनुसार, यह ऑफर निर्धारित समय के लिए मान्य होगा।</p>
            <p>सबस्क्रिप्शन फॉर्म डाउनलोड करने और अन्य नियम-शर्तों की जानकारी के लिए नीचे दिए गए लिंक पर क्लिक करें -</p>
        </div>
        </div>
            
            <div class="row">
        <div class="col-md-12 tags-buttons"><span class="tags"><i class="fas fa-tags"></i> TAGS</span>
            <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Vishwaroopam-2</a> <span class="text-warning">|</span> <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Diwali</a> <span class="text-warning">|</span> <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Rajinikanth</a> <span class="text-warning">|</span> <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Kapil Sharma show</a>
            </div>
        </div>
            
        <div class="row mt-3">
        <div class="col-lg-9 col-md-6 col-12 share-buttons">
            
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
            
            <div class="col-lg-3 col-md-6 col-9 m-auto text-center"><img src="images/whatsapp.png" class="img-fluid whatsup"></div>

        </div>
            
            <hr class="dashed-bdr-t mb-1">
            <div class="row mt-3 m-0 author">
        <div class="col-lg-2 col-md-4 col-4 text-center border-dark bdr-solid-r pl-0 mob-bdr-0 mob-m-auto mob-p-0">         
<img src="images/author.jpg" class="img-fluid img-thumbnail rounded-circle bg-warning mob-mt-8 mob-mb-8">
</div>
            <div class="col-lg-10 pt-2" style="background: #f1f1f1;">
            <h5 class="mb-0"><strong>समाचार4मीडिया Staff</strong></h5>
                <p class="mb-0 mt-1"><small><i class="fas fa-envelope text-muted"></i> <a href="#">e4medit@exchange4media.com</a></small></p>
                <p class="mt-0 mb-1"><small><i class="fab fa-twitter text-muted"s></i> <a href="#">@e4mtweets</a></small></p>
              <p class="quotation mt-0 mb-0 text-center"> 
                                    <small>samachar4media staff</small></p>
            </div>
            
            
        </div>
    
            
            </div>

        </div><!--second news-->
        
        
        
        <div class="row m-0 mob-mt-15"><span class="heading-bdr pt-5 ml-0"></span></div>
        
        
        
        
        <!--second news--><div class="row">
        <div class="col-md-12">
            
            
            <h3 class="story-page-hed mt-4 red-bdr-l">रजत शर्मा की इस टीम से तीन लोगों ने दिया इस्तीफा...Miliar</h3>
        <div class="row">
        <div class="col-lg-6 col-md-6 col-6 pr-0"><small class="date"><span class="text-warning">Published At:</span> <em> Tuesday, 16 October, 2018</em></small></div>
            <div class="col-lg-6 col-md-6 col-6 text-right pl-0"> <small class="date"><span class="text-warning">Last Modified:</span> <em>Tuesday, 16 October, 2018</em></small></div>
        </div>

        <div class="row"><div class="col-12 mob-p-0"><img src="images/lok-news.jpg" width="100%" class="img-thumbnail img-fluid mt-2 mob-bdr-0"></div></div>
        <div class="col pl-0 text-danger"><small><strong>समाचार4मीडिया ब्यूरो ।।</strong></small></div>
        
        <div class="row">
        <div class="col-md-12 share-icon">
            <ul>
            <li class="border-0">Share</li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
            </ul>
            </div>
        </div>
            
            
            <div class="row mt-2">
        <div class="col-md-12 responsible">
        <p>‘द एसोसिएटेड जर्नल्स लिमिटेड’ (एजेएल) के साप्ताहिक अखबार ‘संडे नवजीवन’ ने बाजार में दस्तक दे दी है। ‘द एसोसिएटेड जर्नल्स लिमिटेड’ ग्रुप की सीनियर एडिटोरियल एडवाइजर और वरिष्ठ पत्रकार मृणाल पांडे ने अपने बयान में कहा कि यह अखबार व्यापक जनभावनाओं की आवाज बनेगा। बयान में उन्होंने यह भी कहा, ‘यह आधुनिक, लोकतांत्रिक, न्यायसंगत, निष्पक्ष, उदार और सामाजिक समरसता को बढ़ावा देने वाले विचारों का मंच बनेगा।’</p>
            <p>वहीं ‘एजेएल’ के चेयरमैन मोतीलाल वोरा ने कहा, ‘संडे नवजीवनअखबार की शुरुआत समूह की एक और उपलब्धि है। मुझे उम्मीद है कि जल्द ही यह अखबार अपनी एक अलग पहचान बना लेगा।’</p>
            <p>अखबार के प्रधान संपादक जफर आगा ने कहा, ‘ऐसे समय में जब मुख्यधारा की मीडिया का ज्यादातर वर्ग केवल एक ही तरह के विचार को बढ़ावा देने में लगा हुआ है, ‘संडे नवजीवन’ न केवल हर तरह के विचारों को एक मंच देगा बल्कि वे खबरें भी प्रकाशित करेगा, जिन्हें दूसरे नजरअंदाज कर रहे हैं।’ कंपनी की ओर से हिन्दी में www.navjivanindia.com वेबसाइट भी संचालित की जा रही है, जिसे पिछले साल 28 अगस्त को लॉन्च किया गया था।</p>
            <p>अखबार की कीमत 15 रुपए रखी गई है। इसके साथ ही कंपनी ने विशेष मेगा ऑफर के तहत पाठकों के लिए एक सबस्क्रिप्शन फॉर्म भी जारी किया है। इस ऑफर के तहत संडे नवजीवन साप्ताहिक के 145 अंकों के लिए पाठक को 2000 रुपए जमा करने होंगे।</p>
            <p>इस फॉर्म को भरकर और एकमुश्त सबस्क्रिप्शन राशि जमा करने के बाद पाठक इस अखबार को घर बैठे हासिल कर सकते हैं। कंपनी के अनुसार, यह ऑफर निर्धारित समय के लिए मान्य होगा।</p>
            <p>सबस्क्रिप्शन फॉर्म डाउनलोड करने और अन्य नियम-शर्तों की जानकारी के लिए नीचे दिए गए लिंक पर क्लिक करें -</p>
        </div>
        </div>
            
            <div class="row">
        <div class="col-md-12 tags-buttons"><span class="tags"><i class="fas fa-tags"></i> TAGS</span>
            <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Vishwaroopam-2</a> <span class="text-warning">|</span> <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Diwali</a> <span class="text-warning">|</span> <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Rajinikanth</a> <span class="text-warning">|</span> <a class="btn-sm btn btn-dark m-0 pl-2 pr-2 pt-1 pb-1" href="#">Kapil Sharma show</a>
            </div>
        </div>
            
            <div class="row mt-3">
        <div class="col-lg-9 col-md-6 col-12 share-buttons">
            
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
            
            <div class="col-lg-3 col-md-6 col-9 m-auto text-center"><img src="images/whatsapp.png" class="img-fluid whatsup"></div>

        </div>
            
            <hr class="dashed-bdr-t mb-1">
            <div class="row mt-3 m-0 author">
        <div class="col-lg-2 col-md-4 col-4 text-center border-dark bdr-solid-r pl-0 mob-bdr-0 mob-m-auto mob-p-0">         
<img src="images/author.jpg" class="img-fluid img-thumbnail rounded-circle bg-warning mob-mt-8 mob-mb-8">
</div>
            <div class="col-lg-10 pt-2" style="background: #f1f1f1;">
            <h5 class="mb-0"><strong>समाचार4मीडिया Staff</strong></h5>
                <p class="mb-0 mt-1"><small><i class="fas fa-envelope text-muted"></i> <a href="#">e4medit@exchange4media.com</a></small></p>
                <p class="mt-0 mb-1"><small><i class="fab fa-twitter text-muted"s></i> <a href="#">@e4mtweets</a></small></p>
              <p class="quotation mt-0 mb-0 text-center"> 
                                    <small>samachar4media staff</small></p>
            </div>
            
            
        </div>
    
            
            </div>

        </div><!--second news-->
        
    
        <div class="row mt-4 mb-4">
          <div class="col-md-12 text-center"><img src="images/top-banner-728x90-2.jpg" class="img-fluid border"></div>
      </div>
    
        <!--third-section-news--><div class="row mt-3">
         <div class="col-md-12">
             <div class="row pl-0 mb-3 ml-0 title-holder">
        <h5 class="mb-0 bdr-solid-l border-warning heading-bdr"><strong><span class="bg-white pl-3 pr-3">सोशल मीडिया</span>
</strong><small><a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white"><strong>और पढ़ें</strong></a></small></h5></div>
             
        
              <div class="row">
                 
             <div class="col-md-12 col-lg-4 dashed-bdr-r mob-bdr-0 mob-p-0 mob-mb-15">
            <img src="images/telecop-story2.jpg" class="img-fluid rounded mob-radius-0">
                    <h6 class="mt-2 font-heading-1 mob-p-10"><strong>SC की फटकार के बाद वॉट्सऐप ने नियुक्त किया ये अधिकारी...</strong></h6>                 
        </div>
                <div class="col-md-6 col-6 col-lg-4 dashed-bdr-r">
            <img src="images/vichar-story4.jpg" class="img-fluid rounded">
                    <h6 class="mt-2 font-heading-1"><strong>पेट्रोल पर अपने पुराने ट्वीट को लेकर घिरे राहुल कंवल...</strong></h6>                   
        </div>
                   <div class="col-md-6 col-6 col-lg-4">
            <img src="images/lok-news.jpg" class="img-fluid rounded">
                    <h6 class="mt-2 font-heading-1"><strong>क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं नए चैनल की तैयारी....</strong></h6>                   
        </div>
                  
             </div>
        <hr class="dashed-bdr-t mob-bdr-0">
        
         <div class="row mt-3 mob-mt-30">
                 
             <div class="col-md-12 col-lg-4 dashed-bdr-r mob-bdr-0 mob-p-0 mob-mb-15">
            <img src="images/gallery-4.jpg" class="img-fluid rounded mob-radius-0">
                    <h6 class="mt-2 font-heading-1 mob-p-10"><strong>SC की फटकार के बाद वॉट्सऐप ने नियुक्त किया ये अधिकारी...</strong></h6>                 
        </div>
                <div class="col-md-6 col-6 col-lg-4 dashed-bdr-r">
            <img src="images/industry-story1.jpg" class="img-fluid rounded">
                    <h6 class="mt-2 font-heading-1"><strong>क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं नए चैनल की तैयारी....</strong></h6>                   
        </div>
                   <div class="col-md-6 col-6 col-lg-4">
            <img src="images/vichar-story3.jpg" class="img-fluid rounded">
                    <h6 class="mt-2 font-heading-1"><strong>क्या अजीत अंजुम, विनोद कापड़ी, हेमंत शर्मा कर रहे हैं नए चैनल की तैयारी....</strong></h6>                   
        </div>
                  
             </div>
             
             
             
        </div>
        </div><!--third-section-news-->
        
        
        
        
        </div><!--left-part-->
        
    
        
        <!--right part--><div class="col-md-5 col-lg-3 col-xs-6 pr-0 mob-p-0 mob-mt-30 rightSidebar">
        <div class="theiaStickySidebar">
        <!--top-news story page--><div class="row mob-m-0">
         <div class="row pl-0 mb-3 ml-0 title-holder">
        <h5 class="mb-0 bdr-solid-l border-warning heading-bdr"><strong><span class="bg-white pl-3 pr-3">टॉप न्यूज़</span>
</strong><small><a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white"><strong>और पढ़ें</strong></a></small></h5></div>
            
            <div class="row m-0 p-0">
                <div class="col-md-12 p-0">
                                    
                        <!--<i class="fa fa-arrow-up" id="nt-example1-prev"></i>-->
                        <ul id="nt-example2" class="top-news-story">
                            <li><div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/brand-1.jpg" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="#" class="align-self-end">
                    <span class="badge">Finansial</span> 
                  <h6 class="card-title mb-0">मिशन, प्रफेशन और कमीशन वाली मीडिया आज कहां खड़ी है...</h6>
                  </a>
                </div>
                </div></li>
                            
                            <li><div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/top-story3.jpg" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="#" class="align-self-end">
                    <span class="badge">Finansial</span> 
                  <h6 class="card-title mb-0">मिशन, प्रफेशन और कमीशन वाली मीडिया आज कहां खड़ी है...</h6>
                  </a>
                </div>
                </div></li>
                              <li><div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/top-story1.jpg" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="#" class="align-self-end">
                    <span class="badge">Finansial</span> 
                  <h6 class="card-title mb-0">मिशन, प्रफेशन और कमीशन वाली मीडिया आज कहां खड़ी है...</h6>
                  </a>
                </div>
                </div></li>
                              <li><div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/vichar-story4.jpg" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="#" class="align-self-end">
                    <span class="badge">Finansial</span> 
                  <h6 class="card-title mb-0">मिशन, प्रफेशन और कमीशन वाली मीडिया आज कहां खड़ी है...</h6>
                  </a>
                </div>
                </div></li>
   
                        </ul>
                    <!--<i class="fa fa-arrow-down" id="nt-example2-next"></i>-->
                  
                  </div>
            </div>
        </div><!--top-news story page-->
        
        
        <hr class="bdr-solid p-0 mb-2">

            
        <!--square banner add--><div class="row">
        <div class="col-md-12 p-0 text-center">
        <p class="m-0 add-text text-right"><small class="text-muted">Advertisment</small></p>
                <img src="images/ad-277x300-add.jpg" class="img-fluid">
        </div>
        </div><!--square banner add-->
        
        <hr class="bdr-solid p-0 mb-2">
            
            <!--whatsup--><div class="row m-0">
        <div class="col-md-12 p-0 text-center">
        <p class="m-0text-center mb-0"><img src="images/whatsapp.png" class="img-fluid whatsup"></p>
        </div>
        </div><!--whatsup-->
        
            <hr class="bdr-solid p-0 mb-2">
        
        <!--2nd section news--><div class="row mt-3 mob-m-0 mob-mt-15">
        <div class="col-md-12 p-0">
         <div class="row pl-0 mb-3 ml-0 title-holder">
        <h5 class="mb-0 bdr-solid-l border-warning heading-bdr"><strong><span class="bg-white pl-2 pr-1">सबसे लोकप्रिय खबरें
</span>
</strong><small><a href="#" title="और देखें" class="float-right mt-1 pl-2 text-danger mob-seemore bg-white"><strong>और पढ़ें</strong></a></small></h5></div>
            
            <div class="row m-0">
                
                <div class="row m-0">
                <div class="col-md-12 bg-dark p-1 rounded"> <a href="#"><img src="images/lok-news2.jpg" class="img-fluid"></a>
                    <h5 class="mt-2 font-heading-1 text-white lh pl-1"><a href="#">सुमित अवस्थी का बड़ा फैसला, जॉइन करेंगे ABP न्यूज...</a></h5>
        </div>
            </div>  
                
                <div class="col-md-12 p-0"><hr class="dashed-bdr-t"></div>
                
             <div class="row">
        <div class="col-6 col-sm-12 col-md-12 col-lg-5 pr-0"><a href="#"><img src="images/lok-news.jpg" class="img-fluid img-thumbnail"></a></div>
        <div class="col-6 col-sm-12 col-md-12 col-lg-7 pr-0 pl-2"><h6 class="mb-0"><a href="#"><strong>इस DU में पत्रकारिता के छात्रों का विरोध प्रदर्शन, पुलिस पर लगाया</strong></a></h6>      
        </div>      
        </div>
                
                <div class="col-md-12 p-0"><hr class="dashed-bdr-t"></div>
                
             <div class="row">
        <div class="col-6 col-sm-12 col-md-12 col-lg-5 pr-0"><a href="#"><img src="images/lok-news3.jpg" class="img-fluid img-thumbnail"></a></div>
        <div class="col-6 col-sm-12 col-md-12 col-lg-7 pr-0 pl-2"><h6 class="mb-0"><a href="#"><strong>इस DU में पत्रकारिता के छात्रों का विरोध प्रदर्शन, पुलिस पर लगाया</strong></a></h6>      
        </div>      
        </div>
            
            </div>

                
        </div>
        </div><!--2nd section news-->
        

        
        <hr class="bdr-solid p-0 mb-2">
        
        <!--square banner add--><div class="row">
        <div class="col-md-12 p-0 text-center">
        <p class="m-0 add-text text-right"><small class="text-muted">Advertisment</small></p>
                <img src="images/ad-277x300-add2.jpg" class="img-fluid">
        </div>
        </div><!--square banner add-->
        
        <hr class="bdr-solid">
        
        <!--right-third-news--><div class="row mob-m-0">
        <div class="col-md-12 bg-dark p-2 rounded">
            
             <div class="row pl-0 mb-3 ml-0 title-holder">
        <h5 class="mb-0 bdr-solid-l border-warning heading-bdr"><strong><span class="bg-dark text-white pl-2 pr-1">इंडस्ट्री ब्रीफिंग
</span>
</strong><small><a href="#" title="और देखें" class="float-right mt-1 pl-2 text-warning mob-seemore bg-dark"><strong>और पढ़ें</strong></a></small></h5></div>
            
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
    <div class="carousel-item active"> <a href="videos1.html"><img src="images/video-1.jpg" width="100%" height="100%"></a>
      <div class="carousel-caption">
        
        <p>न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए </p>
      </div>   
    </div>
      
      <div class="carousel-item"> <a href="videos1.html"><img src="images/video-2.jpg" width="100%" height="100%"></a>
      <div class="carousel-caption">
        
        <p>न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए </p>
      </div>   
    </div>
      
      <div class="carousel-item"> <a href="videos1.html"><img src="images/video-3.jpg" width="100%" height="100%"></a>
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
    <div class="carousel-item active"> <a href="photos1.html"><img src="images/gallery-5.jpg" width="100%" height="100%"></a>
      <div class="carousel-caption bg-dark">
        
        <p>न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए </p>
      </div>   
    </div>
      
      <div class="carousel-item"> <a href="photos1.html"><img src="images/gallery-5.jpg" width="100%" height="100%"></a>
      <div class="carousel-caption bg-dark">
        
        <p>न्यूजलेटर पाने के लिए यहां सब्सक्राइब कीजिए </p>
      </div>   
    </div>
      
      <div class="carousel-item"> <a href="photos1.html"><img src="images/gallery-5.jpg" width="100%" height="100%"></a>
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
@endif
@endsection           