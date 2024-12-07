<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * Liste des heures disponibles pour la réservation.
     *
     * @return array
     */
    public static function getAvailableHours()
    {
        // Génère une liste d'heures par tranche de 30 minutes
        $hours = [];
        $start = strtotime('08:15');
        $end = strtotime('21:15');

        while ($start <= $end) {
            $hours[] = date('H:i', $start);
            $start = strtotime('+60 minutes', $start);
        }

        return $hours;
    }
}
