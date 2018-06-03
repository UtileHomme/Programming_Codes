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

// How to add new roles to the admin (Entire process)

- After we have created the "roles" and "role_admins" table , do the following

- From "AuthenticatesUsers.php" , copy this function and change it as below

protected function sendLoginResponse(Request $request)
{
    $request->session()->regenerate();

    $this->clearLoginAttempts($request);

    foreach($this->guard('admin')->user()->role as $role)
    {
        if($role->name == 'admin')
        {
            return redirect('admin/home');
        }
        else if($role->name == 'editor')
        {
            return redirect('admin/editor');
        }
    }
}

** Whenever we want to ensure that the role is authenticated add the following constructor function

public function _construct()
{
    $this->middleware('auth:admin');
}

/*
Scenario : We are on the admin home page but we are also able to access the editor home page through url
How to avoid that
*/

- use Middlewares

- create the middleware for that role
- put the following function in the Middleware

public function handle($request, Closure $next)
{
    foreach(Auth::user()->role as $role)
    {
        //if the role is editor , proceed with the requested page , else
        if($role->name == 'editor')
        {
            return $next($request);
        }
    }
    return redirect('/')
}

- Inside "Kernel.php", register the middleware

'editor' => \Illuminate\Routing\Middleware\EditorMiddleware::class,

- Inside the "EditorController.php", add the following to the constructor

$this->middleware('editor');

- Do the same for Admin Middleware

--- if we want to make some function accessible to any other middleware , use this for middleware

$this->middleware('editor',['except'=>'test']);

?>


<!-- All about authentiction concepts -->

<!-- How to get the default authentication system -->
- Run "php artisan make:auth" and "php artisan migrate"

- The authentication configuration file is located at "config/auth.php"

- The authentication facilities are made up of "guards" and "providers".
- Guards define how users are authenticated at each request

Eg-
Laravel ships with a "session" guard which maintains state using session storage and cookies

- Providers define how users are retrieved from the persistent storage
- This is done using Eloquent and the database query builder

<!-- How to retrieve the Authentication User details -->

<?php

use Illuminate\Support\Facades\Auth;

// Get the currently authenticated user...
$user = Auth::user();

// Get the currently authenticated user's ID...
$id = Auth::id();

?>

<!-- How to check if the current user is Authenticated -->

<?php

use Illuminate\Support\Facades\Auth;

if (Auth::check()) {
    // The user is logged in...
}

?>

<!-- How to protect Routes -->

- It will allow only authenticated users to have access to a given route

<?php

Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth');

?>

OR

<?php

public function __construct()
{
    $this->middleware('auth');
}

?>

<!-- How to specify a guard when authenticating a user -->

<?php

public function __construct()
{
    $this->middleware('auth:api');
}

?>

<!-- How to Manually Authenticate Users -->

<?php

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
    * Handle an authentication attempt.
    *
    * @return Response
    */
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
}

?>

- The "attempt" method accepts an array of key/value pairs as its first argument
- The values in the array will be used to find the user in the db

- The "attempt" method will return "true" if authentication is successful
- Else, it will return "false"

- The "intended" method will redirect the user to the URL they were attempting to access before being intercepted by the authentication
middleware

** We can specify extra conditions as well

<?php

if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
    // The user is active, not suspended, and exists.
}

 ?>

<!-- How to access specify guard instances -->

- We can specify a guard instance we would like to utilize using the "guard" method on the "Auth" facade
- this allows us to manage authentication for separate parts of our application using entirely separate authenticatable models or user tables

<?php

if (Auth::guard('admin')->attempt($credentials)) {
    //
}

 ?>

<!-- How to logout any users -->

<?php

Auth::logout();

 ?>

<!-- How to remember users -->

<?php

if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
    // The user is being remembered...
}

 ?>


- To determine if the user was authenticated using the "remember me" cookie, use

<?php

if (Auth::viaRemember()) {
    //
}

 ?>

<!-- How to login an existing user -->

<?php

Auth::login($user);

// Login and "remember" the given user...
Auth::login($user, true);

 ?>

- With the guard instance

<?php

Auth::guard('admin')->login($user);

 ?>

<!-- How to login a user by using the ID -->

<?php

Auth::loginUsingId(1);

// Login and "remember" the given user...
Auth::loginUsingId(1, true);

 ?>

<!-- How to authenticate the user only once -->

<?php

if (Auth::once($credentials)) {
    //
}

 ?>

- this may be required when we wish to log the user for a single request
- No sessions or cookies will be utilized, which means this method may be helpful when building a stateless API

<!-- How to use Hashing -->

- The "Hash" facade provides secure Bcrypt hashing for storing user passwords

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UpdatePasswordController extends Controller
{
   /**
    * Update the password for the user.
    *
    * @param  Request  $request
    * @return Response
    */
   public function update(Request $request)
   {
       // Validate the new password length...

       $request->user()->fill([
           'password' => Hash::make($request->newPassword)
       ])->save();
   }
}

?>

<!-- How to verify a password against a Hash -->

- The "check" method allows you to verify that a given plain-text string corresponds to a given hash

<?php

if (Hash::check('plain-text', $hashedPassword)) {
    // The passwords match...
}

 ?>

 <!-- How to check whether the password needs to be rehashed -->

 <?php

 if (Hash::needsRehash($hashed)) {
     $hashed = Hash::make('plain-text');
 }

  ?>
