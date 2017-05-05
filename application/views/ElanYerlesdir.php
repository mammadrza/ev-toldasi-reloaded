<!DOCTYPE html>
<html>
<head>
	<title></title>
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
  
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/elanYerlesdir.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?= base_url(); ?>public/js/javascript.js"></script>
</head>
<body>



<section class="NavbarIMG">
  <div class="container-fluid loginRegister">
    <div class="row">
      <div class="col-md-8 GirisQeydiyyat">
        <ul>
          <li class=""><a href="#">Giriş</a></li>
          <li class=""><a href="#">Qeydiyyat</a></li>
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
                        <img src="<?= base_url() ?>uploads/home.png">
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
    
    <div class="col-md-6 col-md-offset-1">
      <div class="col-md-12 search searchBotton">
        <h1 class="searchText">Elan əlavə et</h1>

        <form method="post" enctype="multipart/form-data" action="<?= base_url('adsController/ads') ?>">
        <!-- Emlain novu -->
          <div class="col-md-12 form-group">
            <label class="sel1" for="sel1">Əmlakın növü:</label>
            <select class="form-control" id="sel1" name="hometype">
                <option value> Siyahidan secin</option>
                <?php foreach ($hometype_list as $hometype) { ?>
                    <option value="<?= $hometype['id'] ?>"><?= $hometype['home_type_name'] ?></option>
                <?php } ?>
            </select>
          </div>

	<!-- Seher -->
          <div class="col-md-12 form-group">
            <label class="sel2" for="sel2">Şəhər:</label>
            <select class="form-control" id="city" name="citylist">
                <option value> Siyahidan secin</option>
                <?php foreach ($city_list as $city) { ?>
                    <option value="<?= $city->id ?>"><?= $city->city_name ?></option>
                <?php } ?>
            </select>
          </div>

          <!-- Rayon -->
           <div class="col-md-12 form-group">
            <label class="sel2" for="sel2">Rayon:</label>
               <select class="form-control" id="town" name="townlist" disabled='false'>
                   <option value=""></option>
               </select>
          </div>

          <!-- Metro -->
           <div class="col-md-12 form-group">
            <label class="sel2" for="sel2">Metro:</label>
               <select class="form-control" id="metro" name="metrolist" disabled=''>
                   <option value=""></option>
               </select>
          </div>

          <!-- qiymet -->
          <div class="col-md-12 form-group">
              <label class="sel3" for="inputdefault">Qiymət:</label>
              <input class="form-control" id="inputdefault" name="price" type="number" placeholder="">
          </div>

<!-- otaqsayi -->
           <div class="col-md-12 form-group">
            <label class="sel2" for="sel2">Otaq sayi:</label>
            <select class="form-control" id="sel1" name="roomlist">
                <option value> Siyahidan secin</option>
                <?php foreach ($rooms_list as $rooms) { ?>
                    <option value="<?= $rooms['id'] ?>"><?= $rooms['rooms_count'] ?></option>
                <?php } ?>
            </select>
          </div>

          <!-- unvan -->
          <div class="col-md-12 form-group">
              <label class="sel3" for="inputdefault">Ünvan:</label>
              <input class="form-control" id="inputdefault" name="adress" type="text" placeholder="">
          </div>

          <!-- elave melumat -->
          <div class="col-md-12 form-group">
              <label class="sel3" for="inputdefault">Əlavə məlumat:</label>
              <textarea class="form-control textarea" name="comment" rows="5" cols="15" id="comment"></textarea>
          </div>

                    <!-- Elaqeli sexs -->
          <div class="col-md-12 form-group">
              <label class="sel3" for="inputdefault">Əlaqəli şəxs:</label>
              <input class="form-control" id="inputdefault" name="contact" type="text" placeholder="">
          </div>



<!-- telefon -->
          <div class="col-md-12 form-group">
            <div class="col-md-12 nomre">
              <label class="sel3" for="inputdefault">Telefon:</label>
            </div>
            
            <div class="col-md-3 nomre994">
         
            		<select class="form-control" id="sel1">
              			<option>+994(55)</option>
                        <option>+994(51)</option>
                        <option>+994(50)</option>
                        <option>+994(70)</option>
                        <option>+994(77)</option>
            		</select>
            </div>
            <div class="col-md-9 nomrereqem">
              <input class="form-control" id="inputdefault" name="phone" type="number" placeholder="XXX XX XX">
            </div>
          </div>



          <!-- Email -->
          <div class="col-md-12 form-group">
                <label class="sel3" for="email">Email:</label>
      			<input type="email" class="form-control" name="email" id="email" placeholder="E-poçt ünvanı">
     
          </div>

          <!-- Sekil yukle -->
          <div class="col-md-12 form-group">
                <label class="sel3" for="email">Şekil yüklə:</label>
      			<input type="file" accept="png" class="form-control" name="profil_sekli" placeholder="Şekil yüklə" >
     
          </div>



          <div class="col-md-12 ElaveetButonu">
            <div class="YaddaSaxla">
              <button type="submit">
                Əlavə et
              </button>
            </div>
           <!--  <button class="btn btn-info btn-lg btn-block axtar">
              <a href="">Axtar</a>
            </button> -->
          </div>
        </form>


      </div>
    </div>
    <div class="col-md-4 search qaydalar">
    	      <h2 style="">Qaydalar</h2>
              <ul class="rules">
                <li>Eyni elanı bir neçə dəfə təqdim etməyin.</li>
                <li>Təsvir və ya şəkillərdə telefon, email və ya sayt ünvanı göstərməyin.</li>
                <li>Ad yerində qiymət yazmayın - bunun üçün ayrıca xana var.</li>
              </ul>
    </div>
  
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

<script type="text/javascript">


    $(document).ready(function () {
        $('#city').on('change', function () {
            var city_id = $(this).val();
            $('#town').empty();
            $('#metro').empty();
            $('#town').append("<option>Siyahidan secin</option>");
            $('#metro').append("<option>Siyahidan secin</option>");
            if (city_id == '8') {
                $('#town').prop('disabled', false),
                    $('#metro').prop('disabled', false);
                $.ajax({
                    url: '<?= base_url(); ?>adsController/get_metros',
                    type: 'POST',
                    data: {'city_id': city_id},
                    dataType: 'json',
                    success: function (data) {
                        $('#town').html(data.town);
                        $('#metro').html(data.metro);
                    },
                    error: function () {
                        alert('Error olmadi');
                    }
                });
            }
            else {
                $('#town').prop('disabled', true);
                $('#metro').prop('disabled', true);
            }
        });
    });



</script>









</body>
</html>