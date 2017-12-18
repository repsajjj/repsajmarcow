@extends('layouts.app')

@section('content')
<h1>Gear</h1></br>
    <div class="panel-body" >
        <!-- Display Validation Errors -->
        @include('common.errors')     
        <div class="row">
        @foreach ($gears as $gear)
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="images/gear/{{ $gear->image }}" alt="Card image cap"  height="250" width="250">
                <div class="card-body">
                    <h4 class="card-title">{{ $gear->brand }} {{ $gear->type }}</h4>
                    <p class="card-text">Description</p>
                    <p class="card-text"><small class="text-muted"> {{ $gear->sort }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
        </div>        
    </div>
@endsection

