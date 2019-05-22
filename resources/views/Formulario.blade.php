<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="author" content="Creative Tim">
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
  <script>
    var url="{{Request::root()}}"
  </script>
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

                   <div class="row" id="establecimientoEdicativoInfo" style="display: none; text-align: center;margin-top: 35px;">
                     <div class="col-md-12">
                       <h2 id="nombre_info"></h2>
                     </div>
                     <div class="col-md-3">
                       <p>Codigo DANE</p>
                       <h3 style="margin-top: -15px; font-size: 1rem" id='codigo'>Valor</h3>
                     </div>
                     <div class="col-md-3">
                       <p>Region</p>
                       <h3 style="margin-top: -15px; font-size: 1rem" id='region'>Valor</h3>
                     </div>
                     <div class="col-md-3">
                       <p>Municipio</p>
                       <h3 style="margin-top: -15px; font-size: 1rem" id='municipio'>Valor</h3>
                     </div>
                     <div class="col-md-3">
                       <p>Zona</p>
                       <h3 style="margin-top: -15px; font-size: 1rem" id='zona'>Valor</h3>
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
                              <div class="col-md-12" style="padding: 50px; margin-bottom: 50px">
                                
                                <br>
                                 @include("EstablecimientoEducativo")
                                 <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
                              </div>
                           </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                           <div class="col-xs-12" style="width: 100%;">
                              <div class="col-md-12" style="padding: 50px; margin-bottom: 50px; width: 100%">
                                <br>
                                 @include("InformacionRector")
                                 <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
                              </div>
                           </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                           <div class="col-xs-12" style="width: 100%;">
                              <div class="col-md-12" style="padding: 50px; margin-bottom: 50px; width: 100%">
                                <br>
                                 @include("InformacionResponsable")
                                 <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
                              </div>
                           </div>
                        </div>
                        <div class="row setup-content" id="step-4">
                           <div class="col-xs-12" style="width: 100%;">
                              <div class="col-md-12" style="padding: 50px; margin-bottom: 50px; width: 100%">
                                <br>
                                 @include("AulaInformatica")
                                 <button {{-- onclick="recopDat()" --}} type="submit" class="btn btn-success pull-right btn-block enviar">¡Enviar!</button>
                              </div>
                           </div>
                        </div>
                        </form>
                  </div>
                  <style>
                     .btn-primary{
                     background-color: #fff !important;
                     color: black !important;
                     }
                     input, select, textarea{
                         color: black !important;
                     }

                     textarea:focus, input:focus {
                         color: black !important;
                     }

                     #computadores_info input, #tableta_info input { 
                        text-align: center !important; 
                    }

                    .chosen-container{
                      width: 100% !important;
                      margin-top: 7px;
                      margin-bottom: -14px;
                    }

                  </style>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>

      <script src="{{asset("js/template.js")}}"></script>
      <script>
         $(document).ready(function(){
           $("#rural, #aula_si, #cerradura_si, #cableado, #muy_buena, #energia_si").click();
           $("pre").remove();

           $("#establecimientos_educativos, #municipios").val(null);
           $("#establecimientos_educativos, #municipios").chosen();
           window.EstablecimientosEducativos='@php echo $Datos["EstablecimientosEducativos"]; @endphp'
           window.EstablecimientosEducativos=JSON.parse(window.EstablecimientosEducativos);



         })

         window.CalculateTotalCompu=()=>{
          $("#computadores_totales").val(Number($("#computadores_regulares").val())+Number($("#computadores_buenos").val())+Number($("#computadores_malos").val()))
         }

         window.CalculateTotalTablet=()=>{
          $("#tabletas_totales").val(Number($("#tabletas_regulares").val())+Number($("#tabletas_buenos").val())+Number($("#tabletas_malos").val()))
         }

         window.showInfo=()=>{
              $(".wizard_form").show("slow")
              let Establecimiento=JSON.parse($("#establecimientos_educativos").val());
              $("#nombre_info").text(Establecimiento.nombre);

              $("#codigo").text(Establecimiento.codigo);
              $("#municipio").text(Establecimiento.municipio);
              $("#region").text(Establecimiento.region);
              $("#zona").text(Establecimiento.zona);
              $("#establecimientoEdicativoInfo").show("slow")


              for (key in Establecimiento) {
                $("input[type='number']#"+key+", input[type='text']#"+key+", input[type='email']#"+key).val(Establecimiento[key])
                  if ($("input[name='"+key+"']").attr("type")=="radio") {
                    $("input[name='"+key+"'][value='"+Establecimiento[key]+"']").click();
                  }
              }
              // for (var i = 1; i < 11; i++) {
              //   if(Establecimiento["imagen"+i]=!null){
              //     console.log(Establecimiento["imagen"+i]);
              //   }
              // }
           }


           window.showEstablecimientoAcademico=()=>{
            $("#establecimientos_educativos").empty()

            for (key in window.EstablecimientosEducativos) {
              if ( $("#municipios").val()==EstablecimientosEducativos[key].municipio) {
                $("#establecimientos_educativos").append("<option value='"+JSON.stringify(EstablecimientosEducativos[key])+"'>"+EstablecimientosEducativos[key].nombre+"</option>")
              }
            }

            $("#establecimientoEdicativoInfo").hide("slow");
            $("#establecimientos_educativos").removeAttr("disabled");
            $("#establecimientos_educativos").val(null);
            $("#establecimientos_educativos").trigger("chosen:updated");

           }
      </script>
   </body>
</html>