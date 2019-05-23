

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



           window.validateFile=()=>{
         console.log("Epale")
         var $fileUpload = $("input[type='file']");
         if (parseInt($fileUpload.get(0).files.length) > 10){
            alert("Solo puedes subir un maximo de 10 fotos");
            $("input[type='file']").val(null);
         }
         if (parseInt($fileUpload.get(0).files.length) < 5){
            alert("Tienes que subir un minimo de 5 fotos");
            $("input[type='file']").val(null);
         }
       }