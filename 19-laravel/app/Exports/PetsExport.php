<?php

namespace App\Exports;

use App\Models\Pet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class PetsExport implements FromView, WithColumnWidths, WithStyles
    {
  
    public function view(): View
    {
        return view('pets.excel', [
            'pets' => Pet::all()
        ]);
    }

    public function columnWidths(): array
    {
        return [
            "A" => 5,
            "B" => 30,
            "C" => 35,
            "D" => 45,
            "E" => 24
        ];
    }

    public function styles(Worksheet $sheet){
        return [
            1 => ['font' => ['bold' => true, 'size'=> 16]]
        ];
    }
}
