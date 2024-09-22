<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #E6E6FA; /* Cor lavanda */
            font-family: 'Roboto', sans-serif;
            color: #333;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2.5rem;
            color: #4B0082; /* Cor índigo para contraste */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .img-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }

        .img-container img {
            margin: 10px;
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .img-container img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .btn-container {
            margin-bottom: 20px;
        }

        .btn-container button {
            margin: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-container button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        #totalImages {
            color: #4B0082; /* Índigo para combinar com o título */
            font-size: 1.2rem;
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<h1>Array e suas funções</h1>

<div class="btn-container">
    <button id="addImage" class="btn btn-success">Adicionar Imagem</button>
    <button id="removeLast" class="btn btn-danger">Remover Última Imagem</button>
    <button id="removeFirst" class="btn btn-warning">Remover Primeira Imagem</button>
    <button id="addFirst" class="btn btn-primary">Adicionar Imagem no Início</button>
    <button id="countImages" class="btn btn-info">Contar Imagens</button>
</div>

<p id="totalImages">Total de Imagens: 0</p>
<div class="img-container" id="imgContainer">
    <img src="img/imagem1.jpg" alt="Imagem">
    <img src="img/imagem2.jpg" alt="Imagem">
    <img src="img/imagem3.jpg" alt="Imagem">
    <img src="img/imagem4.jpg" alt="Imagem">
    <img src="img/imagem5.jpg" alt="Imagem">
</div>

<script>
    let imagens = [
        'img/imagem1.jpg',
        'img/imagem2.jpg',
        'img/imagem3.jpg',
        'img/imagem4.jpg',
        'img/imagem5.jpg'
    ];

    const imgContainer = document.getElementById('imgContainer');
    const totalImagesText = document.getElementById('totalImages');

    // Função para renderizar as imagens na tela
    function renderImages() {
        imgContainer.innerHTML = ''; // Limpa o container
        imagens.forEach(imagem => {
            const imgElement = document.createElement('img');
            imgElement.src = imagem;
            imgElement.alt = 'Imagem';
            imgContainer.appendChild(imgElement);
        });
        totalImagesText.textContent = `Total de Imagens: ${imagens.length}`;
    }

    // Inicializa com as imagens existentes
    renderImages();

    // Botão para adicionar uma imagem ao final
    document.getElementById('addImage').addEventListener('click', () => {
        imagens.push('img/imagem6.jpg'); // Adiciona uma nova imagem ao final
        renderImages();
    });

    // Botão para remover a última imagem
    document.getElementById('removeLast').addEventListener('click', () => {
        imagens.pop(); // Remove a última imagem
        renderImages();
    });

    // Botão para remover a primeira imagem
    document.getElementById('removeFirst').addEventListener('click', () => {
        imagens.shift(); // Remove a primeira imagem
        renderImages();
    });

    // Botão para adicionar uma imagem no início
    document.getElementById('addFirst').addEventListener('click', () => {
        imagens.unshift('img/imagem7.jpg'); // Adiciona uma nova imagem no início
        renderImages();
    });

    // Botão para contar o número de imagens
    document.getElementById('countImages').addEventListener('click', () => {
        alert(`Total de imagens: ${imagens.length}`);
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
