<?php

namespace Michalkoder\RetaCamada\Controllers;

use Michalkoder\RetaCamada\Classes\Controller;
use Michalkoder\RetaCamada\Models\CandidateModel;
use Michalkoder\RetaCamada\Models\RoleModel;

session_start();

class DashboardController extends Controller 
{

    private $cModel;

    public function __construct() {
        parent::__construct();
        $this->cModel = new CandidateModel();
        $this->rModel = new RoleModel();
    }
    // returns page with a list of added candidates
    public function index() {
        $data = [];
        // ADD CANDIDATE BUTTON CLICK EVENT
        // prepare to pass all the request variables to the view
        if(array_key_exists('new_candidate', $this->getVar())) {

            // redirect to target URL containing EDIT FORM
            header('Location: '.BASEURL.'/dashboard/add_edit_candidate'); 
            exit;
        }
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

        $data['candidates'] = $this->cModel->getCandidates(); 
        return $this->renderView('dashboard/index', $data);
    }

    
    public function addEditCandidate() {
        $data = [];
        // SAVE CANDIDATE BUTTON CLICK EVENT
        if(array_key_exists('save_candidate', $this->getVar())) {
            $set = $this->getVar();
            $id = $set['id'];
            unset($set['save_candidate']);
            $this->cModel->save($set, $id);

            // redirect to target URL containing EDIT FORM
            header('Location: '.BASEURL.'/dashboard'); 
            exit;
            }
            $data['roles'] = $this->rModel->fetchAll();
        return $this->renderView('dashboard/add_edit_candidate', $data);
    }

    // returns page with a list of added roles
    public function roles() {
        $data = [];
        // EDIT ROLE BUTTON CLICK EVENT
        // prepare to pass all the request variables to the view
        if(array_key_exists('edit_role', $this->getVar())) {
        foreach($this->getVar() as $key=>$val) {
            $_SESSION[$key] = $val;
        }

        // redirect to target URL containing EDIT FORM
        header('Location: '.BASEURL.'/dashboard/add_edit_role'); 
        exit;
        }
        // ADD ROLE BUTTON CLICK EVENT
        // prepare to pass all the request variables to the view
        if(array_key_exists('new_role', $this->getVar())) {
        // redirect to target URL containing CREATE FORM
        header('Location: '.BASEURL.'/dashboard/add_edit_role'); 
        exit;
        }

        // DELETE ROLE BUTTON CLICK EVENT
        if(array_key_exists('delete_role', $this->getVar())) {
            $this->rModel->delete($this->getVar()['id']);
        }


        $data['roles'] = $this->rModel->fetchAll(); 
        // return var_dump($data['roles']);
        // return $data['roles'];
        return $this->renderView('dashboard/roles', $data);
    }

    public function addEditRole() {
        $data = [];
        // SAVE ROLE BUTTON CLICK EVENT
        if(array_key_exists('save_role', $this->getVar())) {
            $id = !empty($this->getVar()['id']) ? $this->getVar()['id'] : null;
            $set = $this->getVar();
            unset($set['id']);
            unset($set['save_role']);
            $this->rModel->save($set, $id);

            // redirect to target URL containing EDIT FORM
            header('Location: '.BASEURL.'/dashboard/roles'); 
            exit;
            }
        return $this->renderView('dashboard/add_edit_role', $data);
    }
    

}