<!-- How to install composer if it doesn't exist -->

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer

<!-- How to install laravel  -->

composer global require "laravel/installer"

composer create-project --prefer-dist laravel/laravel blog

<!-- To make the server run -->
php artisan serve

<!-- How to change the name showing on the application -->

Go to config/app.php , change the name there Go to .env, change the name there
(if spaces are there, surround the names in Quotes)

<!-- To see all commands available in "artisan" -->
php artisan

<!-- How to start a server in a new line -->
php artisan serve --port="8888"

<!-- How to create a model -->
php artisan make:model home

<!-- How to create a model along with a migration -->
php artisan make:model Post --migration

OR

php artisan make:model role -m

*** Models are always in Singular form and we try and capitalize the First letter

<!-- How to create a migration along with the table -->
php artisan make:migration create_my_songs_table --create=songs

<!-- How to open tinker -->
php artisan tinker

<!-- How to migrate the tables -->
php artisan make:migrate

<!-- How to make a controller -->
php artisan make:controller PostController

<!-- How to make a resource controller -->
php artisan make:controller PostController --resource

<!-- How to check the routes list -->
php artisan route:list

<!-- How to rollback to an original table schema -->
php artisan migrate:refresh

-- undo all migrations and redo them

<!-- How to generate a key  -->

- This is for setting the application key to a random string
- If laravel has been installed via composer , it is done by default for us
- If the application key is not set, your user sessions and other encrypted data will not be secure

php artisan key:generate

<!-- This is how we make the pagination links centered by using webkit -->

<div style="text-align: -webkit-center;"> {{$leads->links()}} </div>

<!-- How to implement DRY in views -->

1. First extend from the blade that you want to copy most of the code

- @extends('layout/app')

2. Inside the original blade put the following code for the part where you want things to be "Dynamic"

- <title>Laravel @yield('title')</title>
- @yield('body') or @section('body')
@show

3. Inside the blade in which all the above is being copied, use the following

- @section('title','About')

- @section('body')
About
@endsection

** Wherever @section('body') is found, the part of the original code will be replaced with the "specific" code

<!-- How to add partials in blade -->

@include('partials/_head')
- include all the code that comes in the header out here and simply call the file using the above statement

** name of the file is "_head.blade.php"

<!-- What are namespaces -->

- namespaces are like little containers
- they say we belong in this folder and we cannot leave this folder

Eg -
namespace App\Http\Controllers;
use App\Post;

<!-- How to show tabular view fields in mobile using "+" sign  -->

<th  data-hide="phone,tablet"><b> Created At </b></th>
<th  data-hide="phone,tablet"><b> Assigned To </b></th>

<!-- How to add a create route on a button functionality -->

<a href="/cc/create?name={{ Auth::guard('admin')->user()->name }}">  <img src="/img/NewCreateLead.png" class="img-responsive" alt="add" style="    display: -webkit-inline-box;"></a>

<!-- How to add a flash message on the screen -->
Session::flash('warning','The Mobile number is invalid');

<!-- How to show the flash message through the view page -->
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    <strong>Success:</strong> {{Session::get('success')}}
</div>

@endif

<!-- How to check if errors are present through the view page -->

@if(count($errors)>0)
<div class="alert alert-danger">
    <strong>Errors:</strong>
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif

<!-- This is how we access the variable data received using "get" in query on blade -->

@extends('layout.app');

@section('title','Songs')
@section('body')
{{'Songs are everything'}}
@foreach($songs as $song)
{{
    $song->title.' '.$song->artist."\n"
}}
@endforeach
@endsection


<!-- All routes are in web.php -->

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

OR

return view('pages/about')->withFull($full)->withEmail($email);

OR

$data = [];
$data['email']=$email;
$data['fullname']=$fullname;
return view('pages/about')->withData($data);

<!-- This is how we retrieve 'db' data in the controller  -->

$posts = Post::orderBy('id','desc');

<!-- This is how we set routes in 'anchor' tags -->

<li><a href="{{ route('logout') }}">Logout</a></li>

<p><a href="{{ url('password/reset')}}">Forgot My Password</a></p>

<!-- How to find the row of a particular id and update a particular column-->

//this is for finding the "row" where this product id exists
$product = product::find($productid);

//this will update the "OrderStatus" column with the status mentioned above
$product->OrderStatus=$status;

<!-- What are the available Route methods -->

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);

<!-- This is how we set a custom route/closure -->

Route::get('about', function () {
    return view('about');
});

<!-- How to set a route if the Controller directory has further file structure -->

- If the Directory structure is App\Http\Controllers\Photos\AdminController then the "route" should look like

Route::get('foo', 'Photos\AdminController@method');

<!-- This is how we set a route which responds to multiple HTTP verbs -->

Route::match(['get', 'post'], '/', function () {
    //
});

OR

Route::any('foo', function () {
    //
});

<!-- What is CSRF Protection in Laravel -->

- Cross Site Request Forgeries are a type of malicious exploit whereby unauthorized commands are performed on the behalf of an authenticated user
- Laravel automatically generates a CSRF "token" for each active user sesssion managed by the application
- this token is used to verify whether the authenticated user is the one who is actually making a request to the application

- Any HTML forms pointing to the POST, PUT or DELETE routes should include a CSRF token field
- If not, the request will be rejected.

- It can be defined like this:

<form method="POST" action="/profile">
    {{ csrf_field() }}
    ...
</form>

- the VerifyCsrfToken "middleware" which is included in the "web" middleware group will automatically verify that token in the request input matches the token stored in the session

<!-- How to capture segments of a URL  -->

Route::get('user/{id}'),function()
{
    return 'User '.$id;
}
);

<!-- We can define as many route parameters as we want -->

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});

- Route parameters are always encased within {} and should consist of alphabetic characters only
- "-" is not allowed. Instead use '_'

<!-- How to define optional parameters in the route -->

Route::get('user/{name?}'), function($name='Jatin')
{
    return $name;
}
);

<!-- How to use REGEXP and where in Route parameters -->

<!-- The name should only have alphabetic character -->
Route::get('usr/{name}'),function()
{
    //
}
)->where('name', '[A-Za-z]+');

Eg -

Route::get('blog/{slug}',['as'=>'blog.single', 'uses'=>'BlogController@getSingle' ])
->where('slug','[\w\d\-\_]+');

<!-- for regex , w = alphabets, d = number, - = dash, _ = underscore are allowed -->

<!-- The id should be numerical in value -->
Route::get('user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');

<!-- What are the uses of "named" routes -->

- Named routes allow the convenient generation of URLs or redirects to specific routes

Route::get('user/profile',function()
{
    //
}
)->name('profile');

<!-- For controllers -->

Route::get('user/profile', 'UserController@showProfile')->name('profile');

<!-- How to generate urls or redirects for named routes -->

<!-- URLs -->
$url = route('profile');

<!-- Generating Redirects -->
return redirect('/admin');

OR

return redirect()->route('profile')

<!-- How to pass parameters to named routes -->

