<?php

namespace App;

use App\EstablecimientosEducativos;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents; 

class Exportacion implements FromView, WithEvents
{
	public function view(): View
    {
        return view('Excel');
    }



     public function registerEvents(): array
    {

        return [
            AfterSheet::class => function(AfterSheet $event) {
                $drawing = new Maatwebsite\Excel\Concerns\Drawing();
                $drawing->setName('Logo');
                $drawing->setDescription('Logo');
                $drawing->setPath(public_path('aulas/Madrid.jpg'));
                $drawing->setCoordinates('D1');

                $drawing->setWorksheet($event->sheet->getDelegate());
            },
        ];
    }

}