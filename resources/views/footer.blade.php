      <script src="{{asset("js/template.js")}}"></script>
      <script>
         $(document).ready(function(){
           $("#rural, #aula_si, #cerradura_si, #cableado, #muy_buena, #energia_si").click();
           $("pre").remove();

           $("#establecimientos_educativos").val(null);
           $("#establecimientos_educativos").chosen();
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
      </script>
   </body>
</html>