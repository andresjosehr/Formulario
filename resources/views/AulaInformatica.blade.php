<div class="text-center text-muted mb-4" style="margin-top: 0px">
   <h2 style="font-size: 1rem">AULA INFORMATICA DEL ESTABLECIMIENTO EDUCATIVO</h2>
</div>
<div class="form-group" style="margin-top: 50px;text-align: center;">
   <span>¿El establecimiento educativo cuenta con Aula de informática? </span>
   <div class="custom-control custom-control-alternative custom-checkbox">
      <div class="row" style="text-align: center;margin-top: 10px">
         <div class="col-md-6">
            <input class="custom-control-input" name="aula_informatica" value="Si" id="aula_si" type="radio">
            <label class="custom-control-label" for="aula_si">
               <span>Si</span>
         </div>
         <div class="col-md-6">
         <input class="custom-control-input" name="aula_informatica" value="No" id="aula_no" type="radio">
         <label class="custom-control-label" for="aula_no">
         <span>No</span>
         </div>
      </div>
      </label>
   </div>
</div>
<div class="form-group" style="margin-top: 50px;text-align: center;">
   <span>¿El aula de informática cuenta con cerradura?</span>
   <div class="custom-control custom-control-alternative custom-checkbox">
      <div class="row" style="text-align: center;margin-top: 10px">
         <div class="col-md-6">
            <input class="custom-control-input" name="cerradura" value="Si" id="cerradura_si" type="radio">
            <label class="custom-control-label" for="cerradura_si">
               <span>Si</span>
         </div>
         <div class="col-md-6">
         <input class="custom-control-input" name="cerradura" value="No" id="cerradura_no" type="radio">
         <label class="custom-control-label" for="cerradura_no">
         <span>No</span>
         </div>
      </div>
      </label>
   </div>
</div>
<div class="form-group" style="margin-top: 50px;text-align: center;">
   <span>¿Como se conectan a internet? </span>
   <div class="custom-control custom-control-alternative custom-checkbox">
      <div class="row" style="text-align: center;margin-top: 10px">
         <div class="col-md-6">
            <input class="custom-control-input" name="internet" value="Cableado" id="cableado" type="radio">
            <label class="custom-control-label" for="cableado">
               <span>Cableado</span>
         </div>
         <div class="col-md-6">
         <input class="custom-control-input" name="internet" value="Wifi" id="wifi" type="radio">
         <label class="custom-control-label" for="wifi">
         <span>Wifi</span>
         </div>
      </div>
      </label>
   </div>
</div>
<div class="form-group" style="margin-top: 50px;text-align: center;">
   <span>¿Como califica la calidad de la conexión a internet? (sino tiene actualmente, cuando haya tenido) </span>
   <div class="custom-control custom-control-alternative custom-checkbox">
      <div class="row" style="text-align: center;margin-top: 10px">
         <div class="col">
            <input class="custom-control-input" name="calidad_internet" value="Muy Buena" id="muy_buena" type="radio">
            <label class="custom-control-label" for="muy_buena">
               <span>Muy Buena</span>
         </div>
         <div class="col">
         <input class="custom-control-input" name="calidad_internet" value="Buena" id="buena" type="radio">
         <label class="custom-control-label" for="buena">
         <span>buena</span>
         </div>
         <div class="col">
         <input class="custom-control-input" name="calidad_internet" value="Regular" id="regular" type="radio">
         <label class="custom-control-label" for="regular">
         <span>Regular</span>
         </div>
         <div class="col">
         <input class="custom-control-input" name="calidad_internet" value="Mala" id="mala" type="radio">
         <label class="custom-control-label" for="mala">
         <span>Mala</span>
         </div>
         <div class="col">
         <input class="custom-control-input" name="calidad_internet" value="No Tiene" id="no_tiene" type="radio">
         <label class="custom-control-label" for="no_tiene">
         <span>No tiene</span>
         </div>
      </div>
      </label>
   </div>
</div>
<div class="form-group" style="margin-top: 50px;text-align: center;">
   <span>¿El establecimiento educativo cuenta con energía eléctrica?</span>
   <div class="custom-control custom-control-alternative custom-checkbox">
      <div class="row" style="text-align: center;margin-top: 10px">
         <div class="col-md-6">
            <input class="custom-control-input" name="energia_electrica" id="energia_si" value="Si" type="radio">
            <label class="custom-control-label" for="energia_si">
               <span>Si</span>
         </div>
         <div class="col-md-6">
         <input class="custom-control-input" name="energia_electrica" id="energia_no" value="No" type="radio">
         <label class="custom-control-label" for="energia_no">
         <span>No</span>
         </div>
      </div>
      </label>
   </div>
</div>
<div class="form-group" style="margin-top: 50px;text-align: center;">
   <span>Numero de computadores que posee el aula informática: </span>
   <div class="custom-control custom-control-alternative custom-checkbox" id="computadores_info">
      <div class="row" style="text-align: center;margin-top: 10px">
         <div class="col-md-3">
            <span style="font-size: 12px">Total: </span>
            <div class="input-group input-group-alternative">
               <div class="input-group-prepend">
               </div>
               <input class="form-control" id="computadores_totales" type="number" required="">
            </div>
         </div>
         <div class="col-md-3">
            <span style="font-size: 12px">Regular: </span>
            <div class="input-group input-group-alternative">
               <div class="input-group-prepend">
               </div>
               <input class="form-control" id="computadores_regulares" type="number" required="">
            </div>
         </div>
         <div class="col-md-3">
            <span style="font-size: 12px">Buenos: </span>
            <div class="input-group input-group-alternative">
               <div class="input-group-prepend">
               </div>
               <input class="form-control" id="computadores_buenos" type="number" required="">
            </div>
         </div>
         <div class="col-md-3">
            <span style="font-size: 12px">Malos: </span>
            <div class="input-group input-group-alternative">
               <div class="input-group-prepend">
               </div>
               <input class="form-control" id="computadores_malos" type="number" required="">
            </div>
         </div>
      </div>
      </label>
   </div>
</div>
<div class="form-group" style="margin-top: 50px;text-align: center;">
   <span>Numero de tabletas que posee el aula informática: </span>
   <div class="custom-control custom-control-alternative custom-checkbox">
      <div class="row" style="text-align: center;margin-top: 10px" id="tableta_info">
         <div class="col-md-3">
            <span style="font-size: 12px">Total: </span>
            <div class="input-group input-group-alternative">
               <div class="input-group-prepend">
               </div>
               <input class="form-control" id="tabletas_totales" type="number" required="">
            </div>
         </div>
         <div class="col-md-3">
            <span style="font-size: 12px">Regular: </span>
            <div class="input-group input-group-alternative">
               <div class="input-group-prepend">
               </div>
               <input class="form-control" id="tabletas_regulares" type="number" required="">
            </div>
         </div>
         <div class="col-md-3">
            <span style="font-size: 12px">Buenos: </span>
            <div class="input-group input-group-alternative">
               <div class="input-group-prepend">
               </div>
               <input class="form-control" id="tabletas_buenos" type="number" required="">
            </div>
         </div>
         <div class="col-md-3">
            <span style="font-size: 12px">Malos: </span>
            <div class="input-group input-group-alternative">
               <div class="input-group-prepend">
               </div>
               <input class="form-control" id="tabletas_malos" type="number" required="">
            </div>
         </div>
      </div>
      </label>
   </div>
</div>