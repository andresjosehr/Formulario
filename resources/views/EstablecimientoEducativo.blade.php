<div class="text-center text-muted mb-4">
   <h2 style="font-size: 1rem">INFORMACION ESTABLECIMIENTO EDUCATIVO Y UBICACION</h2>
</div>
<form role="form">
<div class="row">
   <div class="col-md-6" id="muni_div">
      <div class="form-group mb-3" style="margin-top: 50px;">
         <span>Municipio: </span>
         <select onchange="showEstablecimientoAcademico()" class="form-control" id="municipios" name="municipios">
            @foreach ($Datos["Municipios"] as $Municipio)
            <option>{{$Municipio->nombre}}</option>
            @endforeach
         </select>
      </div>
   </div>
   <div class="col-md-6" id="cole_div">
      <div class="form-group mb-3" style="margin-top: 50px;">
         <span>Establecimiento Educativo: </span>
         <select onchange="showInfo()" disabled="" class="form-control" id="establecimientos_educativos" name="establecimientos_educativos">
            @foreach ($Datos["EstablecimientosEducativos"] as $EstablecimientoEducativo)
            <option value="{{$EstablecimientoEducativo}}">{{$EstablecimientoEducativo->nombre}}</option>
            @endforeach
         </select>
      </div>
   </div>
</div>
<div class="form-group mb-3" style="margin-top: 40px;">
   <span>Numero de estudiantes matriculados: </span>
   <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
         <span class="input-group-text"><i class="ni ni-badge"></i></span>
      </div>
      <input class="form-control" id="numero_estudiantes" name="numero_estudiantes" placeholder="Escriba la cantidad aqui en numeros enteros" type="number">
   </div>
</div>
<div class="form-group mb-3" style="margin-top: 20px;">
   <span>Direccion: </span>
   <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
         <span class="input-group-text"><i class="ni ni-collection"></i></span>
      </div>
      <input class="form-control" id="direccion" name="direccion" required="" placeholder="Escriba su direccion aqui" type="text">
   </div>
</div>
<div class="form-group mb-3" style="margin-top: 20px;">
   <span>Telefono: </span>
   <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
         <span class="input-group-text"><i class="ni ni-map-big"></i></span>
      </div>
      <input class="form-control" id="telefono" name="telefono" required="" placeholder="Escriba su numero de telefono aqui" type="number">
   </div>
</div>


<script>

</script>