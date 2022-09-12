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

class TemplateGuru implements WithHeadings, ShouldAutoSize,  WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

    public function headings(): array{
        return [
            "nama",
            "tempat lahir guru",
            "tanggal lahir guru",
            "gender",
            "telp guru",
        ];
    }

    public function columnFormats(): array
    {
        return [
            'E' => NumberFormat::FORMAT_TEXT,
        ];
    }
    
}
