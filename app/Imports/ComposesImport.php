<?php

namespace App\Imports;

use App\Models\Compose;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class ComposesImport implements ToModel, WithUpserts, WithStartRow
{
    use Importable;

    /**
     * @param  array  $row
     *
     * @return Model|null
     */
    public function model(array $row)
    {
        $compose = Compose::find($row[0]);
        $compose->order = $row[3];
        $compose->score_north = $row[4];
        $compose->score_south = $row[5];
        $compose->save();
        return $compose->refresh();
    }

    /**
     * @return string
     */
    public function uniqueBy(): string
    {
        return 'id';
    }

    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
}
