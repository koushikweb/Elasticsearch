<?php

namespace App;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use ElasticquentTrait;
    protected $fillable = ['firstname', 'lastname', 'address','phone'];

    function getIndexName()
    {
        return 'dbga';
    }

    function getTypeName()
    {
        return 'dbga';
    }
}
