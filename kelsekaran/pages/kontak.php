<?php

    if(isset($_POST['tambah-fb']) && $_POST['tambah-fb'] == "KIRIM"){
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $isi = htmlspecialchars($_POST['pesan']);
     
        $query ="INSERT INTO feedback SET fb_nama='$nama', fb_email='$email', fb_pesan='$isi'"; 
        $res = mysqli_query($conn,$query);
        if($res){
            // header('location:index.php?berita');
            echo " <script> 
              alert('Terimakasih atas feedbacknya');
              document.location.href = 'index.php?contact';
            </script>";
            
           
            // header('location:index.php?contact');
        }
    }



?>

<div>
    <div class="container section-breadcrumbs">
      <h1>CONTACT US</h1>
      <p class = "garis"></p>
      <div class="row">
        <div class="col-sm-6 kontakkami">
          <table border = "0">
          <tr>
            <td >Twitter</td>
            <td >: @kelsekaran</td>
          </tr>
          <tr>
            <td >E-mail</td>
            <td >: sekaran@gmail.com</td>
          </tr>
          <tr>
            <td >Alamat</td>
            <td >: Jl. Rambutan Kel. Sekaran Kec. Gunung Pati Semarang 50229</td>
          </tr>
          <tr>
            <td >Telp.</td>
            <td >: (024)8508327</td>
          </tr>
        </table>
        </div>
        <div class="col-sm-6">
          <h3 class = "text-center">Form Jejak Pendapat</h3>

          <form method="post" class="hpform">
            <input type="text" name = "nama" placeholder="Nama" />
            <input type="email" name = "email" placeholder="E-mail" />
            <textarea name = "pesan" placeholder="Pesan"></textarea>
            <input type="submit" name = "tambah-fb" value="KIRIM" />
          </form>

        </div>
      </div>
    </div>
</div>

                    