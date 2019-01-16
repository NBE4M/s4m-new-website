<%@ Page Language="C#" AutoEventWireup="true" CodeFile="index.aspx.cs" Inherits="indexnew" %>
<%@ Register Src="header.ascx" TagName="header" TagPrefix="ucheader" %>
<%@ Register Src="Footer.ascx" TagName="Footer" TagPrefix="ucFooter" %>
<%@ Register Src="videophotowrapper.ascx" TagName="videophotowrapper" TagPrefix="uc19" %>
<%@ Register Src="ImageGallery.ascx" TagName="ImageGallery" TagPrefix="uc1" %>
<%@ Register Src="videosectionnew21.ascx" TagName="videosection" TagPrefix="uc2" %>
<%@ Register Src="adzone2.ascx" TagName="adzone2" TagPrefix="uc3" %>
<%@ Register Src="adzone1.ascx" TagName="adzone1" TagPrefix="uc4" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <title>Indian Advertising Media & Marketing News &ndash; Exchange4media</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta name="description" content="At Exchange4media, read the latest news and updates on advertising agencies, marketing, print, radio, digital, television, media, events and happenings in India." />
  <meta name="keywords" content="advertising news, marketing, ooh, television, digital, print, radio, media" />
  <link rel="canonical" href="http://www.exchange4media.com/home.html"/>
  <meta name="google-site-verification" content="aaVUJLjjvOmM7CIJYgqlmhlMPcxNmjAidCf0V1RE2to" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="noodp" />
  <meta name="yahooseeker" content="index, follow" />
  <meta name="msnbot" content="index, follow" />
  <meta name="allow-search" content="yes" />
  <meta name="revisit-after" content="daily" />
  <meta name="author" content="www.exchange4media.com" />
  <meta name="msvalidate.01" content="AB567BF119BFA6B66B48F95969BEAF9D" />
  <meta name="twitter:title" content="Indian Advertising Media & Marketing News – Exchange4media"/>
  <meta name="twitter:description" content="At Exchange4media, read the latest news and updates on advertising agencies, marketing, print, radio, digital, television, media, events and happenings in India."/>
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:image" content="http://www.exchange4media.com/images/e4m-logo.png"/>
  <meta name="twitter:domain" content="http://www.exchange4media.com"/>
  <meta property="og:title" content="Indian Advertising Media & Marketing News – Exchange4media"/>
  <meta property="og:description" content="At Exchange4media, read the latest news and updates on advertising agencies, marketing, print, radio, digital, television, media, events and happenings in India."/>
  <meta property="og:image" content="http://www.exchange4media.com/images/e4m-logo.png"/>
  <meta property="og:image:secure_url" content="http://www.exchange4media.com/images/e4m-logo.png"/>
  <meta property="og:image:type" content="image/jpeg"/>
  <meta property="og:image:width" content="263"/>
  <meta property="og:image:height" content="81"/>
  <meta property="og:url" content="http://www.exchange4media.com/"/>
  <meta property="og:locale" content="en-IN"/>
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/overlay.css" />
  <!--Sitecapture -->
<!-- <link rel="stylesheet" type="text/css" href="css/FooterBand.css" /> -->
  <!--Footerband -->
  <!-- Home Page layout -->
  <link rel="stylesheet" type="text/css" href="css/main100714.css" />
  <!-- main -->
  <link rel="stylesheet" type="text/css" href="css/menu.css" />
  <!-- menu -->
  <link rel="stylesheet" type="text/css" href="css/top-content-slider.css" />
  <!-- top 1,2,3 news -->
  <link rel="stylesheet" type="text/css" href="css/topband12sept14.css" />
  <link rel="stylesheet" type="text/css" href="css/slide26Feb2015.css" media="screen" />
  <!-- RHS video tab -->
  <link rel="stylesheet" type="text/css" href="css/accordion.css" />
  <!-- mostviewed -->
  <link rel="stylesheet" type="text/css" href="css/coin-slider-styles.css" />
  <!-- impact image gallery -->
  <link rel="stylesheet" type="text/css" href="css/liteaccordion.css" />
  <!-- Industry breifing & Top pick -->
  <link rel="stylesheet" type="text/css" href="css/tabs.css" />
  <!-- Industry breifing & Top pick -->
  <link rel="stylesheet" type="text/css" href="css/carousel.css" />
  <!-- Creative picks -->
  <link rel="stylesheet" type="text/css" href="css/campaigns-slider.css" />
  <!-- Creative picks -->
  <link rel="stylesheet" type="text/css" href="css/menu.css" />
  <link rel="stylesheet" type="text/css" href="http://www.exchange4media.com/CSS/VerticalBanner.css" />
  <!--Vertical banner-->

  <script type="text/javascript">
var v1,v2,v3,v4,v5,randomf;

v1='<object width="300" height="184"><param name="movie" value="image2010/1ESPN19May2015.swf"><embed src="image2010/1ESPN19May2015.swf" width="300" height="184"></embed></object>';
v2='<object width="300" height="184"><param name="movie" value="image2010/2espn11May2015.swf"><embed src="image2010/2espn11May2015.swf" width="300" height="184"></embed></object>';
v3='<object width="300" height="184"><param name="movie" value="image2010/3espn11May2015.swf"><embed src="image2010/3espn11May2015.swf" width="300" height="184"></embed></object>';
v4='<object width="300" height="184"><param name="movie" value="image2010/4ESPN19May2015.swf"><embed src="image2010/4ESPN19May2015.swf" width="300" height="184"></embed></object>';
v5='<object width="300" height="184"><param name="movie" value="image2010/5espn11May2015.swf"><embed src="image2010/5espn11May2015.swf" width="300" height="184"></embed></object>';

randomf=[v1,v2,v3,v4,v5];
window.onload=function() 
{
   rangProc=Math.floor(Math.random()*randomf.length);
   document.getElementById('RefreshBanner').innerHTML=randomf[rangProc];
 }
