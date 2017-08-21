<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    //protected $primaryKey='cust_id';
    protected $table = 'customer';
    
    public function scopeRegisterNo($query) {
        
        return $query->where('reg_no',1647215);
        
    }
    
}
