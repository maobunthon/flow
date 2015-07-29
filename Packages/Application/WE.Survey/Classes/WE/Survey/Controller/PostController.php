<?php
namespace WE\Survey\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.Survey".             *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use WE\Survey\Domain\Model\Post;

class PostController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \WE\Survey\Domain\Repository\PostRepository
	 */
	protected $postRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('posts', $this->postRepository->findAll());
	}

	/**
	 * @param \WE\Survey\Domain\Model\Post $post
	 * @return void
	 */
	public function showAction(Post $post) {
		$this->view->assign('post', $post);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \WE\Survey\Domain\Model\Post $newPost
	 * @return void
	 */
	public function createAction(Post $newPost) {
		$this->postRepository->add($newPost);
		$this->addFlashMessage('Created a new post.');
		$this->redirect('index');
	}

	/**
	 * @param \WE\Survey\Domain\Model\Post $post
	 * @return void
	 */
	public function editAction(Post $post) {
		$this->view->assign('post', $post);
	}

	/**
	 * @param \WE\Survey\Domain\Model\Post $post
	 * @return void
	 */
	public function updateAction(Post $post) {
		$this->postRepository->update($post);
		$this->addFlashMessage('Updated the post.');
		$this->redirect('index');
	}

	/**
	 * @param \WE\Survey\Domain\Model\Post $post
	 * @return void
	 */
	public function deleteAction(Post $post) {
		$this->postRepository->remove($post);
		$this->addFlashMessage('Deleted a post.');
		$this->redirect('index');
	}

}