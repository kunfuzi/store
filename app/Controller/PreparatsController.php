<?php

App::uses('AppController', 'Controller');

/**
 * Preparats Controller
 *
 * @property Preparat $Preparat
 */
class PreparatsController extends AppController {

    public $helpers = array('Cksource', 'PhpThumb');
    public $components = array('RequestHandler');

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $type = 'LEFT';
        $join_where = '';
        $this->Preparat->unbindModel(array('hasMany' => array('Order', 'Productpreparat')));

        if (isset($this->request->params['named']['show'])) {
            switch ($this->request->params['named']['show']) {
                case 'card':
                    $type = 'RIGHT';
                    $join_where = '';
                    break;

                case 'no_card':
                    $type = 'LEFT';
                    $join_where = 'Product.preparat_uid LIKE \'\'';
                    break;

                default:
                    $type = 'LEFT';
                    $join_where = '';
                    break;
            }
        }

        $this->Preparat->recursive = 2;
        $this->paginate = array(
            'conditions' => array(),
            'group' => 'uid',
            'fields' => 'COUNT(*) `count_uid`, Preparat.*, Product.*',
            'sort' => 'namec',
            'joins' => array(
                array(
                    'table' => 'products',
                    'alias' => 'Product',
                    'type' => $type,
                    'conditions' => array(
                        'Preparat.uid = Product.preparat_uid',
                        $join_where
                    ),
                )
            )
        );
        $this->set('preparats', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Preparat->exists($id)) {
            throw new NotFoundException(__('Invalid preparat'));
        }
        $options = array('conditions' => array('Preparat.' . $this->Preparat->primaryKey => $id));
        $this->set('preparat', $this->Preparat->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Preparat->create();
            if ($this->Preparat->save($this->request->data)) {
                $this->Session->setFlash(__('The preparat has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The preparat could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Preparat->exists($id)) {
            throw new NotFoundException(__('Invalid preparat'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Preparat->save($this->request->data)) {
                $this->Session->setFlash(__('The preparat has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The preparat could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Preparat.' . $this->Preparat->primaryKey => $id));
            $this->request->data = $this->Preparat->find('first', $options);
        }
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
        $this->Preparat->id = $id;
        if (!$this->Preparat->exists()) {
            throw new NotFoundException(__('Invalid preparat'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Preparat->delete()) {
            $this->Session->setFlash(__('Preparat deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Preparat was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function admin_json_find() {

        $results = array();

        $this->viewClass = 'Json';

        $this->Preparat->unbindModel(array('hasMany' => array('Order')));

        $preparats = $this->Preparat->find('all', array(
            'fields' => array('id', 'namec', 'cenaoptk', 'zavod'),
            'conditions' => array("Preparat.namec like '%{$this->request->query['search']}%'"),
            'limit' => 10,
            'group' => 'namec')
        );

//            pr($this->request->query['search']);
//        pr($preparats);

        foreach ($preparats as $preparat) {
            $results[] = array(
                'id' => $preparat['Preparat']['id'],
                'value' => $preparat['Preparat']['namec'],
                'info' => "производитель: {$preparat['Preparat']['zavod']}",
                'price' => $preparat['Preparat']['cenaoptk'],
            );
        }

        $this->set(compact('results'));
        $this->set('_serialize', array('results'));
        return true;
    }

}

