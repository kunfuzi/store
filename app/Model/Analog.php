<?php

App::uses('AppModel', 'Model');

/**
 * Analog Model
 *
 * @property Product $Product
 * @property Preparat $Preparat
 */
class Analog extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Preparat' => array(
            'className' => 'Preparat',
            'foreignKey' => 'preparat_uid',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
