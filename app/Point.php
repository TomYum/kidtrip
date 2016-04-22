<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    //
    
    public function scopeNearPoint($query,Point $point,$distination)
    {
        return $query;
    }
    
    public function scopePointsInSquer($query, Point $first_point, Point $second_point)
    {
        $fp_lat = $first_point->getLatitude();
        $fp_lon = $first_point->getLongitude();
        
        $sp_lat = $second_point->getLatitude();
        $sp_lon = $second_point->getLongitude();
        
        if ($fp_lat > $sp_lat){
            
        }
        
        return $query;
    }
}
