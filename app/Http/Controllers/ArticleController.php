<?php

namespace App\Http\Controllers;

use App\Article;
use App\Images;
use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('admin.dashboard',[
            'articles' => Article::all()
//            'amount' => Article::count()
        ]);
    }

    public  function create(){
        if(!Auth::guest())
            return view('admin.create');
        else
            return view('404');
    }

    public function store(Request $request){

        if (!Auth::guest()) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg|min:50',
                'title' => 'required',
                'content' => 'required',
                'price' => 'required'
            ]);
            if ($request->hasfile('image')) {
                $file1 = $request->file('image');
                $name = time() . $file1->getClientOriginalName();
                $file1->move(public_path() . '/img/resort_main_img/', $name);
            }

            $data = new Article();

            $data->title = $request->get('title');
            $data->content = $request->get('content');
            $data->price = $request->get('price');
            $data->image = $name;

            $data->discount = $request->get('discount');
            $data->save();

            return redirect('/home')->with('status', 'Успешно создано!');
        }else{
            return view('404');
        }
    }
    public  function edit($id){

        if (!Auth::guest()) {
            $articles = Article::find($id);

            return view('admin.edit', [
                'articles' => $articles
            ]);
        }else{
            return view('404');
        }
    }
    public function update(Request $request,Article $article){

        if (!Auth::guest()) {
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg|max:3000',
                'title' => 'required',
                'content' => 'required',
                'price' => 'required'
            ]);

            $var = $request->ip();

            $article->title = $request->input('title');
            $article->content = $request->get('content');
            $article->price = $request->input('price');
            $article->discount = $request->input('discount');

            if ($request->hasfile('image')) {
                $file1 = $request->file('image');
                $name = time() . $file1->getClientOriginalName();
                $file1->move(public_path() . '/img/resort_main_img/', $name);
                $article->image = $name;
            }

            $article->update();

            return redirect('/home')->with('status', 'Успешно обновлено!');
        }else{
            return view('404');
        }
    }

    public function destroy($id){

        if (!Auth::guest()) {
            $article = Article::find($id);
            $article->delete();

            return redirect('/home')->with('status', 'Успешно удалено!');
        }else{
            return view('404');
        }
    }

    public function image(){
        return view('admin.image',['articles' => Article::all()]);
    }

    public function file( Request $request){

        if (!Auth::guest()) {
            $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'mimes:jpeg,png,jpg'
            ]);
            $article_id = $request->get('article_id');

            if ($request->hasfile('filenames')) {
                foreach ($request->file('filenames') as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move(public_path() . '/files/', $name);
                    $data[] = $name;
                }
            }

            $file = new Images();
            $file->path = json_encode($data);
            $file->article_id = $article_id;
            $file->save();

            return redirect('/home')->with('status', 'Все картинки успешно загружены!');
        }else{
            return view('404');
        }
    }
    public function delete($id){

        if (!Auth::guest()) {
            $subs = Subscribe::find($id);
            $subs->delete();
        }else{
            return view('404');
        }

        return redirect('/home')->with('status','Успешно удалено!');

    }

}
