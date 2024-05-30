<?php
include("include/header.php");

?>
<table style=" width:100%;" border="1px">
<tr>
<?php


//$counter=0;
//while($row=mysqli_fetch_array($result))
// $counter++;
?>
<td style="border-style:dotted dashed; vertical-align:top; width:100%; "  align="center" >
<b>
ورود به سایت
<b>
</td>
<tr>
	<td>
	<form name="login" action="action_login.php" method="POST">
	<table style="width:50%; margin-left:auto; margin-right:auto;" border="0">
		
		
		<tr>
			<td>نام کاربری:<span style="color:red">*</span></td>
			<td><input type="text" name="username" id="username" /></td>
		</tr>
		
		<tr>
			<td>کلمه عبور:<span style="color:red">*</span></td>
			<td><input type="text" name="password" id="password" /></td>
		</tr>
		
		
		<tr>
			<td></br></br></td>
			<td><input type="submit" value="ورود"  /> &nbsp; &nbsp;&nbsp;
				<input type="reset" name="reset" value="جدید" />
			</td>
		</tr>





</br>


</table>
</form>
		
	</td>

</tr>
</table>

<?php
 include("include/footer.php");
 ?>