</script>
  <script type="text/javascript" src="scripts/jquery-1.6.1.min.js"></script>
  <!-- For Most emailed & Viewed Start-->
  <script type="text/javascript" src="Scripts/ddaccordion.js"></script>
  <script type="text/javascript">

        ddaccordion.init({
            headerclass: "submenuheader", //Shared CSS class name of headers group
            contentclass: "submenu", //Shared CSS class name of contents group
            revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
            mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
            collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
            defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
            onemustopen: true, //Specify whether at least one header should be open always (so never all headers closed)
            animatedefault: false, //Should contents open by default be animated into view?
            persiststate: true, //persist state of opened contents within browser session?
            toggleclass: ["glossymenuitem", "glossymenuitem-active"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
            togglehtml: ["suffix", "<img src='http://www.exchange4media.com/images/plus.gif' class='statusicon' alt='plus' />", "<img src='http://www.exchange4media.com/images/minus.gif' class='statusicon' alt='minus' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
            animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
            oninit: function(headers, expandedindices) { //custom code to run when headers have initalized
                //do nothing
            },
            onopenclose: function(header, index, state, isuseractivated) { //custom code to run whenever a header is opened or closed
                //do nothing
            }
        })
    </script>
  <!-- For Most emailed & Viewed ends-->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="Scripts/swfobject_modified.js"></script><!-- For Flash objects-->
  <script type="text/javascript" src="Scripts/liteaccordion.jquery.js"></script><!-- Industry breifing & Top pick -->
  <script type="text/javascript" src="Scripts/jquery.carouFredSel-5.6.4.js"></script><!-- Creative picks -->

 <script type="text/javascript" src="scripts/overlaycookie.js"></script><!--Sitecapture -->

  <!--<script type="text/javascript" src="scripts/overlay2sitecapturecookie.js"></script>-->
  <!--Double Sitecapture -->
  <!--<link rel="stylesheet" type="text/css" href="http://www.exchange4media.com/css/bubble.css" />-->
  <!--<script type="text/javascript" src="http://www.exchange4media.com/scripts/bubble.js"></script>-->

  <script type="text/javascript" src="scripts/newsslider.js"></script>
  <script type="text/javascript" src="scripts/slider.js"></script><!--Header Footer -->

  <script type="text/javascript" src="scripts/coin-slider.js"></script><!-- impact image gallery -->
  <script type="text/javascript" src="js/jquery.hashchange.js" ></script><!-- RHS video tab -->
  <script type="text/javascript" src="js/jquery.easytabs.js"></script><!-- RHS video tab -->
  <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container').easytabs();
    });
  </script><!-- RHS video tab -->
  
<!-- start two site captur, 2nd site capture after load home page-->
 <!-- <script type="text/javascript">


    // close the div in 5 secs
   // window.setTimeout("closeDiv();", 5000);

    function CloseDiv() {
        document.getElementById("overlay2").style.display = "none";
    }
	function OpenDiv() {
        document.getElementById("overlay2").style.display = "block";
    }


</script>
<script>
$(function() {
				{
                    $('#overlay').fadeIn('fast',function(){
					CloseDiv();
                        $('#box').animate({'top':'0px'},500);
						//$('#box').css("top", (($(window).height() - this.outerHeight()) / 2) + $(window).scrollTop() + "px");
						$('#box').css("left", (($(window).width() - $('#box').outerWidth()) / 2) + $(window).scrollLeft() + "px");
						     //return this; 
						setTimeout("timedMsg()",10000)					
                    })
				}

                $('#boxclose').click(function(){ 
				   timedMsg();
                });
				
				$('#mission-logoR').css("right", (($(window).width() - $('#mainbody').outerWidth()) / 2) - $('#mission-logoR').outerWidth() + "px");
				$('#mission-logoL').css("left", (($(window).width() - $('#mainbody').outerWidth()) / 2) - $('#mission-logoL').outerWidth() + "px");
				
 				$('#mission-logo').css("right", (($(window).width() - $('#wrapper').outerWidth()) / 2) - $('#mission-logo').outerWidth() + "px");
				$('#mission-logo1').css("left", (($(window).width() - $('#wrapper').outerWidth()) / 2) - $('#mission-logo1').outerWidth() + "px");
 				
            });
			function timedMsg()
			
                {
                        $('#box').animate({'top':'-1000px'},500,function(){
                        $('#overlay').fadeOut('fast');
											
                    });					

                }
				</script>
<style>
#overlay2
{
	position:fixed;
	top:105px;
	bottom:0px;
	left:0px;
	right:0px;
	z-index:1001;
	/*background-color: rgba(255, 255, 255, 0.7);
	background-image: url(http://www.exchange4media.com/images/overlay.png);*/
	background-repeat: repeat;
	background-position: left top;
}

