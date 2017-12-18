@extends('layouts.app')

@section('content')

<div class="container">
<h1>Contact us</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>
@endsection