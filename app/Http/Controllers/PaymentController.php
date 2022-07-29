<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use App\Models\FlutterPayment;
use App\Models\PaystackPayment;
use App\Traits\Generics;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    use Generics;

    function __construct(FlutterPayment $flutterPayment, PaystackPayment $paystackPayment)
    {
        $this->middleware('auth');
        $this->flutterPayment = $flutterPayment;
        $this->paystackPayment = $paystackPayment;
    }

    public function index(Request $request){

        
        $user = Auth()->user();
        return view('page.payment', ['user'=>$user]);
    }

    protected function validator(array $data)
    {
        $validator =  Validator::make($data, [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'min:5'],
            'amount' => ['required', 'numeric', 'min:2'],
            'amount' => ['required', 'numeric', 'min:2'],
        ]);

        return $validator;
    }    
      

    public Function storeFlutterPayment(Request $request){
        try{
            $validate = $this->validator($request->all());
            if($validate->fails()){
                return response()->json([
                    'status'=>false,
                    'message'=>$validate->getMessageBag(),
                    'data'=>[]
                ]);
            }

            $user = Auth()->user();
    
            $unique_id = $this->createNewUniqueId('flutter_payments', 'unique_id');
    
            $flutterPaymentDetail = new FlutterPayment;
            $flutterPaymentDetail->unique_id = $unique_id;
            $flutterPaymentDetail->name = $request->input('name');
            $flutterPaymentDetail->email = $request->input('email');
            $flutterPaymentDetail->amount = $request->input('amount');
            $flutterPaymentDetail->phone_number = $request->input('number');
            $flutterPaymentDetail->user_unique_id = $user->unique_id;
            $flutterPaymentDetail->save();

            return response()->json([
                'status'=>true,
                'message'=>'data was successfully created',
                'data'=>$flutterPaymentDetail
            ]);

        }catch(\Exception $exception){
            return response()->json([
                'status'=>false,
                'message'=>['general_error'=>[$exception->getMessage()]],
                'data'=>[]
            ]);
        }

    }




    protected function validatorPaystack(array $data)
    {
        $validator =  Validator::make($data, [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'min:5'],
            'amount' => ['required', 'numeric', 'min:2'],
            'amount' => ['required', 'numeric', 'min:2'],
        ]);

        return $validator;
    } 

    protected function storePaystackDetails(Request $request){
        try{
            $validate = $this->validator($request->all());
            if($validate->fails()){
                return response()->json([
                    'status'=>false,
                    'message'=>$validate->getMessageBag(),
                    'data'=>[]
                ]);
            }

            $user = Auth()->user();
    
            $unique_id = $this->createNewUniqueId('paystack_payments', 'unique_id');

            $paystackPaymentDetail = new PaystackPayment;
            $paystackPaymentDetail->email = $request->input('email');
            $paystackPaymentDetail->amount = $request->input('amount');
            $paystackPaymentDetail->first_name = $request->input('first_name');
            $paystackPaymentDetail->last_name = $request->input('last_name');
            $paystackPaymentDetail->user_unique_id = $user->unique_id;
            $paystackPaymentDetail->save();


            return response()->json([
                'status'=>true,
                'message'=>'data was successfully created',
                'data'=>$paystackPaymentDetail
            ]);

        }catch(\Exception $exception){
            return response()->json([
                'status'=>false,
                'message'=>['general_error'=>[$exception->getMessage()]],
                'data'=>[]
            ]);
        }

    }


    public function verify(Request $request){

        $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$request->transaction_id}/verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            // CURLOPT_SSL_VERIFYHOST => 0,
            // CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer FLWSECK_TEST-13667ff889b83030e7f4b8b14ca4f536-X",
                "Content-Type: application/json"
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            $res = json_decode($response);
            return [$res];
        }



        

    public function paystackIndex(){

        $user = Auth()->user();
        return view('/paystackPayment', ['user'=>$user]);
    }

    public function verify_paystack_payment($reference){

        

        $curl = curl_init();

        curl_setopt_array($curl, array(
            
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_f8d81ec73a2a6d5cba73ec312702c4409118d8c8",
            "Cache-control: no-cache"
        ),
        ));

        $response = curl_exec($curl);       
        $err = curl_error($curl);
        curl_close($curl);

        $new_data = json_decode($response);        
        return $new_data;
    }

    function webHookProcessor(Request $request){
        // If you specified a secret hash, check for the signature
        $secretHash = env('FLUTTERWAVE_HASH_CODE');
        $signature = $request->header('verif-hash');
        if (!$signature || ($signature !== $secretHash)) {
            // This request isn't from Flutterwave; discard
            abort(401);
        }
        $payload = $request->all();
        // It's a good idea to log all received events.
        //Log::info($payload);
        if($payload['event'] === 'charge.completed'){
            $uniqueId = $payload['data']['tx_ref'];
            $status = $payload['data']['status'];

            $paymentDetail = FlutterPayment::where('unique_id', $uniqueId)->where('status', 'pending')->first();
            if($paymentDetail === null){
                abort(401);
            }

            if($status === "successful"){
                $paymentDetail->status === 'completed';
                $paymentDetail->save();

                //update the user
                $user_object = $paymentDetail->user_object;
                $user_object->balance = $user_object->balance + $paymentDetail->amount;
                $user_object->save();
            }
        }
        
        // Do something (that doesn't take too long) with the payload
        return response(200);
    }

    public function adminIndex(){

        $allPayment = $this->flutterPayment::all();
        return view('/admin.adminDashboard', ['allPayment'=>$allPayment]);
    }
}
