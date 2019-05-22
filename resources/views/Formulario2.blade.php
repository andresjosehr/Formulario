@include("general");
        <main>
         <section class="section section-shaped section-lg">
            <div class="shape shape-style-1 bg-gradient-default">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
            </div>
            <div class="container pt-lg-md">
               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-white pb-5" style="padding-bottom: 0px !important">
                           <div class="text-muted text-center mb-3" align="center">
                              <h2>FORMULARIO DE DIAGNOSTICO</h2>
                              <p style="margin-top: -10px">PROYECTO COMPUTADORES PARA EDUCAR 2019</p>
                           </div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                           <div class="text-center text-muted mb-4">
                              <h2 style="font-size: 1rem">INFORMACION ESTABLECIMIENTO EDUCATIVO Y UBICACION</h2>
                           </div>
                           <form role="form">
                              <div class="form-group mb-3" style="margin-top: 50px;">
                                <span>Municipio: </span>
                                 <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Escriba aqui el municipio" type="email">
                                 </div>
                              </div>
                              <div class="form-group" style="margin-top: 50px;">
                                 <span>¿En que zona esta ubicado el establecimiento educativo? (Seleccione la casilla correspondiente): </span>
                                 <div class="custom-control custom-control-alternative custom-checkbox">
                                    <div class="row" style="text-align: center;margin-top: 10px">
                                       <div class="col-md-6">
                                          <input class="custom-control-input" name="zona_establecimiento" id="rural" type="radio">
                                          <label class="custom-control-label" for="rural">
                                             <span>Rural</span>
                                       </div>
                                       <div class="col-md-6">
                                       <input class="custom-control-input" name="zona_establecimiento" id="urbana" type="radio">
                                       <label class="custom-control-label" for="urbana">
                                       <span>Urbana</span>
                                       </div>
                                    </div>
                                    </label>
                                 </div>
                              </div>
                              <div class="form-group mb-3" style="margin-top: 50px;">
                                <span>Nombre del establecimiento educativo: </span>
                                 <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="ni ni-building"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Escriba aqui el nombre del establecimiento" type="email">
                                 </div>
                              </div>
                              <div class="form-group mb-3" style="margin-top: 20px;">
                                <span>Numero de estudiantes matriculados: </span>
                                 <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Escriba la cantidad aqui en numeros enteros" type="email">
                                 </div>
                              </div>
                              <div class="form-group mb-3" style="margin-top: 20px;">
                                <span>Direccion: </span>
                                 <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="ni ni-collection"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Escriba su direccion aqui" type="email">
                                 </div>
                              </div>
                              <div class="form-group mb-3" style="margin-top: 20px;">
                                <span>Telefono: </span>
                                 <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Escriba su numero de telefono aqui" type="email">
                                 </div>
                              </div>
                              <div class="text-center text-muted mb-4" style="margin-top: 60px">
                                  <h2 style="font-size: 1rem">INFORMACION RECTOR DEL ESTABLECIMIENTO EDUCATIVO</h2>
                               </div>
                                  <div class="form-group mb-3" style="margin-top: 20px;">
                                    <span>Rector: </span>
                                     <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Escriba aqui el nombre del rector" type="email">
                                     </div>
                                  </div>
                                  <div class="form-group mb-3" style="margin-top: 20px;">
                                    <span>Celular: </span>
                                     <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Escriba aqui el numero celular del rector" type="email">
                                     </div>
                                  </div>
                                  <div class="form-group mb-3" style="margin-top: 20px;">
                                    <span>Correo Electronico: </span>
                                     <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Escriba aqui el correo electronico del rector" type="email">
                                     </div>
                                  </div>
                                  <div class="text-center text-muted mb-4" style="margin-top: 60px">
                                  <h2 style="font-size: 1rem">INFORMACION DEL RESPONSABLE DEL AULA INFORMATICA</h2>
                               </div>
                                  <div class="form-group mb-3" style="margin-top: 20px;">
                                    <span>Nombre docente de informatica: </span>
                                     <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Escriba aqui el nombre del docente" type="email">
                                     </div>
                                  </div>
                                  <div class="form-group mb-3" style="margin-top: 20px;">
                                    <span>Celular del docente: </span>
                                     <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Escriba aqui el numero celular del docente" type="email">
                                     </div>
                                  </div>
                                  <div class="form-group mb-3" style="margin-top: 20px;">
                                    <span>Correo Electronico del docente: </span>
                                     <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Escriba aqui el correo electronico del docente" type="email">
                                     </div>
                                  </div>
                              <div class="text-center">
                                 <button type="button" class="btn btn-primary my-4">Enviar</button>
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
@include("footer")