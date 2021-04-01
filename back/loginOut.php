<?php

function clearSession()
{
  if (!isset($_SESSION)) {
    session_start();
  }
  session_unset();
  session_destroy();
}

clearSession();
echo "<script>
        alert('登出成功!'); 
        location.href = '../index.html';
      </script>";
