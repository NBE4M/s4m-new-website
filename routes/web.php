<?php
//use Analytics;
use App\Ytube;
use App\Models\Article;
use Illuminate\Support\Facades\Cache;
//use Redis;
use Illuminate\Support\Facades\Redirect;
Route::group(array('domain' => '{subdomain}.s4m-dev.org'), function () {

    Route::get('/', function ($subdomain) {if ($subdomain=='cms')
        {return view('auth/login');route::auth();
    }else{
    		
        return App::call('App\Http\Controllers\Index\IndexpageController@index');
    
    }});
});

Route::get('auth/login', function () {
return view('auth/login');
});

/*live data*/
// Route::get('livedata1', function () {
// $video = DB::table('youtubevideo')->select()->orderby('publish_date','desc')->paginate(config('constants.recordperpage'));
// return view('video/video',compact('video'));
// });
// Route::get('liveDataall',function(){
// $baseUrl = 'https://www.googleapis.com/youtube/v3/';
//     // https://developers.google.com/youtube/v3/getting-started
//     $apiKey = 'AIzaSyDgu3JiVzi3HuFX5zc_ii4nhtSy1LvoJRc';
//     // If you don't know the channel ID see below
//     $channelId = 'UC13NIM-ePLUiKf37-ZhVMkw';

//     $params = [
//         'id'=> $channelId,
//         'part'=> 'contentDetails',
//         'key'=> $apiKey
//     ];
//      $url = $baseUrl . 'channels?' . http_build_query($params);
//     $json = json_decode(file_get_contents($url), true);

//     $playlist = $json['items'][0]['contentDetails']['relatedPlaylists']['uploads'];

//     $params = [
//         'part'=> 'snippet',
//         'playlistId' => $playlist,
//         'maxResults'=> '10',
//         'key'=> $apiKey
//     ];
//     $url = $baseUrl . 'playlistItems?' . http_build_query($params);
//     $json = json_decode(file_get_contents($url), true);
//     foreach($json['items'] as $video){
//             $user = Ytube::firstOrNew(array(
//             'vid' => $video['snippet']['resourceId']['videoId']
//             ));
//         if ($user->exists) {

//         }else{

//         	if (isset($video['snippet']['thumbnails']['maxres']['url'])) {
//                 $imgthu = $video['snippet']['thumbnails']['maxres']['url'];
//             }
//             else{
//                  $imgthu  = $video['snippet']['thumbnails']['high']['url'];
//             }


//             $user->vid = $video['snippet']['resourceId']['videoId'];
//             $user->title = $video['snippet']['title'];
//             $user->img_thumb = $imgthu;
//             $user->publish_date = $video['snippet']['publishedAt'];
//             $user->save();
//         }
//     }



//   /*  while(isset($json['nextPageToken'])){
//         $nextUrl = $url . '&pageToken=' . $json['nextPageToken'];
//         $json = json_decode(file_get_contents($nextUrl), true);
//         foreach($json['items'] as $video)
//        $user = Ytube::firstOrNew([
//             'vid' => $video['snippet']['resourceId']['videoId'],
//             ]);
//             if ($user->exists) {

//             } else {
//                 Ytube::create([
//             'vid' => $video['snippet']['resourceId']['videoId'],
//             'title' => $video['snippet']['title'],
//             'img_thumb' => $video['snippet']['thumbnails']['high']['url'],
//             'publish_date'=>$video['snippet']['publishedAt']
//         ]);
//             }
//     }*/

//  echo 'data fetched!!!';
// });

