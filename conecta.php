<?php
class Conexao {
    
    
    static function ConexaoBD(){
        $host = "localhost";
        $dbname = "company";
        $nome = "postgres";
        $senha = "123456";

        try {
            $conecta = new PDO("pgsql:host=$host; dbname=$dbname", $nome, $senha);
        } catch (PDOException $exp) {
            echo ("nao conectou, $exp");
        }

        return $conecta;
        
    }
    
}

class Insert {

    static function insertDepartamento($dnumero, $dnome,  $cpfGerente, $dataInicioGerente){
        
        $c =  Conexao::ConexaoBD();
        $sqlInsert = "INSERT INTO company.departamento VALUES ('$dnumero', '$dnome', '$cpfGerente', '$dataInicioGerente');COMMIT;";
        
        $c->query($sqlInsert);

        echo "Departamento inserido!!!<br>";
        
    }


    static function insertDependente($fcpf, $nomeDependente,  $sexo, $dataNasc, $parentesco){
        
        $c =  Conexao::ConexaoBD();
        $sqlInsert = "INSERT INTO company.dependente VALUES ('$fcpf', '$nomeDependente', '$sexo', '$dataNasc', '$parentesco');COMMIT;";
        
        $c->query($sqlInsert);

        echo "Dependente inserido!!!<br>";
        
    }


    static function insertFuncionario($cpf, $pnome, $minicial, $unome, $dataNasc, $endereco, $sexo, $salario, $cpfSupervisor, $dnr){
        
        $c =  Conexao::ConexaoBD();
        $sqlInsert = "INSERT INTO company.funcionario VALUES ('$cpf', '$pnome', '$minicial', '$unome', '$dataNasc', '$endereco', '$sexo', '$salario', '$cpfSupervisor', '$dnr');COMMIT;";
        
        $c->query($sqlInsert);

        echo "Funcionario inserido!!!<br>";
        
    }


    static function insertLocalDep($dlocal, $dnumero){
        
        $c =  Conexao::ConexaoBD();
        $sqlInsert = "INSERT INTO company.localizacao_dep VALUES ('$dlocal', '$dnumero');COMMIT;";
        
        $c->query($sqlInsert);

        echo "Local do departamento inserido!!!<br>";
        
    }


    static function insertProjeto($projNumero, $projNome,  $projLocal, $dnum){
        
        $c =  Conexao::ConexaoBD();
        $sqlInsert = "INSERT INTO company.projeto VALUES ('$projNumero', '$projNome',  '$projLocal', '$dnum');COMMIT;";
        
        $c->query($sqlInsert);

        echo "Projeto inserido!!!<br>";
        
    }


    static function insertTrabalhaEm($fcpf, $pnr, $horas){
        
        $c =  Conexao::ConexaoBD();
        $sqlInsert = "INSERT INTO company.trabalha_em VALUES ('$fcpf', '$pnr', '$horas');COMMIT;";
        
        $c->query($sqlInsert);
        
        echo "Local onde trabalha inserido!!!<br>";
    }

    
}   


?>