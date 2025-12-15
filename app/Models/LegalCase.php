<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalCase extends Model
{
    // Nama tabel di database Anda
    protected $table = 'legal_cases';

    // Kolom yang boleh diisi
    protected $fillable = [
        'client_id', 
        'lawyer_id', 
        'case_title', 
        'case_description', 
        'status'
    ];

    // Matikan timestamps jika tabel Anda tidak punya kolom updated_at
    public $timestamps = false; 
}