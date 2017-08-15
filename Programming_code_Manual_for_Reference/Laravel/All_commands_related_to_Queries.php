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
