<div class="contenedor_modulo"> 
    <section>
        <h1 id="titulo_del_modulo"><label>Clientes</label></h1>
        <nav>
            <ul id="menu_modulo" class="nav nav-pills">
                <li>
                    <a href="modulo_consulta_prospectos">
                      <div class="icono_menu_modulo">
                        <span class="icon-contact"></span>
                      </div>
                        Prospectos
                    </a>
                </li>
                <li>
                    <a href="">
                      <div class="icono_menu_modulo">
                        <span class="icon-phpbb"></span>
                      </div>
                      Clientes
                    </a>
                </li>  
                <li >
                    <a href="modulo_cliente_nuevo">
                      <div class="icono_menu_modulo">
                        <span class="icon-uniF476"></span>
                      </div>
                      Nuevo
                    </a>
                    
                </li>       
            </ul>
        </nav>   
    </section>
    <section class="contenedor_principal_modulos">
        <h3>Nuevo Cliente</h3>
        <hr>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary">
                <input type="radio" class="tipo_cliente" name="tipo_cliente" id="cliente" value="cliente"> Cliente
            </label>
            <label class="btn btn-primary">
                <input type="radio" class="tipo_cliente" name="tipo_cliente" id="prospecto" value="prospecto"> Prospecto
            </label>
        </div>

        <br>

        <div class="input_info">
            <input type="text" id="nombreComercial"  class="form-control" placeholder="Nombre comercial" value="Donde">
            <input type="text" id="nombreFiscal" class="form-control" placeholder="Nombre físcal" value="Donde S.A. de C.V.">
            <input type="email" id="emal" class="form-control" placeholder="Email" value="donde@gmail.com">
            <!-- <input type="text" class="form-control" placeholder="Telefono movil"> -->

            <!-- Este es el pequeño formulario para registrar teléfonos -->
<<<<<<< HEAD
              <div class="btn-group btn-group-justified">
                  <div id="div_telefonos" class="btn-group" >
                      <input type="text" class="form-control" placeholder="Teléfono">
                  </div>
                  <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tipo <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                          <li><a href="#">Casa</a></li>
                          <li><a href="#">Fax</a></li>
                          <li><a href="#">Movil</a></li>
                          <li><a href="#">Oficina</a></li>
                          <li><a href="#">Personal</a></li>
                          <li><a href="#">Trabajo</a></li>
                          <li><a href="#">Otro</a></li>
                      </ul>
                  </div>
                  <div class="btn-group">
                      <button id="btn_otro_telefono" class="btn btn-default" type="button"><span class="icon-uniF476"></span></button>  
=======
              <div>
                  <div class="input-group">
                      <div class="btn-group">
                        <form>
                          <input type="text" class="form-control" name="telefonoCliente" value="1010101010">
                        </form>
                      </div>
                      <div class="btn-group">
                          <select class="form-control" name="tipoTelefonoCliente">
                              <option value="Casa">Casa</option>
                              <option value="Fax">Fax</option>
                              <option value="Movil" selected>Movil</option>
                              <option value="Oficina">Oficina</option>
                              <option value="Personal">Personal</option>
                              <option value="Trabajo">Trabajo</option>
                              <option value="Otro">Otro</option>
                              <option disabled>Tipo</option>
                          </select>
                      </div>
                      <div class="btn-group">
                          <div class="otroTelefono"><button type="button" class="btn btn-default"><span class="icon-uniF476"></span></button></div>
                      </div>
>>>>>>> 253283784e69b0de1255fec3c86e6002c58999bf
                  </div>
              </div>
        </div>


        <div class="input_info">
<<<<<<< HEAD
            <select  class= "form-control" > 
                <option value=""  name="myText" disabled selected style='display:none;'>Giro</option> 
=======
            <select id="giro" class= "form-control" > 
                <option value="" disabled style='display:none;'>Giro</option> 
