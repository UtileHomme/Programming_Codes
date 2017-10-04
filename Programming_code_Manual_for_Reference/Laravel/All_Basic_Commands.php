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

<!-- How to show tabular view fields in mobile using "+" sign  -->

<th  data-hide="phone,tablet"><b> Created At </b></th>
<th  data-hide="phone,tablet"><b> Assigned To </b></th>

<!-- How to add a create route on a button functionality -->

<a href="/cc/create?name={{ Auth::guard('admin')->user()->name }}">  <img src="/img/NewCreateLead.png" class="img-responsive" alt="add" style="    display: -webkit-inline-box;"></a>

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
