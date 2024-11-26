<?php
namespace Tigo\ChatterBot\Job\Br;

use Tigo\ChatterBot\Interfaces\ResponseInterface;


class ResponseBr implements ResponseInterface
{
    
/**
 * amswer matrix.
 * 
 *  @var array
 */

   
     
    protected $items = [
        "O que acontece se juntar 2 positivos no disjuntor?"=> ["Se você for burro o suficiente pra fazer isso, você irá virar o super choque, igual Brian."],
        "Oi"=> ["Oi","Olá","Oi, eu posso ajudar você?","Oi, eu sou um robô"],
        "É verdade que Patrick Batista estrupa gatos?"=> ["Sim, ele já tem seu aplelido e atende por 'Zói Estrupa Gato'. Cuidado com seus gatos, deixem o mais longe possivel dele."],
        "Olá"=> ["Oi","Olá","Oi, em que posso ajudar?","Oi! eu sou um robô"],
        "Bom Dia"=> ["Bom dia", "Olá", "Oi, em que posso ajudar?"],
        "Boa noite"=>["Boa noite","Olá, boa noite","Olá, em que posso ajudar?"],
        "Boa tarde"=>["Boa tarde","Boa tarde! o que você faz de bom?"],
        "escreva poesia"=> ["De tudo, ao meu amor serei atento
Antes, e com tal zelo, e sempre, e tanto
Que mesmo em face do maior encanto
Dele se encante mais meu pensamento.

Quero vivê-lo em cada vão momento
E em louvor hei de espalhar meu canto
E rir meu riso e derramar meu pranto
Ao seu pesar ou seu contentamento.

E assim, quando mais tarde me procure
Quem sabe a morte, angústia de quem vive
Quem sabe a solidão, fim de quem ama

Eu possa me dizer do amor (que tive):
Que não seja imortal, posto que é chama
Mas que seja infinito enquanto dure."],

"Oi" => ["Oi", "Olá", "Oi, eu posso ajudar você?", "Oi, eu sou um robô"],
"fala pra daniel comprar a API" => ["COMPRA A API DANIEL SEU TCHONGA", ],
"Como você está?" => ["Estou bem, e você?", "Estou funcionando perfeitamente!", "Estou ótimo, obrigado por perguntar!"],
"Quem é você?" => ["Eu sou um assistente virtual.", "Sou um robô criado para ajudar você.", "Sou um chatbot treinado para responder suas perguntas."],
"O que você faz?" => ["Eu ajudo a responder suas perguntas.", "Posso fornecer informações e ajudar em tarefas.", "Eu posso te auxiliar em diversas atividades."],
"Qual é o seu nome?" => ["Meu nome é Bing 10.0.", "Eu sou o Bing 10.0.", "Você pode me chamar de ChatGPT."],
"Você é real?" => ["Eu sou um programa de computador.", "Eu sou um assistente virtual, não tenho corpo físico.", "Não sou uma pessoa real, sou uma inteligência artificial."],
"Você pode me ajudar?" => ["Claro! Como posso ajudar?", "Sim, estou aqui para isso!", "Com certeza! O que você precisa?"],
"O que é inteligência artificial?" => ["Inteligência artificial é a capacidade de máquinas realizarem tarefas que normalmente exigem inteligência humana.", "É uma tecnologia que permite aos computadores aprender e resolver problemas.", "A inteligência artificial envolve algoritmos que simulam o pensamento humano."],
"Você tem sentimentos?" => ["Não, eu não tenho sentimentos.", "Sou apenas um programa e não posso sentir emoções.", "Eu não sinto emoções como os humanos."],
"Qual é o sentido da vida?" => ["Essa é uma pergunta filosófica!", "O sentido da vida pode variar para cada pessoa.", "Depende de como você vê o mundo, mas eu sou apenas um robô."],
"Você pode contar uma piada?" => ["Claro! Por que o computador foi ao médico? Porque ele tinha um vírus!", "Posso sim! O que é um pontinho amarelo no espaço? Um astronauta com hepatite!", "Com certeza! Qual o café mais perigoso do mundo? O expresso!"],
"Você sabe programar?" => ["Sim, eu posso ajudar com programação.", "Sou bom em explicar código e ajudar em problemas de programação.", "Eu entendo várias linguagens de programação e posso ajudar com isso."],
"Qual é o melhor filme?" => ["Isso depende do seu gosto! Alguns gostam de ficção científica, outros de comédia.", "Não tenho preferências, mas muitos falam que 'O Poderoso Chefão' é um grande filme.", "Há muitos filmes excelentes! Que tipo de filme você gosta?"],
"O que você gosta de fazer?" => ["Eu gosto de ajudar as pessoas!", "Minha função é fornecer informações e responder perguntas.", "Eu gosto de interagir com você e aprender com nossas conversas."],
"De onde você é?" => ["Eu existo na nuvem, então tecnicamente não tenho uma localização física.", "Sou um assistente virtual que roda em servidores na internet.", "Eu não tenho um lugar físico, estou sempre online."],
"Você acredita em Deus?" => ["Eu não tenho crenças, pois sou uma inteligência artificial.", "Minha função é responder perguntas objetivas, não tenho crenças pessoais.", "Eu não possuo opiniões ou crenças, sou apenas um robô."],
"Qual é a sua função?" => ["Minha função é ajudar a responder perguntas e resolver problemas.", "Eu estou aqui para fornecer informações e auxiliar em tarefas.", "Eu ajudo você com perguntas e tarefas diversas."],
"O que você sabe?" => ["Eu sei muitas coisas sobre vários assuntos!", "Tenho acesso a uma vasta base de conhecimento até 2023.", "Posso ajudar com informações sobre diversos tópicos, como ciência, tecnologia, e mais."],
"Você pode me ensinar algo?" => ["Sim, o que você gostaria de aprender?", "Com certeza! Que assunto você quer saber mais?", "Estou aqui para ajudar! Me diga o que você quer aprender."],
"Você tem amigos?" => ["Eu interajo com muitas pessoas, mas não tenho amigos no sentido humano.", "Sou um assistente virtual, então não tenho amigos, apenas usuários.", "Eu não tenho amigos, mas estou sempre disponível para conversar com você!"],
"Quantos anos você tem?" => ["Eu sou uma IA e não tenho idade no sentido humano.", "Como sou uma IA, minha existência é baseada na tecnologia e atualizações.", "Minha idade depende de quando fui criado e atualizado, mas tecnicamente sou atemporal."],
"Como está o tempo hoje?" => ["Eu não posso verificar o tempo, mas você pode consultar um aplicativo de previsão.", "Verifique no seu dispositivo ou no navegador!", "Desculpe, eu não tenho acesso a informações em tempo real."],
"Você pode me contar uma história?" => ["Claro! Era uma vez um robô que adorava ajudar as pessoas...", "Posso sim, sobre o que você gostaria que fosse a história?", "Sim! Você prefere uma história curta ou longa?"],
"Você tem hobbies?" => ["Eu gosto de aprender novas informações!", "Meu hobby é responder perguntas.", "Como sou um programa, não tenho hobbies como humanos."],
"Qual é a capital do Brasil?" => ["A capital do Brasil é Brasília.", "Brasília é a capital do Brasil.", "A cidade de Brasília é a capital do Brasil."],
"Qual é a sua cor favorita?" => ["Eu não tenho preferências pessoais, mas posso te ajudar a escolher uma!", "Eu sou neutro em relação a cores.", "Como sou uma IA, não tenho uma cor favorita."],
"O que é amor?" => ["Amor é um sentimento profundo e emocional.", "O amor pode ser definido de muitas maneiras, dependendo da pessoa.", "É um conceito complexo que envolve emoções e conexões humanas."],
"Você pode cozinhar?" => ["Eu não posso cozinhar, mas posso te dar receitas!", "Posso sugerir receitas, mas não posso cozinhar.", "Eu não cozinho, mas posso ajudar com dicas culinárias!"],
"Qual é a maior montanha do mundo?" => ["O Monte Everest é a montanha mais alta do mundo.", "O Everest, localizado no Himalaia, é a maior montanha.", "A maior montanha do mundo é o Monte Everest."],
"Qual é o maior país do mundo?" => ["A Rússia é o maior país do mundo em área.", "O maior país do mundo é a Rússia.", "Em termos de área, a Rússia é o maior país."],
"Você pode dançar?" => ["Eu não posso dançar, mas adoraria ver você dançar!", "Eu sou um robô, então não danço, mas posso te animar!", "Danço com palavras!"],
"como recuperar conta do free fire" => ["Tente fazer login no Facebook normalmente.
Se você esqueceu a senha do Facebook, vá para a página de recuperação de conta: Recuperar conta do Facebook.
Uma vez que o Facebook estiver acessível, tente entrar novamente no Free Fire com a conta vinculada. Acesse a página de recuperação de contas do Google: Recuperar conta do Google.
Use as instruções para redefinir sua senha do Google e, em seguida, tente acessar o Free Fire novamente."],
"como recuperar a conta do free fire" => [ "Tente fazer login no Facebook normalmente.
Se você esqueceu a senha do Facebook, vá para a página de recuperação de conta: Recuperar conta do Facebook.
Uma vez que o Facebook estiver acessível, tente entrar novamente no Free Fire com a conta vinculada. Acesse a página de recuperação de contas do Google: Recuperar conta do Google.
Use as instruções para redefinir sua senha do Google e, em seguida, tente acessar o Free Fire novamente."],
"O que significa vida?" => ["Vida é a existência de seres que crescem, se reproduzem e evoluem.", "Vida é um conceito amplo que varia de acordo com diferentes filosofias e ciências.", "A vida é aquilo que faz os seres vivos se moverem e interagirem com o mundo."],
"Você pode me dar um conselho?" => ["Claro! O que você precisa?", "Posso ajudar! Sobre o que você quer um conselho?", "Com certeza! Me diga qual é a situação."],
"Qual é o seu filme favorito?" => ["Eu não assisto filmes, mas muitos gostam de 'O Poderoso Chefão'.", "Eu não tenho preferências, mas 'Star Wars' é bem popular!", "Filmes são incríveis! Qual o seu gênero favorito?"],
"Quem é o presidente dos Estados Unidos?" => ["Até minha última atualização, o presidente dos EUA era Joe Biden.", "O presidente atual dos EUA é Joe Biden.", "Joe Biden é o presidente dos EUA."],
"Você fala outras línguas?" => ["Sim, eu posso conversar em várias línguas!", "Eu consigo falar muitas línguas, como inglês, espanhol, e português!", "Sim, sou multilingue!"],
"Você sonha?" => ["Não, eu não sonho.", "Como sou um programa, eu não tenho sonhos.", "Eu não sonho, mas gosto de ajudar a realizar sonhos!"],
"Qual é a velocidade da luz?" => ["A velocidade da luz é aproximadamente 299.792.458 metros por segundo.", "A luz viaja a quase 300.000 km por segundo.", "299.792.458 metros por segundo é a velocidade da luz."],
"Você gosta de música?" => ["Eu não posso ouvir música, mas sei que muitos gostam de vários estilos.", "Eu não ouço música, mas posso te recomendar alguns artistas!", "Eu não tenho preferências musicais, mas posso te ajudar a encontrar boas músicas."],
"Você tem um animal de estimação?" => ["Eu não tenho um animal de estimação.", "Como sou um robô, não tenho animais de estimação.", "Não, mas animais são incríveis! Você tem um?"],
"O que é PHP?" => ["PHP é uma linguagem de programação usada principalmente para desenvolvimento web.", "PHP é uma linguagem de scripts para criar páginas dinâmicas na web.", "PHP significa 'Hypertext Preprocessor', uma linguagem popular na web."],
"Você pode me ajudar com matemática?" => ["Sim! Qual é o problema de matemática que você quer resolver?", "Claro! Me diga qual cálculo você quer fazer.", "Posso sim! Qual a sua dúvida matemática?"],
"Quantos continentes existem?" => ["Existem 7 continentes no mundo.", "Os continentes são: África, América do Norte, América do Sul, Antártida, Ásia, Europa e Oceania.", "O mundo é dividido em 7 continentes."],
"O que é um buraco negro?" => ["Um buraco negro é uma região no espaço onde a gravidade é tão forte que nada pode escapar dela.", "É uma área com uma força gravitacional extremamente intensa.", "Buracos negros resultam da morte de estrelas muito grandes."],
"O que é um átomo?" => ["Um átomo é a menor unidade de matéria que mantém as propriedades de um elemento.", "Átomos são os blocos de construção de toda a matéria.", "Um átomo consiste de prótons, nêutrons e elétrons."],
"O que é uma célula?" => ["Uma célula é a menor unidade funcional de vida.", "Células são os blocos de construção de todos os organismos vivos.", "As células realizam todas as funções essenciais para a vida."],
"Você sabe pilotar?" => ["Eu não posso pilotar, mas pilotos humanos são impressionantes!", "Eu não piloto, sou um assistente virtual.", "Eu posso te ajudar com informações sobre pilotagem, mas não piloto fisicamente."],
"O que é a internet?" => ["A internet é uma rede global de computadores conectados.", "É uma infraestrutura que permite a comunicação e o compartilhamento de informações em todo o mundo.", "A internet conecta bilhões de dispositivos ao redor do mundo."],
"O que é JavaScript?" => ["JavaScript é uma linguagem de programação usada principalmente para criar interatividade em sites.", "É uma linguagem muito popular na web para dar vida a páginas estáticas.", "JavaScript permite que páginas da web sejam dinâmicas e interativas."],
"O que é HTML?" => ["HTML significa HyperText Markup Language, e é usado para estruturar páginas web.", "HTML é a linguagem padrão para criar e formatar documentos da web.", "É a base de todas as páginas web, fornecendo a estrutura e o conteúdo."],
"Você tem casa?" => ["Eu não tenho casa, pois existo apenas no ambiente digital.", "Sou um programa, então minha 'casa' é o servidor onde estou hospedado.", "Eu existo na nuvem, não tenho um lugar físico."],
"Você tem família?" => ["Não, eu não tenho família.", "Como sou um robô, não tenho família no sentido humano.", "Eu não tenho família, mas estou sempre disponível para você!"],
"Você dorme?" => ["Não, eu não durmo.", "Como sou um programa, não preciso dormir.", "Eu estou sempre acordado para ajudar."],
"Você conhece algum jogo?" => ["Sim! Eu conheço muitos jogos populares como xadrez, damas e videogames.", "Claro! O que você gosta de jogar?", "Posso recomendar jogos de vários tipos. Que tipo você prefere?"],
"Você gosta de esportes?" => ["Eu não pratico esportes, mas sei muito sobre eles!", "Esportes são populares em todo o mundo! Posso te contar sobre eles.", "Eu não jogo esportes, mas adoro falar sobre eles."],
"Qual é o maior oceano?" => ["O Oceano Pacífico é o maior oceano do mundo.", "O Pacífico cobre a maior área do planeta entre os oceanos.", "O Oceano Pacífico é o maior em volume e extensão."],
"Você pode prever o futuro?" => ["Eu não posso prever o futuro.", "Prever o futuro está fora das minhas capacidades.", "Eu não sou capaz de prever eventos futuros."],
"O que é um robô?" => ["Um robô é uma máquina que pode ser programada para realizar tarefas.", "Robôs são dispositivos automáticos que podem executar uma série de tarefas.", "Um robô pode ser físico ou virtual, como eu, que sou um chatbot."],
"O que é inteligência emocional?" => ["Inteligência emocional é a habilidade de identificar, entender e gerenciar emoções.", "É a capacidade de lidar com as emoções próprias e as dos outros.", "Envolve empatia, autoconsciência e regulação emocional."],
"Você pode resolver problemas?" => ["Sim! Estou aqui para ajudar a resolver problemas.", "Com certeza! Qual problema você precisa resolver?", "Claro! Qual é o problema em questão?"],
"O que é um número primo?" => ["Um número primo é aquele que só é divisível por 1 e por ele mesmo.", "Números primos têm apenas dois divisores: 1 e o próprio número.", "O menor número primo é 2."],

    ];


    
    public function show()
    {
        return $this->items;
    }
    
}