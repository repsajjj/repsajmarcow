@extends('layouts.app')

@section('content')

<div class="container">

<div id="jssor_slider1_container" style="position:relative;top:35%;left:15%;width:740px;height:480px;">
    <div u="slides" style="position:absolute;overflow:hidden;left:0px;top:0px;width:740px;height:480px;">
        @foreach ($filenames as $filename)  
        
        <div><img u="image" src='{{$filename}}' /></div>
        @endforeach
        
    </div>
</div>
<script>
jQuery(document).ready(function ($) {
    jssor_slider1_init("jssor_slider1_container");
});
   
</script>
@endsection