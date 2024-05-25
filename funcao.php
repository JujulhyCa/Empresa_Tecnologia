<?php

        function conectarBanco(){
            // string de conexão com o banco de dados
            $conexao = new PDO("mysql:host=localhost:3306; dbname=empresa_tecnologia", 
            "root", ""); 
            return $conexao;
        }

        /*function retornarProduto(){ // Vai usar isto em tarefa para conectar 
            try {
                $sql = "SELECT p.*, c.descricao as categoria FROM produto p INNER JOIN categoria c ON c.id = p.categoria_id";
                $conexao = conectarBanco();
                return $conexao->query($sql); // objeto.metodo em php usa-se a flechinha objeto->metodo
            } catch (Exception $e) {
                return 0;
            }
        }*/ 

        function inserirCliente($nome, $telefone, $email,){
            try {
            $sql = "INSERT INTO produto (nome, telefone, email)
            VALUES (:nome, :telefone, :email)"; // atribuindo apelidos às variáveis por segurança, para evitar injeção de SQL
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome); // bindValue troca nomes dos apelidos das variáveis e atribuem valores
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":email", $email);
            return $stmt->execute();

            } catch (Exception $e) {
                return 0;
            } # finally { } - finalizar a conexão com o banco de dados é opcional
        }

        /*function retornarCategorias(){
            try {
                $sql = "SELECT * FROM categoria";
                $conexao = conectarBanco();
                return $conexao->query($sql); // objeto.metodo em php usa-se a flechinha objeto->metodo
            } catch (Exception $e) {
                return 0;
            }
        }*/