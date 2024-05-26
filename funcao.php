<?php

        function conectarBanco(){
            // string de conexão com o banco de dados
            $conexao = new PDO("mysql:host=localhost:3306; dbname=empresa_tecnologia", 
            "root", ""); 
            return $conexao;
        }

        /*function retornarProduto(){ // Vai usar isto em TEREFA para conectar às outras tabelas
            try {
                $sql = "SELECT p.*, c.descricao as categoria FROM produto p INNER JOIN categoria c ON c.id = p.categoria_id";
                $conexao = conectarBanco();
                return $conexao->query($sql); // objeto.metodo em php usa-se a flechinha objeto->metodo
            } catch (Exception $e) {
                return 0;
            }
        }*/ 

        function inserirCliente($nome, $telefone, $email){
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

        function retornarCliente(){
            try {
                $sql = "SELECT * FROM cliente";
                $conexao = conectarBanco();
                return $conexao->query($sql); // objeto.metodo em php usa-se a flechinha objeto->metodo
            } catch (Exception $e) {
                return 0;
            }
        }

        function inserirFunci($nome, $cargo, $departamento){
            try {
            $sql = "INSERT INTO produto (nome, cargo, departamento)
            VALUES (:nome, :cargo, :departamento)"; // atribuindo apelidos às variáveis por segurança, para evitar injeção de SQL
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome); // bindValue troca nomes dos apelidos das variáveis e atribui valores
            $stmt->bindValue(":telefone", $cargo);
            $stmt->bindValue(":email", $departamento);
            return $stmt->execute();

            } catch (Exception $e) {
                return 0;
            } # finally { } - finalizar a conexão com o banco de dados é opcional
        }

        function retornarFunci(){
            try {
                $sql = "SELECT * FROM funcionario";
                $conexao = conectarBanco();
                return $conexao->query($sql); // objeto.metodo em php usa-se a flechinha objeto->metodo
            } catch (Exception $e) {
                return 0;
            }
        }

        function inserirProjeto($nome, $descricao, $data_inicio){
            try {
            $sql = "INSERT INTO produto (nome, descricao, data_inicio)
            VALUES (:nome, :descricao, :data_inicio)"; // atribuindo apelidos às variáveis por segurança, para evitar injeção de SQL
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome); // bindValue troca nomes dos apelidos das variáveis e atribuem valores
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":data_inicio", $data_inicio);
            return $stmt->execute();

            } catch (Exception $e) {
                return 0;
            } # finally { } - finalizar a conexão com o banco de dados é opcional
        }

        function retornarProjeto(){
            try {
                $sql = "SELECT * FROM projeto";
                $conexao = conectarBanco();
                return $conexao->query($sql); // objeto.metodo em php usa-se a flechinha objeto->metodo
            } catch (Exception $e) {
                return 0;
            }
        }