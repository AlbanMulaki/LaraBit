<tr>
	<td class="a-center " colspan='100'>
		<i class="permission-tree-level-1 fa fa-lg fa-cube"> </i> {{ ucfirst($key) }}
	</td>
</tr>

@each('users::roles.partials.tree-permission',$module['permissions'],'permission')