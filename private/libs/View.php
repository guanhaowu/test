<?php
 class View {
     public function render($foldername,$view, array $data = array()) {
         $path = CURRENT_MODULE_DIR . $foldername . DS. $view . '.php';
         if(file_exists($path)) {
             require_once(INSTANCE_ROOT . 'templates' . DS . 'headerTemplate.php');
             require_once(INSTANCE_ROOT . 'templates' . DS . 'navigationTemplate.php');
             require_once(INSTANCE_ROOT . 'templates' . DS . 'contentTemplate.php');
             require_once($path);
             require_once(INSTANCE_ROOT . 'templates' . DS . 'footerTemplate.php');
         }
         else {
             echo $view . '.php file could not be found.';
         }
         
     }
 }
?>
