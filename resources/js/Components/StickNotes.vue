<template>
    <div class="sticky-notes">        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <!-- Example sticky notes -->
            <div class="sticky-note bg-primary/20 p-4 rounded-lg shadow-lg transform hover:scale-105 transition-transform">
                <div class="flex justify-between items-start mb-2">
                    <textarea class="bg-transparent w-full resize-none focus:outline-none" rows="3" placeholder="Write your note here..."></textarea>
                    <div class="anime-character">
                        <img src="/images/animes/1.gif" alt="Anime character" class="w-12 h-12 rounded-full animate-bounce">
                    </div>
                </div>
                <div class="flex justify-end">
                    <button class="text-sm text-gray-400 hover:text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="sticky-note bg-primary/30 p-4 rounded-lg shadow-lg transform hover:scale-105 transition-transform">
                <div class="flex justify-between items-start mb-2">
                    <textarea class="bg-transparent w-full resize-none focus:outline-none" rows="3" placeholder="Write your note here..."></textarea>
                    <div class="anime-character">
                        <img src="/images/animes/1.gif" alt="Anime character" class="w-12 h-12 rounded-full animate-bounce">
                    </div>
                </div>
                <div class="flex justify-end">
                    <button class="text-sm text-gray-400 hover:text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Add new note button -->
        <button class="mt-4 bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/80 transition-colors flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Add New Note
        </button>
    </div>
</template>