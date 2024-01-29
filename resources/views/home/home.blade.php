<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Clason | Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div id="home" class="mainPage">
        <header>
            <h2 class="logo">Clason</h2>
            <nav class="links">
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="product">Products</a>
                <button class="loginBtn" onclick="window.location.href='/login'">Login</button>
            </nav>
        </header>

        <div class="contents">
            <h1>Currently one of the Top 100</h1>
            <h1>Restaurants Around the World!</h1>
            <button class="reserveBtn" onclick="window.location.href='/login'">Reserve Now!</button>
        </div>
    </div>
    
    <div id="about" class="about">
        <div class="contents">
            <h2>About</h2>
            <h1>Clason Restaurant</h1>
            <p>Clason Restaurant is a culinary gem, offering an authentic blend of global flavors in a luxurious yet inviting setting. From signature dishes to innovative creations, each bite is a journey of delight. The restaurant's ambiance is a perfect blend of opulence and comfort, providing a sophisticated space for memorable dining experiences. Come, indulge in the extraordinary at Clason Restaurant.</p>
        </div>
        <div class="image">
            <img src="images/coffe.jpg" alt="Your Image">
        </div>
    </div>
    
    <div class="sliders">
        <div class="slider">
            <div class="slider-wrapper flex">
                <div class="slide flex">
                    <div class="slide-image slider-link prev"><img src="images/ceo.png"><div class="overlay"></div></div>
                    <div class="slide-content">
                        <div class="slide-date">Owner of Clason</div>
                        <div class="slide-title">Brian Thomas</div>
                        <div class="slide-text">Making people happy, one stomach at a time.</div>
                        <div class="slide-more"><a href="https://www.linkedin.com/in/brian-thomas/">Contact Me</a></div>
                    </div>	
                </div>
                <div class="slide flex">
                    <div class="slide-image slider-link next"><img src="images/chef0.jpg"><div class="overlay"></div></div>
                    <div class="slide-content">
                        <div class="slide-date">Executive Chef</div>
                        <div class="slide-title">Renaldi Apriyanto Kadang</div>
                        <div class="slide-text">Kuliah. Kerja. Tipes.</div>
                        <div class="slide-more"><a href="https://www.linkedin.com/in/renaldi-apriyanto-kadang/">Contact Me</a></div>
                    </div>	
                </div>	
                <div class="slide flex">
                    <div class="slide-image slider-link next"><img src="images/chef2.jpg"><div class="overlay"></div></div>
                    <div class="slide-content">
                        <div class="slide-date">Sous Chef</div>
                        <div class="slide-title">Jason Patrick Winarto Hardiman</div>
                        <div class="slide-text">我的惩罚是记住你的时间比我认识你的时间还要长</div>
                        <div class="slide-more"><a href="https://www.linkedin.com/in/jason-patrick-winarto-hardiman/">Contact Me</a></div>
                    </div>	
                </div>
                    <div class="slide flex">
                    <div class="slide-image slider-link next"><img src="images/chef1.jpg"><div class="overlay"></div></div>
                    <div class="slide-content">
                        <div class="slide-date">Pastry Chef</div>
                        <div class="slide-title">Clarice Arlin Wijaya</div>
                        <div class="slide-text">hippyaya</div>
                        <div class="slide-more"><a href="https://www.linkedin.com/in/clarice-arlin-wijaya/">Contact Me</a></div>
                    </div>	
                </div>
            </div>
            <div class="arrows">
            <a href="#" title="Previous" class="arrow slider-link prev"></a>
            <a href="#" title="Next" class="arrow slider-link next"></a>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <h3>Clason</h3>
            <p>Since 1945.</p>
            <ul class="sosials">
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg></a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4l11.733 16h4.267l-11.733 -16z" /><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg></a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-discord-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14.983 3l.123 .006c2.014 .214 3.527 .672 4.966 1.673a1 1 0 0 1 .371 .488c1.876 5.315 2.373 9.987 1.451 12.28c-1.003 2.005 -2.606 3.553 -4.394 3.553c-.732 0 -1.693 -.968 -2.328 -2.045a21.512 21.512 0 0 0 2.103 -.493a1 1 0 1 0 -.55 -1.924c-3.32 .95 -6.13 .95 -9.45 0a1 1 0 0 0 -.55 1.924c.717 .204 1.416 .37 2.103 .494c-.635 1.075 -1.596 2.044 -2.328 2.044c-1.788 0 -3.391 -1.548 -4.428 -3.629c-.888 -2.217 -.39 -6.89 1.485 -12.204a1 1 0 0 1 .371 -.488c1.439 -1.001 2.952 -1.459 4.966 -1.673a1 1 0 0 1 .935 .435l.063 .107l.651 1.285l.137 -.016a12.97 12.97 0 0 1 2.643 0l.134 .016l.65 -1.284a1 1 0 0 1 .754 -.54l.122 -.009zm-5.983 7a2 2 0 0 0 -1.977 1.697l-.018 .154l-.005 .149l.005 .15a2 2 0 1 0 1.995 -2.15zm6 0a2 2 0 0 0 -1.977 1.697l-.018 .154l-.005 .149l.005 .15a2 2 0 1 0 1.995 -2.15z" stroke-width="0" fill="currentColor" /></svg></a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 3a5 5 0 0 1 5 5v8a5 5 0 0 1 -5 5h-12a5 5 0 0 1 -5 -5v-8a5 5 0 0 1 5 -5zm-9 6v6a1 1 0 0 0 1.514 .857l5 -3a1 1 0 0 0 0 -1.714l-5 -3a1 1 0 0 0 -1.514 .857z" stroke-width="0" fill="currentColor" /></svg></a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2020 Clason. designed by <span>Jason & Clarice</span></p>
        </div>
    </footer>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    
    <script src="js/home.js"></script>
</body>
</html>