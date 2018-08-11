<?php

namespace FloristeriaColors\Http\Controllers;

use Illuminate\Http\Request;
use FloristeriaColors\Category;
use FloristeriaColors\Occasion;
use FloristeriaColors\Product;
use FloristeriaColors\Data;
use FloristeriaColors\Article;
use Session;
use Illuminate\Support\Facades\Auth;
use FloristeriaColors\User;
use FloristeriaColors\Video;
use FloristeriaColors\Slider;
use FloristeriaColors\Cart;
use FloristeriaColors\Client;
use FloristeriaColors\Detail;
use FloristeriaColors\Color;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //$masVendidos = Product::limit(4)->get();
        $masVendidos = Product::join('best_seller_products','products.id','best_seller_products.product_id')->join('categories', 'categories.id', '=', 'products.category_id')
                ->rightJoin('prices','products.id','prices.product_id')
                ->select('products.*')
                ->where('category_type_id', 1)->groupBy('products.id')->get()->random(4)->all();

       $sliders= Slider::where('ruta', 2)->get();

       $datas = Data::all();


        return View('plantillas.index',compact('categories','masVendidos','sliders','datas'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function realizarArreglo()
    {
        $categories = Category::where('category_type_id', 1)->get();
        $ocasiones = Occasion::All();
        $colores= Color::All();
        $masVendidos = Product::limit(6)->get();
        $sliders=Slider::where('ruta', 1)->get();
        $datas = Data::all();


        return View('plantillas.realizarArreglo',compact('categories','masVendidos','ocasiones','sliders','datas','colores'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoriaSeleccionada($id)
    {
        $categories = Category::All();
        $categoria = Category::find($id);
        $ocasiones = Occasion::All();
        $datas = Data::all();
        $colores = Color::all();
        $sliders=Slider::where('ruta', 1)->get();
        return View('plantillas.categoriaSeleccionada',compact('categories','categoria','ocasiones','datas','colores','sliders'));

        
       // return View('plantillas.categoriaSeleccionada');
    }
    public function filtro($filtro,$id)
    {
        $categories = Category::where('category_type_id', 1)->get();
        $ocasiones = Occasion::All();
        $datas = Data::all();
        $colores=Color::all();
        $sliders=Slider::where('ruta', 1)->get();
        $productosRandom = Product::join('categories', 'categories.id', '=', 'products.category_id')
                ->rightJoin('prices','products.id','prices.product_id')
                ->select('products.*')
                ->where('category_type_id', 1)->groupBy('products.id')->get()->random(4)->all(); 
        if($filtro == 'categorias'){
            
            $categoria = Category::find($id);
            $nombre = $categoria->name;
            $products = $categoria->products_with_price();
            

        }else if ($filtro == 'ocasiones'){
            
            $ocasion = Occasion::find($id);
            $products = $ocasion->products_with_price();
            $nombre = $ocasion->ocasion;

        }else if ($filtro == 'colores'){
            
            $color = Color::find($id);
            $products = $color->products_with_prices();
            $nombre = $color->nombre;

        } else if($filtro == 'destacados'){
            $nombre = "Destacados";
            $products = Product::join('popular_products','products.id','popular_products.product_id')->join('categories', 'categories.id', '=', 'products.category_id')
                ->rightJoin('prices','products.id','prices.product_id')
                ->select('products.*')
                ->where('category_type_id', 1)->groupBy('products.id')->get();
        } else if($filtro == 'mas_vendidos'){
            $nombre = "Mas Vendidos";
            $products = Product::join('best_seller_products','products.id','best_seller_products.product_id')->join('categories', 'categories.id', '=', 'products.category_id')
                ->rightJoin('prices','products.id','prices.product_id')
                ->select('products.*')
                ->where('category_type_id', 1)->groupBy('products.id')->get();


        }
        return View('plantillas.categoriaSeleccionada',compact('categories','ocasiones','products','nombre','sliders','productosRandom','datas','colores'));

        
       // return View('plantillas.categoriaSeleccionada');
    } 

    public function dropdown($id){

        $ocasion = Occasion::find($id);
        $products = $ocasion->products;
        return $products;

    }
    public function color($id){

        $color = Color::find($id);
        $products = $color->products;
        return $products;

    }
    public function productos(){

        $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*')->where('category_type_id', 1)->get();
        return $products;

    }

    public function arreglos()
    {
        $categories = Category::where('category_type_id', 1)->get();
        $ocasiones = Occasion::All();
        $datas = Data::all();
        $colores= Color::all();
         $productosRandom = Product::join('categories', 'categories.id', '=', 'products.category_id')
                ->rightJoin('prices','products.id','prices.product_id')
                ->select('products.*')
                ->where('category_type_id', 1)->groupBy('products.id')->get()->random(4)->all(); 


        $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->rightJoin('prices','products.id','prices.product_id')
            ->select('products.*')->where('category_type_id', 1)->groupBy('products.id')->get();
        $nombre = "Arreglos";
        $sliders=Slider::where('ruta', 1)->get();
            
        return View('plantillas.categoriaSeleccionada',compact('categories','ocasiones','products','nombre','sliders','productosRandom','datas','colores'));

        
       // return View('plantillas.categoriaSeleccionada');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function arregloSeleccionado($id)
    {
        $producto = Product::find($id);
        $datas = Data::all();
        $categories = Category::where('category_type_id', 2)->get();
        $productosRandom = Product::rightJoin('prices','products.id','prices.product_id')
            ->select('products.*')->where('category_id', $producto->category_id)->groupBy('products.id')->get();
        return View('plantillas.arregloSeleccionado',compact('producto','categories','productosRandom','datas'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        $datas = Data::all();
        return View('plantillas.login',compact('datas'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    {
        $data = Data::first();
        $datas = Data::all();
        return View('plantillas.contacto',compact('data','datas'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function cuentaUsuario()
    {
        
        return View('plantillas.cuentaUsuario');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ayuda()
    {
        $video = Video::where('ruta', 'ayuda')->first();
        $datas = Data::all();
        return view('plantillas.ayuda',compact('video','datas'));
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function conocenos()
    {
        $datas = Data::all();
        return View('plantillas.conocenos',compact('datas'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function arbolesMemorales()
    {
        $datas = Data::all();
        return View('plantillas.arbolesMemorales', compact('datas'));
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function politicas()
    {
        $datas = Data::all();
        return View('plantillas.politicas', compact('datas'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function puntosFloristeria()
    {
        $datas = Data::all();
        return View('plantillas.puntosFloristeria', compact('datas'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resumenCompra()
    {
        $auth = Auth::user();
        $user = User::where('id',$auth->id)->first();
        $cliente =$user->client;
        $datas = Data::all();
        $carrito = Session::get('cart'); 

        
        return View('plantillas.resumenCompra',compact('cliente','cart','datas'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function finalizarCompra()
    {
        $datas = Data::all();
        return View('plantillas.finalizarCompra',compact('datas'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {   
        $datas = Data::all();
        $articles = Article::All();
        return View('plantillas.blog',compact('articles','datas'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ventas()
    {
        $datas = Data::all();
        return View('plantillas.ventas',compact('datas'));
    }
    public function admin()
    {
        if(Auth::user()){
            $usuario_actual = Auth::user();
            if($usuario_actual->is_admin==0){
                return redirect('/admin/login');
            }else{
                return View('layouts.adminBase');

            }

        }else{
            return redirect('/admin/login');
        }

        
        
    }

    //manejo de sessiones carrito

    public function cartVS (Request $request)
    {
        parse_str(file_get_contents("php://input"), $_POST);
        Session::put('cart',$request->json()->all());
        return (Session::get('cart'));
        

    }
    public function getCartVS ()
    {  
        return (Session::get('cart'));    

    }
    public function dataCart(Request $request)
    {
        parse_str(file_get_contents("php://input"), $_POST);
        Session::put('dataCart',$request->all());
        $dataCart = Session::get('dataCart');
        $dataCart = json_encode($dataCart);
        $dataCart = json_decode($dataCart,true);
        $correo = Auth::user()->email;
        $datas = Data::all();

        $auth = Auth::user();
        $user = User::where('id',$auth->id)->first();


        $cart = new Cart;
       // $cart->client_id = $request->input('cliente_id');
        

        $time = strtotime($dataCart["fechaEntrega"]);
        $newformat = date('Y-m-d',$time);

        $cart->fecha_compra=  new \DateTime();
        $cart->fecha_entrega= $newformat;
        $cart->mensaje= $dataCart["mensaje"];
        $cart->observacion= $dataCart["observacion"];
        $cart->de= $dataCart["nombresComprador"];
        $cart->para= $dataCart["nombresDestinatario"];
        $cart->direccion= $dataCart["direccionDestinatario"];
        //$cart->observacion= $request->input('observacion');

        $cliente = $this->getCliente($user,$dataCart);
        $cliente->save();
        $cart->client_id = $cliente->id;
        $cart->save();

        //empezamos a trabajar con los detalles

        $details = Session::get('cart');
        $details = json_encode($details);
        $details = json_decode($details,true);

        for ($i = 0; $i < count($details); $i++) {
 
            $detail = new Detail;
            $detail->cantidad =  $details[$i]["cantidadObjeto"];
            $detail->product_id =  $details[$i]["idObjeto"];
            $detail->tamano =  $details[$i]["tamaño"];
            $detail->precio =  $details[$i]["valorObjeto"];
            $detail->cart_id =  $cart->id;
            $detail->save();

            
        }

         $detailsss = Session::get('cart');
         $detailss=json_encode($detailsss);
         $detailss=json_decode($detailss,true);
         Session::forget('cart');
         Session::forget('dataCart');
        return view('plantillas.finalizarCompra',compact('detailss','datas'));

    }
        
    
    public function getDataCart ()
    {  
        return (Session::get('dataCart'));    

    }
    public function guardar(Request $request){
        return $request;

    }
    public function getCliente(User $user, Array $dataCart){

         if($user->client){
            //existe el cliente

            $cliente = Client::find($user->client->id);
            $cliente->nombres = $dataCart["nombresComprador"];
            $cliente->apellidos =$dataCart["apellidosComprador"];
            $cliente->celular =$dataCart["celularComprador"];
            $cliente->identificacion =$dataCart["identificacionComprador"];
            return $cliente; 
        

        }else{
            // no existe el cliente
            
            $cliente = new Client;
            $cliente->nombres = $dataCart["nombresComprador"];
            $cliente->apellidos =$dataCart["apellidosComprador"];
            $cliente->celular =$dataCart["celularComprador"];
            $cliente->identificacion =$dataCart["identificacionComprador"];
            $cliente->user_id = $user->id;  
            return $cliente;    

        }


    }

}
