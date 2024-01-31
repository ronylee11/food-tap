<div class="vw-100 mb-2">
    <nav class="navbar navbar-expand-lg bg-dark-subtle">
        <div class="container-fluid">
            <a class="navbar-brand fs-1" href="/">FoodTap</a>
            @if(auth()->check())
            <p class="navbar-brand navbar-toggler fs-1"> Welcome, {{strtoupper(auth()->user()->name)}}</p> @endif
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @unless(auth()->check())
                    <a class="nav-link" href="/register">Register</a>
                    <a class="nav-link" href="/login">Login</a>
                    @else
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link" href="/logout">Logout</button>
                    </form>
                    @endunless
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </div>
            </div>

        </div>
    </nav>
</div>
