<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function mysql_to_human($date = '2012-19-10 12:30:02', $with_time = false, $with_seconds = false)
{
  // Получает данные в MySQL формате, выдает в человеческом
  // in: 2012-19-10 12:30:02
  // out: 19 октября 2012 г. 12:30:02
  
  $month_arr = array('Января', 'Февраля', 'Марта', 'Апреля',
                 'Мая', 'Июня', 'Июля', 'Августа',
                 'Сентября', 'Октября', 'Ноября', 'Декабря');

  $time = "";
  $date = explode(' ', $date);

  if ($with_time) {
    $time = $date[1]; // xx:xx:xx
    if (!$with_seconds) {
      $time = explode(':', $time);
      $time = $time[0].":".$time[1]; // xx:xx
    }  
  }
  $date = explode('-', $date[0]);
  $year = $date[0];
  $month = intval($date[1]);
  $day = intval($date[2]);

  if ($month >= 1 and $month <= 12) {
    $month = $month_arr[$month-1];
    return "$day $month $year г. $time";
  }
  else 
    return "Неизвестно";
}
?>