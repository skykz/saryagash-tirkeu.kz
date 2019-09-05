<?php

namespace App\Http\Controllers;

use App\Article;
use App\Feedback;
use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function mail(Request $request){

        $name = $request->input('name');
        $telephone = $request->input('telephone');

//        $tel = Conv $request->input('telephone');
        $arr = array('email' => $name,
            'telephone' => $telephone,
            'name' => 'Еркин');
//        return 'bok';
        Mail::send('front.inbox.mail',$arr, function($message)
        {
            $message->to('erasul1997@inbox.ru', 'Erkhan')->subject('Новый заказ!');
            $message->from('erasylgeso@gmail.com','Yerassyl');
        });
        return redirect('/')->with('sent','Успешно Отправлено!');
    }

    public function subscribe(Request $request){

        $email = $request->input('email');

            $data = new Subscribe();
            $data->email = $email;
            $data->save();

        return redirect('/')->with('subscribe','Вы успешно подписались на новости и акции!');
    }

    public function single($id){

        $art = Article::find($id);
        $articles = Article::all();
        $img = DB::table('images')->where('article_id',$id)->orderBy('created_at','desc')->first();
        $types = DB::table('type_classes')->where('article_id',$id)->get();
        $art->increment('article_views');

        return view('front.single-sanatorium',['art'=>$art,'articles' => $articles,'img' => $img, 'types' => $types]);
    }

    public function goEmail(Request $request)
    {

        $name = $request->input('name_client');
        $telephone = $request->input('telephone_client');

//        $tel = Conv $request->input('telephone');
        $arr = array('email' => $name,
            'telephone' => $telephone,
            'name' => 'Еркин');
//        return 'bok';
        Mail::send('front.inbox.orderSentMail', $arr, function ($message) {
            $message->to('erasul1997@inbox.ru', 'Erkhan')->subject('Новый заказ!');
            $message->from('erasylgeso@gmail.com', 'Yerassyl');
        });

        return redirect('/')->with('sent','Успешно Отправлено!');
    }



//    public function count(Request $request,$id){
//        $id_url = $request->input('id');
//
//        dd($id_url);
//        $data_url = Feedback::find(1);
//
//        $data_url->increment('telephone');
//
//        return redirect('/');
//    }
    public function front(){
        return view('index',[
            'articles' => Article::all(),
        ]);
    }

    public function contact(Request $request){

        $name_of_client = $request->input('name');
        $email_of_client = $request->input('telephone');
        $subject_from_client = $request->input('subject');
        $message_from_client = $request->get('message');

        $contact = array('telephone' => $email_of_client,
            'client' => $name_of_client,
            'subject'=> $subject_from_client,
            'mes' => $message_from_client,
            'name' => 'Ерхан');

//        return 'bok';
        Mail::send('front.inbox.mail1',$contact, function($message)
        {
            $message->to('saryagash-tirkeu@mail.ru', 'Erkhan')->subject
            ('Жана заявка!');
            $message->from('erasylgeso@gmail.com','Yerassyl');
        });

        return redirect('/contact')->with('sent','Успешно Отправлено!');
    }

}
