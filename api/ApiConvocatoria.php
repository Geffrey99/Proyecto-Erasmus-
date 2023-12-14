    <?php
    include_once '../helper/autocargar.php';

    class ApiConvocatoria
    {

        public static function getAll() {
             $ConvocatoriaRepos = new convocatoriaRepos('');
          
             $Convocatorias = array();
             $Convocatorias["items"] = array();

             $res = $ConvocatoriaRepos->obtenerConvocatorias();


            if (count($res) > 0) {

                foreach ($res as $Convocatoria) {
                    //array asociativo con los datos de la noticia
                    $item = array(
                        'Id_Convocatoria' => $Convocatoria['Id_Convocatoria'],
                        'movilidades' => $Convocatoria['movilidades'],
                        'tipo' => $Convocatoria['tipo'],
                        'fechaInicio_Solicitudes' => $Convocatoria['fechaInicio_Solicitudes'],
                        'fechaFin_Solicitudes' => $Convocatoria['fechaFin_Solicitudes'],
                        'fechaInicio_Pruebas' => $Convocatoria['fechaInicio_Pruebas'],
                        'fechaFin_Pruebas' => $Convocatoria['fechaFin_Pruebas'],
                        'Fecha_Lista_Provisional' => $Convocatoria['Fecha_Lista_Provisional'],
                        'Fecha_Lista_Definitiva' => $Convocatoria['Fecha_Lista_Definitiva'],
                        'codProyecto' => $Convocatoria['codProyecto'],
                        'destino' => $Convocatoria['destino'],

                    );
                    
                array_push($Convocatorias['items'], $item);
                    
                }
                
                //  $this->printJson($Convocatorias); // Eliminar 

                    $ConvocatoriasJSON = json_encode($Convocatorias);
                // Mostrar el valor de la variable en formato JSON
                    echo $ConvocatoriasJSON;
                return $Convocatorias;
            } else {

                // $this->error('gdfgdfgdfg');
            }
        }



        function getId($id_convocatoria)
        {

            $ConvocatoriaRepos = new convocatoriaRepos('');

            $Convocatoria = array();
            $Convocatoria["items"] = array();

            $res = $ConvocatoriaRepos->obtenerConvocatoria($id_convocatoria);

            if ($res != null) {

                $item = array(
                    'Id_Convocatoria' => $res['Id_Convocatoria'],
                    'movilidades' => $res['movilidades'],
                    'tipo' => $res['tipo'],
                    'fechaInicio_Solicitudes' => $res['fechaInicio_Solicitudes'],
                    'fechaFin_Solicitudes' => $res['fechaFin_Solicitudes'],
                    'fechaInicio_Pruebas' => $res['fechaInicio_Pruebas'],
                    'fechaFin_Pruebas' => $res['fechaFin_Pruebas'],
                    'Fecha_Lista_Provisional' => $res['Fecha_Lista_Provisional'],
                    'Fecha_Lista_Definitiva' => $res['Fecha_Lista_Definitiva'],
                    'codProyecto' => $res['codProyecto'],
                    'destino' => $res['destino'],

                );

                array_push($Convocatoria['items'], $item);

                $this->printJson($Convocatoria);
            } else {

                $this->error('NO HAY REGISTROS');
            }
        }


        function printJson($array)
        {
            echo '<code>' . json_encode($array) . '</code>';
        }

        function error($mensaje)
        {
            echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>';
        }
    }

    ?>