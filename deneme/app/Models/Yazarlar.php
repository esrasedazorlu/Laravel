<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yazarlar extends Model
{
    // protected $guarded = [];
    protected $fillable = [
        'id',	'name',	'selflink',	'image', 'bio','created_at','updated_at'
    ];

    static function getField($id, $field){
        $c = Yazarlar::where('id','=',$id)->count();
        if($c!=0){
            $w = Yazarlar::where('id','=',$id)->get();
            return $w[0][$field];
        }else{
            return "silinmiş yazar";
        }
    }






    use HasFactory;
}
