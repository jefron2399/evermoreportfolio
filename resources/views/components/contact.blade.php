<section id="contact" class="section contact-section">
    <div class="contact-copy">
        <p class="eyebrow">Let’s talk</p>
        <h2>Have a problem<br><em>worth solving?</em></h2>
        <p>If you’re looking for someone who can support your people, understand your systems, and grow into applied AI work, I’d be glad to hear from you.</p>

        <div class="contact-links">
            <a href="mailto:mwase.evermore@gmail.com" class="contact-link" aria-label="Email Evermore Mwase">
                <span class="contact-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 6.75A2.75 2.75 0 0 1 6.75 4h10.5A2.75 2.75 0 0 1 20 6.75v10.5A2.75 2.75 0 0 1 17.25 20H6.75A2.75 2.75 0 0 1 4 17.25V6.75Z"/><path d="m5 7 7 5.5L19 7"/></svg>
                </span>
                <span>mwase.evermore@gmail.com</span>
            </a>
            <a href="tel:+27602412775" class="contact-link" aria-label="Call Evermore Mwase">
                <span class="contact-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.38 1.9.72 2.8a2 2 0 0 1-.45 2.11L8 9.91a16 16 0 0 0 6.09 6.09l1.28-1.38a2 2 0 0 1 2.11-.45c.9.34 1.84.59 2.8.72A2 2 0 0 1 22 16.92Z"/></svg>
                </span>
                <span>+27 60 241 2775</span>
            </a>
            <a href="https://www.linkedin.com/in/evermore-mwase-b08447244" target="_blank" rel="noreferrer noopener" class="contact-link" aria-label="Open Evermore Mwase LinkedIn profile">
                <span class="contact-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M6.94 8.5A1.56 1.56 0 1 1 6.94 5.4a1.56 1.56 0 0 1 0 3.1ZM5.5 9.8h2.9v8.7H5.5V9.8Zm5.1 0h2.77v1.19h.04c.39-.73 1.33-1.5 2.74-1.5 2.92 0 3.46 1.92 3.46 4.42v4.6h-2.9v-4.3c0-1.03-.02-2.36-1.44-2.36-1.45 0-1.67 1.13-1.67 2.29v4.37h-2.9V9.8Z"/></svg>
                </span>
                <span>LinkedIn profile</span>
            </a>
            <a href="https://wa.me/27602412775?text=Hi%20Evermore%2C%20I%27d%20like%20to%20connect." target="_blank" rel="noreferrer noopener" class="contact-link" aria-label="Chat with Evermore Mwase on WhatsApp">
                <span class="contact-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19.05 4.95A9.87 9.87 0 0 0 12.1 2C6.64 2 2.2 6.43 2.2 11.9c0 1.78.47 3.52 1.36 5.05L2 22l5.25-1.38a9.9 9.9 0 0 0 4.85 1.38h.01c5.46 0 9.89-4.44 9.89-9.9a9.82 9.82 0 0 0-2.95-6.95Zm-6.95 15.2c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.11.82.83-3.03-.2-.31A8.06 8.06 0 0 1 3.9 11.9a8.2 8.2 0 1 1 8.2 8.2Zm4.5-6.12c-.25-.12-1.48-.73-1.71-.81-.23-.08-.4-.12-.57.12-.17.25-.65.81-.8 1-.14.17-.28.19-.53.06-.25-.12-1.06-.39-2.02-1.24-.75-.66-1.25-1.49-1.4-1.74-.14-.25-.02-.39.11-.51.11-.11.25-.28.37-.42.12-.14.16-.25.25-.42.08-.17.04-.31-.02-.43-.06-.12-.57-1.37-.78-1.87-.2-.49-.41-.42-.57-.43h-.48c-.17 0-.43.06-.66.31-.23.25-.88.86-.88 2.1 0 1.23.9 2.43.75 2.58-.14.16 1.39 2.14 3.4 2.97.48.2.86.33 1.15.42.49.16.94.14 1.29.08.39-.06 1.48-.6 1.68-1.18.2-.58.2-1.08.14-1.18-.06-.1-.22-.17-.47-.29Z"/></svg>
                </span>
                <span>WhatsApp</span>
            </a>

            <span class="relocation-note">Open to relocation</span>
        </div>
    </div>

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
