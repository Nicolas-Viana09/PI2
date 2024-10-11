<?php
    $sql = "SELECT * FROM pi_uc7_lvg WHERE id=".$_REQUEST["id"];
    $result = $conn->query($sql);
    $exibirRegistros = mysqli_fetch_array($result);
    $id = $exibirRegistros[0];
    $nome = $exibirRegistros[1];
    $email = $exibirRegistros[2];
    $mensagem = $exibirRegistros[3];

    $row = $result->fetch_object();

?>

<section id="contato" class="contato">
        <div class="container">
            <h2 class="fw-light text-center mt-3">Editar Cadastro:</h2>
<hr>
            <h2>Fale Conosco</h2>
            <p>Entre em contato para deixar um depoimento ou tirar suas dúvidas. Estamos à disposição para atender você.</p>
            <form action="?page=salvar" method="POST" class="container">
                <input type="hidden" name="acao" value="editar"/>
                <input type="hidden" name="id" value="<?php print $id; ?>" />

                <input type="text" name="nome" id="nome" value="<?php print $nome; ?>" placeholder="Seu Nome" required>
                <input type="email" name="email" id="email" value="<?php print $email; ?>" placeholder="Seu E-mail" required>
                <textarea type="text" name="mensagem" id="mensagem"  value="<?php print $mensagem; ?>" placeholder="Sua Mensagem" required></textarea>
                <button type="submit" class="btn1 btn2">Enviar Mensagem</button>
            </form>

            <div class="infoContato">
                <p><strong>Telefone:</strong> +55 (27) 99842-2090</p>
                <p><strong>E-mail:</strong> contato@lvg.com</p>
                <p><strong>Endereço:</strong> Rua Exemplo, 123 - Serra, ES</p>
                <button class="btn1 btn2"><a href="https://maps.google.com" target="_blank">Ver Localização</a></button>
            </div>
        </div>
    </section>