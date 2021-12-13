<?php
    require_once("modele/modele.class.php");
   

    class Controleur
    {
        private $unModele;

        public function __construct($db_host, $db_db, $db_user, $db_password)
        {
            $this->unModele = new Modele ($db_host, $db_db, $db_user, $db_password);
        }
        public function setTable ($uneTable){
            $this->unModele->setTable($uneTable);
        }
        public function getTable(){  
            return $this->unModele->getTable();
        }
        public function selectAll(){
            return $this->unModele->selectAll();
        }
        public function insert ($tab){
            //on controle ici les donnees du formulaire
            $this->unModele->insert($tab);
        }

        public function delete($where){
            $this->unModele->delete($where);
        }

        public function selectWhere($where){
            return $this->unModele->selectWhere($where);
        }

        public function update($tab, $where){
            $this->unModele->update($tab, $where);
        }

        public function selectSearch($tab, $mot){
            return $this->unModele->selectSearch($tab, $mot);
        }

        public function count()
        {
            return $this->unModele->count();
        }
        
    } 
?>