Route::get('user/{id}/profile', function ($id) {
    //
})->name('profile');

$url = route('profile',['id'=>1]);

<!-- How to use dynamic values in a tag -->

<input type="text" name="title" class="form-control" value="@yield('editTitle')" placeholder="Title" />

@section('editTitle',$item->title)

<!-- This is how we include "1 seconds ago functionality" in blade -->

<span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>

<!-- This is how we pass a route in the href tag -->

<a href="{{'/todo/'.$todo->id}}">{{$todo->title}}</a>

<!-- This is how we include a route link and csrf token for DELETE method -->

<form class="form-group pull-right" action="{{'/todo/'.$todo->id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="form-control" style="border:none;"><i class="fa fa-trash" aria-hidden="true"></i></button>
</form>

<!-- This is how we pass a dynamic "method=PUT" inside a blade -->

@section('editMethod')
{{method_field('PUT')}}
@endsection

<form class="form-horizontal" action="/todo/@yield('editId')" method="post">
    {{csrf_field()}}
    @section('editMethod')
    @show
</form>

<!-- What are route groups -->

- allow one to share route attributes, such as middlewares or namespaces, across a large number of routes
without needing to define these attributes explicitly on each individual route

Route::middleware(['web','admin'])->group(function()
{

    Route::get('/',function()
    {
        // Uses web & admin Middleware
    }
    );

    Route::get('user/profile', function ()
    {
        // Uses web & admin Middleware
    }
    );

}
);

<!-- This is how we set a name for the route -->

Route::post('auth/login','Auth\LoginController@login')->name('login');      //naming the route according to middleware

<!-- This is how we define a resource controller -->

Route::resource('posts','PostController');

<!-- How to define partial resource routes -- which means that some functions will be handled not all -->

Route::resource('photo','PostController',['only'=> ['show','index']]);

OR

Route::resource('photo','PostController',['except'=> ['show','index']]);

<!-- How to override the names of default functions given by the resource routes -->

Route::resource('photo','PhotoController', ['names']=>['create'=>'photo.build']);

<!-- If we want some actions to occur before the predefined functions in the resource Controller, we need to define the route before the resource controller  -->

Route::get('photos/popular','PhotoController@method');

Route::resource('photos','PhotoController');

<!-- What is "method injection" in routes -->

- There is a possibility that we have a form which is submitting some data and that is going through a "route" to some particular Controller function
- That function should have an argument connecting those values

One of the methods is "Illuminate\Http\Request"

public function store(Request $request)
{
    $name = $request->name;
}

- If our route is defined like this
Route::put('user/{id}', 'UserController@update');

then pass the "id" parameter inside the controller function

public function update(Request $request, id)
{

}

<!-- How to retrieve the session id of the currently Logged in user -->

- Use "session()->getId()"

<!-- How to add a Logout button on the navbar (blade code) -->

<a href="{{ route('logout') }}" style=" font-family: myFirstFont;"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
Logout
</a>

<!-- How to generate Route cache -->

- Route cache is for loading the repetitive requests as fast as possible

php artisan route:cache

<!-- How to clear the Route cache -->

php artisan route:clear

<!-- This is how we display the person's name on the navbar after they have logged in  -->

