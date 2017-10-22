<div class="panel panel-default">
    <div class="panel-heading">Register</div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route(isset($route) ? $route : 'register') }}">
            {{ csrf_field() }}

            <input type="hidden" name="article" value="{{isset($article) ? $article : ''}}" />

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                <label for="bio" class="col-md-4 control-label">Bio</label>

                <div class="col-md-6">
                    <textarea id="bio" class="form-control" name="bio" value="{{ old('bio') }}" required></textarea>

                    @if ($errors->has('bio'))
                        <span class="help-block">
                            <strong>{{ $errors->first('bio') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            {{--  <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <label for="image" class="col-md-4 control-label">Image</label>

                <div class="col-md-6">
                    <input type="file" id="image" class="form-control" name="image" value="{{ old('image') }}" required />

                    @if ($errors->has('image'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>
            </div>  --}}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
