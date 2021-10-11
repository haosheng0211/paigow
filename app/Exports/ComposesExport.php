<?php

namespace App\Exports;

use App\Models\Compose;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class ComposesExport implements FromCollection, Responsable, WithColumnFormatting, WithMapping, WithHeadings
{
    use Exportable;

    /**
     * @return Collection
     */
    public function collection(): Collection
    {
        return Compose::all();
    }

    /**
     * @return array
     */
    public function columnFormats(): array
    {
        return [
            'D' => NumberFormat::FORMAT_TEXT,
            'E' => NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
            'F' => NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
        ];
    }

    /**
     * @param  Compose  $row
     *
     * @return array
     */
    public function map($row): array
    {
        return [
            $row->id,
            $row->label,
            json_encode($row->cards),
            (string) $row->order,
            number_format($row->score_south, 3),
            number_format($row->score_north, 3),
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            '編號',
            '名稱',
            '卡牌',
            '排序權重',
            '北部玩法',
            '南部玩法'
        ];
    }
}
