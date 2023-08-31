<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OTPController extends Controller
{
    public function showdashboardVerifyForm()
    {
		$user = auth('dashboard')->user();
		if(!empty($user)){
        return view('dashboardverify');
		}else{
            return redirect('/');
		}
    }

    public function dashboardverify(Request $request)
    {
        $user = auth('dashboard')->user();

        if ($request->input('otp') == $user->otp) {
            $user->phone_verified_at = now();
            $user->save();

            return redirect('dashboard');
        }

        return back()->withErrors('Invalid OTP.');
    }
    public function showpanelVerifyForm()
    {
        $user = auth('panel')->user();

		if(!empty($user)){
        return view('panelverify');
		}else{
            return redirect('/');
		}		
    }

    public function panelverify(Request $request)
    {
        $user = auth('panel')->user();

        if ($request->input('otp') == $user->otp) {
            $user->phone_verified_at = now();
            $user->save();

            return redirect('panel');
        }

        return back()->withErrors('Invalid OTP.');
    }	
}