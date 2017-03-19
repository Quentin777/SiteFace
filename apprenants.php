<?php 
include 'bdd.php';
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }

?><!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
       <title> Les apprenants</title>
    </head>
  <body>
  <!-- header -->
  <?php 
include ('nav_pc.html'); 
include ('nav_mobile.php');
?>
    <div class="container">
    <!--Profil de Andréa Lopez-->
    <div class="row">
    <div class="col-xs-6 col-sm-4 col-md-4">
      <div class="well well-sm">
        <div class="row" id="cadre">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="img/identite/img0.png" alt="Andréa" class="img-rounded img-responsive center-block" />
          </div>
          <div class=" col-xs-12 col-sm-6 col-md-8">
            <h4>Andréa<br /> LOPEZ</h4>
              <small>
                <cite title="Moulins, france">Moulins, France
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                </cite>
              </small>
              <a href="mailto:andrea-@outlook.com" ><button type="button" class="btn btn-default boutonMobile">MAIL</button></a> 
              <a href="https://github.com/Andrealpz" ><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
          </div>
        </div>
      </div>
    </div>
    <!--Profil de Anthony Favier-->
    <div class="col-xs-6 col-sm-4 col-md-4">
      <div class="well well-sm">
        <div class="row" id="cadre">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="img/identite/img1.png" alt="Anthony" class="img-rounded img-responsive center-block" />
          </div>
          <div class=" col-xs-12 col-sm-6 col-md-8">
            <h4>Anthony<br /> FAVIER</h4>
            <small>
              <cite title="Moulins, France">Vichy, France
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </cite>
            </small>
            <a href="mailto:anthony.favier03@gmail.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
            <a href="https://github.com/aFAVIER"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
          </div>
        </div>
      </div>
    </div>
    <!--Profil de Aude ECCHER-->
    <div class="col-xs-6 col-sm-4 col-md-4">
      <div class="well well-sm">
        <div class="row" id="cadre">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="img/identite/img2.png" alt="Aude" class="img-rounded img-responsive center-block" />
          </div>
          <div class="col-xs-12 col-sm-6 col-md-8">
            <h4>Aude<br /> ECCHER</h4>
            <small>
              <cite title="Moulins, france">Moulins, France
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </cite>
            </small>
            <a href="mailto:audeeccher@gmail.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
            <a href="https://github.com/Tsukihub"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!--Profil de Aymeric Lacoste-->
    <div class="row">
    <div class="col-xs-6 col-sm-4 col-md-4">
      <div class="well well-sm">
        <div class="row" id="cadre">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="img/identite/img3.jpg" alt="Aymeric" class="img-rounded img-responsive center-block" />
          </div>
          <div class="col-xs-12 col-sm-6 col-md-8">
            <h4>Aymeric<br /> LACOSTE</h4>
            <small>
              <cite title="San Francisco, USA">Moulins, France
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </cite>
            </small>
            <a href="mailto:aymeric-lacoste@hotmail.fr"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
            <a href="https://github.com/aymeric-l"><button type="button" class="btn btn-default  boutonMobile">GITHUB</button></a>
          </div>
        </div>
      </div>
    </div>
    <!--Profil de Alexandre LEROUX-->
    <div class="col-xs-6 col-sm-4 col-md-4">
      <div class="well well-sm">
        <div class="row" id="cadre">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="img/identite/img4.png" alt="Alexandre" class="img-rounded img-responsive center-block" />
          </div>
          <div class="col-xs-12 col-sm-6 col-md-8">
            <h4>Alexandre<br /> LEROUX</h4>
            <small>
              <cite title="Moulins, france">Moulins, France
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </cite>
            </small>
            <a href="mailto:alex03000@live.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
            <a href="https://github.com/Darell82"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
          </div>
        </div>
      </div>
    </div>
    <!--Profil de Eddy Huleu-->
    <div class="col-xs-6 col-sm-4 col-md-4">
      <div class="well well-sm">
        <div class="row" id="cadre">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="img/identite/img5.png" alt="Eddy" class="img-rounded img-responsive center-block" />
          </div>
          <div class="col-xs-12 col-sm-6 col-md-8">
            <h4>Eddy<br /> HULEU</h4>
            <small>
              <cite title="Moulins, France"> Moulins, France
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </cite>
            </small>
            <a href="mailto:eddy.huleu@live.fr"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
            <a href="https://github.com/EddyHuleu"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!--Profil de Emilie Leterme-->
    <div class="row">
    <div class="col-xs-6 col-sm-4 col-md-4">
      <div class="well well-sm">
        <div class="row" id="cadre">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="img/identite/img6.png" alt="Emilie" class="img-rounded img-responsive center-block" />
          </div>
          <div class="col-xs-12 col-sm-6 col-md-8">
            <h4>Emilie<br /> LETERME</h4>
            <small>
              <cite title="Moulins, France"> Moulins, France
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </cite>
            </small>
            <a href="mailto:emilie.leterme@gmail.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
            <a href="https://github.com/celebalane"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
          </div>
        </div>
      </div>
    </div>
        <!--Profil de Hasna CHADDOU-->
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img7.png" alt="hasna" class="img-rounded img-responsive center-block"/>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Hasna<br /> CHADDOU</h4>
                <small>
                  <cite title="Moulins, France"> Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:Hasnachad@gmail.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/hasnachad"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>

        <!--Profil de Kevin Martinez-->
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img8.png" alt="Kevin" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Kevin<br /> MARTINEZ</h4>
                <small>
                  <cite title="Moulins, France"> Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:msi03@laposte.net"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/BobGizzmo"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!--Profil de Martin Dagostino-->
        <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img9.png" alt="Martin" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Martin<br /> DAGOSTINO</h4>
                <small>
                  <cite title="Moulins, France"> Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:martindcontact@gmail.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/Extreeeme"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>

        <!--Profil de Mickaël DURAND-->
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img10.png" alt="Mickaël" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Mickaël<br /> DURAND</h4>
                <small>
                  <cite title="Moulins, france">Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:micka_8@hotmail.fr"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/Sethisfir"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
        <!--Profil de Quentin Grau-->
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img11.png" alt="Quentin Grau" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Quentin<br /> GRAU</h4>
                <small>
                  <cite title="Moulins, France">Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:q.grau00@gmail.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/Quentin777"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!--Profil de Quentin Ansion-->
        <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img12.png" alt="Quentin ANSION" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Quentin<br /> ANSION</h4>
                <small>
                  <cite title="Moulins, france">Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:ansion.quentin@outlook.fr"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/Seizuko"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
        <!--Profil de Régis Toupense-->
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img13.png" alt="Régis" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Régis<br /> TOUPENSE</h4>
                <small>
                  <cite title="San Francisco, USA">Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:registech@laposte.net"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/Registech"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
        <!--Profil de Sébastien Dutripon-->
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img14.png" alt="Sébastien" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Sébastien<br /> DUTRIPON</h4>
                <small>
                  <cite title="Moulins, france">Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:seb032@live.fr><button type="button" class="btn btn-default  boutonMobile">MAIL</button></a>
                <a href="https://github.com/Sebastien03"><button type="button" class="btn btn-default  boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!--Profil de Sophie Le Berre-->
        <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img15.png" alt="Sophie" class="img-rounded img-responsive center-block" />
              </div>
               <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Sophie<br /> LE BERRE</h4>
                <small>
                  <cite title="Moulins, France"> Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:sophie.seb@live.fr"><button type="button" class="btn btn-default  boutonMobile">MAIL</button></a>
                <a href="https://github.com/SophieElodie"><button type="button" class="btn btn-default  boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>

        <!--Profil de Stéphane Bariller-->
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img16.png" alt="Stéphane" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Stéphane<br /> BARILLER</h4>
                <small>
                  <cite title="Moulins, France"> Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:stephane.b03@mrsnakie.fr"><button type="button" class="btn btn-default  boutonMobile">MAIL</button></a>
                <a href="https://github.com/MrSnakie"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>

        <!--Profil de Thomas Millien-->
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img17.png" alt="Thomas" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Thomas<br /> MILLIEN</h4>
                <small>
                  <cite title="Moulins, France"> Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:thomas.face03@gmail.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/ThomasMR03"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!--Profil de Vincent Chambonnier-->
        <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img18.png" alt="Vincent" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8" id="nomLong">
                <h4>Vincent<br />CHAMBONNIER</h4>
                <small>
                  <cite title="Moulins, France"> Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </cite>
                </small>
                <a href="mailto:vincent-du03@hotmail.fr"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/Vincent03"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
        <!--Profil de Vladislav Legoshin-->
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img19.jpg" alt="Vladislav" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Vladislav<br /> LEGOSHIN</h4>
                <small>
                  <cite title="Moulins, France"> Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:vlad03@gmail.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/Abbatchi"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
        <!--Profil de William Le Gal-->
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/identite/img20.png" alt="William" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>William<br /> LE GAL</h4>
                <small>
                   <cite title="Moulins, France"> Moulins, France
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </cite>
                </small>
                <a href="mailto:william.legal03@gmail.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/will03000"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!--Profil de Yves Charvis-->
        <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="well well-sm">
            <div class="row" id="cadre">
              <div class="col-md-4">
                <img src="img/identite/img21.png" alt="Yves" class="img-rounded img-responsive center-block" />
              </div>
              <div class="col-md-8">
                <h4>Yves<br /> CHARVIS</h4>
                <small>
                  <cite title="Moulins, France"> Moulins, France
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </cite>
                </small>
                <a href="mailto:charvisyves@gmail.com"><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>
                <a href="https://github.com/YvesCharvis"><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>
              </div>
            </div>
          </div>
        </div>
      </div><!--fin row-->
    </section>
  </div>
</div>
</div>
</div>
<!--Pied de page-->
<?php include ('footer.html') ?>
    </body>
  </html>
