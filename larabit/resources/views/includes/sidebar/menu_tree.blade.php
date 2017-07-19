
@permission($menu['route']."*")

@if(empty($menu['children']))
<li>
    <a href='{{route($menu['route'])}}'><i class="{{ $menu['class'] or "" }}"></i> {{ trans($menu['name']) }} </a>
</li>
@else
<li>
    <a>
        <i class="{{ $menu['class'] or "" }}"></i> {{ trans($menu['name']) }}
    <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
    @each('includes.sidebar.menu_tree',$menu['children'],'menu')
</ul>

</li>
@endif
@endpermission

