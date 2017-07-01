@extends('layouts.template')

@section('css')
    @parent
    {{ Html::style('css/custom.css') }}
    {{ Html::style('css/chatbox.css') }}
    {{ Html::style('bower_components/bootstrap-star-rating/css/star-rating.css') }}
    {{ Html::style('bower_components/bootstrap-star-rating/css/theme-krajee-fa.css') }}
@stop

@section('js')
    @parent
    {{ Html::script('js/version1/google-map.js') }}
    {{ Html::script('js/version1/jquery.countdown.min.js') }}
    {{ Html::script('js/version1/comment.js') }}
    {{ Html::script('https://cdn.socket.io/socket.io-1.3.4.js') }}
    {{ Html::script('js/version1/chatbox.js') }}
    {{ Html::script('js/version1/comment_socket.js') }}
    {{ Html::script('js/version1/contributions_socket.js') }}
    {{ Html::script('js/version1/contribute.js') }}
    {{ Html::script('js/version1/detail.js') }}
    {{ Html::script('bower_components/bootstrap-star-rating/js/star-rating.js') }}
    {{ Html::script('http://maps.googleapis.com/maps/api/js?key=AIzaSyDluWcImjhXgQDLQcDvGi3Glu1TOYG6oew&callback=initMap', ['async', 'defer']) }}
    <script type="text/javascript">
        $(document).ready(function () {
            var comment = new Comment('{{ action('CommentController@store') }}',
                '{{ config('path.to_avatar_default') }}',
                '{{ action('CampaignController@joinOrLeaveCampaign') }}',
                '{{ trans('campaign.request_sent') }}',
                '{{ trans('campaign.request_join') }}',
            );
            comment.init();

            var contribute = new Contribute('{{ action('ContributionController@store') }}');
            contribute.init();
        });
    </script>
@stop

@section('content')

