<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var string[]
     */
    protected $dates = [
        'created_at',
    ];


    /**
     * The tasks associated with the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function benefits()
    {
        return $this->hasMany(ProductBenefit::class,'product_details_id');
    }

    /**
     * Add a task to the project.
     *
     * @param $items
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function addBenefits($items)
    {
        return $this->benefits()->createMany($items);
    }

    /**
     * Add a task to the project.
     *
     * @param string $body
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addTask($body)
    {
        return $this->tasks()->create(compact('body'));
    }

    /**
     * @return string
     */
    public function path()
    {
        return "@$this->id";
    }

    public function claim(){
        return $this->hasMany(ClaimForm::class,'product_id');
    }
}
