<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;
    protected $table = 'gifts';
    public $timestamps = false;
    protected $casts = [
        'gifts' => 'array'
    ];
    protected $fillable = [
        'name',
        'gifts',
        'user_id',
    ];

    protected $hidden = [

        'created_at',
        'updated_at',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'id');
    }
}
