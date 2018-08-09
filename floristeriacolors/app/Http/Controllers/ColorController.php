<?php

namespace FloristeriaColors\Http\Controllers;

use Illuminate\Http\Request;
use FloristeriaColors\Http\Controllers\Controller;
use FloristeriaColors\Color;
use FloristeriaColors\Product;

use Session;
use Redirect;
class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('authAdmin');
    }
    public function index()
    {
        $colores = Color::All();
        $colors = Color::pluck('nombre','id');
        $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*')->where('category_type_id', 1)->get();
            
        return view('color.index',compact('colores','colors','products'));
        
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
        Color::create($request->all());
        return redirect('/admin/colores')->with('message','Color Guardado con exito');

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
        $color = Color::find($id);
        $color->fill($request->all());
        $color->save();

        Session::flash('message','Color Editado correctamente');

        return Redirect::to('/admin/colores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
                Color::destroy($id);
                Session::flash('message','Color eliminado correctamente');
                return Redirect::to('/admin/colores');

            } catch (\Illuminate\Database\QueryException $e) {
                Session::flash('error','No se puede eliminar por que tiene productos asignados');
                return Redirect::to('/admin/colores');

            } 
    }
}
