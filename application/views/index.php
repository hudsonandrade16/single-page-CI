<!DOCTYPE html>
<html>
    <head>
        <title>SinglePageApp</title>
        <!-- Responsive Design -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8" />
        <!-- Stylesheets -->
        <link type="text/css" rel="stylesheet" media="(max-width: 600px)" href="assets/css/responsive-small.css" />
        <link type="text/css" rel="stylesheet" media="(min-width: 1200px)" href="assets/css/stylesheets.css" />
        <link type="text/css" rel="stylesheet" media="(max-width: 1200px) and (min-width: 600px)" href="assets/css/responsive-large.css" />
        <!-- JacaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="assets/js/ciclo-animate.js"></script>
    </head>
    <body>
        <div id="nvgtion">
            <ul id="menu">
                <li><a href="#section-one" class="scroll">Home</a></li>
                <li><a href="#section-two" class="scroll">About</a></li>
                <li><a href="#section-three" class="scroll">Contacts</a></li>
            </ul>
        </div>
        <div id="default">
            <ul>
                <li id="section-one">
                    <div class="middle">
                        <div id="gallery">
                            <ul>
                                <?php $i = 0;
                                foreach($caminhos as $cam): ?>
                                <li>
                                    <div class="banner-phrase">
                                        <h1><?php print $frases[$i]->frase; ?></h1>
                                        <h2><a href="#">Saiba mais</a></h2>
                                    </div>
                                    <div class="banner-image">
                                        <img src=" <?php print $cam->caminho; ?> " alt="<?php print $cam->nome; ?>" />
                                    </div>
                                </li>
                                <?php $i++;
                                endforeach; ?>
                            </ul>
                        </div>
                        <div id="gallery-controller">
                            <a href="#" id="gallery-controller-prev"><img src="assets/img/left.png" alt="Prev" /></a>
                            <a href="#" id="gallery-controller-next"><img src="assets/img/right.png" alt="Next" /></a>
                        </div>
                        <div id="gallery-navigation"><ul>&nbsp;</ul></div>
                    </div>
                </li>
                <li id="section-two">
                    <div id="about">
                        <div class="division">
                            <p class="titulo">About</p>
                            <hr />
                            <p class="descricao">
                            <?php foreach($texto as $tex): ?>
                            <?php if ($tex->tag == "About"): ?>
                            <?php print $tex->texto; ?>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            </p>
                        </div>
                        <div class="inf">
                            <ul>
                                 <li class="protect">
                                    <div>
                                      <h3 class="titulo">Protect</h3>
                                      <?php foreach($texto as $tex): ?>
                                      <?php if ($tex->tag == "Protect"): ?>
                                      <p class="descricao"> <?php print $tex->texto; ?> </p>
                                      <?php endif; ?>
                                      <?php endforeach; ?>
                                    </div>
                                </li>
                                <li class="environment">
                                     <div>
                                        <h3 class="titulo">Environment</h3>
                                        <?php foreach($texto as $tex): ?>
                                        <?php if ($tex->tag == "Environment"): ?>
                                        <p class="descricao"> <?php print $tex->texto; ?> </p>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </li>
                                <li class="family">
                                    <div>
                                        <h3 class="titulo">Family</h3>
                                        <?php foreach($texto as $tex): ?>
                                        <?php if ($tex->tag == "Family"): ?>
                                        <p class="descricao"> <?php print $tex->texto; ?> </p>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li id="section-three">
                    <div id="contacts">
                        <div>
                            <p class='titulo' >Contacts </p>
                            <?php if(!empty($msg)): ?>
                             <p class='msg'>Enviado com sucesso.</p>
                            <?php endif; ?>
                        </div>
                        <div>
                          <fieldset>
                              <div class="form">
                                <?php echo form_open (base_url()."Single_Page/index.php/Contacts/add_db");  ?>
                                  <dl>
                                    <dt><label for="name">Name</label></dt>
                                    <dd><?php echo form_input("name", ""); ?></dd>
                                  </dl>
                                  <dl>
                                    <dt><label for="email">E-mail</label></dt>
                                    <dd><?php echo form_input("email", ""); ?></dd>
                                  </dl>
                                  <dl>
                                    <dt><label for="message">Message</label></dt>
                                    <dd><?php echo form_textarea("message", ""); ?></dd>
                                  </dl>
                                  <?php echo form_submit("submit", "Enviar"); ?>
                                </form>
                              </div>
                              <div class="social">
                                  <p> Redes Sociais</p>
                                  <ul>
                                      <li><a class="facebook" href="https://www.facebook.com/" > </a></li>
                                      <li><a class="twitter" href="https://twitter.com/?lang=pt-br" > </a></li>
                                      <li><a class="google-plus" href="https://plus.google.com/" > </a></li>
                                      <li><a class="instagram" href="https://www.instagram.com/?hl=pt-br" > </a></li>
                                      <li><a class="linkedin" href="https://www.linkedin.com/" > </a></li>
                                  </ul>
                              </div>
                          </fieldset>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </body>
</html>
