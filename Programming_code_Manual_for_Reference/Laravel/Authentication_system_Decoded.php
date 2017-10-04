<?php

// To use Laravel custom authentication system type:
php artisan make:auth

- As soon as this command is typed, we get some controllers in the "Auth" folder
- "Login" and "Register" buttons will also show up

- Inside "AppServiceProvider" , inside the "boot" function type the following:

use Illuminate\Support\Facades\Schema;
schema::defaultStringLength(191);

** Home Controller is for the "user", the default person from the beginning
- to add a new role we have to add a new Controller everytime

// To migrate the tables from laravel to db use
php artisan migrate

- if we register a person, he will login directly

- Middlewares are defined in "Kernel.php"

// View for Login
Inside auth/login.blade.php (extends layout/app.blade.php)

// View for Register
auth/register.blade.php

// To change where the user gets redirected post login, go to
LoginController.php, then change the line "protected $redirectTo = '/home';"

// How to check whether a person is logged in or not

- the person is logged in and is trying to access the "/login" page

public function __construct()
{
    $this->middleware('guest')->except('logout');
}

"guest" middleware is in "RedirectIfAuthenticated" file

// The RedirectIfAuthenticated file looks like this

public function handle($request, Closure $next, $guard = null)
{
    if (Auth::guard($guard)->check()) {
        return redirect('/home');
    }

    return $next($request);
}

- we can change the route we wish to "redirect" to, by changing the code above

// How to access all functions for login

Go to "AuthenticatesUsers" php file

// How to change the way we login into the dashboard

- Instead of using the "email id" , we want to use the "name"
- Change this function inside "AuthenticatesUsers" php file

public function username()
{
    return 'email';
}

// How to change the number of attempts allowed to login

- Go the "public function login" and then "hasTooManyAttempts"
- Go to "ThrottleLogins" and make the changes there

// How to change the authentication by password to some other field

- Go the EloquentUserProviders
- Make changes to this function by putting "$credentials['name']"
- return $plain;

public function validateCredentials(UserContract $user, array $credentials)
{
    $plain = $credentials['password'];

    return $this->hasher->check($plain, $user->getAuthPassword());
}

// How to ensure that when we are logged in we cannot go to the "registration" page

- This code should be there in the Registration Controller

public function __construct()
{
    $this->middleware('guest');
}

// Steps to follow when creating a new field for Registration

- Make changes in "RegisterController"

protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);
}

protected function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'lastname' => $data['lastname'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
    ]);
}

- Make changes to "User.php"

//this gives a default value to the field in the database
protected $fillable = [
    'name', 'email', 'password','lastname'
];


// How to create a "Multi authentication System"

- First Copy all controllers from "Auth" folder to the "New" folder (say Admin)
- Copy all views from "auth" folter to the "New" folder(say admin)

- Change the namespaces in all "Controllers"
- Change the routes in "email.blade, reset.blade"

- Create routes specific to the "new person"

//Routes for "Muti Auth"

//Route for showing the admin's dashboard after login
Route::get('admin/home','AdminController@index');

//Route for showing the Login form
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');

//Route for submitting the Login form
Route::post('admin','Admin\LoginController@login');

// Route for showing the Email the link  request form
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

// Rooute for submitting the send link page
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

// Route for showing the reset password form along with the token
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

//Route ofr submitting the Reset password form
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');

- After the move to "auth.php" inside 'config folder'

- Add a new "guard"

'admin' => [
    'driver' => 'session',
    'provider' => 'admins ',
],

- Also change the provider

'admins' => [
    'driver' => 'eloquent',
    'model' => App\Admin::class,
],

- Also change the "passwords reset"

'admins' => [
    'provider' => 'admins',
    'table' => 'password_resets',
    'expire' => 60,
],

- Inside the Login Controller, change the redirection to the "Admins" home page by passing the appropriate route

- also change the guard form "web" to "admin"

$this->middleware('guest:admin')->except('logout');

- Do the same for ForgetPasswordController and ResetPasswordController

- Next create a migration for the Admin Table

- and create the table as well

// If it gives the following error "Auth user provider not authenticated", do this

php artisan config:cache
php artisan config:clear

