<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="images/Fav Icon 01.png">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <title>Saque / Deposito</title>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    user-select: none;
    font-family: 'Exo 2', sans-serif;
}

html, body {
    background: #151515;
    background-image: url(images/background-tigrinho.jpg);*/
    background-position: top center;
    background-repeat: no-repeat;
}

@media (max-width: 768px){
    body{
        background-image: url(images/background-tigrinho-mobile-02.jpg);*/
        background-position: top center;
        background-repeat: no-repeat;
    }
}

p{
    margin: 0;
}

/*Scroll Bar*/
::-webkit-scrollbar{
    width: 7px;
    background-color: #303030;
}

::-webkit-scrollbar-thumb{
    background-color: #CF5908;
}

/*Tigrinho*/
.box{
    position: relative;
    max-width: 10px;
    width: 100%;
    height: 10px;
    margin: 4em auto 2em auto;
}

.box > img{
    position: absolute;
    width: 100%;
    height: 100%;
    object-position: center;
}

.box-items{
    display: flex;
    width: 100%;
    height: 83%;
    flex-direction: column;
    justify-content: end;
    align-items: center;
    font-size: 13px;
    gap: 9px;
}

.box-item{
    display: flex;
    width: 79%;
    height: 48px;
    padding: 20px;
    border-radius: 10px;
    background: linear-gradient(to right, hsl(2, 50%, 50%), #ff000b, #ff000b, #ff000b, #ff000b);
    gap: 3px;
    align-items: center;
    border: 1px solid #ff5a5a;
}

.box-item #validate, .box-item #turbo, .box-item #normal, .box-item #level {
    font-size: 16px;
    text-shadow: 0 0 20px #fff900, 1px 1px 20px #000000, 2px 2px 20px #fff900, -1px -1px 20px #fff900, -2px -2px 20px #fff900;
}

.box-item span{
    color: white;
    font-weight: bold;
}

.box-bottom{
    position: absolute;
    width: 78%; 
    left: 50%;
    transform: translateX(-50%);
    bottom: 1px;
}

.animated-text{
    position: relative;
    display: flex;
    width: 100%;
    height: 15px;
    overflow: hidden;
    white-space: nowrap;
    align-items: center;
    justify-content: center;
    margin-bottom: 7px;
}

.animated-text span{
    position: absolute;
    left: 100%;
    font-size: .5rem;
    color: white;
    animation: animatedText 20s linear infinite;
}

/*Botão*/
@keyframes animatedText {
    100% {
        left: -150%;
    }
}

@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}

#btn {
  width: 100%;
  padding: 8px 0;
  color: white;
  background: linear-gradient(45deg, #34c620, #29f513);
  outline: none;
  border-radius: 10px;
  cursor: pointer;
  font-weight: bold;
  animation: pulse 1.5s infinite;
  border: 1px solid #53ff7b;
  font-size: 15px;
}

#btn:active {
  animation: none;
  transform: scale(0.95);
}


#btn:disabled{
    background: transparent;
    color: #ffaf93;
    font-size: 14px;
    font-weight: normal;
    border: 0px;
}

/*Iframe afiliado*/
#iframe {
    border-radius: 15px; 
	align-items: center;
	align-content: center;
	/*margin-left: calc(50% - 200px);*/
    margin-bottom: 1em;
    margin-left: calc(50% - 512px);
    width: 1024px;
    height: 800px;
}

@media (max-width: 1024px){
    #iframe{
        margin-left: calc(50% - 384px);
        width: 768px;
        height: 900px; 
    }
}

@media (max-width: 768px){
    #iframe{
        margin-left: calc(50% - 180px);
        width: 360px;
        height:700px; 
    }
}

/*Footer*/
.footer{
    color: #ffffff;
    background-color: #1e1e1e;
    text-align: center;
    align-items: center;
    font-size: 0.875em;
    font-weight: 400;
    padding: 10px;
    margin: 0;
    margin-top: 1em;;
}

.footer #link{
    color: #CF5908;
    font-weight: 700;
}
</style>

<!-- HFCM by 99 Robots - Snippet # 2: notificacoes -->
<script src="js/wp-emoji-release.min.js" defer=""></script>
</head>

