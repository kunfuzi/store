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
          $this->Category->recursive = 0;
          $current_cat = array('Category' => array('id' => 0));
          $this->set('categories', $this->Category->find('threaded'));

          if (!empty($id)) {
              $this->Category->recursive = 4;

              $this->Category->CategoriesProduct->Category->CategoriesProduct->unbindModel(array(
                  'belongsTo' => array('Category')
              ));

              $this->Category->CategoriesProduct->Product->unbindModel(array(
                  'hasMany' => array('CategoriesProduct', 'Analog')
              ));

              $this->Category->CategoriesProduct->Product->ProductsPreparat->unbindModel(array(
                  'belongsTo' => array('Product')
              ));

              $current_cat = $this->Category->find('first', array('conditions' => array('id' => $id)));
          }
          // ищем все продукты для этой категории

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
          if ($this->request->is('post') || $this->request->is('put')) {
              if ($this->Category->save($this->request->data)) {
                  $this->Session->setFlash(__('Категория сохранена'), 'flash_success');
                  $this->redirect(array('action' => 'index', $this->request->data['Category']['parent_id']));
              } else {
                  $this->Session->setFlash(__('The category could not be saved. Please, try again.'), 'flash_error');
              }
          } else if ($this->Category->exists($id)) {
              $options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
              $this->request->data = $this->Category->find('first', $options);
          } else {
              if (isset($this->request->params['named']['parent_id']))
                  $this->request->data = array(
                      'Category' => array(
                          'parent_id' => $this->request->params['named']['parent_id'],
                          'active' => 1
                      )
                  );
          }
          $this->set('parents', $this->Category->generateTreeList(null, null, null, '&nbsp;&nbsp;&nbsp;'));
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

  