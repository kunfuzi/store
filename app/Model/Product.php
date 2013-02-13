<?php

  App::uses('AppModel', 'Model');

  /**
   * Product Model
   *
   * @property Analog $Analog
   * @property CategoriesProduct $CategoriesProduct
   * @property ProductsPreparat $ProductsPreparat
   */
  class Product extends AppModel {

      /**
       * Display field
       *
       * @var string
       */
      public $displayField = 'title';


      //The Associations below have been created with all possible keys, those that are not needed can be removed

      /**
       * hasMany associations
       *
       * @var array
       */
      public $hasMany = array(
          'Analog' => array(
              'className' => 'Analog',
              'foreignKey' => 'product_id',
              'dependent' => false,
              'conditions' => '',
              'fields' => '',
              'order' => '',
              'limit' => '',
              'offset' => '',
              'exclusive' => '',
              'finderQuery' => '',
              'counterQuery' => ''
          ),
          'CategoriesProduct' => array(
              'className' => 'CategoriesProduct',
              'foreignKey' => 'product_id',
              'dependent' => false,
              'conditions' => '',
              'fields' => '',
              'order' => '',
              'limit' => '',
              'offset' => '',
              'exclusive' => '',
              'finderQuery' => '',
              'counterQuery' => ''
          ),
          'ProductsPreparat' => array(
              'className' => 'ProductsPreparat',
              'foreignKey' => 'product_id',
              'dependent' => false,
              'conditions' => '',
              'fields' => '',
              'order' => '',
              'limit' => '',
              'offset' => '',
              'exclusive' => '',
              'finderQuery' => '',
              'counterQuery' => ''
          )
      );

  }

  