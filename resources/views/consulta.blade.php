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
      <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>

      <script>
         $(document).ready( function () {
             $('#DiagnosticoTable').DataTable();
         } );
      </script>
   </head>
   <body>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/localization/messages_es.js"></script>

      <div class="container-fluid pt-5 mt-5">
        <div class="row">
          <div class="col-12">
             <div class="card">
                 <div class="card-header">
                   Featured
                 </div>
                 <div class="card-body" style="overflow: auto;">
                   <table id="DiagnosticoTable" class="display">
                      <thead>
                          <tr>
                              <th>Nombre</th>
                              <th>Codigo</th>
                              <th>Region</th>
                              <th>Municipio</th>
                              <th>Zona</th>
                              <th># Estudiantes</th>
                              <th>Direccion</th>
                              <th>Telefono</th>
                              <th>Nombre Rect.</th>
                              <th>Telefono Rect.</th>
                              <th>Email Rect.</th>
                              <th>Nombre Doc.</th>
                              <th>Telefono Doc.</th>
                              <th>Email Doc.</th>
                              <th>¿Hay aula informatica?</th>
                              <th>¿Tiene cerradura?</th>
                              <th>¿Hay internet?</th>
                              <th>Calidad Internet</th>
                              <th>¿Hay energia electrica?</th>
                              <th>Computadores buenos</th>
                              <th>Computadores regulares</th>
                              <th>Computadores malos</th>
                              <th>Computadores totales</th>
                              <th>Tabletas buenos</th>
                              <th>Tabletas regulares</th>
                              <th>Tabletas malos</th>
                              <th>Tabletas totales</th>
                              <th>Imagen</th>
                              <th>Imagen</th>
                              <th>Imagen</th>
                              <th>Imagen</th>
                              <th>Imagen</th>
                              <th>Imagen</th>
                              <th>Imagen</th>
                              <th>Imagen</th>
                              <th>Imagen</th>
                              <th>Imagen</th>

                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($Establecimientos as $Establecimiento)
                          <tr id="establecimiento_{{$Establecimiento->id}}">
                              <td>{{$Establecimiento->nombre}}</td>
                              <td>{{$Establecimiento->codigo}}</td>
                              <td>{{$Establecimiento->region}}</td>
                              <td>{{$Establecimiento->municipio}}</td>
                              <td>{{$Establecimiento->zona}}</td>
                              <td>{{$Establecimiento->numero_estudiantes}}</td>
                              <td>{{$Establecimiento->direccion}}</td>
                              <td>{{$Establecimiento->telefono}}</td>
                              <td>{{$Establecimiento->nombre_rector}}</td>
                              <td>{{$Establecimiento->email_rector}}</td>
                              <td>{{$Establecimiento->telefono_rector}}</td>
                              <td>{{$Establecimiento->nombre_docente}}</td>
                              <td>{{$Establecimiento->email_docente}}</td>
                              <td>{{$Establecimiento->telefono_docente}}</td>
                              <td>{{$Establecimiento->aula_informatica}}</td>
                              <td>{{$Establecimiento->cerradura}}</td>
                              <td>{{$Establecimiento->internet}}</td>
                              <td>{{$Establecimiento->calidad_internet}}</td>
                              <td>{{$Establecimiento->energia_electrica}}</td>
                              <td>{{$Establecimiento->computadores_totales}}</td>
                              <td>{{$Establecimiento->computadores_regulares}}</td>
                              <td>{{$Establecimiento->computadores_buenos}}</td>
                              <td>{{$Establecimiento->computadores_malos}}</td>
                              <td>{{$Establecimiento->tabletas_totales}}</td>
                              <td>{{$Establecimiento->tabletas_regulares}}</td>
                              <td>{{$Establecimiento->tabletas_buenos}}</td>
                              <td>{{$Establecimiento->tabletas_malos}}</td>
                              <td id="imagen_1"><button onclick="VerImagen('{{$Establecimiento->imagen1}}','{{$Establecimiento->id}}', '1')" class="btn btn-primary">Ver imagen</button></td>
                              <td id="imagen_2"><button onclick="VerImagen('{{$Establecimiento->imagen2}}','{{$Establecimiento->id}}', '2')" class="btn btn-primary">Ver imagen</button></td>
                              <td id="imagen_3"><button onclick="VerImagen('{{$Establecimiento->imagen3}}','{{$Establecimiento->id}}', '3')" class="btn btn-primary">Ver imagen</button></td>
                              <td id="imagen_4"><button onclick="VerImagen('{{$Establecimiento->imagen4}}','{{$Establecimiento->id}}', '4')" class="btn btn-primary">Ver imagen</button></td>
                              <td id="imagen_5"><button onclick="VerImagen('{{$Establecimiento->imagen5}}','{{$Establecimiento->id}}', '5')" class="btn btn-primary">Ver imagen</button></td>
                              <td id="imagen_6"><button onclick="VerImagen('{{$Establecimiento->imagen6}}','{{$Establecimiento->id}}', '6')" class="btn btn-primary">Ver imagen</button></td>
                              <td id="imagen_7"><button onclick="VerImagen('{{$Establecimiento->imagen7}}','{{$Establecimiento->id}}', '7')" class="btn btn-primary">Ver imagen</button></td>
                              <td id="imagen_8"><button onclick="VerImagen('{{$Establecimiento->imagen8}}','{{$Establecimiento->id}}', '8')" class="btn btn-primary">Ver imagen</button></td>
                              <td id="imagen_9"><button onclick="VerImagen('{{$Establecimiento->imagen9}}','{{$Establecimiento->id}}', '9')" class="btn btn-primary">Ver imagen</button></td>
                              <td id="imagen_10"><button onclick="VerImagen('{{$Establecimiento->imagen10}}','{{$Establecimiento->id}}', '10')" class="btn btn-primary">Ver imagen</button></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
               </div>
          </div>
        </div>
      </div>

      <script>  
      function VerImagen(img, idEstablecimiento, idImagen, url ='{{Request::root()}}') {
          $("#establecimiento_"+idEstablecimiento+" #imagen_"+idImagen).empty();
          $("#establecimiento_"+idEstablecimiento+" #imagen_"+idImagen).append("<img src='"+url+"/aulas/"+img+"'>");
      }
    </script>

      <script src="{{asset("js/template.js")}}"></script>
      <script></script>
   </body>
</html>