<!-- Auth::user pulls out the present details and we can manipulate it -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
<ul class="dropdown-menu">
    <li><a href="{{ route('posts.index') }}">Posts</a></li>
    <li><a href="{{ route('categories.index') }}">Categories</a></li>
    <li><a href="{{ route('tags.index') }}">Tags</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="{{ route('logout') }}">Logout</a></li>

    - Auth::user()->name will access name for the user

    <!-- In case a guard has been applied -->
    - Auth::guard('admin')->user()->name

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

    <!-- //when we have passed a parameter in the url and we want the same parameter to be carried to the next page we use "appends" method -->
    <div style="text-align: -webkit-center;"> {{$leads->appends(request()->except('page'))->links()}} </div>

    <!-- This is how put limits on all the data to be displayed -->

    $posts = Post::orderBy('created_at','desc')->limit(4)->get();

    <!-- This is how we link a route -->

    {{ Html::linkRoute('posts.index','<< See All Posts',[],['class' => 'btn btn-default btn-block btn-h1-spacing'])}}

    - first argument is route, second is the value, the parameters if we wish to pass any and finally the classes

    <!-- What is a middleware -->

    - provides a convenient mechanism for filtering HTTP requests entering our application

    <!-- How to create a middleware -->

    - php artisan make:middleware CheckAge
    - this will place a new "CheckAge" class within the app/Http/Middleware directory

    Eg -

    public function handle($request, Closure $next)
    {
        if ($request->age <= 200) {
            return redirect('home');
        }

        return $next($request);
    }

    <!-- How to assign Middlewares to routes -->

    - Navigate to app/Http/Kernel.php

    - add the middleware to the "protected $routeMiddleware" variable

    Eg -

    protected $routeMiddleware =
    [
    'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
    'can' => \Illuminate\Auth\Middleware\Authorize::class,
    'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];

    <!-- How to use a middleware after its definition -->

    Route::get('admin/profile', function () {
        //
    })->middleware('auth');

    - We can use multiple middlewares too
    -  ->middleware('first','second');

    <!-- What are Middleware groups -->

    - Sometimes, we might want to group several middleware under a single key to make them easier to assign routes

    Eg -

    protected $middlewareGroups = [
    'web' => [
    \App\Http\Middleware\EncryptCookies::class,
    \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
    \Illuminate\Session\Middleware\StartSession::class,
    \Illuminate\View\Middleware\ShareErrorsFromSession::class,
    \App\Http\Middleware\VerifyCsrfToken::class,
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],

    'api' => [
    'throttle:60,1',
    'auth:api',
    ],
    ];

    <!-- How to assign Middleware groups to routes -->

    Route::group(['middleware' => ['web']], function () {
        //
    });


    <!-- How do we represent a middleware -->

    http://imgur.com/a/WjE0C

    - A request will be made to the app. First it goes to the Session Middleware, checks for the Authentication layer
    and then accordingly responds.

    <!-- How to assign a specific middleware to a Controller inside the "construct" function -->

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('log')->only('index');

        $this->middleware('subscribed')->except('store');


    }

    <!-- What does the "web" middleware do -->

    - provides features like session state and CSRF protection

    <!-- What is form-method spoofing / Why do we need to send a hidden method like 'PUT' along with the form -->

    - HTML forms do not support 'PUT/PATCH/DELETE' methods
    - Therefore, we need to send a hidden method field along with the form

    <form action="/foo/bar" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

    - By using the method helper

    {{ method_field('PUT') }}

    <!-- How to access the current route -->

    $route = Route::current();

    $name = Route::currentRouteName();

    $action = Route::currentRouteAction();

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

    <!-- How to check if there is an error in a particular "field" and display it in red -->

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Password</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <!-- How to get the "old" user entered data in case of an error -->

    - The scenario is that the user enters a wrong email id . We would want to show the user what he/she has entered wrong after "submit" button is clicked

    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>


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

    <!-- This is how we put data in a session -->

    session()->put('name',$name1);

    - 'name' is the variable we wish to use
    - '$name1' is the value we are putting into that variable

    <!-- This is how we grab variable data from a session or the URL -->

    if (session()->has('name'))
    {
        $name1=session()->get('name');
    }
    else
    {
        $name1=$_GET['name'];
    }

    <!-- How to check if the person is authenticated for proper display of view using the guards -->

    @if (!Auth::guard('admin')->check())

    @else

    @endif

    <!-- This is how we send a url in the form of a hyperlink with spaced parameters -->

    <a href="/assignedview?name={{ Auth::user()->name }}&status=In%20Progress">

        <!-- This is how we send a Mail in Laravel -->

        $service_type=DB::table('services')->where('leadid',$leadid)->value('ServiceType');

        $data = ['leadid'=>$leadid,'name'=>$name,'user'=>$user,'service_type'=>$service_type,'contact'=>$contact,'location'=>$location,'from'=>$from,'to'=>$to,'who'=>$who];

        $data1 = ['leadid'=>$leadid,'name'=>$name,'user'=>$user,'service_type'=>$service_type,'contact'=>$contact,'location'=>$location,'from'=>$from,'to'=>$to1,'who'=>$who];

        Mail::send('mail', $data, function($message)use($data) {
            $message->to($data['to'], $data['user'] )->subject
            ('Lead ['.$data['leadid'].'] Created!!!');
            $message->from($data['from'],$data['who']);
        });

        - the 1st argument in the "send" function is the 'view page' which consists of the body
        - the 2nd argument is the list of "values" that we want to send along the view page in the first argument
        - we also need to use the "use" function for this purpose

        <!-- How to put Download CSV functionality in PHP  -->

        $leads = DB::table('leads')
        ->select('leads.id','leads.created_at','leads.createdby','leads.fName','leads.mName','leads.lName','leads.MobileNumber','leads.Alternatenumber','leads.EmailId','services.Branch','leads.Source','services.ServiceType','services.requested_service','services.ServiceStatus','services.Remarks','leads.AssesmentReq','services.GeneralCondition','services.RequestDateTime','services.AssignedTo','services.QuotedPrice','services.ExpectedPrice','services.PreferedGender','services.PreferedLanguage','personneldetails.PtfName','personneldetails.PtmName','personneldetails.PtlName','personneldetails.age','personneldetails.Gender','personneldetails.Relationship','personneldetails.Occupation','personneldetails.AadharNum','personneldetails.AlternateUHIDType','personneldetails.AlternateUHIDNumber','personneldetails.PTAwareofDisease','addresses.Address1','addresses.Address2','addresses.City','addresses.District','addresses.State','addresses.PinCode','addresses.PAddress1','addresses.PAddress2','addresses.PCity','addresses.PDistrict','addresses.PState','addresses.PPinCode','addresses.EAddress1','addresses.EAddress2','addresses.ECity','addresses.EDistrict','addresses.EState','addresses.EPinCode')
        ->join('personneldetails', 'leads.id', '=', 'personneldetails.Leadid')
        ->join('addresses', 'leads.id', '=', 'addresses.leadid')
        ->join('services', 'leads.id', '=', 'services.LeadId')
        ->where('ServiceStatus',$status)
        ->orderBy('leads.id','DESC')
        ->get();

        $leads = json_decode($leads,true);

        $array = array( 'Lead Id', 'Created At' , 'Created By', 'Customer First Name', 'Customer Middle Name', 'Customer Middle Name', 'Customer Mobile', 'Customer Alternate Mobile Number',  'Email Id', 'City', 'Source', 'Service Type','Requested Service', 'Lead Status','Comments','Assessment Required','General Condition','Requested DateTime', 'Assigned To','Quoted Price', 'Expected Price','Preferred Gender', 'Preferred Language','Patient First Name'
        ,'Patient Middle Name','Patient Last Name','Patient Age','Patient Gender','Relationship','Occupation','Aadhar Number','Alternate UHID Type','Alternate UHID Number', 'Patient Aware of Disease', 'Address1', 'Address2', 'City','District','State','PinCode', 'Present Address1', 'Present Address2', 'Present City','Present District','Present State','Present PinCode', 'Emergency Address1', 'Emergency Address2', 'Emergency City'
        ,'Emergency District','Emergency State','Emergency PinCode');
        // $list = array (
        //     $leads
        // );
        //
        //         $lists = array (
        // array('aaa', 'bbb', 'ccc', 'dddd'),
        // array('123', '456', '789'),
        // array('aaa', 'bbb')
        // );
        // dd($list);

        $filename = "download.csv";

        $fp = fopen('download.csv', 'w');

        fputcsv($fp, $array );
        foreach ($leads as $fields) {
            fputcsv($fp, $fields);
        }

        fclose($fp);

        $headers = array(
        'Content-Type' => 'text/csv',
        );
        return Response::download($filename, 'download.csv', $headers);
    }

    <!-- How to send a Mail in Laravel -->

    $data = array(
    'email' => $request->email,
    'subject' => $request->subject,
    'bodyMessage'=> $request->message
    );

    Mail::send('emails.contact',$data, function($message) use($data)
    {
        $message->from($data['email']);
        $message->to('jatins368@gmail.com');
        $message->subject($data['subject']);
    });

    <!-- How to access a Request generated from a page -->

    - To obtain an instance of the current HTTP request, via dependency injection, we should type-hint the
    "Illuminate\Http\Request" class on the controller method

    Eg -

    <?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        /**
        * Store a new user.
        *
        * @param  Request  $request
        * @return Response
        */
        public function store(Request $request)
        {
            $name = $request->input('name');

            //
        }
    }

    ?>

    ** If the controller method is also expecting input from a route parameter, we should list the route parameters after other dependencies

    Eg -

    Route::put('user/{id}', 'UserController@update');

    <?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        /**
        * Update the specified user.
        *
        * @param  Request  $request
        * @param  string  $id
        * @return Response
        */
        public function update(Request $request, $id)
        {
            //
        }
    }

    ?>

    <!-- How to access the Request via Closures -->

    <?php

    use Illuminate\Http\Request;

    Route::get('/', function (Request $request) {
        //
    });

    ?>

    <!-- How to display the request path's information -->

    $uri = $request->path();

    <!-- How to display the request URL -->

    // Without Query String...
    $url = $request->url();

    // With Query String...
    $url = $request->fullUrl();

    <!-- How to retrieve the Request Method type -->

    <?php

    $method = $request->method();

    if ($request->isMethod('post')) {
        //
    }

    ?>

    <!-- How to retrieve all the request data in the form of an array -->

    $input = $request->all();

    <!-- How to access all user inputs without worrying about the HTTP verb used -->

    $name = $request->input('name');

    ** In case, the input value doesn't exist and we wish to supply a default value, use this

    $name = $request->input('name', 'Sally');

    ** If the field has a name, use this

    $name = $request->name;

    <!-- How to retrieve JSON input values -->

    - As long as the "Content/Type" header of the request is properly set to "application/json", we use this

    $name = $request->input('user.name');

    <!-- How to retrieve a subset of the input data -->

    $input = $request->only(['username', 'password']);

    $input = $request->only('username', 'password');

    $input = $request->except(['credit_card']);

    $input = $request->except('credit_card');

    - the "only" method  returns all the key/value pairs that you request, even if the key is not present on the incoming request
    - When the key is not present on the request, the value will be "null"

    - To retrieve a portion of the input data that is actually present on the request, use the "intersect method"

    $input = $request->intersect(['username', 'password']);

    <!-- How to check whether the input value is present or not -->

    if($request->has('name'))
    {

    }

    OR

    if ($request->has(['name', 'email'])) {
        //
    }

    <!-- How to flash input to a session -->

    $request->flash();
    - it will flash the current input to the session so that it is available during the user's next request to the application

    $request->flashOnly(['username', 'email']);

    $request->flashExcept('password');

    <!-- How to flash input then redirect -->

    return redirect('form')->withInput();

    return redirect('form')->withInput(
    $request->except('password')
    );

    <!-- How to retrieve old input  -->

    $username = $request->old('username');

    ** In blade, to retrieve an old data which is correct after validation on submission do this:

    <input type="text" name="username" value="{{ old('username') }}">

    <!-- How to retrieve cookies from requests -->

    - All cookies created by the Laravel framework are encrypted and signed with an authentication code, meaning they will be considered invalid
    if they have been changed by the client

    $value = $request->cookie('name');

    <!-- How to attach cookies to responses -->

    return response('Hello World')->cookie(
    'name', 'value', $minutes
    );

    <!-- How to retrieve uploaded files -->

    $file = $request->file('photo');


    $file = $request->photo;

    ** To determine, if a file is present on the request, do this:

    if ($request->hasFile('photo')) {
        //
    }

    <!-- How to check if the file was uploaded successfully or not -->

    if ($request->file('photo')->isValid()) {
        //
    }

    <!-- How to access the full path and extension name of the file -->

    $path = $request->photo->path();

    $extension = $request->photo->extension();

    <!-- How to create responses using strings and arrays -->

    - All routes and controllers should return a response to be sent to the user's browser
    - The most basic way is to return a string from a route or controller
    - the framework will automatically convert the string into a full HTTP response:

    <?php

    Route::get('/',function()
    {
        return 'Hello world';
    }
);
?>

