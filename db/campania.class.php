<?php
    include_once 'db.class.php';    

    class Campania extends Orm {

        protected static    
            $database = 'unicentro',
            $table = 'Gammer',
            $pk = 'id';

        public function validarMac($mac = '') {
            return $this::retrieveBymac_cliente($mac, Orm::FETCH_ONE);
        } 
        
        public function getNameUserByMac($mac = '') {
            $user = $this::retrieveBymac_cliente($mac, Orm::FETCH_ONE);
            if(isset($user)) {
                return $user->nombre;
            } else  {
                return '';
            }
            
        }
    }