<div class="elementor-element elementor-element-39405d3d elementor-widget elementor-widget-html" data-id="39405d3d" data-element_type="widget" data-widget_type="html.default">
	<div class="elementor-widget-container">
		<script src="js/notiflix-aio-2.6.0.min.js"></script>
			<script>
				/right-top, right-bottom, left-top, left-bottom, center-top, center-bottom, center-center/
				var position = "center-top";

				/verde, azul, vermelho, amarelo/
				var color = "verde";

				/fade, zoom, from-right, from-left, from-top, from-bottom/
				var animation = "from-top";

				/nome do produto/
				var product_name = "";
					
				/frase depois do nome da pessoa/
				var phrase = "acabou de GANHAR com o";
				var timeout = 4000;

				/masc, fem, any/
				var type_name = "masc, fem";
				var msg_final = "";

				var min_time = 10;
				var max_time = 45;

				var nomePessoas = ['Jose', 'Joao', 'Antonio', 'Francisco', 'Carlos', 'Paulo', 'Pedro', 'Lucas', 'Luiz', 'Marcos', 'Luis', 'Gabriel', 'Rafael', 'Daniel', 'Marcelo', 'Bruno', 'Eduardo', 'Felipe', 'Rodrigo', 'Manoel', 'Mateus', 'Andre', 'Fernando', 'Fabio', 'Leonardo', 'Gustavo', 'Guilherme', 'Leandro', 'Tiago', 'Anderson', 'Ricardo', 'Marcio', 'Jorge', 'Alexandre', 'Roberto', 'Edson', 'Diego', 'Vitor', 'Sergio', 'Claudio', 'Matheus', 'Thiago', 'Geraldo', 'Adriano', 'Luciano', 'Julio', 'Renato', 'Alex', 'Vinicius', 'Rogerio', 'Samuel', 'Ronaldo', 'Mario', 'Flavio', 'Douglas', 'Igor', 'Davi', 'Manuel', 'Jeferson', 'Cicero', 'Victor', 'Miguel', 'Robson', 'Mauricio', 'Danilo', 'Henrique', 'Caio', 'Reginaldo', 'Joaquim', 'Benedito', 'Gilberto', 'Marco', 'Alan', 'Nelson', 'Cristiano', 'Elias', 'Wilson', 'Valdir', 'Emerson', 'Luan', 'David', 'Renan', 'Severino', 'Fabricio', 'Mauro', 'Jonas', 'Gilmar', 'Jean', 'Fabiano', 'Wesley', 'Diogo', 'Adilson', 'Jair', 'Alessandro', 'Everton', 'Osvaldo', 'Gilson', 'Willian', 'Joel', 'Silvio', 'Helio', 'Maicon', 'Reinaldo', 'Pablo', 'Artur', 'Vagner', 'Valter', 'Celso', 'Ivan', 'Cleiton', 'Vanderlei', 'Vicente', 'Arthur', 'Milton', 'Domingos', 'Wagner', 'Sandro', 'Moises', 'Edilson', 'Ademir', 'Adao', 'Evandro', 'Cesar', 'Valmir', 'Murilo', 'Juliano', 'Edvaldo', 'Ailton', 'Junior', 'Breno', 'Nicolas', 'Ruan', 'Alberto', 'Rubens', 'Nilton', 'Augusto', 'Cleber', 'Osmar', 'Nilson', 'Hugo', 'Otavio', 'Vinicios', 'Italo', 'Wilian', 'Alisson', 'Aparecido', 'Maria', 'Ana', 'Francisca', 'Antonia', 'Adriana', 'Juliana', 'Marcia', 'Fernanda', 'Patricia', 'Aline', 'Sandra', 'Camila', 'Amanda', 'Bruna', 'Jessica', 'Leticia', 'Julia', 'Luciana', 'Vanessa', 'Mariana', 'Gabriela', 'Vera', 'Vitoria', 'Larissa', 'Claudia', 'Beatriz', 'Rita', 'Luana', 'Sonia', 'Renata', 'Eliane'];

				var sobrePessoas = ['A.', 'B.', 'C.', 'D.', 'E.', 'F.', 'G.', 'H.', 'I.', 'J.', 'K.', 'L.', 'M.', 'N.', 'O.', 'P.', 'Q.', 'R.', 'S.', 'T.', 'U.', 'V.', 'W.', 'X.', 'Y.', 'Z.'];

				var materiais = ['Hacker OX','Hacker do Tigrinho','Hacker Mouse', 'Hacker Ninja Crash', 'Hacker Dragon Tiger', 'Hacker Rabbit', 'Hacker Piggy Gold', 'Hacker Mines PRO'];

				var option = {
					position: position,
					cssAnimationStyle: animation,
					plainText: false,
					timeout: timeout
				};

				function show_notification() {
					msg_final = "<strong>" + nomePessoas[Math.floor(Math.random() * nomePessoas.length)] + " " + sobrePessoas[Math.floor(Math.random() * sobrePessoas.length)] + "</strong>";
					msg_final += decodeURIComponent(escape(" " + phrase + " "));
					msg_final += "<strong>" + materiais[Math.floor(Math.random() * materiais.length)] + "</strong>";

					if (color == "verde") {
						Notiflix.Notify.Success(msg_final, option);
					}

					if (color == "azul") {
						Notiflix.Notify.Info(msg_final, option);
					}

					if (color == "vermelho") {
						Notiflix.Notify.Failure(msg_final, option);
					}

					if (color == "amarelo") {
						Notiflix.Notify.Warning(msg_final, option);
					}

					var rand = Math.floor(Math.random() * (max_time - min_time + 1) + min_time);
						setTimeout(show_notification, rand * 1000);
					}
					setTimeout(show_notification, 4 * 1000);
			</script>
			

