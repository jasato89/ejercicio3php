<?php



function showName($name, $studies)
{
?>
    <p><b><?php echo ($name); ?></b></p>
    <p><?php echo ($studies); ?></p>
<?php
}


function printInvertedPyramid($n)
{

    for ($i = 1; $i <= $n; $i++) {

        //Printing spaces
        for ($j = 1; $j < $i; $j++) {

            echo " ";
        }

        // Printing asterisks 
        for ($j = 1; $j <= ($n * 2 - (2 * $i - 1)); $j++) {

            if (
                $i == 1 || $j == 1 ||
                $j == ($n * 2 - (2 * $i - 1))
            ) {
                echo "*";
            } else {
                echo " ";
            }
        }

        // Next line 
        echo "\n";
    }
}


function printAddressAndSubjects($address) {
    $asignaturas = array('PHP', 'Desarrollo Aplicaciones Multimedia','F', 'PSPRO', 'FOL');
    $arrayLength = count($asignaturas);


    ?> <p> <?php echo ($address); ?> </p>
    
    <?php 
    print('<ul class="asignaturas">');
    print('<p><strong>Asignaturas</strong></p>');
    for($i = 0; $i < $arrayLength ; $i++) {
    
        print('<li class = "listaEj2">'.$asignaturas[$i].'</li>');

    }

    print('</ul>');


}
