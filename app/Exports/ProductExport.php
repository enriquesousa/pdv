<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Product::all();
        return Product::select('product_name', 'product_code', 'category_id', 'supplier_id', 'buying_price', 'selling_price','product_garage','product_image','product_store','buying_date','expire_date')->get();
    }
}
