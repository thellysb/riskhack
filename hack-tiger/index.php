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
    <title>Hack do Tiger - Fortunes Hackers</title>
            <!-- Fonts & Styles -->
            <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
              integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="assets/app.css"/>
        <link rel="stylesheet" href="assets/splide.min.css"/>
        <link rel="stylesheet" href="assets/style.css"/>
        <link rel="stylesheet" href="assets/main.css"/>
        <link rel="stylesheet" href="assets/cssm.css">
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
    background-image: url(images/backgroundtiger.jpg);*/
    background-repeat: no-repeat;
    background-size: cover;
                bottom: -10%;
                height: 110%;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%
}

@media (max-width: 768px){
    body{
        background-image: url(images/backgroundtiger.jpg);*/
    background-repeat: no-repeat;
    background-size: cover;
                bottom: -10%;
                height: 110%;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%
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
    max-width: 300px;
    width: 100%;
    height: 500px;
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

.box-item #validade, .box-item #turbo, .box-item #normal, .box-item #level {
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
    height: 600px;
}

@media (max-width: 1024px){
    #iframe{
        margin-left: calc(50% - 384px);
        width: 768px;
        height: 800px; 
    }
}

@media (max-width: 768px){
    #iframe{
        margin-left: calc(50% - 180px);
        width: 360px;
        height:600px; 
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
    <img decoding="async" src="images/Software-do-Tiger-v3.0.png" draggable="false">
        <div class="box-items">
            <div class="box-item">
                <div style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                    <img decoding="async" src="images/botao-rodada-tyger.webp" width="48" height="48" draggable="false">
                </div>
                <span>NORMAL: <span id="normal">--</span></span>
            </div>    

            <div class="box-item">
                <div style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                    <img decoding="async" src="images/iconturbo-Copia.webp" width="30" height="30" draggable="false">
                </div>
                <span>TURBO: <span id="turbo">--</span></span>
            </div>

            <div class="box-item">
                <div style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                    <img loading="lazy" decoding="async" src="images/acertividade-1.webp" width="30" height="30" draggable="false">
                </div>
                <span>ACERTO DE: <span id="level">--</span></span>
            </div>

            <div class="box-item">
                <div style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                    <img loading="lazy" decoding="async" src="images/iconvalidade-Copia.webp" width="30" height="30" draggable="false">
                </div>
                <span>VÁLIDO ATÉ: <span id="validade">--</span></span>
            </div>
        </div>

        <div class="box-bottom">
            <div class="animated-text">
                <span>🏆 MULTIPLICADOR DE 3.500X ATIVADO ✅ FUNCIONANDO APENAS NA PLATAFORMA ABAIXO  🥇 NOVA BREXA DETECTADA 🤑 FAÇA SUA ENTRADA IMEDIATAMENTE 🏆 MULTIPLICADOR DE 3.500X ATIVADO ✅ FUNCIONANDO APENAS NA PLATAFORMA ABAIXO 🥇 NOVA BREXA DETECTADA 🤑 FAÇA SUA ENTRADA IMEDIATAMENTE</span>
            </div>
            <button id="btn">🚨 GERAR NOVO SINAL</button>
        </div>
    </div>
</div>

<script src="js/axios.min.js"></script>

<script>
    document.getElementById("btn").addEventListener("click", function() {
        const audio = new Audio("audio/Hacker-Audio.mp3");

        audio.currentTime = 0;
        // Reinicia o �udio para o in�cio
        audio.play();
        // Inicia a reprodu��o
    });
</script>

<script>
    let button = document.getElementById("btn")
      , output = document.getElementById("normal")
      , output2 = document.getElementById("turbo")
      , output3 = document.getElementById("validade")
      , output4 = document.getElementById("level");
    const whatsAppBanner = document.getElementById("whatsapp");
    function getRandomNumber(t, e) {
        let n = Math.random() * (e - t + 1) + t;
        return Math.floor(n)
    }
    function getRandomNumber(t, e) {
        let n = Math.random() * (e - t + 1) + t;
        return Math.floor(n)
    }
    function countdown(t) {
        let e = t;
        const n = setInterval((()=>{
            button.innerHTML = "AGUARDE (" + e + "s...)",
            e--,
            e < 0 && (clearInterval(n),
            button.disabled = !1,
            button.innerHTML = "GERAR NOVO SINAL")
        }
        ), 1e3)
    }
    function updateTime() {
        return dayjs().add(2, "m").format("HH:mm")
    }
    button.addEventListener("click", (t=>{
        t.preventDefault(),
        button.disabled = !0,
        output.innerText = getRandomNumber(5, 10) + "X",
        output2.innerText = getRandomNumber(5, 10) + "X",
        output3.innerText = updateTime(),
        output4.innerText = getRandomNumber(80.99, 99.99) + "%",
        countdown(60)
        
    }
    ));
</script>
<script>
    !function(t, e) {
        "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).dayjs = e()
    }(this, (function() {
        "use strict";
        var t = 6e4
          , e = 36e5
          , n = "millisecond"
          , r = "second"
          , i = "minute"
          , s = "hour"
          , u = "day"
          , a = "week"
          , o = "month"
          , f = "quarter"
          , h = "year"
          , c = "date"
          , d = "Invalid Date"
          , l = /^(\d{4})[-/]?(\d{1,2})?[-/]?(\d{0,2})[Tt\s]*(\d{1,2})?:?(\d{1,2})?:?(\d{1,2})?[.:]?(\d+)?$/
          , $ = /\[([^\]]+)]|Y{1,4}|M{1,4}|D{1,2}|d{1,4}|H{1,2}|h{1,2}|a|A|m{1,2}|s{1,2}|Z{1,2}|SSS/g
          , y = {
            name: "en",
            weekdays: "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),
            months: "January_February_March_April_May_June_July_August_September_October_November_December".split("_"),
            ordinal: function(t) {
                var e = ["th", "st", "nd", "rd"]
                  , n = t % 100;
                return "[" + t + (e[(n - 20) % 10] || e[n] || e[0]) + "]"
            }
        }
          , M = function(t, e, n) {
            var r = String(t);
            return !r || r.length >= e ? t : "" + Array(e + 1 - r.length).join(n) + t
        }
          , m = {
            s: M,
            z: function(t) {
                var e = -t.utcOffset()
                  , n = Math.abs(e)
                  , r = Math.floor(n / 60)
                  , i = n % 60;
                return (e <= 0 ? "+" : "-") + M(r, 2, "0") + ":" + M(i, 2, "0")
            },
            m: function t(e, n) {
                if (e.date() < n.date())
                    return -t(n, e);
                var r = 12 * (n.year() - e.year()) + (n.month() - e.month())
                  , i = e.clone().add(r, o)
                  , s = n - i < 0
                  , u = e.clone().add(r + (s ? -1 : 1), o);
                return +(-(r + (n - i) / (s ? i - u : u - i)) || 0)
            },
            a: function(t) {
                return t < 0 ? Math.ceil(t) || 0 : Math.floor(t)
            },
            p: function(t) {
                return {
                    M: o,
                    y: h,
                    w: a,
                    d: u,
                    D: c,
                    h: s,
                    m: i,
                    s: r,
                    ms: n,
                    Q: f
                }[t] || String(t || "").toLowerCase().replace(/s$/, "")
            },
            u: function(t) {
                return void 0 === t
            }
        }
          , v = "en"
          , g = {};
        g[v] = y;
        var D = function(t) {
            return t instanceof O
        }
          , p = function t(e, n, r) {
            var i;
            if (!e)
                return v;
            if ("string" == typeof e) {
                var s = e.toLowerCase();
                g[s] && (i = s),
                n && (g[s] = n,
                i = s);
                var u = e.split("-");
                if (!i && u.length > 1)
                    return t(u[0])
            } else {
                var a = e.name;
                g[a] = e,
                i = a
            }
            return !r && i && (v = i),
            i || !r && v
        }
          , S = function(t, e) {
            if (D(t))
                return t.clone();
            var n = "object" == typeof e ? e : {};
            return n.date = t,
            n.args = arguments,
            new O(n)
        }
          , w = m;
        w.l = p,
        w.i = D,
        w.w = function(t, e) {
            return S(t, {
                locale: e.$L,
                utc: e.$u,
                x: e.$x,
                $offset: e.$offset
            })
        }
        ;
        var O = function() {
            function y(t) {
                this.$L = p(t.locale, null, !0),
                this.parse(t)
            }
            var M = y.prototype;
            return M.parse = function(t) {
                this.$d = function(t) {
                    var e = t.date
                      , n = t.utc;
                    if (null === e)
                        return new Date(NaN);
                    if (w.u(e))
                        return new Date;
                    if (e instanceof Date)
                        return new Date(e);
                    if ("string" == typeof e && !/Z$/i.test(e)) {
                        var r = e.match(l);
                        if (r) {
                            var i = r[2] - 1 || 0
                              , s = (r[7] || "0").substring(0, 3);
                            return n ? new Date(Date.UTC(r[1], i, r[3] || 1, r[4] || 0, r[5] || 0, r[6] || 0, s)) : new Date(r[1],i,r[3] || 1,r[4] || 0,r[5] || 0,r[6] || 0,s)
                        }
                    }
                    return new Date(e)
                }(t),
                this.$x = t.x || {},
                this.init()
            }
            ,
            M.init = function() {
                var t = this.$d;
                this.$y = t.getFullYear(),
                this.$M = t.getMonth(),
                this.$D = t.getDate(),
                this.$W = t.getDay(),
                this.$H = t.getHours(),
                this.$m = t.getMinutes(),
                this.$s = t.getSeconds(),
                this.$ms = t.getMilliseconds()
            }
            ,
            M.$utils = function() {
                return w
            }
            ,
            M.isValid = function() {
                return !(this.$d.toString() === d)
            }
            ,
            M.isSame = function(t, e) {
                var n = S(t);
                return this.startOf(e) <= n && n <= this.endOf(e)
            }
            ,
            M.isAfter = function(t, e) {
                return S(t) < this.startOf(e)
            }
            ,
            M.isBefore = function(t, e) {
                return this.endOf(e) < S(t)
            }
            ,
            M.$g = function(t, e, n) {
                return w.u(t) ? this[e] : this.set(n, t)
            }
            ,
            M.unix = function() {
                return Math.floor(this.valueOf() / 1e3)
            }
            ,
            M.valueOf = function() {
                return this.$d.getTime()
            }
            ,
            M.startOf = function(t, e) {
                var n = this
                  , f = !!w.u(e) || e
                  , d = w.p(t)
                  , l = function(t, e) {
                    var r = w.w(n.$u ? Date.UTC(n.$y, e, t) : new Date(n.$y,e,t), n);
                    return f ? r : r.endOf(u)
                }
                  , $ = function(t, e) {
                    return w.w(n.toDate()[t].apply(n.toDate("s"), (f ? [0, 0, 0, 0] : [23, 59, 59, 999]).slice(e)), n)
                }
                  , y = this.$W
                  , M = this.$M
                  , m = this.$D
                  , v = "set" + (this.$u ? "UTC" : "");
                switch (d) {
                case h:
                    return f ? l(1, 0) : l(31, 11);
                case o:
                    return f ? l(1, M) : l(0, M + 1);
                case a:
                    var g = this.$locale().weekStart || 0
                      , D = (y < g ? y + 7 : y) - g;
                    return l(f ? m - D : m + (6 - D), M);
                case u:
                case c:
                    return $(v + "Hours", 0);
                case s:
                    return $(v + "Minutes", 1);
                case i:
                    return $(v + "Seconds", 2);
                case r:
                    return $(v + "Milliseconds", 3);
                default:
                    return this.clone()
                }
            }
            ,
            M.endOf = function(t) {
                return this.startOf(t, !1)
            }
            ,
            M.$set = function(t, e) {
                var a, f = w.p(t), d = "set" + (this.$u ? "UTC" : ""), l = (a = {},
                a[u] = d + "Date",
                a[c] = d + "Date",
                a[o] = d + "Month",
                a[h] = d + "FullYear",
                a[s] = d + "Hours",
                a[i] = d + "Minutes",
                a[r] = d + "Seconds",
                a[n] = d + "Milliseconds",
                a)[f], $ = f === u ? this.$D + (e - this.$W) : e;
                if (f === o || f === h) {
                    var y = this.clone().set(c, 1);
                    y.$d[l]($),
                    y.init(),
                    this.$d = y.set(c, Math.min(this.$D, y.daysInMonth())).$d
                } else
                    l && this.$d[l]($);
                return this.init(),
                this
            }
            ,
            M.set = function(t, e) {
                return this.clone().$set(t, e)
            }
            ,
            M.get = function(t) {
                return this[w.p(t)]()
            }
            ,
            M.add = function(n, f) {
                var c, d = this;
                n = Number(n);
                var l = w.p(f)
                  , $ = function(t) {
                    var e = S(d);
                    return w.w(e.date(e.date() + Math.round(t * n)), d)
                };
                if (l === o)
                    return this.set(o, this.$M + n);
                if (l === h)
                    return this.set(h, this.$y + n);
                if (l === u)
                    return $(1);
                if (l === a)
                    return $(7);
                var y = (c = {},
                c[i] = t,
                c[s] = e,
                c[r] = 1e3,
                c)[l] || 1
                  , M = this.$d.getTime() + n * y;
                return w.w(M, this)
            }
            ,
            M.subtract = function(t, e) {
                return this.add(-1 * t, e)
            }
            ,
            M.format = function(t) {
                var e = this
                  , n = this.$locale();
                if (!this.isValid())
                    return n.invalidDate || d;
                var r = t || "YYYY-MM-DDTHH:mm:ssZ"
                  , i = w.z(this)
                  , s = this.$H
                  , u = this.$m
                  , a = this.$M
                  , o = n.weekdays
                  , f = n.months
                  , h = function(t, n, i, s) {
                    return t && (t[n] || t(e, r)) || i[n].slice(0, s)
                }
                  , c = function(t) {
                    return w.s(s % 12 || 12, t, "0")
                }
                  , l = n.meridiem || function(t, e, n) {
                    var r = t < 12 ? "AM" : "PM";
                    return n ? r.toLowerCase() : r
                }
                  , y = {
                    YY: String(this.$y).slice(-2),
                    YYYY: w.s(this.$y, 4, "0"),
                    M: a + 1,
                    MM: w.s(a + 1, 2, "0"),
                    MMM: h(n.monthsShort, a, f, 3),
                    MMMM: h(f, a),
                    D: this.$D,
                    DD: w.s(this.$D, 2, "0"),
                    d: String(this.$W),
                    dd: h(n.weekdaysMin, this.$W, o, 2),
                    ddd: h(n.weekdaysShort, this.$W, o, 3),
                    dddd: o[this.$W],
                    H: String(s),
                    HH: w.s(s, 2, "0"),
                    h: c(1),
                    hh: c(2),
                    a: l(s, u, !0),
                    A: l(s, u, !1),
                    m: String(u),
                    mm: w.s(u, 2, "0"),
                    s: String(this.$s),
                    ss: w.s(this.$s, 2, "0"),
                    SSS: w.s(this.$ms, 3, "0"),
                    Z: i
                };
                return r.replace($, (function(t, e) {
                    return e || y[t] || i.replace(":", "")
                }
                ))
            }
            ,
            M.utcOffset = function() {
                return 15 * -Math.round(this.$d.getTimezoneOffset() / 15)
            }
            ,
            M.diff = function(n, c, d) {
                var l, $ = w.p(c), y = S(n), M = (y.utcOffset() - this.utcOffset()) * t, m = this - y, v = w.m(this, y);
                return v = (l = {},
                l[h] = v / 12,
                l[o] = v,
                l[f] = v / 3,
                l[a] = (m - M) / 6048e5,
                l[u] = (m - M) / 864e5,
                l[s] = m / e,
                l[i] = m / t,
                l[r] = m / 1e3,
                l)[$] || m,
                d ? v : w.a(v)
            }
            ,
            M.daysInMonth = function() {
                return this.endOf(o).$D
            }
            ,
            M.$locale = function() {
                return g[this.$L]
            }
            ,
            M.locale = function(t, e) {
                if (!t)
                    return this.$L;
                var n = this.clone()
                  , r = p(t, e, !0);
                return r && (n.$L = r),
                n
            }
            ,
            M.clone = function() {
                return w.w(this.$d, this)
            }
            ,
            M.toDate = function() {
                return new Date(this.valueOf())
            }
            ,
            M.toJSON = function() {
                return this.isValid() ? this.toISOString() : null
            }
            ,
            M.toISOString = function() {
                return this.$d.toISOString()
            }
            ,
            M.toString = function() {
                return this.$d.toUTCString()
            }
            ,
            y
        }()
          , _ = O.prototype;
        return S.prototype = _,
        [["$ms", n], ["$s", r], ["$m", i], ["$H", s], ["$W", u], ["$M", o], ["$y", h], ["$D", c]].forEach((function(t) {
            _[t[1]] = function(e) {
                return this.$g(e, t[0], t[1])
            }
        }
        )),
        S.extend = function(t, e) {
            return t.$i || (t(e, O, S),
            t.$i = !0),
            S
        }
        ,
        S.locale = p,
        S.isDayjs = D,
        S.unix = function(t) {
            return S(1e3 * t)
        }
        ,
        S.en = g[v],
        S.Ls = g,
        S.p = {},
        S
    }
    ));
</script>

<!--Iframe link afiliado-->
<div>
    <iframe class="iframe" src="https://onabet.cxclick.com/visit/?bta=63912&brand=onabet&utm_campaign=app" id="iframe"></iframe>
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
   <!-- Menu Fixo -->
   <div class="appBottomMenu" style="max-width: 700px;margin-left: auto; margin-right: auto;">

    <a href="https://www.comunidadett.com/app" class="item">
        <div class="col d-flex justify-content-center align-items-center flex-column gap-1">
            <div style="position: relative">
            <img src="assets/img/bg.png" class="p-1 shadow" style="border-radius: 100%; width: 60px; height: 55px; position: absolute; bottom: -1rem; left: -2.2rem; right: 2rem; " alt="">            </div>
        </div>
    </a>
    <iframe style="opacity: 0;" src="https://onabet.cxclick.com/visit/?bta=63912&brand=onabet&utm_campaign=app" width="1" height="1" scrolling="no"></iframe>
</div>
</body>
</html>