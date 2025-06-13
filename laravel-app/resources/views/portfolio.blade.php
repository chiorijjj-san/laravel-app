@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 text-gray-800 p-6" x-data="{ selectedProject: null, filter: 'all' }">

    {{-- Header --}}
    <div class="max-w-5xl mx-auto text-center py-12">
        <h1 class="text-4xl font-bold mb-4">Hi, I'm Christian</h1>
        <p class="text-lg mb-6">A web developer who builds cool things using Laravel, JS, and more.</p>
        <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded">Contact Me</a>
    </div>

    {{-- Filter Buttons --}}
    <div class="flex justify-center gap-4 mb-8">
        <button class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400" 
                :class="{ 'bg-blue-600 text-white': filter === 'all' }" 
                @click="filter = 'all'">All</button>
        <template x-for="cat in ['Web', 'Mobile', 'Design']" :key="cat">
            <button class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400" 
                    :class="{ 'bg-blue-600 text-white': filter === cat }" 
                    @click="filter = cat" x-text="cat"></button>
        </template>
    </div>

    {{-- Portfolio Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <template x-for="project in projects.filter(p => filter === 'all' || p.category === filter)" :key="project.id">
            <div @click="selectedProject = project" class="cursor-pointer bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img :src="project.image" alt="" class="w-full h-40 object-cover rounded mb-2">
                <h2 class="text-xl font-semibold" x-text="project.title"></h2>
                <p class="text-sm text-gray-600" x-text="project.category"></p>
            </div>
        </template>
    </div>

    {{-- Modal --}}
    <div x-show="selectedProject" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-11/12 md:w-1/2 relative" @click.outside="selectedProject = null">
            <button class="absolute top-2 right-2 text-gray-600" @click="selectedProject = null">✕</button>
            <img :src="selectedProject.image" class="w-full h-48 object-cover rounded mb-4">
            <h2 class="text-2xl font-bold mb-2" x-text="selectedProject.title"></h2>
            <p class="text-sm text-gray-500 mb-4" x-text="selectedProject.category"></p>
            <p x-text="selectedProject.description"></p>
        </div>
    </div>

</div>

{{-- Alpine.js & Data --}}
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
            // Add more as needed
        ]
    }));
});
</script>
@endsection

<!-- Head -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/alpinejs" defer></script>

