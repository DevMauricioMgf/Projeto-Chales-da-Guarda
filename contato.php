<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Chale da Guarda</title>
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="">Chalé da Guarda do Embau</a>
            <div class="mobile-menu">
                <div class="line1">
                </div>
                <div class="line2">
                </div>
                <div class="line3">
                </div>
            </div>
            <ul class="nav-list">
                <li><a href="index.html">Início</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="acomodacoes.html">Acomodações</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <a class="whattsapp-link" href="https://web.whatsapp.com/send?phone=5548996221420" target="_blank">
            <i class="fa fa-whatsapp"></i>
        </a>      
    </main>
    <div class="container">
    <div class="contato_todo">
    <section class="contato">
        <h1>Consulte a sua reserva</h1>
        <form method="post" action="consulta.php" >
                    
                    <label>Nome:</label>
                        <input type="text" name="nome" />
                        <br><br>
                        <label>Email:</label>
                        <input type="text" name="email" />	
                        <br><br>
                        <h3>Selecione o chalé que deseja consultar: </h3>
				        <select name="tipo">
					<option>Selecione</option>
					<option value="chale">Chalé</option>
					<option value="cabana">Cabana</option>
					<option value="cabana1">Cabana 1</option>
					<option value="cabana2">Cabana 2</option>
					<option value="cabana3">Cabana 3</option>
                    <option value="cabana5">Cabana 5</option>
				</select>
                <br><br>
                    <label>Check-in:</label>
                        <input type="date" name="checkin"/>
                        <br><br>
                    <label>Check-out: </label>
                        <input type="date" name="checkout"/>
                    <br><br>   
                    <input type="submit" name="Enviar" value="enviar" />
                </form>
                </section>

    <section class="maps">
        <h1>Localização</h1>
        <h3>Os Chalés ficam a 800 metros do centrinho e a 900 metros da praia</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42253.17212848036!2d-48.610178683221534!3d-27.930309717081542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9526d70f8ff03e01%3A0x7623ac7bdb913c9b!2sChal%C3%A9s%20da%20Guarda%20do%20Emba%C3%BA!5e0!3m2!1spt-BR!2sbr!4v1631128133728!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    </div>

    
    <div>

    <footer>
        <div class="conteiner">
            <h4>Chalés da Guarda do Embaú - &copy 2021 Todos direitos reservados</h4>
            <h4>Instagram : chales_da_guarda_do_embau</h4>
            <h4>R. Aderbal Ramos da Silva, 2533 - Guarda do Embaú, Palhoça - SC, 88139-351</h4>
        </div>
    </footer>
    
    <script src="js/mobile-navbar.js"></script>