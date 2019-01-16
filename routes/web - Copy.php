<?php
use App\Ytube;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

 Route::get('livedata', function () {
    $video = DB::table('youtubevideo')->select()->limit(50)->get();
    return view('video/video',compact('video'));
});

   Route::get('liveDataall',function(){

            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
    set_time_limit(60 * 3);
    $g_YouTubeDataAPIKey = "AIzaSyDgu3JiVzi3HuFX5zc_ii4nhtSy1LvoJRc";
    $channelId = "UC13NIM-ePLUiKf37-ZhVMkw";
    $maxResults = 50;
     // make api request
      $url = 'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelId.'&maxResults='.$maxResults.'&key='.$g_YouTubeDataAPIKey;
     
     $curl = curl_init();
     curl_setopt_array($curl, array(
                 CURLOPT_RETURNTRANSFER => 1,
                 CURLOPT_URL => $url,
                 
                 CURLOPT_SSL_VERIFYPEER => 1,
                 CURLOPT_SSL_VERIFYHOST=> 0,
                
                 CURLOPT_FOLLOWLOCATION => TRUE
                 ));
     $resp = curl_exec($curl);
  

     curl_close($curl);

     if ($resp) {
         echo("Found data. <br>");
         $pages = 1;
         $json = json_decode($resp);
         if ($json) {
             echo("JSON decoded<br>");
             $nextPageToken = $json->nextPageToken;
             $total = $json->pageInfo->totalResults;
             $items = $json->items;
         }
         else
             exit("Error. could not parse JSON." . json_last_error_msg());
         foreach($items as $item) {
            
                      Ytube::create([
           'ytitle' => $item->id->videoId
       ]);         
         }
  
         // second level search using nextpage token
         while ($nextPageToken != null) {
             
              $url = "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=" .
                 $channelId. "&maxResults=50&order=date&type=video&" .
                 "&pageToken=" . $nextPageToken . "&key=" . $g_YouTubeDataAPIKey;
             $nextPageToken = null; // clear current value;
             $curl = curl_init();
             curl_setopt_array($curl, array(
                         CURLOPT_RETURNTRANSFER => 1,
                         CURLOPT_URL => $url,
                         
                         CURLOPT_SSL_VERIFYPEER => 1,
                         CURLOPT_SSL_VERIFYHOST=> 0,
                       
                         CURLOPT_FOLLOWLOCATION => TRUE
                         ));
             $resp = curl_exec($curl);
             if ($resp) {
                 $json = json_decode($resp);
                 if ($json) {
                     $nextPageToken = $json->nextPageToken;
                     $total = $json->pageInfo->totalResults;

                     $items = $json->items;
                     
                 }

         
                 foreach($items as $item) {

                    Ytube::create([
           'ytitle' => $item->id->videoId
       ]);         
                        
                 } // foreach
                 
             } // if $resp
             
             // sometimes pagetoken is filled but no items are fetched , in such a case stop the code
             if (count($items) == 0)
                 $nextPageToken = null;
                 
         } // while $nextPageToken

        

     } // if $resp
     else {
     }
return redirect('video/video');
});






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', ['middleware' => 'guest',   'uses' =>'Auth\AuthController@getLogin']);*/
/*
Route::get('/', function () {
   // return view('welcome');
      return View::make('login');
});
*/
Route::get('/dashboard', ['middleware' => 'auth',   'uses' => function () {
$posts = DB::table('articles')
        ->join('article_author', 'article_author.article_id', '=', 'articles.article_id')
        ->join('authors', 'article_author.author_id', '=', 'authors.author_id')
        ->select('articles.article_id','article_author.author_id','article_author.article_id','authors.*'  ) 
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
 $videos_publish = DB::table('videos')
         ->select('videos.*')
         ->where('videos.valid', '=', '1')  
         ->count();
 
    return view('layouts.dashboard',compact('posts','article_publish','photos_publish','videos_publish') );
}]);

Route::get('/notlog', function () {
    // return view('welcome');
    return view('auth.notlog');
});

