<!DOCTYPE html>
<body>
    <div class="particles" id="particles-js"></div>

    <div class="container">
        <h1 class="glitch pulse">Sergio</h1>
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