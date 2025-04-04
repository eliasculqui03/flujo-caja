<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $productos = [
            // Electrónicos (categoria_id: 1)
            [
                'nombre' => 'Smartphone X200',
                'codigo' => 'SMX200',
                'categoria_id' => 1,
                'unidad_medida_id' => 54, // u (NIU)
                'precio_compra' => 450.00,
                'precio_venta' => 599.99,
                'informacion' => 'Smartphone de última generación con cámara de 48MP'
            ],
            [
                'nombre' => 'Auriculares inalámbricos',
                'codigo' => 'AUR-BT',
                'categoria_id' => 1,
                'unidad_medida_id' => 54, // u (NIU)
                'precio_compra' => 25.00,
                'precio_venta' => 49.99,
                'informacion' => 'Auriculares Bluetooth con cancelación de ruido'
            ],

            // Ropa (categoria_id: 2)
            [
                'nombre' => 'Camiseta algodón',
                'codigo' => 'CAM-ALG',
                'categoria_id' => 2,
                'unidad_medida_id' => 54, // u (NIU)
                'precio_compra' => 8.50,
                'precio_venta' => 19.99,
                'informacion' => 'Camiseta 100% algodón talla M'
            ],
            [
                'nombre' => 'Jeans slim fit',
                'codigo' => 'JEA-SLF',
                'categoria_id' => 2,
                'unidad_medida_id' => 54, // u (NIU)
                'precio_compra' => 15.00,
                'precio_venta' => 34.99,
                'informacion' => 'Jeans ajustados color azul oscuro'
            ],

            // Alimentos (categoria_id: 3)
            [
                'nombre' => 'Arroz integral 1kg',
                'codigo' => 'ARI-1KG',
                'categoria_id' => 3,
                'unidad_medida_id' => 18, // kg (KGM)
                'precio_compra' => 1.20,
                'precio_venta' => 2.50,
                'informacion' => 'Arroz integral empaquetado al vacío'
            ],
            [
                'nombre' => 'Aceite de oliva 500ml',
                'codigo' => 'ACE-OLI',
                'categoria_id' => 3,
                'unidad_medida_id' => 28, // L (LTR)
                'precio_compra' => 3.50,
                'precio_venta' => 7.99,
                'informacion' => 'Aceite de oliva extra virgen'
            ],

            // Hogar (categoria_id: 4)
            [
                'nombre' => 'Juego de sábanas',
                'codigo' => 'SAB-KIN',
                'categoria_id' => 4,
                'unidad_medida_id' => 22, // JGO (SET)
                'precio_compra' => 25.00,
                'precio_venta' => 39.99,
                'informacion' => 'Juego de sábanas king size algodón egipcio'
            ],
            [
                'nombre' => 'Almohada memory foam',
                'codigo' => 'ALM-MEM',
                'categoria_id' => 4,
                'unidad_medida_id' => 54, // u (NIU)
                'precio_compra' => 12.00,
                'precio_venta' => 24.99,
                'informacion' => 'Almohada ortopédica con memory foam'
            ],

            // Deportes (categoria_id: 5)
            [
                'nombre' => 'Balón de fútbol',
                'codigo' => 'BAL-FUT',
                'categoria_id' => 5,
                'unidad_medida_id' => 54, // u (NIU)
                'precio_compra' => 12.00,
                'precio_venta' => 24.99,
                'informacion' => 'Balón de fútbol talla 5 oficial'
            ],
            [
                'nombre' => 'Raqueta de tenis',
                'codigo' => 'RAQ-TEN',
                'categoria_id' => 5,
                'unidad_medida_id' => 54, // u (NIU)
                'precio_compra' => 35.00,
                'precio_venta' => 69.99,
                'informacion' => 'Raqueta profesional para tenis'
            ],

            // Electrónicos (categoria_id: 1)
            [
                'nombre' => 'Smartphone X200',
                'codigo' => 'SMX200',
                'categoria_id' => 1,
                'unidad_medida_id' => 54, // u (NIU)
                'precio_compra' => 450.00,
                'precio_venta' => 599.99,
                'informacion' => 'Smartphone 6.5" 128GB RAM 6GB'
            ],
            [
                'nombre' => 'Tablet Pro 10"',
                'codigo' => 'TAB-PRO',
                'categoria_id' => 1,
                'unidad_medida_id' => 54,
                'precio_compra' => 180.00,
                'precio_venta' => 299.99,
                'informacion' => 'Tablet 10.1" 64GB Android 12'
            ],
            [
                'nombre' => 'Smart TV 55" 4K',
                'codigo' => 'TV-55UHD',
                'categoria_id' => 1,
                'unidad_medida_id' => 54,
                'precio_compra' => 350.00,
                'precio_venta' => 549.99,
                'informacion' => 'Televisor 55" Ultra HD Smart TV'
            ],
            [
                'nombre' => 'Portátil Ultrabook',
                'codigo' => 'LAP-ULT',
                'categoria_id' => 1,
                'unidad_medida_id' => 54,
                'precio_compra' => 600.00,
                'precio_venta' => 899.99,
                'informacion' => 'Laptop 14" i5 8GB 512GB SSD'
            ],

            // Ropa (categoria_id: 2)
            [
                'nombre' => 'Camiseta básica blanca',
                'codigo' => 'CAM-BAS',
                'categoria_id' => 2,
                'unidad_medida_id' => 54,
                'precio_compra' => 5.50,
                'precio_venta' => 12.99,
                'informacion' => 'Pack de 3 camisetas básicas'
            ],
            [
                'nombre' => 'Jeans ajustados',
                'codigo' => 'JEA-AJU',
                'categoria_id' => 2,
                'unidad_medida_id' => 54,
                'precio_compra' => 12.00,
                'precio_venta' => 29.99,
                'informacion' => 'Jeans slim fit color azul'
            ],
            [
                'nombre' => 'Chaqueta de cuero',
                'codigo' => 'CHA-CUE',
                'categoria_id' => 2,
                'unidad_medida_id' => 54,
                'precio_compra' => 45.00,
                'precio_venta' => 89.99,
                'informacion' => 'Chaqueta de cuero sintético'
            ],
            [
                'nombre' => 'Zapatos deportivos',
                'codigo' => 'ZAP-DEP',
                'categoria_id' => 2,
                'unidad_medida_id' => 54,
                'precio_compra' => 25.00,
                'precio_venta' => 59.99,
                'informacion' => 'Zapatillas running talla 38-45'
            ],

            // Alimentos (categoria_id: 3)
            [
                'nombre' => 'Arroz extra 5kg',
                'codigo' => 'ARI-5KG',
                'categoria_id' => 3,
                'unidad_medida_id' => 18, // kg
                'precio_compra' => 4.50,
                'precio_venta' => 7.99,
                'informacion' => 'Arroz blanco grano largo'
            ],
            [
                'nombre' => 'Aceite de oliva 1L',
                'codigo' => 'ACE-OLI',
                'categoria_id' => 3,
                'unidad_medida_id' => 28, // L
                'precio_compra' => 6.00,
                'precio_venta' => 12.50,
                'informacion' => 'Aceite de oliva virgen extra'
            ],
            [
                'nombre' => 'Leche entera 1L',
                'codigo' => 'LEC-ENT',
                'categoria_id' => 3,
                'unidad_medida_id' => 28,
                'precio_compra' => 0.80,
                'precio_venta' => 1.50,
                'informacion' => 'Leche UHT entera'
            ],
            [
                'nombre' => 'Café molido 500g',
                'codigo' => 'CAF-MOL',
                'categoria_id' => 3,
                'unidad_medida_id' => 18,
                'precio_compra' => 4.00,
                'precio_venta' => 8.99,
                'informacion' => 'Café 100% arábica'
            ],

            // Hogar (categoria_id: 4)
            [
                'nombre' => 'Juego de sábanas',
                'codigo' => 'SAB-KIN',
                'categoria_id' => 4,
                'unidad_medida_id' => 22, // JGO
                'precio_compra' => 25.00,
                'precio_venta' => 39.99,
                'informacion' => 'Sábanas 100% algodón'
            ],
            [
                'nombre' => 'Set de ollas 6 piezas',
                'codigo' => 'OLL-PRO',
                'categoria_id' => 4,
                'unidad_medida_id' => 22,
                'precio_compra' => 50.00,
                'precio_venta' => 89.99,
                'informacion' => 'Set de cocina antiadherente'
            ],
            [
                'nombre' => 'Lámpara de mesa',
                'codigo' => 'LAM-MES',
                'categoria_id' => 4,
                'unidad_medida_id' => 54,
                'precio_compra' => 12.00,
                'precio_venta' => 24.99,
                'informacion' => 'Lámpara LED con regulador'
            ],
            [
                'nombre' => 'Cortinas blackout',
                'codigo' => 'COR-BLA',
                'categoria_id' => 4,
                'unidad_medida_id' => 54,
                'precio_compra' => 18.00,
                'precio_venta' => 34.99,
                'informacion' => 'Cortinas opacas 140x240 cm'
            ],

            // Deportes (categoria_id: 5)
            [
                'nombre' => 'Balón de fútbol',
                'codigo' => 'BAL-FUT',
                'categoria_id' => 5,
                'unidad_medida_id' => 54,
                'precio_compra' => 12.00,
                'precio_venta' => 24.99,
                'informacion' => 'Talla 5 oficial FIFA'
            ],
            [
                'nombre' => 'Raqueta tenis',
                'codigo' => 'RAQ-TEN',
                'categoria_id' => 5,
                'unidad_medida_id' => 54,
                'precio_compra' => 35.00,
                'precio_venta' => 69.99,
                'informacion' => 'Raqueta profesional grafito'
            ],
            [
                'nombre' => 'Mancuernas 5kg',
                'codigo' => 'MAN-5KG',
                'categoria_id' => 5,
                'unidad_medida_id' => 54,
                'precio_compra' => 8.00,
                'precio_venta' => 15.99,
                'informacion' => 'Par de mancuernas hexagonales'
            ],
            [
                'nombre' => 'Bicicleta montaña',
                'codigo' => 'BIC-MON',
                'categoria_id' => 5,
                'unidad_medida_id' => 54,
                'precio_compra' => 150.00,
                'precio_venta' => 299.99,
                'informacion' => 'Bicicleta 21 velocidades'
            ],

            // Juguetes (categoria_id: 6)
            [
                'nombre' => 'Lego Classic',
                'codigo' => 'LEG-CLS',
                'categoria_id' => 6,
                'unidad_medida_id' => 6, // CJA
                'precio_compra' => 18.00,
                'precio_venta' => 29.99,
                'informacion' => 'Caja 250 piezas'
            ],
            [
                'nombre' => 'Muñeca articulada',
                'codigo' => 'MUN-ART',
                'categoria_id' => 6,
                'unidad_medida_id' => 54,
                'precio_compra' => 12.00,
                'precio_venta' => 24.99,
                'informacion' => 'Con accesorios y ropa'
            ],

            // Belleza (categoria_id: 7)
            [
                'nombre' => 'Crema hidratante',
                'codigo' => 'CRE-HID',
                'categoria_id' => 7,
                'unidad_medida_id' => 5, // BOT
                'precio_compra' => 5.50,
                'precio_venta' => 12.99,
                'informacion' => 'Crema facial 50ml'
            ],

            // Libros (categoria_id: 8)
            [
                'nombre' => 'El Principito',
                'codigo' => 'LIB-PRI',
                'categoria_id' => 8,
                'unidad_medida_id' => 54,
                'precio_compra' => 6.00,
                'precio_venta' => 14.99,
                'informacion' => 'Edición tapa dura'
            ],

            // Herramientas (categoria_id: 9)
            [
                'nombre' => 'Taladro percutor',
                'codigo' => 'TAL-PER',
                'categoria_id' => 9,
                'unidad_medida_id' => 54,
                'precio_compra' => 45.00,
                'precio_venta' => 79.99,
                'informacion' => '750W con maletín'
            ],

            // Automotriz (categoria_id: 10)
            [
                'nombre' => 'Aceite 5W30 1L',
                'codigo' => 'ACE-5W30',
                'categoria_id' => 10,
                'unidad_medida_id' => 28,
                'precio_compra' => 8.00,
                'precio_venta' => 15.99,
                'informacion' => 'Aceite sintético'
            ]
        ];

        foreach ($productos as $producto) {
            DB::table('productos')->insert(array_merge($producto, [
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]));
        }
    }
}
