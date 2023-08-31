<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OTPVerification
{
    public function handle(Request $request, Closure $next)
    {

            if ($user = auth('panel')->user()) {
                if (!$user->phone_verified_at) {
                    // إذا لم يتم التحقق من رقم الهاتف، قم بتوجيه المستخدم إلى صفحة التحقق
                    return redirect()->route('panel.verify.form');
                }
            }


        // إذا تم التحقق من رقم الهاتف للحارس الحالي، قم بمتابعة الطلب
        return $next($request);
    }	
}
