<!-- Contact Box -->
<div id="contact-box">
  <div class="header">
    <h6 onclick="openNav()">Fale Conosco</h6>
    <a href="javascript:void(0)" onclick="closeNav()" id="fechar" title="Fechar">X</a>
  </div>
  <div id="boxBody">
    <a href="tel:<?php echo $phoneLink ?>"> <i class="fas fa-mobile-alt"></i>
      <?php echo $phone ?></a>
    <br>
    <a href="./wpp.php"> <i class="fab fa-whatsapp"></i>
      <?php echo $wpp ?></a>
  </div>
</div>

<!-- Modal CTA -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Preencha o formulário abaixo para obter contato!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./obrigado.php" method="post">
          <input type="text" name="nome" placeholder="Nome" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="text" name="telefone" maxlength="15" placeholder="Celular/Telefone" id="telefone" required>
          <textarea name="mensagem" placeholder="Mensagem" required></textarea>
          <input type="submit" value="Enviar">
        </form>
        <a href="./wpp.php" class="btn btn-whats">Fale conosco por
          Whatsapp</a>
      </div>
    </div>
  </div>
</div>