<?php

  header("Pragma: public");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("Content-Type: application/force-download");
  header("Content-Type: application/octet-stream");
  header("Content-Type: application/download");
  if (isset($downloadName))
      header("Content-Disposition: attachment;filename={$downloadName}");
  else
      header("Content-Disposition: attachment;filename=export_" . date("d.m.Y") . ".xls");

  header("Content-Transfer-Encoding: binary ");
  header("Content-type: application/vnd.ms-excel");
?>
<?= $this->fetch('content'); ?>
