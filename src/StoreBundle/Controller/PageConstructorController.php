<?php
namespace StoreBundle\Controller;


class PageConstructorController extends BaseController
{
	public function headerAction(){

		return parent::renderPage('store/header.html.twig',[
			'langs'=> parent::getAllData('Lang'),
		]);
	}

	public function footerAction(){}
}