
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Alex prj</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">


  </head>
  <body>


		<div class="safe-area">
        
        <nav class="navbar navbar-toggleable-md navbar-light">
          
          <div class="container">


          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-item"></span>
            <span class="navbar-toggle-item"></span>
            <span class="navbar-toggle-item"></span>
          </button>
          <a class="navbar-brand" href="#">BRONEA</a>

          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Rates</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
			  </li>
			  
			  <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#myModalLoginSistema" href="#">Acessar Sistema</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link" href="index.php">Sair</a>
			  </li>
            </ul>
      
          </div><!-- navbar collapse -->

          </div><!-- container -->
		</nav>
		

		<!-- Modal Sistema-->
			<div class="modal fade" id="myModalLoginSistema" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			    <div class="modal-dialog" role="document">
			        <div class="modal-content">
			            <div class="modal-header">                
			                <h4 class="modal-title" id="exampleModalLabel">Login</h4>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			            </div>
			            <div class="modal-body">
			                <form action="SistemaLogin/pages/acaoLogin.php" method="post">                                                                     
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

				<!-- começo slide -->
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

	                  </div><!-- carousel item -->

	                  </div><!-- col sm 6 offset sm 3 -->
	                </div><!-- row -->
	                
	            </div><!-- container -->

	          </div><!-- carousel inner -->

	          <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
	            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	          </a>
	          <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
	            <span class="carousel-control-next-icon" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	          </a>
        </div><!-- carousel slide fim -->


    </div><!-- safe area -->

    <section><!-- começo features -->
    	<div class="features space">

    		<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="feature-space-headline">
								<h2 class="headline">
									Features
								</h2>
								<p class="description">
									Nulla pretium justo nibh non pretium metus gravida vel crass:
								</p>
								</div><!-- feature space headline -->
								
							<article>
								<label class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input">
								  <span class="custom-control-indicator"></span>
								  <span class="custom-control-description">
								  	<header>
								  		<h3 class="check-headline">Payment system integration</h3>
								  	</header>
								  	<p class="text">Sit amet nunc vestibulum tempus quam a imperdiet sem curabitur non neque… Sit amet nunc vestibulum tempus quam a imperdiet sem curabitur non neque…</p>
								  </span>
								</label>
							</article>

							<article>
								<label class="custom-control custom-checkbox">
								  <input type="checkbox" checked class="custom-control-input">
								  <span class="custom-control-indicator"></span>
								  <span class="custom-control-description">
								  	<header>
								  		<h3 class="check-headline">Efficitur tristique</h3>
								  	</header>
								  	<p class="text">In elementum dui donec ex metus interdum gravida lorem in pulvinar vulputate… In elementum dui donec ex metus interdum gravida lorem in pulvinar vulputate…</p>
								  </span>
								</label>
							</article>

							<article>
								<label class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input">
								  <span class="custom-control-indicator"></span>
								  <span class="custom-control-description">
								  	<header>
								  		<h3 class="check-headline">Nisi Sit Amet Tortor</h3>
								  	</header>
								  	<p class="text">Dapibus euismod vivamus molestie ornare ante ut posuere in eget consequat nulla…</p>
								  </span>
								</label>
							</article>

							<article>
								<label class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input">
								  <span class="custom-control-indicator"></span>
								  <span class="custom-control-description">
								  	<header>
								  		<h3 class="check-headline">Fusce Aliquet Non Leo</h3>
								  	</header>
								  	<p class="text">Eu mollis sed et pulvinar orci aenean pulvinar neque vitae metus pretium maximum, vitae metus pretium maximus…</p>
								  </span>
								</label>
							</article>

							<article>
								<label class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input">
								  <span class="custom-control-indicator"></span>
								  <span class="custom-control-description">
								  	<header>
								  		<h3 class="check-headline">Praesent quis tempus</h3>
								  	</header>
								  	<p class="text">Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…</p>
								  </span>
								</label>
							</article>
							

						</div><!-- col sm 6 -->
						<div class="col-sm-6">
							<img src="img/mobile-preview.png" class="img-fluid" alt="">
						</div><!-- col sm 6 -->
					</div><!-- row -->
				</div><!-- container -->

    	</div><!-- fim features -->
    </section>

   	<div class="video space"><!-- começo video -->
   			
   			<div class="col-sm-6 offset-sm-3">
				<a href="#" class="play-video" data-id="X572Mp_r46E">
					<img src="img/thumb-video.png" class="img-fluid" alt="">
				</a>
				</div><!-- video item -->

   	</div><!-- video fim -->
		

		<section><!-- começo rates -->
			<div class="rates space">
				
					<div class="container">
					<h2 class="headline text-center">Rates</h2>
						
						<div class="row">

							<div class="col-sm-3 space-col hack-align-rate">
								<article>
									<div class="rates-item">
									<img src="img/flag-usa.png" alt="">
									<header>
										<h3 class="rates-headline text-center">United States</h3>
										<p class="text text-center">0.009/min</p>
									</header>
									</div><!-- rates item -->
								</article>
							</div><!-- col sm 3 -->

							<div class="col-sm-3 space-col">
								<article>
									<div class="rates-item">
									<img src="img/flag-india.png" alt="">
									<header>
										<h3 class="rates-headline text-center">India</h3>
										<p class="text text-center">0.012/min</p>
									</header>
									</div><!-- rates item -->
								</article>
							</div><!-- col sm 3 -->

							<div class="col-sm-3 space-col">
								<article>
									<div class="rates-item">
									<img src="img/flag-china.png" alt="">
									<header>
										<h3 class="rates-headline text-center">china</h3>
										<p class="text text-center">0.008/min</p>
									</header>
									</div><!-- rates item -->
								</article>
							</div><!-- col sm 3 -->

						</div><!-- row -->

						<div class="d-flex mt-5 justify-content-center">
							<a href="#" class="btn btn-success">view all</a>
						</div>
						


					</div><!-- container -->


			</div><!-- fim rates -->
		</section>

		<section><!-- começo customer reviews -->
			<div class="customer space">
				<div class="container">
					<h2 class="headline text-center">Customer Reviews</h2>

					
					 <div id="customer" class="carousel slide">
	          <ol class="carousel-indicators">
	            <li data-target="#customer" data-slide-to="0" class="active"></li>
	            <li data-target="#customer" data-slide-to="1"></li>
	            <li data-target="#customer" data-slide-to="2"></li>
	          </ol>
	          <div class="carousel-inner" role="listbox">

	            <div class="container">

	            		
	            	
	                <div class="carousel-item active">
	                  
										<div class="row">
          						<div class="col-sm-4">

			                  <article>
			                  	<div class="customer-item">
				                  	<header>
				                  		<h3 class="customer-headline text-center">Excellent communication app.</h3>
				                  		<p class="customer-name text-center">John Doe</p>
				                  	</header>
				                  	<img src="img/star-90.png" class="mx-auto d-block mb-4" alt="">
				                  	<p class="text text-center">
				                  		Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in 
										quam proin tincidunt Curabitur
				                  	</p>
			                  	</div><!-- customer item -->
			                  </article>

	                  </div><!-- col sm 4 -->

	                  <div class="col-sm-4">

			                  <article>
			                  	<div class="customer-item">
				                  	<header>
				                  		<h3 class="customer-headline text-center">Excellent communication app.</h3>
				                  		<p class="customer-name text-center">John Doe</p>
				                  	</header>
				                  	<img src="img/star-90.png" class="mx-auto d-block mb-4" alt="">
				                  	<p class="text text-center">
				                  		Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt Curabitur
				                  	</p>
			                  	</div><!-- customer item -->
			                  </article>

	                  </div><!-- col sm 4 -->

	                  <div class="col-sm-4">

			                  <article>
			                  	<div class="customer-item">
				                  	<header>
				                  		<h3 class="customer-headline text-center">Excellent communication app.</h3>
				                  		<p class="customer-name text-center">John Doe</p>
				                  	</header>
				                  	<img src="img/star-90.png" class="mx-auto d-block mb-4" alt="">
				                  	<p class="text text-center">
				                  		Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt Curabitur
				                  	</p>
			                  	</div><!-- customer item -->
			                  </article>

	                  </div><!-- col sm 4 -->
	                 </div><!-- row -->
	                  
	                </div><!-- carousel item -->

	                <div class="carousel-item">
	                  
										<div class="row">
          						<div class="col-sm-4">

			                  <article>
			                  	<div class="customer-item">
				                  	<header>
				                  		<h3 class="customer-headline text-center">Excellent communication app.</h3>
				                  		<p class="customer-name text-center">John Doe</p>
				                  	</header>
				                  	<img src="img/star-90.png" class="mx-auto d-block mb-4" alt="">
				                  	<p class="text text-center">
				                  		Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt Curabitur
				                  	</p>
			                  	</div><!-- customer item -->
			                  </article>

	                  </div><!-- col sm 4 -->

	                  <div class="col-sm-4">

			                  <article>
			                  	<div class="customer-item">
				                  	<header>
				                  		<h3 class="customer-headline text-center">Excellent communication app.</h3>
				                  		<p class="customer-name text-center">John Doe</p>
				                  	</header>
				                  	<img src="img/star-90.png" class="mx-auto d-block mb-4" alt="">
				                  	<p class="text text-center">
				                  		Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt Curabitur
				                  	</p>
			                  	</div><!-- customer item -->
			                  </article>

	                  </div><!-- col sm 4 -->

	                  <div class="col-sm-4">

			                  <article>
			                  	<div class="customer-item">
				                  	<header>
				                  		<h3 class="customer-headline text-center">Excellent communication app.</h3>
				                  		<p class="customer-name text-center">John Doe</p>
				                  	</header>
				                  	<img src="img/star-90.png" class="mx-auto d-block mb-4" alt="">
				                  	<p class="text text-center">
				                  		Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt Curabitur
				                  	</p>
			                  	</div><!-- customer item -->
			                  </article>

	                  </div><!-- col sm 4 -->
	                 </div><!-- row -->
	                  
	                </div><!-- carousel item -->

	                <div class="carousel-item">
	                  
										<div class="row">
          						<div class="col-sm-4">

			                  <article>
			                  	<div class="customer-item">
				                  	<header>
				                  		<h3 class="customer-headline text-center">Excellent communication app.</h3>
				                  		<p class="customer-name text-center">John Doe</p>
				                  	</header>
				                  	<img src="img/star-90.png" class="mx-auto d-block mb-4" alt="">
				                  	<p class="text text-center">
				                  		Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt Curabitur
				                  	</p>
			                  	</div><!-- customer item -->
			                  </article>

	                  </div><!-- col sm 4 -->

	                  <div class="col-sm-4">

			                  <article>
			                  	<div class="customer-item">
				                  	<header>
				                  		<h3 class="customer-headline text-center">Excellent communication app.</h3>
				                  		<p class="customer-name text-center">John Doe</p>
				                  	</header>
				                  	<img src="img/star-90.png" class="mx-auto d-block mb-4" alt="">
				                  	<p class="text text-center">
				                  		Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt Curabitur
				                  	</p>
			                  	</div><!-- customer item -->
			                  </article>

	                  </div><!-- col sm 4 -->

	                  <div class="col-sm-4">

			                  <article>
			                  	<div class="customer-item">
				                  	<header>
				                  		<h3 class="customer-headline text-center">Excellent communication app.</h3>
				                  		<p class="customer-name text-center">John Doe</p>
				                  	</header>
				                  	<img src="img/star-90.png" class="mx-auto d-block mb-4" alt="">
				                  	<p class="text text-center">
				                  		Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt…Curabitur sagittis mauris et tellus porttitor venenatis id in quam proin tincidunt Curabitur
				                  	</p>
			                  	</div><!-- customer item -->
			                  </article>

	                  </div><!-- col sm 4 -->
	                </div><!-- row -->
	                  
	                </div><!-- carousel item -->
	                
	            </div><!-- container -->

	          </div><!-- carousel inner -->
	        </div><!-- carousel slide -->

				</div><!-- container -->
			</div><!-- customer fim -->
		</section>


		<article><!-- who will benefi começo -->
			<div class="benefit space">
				<div class="container">
					<header>
						<h2 class="headline text-center">Who will benefit? </h2>
						<p class="description text-center">Everyone! It's as simple as that!</p>
						<p class="description text-center">Download our app now and see for yourself!</p>
					</header>
					<div class="d-flex justify-content-center">
						<a href="#">
							<img src="img/app-store.png" class="img-fluid" alt="">
						</a>

						<a href="#">
							<img src="img/play-store.png" class="img-fluid" alt="">
						</a>
					</div><!-- d flex justify content center -->
				</div><!-- container -->
			</div><!-- benefit fim-->
		</article>


		<article>
			<div class="contact space">
				<div class="container">
				<header><!-- contato -->
					<h2 class="headline text-center">Get in touch</h2>
					<p class="description text-center">Suspendisse potenti ut tempus consequat accumsan donec.</p>
					<p class="description text-center">Suspendisse potenti ut tempus consequat accumsan done in 24 hours.</p>
				</header>
				<br />
				<div class="row">
					<div class="col-sm-6 offset-sm-3">
						<form action="#" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Your Name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Subject">
							</div>
							<div class="form-group">
								<textarea rows="5" class="form-control" placeholder="Message"></textarea>
							</div>
							<button class="btn btn-noborders btn-block btn-success">SEND MESSAGE</button>
						</form>
					</div><!-- col sm 6 offset sm 3 -->
				</div><!-- row -->
				<br />
				<div class="d-flex flex-column align-items-center">
					<div>
						<p class="followup">Follow Up</p>
					</div>
					<div>
						<a href="#"> <img src="img/facebook.png" alt=""> </a>
						<a href="#"> <img src="img/instagram.png" alt=""> </a>
						<a href="#"> <img src="img/twitter.png" alt=""> </a>
						<a href="#"> <img src="img/linkedin.png" alt=""> </a>
					</div>
				</div>
				
				</div><!-- container -->
			</div><!-- contact -->
		</article>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<script>
			
		function showIframe(elemento, idvideo) {
			elemento.find('img').remove();

			elemento.append('<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/'+idvideo+'?autoplay=1" frameborder="0" allowfullscreen></iframe></div>');
		}

		var playVideo = $('.play-video');

		playVideo.on('click', function(evento) {
			evento.preventDefault();
			var id = $(this).attr("data-id");
			showIframe($(this), id);
		})


		</script>
	

  </body>
</html>