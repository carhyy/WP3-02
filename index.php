<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pirátská Bitva</title>
  </head>
  <body>
    <?php
    $hp=200;
    $zasoby_apalu=100;
    $zasoby_botak=100;
    $load=10;

    echo "Nakládam  $load kg";
    $zasoby_apalu = $zasoby_apalu - $load;
    echo "Zásoby na Apalu jsou nyní: $zasoby_apalu kg"
    ?> <br> <?php
      while ($zasoby_botak !=  100) {

        for ($index = 1; $index < 6; $index++) {
            $damage = rand(0, 5);
            $hp = $hp - $pirati;
            if ($hp <= 0) {
                echo 'Game Over';
                die;
                die
}
                }
      }
    ?>
  </body>
</html>
