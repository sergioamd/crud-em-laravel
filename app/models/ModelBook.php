<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table ='book';

   public function relUsers()
    {
        return $this->hasOne('App\User','id','id_user');//namespac foreingkey localkey
    }

    protected $fillable=['title','id_user','pages','price'];
}
