<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skillname extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="skillnames";

    protected $primarykey="id";
    protected $fillable=['skillname','skillpercentage'];
}
