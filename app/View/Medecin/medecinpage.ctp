
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $this->Html->charset(); ?>
  <title>
    
    <?php echo $this->fetch('title'); ?>
  </title>
   <?php
    echo $this->Html->meta(array("name"=>"viewport",
      "content"=>"width=device-width,  initial-scale=1.0"));
    echo $this->Html->meta(array("name"=>"description",
      "content"=>"this is the description"));
    echo $this->Html->meta(array("name"=>"author",
      "content"=>"Dashboard"));
    echo $this->Html->meta(array("name"=>"keyword",
      "content"=>"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"))
  ?>
  <?php
    echo $this->Html->meta('icon');

    

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
  ?>

  <?php 

  echo $this->html->css('bootstrap');
  
             
  ?>
  <?php  echo $this->html->css(array(

         'bootstrap-fullcalendar',
         'font-awesome',
         'jquery.easy-pie-chart',
         'jquery.fancybox',
         'jquery.gritter',
         'jquery.gritter0',
         'style (2)',
         'style',
         'style-responsive',
         'table-responsive',
         'to-do',
         'zabuto_calendar'


      )
  ); ?>
  <?php  echo $this->html->script(array(
         
         'html5shiv',
         'respond.min'


      )
  ); ?>
  
</head>

  <body>
<section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>My Doctor</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                   
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">7</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">7 message</p>
                            </li>
                            <li>
                                <a href="affectationpage">
                                   <span class="photo">
                                    <?php
                        echo $this->Html->image('use.jpg');
                    ?></span>
                                    <span class="subject">
                                    <span class="from">Selma</span>
                                    <span class="time">Maintenant</span>
                                    </span>
                                    <span class="message">
                                        Demande de r??servation
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="urgence">
                                    <span class="photo">
                                    <?php
                        echo $this->Html->image('use.jpg');
                    ?></span>
                                    <span class="subject">
                                    <span class="from">Safia</span>
                                    <span class="time">Maintenant</span>
                                    </span>
                                    <span class="message">
                                     URGENCE!
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo">
                                    <?php
                        echo $this->Html->image('use.jpg');
                    ?></span>
                                    <span class="subject">
                                    <span class="from">nafissa </span>
                                    <span class="time">maintenant</span>
                                    </span>
                                    <span class="message">
                                        nafissa a effectue un prelevement
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo">
                                    <?php
                        echo $this->Html->image('use.jpg');
                    ?></span>
                            
                                    <span class="subject">
                                    <span class="from">hamza</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     hamza a effectue un prelevement
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                     <span class="photo">
                                    <?php
                        echo $this->Html->image('use.jpg');
                    ?></span>
                            
                                    <span class="subject">
                                    <span class="from">jamila</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        jamila a effectue un prelevement
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                     <span class="photo">
                                    <?php
                        echo $this->Html->image('use.jpg');
                    ?></span>
                            
                                    <span class="subject">
                                    <span class="from">Amel</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Amel a effectue un prelevement
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">voir tous les notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><?php echo $this->Html->link(
    " logout",
   array('action' => 'logout'),
   array('class' => 'logout', 'escape' => false)
); ?></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                 <?php foreach($photo as $a):?>

                  <p class="centered"><a href="profile.html">

                    <img class="img-circle" width="60"
                    <?php
                        echo $this->Html->image($a['Medecin']['avatar']);
                    ?>
                   </a></p>
                  <h5 class="centered"><?php   echo $a["Medecin"]["nom"]; ?>   <?php   echo $a["Medecin"]["prenom"]; ?></h5> 
                    
                  

                 <?php endforeach ;?>
                    
                   <li class="mt">
                     <?php echo $this->Html->link(
   $this->Html->tag('i', '', array('class' => 'fa fa-dashboard')) . " Dashboard",
   array('controller'=>'Medecins','action' => 'medecinpage'),
   array( 'escape' => false)
); ?>
                        
                         
                  </li>

                   
                   <li class="mt">
                     <?php echo $this->Html->link(
   $this->Html->tag('i', '', array('class' => 'fa fa-dashboard')) . " calendrier",
   array('controller'=>'Medecins','action' => 'calendrier'),
   array( 'escape' => false)
); ?>
                        
                         
                  </li>
                  

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Praticien</span>
                      </a>
                      <ul class="sub">

                      <li>  <?php echo $this->Html->link(
                               " Medecin",
                                 array('controller'=>'Medecins','action' => 'listeMedecin')
    
                                  ); ?></li>
                        
                         <li>  <?php echo $this->Html->link(
                               "Assistant Medical",
                                 array('controller'=>'Medecins','action' => 'listeAssistant')
    
                                  ); ?></li>  
                          
                         
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Patient</span>
                      </a>
                      <ul class="sub">
                          
                      <li>  <?php echo $this->Html->link(
                               " Diabetique",
                                 array('controller'=>'Medecins','action' => 'listeDiabetique')
    
                                  ); ?></li>
                           <li>  <?php echo $this->Html->link(
                               " Alzheimer",
                                 array('controller'=>'Medecins','action' => 'listeAlzheimer')
    
                                  ); ?></li>
                          <li>  <?php echo $this->Html->link(
                               "Grossesse A Risque",
                                 array('controller'=>'Medecins','action' => 'listeGrossesse')
    
                                  ); ?></li>
                      </ul>
                  </li>
                  
                  
                  
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Medecin page</h3>

            <! -- ALERTS EXAMPLES -->
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Alerts </h4>
              <?php foreach ($data as $a) {?>
               
             
              <div class="alert alert-danger"><b>Danger!</b> Le taux de glycemie de 
                       <?php echo $a['Diabetique']['nom'];?> <?php echo $a['Diabetique']['prenom'];?>   est  : 

                       <?php echo $a['Diabetique']['tauxGlycemie'];?> g/l


              </div> 
              <?php };?>  

              <?php foreach ($data1 as $a) {?>
               
             
              <div class="alert alert-danger"><b>Danger!</b> Le taux de glycemie de 
                       
                        <?php echo $a['GrossesseArisque']['nom'];?> <?php echo $a['GrossesseArisque']['prenom'];?> est  :
                       <?php echo $a['GrossesseArisque']['tauxGlycemie'];?> g/l


              </div> 
              <?php };?>            
              </div><!-- /showback -->

            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->


      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              charla
              <a href="calendar.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

   <?php  echo $this->html->script(array(

    'jquery',
    'jquery-ui-1.9.2.custom.min',
    'fullcalendar.min',
    'bootstrap.min',


    'jquery.dcjqaccordion.2.7',
    'jquery.scrollTo.min',
    'jquery.nicescroll',
    'common-scripts',
    'calendar-conf-events',

           

  )); ?>     
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

  </body>
</html>
