<!-- How to write a Basic insert DB query in tinker -->
DB::table('songs')->insert(['title'=>'Closer','artist'=>'Chainsmokers','created_at'=>new DateTime,'updated_at'=>new DateTime])

<!-- How to write a Basic data retrieval query in tinker -->
DB::table('songs')->get();

<!-- How to write a data retrieval query with "where" clause -->
DB::table('songs')->where('id',1)->get();

<!-- How to apply JOINS on the basis of foreign keys and use orderBy and pagination-->

$leads=DB::table('leads')
->select('services.*','personneldetails.*','addresses.*','leads.*')
->join('personneldetails', 'leads.id', '=', 'personneldetails.Leadid')
->join('addresses', 'leads.id', '=', 'addresses.leadid')
->join('services', 'leads.id', '=', 'services.LeadId')
->orderBy('leads.id', 'DESC')
->paginate(50);

<!-- This is how we query data from the table and try to retrieve the value of a particular column -->
$name=DB::table('employees')->where('FirstName',$name1)->value('Designation');

<!-- This is how we apply JOINS on different tables on the basis of different ids and tables -->

$leads = DB::table('leads')
->select('leads.*','employees.*','leads.*','services.*')
->join('verticalcoordinations','leads.id','=','verticalcoordinations.leadid')
->join('employees','verticalcoordinations.empid','=','employees.id')
->join('services', 'leads.id', '=', 'services.Leadid')
->where('ServiceStatus',$d)
->where('FirstName',$logged_in_user)
->orderBy('leads.id', 'DESC')
->paginate(50);

- use "paginate" or "get" for retrieving all the data
- use "count" for retrieving the count of all the data retrieved

*** The "id" which we want to order by should have its "table name" last in the "select" statement

<!-- This is how we apply a query with "LIKE" in laravel -->

$data1 = DB::table('leads')->select('services.*','personneldetails.*','addresses.*','leads.*')
->join('personneldetails', 'leads.id', '=', 'personneldetails.Leadid')
->join('addresses', 'leads.id', '=', 'addresses.leadid')
->join('services', 'leads.id', '=', 'services.LeadId')
->Where($filter1, 'like',   $keyword1 . '%')->orderBy('leads.id', 'DESC')->paginate(200);

<!-- This is how we use "whereIn" to simulate "OR" statements -->

$Servicesarray = ["Physiotherapy - clinic","Physiotherapy - Home","Physiotherapy"];

$newcount = DB::table('services')
->where('ServiceStatus',$status0)
->wherein('ServiceType',$Servicesarray)
->orderBy('id', 'DESC')
->count();''

<!-- How to to check for data between two dates -->

$leads=DB::table('leads')
->select('services.*','personneldetails.*','addresses.*','leads.*')
->join('personneldetails', 'leads.id', '=', 'personneldetails.Leadid')
->join('addresses', 'leads.id', '=', 'addresses.leadid')
->join('services', 'leads.id', '=', 'services.LeadId')
->where('ServiceStatus',$status)
->whereBetween('created_at',[$Fromdate,$Todate])
->orderBy('leads.id', 'DESC')
->paginate(50);

<!-- How to apply "orwhere" in a query -->

$processingcount1= DB::table('leads')
->select('products.*','pharmacies.*','addresses.*','leads.*','orders.*','prodleads.*')
->join('prodleads', 'leads.id', '=', 'prodleads.Leadid')
->join('addresses', 'leads.id', '=', 'addresses.leadid')
->join('products', 'prodleads.Prodid', '=', 'products.id')
->join('pharmacies', 'prodleads.PharmacyId', '=', 'pharmacies.id')
->join('orders', 'prodleads.orderid', '=', 'orders.id')
->where('prodleads.empid',$log_id)
->where('OrderStatus',$status1)
->orwhere('OrderStatusrent',$status1)
->orwhere('pharmacies.pOrderStatus',$status1)
->orderBy('prodleads.id', 'DESC')
->count();

<!-- How to add data from "Submit" form to db -->

$lead = new lead;

$lead->fName=$request->clientfname;
$lead->mName=$request->clientmname;
$lead->lName=$request->clientlname;
$lead->EmailId=$request->clientemail;
$lead->Source=$source;
$lead->MobileNumber=$request->clientmob;
$lead->Alternatenumber=$request->clientalternateno;
$lead->EmergencyContact =$request->EmergencyContact;
$lead->AssesmentReq=$request->assesmentreq;
$lead->createdby=$request->loginname;
$lead->Referenceid=$ref;
$lead->empid=$empid;
$lead->save();

<!-- How to find the "max" id from the table -->

$leadid=DB::table('leads')->max('id');

<!-- How to update a particular field in the table -->

DB::table('provisionalleads')->where('id',$pid)->update(['active'=>'0']);

// retrieve all the column and the corresponding details from the particular row
$lead = lead::find($leadid);

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