Route::get('child', function () {
    return view('layouts/dashboard2');
});

// Article - Module
Route::get('article/create', ['middleware' => 'auth',   'uses' => 'ArticlesController@create']);
Route::resource('newsletterh','NewsletterhController',['only'=>['index','create','store','edit','update']]);
Route::get('article/list/{option}', ['middleware' => 'auth',   'uses' => 'ArticlesController@index']);
Route::get('article/priority', ['middleware' => 'auth',   'uses' => 'ArticlesController@setpriority']);
Route::post('article/update', ['middleware' => 'auth',   'uses' => 'ArticlesController@update' ]);
Route::post('article/image/upload', ['middleware' => 'auth','uses' => 'ArticlesController@imageUpload']);
Route::get('article/image/upload',['middleware' => 'auth','uses' => 'ArticlesController@imageUpload']);
Route::post('article/image/dropzoneUploadFile', ['middleware' => 'auth','uses' => 'ArticlesController@dropzoneUploadFile']);
Route::get('article/image/edit',['middleware' => 'auth','uses' => 'ArticlesController@imageEdit']);
Route::post('article/image/update',['middleware' => 'auth','uses' => 'ArticlesController@storeImageDetail']);
Route::post('article/sort/{id}','ArticlesController@sortImage');
Route::post('article', ['middleware' => 'auth',   'uses' => 'ArticlesController@store' ]);
Route::get('article/publishscheduled','ArticlesController@publishScheduledArticle');
Route::post('article/relatedimage', ['middleware' => 'auth',   'uses' => 'ArticlesController@relatedImage' ]);
Route::post('article/searchRelatedres', ['middleware' => 'auth',   'uses' => 'ArticlesController@searchRelatedres' ]);
Route::get('profile', ['middleware' => 'auth',   'uses' => 'ArticlesController@create' ]);
/*
 *  Delete Image from Create Article Form - Ajax Request
 */
// Log Activity..............
Route::get('logActivity','EventLogController@show');
Route::get('reporteditor','EventLogController@reporteditor');
Route::get('reporteditorsearch','EventLogController@reporteditorsearch');

/*
Topic  urls
 */
Route::get('topics/create', ['middleware' => 'auth',   'uses' => 'TopicsController@create']);
Route::post('topics', ['middleware' => 'auth',   'uses' => 'TopicsController@store' ]);
Route::get('topics/edit/{id}','TopicsController@show');
Route::post('topics/update', ['middleware' => 'auth',   'uses' => 'TopicsController@update' ]);
Route::get('topics', ['middleware' => 'auth',   'uses' => 'TopicsController@index']);
Route::match(['get', 'post'], 'topics/delete', ['middleware' => 'auth', 'uses' => 'TopicsController@destroy']);

Route::get('topic/category/create', ['middleware' => 'auth',   'uses' => 'TopicCategoryController@create']);
Route::post('topic/category', ['middleware' => 'auth',   'uses' => 'TopicCategoryController@store' ]);
Route::get('topic/category/edit/{id}','TopicCategoryController@show');
Route::post('article/category/update', ['middleware' => 'auth',   'uses' => 'TopicCategoryController@update' ]);
Route::get('topic/category/list', ['middleware' => 'auth',   'uses' => 'TopicCategoryController@index']);
Route::match(['get', 'post'], 'topic/category/delete', ['middleware' => 'auth', 'uses' => 'TopicCategoryController@destroy']);


/*
/*
 *  Delete article using ajax
 */
Route::match(['get', 'post'], 'article/delete', ['as' => 'article/delete', 'uses' => 'ArticlesController@destroy']);

/*
 *  Publish image using ajax
 */
Route::match(['get', 'post'], 'article/publish', ['as' => 'article/publish', 'uses' => 'ArticlesController@publishBulk']);
/*
Route::controllers([
    'auth'  =>  'Auth\AuthController',
    'password'  => 'Auth\PasswordController'
]);
*/


