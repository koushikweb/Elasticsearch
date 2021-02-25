<?php

namespace App;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use ElasticquentTrait;
    protected $fillable = ['policy', 'clients', 'advisor_name','career_name'];

    function getIndexName()
    {
        return 'dbga';
    }

    function getTypeName()
    {
        return 'dbga';
    }
}
