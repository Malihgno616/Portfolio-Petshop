<?php 

session_start();

$login_usuario = $_POST["user"];

?>

<div class="login"><a href="login.php"><?php 

if(isset($login_usuario)){
    echo "<a href='?route=logout'>Sair</a>";
} else {
    echo "Faça seu login";
}

?>

</a>  

<span>

<?php 
    if(isset($login_usuario)){
        echo "Bem-vindo, $login_usuario";
    }
?>

</span> 

</div>

<header>
    <nav>
        <a href="?route=home">Home</a>
        <a href="#">Contato</a>
        <a href="#">Agendas</a>
        <a href="#">Produtos</a>
        <a href="#">Acessórios</a>
        <a href="#">Petiscos</a>
        <button><i class="fas fa-bars"></i></button>
    </nav>
</header>