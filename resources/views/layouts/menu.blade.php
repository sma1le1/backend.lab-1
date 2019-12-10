<li class="{{ Request::is('articles*') ? 'active' : '' }}">
    <a href="{{ route('articles.index') }}"><i class="fa fa-edit"></i><span>Articles</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{{ route('comments.index') }}"><i class="fa fa-edit"></i><span>Comments</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

