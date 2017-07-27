@extends('layouts.default')
@section('heading-title')
<div class="page-title">
    <div class="title_left">
        <h3>{{ $title }} <small>@lang('users::general.profile')</small></h3>
    </div>
    <div class="clearfix"></div>
</div>
<div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="@lang('users::general.search_for')">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">@lang('users::general.go!')</button>
            </span>
        </div>
    </div>
</div>

@stop
@section('content')

@yield('heading-title')
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>@lang('users::general.users_title') @lang('users::general.profile') <small>@lang('users::general.details')</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form data-parsley-validate="" action="{{ route('users.profile-update') }}" method="POST" class="form-horizontal form-label-left" novalidate="">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">@lang('users::general.username')
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@username) value="{{ !empty(old('username')) ? old("username") : $user->username }}" class="form-control ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">@lang('users::general.first_name')
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@first_name) value="{{ !empty(old('first_name')) ? old("first_name") : $user->first_name }}" class="form-control ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">@lang('users::general.last_name')
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@last_name) value="{{ !empty(old('last_name')) ? old("last_name") : $user->last_name }}" class="form-control ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">@lang('users::general.title')
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@title) value="{{ !empty(old('title')) ? old("title") : $user->title }}" class="form-control ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="company">@lang('users::general.company')
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@company) value="{{ !empty(old('company')) ? old("company") : $user->company }}" class="form-control ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">@lang('users::general.email')
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@email) value="{{ !empty(old('email')) ? old("email") : $user->email }}" class="form-control ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="language_code">@lang('users::general.language_code')</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <select class="form-control" @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@language_code)>
                                    @foreach(config('core.language') as $code => $language)
                                    <option value='{{$code}}' {{ $code==app()->getLocale()? "selected":""}} >{{$language}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('users::general.gender')</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                                <label  data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@gender) value="{{App\Core\Common\Helper\Enum::MALE}}" {{ $user->gender == App\Core\Common\Helper\Enum::MALE ? 'checked' : '' }}> &nbsp; @lang('users::general.male') &nbsp;
                                </label>
                                <label  data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@gender)  value="{{App\Core\Common\Helper\Enum::FEMALE}}" {{ $user->gender == App\Core\Common\Helper\Enum::FEMALE ? 'checked' : '' }}> @lang('users::general.female')
                                </label>
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">@lang('users::general.address')
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@address) class="form-control ">{{ !empty(old('address')) ? old("address") : $user->address }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_2">@lang('users::general.address_2')
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@address_2) class="form-control ">{{ !empty(old('address_2')) ? old("address_2") : $user->address_2 }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_3">@lang('users::general.address_3')
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea @validate(App\Core\Users\Validator\SelfProfileUpdateValidator@address_3) class="form-control ">{{ !empty(old('address_3')) ? old("address_3") : $user->address_3 }}</textarea>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('users::general.dateofbirth') <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="birthday" value="{{ $user->birthdate ? $user->birthdate->format('d/m/Y') : ''}}" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('users::general.state') 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="{{ $user->state }}" id="state" name="state" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('users::general.zipcode') 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="{{ $user->zipcode }}" id="zipcode" name="zipcode" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('users::general.website') 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="{{ $user->website }}" id="website" name="website" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('users::general.facebook_uri') 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="{{ $user->facebook_uri }}" id="facebook_uri" name="facebook_uri" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('users::general.twitter_uri') 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="{{ $user->twitter_uri }}" id="twitter_uri" name="twitter_uri" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@stop


@section('script')
<script>
//    $('#birthday').daterangepicker();
    $(function () {
        $('#birthday').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        }

        );
    });
</script>

@stop



