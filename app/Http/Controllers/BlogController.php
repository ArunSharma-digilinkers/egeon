<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_title'     => 'required|string|max:255',
            'blog_post'      => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $filename = null;

        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $filename = time() . rand(0, 9999) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('blog', $filename, 'public');
        }

        Blog::create([
            'featured_image' => $filename,
            'post_title'     => $request->post_title,
            'blog_post'      => $request->blog_post,
            'title'          => $request->title,
            'description'    => $request->description,
            'tags'           => $request->tags,
            'category'       => $request->category,
            'slug'           => $request->slug,
            'author'         => $request->author,
        ]);

        return redirect('/admin/blog/')->with('message', 'Blog added successfully');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'post_title'     => 'required|string|max:255',
            'blog_post'      => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $filename = $blog->featured_image;

        if ($request->hasFile('featured_image')) {
            // delete old file if exists
            if ($filename && Storage::disk('public')->exists('blog/' . $filename)) {
                Storage::disk('public')->delete('blog/' . $filename);
            }

            $file = $request->file('featured_image');
            $filename = time() . rand(0, 9999) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('blog', $filename, 'public');
        }

        $blog->update([
            'featured_image' => $filename,
            'post_title'     => $request->post_title,
            'blog_post'      => $request->blog_post,
            'title'          => $request->title,
            'description'    => $request->description,
            'tags'           => $request->tags,
            'category'       => $request->category,
            'slug'           => $request->slug,
            'author'         => $request->author,
        ]);

        return redirect('/admin/blog/')->with('message', 'Post updated successfully');
    }

    public function destroy(Blog $blog)
    {
        // delete featured image if exists
        if ($blog->featured_image && Storage::disk('public')->exists('blog/' . $blog->featured_image)) {
            Storage::disk('public')->delete('blog/' . $blog->featured_image);
        }

        $blog->delete();

        return redirect('/admin/blog/')->with('message', 'Post deleted successfully');
    }

}
