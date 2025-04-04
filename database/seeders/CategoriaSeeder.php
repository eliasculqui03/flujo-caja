<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['nombre' => 'Electrónicos', 'decripcion' => 'Productos electrónicos y dispositivos tecnológicos'],
            ['nombre' => 'Ropa', 'decripcion' => 'Prendas de vestir para hombres, mujeres y niños'],
            ['nombre' => 'Alimentos', 'decripcion' => 'Productos alimenticios y comestibles'],
            ['nombre' => 'Hogar', 'decripcion' => 'Artículos para el hogar y decoración'],
            ['nombre' => 'Deportes', 'decripcion' => 'Equipamiento y accesorios deportivos'],
            ['nombre' => 'Juguetes', 'decripcion' => 'Juguetes y juegos para niños'],
            ['nombre' => 'Belleza', 'decripcion' => 'Productos de cuidado personal y belleza'],
            ['nombre' => 'Libros', 'decripcion' => 'Libros y material educativo'],
            ['nombre' => 'Herramientas', 'decripcion' => 'Herramientas y equipos para construcción y bricolaje'],
            ['nombre' => 'Automotriz', 'decripcion' => 'Repuestos y accesorios para vehículos']
        ];

        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert([
                'nombre' => $categoria['nombre'],
                'decripcion' => $categoria['decripcion'],
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
