<?php

 $nama_hari= "Rabu";

 switch ($nama_hari) {
 	case "Senin":
 		echo "Jika hari Senin maka memakai Seragam Putih Abu-abu";
 		break;
 			case "Selasa":
 			case "Kamis":
 				echo "Jika hari Selasa maka memakai Seragam Putih Hitam";
 				break;
 			case "Rabu":
 					echo "Jika hari Rabu maka memakai seragam Pramuka";
 					break;
 			case "Jumat":
 					echo "Jika hari Kamis maka memakai seragam Muslim";
 					break;
 			default:
 			         echo "Selain itu seragam olahraga";
 			         break;	
 }
 ?>
