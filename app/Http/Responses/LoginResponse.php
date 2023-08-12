<?php 

namespace App\Http\Responses;
 
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
 
class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        $redirectTo;

        $role = auth()->user()->getRoleNames()->first();

        if(!$role || $role === 'user'){
            $redirectTo = '/user/dashbaord';
        }

        if($role === 'admin' || $role === 'manager' || $role === 'editor'){
            $redirectTo = '/admin/dashbaord';
        }

        if($role === 'vendor'){
            $redirectTo = '/vendor/dashbaord';
        }

        if($role === 'designer'){
            $redirectTo = '/designer/dashbaord';
        }
 
        return redirect()->intended($redirectTo);
    }
}