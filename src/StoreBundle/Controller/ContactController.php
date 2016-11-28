<?php
namespace StoreBundle\Controller;


class ContactController extends BaseController
{
	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function renderAction(){
		return parent::renderPage('store/contact.html.twig', [

		]);
	}
}