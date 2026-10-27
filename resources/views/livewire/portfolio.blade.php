
<x-layout.app>


    <section class="hero">
        <div class="hero-copy">
            <p class="eyebrow">Engineering · IT systems · machine learning</p>
            <h1>Technology that works<br><em>for people.</em></h1>
            <p class="hero-lede">I’m Evermore Mwase, a Computer Engineer who helps teams solve technical problems, support users and build digital tools they can depend on.</p>
            <div class="hero-actions"><a href="#experience" class="button button-primary">Explore my experience <span>↓</span></a><a href="{{ route('resume.view') }}" class="button button-quiet">View résumé ↗</a></div>
            <div class="hero-meta"><span>Based in Cape Town, South Africa</span><span>Open to relocation</span><span>Available for global opportunities</span></div>
            <div class="fit-strip"><span>Best fit</span><strong>IT Support / Systems</strong><strong>Software Engineering</strong><strong>Applied ML / AI Development</strong></div>
        </div>
        <div class="hero-visual"><div class="portrait-frame"><img src="{{ asset('images/profile.jpeg') }}" alt="Portrait of Evermore Mwase"></div><div class="availability-card"><span class="status-dot"></span><span>Available for the next challenge</span></div></div>
    </section>

    @include('components.about')
    @include('components.experience')
    @include('components.skills')
    @include('components.projects')
    @include('components.contact')

</x-layout.app>


