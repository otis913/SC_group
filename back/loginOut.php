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
        alert('η»εΊζε!'); 
        location.href = '../index.html';
      </script>";
