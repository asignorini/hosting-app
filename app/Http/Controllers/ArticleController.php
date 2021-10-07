<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function show($id)
    {
        $post = Article::findOrFail($id);
        return view('article', ['article' => $post]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', ['categories' => $categories]);
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.edit', ['article' => $article, 'categories' => $categories]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();

        $request->validate([
            'article_title'         => 'required',
            'article_description'   => 'required',
            'article_text'          => 'required',
            'category_id'           => 'required',
            'article_image'         => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('article_image')) {
            $file = $request->file('article_image');
            $data['article_image'] = time() . "." . $file->extension();
            $file->storeAs('img', $data['article_image'], 'public');
        }

        Article::create($data);

        return redirect()
            ->route('admin.index')
            ->with('message.success', 'El post fue publicado correctamente.');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'article_title'         => 'required',
            'article_description'   => 'required',
            'article_text'          => 'required',
            'category_id'           => 'required',
            'article_image'         => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->input();
        $article = Article::findOrFail($id);

        if ($request->hasFile('article_image')) {
            $file = $request->file('article_image');
            $imageName = time() . "." . $file->clientExtension();
            $file->storeAs('img', $data['article_image'], 'public');
            $data['article_image'] = $imageName;
            $oldImage = $article->article_image;
        }

        $article->update($data);

        if($request->hasFile('article_image')){
            unlink(public_path('storage/img' . $oldImage));
        }

        return redirect()
            ->route('admin.index')
            ->with('message.success', 'El post' . $article->article_title . 'fue modificado correctamente.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        if($article->hasImage()) {
            Storage::disk('public')->delete('img/' . $article->article_image);
        }
        return redirect()
        ->route('admin.index')
        ->with('message.success', 'El post' . $article->article_title . 'ha sido eliminado');
    }
}
