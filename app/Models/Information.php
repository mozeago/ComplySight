<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Models\Recommendation;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends BaseModel
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = ['content', 'question_id'];

    public function belongsToQuestion()
    {
        return $this->belongsTo(Question::class);
    }
    public function hasManyReccommendations()
    {
        return $this->hasMany(Recommendation::class);
    }
}