>>>>>>> 253283784e69b0de1255fec3c86e6002c58999bf
                <option> Manufacturera </option> 
                <option> Agropecuaria </option> 
                <option selected> Comercial </option> 
                <option> Transporte </option> 
                <option> Educación </option> 
                <option> Servicios públicos </option>
                <option> Salud </option> 
                <option> Comunicación </option>  
            </select>
            <textarea id="txtareaDireccion" class="form-control" rows="3" placeholder="Dirección"></textarea>
            <!-- <input type="text" class="form-control" placeholder="Telefono de oficina"> -->
        </div>
        <div class="desborde"></div>

        <br>

        <div id='contenedor_menus'>
              <div class='cssmenu'>
                  <h5><b> Servicios de interes</b></h5>
                  <input type="text" id="ancho_input1" class="form-control" placeholder="Buscar servicio">
                  <button type="button" id="btn_agregar"class="btn btn-default">Agregar</button>
              <ul>
                  <li><a href=''><span>Servicios</span></a></li>
                  <li class='has-sub'><a href='#'><span>Diseño Gráfico</span></a>
              <ul>
                  <li><a><span>Tarjeta de presentación frente</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                  <li><a><span>Medallón</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='2'></div></a></li>
                  <li><a><span>Tríptico</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='3'></div></a></li>
                  <li><a><span>Díptico</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='4'></div></a></li>
                  <li><a><span>Catálogo</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='5'></div></a></li>
                  <li><a><span>Tarjeta de presentación frente y vuelta</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='6'></div></a></li>
                  <li><a><span>Anuncio sencillo</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='7'></div></a></li>
                  <li><a><span>Menú de restaurante</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='8'></div></a></li>
                  <li><a><span>Branding completo</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='9'></div></a></li>
                  <li><a><span>Logo animado</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='10'></div></a></li>
                  <li><a><span>Vídeo branding</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='11'></div></a></li>
                  <li><a><span>Campaña</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='12'></div></a></li>
                  <li><a><span>Aplicaciones de campaña</span>
                    <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='13'></div></a></li>
              </ul>
                  </li>
                    <li class='has-sub'><a href='#'><span>Programación</span></a>
                      <ul>
                          <li><a href='#'><span>Página web sencilla</span>
                          <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                          <li><a href='#'><span>Página Web complicada
                          (Mas de 5 secciones)</span>
                          <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                          <li><a href='#'><span>Página Web con sistema interno</span>
                          <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                          <li><a href='#'><span>App sencilla</span>
                          <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                          <li><a href='#'><span>App complicada</span>
                          <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                          <li><a href='#'><span>Sistema de ventas</span>
                          <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                          <li><a href='#'><span>Rediseño página web</span>
                          <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                      </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Video</span></a>
                        <ul>
                            <li><a href='#'><span>Comercial video</span>
                            <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Otros</span></a>
                        <ul>
                            <li><a href='#'><span>Redes sociales</span>
                            <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                            <li><a href='#'><span>Mailing</span>
                            <div id='check_posicion'><input type='checkbox' name="serviciosInteres" id='' value='1'></div></a></li>
                        </ul>
                   </li>
                  </ul>
             </div>
                  <div class='cssmenu'>
                        <h5><b>Servicios con los que cuenta</b> </h5>
                        <input type="text" id="ancho_input2" class="form-control" placeholder="Buscar servicio">
                        <button type="button" id="btn_agregar2" class="btn btn-default">Agregar</button>
                    <ul>
<<<<<<< HEAD
                        <li><a ><span>Servicios</span></a></li>
                        <li class='has-sub'><a><span>Diseño Gráfico</span></a>
                    <ul>
                        <li><a><span>Tarjeta de presentación frente</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Medallón</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Tríptico</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Díptico</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Catálogo</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Tarjeta de presentación frente y vuelta</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Anuncio sencillo</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Menú de restaurante</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Branding completo</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Logo animado</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Vídeo branding</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Campaña</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a><span>Aplicaciones de campaña</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
=======
                        <li><a href=''><span>Servicios</span></a></li>
                        <li class='has-sub'><a href='#'><span>Diseño Gráfico</span></a>
                      <ul>
                         <li><a ><span>Tarjeta de presentación frente</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Medallón</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Tríptico</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Díptico</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Catálogo</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Tarjeta de presentación frente y vuelta</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Anuncio sencillo</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Menú de restaurante</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Branding completo</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Logo animado</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Vídeo branding</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Campaña</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                         <li><a><span>Aplicaciones de campaña</span>
                         <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
