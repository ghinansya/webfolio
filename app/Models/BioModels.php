<?php

namespace App\Models;

use CodeIgniter\Model;

class BioModels extends Model
{
    protected $table = 'bio';

    function getBio(){
        return $this->findAll();
    }

}
