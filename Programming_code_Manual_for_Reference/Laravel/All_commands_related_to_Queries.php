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

<!-- How to create one to many relationships -->

- Each category belongs to many posts
- Suppose one category can be assigned to many posts

class Category extends Model
{
    //we are telling laravel to use the 'categories' table when working with this model
    protected $table = 'categories';

    // One to many relationship - one category belongs to many posts
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}

class Post extends Model
{
    // Post belongs to one category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

<!-- How to access the category for a post -->

<!-- Post model then category method and its name -->
<p>Posted In: {{ $post->category->name }}</p>

<!-- If we do not want to do a particular function from a controller, we make the route this way -->
Route::resource('categories','CategoryController',['except'=>'create']);

<!-- How to create a situation in which many tags can belong to many posts -->

***** naming of table is done alphabetically (post_tag)

class Post extends Model
{

  //for getting the column names of a particular table
  public function getTableColumns()
  {
    return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
  }

  //for Many to Many relation
  public function tags()
  {
    return $this->belongsToMany('App\Tag');
  }
}


class Tag extends Model
{
    public function posts()
    {
      return $this->belongsToMany('App\Post');
    }
}

<!-- How to create a migration for the above set up -->

public function up()
{
  Schema::create('post_tag', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('post_id')->unsigned();
      // Now we are telling the table that the next field is a foreign key
      $table->foreign('post_id')->references('id')->on('posts');

      $table->integer('tag_id')->unsigned();
      $table->foreign('tag_id')->references('id')->on('tags');

  });
}

<!-- How to store the tags for the post in the database -->

$post->save();

// This is for sending the data of tags to db
//this is for creating the many to many relationship
//second parameter is to not allow laravel to override the associations which have been set with posts
$post->tags()->sync($request->tags,false);

<script type="text/javascript">
$('.select2-multi').select2();

// This is for ensuring that the edit field has all the pre selected tags
$('.select2-multi').select2().val({!! json_encode($post->tags()->pluck('tags.id')) !!}).trigger('change')
</script>

<!-- How to get the count for number of posts associated with a tag -->

<h1>{{ $tag->name }} Tag <small>{{$tag->posts()->count()}} Posts</small></h1>

<!-- How to delete tags and posts associations -->

Inside PostController

public function destroy($id)
{
  $post = Post::find($id);
  $post->tags()->detach();

  $post->delete();

  Session::flash('success','The Post was Successfully Deleted');
  return redirect()->route('posts.index');


Inside Tags Controller

public function destroy($id)
{
    $tag = Tag::find($id);
    $tag->posts()->detach();

    $tag->delete();

    Session::flash('success', 'Tag was deleted successfully');

    return redirect()->route('tags.index');
}
