<tr>
	<td>
		<i class="permission-tree-level-2 fa fa-lg fa-puzzle-piece"> </i> {{ $permission[0]->display_name }} ({{ $permission[0]->name }})
	</td>
	@foreach($permission['roles'] as $key => $role)

	<td>
		@if($role['status'] === true)
		<input type="checkbox" name="{{ $key }}" checked="" data-permissionId='{{ $permission[0]->id}}' data-roleId='{{ $role['id'] }}'>
		@else
		<input type="checkbox" name="{{ $key }}" data-permissionId='{{ $permission[0]->id}}' data-roleId='{{ $role['id'] }}'>
		@endif
	</td>
	@endforeach
</tr>