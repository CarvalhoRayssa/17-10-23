<?php
//texto do usuário ele iguala a post(texto usuário)//
$txt_usuario = trim(@$_POST['txt_usuario']);
//texto senho iguala a post(texto senha) nesse caso o md5 é para criptografar o código pois é uma senha//                                                                                                                                                           
$txt_senha = md5(trim(@$_POST['txt_senha']));

//ele entra e começa a sessão//
@session_start();
//ele declara a variável session como usuário e iguala a nulo//
$_SESSION['usuario'] = NULL;
//ele declara a variável session como senha e iguala a nulo//
$_SESSION['senha'] = NULL;
//se o texto do usuário e o texto senha forem diferentes de vazio...//
if ($txt_usuario && $txt_senha != '') {
    //a sessio usuário será igual a texto do usuário//
    $_SESSION['usuario'] = $txt_usuario;
    //a session senha será igual a texto da senha//
    $_SESSION['senha'] = $txt_senha;
}
//essa é a porta para ver o projeto//
$host = 'localhost';
//se o nome do servidor - o que você colocar na barra de pesquisa- for diferente de 'localhost'...//
if ($_SERVER['SERVER_NAME'] != 'localhost') {
    //se host 
    $host = 'otherhost.mysql.com';
}
//database//
$db = 'stopots';
//váriavel usuário//
$usuario = 'root';   
//váriavel senha//                                                                                       
$senha = '';

//tentativa//
try{
    $conexao = mysqli_connect($host, $usuario, $senha);
    echo 'Conexão bem sucedida.';
    //erro//
}catch (Exception $e){
    die('Não foi possível conectar ao banco de dados.Erro: ' . $e);
}

//conectivo das variáveis usuário e senha//
$conexao = mysqli_connect($host,$usuario,$senha);
//mysqli_slecionou a base de dados//
mysqli_select_db($conexao,$db);
?>