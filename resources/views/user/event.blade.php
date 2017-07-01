@extends('layouts.user_template')

@section('css')
    @parent
    {{ Html::style('bower_components/bootstrap3-dialog/dist/css/bootstrap-dialog.min.css') }}
@endsection

@section('js')
    @parent
    {{ Html::script('bower_components/bootstrap3-dialog/dist/js/bootstrap-dialog.min.js') }}
    {{ Html::script('js/active_campaign.js') }}
    <script type="text/javascript">
        $( document ).ready(function() {
            var active = new Active(
                '{{ trans('campaign.active') }}',
                '{{ trans('campaign.close') }}',
                '{{ action('CampaignController@activeOrCloseCampaign') }}',
                '{{ trans('campaign.message_confirm') }}',
            );
            active.init();
        });
    </script>
@endsection

@section('content')

<div class="Grid-cell">
    <div class="js-profileClusterFollow"></div>
</div>
<div class="Grid-cell u-lg-size2of3" data-test-selector="ProfileTimeline">
    <div class="ProfileHeading">
        <div class="ProfileHeading-spacer"></div>
        <div class="ProfileHeading-content">
            <h2 id="content-main-heading" class="ProfileHeading-title u-hiddenVisually">{{ trans('user.timeline') }}</h2>
            <ul class="ProfileHeading-toggle">
                <li class="ProfileHeading-toggleItem u-textUserColor" data-element-term="tweets_toggle">
                    <a class="ProfileHeading-toggleLink js-nav" href="{{ action('UserController@show', $user->id) }}" data-nav="tweets_with_replies_toggle">{{ trans('user.timeline') }}</a>
                </li>
                <li class="ProfileHeading-toggleItem u-textUserColor" data-element-term="tweets_with_replies_toggle">
                    <a class="ProfileHeading-toggleLink js-nav" href="{{ action('UserController@listUserCampaign', $user->id) }}" data-nav="photos_and_videos_toggle">{{ trans('user.campaigns') }}</a>
                </li>
                <li class="ProfileHeading-toggleItem is-active " data-element-term="photos_and_videos_toggle">
                    <span aria-hidden="true">{{ trans('user.events') }}</span>
                </li>
                <li class="ProfileHeading-toggleItem u-textUserColor" data-element-term="photos_and_videos_toggle">
                    <a class="ProfileHeading-toggleLink js-nav" href="{{ action('UserController@listUserBlog', $user->id) }}" data-nav="photos_and_videos_toggle">{{ trans('user.blogs') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="timeline" class="ProfileTimeline">
        <div class="stream-container">
            <div class="stream-item js-new-items-bar-container"></div>
            <div class="stream">
                <ol class="stream-items js-navigable-stream scroll-load" id="upcomings">
                    @foreach ($listEvent as $event)
                        <li class="stream-item">
                            <div class="tweet js-stream-tweet js-actionable-tweet js-profile-popup-actionable dismissible-content original-tweet js-original-tweet">
                                <div class="context"></div>
                                <div class="content">
                                    <div class="stream-item-header">
                                        <a class="account-group js-account-group js-action-profile js-user-profile-link js-nav" title="{{ $user->fullname }}" href="{{ action('UserController@show', $user->id) }}">
                                            <img class="avatar js-action-profile-avatar" src="{{ $user->avatar }}" alt="{{ $user->fullname }}">
                                            <span class="FullNameGroup">
                                                <strong class="fullname show-popup-with-id">{{ $user->fullname }}</strong>
                                                <span class="UserNameBreak">&nbsp;</span>
                                            </span>
                                            <span class="username u-dir">@<b>{{ trans('user.events') }}</b></span>
                                        </a>
                                        <small class="time">
                                            <a class="tweet-timestamp js-permalink js-nav js-tooltip" title="{{ $event->countTimer('created_at') }}">
                                                <span class="_timestamp js-short-timestamp">{{ $event->countTimer('created_at') }}</span>
                                            </a>
                                        </small>
                                        @if (auth()->id() == $user->id)
                                            <div class="ProfileTweet-action ProfileTweet-action--more js-more-ProfileTweet-actions">
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <div class="IconContainer js-tooltip" >
                                                            <i class="fa fa-cog"></i>
                                                        </div>
                                                    </button>
                                                    <div class="dropdown-menu is-autoCentered">
                                                        <div class="dropdown-caret">
                                                            <div class="caret-outer"></div>
                                                            <div class="caret-inner"></div>
                                                        </div>
                                                        <ul tabindex="-1" role="menu" class="no-margin-left no-margin-right" aria-labelledby="menu-0" aria-hidden="true">
                                                            <li class="embed-link text-center" data-nav="embed_tweet" role="presentation">
                                                                <a href="{{ action('EventController@edit', $event->id) }}" class="dropdown-link" title="">{{ trans('user.manager.edit') }}</a>
                                                            </li>
                                                            <li class="embed-link text-center" data-nav="embed_tweet" role="presentation">
                                                                <a href="{{ action('EventController@show', $event->id) }}" class="dropdown-link" title="">{{ trans('user.manager.view') }}</a>
                                                            </li>
                                                            <li class="embed-link text-center" data-nav="embed_tweet" role="presentation">
                                                                {!! Form::open(['action' => ['EventController@destroy', $event->id ], 'method' => 'DELETE']) !!}
                                                                    {!! Form::submit(trans('user.manager.delete'), ['class' => 'dropdown-link unstyle-button-submit']) !!}
                                                                {!! Form::close() !!}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <p class="u-hiddenVisually" aria-hidden="true">{{ trans('user.barack-obama-added,') }}</p>
                                    <div class="QuoteTweet u-block js-tweet-details-fixer">
                                        <div class="QuoteTweet-container">
                                            <div class="QuoteTweet-innerContainer u-cf js-permalink js-media-container" href="{{ action('EventController@show', $event->id) }}">
                                                <div class="tweet-content">
                                                    <div class="QuoteMedia">
                                                        <div class="QuoteMedia-container js-quote-media-container">
                                                            <div class="QuoteMedia-singlePhoto">
                                                                <div class="QuoteMedia-photoContainer js-quote-photo" data-element-context="platform_photo_card">
                                                                    <a href="{{ action('EventController@show', $event->id) }}" >
                                                                        <img src="{{ asset('uploads/images/' . $event->img) }}" class="max-width-height" alt="{{ $event->title }}">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="QuoteTweet-authorAndText u-alignTop">
                                                        <div class="QuoteTweet-originalAuthor u-cf u-textTruncate stream-item-header account-group js-user-profile-link">
                                                            <a href="{{ action('EventController@show', $event->id) }}" title="{{ $event->title }}">
                                                                <b class="QuoteTweet-fullname u-linkComplex-target">{{ $event->title }}</b>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <span>
                                                                <i class="fa fa-calendar"></i>
                                                                {{ $event->timeDay('created_at') }}
                                                            </span>
                                                            <br>
                                                            <span>
                                                                <i class="fa fa-map-marker"></i>
                                                                {{ $event->address }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ol>
                {{ $listEvent->links() }}
                <div class="stream-footer">
                    <div class="timeline-end has-items has-more-items">
                        <div class="stream-loading">
                            <div class="stream-end-inner">
                                <span class="spinner"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="hidden-replies-container"></ol>
            </div>
        </div>
    </div>
</div>

@include('layouts.user_right')

@stop
