<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contactus extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="contactuss";

    protected $primarykey="id";
    protected $fillable=['fullname','email'];
}
