<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
