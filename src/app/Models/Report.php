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
    'department', 'uri', 'date_report','revision_date', 'checked_by', 'date_checked', 
    'verified_by', 'date_verified', 'date_auditor', 'date_auditee', 'deleted_by', 'deleted_at'];

    protected $casts = [
        'auditor_by' => 'array',
        'auditee_by' => 'array',
    ];
    public function logHistory(): HasMany
    {
        return $this->hasMany(logHistory::class);
    }
}
