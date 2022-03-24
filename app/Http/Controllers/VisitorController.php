<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Http\Requests\RemarkRequest;
use App\Mail\SendMail;
use App\Models\Article;
use App\Models\Remark;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VisitorController extends Controller
{
    function allArticle()
    {
        $articles = Article::simplePaginate(5);
        return view('visitors.allArticle',compact('articles'));
    }

    function viewArticle($id)
    {
        $counter = Article::all()->count();
        $article = Article::with('remarks')->find($id);
        visits($article)->increment();
        //$article->increment('visites');
        $comments = $article->remarks->where('status','approved');
        return view('visitors.viewArticle',compact('article','comments','counter'));
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

    function sendEmail(EmailRequest $emailRequest){
        $name = $emailRequest->get('name');
        $email = $emailRequest->get('email');
        $subject = $emailRequest->get('subject');
        $body = $emailRequest->get('body');
        $email_data = ['name'=>$name,'email'=>$email,'subject'=>$subject,'body'=>$body];

        Mail::to('test@mail.com')->send(new SendMail($email_data));

        return back();
    }
}
