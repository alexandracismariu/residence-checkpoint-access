<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'number',
    ];

    public function user() {
        return $this
            ->belongsTo(User::class)
            ->withDefault([
                'name' => 'Unknown user',
            ]);
    }
}
