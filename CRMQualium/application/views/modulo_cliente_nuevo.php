<!-- <div id="contenedor"> -->
<div class="contenedor_modulo"> 
  <section>
    <h1 id="titulo_del_modulo"><label>Clientes</label></h1>
       <nav>
        <ul id="menu_modulo" class="nav nav-pills">
          <li>
            <a href="">
            <div class="icono_menu_modulo">
            <span class="icon-contact"></span></div>
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
              
              <li id="tamaño" class="dropdown">
                <a href= class="dropdown-toggle" data-toggle="dropdown">
                <div class="icono_menu_modulo">
                <span class="icon-uniF476"></span>
                </div>
                Nuevo
              </a>
                <ul id="prueba" class="dropdown-menu" role="menu">
                <li><a href="modulo_cliente_nuevo">Cliente</a></li>
                <li><a href="#">Prospectos</a></li>
                </ul>

              </li>       
           </ul>

              </li>
         </ul>
      </nav>
      
  </section>
  <section class="contenedor_principal_modulos">
    <h3>Nuevo Cliente</h3>
  <hr>
  <div class="input_info">
     <input type="text"  class="form-control" placeholder="Nombre comercial">
     <input type="text" class="form-control" placeholder="Nombre físcal">
     <input type="text" class="form-control" placeholder="Email">
     <input type="text" class="form-control" placeholder="Telefono movil">
  </div>
    
  <div class="input_info">
     <select  class= "form-control" > 
     <option value="" disabled selected style='display:none;'>Giro</option> 
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
     <input type="text" class="form-control" placeholder="Telefono de oficina">
  </div>

  <div class="desborde"></div>
    
          <div class='cssmenu'>
              <h5><b> Servicios de interes</b></h5>
              <input type="text" id="ancho_input1" class="form-control" placeholder="Buscar servicio">
              <button type="button" id="btn_agregar"class="btn btn-default">Agregar</button>
          <ul>
              <li><a href=''><span>Servicios</span></a></li>
              <li class='has-sub'><a href='#'><span>Diseño Gráfico</span></a>
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
                <li class='has-sub'><a href='#'><span>Programación</span></a>
                  <ul>
                          <li><a href='#'><span>Página web sencilla</span>
                           <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                           <li><a href='#'><span>Página Web complicada
                           (Mas de 5 secciones)</span>
                           <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                           <li><a href='#'><span>Página Web con sistema interno</span>
                           <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                           <li><a href='#'><span>App sencilla</span>
                           <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                           <li><a href='#'><span>App complicada</span>
                           <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                           <li><a href='#'><span>Sistema de ventas</span>
                           <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                           <li><a href='#'><span>Rediseño página web</span>
                           <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                  </ul>
                </li>
                    <li class='has-sub'><a href='#'><span>Video</span></a>
                       <ul>
                          <li><a href='#'><span>Comercial video</span>
                          <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                      </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Otros</span></a>
                      <ul>
                        <li><a href='#'><span>Redes sociales</span>
                        <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                        <li><a href='#'><span>Mailing</span>
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
                    <li class='has-sub'><a href='#'><span>Diseño Gráfico</span></a>
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
              <li class='has-sub'><a href='#'><span>Programación</span></a>
                 <ul>
                    <li><a href='#'><span>Página web sencilla</span>
                    <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                    <li><a href='#'><span>Página Web complicada
                    (Mas de 5 secciones)</span>
                    <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                    <li><a href='#'><span>Página Web con sistema interno</span>
                    <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                    <li><a href='#'><span>App sencilla</span>
                    <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                    <li><a href='#'><span>App complicada</span>
                    <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                    <li><a href='#'><span>Sistema de ventas</span>
                    <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                    <li><a href='#'><span>Rediseño página web</span>
                    <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                </ul>
              </li>
                <li class='has-sub'><a href='#'><span>Video</span></a>
                 <ul>
                    <li><a href='#'><span>Comercial video</span>
                    <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                </ul> 
                    </li>
                      <li class='has-sub'><a href='#'><span>Otros</span></a>
                        <ul>
                           <li><a href='#'><span>Redes sociales</span>
                           <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                           <li><a href='#'><span>Mailing</span>
                           <div id='check_posicion'><input type='checkbox' id='' value='1'></div></a></li>
                       </ul>
                      </li>
                  </ul>
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
