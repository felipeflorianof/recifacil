<?php
    if(isset($_POST['submit_recycling_center'])){

        include_once('config.php');

        $cnpj = $_POST['cnpj'];
        $nome = $_POST['nome'];
        $senhaponto = $_POST['senhaponto'];
        $emailponto = $_POST['emailponto'];
        $telefone = $_POST['telefone'];
        $fundacao = $_POST['fundacao'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        

        $resultponto = mysqli_query($conexao, "INSERT INTO recycling_center(cnpj, nome, senhaponto, emailponto, telefone, fundacao, cep, cidade, estado, bairro, rua, numero, complemento) VALUES ('$cnpj','$nome','$senhaponto','$emailponto','$telefone','$fundacao', '$cep', '$cidade', '$estado', '$bairro', '$rua', '$numero', '$complemento')");

        header('Location: loginRecycling_Center.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylecadastroponto.css">
    <link  rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
    
    <title>Cadastro</title>
</head>
<body>
<div class="saida">
        <div class="sair">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
            </a>
        </div>
    </div>
 <div class="box">
    <form action="cadastroponto.php" method="POST" id="form">
         <div class="container">
            <div class="dividir">
            <div id="parte">
            <h1>Cadastro</h1>
            <legend>Ponto de Coleta</legend>
            <br>
            <br>
            <div class="input">
                <input type="text" name="nome" id="nome" class="inputUser required" oninput="nameValidate()">
                <label for="nome" class="labelinput">Nome da Empresa</label>
                <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
            </div>
            <br>
            <br>
        
            <div class="input">
                <input type="number" name="cnpj" id="cnpj" class="inputUser" >
                <label for="cnpj" class="labelinput">CNPJ</label>
            </div>
            <br>
            <br>
            
            <div class="input">
                <input type="email" name="emailponto" id="email" class="inputUser  required" oninput="emailValidate()">
                <label for="email" class="labelinput">Email</label>
                <span class="span-required">Digite um E-mail válido</span>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="password" name="senhaponto" id="senha" class="inputUser  required" oninput="mainPasswordValidate()">
                <label for="senha" class="labelinput">Senha</label>
                <span class="span-required">Digite uma Senha de no mínimo 8 caracteres</span>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="password" name="confirmarsenha" id="confirmarsenha" class="inputUser required" oninput="comparePassword()">
                <span class="span-required">Senhas devem ser compatíveis</span>
                <label for="senha" class="labelinput">Confirmar Senha</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="tel" name="telefone" id="telefone" class="inputUser">
                <label for="telefone" class="labelinput">Telefone</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="date" name="fundacao" id="fundacão" class="inputUser">
                <label for="fundacao" class="labeldata">Data de fundação</label>
            </div>
            <br>
            </div>

            <div id="content">
            <p>Quais materiais você recicla?</p>
            <br>
            <div class="alinhamento">
            <input type="checkbox" id="plastico" name="material" value="Plastico">
            <label for="Plastico"><img src="/recifacil/img/Plástico.png"></label>
            <br>
            <br>
            
            <input type="checkbox" id="plastico" name="material" value="Metal">
            <label for="Plastico"><img src="/recifacil/img/Metal.png"></label>
            <br>
            <br>
            
            <input type="checkbox" id="plastico" name="material" value="vidro">
            <label for="Plastico"><img src="/recifacil/img/vidro.png"></label>
            <br>
            <br>
            
            <input type="checkbox" id="plastico" name="material" value="papel">
            <label for="Plastico"><img src="/recifacil/img/Papel.png"></label>
            <br>
            <br>
            <input type="checkbox" id="plastico" name="material" value="E-lixo">
            <label for="Plastico"><img src="/recifacil/img/E-lixo.png"></label>
            </div>
            <br>
            <br>
            <br>
            <div class="input">
                <input type="number" name="cep" id="cep" class="inputUser required" oninput="cepValidate()">
                <label for="cep" class="labelinput">CEP</label>
                <span class="span-required">Informe um CEP válido</span>
            </div>
            <br>
            <div class="input">
                <input type="text" name="estado" id="estado" class="inputUser">
                <label for="estado" class="labelinput">Estado</label>
            </div>
            <br>
            <div class="input">
                <input type="text" name="cidade" id="cidade" class="inputUser">
                <label for="cidade" class="labelinput">Cidade</label>
            </div>
            <br>
            <div class="input">
                <input type="text" name="bairro" id="bairro" class="inputUser">
                <label for="bairro" class="labelinput">Bairro</label>
            </div>
            <br>
            <div class="input">
                <input type="text" name="rua" id="rua" class="inputUser">
                <label for="rua" class="labelinput">Rua</label>
            </div>
            <br>
            <div class="input">
                <input type="text" name="numero" id="numero" class="inputUser">
                <label for="Numero" class="labelinput">Número</label>
            </div>
            <br>
            <div class="input">
                <input type="text" name="complemento" id="complemento" class="inputUser">
                <label for="complemento" class="labelinput">Complemento</label>
            </div>
            <br>
            <input type="submit" name="submit_recycling_center" id="submit_recycling_center"> 
            <br>
            </div>
            </div>
            <div class="termos">
            <input type="radio" name="radio" id="radio">
            <a href="#" id="concordo">Concordo com os termos de serviço</a>
            </div>
        </div>

 </div>
 <div class="dialog">
    <dialog>
       <h2>Política Privacidade</h2> 
       <p>A sua privacidade é importante para nós. É política do Recifácil respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site <a href=https://github.com/felipeflorianof/RecifacilProject>Recifácil</a>, e outros sites que possuímos e operamos.</p> <p>Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado. </p> <p>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.</p> <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p> <p>O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas <a href='https://privacidade.me/' target='_BLANK'>políticas de privacidade</a>. </p> <p>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</p> <p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contato conosco.</p> <h2>Política de Cookies Recifácil</h2> <h3>O que são cookies?</h3> <p>Como é prática comum em quase todos os sites profissionais, este site usa cookies, que são pequenos arquivos baixados no seu computador, para melhorar sua experiência. Esta página descreve quais informações eles coletam, como as usamos e por que às vezes precisamos armazenar esses cookies. Também compartilharemos como você pode impedir que esses cookies sejam armazenados, no entanto, isso pode fazer o downgrade ou 'quebrar' certos elementos da funcionalidade do site.</p> <h3>Como usamos os cookies?</h3> <p>Utilizamos cookies por vários motivos, detalhados abaixo. Infelizmente, na maioria dos casos, não existem opções padrão do setor para desativar os cookies sem desativar completamente a funcionalidade e os recursos que eles adicionam a este site. É recomendável que você deixe todos os cookies se não tiver certeza se precisa ou não deles, caso sejam usados ​​para fornecer um serviço que você usa.</p> <h3>Desativar cookies</h3> <p>Você pode impedir a configuração de cookies ajustando as configurações do seu navegador (consulte a Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativação de cookies afetará a funcionalidade deste e de muitos outros sites que você visita. A desativação de cookies geralmente resultará na desativação de determinadas funcionalidades e recursos deste site. Portanto, é recomendável que você não desative os cookies.</p> <h3>Cookies que definimos</h3> <ul> <li> Cookies relacionados à conta<br><br> Se você criar uma conta conosco, usaremos cookies para o gerenciamento do processo de inscrição e administração geral. Esses cookies geralmente serão excluídos quando você sair do sistema, porém, em alguns casos, eles poderão permanecer posteriormente para lembrar as preferências do seu site ao sair.<br><br> </li> <li> Cookies relacionados ao login<br><br> Utilizamos cookies quando você está logado, para que possamos lembrar dessa ação. Isso evita que você precise fazer login sempre que visitar uma nova página. Esses cookies são normalmente removidos ou limpos quando você efetua logout para garantir que você possa acessar apenas a recursos e áreas restritas ao efetuar login.<br><br> </li> <li> Cookies relacionados a boletins por e-mail<br><br> Este site oferece serviços de assinatura de boletim informativo ou e-mail e os cookies podem ser usados ​​para lembrar se você já está registrado e se deve mostrar determinadas notificações válidas apenas para usuários inscritos / não inscritos.<br><br> </li> <li> Pedidos processando cookies relacionados<br><br> Este site oferece facilidades de comércio eletrônico ou pagamento e alguns cookies são essenciais para garantir que seu pedido seja lembrado entre as páginas, para que possamos processá-lo adequadamente.<br><br> </li> <li> Cookies relacionados a pesquisas<br><br> Periodicamente, oferecemos pesquisas e questionários para fornecer informações interessantes, ferramentas úteis ou para entender nossa base de usuários com mais precisão. Essas pesquisas podem usar cookies para lembrar quem já participou numa pesquisa ou para fornecer resultados precisos após a alteração das páginas.<br><br> </li> <li> Cookies relacionados a formulários<br><br> Quando você envia dados por meio de um formulário como os encontrados nas páginas de contacto ou nos formulários de comentários, os cookies podem ser configurados para lembrar os detalhes do usuário para correspondência futura.<br><br> </li> <li> Cookies de preferências do site<br><br> Para proporcionar uma ótima experiência neste site, fornecemos a funcionalidade para definir suas preferências de como esse site é executado quando você o usa. Para lembrar suas preferências, precisamos definir cookies para que essas informações possam ser chamadas sempre que você interagir com uma página for afetada por suas preferências.<br> </li> </ul> <h3>Cookies de Terceiros</h3> <p>Em alguns casos especiais, também usamos cookies fornecidos por terceiros confiáveis. A seção a seguir detalha quais cookies de terceiros você pode encontrar através deste site.</p> <ul> <li> Este site usa o Google Analytics, que é uma das soluções de análise mais difundidas e confiáveis ​​da Web, para nos ajudar a entender como você usa o site e como podemos melhorar sua experiência. Esses cookies podem rastrear itens como quanto tempo você gasta no site e as páginas visitadas, para que possamos continuar produzindo conteúdo atraente. </li> </ul> <p>Para mais informações sobre cookies do Google Analytics, consulte a página oficial do Google Analytics.</p> <ul> <li> As análises de terceiros são usadas para rastrear e medir o uso deste site, para que possamos continuar produzindo conteúdo atrativo. Esses cookies podem rastrear itens como o tempo que você passa no site ou as páginas visitadas, o que nos ajuda a entender como podemos melhorar o site para você.</li> <li> Periodicamente, testamos novos recursos e fazemos alterações subtis na maneira como o site se apresenta. Quando ainda estamos testando novos recursos, esses cookies podem ser usados ​​para garantir que você receba uma experiência consistente enquanto estiver no site, enquanto entendemos quais otimizações os nossos usuários mais apreciam.</li> <li> À medida que vendemos produtos, é importante entendermos as estatísticas sobre quantos visitantes de nosso site realmente compram e, portanto, esse é o tipo de dados que esses cookies rastrearão. Isso é importante para você, pois significa que podemos fazer previsões de negócios com precisão que nos permitem analizar nossos custos de publicidade e produtos para garantir o melhor preço possível.</li> </ul> <h3>Compromisso do Usuário</h3> <p>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Recifácil oferece no site e com caráter enunciativo, mas não limitativo:</p> <ul> <li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</li> <li>B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, ou casas de apostas, jogos de sorte e azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li> <li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Recifácil, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li> </ul> <h3>Mais informações</h3> <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.</p> <p>Esta política é efetiva a partir de <strong>Dec</strong>/<strong>2022</strong>.
       </p>
       <div class="divMid">
       <button class="btn">Voltar</button>
       </div>
    </dialog>
</div>
<script src="/recifacil/JS/scriptcadastroponto.js"></script>
</body>
</html>