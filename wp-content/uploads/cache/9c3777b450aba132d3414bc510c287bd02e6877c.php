<header id="header" class="module header w-full top-0 left-0 fixed z-200 down_lg:overflow-hidden">
    <div class="container px-32 xl:px-51 2xl:px-62 2k:px-56 w-full">
        <nav class="row navbar">
            <div class="col w-full down_xl:h-full down_lg:flex down_lg:flex-wrap lg:w-3/10 header-mobile relative justify-between">
                <div class="lg:w-full relative">
                    <a id="header-logo" class="navbar-brand header-logo inline-block"
                        href="<?php echo App::getLogo()['href']; ?>">
                        <img src="<?php echo App::getLogo()['url']; ?>" alt="<?php echo App::getLogo()['alt']; ?>" class="w-full">
                    </a>
                </div>
                <div class="block lg:hidden">
                    <button class="navbar-toggler hamburger-menu pt-4 cursor-pointer" type="button"
                        data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar block bg-white relative ml-auto w-14 h-2"></span>
                        <span class="icon-bar block bg-white relative ml-auto w-14 h-2 mt-3"></span>
                        <span class="icon-bar block bg-white relative ml-auto w-14 h-2 mt-3"></span>
                        <span class="sr-only">Open Menu</span>
                    </button>
                </div>
            </div>

            <div class="col w-full lg:w-7/10 navbar-collapse main-menu flex flex-col justify-between" id="main-menu"
                data-module="menu">
                <ul class="main-menu-ul navbar-nav list-none m-0 flex text-white flex-col text-inherit lg:flex-row lg:justify-end gap-29 2xl:gap-47">
                    <li class="menu-item mb-0">
                        <a class="block no-underline" href="#">ABOUT US</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block no-underline" href="#">LEADERSHIP</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block no-underline" href="#">CAREERS</a>
                    </li>
                    <li class="active menu-item mb-0">
                        <a class="block no-underline" href="#">CONTACT US</a>
                    </li>
                </ul>
                <?php echo App::getMainNav(); ?>

            </div>
        </nav>
    </div>
</header>
