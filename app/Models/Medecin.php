<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;
    protected $fillable = [
        'specialite','service_id','user_id'];


        public function service()
        {
            return $this->belongsTo(Service::class,'service_id');
        }

        // public function horaires()
        // {
        //     return $this->hasMany(Horaires::class, 'medecin_id');
        // }

        // public function rdvs() {
        //     return $this->hasMany(Rdv::class, 'medecin_id');
        // }



    // public function obtenirHorairesFormates()
    // {
    //     $horaires = $this->horaires; // Supposons que vous avez une relation hasMany avec la table horaires_medecins

    //     $horairesFormates = [];

    //     foreach ($horaires as $horaire) {
    //         $jour = $horaire->jour_semaine;
    //         $heureDebut = $horaire->heure_debut;
    //         $heureFin = $horaire->heure_fin;

    //         $horairesFormates[] = "$jour : $heureDebut - $heureFin ";
    //     }

    //     return implode(', ', $horairesFormates);
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
