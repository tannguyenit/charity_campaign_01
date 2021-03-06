<div class="modal fade contribute" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button id="close-modal" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">{{ trans('campaign.contribute') }}</h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <div class="notify"></div>
                    <div class="campaign-id" data-campaign-id="{{ $campaign->id }}"></div>
                    {!! Form::open(['method' => 'POST', 'class' => 'form-horizontal', 'id' => 'form-contribute']) !!}

                    @if (Auth::guest())
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                {!! Form::text('name', old('name'), ['id' => 'name-comment', 'class' => 'form-control', 'placeholder' => trans('user.name')]) !!}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                {!! Form::email('email', old('email'), ['id' => 'email-comment', 'class' => 'form-control', 'placeholder' => trans('user.email')]) !!}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    @endif

                    @foreach ($campaign->categories as $category)
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-4">
                                    <span>{{ $category->name }}</span>
                                </div>
                                <div class="col-md-8 category">
                                    <div class="input-group">
                                        <div class="col-md-8">
                                            {!! Form::number('amount[' . $category->id . ']', '', ['class' => 'form-control', 'placeholder' => trans('campaign.amount'), 'min' => 0]) !!}
                                        </div>

                                        <div class="col-md-4">
                                            <p class="pull-right"><span>{{ $category->unit }}</span></p>
                                        </div>

                                        @if ($errors->has('amount'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                        <div class="col-md-10 col-md-offset-1">
                            {!! Form::textarea('description', null, ['rows' => 4, 'class' => 'form-control', 'placeholder' => trans('campaign.description')]) !!}

                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-1">
                            <button id="btn-contribute" type="submit" class="btn btn-raised btn-primary">
                                {{ trans('campaign.create_contribute') }}
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
