<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the chantiers Component
 */
class veloViewvelo extends JView
{
	// Overwriting JView display method

	function display($tpl = null) 
	{ 
		$this->title = "VELO";
		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		// Display the view
		parent::display($tpl);
	}
}

?>
