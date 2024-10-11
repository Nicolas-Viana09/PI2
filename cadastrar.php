<section id="contato" class="contato">
        <div class="container">
            <h2>Fale Conosco</h2>
            <p>Entre em contato para deixar um depoimento ou tirar suas dúvidas. Estamos à disposição para atender você.</p>
            <form action="?page=salvar" method="POST">
                <input type="hidden" name="acao" value="cadastrar"/> 
                <input type="text" name="nome" id="nome" placeholder="Seu Nome" required>
                <input type="email" name="email" id="email" placeholder="Seu E-mail" required>
                <textarea type="text" name="mensagem" id="mensagem" placeholder="Sua Mensagem" required></textarea>
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
<script>
    $("#nome").change(function () {
        $(this).val($(this).val().toUpperCase());
    });
    </script>