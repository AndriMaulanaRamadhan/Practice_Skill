<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'black_deaths');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows = $row;
  }

  return $rows;
}
