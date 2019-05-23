<?php

namespace App;

use App\EstablecimientosEducativos;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents; 
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Exportacion implements FromCollection, ShouldAutoSize, WithDrawings, WithHeadings
{

    public function collection()
    {
        return EstablecimientosEducativos::all();
    }



     /**
     * @return BaseDrawing|BaseDrawing[]
     */
    public function Drawings()
    {
    	$i=0; $h=0;
    	foreach (EstablecimientosEducativos::all() as $value) {
    		if ($value->imagen1!=null) {
    			$drawing[$h] = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
		        $drawing[$h]->setName('Logo');
		        $drawing[$h]->setDescription('Logo');
		        $drawing[$h]->setPath(public_path('aulas/'.$value->imagen1));
		        $drawing[$h]->setCoordinates("AC".$i);
		        $h++;
    		}
    		if ($value->imagen2!=null) {
    			$drawing[$h] = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
		        $drawing[$h]->setName('Logo');
		        $drawing[$h]->setDescription('Logo');
		        $drawing[$h]->setPath(public_path('/aulas/'.$value->imagen2));
		        $drawing[$h]->setCoordinates("AD".$i);
		        $h++;
    		}
    		if ($value->imagen3!=null) {
    			$drawing[$h] = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
		        $drawing[$h]->setName('Logo');
		        $drawing[$h]->setDescription('Logo');
		        $drawing[$h]->setPath(public_path('/aulas/'.$value->imagen3));
		        $drawing[$h]->setCoordinates("AE".$i);
		        $h++;
    		}
    		if ($value->imagen4!=null) {
    			$drawing[$h] = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
		        $drawing[$h]->setName('Logo');
		        $drawing[$h]->setDescription('Logo');
		        $drawing[$h]->setPath(public_path('/aulas/'.$value->imagen4));
		        $drawing[$h]->setCoordinates("AF".$i);
				$h++;
    		}
    		if ($value->imagen5!=null) {
    			$drawing[$h] = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
		        $drawing[$h]->setName('Logo');
		        $drawing[$h]->setDescription('Logo');
		        $drawing[$h]->setPath(public_path('/aulas/'.$value->imagen5));
		        $drawing[$h]->setCoordinates("AG".$i);
				$h++;
    		}
    		if ($value->imagen6!=null) {
    			$drawing[$h] = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
		        $drawing[$h]->setName('Logo');
		        $drawing[$h]->setDescription('Logo');
		        $drawing[$h]->setPath(public_path('/aulas/'.$value->imagen6));
		        $drawing[$h]->setCoordinates("AH".$i);
				$h++;
    		}
    		if ($value->imagen7!=null) {
    			$drawing[$h] = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
		        $drawing[$h]->setName('Logo');
		        $drawing[$h]->setDescription('Logo');
		        $drawing[$h]->setPath(public_path('/aulas/'.$value->imagen7));
		        $drawing[$h]->setCoordinates("AI".$i);
				$h++;
    		}
    		if ($value->imagen8!=null) {
    			$drawing[$h] = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
		        $drawing[$h]->setName('Logo');
		        $drawing[$h]->setDescription('Logo');
		        $drawing[$h]->setPath(public_path('/aulas/'.$value->imagen8));
		        $drawing[$h]->setCoordinates("AJ".$i);
				$h++;
    		}
    		if ($value->imagen9!=null) {
    			 $drawing[$h] = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
		        $drawing[$h]->setName('Logo');
		        $drawing[$h]->setDescription('Logo');
		        $drawing[$h]->setPath(public_path('/aulas/'.$value->imagen9));
		        $drawing[$h]->setCoordinates("AK".$i);
				$h++;
    		}
    		if ($value->imagen10!=null) {
    			$drawing[$h] = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
		        $drawing[$h]->setName('Logo');
		        $drawing[$h]->setDescription('Logo');
		        $drawing[$h]->setPath(public_path('/aulas/'.$value->imagen10));
		        $drawing[$h]->setCoordinates("AL".$i);
		        
		        $h++;
    		}
    		

	        $i++;
    	}



        return $drawing;
    }



public function headings(): array
    {  
          $hed =[
          "ID",
          "Nombre",
          "Codigo",
          "Region",
          "Municipio",
          "Tipo de Zona",
          "Numero de Estudiantes",
          "Direccion",
          "Telefono",
          "Nombre del Rector",
          "Telefono del Rector",
          "Email del Rector",
          "Nombre del Docente",
          "Telefono del Docente",
          "Email del Docente",
          "¿Hay aula de informatica?",
          "¿El aula cuenta con cerradura?",
          "Tipo de conexion a internet",
          "Calidad de conexion a internet",
          "¿Cuenta con energia electrica?",
          "Computadores buenos",
          "Computadores regulares",
          "Computadores malos",
          "Computadores totales",
          "Tabletas buenas",
          "Tabletas regulares",
          "Tabletas malas",
          "Tabletas totales",
          "Imagen 1",
          "Imagen 2",
          "Imagen 3",
          "Imagen 4",
          "Imagen 5",
          "Imagen 6",
          "Imagen 7",
          "Imagen 8",
          "Imagen 9",
          "Imagen 10",
          "Fecha de creación",
          "Fecha de edición",
        ];

        return $hed;
    }


}