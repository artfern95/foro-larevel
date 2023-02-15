<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputs extends Model
{
    use HasUuids;
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'inputs';

    public function authors()
    {
        return $this->belongsTo(Authors::class);
    }

    public function photos()
    {
        return $this->belongsTo(Photos::class);
    }
}
