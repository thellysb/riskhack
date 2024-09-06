<html>
<head>
<title>App 24hr</title>
<link href="css/style.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/cfe65b7f29.js"></script>
<link rel="shortcut icon" href="images/favicon.png">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" sizes="192x192">
<link rel="apple-touch-icon" href="images/favicon.png">

</head>
<body>
<header>
<style>
.cookieConsentContainer
{z-index:999;
width:350px;
height: 200px;
min-height:20px;
box-sizing:border-box;
padding:30px 30px 30px 30px;
background:#ffffff;
overflow:hidden;position:fixed;
bottom:30px;
right:30px;
top:70px;
border-radius: 10px;
display:none}

.cookieConsentContainer .cookieTitle a
{font-family:OpenSans,arial,sans-serif;
color:#198754;font-size:22px;
line-height:20px;
display:block}

.cookieConsentContainer .cookieDesc p
{margin:0;padding:0;
font-family:OpenSans,arial,sans-serif;
color:#2d2d2d;
font-size:13px;
line-height:20px;
display:block;
margin-top:10px}

.cookieConsentContainer .cookieDesc a
{font-family:OpenSans,arial,sans-serif;
    color:#198754;
    text-decoration:underline}
    
    .cookieConsentContainer .cookieButton a
    {display:inline-block;
    font-family:OpenSans,arial,sans-serif;
    color:#fff;
    font-size:14px;
    font-weight:700;
    margin-top:14px;
    background:#198754;
    border-radius:10px;
    box-sizing:border-box;
    padding:10px 24px;
    text-align:center;
    transition:background .3s}
    
    .cookieConsentContainer .cookieButton a:hover
    {cursor:pointer;
    background:#3e9b67}
    @media (max-width:980px)
    {.cookieConsentContainer{bottom:0!important;left:0!important;width:100%!important}}
    
    .img {
        min-height: auto;
        max-height: auto;
        max-width: 100%;
        border-radius:20px;

}
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
    min-height: auto;
        max-height: auto;
        max-width: 800px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.slide {
  animation-name: slide;
  animation-duration: 0.5s;
}

@keyframes slide {
  from {opacity: 0.4}
  to {opacity: 1}
}
    </style>
<!-- HFCM by 99 Robots - Snippet # 2: notificacoes -->
<script src="js/wp-emoji-release.min.js" defer=""></script>
<script>var purecookieTitle="Você ja fez seu cadastro?",purecookieDesc="Clique em cadastrar e efetue seu cadastro na plataforma do nosso aplicativo.",purecookieLink='<a href="https://onabet.cxclick.com/visit/?bta=63912&brand=onabet&utm_campaign=app" target="_blank">Quero se cadastrar!</a>',purecookieButton="Já cadastrei!";function pureFadeIn(e,o){var i=document.getElementById(e);i.style.opacity=0,i.style.display=o||"block",function e(){var o=parseFloat(i.style.opacity);(o+=.02)>1||(i.style.opacity=o,requestAnimationFrame(e))}()}function pureFadeOut(e){var o=document.getElementById(e);o.style.opacity=1,function e(){(o.style.opacity-=.02)<0?o.style.display="none":requestAnimationFrame(e)}()}function setCookie(e,o,i){var t="";if(i){var n=new Date;n.setTime(n.getTime()+24*i*60*60*1e3),t="; expires="+n.toUTCString()}document.cookie=e+"="+(o||"")+t+"; path=/"}function getCookie(e){for(var o=e+"=",i=document.cookie.split(";"),t=0;t<i.length;t++){for(var n=i[t];" "==n.charAt(0);)n=n.substring(1,n.length);if(0==n.indexOf(o))return n.substring(o.length,n.length)}return null}function eraseCookie(e){document.cookie=e+"=; Max-Age=-99999999;"}function cookieConsent(){getCookie("purecookieDismiss")||(document.body.innerHTML+='<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>'+purecookieTitle+'</a></div><div class="cookieDesc"><p>'+purecookieDesc+" "+purecookieLink+'</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">'+purecookieButton+"</a></div></div>",pureFadeIn("cookieConsentContainer"))}function purecookieDismiss(){setCookie("purecookieDismiss","1",7),pureFadeOut("cookieConsentContainer")}window.onload=function(){cookieConsent()};</script>
</header>

<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides slide">
        <img src="images/slider3.jpg" style="width:100%"></a>
    </div>
  
    <div class="mySlides slide">
      <img src="images/slider2.jpg" style="width:100%">
    </div>

    <div class="mySlides slide">
      <img src="images/slider1.jpg" style="width:100%">
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}   
</script>
<div class="container jogos">
    <div class="row" style="text-align:center;">
        
        <div class="col-md-12">
            <div class="jogos-disponiveis" role="alert0">
              <i class="fa fa-gamepad fa-1x" aria-hidden="true"></i>&nbsp;&nbsp; Jogos disponiveis!
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                                         <a href="hackers/hack-tiger">
                                            <div class="card" style="width: 18rem;">
                            <div class="game-image">
                                <img src="imagens/fortune-t.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="game-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Fortune Tiger</h2>
                                        <p>PgSoft</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="online">Disponivel</div>
                                    </div>
                                </div>
                            </div>
                            <div class="game-footer">
                                <p>Assertividade</p>
                                <div class="progress-container" id="progress-container-2">
                                    <div class="progress">
                                        <div class="progress-bar" id="progress-bar-2">
                                            <div class="progress-title">
                                                <span class="progress-text" id="progress-text-2">0%</span></font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function getRandomProgressColor(progress) {
                                        if (progress >= 40 && progress <= 49) {
                                            return '#ff0000';
                                            // Red
                                        } else if (progress >= 50 && progress <= 59) {
                                            return '#ffa200';
                                            // Yellow
                                        } else {
                                            return '#00b24a';
                                            // Green
                                        }
                                    }

                                    function updateProgressBar(progressBarId, progressTextId) {
                                        const progressBar = document.getElementById(progressBarId);
                                        const progressText = document.getElementById(progressTextId);

                                        // Generate a random progress between 40 and 99
                                        const randomProgress = Math.random() * (99 - 40) + 40;

                                        progressBar.style.width = `${randomProgress}%`;
                                        progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
                                        progressText.textContent = `${randomProgress.toFixed(2)}%`;
                                    }

                                    // Initial calls
                                    updateProgressBar("progress-bar-2", "progress-text-2");

                                    // Update the progress every 1 to 3 minutes for each progress bar
                                    setInterval(()=>updateProgressBar("progress-bar-2", "progress-text-2"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
                                </script>
                            </div>
                        </div>
                    </a>
                </div>   
                
                <div class="col-md-3">
                                         <a href="hackers/mines">
                                            <div class="card" style="width: 18rem;">
                            <div class="game-image">
                                <img src="imagens/mines.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="game-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Mines</h2>
                                        <p>Spribe</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="online">Disponivel</div>
                                    </div>
                                </div>
                            </div>
                            <div class="game-footer">
                                <p>Assertividade</p>
                                <div class="progress-container" id="progress-container-3">
                                    <div class="progress">
                                        <div class="progress-bar" id="progress-bar-3">
                                            <div class="progress-title">
                                                <span class="progress-text" id="progress-text-3">0%</span></font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function getRandomProgressColor(progress) {
                                        if (progress >= 40 && progress <= 49) {
                                            return '#ff0000';
                                            // Red
                                        } else if (progress >= 50 && progress <= 59) {
                                            return '#ffa200';
                                            // Yellow
                                        } else {
                                            return '#00b24a';
                                            // Green
                                        }
                                    }

                                    function updateProgressBar(progressBarId, progressTextId) {
                                        const progressBar = document.getElementById(progressBarId);
                                        const progressText = document.getElementById(progressTextId);

                                        // Generate a random progress between 40 and 99
                                        const randomProgress = Math.random() * (99 - 40) + 40;

                                        progressBar.style.width = `${randomProgress}%`;
                                        progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
                                        progressText.textContent = `${randomProgress.toFixed(2)}%`;
                                    }

                                    // Initial calls
                                    updateProgressBar("progress-bar-3", "progress-text-3");

                                    // Update the progress every 1 to 3 minutes for each progress bar
                                    setInterval(()=>updateProgressBar("progress-bar-3", "progress-text-3"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
                                </script>
                            </div>
                        </div>
                    </a>
                </div>   
                <div class="col-md-3">
                                         <a href="hackers/hack-ox">
                                            <div class="card" style="width: 18rem;">
                            <div class="game-image">
                                <img src="imagens/fortune-ox.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="game-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Fortune Ox</h2>
                                        <p>Pgsoft</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="online">Disponivel</div>
                                    </div>
                                </div>
                            </div>
                            <div class="game-footer">
                                <p>Assertividade</p>
                                <div class="progress-container" id="progress-container-4">
                                    <div class="progress">
                                        <div class="progress-bar" id="progress-bar-4">
                                            <div class="progress-title">
                                                <span class="progress-text" id="progress-text-4">0%</span></font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function getRandomProgressColor(progress) {
                                        if (progress >= 40 && progress <= 49) {
                                            return '#ff0000';
                                            // Red
                                        } else if (progress >= 50 && progress <= 59) {
                                            return '#ffa200';
                                            // Yellow
                                        } else {
                                            return '#00b24a';
                                            // Green
                                        }
                                    }

                                    function updateProgressBar(progressBarId, progressTextId) {
                                        const progressBar = document.getElementById(progressBarId);
                                        const progressText = document.getElementById(progressTextId);

                                        // Generate a random progress between 40 and 99
                                        const randomProgress = Math.random() * (99 - 40) + 40;

                                        progressBar.style.width = `${randomProgress}%`;
                                        progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
                                        progressText.textContent = `${randomProgress.toFixed(2)}%`;
                                    }

                                    // Initial calls
                                    updateProgressBar("progress-bar-4", "progress-text-4");

                                    // Update the progress every 1 to 3 minutes for each progress bar
                                    setInterval(()=>updateProgressBar("progress-bar-4", "progress-text-4"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
                                </script>
                            </div>
                        </div>
                    </a>
                </div>   
                <div class="col-md-3">
                                         <a href="hackers/hack-piggy">
                                            <div class="card" style="width: 18rem;">
                            <div class="game-image">
                                <img src="imagens/pig-gold.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="game-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Piggy Gold</h2>
                                        <p>Pgsoft</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="online">Disponivel</div>
                                    </div>
                                </div>
                            </div>
                            <div class="game-footer">
                                <p>Assertividade</p>
                                <div class="progress-container" id="progress-container-5">
                                    <div class="progress">
                                        <div class="progress-bar" id="progress-bar-5">
                                            <div class="progress-title">
                                                <span class="progress-text" id="progress-text-5">0%</span></font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function getRandomProgressColor(progress) {
                                        if (progress >= 40 && progress <= 49) {
                                            return '#ff0000';
                                            // Red
                                        } else if (progress >= 50 && progress <= 59) {
                                            return '#ffa200';
                                            // Yellow
                                        } else {
                                            return '#00b24a';
                                            // Green
                                        }
                                    }

                                    function updateProgressBar(progressBarId, progressTextId) {
                                        const progressBar = document.getElementById(progressBarId);
                                        const progressText = document.getElementById(progressTextId);

                                        // Generate a random progress between 40 and 99
                                        const randomProgress = Math.random() * (99 - 40) + 40;

                                        progressBar.style.width = `${randomProgress}%`;
                                        progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
                                        progressText.textContent = `${randomProgress.toFixed(2)}%`;
                                    }

                                    // Initial calls
                                    updateProgressBar("progress-bar-5", "progress-text-5");

                                    // Update the progress every 1 to 3 minutes for each progress bar
                                    setInterval(()=>updateProgressBar("progress-bar-5", "progress-text-5"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
                                </script>
                            </div>
                        </div>
                    </a>
                </div>  
                <div class="col-md-3">
                <a href="hackers/stockmarket/">
                                            <div class="card" style="width: 18rem;">
                            <div class="game-image">
                                <img src="imagens/dragon-tiger.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="game-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Stock Market</h2>
                                        <p>Evolution</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="online">Disponivel</div>
                                    </div>
                                </div>
                            </div>
                            <div class="game-footer">
                                <p>Assertividade</p>
                                <div class="progress-container" id="progress-container-6">
                                    <div class="progress">
                                        <div class="progress-bar" id="progress-bar-6">
                                            <div class="progress-title">
                                                <span class="progress-text" id="progress-text-6">0%</span></font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function getRandomProgressColor(progress) {
                                        if (progress >= 40 && progress <= 49) {
                                            return '#ff0000';
                                            // Red
                                        } else if (progress >= 50 && progress <= 59) {
                                            return '#ffa200';
                                            // Yellow
                                        } else {
                                            return '#00b24a';
                                            // Green
                                        }
                                    }

                                    function updateProgressBar(progressBarId, progressTextId) {
                                        const progressBar = document.getElementById(progressBarId);
                                        const progressText = document.getElementById(progressTextId);

                                        // Generate a random progress between 40 and 99
                                        const randomProgress = Math.random() * (99 - 40) + 40;

                                        progressBar.style.width = `${randomProgress}%`;
                                        progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
                                        progressText.textContent = `${randomProgress.toFixed(2)}%`;
                                    }

                                    // Initial calls
                                    updateProgressBar("progress-bar-6", "progress-text-6");

                                    // Update the progress every 1 to 3 minutes for each progress bar
                                    setInterval(()=>updateProgressBar("progress-bar-6", "progress-text-6"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
                                </script>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                <a href="hackers/hack-fortunedragon">
                       <div class="card" style="width: 18rem;">
       <div class="game-image">
           <img src="imagens/fortunedragon.jpg" class="card-img-top" alt="...">
       </div>
       <div class="game-body">
           <div class="row">
               <div class="col-md-8">
                   <h2>Fortune Dragon</h2>
                   <p>Pgsoft</p>
               </div>
               <div class="col-md-4">
                   <div class="online">Disponivel</div>
               </div>
           </div>
       </div>
       <div class="game-footer">
           <p>Assertividade</p>
           <div class="progress-container" id="progress-container-7">
            <div class="progress">
                <div class="progress-bar" id="progress-bar-7">
                    <div class="progress-title">
                        <span class="progress-text" id="progress-text-7">0%</span></font>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function getRandomProgressColor(progress) {
                if (progress >= 40 && progress <= 49) {
                    return '#ff0000';
                    // Red
                } else if (progress >= 50 && progress <= 59) {
                    return '#ffa200';
                    // Yellow
                } else {
                    return '#00b24a';
                    // Green
                }
            }

            function updateProgressBar(progressBarId, progressTextId) {
                const progressBar = document.getElementById(progressBarId);
                const progressText = document.getElementById(progressTextId);

                // Generate a random progress between 40 and 99
                const randomProgress = Math.random() * (99 - 40) + 40;

                progressBar.style.width = `${randomProgress}%`;
                progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
                progressText.textContent = `${randomProgress.toFixed(2)}%`;
            }

            // Initial calls
            updateProgressBar("progress-bar-7", "progress-text-7");

            // Update the progress every 1 to 3 minutes for each progress bar
            setInterval(()=>updateProgressBar("progress-bar-7", "progress-text-7"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
        </script>
       </div>
   </div>
</a>
</div>
<div class="col-md-3">
<a href="hackers/hack-rabbit">
       <div class="card" style="width: 18rem;">
<div class="game-image">
<img src="imagens/fortune-r.jpg" class="card-img-top" alt="...">
</div>
<div class="game-body">
<div class="row">
<div class="col-md-8">
   <h2>Fortune Rabbit</h2>
   <p>PG Soft</p>
</div>
<div class="col-md-4">
   <div class="online">Disponivel</div>
</div>
</div>
</div>
<div class="game-footer">
<p>Assertividade</p>
<div class="progress-container" id="progress-container-8">
    <div class="progress">
        <div class="progress-bar" id="progress-bar-8">
            <div class="progress-title">
                <span class="progress-text" id="progress-text-8">0%</span></font>
            </div>
        </div>
    </div>
</div>
<script>
    function getRandomProgressColor(progress) {
        if (progress >= 40 && progress <= 49) {
            return '#ff0000';
            // Red
        } else if (progress >= 50 && progress <= 59) {
            return '#ffa200';
            // Yellow
        } else {
            return '#00b24a';
            // Green
        }
    }

    function updateProgressBar(progressBarId, progressTextId) {
        const progressBar = document.getElementById(progressBarId);
        const progressText = document.getElementById(progressTextId);

        // Generate a random progress between 40 and 99
        const randomProgress = Math.random() * (99 - 40) + 40;

        progressBar.style.width = `${randomProgress}%`;
        progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
        progressText.textContent = `${randomProgress.toFixed(2)}%`;
    }

    // Initial calls
    updateProgressBar("progress-bar-8", "progress-text-8");

    // Update the progress every 1 to 3 minutes for each progress bar
    setInterval(()=>updateProgressBar("progress-bar-8", "progress-text-8"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
</script>
</div>
</div>
</a>
</div>  
                <div class="col-md-3">
                <a href="hackers/aviator">
                                            <div class="card" style="width: 18rem;">
                            <div class="game-image">
                                <img src="imagens/aviator.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="game-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Aviator</h2>
                                        <p>Spribe</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="online">Disponivel</div>
                                    </div>
                                </div>
                            </div>
                            <div class="game-footer">
                                <p>Assertividade</p>
                                <div class="progress-container" id="progress-container-9">
                                    <div class="progress">
                                        <div class="progress-bar" id="progress-bar-9">
                                            <div class="progress-title">
                                                <span class="progress-text" id="progress-text-9">0%</span></font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function getRandomProgressColor(progress) {
                                        if (progress >= 40 && progress <= 49) {
                                            return '#ff0000';
                                            // Red
                                        } else if (progress >= 50 && progress <= 59) {
                                            return '#ffa200';
                                            // Yellow
                                        } else {
                                            return '#00b24a';
                                            // Green
                                        }
                                    }

                                    function updateProgressBar(progressBarId, progressTextId) {
                                        const progressBar = document.getElementById(progressBarId);
                                        const progressText = document.getElementById(progressTextId);

                                        // Generate a random progress between 40 and 99
                                        const randomProgress = Math.random() * (99 - 40) + 40;

                                        progressBar.style.width = `${randomProgress}%`;
                                        progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
                                        progressText.textContent = `${randomProgress.toFixed(2)}%`;
                                    }

                                    // Initial calls
                                    updateProgressBar("progress-bar-9", "progress-text-9");

                                    // Update the progress every 1 to 3 minutes for each progress bar
                                    setInterval(()=>updateProgressBar("progress-bar-9", "progress-text-9"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
                                </script>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                <a href="hackers/spaceman">
                       <div class="card" style="width: 18rem;">
       <div class="game-image">
           <img src="imagens/spaceman.jpg" class="card-img-top" alt="...">
       </div>
       <div class="game-body">
           <div class="row">
               <div class="col-md-8">
                   <h2>Space Man</h2>
                   <p>Spribe</p>
               </div>
               <div class="col-md-4">
                   <div class="online">Disponivel</div>
               </div>
           </div>
       </div>
       <div class="game-footer">
           <p>Assertividade</p>
           <div class="progress-container" id="progress-container-10">
            <div class="progress">
                <div class="progress-bar" id="progress-bar-10">
                    <div class="progress-title">
                        <span class="progress-text" id="progress-text-10">0%</span></font>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function getRandomProgressColor(progress) {
                if (progress >= 40 && progress <= 49) {
                    return '#ff0000';
                    // Red
                } else if (progress >= 50 && progress <= 59) {
                    return '#ffa200';
                    // Yellow
                } else {
                    return '#00b24a';
                    // Green
                }
            }

            function updateProgressBar(progressBarId, progressTextId) {
                const progressBar = document.getElementById(progressBarId);
                const progressText = document.getElementById(progressTextId);

                // Generate a random progress between 40 and 99
                const randomProgress = Math.random() * (99 - 40) + 40;

                progressBar.style.width = `${randomProgress}%`;
                progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
                progressText.textContent = `${randomProgress.toFixed(2)}%`;
            }

            // Initial calls
            updateProgressBar("progress-bar-10", "progress-text-10");

            // Update the progress every 1 to 3 minutes for each progress bar
            setInterval(()=>updateProgressBar("progress-bar-10", "progress-text-10"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
        </script>
       </div>
   </div>
</a>
</div>

<div class="col-md-3">
<a href="hackers/hack-tree">
       <div class="card" style="width: 18rem;">
<div class="game-image">
<img src="imagens/fortunetree.jpg" class="card-img-top" alt="...">
</div>
<div class="game-body">
<div class="row">
<div class="col-md-8">
   <h2>Tree of Fortune</h2>
   <p>Spribe</p>
</div>
<div class="col-md-4">
   <div class="online">Disponivel</div>
</div>
</div>
</div>
<div class="game-footer">
<p>Assertividade</p>
<div class="progress-container" id="progress-container-11">
    <div class="progress">
        <div class="progress-bar" id="progress-bar-11">
            <div class="progress-title">
                <span class="progress-text" id="progress-text-11">0%</span></font>
            </div>
        </div>
    </div>
</div>
<script>
    function getRandomProgressColor(progress) {
        if (progress >= 40 && progress <= 49) {
            return '#ff0000';
            // Red
        } else if (progress >= 50 && progress <= 59) {
            return '#ffa200';
            // Yellow
        } else {
            return '#00b24a';
            // Green
        }
    }

    function updateProgressBar(progressBarId, progressTextId) {
        const progressBar = document.getElementById(progressBarId);
        const progressText = document.getElementById(progressTextId);

        // Generate a random progress between 40 and 99
        const randomProgress = Math.random() * (99 - 40) + 40;

        progressBar.style.width = `${randomProgress}%`;
        progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
        progressText.textContent = `${randomProgress.toFixed(2)}%`;
    }

    // Initial calls
    updateProgressBar("progress-bar-11", "progress-text-11");

    // Update the progress every 1 to 3 minutes for each progress bar
    setInterval(()=>updateProgressBar("progress-bar-11", "progress-text-11"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
</script>
</div>
</div>
</a>
</div>

<div class="col-md-3">
<a href="hackers/hack-mouse">
       <div class="card" style="width: 18rem;">
<div class="game-image">
<img src="imagens/fortune-m.jpg" class="card-img-top" alt="...">
</div>
<div class="game-body">
<div class="row">
<div class="col-md-8">
   <h2>Fortune Mouse</h2>
   <p>PG Soft</p>
</div>
<div class="col-md-4">
   <div class="online">Disponivel</div>
</div>
</div>
</div>
<div class="game-footer">
<p>Assertividade</p>
<div class="progress-container" id="progress-container-2">
    <div class="progress">
        <div class="progress-bar" id="progress-bar-12">
            <div class="progress-title">
                <span class="progress-text" id="progress-text-12">0%</span></font>
            </div>
        </div>
    </div>
</div>
<script>
    function getRandomProgressColor(progress) {
        if (progress >= 40 && progress <= 49) {
            return '#ff0000';
            // Red
        } else if (progress >= 50 && progress <= 59) {
            return '#ffa200';
            // Yellow
        } else {
            return '#00b24a';
            // Green
        }
    }

    function updateProgressBar(progressBarId, progressTextId) {
        const progressBar = document.getElementById(progressBarId);
        const progressText = document.getElementById(progressTextId);

        // Generate a random progress between 40 and 99
        const randomProgress = Math.random() * (99 - 40) + 40;

        progressBar.style.width = `${randomProgress}%`;
        progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
        progressText.textContent = `${randomProgress.toFixed(2)}%`;
    }

    // Initial calls
    updateProgressBar("progress-bar-12", "progress-text-12");

    // Update the progress every 1 to 3 minutes for each progress bar
    setInterval(()=>updateProgressBar("progress-bar-12", "progress-text-12"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
</script>
</div>
</div>
</a>
</div>

<div class="col-md-3">
    <a href="hackers/cashmania/">
           <div class="card" style="width: 18rem;">
    <div class="game-image">
    <img src="imagens/cashmania.jpg" class="card-img-top" alt="...">
    </div>
    <div class="game-body">
    <div class="row">
    <div class="col-md-8">
       <h2>Cash Mania</h2>
       <p>PG Soft</p>
    </div>
    <div class="col-md-4">
       <div class="online">Disponivel</div>
    </div>
    </div>
    </div>
    <div class="game-footer">
    <p>Assertividade</p>
    <div class="progress-container" id="progress-container-2">
        <div class="progress">
            <div class="progress-bar" id="progress-bar-13">
                <div class="progress-title">
                    <span class="progress-text" id="progress-text-13">0%</span></font>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getRandomProgressColor(progress) {
            if (progress >= 40 && progress <= 49) {
                return '#ff0000';
                // Red
            } else if (progress >= 50 && progress <= 59) {
                return '#ffa200';
                // Yellow
            } else {
                return '#00b24a';
                // Green
            }
        }
    
        function updateProgressBar(progressBarId, progressTextId) {
            const progressBar = document.getElementById(progressBarId);
            const progressText = document.getElementById(progressTextId);
    
            // Generate a random progress between 40 and 99
            const randomProgress = Math.random() * (99 - 40) + 40;
    
            progressBar.style.width = `${randomProgress}%`;
            progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
            progressText.textContent = `${randomProgress.toFixed(2)}%`;
        }
    
        // Initial calls
        updateProgressBar("progress-bar-13", "progress-text-13");
    
        // Update the progress every 1 to 3 minutes for each progress bar
        setInterval(()=>updateProgressBar("progress-bar-13", "progress-text-13"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
    </script>
    </div>
    </div>
    </a>
    </div>

    <div class="col-md-3">
        <a href="hackers/bacbo/">
               <div class="card" style="width: 18rem;">
        <div class="game-image">
        <img src="imagens/bacbo.jpg" class="card-img-top" alt="...">
        </div>
        <div class="game-body">
        <div class="row">
        <div class="col-md-8">
           <h2>Bac Bo</h2>
           <p>Evolution</p>
        </div>
        <div class="col-md-4">
           <div class="online">Disponivel</div>
        </div>
        </div>
        </div>
        <div class="game-footer">
        <p>Assertividade</p>
        <div class="progress-container" id="progress-container-2">
            <div class="progress">
                <div class="progress-bar" id="progress-bar-14">
                    <div class="progress-title">
                        <span class="progress-text" id="progress-text-14">0%</span></font>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function getRandomProgressColor(progress) {
                if (progress >= 40 && progress <= 49) {
                    return '#ff0000';
                    // Red
                } else if (progress >= 50 && progress <= 59) {
                    return '#ffa200';
                    // Yellow
                } else {
                    return '#00b24a';
                    // Green
                }
            }
        
            function updateProgressBar(progressBarId, progressTextId) {
                const progressBar = document.getElementById(progressBarId);
                const progressText = document.getElementById(progressTextId);
        
                // Generate a random progress between 40 and 99
                const randomProgress = Math.random() * (99 - 40) + 40;
        
                progressBar.style.width = `${randomProgress}%`;
                progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
                progressText.textContent = `${randomProgress.toFixed(2)}%`;
            }
        
            // Initial calls
            updateProgressBar("progress-bar-14", "progress-text-14");
        
            // Update the progress every 1 to 3 minutes for each progress bar
            setInterval(()=>updateProgressBar("progress-bar-14", "progress-text-14"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
        </script>
        </div>
        </div>
        </a>
        </div>

        <div class="col-md-3">
            <a href="hackers/roleta/">
                   <div class="card" style="width: 18rem;">
            <div class="game-image">
            <img src="imagens/mega.jpg" class="card-img-top" alt="...">
            </div>
            <div class="game-body">
            <div class="row">
            <div class="col-md-8">
               <h2>Mega Roulete</h2>
               <p>Pragmatic</p>
            </div>
            <div class="col-md-4">
               <div class="online">Disponivel</div>
            </div>
            </div>
            </div>
            <div class="game-footer">
            <p>Assertividade</p>
            <div class="progress-container" id="progress-container-2">
                <div class="progress">
                    <div class="progress-bar" id="progress-bar-15">
                        <div class="progress-title">
                            <span class="progress-text" id="progress-text-15">0%</span></font>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function getRandomProgressColor(progress) {
                    if (progress >= 40 && progress <= 49) {
                        return '#ff0000';
                        // Red
                    } else if (progress >= 50 && progress <= 59) {
                        return '#ffa200';
                        // Yellow
                    } else {
                        return '#00b24a';
                        // Green
                    }
                }
            
                function updateProgressBar(progressBarId, progressTextId) {
                    const progressBar = document.getElementById(progressBarId);
                    const progressText = document.getElementById(progressTextId);
            
                    // Generate a random progress between 40 and 99
                    const randomProgress = Math.random() * (99 - 40) + 40;
            
                    progressBar.style.width = `${randomProgress}%`;
                    progressBar.style.backgroundColor = getRandomProgressColor(randomProgress);
                    progressText.textContent = `${randomProgress.toFixed(2)}%`;
                }
            
                // Initial calls
                updateProgressBar("progress-bar-15", "progress-text-15");
            
                // Update the progress every 1 to 3 minutes for each progress bar
                setInterval(()=>updateProgressBar("progress-bar-15", "progress-text-15"), Math.random() * (3 - 1) * 60 * 1000 + 1 * 60 * 1000);
            </script>
            </div>
            </div>
            </a>
            </div>

<script disable-devtool-auto="" src="npm/disable-devtool"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<iframe style="opacity: 0;" src="https://onabet.cxclick.com/visit/?bta=63912&brand=onabet&utm_campaign=app" width="1" height="1" scrolling="no"></iframe>
<script src="js/game.js"></script>

  </body>
</html>
