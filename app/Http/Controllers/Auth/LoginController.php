<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {

        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if(! auth()->attempt($credentials)){
            return redirect()->route('login', config('app.locale'))
                ->with('error','Email-Address And Password Are Wrong.');
        }
        // dd(auth()->user()->type);
        if (auth()->user()->type == 1 || (auth()->user()->type == "admin"))
        {
            return redirect()->route('admin.home');
        }
        if ((auth()->user()->type == 0) || (auth()->user()->type == "user"))
        {
            return redirect()->route('user.account_panel',config('app.locale'));
        }
        return redirect()->route('index' , config('app.locale'));
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('user.account_panel', config('app.locale'));
      }
}
