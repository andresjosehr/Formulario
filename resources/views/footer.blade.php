
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

         window.showInfo=()=>{
           	$(".wizard_form").show("slow")
           	let Establecimiento=JSON.parse($("#establecimientos_educativos").val());
	        $("#nombre_info").text(Establecimiento.nombre);

	        $("#codigo").text(Establecimiento.codigo);
	        $("#municipio").text(Establecimiento.municipio);
	        $("#region").text(Establecimiento.region);
	        $("#zona").text(Establecimiento.zona);
	        $("#establecimientoEdicativoInfo").show("slow")
           }


           window.showEstablecimientoAcademico=()=>{
            $("#establecimientos_educativos").empty()

            for (key in window.EstablecimientosEducativos) {
              if ( $("#municipios").val()==EstablecimientosEducativos[key].municipio) {
                console.log(EstablecimientosEducativos[key]);
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