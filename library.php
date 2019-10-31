
<?php
    
		session_start(); 
        $x = $_SESSION["Username"];
            if(empty($x))
            {
                header("location:index.php");
            }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <style>
        @media(max-width:992px)
        .collapse .navbar-collapse #navbarNav{
            flex-grow: 1;
        }
        nav{
            font-family: Gilroy;
            letter-spacing: 0.1em;
        }
        .overlay {
	        background: #FF1CAD;
        	background: -webkit-linear-gradient(to right, rgb(18, 177, 235), #FF1CAD);
        	background: linear-gradient(to right, rgb(18, 177, 235), #FF1CAD);
	        background-repeat: no-repeat;
	        background-size: cover;
	        background-position: 0 0;
        	color: #FFFFFF;
        	transform: translateX(0);
	        transition: transform 0.6s ease-in-out;
        }
        .jumbotron{
            margin-bottom: 0;
            border-radius: 0px;
        }
        .card-body{
            padding-bottom: 10px;
        }
        .card{
            margin: 47px;
            padding-top: 10px;
        }
        #charts{
            color: white;
            font-family: Gilroy;
            text-align: center;
            padding-bottom: 20px;
        }
    </style>

    <title>Crash Marker</title>
  </head>
  <body>
      </div>
   <nav class="navbar navbar-expand-lg navbar-dark overlay" style="position: sticky; top: 0; z-index: 500">
    <div class="container">
        <a class="navbar-brand" href="#" >CRASH MARKER </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav" style="font-weight: 500; flex-grow: 0;">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"> Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#cards">E-Books &amp; pdf</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>
        </ul>
          </div>
          </div>
        </nav>
        
        <div class="jumbotron text-left">
        <div class="container">
              <h1>Welcome <?php echo $_SESSION["Username"]; ?>,</h1>
              <p>This website is on a <b>Beta Testing</b>.<br>We made this website just for gaining some experience on web developing.<br>The main intension for this site is to help others through a online library service especially for B.Tech CSE course.</p>
        </div>
        </div>
        

        <div class="clearfix"></div>
        </div>
        <div class="jumbotron bg-dark">
        <div class="container" id="cards">
           <div class="row">
            <div class="card col-md-3" style="width: 18rem;">
              <img src="9780198099307.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Data Structures Using C</h5>
                <p class="card-text">By Reema Thareja</p>
              </div>
              <div class="card-body" style="padding-top: 0;">
                <a href="https://in.linkedin.com/in/reema-thareja-9986a014" target="_blank" class="card-link">About Author</a>
                <a href="http://masterraghu.com/subjects/Datastructures/ebooks/rema%20thareja.pdf" target="_blank" class="card-link">Download</a>
              </div>
            </div>
            
            <div class="card col-md-3" style="width: 18rem;">
              <img src="71s1RNvWpsL.jpg"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">UNIX Concepts and Application</h5>
                <p class="card-text">By Sumitabha Das</p>
              </div>
              <div class="card-body" style="padding-top: 0;">
                <a href="http://www.mhhe.com/engcs/compsci/das/author.mhtml" target="_blank" class="card-link">About Author</a>
                <a href="https://drive.google.com/file/d/1qhGpvfxrFOeW7oxDdfm9LbxjGKy349rE/view?usp=sharing"_blank" class="card-link">Download</a>
              </div>
            </div>
            
            <div class="card col-md-3" style="width: 18rem;">
              <img src="224131.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Computer System Architecture</h5>
                <p class="card-text">By M. Morris Mano</p>
              </div>
              <div class="card-body" style="padding-top: 0;">
                <a href="https://www.quora.com/Who-is-M-Morris-Mano" target="_blank" class="card-link">About Author</a>
                <a href="https://faculty.psau.edu.sa/filedownload/doc-10-pdf-d171a71acbe44cd5cd2f78a40570a069-original.pdf" target="_blank" class="card-link">Download</a>
              </div>
            </div>

            <div class="card col-md-3" style="width: 18rem;">
              <img src="letusc.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Let Us C</h5>
                <p class="card-text">By Yashavant P. Kanetkar</p>
              </div>
              <div class="card-body" style="padding-top: 0;">
                <a href="https://en.wikipedia.org/wiki/Yashavant_Kanetkar" target="_blank" class="card-link">About Author</a>
                <a href="letusc-yashwantkanetkar.pdf" target="_blank" class="card-link">Download</a>
              </div>
            </div>
            
            
        </div>
        </div>
        </div>

    </div>
           <div class="container">
            <footer>&copy; Ritankar Sarkar, Soumit Mandal, Anindya Mitra, 2019</footer>
      </div>

    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    


        
      </script>      
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>