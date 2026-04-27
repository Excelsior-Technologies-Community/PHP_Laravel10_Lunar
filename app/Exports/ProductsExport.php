<?php

namespace App\Exports;

use Lunar\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Product::with(['variants', 'brand', 'productType'])->get()->map(function ($product) {

            $variant = $product->variants->first();

            return [
                $product->translateAttribute('name'),
                $variant?->sku,
                $product->brand?->name,
                $product->productType?->name,
                $product->created_at->format('Y-m-d'),
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Name',
            'SKU',
            'Brand',
            'Product Type',
            'Created At'
        ];
    }
}