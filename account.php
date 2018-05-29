<?php include 'includes/header-account.php'; ?>
    <main class="wrapper-account">
      <div class="wrapper-header-account"></div>
      <div class="container-account">
        <ul class="tabs" role="tablist">
          <li>
            <input type="radio" name="tabs" id="tab1" checked>
            <label for="tab1" role="tab" ria-selected="true" aria-controls="panel1" tabindex="0">CLIENTE</label>
            <div class="tabs-content" role="tabpanel" aria-labelledby="cliente" aria-hidden="false" id="tab-content1">
              <ul class="tab">
                <li>
                  <input class="tab-input" type="radio" name="tabs2" checked id="tab-ag">
                  <label class="label-tab" for="tab-ag">Agendamento</label>
                  <div class="tab-content">
                    <div class="header-account">Meus Agendamentos</div>
                    <div class="content-account">
                      <div class="tb-account">
                        <div class="tb-account-cell">
                          <div class="tb-title">Profissional</div>
                          <div class="tb-content">
                            <h3>Tania Ferreira</h3>
                            <p>Manicure</p>
                            <p>Estrela</p>
                          </div>
                        </div>
                        <div class="tb-account-cell">
                          <div class="tb-title">Serviços</div>
                          <div class="tb-content">
                            <h3>Maquiagem Simples</h3>
                            <p>09/10/2017 à 17:00</p>
                            <p>Minha Casa</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <input class="tab-input" type="radio" name="tabs2" id="tab-dados">
                  <label class="label-tab" for="tab-dados">Dados Cadastrais</label>
                  <div class="tab-content">
                    <div class="header-account">Meus Dados Cadastrais</div>
                    <div class="content-account">
                      <div class="tb-account">
                        <div class="tb-account-cell">
                          <div class="tb-content">
                            <h4>Mantenha seu cadastro sempre atualizado</h4>
                            <input type="text" name="tabs2" placeholder="Nome">
                            <input type="text" name="tabs2" placeholder="CPF">
                            <input type="text" name="tabs2" placeholder="E-mail">
                            <input type="text" name="tabs2" placeholder="Telefone de contato">
                            <button class="btn">Salvar</button>
                          </div>
                        </div>
                        <div class="tb-account-cell">
                          <div class="tb-content">
                            <h4>Altere sua sennha</h4>
                            <input type="text" name="tabs2" placeholder="Login">
                            <input type="password" name="tabs2" placeholder="Senha">
                            <input type="password" name="tabs2" placeholder="Confirme sua senha">
                            <button class="btn">Confirmar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <input class="tab-input" type="radio" name="tabs2" id="tab-end">
                  <label class="label-tab" for="tab-end">Endereços</label>
                  <div class="tab-content tab-address">
                    <div class="header-welcome">
                      <h2 class="title">Olá Mariana!</h2>
                    </div>
                    <div class="header-account">
                      <h3 class="title">Meus endereços</h3>
                      <h4 class="subtitle">Informe abaixo o local onde deseja ser atendido, o profissional irá até o local.</h4>
                    </div>
                    <div class="content-account">
                      <div class="register-address">
                        <h3 class="title">Novo endereço:</h3>
                        <form class="form-address" action="">
                          <fieldset class="form-field">
                            <input class="form-input" type="text" placeholder="Logradouro">
                          </fieldset>
                          <fieldset class="form-field">
                            <input class="form-input" type="text" placeholder="Número">
                          </fieldset>
                          <fieldset class="form-field">
                            <input class="form-input" type="text" placeholder="Complemento">
                          </fieldset>
                          <fieldset class="form-field">
                            <input class="form-input" type="text" placeholder="Tipo de logradouro">
                          </fieldset>
                          <fieldset class="form-field">
                            <input class="form-input" type="text" placeholder="Bairro">
                          </fieldset>
                          <fieldset class="form-field">
                            <input class="form-input" type="text" placeholder="Digite o CEP">
                          </fieldset>
                          <button class="btn">Salvar Dados</button>
                        </form>
                      </div>
                      <div class="registered-address">
                        <h3 class="title">Meus endereços:</h3>
                        <div class="address active">
                          <div class="address-header">
                            <h4 class="title">Padrão</h4>
                            <div class="options"><a class="address-option edit" href="">editar</a><a class="address-option delete" href="">excluir</a></div>
                          </div>
                          <div class="address-body">
                            <h5 class="title">Minha casa</h5>
                            <p class="description">Rua Maria Candida 358</p>
                            <p class="description">Vila Guilherme</p>
                            <p class="description">11 941847444</p>
                          </div>
                        </div>
                        <div class="address">
                          <div class="address-header">
                            <h4 class="title">Secundário</h4>
                            <div class="options"><a class="address-option edit" href="">editar</a><a class="address-option delete" href="">excluir</a></div>
                          </div>
                          <div class="address-body">
                            <h5 class="title">Minha casa</h5>
                            <p class="description">Rua Maria Candida 358</p>
                            <p class="description">Vila Guilherme</p>
                            <p class="description">11 941847444</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <input class="tab-input" type="radio" name="tabs2" id="tab-desc">
                  <label class="label-tab" for="tab-desc">Código de desconto</label>
                  <div class="tab-content">
                    <div class="header-account">Meu Código de desconto</div>
                    <div class="content-account"> </div>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <input type="radio" name="tabs" id="tab2">
            <label for="tab2" role="tab" aria-selected="false" aria-controls="panel2" tabindex="0">PROFISSIONAL</label>
            <div class="tabs-content" role="tabpanel" aria-labelledby="profissional" aria-hidden="true" id="tab-content2">
              <ul class="tab">
                <li>
                  <input class="tab-input" type="radio" name="tabs2" id="tab-agenda">
                  <label class="label-tab" for="tab-agenda">Agenda</label>
                  <div class="tab-content">
                    <div class="header-account">Agenda Profissional</div>
                    <div class="content-account"> </div>
                  </div>
                </li>
                <li>
                  <input class="tab-input" type="radio" name="tabs2" id="tab-serv">
                  <label class="label-tab" for="tab-serv">Meus serviços</label>
                  <div class="tab-content">
                    <div class="header-account">Serviços Prestados</div>
                    <div class="content-account"></div>
                  </div>
                </li>
                <li>
                  <input class="tab-input" type="radio" name="tabs2" id="tab-hist">
                  <label class="label-tab" for="tab-hist">Histórico</label>
                  <div class="tab-content">
                    <div class="header-account">Hitstórico de Atendimentos</div>
                    <div class="content-account"></div>
                  </div>
                </li>
                <li>
                  <input class="tab-input" type="radio" name="tabs2" id="tab-prof">
                  <label class="label-tab" for="tab-prof">Dados profissionais</label>
                  <div class="tab-content">
                    <div class="header-account">Meu Dados profissionais</div>
                    <div class="content-account"></div>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </main>
    <?php include 'includes/footer-account.php'; ?>

