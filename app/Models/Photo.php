<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $primaryKey = 'id';

    // protected $dates = ['deleted_at'];

    protected $fillable = [
        'path',
        'imageable_id',
        'imageable_type',
    ];

    public function imageable() {
        return $this->morphTo();
    }

}
