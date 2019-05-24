<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstablecimientosEducativos;
use App\Municipios;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents; 
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use App\Exportacion;


class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Datos["EstablecimientosEducativos"]=EstablecimientosEducativos::all();
        $Datos["Municipios"]=Municipios::all();
        return view("Formulario", ["Datos" => $Datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $i=1;
        foreach($request->file('imagenes') as $file){
             $nombre = str_random(30).".".$file->getClientOriginalExtension();
             $file->move(public_path("/aulas/"), $nombre);
             $request->merge(["imagen".$i => $nombre]);
             $i++;
        }


        $request->merge(["establecimientos_educativos" => json_decode($request->establecimientos_educativos, true)]);

        $Datos["EstablecimientosEducativos"]=EstablecimientosEducativos::all();
        $Datos["Municipios"]=Municipios::all();
        EstablecimientosEducativos::where("id", $request->establecimientos_educativos["id"])->update($request->except("establecimientos_educativos", "_token", "municipios", "imagenes"));

        return view('Formulario', ["Exito" => "Exito", "Datos" => $Datos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ExportExcel()
    {


         return Excel::download(new Exportacion, 'users.xlsx');
    }


}






class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    use Exportable;

    public function collection(){



        return collect(EstablecimientosEducativos::where("id", "109")->get());

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

