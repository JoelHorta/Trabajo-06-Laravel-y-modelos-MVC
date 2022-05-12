<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Image extends Model
{
    use HasFactory;
    use softDeletes;

    protected $guarded = ['deleted_at'];

    protected $fillable = [
        'name',
        'url',
        'id_product'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