>>>>>>> 253283784e69b0de1255fec3c86e6002c58999bf
                    </ul>
                </li>
                  <li class='has-sub'><a href='#'><span>Programación</span></a>
                     <ul>
                        <li><a href='#'><span>Página web sencilla</span>
                        <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                        <li><a href='#'><span>Página Web complicada
                        (Mas de 5 secciones)</span>
                        <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                        <li><a href='#'><span>Página Web con sistema interno</span>
                        <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                        <li><a href='#'><span>App sencilla</span>
                        <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                        <li><a href='#'><span>App complicada</span>
                        <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                        <li><a href='#'><span>Sistema de ventas</span>
                        <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                        <li><a href='#'><span>Rediseño página web</span>
                        <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                    </ul>
                  </li>
                    <li class='has-sub'><a href='#'><span>Video</span></a>
                     <ul>
                        <li><a href='#'><span>Comercial video</span>
                        <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                    </ul> 
                        </li>
<<<<<<< HEAD
                          <li class='has-sub'><a><span>Programación</span></a>
                            <ul>
                                <li><a><span>Página web sencilla</span>
                                <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                                <li><a><span>Página Web complicada
                                (Mas de 5 secciones)</span>
                                <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                                <li><a><span>Página Web con sistema interno</span>
                                <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                                <li><a><span>App sencilla</span>
                                <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                                <li><a><span>App complicada</span>
                                <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                                <li><a><span>Sistema de ventas</span>
                                <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                                <li><a><span>Rediseño página web</span>
                                <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                            </ul>
                          </li>
                          <li class='has-sub'><a><span>Video</span></a>
                              <ul>
                                  <li><a><span>Comercial video</span>
                                  <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                              </ul>
                          </li>
                          <li class='has-sub'><a><span>Otros</span></a>
                              <ul>
                                  <li><a><span>Redes sociales</span>
                                  <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                                  <li><a><span>Mailing</span>
                                  <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                              </ul>
                         </li>
                        </ul>
                   </div>
                        <div class='cssmenu'>
                              <h5><b>Servicios con los que cuenta</b> </h5>
                              <input type="text" id="ancho_input2" class="form-control" placeholder="Buscar servicio">
                              <button type="button" id="btn_agregar2" class="btn btn-default">Agregar</button>
                          <ul>
                              <li><a href=''><span>Servicios</span></a></li>
                              <li class='has-sub'><a><span>Diseño Gráfico</span></a>
                            <ul>
                               <li><a ><span>Tarjeta de presentación frente</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Medallón</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Tríptico</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Díptico</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Catálogo</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Tarjeta de presentación frente y vuelta</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Anuncio sencillo</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Menú de restaurante</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Branding completo</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Logo animado</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Vídeo branding</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Campaña</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                               <li><a><span>Aplicaciones de campaña</span>
                               <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                          </ul>
                      </li>
                        <li class='has-sub'><a><span>Programación</span></a>
                           <ul>
                              <li><a><span>Página web sencilla</span>
                              <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                              <li><a><span>Página Web complicada
                              (Mas de 5 secciones)</span>
                              <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                              <li><a><span>Página Web con sistema interno</span>
                              <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                              <li><a><span>App sencilla</span>
                              <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                              <li><a><span>App complicada</span>
                              <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                              <li><a><span>Sistema de ventas</span>
                              <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                              <li><a><span>Rediseño página web</span>
                              <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                          </ul>
                        </li>
                          <li class='has-sub'><a><span>Video</span></a>
                           <ul>
                              <li><a><span>Comercial video</span>
                              <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                          </ul> 
                              </li>
                                <li class='has-sub'><a><span>Otros</span></a>
                                  <ul>
                                     <li><a><span>Redes sociales</span>
                                     <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                                     <li><a><span>Mailing</span>
                                     <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                                 </ul>
                                </li>
                            </ul>
                       </div>
              </div>
              <div class="desborde"></div>
              
              <div>
                  <label for="exampleInputFile"><h5>Adjuntar archivo</h5></label>
                  <input type="file" id="exampleInputFile">
                  <textarea  class="form-control" rows="6" placeholder="Comentarios"></textarea>
              </div>
              <br>
              
              <div class="dato_contacto">
                  <h3>Datos Específicos</h3>
                  <hr width="300px";>
                  <input type="text"  class="form-control" placeholder="RFC">
                  <input type="text"  class="form-control" placeholder="Representante">
                  <input type="text"  class="form-control" placeholder="Página web">
              </div>
