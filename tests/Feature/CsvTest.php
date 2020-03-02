<?php

namespace Tests\Feature;

use App\Exports\ProductsExport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Maatwebsite\Excel\Facades\Excel;
use Tests\TestCase;

class CsvTest extends TestCase
{
    /**
     * A csv file from database.
     * Route OK
     * Download Ok
     * @return void
     */
    public function testGetFileCsvFromBD()
    {
        Excel::fake();
        $this->get('/convertCsv');
        Excel::assertDownloaded('products.csv');
    }
}
