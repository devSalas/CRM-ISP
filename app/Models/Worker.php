<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Worker extends Model
{
    use HasFactory;
    
    
    protected $guarded =[];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function installation():HasMany
    {
        return $this->hasMany(Installation::class);
    }


    public function contract():HasMany
    {
        return $this->hasMany(Contract::class);
    }


    
    public function clientIssue(): HasMany
    {
        return  $this->hasMany(ClientIssues::class);
    }

}
