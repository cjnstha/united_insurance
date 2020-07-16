<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ThirdPartyPolicy;
use App\PropertyPolicy;
use App\CoronalPolicy;
use App\TravelPolicy;

class PersonalDetails extends Model
{
//    protected $fillable = ['insurance_type'];
    protected $table = 'personal_details';
    protected $guarded = [];

    public function thirdParty(){
        return $this->hasOne(ThirdPartyPolicy::class,'personal_id');
    }

    public function property(){
        return $this->hasOne(PropertyPolicy::class,'personal_id');
    }

    public function corona(){
        return $this->hasOne(CoronalPolicy::class,'personal_id');
    }

     public function travel(){
        return $this->hasOne(TravelPolicy::class,'personal_id');
    }

}
