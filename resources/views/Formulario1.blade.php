@include("general");

<script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
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













































































                  <div class="container" style="padding: 0px">
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
<form role="form" id="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12" style="padding: 50px; margin-bottom: 50px"><br><br>
                @include("EstablecimientoEducativo")
                <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12" style="width: 100%;">
            <div class="col-md-12" style="padding: 50px; margin-bottom: 50px; width: 100%"><br><br>
                @include("InformacionRector")
                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12" style="width: 100%;">
            <div class="col-md-12" style="padding: 50px; margin-bottom: 50px; width: 100%"><br><br>
                @include("InformacionResponsable")
                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12" style="width: 100%;">
            <div class="col-md-12" style="padding: 50px; margin-bottom: 50px; width: 100%"><br><br>
                @include("AulaInformatica")
                <button class="btn btn-success pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </div>
</form>
</div>


<style>
    .btn-primary{

            background-color: #fff;
    color: black;

    }
</style>











































               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@include("footer")