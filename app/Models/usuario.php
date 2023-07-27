<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'usuario';
    protected $primarykey = 'User_Id'

    public function empresa()
    {
        return $this->belongsTo(empresa::class);
        
    }
    

}
