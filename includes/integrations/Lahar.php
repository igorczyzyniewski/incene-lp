<?php
	function integra_api_lahar($token_api_lahar, $endpoint, $nome_formulario, $campos) {
		$endpoint_full_url = 'https://app.lahar.com.br/api/'.$endpoint;
		if ($endpoint == 'conversions') {
			$method = 'POST';
		}
		if ($endpoint == 'leads') {
			$method = 'PUT';
		}
		try {
			if (!array_key_exists('token_api_lahar',$campos)) {
				$campos['token_api_lahar'] = $token_api_lahar;
			}
			else if ($campos['token_api_lahar'] == NULL) {
				$campos['token_api_lahar'] = $token_api_lahar;
			}
			if (!array_key_exists('nome_formulario',$campos)) {
				$campos['nome_formulario'] = $nome_formulario;
			}
			else if ($campos['nome_formulario'] == NULL) {
				$campos['nome_formulario'] = $nome_formulario;
			}
			if (!array_key_exists('url_origem',$campos)) {
				$campos['url_origem'] = 'integracao-javascript';
			}
			else if ($campos['url_origem'] == NULL) {
				$campos['url_origem'] = 'integracao-javascript';
			}
			$post_fields = http_build_query($campos);
			if ($method == 'POST') {
				$ch = curl_init($endpoint_full_url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
				curl_setopt($ch, CURLOPT_POST, TRUE);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				$curl_response = curl_exec($ch);
				curl_close($ch);
				$json = json_decode($curl_response);
				$retorno = $json;
			}
			else if ($method == 'PUT') {
				$ch = curl_init($endpoint_full_url);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($campos));
				$curl_response = curl_exec($ch);
				curl_close($ch);
				$json = json_decode($curl_response);
				$retorno = $json;
			}
		}
		catch (Exception $e) {
			$retorno = array(
				'status' => 'erro',
				'data' => array(
					'error' => array(
						'code' => 404,
						'message' => 'Erro imprevisto.'
					)
				)
			);
		}
		return $retorno;
	}

	function input($nome)
	{
		if (isset($_POST[$nome])) {
			return $_POST[$nome];
		}
	}

	$nome = input('nome');
	$email = input('email');
	$telefone = input('telefone');
	$mensagem = input('mensagem');

	$traducao = array(
		'email_contato' => $email,
		'nome_contato' => $nome,
		'tel_empresa' => $telefone,
		'anotacoes' => $mensagem

	);
	$valores = $traducao;

	integra_api_lahar('targetmaGc2BVfD0v67QwQpdaEQ4q88QeRU5XGAw0aMaLHQee6D5zhbTsXlNARmh', 'conversions', 'LANDING', $valores);
?>