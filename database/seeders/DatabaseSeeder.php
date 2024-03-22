<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DocumentType;
use App\Models\students;
use Iluminate\Facades\Str;
class DatabaseSeeder extends Seeder
{//es para llenar la tabla de datos
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       /* echo"Startin seeder";
        $proofOpAddress =new DocumentType();//intancias de clase
        $proofOpAddress->Name="Comprovante de domicilio";
        $proofOpAddress->Expiration=3;
        $proofOpAddress->Code="PROOF_OF_ADDRESS";
        $proofOpAddress->save();*/


        //$documentType=DocumentType:: factory(100)->create();
        $studens=students::factory(10)->create();
    }
}
