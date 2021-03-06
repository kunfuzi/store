<?php

  App::uses('AppModel', 'Model');

  /**
   * CategoriesProduct Model
   *
   * @property Category $Category
   * @property Product $Product
   */
  class CategoriesProduct extends AppModel {
      //The Associations below have been created with all possible keys, those that are not needed can be removed

      /**
       * belongsTo associations
       *
       * @var array
       */
      public $belongsTo = array(
          'Category' => array(
              'className' => 'Category',
              'foreignKey' => 'category_id',
              'conditions' => '',
              'fields' => '',
              'order' => ''
          ),
          'Product' => array(
              'className' => 'Product',
              'foreignKey' => 'product_id',
              'conditions' => '',
              'fields' => '',
              'order' => ''
          )
      );

  }

  