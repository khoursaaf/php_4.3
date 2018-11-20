<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>
    <?php
    function returnConcat($example, $example2)
    {
      if (is_string($example) && is_string($example2)) {
        return $example." et ".$example2;
      }
    }
    $string1 = "Je suis Gold Khoursa";
    $string2 = "Je suis Silver Khoursa";
    $string3 = "Je suis Plat Khoursa";
    $number = 564272; ?>
    <p>1er Test</p>
    <p><?php echo returnConcat($string1, $string3); ?></p>
    <p>2eme Test</p>
    <p><?php echo returnConcat($string1, $number); ?></p>
  </body>
</html>
