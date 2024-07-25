<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClientIssues extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contract(): BelongsTo
    {
        return  $this->belongsTo(Contract::class,'code','code');
    }

    public function worker(): BelongsTo
    {
        return  $this->belongsTo(Worker::class);
    }
}