<section class="content-area">
    <div class="hide-comment" data-campaign-id="{{ $detailCampaign->id }}"
        data-host="{{ config('app.key_program.socket_host') }}"
        data-port="{{ config('app.key_program.socket_port') }}">
    </div>
    <div class="top_site_main thim-parallax-image" data-stellar-background-ratio="0.5">
        <span class="overlay-top-header"></span>
        <div class="page-title-wrapper">
            <div class="banner-wrapper container article_heading">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="heading__primary">{{ trans('index.campaigns') }}</h1>
                    </div>
                    <div class="col-xs-6">
                        <ul id="thim_breadcrumbs" class="thim-breadcrumbs">
                            <li class="item-home" itemprop="itemListElement">
                                <a itemprop="item" class="bread-link bread-home" href="{{ action('CampaignController@index') }}">
                                    <span itemprop="name">{{ trans('index.home') }}</span>
                                </a>
                            </li>
                            <li class="separator separator-home"></li>
                            <li class="item-current item-cat item-custom-post-type-tp_event">
                                <a itemprop="item" class="bread-cat bread-custom-post-type-tp_event" href="{{ action('CampaignController@showCampaigns') }}">
                                    <span itemprop="name">{{ trans('index.campaigns') }}</span>
                                </a>
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
                <div role="tabpanel">
                    <ul class="nav nav-tabs no-margin-left" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#detailCampaign" aria-controls="home" role="tab" data-toggle="tab">home</a>
                        </li>
                        <li role="presentation">
                            <a href="#confirm" aria-controls="tab" role="tab" data-toggle="tab">{{ trans('campaign.confirmed') }}</a>
                        </li>
                        <li role="presentation">
                            <a href="#unconfirm" aria-controls="tab" role="tab" data-toggle="tab">{{ trans('campaign.unconfirmed') }}</a>
                        </li>
                        <li role="presentation" class="pull-right">
                            @if ($detailCampaign->status)
                                @if (auth()->check())
                                    {!! Form::open(['method' => 'POST', 'id' => 'formRequest']) !!}
                                    {!! Form::hidden('campaign_id', $detailCampaign->id) !!}
                                @if (empty($userCampaign))
                                    {!! Form::submit(trans('campaign.request_join'), ['class' => ' joinOrLeave']) !!}
                                @elseif (empty($userCampaign->status) && empty($userCampaign->is_owner))
                                    {!! Form::submit(trans('campaign.request_sent'), ['class' => ' joinOrLeave']) !!}
                                @elseif ($userCampaign->status && empty($userCampaign->is_owner))
                                    {!! Form::submit(trans('campaign.leave_campaign'), ['class' => ' joinOrLeave']) !!}
                                @endif
                                    {!! Form::close() !!}
                                @else
                                    <a href="{{ action('Auth\UserLoginController@getLogin') }}"
                                    class="btn btn-color text-white">{{ trans('campaign.request_join') }}</a>
                                @endif
                            @endif
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="detailCampaign">
                            <article id="tp_event-4934" class="tp_single_event post-4934 tp_event type-tp_event status-tp-event-upcoming has-post-thumbnail hentry">
                                <div class="entry-header">
                                    <h1 class="blog_title">{{ $detailCampaign->name }}</h1>
                                </div>
                                <div class="summary entry-summary">
                                    <div class='post-formats-wrapper max-width-height'>
                                        <a class="post-image" href="">
                                            <img src="{{ $detailCampaign->image->image }}" class="attachment-full size-full wp-post-image fix-img-cp" alt="{{ $detailCampaign->name }}" srcset="{{ $detailCampaign->image->image }} 870w, {{ $detailCampaign->image->image }} 300w, {{ $detailCampaign->image->image }} 768w" sizes="(max-width: 870px) 100vw, 870px" />
                                        </a>
                                    </div>
                                    <div class="entry-countdown">
                                        <div class="tp_event_counter" id="cowndown_timmer" data-time="{{ $detailCampaign->start_time }}"></div>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div id="pl-4934">
                                        <div class="panel-grid" id="pg-4934-0">
                                            <h5 class="margin-top">{{ trans('campaign.description') }}</h5>
                                            <div class="panel-grid-cell col-xs-12 col-sm-7">
                                                <div class="so-panel widget widget_sow-editor panel-first-child panel-last-child" id="panel-4934-0-0-0" data-index="0">
                                                    <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                                        <div class="siteorigin-widget-tinymce textwidget">
                                                            <p>{!! $detailCampaign->description !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-grid-cell col-xs-12 col-sm-5">
                                                <div class="so-panel widget widget_event-info panel-first-child panel-last-child" id="panel-4934-0-1-0" data-index="1">
                                                    <div  class="panel-widget-style">
                                                        <div class="thim-widget-event-info thim-widget-event-info-base">
                                                            <div class="thim-event-info infomation">
                                                                <div class="inner-box">
                                                                    <div class="box start">
                                                                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                                                                        <div class="info-detail">
                                                                            <div class="title"><strong>{{ trans('campaign.label_for.start_time') }}</strong></div>
                                                                            <div class="info-content">
                                                                                <div class="time">{{ $detailCampaign->timeHours('start_time') }}</div>
                                                                                <div class="date">{{ $detailCampaign->timeDay('start_time') }}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box finish">
                                                                        <div class="icon"><i class="fa fa-flag"></i></div>
                                                                        <div class="info-detail">
                                                                            <div class="title"><strong>{{ trans('campaign.label_for.end_time') }}</strong></div>
                                                                            <div class="info-content">
                                                                                <div class="time">{{ $detailCampaign->timeHours('end_time') }}</div>
                                                                                <div class="date">{{ $detailCampaign->timeDay('end_time') }}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box address">
                                                                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                                                                        <div class="info-detail">
                                                                            <div class="title"><strong>{{ trans('campaign.address') }}</strong> </div>
                                                                            <div class="info-content">{{ $detailCampaign->address }}</div>
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
                                            <div id="googleMap" data-lat="{{ $detailCampaign->lat }}" data-lng="{{ $detailCampaign->lng }}"
                                                data-address="{{ $detailCampaign->address }}">
                                            </div>
                                        </div>
                                        @if (count($members))
                                            <div class="panel-grid" id="pg-4934-1">
                                                <div class="panel-grid-cell" id="pgc-4934-1-0">
                                                    <h5>{{ trans('campaign.member') }}</h5>
                                                    <div class="so-panel widget widget_team panel-first-child panel-last-child bg-white" id="panel-4934-1-0-0" data-index="2">
                                                        <div class="thim-widget-team thim-widget-team-base">
                                                            <div class="thim-our-team template-carousel" id="id_58ef60515ddf6">
                                                                <div class="members">
                                                                    @foreach ($members as $element)
                                                                        <div class="member">
                                                                            <div class="inner">
                                                                                <div class="avatar-wrapper">
                                                                                    <div class="avatar-inner">
                                                                                        <img src="{{ $element->user->avatar }}" alt="{{ $element->user->name }}" title="{{ $element->user->name }}" />
                                                                                    </div>
                                                                                    <div class="social">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="{{ action('UserController@show', ['id' => $element->user->id]) }}"><i class="fa fa-link"></i></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="info">
                                                                                    <div class="name">
                                                                                        <a href="{{ action('UserController@show', ['id' => $element->user->id]) }}">{{ $element->user->name }}</a>
                                                                                    </div>
                                                                                    <div class="regency">{{ $element->user->name }}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="event-location"></div>
                            </article>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="confirm">
                            @include('campaign.list_contribution_confirmed')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="unconfirm">
                            @include('campaign.list_contribution_unconfirmed', ['contributionUnConfirmed' => $contributionUnConfirmed])
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-title themed-background-dark">
                        <h4 class="block-title-light campaign-title">
                            <strong>{{ trans('campaign.action') }}</strong>
                        </h4>
                    </div>
                    <div class="widget-extra">
                        <div class="col-sm-7">
                            <div class="fb-like"
                            data-href="{{ action('EventController@show', $detailCampaign->id) }}"
                            data-layout="standard" data-action="like"
                            data-size="small" data-show-faces="true"
                            data-share="true"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <h3>{{ trans('campaign.comments') }}</h3>
                <div class="tab__comment">
                    <div>
                        <div class="card">
                            <ul class="no-margin-left nav nav-tabs" role="tablist">
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
                                            <div id="respond">
                                                <div class="notify-comment"></div>
                                                {!! Form::open([
                                                    'method' => 'post',
                                                    'id' => 'formComment',
                                                    'class' => 'comment-form'])
                                                !!}
                                                    {!! Form::hidden('campaign_id', $detailCampaign->id) !!}
                                                    <div class="row">
                                                        @if (auth()->check())
                                                            {!! Form::hidden('name', auth()->user()->name) !!}
                                                            {!! Form::hidden('email', auth()->user()->email) !!}
                                                        @else
                                                            <div class="col-xs-6">
                                                                {!! Form::text('name', null, [
                                                                    'class' => 'form-control',
                                                                    'placeholder' => trans('index.your-name')])
                                                                !!}
                                                            </div>
                                                            <div class="col-xs-6">
                                                                {!! Form::email('email', null, [
                                                                    'class' => 'form-control',
                                                                    'placeholder' => trans('index.your-mail')])
                                                                !!}
                                                            </div>
                                                        @endif
                                                        <div class="col-xs-12">
                                                            {!! Form::textarea('text', '', [
                                                                'id' => 'text',
                                                                'class' => 'form-control',
                                                                'cols' => '10',
                                                                'rows' => '3',
                                                                'placeholder' => trans('campaign.comments')])
                                                            !!}
                                                        </div>
                                                        <p class="form-submit">
                                                            {!! Form::submit(trans('campaign.comments'), [
                                                                'data-id' => $detailCampaign->id,
                                                                'id' => 'buttonComment',
                                                                'class' => 'submit'])
                                                            !!}
                                                        </p>
                                                    </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                        <div class="comment-list-inner">
                                            <h2 class="comments-title"> <span id="count_comment">{{ count($detailCampaign->comments) }}</span> {{ trans('campaign.comments') }}</h2>
                                            <div class="comments-container">
                                                <ul id="comments-list" class="comments-list">
                                                    @include('campaign.comment')
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="fb-comments" data-href="{{ action('CampaignController@show', $detailCampaign->id) }}" data-order-by="reverse_time" data-numposts="5" data-width="100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="widget-title"><span>{{ trans('listcampaign.upcoming-campaign') }}</span></h3>
                <div id="donate_main_content" class="gird">
                    <div class="archive-content row">
                        @foreach ($campaign as $element)
                        <article id="campaign-314" class="col-xs-6 col-md-4 post-314 dn_campaign type-dn_campaign status-publish has-post-thumbnail hentry dn_campaign_cat-community-charities dn_campaign_cat-environmental-charities dn_campaign_cat-health-charities dn_campaign_cat-international-charities dn_campaign_tag-events dn_campaign_tag-winter">
                            <div class="content-inner">
                                <div class="entry-thumbnail">
                                    <img class="fix-img-cp" src="{{ $element->image->image }}" class="attachment-full size-full wp-post-image" alt="{!! str_limit($element->name, config('constants.LIMIT_TITLE_CHARACTERS')) !!}" srcset="{{ $element->image->image }} 870w, {{ $element->image->image }} 300w, {{ $element->image->image }} 768w" sizes="(max-width: 870px) 100vw, 870px" />
                                    <button type="button" class="donate_load_form thim-button style3" data-toggle="modal" href='.donate_modal' data-hiden="{{ csrf_token() }}" data-url="{{ action('CampaignController@review') }}" data-campaign-id="{{ $element->id }}">{{ trans('index.join-now') }}</button>
                                </div>
                                <div class="event-content">
                                    <div class="dn-content-inner">
                                        <div class="entry-header">
                                            <h2 class="blog_title trim-title"><a href="{{ action('CampaignController@show', $element->id) }}">{!! $element->name !!}</a></h2>
                                        </div>
                                        <div class="entry-content trim-description">
                                            {!! $element->description !!}
                                        </div>
                                    </div>
                                    <div class="dn-content-countdown-box">
                                        <div class="entry-meta">
                                            <div class="date">
                                                <div class="day">{{ date('d', strtotime($element->start_time)) }}</div>
                                                <div class="month">{{ date('M', strtotime($element->start_time)) }}</div>
                                            </div>
                                            <div class="metas">
                                                <div class="time"><i class="fa fa-clock-o"></i> {{ date('H:i', strtotime($element->start_time)) }} - {{ date('H:i', strtotime($element->end_time)) }} </div>
                                                <div class="location"><i class="fa fa-map-marker"></i> {{ $element->address }}</div>
                                            </div>
                                        </div>
                                        <button type="button" class="donate_load_form thim-button style3" data-toggle="modal" href='.donate_modal' data-hiden="{{ csrf_token() }}" data-url="{{ action('CampaignController@review') }}" data-campaign-id="{{ $element->id }}">{{ trans('index.join-now') }}</button>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </main>
            @if (auth()->check() &&  ($detailCampaign->owner->user_id == auth()->id() || $detailCampaign->checkMemberOfCampaignByUserId(auth()->id())))
                <a href="javascript:void(0)" id="show-box-chat">
                    <img class="irc_mi" src="{{ asset('/img/chatbox.png') }}">
                </a>
                @include('layouts.chat')
            @endif
                @include('layouts.right_bar')
                <div class="clear"></div>
        </div>
    </section>
@stop
