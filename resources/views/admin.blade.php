@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

      
        <form action="/audios" method="POST" class="form-horizontal">
        
            {{ csrf_field() }}

            
            <div class="form-group">
                <h2>Audio</h2>
                <label for="audio" class="col-sm-3 control-label">Audio Product</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="audio-product" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add audio gear
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection