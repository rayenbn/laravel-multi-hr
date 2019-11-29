<?php
	class connection {
		
		public static function open_connection() {
			mysqli_connect("localhost","root","") or die(mysqli_error());
			mysqli_select_db("doctors") or die(mysql_error());
		}
		
		public static function close_connection() {
			mysqli_close();
		}
		
	}
?>