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
class Author {

	/**
	 * @var Post
	 * @ORM\ManyToMany(mappedBy="authors")
	 */
	protected $posts;

	/**
	 * @var string
	 */
	protected $name;


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
	 * @return Post
	 */
	public function getPosts()
	{
		return $this->posts;
	}

	/**
	 * @param Post $posts
	 */
	public function setPosts($posts)
	{
		$this->posts = $posts;
	}

}
