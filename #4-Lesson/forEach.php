<?php
    $array = array(
        array('ism'=> 'Abdulla', 'familiya'=>'Allamardonov', 'yoshi'=>'18', 'jins'=>'erkak'),
        array('ism'=> 'Gulruh', 'familiya'=>'Boboqulova', 'yoshi'=>'18', 'jins'=>'erkak'),
        array('ism'=> 'Zamira', 'familiya'=>'Ergashev', 'yoshi'=>'18', 'jins'=>'erkak'),
        array('ism'=> 'Jo\'ra', 'familiya'=>'Haydarov', 'yoshi'=>'18', 'jins'=>'erkak'),
        array('ism'=> 'Qosim', 'familiya'=>'Normatov', 'yoshi'=>'18', 'jins'=>'erkak'),
    );

    $name = 'Sardor';
    function AddName(){
//        uzgaruchilarni global qilib beradi
        echo $GLOBALS['name'];
    }

    AddName();
?>

<table border="1" width="500" height="300" align="center">
    <?php foreach($array as $values){ ?>
        <tr>
            <td><?=$values['ism']; ?></td>
            <td><?=$values['familiya']; ?></td>
            <td><?=$values['yoshi']; ?></td>
            <td><?=$values['jins']; ?></td>
        </tr>
    <?php } ?>
</table>
