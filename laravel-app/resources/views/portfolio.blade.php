@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 text-gray-800 px-6 py-10" x-data="portfolio">

    {{-- Hero Section --}}
    <div class="max-w-4xl mx-auto text-center mb-12">
        <img src="https://i.pravatar.cc/150?img=68" alt="Profile" class="w-32 h-32 mx-auto rounded-full shadow-lg mb-4 border-4 border-blue-500">
        <h1 class="text-4xl font-extrabold mb-2">Christian Jariol</h1>
        <p class="text-lg text-gray-600">Full-stack Laravel Developer • PHP • JavaScript • Tailwind</p>
        <div class="mt-6">
            <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded transition">Contact Me</a>
        </div>
    </div>

    {{-- Filter Buttons --}}
    <div class="flex justify-center gap-4 mb-8 flex-wrap">
        <button class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 transition"
                :class="{ 'bg-blue-600 text-white': filter === 'all' }"
                @click="filter = 'all'">All</button>
        <template x-for="cat in ['Web', 'Mobile', 'Design']" :key="cat">
            <button class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 transition"
                    :class="{ 'bg-blue-600 text-white': filter === cat }"
                    @click="filter = cat" x-text="cat"></button>
        </template>
    </div>

    {{-- Portfolio Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <template x-for="project in projects.filter(p => filter === 'all' || p.category === filter)" :key="project.id">
            <div @click="selectedProject = project"
                 class="cursor-pointer bg-white p-4 rounded-xl shadow hover:shadow-xl transition group transform hover:scale-105">
                <img :src="project.image" alt="" class="w-full h-40 object-cover rounded mb-3">
                <h2 class="text-xl font-semibold mb-1 group-hover:text-blue-600 transition" x-text="project.title"></h2>
                <p class="text-sm text-gray-600" x-text="project.category"></p>
            </div>
        </template>
    </div>

    {{-- Modal --}}
    <div x-show="selectedProject" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50"
         x-transition>
        <div class="bg-white rounded-lg p-6 w-11/12 md:w-1/2 relative" @click.outside="selectedProject = null"
             x-transition>
            <button class="absolute top-2 right-2 text-gray-600 hover:text-black text-xl" @click="selectedProject = null">✕</button>
            <img :src="selectedProject.image" class="w-full h-48 object-cover rounded mb-4">
            <h2 class="text-2xl font-bold mb-2" x-text="selectedProject.title"></h2>
            <p class="text-sm text-gray-500 mb-4" x-text="selectedProject.category"></p>
            <p x-text="selectedProject.description"></p>
        </div>
    </div>

</div>

{{-- Alpine.js Data --}}
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('portfolio', () => ({
        filter: 'all',
        selectedProject: null,
        projects: [
            {
                id: 1,
                title: 'Laravel CMS',
                category: 'Web',
                image: 'https://source.unsplash.com/random/600x400?cms',
                description: 'A custom content management system built with Laravel and Livewire.'
            },
            {
                id: 2,
                title: 'React Native App',
                category: 'Mobile',
                image: 'https://source.unsplash.com/random/600x400?mobile',
                description: 'A mobile app that tracks fitness goals using React Native and Firebase.'
            },
            {
                id: 3,
                title: 'Portfolio Website',
                category: 'Design',
                image: 'https://source.unsplash.com/random/600x400?design',
                description: 'A modern and interactive portfolio built with Tailwind and Alpine.js.'
            },
            {
                id: 4,
                title: 'E-commerce Platform',
                category: 'Web',
                image: 'https://source.unsplash.com/random/600x400?store',
                description: 'An e-commerce platform with product management and Stripe integration.'
            },
        ]
    }));
});
</script>
@endsection
