@extends('layouts.default')
@section('heading-title')

<div class="page-title">
    <div class="title_left">
        <h3>{{ $title }} <small>@lang('users::general.permissions')</small></h3>
    </div>

</div>

@stop

@section('content')
@yield('heading-title')

<div class="clearfix"></div>
@include('users::permission.create-permission')

<div class="col-md-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>@lang('users::general.permissions_list') </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('users::general.permission_name')</th>
                        <th>@lang('users::general.permission_display_name')</th>
                        <th>@lang('users::general.permission_description')</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($permissions as $key => $permission)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $permission->name}}</td>
                        <td>{{ $permission->display_name }}</td>
                        <td>{{ $permission->description }}</td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop