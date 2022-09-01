<?php

namespace App\Exports;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class TemplateSantri implements WithHeadings, ShouldAutoSize,  WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    use Exportable;

    public function headings(): array{
        return [
            "nama",
            "tempat lahir",
            "tanggal lahir",
            "gender",
            "nama ortu",
            "hp ortu"
        ];
    }

    public function columnFormats(): array
    {
        return [
            'F' => NumberFormat::FORMAT_TEXT,
        ];
    }
}
