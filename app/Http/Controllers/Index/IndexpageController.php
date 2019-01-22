<?php
namespace App\Http\Controllers\Index;
use Config;
//use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Mostread;
use App\Models\Article;
use App\Models\Video;
use App\ArticleF;
use App\Ytube;
use Carbon\Carbon;
use App\Menu;
use View;
use App\Album;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Helper;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
class IndexpageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | index Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles requesting users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Cache::has('menus')) {
            $menus= Cache::get('menus');
        }else{
            $menus = Menu::with('children')->where([['valid','1'],['is_homepage','1']])->orderby('sequence','asc')->get();
            Cache::put('menus', $menus, 20);
        };
        if (Cache::has('industryBriefing')) {
            $industryBriefing= Cache::get('industryBriefing');
        }else{
            $industryBriefing = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','url','photopath','phototitle','category_name')->where('category_id',3)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(4)->get();
            Cache::put('industryBriefing', $industryBriefing, 20);
        };
        if (Cache::has('socialM')) {
            $socialM= Cache::get('socialM');
        }else{
            $socialM = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name')->where('category_id',13)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(10)->get();
            Cache::put('socialM', $socialM, 20);
        };
        if (Cache::has('rightsidemostRead')) {
            $rightsidemostRead= Cache::get('rightsidemostRead');
        }else{
            $rightsidemostRead = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name')->where('category_id',9)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(3)->get();
            Cache::put('rightsidemostRead', $rightsidemostRead, 20);
        };
        
        View::share('menus',$menus); 
        View::share('industryBriefing',$industryBriefing);
        View::share('socialM',$socialM);
        View::share('rightsidemostRead',$rightsidemostRead);
    }

    public function index(Request $request)
    {
               
        if (Cache::has('homeSlide')) {
            $homeSlide= Cache::get('homeSlide');
        }else{
        	$homeSlide = DB::table('article')->select('title','url','photopath','phototitle','category_name','category_hname')->where('important', 1)->where('priority','!=', 0)->orderby('priority','asc')->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(5)->get();
        	Cache::put('homeSlide', $homeSlide, 20);
        };

        
        if (Cache::has('mediaForum')) {
            $mediaForum= Cache::get('mediaForum');
        }else{
            $mediaForum = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','url','category_name')->where('category_id',4)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(4)->get();
            Cache::put('mediaForum', $mediaForum, 20);
        };
        if (Cache::has('jobs')) {
            $jobs= Cache::get('jobs');
        }else{
            $jobs = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name')->where('category_id',7)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(4)->get();
            Cache::put('jobs', $jobs, 20);
        };
        if (Cache::has('mostRead')) {
            $mostRead= Cache::get('mostRead');
        }else{
            $mostRead = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name')->where('category_id',9)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(3)->get();
            Cache::put('mostRead', $mostRead, 20);
        };
        if (Cache::has('interview')) {
            $interview= Cache::get('interview');
        }else{
            $interview = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name','category_hname')->where('category_id',5)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(2)->get();
            Cache::put('interview', $interview, 20);
        };
        if (Cache::has('vicharmanch')) {
            $vicharmanch= Cache::get('vicharmanch');
        }else{
            $vicharmanch = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name','category_hname')->where('category_id',11)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(2)->get();
            Cache::put('vicharmanch', $vicharmanch, 20);
        };
        if (Cache::has('brandSpeaks')) {
            $brandSpeaks= Cache::get('brandSpeaks');
        }else{
            $brandSpeaks = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name')->where('category_id',66)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(3)->get();
            Cache::put('brandSpeaks', $brandSpeaks, 20);
        };
        if (Cache::has('Adv')) {
            $Adv= Cache::get('Adv');
        }else{
            $Adv = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name')->where('category_id',8)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(3)->get();
            Cache::put('Adv', $Adv, 20);
        };
        if (Cache::has('mainNews')) {
            $mainNews= Cache::get('mainNews');
        }else{
            $mainNews = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name')->where('category_id',6)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(6)->get();
            Cache::put('mainNews', $mainNews, 20);
        };
        if (Cache::has('telS')) {
            $telS= Cache::get('telS');
        }else{
            $telS = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name')->where('category_id',10)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(10)->get();
            Cache::put('telS', $telS, 20);
        };
       
        if (Cache::has('videos')) {
            $videos= Cache::get('videos');
        }else{
            $videos = Ytube::take(5)->get();
            Cache::put('videos', $videos, 20);
        };
        if (Cache::has('frontalbum')) {
            $frontalbum= Cache::get('frontalbum');
        }else{
            $frontalbum = Album::Join('photos as p', 'album.id', '=', 'p.owner_id')
                          ->select(DB::raw('album.title as album_title,album.description as album_desc,p.title as photo_title,p.description as photo_desc,p.photopath,p.photo_id'))->where([['album.valid',1],['p.owned_by','album'],['p.active',1]])->orderBy('p.photo_id', 'desc')->take(10)->get();
            Cache::put('frontalbum', $frontalbum, 20);
        };
        
    return view('welcome',compact('menus','homeSlide','industryBriefing','mediaForum','jobs','mostRead','vicharmanch','interview','brandSpeaks','Adv','mainNews','telS','socialM','videos','frontalbum'));

    //     if (Cache::has('ArrRecentFeatureFirstNews')) {
    //         $ArrRecentFeatureFirstNews= Cache::get('ArrRecentFeatureFirstNews');
    //     }else{
    //     	$ArrRecentFeatureFirstNews =DB::table('article_feature')->select(DB::raw('article_feature.*'))->where('sequence',1)->orderby('sequence','asc')->orderby('publish_date','desc')->limit(1)->get();
    //     	Cache::put('ArrRecentFeatureFirstNews', $ArrRecentFeatureFirstNews, 1);
    //     };


    //     	$ArrRecentFeatureNewsList =DB::table('article_feature')->select(DB::raw('article_feature.*'))->orderby('sequence','asc')->where('sequence','!=',1)->where('sequence','!=',0)->limit(4)->get();


    //     if (Cache::has('ArrRecentPhotoGalleryHomePage')) {
    //         $ArrRecentPhotoGalleryHomePage= Cache::get('ArrRecentPhotoGalleryHomePage');
    //     }else{
    //     	$ArrRecentPhotoGalleryHomePage =  Album::with('photos')->whereNotIn('id', function($query){
    //         $query->select('album_id')
    //                   ->from('article')
    //                   ->whereRaw('article.album_id = album.id');
    //     })->where('valid','1')->orderby('id','desc')->limit(10)->get();
    //     	Cache::put('ArrRecentPhotoGalleryHomePage', $ArrRecentPhotoGalleryHomePage, 1);
    //     };

    //     if (Cache::has('ArrRecentPhotoGalleryHomePageonlytitle')) {
    //         $ArrRecentPhotoGalleryHomePageonlytitle= Cache::get('ArrRecentPhotoGalleryHomePageonlytitle');
    //     }else{
    //     	$ArrRecentPhotoGalleryHomePageonlytitle =  Album::with('photos')->whereNotIn('id', function($query){
    //         $query->select('album_id')
    //                   ->from('article')
    //                   ->whereRaw('article.album_id = album.id');
    //     })->where('valid','1')->orderby('id','desc')->limit(10)->get();
    //     	Cache::put('ArrRecentPhotoGalleryHomePageonlytitle', $ArrRecentPhotoGalleryHomePageonlytitle, 1);
    //     };



    //     if (Cache::has('ArrRecentLeftPanelInterviewAricles')) {
    //         $ArrRecentLeftPanelInterviewAricles= Cache::get('ArrRecentLeftPanelInterviewAricles');
    //     }else{
    //     	$ArrRecentLeftPanelInterviewAricles = Article::select('article_id','title','url','publish_date','publish_time','photopath')->where('news_type',3)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(4)->get();
    //     	Cache::put('ArrRecentLeftPanelInterviewAricles', $ArrRecentLeftPanelInterviewAricles, 1);
    //     };



    //     if (Cache::has('ArrRecentArticleMiddelPanelGuestColumn')) {
    //         $ArrRecentArticleMiddelPanelGuestColumn= Cache::get('ArrRecentArticleMiddelPanelGuestColumn');
    //     }else{
    //     	$ArrRecentArticleMiddelPanelGuestColumn = Article::select('article_id','title','url','publish_date','publish_time','photopath')->where('author_type',3)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(5)->get();
    //     	Cache::put('ArrRecentArticleMiddelPanelGuestColumn', $ArrRecentArticleMiddelPanelGuestColumn, 1);
    //     };


    //     if (Cache::has('ArrRecentRightPanelTelevisionAricles')) {
    //         $ArrRecentRightPanelTelevisionAricles= Cache::get('ArrRecentRightPanelTelevisionAricles');
    //     }else{
    //     	$ArrRecentRightPanelTelevisionAricles = Article::select('article_id','title','summary','url','publish_date','publish_time','photopath')->where('category_id',6)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(5)->get();
    //     	Cache::put('ArrRecentRightPanelTelevisionAricles', $ArrRecentRightPanelTelevisionAricles, 1);
    //     };



    //     if (Cache::has('ArrRecentRightPanelDigitalAricles')) {
    //         $ArrRecentRightPanelDigitalAricles= Cache::get('ArrRecentRightPanelDigitalAricles');
    //     }else{
    //     	$ArrRecentRightPanelDigitalAricles = Article::select('article_id','title','summary','url','publish_date','publish_time','photopath')->where('category_id',4)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(5)->get();
    //     	Cache::put('ArrRecentRightPanelDigitalAricles', $ArrRecentRightPanelDigitalAricles, 1);
    //     };


    //     if (Cache::has('ArrRecentRightPanelOutofHomeAricles')) {
    //         $ArrRecentRightPanelOutofHomeAricles= Cache::get('ArrRecentRightPanelOutofHomeAricles');
    //     }else{
    //     	$ArrRecentRightPanelOutofHomeAricles = Article::select('article_id','title','summary','url','publish_date','publish_time','photopath')->where('category_id',26)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(5)->get();
    //     	Cache::put('ArrRecentRightPanelOutofHomeAricles', $ArrRecentRightPanelOutofHomeAricles, 1);
    //     };

    //     if (Cache::has('ArrRecentRightPanelRadioAricles')) {
    //         $ArrRecentRightPanelRadioAricles= Cache::get('ArrRecentRightPanelRadioAricles');
    //     }else{
    //     	$ArrRecentRightPanelRadioAricles = Article::select('article_id','title','url','summary','publish_date','publish_time','photopath')->where('category_id',7)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(5)->get();
    //     	Cache::put('ArrRecentRightPanelRadioAricles', $ArrRecentRightPanelRadioAricles, 1);
    //     };
    //     if (Cache::has('ArrRecentRightPanelPrintAricles')) {
    //         $ArrRecentRightPanelPrintAricles= Cache::get('ArrRecentRightPanelPrintAricles');
    //     }else{
    //     	$ArrRecentRightPanelPrintAricles = Article::select('article_id','title','url','summary','publish_date','publish_time','photopath')->where('category_id',5)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(5)->get();
    //     	Cache::put('ArrRecentRightPanelPrintAricles', $ArrRecentRightPanelPrintAricles, 1);
    //     };

    //     if (Cache::has('ArrRecentLeftPanelShowcaseVideo')) {
    //         $ArrRecentLeftPanelShowcaseVideo= Cache::get('ArrRecentLeftPanelShowcaseVideo');
    //     }else{
    //     	$ArrRecentLeftPanelShowcaseVideo = Video::select('id','video_title','video_thumb_name','updated_at','created_at')->where('video_type',2)->orderby('id','desc')->limit(1)->get();
    //     	Cache::put('ArrRecentLeftPanelShowcaseVideo', $ArrRecentLeftPanelShowcaseVideo, 1);
    //     };
    //     if (Cache::has('ArrRecentLeftPanelShowcaseVideogallery')) {
    //         $ArrRecentLeftPanelShowcaseVideogallery= Cache::get('ArrRecentLeftPanelShowcaseVideogallery');
    //     }else{
    //     	$ArrRecentLeftPanelShowcaseVideogallery = Video::select('id','video_title','video_thumb_name','updated_at','created_at')->where('video_type',2)->orderby('id','desc')->limit(5)->offset(1)->get();
    //     	Cache::put('ArrRecentLeftPanelShowcaseVideogallery', $ArrRecentLeftPanelShowcaseVideogallery, 1);
    //     };
    // $useragent = isset($_SERVER['HTTP_USER_AGENT'])
    // ? strtolower($_SERVER['HTTP_USER_AGENT'])
    // : '';
    // if(preg_match('/(ipad)/i',$useragent)||preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/117|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(1|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n1[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
    // $parents = DB::select( DB::raw("SELECT * FROM banner where mobile=1 AND forpage='home' order by bid asc"));  }else{
    // $parents = DB::select( DB::raw("SELECT * FROM banner where desktop=1 AND forpage='home' order by bid asc"));
    // }
    // if (Cache::has('steyconnect')) {
    //     $steyconnect= Cache::get('steyconnect');
    // }else{
    //     $steyconnect = DB::table("tbl_stay_connected")->orderby('id','desc')->first();
    //     Cache::put('steyconnect', $steyconnect, 1);
    // };
    // $trending = DB::table("trending_tags")->select('tags as tag')->orderby('hits','desc')->limit(6)->get();
    //     return view('welcome', compact('ArrRecentFeatureNewsList',
    //                                 'ArrRecentImportaintNewsHeaderList',
    //                                 'ArrRecentNewsMiddelbarList',
    //                                 'ArrRecentImportantNewsd',
    //                                 'ArrMenuSLatestNews',
    //                                 'ArrMenuSLatestVideo',
    //                                 'ArrMenuSTag',
    //                                 'ArrRecentArticleMiddelPanelGuestColumn',
    //                                 'ArrRecentLeftPanelInterviewAricles',
    //                                 'ArrRecentLeftPanelShowcaseVideo',
    //                                 'ArrRecentLeftPanelShowcaseVideogallery',
    //                                 'ArrRecentMiddelPanelCategoryAricles',
    //                                 'ArrRecentNewsFooter',
    //                                 'ArrRecentImportantNewsFooter',
    //                                 'ArrRecentFooterPanelCategoryAricles',
    //                                 'ArrRecentLeftPanelCampaignAricles',
    //                                 'ArrRecentPhotoGalleryHomePage',
    //                                 'ArrRecentPhotoGalleryHomePageonlytitle',
    //                                 'ArrRecentRightPanelTelevisionAricles',
    //                                 'arrmostread',
    //                                 'ArrRecentRightPanelDigitalAricles',
    //                                 'ArrRecentRightPanelOutofHomeAricles',
    //                                 'ArrRecentRightPanelPrintAricles',
    //                                 'ArrRecentVidioRightPanelslider',
    //                                 'menus',
    //                                 'parents',
    //                                 'ArrRecentFeatureFirstNews',
    //                                 'agent',
    //                                 'trending',
    //                                 'steyconnect',
    //                                 'ArrRecentRightPanelRadioAricles'));

    }

    public function section($section)
    {
        if (Cache::has('sectionArticles')) {
            $sectionArticles= Cache::get('sectionArticles');
        }else{
            $sectionArticles = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','authorname','photopath','phototitle','category_name')->where('category_name',$section)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(20)->get();
            Cache::put('sectionArticles', $sectionArticles, 20);
        };
        if (Cache::has('sectionmostRead')) {
            $sectionmostRead= Cache::get('sectionmostRead');
        }else{
            $sectionmostRead = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle')->where('category_id',9)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(5)->get();
            Cache::put('sectionmostRead', $sectionmostRead, 20);
        };

        return view('article.section', compact('menus','sectionArticles','sectionmostRead','industryBriefing'));
    }

    public function story($section,$title,$id)
    {     

                if (Cache::has('articles-'.$id)) {
                $articles= Cache::get('articles-'.$id);
                }else{
                $articles = Article::where('article_id',$id)->get();
                Cache::put('articles-'.$id, $articles, 20);
                };

                if( count( $articles ) == 0)
                {
                return view('errors.404');
                }

                if (Cache::has('articlesrelate-'.$id)) {
                $articlesrelate= Cache::get('articlesrelate-'.$id);
                }else{
                $articlesrelate = Article::where([['category_name',$section],['article_id','!=',$id],['category_name','!=',null]])->orderby('article_id','desc')->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(10)->get();
                Cache::put('articlesrelate-'.$id, $articlesrelate, 20);
                };
                if (Cache::has('storymostRead')) {
                    $storymostRead= Cache::get('storymostRead');
                }else{
                    $storymostRead = Article::select(DB::raw('CONCAT(publish_date,publish_time) AS pickdate'),'title','summary','url','photopath','phototitle','category_name')->where('category_id',9)->orderby('publish_date','desc')->orderby('publish_time','desc')->limit(4)->get();
                    Cache::put('storymostRead', $storymostRead, 20);
                };
          
            $article= $articles[0];
            // if (count($articles[0]->albums) > 0) {
            // $photogallery= $articles[0]->albums[0]['photos'];
            // }else{
            // $photogallery= 'null';
            // }
            // $ArrTageListing =  $articles[0]->tags;
            // $tag = preg_replace('/[,]+/', '|', trim($ArrTageListing));
            // $articleurl = preg_replace( "/\r|\n/", "", $article->url);
            // if ($request->url() !== $articleurl) {
            // return Redirect::to($articleurl, 301); 
            // } 
            // $url = action('Article\ArticleController@Amp_Article_landing_page', ['section' => Helper::rscUrl($section),'title'=> Helper::rscUrl($title),'id'=> $id]);
            $metatitle = $article->title;
            $metadescription = $article->summary;
            $metatag = $article->tags;
            $ogimage = $article->photopath;
            $ogurl = $article->url;
            // $canonicalstory1= action('Article\ArticleController@Article_landing_page', ['section' => Helper::rscUrl($section),'title'=> Helper::rscUrl($title),'id'=> $id]);
            // $canonicalstory = strtolower($canonicalstory1);
            // $canonical= $url;
            // if (Cache::has('ArrlistingArticlespinit')) {
            // $ArrlistingArticlespinit= Cache::get('ArrlistingArticlespinit');
            // }else{
            // $ArrlistingArticlespinit =   Article::where('category_name',$section)->orderby('publish_date','desc')->orderby('publish_time','desc')->where('is_pinned', 1)->limit(1)->get();
            // Cache::put('ArrlistingArticlespinit', $ArrlistingArticlespinit, 1000);
            // };
            // $arrmostread = $this->arrmostread;
            // $ArrMenuSLatestVideo = $this->ArrMenuSLatestVideo;
            // $ArrRecentNewsMiddelbarList = $this->ArrRecentNewsMiddelbarList;
            // $ArrRecentImportaintNewsHeaderList = $this->ArrRecentImportaintNewsHeaderList;
            // $ArrRecentFeatureNewsList = $this->ArrRecentFeatureNewsList;
            // $ArrRecentNewsMiddelbarList = $this->ArrRecentNewsMiddelbarList;
            
      //      $useragent = isset($_SERVER['HTTP_USER_AGENT'])
      //   ? strtolower($_SERVER['HTTP_USER_AGENT'])
      //   : '';
      // if(preg_match('/(ipad)/i',$useragent)||preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
      //   $parents = DB::select( DB::raw("SELECT * FROM banner where mobile=1 AND forpage='story' order by bid asc"));  
      //   }else{ 
      //   $parents = DB::select( DB::raw("SELECT * FROM banner where desktop=1 AND forpage='story' order by bid asc"));  
      //   }
         
        return view('article.story', compact('articles','articlesrelate','socialM','storymostRead','metatitle','metadescription','metatag','ogimage','ogurl'));
    }

    public function photogallery()
    {
        $shareAlbum = Album::Join('photos as p', 'album.id', '=', 'p.owner_id')
                          ->select(DB::raw('album.id,album.title as album_title,album.description as album_desc,p.title as photo_title,p.description as photo_desc,p.photopath,p.photo_id'))->where([['album.valid',1],['p.owned_by','album'],['p.active',1]])->groupby('album.id')->orderBy('p.photo_id', 'desc')->paginate(20);
        $metatitel = 'Photo, Image Gallery - Samachar4media';
        $ogtitel =  'Photo, Image Gallery - Samachar4media';
        $ogimage = '';
        $ogurl = '';
        $canonical = '';
        $metatag = 'media news photo gallery, marketing news image gallery, advertising news picture gallery';
        $metadescription = 'Samachar4media meida, advertising, photo, image, picture gallery page India.';
            // $arrmostread = $this->arrmostread;
            // $ArrMenuSLatestVideo = $this->ArrMenuSLatestVideo;
            // $ArrRecentNewsMiddelbarList = $this->ArrRecentNewsMiddelbarList;
            // $ArrRecentImportaintNewsHeaderList = $this->ArrRecentImportaintNewsHeaderList;
            // $ArrRecentFeatureNewsList = $this->ArrRecentFeatureNewsList;
            // $ArrRecentNewsMiddelbarList = $this->ArrRecentNewsMiddelbarList;
            // $menus = $this->menus;
            // $parents = $this->parents;
        return view('photogallery.album', compact('shareAlbum','ArrViewPhotos','metatitel','ogtitel','ogimage','ogurl','canonical','metadescription','ArrRecentFeatureNewsList','menus','arrmostread','ArrRecenttopnews','ArrRecentImportaintNewsHeaderList','ArrRecentNewsMiddelbarList','ArrMenuSLatestVideo'));
    
    }

    public function galleryExplore($title,$id)
    {
        $galleryPic = Album::Join('photos as p', 'album.id', '=', 'p.owner_id')->select(DB::raw('album.id ,album.title as album_title,album.description as album_desc,p.title as photo_title,p.description as photo_desc,p.photopath,p.photo_id'))->where([['album.valid',1],['p.owned_by','album'],['p.active',1],['album.id',$id]])->orderBy('p.photo_id', 'desc')->get();
        $otherGallery = Album::Join('photos as p', 'album.id', '=', 'p.owner_id')->select(DB::raw('album.id ,album.title as album_title,album.description as album_desc,p.title as photo_title,p.description as photo_desc,p.photopath,p.photo_id'))->where([['album.valid',1],['p.owned_by','album'],['p.active',1],['album.id','!=',$id]])->orderBy('p.photo_id', 'desc')->get();
        $metatitel = 'Photo, Image Gallery - Samachar4media';
        $ogtitel =  'Photo, Image Gallery - Samachar4media';
        $ogimage = '';
        $ogurl = '';
        $canonical = '';
        $metatag = 'media news photo gallery, marketing news image gallery, advertising news picture gallery';
        $metadescription = 'Samachar4media meida, advertising, photo, image, picture gallery page India.';
            // $arrmostread = $this->arrmostread;
            // $ArrMenuSLatestVideo = $this->ArrMenuSLatestVideo;
            // $ArrRecentNewsMiddelbarList = $this->ArrRecentNewsMiddelbarList;
            // $ArrRecentImportaintNewsHeaderList = $this->ArrRecentImportaintNewsHeaderList;
            // $ArrRecentFeatureNewsList = $this->ArrRecentFeatureNewsList;
            // $ArrRecentNewsMiddelbarList = $this->ArrRecentNewsMiddelbarList;
            // $menus = $this->menus;
            // $parents = $this->parents;
        return view('photogallery.gallery', compact('galleryPic','otherGallery','ArrViewPhotos','metatitel','ogtitel','ogimage','ogurl','canonical','metadescription','ArrRecentFeatureNewsList','menus','arrmostread','ArrRecenttopnews','ArrRecentImportaintNewsHeaderList','ArrRecentNewsMiddelbarList','ArrMenuSLatestVideo'));
    }
}
