<!DOCTYPE html>
<html>
<head>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        #canvas {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        h1 {
            z-index: 200;
            position: absolute;
            left: 50%;
            top: 15%;
            transform: translate(-50%, -50%);
            font: bold 300px Arial, sans-serif;
            text-align: center;
            color: transparent;
            text-shadow: 0 0 30px rgba(0, 0, 0, .5);
            animation: flicker 2s linear infinite;
        }

        @keyframes flicker {
            0% { text-shadow: 0 0 30px rgba(0, 0, 0, .5); }
            33% { text-shadow: 0 0 10px rgba(0, 0, 0, .4); }
            66% { text-shadow: 0 0 20px rgba(0, 0, 0, .2); }
            100% { text-shadow: 0 0 40px rgba(0, 0, 0, .8); }
        }

        .back-button {
            z-index: 200;
            position: absolute;
            left: 50%;
            top: 80%;
            transform: translate(-50%, -50%);
            font: bold 20px Arial, sans-serif;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.5);
            color: #000;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
            animation: glitch 2s linear infinite;
            box-shadow: 25px 19px 10px -3px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: 25px 19px 10px -3px rgba(0, 0, 0, 0.5);
            border: solid 1px grey;
        }

        .back-button:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }

        @keyframes glitch {
            0% {
                text-shadow: none;
            }
            5% {
                text-shadow: -5px 0 rgba(0, 0, 0, .8), 5px 0 rgba(0, 0, 0, .5);
                box-shadow: 25px 19px 8px -5px rgba(0, 0, 0, 0.5)
            }
            10% {
                text-shadow: none;
            }
            15% {
                text-shadow: -5px 0 rgba(0, 0, 0, .7), 5px 0 rgba(0, 0, 0, .4);
                box-shadow: 25px 19px 8px -5px rgba(0, 0, 0, 0.5)
            }
            20% {
                text-shadow: none;
            }
            25% {
                text-shadow: -5px 0 rgba(0, 0, 0, 0.5), 5px 0 rgba(0, 15, 0, 0.5);
                box-shadow: 25px 19px 8px -5px rgba(0, 0, 0, 0.5)
            }
            30% {
                text-shadow: none;
            }
            75% {
                text-shadow: -5px 0 rgba(0, 0, 0, 0.5), 7px 0 rgba(0, 10, 0, 0.5);
            }
            80% {
                text-shadow: none;
            }
            100% {
                text-shadow: none;
            }
        }
    </style>
</head>
<body>
<h1>404</h1>
<a href="./" class="back-button">Retour à l'accueil</a>
<canvas id="canvas"></canvas>

<script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    ctx.fillStyle = 'white';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    function flickering() {
        const imgData = ctx.getImageData(0, 0, canvas.width, canvas.height);
        const pix = imgData.data;
        for (let i = 0; i < pix.length; i += 4) {
            const color = (Math.random() * 255) + 50;
            pix[i] = color;
            pix[i + 1] = color;
            pix[i + 2] = color;
        }
        ctx.putImageData(imgData, 0, 0);
    }

    setInterval(flickering, 30);
</script>
</body>
</html>
