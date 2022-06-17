<?php

namespace Michalkoder\RetaCamada\Controllers;

use Michalkoder\RetaCamada\Classes\Controller;
use Michalkoder\RetaCamada\Models\CandidateModel;

session_start();

class DashboardController extends Controller 
{

    private $cModel;

    public function __construct() {
        $this->cModel = new CandidateModel();
    }
    // returns page with a list of added candidates
    public function index() {
        $data = [];
        // EDIT CANDIDATE BUTTON CLICK EVENT
        // prepare to pass all the request variables to the view
        if(array_key_exists('edit_candidate', $this->getVar())) {
        foreach($this->getVar() as $key=>$val) {
            $_SESSION[$key] = $val;
        }

        // redirect to target URL containing EDIT FORM
        header('Location: '.BASEURL.'/dashboard/add_edit_candidate'); 
        exit;
        }
        // DELETE CANDIDATE BUTTON CLICK EVENT
        if(array_key_exists('delete_candidate', $this->getVar())) {
            $this->cModel->delete($this->getVar()['id']);
            }

            
        $data['candidates'] = $this->cModel->db()->selectAll(); 
        return $this->renderView('dashboard/index', $data);
    }

   

}