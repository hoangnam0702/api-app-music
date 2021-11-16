<?php

	require 'connect.php';

	$query = "SELECT *FROM playlist";
	 
	 class Danhsachplaylist{
		 function Danhsachplaylist($idplaylist, $ten, $hinh,$icon){
	 	$this->IdPlaylist = $idplaylist;
	 	$this->Ten = $ten;
	 	$this->HinhPlayList = $hinh;
	 	$this->Icon = $icon;
				}
			}

				$arrayplaylist = array();
				$data = mysqli_query($con, $query);
		while ($row = mysqli_fetch_assoc($data )){
		    array_push($arrayplaylist, new Danhsachplaylist($row['IdPlayList']
																			,$row['Ten']
																			,$row['Hinhnen']
																			,$row['Hinhicon']
		        
		        ));
		}
				echo json_encode($arrayplaylist);
 ?>