/*live data*/
route::auth();
Route::get('/dashboard', ['middleware' => 'auth',   'uses' => function () {
$posts = DB::table('articles')
        ->join('authors', 'articles.author_id', '=', 'authors.author_id')
        ->select('articles.article_id','articles.author_id','authors.*'  )
        ->where('articles.status', '=', 'p')
        ->orderBy('articles.article_id', 'desc')
        ->groupBy('authors.author_id','articles.article_id')
        ->take(5)->get();

 $article_publish = DB::table('articles')
         ->select('articles.*')
         ->where('articles.status', '=', 'p')
         ->count();
 $photos_publish = DB::table('photos')
         ->select('photos.*')
         ->where('photos.valid', '=', '1')
         ->count();
 $videos_publish = DB::table('youtubevideo')
         ->select('youtubevideo.*')
         ->count();
    return view('layouts.dashboard',compact('posts','article_publish','photos_publish','videos_publish') );
}]);
// Article - Module
Route::get('checkschudelar','ArticlesController@checkschudelar');
Route::get('article/create', ['middleware' => 'auth',   'uses' => 'ArticlesController@create']);

Route::get('article/list/{option}', ['middleware' => 'auth',   'uses' => 'ArticlesController@index']);
Route::get('article/priority', ['middleware' => 'auth',   'uses' => 'ArticlesController@setpriority']);
Route::post('article/update', ['middleware' => 'auth',   'uses' => 'ArticlesController@update' ]);
Route::post('article/image/upload', ['middleware' => 'auth','uses' => 'ArticlesController@imageUpload']);
Route::get('article/image/upload',['middleware' => 'auth','uses' => 'ArticlesController@imageUpload']);
Route::post('article/image/dropzoneUploadFil',['middleware' => 'auth','uses' => 'ArticlesController@dropzoneUploadFile']);
Route::get('article/image/edit',['middleware' => 'auth','uses' => 'ArticlesController@imageEdit']);
Route::post('article/image/update',['middleware' => 'auth','uses' => 'ArticlesController@storeImageDetail']);
Route::post('article/sort/{id}','ArticlesController@sortImage');
Route::post('priority/sort','ArticlesController@sortarticle');
Route::post('priority/sortf','ArticlesController@sortfarticle');
Route::post('article', ['middleware' => 'auth',   'uses' => 'ArticlesController@store' ]);
Route::get('article/publishscheduled','EventLogController@publishScheduledArticle');
Route::post('article/relatedimage', ['middleware' => 'auth','uses' => 'ArticlesController@relatedImage' ]);
Route::post('article/searchRelatedres', ['middleware' => 'auth',   'uses' => 'ArticlesController@searchRelatedres' ]);
Route::get('profile', ['middleware' => 'auth',   'uses' => 'ArticlesController@create' ]);
// Log Activity..............
Route::get('logActivity','EventLogController@show');
Route::get('reporteditor','EventLogController@reporteditor');
Route::get('reporteditorsearch','EventLogController@reporteditorsearch');
// Delete article using ajax
Route::match(['get', 'post'], 'article/delete', ['as' => 'article/delete', 'uses' => 'ArticlesController@destroy']);

