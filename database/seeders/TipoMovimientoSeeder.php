<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoMovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipoMovimientos = [
            ['codigo' => 'ENTRADA', 'nombre' => 'Entrada por Compra', 'descripcion' => 'Ingreso de productos desde proveedores (orden de compra).'],
            ['codigo' => 'SALIDA', 'nombre' => 'Salida por Venta', 'descripcion' => 'Productos vendidos a clientes (vinculado a factura).'],
            ['codigo' => 'TRANSFERENCIA', 'nombre' => 'Transferencia entre Ubicaciones', 'descripcion' => 'Movimiento interno entre almacenes, tiendas o departamentos.'],
            ['codigo' => 'AJUSTE', 'nombre' => 'Ajuste de Inventario', 'descripcion' => 'Corrección por diferencias físicas (sobrantes/faltantes).'],
            ['codigo' => 'DEVOLUCION_PROV', 'nombre' => 'Devolución a Proveedor', 'descripcion' => 'Retorno de productos por defectos o excedentes.'],
            ['codigo' => 'DEVOLUCION_CLIENTE', 'nombre' => 'Devolución de Cliente', 'descripcion' => 'Reingreso de productos devueltos por clientes.'],
            ['codigo' => 'CADUCIDAD', 'nombre' => 'Baja por Caducidad', 'descripcion' => 'Eliminación de productos vencidos o no aptos.'],
            ['codigo' => 'DONACION', 'nombre' => 'Donación', 'descripcion' => 'Salida de productos sin fines de lucro (ej: ayuda social).'],
            ['codigo' => 'PRODUCCION', 'nombre' => 'Consumo para Producción', 'descripcion' => 'Uso de insumos para fabricar productos terminados.'],
            ['codigo' => 'MUESTRA', 'nombre' => 'Salida para Muestras', 'descripcion' => 'Productos usados como muestras gratis (ej: marketing).'],
            ['codigo' => 'PRESTAMO', 'nombre' => 'Préstamo Temporal', 'descripcion' => 'Salida temporal que debe ser devuelta (ej: equipos).'],
            ['codigo' => 'MERMA', 'nombre' => 'Pérdida/Merma', 'descripcion' => 'Pérdidas no recuperables (ej: derrames, robos).'],
            ['codigo' => 'ENT_INICIAL', 'nombre' => 'Inventario Inicial', 'descripcion' => 'Carga inicial de productos al sistema.'],
            ['codigo' => 'ENT_TRANSFORMACION', 'nombre' => 'Entrada por Transformación', 'descripcion' => 'Reingreso de productos modificados (ej: ensamblaje).'],
            ['codigo' => 'SAL_INTERNA', 'nombre' => 'Consumo Interno', 'descripcion' => 'Uso de recursos para operaciones internas (no producción).']
        ];

        foreach ($tipoMovimientos as $tm) {
            DB::table('tipo_movimientos')->insert([
                'codigo' => $tm['codigo'],
                'nombre' => $tm['nombre'],
                'descripcion' => $tm['descripcion'],
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
