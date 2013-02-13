<?php

  App::uses('AppModel', 'Model');

  /**
   * Category Model
   *
   * @property CategoriesProduct $CategoriesProduct
   */
  class Category extends AppModel {

      public $actsAs = array('Tree');

      /**
       * Display field
       *
       * @var string
       */
      public $displayField = 'title';

      /**
       * Validation rules
       *
       * @var array
       */
      public $validate = array(
          'title' => array(
              'notempty' => array(
                  'rule' => array('notempty'),
                  'message' => 'Это поле не может быть пустым',
              //'allowEmpty' => false,
              //'required' => false,
              //'last' => false, // Stop validation after this rule
              //'on' => 'create', // Limit validation to 'create' or 'update' operations
              ),
          ),
      );

      //The Associations below have been created with all possible keys, those that are not needed can be removed

      /**
       * hasMany associations
       *
       * @var array
       */
      public $hasMany = array(
          'CategoriesProduct' => array(
              'className' => 'CategoriesProduct',
              'foreignKey' => 'category_id',
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

  