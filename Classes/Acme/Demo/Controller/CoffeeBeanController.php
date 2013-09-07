<?php
namespace Acme\Demo\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Acme.Demo".             *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use Acme\Demo\Domain\Model\CoffeeBean;

class CoffeeBeanController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Acme\Demo\Domain\Repository\CoffeeBeanRepository
	 */
	protected $coffeeBeanRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('coffeeBeans', $this->coffeeBeanRepository->findAll());
	}

	/**
	 * @param \Acme\Demo\Domain\Model\CoffeeBean $coffeeBean
	 * @return void
	 */
	public function showAction(CoffeeBean $coffeeBean) {
		$this->view->assign('coffeeBean', $coffeeBean);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \Acme\Demo\Domain\Model\CoffeeBean $newCoffeeBean
	 * @return void
	 */
	public function createAction(CoffeeBean $newCoffeeBean) {
		$this->coffeeBeanRepository->add($newCoffeeBean);
		$this->addFlashMessage('Created a new coffee bean.');
		$this->redirect('index');
	}

	/**
	 * @param \Acme\Demo\Domain\Model\CoffeeBean $coffeeBean
	 * @return void
	 */
	public function editAction(CoffeeBean $coffeeBean) {
		$this->view->assign('coffeeBean', $coffeeBean);
	}

	/**
	 * @param \Acme\Demo\Domain\Model\CoffeeBean $coffeeBean
	 * @return void
	 */
	public function updateAction(CoffeeBean $coffeeBean) {
		$this->coffeeBeanRepository->update($coffeeBean);
		$this->addFlashMessage('Updated the coffee bean.');
		$this->redirect('index');
	}

	/**
	 * @param \Acme\Demo\Domain\Model\CoffeeBean $coffeeBean
	 * @return void
	 */
	public function deleteAction(CoffeeBean $coffeeBean) {
		$this->coffeeBeanRepository->remove($coffeeBean);
		$this->addFlashMessage('Deleted a coffee bean.');
		$this->redirect('index');
	}

}

?>