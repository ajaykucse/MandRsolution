<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use DB;
class ManageMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menus = Menu::get();
        return view('admin.pages.menu.view')->with(compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.menu.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if($request->isMethod('post')){
            $data = $request->all();

            $menu = new Menu;
            $menu->name = $data['name'];
            $menu->isActive = $data['isActive'];
            $menu->save();
            return redirect('admin/view')->with('flash_message_success','Menu added successfully');
        } 

         return view('admin.pages.menu.add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id = null)
    {
        $menuDetails = Menu::where(['id'=>$id])->first();
        return view('admin.pages.menu.edit')->with(compact('menuDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
        $data = $request->all();

        Menu::where(['id'=>$id])->update(['name'=>$data['name']]);

        return redirect('admin/view')->with('flash_message_success','Menu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('menus')
            ->where('id',$id)
            ->delete();
        return redirect('admin/view')->with('flash_message_success','Menu deleted successfully');
    }

    public function unactive($id)
    {
        DB::table('menus')
            ->where('id',$id)
            ->update(['isActive' => 0]);
        return redirect('admin/view')->with('flash_message_success','Menu unactive successfully');
    }
    public function active($id)
    {
        DB::table('menus')
            ->where('id',$id)
            ->update(['isActive' => 1]);
        return redirect('admin/view')->with('flash_message_success','Menu active successfully');
    }
}
