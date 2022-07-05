<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolUser extends Model
{
    use HasFactory;
    protected $table = 'rol_user';
    protected $primaryKey = 'idrol';
    protected $fillable = [
        'idroles',
        'id',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User', 'id');
    }

        public function rol(){
            return $this->belongsTo('App\Models\Role', 'idroles');
        }



}
