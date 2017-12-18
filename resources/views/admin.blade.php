@extends('layouts.app')

@section('content')
    <div class="panel-body" >
        <!-- Display Validation Errors -->
        @include('common.errors')
        <div id="form_gear">  
            <h1>Add new gear</h1>
            {{ Form::open(array('url' => 'gear','files'=>'true')) }}
            {{Form::label('brand', 'Brand')}}                   {{Form::text('brand')}}</br>
            {{Form::label('type', 'Type')}}                     {{Form::text('type')}}</br>
            {{Form::label('description', 'Description')}}       {{Form::textarea('description', null, ['size' => '30x3'])}}</br>
            {{Form::label('description', 'Price')}}             {{Form::number('price')}}€</br> </br> 
            {{Form::label('image', 'Image')}}                   {{Form::file('image')}} </br>  </br> 
            {{Form::label('sort', 'Sort')}}                     {{Form::select('sort', array('Audio' => 'Audio',
                                                                        'Light' => 'Light',
                                                                        'Other' => 'Other'))
                                                                }} </br>  
            {{Form::submit('Add gear')}}
            {{ Form::close() }}         
       </div>          
    </div>
@endsection