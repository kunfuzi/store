<?php

  App::uses('AppController', 'Controller');

  class UsersController extends AppController {

      public $name = 'Users';
      public $helpers = array('Html', 'Session');
//      public $uses = array('User', 'Lib_role');

      public function admin_login() {
          //Configure::write('debug', 2);
          //pr($this->data);
          $this->set('title_for_layout', 'Login');
          $this->layout = 'login';

//          pr(AuthComponent::password($this->request->data['User']['password']));

          if ($this->Auth->login()) {
              $this->redirect($this->Auth->redirect());
          } else if ($this->request->is('post')) {
              $this->Session->setFlash('Проверьте правильность ввода учетных данных', 'flash_error');
          }
      }

      public function admin_logout() {
          $this->redirect($this->Auth->logout());
      }

      public function admin_index() {
          if (CakeSession::read('Auth.User.role_id') != 0) {
              $this->redirect('/admin');
          }

          $this->set('title_for_layout', 'Пользователи');
          $this->paginate = array('conditions' => array('del' => null), 'limit' => CakeSession::read('Settings.item_per_page'));
          $users = $this->paginate('User');
          $this->set('users', $users);
      }

      public function admin_edit($id = null) {
          if (empty($id) === false) {
              $this->set('title_for_layout', 'Редактирования пользователя');
              $array = $this->User->find('first', array('conditions' => array('User.id' => $id)));
              $this->set(compact('array'));
          } else {
              $this->set('title_for_layout', 'Создание пользователя');
              Configure::write('debug', 0);
          }
          $this->set('roles', array('0' => 'Администратор', '1' => 'Риелтор'));

          if ($this->request->is('post') && $this->request->data['User']) {
              $this->CLogs->write("Сохранение пользователя");
              if ($this->User->save($this->request->data, array('validate' => true)))
                  $this->redirect('/admin/users/');
          }
      }

      public function admin_del($id) {
          if (CakeSession::read('Auth.User.role_id') != 0) {
              $this->redirect('/admin');
          }
          if (isset($id)) {
              $this->CLogs->write("Удаления пользователя №{$id}");
              $arr = array('id' => $id, 'active' => false, 'del' => true);
              $this->User->save($arr);
              $this->redirect('/admin/users/');
          }
          die();
      }
      

	public function admin_all() {

	}      
      

      public function beforeFilter() {
          parent::beforeFilter();
          $this->Auth->allow('login', 'logout');
      }

  }