<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoronalPolicy extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];
    protected $table = 'coronal_policies';
    protected $with = ['coronafamily'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coronafamily()
    {
        return $this->hasMany(CoronaFamily::class,'corona_id');
    }

}
