<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?= $this->Html->charset(); ?>

        <title>Интернет-аптека | <?= $title_for_layout; ?></title>
        <?= $this->Html->meta('icon'); ?>
        <?=
          $this->Html->css(
                  array(
                      "style.css",
                      "custom.css",
                      "jquery.wysiwyg.css",
                      "facebox.css",
                      "visualize.css",
                      "date_input.css",
                      "chosen.css",
                      "jqautocomplete.css"
          ));
        ?>        

        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=7" /><![endif]-->
        <!--[if lt IE 8]>
        <? $this->Html->css("ie.css"); ?>
        <![endif]-->

        <!--[if IE]>
        <?= $this->Html->script('excanvas.js'); ?>        
        <![endif]-->

        <?=
          $this->Html->script(
                  array(
                      'jquery.js',
                      'jquery.img.preload.js',
                      'jquery.filestyle.mini.js',
                      'jquery.wysiwyg.js',
                      'jquery.date_input.js',
                      'jquery.date_input.ru_RU.js',
                      'jquery.tablednd.js',
//                      'chosen.jquery.js',
                      'facebox.js',
                      'jquery.visualize.js',
                      'jquery.select_skin.js',
                      'ajaxupload.js',
//                      'fileuploader.js',
                      'jquery.pngfix.js',
                      'autocomplete.jquery.js',
                      'function.js',
                      'custom.js',
                  )
          );
        ?>

    </head>

    <body>
        <div id="hld">
            <div class="wrapper"> <!-- wrapper begins -->

                <?= $this->element('header'); ?>

                <?= $this->Session->flash(); ?>

                <?= $this->fetch('content'); ?>

                <?= $this->element('footer'); ?>

            </div> <!-- wrapper ends -->

        </div> <!-- #hld ends -->

    </body>
</html>
