<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skilldescription extends Model
{
    use HasFactory;
    protected $table="skilldescriptions";

    protected $primarykey="id";
    protected $fillable=['skill-description'];

}
