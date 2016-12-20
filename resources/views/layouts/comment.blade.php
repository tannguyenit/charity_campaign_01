<li class="media">
    @if ($comment->user)
        <div class="pull-left">
            <img class="media-object img-circle" src="{{ $comment->user->avatar }}" alt="profile">
        </div>
    @else
        <div class="pull-left">
            <img class="media-object img-circle" src="{{ config('path.to_avatar_default') }}" alt="profile">
        </div>
    @endif

    <div class="media-body">
        <div class="well well-lg">
            @if ($comment->user)
                <a href="{{ action('UserController@show', ['id' => $comment->user->id]) }}">
                    <h4 class="media-heading reviews">{{ $comment->user->name }}</h4>
                </a>
            @else
                <h4 class="media-heading reviews">{{{ $comment->name }}}</h4>
            @endif
            <p class="media-date reviews list-inline">{{ $comment->created_at }}</p>
            <p class="media-comment">{{{ $comment->text }}}</p>
        </div>
    </div>
</li>
