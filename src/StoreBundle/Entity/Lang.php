<?php
namespace StoreBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * StoreBundle\Entity\Lang
 *
 * @ORM\Entity
 * @ORM\Table(name="langs")
 */
class Lang
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $langId;

	/**
	 * @ORM\Column(type="string", length=255, unique=false)
	 */
	private $langName;

	/**
	 * @ORM\Column(type="string", length=255, unique=false)
	 */
	private $langCode;

	/**
	 * @ORM\Column(name="status", type="boolean")
	 */
	private $status;

	/**
	 * @ORM\Column(name="isDefault", type="boolean")
	 */
	private $isDefault;

	/**
	 * @ORM\Column(type="string", length=255, unique=false)
	 */
	private $directory;

	/**
	 * Get langId
	 *
	 * @return integer
	 */
	public function getLangId()
	{
		return $this->langId;
	}

	/**
	 * Set langName
	 *
	 * @param string $langName
	 *
	 * @return Lang
	 */
	public function setLangName($langName)
	{
		$this->langName = $langName;

		return $this;
	}

	/**
	 * Get langName
	 *
	 * @return string
	 */
	public function getLangName()
	{
		return $this->langName;
	}

	/**
	 * Set langCode
	 *
	 * @param string $langCode
	 *
	 * @return Lang
	 */
	public function setLangCode($langCode)
	{
		$this->langCode = $langCode;

		return $this;
	}

	/**
	 * Get langCode
	 *
	 * @return string
	 */
	public function getLangCode()
	{
		return $this->langCode;
	}

	/**
	 * Set locale
	 *
	 * @param string $locale
	 *
	 * @return Lang
	 */
	public function setLocale($locale)
	{
		$this->locale = $locale;

		return $this;
	}

	/**
	 * Get locale
	 *
	 * @return string
	 */
	public function getLocale()
	{
		return $this->locale;
	}

	/**
	 * Set status
	 *
	 * @param boolean $status
	 *
	 * @return Lang
	 */
	public function setStatus($status)
	{
		$this->status = $status;

		return $this;
	}

	/**
	 * Get status
	 *
	 * @return boolean
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * Set directory
	 *
	 * @param string $directory
	 *
	 * @return Lang
	 */
	public function setDirectory($directory)
	{
		$this->directory = $directory;

		return $this;
	}

	/**
	 * Get directory
	 *
	 * @return string
	 */
	public function getDirectory()
	{
		return $this->directory;
	}

	/**
	 * Set isDefault
	 *
	 * @param boolean $isDefault
	 *
	 * @return Lang
	 */
	public function setIsDefault($isDefault)
	{
		$this->isDefault = $isDefault;

		return $this;
	}

	/**
	 * Get isDefault
	 *
	 * @return boolean
	 */
	public function getIsDefault()
	{
		return $this->isDefault;
	}
}
