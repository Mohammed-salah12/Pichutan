<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        Log::info('Authenticated User ID: ' . Auth::id());
        $blogs = Blog::where('is_published', true)->get();
        return view('front.blog', compact('blogs'));
    }


    public function create()
    {
        return view('front.createblog');
    }


    public function show($id)
    {
        $blog = Blog::findOrFail($id); // Retrieve the blog post by its ID
        return view('front.showblog', compact('blog')); // Pass the blog post data to the view
    }

    public function store(Request $request)
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to create a blog.');
        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author_name' => 'required|string|max:255',
            'author_info' => 'required|string',
            'content' => 'required|string',
            'email' => 'email|string',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $blog = new Blog();
        $blog->title = $validatedData['title'];
        $blog->image = $imagePath; // Save the path in the database
        $blog->author_name = $validatedData['author_name'];
        $blog->author_info = $validatedData['author_info'];
        $blog->content = $validatedData['content'];
        $blog->author_id = Auth::user()->id; // Set the author_id to the authenticated user's ID
        $blog->email = $validatedData['email'];
        $blog->is_published = false; // Initially not published
        $blog->save();
        Session::flash('flash_message', ['type' => 'success', 'message' => 'Blog created, wait for Admin approval']);
        return redirect()->route('blog.index');
    }

    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);

        // Check if the authenticated user is the author of the blog
        if (Auth::guard('website-user')->id() != $blogs->author_id) {
            return redirect()->route('blog.index')->with('flash_message', [
                'type' => 'error',
                'message' => 'You are not authorized to edit this blog.'
            ]);
        }

        return view('front.editblog', compact('blogs'));
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        // Check if the authenticated user is the author of the blog
        if (Auth::id() != $blog->author_id) {
            return redirect()->route('blog.index')->with('flash_message', [
                'type' => 'error',
                'message' => 'You are not authorized to update this blog.'
            ]);
        }
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author_name' => 'required|string|max:255',
            'author_info' => 'required|string',
            'content' => 'required|string',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete($blog->image);
            $imagePath = $request->file('image')->store('images', 'public');
            $blog->image = $imagePath;
        }

        $blog->title = $validatedData['title'];
        $blog->author_name = $validatedData['author_name'];
        $blog->author_info = $validatedData['author_info'];
        $blog->author_id = Auth::id();
        // Setting the author_id to the authenticated user's ID
        $blog->content = $validatedData['content'];
        $blog->is_published = false; // Initially not published

        $blog->save();
        Session::flash('update-flash_message', ['type' => 'success', 'message' => 'Blog updated, wait for Admin approval']);

        return redirect()->route('blog.index');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if (Auth::id() != $blog->author_id) {
            return redirect()->route('blog.index')->with('flash_message', [
                'type' => 'error',
                'message' => 'You are not authorized to delete this blog.'
            ]);
        }
        // Delete the image
        Storage::disk('public')->delete($blog->image);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
