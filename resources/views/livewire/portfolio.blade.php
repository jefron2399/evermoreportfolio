
<x-layout.app>
    
  
    <section class="relative flex flex-col items-center justify-center h-screen text-center bg-cover bg-center"  
    style="background-image: url('{{ secure_asset('images/background.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; image-rendering: crisp-edges;">

<!-- Overlay -->
<div class="absolute inset-0 bg-black opacity-50"></div>

<!-- Content -->
<div class="relative z-10 flex flex-col items-center">
   <img src="{{ secure_asset('images/profile.jpeg') }}" alt="Evermore" class="w-72 h-72 rounded-full border-4 border-gray-700 shadow-lg">
   <h2 class="text-5xl font-bold mt-6 text-white">Evermore Harmony Mwase</h2>
   <p class="text-xl mt-4 text-gray-300">BSc Computer Engineering | Web & Software Developer</p>
   <a href="#projects" class="mt-8 px-6 py-3 bg-blue-600 rounded-lg hover:bg-blue-500">View My Work</a>
</div>

</section>

    @include('components.about')
    @include('components.skills')
    @include('components.projects')
    @include('components.contact')

</x-layout.app>


