
<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 4</title>
    </head>
    <body>
    <?php
			echo "<p align:'center'>Tugas 4</P>";
			echo "<table border='1' width='10%' cellspacing='0' cellpadding='0' id='table2'>";
			echo "<tr><td align='center'>Nilai</td><td align='center'>Huruf</td></tr>";
			echo "<tr><td align='center'>>=80</td><td align='center'>A</td></tr>";
			echo "<tr><td align='center'>70-79</td ><td align='center'>B</td></tr>";
			echo "<tr><td align='center'>60-69</td><td align='center'>C</td></tr>";
            echo "<tr><td align='center'>50-59</td><td align='center'>D</td></tr>";
			echo "<tr><td align='center'><=50</td><td align='center'>E</td></tr>";
			echo "</table>";
         echo "<br>";
   ?>

   <form action="" method="POST">
      Masukkan Nilai:<br>
      <input type="number" name="nilai"> <!-- saya memilih number dari text karena menurut saya agar hanya angka saja yg dapat dimasukkan 0 sampai 9-->
      <input type="submit" value="Hasil">
    </form>
		<?php
			

            
         if ($_POST)
         {
           $nilai = $_POST['nilai'];
           if ($nilai >= 80)
           {
             $keterangan = "A";
           }
           elseif ($nilai >= 70)
           {
             $keterangan = "B";
           }
           elseif ($nilai >= 60)
           {
             $keterangan = "C";
           }
           elseif ($nilai >= 50)
           {
             $keterangan = "D";
           }
           else
           {
             $keterangan = "E";
           }
           echo "Hasil";
           echo "<br>";
           echo "Nilai : " . $nilai;
           echo "<br>";
           echo "Keterangan : " . $keterangan;
           echo "<br>";
         }
		?>
	</body>
</html>