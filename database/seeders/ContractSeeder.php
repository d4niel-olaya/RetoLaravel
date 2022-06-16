<?php

namespace Database\Seeders;
use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Contract();
        $c -> type = 'Ops';
        $c->save();

        $c2 = new Contract();
        $c2 -> type = 'Termino fijo';
        $c2 -> save();
    }
}
