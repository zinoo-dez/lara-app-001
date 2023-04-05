<ul>
    <li><a href="{{ URL::signedRoute('todos.index') }}">Todo</a></li>
    <li><a href="{{ URL::signedRoute('welcome') }}">Welcome</a></li>
    <li><a href="{{ URL::signedRoute('homes.index') }}" class="{{ session('testing') === 'home' ? 'bg' : null }}">Home</a>
    </li>
    <li><a href="{{ URL::signedRoute('abouts.index') }}"
            class="{{ session('testing') === 'about' ? 'bg' : null }}">About</a></li>
    <li><a href="{{ URL::signedRoute('projects.index') }}"
            class="{{ session('testing') === 'project' ? 'bg' : null }}">Project</a></li>
</ul>
