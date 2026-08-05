<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('home')}}" class="logo">Vacation Rental<em> Website</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{route('home')}}" >Home</a></li>
                        <li><a href="{{route ('vacations')}}">Vacations</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li class="dropdown">
                            <a href="{{route('about')}}" >About</a>
                        </li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

