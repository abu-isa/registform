<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'forms';
    protected $fillable = ['name','email','mobile_number','pilihan','alamat','status_pembayaran'];
}
