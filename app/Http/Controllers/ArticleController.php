<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\RemarkRequest;
use App\Http\Requests\ResponseRequest;
use App\Models\Article;
use App\Helpers\UploadsFile;
use App\Models\Remark;
use App\Models\Responses;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
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
        DB::transaction(function() use($articleRequest) {
            $title = $articleRequest->get('title');
            $slug = Str::slug($title,'_');
            $photo = $articleRequest->file('image');
            if($photo) {
                $imageName = uniqid('image_',true).'.'.$photo->getClientOriginalExtension();
                $photo->move(UploadsFile::getUploadPAth('profile_photos'),$imageName);
            }

            $status = $articleRequest->get('status');
            if($status=='Planned'){
                $article = Article::create([
                    'image'=>$photo,
                    'title'=>$title,
                    'content'=>$articleRequest->get('content'),
                    'status'=>$status,
                    'slug'=>$slug,
                    'planned_at'=>$articleRequest->get('planned_at')
                ]);
            } elseif ($status=="Draft"){
                $article = Article::create([
                    'image'=>$photo,
                    'title'=>$articleRequest->get('title'),
                    'content'=>$articleRequest->get('content'),
                    'status'=>$status,
                    'slug'=>$slug
                ]);
            }else {
                $article = Article::create([
                    'image'=>$photo,
                    'title'=>$articleRequest->get('title'),
                    'content'=>$articleRequest->get('content'),
                    'status'=>$status,
                    'slug'=>$slug,
                    'planned_at'=>now()
                ]);
            }

            $tags = $articleRequest->get('tags');
            $tags = explode(',',$tags);
            foreach($tags as $tag){

                $tag_id = Tag::create([
                    'name'=>$tag,
                ]);
                $article->tags()->attach($tag_id);
            };
        }
        );




//        $tags_to_create = [];
//        foreach ($tags as $tag){
//            $tags_to_create[] = ['name'=>$tag, 'slug'=>Str::slug($tag)];
//        }
//        Tag::insert($tags_to_create);
//       $tags = $articleRequest->get('tags');
//       $slug = Str::slug($tags, '_');
//        $tag = Tag::create(
//           [
//           'name'=>$tags,
//           'slug'=>$slug
//           ]
//       );
//       $article->$tag->attach();

       return redirect()->route('allArticle');
    }

    function findPost(string $key)
    {
        $articles = DB::table('articles')->whereJsonContains('slug',$key)->simplePaginate(3);
        return view('articles.allArticle', compact('articles'));
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
