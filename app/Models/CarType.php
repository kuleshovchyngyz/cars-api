<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property float $parking_price
 * @property boolean $rank
 * @property boolean $is_active
 */
class CarType extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'parking_price', 'rank', 'is_active'];

    public function carMarks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CarMark::class);
    }
}