** In addition to returning strings from your routes and controllers, we may also return arrays
- the framework will automatically convert the array into a JSON response.

<?php

Route::get('/',function()
{
    return [1,2,3]
}
);
?>

<!-- What are Response objects -->

- Mostly, we won't be returning simple strings or arrays from route actions.
- we would be returning full "Illuminate\Http\Response" instances or views

- Returning a full Response instance allows us to customize the response's HTTP status code and headers.
- A "Response" instance inherits from the "Symfony\Component\HttpFoundation\Response" class, which provides a variety of methods for building HTTP responses

Route::get('home',function()
{
    return response('Hello World', 200)->header('Content-Type','text/plain');
}
);

<!-- How to attach "Headers" to Responses -->

- we can add a series of headers to the response before sending it back to the user

return response($content)->header('Content-Type',$type)->header('X-Header-One', 'Header Value')->header('X-Header-Two','Header Value');

OR

return response($content)->withHeaders([
'Content-Type' => $type,
'X-Header-One' => 'Header Value',
'X-Header-Two' => 'Header Value',
]);

<!-- How to attach cookies to the responses -->

- the "cookie" method on "response instances" allows us to easily attach cookies to the response

return response($content)->header('Content-Type',$type)->cookies('name','value','$minutes');

- the cookie function can have the following parameters

cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly)

<!-- How to disable encryption of cookies -->

- by default, all cookies generated by the Laravel are encrypted and signed so that they can't be modified or read by the client
- To disable encryption for a subset of cookies, we use the "$except" property of the "App\Http\Middleware\EncryptCookies" which is located in the "app\Http\Middleware" directory

<?php

/**
* The names of the cookies that should not be encrypted.
*
* @var array
*/
protected $except = [
    'cookie_name',
];

?>

<!-- How to perform "redirects" -->

- Redirect responses are instances of the "Illuminate\Http\RedirectResponse" class and contain the proper headers needed to redirect the user to another URL

<?php

Route::get('dashboard',function()
{
    return redirect('home/dashboard');
}
);
?>

- Sometimes, we wish to redirect the user to their previous location, such as when the submit form is invalid

- since this feature utilizes the "session", make sure the route calling the "back" function is using the "web" middleware group

<?php

Route::post('user/profile', function()
{
    return back()->withInput();
}
);

?>

<!-- How to redirect to "named routes" -->

- When we call the "redirect" helper with no parameters, an instance of "Illuminate\Routing\Redirector" is returned, allowing us to call any method on the "Redirector" instance

<?php

return redirect()->route('login');
?>

- if the route has parameters, pass them as a second parameter

<?php

return redirect()->route('profile', ['id'=>1]);

OR

return redirect()->route('posts.show', $post->id);

?>

<!-- How to populate parameters via eloquent models -->

- if we are redirecting to a route with an "ID" parameter that is being populated from an Eloquent model, we may simply pass the model itself
- the ID will be extracted automatically

<?php

return redirect()->route('profile', [$user])
?>

<!-- How to redirect to the controllers actions -->

** We don't need to pass the "full namespace" to the controller since Laravel's "RouteServiceProvider" automatically sets the base controller namespace

<?php
return redirect()->action('HomeController@index');
?>

- to pass second parameter, do this

<?php

return redirect()->action(
    'UserController@profile', ['id' => 1]
);

?>

<!-- How to redirect with a flashed session data -->

<?php

Route::post('user/profile', function()
{
    return redirect('dashboard')->with('status', 'Profile Updated');
}
);

?>

In the Blade, put the following

@if(session('status'))
<div class="alert alert-success">
    {{  session('status')   }}
</div>
@endif

<!-- How to return view as the response's content -->

- if we need control over the response's status and headers but also need to return a "view" as the response's content , do this:

<?php

return response()->view('hello', $data, 200)
->header('Content-Type', $type);
?>

<!-- How to generate JSON responses -->

- the "json" method automatically sets the "Content-Type" header to "application/json", as well as converts the given array to JSON
using the "json_encode" PHP function

<?php
return response()->json(['name'=>'Abigail','state'=>'CA']);
?>

<!-- How to initiate "file downloads" for a file at a given path -->

- the "download" method accepts a file name as the second argument to the method, which will determine the file name that is seen by the user downloading the file
- we can pass an array of HTTP headers as the third argument to the method

<?php

return response()->download($pathToFile);

OR

return response()->download($pathToFile, $name, $headers);

OR

return response()->download($pathToFile)->deleteFileAfterSend(true);
?>

