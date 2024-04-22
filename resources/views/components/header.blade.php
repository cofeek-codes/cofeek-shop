@section('header')

    <header class="d-flex flex-wrap align-items-center px-5 justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 link-dark">Home</a></li>
        </ul>

        <div class="col-md-3 text-end">
            @if(!Auth::check())
                <a href="{{route('auth.login')}}">
                    <button type="button" class="btn btn-outline-primary me-2">Login</button>
                </a>
                <a href="{{route('auth.register')}}">
                    <button type="button" class="btn btn-primary">Sign up</button>
                </a>
            @else
                <h3>
                    {{auth()->user()->name}} {{auth()->user()->surname}}
                </h3>

            @endif
        </div>
    </header>
