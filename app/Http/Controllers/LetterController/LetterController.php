<?php

namespace App\Http\Controllers\LetterController;
use Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
#use App\Models\Author;
#use App\Models\TagListingWithArticle;
use App\Models\Articleauthor;
use Illuminate\Support\Facades\App;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
//use DB;
use Helper;

class LetterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Newsletter Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles requesting users for the application and
    | redirecting them to your newsletter landing screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     /*morning post*/
   public function Morning_N_Page_New4(Request $request)
    {
      $parents = DB::select( DB::raw("SELECT bscript,status FROM banner order by bid asc"));
 
$countarticle = DB::table('article')
                    ->JOIN('master_newsletter_articles', 'article.article_id', '=', 'master_newsletter_articles.article_id')
                    ->select('article.*','master_newsletter_articles.master_newsletter_id')
                   // ->select('article.*','master_newsletter_articles.master_newsletter_id')
                    ->where('master_newsletter_id', 1)->where('is_deleted', 0)->orderBy('master_newsletter_articles.sequence','DESC')->count();


                    $ArrViewArticle = DB::table('article')
                    ->JOIN('master_newsletter_articles', 'article.article_id', '=', 'master_newsletter_articles.article_id')
        
                   
                    ->select('article.*','master_newsletter_articles.master_newsletter_id')
                   // ->select('article.*','master_newsletter_articles.master_newsletter_id')
                    ->where('master_newsletter_id', 1)->where('is_deleted', 0)->orderBy('master_newsletter_articles.sequence','ASC')->take($countarticle-3)->get();

           $ArrRecentArticleGuestColumn = DB::table('article')
                    ->JOIN('master_newsletter_articles', 'article.article_id', '=', 'master_newsletter_articles.article_id')
        
                    ->select('article.*','master_newsletter_articles.master_newsletter_id')
                    ->where('master_newsletter_id', 1)->where('is_deleted', 0)->orderBy('master_newsletter_articles.sequence','ASC')
          ->skip($countarticle-3)->take(3)->get();

        $ArrRecentCategoryAricle = DB::table('article')
                    ->select('*')->where('category_id', '=', '35')->orderBy('publish_date','DESC')->orderBy('publish_time','ASC')->take(3)->get();
                     $ArrRecentCategoryAriclenew = DB::table('article')
                   
                    ->select('*')->where('category_id', '=', '35')->orderBy('publish_date','DESC')->orderBy('publish_time','ASC')->take(3)->get();   
         //echo '<pre>';print_r($ArrRecentCategoryAricle);echo '</pre>'; exit;
        $ArrRecentShowcaseVideo = Video::where('video_type', '=', 2)->take(3)->get();               
                   
                     return view('newletter.morning_post_new1', compact('ArrViewArticle',
                                                        'ArrRecentShowcaseVideo',
                                                        'ArrRecentCategoryAriclenew',
                                                        'ArrRecentCategoryAricle',
                                                        'ArrRecentArticleGuestColumn',
                                                        'ArrSideViewArticle',
                                                        'parents'
                                                     ));
    }





    
    public function Afternoon_Post_page(Request $request)
    {
      //  DB::enableQueryLog();
       $ArrViewArticle = DB::table('article')
                    ->JOIN('master_newsletter_articles', 'article.article_id', '=', 'master_newsletter_articles.article_id')
         
                   
                    ->select('article.*','master_newsletter_articles.master_newsletter_id')
                    ->where('master_newsletter_id', 3)->where('is_deleted', 0)->orderBy('master_newsletter_articles.sequence','ASC')->get();     
      //   dd(DB::getQueryLog());
        return view('newletter.afternoon_post', compact('ArrViewArticle'));
    } 



    public function Evening_Post_page(Request $request)
    {
        
       
        $ArrViewArticle = DB::table('article')
                    ->JOIN('master_newsletter_articles', 'article.article_id', '=', 'master_newsletter_articles.article_id')
                   
                    ->select('article.*','master_newsletter_articles.master_newsletter_id')
                    //->select('article.*','master_newsletter_articles.master_newsletter_id')
                    ->where('master_newsletter_id', 4)->where('is_deleted', 0)->orderBy('master_newsletter_articles.sequence','ASC')->get();    
        
        return view('newletter.evening_post', compact('ArrViewArticle'));
    } 



    public function Breaking_News_page(Request $request)
    {
        
       
         $ArrViewArticle = DB::table('article')
                    ->JOIN('master_newsletter_articles', 'article.article_id', '=', 'master_newsletter_articles.article_id')
                   
                    ->select('article.*','master_newsletter_articles.master_newsletter_id')
                    //->select('article.*','master_newsletter_articles.master_newsletter_id')
                    ->where('master_newsletter_id', 5)->where('is_deleted', 0)->orderBy('master_newsletter_articles.sequence','ASC')->get();     
        
        return view('newletter.breaking_news', compact('ArrViewArticle'));
    } 




    public function News_Update_page(Request $request)
    {
        
        $ArrViewArticle = DB::table('article')
                    ->JOIN('master_newsletter_articles', 'article.article_id', '=', 'master_newsletter_articles.article_id')
        
                   
                    ->select('article.*','master_newsletter_articles.master_newsletter_id')
                    //->select('article.*','master_newsletter_articles.master_newsletter_id')
                    ->where('master_newsletter_id', 2)->where('is_deleted', 0)->orderBy('master_newsletter_articles.sequence','ASC')->get();  
        
        return view('newletter.news_update', compact('ArrViewArticle'));
    } 
}
