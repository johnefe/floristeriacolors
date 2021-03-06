<?php

namespace FloristeriaColors\Http\Controllers;

use Illuminate\Http\Request;
use FloristeriaColors\Http\Controllers\Controller;
use FloristeriaColors\Product;
use FloristeriaColors\ProductCity;
use FloristeriaColors\City;

class ProductCityController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function __construct(){
        $this->middleware('authAdmin');
    }*/
    public function index()
    {
        $cities = City::All();
        $ciudades = City::pluck('nombre','id');
        $products = Product::pluck('nombre','id');
        return view('city.index',compact('cities','ciudades','products'));
        
    }


     public function store(Request $request)
    {   
        ProductCity::create($request->all());
        return "error";
       // return redirect('/admin/ocasiones')->with('message','Ocasion Guardada con exito');

    }
    public function guardar(Request $request){
        //return $request;

        parse_str(file_get_contents("php://input"), $_POST);
       // return "que";
        $json = $request->json()->all();
       /* $json = json_encode($json);
        $json = json_decode($json,true);*/
        $productoCity = new ProductCity;
        $productoCity->product_id = $json["product_id"];
        $productoCity->city_id =$json["city_id"];
        $productoCity->save();


        return $productoCity;

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
                ProductColor::destroy($id);
                return "exito";
               // Session::flash('message','Producto eliminado correctamente');
                //return Redirect::to('/admin/productos');

            } catch (\Illuminate\Database\QueryException $e) {
              //  Session::flash('error','No se puede eliminar por que tiene precios');
              //  return Redirect::to('/admin/productos');
                return "error";

            } 

    }
}
