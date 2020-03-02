<?php

namespace App\Exports;

use App\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

class ProductsExport extends HeadingRowFormatter implements FromCollection, WithHeadings
{
    /**
    * @return Collection
    */
    public function collection()
    {
        return \App\Modules\Product::getFile();
    }

    public function headings(): array
    {
        return \App\Modules\Product::getHeaderFile();
    }
}