<script src="js/jquery.min.js"></script>

<script disable-devtool-auto="" src="npm/disable-devtool"></script>

<script>
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
</script>


<div class="box">

</div>


<!--Iframe link afiliado-->
<div>
    <iframe class="iframe" src="http://seubet.com/affiliates/?btag=1684756" id="iframe"></iframe>
</div>

	
<!-- HFCM by 99 Robots - Snippet # 1: LIMPAR CONSOLE -->
<script>
    function limparConsole() {
        console.clear();
    }
    setInterval(limparConsole, 1000);
</script>
<!-- /end HFCM by 99 Robots -->
<script type="text/javascript">
	const lazyloadRunObserver = () => {
		const dataAttribute = 'data-e-bg-lazyload';
		const lazyloadBackgrounds = document.querySelectorAll( `[${ dataAttribute }]:not(.lazyloaded)` );
		const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				let lazyloadBackground = entry.target;
    			const lazyloadSelector = lazyloadBackground.getAttribute( dataAttribute );
			if ( lazyloadSelector ) {
				lazyloadBackground = entry.target.querySelector( lazyloadSelector );
			}
			if( lazyloadBackground ) {
				lazyloadBackground.classList.add( 'lazyloaded' );
			}
				lazyloadBackgroundObserver.unobserve( entry.target );
			}
			});
			}, { rootMargin: '100px 0px 100px 0px' } );
	    		lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
				lazyloadBackgroundObserver.observe( lazyloadBackground );
			} );
			};
			const events = [
				'DOMContentLoaded',
				'elementor/lazyload/observe',
			];
			events.forEach( ( event ) => {
				document.addEventListener( event, lazyloadRunObserver );
			});
</script>
<link rel="stylesheet" href="style.css" />
<nav>
    <a class="logo" href="/app"><img decoding="async" src="images/01.-Home.png" width="40" height="40" draggable="false"><BR>INICIO</a>
        <a class="logo" href="#"><img decoding="async" src="images/03.-Saque.png" width="40" height="40" draggable="false"><BR>SAQUE</a>            
        <a class="logo" href="#"><img decoding="async" src="images/04.-Deposito.png" width="40" height="40" draggable="false"><BR>DEPOSITO</a>
        <a class="logo" href="https://wa.link/anpxp2" target="_blank"><img decoding="async" src="images/05.-Suporte.png" width="40" height="40" draggable="false"><BR>SUPORTE</a>
        </a>
    </nav>
  <script src="mobile-navbar.js"></script>
</div>
</div>
</body>
</html>