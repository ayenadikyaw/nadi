<?php

use App\Http\Controllers\BlogsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use Inertia\Inertia;

//public routes
Route::inertia('/', 'Index')->name('Index');
Route::inertia('/about', 'About')->name('About');
Route::inertia('/achievements', 'Achievements')->name('Achievements');
Route::get('/blogposts', [BlogsController::class,'getBlogs'])->name('Blog');
Route::get('/blogposts/{id}', [BlogsController::class,'getBlogDetail'])->name('BlogDetail');
Route::inertia('/projects', 'Projects')->name('Projects');
Route::inertia('/myworkspace', 'MyWorkSpace')->name('MyWorkSpace');

//admin routes need to be protected
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    AdminMiddleware::class,
])->group(function () {
    Route::get('/admin', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/projects', function () {
        return Inertia::render('Admin/Projects');
    })->name('admin.projects');

    Route::get('/admin/todos', function () {
        return Inertia::render('Admin/Todos');
    })->name('admin.todos');

    //blogs routes
    Route::resource('blogs', BlogsController::class)
        ->except(['show'])
        ->names([
            'index' => 'admin.blogs.index',
            'create' => 'admin.blogs.create',
            'store' => 'admin.blogs.store',
            'edit' => 'admin.blogs.edit',
            'update' => 'admin.blogs.update',
            'destroy' => 'admin.blogs.destroy',
        ]);
    //status update route
    Route::put('/admin/blogs/{id}/status', [BlogsController::class, 'updateStatus'])->name('admin.blogs.update-status');

    Route::get('/admin/notes', function () {
        return Inertia::render('Admin/Notes');
    })->name('admin.notes');

    Route::get('/admin/music', function () {
        return Inertia::render('Admin/Music');
    })->name('admin.music');
});
