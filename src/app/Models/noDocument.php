<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class noDocument extends Model
{
    use HasUuids;

    protected $table = 'no_documents';

    protected $fillable = [
        'no_document',
    ];
}
