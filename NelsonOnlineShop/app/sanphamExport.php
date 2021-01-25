<?php

namespace App\Exports;

use App\products;
use Maatwebsite\Excel\Concerns\FromCollection;

class sanphamExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return products::all();
    }
}