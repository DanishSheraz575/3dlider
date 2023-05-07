<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';
    protected $primaryKey = 'staff_id';
    const CREATED_AT = 'added_on';
    const UPDATED_AT = 'modified_on';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'identity_cell',
        'issued_in',
        'gender',
        'civil_status',
        'is_foreign',
        'place_of_birth',
        'nationality',
        'profession',
        'nua_no',
        'photo',
        'residence_type',
        'awarded_from',
        'awarded_until',
        'valid_passport',
        'date_of_admission',
        'total_remuneration',
        'func',
        'health_insurance_code',
        'type_of_contract',
        'contract_mode',
        'health_insurance',
        'afp',
        'relationship_with_contractor',
        'subcontractor_name',
        'license_no',
        'date_of_issue',
        'date_of_expiry',
        'document_management_service',
        'supplier_management_service',
        'system_consulting_service',
        'car_rental_service',
        'added_by',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'modified_on' => 'datetime',
        'added_on' => 'datetime',
    ];

    function user(){
        return $this->hasOne('users','user_id','added_by');
    }
}