<!-- How to display file content in the user's browser initiating a download -->

<?php

return response()->file($pathToFile);

OR

return response()->file($pathToFile, $headers);

?>

<!-- How to validate the data from a form -->

$this->validate($request,
array(
'title' => 'required|max:255',
'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
'category_id' => 'required|integer',
'body' => 'required'
));

<!-- How to determine whether a view exists or not  -->

- use the "View" facade
- the "exists" method will return "true" if the view exists

<?php
use Illuminate\Support\Facades\View;

if(View::exists('emails.customer'))
{

}
?>

<!-- How to get the most recent created and updated times on the view -->

<dl class="dl-horizontal">
    <label>Created At:</label>
    <p>{{ date('M j, Y H:ia',strtotime($post->created_at))}}</p>
</dl>

<!-- How to show a part of a text and replace the rest by "...." -->

@foreach($posts as $post)
<tr>
    <td>{{$post->id}}</td>
    <td>{{$post->title}}</td>
    <td>{{ substr(strip_tags($post->body),0,50) }}
        {{ strlen(strip_tags($post->body))>50 ? "..." : "" }}
    </td>
    <td>{{ date('M j, Y',strtotime($post->created_at))}}</td>
    <td><a href="{{ route('posts.show', $post->id)}}" class="btn btn-default btn-sm">View</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
    </td>
</tr>
@endforeach

<!-- How to ensure that the button that is click is highlighted on the navbar -->

<ul class="nav navbar-nav">
    <li class="{{ Request::is('/') ? 'active':' ' }}"><a href="/">Home</a></li>
    <li class="{{ Request::is('blog') ? 'active':' ' }}"><a href="/blog">Blog</a></li>
    <li class="{{ Request::is('about') ? 'active':' ' }}"><a href="/about">About</a></li>
    <li class="{{ Request::is('contact') ? 'active':' ' }}"><a href="/contact">Contact</a></li>
</ul>

<!-- How to directly access a url with parameters -->

<p><a href="{{ url('blog/'.$post->slug)}}">{{url('blog/'.$post->slug)}}</a></p>

OR

{{route('blog.single', $post->slug)}}

<!-- How to pass some values returned by Eloquent ORM query as an array -->

$categories = Category::all();

$cats = array();

foreach($categories as $category)
{
    $cats[$category->id] = $category->name;
}

<!-- How to store an image into the database -->

if($request->hasFile('featured_image'))
{
    $image = $request->file('featured_image');

    //this will get the file extension
    //to rename the file and let them be of the same extension use $image->encode('.png')
    $filename = time().'.'.$image->getClientOriginalExtension();

    //   dd($filename);
    //storage_path
    $location = public_path('images/'.$filename);
    Image::make($image)->resize(800,400)->save($location);

    $post->image = $filename;
}

<!-- Displaying the image on the view page -->
<img src="{{ asset('images/'.$post->image) }}" height="400" width="800" />

<!-- How to edit , update and delete the previous image -->

if($request->hasFile('featured_image'))
{
    //add the new photo
    //add to database
    //delete the previous photo

    $image = $request->file('featured_image');

    //this will get the file extension
    //to rename the file and let them be of the same extension use $image->encode('.png')
    $filename = time().'.'.$image->getClientOriginalExtension();

    //   dd($filename);
    //storage_path
    $location = public_path('images/'.$filename);
    Image::make($image)->resize(800,400)->save($location);

    $old_filename = $post->image;

    $post->image = $filename;

    Storage::delete($old_filename);
}

<!-- How to link the "public" folder in "app" with that of "storage" -->

php artisan storage:link

<!-- Another way of uploading files in the public folder itself -->

$request->file('image');

if($request->hasFile('image'))
{
    $request->file('image');

    //for getting the path
    //$request->image->path();

    //for getting the extension
    //$request->image->extension()

    // return $request->image->store('public');

    return Storage::putFile('public',$request->file('image'));
}
else
{
    return 'No file selected';
}


<!-- How to store the file with a custom name -->

$request->file('image');

if($request->hasFile('image'))
{
    $request->file('image');

    //for getting the path
    //$request->image->path();

    //for getting the extension
    //$request->image->extension()

    // return $request->image->store('public');

    // return Storage::putFile('public/new',$request->file('image'));

    return $request->image->storeAs('public','jatin.jpg');
}
else
{
    return 'No file selected';
}

<!-- How to display the image on the web browser -->

$url = Storage::url('jatin.jpg');
return "<img src=' ".$url." ' />";

<!-- How to get the size, last modified, copy and move the image to another folder -->

//size of the image
return Storage::size('public/jatin.jpg');

//time the image was last modified
return Storage::lastModified('public/jatin.jpg');

//how to copy a file from one folder to another
return Storage::copy('public/jatin.jpg','jatin.jpg');

// how to move a file from one folder to another
return Storage::move('public/jatin.jpg','jatin.jpg');

<!-- How to create a file from raw content and then delete any file  -->

//gives the raw data of the image file
$raw_content =  Storage::get('jatin.jpg');

//how to create an image with the above raw data
return Storage::put('public/newImage.jpg', $raw_content);

// how to delete any files
return Storage::delete('public/jatin.jpg');

<!-- Another way to upload an image on db -->

if($request->hasFile('file'))
{
    //gives the path for the file
    // $request->file->store('public/upload');

    //gives the name of the file along with extension
    // dd($request->file->getClientOriginalName());

    $filename = $request->file->getClientOriginalName();

    $filesize = $request->file->getClientSize();

    $request->file->storeAs('public/upload',$filename);

    $filename = "jatin.jpg";

    $image = new Found;
    $image->name = $filename;
    $image->size =$filesize;

    $image->save();

    // dd($filename);
    return view('jatin',compact('filename'));
}

<!-- What are sessions in Laravel -->

- Since HTTP driven applications are stateless, sessions provide a way to store information about the user across multiple requests

<!-- How and where to configure them -->

- the session configuration file is stored at "config/session.php"

- by default it is set to "file"

The following drivers are available -

1. file
- sessions are stored in "storage/framework/sessions"

2. cookie
- sessions are stored in secure, encrypted cookies

3. database
- sessions are stored in a relational database

4. memcaches/redis
- sessions are stored in one of the fast, cache based stores

5. array
- sessions are stored in a PHP array and will not persist

<!-- How to create a session database -->

Schema::create('sessions', function ($table) {
    $table->string('id')->unique();
    $table->unsignedInteger('user_id')->nullable();
    $table->string('ip_address', 45)->nullable();
    $table->text('user_agent')->nullable();
    $table->text('payload');
    $table->integer('last_activity');
});

<!-- to generate the table -->
php artisan session:table

php artisan migrate

<!-- How to delete an item by giving a confirmation to user -->

