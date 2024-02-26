<?php

namespace App\Models\Application;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = [
       'user_id',
       'subject',
       'message',
       'file_url'
    ];

    public function user(): BelongsTo {
       return $this->belongsTo(User::class);
    }
}
