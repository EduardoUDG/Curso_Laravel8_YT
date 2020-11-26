<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /* protected $fillable = [
        'name',
        'descripcion',
        'categoria'
    ]; */


    /*  guarded hace lo mismo de arriba
        pero en fillable debemos permitir los campos que se guarden
        y en guarded ignora los archivos que no queremos tomar
    */
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
