<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
	protected $table = 'seminars';
    protected $fillable = ['judul','tanggal','harga','status','images'];
}
