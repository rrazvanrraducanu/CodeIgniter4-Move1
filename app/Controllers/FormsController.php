<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
class FormsController extends Controller
{
    public function index()
	{
	return view('forma');
	}
       public function copy1(){
      /*      $var1="";
            $var2="";
            if($this->request->getPost('text1')){
            $var1=$this->request->getPost('text1');
        }
        else {
            $var1="";
            }
        if($this->request->getPost('submit')){
       $radio=$this->request->getPost('letter');
       if($radio=='lower'){
           $var2=strtolower($var1);
       }elseif($radio=='upper'){
           $var2=strtoupper($var1);
       }
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       return view('forma',$data);
	} 
    * 
    */
            $var1="";
            $var2="";
            if(isset($_POST["text1"])){
            $var1=$_POST["text1"];
        }
        else {
            $var1="";
   }
   if(isset($_POST['submit'])){
       $radio=$_POST['letter'];
       if($radio=='lower'){
           $var2=strtolower($var1);
       }elseif($radio=='upper'){
           $var2=strtoupper($var1);
       }
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       return view('forma',$data);
	} 
 

} 