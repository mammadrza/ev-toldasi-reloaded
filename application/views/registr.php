
<?php //var_dump($data);
//die();?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

  <script
    src="https://code.jquery.com/jquery-3.1.1.js"
    integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.0.js"> </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
   
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/registrGiris.css'); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?= base_url('public/js/javascript.js'); ?>"></script>
 


    <title>Qeydiyyat</title>
  </head>
  <body>


<section class="NavbarIMG">
  <div class="container-fluid loginRegister">
    <div class="row">
      <div class="col-md-8 GirisQeydiyyat">
        <ul>
          <li class=""><a href="<?php base_url('loginController') ?>">Giris</a></li>
          <li class=""><a href="<?php base_url('registrController') ?>">Qeydiyyat</a></li>
        </ul>
      </div>
      <div class="col-md-4 social">
        <ul>
            <li>
            <a href="#">
            <i class="fa fa-google-plus" aria-hidden="true">             
            </i>
            </a>
            </li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      
          </ul>
      </div>

    </div> 

 
  </div>

 <!--  NAVBAR -->

 <div class="container-fluid">
    <div class="row">
        <div class="navbar ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                      <a class="navbar-brand navbarLogo" href="#">
                        <img src="<?= base_url('uploads/home.png'); ?>">
                      </a>
                </div>
                <div class="navbar-collapse collapse navbarLeft">
                    <ul class="nav navbar-nav navbarUL">
                        <li class=""><a href="#">Ana səhifə</a></li>
                        <li class=""><a href="#">Haqqımızda</a></li>
                        <li class=""><a href="#">Əlaqə</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>  
</div>



<div class="container-fluid Umumiaxtaris">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 ">
      <div class="col-md-12 search">
        <h1 class="searchText">Qeydiyyat</h1>
        <form class="form-group" action="<?= base_url('registerController/insert')?>" method="POST">
         <!-- <span class="text">Adı:</span> -->
          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-user"></span>
               </div>
               <input class="form-control" id="username" name="regUserName" type="text" placeholder="Ad">

          </div>

                <?php if(form_error('regUserName')){ ?>
                    <div style="text-align: center">
                        <p style="color:red">Adı boş buraxmayın.</p>
                    </div>
                <?php   }  ?>


          <!-- <span class="text">Soyadı:</span> -->
          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-user"></span>
               </div>
               <input class="form-control" id="surname" name="regSurname" type="text" placeholder="Soyad">
          </div>
            <?php if(form_error('regSurname')){ ?>
                <div style="text-align: center">
                    <p style="color:red">Soyadı boş buraxmayın.</p>
                </div>
            <?php   }  ?>


            <div class="input-group araMesafesi">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-user"></span>
                </div>

                <select name="regGender" id="gender" class="form-control">
                    <option value="Kişi">Kişi</option>
                    <option value="Qadin">Qadin</option>
                </select>
            </div>




            <div class="input-group araMesafesi">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-map-marker"></span>
                </div>

                <select name="regCity" id="city" class="form-control">


                <?php foreach ($weherler as $key => $value){ ?>
                    <option><?= $value->city_name ?></option>
                <?php } ?>


                    <?php if($city){ ?>
                    <option><?= $city->city_name ?></option>
                  <?php  } ?>

                </select>
            </div>





            <div class="input-group araMesafesi">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-education"></span>
                </div>

                <select name="regUniversity" id="university" class="form-control">


                    <?php foreach ($univerler as $key => $value){ ?>
                        <option><?= $value->university_name ?></option>
                    <?php } ?>
                </select>
            </div>







          <!-- <span class="text">Şifrə:</span> -->
          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-lock"></span>
               </div>
               <input class="form-control" id="password" name="regPassword" type="password" placeholder="Şifrə">
          </div>
            <?php if(form_error('regPassword')){ ?>
                <div style="text-align: center">
                    <p style="color:red">Şifrəni boş buraxmayın.</p>
                </div>
            <?php   }  ?>


            <?php if(isset($_SESSION['passwordlong'])){ ?>
                <div style="text-align: center">
                    <p style="color:#E57C67"><?= $_SESSION['passwordlong']?></p>
                </div>
            <?php unset($_SESSION['passwordlong']); } ?>



          <!-- <span class="text">Mobil nömrə:</span> -->

          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-earphone " ><span class="black">&nbsp;&nbsp;+</span><span class="helli">994</span> </span>
               <select id="operator-numbers" name="regOperatorNumbers">
                                <option>55</option>
                                <option>51</option>
                                <option>50</option>
                                <option>70</option>
                                <option>77</option>
                          </select>
          </div>
               <input class="form-control" id="phone_number" name="regPhoneNumber" type="number" placeholder="Mobil nömrə" maxlength="7">

          </div>
            <?php if(form_error('regPhoneNumber')){ ?>
                <div style="text-align: center">
                    <p style="color:red">Nömrəni boş buraxmayın.</p>
                </div>
            <?php   }  ?>



            <?php if (isset($_SESSION['invalidphonenumber'])) { ?>
            <div style="text-align: center">
                <p style="color:#E57C67"><?= $_SESSION['invalidphonenumber'] ?></p>
            </div>
            <?php unset($_SESSION['invalidphonenumber']);  } ?>


          <!-- <span class="text">E-poçt ünvanı:</span> -->
            <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-envelope"></span>
               </div>
               <input class="form-control" id="email" name="regEmail" type="email" placeholder="E-poçt ünvanı">
            </div>


<!--  form validadiot  EMAIL error start          -->
            <?php if(form_error('regEmail')){ ?>
                <div style="text-align: center">
                    <p style="color:red">E-poçt ünvanı boş buraxmayın.</p>
                </div>
            <?php   }  ?>
<!--  form validadiot EMAIL error end  -->


<!--session EMAIL error start  -->
            <?php if (isset($_SESSION['invalidemail'])) { ?>
                <div style="text-align: center">
                    <p style="color:#E57C67"><?= $_SESSION['invalidemail']; ?></p>
                </div>
            <?php unset($_SESSION['invalidemail']); } ?>
<!--session EMAIL error end  -->




          <!-- <span class="text">Doğum tarixi:</span> -->
          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-lock"></span>
               </div>
               <input class="form-control" id="birthday" name="regBirthday" type="date" placeholder="Doğum tarixi">
            </div>
            <?php if(form_error('regBirthday')){ ?>
                <div style="text-align: center">
                    <p style="color:red">Doğum tarixi boş buraxmayın.</p>
                </div>
            <?php   }  ?>



            <?php if (isset($_SESSION['invalidbdate'])) { ?>
                <div style="text-align: center">
                    <p style="color:#E57C67"><?= $_SESSION['invalidbdate']; ?></p>
                </div>

            <?php unset($_SESSION['invalidbdate']); } ?>

          <!-- <button type="button" class="btn btn-secondary btn1">Yadda saxla</button> -->
            <div class="YaddaSaxla">
              <button type="submit">
                Yadda saxla
              </button>
            </div>

        </form>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
</section>

<section class="orange">
  <div></div>
</section>


<section class="footer">
  <div container-fluid>
    <div class="col-md-12 FoutureText">
      <p>© 2017 evyoldaşı.az All Rights Reserved.</p>
    </div>
  </div>
</section>


<script src='js/javascript.js'></script>
  </body>

</html>