#box2
{
	padding:5px;
	top:-770px;	
	background-color:#fff;
	z-index:1002;
	height: 550px;
	width: 770px;
	position: fixed;
	margin-right: auto;
	margin-left: auto;
	box-shadow: 0 4px 16px rgba(0,0,0,0.2);  
  	border: solid 1px #ccc;
  	border: solid 1px rgba(0,0,0,0.3);
  	outline: 0;
}
#boxclose2
{
	float:right;
	width:64px;
	/*width:25px;*/
	height:26px;
	cursor:pointer;
	margin-top: -32px;
	margin-right: -9px;
	background-color: transparent;
	background-image: url(http://www.exchange4media.com/images/close.png);
	/*background-image: url(http://www.exchange4media.com/images/cancel.png);*/
	background-repeat: repeat;
	background-position: left top;
}
</style>
<script language="Javascript">
  function myfm() 
  {

{
                    $('#overlay2').fadeIn('fast',function(){
                         $('#box2').animate({'top':'30px'},500);
						 $('#box2').animate({'bottom':'75px'},500);
						//$('#box').css("top", (($(window).height() - this.outerHeight()) / 2) + $(window).scrollTop() + "px");
						$('#box2').css("left", (($(window).width() - $('#box2').outerWidth()) / 2) + $(window).scrollLeft() + "px");						
					
						
						     //return this; 
							 setTimeout("sitecaptureclose1()",15000)
                    })
				}

                $('#boxclose2').click(function(){
                    $('#box2').animate({'top':'-1000px'},500,function(){
                        $('#overlay2').fadeOut('fast');
						                    });
											$('#mission-logoR').css("right", (($(window).width() - $('#mainbody').outerWidth()) / 2) - $('#mission-logoR').outerWidth() + "px");
				$('#mission-logoL').css("left", (($(window).width() - $('#mainbody').outerWidth()) / 2) - $('#mission-logoL').outerWidth() + "px");
				
 				$('#mission-logo').css("right", (($(window).width() - $('#wrapper').outerWidth()) / 2) - $('#mission-logo').outerWidth() + "px");
				$('#mission-logo1').css("left", (($(window).width() - $('#wrapper').outerWidth()) / 2) - $('#mission-logo1').outerWidth() + "px");
                });

            };
			
			 function sitecaptureclose1()
{

 //$('#box').animate({'top':'-770px'} );

                       // $('#overlay').fadeOut('fast');
					   $('#box2').animate({'top':'-1000px'},500,function(){
                        $('#overlay2').fadeOut('fast');				
                    });

           
} 
 
 
 </script>
 <script language="javascript">
  
  
  


window.onload = function() {
setTimeout(function() {
OpenDiv();
    myfm();
}, 15000);
}
</script>-->
<!-- end two site captur, 2nd site capture after load home page-->
  </head>

  <body id="body">
  <form name="form1" id="form1" runat="server">
    <asp:ScriptManager ID="ScriptManager1" runat="server" />
	<!-- start two site captur, 2nd site capture after load home page-->
     <%--<div class="overlay" id="overlay" style="background:#FFFFFF;display:none;">
      <div class="box" id="box"> <a class="boxclose" id="boxclose"></a>
        <h1>Advertisement [CLICK THE BUTTON ON THE RIGHT TO CONTINUE]</h1>
		<a href="https://www.youtube.com/watch?v=yPI9SJVo0w4" target="_blank"><img src="http://www.exchange4media.com/image2010/Zoom6july2015.jpg" alt="ZOOM" width="770" height="550" border="0"></a>
      <!-- <IMG SRC="http://www.exchange4media.com/image2010/INK25june2015.jpg" ALT="" WIDTH=770 HEIGHT=550 border="0" usemap="#Map"> 
<map name="Map">
  <area shape="rect" coords="207,416,612,474" href="http://www.exchange4media.com/ink2015/#instructions" target="_blank">
  <area shape="rect" coords="9,13,761,411" href="http://www.exchange4media.com/ink2015/" target="_blank">
  <area shape="rect" coords="14,416,204,472" href="http://www.exchange4media.com/ink2015/" target="_blank">
  <area shape="rect" coords="619,417,760,469" href="http://www.exchange4media.com/ink2015/" target="_blank">
  <area shape="rect" coords="16,482,761,540" href="http://www.exchange4media.com/ink2015/" target="_blank">
</map> -->
      </div>
    </div>
	
	<div class="overlay2" id="overlay2"  style="z-index:100000;">

  <div class="box2" id="box2"><a class="boxclose2" id="boxclose2"></a>
    <table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td><table width="770" border="0" cellspacing="0" cellpadding="0">
            </table></td>
        </tr>
        <tr>
          <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="770" height="550" id="Sitecapture1" title="">
              <param name="movie" value="http://www.exchange4media.com/image2010/myfm7july151.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="6.0.65.0" />
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. --> 
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="http://www.exchange4media.com/image2010/myfm7july151.swf" width="770" height="550">
                <!--<![endif]-->
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="6.0.65.0" />
                <param name="expressinstall" value="../Scripts/expressInstall.swf" />
                <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                <div>
                  <h4> Content on this page requires a newer version of Adobe Flash Player.</h4>
                  <p> <a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"
                                        alt="Get Adobe Flash player" width="112" height="33" /></a></p>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>
  </div>
  
</div> --%>

<!-- two Site capture end --> 
    
<!-- Site capture Starts For cookie based: style="display:none;"-->
  <%-- <div class="overlay" id="overlay" style="background:#FFFFFF;display:none; z-index: 11000;">
      <div class="box" id="box"> <a class="boxclose" id="boxclose"></a>
        <h1>Advertisement [CLICK THE BUTTON ON THE RIGHT TO CONTINUE]</h1>
		<a href="http://www.exchange4media.com/e4m/click2013.asp?click=MB13JULY15&from=SC" target="_blank"><img src="http://www.exchange4media.com/image2010/MB11072015.jpg" alt="Mathrubhoomi" width="770" height="550" border="0"></a>
		<!-- <a href="http://www.exchange4media.com/e4m/click2013.asp?click=EPIC8JULY15&from=SC" target="_blank"><img src="http://www.exchange4media.com/image2010/EPICJaved.jpg" alt="EPIC CHANNEL" width="770" height="550" border="0"></a> -->
    <!-- <IMG SRC="http://www.exchange4media.com/image2010/INK25june2015.jpg" ALT="" WIDTH=770 HEIGHT=550 border="0" usemap="#Map"> 
<map name="Map">
  <area shape="rect" coords="207,416,612,474" href="http://www.exchange4media.com/ink2015/#instructions" target="_blank">
  <area shape="rect" coords="9,13,761,411" href="http://www.exchange4media.com/ink2015/" target="_blank">
  <area shape="rect" coords="14,416,204,472" href="http://www.exchange4media.com/ink2015/" target="_blank">
  <area shape="rect" coords="619,417,760,469" href="http://www.exchange4media.com/ink2015/" target="_blank">
  <area shape="rect" coords="16,482,761,540" href="http://www.exchange4media.com/ink2015/" target="_blank">
</map> -->
      </div>
    </div>--%>
<!-- Site capture end --> 
    

    
    <!-- Site capture end --> 
    <!--double site capture start-->
    <%--<div class="overlay" id="overlay" style="background:#FFFFFF;display:none;">  
 	<div class="box" id="box"><IMG SRC="http://www.exchange4media.com/RetrieveImage.asp?ID=3560" width="1" height="1" border="0"> 
      <a class="boxclose" id="boxclose"></a> 
      <h1>Advertisement [CLICK THE BUTTON ON THE RIGHT TO CONTINUE]</h1>            
         <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="770" height="550" id="Sitecapture" title="" style="visibility: inherit;">
                    <param name="movie" value="http://www.exchange4media.com/image2010/cc13april15.swf">
                    <param name="quality" value="high">
                    <param name="wmode" value="opaque">
                    <param name="swfversion" value="6.0.65.0">
                    <param name="expressinstall" value="Scripts/expressInstall.swf">                    
                    <object type="application/x-shockwave-flash" data="http://www.exchange4media.com/image2010/cc13april15.swf" width="770" height="550">                       
                        <param name="quality" value="high">
                        <param name="wmode" value="opaque">
                        <param name="swfversion" value="6.0.65.0">
                        <param name="expressinstall" value="Scripts/expressInstall.swf">                       
                        <div>
                            <h4>
                                Content on this page requires a newer version of Adobe Flash Player.</h4>
                            <p>
                                <a href="http://www.adobe.com/go/getflashplayer">
                                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33"></a></p>
                        </div>                       
                    </object>         
                </object>
	</div>

	<div class="box1" id="box1">
      <a class="boxclose1" id="boxclose1"></a> 
      <h1>Advertisement [CLICK THE BUTTON ON THE RIGHT TO CONTINUE]</h1>
	  
	  
	        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="770" height="550" id="Sitecapture" title="" style="visibility: inherit;">
                    <param name="movie" value="http://www.exchange4media.com/image2010/colors10april15.swf">
                    <param name="quality" value="high">
                    <param name="wmode" value="opaque">
                    <param name="swfversion" value="6.0.65.0">
                    <param name="expressinstall" value="Scripts/expressInstall.swf">                    
                    <object type="application/x-shockwave-flash" data="http://www.exchange4media.com/image2010/colors10april15.swf" width="770" height="550">                       
                        <param name="quality" value="high">
                        <param name="wmode" value="opaque">
                        <param name="swfversion" value="6.0.65.0">
                        <param name="expressinstall" value="Scripts/expressInstall.swf">                       
                        <div>
                            <h4>
                                Content on this page requires a newer version of Adobe Flash Player.</h4>
                            <p>
                                <a href="http://www.adobe.com/go/getflashplayer">
                                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33"></a></p>
                        </div>                       
                    </object>         
                </object>

    
	</div>
</div>--%>
    <!--double site capture end--> 
    
    <!--Top band Section starts -->
    <%-- Top band Starts --%>
    <%--<div id="toppanel" style="position: fixed;"> 
      <!--<div id="toppanel" style="position: fixed;z-index: 8000;">-->
      
    <div id="panel"> 
      <div class="content clearfix"><a href="http://www.telegraphindia.com/" target="_blank"><img src="http://www.exchange4media.com/image2010/Tele04June2015.gif" alt="Telegraph" width="990" height="60" border="0" /></a></div>
    </div>
      
    <div class="tabTop"> 
      <ul class="login">
        <li id="toggle"><a id="open" class="open" href="#">Open</a> <a id="close" style="display: none;" class="close" href="#">Close</a> 
        </li>
      </ul>
    </div>
    </div>--%>
    <%-- Top band Ends--%>
    <!-- Top band without close button Starts-->
    <%--<div id="toppanel">
   	 	<div id="panel">
     		<div class="content clearfix"><img src="http://www.exchange4media.com/image2010/TG3June14.jpg" alt="Telegraph" title="Telegraph" width="990" height="60" border="0"></div>
    	</div>
  	 </div>--%>
    <!-- Top band without close button Ends-->
    <%-- Expandable Top band Starts --%>
    <%-- <div id="toppanel">
        <div id="panel">
            <div class="content clearfix">
                        <img src="http://www.exchange4media.com/image2010/ABP181013_sml.gif" alt="ABP"
                            width="960" height="60" border="0" onmouseover="javascript: showbig();" />
            </div>
        </div>
         <div class="tab">
                <ul class="login">
                    <li id="toggle"><a id="open" class="open" href="#">Open</a> <a id="close" style="display: none;"
                        class="close" href="#">Close</a> </li>
                </ul>
            </div>
    	</div>    
    	<div id="apDiv2"> <img src="http://www.exchange4media.com/image2010/ABP181013_big.gif" alt="ABP"
                width="960" height="110" border="0" align="middle" onmouseout="javascript: hidebig();" /></div>   --%>
    <%-- Expandable Top band Ends --%>
    <!-- top band Section ends --> 
    
    <!--Bottomband start-->
	<%-- <div id="footerSlideContainer" style="z-index: 8000;">
      <div id="footerSlideButton"></div>
      <div id="footerSlideContent">
        <div id="footerSlideText"> <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="banner4" width="990" height="80" id="banner6" title="">
        <param name="movie" value="http://www.exchange4media.com/image2010/Vanitha10715.swf">
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="swfversion" value="6.0.65.0">
        <param name="expressinstall" value="Scripts/expressInstall.swf">
        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. --> 
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="http://www.exchange4media.com/image2010/Vanitha10715.swf" width="990" height="70">
          <!--<![endif]-->
          <param name="quality" value="high">
          <param name="wmode" value="opaque">
          <param name="swfversion" value="6.0.65.0">
          <param name="expressinstall" value="Scripts/expressInstall.swf">
          <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
          <div>
            <h4> Content on this page requires a newer version of Adobe 
              Flash Player.</h4>
            <p> <a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33"></a></p>
          </div>
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
       </div>
      </div>
    </div>--%>
    <%--<div id="footerSlideContainer" style="z-index: 11000;">
      <div id="footerSlideButton"></div>
      <div id="footerSlideContent">
        <div id="footerSlideText"> 
		<a href="http://www.andtv.com/" target="_blank"><img src="http://www.exchange4media.com/image2010/tv26March15.gif" width="990" height="70" border="0" alt="&TV"></a>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="banner4" width="990" height="70" id="banner60" title="">
        <param name="movie" value="http://www.exchange4media.com/image2010/MM28Apr2015.swf">
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="swfversion" value="6.0.65.0">
        <param name="expressinstall" value="Scripts/expressInstall.swf">
        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. --> 
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="http://www.exchange4media.com/image2010/MM28Apr2015.swf" width="990" height="70">
          <!--<![endif]-->
          <param name="quality" value="high">
          <param name="wmode" value="opaque">
          <param name="swfversion" value="6.0.65.0">
          <param name="expressinstall" value="Scripts/expressInstall.swf">
          <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
          <div>
            <h4> Content on this page requires a newer version of Adobe 
              Flash Player.</h4>
            <p> <a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33"></a></p>
          </div>
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>

         </div>
      </div>
    </div>--%>
    <!--Bottomband ends--> 
    
    <!--Vertical Banners Starts  -->
    <%--<div id="mission-logoL">    
    	<a href="http://www.zeeq.in/promos/" target="_blank"><img src="http://www.exchange4media.com/image2010/ZQleft30march15.gif" width="120" height="370" border="0" alt="ZEEQ"></a>
	 </div>
     <div id="mission-logoR">
		<a href="http://www.zeeq.in/shows/burka-avenger/" target="_blank"><img src="http://www.exchange4media.com/image2010/zq30apri15.jpg" width="120" height="370" border="0" alt="ZEEQ"></a>
	</div>--%>
   <div id="mission-logoL"><!--<a href="#"> <img src="http://www.exchange4media.com/image2010/NBT23june15.gif" border="0" width="120" height="370" alt="NBT" title="NBT"/></a>-->
<a href="http://www.eisamay.com" target="_blank"> <img src="http://www.exchange4media.com/image2010/NBT29june15L.gif" border="0" width="120" height="370" alt="NBT" title="NBT"></a>
<!--<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="120" height="370" id="banner2" title="" style="visibility: inherit;">
                    <param name="movie" value="http://www.exchange4media.com/image2010/nbt15jun152.swf">
                    <param name="quality" value="high">
                    <param name="wmode" value="opaque">
                    <param name="swfversion" value="6.0.65.0">
                    <param name="expressinstall" value="Scripts/expressInstall.swf">
                    
                 <object type="application/x-shockwave-flash" data="http://www.exchange4media.com/image2010/nbt15jun152.swf" width="120" height="370">
                       
                        <param name="quality" value="high">
                        <param name="wmode" value="opaque">
                        <param name="swfversion" value="6.0.65.0">
                        <param name="expressinstall" value="Scripts/expressInstall.swf">
                       
                        <div>
                            <h4>
                                Content on this page requires a newer version of Adobe Flash Player.</h4>
                            <p>
                                <a href="http://www.adobe.com/go/getflashplayer">
                                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33"></a></p>
                        </div>
                       
                    </object>
         
                </object>-->
                </div>
                <div id="mission-logoR"><a href="http://www.eisamay.com" target="_blank"> <img src="http://www.exchange4media.com/image2010/NBT29june15L.gif" border="0" width="120" height="370" alt="NBT" title="NBT"></a>

				<%--<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="120" height="370" id="banner2" title="" style="visibility: inherit;">
                    <param name="movie" value="http://www.exchange4media.com/image2010/nbt15jun152.swf">
                    <param name="quality" value="high">
                    <param name="wmode" value="opaque">
                    <param name="swfversion" value="6.0.65.0">
                    <param name="expressinstall" value="Scripts/expressInstall.swf">
                    
                 <object type="application/x-shockwave-flash" data="http://www.exchange4media.com/image2010/nbt15jun152.swf" width="120" height="370">
                       
                        <param name="quality" value="high">
                        <param name="wmode" value="opaque">
                        <param name="swfversion" value="6.0.65.0">
                        <param name="expressinstall" value="Scripts/expressInstall.swf">
                       
                        <div>
                            <h4>
                                Content on this page requires a newer version of Adobe Flash Player.</h4>
                            <p>
                                <a href="http://www.adobe.com/go/getflashplayer">
                                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33"></a></p>
                        </div>
                       
                    </object>
         
                </object>--%></div>
    <div id="wrapper" style="width:980px"> 
      <!--For top band : style="margin-top: 70px;"  For Site gate : style="width:980px"  -->
      <ucheader:header ID="header1" runat="server" />
      <!--mainbody starts-->
      <div id="mainbody"> 
        <!--top Jagran banners ads start-->
        <uc4:adzone1 ID="adzone11" runat="server" />
        <!--top Jagran banners ads close-->
        <div class="topcontent" style="height: 1050px;">
          <%-- height: 1110px --%>
          <div class="bottom-content-left" style="height:1056px;">
            <div class="stories-box" id="top1news" runat="server" visible="false">
              <asp:PlaceHolder ID="PlaceHolder1story" runat="server"></asp:PlaceHolder>
            </div>
            <div class="stories-box" id="Top2news" runat="server" visible="false">
              <asp:PlaceHolder ID="PlaceHolderTop2news" runat="server"></asp:PlaceHolder>
            </div>
            <div class="stories-box" id="Top3news" runat="server" visible="false">
              <asp:PlaceHolder ID="PlaceHolderstorybox" runat="server"></asp:PlaceHolder>
            </div>
            <%--<div id="baneer2a" style="float: left;height: 80px;width: 640px;margin-bottom: 10px;">
  
   <table width="640" border="0" cellspacing="0" cellpadding="0" style="border:solid 1px #909090;">
  <tr>
    <td width="124" height="80" rowspan="3"><a href="http://bit.ly/1A8qQsQ" target="_blank"><img src="http://www.exchange4media.com/image2010/ditto19feb15/ditto.gif" width="124" height="80" border="0" /></a></td>
    <td width="134"><a href="http://bit.ly/1A8qQsQ" target="_blank"><img src="http://www.exchange4media.com/image2010/ditto19feb15/download.gif" width="134" height="33" border="0" /></a></td>
    <td width="162" rowspan="3"><a href="http://bit.ly/1A8qQsQ" target="_blank"><img src="http://www.exchange4media.com/image2010/ditto19feb15/livetv.gif" width="84" height="80" border="0" /></a></td>
    <td width="110" rowspan="3"><a href="http://bit.ly/1Duc4iE" target="_blank"><img src="http://www.exchange4media.com/image2010/ditto19feb15/tvshows.gif" width="76" height="80" border="0" /></a></td>
    <td width="110" rowspan="3"><a href="http://bit.ly/1vZPyft" target="_blank"><img src="http://www.exchange4media.com/image2010/ditto19feb15/movies.gif" width="76" height="80" border="0" /></a></td>
    <td width="110" rowspan="3"><a href="http://bit.ly/1BoXc4q"><img src="http://www.exchange4media.com/image2010/ditto19feb15/videos.gif" width="76" height="80" border="0" /></a></td>
    <td width="110" rowspan="3"><a href="http://bit.ly/1A8qQsQ" target="_blank"><img src="http://www.exchange4media.com/image2010/ditto19feb15/knowmore.gif" width="69" height="80" border="0" /></a></td>
  </tr>
  <tr>
    <td><a href="http://bit.ly/1A8qQsQ" target="_blank"><img src="http://www.exchange4media.com/image2010/ditto19feb15/register.gif" width="134" height="26" border="0" /></a></td>
  </tr>
  <tr>
    <td><a href="http://bit.ly/1A8qQsQ" target="_blank"><img src="http://www.exchange4media.com/image2010/ditto19feb15/watch.gif" width="134" height="22" border="0" /></a></td>
  </tr>
</table>
   </div>--%>
            <div id="content"> 
              <!-- <div id="content" style="height:860px;"> -->
              <div id="latest-header">
                <h1>Top <font style="color: #BD2B02">News</font> &amp; Features </h1>
              </div>
              <div class="content-header-right"> </div>
              <div id="latest-stories-outer">
                <asp:PlaceHolder ID="PlaceHolderTop5News" runat="server"></asp:PlaceHolder>
              </div>
              <%--<div id="latest-stories-endpiece"> </div>
                 <div id="adbanner360x164"><img src="image2010/mma_360x164.jpg" width="360" height="164" alt=""/></div>--%>
            </div>
            <div id="sidebar-left">
              <%--<div id="Mint" class="featured-stories-wrapper">
                      
          <a href="http://www.exchange4media.com/e4m/click2013.asp?click=MINT18FEB2014&from=Banner" target="_blank">
                                    <img src="http://www.exchange4media.com/image2010/mint_190214.gif" alt="Mint"/></a>
                    </div>--%>
              <div id="featured-header">
                <h2> Latest <font style="color: #BD2B02">News </font> </h2>
              </div>
              <div class="content-header-right"> </div>
              <div class="featured-stories-wrapper1" style="height:240px;">
                <div class="autoScroller-container" id="scroller1" style="font-size:13px; font-weight:bold;">
                  <asp:PlaceHolder ID="PlaceHolderfeaturedstories" runat="server"></asp:PlaceHolder>
                </div>
              </div>
              <div class="featured-stories-blank"> </div>
              <div id="featured-dialogue-header"> <font style="color: #BD2B02">
                <h2>Dialogue</h2>
                </font></div>
              <div class="content-header-right"> </div>
              <div class="featured-stories-wrapper">
                <asp:PlaceHolder ID="PlaceHolderurlFeaturedDialog" runat="server"></asp:PlaceHolder>
              </div>
              <div class="featured-stories-more">
                <asp:HyperLink ID="HyperLinkfeatureddialogue" runat="server" Style="text-decoration: none">More...</asp:HyperLink>
              </div>
              <div id="featured-imggallery">
                <h2> Image <font style="color: #BD2B02">Gallery</font></h2>
              </div>
              <div class="content-header-right"> </div>
              <uc1:ImageGallery ID="ImageGallery1" runat="server" />
              <%--<div class="ad-banner-temp"> <a href="http://www.exchange4media.com/news/YouthQuotient.aspx" target="_blank"> <img src="http://www.exchange4media.com/image2010/YQ21sep13.gif" width="240"
                                    border="0" alt="YMS 2013" title="Youth Quotient"/></a> </div>--%>
            </div>
          </div>
          <div class="bottom-content-right">
            <div id="tab-container" class="tab-container">
              <ul class='etabs'>
                <!-- <li class='tab'><a href="#Advert">Advertisement</a></li>-->
                <li class='tab'><a href="#Video">Videos</a></li>
                <!--  <li class='tab'><a href="#IBUZZ">INDUSTRY <span style="color: #BD2B02;">BUZZ</span></a></li>-->
              </ul>
              <div id="Video">
                <div style="height: 260px;">
                  <uc2:videosection ID="videosection1" runat="server" />
                </div>
              </div>
              <!--<div id="IBUZZ">
                <div class="industry-buzz-outer" style="height: 250px;">
                  <div class="industry-buzz-inside" style="height: 250px;">
                    <asp:PlaceHolder ID="ibuzz" runat="server"></asp:PlaceHolder>
                  </div>
                </div>
              </div>--> 
            </div>
            <div id="top-right-ad-box2"> <a href="https://www.youtube.com/watch?v=oP_Qb48lX_E" target="_blank"><img src="http://www.exchange4media.com/image2010/DB07May2015.gif" width="300" height="184" border="0" alt="dainikbhaskar" title="dainikbhaskar"></a> 
              <!--<a href="http://www.unmetro.in/events/registration.html" target="_blank"><img src="http://www.exchange4media.com/image2010/DB7april15.gif" width="300" height="184" border="0" alt="Dainik Bhaskar" title="Dainik Bhaskar"></a>--> </div>
            <%-- <div id="top-right-ad-box"> 
          <!--  <a href="http://gmaw.org/" target="_blank"><img src="http://www.exchange4media.com/image2010/DMAi03Feb2015.gif" width="300" height="184" border="0" alt="GMAW 2015" title="GMAW 2015"></a>
           <a href="http://www.exchange4media.com/e4m/click2013.asp?click=YAH061120141&amp;from=Banner" target="_blank"><img src="http://www.exchange4media.com/image2010/YBrand06Nov2014.jpg" width="300" height="184" border="0" alt="Yahoo India" title="Yahoo India"></a> -->
		   <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="300" height="184" id="banner4" title="" style="visibility: inherit;">
                <param name="movie" value="http://www.exchange4media.com/image2010/CRICIQ27Feb2015.swf">
                <param name="quality" value="high">
                <param name="wmode" value="transparent">
                <param name="swfversion" value="6.0.65.0">
                <param name="expressinstall" value="Scripts/expressInstall.swf">
                <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="http://www.exchange4media.com/image2010/CRICIQ27Feb2015.swf" width="300" height="184">
                  <!--<![endif]-->
                  <param name="quality" value="high">
                  <param name="wmode" value="transparent">
                  <param name="swfversion" value="6.0.65.0">
                  <param name="expressinstall" value="Scripts/expressInstall.swf">
                  <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                  <div> 
                    <h4> Content on this page requires a newer version of Adobe 
                      Flash Player.</h4>
                    <p> <a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33"></a></p>
                  </div>
                  <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
              </object>
          </div> --%>
            <!--  <div id="Divspace" style="height: 5px;"> </div>
            <div id="top-right-ad-box4"><a href="http://www.delhipress.in/irsgsh.aspx" target="_blank" title="Grihshobha" ><img src="http://www.exchange4media.com/image2010/GS18may2015.gif"  width="300" height="184" border="0" alt="Grihshobha"/></a></div> -->
            
            <div id="Divspace" style="height: 5px;"> </div>
            <div id="top-right-ad-box3"> 
			<a href="http://www.haribhoomi.com/" target="_blank" title="Hari Bhoomi" ><img src="http://www.exchange4media.com/image2010/Hb21aug14hp.gif"  width="300" height="184" border="0" alt="Hari Bhoomi"/></a>
		 <!-- <a href="http://www.exchange4media.com/e4m/click2013.asp?click=ESPN7JULY15&from=banner" target="_blank" title="ESPNcricinfo" ><img src="http://www.exchange4media.com/image2010/ESPNcricinfo3july2015.gif"  width="300" height="184" border="0" alt="ESPNcricinfo"/></a>  -->
			</div>
            <div id="Divspace" style="height: 5px;"> </div>
            <!-- <div id="top-right-ad-box">
            	<div id="RefreshBanner" style="width:300px; height:184px;"></div> 
            </div> 
			<div id="Divspace" style="height: 5px;"> </div> -->
            <div id="top-right-ad-box6"> <a href="http://www.ibc24.in/" target="_blank" title="IBC24" ><img src="http://www.exchange4media.com/image2010/IBC1june2015.gif"  width="300" height="184" border="0" alt="IBC24"/></a></div>
            <div id="Divspace" style="height: 5px;"> </div>
            <div id="most-viewed-accordion">
              <div class="glossymenu"> <a class="menuitem submenuheader">Most Read Stories</a>
                <div class="submenu">
                  <asp:PlaceHolder ID="PlaceHolderMostViewedStories" runat="server"></asp:PlaceHolder>
                  <div class="see-all index-view-all"> <a href="http://www.exchange4media.com/news/MostPopular.aspx">View All</a></div>
                </div>
                <a class="menuitem submenuheader">Most E-Mailed Stories</a>
                <div class="submenu">
                  <asp:PlaceHolder ID="PlaceHolderMostViewedVideos" runat="server"></asp:PlaceHolder>
                  <div class="see-all index-view-all"> <a href="http://www.exchange4media.com/news/MostEmailed.aspx">View All</a></div>
                </div>
              </div>
            </div>
            <%--<div id="top-right-ad-box">
            
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="300" height="184" id="banner4" title="" style="visibility: inherit;">
                <param name="movie" value="http://www.exchange4media.com/image2010/ESPN24Mar2015.swf">
                <param name="quality" value="high">
                <param name="wmode" value="transparent">
                <param name="swfversion" value="6.0.65.0">
                <param name="expressinstall" value="Scripts/expressInstall.swf">
                <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="http://www.exchange4media.com/image2010/ESPN24Mar2015.swf" width="300" height="184">
                  <!--<![endif]-->
                  <param name="quality" value="high">
                  <param name="wmode" value="transparent">
                  <param name="swfversion" value="6.0.65.0">
                  <param name="expressinstall" value="Scripts/expressInstall.swf">
                  <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                  <div> 
                    <h4> Content on this page requires a newer version of Adobe 
                      Flash Player.</h4>
                    <p> <a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33"></a></p>
                  </div>
                  <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
              </object>
            </div>--%>
            <div id="Divspace" style="height: 5px;"> </div>
            <!-- <div id="top-jobs">
                        <div id="top-jobs-hdr">
                            Top jobs <font style="color: #252525">on exchange4media</font></div>
                        <asp:PlaceHolder ID="PlaceHolderTopjobs" runat="server"></asp:PlaceHolder>
                        <div class="top-jobs-viewmore">
                            View more jobs <a href="http://www.exchange4media.com/jobs/alljobs.aspx">
                                <img src="http://www.exchange4media.com/css/images/more-jobs-arrow.png" width="19"
                                    height="10" alt="more jobs" title="more jobs" /></a></div>
                    </div>--> 
          </div>
        </div>
        <!--top content Div close--> 
        <!--banners ads start-->
        <uc3:adzone2 ID="adzone21" runat="server" />
        <!--banners ads close--> 
        <!--bottom-content-start-->
        <div class="bottom-content">
          <div class="bottom-content-left">
            <div id="home-sections">
              <asp:PlaceHolder ID="PlaceHolderHomesections" runat="server"></asp:PlaceHolder>
            </div>
            <div id="left-horz-accordion">
              <ol>
                <li>
                  <h2> <span>Industry Briefing</span></h2>
                  <div>
                    <asp:PlaceHolder ID="plcIndustryBriefing" runat="server"></asp:PlaceHolder>
                  </div>
                </li>
                <li>
                  <h2> <span>Top Picks</span></h2>
                  <div>
                    <asp:PlaceHolder ID="plcAnalysis" runat="server"></asp:PlaceHolder>
                  </div>
                </li>
              </ol>
              <noscript>
              <p> Please enable JavaScript to get the full experience.</p>
              </noscript>
            </div>
            <%--<div class="ad-banner-640x60"></div>--%>
            <div id="featured"> Creative <font style="color: #7672A0">Picks</font></div>
            <div id="top-content-slider">
              <div id="st-prev_btn"> <img src="http://www.exchange4media.com/images/prev.png" width="16" height="26" alt="Previous" /></div>
              <div id="top-content">
                <asp:PlaceHolder ID="PlaceHolderCreativePicks" runat="server"></asp:PlaceHolder>
              </div>
              <div id="st-next_btn"> <img src="http://www.exchange4media.com/images/next.png" width="16" height="26" alt="Next" /></div>
              <div class="see-all-people-movement-extra"> <a href="http://www.exchange4media.com/videos/Home.aspx">View All</a></div>
            </div>
            <br/>
          </div>
          <%--<div id="right-bottom-ad-spl1"> <a href="https://www.facebook.com/9xjalwa?fref=ts" target="_blank"><img src="http://www.exchange4media.com/image2010/9XMM13Oct2014.jpg" width="300" height="215"  border="0" alt="9X Jalwa Musical Messenger" title="9X Jalwa Musical Messenger" /></a> </div>--%>
          <%-- <div id="most-viewed-accordion">
              <div class="glossymenu"> <a class="menuitem submenuheader">Most Read Stories</a>
                <div class="submenu">
                  <asp:PlaceHolder ID="PlaceHolderMostViewedStories" runat="server"></asp:PlaceHolder>
                  <div class="see-all index-view-all"> <a href="http://www.exchange4media.com/news/MostPopular.aspx">View All</a></div>
                </div>
                <a class="menuitem submenuheader">Most E-Mailed Stories</a>
                <div class="submenu">
                  <asp:PlaceHolder ID="PlaceHolderMostViewedVideos" runat="server"></asp:PlaceHolder>
                  <div class="see-all index-view-all"> <a href="http://www.exchange4media.com/news/MostEmailed.aspx">View All</a></div>
                </div>
              </div>
            </div>--%>
          <div class="facebook-widget">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fexchange4media&amp;width=300&amp;height=265&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true&amp;appId=186709888157616" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:265px;" allowtransparency="true"></iframe>
            <%--<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fexchange4media&amp;width=300&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=false&amp;show_border=true&amp;appId=186709888157616" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:62px;" allowTransparency="true"></iframe>--%>
          </div>
          <div id="twit">
          <div class="twitter-widget">
            <%--<a class="twitter-timeline" href="https://twitter.com/e4mtweets" data-widget-id="575922567027945472" width="300" height="178">Tweets by @e4mtweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>--%>
            <a class="twitter-timeline" href="https://twitter.com/e4mtweets" data-widget-id="575922567027945472" width="300" height="350">Tweets by @e4mtweets</a>
<script>    !function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } } (document, "script", "twitter-wjs");</script>
            
                   </div></div>
          <div id="right-bottom-ad-spl3"> </div>
          <div><img src="http://www.exchange4media.com/images/spacer-5px.gif" width="5" height="5"/></div>
          <div><a href="http://e4mevents.com/media-ace-awards-2015/"><img src="http://www.exchange4media.com/image2010/ace22april15.gif" width="300" height="184"/></a></div>
          <div><img src="http://www.exchange4media.com/images/spacer-5px.gif" width="5" height="5"/></div>
        </div>
        <!--bottom-content-start--> 
      </div>
      <!--mainbody close-->
      <ucFooter:Footer ID="Footer1" runat="server" />
    </div>
    <!--wrapper close --> 
    <!--footer begins--> 
    
    <script type="text/javascript">

        //For tabs

        $(document).ready(function() {

            //When page loads...
            $(".tab_content").hide(); //Hide all content
            $("ul.tabs li:first").addClass("active").show(); //Activate first tab
            $(".tab_content:first").show(); //Show first tab content

            //On Click Event
            $("ul.tabs li").click(function() {

                $("ul.tabs li").removeClass("active"); //Remove any "active" class
                $(this).addClass("active"); //Add "active" class to selected tab
                $(".tab_content").hide(); //Hide all tab content

                var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
                $(activeTab).fadeIn(); //Fade in the active ID content
                return false;
            });

        });

        //For Industry Breifing amp; Top pick

        $('#left-horz-accordion').liteAccordion();

        //For Creative pick slider
        $("#top-content").carouFredSel({
            width: 585,
            height: 150,
            padding: [0, 0, 10, 10],
            items: {
                visible: 3,
                width: 195,
                height: 150
            },
            scroll: {
                items: 1,
                pauseOnHover: true
            },
            prev: {
                button: "#st-prev_btn",
                key: "left"
            },
            next: {
                button: "#st-next_btn",
                key: "right"
            }
        });

        //For Video slider
        $("#video-thumbs-slider").carouFredSel({
            circular: false,
            infinite: false,
            width: 215,
            //                height: 94,
            padding: [0, 0, 0, 0],
            margin: [0, 0, 0, 0],
            items: {
                visible: 2,
                width: 110,
                height: 80
            },
            scroll: 1,
            auto: false,
            prev: {
                button: "#v-prev_btn",
                key: "left"
            },
            next: {
                button: "#v-next_btn",
                key: "right"
            }
        });          
           

    </script> 
    
    <!-- Small Gallery Starts--> 
    
    <script type="text/javascript" src="Scripts/jquery.easing.1.3.js"></script> 
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script> 
    <script type="text/javascript" src="js/jquery.crotator.js"></script> 
    <script type="text/javascript">
        $(window).load(function() {
            $('#cr-container').crotator();
        });
    </script> 
    
    <!-- Small Gallery ends--> 
    
    <script type="text/javascript">

        swfobject.registerObject("FlashID");
        swfobject.registerObject("FlashID2");
        swfobject.registerObject("FlashID13");
        swfobject.registerObject("FlashID5");
        swfobject.registerObject("youtubevideo");
        swfobject.registerObject("Sitecapture");
		swfobject.registerObject("banner4");
		swfobject.registerObject("banner21");
		swfobject.registerObject("banner31");

    </script> 
    <script type="text/javascript">
        $('#games').coinslider();
    </script> 
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-12770313-1']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
  
    </script>
  </form>
</body>
</html>
