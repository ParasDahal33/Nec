<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimony extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="testimonys";

    protected $primarykey="id";
    protected $fillable=['client_name','profile','client_number','position','testimony','activestatus'];
}
