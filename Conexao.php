<?php

    class Conexao{
        public function Conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','MercadoCrud');
                if($conn){
                    echo "<br><br>Conectado com sucesso!";
                    return $conn;
                }
            }catch(Except $erro)
            {
                echo $erro;
            }
        }//fim do conectar
    }//fim da conexão
?>