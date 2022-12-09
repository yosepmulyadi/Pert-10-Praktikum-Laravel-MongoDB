<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class laptop extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'laptop';

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'merk', 'prosesor', 'penyimpanan', 'ram'

    ];
}