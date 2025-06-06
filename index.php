<?php
require_once 'php/verifica_login_auto.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProtecGuard</title>
    <link rel="stylesheet" href="./Styles/Styles.css">
</head>
<body>
    <header class="cabecalho-principal">
        <div class="container">
            <div class="logo-empresa">
                <a href="index.php"><img src="images/logo.png" alt="Imagem do Logo"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="#inicio">Home</a></li>
                    <li><a href="#divisor">Alarmes</a></li>
                    <li><a href="#divisor2">Câmeras</a></li>
                    <li><a href="#divisor3">Sistemas</a></li>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                        <li><a href="php/sair.php">Sair</a></li>
                    <?php else: ?>
                        <li><a href="login.html">Login</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
        <div class="divisor-diagonal"></div>
    </header>

    <main>
    <section id="inicio">
        <div class="fundo">
            <div class="texto-boas-vindas">
                <h2>JÁ PENSOU EM TER A MELHOR PORTARIA REMOTA DO BRASIL?</h2>
            </div>
            <div class="formulario-orcamento">
                <h2>Solicite um Orçamento</h2>
                <form>
                    <label for="nome-orcamento">Nome:</label>
                    <input type="text" id="nome-orcamento" name="nome-orcamento" required>
                    
                    <label for="email-orcamento">E-mail:</label>
                    <input type="email" id="email-orcamento" name="email-orcamento" required>
                    
                    <label for="telefone-orcamento">Telefone:</label>
                    <input type="tel" id="telefone-orcamento" name="telefone-orcamento" required>
                    
                    <label for="solucao-desejada">Solução desejada:</label>
                    <select class="texto-select" id="solucao-desejada" name="solucao-desejada" required>
                        <option value="">Selecione uma solução</option>
                        <option value="alarmes">Alarmes</option>
                        <option value="cameras">Câmeras</option>
                        <option value="sistemas">Sistemas de Segurança</option>
                    </select>
                    <form action="solicitar_orcamento.php" method="POST">
                    <button type="submit">Solicitar Orçamento</button>
                </form>
            </div>
        </div>
    </section>
    </main>

    <div id="divisor"></div>

    <section id="alarmes">
        <div class="fundo">
            <div class="container">
                <h2>Alarmes</h2>
                <div class="conteudo-alarmes">
                    <div class="caixa-imagem-alarme">
                        <img src="images/alarme.jpg" alt="Imagem do Alarme">
                    </div>
                    <p>Nossos alarmes são projetados para detectar intrusões e alertá-lo imediatamente. Com tecnologia de ponta, garantimos a máxima segurança e confiabilidade. Os sistemas de alarme da ProtecGuard oferecem proteção abrangente e são ideais para residências e empresas, proporcionando tranquilidade e segurança para você e sua família.<br><br>
                        <span class="link-alarmes"><a href="alarmes.html">Saiba mais</a></span>
                    </p>
                </div>
            </div>
        </div>
    </section>  

    <div id="divisor2"></div>

    <section id="cameras">
        <div class="fundo">
            <div class="container">
                <h2>Câmeras</h2>
                <div class="conteudo-cameras">
                    <p>Nossas câmeras de segurança são equipadas com a mais alta tecnologia, oferecendo imagens de alta definição e recursos avançados como visão noturna e detecção de movimento. Seja para residências ou empresas, nossas câmeras garantem a máxima proteção e monitoramento contínuo.<br><br>
                        <span class="link-cameras"><a href="cameras.html">Saiba mais</a></span>
                    </p>
                    <div class="caixa-imagem-camera">
                        <img src="images/camera.jpg" alt="Imagem de Câmera">
                    </div>
                </div>
            </div>
        </div>
    </section>   
    
    <div id="divisor3"></div>

    <section id="sistemas">
        <div class="fundo">
            <div class="container">
                <h2>Sistemas</h2>
                <div class="conteudo-sistemas">
                    <div class="caixa-imagem-sistema">
                        <img src="images/minha-imagem-sistemas.jpg" alt="Sistemas de segurança">
                    </div>
                    <p>Na ProtecGuard, oferecemos sistemas de segurança de última geração, projetados para fornecer a máxima proteção para sua residência ou empresa. Nossos sistemas são desenvolvidos com a mais alta tecnologia, garantindo segurança, confiabilidade e eficiência em todas as situações.<br><br>
                        <span class="link-sistemas"><a href="sistemas.html">Saiba mais</a></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="rodape">
            <p class="rodape-texto">© 2024 ProtecGuard. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>