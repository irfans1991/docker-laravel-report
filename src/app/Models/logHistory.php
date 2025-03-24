<?php

namespace App\Models;

use App\Models\Report;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class logHistory extends Model
{
    use HasUuids;

    protected $table = 'log_histories';

    protected $fillable = [
        'report_id',
        'name',
        'comment',
    ];

    public function report(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }
}
