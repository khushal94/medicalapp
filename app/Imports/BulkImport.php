<?php

namespace App\Imports;

use App\Drug;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BulkImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // print_r($row);
        return new Drug([
            'trade_name' => $row['name'],
            'generic_name' => $row['name'],
            'note' => $row['prescription'],
            'type_sell' => $row['type_of_sell'],
            'manufacturer' => $row['manufacturer'],
            'country_origin' => $row['country_of_origin'],
            'salt' => $row['salt'],
            'rate' => $row['mrp_inclusive_of_all_taxes'],
            'uses' => $row['uses_of_medicine_name'],
            'alternate' => $row['alternate_medicinessalt'],
            'side_effect' => $row['side_effects'],
            'direction_use' => $row['directions_for_use'],
            'therapeutic' => $row['therapeutic_class'],
        ]);
    }
}