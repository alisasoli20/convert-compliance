<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CREDRISKCC extends Model
{
    use HasFactory;
    protected $table = "CREDRISKCC";
    protected $fillable = ['meeting_date', 'meeting', 'present' , 'not_present' , 'actions', 'key_decisions', 'link' , 'notes', 'submitted_at', 'submit_for_review','discarded','pdf' ];
}
