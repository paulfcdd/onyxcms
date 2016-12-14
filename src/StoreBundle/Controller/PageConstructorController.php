<?php
namespace StoreBundle\Controller;


class PageConstructorController extends BaseController
{
	public function headerAction()
	{
		if (is_object($this->get('security.token_storage')->getToken()->getUser())) {
			$isLogged = 1;
			$customerName = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
		} else {
			$isLogged = 0;
			$customerName = 'My account';
		}

		$categories = parent::getAllData('Category');

		return parent::renderPage('store/header.html.twig', 
			include_once $this->getTranslation($this->checkLang(), 'header'));
	}

	public function footerAction()
	{
	}
}