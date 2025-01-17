<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class Task extends Model
{
    use HasFactory;

    public function milestone(): BelongsTo
    {
        return $this->belongsTo(Milestone::class, 'milestone_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assign_to_id');
    }
}
