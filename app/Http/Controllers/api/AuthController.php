<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\ModelUser;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Validator, DB, Hash, Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Mail\Message;
use Auth;

class AuthController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    /**
     * API Register
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
        $rules = [
            'username' => 'required|max:255|unique:user',
            'password' => 'required|max:255'
        ];
        $validator = Validator::make($credentials, $rules);
        if($validator->fails()) {
            return response()->json(['success'=> false, 'error'=> $validator->messages()]);
        }
        $name = $request->username;
        $password = $request->password;
        
        $user = ModelUser::create(['username' => $name, 'password' => Hash::make($password)]);
        // Mail::send('email.verify', ['name' => $name, 'verification_code' => $verification_code],
        //     function($mail) use ($email, $name, $subject){
        //         $mail->from(getenv('FROM_EMAIL_ADDRESS'), "rode-603b42@inbox.mailtrap.io");
        //         $mail->to($email, $name);
        //         $mail->subject($subject);
        //     });
        return response()->json(['success'=> true, 'message'=> 'Sign Up Berhasil.']);
    }

    /**
     * API Login, on success return JWT Auth token
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // $token = auth('user')->attempt($credentials);
        
        
        // $credentials['is_verified'] = 1;
        
        try {
            // attempt to verify the credentials and create a token for the user
            // config()->set( 'auth.defaults.guard', 'api' );
            if (! $token = auth('user-api')->attempt($credentials)) {
                return response()->json(['success' => false, 'error' => 'We cant find an account with this credentials. Please make sure you entered the right information and you have verified your email address.']);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['success' => false, 'error' => 'Failed to login, please try again.']);
        }
        // all good so return the token
        $id = Auth::guard('user-api')->id();
        $user = ModelUser::where('id_user', $id)->first();
        // return $user;
        return response()->json(['success' => true, 'data'=> [ 'token' => $token , 'token_type' => 'bearer', 'expires_in' => auth('user-api')->factory()->getTTL() * 60, 'user_id' => $id ]]);
    }
    /**
     * Log out
     * Invalidate the token, so user cannot use it anymore
     * They have to relogin to get a new token
     *
     * @param Request $request
     */
    public function logout(Request $request) {
        // $this->validate($request, ['token' => 'required']);
        
        try {
            // JWTAuth::invalidate($request->input('token'));
            auth('user-api')->logout();
            return response()->json(['success' => true, 'message'=> "You have successfully logged out."]);
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['success' => false, 'error' => 'Failed to logout, please try again.']);
        }
    }
}
