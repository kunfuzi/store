<?php

  App::uses('AppController', 'Controller');

  /**
   * Categories Controller
   *
   * @property Category $Category
   */
  class CategoriesController extends AppController {

      /**
       * admin_index method
       *
       * @return void
       */
      public function admin_index($id = '') {
          $current_cat = array('Category' => array('id' => 0));
          $this->set('categories', $this->Category->find('threaded'));

          if (!empty($id))
              $current_cat = $this->Category->find('first', array('conditions' => array('id' => $id)));

          $this->set('current_cat', $current_cat);
      }

      /**
       * admin_edit method
       *
       * @throws NotFoundException
       * @param string $id
       * @return void
       */
      public function admin_edit($id = null) {
          if (!$this->Category->exists($id)) {
              throw new NotFoundException(__('Invalid category'));
          }
          if ($this->request->is('post') || $this->request->is('put')) {
              if ($this->Category->save($this->request->data)) {
                  $this->Session->setFlash(__('The category has been saved'));
                  $this->redirect(array('action' => 'index'));
              } else {
                  $this->Session->setFlash(__('The category could not be saved. Please, try again.'));
              }
          } else {
              $options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
              $this->request->data = $this->Category->find('first', $options);
          }
          $this->set('parents', $this->Category->find('list', array('conditions' => array('Category.parent_id' => NULL))));
      }

      /**
       * admin_delete method
       *
       * @throws NotFoundException
       * @throws MethodNotAllowedException
       * @param string $id
       * @return void
       */
      public function admin_delete($id = null) {
          $this->Category->id = $id;
          if (!$this->Category->exists()) {
              throw new NotFoundException(__('Invalid category'));
          }
          $this->request->onlyAllow('post', 'delete');
          if ($this->Category->delete()) {
              $this->Session->setFlash(__('Category deleted'));
              $this->redirect(array('action' => 'index'));
          }
          $this->Session->setFlash(__('Category was not deleted'));
          $this->redirect(array('action' => 'index'));
      }

  }

  