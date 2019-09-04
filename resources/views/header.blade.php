<header class="header">
    <a href="/">
        <div class="logo">
            <img src="/images/logo.png" alt="Logo" class="logo__image" title="Dragship">
            <h1 class="logo__title" title="Dragship">Dragship</h1>
        </div>
    </a>

    @if(!Request::is('coming-soon'))
        <ul class="menu">
            <a class="menu__item" href="#reseller">
                <li>Reseller</li>
            </a>
            <a class="menu__item" href="#distributor">
                <li>Distributor</li>
            </a>
        </ul>
    @endif
</header>