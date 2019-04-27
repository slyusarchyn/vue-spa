<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * @package App\Models
 */
class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'website',
    ];

    /**
     * @return Collection|null
     */
    public static function getAllCustomers(): ?Collection
    {
        return self::orderBy('created_at', 'desc')->get();
    }
}
