<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table="estados";
    protected $primariKey="id_estado";
    protected $fillable=['nombre'];
}
