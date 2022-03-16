<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\RemarkRequest;
use App\Http\Requests\ResponseRequest;
use App\Models\Article;
use App\Helpers\UploadsFile;
use App\Models\Remark;
use App\Models\Responses;

class ArticleController extends Controller
{
    /**
     * @param ArticleRequest $articleRequest
     * @return \Illuminate\Http\RedirectResponse une fois la creation d'un nouveau article article
     * est faite, on se redirige vers la page affichant tous les articles
     */
    function createArticle(ArticleRequest $articleRequest)
    {
       $photo = $articleRequest->file('image');
       if($photo) {
           $imageName = uniqid('image_',true).'.'.$photo->getClientOriginalExtension();
           $photo->move(UploadsFile::getUploadPAth('profile_photos'),$imageName);
       }

       Article::create([
           'image'=>$photo,
           'title'=>$articleRequest->get('title'),
           'content'=>$articleRequest->get('content')
       ]);

       return redirect()->route('allArticle');
    }

    function allArticle()
    {
        $articles = Article::simplePaginate(3);
        return view('articles.allArticle',compact('articles'));
    }

    function viewArticle($id)
    {
        $article = Article::with('remarks')->find($id);

        return view('articles.viewArticle',compact('article'));
    }

    function createRemark(RemarkRequest $remarkRequest, $id)
    {
        //dd($remarkRequest->get('name'));
        Remark::create([
            'remark'=>$remarkRequest->get('remark'),
            'article_id'=>$id,
            'name'=>$remarkRequest->get('name'),
            'email'=>$remarkRequest->get('email'),

        ]);

        return redirect()->route('viewArticle',$id);
    }

    function getResponseForm($id)
    {
        return view('articles.createResponse',compact('id'));
    }

    function createResponse(ResponseRequest $responseRequest, $id)
    {
        Responses::create([
            'answer'=>$responseRequest->get('answer'),
            'remark_id'=>$id
        ]);

        return redirect()->route('viewArticle',$id);
    }

    function viewComments()
    {
        $comments = Remark::all();
        return view('articles.comments',compact('comments'));
    }

    function updatedComment($id)
    {
        //dd(Remark::find($id));
        Remark::find($id)->update([
            'status'=>'approved'
        ]);

        return back();
    }

}
