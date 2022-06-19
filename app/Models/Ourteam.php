<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ourteam extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="ourteams";

    protected $primarykey="id";
    protected $fillable=['member_name','image','member_role','facebook','twitter','linkedin','pinterest','contact','position','activestatus','email'];
}
