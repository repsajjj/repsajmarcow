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
    
    <footer style="position: absolute; bottom: 0; left: 0; right:0;">
        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/320083939&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></iframe>
    </footer>   
</div>


@endsection