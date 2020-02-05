<?php
session_start();
require 'application/config.php';
require 'application/function.php';

?>


<html>
    <head>
    <title>Online Shop</title>
     <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="mdbootstrap/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="mdbootstrap/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="mdbootstrap/css/style.css">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Open+Sans');
            body{
                margin:0;
                padding:0; 
                font-family: 'open sans','tahoma',sans-serif;
            }
            .garisY{
                width: 1px;
                background: #e0e0e0;
            }

            .garisX{
                height: 1.5px;
                background: #e0e0e0;
            }

            #ex3 .fa-stack[data-count]:after {
            position: absolute;
            right: 0%;
            top: 1%;
            content: attr(data-count);
            font-size: 55%;
            padding: .45em;
            border-radius: 50%;
            border: 1px solid white;
            line-height: .8em;
            color: white;
            background: rgba(255, 0, 0, 0.85);
            text-align: center;
            min-width: 1em;
            font-weight: bold;
            }

            select{
            border: 0;
            margin: 2px;
            border-right: 1px solid grey;
            max-width: 5.5em;
            outline: none;
            color: grey;
            }

            .footer{
                color: #ffffff;
            }

            .list {
                font-size: .9em;
                list-style-type: none;
            }

            .list li a{
                color: #ffffff;
                letter-spacing: 0.8px;
            }

            .list li a:hover{
                color: #eee0e0;
            }

            .box{
                box-model: border-box;
                background-clip:padding-box;
            }
        
      </style>

    </head>
        <body>

<?php
require 'header.php';

if(isset($_POST['daftar'])){
 if(register($_POST) > 0){
    echo '<script>
            alert("Pendaftaran Perhasil");
          </script>';
    echo '<meta http-equiv="refresh"
          content="0;url=http://localhost/ProjectGts/member.php"/>';
 }else{
    echo '<script>
            alert("Username/E-mail sudah ada");
          </script>';
 }
}

if(isset($_POST['Login'])){
    login($_POST);
   }
?>

        <div class="container p-5">
            <div class="row">
                <div class="col-sm-6 p-4">
                    <h5 style="color:#0277bd;">Login Member</h5>
                    <div class="container">
                    <div class="ml-n3">
                    <form class="mt-4" method="post">
                    <div class="form-group">
                        <label>E-mail</label>
                            <input type="text" class="form-control w-75"  placeholder="Username/E-mail" name="user" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                            <input type="password" class="form-control w-75"  placeholder="Masukan Password" name="password" required>
                    </div>
                    </div>
                    </div>
            
                        <div class="float-left">
                            <button type="submit" class="btn btn-sm light-blue darken-3" name="Login" style="color:white; font-size:13px; letter-spacing:1px;">Login</button>
                        </div>
                        </form>
                        
                    <div class="clearfix"></div>
                        <div class="row ml-3 mt-2">
                        <span>Lupa Password?</span><a href="forgot.php">Klik Disini</a>
                        </div>
                        
                </div>
                

                <div class="col-sm-6 p-4">
                    <h5 style="color:#0277bd;">Daftar Member</h5>
                    <div class="container">
                    <div class="ml-n3">

                    <form action="#" class="mt-4" method="post">
                    <div class="form-group">
                        <label>Username</label>
                            <input type="text" class="form-control w-75"  placeholder="Username" name="user" required>
                    </div>

                    <div class="form-group">
                        <label>E-Mail</label>
                            <input type="email" class="form-control w-75"  placeholder="E-mail" name="email" required>
                    </div>

                    <div class="form-group">
                        <label>No. Telp</label>
                            <input type="tel" class="form-control w-75" pattern="+[0,8]{2}[0-9]{10}" placeholder="No. Handphone / Telephone " name="Telp" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                            <input type="password" class="form-control w-75"  placeholder="Password" name="password" required>
                    </div>
                    
                    </div>
                    </div>

                    <div class="float-left">
                            <button type="submit" class="btn btn-sm light-blue darken-3" name="daftar" style="color:white; font-size:13px; letter-spacing:1px;">Daftar</button>
                        </div>
                    </form>
                        
                </div>
             </div>

        </div>


        </body>


        </html>