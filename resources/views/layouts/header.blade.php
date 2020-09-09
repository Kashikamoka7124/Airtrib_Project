<header class="flex items-end pt-15">
    <a href="/" class="w-logo">
        <img src="/img/logo.svg" alt="logo">
    </a>

    <div class="font-playfair text-20 ml-64">
        <a href="#" class="text-white hover:text-primary mr-45">
            @choice('site.word.flight', 2)
        </a>
        <a href="#" class="text-white hover:text-primary mr-45">
            Tribes
        </a>
        <a href="#" class="text-white hover:text-primary mr-45">Partners</a>
        <a href="#" class="text-white hover:text-primary mr-45">Explorers</a>
        <a href="#" class="text-white hover:text-primary mr-45">Trips</a>
    </div>

    <div class="flex items-center font-playfair ml-auto text-17">
        @guest
        <a href="/login" class="text-white hover:text-primary mr-38">Login</a>
        @endguest
        <a href="#" class="text-white hover:text-primary mr-38">Contact</a>
        <div class="has-dropdown relative">
            <a href="#" class="text-white hover:text-primary capitalize">
                {{ config('app.locale') }}
            </a>
            <div class="user-dropdown show-dropdown" style="right: -10px;">
                <a href="/language/en">English</a>
                <a href="/language/fr">French</a>
                <a href="/language/es">Spanish</a>
            </div>
        </div>
    </div>

    @auth
    <div class="flex relative cursor-pointer ml-38 header-user-info">
        <div class="flex items-center justify-center bg-primary rounded-full w-40 h-40 text-primary-darker uppercase text-16">
            NJ
        </div>
        <div class="text-primary ml-10">
            <p class="text-15">
                {{ auth()->user()->name }}
            </p>
            <p class="text-11">
                {{ auth()->user()->email }}
            </p>
        </div>

        @if(auth()->id() == 1)
            <div class="user-dropdown">
                <a href="/admin">Admin Panel</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </div>
        @else
            <div class="user-dropdown">
                <a href="/client/profile">Profile</a>
                <a href="/client/travels">Travel history</a>
                <a href="/client/tribes">Tribes supporting</a>
                <a href="/client/settings">Setting</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </div>
        @endif
    </div>

    <form id="logout-form" action="/logout" method="POST" style="display: none;">
        @csrf
    </form>
    @endauth
</header>
