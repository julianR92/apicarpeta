<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inhumaciones extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = 'auditoria_consulta';
    protected $primaryKey = 'id';
}
