<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Integração API</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="assets/script.js"></script>
</head>
<body>
	<div class="container">
		<!-- formulário ////////////////////////////// -->
        <form name="sentMessage" id="contactForm" method="post" action="mail/contact_me.php" novalidate accept-charset="ISO-8859-1">
            <div class="control-group form-group">
                <div class="controls">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu Nome"
                        required data-validation-required-message="Insira seu nome.">
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Seu Telefone"
                        required
                        data-validation-required-message="Insira seu telefone.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail"
                        required
                        data-validation-required-message="Insira seu e-mail.">
                </div>
            </div>
            <div id="success"></div>

            <div class="form-group">
                <div id="form-slider-status"></div>
                <input type="hidden" name="CampanhaKey" id="CampanhaKey" value="LEdUNxDX1VA1" />
                <input type="hidden" name="ProdutoKey" id="ProdutoKey" value="phLkjNI3qGI1" />
                

                <button type="submit" name="send" style="margin: 0; width: 100%;" class="btn btn-success" id="sendMessageButton" 
                onclick="abrirWhats()">INSCREVA-SE
                </button>

            </div>
        </form>
        <!-- formulário fim ////////////////////////////// -->
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>