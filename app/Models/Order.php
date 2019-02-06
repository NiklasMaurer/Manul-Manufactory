<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'users_id',
                  'ears_id',
                  'eyes_id',
                  'noses_id',
                  'mouths_id',
                  'tails_id',
                  'shoes_id',
                  'created_by',
                  'updated_by'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\User','users_id','id');
    }

    /**
     * Get the ear for this model.
     */
    public function ear()
    {
        return $this->belongsTo('App\Models\Ear','ears_id');
    }

    /**
     * Get the eye for this model.
     */
    public function eye()
    {
        return $this->belongsTo('App\Models\Eye','eyes_id');
    }

    /**
     * Get the nose for this model.
     */
    public function nose()
    {
        return $this->belongsTo('App\Models\Nose','noses_id');
    }

    /**
     * Get the mouth for this model.
     */
    public function mouth()
    {
        return $this->belongsTo('App\Models\Mouth','mouths_id');
    }

    /**
     * Get the tail for this model.
     */
    public function tail()
    {
        return $this->belongsTo('App\Models\Tail','tails_id');
    }

    /**
     * Get the shoe for this model.
     */
    public function shoe()
    {
        return $this->belongsTo('App\Models\Shoe','shoes_id');
    }

    /**
     * Get the creator for this model.
     */
    public function creator()
    {
        return $this->belongsTo('App\User','created_by');
    }

    /**
     * Get the updater for this model.
     */
    public function updater()
    {
        return $this->belongsTo('App\User','updated_by');
    }


    /**
     * Get created_at in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getCreatedAtAttribute($value)
    {
        return \DateTime::createFromFormat('Y-m-d H:i', $value);

    }

    /**
     * Get updated_at in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getUpdatedAtAttribute($value)
    {
        return \DateTime::createFromFormat('Y-m-d H:i', $value);

    }

}
