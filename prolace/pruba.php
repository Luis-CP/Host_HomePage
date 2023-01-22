<?php
include './library/configServer.php';
include './library/consulSQL.php';
?>
<?php
                            $consulta=  ejecutarSQL::consultar("select * from aspirante where id_aspirante ");
                            $totalproductos = mysql_num_rows($consulta);
                            if($totalproductos>0){
                                while($fila=mysql_fetch_array($consulta)){
                                   echo '
                                  <div class="col-xs-12 col-sm-6 col-md-4">
                                       <div class="thumbnail">
                                       
                                         <div class="caption">
                                         <h3>'.$fila['id_aspirante'].'</h3>
                                         <h3>'.$fila['user_aspirante'].'</h3>
                                      
                                           <p class="text-center">
                      
                                               <button value="'.$fila['id_aspirante'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                   </div>     
                                   ';
                               }   
                            }else{
                                echo '<h2>No hay productos en esta categoria</h2>';
                            }  
                        ?>
                        </div>
                      </div><!-- Fin del contenedor de todos los productos -->
                      
                      <!-- ==================== Contenedores de categorias =============== -->
                      <?php