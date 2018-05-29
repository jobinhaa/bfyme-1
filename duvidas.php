<?php include 'includes/header.php' ?>
  <?php include 'includes/menu.php' ?>
    <div class="foo banner_default banner_duvidas">
      <section class="main-banner">
        <h2 class="title_default title_banner">Encontre as dúvidas mais comuns aqui</h2>
        <h3 class="subtitle_default subtitle_banner">Respostas às perguntas frequentes de clientes e profissionais</h3>
      </section>
    </div>
    <section class="quests">
      <div class="quest-user">
        <div class="container">
          <h3 class="title_default clearflex">Dúvidas</h3>
          <h4 class="subtitle_default clearflex">Aqui estão as principais dúvidas</h4>
          <h4 class="title_item">Clientes</h4>
          <div class="card card-faq">
            <div class="card-head">
              <h5 class="title">Como funciona?</h5>
              <button class="btn-plus">+</button>
            </div>
            <div class="card-details">
              <p class="text">Nosso e-commerce vende serviços de beleza delivery. O processo acontece desta forma: escolha a região que você está localizado, o serviço que deseja, o horário e o dia podendo agendar para o mesmo dia desde que seja com quatro horas de antecedência. O sistema vai buscar no nosso banco de talentos um profissional que atenda o serviço solicitado e que esteja ente 5 km a 8 km de distância do solicitante, ou seja, na mesma região.</p>
            </div>
          </div>
          <div class="card card-faq">
            <div class="card-head">
              <h5 class="title">Eu posso cancelar no mesmo dia do atendimento?</h5>
              <button class="btn-plus">+</button>
            </div>
            <div class="card-details">
              <p class="text">Sim, porém existe uma taxa de cancelamento de serviço equivalente a 50% do valor do serviço contratado.</p>
            </div>
          </div>
          <div class="card card-faq">
            <div class="card-head">
              <h5 class="title">Quais são as formas de pagamento?</h5>
              <button class="btn-plus">+</button>
            </div>
            <div class="card-details">
              <p class="text">Os pagamentos serão realizados integralmente pela plataforma do PagSeguro. Será aceito como forma de pagamento cartão de crédito e cartão de débito. Verifique no site do PagSeguro as operadoras de cartões aceitas.</p>
            </div>
          </div>
          <div class="card card-faq">
            <div class="card-head">
              <h5 class="title">Posso ser atendida novamente pelo mesmo profissional?</h5>
              <button class="btn-plus">+</button>
            </div>
            <div class="card-details">
              <p class="text">Sim, você poderá ser atendida com o mesmo profissional nos próximos agendamentos.</p>
            </div>
          </div>
          <h4 class="title_item">Profissionais</h4>
          <div class="card card-faq">
            <div class="card-head">
              <h5 class="title">Como eu faço meu cadastro?</h5>
              <button class="btn-plus">+</button>
            </div>
            <div class="card-details">
              <p class="text">Clique na opção do menu "Seja um profissional" para de cadastrar na plataforma do Bfy.me. O cadastro é o primeiro passo para iniciar seu trabalho como prestador de serviço. Após o cadastro completo, você receberá um e-mail de confirmação de cadastro e os seguintes passos. Seu e-mail de cadastro como profissional também pode ser utilizado para agendar um serviço com outro profissional.</p>
            </div>
          </div>
          <div class="card card-faq">
            <div class="card-head">
              <h5 class="title">Eu posso cancelar um atendimento?</h5>
              <button class="btn-plus">+</button>
            </div>
            <div class="card-details">
              <p class="text">Após o match realizado e as mensagens de aviso, você terá 20 minutos para responder ao chamado. Caso não queira, o serviço será passado a diante. Cancelar um serviço após esse processo gera multa para o prestador de serviço equivalente a 50% do valor do serviço que deveria ser prestado.</p>
            </div>
          </div>
          <div class="card card-faq">
            <div class="card-head">
              <h5 class="title">Eu posso fazer mais de um atendimento por dia?</h5>
              <button class="btn-plus">+</button>
            </div>
            <div class="card-details">
              <p class="text">Nosso sistema busca trabalhar de forma que garanta que todos os profissionais cadastrados no raio de distância correspondente de cada área consigam atendimentos, logo isso pode variar. Considerando que todos os profissionais livres na instância solicitada serão considerados para a escolha de um prestador.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container warn-quest">
        <h1 class="title">Ainda com dúvidas? Mande uma mensagem para nós!</h1>
        <button class="btn open-modal-faq">Enviar mensagem</button>
      </div>
    </section>
    <div class="modal-overlay"></div>
    <div class="modal modal-faq">
      <button class="btn-close-modal"></button>
      <div class="container">
        <form class="form-faq">
          <h2 class="title">Formulário de mensagem</h2>
          <fieldset class="form-field">
            <label for="name">Digite seu nome</label><span class="error error_name">Nome inválido</span>
            <input class="input_name" type="text" name="name">
          </fieldset>
          <fieldset class="form-field">
            <label for="email">Digite seu e-mail</label><span class="error error_email">E-mail inválido</span>
            <input class="input_email" type="text" name="email">
          </fieldset>
          <fieldset class="form-field">
            <label for="subject">Digite o assunto da mensagem</label><span class="error error_subject">Assunto inválido</span>
            <input class="input_subject" type="text" name="subject">
          </fieldset>
          <fieldset class="form-field">
            <label for="message">Escreva sua mensagem</label><span class="error error_message">Mensagem inválida</span>
            <textarea class="message-faq" name="message" cols="30" rows="10"></textarea>
          </fieldset>
          <button class="btn btn-submit" type="submit">Enviar</button>
        </form>
      </div>
    </div>
    <?php include 'includes/footer.php' ?>
