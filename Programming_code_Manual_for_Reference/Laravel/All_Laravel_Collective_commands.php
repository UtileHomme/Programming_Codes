<!-- For Opening a form -->

{!! Form::open(['url' => 'foo/bar']) !!}
//
{!! Form::close() !!}

To define any method other than "POST" and "GET", "PUT" and "DELETE" need to be explicitly mentioned like this:

echo Form::open(['url' => 'foo/bar', 'method' => 'put'])

<!-- Passing parameters while opening a form -->
{!! Form::open(array('route'=>'posts.store','data-parsley-validate'=>'','files'=>true)) !!}

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
