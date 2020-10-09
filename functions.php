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

    $pspro = "Programación de servicios";
    $hlc = "PHP";
    $datos = "Acceso a datos";
    $interfaces = "Desarrollo de interfaces";
    $sistemas = "Sistemas de gestión empresarial";
    $empresa = "Empresa";
    $android = "Programación multimedia";
    $asignaturas = array($pspro, $hlc, $datos, $interfaces, $sistemas, $empresa, $android);
    $arrayLength = count($asignaturas);



    ?> <p> <?php echo ($address); ?> </p>

<?php 
    print('<ul class="asignaturas">');
    print('<p><strong class="listaEj2">Asignaturas</strong></p>');
    for($i = 0; $i < $arrayLength ; $i++) {
    
        print('<li class="listaEj2">'.$asignaturas[$i].'</li>');

    }

    print('</ul>');


}

function horario() {

    $pspro = "Programación de servicios";
    $hlc = "PHP";
    $datos = "Acceso a datos";
    $interfaces = "Desarrollo de interfaces";
    $sistemas = "Sistemas de gestión empresarial";
    $empresa = "Empresa";
    $android = "Programación multimedia";

?>
<table>
    <thead>
        <tr>
            <th></th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>8.15 - 9.15</td>
            <td><?php echo $pspro; ?></td>
            <td><?php echo $hlc; ?></td>
            <td><?php echo $android; ?></td>
            <td><?php echo $interfaces; ?></td>
            <td><?php echo $datos; ?></td>
        </tr>
        <tr>
            <td>9.15 - 10.15</td>
            <td><?php echo $hlc; ?></td>
            <td><?php echo $interfaces; ?></td>
            <td><?php echo $android; ?></td>
            <td><?php echo $android; ?></td>
            <td><?php echo $interfaces; ?></td>
        </tr>
        <tr>
            <td>10.15 - 11.15</td>
            <td><?php echo $datos; ?></td>
            <td><?php echo $interfaces; ?></td>
            <td><?php echo $hlc; ?></td>
            <td><?php echo $android; ?></td>
            <td><?php echo $interfaces; ?></td>
        </tr>
        <tr>
            <td>11.15 - 11.45</td>
            <td colspan="5">Patio</td>
        </tr>
        <tr>
            <td>11.45 - 12.45</td>
            <td><?php echo $datos; ?></td>
            <td><?php echo $datos; ?></td>
            <td><?php echo $interfaces; ?></td>
            <td><?php echo $pspro; ?></td>
            <td><?php echo $sistemas; ?></td>
        </tr>
        <tr>
            <td>12.45 - 13.45</td>
            <td><?php echo $interfaces; ?></td>
            <td><?php echo $datos; ?></td>
            <td><?php echo $empresa; ?></td>
            <td><?php echo $empresa; ?></td>
            <td><?php echo $empresa; ?></td>
        </tr>
        <tr>
            <td>13.45 - 14.45</td>
            <td><?php echo $sistemas; ?></td>
            <td><?php echo $empresa; ?></td>
            <td><?php echo $sistemas; ?></td>
            <td><?php echo $sistemas; ?></td>
            <td><?php echo $pspro; ?></td>
        </tr>
    </tbody>
</table>

<?php

}

    function showNameAndStudies() {
        $nombre = "Jaume Sánchez Torres";
        $ciclo = "Grado superior en Desarrollo de Aplicaciones Multiplataforma";

        print('<p><strong>' . $nombre . '</strong></p>');
        print('<p>' . $ciclo . '</p>');

    }

?>