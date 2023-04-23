<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\KYC;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Helpers\StaticData as StaticData;
use Validator;

use Session;
class ProfileController extends Controller
{
    
    public function index()
    {
        $tab = 1;
        if(isset($_GET['tab'])){
            $tab = $_GET['tab'];
        }
        $addressProof = StaticData::addressProof();
        $identityProof = StaticData::identityProof();

        $user = User::find(auth()->user()->id);

        $kyc = KYC::where('user_id', '=', auth()->user()->id)->orderBy('id', 'Desc')->get();
        
        $kycFile = [];
        if($kyc){
            foreach($kyc as  $kDetail){
                $kycFile[($kDetail->type == 1)?'identity_proof':'address_proof'] = URL('public/upload/kyc/'.$kDetail->file_name);
            }
        }
      

        return view('dashboard', compact('tab', 'addressProof', 'identityProof', 'user','kycFile'));
    }

    public function edit(Request  $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'date_of_birth' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'country' => 'required',
            'language' => 'required',

        ]);

        if($validator->fails()){
            return redirect('dashboard')
                        ->withErrors($validator)
                        ->withInput();
            
        }

        $postData = $request->all();
        $input['name'] = $postData['name'];
        // $input['email'] = $user->email;
        // $input['mobile'] = $user->mobile;
        $input['email'] = $postData['email'];
        $input['mobile'] = $postData['mobile'];
        $input['dob'] = $postData['date_of_birth'];
        $input['city'] = $postData['city'];
        $input['country'] = $postData['country'];
        $input['state'] = $postData['state'];
        $input['pincode'] = $postData['pincode'];
        $input['language'] = $postData['language'];
        $input['time_zone'] = isset($postData['time_zone'])?$postData['time_zone']:'';
        $input['address'] = isset($postData['address'])?$postData['address']:'';

        $updateUser = User::where('email', 'LIKE', auth()->user()->email)->update($input);

        if($updateUser){
            Session::flash('message', 'Profile Updated!');
            Session::flash('status', true);
        } else {
            Session::flash('message', 'Profile Not Updated!');
            Session::flash('status', false);
            $messages = ['status'=>'false', 'message'=>'User Not Updated'];
            $response = \Response::json($messages, 200);
        }
        return redirect('dashboard');

        return $response;
     
    }

    public function kyc(Request $request){
        // print_r($request->all());exit;
        $validator = Validator::make($request->all(), [
            'identity_proof' => 'required',
            'identity_proof_file' => 'required',
            'address_proof' => 'required',
            'address_proof_file' => 'required'

        ]);
        if($validator->fails()){
            return redirect('dashboard?tab=2')
                        ->withErrors($validator)
                        ->withInput();
        }
        $postData = $request->all();
        $message = '';
        $input = [];
        if($request->hasFile('identity_proof_file')){
            $original_filename = $request->file('identity_proof_file')->getClientOriginalName();
            $original_filename_arr = explode('.', $original_filename);
            $file_ext = end($original_filename_arr);
            $file_type = $request->file('identity_proof_file')->getMimeType();
            if($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'image/webp'){
                $identityProof = str_replace("_"," ",$postData['identity_proof']);
                $kycType = ucwords($identityProof);

                
            	$image =$postData['identity_proof'].'-'.auth()->user()->id.'-'.time(). '.'.$file_ext;
                if ($request->file('identity_proof_file')->move('./public/upload/kyc/', $image)) {

                    $input['identity_proof']['user_id'] = auth()->user()->id;
                    $input['identity_proof']['kyc_type'] = $postData['identity_proof'];
                    $input['identity_proof']['file_name'] = $image;
                    $input['identity_proof']['type'] = 1;
                    $input['identity_proof']['created_at'] = date('Y-m-d H:i:s');
                } else {
                    $message .= 'Identity Proof Not Saved,';
                }
            }else{
                $message .= 'Identity Proof Invalid File Format,';
                // return $this->sendError('Enter Valid File Format');
                //return json_encode(['message'=>'Enter Valid File Format', 'status'=>'fail']);
            }
        } else {
            $message .= 'Identity Proof File Not Found,';   
        }
        // echo $message;
        
        if($request->hasFile('address_proof_file')){
            $original_filename = $request->file('address_proof_file')->getClientOriginalName();
            $original_filename_arr = explode('.', $original_filename);
            $file_ext = end($original_filename_arr);
            $file_type = $request->file('address_proof_file')->getMimeType();
            if($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'image/webp'){
                               
                $image = $postData['address_proof'].'-'.auth()->user()->id.'-'.time(). '.'.$file_ext;
                if ($request->file('address_proof_file')->move('./public/upload/kyc/', $image)) {
                    $input['address_proof']['file_name'] = $image;
                    $input['address_proof']['kyc_type'] = $postData['address_proof'];
                    $input['address_proof']['type'] = 2;
                    $input['address_proof']['user_id'] = auth()->user()->id;
                    $input['address_proof']['created_at'] = date('Y-m-d H:i:s');
                } else {
                    $message .= ' Address Proof Not Saved';
                }
            }else{
                // return $this->sendError('Enter Valid File Format');
                //return json_encode(['message'=>'Enter Valid File Format', 'status'=>'fail']);
            }
        }
        // print_r($input);exit;
        if(count($input)>0){
            $isValid = true;
            foreach($input as $key => $value){
                
                $query = KYC::where('user_id', '=', auth()->user()->id)->where('type', '=', $value['type'])->orderBy('id', 'desc')->first();
                if($query){
                    $kyc = KYC::where('id', '=', $query->id)->update($value);
                } else {
                    $kyc = KYC::insert($value);
                }
                $proof = str_replace("_"," ",$key);
                $proof = ucwords($proof);
                if($kyc){
                    $message .= ', '.$proof.' Uploaded';
                   
                } else {
                    $isValid = false;
                    $message .= ', '.$proof.' Not Uploaded';
                
                } 
            }
   
           if($isValid){

               Session::flash('message', 'Address & Identity Proof Uploaded');
               Session::flash('status', true);
            } else {
               Session::flash('message', $message);
               Session::flash('status', false);
           }
        } else {
            Session::flash('message', $message.' and Not Uploaded');
            Session::flash('status', false);
        }

        return redirect('dashboard?tab=2');
        
    }

}
