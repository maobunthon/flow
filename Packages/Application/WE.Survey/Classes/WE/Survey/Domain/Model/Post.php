<?php
namespace WE\Survey\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.Survey".             *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Post {

	/**
	 * @var Category
	 * @ORM\ManyToMany(inversedBy="posts")
	 */
	protected $categories;

	/**
	 * @var Author
	 * @ORM\ManyToMany(inversedBy="posts")
	 */
	protected $authors;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 * @ORM\Column(length=999999)
	 */
	protected $description;

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @return mixed
	 */
	public function getCategories()
	{
		return $this->categories;
	}

	/**
	 * @param mixed $categories
	 */
	public function setCategories($categories)
	{
		$this->categories = $categories;
	}

	/**
	 * @return Author
	 */
	public function getAuthors()
	{
		return $this->authors;
	}

	/**
	 * @param Author $authors
	 */
	public function setAuthors($authors)
	{
		$this->authors = $authors;
	}

}
