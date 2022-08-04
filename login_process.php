<?php

require_once('config.php');

try {
	if (isset($_POST['submit'])) {
		//select usuario
		$nome_usuario = isset($_POST['nome_usuario']) ? trim(strip_tags(htmlspecialchars($_POST['nome_usuario']))) : '';
		$senha = isset($_POST['senha']) ? trim(strip_tags(htmlspecialchars(sha1(md5($_POST['senha']))))) : '';
		$sql = "SELECT * FROM usuario WHERE nome_usuario=:nome_usuario and senha=:senha and ativo='1'"; 
        $stmt = $connection -> prepare($sql);
        $stmt -> bindValue(':nome_usuario', $nome_usuario);
        $stmt -> bindValue(':senha', $senha);
        $stmt -> execute();
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);
		$tipo_usuario_cod_tipo =  $result['tipo_usuario_cod_tipo'];
		$nome_completo =  $result['nome_completo'];
		$email =  $result['email'];
		$id = $result['id'];

		if($tipo_usuario_cod_tipo=='2'){
		$query = "SELECT * FROM perfil_fotografo WHERE usuario_id='$id'"; 
		$data = $connection -> prepare($query);
		$data ->execute();
		$var = $data -> fetch(PDO::FETCH_ASSOC);
		$bio = $var['bio'];
		$linkedin = $var['linkedin'];
		$instagram = $var['instagram'];
		$facebook = $var['facebook'];
		$foto_perfil = $var['foto_perfil'];
		$cidade = $var['cidade'];
		$estado = $var['estado'];
		$tel = $var['tel'];

		}else{
		}


		// conta a quantidade de linhas que foi atingida
		$userAmount = $stmt -> rowCount();
		
		if ($userAmount > 0) {
			if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
				session_start();
				
			  }

			$_SESSION['isLogged'] = true;
			$_SESSION['id'] = $id;
			$_SESSION['nome_usuario'] = $nome_usuario;
			$_SESSION['senha'] = $senha;
			$_SESSION['nome_completo'] = $nome_completo;
			$_SESSION['email'] = $email;
			$_SESSION['bio'] = $bio;
			$_SESSION['linkedin'] = $linkedin;
			$_SESSION['instagram'] = $instagram;
			$_SESSION['facebook'] = $facebook;
			$_SESSION['foto_perfil'] = $foto_perfil;
			$_SESSION['cidade'] = $cidade;
			$_SESSION['estado'] = $estado;
			$_SESSION['tel'] = $tel;
			  
			if ($tipo_usuario_cod_tipo =='2'){
                header('Location: pag_perfis_fotografo.php');
            } elseif ($tipo_usuario_cod_tipo =='3'){
                header('Location: pag_perfis_cliente.php');
            } else{
                header("#");
			}
		} 
	}
} catch (PDOException $error) {
	print 'Conexão falhou! ' . $error -> getMessage();
}

?>