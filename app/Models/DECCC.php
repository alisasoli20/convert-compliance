<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DECCC extends Model
{
    use HasFactory;
    protected $table = "deccc";
    protected $fillable = ['meeting_date', 'meeting', 'present' , 'not_present' , 'actions', 'key_decisions', 'link' , 'notes', 'submitted_at', 'submit_for_review','discarded','pdf' ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
