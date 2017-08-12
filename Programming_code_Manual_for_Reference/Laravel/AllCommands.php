<!-- To make the server run -->
php artisan serve

<!-- How to create a model along with a migration -->
php artisan make:model Post --migration

<!-- How to migrate the tables -->
php artisan make:migrate

<!-- How to make a controller -->
php artisan make:controller PostController

<!-- How to make a resource controller -->
php artisan make:controller PostController --resource

<!-- How to check the routes list -->
php artisan route:list

<!-- How to rollback ro an original table schema -->
php artisan migrate:refresh

<!-- Our routes files are in web.php -->

<!-- session data can be changed in config/sessions.php
the session file is stored in storage/framework/sessions
the session time by default is 120 minutes
-->

<!-- This is how we return to a view along with parameters -->

return view('pages/welcome',compact('posts'));

<!-- another way -->
return view('auth.passwords.reset')->with(
    ['token' => $token, 'email' => $request->email]
);

<!-- This is how we retrieve 'db' data in the controller  -->

$posts = Post::orderBy('id','desc');

<!-- This is how we set routes in 'anchor' tags -->

<li><a href="{{ route('logout') }}">Logout</a></li>

<p><a href="{{ url('password/reset')}}">Forgot My Password</a></p>

<!-- This is how we set a custom route -->

Route::get('about', function () {
     return view('about');
});

<!-- This is how we set a name for the route -->

Route::post('auth/login','Auth\LoginController@login')->name('login');      //naming the route according to middleware


<!-- This is how we define a resource controller -->

Route::resource('posts','PostController');

<!-- This is how we display the person's name on the navbar after they have logged in  -->

<!-- Auth::user pulls out the present details and we can manipulate it -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
<ul class="dropdown-menu">
  <li><a href="{{ route('posts.index') }}">Posts</a></li>
  <li><a href="{{ route('categories.index') }}">Categories</a></li>
  <li><a href="{{ route('tags.index') }}">Tags</a></li>
  <li role="separator" class="divider"></li>
  <li><a href="{{ route('logout') }}">Logout</a></li>

- Auth::user()->name will access the column 'name' for the user table

<!-- How to set pagination in laravel -->

$posts = Post::orderBy('id','desc')->paginate(2);

- It works this way:
- Select * from posts LIMIT 5 OFFSET 10

- Start from the tenth element and display next 5 elements

- This is how it looks

http://localhost:8000/posts?page=2

<!-- This is how we generate pagination on the links -->

<div class="text-center">
  {!! $posts->links() !!}
</div>

<!-- This is how put limits on all the data to be displayed -->

$posts = Post::orderBy('created_at','desc')->limit(4)->get();

<!-- This is how we link a route -->

{{ Html::linkRoute('posts.index','<< See All Posts',[],['class' => 'btn btn-default btn-block btn-h1-spacing'])}}

- first argument is route, second is the value, the parameters if we wish to pass any and finally the classes

<!-- How do we represent a middleware -->

http://imgur.com/a/WjE0C

A request will be made to the app. First it goes to the Session Middleware, checks for the Authentication layer
and then accordingly responds.

<!-- How to check if user is logged in -->

Go for - Auth::check()

<!-- How to check if user is logged out -->

Go for - Auth::guest()

<!-- How to access the user's details from the database -->

Go for - Auth::user()

<!-- How to access the id number in the database -->

Go for - Auth::id()

<!-- How to try and login a person manually -->

public function attempt(array $credentials = [], $remember = false , $login = true);

<!-- This is how we apply the guest middleware -->

- Guest middleware is checking whether you are guest or not
- Either you need to be a guest or you need to be logged out
- We don't want anyone who's logged in to go to login page by any means
- We don't wish to apply any middleware for logout


- Auth is for checking that only people logged in are allowed to access those pages

- We don't want guests going to logout page
$this->middleware('guest')->except('logout');

<!-- This is how we apply the auth middleware -->

//only authenticated users can access the posts
$this->middleware('auth');

<!-- How to send a route along with a parameter or token -->

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

<!-- This is how we pass hidden fields along with a form -->

{{ Form::hidden('token', $token) }}
- This is for sending the token along with the rest of the url

<!-- This is how the .env file looks like -->

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:Zcu542NTxWZHfjVbpCQGM6KU7QwzxGT0+CzuWw5s84g=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_devm
DB_USERNAME=root
DB_PASSWORD=votreami

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=jatins368@gmail.com
MAIL_PASSWORD=dwuzbxymznmkixai
MAIL_ENCRYPTION=tls

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=

- Also set up the /config/mail.php file

<!-- How to set up the authentication system by default -->

php artisan make:auth

<!-- Find out how to put all the routes under a middleware in laravel 5.4 -->
