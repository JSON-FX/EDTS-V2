<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('document_types')->insert([
            [
                'name' => 'Purchase Request',
                'code' => 'PR'
            ],
            [
                'name' => 'Purchase Order',
                'code' => 'PO'
            ],
            [
                'name' => 'Voucher',
                'code' => 'Voucher'
            ]
        ]);
    }
}
