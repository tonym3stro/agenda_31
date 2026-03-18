<?php
include('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "<script>confirm('Deseja realmente exluir este contato?');</script>";


    $sql = "UPDATE contatos SET nome='$nome', endereco='$endereco',
    telefone='$fone' WHERE id=$id";

    if (mysqli_query($conexao, $sql)) {
        echo "Contato excluido com sucesso!";
        echo "<br> <a href='index.php'>Voltar</a>";
        exit;
    } else {
        echo "Erro ao ecluir." . mysqli_error($conexao);
    }
}
?>

<script>
    function confirmar() {
        if (confirm("Quer realmente excluir?")) {

        } else {

        }
    }
</script>