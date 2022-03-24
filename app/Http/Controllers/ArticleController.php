<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\RemarkRequest;
use App\Http\Requests\ResponseRequest;
use App\Models\Article;
use App\Helpers\UploadsFile;
use App\Models\Remark;
use App\Models\Responses;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * @param ArticleRequest $articleRequest
     * @return \Illuminate\Http\RedirectResponse une fois la creation d'un nouveau article article
     * est faite, on se redirige vers la page affichant tous les articles
     */
    function createArticle(ArticleRequest $articleRequest)
    {
        $title = $articleRequest->get('title');
        $slug = Str::slug($title,'_');
       $photo = $articleRequest->file('image');
       if($photo) {
           $imageName = uniqid('image_',true).'.'.$photo->getClientOriginalExtension();
           $photo->move(UploadsFile::getUploadPAth('profile_photos'),$imageName);
       }

       $status = $articleRequest->get('status');
       if($status=='Planned'){
           Article::create([
               'image'=>$photo,
               'title'=>$title,
               'content'=>$articleRequest->get('content'),
               'status'=>$status,
               'tags'=>$articleRequest->get('tags'),
               'slug'=>$slug,
               'published_at'=>$articleRequest->get('published_at')
           ]);
       } elseif ($status=="Draft"){
           Article::create([
               'image'=>$photo,
               'title'=>$articleRequest->get('title'),
               'content'=>$articleRequest->get('content'),
               'tags'=>$articleRequest->get('tags'),
               'status'=>$status,
               'slug'=>$slug,
               "published_at"=>null
           ]);
       }else {
           Article::create([
               'image'=>$photo,
               'title'=>$articleRequest->get('title'),
               'content'=>$articleRequest->get('content'),
               'tags'=>$articleRequest->get('tags'),
               'status'=>$status,
               'slug'=>$slug,
               'published_at'=>now()
           ]);
       }

       return redirect()->route('allArticle');
    }

    function allArticle()
    {
        $articles = Article::simplePaginate(3);
        return view('articles.allArticle',compact('articles'));
    }

    function viewArticle($article)
    {
        $counter = Article::all()->count();
        $articles = Article::with('remarks')->where('slug',$article)->first();
        return view('articles.viewArticle',compact('articles','counter'));
    }

    function findArticle($id){
        $article = Article::find($id);
        $slug = $article->slug;
        return redirect()->route("viewArticle",$slug);
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
