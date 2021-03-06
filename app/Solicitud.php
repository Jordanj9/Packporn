<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'tipopack', 'alias', 'email', 'sexo', 'preferencia', 'subpreferencia','pais_id', 'created_at','update_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];
    public function pais(){
        return $this->belongsTo(Pai::class);
    }
}
