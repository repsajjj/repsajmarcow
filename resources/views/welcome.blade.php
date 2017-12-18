@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-md-offset-5">
        <h1>Welcome</h1>
    </div>
    <div class="col-md-12 col-md-offset-3">
    <div id="jssor_slider1_container" style="position:relative;width:740px;height:480px;">
        <div u="slides" style="position:absolute;overflow:hidden;left:0px;top:0px;width:740px;height:480px;">
            @foreach ($filenames as $filename)          
            <div><img u="image" src='{{$filename}}' /></div>
            @endforeach
            
        </div>
    </div>
    </div>
</div>

@endsection