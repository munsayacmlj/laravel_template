<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function showArticles() {
    	$articles = Article::all();
    	return view('articles/articles_list', compact('articles'));
    }

    public function show($id) {
    	$article = Article::find($id);
    	return view('articles/single_article', compact('article'));
    }

    public function createForm() {
    	// return view('');
    	return view('articles/article_create');
    }

    public function store(Request $request) {
    	$new_article = new Article();
    	$new_article->title = $request->title;
    	$new_article->content = $request->content;
    	$new_article->save();

    	return redirect('/articles');
    }

    public function delete($id) {
    	$article = Article::find($id);
    	$article->delete();

    	return redirect('/articles');
    }

    public function editForm($id) {
    	$article = Article::find($id);

    	return view('articles/article_edit', compact('article'));
    }

    public function update($id, Request $request) {
    	$article = Article::find($id);
    	$article->title = $request->title;
    	$article->content = $request->content;
    	$article->save();

    	return redirect("articles/$id");
    }
}