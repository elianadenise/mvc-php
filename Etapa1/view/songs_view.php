<!-- The Band Section -->
<div class='w3-container w3-content w3-center w3-padding-64' style='max-width:800px' id='band'>
    <h2 class='w3-wide'>Canciones</h2>
    <table class='w3-table'>
        <tr>
            <th>Cancion</th>
            <th>duracion</th>
            <th>reproducir</th>
        </tr>

        <?php
        foreach ($canciones as $cancion) {
            echo '<tr>
                                <td>' . $cancion['nombre'] . '</td>
                                <td>' . $cancion['duracion'] . '</td>
                                <td> Reproducir </td>
                            </tr>';
        }
        ?>
    </table>
</div>

<!-- End Page Content -->
</div>