<article class="services-container">
    <header class="site-header">
        <h1 class="site-title">¿que hacemos?</h1>
        <p class="site-subTitle">Nuestros servicios</p>
    </header>
    <div class="sn-container">
        <div class="service-container grid-4 scrollAnimane">
            <article class="service sn-grid__item--4">
                <a href="{{ path('servicio_single',{'slug':servicio.slug}) }}" class="service__header">
                    <img src="{{  asset('bundles/assets/uploads/service/images/') ~ servicio.thumbnail }}" alt="{{ servicio.title }}" title="{{ servicio.title }}">
                </a>
                <div class="service__content">
                    <div class="service__icon {{ servicio.icon }}"></div>
                    <h3 class="service__title">{{ servicio.title }}</h3>
                    <p class="service__text">{{ servicio.description }}</p>
                </div>
            </article>
            <article class="service sn-grid__item--4">
                <a href="{{ path('servicio_single',{'slug':servicio.slug}) }}" class="service__header">
                    <img src="{{  asset('bundles/assets/uploads/service/images/') ~ servicio.thumbnail }}" alt="{{ servicio.title }}" title="{{ servicio.title }}">
                </a>
                <div class="service__content">
                    <div class="service__icon {{ servicio.icon }}"></div>
                    <h3 class="service__title">{{ servicio.title }}</h3>
                    <p class="service__text">{{ servicio.description }}</p>
                </div>
            </article>
            <article class="service sn-grid__item--4">
                <a href="{{ path('servicio_single',{'slug':servicio.slug}) }}" class="service__header">
                    <img src="{{  asset('bundles/assets/uploads/service/images/') ~ servicio.thumbnail }}" alt="{{ servicio.title }}" title="{{ servicio.title }}">
                </a>
                <div class="service__content">
                    <div class="service__icon {{ servicio.icon }}"></div>
                    <h3 class="service__title">{{ servicio.title }}</h3>
                    <p class="service__text">{{ servicio.description }}</p>
                </div>
            </article>
        </div>
    </div>
</article>
