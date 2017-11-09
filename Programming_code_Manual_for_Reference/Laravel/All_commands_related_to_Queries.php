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

<!-- How a migration looks like -->

public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->text('body');
        $table->timestamps();
    });
}

<!-- How to pull all data from a table -->

- Post::all()

<!-- How to use "where" with Models -->

- Post::where('title' => 'My First Title')->get();


<!-- How to update a particular row in the database -->

$post = Post::find($id);
$user = User::find($id);

$post->title = $request->input('title');
$post->slug = $request->input('slug');
$post->category_id = $request->input('category_id');
$post->body = Purifier::clean($request->input('body'));

$post->save();

<!-- How to delete a particular row in the database -->

$post = Post::find($id);
$post->tags()->detach();

$post->delete();

Session::flash('success','The Post was Successfully Deleted');
return redirect()->route('posts.index');

<!-- What does "Post::" mean when retrieving a query -->

- it is same as writing "DB::select(*)"

<!-- How to add indexes in tables for faster retrieval -->

$table->string('slug')->unique()->after('body');

OR

$table->index(['slug','title']);

<!-- How to write where clause to test "equality" -->

$post = Post::where('slug','=',$slug)->first();
