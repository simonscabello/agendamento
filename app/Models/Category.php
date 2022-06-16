<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'icon',
        'active',
        'deleted_by'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
