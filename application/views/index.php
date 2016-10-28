<!DOCTYPE html> 
<html>
    <head>
        <title>SinglePageApp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="assets/css/stylesheets.css" />
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
                            <p class="titulo"> About</p>
                            <hr>
                            <p class="descricao"> <?php foreach($texto as $tex):
                                                     if ($tex->tag == "About")
                                                         print $tex->texto;
                                                     endforeach; ?> </p></p>
                        </div>
                        <div class="inf">
                            
                            <ul>
                                 <li> <div>
                                        <img src="assets/img/bird.png"  alt="tree" />
                                        <p class="titulo"> Protect </p>

                                            <p class="descricao">   
                                                <?php foreach($texto as $tex):
                                                     if ($tex->tag == "Protect")
                                                         print $tex->texto;
                                                     endforeach; ?> </p>
                                       
                                    </div>
                                </li>
                                <li> <div>
                                        <img src="assets/img/tree.png"  alt="tree" />
                                        <p class="titulo"> Environment </p>
                                    
                                            <p class="descricao">
                                                        <?php foreach($texto as $tex):
                                                             if ($tex->tag == "Environment")
                                                                 print $tex->texto;
                                                        endforeach; ?>  </p>
                                     
                                    </div>
                                </li>
                                <li> <div>
                                        <img src="assets/img/hand.png"  alt="tree" />
                                        <p class="titulo"> Family </p>
 
                                            <p class="descricao">
                                                        <?php foreach($texto as $tex):
                                                             if ($tex->tag == "Family")
                                                                 print $tex->texto;
                                                         endforeach; ?> </p>
                                     
                                    </div>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </li>
                <li id="section-three">
                    <div class="middle">
                        <p><a href="#section-three">Go to page #03</a></p>
                    </div>
                </li>
            </ul>
        </div>
    </body>
</html>
