<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InstallationIssue extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function Contract():BelongsTo
    {
        return $this->belongsTo(Contract::class,"code","code");
    }

    public function Worker():BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }

}
