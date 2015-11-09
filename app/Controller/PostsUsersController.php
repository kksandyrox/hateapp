<?php
App::uses('AppController', 'Controller');
/**
 * PostsUsers Controller
 *
 * @property PostsUser $PostsUser
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PostsUsersController extends AppController {

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
		$this->PostsUser->recursive = 0;
		$this->set('postsUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PostsUser->exists($id)) {
			throw new NotFoundException(__('Invalid posts user'));
		}
		$options = array('conditions' => array('PostsUser.' . $this->PostsUser->primaryKey => $id));
		$this->set('postsUser', $this->PostsUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PostsUser->create();
			if ($this->PostsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The posts user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The posts user could not be saved. Please, try again.'));
			}
		}
		$posts = $this->PostsUser->Post->find('list');
		$users = $this->PostsUser->User->find('list');
		$this->set(compact('posts', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PostsUser->exists($id)) {
			throw new NotFoundException(__('Invalid posts user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PostsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The posts user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The posts user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PostsUser.' . $this->PostsUser->primaryKey => $id));
			$this->request->data = $this->PostsUser->find('first', $options);
		}
		$posts = $this->PostsUser->Post->find('list');
		$users = $this->PostsUser->User->find('list');
		$this->set(compact('posts', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PostsUser->id = $id;
		if (!$this->PostsUser->exists()) {
			throw new NotFoundException(__('Invalid posts user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PostsUser->delete()) {
			$this->Session->setFlash(__('The posts user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The posts user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PostsUser->recursive = 0;
		$this->set('postsUsers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PostsUser->exists($id)) {
			throw new NotFoundException(__('Invalid posts user'));
		}
		$options = array('conditions' => array('PostsUser.' . $this->PostsUser->primaryKey => $id));
		$this->set('postsUser', $this->PostsUser->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PostsUser->create();
			if ($this->PostsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The posts user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The posts user could not be saved. Please, try again.'));
			}
		}
		$posts = $this->PostsUser->Post->find('list');
		$users = $this->PostsUser->User->find('list');
		$this->set(compact('posts', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PostsUser->exists($id)) {
			throw new NotFoundException(__('Invalid posts user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PostsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The posts user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The posts user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PostsUser.' . $this->PostsUser->primaryKey => $id));
			$this->request->data = $this->PostsUser->find('first', $options);
		}
		$posts = $this->PostsUser->Post->find('list');
		$users = $this->PostsUser->User->find('list');
		$this->set(compact('posts', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->PostsUser->id = $id;
		if (!$this->PostsUser->exists()) {
			throw new NotFoundException(__('Invalid posts user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PostsUser->delete()) {
			$this->Session->setFlash(__('The posts user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The posts user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
