<section id="form">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center mb-5">Preencha o formulário abaixo <br>para obter contato!</h1>
            <div class="col-sm-6">
               <form action="./obrigado.php" method="post">
                 <div class="form-group">
                   <input type="name" class="form-control" name="nome" placeholder="Nome" required>
                 </div>
                 <div class="form-group">
                   <input type="email" class="form-control" name="email" placeholder="E-Mail" required>
                 </div>
                 <div class="form-group">
                   <input type="tel" class="form-control" name="telefone" placeholder="Celular/Telefone" required>
                 </div>
                 <div class="form-group">
                   <textarea class="form-control_msg" name="mensagem" placeholder="Mensagem" required></textarea>
                 </div>
                 <input type="submit" value="Enviar">
               </form>
            </div>
        </div>
    </div>
</section>