<?php

namespace App\Http\Controllers;

use App\Article;
use App\TypeClass;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.type',[
            'articles' => Article::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->post()) {
            $article_id = $request->get('article_id');
            $type = $request->get('class');
            $title = $request->input('title');
            $content = $request->input('content');


            $new_data = new TypeClass();


            $new_data->article_id = $article_id;
            $new_data->title = $title;
            $new_data->content = $content;
            $new_data->type = $type;

            $new_data->save();

            return redirect('/home')->with('status', 'Все прайслисты успешно загружены!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = TypeClass::find($id);

        return view('admin.editType',[
            'types' => $types,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeClass $types)
    {

        $types->title = $request->input('title');
        $types->content = $request->get('content');

        $types->update();

        return redirect('/home')->with('status','Успешно обновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feed = TypeClass::find($id);
        $feed->delete();

        return redirect('/home')->with('status','Успешно удалено!');
    }
}
