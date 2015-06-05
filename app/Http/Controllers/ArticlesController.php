<?php

namespace App\Http\Controllers;

use App\Article;
use App\http\Requests;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
// use Request;

class ArticlesController extends Controller
{
  public function index(){
    // $articles = Article::order_by('published_at', 'desc')->get();
    $articles = Article::latest('published_at')->published()->get();
    return view('articles.index', compact('articles'));
  }

  public function show($id){
    $article = Article::findOrFail($id);
    // if(is_null($article)){
    //   abort(404);
    // }
    dd($article->published_at);
    return view('articles.show', compact('article'));
  }

  public function create(){
    return view('articles.create');

  }

  public function store(CreateArticleRequest $request){
    // $input = Request::all();
    // $input['published_at'] = Carbon::now();
    Article::create($request->all());
    return redirect('articles');
  }
}
