<div class="top-bar">
    <div class="container top-bar_wrap">
        <a href="{{ url('/') }}" rel="home" class="logo-wrap" title="marie claire">
            <svg class="logo logo--header">
                <use xlink:href="#logo"></use>
            </svg>
        </a>
    </div>
</div>

<header class="header">
    <div class="container header-wrap">

        <event-dispatcher class="icon-btn flex-shrink-0" event="show:drawer">
            <svg class="icon" role="presentation" title="Toggle navigation">
                <use xlink:href="#icon_menu"></use>
            </svg>
        </event-dispatcher>

        <div class="px-1 d-none d-md-block">
            <a href="{{ url('/') }}" rel="home" class="logo-wrap" title="marie claire">
                <svg class="logo logo--nav">
                    <use xlink:href="#logo"></use>
                </svg>
            </a>
        </div>

        @if(!empty($menu))
            <tab-bar>
                @foreach($menu as $link)
                <div class="nav-item">
                    <a class="nav-link" href="{{ url($link->link) }}">{{ $link->title }}</a>
                </div>
                @endforeach
            </tab-bar>
        @endif

        <search-widget></search-widget>

    </div>
</header>