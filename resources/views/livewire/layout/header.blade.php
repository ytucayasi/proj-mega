<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent disable-fixed">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="/">
                    <svg width="60" height="60" viewBox="0 0 1000 1000" fill="none" class="default-logo"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M188.5 708C234.666 649.214 358.697 566.998 486.605 706.471C447.183 662.88 430.401 613.43 425.834 568C336.502 542 272.39 557.167 251.5 568L335.5 394.5L425.834 568C420.533 515.266 431.69 467.948 443 441.5L335.5 217L94 708H188.5Z"
                            fill="white" />
                        <path
                            d="M488 708C533.466 750.75 611.615 794.394 694 780.816C768.354 768.561 883 719.5 906.5 561.5L791.5 628C762.833 664.5 681.1 723.5 583.5 667.5C538.5 639.667 469 555.5 551 441.5C587.167 397.5 685.9 337.7 791.5 450.5H892C877.833 406.5 816.6 314 685 296C627.333 290.833 498.2 312.7 443 441.5C431.69 467.948 420.533 515.266 425.834 568C430.401 613.43 447.183 662.88 486.605 706.471C487.07 706.977 487.535 707.487 488 708Z"
                            fill="white" />
                        <path
                            d="M806 579.5V600.5L906.5 540L806 480V500H616C605.5 504.833 585.9 521 591.5 547C591.5 554.167 596.4 570.7 616 579.5H806Z"
                            fill="white" />
                        <path
                            d="M488 708C533.466 750.75 611.615 794.394 694 780.816C768.354 768.561 883 719.5 906.5 561.5L791.5 628C762.833 664.5 681.1 723.5 583.5 667.5C538.5 639.667 469 555.5 551 441.5C587.167 397.5 685.9 337.7 791.5 450.5H892C877.833 406.5 816.6 314 685 296C627.333 290.833 498.2 312.7 443 441.5M488 708C487.532 707.491 487.067 706.981 486.605 706.471M488 708C487.535 707.487 487.07 706.977 486.605 706.471M443 441.5L335.5 217L94 708H188.5C234.666 649.214 358.697 566.998 486.605 706.471M443 441.5C431.69 467.948 420.533 515.266 425.834 568M425.834 568L335.5 394.5L251.5 568C272.39 557.167 336.502 542 425.834 568ZM425.834 568C430.401 613.43 447.183 662.88 486.605 706.471M806 579.5V600.5L906.5 540L806 480V500H616C605.5 504.833 585.9 521 591.5 547C591.5 554.167 596.4 570.7 616 579.5H806Z"
                            stroke="white" stroke-width="5" />
                    </svg>
                    <svg width="60" height="60" viewBox="0 0 1000 1000" fill="none" class="mobile-logo"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M188.5 708C234.666 649.214 358.697 566.998 486.605 706.471C447.183 662.88 430.401 613.43 425.834 568C336.502 542 272.39 557.167 251.5 568L335.5 394.5L425.834 568C420.533 515.266 431.69 467.948 443 441.5L335.5 217L94 708H188.5Z"
                            fill="#0000FF" />
                        <path
                            d="M488 708C533.466 750.75 611.615 794.394 694 780.816C768.354 768.561 883 719.5 906.5 561.5L791.5 628C762.833 664.5 681.1 723.5 583.5 667.5C538.5 639.667 469 555.5 551 441.5C587.167 397.5 685.9 337.7 791.5 450.5H892C877.833 406.5 816.6 314 685 296C627.333 290.833 498.2 312.7 443 441.5C431.69 467.948 420.533 515.266 425.834 568C430.401 613.43 447.183 662.88 486.605 706.471C487.07 706.977 487.535 707.487 488 708Z"
                            fill="#FFCC29" />
                        <path
                            d="M806 579.5V600.5L906.5 540L806 480V500H616C605.5 504.833 585.9 521 591.5 547C591.5 554.167 596.4 570.7 616 579.5H806Z"
                            fill="#FFCC29" />
                    </svg>
                </a>
            </div>
            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav alt-font ls-05px">
                        <li class="nav-item">
                            <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="/acerca" class="nav-link {{ Request::is('acerca') ? 'active' : '' }}">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a href="/horario" class="nav-link {{ Request::is('horario') ? 'active' : '' }}">Horario</a>
                        </li>
                        <li class="nav-item">
                            <a href="/galeria" class="nav-link {{ Request::is('galeria') ? 'active' : '' }}">Galería</a>
                        </li>
                        <li class="nav-item">
                            <a href="/precios" class="nav-link {{ Request::is('precios') ? 'active' : '' }}">Precios</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-auto col-lg-2 text-end xs-ps-0 xs-pe-0">
                <div class="header-icon">
                    <div class="header-button"><a href="https://wa.me/51983195480" target="_blank"
                            class="btn btn-small text-transform-none btn-transparent-white-light border-1 left-icon btn-rounded fw-500"><i
                                class="feather icon-feather-mail d-none d-xl-inline-block"></i>WhatsApp</a></div>
                </div>
            </div>
        </div>
    </nav>
</header>