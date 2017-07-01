 <h4 class="modal-title" id="myLargeModalLabel">{{ trans('campaign.contribute') }}</h4>
 <div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th>{{ trans('campaign.contribution.index') }}</th>
                <th>{{ trans('campaign.contribution.avatar') }}</th>
                <th>{{ trans('campaign.contribution.name') }}</th>
                <th>{{ trans('campaign.contribution.email') }}</th>
                <th>{{ trans('campaign.contribute') }}</th>
                <th>{{ trans('campaign.contribution.description') }}</th>
                <th>{{ trans('campaign.contribution.time') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contributionUnConfirmed as $key => $contribution)
            <tr>
                <td scope="row"><p>{{ $key + 1 }}</p></td>
                @if ($contribution->user)
                <td>
                    <div class="profile_thumb">
                        <a href="{{ action('UserController@show', ['id' => $contribution->user->id]) }}">
                            <img src="{{ $contribution->user->avatar }}" alt="avatar" class="img-responsive img-80 img-circle">
                        </a>
                    </div>
                </td>
                <td>
                    <div class="profile_thumb">
                        <a href="{{ action('UserController@show', ['id' => $contribution->user->id]) }}">
                            <p>{{ $contribution->user->name }}</p>
                        </a>
                    </div>
                </td>
                <td><p>{{ $contribution->user->email }}</p></td>
                @else
                <td>
                    <div class="profile_thumb">
                        <img src="{{ config('path.to_avatar_default') }}" alt="avatar" class="img-responsive img-80 img-circle">
                    </div>
                </td>
                <td><p>{{ $contribution->name }}</p></td>
                <td><p>{{ $contribution->email }}</p></td>
                @endif
                <td>
                    @foreach ($contribution->categoryContributions as $value)
                    <span>{{ $value->category->name }} : {{ $value->amount }}  ({{ $value->category->unit }})</span><br>
                    @endforeach
                </td>
                <td><p>{{ $contribution->description }}</p></td>
                <td><p>{{ $contribution->created_at }}</p></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
