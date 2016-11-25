<!DOCTYPE html>
<htmlZ
<h1>Question n°2</h1>
  <h2>The elephant when "for" (again :) )</h2>
    <?php
      for ($i=100;$i>=1;$i--){
        echo ($i);
        echo ("-");
      }
    ?>

<h2>The elephant when "while" (and again and again!) </h2>
    <?php
      $i=100;
      while ($i>=1){
        echo($i);
        echo("-");
        $i=$i-1;
      }
    ?>
</html>
