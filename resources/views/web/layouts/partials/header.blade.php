<!-- Header
    ============================================= -->
<?php
    $currentResults = '';
    $currentHome = '';

    if(strpos(Route::current()->uri(), 'oposiciones-guardia-civil') !== FALSE){
        $currentResults = 'current';
    } else {
        $currentHome = 'current';
    }
?>
<header id="header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{route('home.index')}}">
                        <img class="logo-default" srcset="{{Voyager::image('logo_final.png')}}, {{Voyager::image('logo_final@2x.png')}} 2x" src="demos/medical/images/logo-medical@2x.png" alt="Canvas Logo">
                    </a>
                </div><!-- #logo end -->

                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                        <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu style-3 menu-spacing-margin">
                    <ul class="menu-container">
                        <li class="menu-item <?php echo $currentHome;?>"><a class="menu-link" href="{{ route('home.index') }}"><div>Home</div></a></li>
                        <li class="menu-item <?php echo $currentResults;?>"><a class="menu-link" href="{{ route('results.index') }}"><div>Resultados</div></a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
