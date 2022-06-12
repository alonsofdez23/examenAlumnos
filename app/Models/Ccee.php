<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ccee extends Model
{
    use HasFactory;

    protected $table = 'ccee';

    /**
     * Get all of the notas for the ccee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notas()
    {
        return $this->hasMany(Nota::class);
    }
}
