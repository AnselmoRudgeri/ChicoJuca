<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculo extends Model
{
    public static function calcular() {
        $alturaChico = 150;
        $alturaJuca = 110;
        $tempoEmAnos = 0;

        while($alturaJuca <= $alturaChico) {

            $alturaChico += 2;
            $alturaJuca += 3;
            $tempoEmAnos++;
        }
        return $tempoEmAnos;
    }
}
