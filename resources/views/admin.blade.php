@extends('layouts.app')

@section('content')
    <div class="panel-body" >
        <!-- Display Validation Errors -->
        @include('common.errors')
        <div id="form_gear">  
        
            {{ Form::open(array('url' => 'gear')) }}
            {{Form::label('brand', 'Brand')}} {{Form::text('brand')}}</br>
            {{Form::label('type', 'Type')}} {{Form::text('type')}}</br> 
            {{Form::label('image', 'Image')}} {{Form::text('image')}} </br>  
            {{Form::label('sort', 'Sort')}} {{Form::select('sort', array('Audio' => 'Audio',
                                                                        'Light' => 'Light',
                                                                        'Other' => 'Other'))
                                            }} </br>  
            {{Form::submit('Add gear')}}
            {{ Form::close() }}         
       </div>          
    </div>
@endsection