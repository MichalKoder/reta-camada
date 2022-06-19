<?php

namespace Michalkoder\RetaCamada\Classes;

class Controller
{
    private $smarty;

    public function __construct() {
        $variables = '';
        $this->smarty = new \Smarty();
        $this->smarty->setTemplateDir(WRITEPATH.'smarty/template');
        $this->smarty->setConfigDir(WRITEPATH.'smarty/config');
        $this->smarty->setCompileDir(WRITEPATH.'smarty/compile');
        $this->smarty->setCacheDir(WRITEPATH.'smarty/cache');
        // $this->smarty->testInstall();
    }

    public function renderView($path, $data = null) {

        if(is_array($data)) {
            foreach($data as $key=>$val) {
                $this->smarty->assign($key, $val);
            }
        } elseif (isset($data)) {
        throw new TypeException;
        }
            $view = VIEWSPATH.$path.'.tpl';
            $this->smarty->assign('BASEURL', BASEURL);
            
            return  $this->smarty->display($view);
        }

        public function getVar() {
            return $_REQUEST;
        }
}

      
      