<!--Action Button-->
  @if(Active::checkUriPattern('admin/blogCategories'))
      <export-component></export-component>
  @endif
<!--Action Button-->
<div class="btn-group">
  <button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown">Action
    <span class="fas fa-caret-down"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu dropdown-menu-right" role="menu">
    <li><a href="{{route('admin.blogCategories.index')}}"><i class="fa fa-list-ul"></i> {{trans('menus.backend.blogcategories.all')}}</a></li>
    @permission('create-blog-category')
    <li><a href="{{route('admin.blogCategories.create')}}"><i class="fa fa-plus"></i> {{trans('menus.backend.blogcategories.create')}}</a></li>
    @endauth
  </ul>
</div>