<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FRAUDCC extends Model
{
    use HasFactory;
    protected $table = "fraudcc";
    protected $fillable = ['meeting_date','slug', 'meeting', 'present' , 'not_present' , 'actions', 'key_decisions', 'link' , 'notes', 'submitted_at', 'submit_for_review','user_id','discarded','pdf' ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
