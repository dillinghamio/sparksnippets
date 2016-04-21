@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <!-- Flash messages -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    @foreach ($errors->all() as $error)
                        {!! $error !!}<br/>
                    @endforeach
                </div>
            @endif
            <!-- END Flash messages -->

            <div class="panel panel-default">
                <div class="panel-heading">List of snippets</div>

                <div class="panel-body">
                    <ul>
                        @foreach($snippets as $snippet)
                            <li><a href="{{ url("/snippet/{$snippet->id}") }}">{{$snippet->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
