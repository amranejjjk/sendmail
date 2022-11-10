<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;

class emailcontroller extends Controller
{
    public function sendEmailOrder(Request $request){
       
        $token=Str::random(40);
        $domaine=URL::to('/');
        $url=$domaine.'/?token='.$token;
        $data=[
            'cpp'=>$request->cpp,
            'coins'=>$request->coins,
            'number'=>$request->number,
            'name'=>$request->name
            
        ];
        Mail::send('email_coins',['data'=>$data],function   ($message)use ($data)  {
            $message->from('us@example.com', 'Laravel');
           $message->to('algeriansweater@gmail.com');
           $message->subject('Selling Coins');
           
           
        });
        return response()->json([
            'msg'=>'سنقوم بمراجعة طلبك',
            'status'=>'yes',
           
        ]);
    }

}
