<?php

namespace App\Models\Application;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';
    protected $fillable = [
        'user_id',
        'subject',
        'message',
        'file_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
