<?php

// Inicia o cURL
$ch = curl_init();

// Define a URL original (do formulário de login)
curl_setopt($ch, CURLOPT_URL, 'https://www.xvideos.com');

// Habilita o protocolo POST
curl_setopt ($ch, CURLOPT_POST, 1);

// Define os parâmetros que serão enviados (usuário e senha por exemplo)
curl_setopt ($ch, CURLOPT_POSTFIELDS, 'signin-form[login]=>osdcv3@gmail.com&signin-form[password]=>kastro2000');

// Imita o comportamento patrão dos navegadores: manipular cookies
curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

// Define o tipo de transferência (Padrão: 1)
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

// Executa a requisição
$store = curl_exec ($ch);

// Define uma nova URL para ser chamada (após o login)
curl_setopt($ch, CURLOPT_URL, 'https://www.xvideos.com/video67687941/esfregando_buceta_suave_com_calcinha_super_molhada_para_orgasmo_pulsante');

// Executa a segunda requisição
$content = curl_exec ($ch);

// Encerra o cURL
#curl_close ($ch);
?>
