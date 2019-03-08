<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Request;
use App\Article;
use DB;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::table('tbl_article')
                    ->where('prnt_id',0)->get();


        return view('admin.pages.article.view', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.pages.article.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             Article::create(Request::all());
             
            return redirect('admin/view-article')->with('flash_message_success','Article added successfully');
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
    public function edit(Request $request, $id=null)
    {
        //$menuItemDetails = MenuItem::where(['id'=>$id])->first();

        //$menuInfo = Menu::where(['id' => $menuItemDetails->menu_id])->first();
        return view('admin.pages.article.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('tbl_article')
            ->where('id',$id)
            ->delete();
        return redirect('admin/view-article')->with('flash_message_success','Article deleted successfully');
    }
    public function findArticleName(Request $request)
    {
        $data=Article::select('title','id','odr')->where('id',$request->id)->take(100)->get();

        return response()->json($data);
    }
       public function publish($id)
    {
        DB::table('tbl_article')
            ->where('id',$id)
            ->update(['is_publish' => 1]);
        return redirect('admin/view-article')->with('flash_message_success','Article Publish successfully');
    }
}
