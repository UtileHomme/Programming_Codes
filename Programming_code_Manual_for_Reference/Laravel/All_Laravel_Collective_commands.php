<!-- For Opening a form -->

{!! Form::open(['url' => 'foo/bar']) !!}
    //
{!! Form::close() !!}

To define any method other than "POST" and "GET", "PUT" and "DELETE" need to be explicitly mentioned like this:

echo Form::open(['url' => 'foo/bar', 'method' => 'put'])

<!-- Another way of opening the form along with route and the method name & actions-->

echo Form::open(['route' => 'route.name'])

echo Form::open(['action' => 'Controller@method'])

<!-- This is how we pass route parameters  -->

echo Form::open(['route' => ['route.name', $user->id]])

echo Form::open(['action' => ['Controller@method', $user->id]])

<!-- In case of file uploads -->

echo Form::open(['url' => 'foo/bar', 'files' => true])
