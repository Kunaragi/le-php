<!DOCTYPE html>
<header>
  <h1>J'aime le php</h1>
</header>
<body>
  <h1>Question n°1</h1>
    <h2>The elephant when "for"</h2>
    <?php
      for ($i=1;$i<101;$i++){
          echo($i);
          echo("-");
        }
    ?>

  <h2>The elephant when "while"</h2>
    <?php
      $i=1;
      while ($i<101){
        echo($i);
        echo("-");
        $i=$i+1;
      }
    ?>
