<?php
/**
 * Conexão com o banco de dados - Versão Segura (Docker)
 *
 * @author Breno Lessa / Refatorado por Paulo Quiroz
 */

    $host = getenv('DB_HOST');
    $user = getenv('DB_USER');
    $pass = getenv('MYSQL_ROOT_PASSWORD'); // Senha vem do ambiente
    $dbname = getenv('MYSQL_DATABASE');

    define('HOST', $host);
    define('USER', $user);
    define('PASS', $pass);
    define('DB', $dbname);

    // Tenta conectar
    $conecta = mysqli_connect(HOST, USER, PASS, DB);

    // Verifica se houve erro na conexão
    if (!$conecta) {
        die('Erro ao conectar: <strong>' . mysqli_connect_error() . '</strong>');
    }

    $db = mysqli_select_db($conecta, DB) or die ('Erro ao selecionar o banco: <strong>'.mysqli_error($conecta).'</strong>');

    # Configuração de caracteres
    mysqli_query($conecta, "SET NAMES 'utf8'");
    mysqli_query($conecta, 'SET character_set_connection=utf8');
    mysqli_query($conecta, 'SET character_set_client=utf8');
    mysqli_query($conecta, 'SET character_set_results=utf8');
?>