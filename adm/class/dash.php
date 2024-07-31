<?php


    require_once('conexao.php');


    class DashClass{



        public function QtdServico(){
            $query = "SELECT COUNT(*) AS idServico FROM servicos WHERE statusServico = 1";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetch();
            return $lista;
        }

         public function QtdBlog(){
             $query = "SELECT COUNT(*) AS idBlog FROM blogs  WHERE statusBlog = 1";
             $conn = Conexao::LigarConexao();
             $resultado = $conn->query($query);
             $listab = $resultado->fetch();
             return $listab;
         }

         public function QtdComoTrab(){
            $query = "SELECT COUNT(*) AS idTrabalho FROM trabalhos  WHERE statusTrabalho = 1";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($query);
            $listabb = $resultado->fetch();
            return $listabb;
        }

        public function QtdSobre(){
            $query = "SELECT COUNT(*) AS idSobre FROM tblsobre  WHERE statusSobre = 1";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($query);
            $listas = $resultado->fetch();
            return $listas;
        }

         public function QtdContato(){
             $query = "SELECT COUNT(*) AS idContato FROM contatos";
             $conn = Conexao::LigarConexao();
             $resultado = $conn->query($query);
             $listac = $resultado->fetch();
             return $listac;
         }




    }