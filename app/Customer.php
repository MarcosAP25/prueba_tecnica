<?php

namespace prueba_tecnica;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','email','cell','webSite','street','suite','city','zipcode'];
        /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'userName';
    }
}
