<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'article_id'            => 1,
                'article_title'         => 'Crear un blog gratis con proveedores de alojamiento web',
                'article_description'   => 'Los proveedores de alojamiento que ofrecen un espacio web gratis son la opción idónea para aquellos usuarios que quieren dar sus primeros pasos como blogger',
                'article_text'          => 'Las ventajas: Gratuito y simple
                                            Además de las ventajas que representa para el bolsillo, alojar un blog con un proveedor de alojamiento web gratis, en comparación con uno de pago, es especialmente útil ya que el proceso de creación es sencillo y no requiere conocimientos técnicos. Solo hace falta elegir entre una gran cantidad de plantillas y diseños la que mejor se adapte a la temática del blog y personalizar algunos elementos. Las actualizaciones necesarias se realizarán automáticamente.

                                            Beneficios en resumen:
                                            Gratuito
                                            Sencillo y rápido
                                            Sin requerimientos especiales de seguridad o actualización
                                            Desventajas: Funciones y capacidades limitadas
                                            Los servicios gratuitos, por lo general, tienen desventajas en comparación con los servicios de pago. Básicamente, como blogger tendrás ciertas limitaciones técnicas y la personalización de tu blog estará claramente limitada. Existen diversas funciones, así como diseños o plugins, que no podrán ser usadas o serán limitadas. Esto no solo restringe el desempeño de la página sino que también puede generar inconvenientes visuales.',
                'user_id'               => '1',
                'category_id'           => '5',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
            ],
            [
                'article_id'            => 2,
                'article_title'         => 'Post de prueba',
                'article_description'   => 'Este es un post de prueba ejecutado a traves de un seeder',
                'article_text'          => 'Texto de relleno para el post de prueba',
                'user_id'               => '2',
                'category_id'           => '5',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
