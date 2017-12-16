@extends('layouts.app')

@section('content')
    <div class="panel-body" >
    
        <!-- Display Validation Errors -->
        @include('common.errors')
        <h1>Gear</h1>
        @foreach ($gears as $gear)

        {{ $gear->brand }} {{ $gear->type }}</br>       
      
        @endforeach
    </div>
@endsection