<!-- For Opening a form -->

{!! Form::open(['url' => 'foo/bar']) !!}
//
{!! Form::close() !!}

To define any method other than "POST" and "GET", "PUT" and "DELETE" need to be explicitly mentioned like this:

echo Form::open(['url' => 'foo/bar', 'method' => 'put'])

<!-- Passing parameters while opening a form -->
{!! Form::open(array('route'=>'posts.store','data-parsley-validate'=>'','files'=>true)) !!}

OR

{!! Form::open(['route'=> ['posts.destroy', $post->id], 'method' =>'DELETE']) !!}

<!-- How to define a label -->
{{Form::label('title','Title:')}}

<!-- How to create a text field with parameters -->
<!-- column from table,default value,array of classes or other options -->
{{Form::text('title',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}

<!-- How to add a textareax -->
{{Form::label('body','Post Body')}}
{{Form::textarea('body',null,array('class'=>'form-control'))}}

<!-- How to add a submit button -->
{{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px;'))}}

<!-- Another way of opening the form along with route and the method name & actions-->

echo Form::open(['route' => 'route.name'])

echo Form::open(['action' => 'Controller@method'])

<!-- This is how we pass route parameters  -->

echo Form::open(['route' => ['route.name', $user->id]])

echo Form::open(['action' => ['Controller@method', $user->id]])

<!-- In case of file uploads -->

echo Form::open(['url' => 'foo/bar', 'files' => true])

<!-- How to add stylesheets  -->

{!! Html::style('css/parsley.css') !!}
{!! Html::style('css/select2.min.css')!!}

<!-- How to add scripts -->

{!! Html::script('js/parsley.min.js') !!}

<!-- How to link routes from the view page using laravel collective -->

{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}

<!-- How to edit a form using Model-form binding -->

<!-- This post is a model object -->
<!-- We send the editted data to the PostController update function using this form  -->
<!-- We are connecting the form to a model -->
<!-- We have to manually tell the form which method to use since by default a POST request is going -->
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=>'PUT']) !!}

<!-- How to make a form submit button -->

{{ Form::submit('Save Changes',['class'=>'btn btn-block btn-success'])}}

<!-- How to add an email field -->

{{ Form::label('email', 'Email:') }}
{{ Form::email('email',null,['class'=>'form-control']) }}

<!-- How to add a passwords field -->

{{ Form::label('password', "Password:")}}
{{ Form::password('password', ['class' => 'form-control']) }}

<!-- How to add a "remember me" field -->

{{ Form::checkbox('remember') }}
{{Form::label('remember',"Remember Me")}}

<!-- How to send a hidden field in a form -->

{{ Form::hidden('token', $token) }}

<!-- How to add a delete button with route and appropriate method -->

{{ Form::open(['route' => ['tags.destroy', $tag->id], 'method'=>'DELETE']) }}
{{ Form::submit('Delete', ['class'=> 'btn btn-danger btn-block', 'style'=>'margin-top:20px;'])}}
{{ Form::close()}}
