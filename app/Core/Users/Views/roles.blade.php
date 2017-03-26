@extends('layouts.default')

@section('content')
{{ debug($errors->all())}}
<div class="col-md-6 col-xs-12">
    <div class="x_panel" style="height: auto;" id='idxs'>

        <div class="x_title collapse-link pointer">
            <h2>@lang('users::general.create_role') <small>@lang('users::general.create_role_new_for_users')</small></h2>
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
                  ' action="{{ route('users.roles-createRole') }}" method="POST" class="form-horizontal form-label-left" novalidate="">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">@lang('users::general.role_name_display')
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input @validate(App\Core\Users\Validator\CreateRoleValidator@name) value="{{ old('name')}}" class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                        @lang('users::general.role_name')
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input @validate(App\Core\Users\Validator\CreateRoleValidator@display_name) value="{{ old('display_name')}}" class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                        @lang('users::general.role_name')
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input @validate(App\Core\Users\Validator\CreateRoleValidator@description) value="{{ old('description')}}" class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                        <button type="submit" class="btn btn-success">@lang('users::general.create_role')</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>@lang('users::general.mange_permission_role')</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>


        <div class="x_content">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th>
                                @lang('users::general.module_permission')
                            </th>
                            @foreach($roles as $role)
                            <th class="column-title"> {{ $role }} </th>
                            @endforeach

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($permissionsTree as $packageTree)
                        @foreach($packageTree as $modulesTree)
                        <tr class="table-bordered ">
                            <th class="a-center text-center" colspan="100"><i class="fa fa-lg fa-cubes "> </i> {!! $modulesTree['package_name']; unset($modulesTree['package_name']) !!} </th>
                        </tr>

                        @each('users::roles.partials.tree-modules',$modulesTree,'module')

                        @endforeach
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')

<script src="{{ asset('/js/lib/user-roles.min.js')}}"></script>
@stop

@section('styles')
<link href="{{ asset('/css/lib/user-roles.min.css')}}" rel="stylesheet">
@stop