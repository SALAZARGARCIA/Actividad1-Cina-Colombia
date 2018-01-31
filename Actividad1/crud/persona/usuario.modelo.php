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

            $stm = $this->pdo->prepare("SELECT * FROM persona");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new persona();

                $alm->__SET('Documento_Pesona',   $r->Documento_Pesona);
                $alm->__SET('Nombre_Persona',     $r->Nombre_Persona);
                $alm->__SET('Apellido_Persona',    $r->Apellido_Persona);
                $alm->__SET('contrasena',      $r->contrasena);
                
                
               
                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($Documento_Pesona)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM persona WHERE Documento_Pesona = ?");
                      

            $stm->execute(array($Documento_Pesona));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new persona();

                $alm->__SET('Documento_Pesona',   $r->Documento_Pesona);
                $alm->__SET('Nombre_Persona',     $r->Nombre_Persona);
                $alm->__SET('Apellido_Persona',   $r->Apellido_Persona);
                $alm->__SET('contrasena',         $r->contrasena);
                
                
            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($Documento_Pesona)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM persona WHERE Documento_Pesona = ?");                      

            $stm->execute(array($Documento_Pesona));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(persona $data)
    {
        try 
        {
            $sql = "UPDATE persona SET 
                        
                        Nombre_Persona         = ?,
                        Apellido_Persona        = ?, 
                        contrasena             = ?
                        
                        
                    WHERE Documento_Pesona = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    
                    $data->__GET('Nombre_Persona'), 
                    $data->__GET('Apellido_Persona'),
                    $data->__GET('contrasena'),
                   

                    $data->__GET('Documento_Pesona')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(persona $data)
    {
        try 
        {
        $sql = "INSERT INTO persona (Documento_Pesona, Nombre_Persona,Apellido_Persona, contrasena) 
                VALUES (?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('Documento_Pesona'), 
				$data->__GET('Nombre_Persona'), 
                $data->__GET('Apellido_Persona'), 
                $data->__GET('contrasena')
                

                )
            );
			
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>