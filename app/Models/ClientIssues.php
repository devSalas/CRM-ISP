<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClientIssues extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contracts(): BelongsTo
    {
        return  $this->belongsTo(Contract::class,'code','code');
    }

    public function workers(): BelongsTo
    {
        return  $this->belongsTo(Worker::class);
    }
}
