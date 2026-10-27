<section id="contact" class="section contact-section">
    <div class="contact-copy"><p class="eyebrow">Let’s talk</p><h2>Have a problem<br><em>worth solving?</em></h2><p>If you’re looking for someone who can support your people, understand your systems, and grow into applied AI work, I’d be glad to hear from you.</p><div class="contact-links"><a href="mailto:mwase.evermore@gmail.com">mwase.evermore@gmail.com ↗</a><a href="tel:+27602412775">+27 60 241 2775</a><a href="https://www.linkedin.com/in/evermore-mwase-b08447244" target="_blank" rel="noreferrer">LinkedIn profile ↗</a><span class="relocation-note">Open to relocation</span></div></div>

    <form action="{{ route('send.email') }}" method="POST" class="contact-form">
        @csrf
        @if (session('success'))
            <p class="form-alert form-alert-success">{{ session('success') }}</p>
        @elseif (session('error'))
            <p class="form-alert form-alert-error">{{ session('error') }}</p>
        @endif
        @if ($errors->any())
            <p class="form-alert form-alert-error">Please check the form and try again.</p>
        @endif
        <input type="text" name="name" placeholder="Your Name" required class="w-full p-3 bg-gray-800 rounded-lg mb-4">
        <input type="email" name="email" placeholder="Your Email" required class="w-full p-3 bg-gray-800 rounded-lg mb-4">
        <textarea name="message" placeholder="Your Message" required class="w-full p-3 bg-gray-800 rounded-lg mb-4"></textarea>
        <button type="submit" class="button button-primary">Send message <span>↗</span></button>
    </form>
</section>
