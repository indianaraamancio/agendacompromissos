<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de compromissos - Secretária</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/formularios.css">
	<link rel="stylesheet" href="../css/alertas.css">	
</head>
<body>
<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Houve algum problema cadastrar a pessoa!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Pessoa cadastrada com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php } ?>
</div>

    <?php include("menuSecretaria.php"); ?>    

    <h3 class="titulos">Cadastro de pessoas</h3>  

	<form action="registrarPessoas.php" method="POST">

		<div class="form-group">
		  <label class="control-label" for="Nome">Nome *</label>  
		<div class="col-md-8">
		 <input type="text" name="nome" class="form-control" >
		</div>
		</div>
		
		 <div class="form-group">
		  <label class="control-label" for="Nome">Sobrenome *</label>  
		<div class="col-md-8">
		 <input type="text" name="sobrenome" class="form-control" >
		</div>
		</div>
		
		<div class="form-group">
		  <label class="control-label" for="Nome">E-mail *</label>  
		<div class="col-md-8">
		 <input type="text" name="email" class="form-control" >
		</div>
		</div>
		
		<div class="form-group">
		  <label class="control-label" for="Nome">Foto *</label>  
		<div class="col-md-8">
		 <input type="file" name="foto" class="form-control" >
		</div>
		</div>
		
		<div class="form-group">
		<label class="control-label" for="Cadastrar"></label>
		<div class="col-md-8">
			<button  class="btn btn-danger" type="reset">Cancelar</button>
			<button  class="btn btn-success" type="submit">Cadastrar</button>			
		</div>
		</div>
		
	</form>
	
	<h4 class="titulos">Pesquisa</h4>
	
	<form action="#" method="GET">
		<div class="form-group">
		  <label class="control-label" for="textoPesquisa">Nome </label>  			
			 <input class="form-control" id="textoPesquisa" type="text" name="nomePesquisa">
			 <button type="submit" class="botaoAcao">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
				<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
				</svg>
			 </button>			 
		</div>
	</form>
	
	<div class="row">
	<div class="col-md-8">
	<table class="table">
		<tr>
			<th>Nome da pessoa</th>
			<th>Sobrenome</th>
			<th>E-mail</th>
			<th>Ações</th>
		</tr>
		
		<tr>
			<td>Alfredo</td>
			<td>da Silva</td>
			<td>alfredo.silva@gmail.com</td>
			<td>
			<form action="editarPessoa.php" method="POST" class="formAcao">
				<input type="hidden" name="idPessoa" value="">
				<button type="submit" class="botaoAcao">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
					  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
					</svg>
				</button>				
			</form>
			<form action="excluirPessoa.php" method="POST" class="formAcao">
				<input type="hidden" name="idPessoa" value="">
				<button type="submit" class="botaoAcao">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
					<path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
					</svg>
				</button>				
			</form>
			
			
			</td>
		</tr>
	
	</table>
	</div>
	</div>
	

</body>
</html>