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
                <div class="panel-heading">Create snippet</div>

                <div class="panel-body">
                    {{ Form::open(array('route' => 'snippet.store', 'method' => 'POST')) }}
                    {{ csrf_field() }}

                    <div class="row items-push">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="title">Title</label>
                                    <input class="form-control input-lg" type="text" id="title" name="title" placeholder="Give it a nice title!">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="description">Description</label>
                                    <input class="form-control input-lg" type="text" id="description" name="description" placeholder="What does it do?">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="snippet">Snippet's code</label>
                                    <textarea class="form-control input-lg" rows="4" cols="50" id="snippet" name="snippet"></textarea>
                                </div>
                            </div>

                            <div class="block-content block-content-full text-center">
                                <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-check push-5-r"></i> Submit</button>
                            </div>

                        </div>
                    </div>
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
