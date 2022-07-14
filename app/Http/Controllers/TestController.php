<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    /*
    *
    *
    *
    */
    public function index($value='')
    {
        return view('welcome');
    }

    public function generateOTP(Request $request)
    {
        try {
            $request->validate([
                'mobile' => 'required|digits:10'
            ]);
            $response = Http::asForm()->post('https://medibhai.com/api/cowinAPI/generate_OTP', [
                'mobile_no' => $request->mobile,
            ]);
            $resBody = json_decode($response->body());
            return $resBody;
        } catch (Exception $e) {
            throw new GeneralException(__('There was a problem generating OTP.'));
        }
            
    }
}
