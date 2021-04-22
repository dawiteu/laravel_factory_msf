<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">

    <a class="navbar-brand" href="#">MolenGeek</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">

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
                <a class="nav-link" class="text-danger" href="#">Go Admin >> </a>
            </li>
        </ul>
    </div>
</nav>