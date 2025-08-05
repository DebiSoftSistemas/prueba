<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHRISTIAN | Presentación</title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Orbitron:wght@700&family=Poppins:wght@300;700&display=swap');

  body {
    margin: 0;
    padding: 0;
    background-color: #0a0a0a;
    color: #fff;
    font-family: 'Poppins', sans-serif;
    overflow-x: hidden;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(-45deg, #111, #222, #333, #444);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
  }

  @keyframes gradientBG {
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

  .container {
    text-align: center;
    position: relative;
    z-index: 1;
  }

  h1 {
    font-family: 'Orbitron', sans-serif;
    font-size: 6rem;
    margin: 0;
    background: linear-gradient(90deg, #ff00cc, #3333ff);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    letter-spacing: 5px;
    animation: neonGlow 2s infinite alternate;
    position: relative;
  }

  @keyframes neonGlow {
    from {
      text-shadow: 0 0 10px rgba(255, 0, 204, 0.7), 0 0 20px rgba(255, 0, 204, 0.5);
    }

    to {
      text-shadow: 0 0 15px rgba(51, 51, 255, 0.7), 0 0 30px rgba(51, 51, 255, 0.5);
    }
  }

  .subtitle {
    font-family: 'Montserrat', sans-serif;
    font-weight: 300;
    font-size: 1.5rem;
    margin-top: 1rem;
    color: #aaa;
    letter-spacing: 3px;
  }

  .pulse {
    animation: pulse 2s infinite;
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

  .particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }

  .social-links {
    margin-top: 2rem;
  }

  .social-links a {
    color: white;
    font-size: 1.5rem;
    margin: 0 10px;
    transition: all 0.3s ease;
    display: inline-block;
  }

  .social-links a:hover {
    transform: translateY(-5px) scale(1.2);
    color: #ff00cc;
  }

  .glitch {
    position: relative;
  }

  .glitch::before,
  .glitch::after {
    content: 'ROTHMAN';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    background: linear-gradient(90deg, #ff00cc, #3333ff);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }

  .glitch::before {
    left: 2px;
    text-shadow: -2px 0 #00ffcc;
    animation: glitch-effect 3s infinite linear;
  }

  .glitch::after {
    left: -2px;
    text-shadow: -2px 0 #cc00ff;
    animation: glitch-effect 2s infinite linear reverse;
  }

  @keyframes glitch-effect {
    0% {
      transform: translate(0);
    }

    20% {
      transform: translate(-3px, 3px);
    }

    40% {
      transform: translate(-3px, -3px);
    }

    60% {
      transform: translate(3px, 3px);
    }

    80% {
      transform: translate(3px, -3px);
    }

    100% {
      transform: translate(0);
    }
  }
  </style>
</head>

<body>
  <div class="particles" id="particles-js"></div>

  <div class="container">
    <h1 class="glitch pulse">ROTHMAN</h1>
    <p class="subtitle">TECNOLOGÍA • INNOVACIÓN • ESTILO</p>

    <div class="social-links">
      <a href="#" target="_blank">⌨️</a>
      <a href="#" target="_blank">💻</a>
      <a href="#" target="_blank">🎧</a>
      <a href="#" target="_blank">📱</a>
      <a href="#" target="_blank">🚀</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script>
  // Configuración de partículas (puedes personalizar)
  particlesJS("particles-js", {
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle"
      },
      "opacity": {
        "value": 0.5,
        "random": true
      },
      "size": {
        "value": 3,
        "random": true
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 2,
        "direction": "none",
        "random": true,
        "straight": false,
        "out_mode": "out"
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "repulse"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "repulse": {
          "distance": 100,
          "duration": 0.4
        }
      }
    },
    "retina_detect": true
  });
  </script>
</body>

</html>