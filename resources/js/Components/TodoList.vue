<template>
    <div class="todo-container">
        <div class="todo-header relative">
            <div class="absolute -right-2 -top-2 w-4 h-4 bg-primary/20 animate-ping"></div>
        </div>

        <div class="todo-input-container mb-6">
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Add new task..."
                    class="w-full bg-background border border-gray-500 rounded-lg p-3 focus:border-primary transition-colors"
                >
                <button class="absolute right-2 top-2 hover:text-primary transition-colors">
                    <span class="text-2xl">+</span>
                </button>
            </div>
        </div>

        <div class="todo-list space-y-4">
            <div class="todo-item group border border-gray-500 rounded-lg p-4 hover:border-primary transition-all transform hover:-translate-y-1">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-primary rounded border-gray-500">
                        <span class="group-hover:text-primary transition-colors">Complete portfolio website</span>
                    </div>
                    <div class="flex gap-2">
                        <button class="hover:text-primary transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </button>
                        <button class="hover:text-red-500 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>