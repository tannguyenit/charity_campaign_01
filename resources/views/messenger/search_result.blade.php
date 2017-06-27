@if (isset($user->following))
    <li class="person new-chat search_result"
    data-fullname="{{ $user->following->fullname }}"
    data-url="{{ action('ParticipantController@store') }}"
    data-user-id="{{ $user->following->id }}">
        <img src="{{ $user->following->avatar }}" alt="" class="img-circle" />
        <span class="name">{{ $user->following->fullname }}</span>
        <div class="preview-message">
            <span class="time"></span>
            <span class="preview"></span>
        </div>
    </li>
@endif
