<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\Request;
use App\Menu;
use App\Page;
use App\MenuItem;
use Illuminate\Support\Facades\Input;
use DB;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.pages.menuItem.view', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $pages =  Page::all();
        return view('admin.pages.menuItem.add',compact('menus','pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
            MenuItem::create(Request::all());
           
            return 'successfully';
            // dd('MenuItem'); die;


            // $menuItems->save();
            // return redirect('admin/view')->with('flash_message_success','Menu added successfully');
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
    public function edit(Request $request, $id = null)
    {
        $menuItemDetails = MenuItem::where(['id'=>$id])->first();

        $menuInfo = Menu::where(['id' => $menuItemDetails->menu_id])->first();
        return view('admin.pages.menuItem.edit')->with(compact('menuItemDetails','menuInfo'));
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

        MenuItem::where(['id'=>$id])->update(['menu_item_name'=>$data['menu_item_name']]);

        return redirect('admin/view-menu-item')->with('flash_message_success','Menu item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          DB::table('tbl_menu_item')
            ->where('id',$id)
            ->delete();
        return redirect('admin/view-menu-item')->with('flash_message_success','Menu item deleted successfully');
    }
    public function findMenuItemName(Request $request)
    {
        $data=MenuItem::select('menu_item_name','id')->where('menu_id',$request->id)->take(100)->get();

        return response()->json($data);
    }


}
