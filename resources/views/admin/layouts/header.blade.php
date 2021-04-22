<li class="nav-item {{ request()->is('admin/bat/*') ? 'active' : '' }}">
    <a class="nav-link" class="text-danger" href={{route('admin.bat.all')}}> Batiments </a>
</li>

<li class="nav-item {{ request()->is('admin/form/*') ? 'active' : '' }}">
    <a class="nav-link" class="text-danger" href={{route('admin.form.all')}}> Formations </a>
</li>

<li class="nav-item">
    <a class="nav-link" class="text-danger" href=""> Types de formations </a>
</li>

<li class="nav-item">
    <a class="nav-link" class="text-danger" href=""> Eleves </a>
</li>

<li class="nav-item">
    <a class="nav-link" class="text-danger" href={{route('home')}}><< Go HOME </a>
</li>