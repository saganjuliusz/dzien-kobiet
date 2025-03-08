<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dzień Kobiet - TEB Tychy</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        .card {
            width: 95%;
            max-width: 1200px; /* Znacznie zwiększona szerokość */
            height: 90vh;
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            animation: cardAppear 1.5s ease;
        }
        
        @keyframes cardAppear {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .header {
            text-align: center;
            padding: 30px 20px;
            background: linear-gradient(135deg, #ff0084 0%, #33001b 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .header h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 4rem; /* Zwiększony rozmiar czcionki */
            font-weight: 700;
            margin-bottom: 10px;
            animation: textGlow 2s ease-in-out infinite alternate;
            position: relative;
            z-index: 2;
            letter-spacing: 3px;
        }
        
        @keyframes textGlow {
            from {
                text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #ff00de, 0 0 20px #ff00de;
            }
            to {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #ff00de, 0 0 40px #ff00de;
            }
        }
        
        .header h2 {
            font-size: 1.5rem;
            font-weight: 400;
            opacity: 0.9;
            animation: fadeIn 2s ease;
            position: relative;
            z-index: 2;
            letter-spacing: 2px;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 0.9;
            }
        }
        
        .content {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        .message {
            max-width: 900px; /* Zwiększona szerokość treści */
            margin-bottom: 30px;
            animation: messageAppear 2s ease;
            padding: 0 20px;
        }
        
        @keyframes messageAppear {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .message p {
            font-size: 1.4rem; /* Zwiększony rozmiar czcionki */
            line-height: 1.8;
            color: #343a40;
            margin-bottom: 25px; /* Większy odstęp między paragrafami */
            text-shadow: 0 0 2px rgba(255,255,255,0.8);
        }
        
        .signature {
            font-weight: 700;
            font-size: 1.6rem; /* Zwiększony rozmiar podpisu */
            color: #ff0084;
            margin-top: 40px;
            animation: signatureAppear 3s ease;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
        }
        
        @keyframes signatureAppear {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            70% {
                opacity: 0.7;
                transform: scale(1.1);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .decoration {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }
        
        .flower {
            position: absolute;
            font-size: 2.5rem; /* Zwiększony rozmiar kwiatów */
            color: #ff0084;
            filter: drop-shadow(0 0 5px rgba(255,0,132,0.3));
            animation: floatAnimation 8s ease-in-out infinite;
        }
        
        @keyframes floatAnimation {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-15px) rotate(10deg);
            }
            100% {
                transform: translateY(0) rotate(0deg);
            }
        }
        
        .flower1 {
            top: 15%;
            left: 5%; /* Przesunięcie w bok */
            font-size: 3rem;
            animation-delay: 0s;
        }
        
        .flower2 {
            bottom: 15%;
            right: 5%; /* Przesunięcie w bok */
            font-size: 2.5rem;
            animation-delay: 1s;
        }
        
        .flower3 {
            top: 50%;
            left: 8%; /* Przesunięcie w bok */
            font-size: 2.2rem;
            animation-delay: 2s;
        }
        
        .flower4 {
            bottom: 30%;
            right: 8%; /* Przesunięcie w bok */
            font-size: 2.8rem;
            animation-delay: 3s;
        }
        
        .flower5 {
            top: 25%;
            right: 15%; /* Przesunięcie w bok */
            font-size: 2rem;
            animation-delay: 1.5s;
        }
        
        .flower6 {
            bottom: 60%;
            left: 15%; /* Przesunięcie w bok */
            font-size: 2.2rem;
            animation-delay: 2.5s;
        }
        
        /* Dodatkowe kwiaty na bokach */
        .flower7 {
            top: 40%;
            left: 2%;
            font-size: 2.3rem;
            animation-delay: 3.5s;
        }
        
        .flower8 {
            bottom: 45%;
            right: 2%;
            font-size: 2.1rem;
            animation-delay: 4s;
        }
        
        .hearts {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }
        
        .heart {
            position: absolute;
            top: -10%;
            font-size: 0.8rem;
            color: rgba(255, 0, 132, 0.3);
            animation: heartFall linear infinite;
        }
        
        @keyframes heartFall {
            0% {
                transform: translateY(-10%) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(1000%) rotate(360deg);
                opacity: 0;
            }
        }
        
        .date {
            font-size: 1.3rem; /* Zwiększony rozmiar daty */
            color: #343a40;
            margin-top: 15px;
            animation: dateAppear 4s ease;
            font-weight: 500;
        }
        
        @keyframes dateAppear {
            0% {
                opacity: 0;
            }
            75% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        .shine {
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                90deg,
                rgba(255,255,255,0) 0%,
                rgba(255,255,255,0.4) 50%,
                rgba(255,255,255,0) 100%
            );
            animation: shine 5s infinite;
            z-index: 3;
        }
        
        @keyframes shine {
            0% {
                left: -100%;
            }
            20% {
                left: 100%;
            }
            100% {
                left: 100%;
            }
        }
        
        /* Dodatkowe ozdoby na bokach */
        .side-decoration-left,
        .side-decoration-right {
            position: absolute;
            top: 0;
            height: 100%;
            width: 10%;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            pointer-events: none;
        }
        
        .side-decoration-left {
            left: 0;
        }
        
        .side-decoration-right {
            right: 0;
        }
        
        .side-element {
            font-size: 2rem;
            opacity: 0.7;
            animation: sideElementFloat 6s ease-in-out infinite;
        }
        
        @keyframes sideElementFloat {
            0% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(10px);
            }
            100% {
                transform: translateX(0);
            }
        }
        
        footer {
            text-align: center;
            padding: 15px;
            background-color: rgba(255, 0, 132, 0.8);
            color: white;
            font-size: 1rem; /* Zwiększony rozmiar czcionki w stopce */
            position: relative;
            overflow: hidden;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.8rem;
            }
            
            .header h2 {
                font-size: 1.2rem;
            }
            
            .message p {
                font-size: 1.1rem;
            }
            
            .content {
                padding: 30px 20px;
            }
            
            .signature {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <div class="shine"></div>
            <h1>Dzień Kobiet</h1>
            <h2>8 marca 2025</h2>
        </div>
        
        <div class="content">
            <div class="message">
                <p>Z okazji Dnia Kobiet pragniemy złożyć wszystkim Paniom - uczennicom, nauczycielkom i pracownicom naszej szkoły najserdeczniejsze życzenia.</p>
                
                <p>Życzymy Wam nieograniczonej siły w realizacji marzeń, inspirujących sukcesów zawodowych, niezachwianej pewności siebie i nieustającej radości każdego dnia.</p>
                
                <p>Dziękujemy za Waszą obecność, która sprawia, że nasza szkolna społeczność rozkwita pięknem, inteligencją i kreatywnością!</p>
                
                <div class="signature">
                    Męska część Samorządu Szkolnego<br>
                    Technikum i Liceum TEB Tychy
                </div>
                
                <div class="date">
                    Tychy, 7 marca 2025
                </div>
            </div>
        </div>
        
        <div class="decoration">
            <div class="flower flower1"><i class="fas fa-flower"></i>🌸</div>
            <div class="flower flower2"><i class="fas fa-flower"></i>🌷</div>
            <div class="flower flower3"><i class="fas fa-flower"></i>🌹</div>
            <div class="flower flower4"><i class="fas fa-flower"></i>🌺</div>
            <div class="flower flower5"><i class="fas fa-flower"></i>💐</div>
            <div class="flower flower7"><i class="fas fa-flower"></i>🌼</div>
            <div class="flower flower8"><i class="fas fa-flower"></i>🌷</div>
        </div>
        
        <div class="side-decoration-left">
            <div class="side-element" style="animation-delay: 0.5s;">💖</div>
            <div class="side-element" style="animation-delay: 1.5s;">💕</div>
            <div class="side-element" style="animation-delay: 2.5s;">💝</div>
            <div class="side-element" style="animation-delay: 3.5s;">💗</div>
        </div>
        
        <div class="side-decoration-right">
            <div class="side-element" style="animation-delay: 1s;">💖</div>
            <div class="side-element" style="animation-delay: 2s;">💕</div>
            <div class="side-element" style="animation-delay: 3s;">💝</div>
            <div class="side-element" style="animation-delay: 4s;">💗</div>
        </div>
        
        <div class="hearts" id="hearts"></div>
        
    <footer>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> Juliusz Sagan. Wszystkie prawa zastrzeżone.</p>
        </div>
    </footer>
    </div>
    
    <script>
        // Animacja spadających serduszek
        function createHearts() {
            const heartsContainer = document.getElementById('hearts');
            const heartCount = 40; // Zwiększona liczba serduszek
            
            for (let i = 0; i < heartCount; i++) {
                const heart = document.createElement('div');
                heart.classList.add('heart');
                heart.innerHTML = '❤️';
                heart.style.left = Math.random() * 100 + '%';
                heart.style.animationDuration = Math.random() * 15 + 10 + 's';
                heart.style.animationDelay = Math.random() * 5 + 's';
                heart.style.fontSize = Math.random() * 1 + 0.5 + 'rem';
                heartsContainer.appendChild(heart);
            }
        }
        
        // Uruchomienie animacji po załadowaniu strony
        window.onload = function() {
            createHearts();
        };
    </script>
</body>
</html>