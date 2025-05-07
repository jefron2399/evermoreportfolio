<section id="contact" class="py-16 px-8">
    <h2 class="text-3xl font-bold text-center">Contact Me</h2>

    <!-- Contact Details -->
    <div class="mt-6 max-w-lg mx-auto text-center">
        <p class="text-lg text-gray-400">
            📞 Phone: <a href="tel:+27602412775" class="text-blue-400 hover:underline">+27 60 241 2775</a>
        </p>
        <p class="text-lg text-gray-400">
            ✉️ Email: <a href="mailto:mwase.evermore@gmail.com" class="text-blue-400 hover:underline">mwase.evermore@gmail.com</a>
        </p>
        <p class="text-lg text-gray-400">
            💬 WhatsApp: <a href="https://wa.me/27602412775" target="_blank" class="text-green-400 hover:underline">Chat on WhatsApp</a>
        </p>
    </div>

    <!-- Contact Form -->
    <form action="{{ route('send.email') }}" method="POST" class="mt-6 max-w-lg mx-auto">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required class="w-full p-3 bg-gray-800 rounded-lg mb-4">
        <input type="email" name="email" placeholder="Your Email" required class="w-full p-3 bg-gray-800 rounded-lg mb-4">
        <textarea name="message" placeholder="Your Message" required class="w-full p-3 bg-gray-800 rounded-lg mb-4"></textarea>
        <button type="submit" class="w-full p-3 bg-blue-600 rounded-lg hover:bg-blue-500">Send Message</button>
    </form>
</section>