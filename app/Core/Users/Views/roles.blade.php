@extends('layouts.default')

@section('content')

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