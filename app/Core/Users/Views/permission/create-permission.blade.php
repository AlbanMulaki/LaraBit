
<div class="col-md-6 col-xs-12">
    <div class="x_panel" style="height: auto;" id='idxs'>

        <div class="x_title collapse-link pointer">
            <h2>@lang('users::general.create_new_permission')</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a><i class="fa fa-chevron-down"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content" @if(count($errors->all())===0)style="display: none;"@endif>
             <br>
            <form data-parsley-validate data-parsley-remote-options='
                  { "type": "POST", "dataType": "jsonp", "data": { "token": "value" } }
                  ' action="{{ route('users.permission-create') }}" method="POST" class="form-horizontal form-label-left" novalidate="">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">@lang('users::general.permission_name')
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input @validate(App\Core\Users\Validator\CreateRoleValidator@name) value="{{ old('name')}}" class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                        @lang('users::general.permission_display_name')
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input @validate(App\Core\Users\Validator\CreateRoleValidator@display_name) value="{{ old('display_name')}}" class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                        @lang('users::general.permission_description')
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input @validate(App\Core\Users\Validator\CreateRoleValidator@description) value="{{ old('description')}}" class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                        <button type="submit" class="btn btn-success">@lang('users::general.save')</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
