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
	public function setLang(string $value){
		return self::session()->set('lang', $value);
	}

	/**
	 * @return mixed
	 */
	public function getLang(){
		return self::session()->get('lang');
	}
}


class BaseController extends Controller
{

	use SetSession;

	/**
	 * @return mixed
	 */
	public function checkLang(){
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		if ($this->getLang() == null) {
			return self::setLang($lang);
		} else {
			return self::getLang();
		}
	}

	/**
	 * @param string $repository
	 * @return array
	 */
	public function getAllData(string $repository) {
		return $this->getDoctrine()->getRepository('StoreBundle:'.$repository)->findAll();
	}

	/**
	 * @param string $repository
	 * @param string $parameterName
	 * @param $parameterValue
	 * @return object
	 */
	public function getDataByParameter(string $repository, string $parameterName, $parameterValue){
		return $this->getDoctrine()->getRepository('StoreBundle:'.$repository)
			->findOneBy([$parameterName => $parameterValue]);
	}

	/**
	 * @param string $currentLang
	 * @param string $tplName
	 * @return string
	 */
	public function getTranslation(string $currentLang,string $tplName){
		$data = $this->getDataByParameter('Lang', 'langCode', $currentLang);
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
	public function renderPage(string $view, array $parameters){
		self::checkLang();
		return $this->render($view, $parameters);
	}

}