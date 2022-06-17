<?php

namespace Michalkoder\RetaCamada\Models;

use \Michalkoder\RetaCamada\Classes\Model;

class CandidateModel extends Model {
    protected $table = 'Candidate';
    protected $allowedFields = [
        'name', 
        'age', 
        'date_of_application', 
        'role'
    ];


}