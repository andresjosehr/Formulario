<div class="text-center text-muted mb-4">
   <h2 style="font-size: 1rem">INFORMACION ESTABLECIMIENTO EDUCATIVO Y UBICACION</h2>
</div>
<form role="form">
   <div class="row">
      <div class="col-md-6">
         <div class="form-group mb-3" style="margin-top: 50px;">
   <span>Municipio: </span>
      <select onchange="showEstablecimientoAcademico()" class="form-control" id="municipios">
         @foreach ($Datos["Municipios"] as $Municipio)
            <option>{{$Municipio->nombre}}</option>
         @endforeach
      </select>
</div>
      </div>
      <div class="col-md-6">
         <div class="form-group mb-3" style="margin-top: 50px;">
   <span>Establecimiento Educativo: </span>
      <select onchange="showInfo()" disabled="" class="form-control" id="establecimientos_educativos">
         @foreach ($Datos["EstablecimientosEducativos"] as $EstablecimientoEducativo)
            <option value="{{$EstablecimientoEducativo}}">{{$EstablecimientoEducativo->nombre}}</option>
         @endforeach
      </select>
</div>
      </div>
   </div>

{{-- <div class="form-group" style="margin-top: 50px;">
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
</div> --}}
{{-- <div class="form-group mb-3" style="margin-top: 50px;">
   <span>Nombre del establecimiento educativo: </span>
   <select class="form-control" id="establecimientos_educativos" required="">
         @foreach ($Datos["EstablecimientosEducativos"] as $EstablecimientoEducativo)
            <option>{{$EstablecimientoEducativo->nombre}}</option>
         @endforeach
      </select>
</div> --}}
<div class="form-group mb-3" style="margin-top: 40px;">
   <span>Numero de estudiantes matriculados: </span>
   <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
         <span class="input-group-text"><i class="ni ni-badge"></i></span>
      </div>
      <input class="form-control" id="numero_estudiantes" placeholder="Escriba la cantidad aqui en numeros enteros" type="number">
   </div>
</div>
<div class="form-group mb-3" style="margin-top: 20px;">
   <span>Direccion: </span>
   <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
         <span class="input-group-text"><i class="ni ni-collection"></i></span>
      </div>
      <input class="form-control" id="direccion" required="" placeholder="Escriba su direccion aqui" type="text">
   </div>
</div>
<div class="form-group mb-3" style="margin-top: 20px;">
   <span>Telefono: </span>
   <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
         <span class="input-group-text"><i class="ni ni-map-big"></i></span>
      </div>
      <input class="form-control" id="telefono" required="" placeholder="Escriba su numero de telefono aqui" type="number">
   </div>
</div>

