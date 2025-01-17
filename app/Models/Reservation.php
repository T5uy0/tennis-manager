<?php

namespace App\Models;
use Carbon\Carbon;
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

    /**
     * Génère une liste de dates de "aujourd'hui" à "aujourd'hui + 14 jours"
     *
     * @param  string|null  $startDate  Date de début (par défaut aujourd'hui)
     * @param  string|null  $endDate    Date de fin (par défaut aujourd'hui + 14 jours)
     * @param  string  $format         Format de la date (par défaut 'Y-m-d')
     * @return array
     */
    public static function getAvailableDates($startDate = null, $endDate = null, $format = 'Y-m-d')
    {
        // Par défaut, la date de début est aujourd'hui
        $startDate = $startDate ? Carbon::parse($startDate) : now();

        // La date de fin est "aujourd'hui + 14 jours" si elle n'est pas fournie
        $endDate = $endDate ? Carbon::parse($endDate) : now()->addDays(14);

        $dates = [];

        while ($startDate->lte($endDate)) {
            $dates[] = $startDate->format($format);
            $startDate->addDay();
        }

        return $dates;
    }
}
