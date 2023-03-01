<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Klaida: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Nusiųsta: " . $_FILES["file"]["name"] . "<br />";
    echo "Tipas: " . $_FILES["file"]["type"] . "<br />";
    echo "Dydis: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Laikinas failas: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " toks failas jau egzistuoja!. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
      echo "Patalpinta: " . "images/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Netinkamas failo formatas!";
  }
?>
