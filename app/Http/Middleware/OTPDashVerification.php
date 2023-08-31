<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OTPDashVerification
{
    public function handle(Request $request, Closure $next)
    {

            if ($user = auth('dashboard')->user()) {
                if (!$user->phone_verified_at) {
                    // إذا لم يتم التحقق من رقم الهاتف، قم بتوجيه المستخدم إلى صفحة التحقق
                    return redirect()->route('dashboard.verify.form');
                }
            }


        // إذا تم التحقق من رقم الهاتف للحارس الحالي، قم بمتابعة الطلب
        return $next($request);
    }
}
