<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contract extends Model
{
    use HasFactory;


    protected $guarded =[];

    public function worker():BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }

    public function client():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function service():BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function router():BelongsTo
    {
        return $this->belongsTo(Router::class);
    }

    public function boxNat():BelongsTo
    {
        return $this->belongsTo(BoxNat::class);
    }

    public function  paymentCommitment():BelongsTo
    {
        return $this->belongsTo(PaymentCommitment::class);
    }
    
}
