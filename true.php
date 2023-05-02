<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
  <Body> 
  <h1>Таблица истинности PHP</h1>
  <table class ="table">
      <tbody>
        <tr>
          <th>A</th>
          <th>B</th>
          <th>!A</th>
          <th>A || B</th>
          <th>A && B</th>
          <th>A xor B</th>
        </tr>
        <tr>
          <td><?php $a1=0; echo $a1?></td>
          <td><?php $b1=0; echo $b1?></td>
          <td><?php var_dump($c1 = !$a1);?></td>
          <td><?php var_dump($d1 = $a1 || $b1);?></td>
          <td><?php var_dump($e1 = $a1 && $b1);?></td>
          <td><?php var_dump($f1 = $a1 xor $b1);?></td>
        </tr>
        <tr>
          <td><?php $a2=0; echo $a2?></td>
          <td><?php $b2=1; echo $b2?></td>
          <td><?php var_dump($c2 = !$a2);?></td>
          <td><?php var_dump($d2 = $a2 || $b2);?></td>
          <td><?php var_dump($e2 = $a2 && $b2);?></td>
          <td><?php var_dump($f2 = $a2 xor $b2);?></td>
        </tr>
        <tr>
          <td><?php $a3=1; echo $a3?></td>
          <td><?php $b3=0; echo $b3?></td>
          <td><?php var_dump($c3 = !$a3);?></td>
          <td><?php var_dump($d3 = $a3 || $b3);?></td>
          <td><?php var_dump($e3 = $a3 && $b3);?></td>
          <td><?php var_dump($f3 = $a3 xor $b3);?></td>
        </tr>
        <tr>
          <td><?php $a4=1; echo $a4?></td>
          <td><?php $b4=1; echo $b4?></td>
          <td><?php var_dump($c4 = !$a4);?></td>
          <td><?php var_dump($d4 = $a4 || $b4);?></td>
          <td><?php var_dump($e4 = $a4 && $b4);?></td>
          <td><?php var_dump($f4 = $a4 xor $b4);?></td>
        </tr>
      </tbody>
    </table>

    <p>Логические операторы в основном  используются для работы с условными операторами и выражениями. Условные утверждения основаны на условиях. Кроме того, условие может быть выполнено или не может быть выполнено, поэтому результат условного оператора может быть истинным (true) или ложным (false). Имеются следующие логические операции:<br>&&: Возвращает true, если обе операции сравнения возвращают true, иначе возвращает false: $a && $b;<br>||: Возвращает true, если хотя бы одна операция сравнения возвращают true, иначе возвращает false: $a || $b; <br>!: Возвращает true, если операция сравнения возвращает false: !$a;<br>xor: Возвращает true, если только одно из значений равно true. Если оба равны true или ни одно из них не равно true, возвращает false: $a xor $b.</p>

    <h1>Таблица сравнения PHP: гибкое сравнение</h1>

    <table class ="table">
      <tbody>
        <tr>
          <th> </td>
          <th><?php $a1=true;echo "true";?></th>
          <th><?php $b1=false;echo "false";?></th>
          <th><?php $c1=1;echo "1";?></th>
          <th><?php $d1=0;echo "0";?></th>
          <th><?php $e1=-1;echo "-1";?></th>
          <th><?php $f1="1";echo '&quot1&quot';?></th>
          <th><?php $g1=null;echo "null";?></th>
          <th><?php $h1="php";echo '&quotphp&quot';?></th>
        </tr>
        <tr>
          <th><?php $i2=true; echo "true";?></th>
          <td><?php var_dump($a1 == $i2);?></td>
          <td><?php var_dump($b1 == $i2);?></td>
          <td><?php var_dump($c1 == $i2);?></td>
          <td><?php var_dump($d1 == $i2);?></td>
          <td><?php var_dump($e1 == $i2);?></td>
          <td><?php var_dump($f1 == $i2);?></td>
          <td><?php var_dump($g1 == $i2);?></td>
          <td><?php var_dump($h1 == $i2);?></td>
        </tr>
        <tr>
          <th><?php $j3=false;echo "false";?></th>
          <td><?php var_dump($a1 == $j3);?></td>
          <td><?php var_dump($b1 == $j3);?></td>
          <td><?php var_dump($c1 == $j3);?></td>
          <td><?php var_dump($d1 == $j3);?></td>
          <td><?php var_dump($e1 == $j3);?></td>
          <td><?php var_dump($f1 == $j3);?></td>
          <td><?php var_dump($g1 == $j3);?></td>
          <td><?php var_dump($h1 == $j3);?></td>
        </tr>
        <tr>
          <th><?php $k4=1;echo "1";?></th>
          <td><?php var_dump($a1 == $k4);?></td>
          <td><?php var_dump($b1 == $k4);?></td>
          <td><?php var_dump($c1 == $k4);?></td>
          <td><?php var_dump($d1 == $k4);?></td>
          <td><?php var_dump($e1 == $k4);?></td>
          <td><?php var_dump($f1 == $k4);?></td>
          <td><?php var_dump($g1 == $k4);?></td>
          <td><?php var_dump($h1 == $k4);?></td>
        </tr>
        <tr>
          <th><?php $l5=0;echo "0";?></th>
          <td><?php var_dump($a1 == $l5);?></td>
          <td><?php var_dump($b1 == $l5);?></td>
          <td><?php var_dump($c1 == $l5);?></td>
          <td><?php var_dump($d1 == $l5);?></td>
          <td><?php var_dump($e1 == $l5);?></td>
          <td><?php var_dump($f1 == $l5);?></td>
          <td><?php var_dump($g1 == $l5);?></td>
          <td><?php var_dump($h1 == $l5);?></td>
        </tr>
        <tr>
          <th><?php $m6=-1;echo "-1";?></th>
          <td><?php var_dump($a1 == $m6);?></td>
          <td><?php var_dump($b1 == $m6);?></td>
          <td><?php var_dump($c1 == $m6);?></td>
          <td><?php var_dump($d1 == $m6);?></td>
          <td><?php var_dump($e1 == $m6);?></td>
          <td><?php var_dump($f1 == $m6);?></td>
          <td><?php var_dump($g1 == $m6);?></td>
          <td><?php var_dump($h1 == $m6);?></td>
        </tr>
        <tr>
          <th><?php $n7="1";echo '&quot1&quot';?></th>
          <td><?php var_dump($a1 == $n7);?></td>
          <td><?php var_dump($b1 == $n7);?></td>
          <td><?php var_dump($c1 == $n7);?></td>
          <td><?php var_dump($d1 == $n7);?></td>
          <td><?php var_dump($e1 == $n7);?></td>
          <td><?php var_dump($f1 == $n7);?></td>
          <td><?php var_dump($g1 == $n7);?></td>
          <td><?php var_dump($h1 == $n7);?></td>
        </tr>
        <tr>
          <th><?php $o8=null;echo "null";?></th>
          <td><?php var_dump($a1 == $o8);?></td>
          <td><?php var_dump($b1 == $o8);?></td>
          <td><?php var_dump($c1 == $o8);?></td>
          <td><?php var_dump($d1 == $o8);?></td>
          <td><?php var_dump($e1 == $o8);?></td>
          <td><?php var_dump($f1 == $o8);?></td>
          <td><?php var_dump($g1 == $o8);?></td>
          <td><?php var_dump($h1 == $o8);?></td>
        </tr>
        <tr>
          <th><?php $p9="php";echo '&quotphp&quot';?></th>
          <td><?php var_dump($a1 == $p9);?></td>
          <td><?php var_dump($b1 == $p9);?></td>
          <td><?php var_dump($c1 == $p9);?></td>
          <td><?php var_dump($d1 == $p9);?></td>
          <td><?php var_dump($e1 == $p9);?></td>
          <td><?php var_dump($f1 == $p9);?></td>
          <td><?php var_dump($g1 == $p9);?></td>
          <td><?php var_dump($h1 == $p9);?></td>
        </tr>
      </tbody>
    </table>


    <h1>Таблица сравнения PHP: жесткое сравнение</h1>
    <table class ="table">
      <tbody>
        <tr>
          <th> </th>
          <th><?php $a1=true;echo "true";?></th>
          <th><?php $b1=false;echo "false";?></th>
          <th><?php $c1=1;echo "1";?></th>
          <th><?php $d1=0;echo "0";?></th>
          <th><?php $e1=-1;echo "-1";?></th>
          <th><?php $f1="1";echo '&quot1&quot';?></th>
          <th><?php $g1=null;echo "null";?></th>
          <th><?php $h1="php";echo '&quotphp&quot';?></th>
        </tr>
        <tr>
          <th><?php $i2=true; echo "true";?></th>
          <td><?php var_dump($a1 === $i2);?></td>
          <td><?php var_dump($b1 === $i2);?></td>
          <td><?php var_dump($c1 === $i2);?></td>
          <td><?php var_dump($d1 === $i2);?></td>
          <td><?php var_dump($e1 === $i2);?></td>
          <td><?php var_dump($f1 === $i2);?></td>
          <td><?php var_dump($g1 === $i2);?></td>
          <td><?php var_dump($h1 === $i2);?></td>
        </tr>
        <tr>
          <th><?php $j3=false;echo "false";?></th>
          <td><?php var_dump($a1 === $j3);?></td>
          <td><?php var_dump($b1 === $j3);?></td>
          <td><?php var_dump($c1 === $j3);?></td>
          <td><?php var_dump($d1 === $j3);?></td>
          <td><?php var_dump($e1 === $j3);?></td>
          <td><?php var_dump($f1 === $j3);?></td>
          <td><?php var_dump($g1 === $j3);?></td>
          <td><?php var_dump($h1 === $j3);?></td>
        </tr>
        <tr>
          <th><?php $k4=1;echo "1";?></th>
          <td><?php var_dump($a1 === $k4);?></td>
          <td><?php var_dump($b1 === $k4);?></td>
          <td><?php var_dump($c1 === $k4);?></td>
          <td><?php var_dump($d1 === $k4);?></td>
          <td><?php var_dump($e1 === $k4);?></td>
          <td><?php var_dump($f1 === $k4);?></td>
          <td><?php var_dump($g1 === $k4);?></td>
          <td><?php var_dump($h1 === $k4);?></td>
        </tr>
        <tr>
          <th><?php $l5=0;echo "0";?></th>
          <td><?php var_dump($a1 === $l5);?></td>
          <td><?php var_dump($b1 === $l5);?></td>
          <td><?php var_dump($c1 === $l5);?></td>
          <td><?php var_dump($d1 === $l5);?></td>
          <td><?php var_dump($e1 === $l5);?></td>
          <td><?php var_dump($f1 === $l5);?></td>
          <td><?php var_dump($g1 === $l5);?></td>
          <td><?php var_dump($h1 === $l5);?></td>
        </tr>
        <tr>
          <th><?php $m6=-1;echo "-1";?></th>
          <td><?php var_dump($a1 === $m6);?></td>
          <td><?php var_dump($b1 === $m6);?></td>
          <td><?php var_dump($c1 === $m6);?></td>
          <td><?php var_dump($d1 === $m6);?></td>
          <td><?php var_dump($e1 === $m6);?></td>
          <td><?php var_dump($f1 === $m6);?></td>
          <td><?php var_dump($g1 === $m6);?></td>
          <td><?php var_dump($h1 === $m6);?></td>
        </tr>
        <tr>
          <th><?php $n7="1";echo '&quot1&quot';?></th>
          <td><?php var_dump($a1 === $n7);?></td>
          <td><?php var_dump($b1 === $n7);?></td>
          <td><?php var_dump($c1 === $n7);?></td>
          <td><?php var_dump($d1 === $n7);?></td>
          <td><?php var_dump($e1 === $n7);?></td>
          <td><?php var_dump($f1 === $n7);?></td>
          <td><?php var_dump($g1 === $n7);?></td>
          <td><?php var_dump($h1 === $n7);?></td>
        </tr>
        <tr>
          <th><?php $o8=null;echo "null";?></th>
          <td><?php var_dump($a1 === $o8);?></td>
          <td><?php var_dump($b1 === $o8);?></td>
          <td><?php var_dump($c1 === $o8);?></td>
          <td><?php var_dump($d1 === $o8);?></td>
          <td><?php var_dump($e1 === $o8);?></td>
          <td><?php var_dump($f1 === $o8);?></td>
          <td><?php var_dump($g1 === $o8);?></td>
          <td><?php var_dump($h1 === $o8);?></td>
        </tr>
        <tr>
          <th><?php $p9="php";echo '&quotphp&quot';?></th>
          <td><?php var_dump($a1 === $p9);?></td>
          <td><?php var_dump($b1 === $p9);?></td>
          <td><?php var_dump($c1 === $p9);?></td>
          <td><?php var_dump($d1 === $p9);?></td>
          <td><?php var_dump($e1 === $p9);?></td>
          <td><?php var_dump($f1 === $p9);?></td>
          <td><?php var_dump($g1 === $p9);?></td>
          <td><?php var_dump($h1 === $p9);?></td>
        </tr>
      </tbody>
    </table>

    <p>Оператор == (гибкое сравнение) отличает два разных типа, если они разные, а оператор === (жесткое сравнение) выполняет "сравнение типов". Это означает, что он вернет true только в том случае, если оба операнда имеют один и тот же тип и одно и то же значение.<br>== сравнивает объекты, используя имя объекта и их значения. Если два объекта одного типа и имеют одинаковые значения элементов, $a == $b возвращает true.<br>=== сравнивает внутренний идентификатор объекта. Даже если члены равны, $a !== $b, если они не являются точно одним и тем же объектом.</p>
  </Body>
</html>