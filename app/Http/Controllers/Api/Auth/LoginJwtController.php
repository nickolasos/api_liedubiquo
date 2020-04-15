<?php

namespace App\Http\Controllers\Api\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Auth;
use App\Member;


class LoginJwtController extends Controller
{
        public function password_verify($password, $hash) {
            
            if (!function_exists('crypt')) {
                trigger_error("Crypt must be loaded for password_verify to function", E_USER_WARNING);
                return false;
            }
            $ret = crypt($password, $hash);
            if (!is_string($ret) || strlen($ret) != strlen($hash) || strlen($ret) <= 13) {
                return false;
            }

            $status = 0;
            for ($i = 0; $i < strlen($ret); $i++) {
                $status |= (ord($ret[$i]) ^ ord($hash[$i]));
            }

            return $status === 0;
        }
    //
    public function login_alternativo(Request $request){
        $credentials = $request->all(['email','password']);
        $member = new Member();
        $hash = $member->get_member_hash($credentials['email']);

        if(!$this->password_verify($credentials['password'],$hash)){
            $erro =["email"=>"erro_credenciais"];
            //return" credenciais invalidas";
            return json_encode($erro);
        }
        return $member->get_member($credentials['email']);
    }

    public function login(Request $request){
        $credentials = $request->all(['email','password']);

        
        if ($token = \JWTAuth::login_alternativo($credentials)){
            echo "OK";
        }
        
        
        if(!$token= auth('api')->attempt($credentials)){
        }
        //return "funcionou !!";
        return response()->json(
            [
                'token'=> $token
            ]);
    }
}
