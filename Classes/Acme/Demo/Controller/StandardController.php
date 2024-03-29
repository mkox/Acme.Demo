<?php
namespace Acme\Demo\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Acme.Demo".             *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

class StandardController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('foos', array(
			'bar', 'baz'
		));
	}

/**
 * Hello action
 *
 * @param string $name Your name
 * @return string The hello
 */
public function helloAction($name) {
        return 'Hello ' . $name . '!';
}

}

?>
