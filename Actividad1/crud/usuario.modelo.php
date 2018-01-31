<?php

class usuarioModelo
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=cine_colombia', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM boleta");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new boleta();

                $alm->__SET('Numero_Boleta', $r->Numero_Boleta);
                $alm->__SET('Cliente_Documento_Cliente', $r->Cliente_Documento_Cliente);
                $alm->__SET('Cartelera_Nombre_Pelicula', $r->Cartelera_Nombre_Pelicula);
                $alm->__SET('Sala_Numero_Sala', $r->Sala_Numero_Sala);
                $alm->__SET('Letra_Asiento', $r->Letra_Asiento);
                $alm->__SET('Numero_Columna_Asiento', $r->Numero_Columna_Asiento);
               
                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($Numero_Boleta)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM boleta WHERE Numero_Boleta = ?");
                      

            $stm->execute(array($Numero_Boleta));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new boleta();

                $alm->__SET('Numero_Boleta', $r->Numero_Boleta);
                $alm->__SET('Cliente_Documento_Cliente', $r->Cliente_Documento_Cliente);
                $alm->__SET('Cartelera_Nombre_Pelicula', $r->Cartelera_Nombre_Pelicula);
                $alm->__SET('Sala_Numero_Sala', $r->Sala_Numero_Sala);
                $alm->__SET('Letra_Asiento', $r->Letra_Asiento);
                $alm->__SET('Numero_Columna_Asiento', $r->Numero_Columna_Asiento);
            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($Numero_Boleta)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM boleta WHERE Numero_Boleta = ?");                      

            $stm->execute(array($Numero_Boleta));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(boleta $data)
    {
        try 
        {
            $sql = "UPDATE boleta SET 
                        
                        Cliente_Documento_Cliente           = ?,
                        Cartelera_Nombre_Pelicula            = ?, 
                        Sala_Numero_Sala            = ?,
                        Letra_Asiento          = ?,
                        Numero_Columna_Asiento               = ?
                        
                    WHERE Numero_Boleta = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    
                    $data->__GET('Cliente_Documento_Cliente'), 
                    $data->__GET('Cartelera_Nombre_Pelicula'),
                    $data->__GET('Sala_Numero_Sala'),
                    $data->__GET('Letra_Asiento'),
                    $data->__GET('Numero_Columna_Asiento'),

                    $data->__GET('Numero_Boleta')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(boleta $data)
    {
        try 
        {
        $sql = "INSERT INTO boleta (Numero_Boleta, Cliente_Documento_Cliente,Cartelera_Nombre_Pelicula,Sala_Numero_Sala,Letra_Asiento,Numero_Columna_Asiento) 
                VALUES (?, ?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('Numero_Boleta'), 
				$data->__GET('Cliente_Documento_Cliente'), 
                $data->__GET('Cartelera_Nombre_Pelicula'), 
                $data->__GET('Sala_Numero_Sala'),
                $data->__GET('Letra_Asiento'),
                $data->__GET('Numero_Columna_Asiento'),

                )
            );
			
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>