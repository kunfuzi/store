<?php

  App::uses('AppController', 'Controller');

  /**
   * Products Controller
   *
   * @property Product $Product
   */
  class ProductsController extends AppController {

      /**
       * admin_index method
       *
       * @return void
       */
      public function admin_index() {
          $this->Product->recursive = 0;
          $this->set('products', $this->paginate());
      }

      /**
       * admin_edit method
       *
       * @throws NotFoundException
       * @param string $id
       * @return void
       */
      public function admin_edit($id = null) {
//          if (!$this->Product->exists($id)) {
//              throw new NotFoundException(__('Продукт не найден'));
//          }
          if ($this->request->is('post') || $this->request->is('put')) {
              if ($this->Product->save($this->request->data)) {

                  if ($this->request->data['Product']['id'])
                      $product_id = $this->request->data['Product']['id'];
                  else
                      $product_id = $this->Product->getInsertID();

                  if (isset($this->request->data['Productpreparat'])) {
//                      pr($this->request->data['Productpreparat']);
                      $delete_ids = array();
                      $save_array = array();
                      foreach ($this->request->data['Productpreparat'] as $link) {
                          if ($link['delete'] == 1) {
                              if (isset($link['id']))
                                  $delete_ids[] = $link['id'];
                          } else {
                              $link['product_id'] = $product_id;
                              $save_array[] = $link;
                          }
                      }
                      // Delete all marked items
                      if ($delete_ids)
                          $this->Product->Productpreparat->deleteAll(array('Productpreparat.id' => $delete_ids));

                      // Save all items
                      if ($save_array)
                          $this->Product->Productpreparat->SaveAll($save_array);
                  }

                  $this->Session->setFlash(__('Продукт сохранен'), 'flash_success');
                  $this->redirect(array('controller' => 'preparats', 'action' => 'index'));
              } else {
                  $this->Session->setFlash(__('Продукт не сохранен.'), 'flash_error');
              }
          } elseif ($this->Product->exists($id)) {
              $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
              $this->Product->recursive = 2;
              $this->request->data = $this->Product->find('first', $options);
          } else if (isset($this->request->params['named']['preparat_uid'])) {
              $this->Product->Preparat->unbindModel(array(
                  'belongsTo' => array('Product'),
                  'hasMany' => array('Order', 'Productpreparat'),
              ));
              $this->request->data = $this->Product->Preparat->findByUid($this->request->params['named']['preparat_uid']);
              $this->request->data['Product'] = array(
                  'active' => 1,
                  'preparat_uid' => $this->request->params['named']['preparat_uid'],
                  'title' => $this->request->data['Preparat']['namec']
              );
          }

//          $preparat_uids = $this->Product->Preparat->find('list', array('fields' => array('Preparat.uid', 'Preparat.namec')));
//          $this->set('preparat_uids', $preparat_uids);
//          $this->set(compact('preparat_uids'));
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
          $this->Product->id = $id;
          if (!$this->Product->exists()) {
              throw new NotFoundException(__('Invalid product'));
          }
          $this->request->onlyAllow('post', 'delete');
          if ($this->Product->delete()) {
              $this->Session->setFlash(__('Product deleted'));
              $this->redirect(array('controller' => 'preparats', 'action' => 'index'));
          }
          $this->Session->setFlash(__('Product was not deleted'));
          $this->redirect(array('controller' => 'preparats', 'action' => 'index'));
      }

  }

  