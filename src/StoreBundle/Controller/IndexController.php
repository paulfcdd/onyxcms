<?php
namespace StoreBundle\Controller;


class IndexController extends BaseController
{
	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function indexAction(){
		return parent::renderPage('store/index.html.twig', [
			'test'=> 'test',
		]);
	}
}