<?php

  App::uses('AppHelper', 'View/Helper');

  class CksourceHelper extends AppHelper {

      var $helpers = array('Html');

      function ckeditor($fieldName, $options = array()) {
          //CakePHP 1.2.4.8284 
          $options = $this->_initInputField($fieldName, $options);
          //If you have probelms, try adding a second underscore to _initInputField.  I haven't tested this, but some commenters say it works. 
          //$options = $this->__initInputField($fieldName, $options); 
          $value = null;
          $config = null;
          $events = null;

          if (array_key_exists('value', $options)) {
              $value = $options['value'];
              if (!array_key_exists('escape', $options) || $options['escape'] !== false) {
                  $value = h($value);
              }
              unset($options['value']);
          }
          if (array_key_exists('config', $options)) {
              $config = $options['config'];
              unset($options['config']);
          }
          if (array_key_exists('events', $options)) {
              $events = $options['events'];
              unset($options['events']);
          }

//          pr(WWW_ROOT . DS . 'js' . DS . 'ckeditor' . DS . 'ckeditor.php');
//          pr(ROOT . DS . APP_DIR . DS . "View" . DS . "Themed" . DS . $this->theme . DS . "webroot" . DS . "js" . DS . 'ckeditor' . DS . 'ckeditor.php');
//
//          require_once ROOT . DS . APP_DIR . DS . "View" . DS . "Themed" . DS . $this->theme . DS . "webroot" . DS . "js" . DS . 'ckeditor' . DS . 'ckeditor.php';
//          require_once ROOT . DS . APP_DIR . DS . "View" . DS . "Themed" . DS . $this->theme . DS . "webroot" . DS . "js" . DS . 'ckfinder' . DS . 'ckfinder.php';
//
//          $CKFinder = new CKFinder();
//          $CKEditor = new CKEditor();
//
//          $CKFinder->BasePath = "/theme/" . $this->theme . "/js/ckfinder/";
//          $CKEditor->basePath = "/theme/" . $this->theme . "/js/ckeditor/";

          require_once WWW_ROOT . DS . 'js' . DS . 'ckeditor' . DS . 'ckeditor.php';
          require_once WWW_ROOT . DS . 'js' . DS . 'ckfinder' . DS . 'ckfinder.php';

          $CKFinder = new CKFinder();
          $CKEditor = new CKEditor();

          $CKFinder->BasePath = $this->webroot . 'js/ckfinder/';
          $CKEditor->basePath = $this->webroot . 'js/ckeditor/';

          $CKFinder->SetupCKEditorObject($CKEditor);

          return $CKEditor->editor($options['name'], $value, $config, $events);
      }

  }

?>