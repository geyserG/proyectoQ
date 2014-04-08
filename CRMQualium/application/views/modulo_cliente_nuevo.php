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
            <input type="text"  class="form-control" placeholder="Nombre comercial">
            <input type="text" class="form-control" placeholder="Nombre físcal">
            <input type="text" class="form-control" placeholder="Email">
            <!-- <input type="text" class="form-control" placeholder="Telefono movil"> -->

            <!-- Este es el pequeño formulario para registrar teléfonos -->
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
                  </div>
              </div>
            <!-- Este es el pequeño formulario para registrar teléfonos -->
        </div>


        <div class="input_info">
            <select  class= "form-control" > 
                <option value=""  name="myText" disabled selected style='display:none;'>Giro</option> 
                <option> Manufacturera </option> 
                <option> Agropecuaria </option> 
                <option> Comercial </option> 
                <option> Transporte </option> 
                <option> Educación </option> 
                <option> Servicios públicos </option>
                <option> Salud </option> 
                <option> Comunicación </option>  
            </select>
            <textarea id="txtarea" class="form-control" rows="3" placeholder="Dirección"></textarea>
            <!-- <input type="text" class="form-control" placeholder="Telefono de oficina"> -->
        </div>

        <div class="desborde"></div>
              <div id='contenedor_menus'>
                    <div class='cssmenu'>
                        <h5><b> Servicios de interes</b></h5>
                        <input type="text" id="ancho_input1" class="form-control" placeholder="Buscar servicio">
                        <button type="button" id="btn_agregar"class="btn btn-default">Agregar</button>
                    <ul>
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

              <div class="dato_contacto">
                  <h3>Datos contacto</h3>
                  <hr width="300px";>
                  <input type="text"  class="form-control" placeholder="Nombre">
                  <input type="text"  class="form-control" placeholder="Correo">
                  <input type="text"  class="form-control" placeholder="Cargo">
                  <input type="text"  class="form-control" placeholder="Telefono">
              </div>
              <div class="desborde"></div>

              <button type="button" class="btn btn-primary">Aceptar</button>
              <button type="button" class="btn btn-danger">Cancelar</button>
    </section>

</div>
<!-- </div> -->

<!-- Librerias Backbone -->
  <script type="text/javascript" src="js/backbone/lib/underscore.js"></script>
  <script type="text/javascript" src="js/backbone/lib/backbone.js"></script>
<!--MV*-->
  <script type="text/javascript" src="js/backbone/vistas/VistaNuevoCliente.js"></script>
  <script type="text/javascript" src="js/backbone/app.js"></script>

<script type="text/javascript">
createEditableSelect(document.forms[0].myText);
</script>
