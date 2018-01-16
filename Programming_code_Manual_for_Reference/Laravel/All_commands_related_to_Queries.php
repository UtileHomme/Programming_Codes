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

OR

post::where('id',$id)->delete();
return redirect()->back();

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

    <!-- How to run raw SQL queries -->

    - the DB facade provides methods for each type of query: select, update, insert, delete and statement

    <?php

    $users = DB::select('select * from users where active = ?', [1]);

    return view('user.index', ['users'=>$users]);

    ?>

    - second argument is parameter binding
    - it provides protection against SQL injection

    ** the "select" method will always return an "array" of results

    <?php

    foreach ($users as $user) {
        echo $user->name;
    }

    ?>

    ** We can also use "name bindings" instead of "?"

    <?php

    $results = DB::select('select * from users where id = :id', ['id' => 1]);

    ?>

    <!-- How to run a "raw" insert query -->

    <?php

    DB::insert('insert into users(id,name) values(?,?)', [1,'Dayle']);

    ?>

    <!-- How to run a "raw" update query -->

    <?php

    $affected = DB::update('update users set votes = 100 where name = ?', ['John']);

    ?>

    <!-- How to run a "delete" query -->

    <?php

    $deleted = DB::delete('delete from users');

    ?>

    <!-- How to run a general drop query -->

    <?php

    DB::statement('drop table users');

    ?>

    <!-- What is the Laravel Database Query Builder -->

    - it uses PDO parameter binding to protect our application against SQL injection attacks

    <!-- How to retrieve all rows from a table -->

    <?php

    $users = DB::table('users')->get();

    ?>

    ** the "get" method returns an "Illuminate\Support\Collection" containing the results where each result is an instance of the PHP "StdClass" object

    <!-- How to retrieve a single row/column from a table -->

    ** To retrieve a single row from the database

    <?php
    $user = DB::table('users')->where('name','John')->first();
    ?>

    ** to retrieve a single value from a single column

    <?php

    $email = DB::table('users')->where('name','John')->value('email');
    ?>

    <!-- How to retrieve a list of column values -->

    <?php

    $titles = DB::table('roles')->pluck('title');

    foreach ($titles as $title) {
        echo $title;
    }

    ?>

    - retrieves all the values from the column mentioned in the "pluck" function and stores them in an array format

    <!-- How to use aggregates -->

    <?php

    $users = DB::table('users')->count();

    $price = DB::table('orders')->max('price');

    $price = DB::table('orders')->where('finalized',1)->avg('price');

    ?>

    <!-- How to use select statements -->

    <?php

    $users = DB::table('users')->select('name', 'email as user_email')->get();

    ?>

    <!-- How to use the "distinct" clause -->

    <?php

    $users = DB::table('users')->distinct()->get();

    ?>

    <!-- How to add a new column to a query builder instance -->

    <?php

    $query = DB::table('users')->select('name');

    $users = $query->addSelect('age')->get();

    ?>

    <!-- How to use Raw Expressions -->

    <?php

    $users = DB::table('users')
    ->select(DB::raw('count(*) as user_count, status'))
    ->where('status', '<>', 1)
    ->groupBy('status')
    ->get();

    ?>

    <!-- How to use a join query -->

    - The first argument passed to the "join" method is the name of the table we need to join to, while the remaining arguments specify the column
    constraints for the join

    <?php

    $users = DB::table('users')
    ->join('contacts', 'users.id', '=', 'contacts.user_id')
    ->join('orders','users.id','=','orders.user_id')
    ->select('users.*','contacts.phone','orders.price')
    ->get();

    ?>

    <!-- Left Join Clause -->

    <?php

    $users = DB::table('users')
    ->leftJoin('posts', 'users.id', '=','posts.user_id')
    ->get();

    ?>

    <!-- Cross Join Clause -->

    - To perform a "cross join" use the crossJoin method with the name of the table you wish to cross join to
    - A cross join generates a cartesian product between the first and the joined table

    <?php

    $users = DB::table('sizes')
    ->crossJoin('colours')
    ->get();

    ?>

    <!-- How to write Unions -->

    - It provides a "quick way" to union two queries together

    <?php

    $first = DB::table('users')
    ->whereNull('first_name');

    $users = DB::table('users')
    ->whereNull('last_name')
    ->union($first)
    ->get();

    ?>

    <!-- How to use the "where" clauses -->

    - The most basic call to "where" requires three arguments
    - The first argument is the name of the column
    - The second argument is an operator, which can be any db supported operator
    - The third argument is the value to evaluate against the column

    <?php

    $users = DB::table('users')->where('votes','=',100)->get();

    OR

    $users = DB::table('users')->where('votes',100)->get();

    ?>

    <!-- Using other operators -->

    <?php

    $users = DB::table('users')
    ->where('votes', '>=', 100)
    ->get();

    $users = DB::table('users')
    ->where('votes', '>=', 100)
    ->get();

    $users = DB::table('users')
    ->where('name', 'like', 'T%')
    ->get();

    ?>

    <!-- How to pass array of parameters to where class -->

    <?php

    $users = DB::table('users')->where(['status'=>1], ['subscribed','<>',1])
    ->get();

    ?>

    <!-- How to use where clause with OR -->

    <?php

    $users = DB::table('users')
    ->where('votes', '>', 100)
    ->orWhere('name', 'John')
    ->get();

    ?>

    <!-- Additional Where clauses -->

    a. whereBetween

    <?php

    $users = DB::table('users')
    ->whereBetween('votes',[1,100])->get();

    ?>

    b. whereNotBetween

    <?php

    $users = DB::table('users')
    ->whereNotBetween('votes', [1, 100])
    ->get();

    ?>

    c. whereIn / whereNotIn

    <?php

    $users = DB::table('users')
    ->whereIn('id',[1,2,3])
    ->get();

    $users = DB::table('users')
    ->whereNotIn('id', [1, 2, 3])
    ->get();

    ?>

    d. whereNull / whereNotNull

    <?php

    $users = DB::table('users')
    ->whereNull('updated_at')
    ->get();

    ?>

    e. whereDate / whereMonth / whereDay / whereYear

    <?php

    $users = DB::table('users')
    ->whereDate('created_at', '2016-12-31')
    ->get();

    $users = DB::table('users')
    ->whereMonth('created_at', '12')
    ->get();

    $users = DB::table('users')
    ->whereDay('created_at', '31')
    ->get();

    $users = DB::table('users')
    ->whereYear('created_at', '2016')
    ->get();

    ?>

    f. whereColumn

    <?php

    $users = DB::table('users')
    ->whereColumn('first_name', 'last_name')
    ->get();

    OR

    $users = DB::table('users')
    ->whereColumn('updated_at', '>', 'created_at')
    ->get();

    OR

    $users = DB::table('users')
    ->whereColumn([
        ['first_name', '=', 'last_name'],
        ['updated_at', '>', 'created_at']
        ])->get();

        ?>

        <!-- How to reproduce the following query in Laravel -->

        select * from users where name = 'John' or (votes > 100 and title <> 'Admin')

        <?php

        DB::table('users')
        ->where('name','=','John')
        ->orWhere(function ($query)
        {
            $query->where('votes','>',100)
            ->where('title','>','Admin')
        }
        )->get();

        ?>

        <!-- How to sort the results of a column in a particular order -->

        1. orderBy
        - allows one to sort the result of the query by a given column
        - the first argument should be the column we wish to sort by
        - the second column controls the direction of the sort

        <?php

        $users = DB::table('users')
        ->orderBy('name', 'desc')
        ->get();

        ?>

        2. lastest/oldest
        - These two methods allow one to easily order results by date
        - By default, result be ordered by "created_at" column

        <?php

        $user = DB::table('users')
        ->latest()
        ->first();

        ?>

        3. inRandomOrder

        <?php

        $randomUser = DB::table('users')
        ->inRandomOrder()
        ->first();

        ?>

        4. groupBy / having

        <?php

        $users = DB::table('users')
        ->groupBy('account_id')
        ->having('account_id', '>', 100)
        ->get();

        ?>

        5. skip/take
        - To limit the number of results returned from the query or to skip a given number of results in the query

        <?php

        $users = DB::table('users')->skip(10)->take(5)->get();

        OR

        $users = DB::table('users')->offset(10)->limit(5)->get();

        ?>

        <!-- Conditional clauses -->

        - Sometimes we may want clauses to apply to a query only when something else is true

        <?php

        $role = $request->input('role');

        $users = DB::table('users')
        ->when($role, function ($query) use ($role) {
            return $query->where('role_id', $role);
        })
        ->get();

        ?>

        ** The "when" method only executes the given Closue when the first parameter is "true"

        <!-- Insert queries -->

        <?php

        DB::table('users')->insert(['email'=>'jatins368@gmail.com','votes'=>0]);

        OR

        DB::table('users')->insert([
            ['email' => 'taylor@example.com', 'votes' => 0],
            ['email' => 'dayle@example.com', 'votes' => 0]
        ]);

        ?>

        <!-- How to retrieve the Autoincremented ID  when a record is inserted  -->

        <?php

        $id = DB::table('users')->insertGetId(['email'=>'jatins368@gmail.com','votes'=>0])

        ?>

        <!-- How to write an update query -->

        <?php

        DB::table('users')
        ->where('id', 1)
        ->update(['votes' => 1]);

        ?>

        <!-- How to increment or decrement the value of a particular column -->

        <?php

        DB::table('users')->increment('votes');

        DB::table('users')->increment('votes', 5);

        DB::table('users')->decrement('votes');

        DB::table('users')->decrement('votes', 5);

        ?>

        <!-- How to delete a particular record  -->

        <?php

        DB::table('users')->delete();

        DB::table('users')->where('votes', '>', 100)->delete();

        ?>

        <!-- How to delete an entire table and reset the auto-incrementing to 0 -->

        <?php

        DB::table('users')->truncate();

         ?>
