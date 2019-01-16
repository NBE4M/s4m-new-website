<?php

namespace App\Http\Controllers;
use Redirect;
use App\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Right;
use Auth;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() {
        $this->middleware('auth');
        $this->rightObj = new Right();
    }
    
    public function index()
    {
        $request=new Request();
        // $data=$request->all();
        //$t=Input::get();
        //dd($t); 
        
        /* Right mgmt start */
        
        $rightId = 8;
        $currentChannelId = $this->rightObj->getCurrnetChannelId($rightId);
        $channels = $this->rightObj->getAllowedChannels($rightId);
        if (!$this->rightObj->checkRights($currentChannelId, $rightId))
            return redirect('/dashboard');
        /* Right mgmt end */ 
        $parentId=0;
        $parents=array();
        //echo '1'; exit;
        $query= DB::table('mailerreport')->select('*')->where('valid','=', '1')->orderby('mailer_id','desc');
        
        
       if(isset($_GET['keyword'])){
            $queryed = $_GET['keyword'];
            $query->where('subject', 'LIKE', '%'.$queryed.'%');
        }
        
        if(Input::get('id')){
          
            $parent=Mailer::find(Input::get('id'));
            $id=trim($parent->path,'-'); 
            $idArray=explode('-',$id);
            //echo '1';
            $parents=Mailer::select('mailer_id','name')->whereIn('mailer_id',$idArray)->get();
            //echo '444'.count($parents); exit;
        }
       
        $categories=$query->get();
        $uid = Session::get('users')->id;
        return view('categorymaster.mailermaster',compact('categories','channels','currentChannelId','parentId','parents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $rightId = 8;
        if(Input::get('id')){
            $parentId=Input::get('id');
            $currentChannelId=$this->getChannelFromCategoryId($parentId);
        }            
        else{    
            $parentId=0;
            $currentChannelId = $this->rightObj->getCurrnetChannelId($rightId);
        }    
        $channels = $this->rightObj->getAllowedChannels($rightId);
        
        $parents=array();
        
        if (!$this->rightObj->checkRights($currentChannelId, $rightId))
            return redirect('/dashboard');
       
       return view('categorymaster.addmailer',compact('channels','currentChannelId','parentId','parents'));
       
        //Save Request Tuple in Table - Validate First
        // ----- Not Being used for now ----//
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //echo $request->user()->id;
        ///print_r($request->all()); exit;
        
         /* Right mgmt start */
        $rightId = 8;
        if($request->parent_id)
            $currentChannelId =$this->getChannelFromCategoryId($request->parent_id);
        else
            $currentChannelId =$request->channel;
        
        
        if (!$this->rightObj->checkRights($currentChannelId, $rightId))
            return redirect('/dashboard');
        /* Right mgmt end */     
           
        $mailer=new Mailer();
        $mailer->subject=$request->subject;
        $mailer->link=$request->url;
        $mailer->create_date=$request->cdate;
        $mailer->sales_person_name=$request->salesp_name;
        $mailer->type=$request->type;
        $mailer->create_by=$request->emp_name;
        $mailer->valid='1';
        $mailer->save();
        Session::flash('message', 'Your data has been successfully add.');
            return Redirect::to('mailer');
       
    }
    
    function getChannelFromCategoryId(){
        return '1';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        echo 'edit';
        //
        //$asd = fopen("/home/sudipta/log.log", 'a+');
        if (isset($_GET['option'])) {
            $id = $_GET['option'];
        }
        //fwrite($asd, " EDIT ID Passed ::" .$id  . "\n\n");
        $editAuthor = Author::where('author_id',$id)
            ->select('authors.*')
            ->get();

        
        echo json_encode(array($editAuthor));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {   
        $delArr = explode(',', $id);
        foreach ($delArr as $d) {
            $valid='0';
            $deleteAl= [    
            'valid' => $valid  
            ];
            DB::table('mailerreport')
            ->where('mailer_id',$d)
            ->update($deleteAl);       
        }
        return;
    }
     
   
}
