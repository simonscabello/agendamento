<?php

namespace App\Models;

use App\Enum\UfEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Local extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'active',
        'cep',
        'street',
        'number',
        'district',
        'city',
        'uf',
        'reference_point',
        'deleted_by',
    ];

    protected $casts = [
        'active' => 'boolean',
        'uf' => UfEnum::class,
    ];

    protected $dates = [
        'deleted_at'
    ];
}