// Authentication routes...
Route::get('auth/login', ['middleware' => 'guest',   'uses' =>'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('forgot/password', 'Auth\AuthController@forgotPassword');
Route::post('forgot/password', 'Auth\AuthController@sendResetLink');
Route::get('reset/password/{id}', 'Auth\AuthController@resetPassword');
Route::post('reset/password', 'Auth\AuthController@saveNewPassword');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/*
 * Ajax GET Request for Category DropDowns on Create Article Page
 * Drop Down Request for SubCategories-2/3/4
 *
 * @returns JSON array of Subcategory Elements
 */
Route::get('article/dropdown1', function(){
    $input = Input::get('option');
    $iarrVals = explode('&',$input);
    $secondArr = explode('=',$iarrVals[1]);
    $type = $secondArr[1];
    //$type = Input::get('level');
    //$l = fopen('/home/sudipta/check.log','a+');
    //fwrite($l,"\n Option".$input." L:".$type);

    $key_id = "";

    // To select Right Foreign Key Name
    switch($type){
        case "_two":
             $key_id = 'parent_id';
        break;
        case "_three":
             $key_id = 'parent_id';
        break;
        case "_four":
             $key_id = 'parent_id';
            break;
        default:
            $key_id = 'channel_id';
            break;
    }
    //fwrite($l,"\n Key ID ".$type);
    $arrSubCat = DB::table('category')->where('valid','=','1')->where($key_id, $input)->orderBy('name')->pluck('category_id','name');

    return $arrSubCat;
});

/*
 * Get Relevant Event Array on channel_id passed + null channel_id via Ajax
 */
Route::get('/article/event/', function(){
    $option = Input::get('option');
    $eventList = DB::table('event')
        ->where('channel_id',$option)
        ->where('valid','=','1')
        ->orderBy('start_date','desc')    
        ->pluck('event_id','title');
    return $eventList;
});
/*
 * Get Relevant Campaign Array on channel_id via Ajax
 */
Route::get('/article/campaign/', function(){
    $option = Input::get('option');
    $campaignList = DB::table('campaign')->where('valid','=','1')->where('channel_id',$option)->pluck('campaign_id','title');
    return $campaignList;
});


//Drop Down Request for Author List Population in Create Form
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

Route::get('/article/speakerd/', function(){
    $option = Input::get('option');
    $input = $option;
    $authorList = DB::table('event_speaker')->where('event_id',$input)->where('status','1')->orderBy('name')->pluck('id','name');
    return $authorList;
});
Route::get('/article/speaker/', function(){
    $option = Input::get('option');
    $input = $option;
    $matchText=Input::get('q');
    $authorList = DB::table('event_speaker')->where('event_id',$input)->where('status','1')->where('name', "like", '%'.$matchText . '%')->orderBy('name')->select('id','name')->get();
    return json_encode($authorList);
});

//Ajax Post of New Author Addition
Route::post('article/addAuthor2', function(){
    //print("Here 1");
    //dd("Here");
    //$p = Input::get('option');
    //$p = Input::get('data');;
    //$p = $_POST['author_type'];
    $p = sizeof($_POST);
    //print_r($_POST);
    //$l = fopen('/home/sudipta/check.log','w+');
    //fwrite($l,"TRUCK".$p);

    $data1 = Request::all();
    //print_r($data1);
   $s = $data1['name'].$data1['bio'].$data1['email'].$data1['column_id'].$data1['mobile'].$data1['twitter'].$data1['author_type'];
    //echo "\n Request sz:".$s = sizeof($data1);
    //$s = sizeof($data1);
    //$s = $data1['name'];
    //fwrite($l,"\nTRUCK Size: ".$s);
    /*
     * Add sent Author Details to Author Table as New record
     *
     * @returns Confirmation text message
     */
    //$is = \App\Http\Controllers\ArticlesController->addAut;
    //echo $_POST['author_type'];
    //$input = Input::get('option');
    //$authorList = DB::table('authors')->where('author_type_id',$input)->pluck('author_id','name');
    return;
    //return $authorList;
});

/*
 * Add Ajax sent Author Details to Table
 *
 */

Route::post('article/addAuthor1', function(){

    $s = sizeof($_FILES);
    //$v = $_POST['photo']['name'];
    //print_r($_POST);
    //$l = fopen('/home/sudipta/check.log','a+');
    //fwrite($l,"TRUCK :".$s);

    return;
});


/*
 *  Adds Author from CreateArticle to Authors Table - Ajax Request
 */
Route::match(['get', 'post'], 'article/addAuthor', ['as' => 'article/addAuthor', 'uses' => 'AuthorsController@store']);

Route::match(['get', 'post'], 'article/add-edit-author', ['as' => 'article/add-edit-author', 'uses' => 'AuthorsController@index']);
Route::match(['get', 'post'], 'columnist/edit', ['as' => 'columnist/edit', 'uses' => 'AuthorsController@edit']);

Route::match(['get', 'post'], 'guestauthor/add-edit-gustauthor', ['as' => 'guestauthor/add-edit-gustauthor', 'uses' => 'AuthorsController@gustauthor']);
Route::match(['get', 'post'], 'bwreporters/add-edit-bw-reporters', ['as' => 'bwreporters/add-edit-bw-reporters', 'uses' => 'AuthorsController@bwreporters']);
Route::match(['get', 'post'], 'author/delete', ['as' => 'author/delete', 'uses' => 'AuthorsController@destroy']);

Route::match(['get'], 'author/changestatus', ['as' => 'author/changestatus', 'uses' => 'AuthorsController@changeStatus']);
/*
 *  Adds category from Createcategory to category Table 
 */

Route::resource('category', 'CategoryController');


Route::match(['get', 'post'], 'campaing/add-management', ['as' => 'campaing/add-management', 'uses' => 'CampaingController@index']);
Route::match(['get', 'post'], 'campaing/add', ['as' => 'campaing/add', 'uses' => 'CampaingController@store']);

Route::match(['get', 'post'], 'campaing/edit', ['as' => 'campaing/edit', 'uses' => 'CampaingController@edit']);
Route::match(['get', 'post'], 'campaing/delete', ['as' => 'campaing/delete', 'uses' => 'CampaingController@destroy']);

/*
 *  Adds events from add-new-events to events Table 
 */

Route::match(['get', 'post'], 'event/add-event-management', ['middleware' => 'auth', 'uses' => 'EventController@index']);
Route::match(['get', 'post'], 'event/add', ['middleware' => 'auth', 'uses' => 'EventController@store']);
Route::match(['get', 'post'], 'event/published', ['middleware' => 'auth', 'uses' => 'EventController@published']);
Route::match(['get', 'post'], 'event/edit', ['middleware' => 'auth', 'uses' => 'EventController@edit']);
Route::match(['get', 'post'], 'event/delete', ['middleware' => 'auth', 'uses' => 'EventController@destroy']);
Route::match(['get', 'post'], 'event/update', ['middleware' => 'auth', 'uses' => 'EventController@update']);
Route::get('event/manage-speaker/{id}', ['middleware' => 'auth',   'uses' => 'EventController@manageEventSpeaker']);
Route::post('event/speaker/add', ['middleware' => 'auth',   'uses' => 'EventController@storeEventSpeaker']);
Route::get('event/speaker/{id}', ['middleware' => 'auth',   'uses' => 'EventController@editEventSpeaker']);
Route::post('event/speaker/update', ['middleware' => 'auth',   'uses' => 'EventController@updateEventSpeaker']);
Route::get('api/event/speaker/{id}', ['uses' => 'EventController@apiEventSpeaker']);
Route::match(['get', 'post'], 'event-speaker/addTag', ['middleware' => 'auth', 'uses' => 'EventController@storeTag']);
Route::get('event-speaker/getJson',['middleware' => 'auth', 'uses' => 'EventController@returnJson']);



/*
 * 
 *  Adds Tag from CreateArticle to Tags Table - Ajax Request
 */
//Route::post('article/addTag','TagsController@store');
Route::match(['get', 'post'], 'article/addTag', ['middleware' => 'auth', 'uses' => 'TagsController@store']);
Route::get('tags/getJson',['middleware' => 'auth', 'uses' => 'TagsController@returnJson']);


/*
 *  Adds Images from CreateArticle to Images Table - Ajax Request
 */
Route::match(['get', 'post'], 'article/addPhotos', ['as' => 'article/addPhotos', 'uses' => 'PhotosController@store']);
/*
 *  Delete Image from Create Article Form - Ajax Request
 */
Route::get('photo/crop', ['middleware' => 'auth',   'uses' => 'PhotosController@cropImage']);
Route::get('photo/resize/crop', ['middleware' => 'auth','uses' => 'PhotosController@resizeCropImage']);

Route::match(['get', 'post'], 'article/delPhotos', ['as' => 'article/delPhotos', 'uses' => 'PhotosController@destroy']);

/*
 *  Adds Video from CreateArticle to Images Table - Ajax Request
 */
Route::match(['get', 'post'], 'article/addVideos', ['as' => 'article/addVideos', 'uses' => 'VideosController@store']);

/*
 *  Generates Topics from Article Description
 */
Route::match(['get', 'post'], 'article/generateTopics', ['as' => 'article/generateTopics', 'uses' => 'TopicsController@generate']);

//
Route::get('article/{id}','ArticlesController@show');

/*
 * Feature Box Management
 */
Route::get('/featurebox', ['middleware' => 'auth',   'uses' => 'FeatureBoxController@create']);
Route::post('/featurebox', ['middleware' => 'auth',   'uses' => 'FeatureBoxController@store']);
Route::match(['get', 'post'], 'featurebox/edit', ['as' => 'featurebox/edit', 'uses' => 'FeatureBoxController@edit']);
Route::match(['get', 'post'], 'featurebox/delete', ['as' => 'featurebox/delete', 'uses' => 'FeatureBoxController@destroy']);




/*Album routs start here */
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


/*
 * CMS Rights - Management
 */
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

/*Video routs start here */
Route::get('video/create', ['middleware' => 'auth',   'uses' => 'VideoController@create']);
Route::get('video/list', ['middleware' => 'auth',   'uses' => 'VideoController@index']);
Route::post('video/update', ['middleware' => 'auth',   'uses' => 'VideoController@update' ]);
Route::match(['get', 'post'], 'video/upload', ['middleware' => 'auth',   'uses' => 'VideoController@uploadImg']);
Route::post('video','VideoController@store');
Route::match(['get', 'post'], '/video/delete', ['as' => '/video/delete', 'uses' => 'VideoController@destroy']);
Route::match(['get', 'post'], '/video/publish', ['as' => '/video/publish', 'uses' => 'VideoController@publishBulk']);
Route::get('video/{id}','VideoController@show');
Route::post('video/image/upload', ['middleware' => 'auth',   'uses' => 'VideoController@imageUpload' ]);
Route::get('video/image/upload','VideoController@imageUpload');

/*Video routs end here */

/* Newsletter start here*/
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

/* Api route start here */

Route::match(['get', 'post'], 'api/video','ApiController@videoApi');

/* Api route ends here*/

//Test Purpose - Get
Route::get('newform', function () {
    return view('layouts/testpost');
});

//Test Purpose - Post
Route::get('contact_store', function () {

   $directory = base_path().'/public/high';
    $files = File::allFiles($directory);
    print_r(array_keys($files));die;
      foreach ($files as $attachment) {
            $attached[] = pathinfo($attachment,PATHINFO_BASENAME);
   DB::table('tbl_high_resolution_images')->insert([
                'name' => $attached,
            ]);
        }
    //return view('layouts/testpost');

});
Route::post('newsletter/sendmailer','MasternewsletterController@sendmailer');


