<?php

  App::uses('AppModel', 'Model');

  /**
   * Product Model
   *
   * @property Productpreparat $Productpreparat
   */
  class Product extends AppModel {

      /**
       * Display field
       *
       * @var string
       */
      public $displayField = 'title';
      public $belongsTo = array(
          'Preparat' => array(
              'className' => 'Preparat',
              'foreignKey' => 'preparat_uid',
              'conditions' => '',
              'fields' => '',
              'order' => ''
          )
      );
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
          )
      );

  }

  