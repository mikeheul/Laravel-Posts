<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke($slug)
    {
        //obtient la catégorie demandée
        $category = Category::query()
            ->where('slug', $slug)
            ->firstOrFail();

        //obtenir les messages de cette catégorie
        $posts = $category->posts()
            ->where('is_published',true)
            ->orderBy('id','desc')
            ->get();

        //obtient toutes les catégories
        $categories = Category::all();

        //obtient tous les tags
        $tags = Tag::all();

        //obtient les 5 derniers messages
        $recent_posts = Post::query()
            ->where('is_published',true)
            ->orderBy('created_at','desc')
            ->take(5)
            ->get();

        //assigner les variables à la vue correspondante
        return view('category', [
            'category' => $category,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }
}