=======
                          <li class='has-sub'><a href='#'><span>Otros</span></a>
                            <ul>
                               <li><a href='#'><span>Redes sociales</span>
                               <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                               <li><a href='#'><span>Mailing</span>
                               <div id='check_posicion'><input type='checkbox' name="serviciosCuenta" id='' value='1'></div></a></li>
                           </ul>
                          </li>
                      </ul>
                 </div>
        </div>
        <div class="desborde"></div>
        
        <br>
>>>>>>> 253283784e69b0de1255fec3c86e6002c58999bf

        <div>
            <h5><b>Adjuntar archivo</b></h5>
            <div>
                <div>
                    <div class="input-group">
                      <input type="file" name="archivo">
                      <br>
                      <div class="btn-group">
                          <select class="form-control" name="tipoArchivo">
                              <option value="Logotipo">Logotipo</option>
                              <option value="Especificaciones">Especificaciones</option>
                              <option value="comentarios">comentarios</option>
                              <option value="Otro">Otro</option>
                          </select>
                      </div>
                      <div class="btn-group">
                          <div class="otroArchivo"><button type="button" class="btn btn-default"><span class="icon-uniF476"></span></button></div>
                      </div>
                      <br>
                      <br>
                      <textarea name="comentarioArchivo" rows="6" placeholder="Comentarios"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <br>
        
        <div class="dato_contacto">
            <h3>Datos Específicos</h3>
            <hr>
            <input type="text" id="rfc" class="form-control" placeholder="RFC" value="E4823343EE">
            <input type="text" id="nombreRepresentante"  class="form-control" placeholder="Representante" value="Fulano Mengano Mengano">
            <input type="text" id="paginaCliente"  class="form-control" placeholder="Página web" value="donde.com.mx.cl.es">
        </div>

        <div class="dato_contacto">
            <h3>Datos contacto</h3>
            <hr>
            <input type="text" id="contactoNombre" class="form-control" placeholder="Nombre" value="Nombre Apellido">
            <input type="text" id="contactoEmail" class="form-control" placeholder="Correo" value="fulano@hotmail.com">
            <input type="text" id="contactoCargo" class="form-control" placeholder="Cargo" value="Gerente de ventas">
            <div>
                <div class="input-group">
                    <div class="btn-group">
                      <form>
                        <input type="text"  class="form-control" name="telefonoContacto" value="1010101010">
                      </form>
                    </div>
                    <div class="btn-group">
                        <select class="form-control" name="tipoTelefonoContacto">
                            <option value="Casa">Casa</option>
                            <option value="Fax">Fax</option>
                            <option value="Movil" selected>Movil</option>
                            <option value="Oficina">Oficina</option>
                            <option value="Personal">Personal</option>
                            <option value="Trabajo">Trabajo</option>
                            <option value="Otro">Otro</option>
                            <option disabled>Tipo</option>
                        </select>
                    </div>
                    <div class="btn-group">
                        <div class="otroTelefono"><button type="button" class="btn btn-default"><span class="icon-uniF476"></span></button></div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="desborde"></div>

        <br>

        <button type="button" id="btn_crear" class="btn btn-primary">Aceptar</button>
        <button type="button" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
    </section>

</div>
<!-- </div> -->

<!-- Librerias Backbone -->
  <script type="text/javascript" src="js/backbone/lib/underscore.js"></script>
  <script type="text/javascript" src="js/backbone/lib/backbone.js"></script>
  <script type="text/javascript" src="js/backbone/lib/backbone.localStorage.js"></script>
<!--MV*-->
  <script type="text/javascript" src="js/backbone/vistas/VistaNuevoCliente.js"></script>
  <script type="text/javascript" src="js/backbone/modelos/ModeloCliente.js"></script>
  <script type="text/javascript" src="js/backbone/app.js"></script>

<script type="text/javascript">
createEditableSelect(document.forms[0].myText);
</script>
