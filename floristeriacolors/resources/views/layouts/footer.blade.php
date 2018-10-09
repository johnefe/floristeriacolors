<!--aqui va footer -->
            <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="footer-single">
                            <h6>Contáctanos</h6>
                            <ul>
                                
                                <li>Nuestro email: <a href="#">rosasdonvictorio@gmail.com</a></li>
                                <li>
                                   @foreach($datas as $data)
                                    <a href="{{$data->facebook}}" target="blank" class="fb" > <span class="fa fa-facebook-official fa-3x"></span> </a>
                                    <a href="{{$data->instagram}}" target="blank" class="insta" > <span class="fa fa-instagram fa-3x"></span> </a>
                                    <a href="{{$data->youtube}}" target="blank" class="tw" > <span class="fa fa-twitter-square fa-3x"></span> </a>
                                    <a href="{{$data->pinterest}}" target="blank" class="youtube"> <span class="fa fa-pinterest-square fa-3x"></span> </a>
                                    @endforeach
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="footer-single">
                            <h6>Conócenos </h6>
                            
                             <ul>
                                <li><a href="/conocenos">Nosotros</a></li>
                                <li><a href="https://www.facebook.com/Floristeria-Colors-826542960800106/?fref=ts">Facebook</a></li>
                                <li><a href="/blog">Nuestro Blog</a></li>
                                <li><a href="/politicas">Términos y condiciones</a></li>
                                <li><a href="/contacto">Contactanos</a></li>

                                <strong id="cantidad" class="conta">0</strong>
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="footer-single">
                            <h6>Tu cuenta</h6>
                            <ul>
                                <li><a href="/cuentaUsuario">Mi cuenta</a></li>
                                <li><a href="/arbol">Arboles memoriales</a></li>
                                
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="footer-single">
                            <h6>Ayuda</h6>
                            <ul>
                                <li><a href="/ayuda">¿Como Comprar?</a></li>
                                <li><a href="/ayuda">¿Cuáles son las formas de pago?</a></li>
                                <li><a href="/ayuda">¿Es segura la compra?</a></li>
                                <li><a href="/ayuda">¿Como cuidar las flores?</a></li>
                                <li><a href="/ayuda">Preguntas Frecuentes</a></li>
                                <li><a href="/ayuda">Entregas en el mismo día</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="row text-center">
                  <div class="col-md-8 col-md-offset-2"><br><br><br>
                    <strong><h5>©<a href="https://www.facebook.com/jhon.f.diaz.96">Jhon Frey Diaz</a>- <a href="https://www.facebook.com/GeorgeJDC">Jorge Luis Viveros Arcos</a>::  2018. Todos los derechos reservados.</h5></strong>
                  </div>
                </div>
            </div>
        </footer>
         <!--fin footer -->
<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
            <h3>MI CARRITO DE COMPRAS</h3>
        <!--inicio de formulario donde se cargaran los datos de carrito de compras-->
            <form>
              <div class="col-md-6 col-md-offset-3 " id="canasta" name="canasta">
                  <!-- un detalle-->
                  <div class="row">
                    <H4 id="mensajeVacio"></H4>
                                            
                  </div>

                  <hr>
                  <!--fin un detalle -->
            </div>
            </form>
          <!-- fin formulario -->
          
          <div class="col-md-12 text-center subtotal-carrito" >
              <h2>SUBTOTAL:<strong id="subtotalCarrito">0</strong></h2>
          </div>
     </div>
        <div class="modal-footer" id="btn-modales">
            
            
           
        </div>
  </div>
 
</div>
   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b685fa8e21878736ba2ab84/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->    
