<?php

namespace App\Http\Controllers;

use App\Http\Requests\RemarkRequest;
use App\Models\Article;
use App\Models\Remark;
use App\Models\User;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    function allArticle()
    {
        $articles = Article::simplePaginate(3);
        return view('visitors.allArticle',compact('articles'));
    }

    function viewArticle($id)
    {
        $article = Article::with('remarks')->find($id);
        $comments = $article->remarks->where('status','approved');
        return view('visitors.viewArticle',compact('article','comments'));
    }

    function homePage()
    {
        $user = User::with('languages','softwares','hobbys','academics')->first();
        return view('visitors.homepage', compact('user'));

    }

    function createRemark(RemarkRequest $remarkRequest, $id)
    {
        Remark::create([
            'remark'=>$remarkRequest->get('remark'),
            'article_id'=>$id,
            'name'=>$remarkRequest->get('name'),
            'email'=>$remarkRequest->get('email')
        ]);

        return redirect()->route('visitor.viewArticle',$id);
    }
}
