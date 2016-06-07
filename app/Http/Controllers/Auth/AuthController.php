<?php

namespace ClevAppBcRestApi\Http\Controllers\Auth;

use Auth;
use ClevAppBcRestApi\Authentication\AppUser;
use Validator;
use Illuminate\Http\Request;
use ClevAppBcRestApi\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $redirectPath = '/dashboard';


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    // /**
    //  * Handle an authentication attempt.
    //  * TODO: Improve the process
    //  * @return Response
    //  */
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $response = [];
        $response['email'] = $email;
        $response['error'] = 0;
        
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $response['message'] = 'Success';
            return response()->json($response);
        }

        $response['message'] = 'Invalid Credentials';
        $response['error'] = 1;

        return response()->json($response);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function create($data)
    {  
        $user = new AppUser();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        $user->save();

        return $user;
    }
}
