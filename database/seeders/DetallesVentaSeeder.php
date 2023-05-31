<?php

namespace Database\Seeders;

use App\Models\Detalles_venta;
use Illuminate\Database\Seeder;

class DetallesVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalles_venta::factory(10)->create();
    }
}