<td>
    <form id="delete-form-{{$post->id}}" class="" style="display:none" action="{{route('post.destroy', $post->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
    <a href="" onclick="
    if(confirm('Are you sure, You want to Delete this'))
    {
        event.preventDefault(); document.getElementById('delete-form-{{$post->id}}').submit();}
        else
        {
            event.preventDefault();
        }
        "><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>

    <!-- How to show a text full of html tags in normal format -->

    {!! htmlspecialchars_decode($slug->body) !!}

    <!-- How to add optional parameters in route -->
    Route::get('post/{slug?}','PostController@post')->name('post');

    <!-- How does validation happen in Laravel -->

    - By default, Laravel's base controller class uses a "ValidatesRequests" trait which provides a convenient method to validate incoming HTTP requests

    - the "validate" method accepts an incoming HTTP request and a set of validation rules.
    - if the validation rules pass, the code will keep executing normally else an exception will be thrown and the proper error response will be automatically sent back to the user

    - In the case of a traditional HTTP request, a redirect response will be generated, while a JSON response will be sent for AJAX requests

    <?php
    $this->validate($request, [
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ]);
    ?>

    <!-- How to stop on the first validation failure -->

    - assign "bail" rule to the attribute

    <?php
    $this->validate($request, [
        'title' => 'bail|unique:posts|max:255',
        'body' => 'required',
    ]);
    ?>
    - if the "unique" rule fails, the "max" rule won't be checked


    <!-- How to specify nested attributes -->

    If our HTTP request contains "nested" parameters, we may specify them in the validation rules using "dot" syntax

    <?php
    $this->validate($request, [
        'title' => 'required|unique:posts|max:255',
        'author.name' => 'required',
        'author.description' => 'required',
    ]);
    ?>

    <!-- How to display errors on the blade -->

    - use the "errors" variable
    - it is an instance of "Illuminate\Support\MessageBag"
    - The "errors" variable is bound to the biew by "Illuminate\View\Middleware\ShareErrorsFromSession" middleware, which is provided by "web" middleware
    - When this middleware is applied an "$errors" variable will always be available in our views, allowing use to conveniently assume the "$errors" variable is always defined and can be safely used

    <?php

    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
    ?>

    <!-- What to do in the case of optional fields -->

    - By default, Laravel includes the "TrimStrings" and "ConvertEmptyStringsToNull" middleware in our application's global middleware stack
    - these middleware are listed in the stack by the "App\Http\Kernel" class
    - Because of this, we will need to mark the "optional" request fields as "nullalbe" if we do not want the validator to consider "null" values as invalid

    <?php
    $this->validate($request, [
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
        'publish_at' => 'nullable|date',
    ]);
    ?>

    - Here, we are specifying that the "publish_at" field may either be "null" or a valid date representation
    - If the "nullable" modifier is not added to the rule definition, the validator would consider "null" as an invalid date

    <!-- How to create custom validation requests -->

    - Custom form requests are custom request classes that contain the validation logic
    - To create a form request class, use the "make:request" artisan command

    php artisan make:request StoreBlogPost

    - The generated class will be placed in the "app/Http/Requests" directory
    - if this directory does not exist, it will be created when we run the "make:request" command

    - We can add the validation rules to the "rules" method like this

    <?php

    public function rules()
    {
        return [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ];
    }

    ?>

    - After this, we need to "type-hint" the request on our controller method
    - The incoming form request is validated before the controller method is called

    <?php

    public function store(StoreBlogPost $request)
    {
        // The incoming request is valid...
    }

    ?>

    - If the validation fails, a redirect response will be generated to send the user back to their previous location
    - The errors will also be flashed to the session so that they are available for the display

    <!-- How to authorize form requests -->

    - The form request class also contains an "authorize" method
    - Within this method, we can check whether the authenticated user actually has the authority to update a given resource

    Eg- we can determine whether a user actually owns a blog comment they are attempting to update

    <?php

    public function authorize()
    {
        $comment = Comment::find($this->route('comment'));

        return $comment && $this->user()->can('update', $comment);
    }
    ?>

    - Since all form requests extend the base Laravel request class, we may use the "user" method to access the currently
    authenticated user
    - the "route" method grants access to the URI parameters defined on the route being called, such as "{comment}" parameter

    <!-- Route::post('comment/{comment}') -->

    - if the "authorize" method returns "false", a HTTP response with a 403 status code will be automatically returned and the controller method will not execute

    <!-- How to manually create validators -->

    - This can be done using the "Validator" facade.
    - the "make" method on the facade generates a new validator instance

    <?php

    namespace App\Http\Controllers;

    use Validator;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    class PostController extends Controller
    {
        /**
        * Store a new blog post.
        *
        * @param  Request  $request
        * @return Response
        */
        public function store(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'title' => 'required|unique:posts|max:255',
                'body' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
            }

            // Store the blog post...
        }
    }

    ?>

    - the first argument passed to the "make" method is the data under validation
    - the second argument is the validation rules that should be applied to the data

    - After checking if the request validation failed, we may use the "withErrors" method to flash the error messages to the session
    - When using this method, the "$errors" variable will be automatically shared with the views after redirection, allowing us to easily display them back to the user
    - The "withErrors" method accepts a validator, a MessageBag, or a PHP array

    <!-- How to Automatically redirect in the above case -->

    - We can call the "validate" method on an existing validator instance
    - if the validation fails, the user will automatically be redirected or , in the case of an AJAX request, a JSON response will be returned

    <?php

    Validator::make($request->all(), [
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
        ])->validate();

        ?>

        <!-- What is the use of named error bags -->

        - If we have multiple forms on a single page, we may wish to name the MessageBag of errors, allowing us to retrieve the error messages for a specific form
        - To do this, simply pass a name as the second argument to withErrors:

        <?php

        return redirect('register')->withErrors($validator, 'login')
        ?>

        - We may access the named "messageBag" instance from the "$errors" variable

        <?php
        {{$errors->login->first('email')}}
        ?>

        <!-- Different ways of working with error messages when using the custom "Validator"-->

        - After calling the "errors" method on a "Validator" instance, we will receive an "Illuminate\Support\MessageBag" instance, which as a variety of convenient methods for working with error messages

        <!-- 1. Retrieving the first error message for a field -->

        - use the "first" method

        <?php
        $errors = $validator->errors();

        echo $errors->first('email');
        ?>

        <!-- 2. Retrieving all error messages for a field -->

        - If we need to retrieve an array of all the messages for a given field, use the "get" method

        <?php
        foreach ($errors->get('email') as $message) {
            //
        }
        ?>

        - If we are validating an array form field, we may retrieve all the messages for each of the array elements using the "*" character

        <?php
        foreach ($errors->get('attachments.*') as $message) {
            //
        }
        ?>

        <!-- 3. Retrieving all error messages for all fields -->

        - use the "all" method

        <?php
        foreach ($errors->all() as $message) {
            //
        }
        ?>

        <!-- 4. Determining if messages exist for a field -->

        - use the "has" method

        <?php
        if ($errors->has('email')) {
            //
        }
        ?>

        <!-- How to define custom error messages -->

        - we can use custom error messages for validation instead of the defaults

        - we can pass the custom messages as the third argument to the "Validator::make" method

        <?php

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($input, $rules, $messages);

        ?>

        - The ":attribute" place-holder will be replaced by the actual name of the field under validation

        <?php
        $messages = [
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'The :attribute must be exactly :size.',
            'between' => 'The :attribute must be between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
        ];
        ?>

        <!-- Specifying a custom message for a given attribute -->
        - Sometimes we may wish to specify a custom error message only for a specific field
        - we can do this by using the "dot" notation
        - specify the attribute's name first, followed by the rule

        <?php
        $messages = [
            'email.required' => 'We need to know your e-mail address!',
        ];
        ?>

        <!-- How to specify custom messages in the language file -->

        do this in "validation.php"

        <?php
        'custom' => [
            'email' => [
                'required' => 'We need to know your e-mail address!',
            ],
        ],
        ?>

        <!-- Different validation rules -->

        1. accepted
        - the field under validation must be "yes", "on","1" or "true"
        - is useful for validating "Terms of Service" acceptance

        2. after:date
        - the field under validation must be a value after a given date
        - the dates will be passed into the "strtotime" function

        <?php
        'start_date' => 'required|date|after:tomorrow'
        ?>

        ** we can also compare another date using this method

        <?php
        'finish_date' => 'required|date|after:start_date'
        ?>

        3. after_or_equal:date
        - the field under validation must be a value after or equal to the given date

        4. alpha
        - the field under validation must be entirely alphabetic characters

        5. alpha_dash
        - may have alpha-numeric characters, as well as dashes and underscores

        6. alpha_num
        - must be entirely alpha-numeric characters

        7. array
        - must be a PHP array

        8. before:date
        - must be a value preceding the given date

        9. before_or_equal:date
        - must be a value preceding or equal to a given date

        10. between: min,max
        - must have a size between the given "min" and "max"

        11. boolean
        - must be able to cast as a boolean
        - accepted input are "true","false", 1, 0, "1" and "0"

        12. confirmed
        - the field under validation must have a matching field of "foo_confirmation"
        - if the field under validation is "password", a matching "password_confirmation" field must be present in the input

        13. date
        - the field under validation must be a valid date

        14. date_format:format
        - the field must match the given format

        15. different:field
        - must have a different value than the given field

        16. digits:value
        - must be numeric and must have an exact length of value

        17. digits_between:min,max
        - must have a length between the given min and max

        18. dimensions
        - the field must be an image meeting the dimensions  constraints as specified by the rule's parameter

        <?php
        'avatar' => 'dimensions:min_width=100,min_height=200'
        ?>

        Available constraints are: min_width, max_width, min_height, max_height, width, height, ratio.

        A ratio constraint should be represented as width divided by height. This can be specified either by a statement like 3/2 or a float like 1.5:

        <?php
        'avatar' => 'dimensions:ratio=3/2'
        ?>

        <?php
        use Illuminate\Validation\Rule;

        Validator::make($data, [
            'avatar' => [
                'required',
                Rule::dimensions()->maxWidth(1000)->maxHeight(500)->ratio(3 / 2),
            ],
        ]);
        ?>

        19. distinct
        - when working with arrays, the field under validation must not have any duplicate values

        <?php
        'foo.*.id' => 'distinct'
        ?>

        20. email
        - the field must be formatted as an email-address

        21. exists:table,column
        - the field must exist on a given database table

        <?php
        'state' => 'exists:states'

        OR

        'state' => 'exists:states,abbreviation'

        OR

        'email' => 'exists:connection.staff,email'
        ?>

        <?php
        use Illuminate\Validation\Rule;

        Validator::make($data, [
            'email' => [
                'required',
                Rule::exists('staff')->where(function ($query) {
                    $query->where('account_id', 1);
                }),
            ],
        ]);
        ?>

        22. file
        - the field must be a successfully uploaded file

        23. filled
        - the field must not be empty when it is present

        24. in:foo,bar
        - the field must be included in the given list of values

        <?php
        use Illuminate\Validation\Rule;

        Validator::make($data, [
            'zones' => [
                'required',
                Rule::in(['first-zone', 'second-zone']),
            ],
        ]);
        ?>

        25. in_array:anotherfield
        - the field must exist in "anotherfield's" values

        26. integer
        - must be an integer

        27. ip
        - must be an IP address

        28. ipv4
        - must be an IPv4 address

        29. json
        - must be a valid JSON string

        30. max:value
        - must be less than or equal to a maximum value

        31. mimetypes: text/plain,;
        - must match the given MIME types

        <?php
        'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime'
        ?>

        32. mimes:foo,bar..

        <?php
        'photo' => 'mimes:jpeg,bmp,png'
        ?>

        33. min:value
        - the field must have a minimum value

        34. nullable
        - the field under validation may be "null"
        - this is particularly useful when validating primitive such as strings and integers that contain null values

        35. not_in:foo,bar
        - the field must not be included in the given list of values

        <?php
        use Illuminate\Validation\Rule;

        Validator::make($data, [
            'toppings' => [
                'required',
                Rule::notIn(['sprinkles', 'cherries']),
            ],
        ]);
        ?>

        36. numeric
        - the field under validation must be numeric

        37. regex:pattern
        - the field must match the given regular expression
        - mention the rules in the form of an array

        38. required
        - the field must be present in the input data and not empty
        - the field is considered "empty" if one of the following conditions are true
        - The value is "null"
        - the value is an empty string
        - the value is an empty array
        - the value is an uploaded file with no path

        39. required_if:anotherfield, value
        - the field must be present and not empty if "anotherfield" is equal to any value

        40. required_unless:anotherfield, value
        - the field must be present and not empty unless "anotherfield" is equal to any value

        41. required_with:foo,bar,...

        - The field under validation must be present and not empty only if any of the other specified fields are present.

        42. required_with_all:foo,bar,...

        - The field under validation must be present and not empty only if all of the other specified fields are present.

        43. required_without:foo,bar,...

        - The field under validation must be present and not empty only when any of the other specified fields are not present.

        44. required_without_all:foo,bar,...

        - The field under validation must be present and not empty only when all of the other specified fields are not present.

        45. same:field
        - the given field must match the field under validation

        46. size:value
        - the field must have a size matching the given value
        - For string data, value corresponds to the number of characters
        - For numeric data, value corresponds to a given integer value
        - For an array, size corresponds to the "count" of the array
        - For files, size corresponds to the file size in kilobytes

        47. string
        - the field must be a string
        - if we want the field to be also null, we can assign the "nullable" rule to the field

        48. unique:table,column, except, id column
        - the field must be unique in the given database table
        - if the "column" option is not specified, the field name will be used

        49. url
        - the field must be a valid url

        <!-- Where are all the "Auth::routes" located -->

        Router.php

        <!-- How to add middleware in the route itself -->

        Route::group(['namespace' => 'Admin','middleware'=>'auth:admin'], function()
        {

            Route::get('admin/home','HomeController@home')->name('admin.home');
            Route::resource('admin/user','UserController');
            Route::resource('admin/post','PostController');
            Route::resource('admin/tag','TagController');
            Route::resource('admin/category','CategoryController');

            Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');

            Route::post('admin-login', 'Auth\LoginController@login');
        });

        <!-- What are Blades -->

        - it is a simple templating engine provided with Laravel
        - it does not restrict us from using plain PHP code in your views

        ** Two of the primary benefits of using Blade are "template inheritance" and "sections"

        - Let us define a "master layout"

        <?php

        <html>
        <head>
        <title>App Name - @yield('title')</title>
        </head>
        <body>
        @section('sidebar')
        This is the master sidebar.
        @show

        <div class="container">
        @yield('content')
        </div>
        </body>
        </html>

        ?>

        ** The "@section" directive defines a section of the content
        ** The "@yield" directive is used to display the contents of a given section

        ** When extending a child view, use the Blade "@extends" directive to specify which layout the child view should inherit

        <?php

        @extends('layouts.app')

        @section('title', 'Page Title')

        @section('sidebar')
        @parent

        <p>This is appended to the master sidebar.</p>
        @endsection

        @section('content')
        <p>This is my body content.</p>
        @endsection

        ?>

        ** The "@parent" directive is used to "append" (rather than overwriting) content to the layout's sidebar
        - The "@parent" directive will be replaced by the content of the layout when the view is rendered

        "@show" directive will define and immediately "yield" the section

        <!-- How to return a view using routes -->

        <?php

        Route::get('blade', function () {
            return view('child');
        });

        ?>

        <!-- What is the use of components and slots -->

        - Imagine a resuable "alert" componenet we would like to reuse throughout the application

        <?php

        <div class="alert alert-danger">
        {{ $slot }}
        </div>

        ?>

        - The "{{ $slot }}" variable will contain the content we wish to inject into the component

        <?php

        @component('alert')
        <strong>Whoops!</strong> Something went wrong!
        @endcomponent

        ?>

        - Sometimes it's helpful to define multiple slots for a component
        - Named slots may be displayed by simply "echoing" the variable that matches their name

        <?php


        <div class="alert alert-danger">
        <div class="alert-title">{{ $title }}</div>

        {{ $slot }}
        </div>

        ?>

        <?php

        @component('alert')
        @slot('title')
        Forbidden
        @endslot

        You are not allowed to access this resource!
        @endcomponent

        ?>

        <!-- How to pass additional data to the components -->

        <?php
        @component('alert', ['foo'=>'bar'])

        @endcomponent
        ?>

        <!-- How to display data on a blade template -->

        <?php
        Route::get('greeting', function () {
            return view('welcome', ['name' => 'Samantha']);
        });
        ?>

        To display the above use

        <?php

        Hello, {{$name}}

        ?>

        - We can also echo the results of any PHP function

        <?php

        The current UNIX timestamp is {{ time() }}.

        ?>

        ** The Blade {{ }} statements are automatically sent through PHP's "htmlspecialchars" function to prevent XSS attacks

        ** To display unescaped data in blade, do this

        <?php
        Hello, {!! $name !!}.
        ?>

        ** avoid this though

        <!-- How to write "if" statements in blade -->

        @if(count($records) ===1 )
        I have one record!
        @elseif(count($records)>1)
        I have multiple records
        @else
        I don't have multiple records
        @endif

        <!-- How to use "unless" in blade -->

        @unless (Auth::check())
        You are not signed in
        @endunless

        <!-- How to use "isset" and "empty" in blade -->

        @isset($records)
        //records are defined and is not null
        @endisset

        @empty($records)
        //records is empty
        @endempty


        <!-- How to run loops in blade -->

        1. For loop

        <?php

        @for($i=0; $i<10;$i++)
        The current vlaue is {{$i}}
        @endfor

        ?>

        2. Foreach loop

        <?php

        @foreach($users as $user)

        <p>This is user {{$user->id}}</p>

        @endforeach

        ?>

        3. Forelse loop

        <?php

        @forelse ($users as $user)

        <li>{{ $user->name}}</li>

        @endforelse

        ?>

        4. While loop

        @while(true)
        <p>I'm looping forever</p>
        @endwhile

        <!-- How to skip and end a loop in blade -->

        <?php

        @foreach($users as $user)
        @if($user->type==1)
        @continue
        @endif

        <li>{{ $user->name}}</li>

        @if($user->name ==5)
        @break
        @endif
        @endforeach

        ?>

        An alternative for above is

        <?php

        @foreach ($users as $user)
        @continue($user->type == 1)

        <li>{{ $user->name }}</li>

        @break($user->number == 5)
        @endforeach

        ?>

        <!-- How to use the "loop" variable -->

        - This variable provides access to the current looop index and whether this is the first or last ieration through the loop

        <?php

        @foreach($users as $user)
        @if($loop->first)
        This is the first iteration
        @endif

        @if($loop->last)
        This is the last iteration
        @endif

        <p>This is user {{ $user->id}}</p>
        @endforeach
        ?>

        ** If we are in the nested loop, we may access the parent's loop "$loop" variable via the "parent" property

        <?php

        @foreach($users as $user)
        @foreach($user->posts as $post)
        @if($loop->parent->first)
        This is the first iteration of the parent loop
        @endif
        @endforeach
        @endforeach

        ?>

        ** The loop variable has the following extra properties

        1. $loop->index
        - The index of the current loop iteration (starts at 0)

        2. $loop->iteration
        - The current loop iteration (starts at 1)

        3. $loop->remaining
        - The iteration remaining in the loop

        4. $loop->count
        - The total number of items in the array being iterated

        5. $loop->first
        - Whether this is the first iteration through the loop

        6. $loop->last
        - Whether this is the last iteration through the loop

        7. $last->depth
        - The nesting level of the current loop

        8. $loop->parent
        - When in a nested loop, the parent's loop variable

        <!-- How to write comments in blades -->

        <?php
        {{-- This comment will not be present in the rendered HTML --}}
        ?>

        <!-- How to include "subviews" inside a blade -->

        - "@include" directive allows one to include a Blade view within another view
        - all variables which are available to the parent view will be made available to the included view

        <?php

        <div>
        @include('shared.errors')

        <form>
        <!-- Form Contents -->
        </form>
        </div>

        ?>

        <!-- How to pass an array of extra data to the included view -->

        <?php

        @include('view.name', ['some'=>'data'])

        ?>

        <!-- How to include a view if one is not sure whether it exists or not -->

        <?php

        @includeIf('view.name', ['some'=>'data'])

        ?>

        <!-- How to include a view based on a boolean condition -->

        <?php

        @includeWhen($boolean, 'view.name', ['some' => 'data'])

        ?>

        <!-- How to push a javascript library from the parent view to the child view -->

        <?php

        @push('scripts')
        <script src="/example.js"></script>
        @endpush

        ?>

        <?php

        <head>
        <!-- Head Contents -->

        @stack('scripts')
        </head>
        
        ?>
