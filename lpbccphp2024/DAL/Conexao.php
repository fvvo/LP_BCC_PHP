<?php
    namespace DAL;
    use \PDO;

    class Conexao{
        private static $dbNome = 'livraria';
        private static $deHost = 'localhost';
        private static $dbUsuario = 'root';
        private static $dbSenha = '';

        private static $cont = null;

        public static function conectar(){
            if(self::$cont == null){
                try{
                    self::$cont=new PDO("mysql:host=".self::$deHost.";dbname=".self::$dbNome,self::$dbUsuario,self::$dbSenha);
                }catch(\PDOException $exception){
                    die ($exception->getMessage());
                }

            }
            return self::$cont;
        }
        public static function desconectar(){
            self::$cont=null;
            return self::$cont;
        }

    }