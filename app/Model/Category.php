<?php

  App::uses('AppModel', 'Model');

  /**
   * Category Model
   *
   * @property Category $ParentCategory
   * @property Category $ChildCategory
   * @property Product $Product
   */
  class Category extends AppModel {

      public $actsAs = array('Tree');

      /**
       * Validation rules
       *
       * @var array
       */
      public $validate = array(
          'parent_id' => array(
              'numeric' => array(
                  'rule' => array('numeric'),
              //'message' => 'Your custom message here',
              //'allowEmpty' => false,
              //'required' => false,
              //'last' => false, // Stop validation after this rule
              //'on' => 'create', // Limit validation to 'create' or 'update' operations
              ),
          ),
          'title' => array(
              'notempty' => array(
                  'rule' => array('notempty'),
              //'message' => 'Your custom message here',
              //'allowEmpty' => false,
              //'required' => false,
              //'last' => false, // Stop validation after this rule
              //'on' => 'create', // Limit validation to 'create' or 'update' operations
              ),
          ),
          'description' => array(
              'notempty' => array(
                  'rule' => array('notempty'),
              //'message' => 'Your custom message here',
              //'allowEmpty' => false,
              //'required' => false,
              //'last' => false, // Stop validation after this rule
              //'on' => 'create', // Limit validation to 'create' or 'update' operations
              ),
          ),
          'active' => array(
              'numeric' => array(
                  'rule' => array('numeric'),
              //'message' => 'Your custom message here',
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
          'Product' => array(
              'className' => 'Product',
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

  