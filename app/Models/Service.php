<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $primaryKey = 'service_id';
    protected $fillable = [
        'nom', 'description' ];


    public function medecins()
    {
        return $this->hasMany(Medecin::class,'service_id');
    }
}
