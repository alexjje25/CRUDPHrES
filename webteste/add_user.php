<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <h2>Cadastrar novos Usuarios</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>Nome:</label>
      <input type="text" class="form-control"  placeholder="Digite seu nome Completo" name="user_name">
    </div>
	<div class="form-group">
      <label for="email">Login:</label>
      <input type="text" class="form-control"  placeholder="Digite o login" name="user_email">
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control"  placeholder="Digite a senha" name="user_password">
    </div>
	
	<div class="form-group">
      <label>Imagem:</label>
      <input type="file" class="form-control"  placeholder="Name" name="image">
    </div>
	
	<div class="form-group">
      <label>Detalhes:</label>
     <textarea class="form-control" name="user_details"></textarea>
    </div>
	
    
    <input type="submit" name="insert-btn" class="btn btn-primary" />
  </form>
  
  <?php
	$conn =  mysqli_connect('localhost','root','','testeamz');
	
	if(isset($_POST['insert-btn'])){
		
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$user_details = $_POST['user_details'];
		
	$insert = "INSERT INTO user(user_name,user_email,user_password,user_image,user_details) VALUES('$user_name','$user_email','$user_password','$image','$user_details')";
	
	$run_insert = mysqli_query($conn,$insert);
	if($run_insert ===  true){
		echo "Usuário Cadastrado com Sucesso";
		move_uploaded_file($image_tmp,"upload/$image");
	}else{
		echo "Falha ao Cadastrar Usuário, Tente novamente!";
	}	
	
		
	}
	
	
	
	
	
	
  
  ?>
  
  
  
  
  
</div>

</body>
</html>
