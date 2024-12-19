<?php

namespace App\Models;

use App\Http\Controllers\BlogsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    /** @use HasFactory<\Database\Factories\BlogsFactory> */
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'content', 'image', 'location', 'category', 'status'];

    protected $table = 'blogs';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($blog) {
            if ($blog->image && $blog->image !== BlogsController::BLOG_IMAGE_DEFAULT) {
                $imagePath = public_path($blog->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
        });
    }
}
