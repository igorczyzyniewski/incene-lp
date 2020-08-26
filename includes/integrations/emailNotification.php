<?php 
    if(isset($_POST['nome'])){
        $assunto = "Novo lead - Incene Home Staging & Target Mais";
    
        $msg = "Olá, tudo bem? <br><br> Um novo lead preencheu o formulário em sua Landing Page. <br><br><strong>Informações:</strong> <br>";
        $msg .= "<strong>Nome:</strong> " . $_POST["nome"] . "<br>";
        $msg .= "<strong>Email:</strong> " . $_POST["email"] . "<br>";
        $msg .= "<strong>Telefone:</strong> " . $_POST["telefone"] . "<br>";
        $msg .= "<strong>Mensagem:</strong>" . $_POST["mensagem"];
        $msg .= "<br><br><img src=\"https://targetmais.com.br/campanhas/agencia-marketing-digital/img/logo.png\">";
    
        $destinatario = "leads.clientes@targetmais.com.br";
    
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: " . $_POST["nome"] . "<" . $_POST["email"] . ">\r\n";
        $headers .= "Reply-To: " . $_POST["email"] . "\r\n";
    
        mail($destinatario,$assunto,$msg,$headers);
    }
?>