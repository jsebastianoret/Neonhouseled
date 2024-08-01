<?php
    
    class Db {
        
        private static $instancia = false;
        private static $conexion = null;

        private static function conexion () {
            self::$conexion = new mysqli(HOST, NAME, PASS, DB);
        }

        // Propósito: Ejecuta una consulta SQL y devuelve el conjunto de resultados si la ejecución fue exitosa.
        // Uso: Puede ser utilizado para consultas que esperan obtener un conjunto de resultados, como consultas SELECT.
        public static function queryd($query, $params = []) {
            if (self::$instancia == false) {
                self::$instancia = true;
                self::conexion();
            }
    
            try {
                $stmt  = self::$conexion->prepare($query);
    
                if (count($params) > 0) {
                    $types = str_repeat("s", count($params));
                    $stmt->bind_param($types, ...$params);
                }
    
                if ($stmt->execute()) {
                    $result = $stmt->get_result();
                    $stmt->close();
                    return [null, $result];
                }
            } catch (\Throwable $th) {
                return [$th->getMessage(), null];
            }
    
            return ["Error desconocido", null];
        }

        // Propósito: Ejecuta una consulta SQL y devuelve el objeto statement ($stmt) para manejar manualmente el resultado.
        // Uso: Útil cuando necesitas procesar manualmente el resultado de la consulta, por ejemplo, para operaciones que no esperan un conjunto de resultados, como actualizaciones (UPDATE, DELETE, etc.).
        public static function query( $query, $params = [] ){

            if( self::$instancia == false ) {
                self::$instancia = true;
                self::conexion();
            }

            try { 
                $stmt  = self::$conexion->prepare($query);
                
                if( count( $params ) ) {
                    $types = str_repeat("s", count($params));
                    $stmt->bind_param($types, ...$params);
                }

                if($stmt->execute()) {
                    return [null, $stmt];
                }
            } catch (\Throwable $th) {
                return [$th->getMessage(), null];
            }
        }
        
        // Propósito: Ejecuta una consulta SQL y devuelve el valor del campo rol de la primera fila del resultado.
        // Uso: Especialmente útil cuando necesitas obtener un valor específico de una consulta, por ejemplo, para autenticación o verificación de roles de usuarios.
        public static function querys($query, $params = []) {
            if (self::$instancia == false) {
                self::$instancia = true;
                self::conexion();
            }
        
            try {
                $stmt = self::$conexion->prepare($query);
        
                if (count($params)) {
                    $types = str_repeat("s", count($params));
                    $stmt->bind_param($types, ...$params);
                }
        
                if ($stmt->execute()) {
                    $result = $stmt->get_result(); 
                    $row = $result->fetch_assoc(); 
        
                    if ($row) {
                        return [null, $row['rol']];
                    } else {
                        return [null, null]; 
                    }
                }
            } catch (\Throwable $th) {
                return [$th->getMessage(), null];
            }
        }


        public static function checkConnection() {
            self::conexion(); // Asegúrate de que la conexión esté establecida
        
            $query = "SELECT 1";
            $result = self::$conexion->query($query);
        
            if ($result) {
                echo "¡Conexión exitosa!";
            } else {
                echo "Error al ejecutar la consulta: " . self::$conexion->error;
            }
        }
        
    }

    