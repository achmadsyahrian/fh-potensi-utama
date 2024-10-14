<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function international() {
        $title = "Hubungan Internasional";
        
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 1)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 1);
                    });
            })
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.international', compact('latestPosts', 'title'));
    }
    

    public function english() {
        $title = "Pendidikan Bahasa Inggris";
        
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 2)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 2);
                    });
            })
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.english', compact('latestPosts', 'title'));
    }
}
