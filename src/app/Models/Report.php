<?php

namespace App\Models;

use App\Models\logHistory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Report extends Model
{
    //
    use HasUuids;
    protected $table = 'reports';
    protected $fillable = ['name','title','no_document' ,'deskripsi', 'status', 
    'department', 'uri', 'date_report','checked_by', 'date_checked', 
    'verified_by', 'date_verified', 'deleted_by', 'deleted_at'];

    public function logHistory(): HasMany
    {
        return $this->hasMany(logHistory::class);
    }
}
