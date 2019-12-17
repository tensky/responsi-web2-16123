<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['nama'];
    public function employee()
    {
        return $this->hasMany('App\Employees', 'id_jobs', 'id_jobs');
    }
    
}
