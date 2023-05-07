<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractors extends Model
{
    use HasFactory;


    protected $table = 'contractors';
    protected $primaryKey = 'contract_id';
    const CREATED_AT = 'added_on';
    const UPDATED_AT = 'modified_on';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sap_contract_number',
        'contract_description',
        'area',
        'contract_inspector',
        'contract_validity_from',
        'contract_validity_until',
        'no_of_personnel',
        'no_of_vehicles',
        'controlled_substances',
        'contract_assigned_company',
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
}
