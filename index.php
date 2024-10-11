<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>LVG - Manutenção para Centros Educacionais</title>
</head>

<body>

    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="./img/LVG.png" alt="Logo LVG" width="100px" height="140px"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#sobre">Sobre Nós</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="?page=listar">Depoimentos</a></li>
                    <li><a href="?page=cadastrar">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="home" style="height: 492px;">
        <div class="texto">
            <h1>Manutenção de Qualidade para Instituições de Ensino</h1>
            <p>Serviços especializados em manutenção predial, elétrica, hidráulica e climatização para garantir o funcionamento seguro e eficiente da sua instituição.</p>
            <button class="btn1"><a href="#servicos">CONHEÇA NOSSOS SERVIÇOS</a></button>
        </div>
        <div class="imagem">
            <img src="img/Reforma.jpeg" height="500px" alt="Manutenção em Centros Educacionais">
        </div>
    </section>

    <section id="sobre" class="sobre">
        <div class="container">
            <h2>Sobre a LVG</h2>
            <p>A LVG é especialista em soluções de manutenção para centros educacionais. Estamos aqui para garantir que suas instalações estejam sempre seguras e funcionando bem, priorizando qualidade, eficiência e a satisfação de todos.</p>
        </div>
    </section>

    <section id="servicos" class="servicos">
        <div class="container">
            <h2>Nossos Serviços</h2>
            <div class="listaServicos">
                <div class="servico">
                    <h3>Manutenção Predial</h3>
                    <p>Reparos e reformas em edificações para garantir a infraestrutura ideal para sua instituição.</p>
                </div>
                <div class="servico">
                    <h3>Serviços Elétricos</h3>
                    <p>Soluções elétricas completas, desde instalações até manutenções periódicas.</p>
                </div>
                <div class="servico">
                    <h3>Serviços Hidráulicos</h3>
                    <p>Instalação e manutenção de sistemas hidráulicos, garantindo o bom funcionamento da água e esgoto.</p>
                </div>
                <div class="servico">
                    <h3>Pintura</h3>
                    <p>Renovação visual do ambiente educacional com serviços de pintura profissional.</p>
                </div>
                <div class="servico">
                    <h3>Climatização</h3>
                    <p>Instalação e manutenção de sistemas de climatização para o conforto das suas instalações.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
            <div class="py-5">
                <?php 
                    include("config.php");
                    switch(@$_REQUEST["page"]) {
                        case "cadastrar":
                            include("cadastrar.php");
                        break;
                        case "editar":
                            include("editar.php");
                        break;
                        case "listar":
                            include("listar.php");
                        break;
                        case "salvar":
                            include("salvar.php");
                        break;
                        default:
                            include("cadastrar.php");
                    }
                ?>
            </div>
        </div>


    <footer>
        <div class="container">
            <p>&copy; 2024 LVG. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>
