<?php

namespace Michalkoder\RetaCamada\Classes;

class Controller
{
    public function renderView($path, $data = null) {
        $variables = '';
        $smarty = new \Smarty();
        $smarty->setTemplateDir(WRITEPATH.'smarty/template');
        $smarty->setConfigDir(WRITEPATH.'smarty/config');
        $smarty->setCompileDir(WRITEPATH.'smarty/compile');
        $smarty->setCacheDir(WRITEPATH.'smarty/cache');
        // $smarty->testInstall();
        

        if(is_array($data)) {
            foreach($data as $key=>$val) {
                $smarty->assign($key, $val);
            }
        } elseif (isset($data)) {
        throw new TypeException;
        }
            $view = VIEWSPATH.$path.'.tpl';
            $smarty->assign('BASEURL', BASEURL);
            
            return  $smarty->display($view);
        }

        public function getVar() {
            return $_REQUEST;
        }
}

      
      