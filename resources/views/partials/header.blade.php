<li class="nav-item {{request()->path() == '/' ? 'active' : '' }} ">
    <a class="nav-link" href={{route('home')}}>Accueil</a>
</li>

<li class="nav-item {{request()->path() == 'page/batiments' ? 'active' : '' }} ">
    <a class="nav-link" href={{route('batiments.all')}}>Nos batiments</a>
</li>

<li class="nav-item {{request()->path() == 'page/formations' ? 'active' : '' }}">
    <a class="nav-link" href={{route('formations.all')}}>Nos formations</a>
</li>

<li class="nav-item {{request()->path() == 'page/typeofformations' ? 'active' : '' }}">
    <a class="nav-link" href={{route('typeforms.all')}}>Nos types de formations</a>
</li>

<li class="nav-item {{request()->path() == 'page/eleves' ? 'active' : '' }}">
    <a class="nav-link" href={{route('eleves.all')}}>Liste des élèves</a>
</li>

<li class="nav-item">
    <a class="nav-link" class="text-danger" href={{route('admin.index')}}>Go Admin >> </a>
</li>
