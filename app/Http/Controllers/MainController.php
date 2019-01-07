<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;            
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
        $ret = null;
	
    	return view("index");
    }
    
   
    
    
    public function getBomb(Request $request)
	{
           $req = $request->all();
		   #dd($req);
           $ret = "";
               
                $validator = Validator::make($req, [
                             'em' => 'required|email',
                             'msg' => 'required',
                             'title' => 'required',
                   ]);
         
                 if($validator->fails())
                  {
                       $ret = ["op" => "mailer","status" => "error-validation"];
                       
                 }
                
                 else
                 {              	 
                       $msg = $req["msg"];
                       $em = $req["em"];
                       $title = $req["title"];

                       $this->helpers->sendEmail($em,$title,['msg' => $msg],'emails.cp_alert','view'); 
			
                       $ret = ["op" => "mailer","status" => "ok"];       
                  }       
           return json_encode($ret);                                                                                            
	}
	
}
