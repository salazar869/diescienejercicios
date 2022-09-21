<!--=====================================
MODAL VER EVENTO
======================================-->

    <!-- The Modal -->
    <div class="modal" id="myModal" title="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Evento</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <?php
                    @session_start();
                    
                    $id = filter_input(INPUT_GET, 'id_eventos');
                        include "../modelo/eventosModelo.php";
                    $eventosModelo = new eventosModelo();
                    $result = $eventosModelo->mostrar($id);
                    while ($fila = mysqli_fetch_array($result)) {
                        if ($fila != NULL) {                             

//                                              Button to Open the Modal 
                        echo '<tr style="width: 680px">
                                            <td style="width: 150px"> <img src="' . $fila['foto'] . '" class="rounded float-left" width="80" height="80" ></td>
                                            <td style="width: 150px" >' . $fila['nombreEvento'] . '</td>
                                            <td style="width: 363px" >' . $fila['descripcionEvento'] . '</td>   
                                               
                </tr>';
                    }}
                    
               
              
                    ?>
                    
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>