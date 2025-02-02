<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-top">
            <!-- Logo -->
            <div class="logo">
                <h4><a href="index.php">Airbnb</a></h4>
            </div>

            <!-- Links para alternar a barra de pesquisa -->
            <div class="search-toggle">
                <button id="accommodations-btn" class="active">Acomodações</button>
                <button id="experiences-btn">Experiências</button>
            </div>

            <div class="direita">
                <!-- Links anunciar o espaço no site -->
                <div class="anuncio">
                    <button id="anuncio-btn">Anuncie seu espaço na Airbnb</button>
                </div>

                <!-- Link/imagem para alterar o idioma -->
                <div class="change-languege">
                    <a href="#"><img src="Icone de troca de idiomas copia.png" alt="icone"></a>
                </div>

                <!-- Link/imagem para cadastro/login -->
                <div class="login">
                    <button id="login">Login</button>
                </div>
            </div>
        </div>
    
        <!-- Barra de pesquisa -->
        <div class="search-bar">
            <!-- Campos da barra de pesquisa (inicial: Acomodações) -->
            <div class="search-field">
                <label>ONDE</label>
                <input type="text" placeholder="Buscar destinos">
            </div>
            <div class="search-field">
                <label>CHECK IN</label>
                <input type="text" id="check-in" placeholder="Insira as datas">
            </div>
            <div class="search-field">
                <label>CHECK OUT</label>
                <input type="text" id="check-out" placeholder="Insira as datas">
            </div>
            <button type="submit">GO</button>
        </div>
    </header>
</body>
</html>