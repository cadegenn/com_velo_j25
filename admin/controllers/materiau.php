<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controllerform library
jimport('joomla.application.component.controllerform');
 
/**
 * veloerent Controller
 */
class veloControllerMateriau extends JControllerForm
{
    /*
     * Save datas
     */
    /*public function save(){
        echo("<pre>_GET : ".var_dump($_GET)."</pre>");
        echo("<pre>_POST : ".var_dump($_POST)."</pre>");
        echo("<pre>this : ".var_dump($this)."</pre>");
        echo("<pre>getFieldset(): ".var_dump($this->form->getFieldset())."</pre>");
        //die();
        foreach ($this->form->getFieldset() as $field) {
            
        }
    }*/
    function __construct($config = array()) {
		// le pluriel par défaut de Joomla n'est pas le bon : matériau => matériaux
		$this->view_list = 'materiaux';
		parent::__construct($config);
    }

}
