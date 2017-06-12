@extends('layouts.template')

@section('css')
    @parent
    {{ Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') }}
@endsection

@section('js')
    @parent
    {{-- {{ Html::script('js/plugins.js') }} --}}
    {{ Html::script('bower_components/jquery-validation/dist/jquery.validate.min.js') }}
    {{ Html::script('js/version1/blog.js') }}
    <script type="text/javascript">
        $(document).ready(function () {
            var blog = new Blog(
                '{!! $validateMessage !!}'
            );
            blog.init();
        });
    </script>
@endsection

@section('content')
<div id="page-content">
    <div class="row">
        <div class="col-md-12 center-panel">
            <div class="block">
                <div class="block-title themed-background-dark">
                    <h2 class="font-weight-700 text-center">{{ trans('blog.create') }}</h2>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="col-lg-12">
                            <div class="col-lg-10 col-lg-offset-1 alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {!! Session::get('message') !!}
                            </div>
                        </div>
                    @endif
                    <div class="campaign">
                        {!! Form::open(['action' => 'EventController@store', 'method' => 'POST', 'id' => 'create-blog', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-3 control-label">{{ trans('blog.title') }}</label>
                                <div class="col-md-8">
                                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => trans('blog.validate.title.required')]) !!}
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group image_preview">
                                <label for="title" class="col-md-3 control-label">{{ trans('blog.image') }}</label>
                                <div class="col-xs-12 col-sm-8">
                                    {!! Form::file('img', ['id' => 'image__preview', 'multiple' => 'multiple', 'class' => 'form-control']) !!}
                                </div>
                                <div id="preview" class="col-xs-12 col-sm-8 col-sm-offset-3"></div>
                            </div>
                            <div class="form-group video_preview">
                                <label for="title" class="col-md-3 control-label">{{ trans('blog.video') }}</label>
                                <div class="col-xs-12 col-sm-8">
                                    {!! Form::text('video', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-raised btn-primary">
                                        {{ trans('blog.create') }}
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
