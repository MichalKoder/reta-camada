<?php

namespace Michalkoder\RetaCamada\Models;

use \Michalkoder\RetaCamada\Classes\Model;

class CandidateModel extends Model {
    protected $table = 'Candidate';
    protected $allowedFields = [
        'name', 
        'age', 
        'date_of_application'
    ];

public function getCandidates() {
    $query = $this->db()->db->from('Candidate')
             ->leftJoin('Role ON Role.ID = Candidate.roleID')
             ->select('Role.name as role');
    return $query;
}


}