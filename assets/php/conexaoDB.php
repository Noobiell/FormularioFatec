<?php 

    class db{
        private $host = 'localhost';
        private $user = 'root';
        private $passw = '';
        private $datab = 'formulariofatec';

        public function conexaoDB(){
            $con = mysqli_connect($this->host, $this->user, $this->passw, $this->datab);

            mysqli_set_charset($con, 'utf8');

            if(mysqli_connect_errno()){
                echo "erro ao conectar com o banco".mysqli_connect_error();
            }

            return $con;
        }//Fim conexãoDB
    }//Fim classe db

?>