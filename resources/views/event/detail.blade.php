@extends('layouts.template')

@section('css')
    @parent
    {{ Html::style('css/custom.css') }}
@stop

@section('javascript')
    @parent
    {{ Html::script('js/version1/google-map.js') }}
    {{ Html::script('js/version1/jquery.plugin.min.js') }}
    {{ Html::script('js/version1/jquery.countdown.min.js') }}
    {{ Html::script('js/version1/events.min.js') }}
    {{ Html::script('js/version1/comment.js') }}
    {{ Html::script('http://maps.googleapis.com/maps/api/js?key=AIzaSyDluWcImjhXgQDLQcDvGi3Glu1TOYG6oew&callback=initMap', ['async', 'defer']) }}
@stop

@section('content')

<section class="content-area">
    <div class="top_site_main thim-parallax-image"  data-stellar-background-ratio="0.5">
        <span class="overlay-top-header"></span>
        <div class="page-title-wrapper">
            <div class="banner-wrapper container article_heading">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="heading__primary">{{ trans('index.event') }}</h1>
                    </div>
                    <div class="col-xs-6">
                        <ul id="thim_breadcrumbs" class="thim-breadcrumbs" >
                            <li class="item-home"  >
                                <a itemprop="item" class="bread-link bread-home" href="{{ action('CampaignController@index') }}" title="{{ trans('index.home') }}">
                                    <span itemprop="name">{{ trans('index.home') }}</span>
                                </a>
                            </li>
                            <li class="separator separator-home"></li>
                            <li class="item-current item-555" >
                                <span itemprop="name" class="bread-current bread-555">{{ trans('index.event') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="not-heading-sidebar"></div>
    <div class="container site-content">
        <div class="row">
            <main id="main" class="site-main col-sm-9">
                <article id="tp_event-4934" class="tp_single_event post-4934 tp_event type-tp_event status-tp-event-upcoming has-post-thumbnail hentry">
                    <div class="entry-header">
                        <h1 class="blog_title">{{ $event->title }}</h1>
                    </div>
                    <div class="summary entry-summary">
                        <div class='post-formats-wrapper'>
                            <img width="870" height="500" src="{{ asset('uploads/images/' . $event->img) }}" class="attachment-full size-full wp-post-image" alt="{{ $event->title }}"  sizes="(max-width: 870px) 100vw, 870px" />
                        </div>
                        <div class="entry-countdown">
                            <div class="tp_event_counter" data-time="{{ $event->start_time }} +0000"></div>
                        </div>
                    </div>
                    <div class="entry-content">
                        <div id="pl-4934">
                            <div class="panel-grid" id="pg-4934-0">
                                <div class="panel-grid-cell col-xs-12 col-sm-7">
                                    <div class="so-panel widget widget_sow-editor panel-first-child panel-last-child" id="panel-4934-0-0-0" data-index="0">
                                        <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                            <div class="siteorigin-widget-tinymce textwidget">
                                                <h5>{{ trans('event.event-description') }}</h5>
                                                <p>{!! $event->description !!}</p>
                                                <h5>{{ trans('event.event-content') }}</h5>
                                                {!! $event->content !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-grid-cell col-xs-12 col-sm-5">
                                    <div class="so-panel widget widget_event-info panel-first-child panel-last-child" id="panel-4934-0-1-0" data-index="1">
                                        <div  class="panel-widget-style">
                                            <div class="thim-widget-event-info thim-widget-event-info-base">
                                                <div class="thim-event-info">
                                                    <div class="inner-box">
                                                        <div class="box start">
                                                            <div class="icon"><i class="fa fa-clock-o"></i> </div>
                                                            <div class="info-detail">
                                                                <div class="title"><strong>{{ trans('event.start-time') }}</strong> </div>
                                                                <div class="info-content">
                                                                    <div class="time">{{ date('h:i A', strtotime($event->start_time)) }}</div>
                                                                    <div class="date">{{ date('D , F d , Y', strtotime($event->start_time)) }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box finish">
                                                            <div class="icon"><i class="fa fa-flag"></i> </div>
                                                            <div class="info-detail">
                                                                <div class="title"><strong>{{ trans('event.end-time') }}</strong> </div>
                                                                <div class="info-content">
                                                                    <div class="time">{{ date('h:i A', strtotime($event->end_time)) }}</div>
                                                                    <div class="date">{{ date('D , F d , Y', strtotime($event->end_time)) }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box address">
                                                            <div class="icon"><i class="fa fa-map-marker"></i> </div>
                                                            <div class="info-detail">
                                                                <div class="title"><strong>{{ trans('event.address') }}</strong> </div>
                                                                <div class="info-content">{{ $event->address }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <h5>{{ trans('event.map') }}</h5>
                                <div id="googleMap" data-lat="{{ $event->lat }}" data-lng="{{ $event->lng }}"
                                    data-address="{{ $event->address }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="share-wrapper">
                    <div class="fb-like"
                        data-href="{{ URL::action('EventController@show', $event->id) }}"
                        data-layout="standard" data-action="like"
                        data-size="small" data-show-faces="true"
                        data-share="true">
                    </div>
                </div>
                <h3>{{ trans('event.comment') }}</h3>
                <div class="tab__comment">
                    <div>
                        <div class="card">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{ trans('event.account') }}</a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('event.socilate') }}</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div id="comments" class="comments-area">
                                        <div class="comment-respond-area">
                                            <div id="respond" class="comment-respond">
                                                {!! Form::open(['method' => 'post', 'action' => 'EventController@store', 'id' => 'commentform', 'class' => 'comment-form']) !!}
                                                <p class="comment-form-comment">
                                                    {!! Form::textarea('comment', '', [
                                                        'id' => 'comment',
                                                        'class' => 'comment_area',
                                                        'cols' => '45', 'rows' => '8',
                                                        'placeholder' => trans('event.comment'),
                                                    ]) !!}
                                                </p>
                                                <p class="form-submit">
                                                    {!! Form::submit(trans('event.post-comment'), ['data-id' => $event->id, 'id' => 'submit-comment', 'class' => 'submit', 'disabled']) !!}
                                                </p>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                        @if (count($event->comments) > 0)
                                            @include('event.comment')
                                        @endif
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="fb-comments" data-href="{{ URL::action('EventController@show', $event->id) }}" data-order-by="reverse_time" data-numposts="5" data-width="100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('layouts.right_bar')
            <div class="clear"></div>
        </div>
    </div>
</section>
@stop
