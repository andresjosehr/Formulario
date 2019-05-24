<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Formulario de Diagnostico">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="author" content="Jose Hernandez">
      <title>Formulario de Diagnostico</title>
      <link rel="stylesheet" href="{{asset("css/template.css")}}">
      <script
         src="https://code.jquery.com/jquery-2.2.4.min.js"
         integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
         crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   </head>
   <body>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/localization/messages_es.js"></script>
      <main>
         @if (isset($Exito))
         <script>
            $(document).ready(function(){
              swal("¡Listo!", "Información registrada exitosamente", "success");
            })
         </script>
         @endif
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
                        <div class="row" id="establecimientoEdicativoInfo" >
                           <div class="col-md-12">
                              <h2 id="nombre_info"></h2>
                           </div>
                           <div style="display: flex;" class="esta_info">
                           <div class="col-md-3">
                              <p>Codigo DANE</p>
                              <h3 class="custom_carac" id='codigo'>Valor</h3>
                           </div>
                           <div class="col-md-3">
                              <p>Region</p>
                              <h3 class="custom_carac" id='region'>Valor</h3>
                           </div>
                           <div class="col-md-3">
                              <p>Municipio</p>
                              <h3 class="custom_carac" id='municipio'>Valor</h3>
                           </div>
                           <div class="col-md-3">
                              <p>Zona</p>
                              <h3 class="custom_carac" id='zona'>Valor</h3>
                           </div>
                           </div>
                        </div>
                        <div class="container wizard_form" style="padding: 0px;">
                           <div class="stepwizard" style="width: 100%">
                              <div class="stepwizard-row setup-panel" style="width: 100%">
                                 <div class="stepwizard-step">
                                    <a href="#step-1" class="btn btn-primary btn-circle">1</a>
                                    <p>Establecimiento <br> Educativo</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-2" class="btn btn-default btn-circle disabled">2</a>
                                    <p>Información <br> Rector</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-3" class="btn btn-default btn-circle disabled">3</a>
                                    <p>Información <br> Docente</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-4" class="btn btn-default btn-circle disabled">4</a>
                                    <p>Aula <br> Informatica</p>
                                 </div>
                              </div>
                           </div>
                           <form role="form" id="form" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="row setup-content" id="step-1">
                                 <div class="col-xs-12" style="width: 100%;">
                                    <div class="col-md-12 custom_next">
                                       <br>
                                       @include("EstablecimientoEducativo")
                                       <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-2">
                                 <div class="col-xs-12" style="width: 100%;">
                                    <div class="col-md-12 custom_next">
                                       <br>
                                       @include("InformacionRector")
                                       <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-3">
                                 <div class="col-xs-12" style="width: 100%;">
                                    <div class="col-md-12 custom_next">
                                       <br>
                                       @include("InformacionResponsable")
                                       <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-4">
                                 <div class="col-xs-12" style="width: 100%;">
                                    <div class="col-md-12 custom_btn">
                                       <br>
                                       @include("AulaInformatica")
                                       <button type="submit" class="btn btn-success pull-right btn-block enviar">¡Enviar!</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <script>  
         window.CustomDefault=()=>{
                 $("#rural, #aula_si, #cerradura_si, #cableado, #muy_buena, #energia_si").click();
                 $("pre").remove();
         
                 $("#establecimientos_educativos, #municipios").val(null);

                 $("#municipios").chosen({
                     placeholder_text_single: "Seleccione el municipio",
                     no_results_text: "No existen municipios con esta referencia"
                   });
                     $("#establecimientos_educativos").chosen({
                     placeholder_text_single: "Selecciona tu colegio",
                     no_results_text: "No existen colegios con esta referencia"
                   });

                 window.EstablecimientosEducativos='@php echo $Datos["EstablecimientosEducativos"]; @endphp'
                 window.EstablecimientosEducativos=JSON.parse(window.EstablecimientosEducativos);
              }
         
          CustomDefault();
      </script>
      <script src="{{asset("js/template.js")}}"></script>
      <script></script>
   </body>
</html>