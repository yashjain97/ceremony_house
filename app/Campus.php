<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    public $fillable=['first_name','last_name','father_name','mother_name','institution','location','whatsappNo','email','phone','photo_id','identification_id','date_of_birth'];
}
