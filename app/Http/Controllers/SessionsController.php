<?php namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use \Auth;
use Illuminate\Contracts\Auth\UserProvider as UserProviderInterface;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\GenericUser;

class SessionsController extends Controller implements UserProviderInterface
{


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('login');
    }

    /*
     * 1. The login will automatically trigger the request we created, validating the inputs and the method itself will
     * only fire if validation passes.
     *
     */
    public function doLogin(UserLoginRequest $request)
    {

        $email = $request->get('email');
        $password = $request->get('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/');
        } else {
            return redirect()->intended('login');
        }
    }



    public function retrieveById($identifier)
    {
        // TODO: Implement retrieveById() method.
    }

    public function retrieveByToken($identifier, $token)
    {
        // TODO: Implement retrieveByToken() method.
    }


    public function updateRememberToken(Authenticatable $user, $token)
    {
        // TODO: Implement updateRememberToken() method.
    }


    public function retrieveByCredentials(array $credentials)
    {
        // TODO: Implement retrieveByCredentials() method.
    }


    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        // TODO: Implement validateCredentials() method.
    }

}