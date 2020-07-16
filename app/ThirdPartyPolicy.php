<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class
ThirdPartyPolicy extends Model
{
//    protected $fillable = ['personal_id'];
    protected $table = 'third_party_policies';
    protected $guarded = [];

    public function personal(){
        return $this->belongsTo(PersonalDetails::class);
    }
}
