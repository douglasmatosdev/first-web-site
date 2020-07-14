<!-- Contact Form -->
<div class="c-form-container" style="background-color:#26272B;">


    <div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 c-form section-description wow fadeIn">
            <h1> <strong>Entre em contato conosco</strong></h1>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 c-form-box wow fadeInUp">
            <style>
                /*Mini Reset*/
                body {
                    margin: 0;
                    padding: 0;
                }
        
                /*Trigger*/
                #fls-enviando {
                    background-color: #ff7d27;
                }
                #fls-sucesso {
                    background-color: #008200;
                }
                #fls-erro {
                    background-color: #b43d3d;
                }
                .fls {
                    bottom: 0;
                    position: fixed;
                    width: 100%;
                    display: none;
                }
                .fls-txt {
                    text-align: center;
                    font-family: sans-serif;
                    color: #fff;
                }
            </style>
        
            <!-- Trigger - Ticket -->
            <!-- Enviando -->
            <div id="fls-enviando" class="jfls jfls-enviando fls">
                <p class="fls-txt">
                    Enviando - Estamos enviando...só um momentinho!
                </p>
            </div>
        
            <!-- Sucesso -->
            <div id="fls-sucesso" class="jfls jfls-sucesso fls">
                <p class="fls-txt">
                    Sucesso - Logo, um dos nossos consultores entrará em contato!
                </p>
            </div>
        
            <!-- Falha -->
            <div id="fls-erro" class="jfls jfls-erro fls">
                <p class="fls-txt">
                    Erro -tente novamente
                </p>
            </div>
            <p>Preencha os campos abaixo:</p>
            <div class="c-form-bottom">

                <!-- Formulário -->
                <form role="form" id="jclickform01" method="POST" action="<?= HOME ?>/js/requisicao/requisicao.php">
                    <div class="form-group">
                        <label for="name">
                            <span class="label-text">Nome: </span>
                        </label>
                        <input type="name" id="name" name="name" required placeholder="Seu nome..." class="c-form-name form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">
                            <span class="label-text">Email: </span>
                        </label>
                        <input type="email" id="email" name="email" required placeholder="Seu endereço de email..." class="c-form-email form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">
                            <span class="label-text">Telefone: </span>
                        </label>
                        <input type="telefone" id="telefone" name="telefone" required placeholder="Seu telefone..." class="c-form-name form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">
                            <span class="label-text">Assunto: </span>
                        </label>
                        <input type="subject" id="subject" name="subject" required placeholder="Assunto..." class="c-form-subject form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">
                            <span class="label-text">Mensagem: </span>
                        </label>
                        <textarea type="textarea" name="message" required placeholder="Sua mensagem..." class="c-form-message form-control"></textarea>
                    </div>
                    
                    <button type="submit" name="sendmail" class="btn btn-warning jfls-btn" formmethod="POST">Enviar mensagem</button>
                </form>
            </div>

        </div>
    </div>
</div>
