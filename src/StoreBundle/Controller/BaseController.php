<?php
namespace StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

trait SetSession {

	/**
	 * @return Session
	 */
	private function session(){
		return new Session();
	}

	/**
	 * @param string $value
	 */
	protected function setLang(string $value){
		return $this->session()->set('lang', $value);
	}

	/**
	 * @return mixed
	 */
	protected function getLang(){
		return $this->session()->get('lang');
	}
}


class BaseController extends Controller
{

	use SetSession;

	/**
	 * @return mixed
	 */
    protected function checkLang(){
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		if ($this->getLang() == null) {
			return $this->setLang($lang);
		} else {
			return $this->getLang();
		}
	}

	/**
	 * @param string $repository
	 * @return array
	 */
    protected function getAllData(string $repository) {
		return $this->getDoctrine()->getRepository('StoreBundle:'.$repository)->findAll();
	}

	/**
	 * @param string $repository
	 * @param string $parameterName
	 * @param $parameterValue
	 * @return object
	 */
    protected function getDataByParameter(string $repository, string $parameterName, $parameterValue){
		return $this->getDoctrine()->getRepository('StoreBundle:'.$repository)
			->findOneBy([$parameterName => $parameterValue]);
	}

	/**
	 * @param string $currentLang
	 * @param string $tplName
	 * @return string
	 */
    protected function getTranslation(string $currentLang,string $tplName){
		$data = $this->getDataByParameter('Lang', 'langCode', $currentLang);
        var_dump($currentLang);
        if (is_null($data)) {
		    $directory = $this->getDataByParameter('Lang', 'isDefault', 1)->getDirectory();
        } else{
		    $directory = $data->getDirectory();
        }
		return __DIR__ . "/../Resources/langs/".$directory."/$tplName.php";
	}

	/**
	 * @param string $view
	 * @param array $parameters
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	protected function renderPage(string $view, array $parameters){
		$this->checkLang();
		return $this->render($view, $parameters);
	}

}