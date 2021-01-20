<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
	protected $table = 'seminars';
    protected $fillable = ['judul','deskripsi','speaker','moderator','tanggal','harga','status','images'];
}
