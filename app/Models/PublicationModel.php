<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'content', 'media', 'media_type'
    ];
}
