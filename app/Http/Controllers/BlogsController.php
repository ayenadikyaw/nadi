<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class BlogsController extends Controller
{

    const BLOG_IMAGE_PATH = '/images/blogs/';
    const BLOG_IMAGE_DEFAULT = '/images/blogs/default.jpeg';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blogs::all();
        return Inertia::render('Admin/Blog/blogs', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Blog/CreateBlog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        // Default image path
        $imagePath = self::BLOG_IMAGE_DEFAULT;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the file in the "public" disk
            $imagePath = self::BLOG_IMAGE_PATH . $imageName;
            $image->move(public_path(self::BLOG_IMAGE_PATH), $imageName);
        }

        // Create the blog
        $blog = Blogs::create([
            'title' => $validated['title'],
            'subtitle' => $validated['subtitle'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'location' => $validated['location'],
            'category' => $validated['category'],
            'status' => $validated['status'],
        ]);

        if ($blog) {
            return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully');
        } else {
            return redirect()->route('admin.blogs.index')->with('error', 'Blog creation failed');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Blogs $blogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blogs::find($id);
        return Inertia::render('Admin/Blog/CreateBlog', ['blog' => $blog, 'isEdit' => true]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Blogs $blog, Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        // Fetch the blog
        $blog = Blogs::findOrFail($blog->id);

        // Only update image if a new one is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Delete the old image if it exists and is not the default image
            if ($blog->image && $blog->image !== self::BLOG_IMAGE_DEFAULT && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }

            // Store the new image
            $imagePath = self::BLOG_IMAGE_PATH . $imageName;
            $image->move(public_path(self::BLOG_IMAGE_PATH), $imageName);
            $blog->image = $imagePath;
        }

        // Update the blog fields
        $blog->title = $validated['title'];
        $blog->subtitle = $validated['subtitle'];
        $blog->content = $validated['content'];
        $blog->location = $validated['location'];
        $blog->category = $validated['category'];
        $blog->status = $validated['status'];
        $blog->save();

        if ($blog) {
            return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully');
        } else {
            return redirect()->route('admin.blogs.index')->with('error', 'Blog update failed');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blogs::find($id);
        if ($blog) {
            $blog->delete();
            return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully');
        } else {
            return redirect()->route('admin.blogs.index')->with('error', 'Blog deletion failed');
        }
    }

    /**
     * Update the status of the specified resource.
     */
    public function updateStatus($id, Request $request)
    {
        //dd($request->all());
        $blog = Blogs::findOrFail($id);
        $blog->status = $request->status;
        $blog->save();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog status updated successfully');
    }

    /**
     * get blogs for Blog display page
     */
    public function getBlogs(){
        $blogs = Blogs::where('status', 'Published')->get();
        return Inertia::render('Blog', ['blogs' => $blogs]);
    }

    /**
     * get blog detail for BlogDetail display page
     */
    public function getBlogDetail($id){
        $blog = Blogs::find($id);
        return Inertia::render('BlogDetail', ['blog' => $blog]);
    }
}
