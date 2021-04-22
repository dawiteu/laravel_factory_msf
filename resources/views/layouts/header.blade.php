<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">

    <a class="navbar-brand" href="#">MolenGeek</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">

            @if (request()->is('admin/*') || request()->path() == 'admin')
                @include('admin.layouts.header')
            @else
                @include('partials.header')
            @endif

        </ul>
    </div>
</nav>