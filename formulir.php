<html>
  <head><title>Pemesanan</title>
    <style type="text/css">
      @import url(style.css);
    </style>
    <script src=valid.js>

    </script>
  </head>
  <body>
    <center><font class="hx"><h1>Pemesanan</font><font class="hy">Tiket</h1></font></center>
      <form name="fform" id="fform" action="tampil.php" method="POST" onSubmit="return validasi()">
        <table align="center">
        <tr>
          <td><input type="text" name="nama1" id="nama1" placeholder="First Name" size="20"></td> <td><input type="text" name="nama2" id="name2" placeholder="Last Name" size="15"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" name="tlp" id="tlp" placeholder="No.Telephone" size="20"></td>
        </tr>
        <tr>
          <td colspan="2"><textarea name="alamat" id="alamat" rows="5" cols="42" placeholder="Address"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" value="Gender" disabled=""><input type="radio" name="jk" value="Pria">Pria <input type="radio" name="jk" value="Wanita">Wanita</td>
        </tr>
        <tr>
          <td><input type="text" value="Seat Class" disabled=""></td>
            <td><select class="" name="kelas">
            <option value="Economy">Economy</option>
            <option value="Business">Business</option>
            <option value="Premium Economy">Premium Economy</option>
          </select></td>
        </tr>
        <tr>
          <td><input type="text" value="Passenger" disabled=""></td>
          <td><select class="" name="penumpang">
            <option>-none-</option>
            <option value="Dewasa">Adult (12+)</option>
            <option value="Anak-Anak">Kid's(Age 2-11)</option>
            <option value="Balita">Child(Blow age 2)</option>
          </select></td>
        </tr>
        <tr>
          <td><input type="text" value="Ticket" disabled=""></td>
          <td><select class="" name="jmlh_tiket">
            <option>-none-</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select></td>
        </tr>
        <tr><td><input type="text" value="Origin" disabled=""></td>
          <td><select name="berangkat">
            <option value="Jakarta(CGK)">Jakarta,Indonesia</option>
            <option value="Bandar Lampung(TKG)">Bandar Lampung,Indonesia</option>
            <option value="Yogyakarta(JOG)">Yogyakarta,Indonesia</option>
            <option value="Surabaya(SUB)">Surabaya,Indonesia</option>
            <option value="Bali/Denpasar(DPS)">Bali/Denpasar,Indonesia</option>
            <option value="Batam(BTH)">Batam,Indonesia</option>
            <option value="Jayapura(DJJ)">Jayapura,Indonesia</option>
            <option value="Labuan Bajo(LBJ)">Labuan Bajo,Indonesia</option>
            <option value="Lombok(LOP)">Lombok,Indonesia</option>
            <option value="Pontianak(PNK)">Pontianak,Indonesia</option>
          </select></td>
        </tr>
        <tr><td><input type="text" value="Destination" disabled=""></td>
          <td><select name="datang">
            <option value="Jakarta(CGK)">Jakarta,Indonesia</option>
            <option value="Bandar Lampung(TKG)">Bandar Lampung,Indonesia</option>
            <option value="Yogyakarta(JOG)">Yogyakarta,Indonesia</option>
            <option value="Surabaya(SUB)">Surabaya,Indonesia</option>
            <option value="Bali/Denpasar(DPS)">Bali/Denpasar,Indonesia</option>
            <option value="Batam(BTH)">Batam,Indonesia</option>
            <option value="Jayapura(DJJ)">Jayapura,Indonesia</option>
            <option value="Labuan Bajo(LBJ)">Labuan Bajo,Indonesia</option>
            <option value="Lombok(LOP)">Lombok,Indonesia</option>
            <option value="Pontianak(PNK)">Pontianak,Indonesia</option>
          </select></td>
        </tr>
        <tr>
          <td><input type="text" value="Departure Date" disabled=""></td>
        <td><select name="tgl">
          <option selected="selected">Tanggal</option>
          <?php
            for($a=1; $a<=31; $a+=1){
            echo"<option value=$a> $a </option>";
            }
          ?>
          </select >
          <select name="bln">
              <option selected="selected">Bulan</option>
              <?php
              $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
              $jlh_bln=count($bulan);
              for($c=0; $c<$jlh_bln; $c+=1){
                echo"<option value=$bulan[$c]> $bulan[$c] </option>";
              }
              ?>
            </select>
            <select name="thn">
              <option>
            <?php
                $now=date('Y');
                echo "Tahun";
                for ($a=2008;$a<=$now;$a++){
                  echo "<option value='$a'>$a</option>";
                }
            ?></option></select></td>
        </tr>
      </table>
      <br>
      <center><input type="submit" value="Book" class="tombol"></center>
      </form>
  </body>
</html>