Route::match(['get', 'post'], 'articlef/delete', ['as' => 'articlef/delete', 'uses' => 'ArticlesController@destroyfeaturenews']);
//Publish image using ajax
Route::match(['get', 'post'], 'article/publish', ['as' => 'article/publish', 'uses' => 'ArticlesController@publishBulk']);
// Authentication routes...
Route::get('/article/authorddd/', function(){

    $option = Input::get('option');
    $input = $option;
    $authorList = DB::table('authors')->where('author_type_id',$input)->where('valid','1')->orderBy('name')->pluck('author_id','name');

    return $authorList;
});
Route::get('/article/authordd/', function(){

    $option = Input::get('option');
    $input = $option;
    $matchText=Input::get('q');
    $authorList = DB::table('authors')->select('author_id as id','name')->where('author_type_id',$input)->where('name', "like", '%'.$matchText . '%')->where('valid','1')->orderBy('name')->get();

    return json_encode($authorList);
});
Route::get('auth/login', ['middleware' => 'guest',   'uses' =>'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('forgot/password', 'Auth\AuthController@forgotPassword');
Route::post('forgot/password', 'Auth\AuthController@sendResetLink');
Route::get('reset/password/{id}', 'Auth\AuthController@resetPassword');
Route::post('reset/password', 'Auth\AuthController@saveNewPassword');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::match(['get', 'post'], 'article/addAuthor', ['as' => 'article/addAuthor', 'uses' => 'AuthorsController@store']);
Route::match(['get', 'post'], 'article/add-edit-author', ['as' => 'article/add-edit-author', 'uses' => 'AuthorsController@index']);
Route::match(['get', 'post'], 'columnist/edit', ['as' => 'columnist/edit', 'uses' => 'AuthorsController@edit']);
Route::match(['get', 'post'], 'guestauthor/add-edit-gustauthor', ['as' => 'guestauthor/add-edit-gustauthor', 'uses' => 'AuthorsController@gustauthor']);
Route::match(['get', 'post'], 'bwreporters/add-edit-bw-reporters', ['as' => 'bwreporters/add-edit-bw-reporters', 'uses' => 'AuthorsController@bwreporters']);
Route::match(['get', 'post'], 'author/delete', ['as' => 'author/delete', 'uses' => 'AuthorsController@destroy']);
Route::match(['get'], 'author/changestatus', ['as' => 'author/changestatus', 'uses' => 'AuthorsController@changeStatus']);
Route::resource('category', 'CategoryController');
//Adds events from add-new-events to events Table
Route::match(['get', 'post'], 'article/addTag', ['middleware' => 'auth', 'uses' => 'TagsController@store']);
Route::get('tags/getJson',['middleware' => 'auth', 'uses' => 'TagsController@returnJson']);
// Adds Images from CreateArticle to Images Table - Ajax Request
Route::match(['get', 'post'], 'article/addPhotos', ['as' => 'article/addPhotos', 'uses' => 'PhotosController@store']);
 // Delete Image from Create Article Form - Ajax Request
Route::get('photo/crop', ['middleware' => 'auth',   'uses' => 'PhotosController@cropImage']);
Route::get('photo/resize/crop', ['middleware' => 'auth','uses' => 'PhotosController@resizeCropImage']);
Route::match(['get', 'post'], 'article/delPhotos', ['as' => 'article/delPhotos', 'uses' => 'PhotosController@destroy']);
// Generates Topics from Article Description
Route::get('article/{id}','ArticlesController@show');
//Feature Box Management
Route::get('album/create', ['middleware' => 'auth',   'uses' => 'AlbumController@create']);
Route::get('album/list/{option}', ['middleware' => 'auth',   'uses' => 'AlbumController@index']);
Route::post('album/update', ['middleware' => 'auth',   'uses' => 'AlbumController@update' ]);
Route::match(['get', 'post'], 'album/upload', ['middleware' => 'auth',   'uses' => 'AlbumController@uploadImg']);
Route::post('album', ['middleware' => 'auth',   'uses' => 'AlbumController@store' ]);
Route::match(['get', 'post'], '/album/delete', ['as' => '/album/delete', 'uses' => 'AlbumController@destroy']);
Route::match(['get', 'post'], '/album/publish', ['as' => '/album/publish', 'uses' => 'AlbumController@publishBulk']);
Route::get('album/{id}','AlbumController@show');
Route::post('album/image/upload', ['middleware' => 'auth',   'uses' => 'AlbumController@imageUpload' ]);
Route::get('album/image/upload',['middleware' => 'auth',   'uses' => 'AlbumController@imageUpload' ]);
Route::post('album/sort/{id}','AlbumController@sortImage');
//CMS Rights - Management
Route::get('rights/', ['middleware' => 'auth',   'uses' => 'RightsController@index']);
//Route::get('rights/edit', ['middleware' => 'auth',   'uses' => 'RightsController@edit']);
Route::post('rights', ['middleware' => 'auth',   'uses' => 'RightsController@store' ]);
Route::post('rights/manage', ['middleware' => 'auth',   'uses' => 'RightsController@update' ]);
Route::match(['get', 'post'], '/rights/delete', ['as' => '/rights/delete', 'uses' => 'RightsController@destroy']);
Route::get('rights/{id}','RightsController@edit');
// Roles management
Route::get('roles/manage',['middleware' => 'auth','uses' => 'RightsController@manageRole']);
Route::get('roles/add', ['middleware' => 'auth',   'uses' => 'RightsController@addRole']);
Route::get('roles/edit/{id}', ['middleware' => 'auth',   'uses' => 'RightsController@editRole']);
Route::post('roles/store', ['middleware' => 'auth',   'uses' => 'RightsController@storeRole']);
Route::post('roles/update', ['middleware' => 'auth',   'uses' => 'RightsController@updateRole']);
Route::match(['get', 'post'], 'roles/delete', ['as' => 'roles/delete', 'uses' => 'RightsController@destroyRole']);
Route::get('roles/get/channel/permission',['middleware' => 'auth','uses' => 'RightsController@getRoleChannelPermission']);
/* Newsletter start here*/
Route::resource('newsletterh','NewsletterhController',['only'=>['index','create','store','edit','update']]);
Route::get('newsletter/create', ['middleware' => 'auth',   'uses' => 'MasternewsletterController@create']);
Route::get('newsletter/manage/{id}',['middleware' => 'auth',   'uses' => 'MasternewsletterController@show']);
Route::get('newsletter', ['middleware' => 'auth',   'uses' => 'MasternewsletterController@index']);
Route::post('newsletter', ['middleware' => 'auth',   'uses' => 'MasternewsletterController@store' ]);
Route::post('newsletter/update', ['middleware' => 'auth',   'uses' => 'MasternewsletterController@update' ]);
Route::post('newsletter/assign', ['middleware' => 'auth',   'uses' => 'MasternewsletterController@assign' ]);
Route::post('newsletter/sort/{id}', ['middleware' => 'auth',   'uses' => 'MasternewsletterController@sortNewsletter' ]);
Route::match(['get', 'post'], 'newsletter/delete', ['middleware' => 'auth', 'uses' => 'MasternewsletterController@destroy']);
Route::match(['get', 'post'], 'newsletter/deletens', ['middleware' => 'auth', 'uses' => 'MasternewsletterController@destroyNewsletter']);
Route::match(['get'], 'newsletter/subscriber', ['middleware' => 'auth', 'uses' => 'NewsletterSubscriberController@index']);
Route::match(['get'], 'newsletter/subscriber/exportCsv', ['middleware' => 'auth', 'uses' => 'NewsletterSubscriberController@exportCsv']);
/* Newsletter end here*/
Route::post('newsletter/sendmailer','MasternewsletterController@sendmailer');
/*menu*/
Route::resource('/menu', 'MenuController');
Route::post('menu/sort/{id}', 'MenuController@sortMenu');
Route::post('menu/updatestatus', 'MenuController@updatestatus');
Route::match(['get', 'post'], '/video/delete', ['as' => '/video/delete', 'uses' => 'VideoController@destroy']);
/*banner*/


Route::resource('/banner', 'BannerController');
Route::resource('/createevents', 'CreateventController');
Route::resource('mailer', 'MailerController');
/*Video routs start here */
Route::get('video/create', ['middleware' => 'auth',   'uses' => 'VideoController@create']);
Route::get('video/list', ['middleware' => 'auth',   'uses' => 'VideoController@index']);
Route::post('video/update', ['middleware' => 'auth',   'uses' => 'VideoController@update' ]);
Route::match(['get', 'post'], 'video/upload', ['middleware' => 'auth',   'uses' => 'VideoController@uploadImg']);
Route::post('video','VideoController@store');
Route::match(['get', 'post'], '/video/publish', ['as' => '/video/publish', 'uses' => 'VideoController@publishBulk']);
Route::get('video/{id}','VideoController@show');
Route::post('video/image/upload', ['middleware' => 'auth',   'uses' => 'VideoController@imageUpload' ]);
Route::get('video/image/upload','VideoController@imageUpload');

/*Video routs end here */
/*menu*/


/*front routes*/
/*contact pages*/
Route::get('/contact-us.html', 'Contactus\ContactusController@Contactus_page');
Route::get('/privacy-policy.html', 'Contactus\ContactusController@privacy_page');
Route::get('/sitemap.html', 'Contactus\ContactusController@sitemap');
Route::get('/term-condition.html', 'Contactus\ContactusController@term_page');
Route::get('/gdpr-compliance.html', 'Contactus\ContactusController@gdpr_page');
Route::get('/cookie-policy.html', 'Contactus\ContactusController@cookie_page');
Route::post('/contact-info', 'Contactus\ContactusController@Contactus_Submited');
 Route::post('/subscribenewsletter-info','Contactus\ContactusController@Subscribenewsletter_Submited');
/*contact pages*/
// Route::get('all-interviews.html', function(){
//         $href = "https://www.exchange4media.com/interviews.html";
//         return Redirect::to($href, 301);
// });
// Route::get('out-of-home_26.html', function(){
//         $href = "https://www.exchange4media.com/out-of-home-news.html";
//         return Redirect::to($href, 301);
// });

// Route::get('advertising_1.html', function(){
//         $href = "https://www.exchange4media.com/advertising-news.html";
//         return Redirect::to($href, 301);
// });



// Route::get('media-radio_7.html', function(){
//         $href = "https://www.exchange4media.com/media-radio-news.html";
//         return Redirect::to($href, 301);
// });

// Route::get('media-print_5.html', function(){
//         $href = "https://www.exchange4media.com/media-print-news.html";
//         return Redirect::to($href, 301);
// });

// Route::get('digital_4.html', function(){
//         $href = "https://www.exchange4media.com/digital-news.html";
//         return Redirect::to($href, 301);
// });

// Route::get('all-articles.html','Article\ArticleController@all_Article_listing_page');


//  Route::get('topic/{title}_{id}.html',function(){
//         $href = "https://www.exchange4media.com/";
//         return Redirect::to($href, 301);
// });

// Route::get('videos/creative-chowcase.html', function(){
//         $href = "https://www.exchange4media.com/creative-showcase.html";
//         return Redirect::to($href, 301);
// });
// Route::get('all-pthotos.html', function(){
//         $href = "https://www.exchange4media.com/photos.html";
//         return Redirect::to($href, 301);
// });
// Route::get('all-interviews.html', function(){
//         $href = "https://www.exchange4media.com/interviews.html";
//         return Redirect::to($href, 301);
// });
Route::get('newsletter/afternoonnewsletter.html','LetterController\LetterController@Afternoon_Post_page');
Route::get('newsletter/eveningnewsletter.html','LetterController\LetterController@Evening_Post_page');
Route::get('newsletter/breakingnewsletter.html','LetterController\LetterController@Breaking_News_page');
Route::get('newsletter/newsupdatenewsletter.html','LetterController\LetterController@News_Update_page');
Route::get('newsletter/morningnewsletter.html','LetterController\LetterController@Morning_N_Page_New4');

Route::get('videos.html','Video\VideoController@Video_listing_page');
Route::get('videos/{title}-{id}.html','Video\VideoController@Video_landing_page')->where('title', '(.*)');
Route::get('creative-showcase/{title}-{id}.html','Video\VideoController@Videoshowcase_landing_page')->where('title', '(.*)');
Route::get('creative-showcase.html','Video\VideoController@Create_Showcase_Video_listing_page');
/*photogaller*/
Route::get('photogallery/{title}-{id}.html', function($title,$id){
        $href = "https://www.exchange4media.com/photo/".$title.'-'.$id.".html";
        return Redirect::to($href, 301);
});
// Route::get('photos.html','Photogallery\PhotogalleryController@Pthoto_Gallery_listing_page');
Route::get('photos.html','Index\IndexpageController@photogallery');
Route::get('photo/{title}-{id}.html','Index\IndexpageController@galleryExplore')->where('title', '(.*)');
/*photogaller*/
/*articles*/
Route::get('latest-news.html','Article\ArticleController@Latest_Article_listing_page')->where('section', '(.*)');
Route::get('feature-news.html','Article\ArticleController@Feature_Article_listing_page')->where('section', '(.*)');
Route::get('articles/{publish_date}.html','Article\ArticleController@Interview_Article_listing_page');
Route::get('author/{name}-{id}.html','Article\ArticleController@Author_wise_Article_listing_page')->where('name', '(.*)');
Route::get('tags/{tag}.html','Article\ArticleController@Tag_wise_Article_listing_page');
Route::get('interviews.html','Article\ArticleController@Interview_Article_listing_page')->where('section', '(.*)');
Route::get('guest-column.html','Article\ArticleController@guestcoloum_Article_listing_page')->where('section', '(.*)');

Route::get('guest-articles.html','Article\ArticleController@gueststory_Article_listing_page');

Route::get('{section}/{title}-{id}.html','Index\IndexpageController@story')->where('title', '(.*)');
// Route::get('/amp/{section}-news/{title}-{id}.html','Article\ArticleController@Amp_Article_landing_page')->where('section', '(.*)')->where('title', '(.*)');
// Route::get('{section}-news/{title}-{id}.html','Article\ArticleController@Article_landing_page')->where('section', '(.*)')->where('title', '(.*)');

Route::get('{section}-news.html','Index\IndexpageController@section')->where('section', '(.*)');
Route::get('guest-author.html','Article\ArticleController@Author_listing_page');
Route::get('author.html','Article\ArticleController@Authorrepo_listing_page');
// Route::get('{section}-news', function($section){
//         $section = strtolower($section);
//         $href = "/".$section."-news.html";
//         return Redirect::to($href, 301);
// });



Route::get('interviews.html','Article\ArticleController@Interview_Article_listing_page')->where('section', '(.*)');
Route::get('{section}_{id}.html','Article\ArticleController@Category_Article_listing_page')->where('section', '(.*)');
Route::get('countmostread','Article\ArticleController@countmostread');
Route::get('counttags','Article\ArticleController@counttags');
Route::get('editor-picks.html','Article\ArticleController@Editor_Article_listing_page')->where('section', '(.*)');
/*search*/
Route::get('/search', 'Article\ArticleController@searcharticle');
Route::get('/autoComplete', 'Article\ArticleController@autoComplete');
Route::get('/tags.html','Contactus\ContactusController@tags');
Route::get('/tags','Contactus\ContactusController@tags');
Route::post('/tags_list/{name}','Contactus\ContactusController@tags_list');
Route::get('{id}.html','EventLogController@priview')->where('id', '(.*)');
/*rss*/
Route::get('rss/article/{id}','Rss\RssController@individualRss');
Route::get('rss/latestfullstory','Rss\RssController@latestFullStoryRss');
Route::get('rss/facebookinstantarticles','Rss\RssController@facebookinstantarticles');
Route::get('rss/facebookinstantarticlesnew','Rss\RssController@facebookinstantarticlesnew');
Route::get('rss/category/{id}','Rss\RssController@categoryLatestRss');
Route::get('rss/years/{year}','Rss\RssController@perYearRss');
Route::get('rss/months/{month}','Rss\RssController@permonthRss');
Route::get('rss/google-news-sitemap','Rss\RssController@google_news_sitemap');
Route::get('rss/category-news-sitemap','Rss\RssController@category_news_sitemap');
Route::get('rss/sitemap-date/{cdate}','Rss\RssController@sitemap_date');
Route::get('rss/all-sitemap.xml','Rss\RssController@alldatesite');
Route::get('rss/happening','Rss\RssController@happening');
/*rss*/

Route::get('cacheclear', function(){
     $exitCode = Artisan::call('cache:clear');
});
Route::get('create_photojson','Photogallery\PhotogalleryController@create_photojson');

Route::get('/logsdelete', function() {
    $exitCode = Artisan::call('logs:clear');
});
Route::get('cachealbum', function(){
     $newcode = Cache::forget('sharealbum');;
});

/*Route::get('/show-cache', function() {
 $codeArray= ['21823'];
 $rows = DB::table('article')->select('title','article_id','category_name')->whereIn('article_id',  $codeArray)->get();

foreach($rows as $row) {
    DB::table('articles')
            ->where('article_id','=', $row->article_id)
            ->update(['url' => config('constants.SiteBaseurl').strtolower($row->category_name).'-news'.'/'.str_slug($row->title).'-'.$row->article_id.'.html']);

}
});*/







