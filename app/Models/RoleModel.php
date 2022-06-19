<?php

namespace Michalkoder\RetaCamada\Models;

use \Michalkoder\RetaCamada\Classes\Model;

class RoleModel extends Model {
    protected $table = 'Role';
    protected $allowedFields = [
        'name'
    ];

}