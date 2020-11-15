<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
     protected $fillable = ['nama','nama_arab','nis','usercode','email','kota','tgl_lahir','phone','alamat','program_id','status'];
}
