@extends('layouts.default')
@section('heading-title')

<div class="page-title">
    <div class="title_left">
        <h3>{{ $title }} <small>@lang('users::general.list_all_users')</small></h3>
    </div>

</div>

@stop

@section('content')
@yield('heading-title')
<div class="clearfix"></div>
<div class="col-md-12">
    <div class="x_panel">
     
        <div class="x_content">

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('users::general.username')</th>
                        <th>@lang('users::general.first_name')</th>
                        <th>@lang('users::general.last_name')</th>
                        <th>@lang('users::general.email')</th>
                        <th>@lang('users::general.phone')</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = $users->firstItem(); ?> 
                    @foreach($users  as $index => $user)
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <?php $count++; ?>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>
@stop