<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';
    protected $primaryKey = 'vehicle_id';
    const CREATED_AT = 'added_on';
    const UPDATED_AT = 'modified_on';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'plate_num',
        'chasis_num',
        'ability',
        'year_of_production',
        'engine_num',
        'model',
        'brand',
        'displacement',
        'mileage',
        'unit_type',
        'photo',
        // 2nd form
        'inspection_num',
        'inspection_date',
        'expiration_date',
        'observation_inspection',
        'policy_num',
        'type_of_insurance',
        'insured_amount',
        'clairvoyance_since',
        'valid_till',
        'insurance_company',
        'observation_insurance',
        'own_vehicle',
        'discharge_date',
        'certifier',
        'team_added',
        //more here
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
