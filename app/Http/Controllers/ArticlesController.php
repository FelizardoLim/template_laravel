<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Session;

class ArticlesController extends Controller
{
    function showArticles() {
    	// $articles = ["first article", "second article", "third article", "fourth", "fifth"];
    	$articles = Article::all();
    	return view('article/display', compact('articles'));
    }

    function showArticle($id) {
    	$article = Article::find($id);
    	return view('article/display_one_item', compact('article'));
    }

    function createArticle() {
    	return view('article/create');
    }

    function saveArticle(Request $request) {
    	echo ($request->title . " " . $request->content);

    	$new_article = new Article(); 
    	$new_article->title = $request->title;
    	$new_article->content = $request->content; 
    	$new_article->save();

    	Session::flash('message','Article Successfully Created');
    	return redirect('articles');
    }

	function deleteArticle($id) {
		$article_to_be_deleted = Article::find($id);
		$article_to_be_deleted->delete();

		Session::flash('message','Article Successfully Deleted');
		return redirect('articles');
	}

	function editArticle($id) {
		$article_to_be_edited = Article::find($id);

		return view('article/edit', compact('article_to_be_edited'));
	}

	function saveEditArticle($id, Request $request) {
		$article_to_be_edited = Article::find($id);		
		$article_to_be_edited->title = $request->title;
		$article_to_be_edited->content = $request->content;
		$article_to_be_edited->save();

		Session::flash('message','Article Successfully Edited');
		return redirect('articles');
	}
}
