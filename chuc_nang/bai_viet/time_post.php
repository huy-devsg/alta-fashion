<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timestamp = $tv_2['time'];
    $current_time = time(); 
    $time_diff = $current_time - $timestamp; 
    if ($time_diff < 60) { 
      echo 'Vừa xong';
    } elseif ($time_diff < 3600) { 
      $minutes_ago = floor($time_diff / 60);
      echo $minutes_ago . ' phút trước';
    } elseif ($time_diff < 86400) { 
      $hours_ago = floor($time_diff / 3600); 
      echo $hours_ago . ' giờ trước';
    } else { // hơn 1 ngày
      $days_ago = floor($time_diff / 86400);
      echo $days_ago . ' ngày trước';
    }
?>