<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo_gallery_model extends Model
{
    public $table ='photo_gallery';
    public $primaryKey ='id';
    public $incrementing = true;
    public $keyType ='int';
    public $timestamps ='false';
}
