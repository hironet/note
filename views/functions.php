<?php
function get_datetime_modified($file) {
  return date('Y-m-d H:m:s', filemtime($file));
}

function get_datetime_iso8601($datetime) {
  $dt = new DateTime($datetime);
  return $dt->format(DateTime::ATOM);
}

function get_date_japanese($datetime) {
  $dt = new DateTime($datetime);
  return $dt->format('Y年m月d日');
}