- From the "AuthenticatesUsers" trait copy the following function and paste it in the "admins" login controller

public function showLoginForm()
{
    return view('auth.login');
}

-- change the view respective to the "admin" view

-- to authenticate whether it is the admin who is trying to login in use this

//to make the authentication work for admin do this
$this->middleware('auth:admin');

// To login in not with the user but with the "admin"

// Paste this in Login controller
use Illuminate\Support\Facades\Auth;

//Copy this from "AuthenticatesUsers" and change the guard to 'admin'
protected function guard()
{
    return Auth::guard('admin');
}

// Let us say we are on the admins dashboard, and we try to access the home page of the user, we should be redirected to the
// "users" login page and vice versa

// To do this do the following

- Inside RedirectIfAuthenticated Middleware , paste the following

//this is ensuring that if we try to access "admin dashboard" , we are redirected to the home page of the user(if that user is logged in)
switch ($guard)
{
    case 'admin':

    if(Auth::guard($guard)->check())
    {
        return redirect()->guest(route('admin.login'));
    }
    break;

    default:
    if(Auth::guard($guard)->check())
    {
        return redirect()->guest(route('/home'));
    }
    break;

}

// Inside Handler.php, do this

$guard= array_get($exception->guards(),0);

switch ($guard)
{
    //if it is the admin dashboard we are trying to access redirect to admin login page
    case 'admin':
    return redirect()->guest(route('admin.login'));
    break;

    default:
    return redirect()->guest(route('login'));
    break;
}

// How to code the Passwords reset email part for "Admin"

- Go to the "ForgotPasswordController" under the Admin folder we created
- go to the trait "SendsPasswordResetEmails"
- copy the following function inside the controller

public function showLinkRequestForm()
{
    return view('auth.passwords.email');
}
- change the view from "auth to admin"

- To show the "Admin" Request Password form do the following

- Go to the "ResetPasswordController" under the admin folder
- go to the trait "ResetsPasswords"
- copy the following function inside the controller

public function showResetForm(Request $request, $token = null)
{
    return view('auth.passwords.reset')->with(
        ['token' => $token, 'email' => $request->email]
    );
}

- change "auth" to "admin"

Copy the following namespaces too

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

// How to ensure that the correct route link is being sent to the user for Reset Password

- Go to ResetPassword.php
- Have a look at this function

public function toMail($notifiable)
{
    return (new MailMessage)
    ->line('You are receiving this email because we received a password reset request for your account.')
    ->action('Admin Reset Password', url(route('admin.password.reset', $this->token)))
    ->line('If you did not request a password reset, no further action is required.');
}

- This is a notification
- we have to create a new notification for our Admin

- use this
php artisan make:notification AdminResetPasswordNotification

- a new notification will be created

- Copy the notification message from "ResetPassword" to the newly created notification and replace the old message
- change the route

- Also change the construct function to this

public function __construct($token)
{
    $this->token = $token;
}

From "CanResetPassword.php" copy the following

/**
 * Send the password reset notification.
 *
 * @param  string  $token
 * @return void
 */

 public function sendPasswordResetNotification($token)
 {
     $this->notify(new AdminResetPasswordNotification($token));
 }

 - and paste it into "Admin.php" (model)

 - Finally go to "SendsPasswordResetEmails.php"
 - copy the following function and paste it into "ForgotPasswordController.php"

 public function broker()
{
    return Password::broker('admins');
}

- Also copy the following namespaces and paste them too

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

- Also use the following namespace in Admin.php

use App\Notifications\AdminResetPasswordNotification;

// How to ensure that after password reset the user gets logged in automatically

- Go to "ResetPassword" trait
- Copy the following function

* Get the broker to be used during password reset.
*
* @return \Illuminate\Contracts\Auth\PasswordBroker
*/
public function broker()
{
   return Password::broker('admins');
}

- Apply the corresponding service provider

- Also copy the guard function and paste it inside the ForgotPasswordController

/**
 * Get the guard to be used during password reset.
 *
 * @return \Illuminate\Contracts\Auth\StatefulGuard
 */
protected function guard()
{
    return Auth::guard('admin');
}

?>
