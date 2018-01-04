<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
  <!-- Required meta -->
    <meta charset="utf-8">
    <title>alexcronapp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">


  </head>

  <body>
 
    <div class="safe-area">
  
        <nav class="navbar navbar-toggleable-md navbar-light">

          <div class="container">

          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar"   aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggle-item"></span>
           <span class="navbar-toggle-item"></span>
           <span class="navbar-toggle-item"></span>
        </button>

      <a class="navbar-brand" href="#">Bronea</a>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

                        <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#myModalLogin" href="#">Login</a>
            </li>
          </ul>
        
        </div><!--navebar colapse-->

      </div> <!-- container -->
      </nav>


      <!-- Modal Deletar-->
<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">                
                <h4 class="modal-title" id="exampleModalLabel">Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="acaoLogin.php" method="get">                                                                     
                    <div class="form-group">
                        <input type="text" class="form-control"  name="txtLogin" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <input type="password" name="txtSenha" class="form-control" required  placeholder="Senha">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info">Acessar</button>
                    </div>       
                </form>
            </div>

        </div>
    </div>
</div>

        <!-- carousel início-->

      <div id="slide" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#slide" data-slide-to="0" class="active"></li>
          <li data-target="#slide" data-slide-to="1"></li>
          <li data-target="#slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

          <div class="container">

            <div class="row">
               <div class="col-sm-6 offset-sm-3">

              
                <div class="carousel-item active">
                  
                  <h2 class="carousel-headline">RHONCUS INTEGER SODALES </h2>
                      <h3 class="carousel-subheadline description">Nulla quis tincidunt Nulla quis tincidunt tincidunt</h3>
                      <p class="carousel-description text">Nulla pretium justo nibh non pretium metus gravida vel cras urna quam suscipit sit. Pretium justo nibh non pretium metus gravida vel cras urna quam suscipit sit.</p>
                      
                      <a href="#" class="btn btn-outline-secondary">learn more</a>
                      <a href="#" class="btn btn-success">download app</a>

                    </div><!-- carousel item -->

                    <div class="carousel-item">
                      
                      <h2 class="carousel-headline">RHONCUS INTEGER SODALES </h2>
                      <h3 class="carousel-subheadline description">Nulla quis tincidunt Nulla quis tincidunt tincidunt</h3>
                      <p class="carousel-description text">Nulla pretium justo nibh non pretium metus gravida vel cras urna quam suscipit sit. Pretium justo nibh non pretium metus gravida vel cras urna quam suscipit sit.</p>
                      
                      <a href="#" class="btn btn-outline-secondary">learn more</a>
                      <a href="#" class="btn btn-success">download app</a>

                    </div><!-- carousel item -->

                    <div class="carousel-item">
                      
                      <h2 class="carousel-headline">RHONCUS INTEGER SODALES </h2>
                      <h3 class="carousel-subheadline description">Nulla quis tincidunt Nulla quis tincidunt tincidunt</h3>
                      <p class="carousel-description text">Nulla pretium justo nibh non pretium metus gravida vel cras urna quam suscipit sit. Pretium justo nibh non pretium metus gravida vel cras urna quam suscipit sit.</p>
                      
                      <a href="#" class="btn btn-outline-secondary">learn more</a>
                      <a href="#" class="btn btn-success">download app</a>
                  </div> <!-- customer item -->
                  
                   <div class="carousel-item ">
                  
                  <h2 class="carousel-headline">RHONCUS INTEGER SODALES </h2>
                  <h3 class="carousel-subheadline description">Nulla quis tincidunt Nulla quis tincidunt tincidunt</h3>
                  p class="carousel-description text">Nulla pretium justo nibh non pretium metus gravida vel cras urna quam suscipit sit. Pretium justo nibh non pretium metus gravida vel cras urna quam suscipit sit.</p>
                      
                      <a href="#" class="btn btn-outline-secondary">learn more</a>
                      <a href="#" class="btn btn-success">download app</a>
                  </div> <!-- customer item -->
            
                      </div> <!-- carousel item -->
                      </div><!-- col sm 6 offset sm 3 -->
                      </div> <!-- row -->

                <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>    
                </div> 
      </div><!--container-->
    </div><!--carousel inner-->  

       <!-- jQuery first, then Tether, then Bootstrap JS. -->
       <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
</body>
</html>