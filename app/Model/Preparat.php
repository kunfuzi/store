<?php

App::uses('AppModel', 'Model');

/**
 * Preparat Model
 *
 * @property Order $Order
 * @property Product $Product
 */
class Preparat extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed
//      public $hasOne = array(
//          'Product' => array(
//              'className' => 'Product',
//              'foreignKey' => 'preparat_uid1',
//              'conditions' => '',
//              'fields' => '',
//              'order' => ''
//          )
//      );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
//          'Order' => array(
//              'className' => 'Order',
//              'foreignKey' => 'preparat_id',
//              'dependent' => false,
//              'conditions' => '',
//              'fields' => '',
//              'order' => '',
//              'limit' => '',
//              'offset' => '',
//              'exclusive' => '',
//              'finderQuery' => '',
//              'counterQuery' => ''
//          ),
//          'Productpreparat' => array(
//              'className' => 'Productpreparat',
//              'foreignKey' => 'preparat_uid',
//              'dependent' => false,
//              'conditions' => '',
//              'fields' => '',
//              'order' => '',
//              'limit' => '',
//              'offset' => '',
//              'exclusive' => '',
//              'finderQuery' => '',
//              'counterQuery' => ''
//          )
    );

}

