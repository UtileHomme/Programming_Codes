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
->count();

--------------------------------------------------------------------DONE------------------------------------------------------------------
