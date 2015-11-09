<?php
App::uses('AppController', 'Controller');
/**
 * HatesPosts Controller
 *
 * @property HatesPost $HatesPost
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HatesPostsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HatesPost->recursive = 0;
		$this->set('hatesPosts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HatesPost->exists($id)) {
			throw new NotFoundException(__('Invalid hates post'));
		}
		$options = array('conditions' => array('HatesPost.' . $this->HatesPost->primaryKey => $id));
		$this->set('hatesPost', $this->HatesPost->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HatesPost->create();
			if ($this->HatesPost->save($this->request->data)) {
				$this->Session->setFlash(__('The hates post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hates post could not be saved. Please, try again.'));
			}
		}
		$posts = $this->HatesPost->Post->find('list');
		$users = $this->HatesPost->User->find('list');
		$hates = $this->HatesPost->Hate->find('list');
		$this->set(compact('posts', 'users', 'hates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HatesPost->exists($id)) {
			throw new NotFoundException(__('Invalid hates post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HatesPost->save($this->request->data)) {
				$this->Session->setFlash(__('The hates post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hates post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HatesPost.' . $this->HatesPost->primaryKey => $id));
			$this->request->data = $this->HatesPost->find('first', $options);
		}
		$posts = $this->HatesPost->Post->find('list');
		$users = $this->HatesPost->User->find('list');
		$hates = $this->HatesPost->Hate->find('list');
		$this->set(compact('posts', 'users', 'hates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HatesPost->id = $id;
		if (!$this->HatesPost->exists()) {
			throw new NotFoundException(__('Invalid hates post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HatesPost->delete()) {
			$this->Session->setFlash(__('The hates post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hates post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->HatesPost->recursive = 0;
		$this->set('hatesPosts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HatesPost->exists($id)) {
			throw new NotFoundException(__('Invalid hates post'));
		}
		$options = array('conditions' => array('HatesPost.' . $this->HatesPost->primaryKey => $id));
		$this->set('hatesPost', $this->HatesPost->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HatesPost->create();
			if ($this->HatesPost->save($this->request->data)) {
				$this->Session->setFlash(__('The hates post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hates post could not be saved. Please, try again.'));
			}
		}
		$posts = $this->HatesPost->Post->find('list');
		$users = $this->HatesPost->User->find('list');
		$hates = $this->HatesPost->Hate->find('list');
		$this->set(compact('posts', 'users', 'hates'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HatesPost->exists($id)) {
			throw new NotFoundException(__('Invalid hates post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HatesPost->save($this->request->data)) {
				$this->Session->setFlash(__('The hates post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hates post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HatesPost.' . $this->HatesPost->primaryKey => $id));
			$this->request->data = $this->HatesPost->find('first', $options);
		}
		$posts = $this->HatesPost->Post->find('list');
		$users = $this->HatesPost->User->find('list');
		$hates = $this->HatesPost->Hate->find('list');
		$this->set(compact('posts', 'users', 'hates'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HatesPost->id = $id;
		if (!$this->HatesPost->exists()) {
			throw new NotFoundException(__('Invalid hates post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HatesPost->delete()) {
			$this->Session->setFlash(__('The hates post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hates post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
