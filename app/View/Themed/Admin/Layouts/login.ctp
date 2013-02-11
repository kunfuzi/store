<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <?= $this->Html->charset(); ?>

        <title>Авторизация</title>
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
                      "chosen.css"
          ));
        ?>        

        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=7" /><![endif]-->
        <!--[if lt IE 8]>
        <? $this->Html->css("ie.css"); ?>
        <![endif]-->

        <!--[if IE]>
        <?= $this->Html->script('excanvas.js'); ?>        
        <![endif]-->

    </head>

    <body>
        <div id="hld">
            <div class="wrapper">		<!-- wrapper begins -->
                <div class="block small center login">

                    <div class="block_head">
                        <div class="bheadl"></div>

                        <div class="bheadr"></div>

                        <h2>SCALE²</h2>
                    </div>		<!-- .block_head ends -->

                    <div class="block_content">

                        <?php echo $this->fetch('content'); ?>

                    </div>		<!-- .block_content ends -->

                    <div class="bendl"></div>
                    <div class="bendr"></div>

                </div>		<!-- .login ends -->

            </div>						<!-- wrapper ends -->

        </div>		<!-- #hld ends -->

        <? //php echo $this->element('sql_dump'); ?>
    </body>
</html>