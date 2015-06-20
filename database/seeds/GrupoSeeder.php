<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 20/06/15
 * Time: 17:54
 */

use PosgradoService\Entities\Grupo;

class GrupoSeeder extends \Illuminate\Database\Seeder {


    public function run(){

        $grupos = array(
            '1cv1',
            '1cv2',
            '1cv3',
        );

        for($i=0 ; $i < count($grupos); $i++)
        {
            Grupo::create([
                'nombre' => $grupos[$i],
                'salon' => $grupos[$i],
                'semestre' => 1
            ]);
        }

    }
}