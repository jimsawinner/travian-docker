<?php

#################################################################################

##              -= YOU .phpNOT REMOVE OR CHANGE THIS NOTICE =-                 ##

## --------------------------------------------------------------------------- ##

##  Filename       gold.tpl                                                    ##

##  Developed by:  aggenkeech                                                  ##

##  License:       TravianX Project                                            ##

##  Copyright:     TravianX (c) 2010-2012. All rights reserved.                ##

##                                                                             ##

#################################################################################



if($_SESSION['access'] < ADMIN) die("Access Denied: You are not Admin!");

$id = $_SESSION['id']; ?>



<form action="../cpanel/again.php" method="POST">

	<input type="hidden" name="admid" id="admid" value="<?php echo $_SESSION['id']; ?>">

	<table class="table" style="width:300px;">

		<thead>

			<tr>

				<th colspan="2">Delete Database</th>

			</tr>

		</thead>

		<tbody>

			<tr>

				<td colspan="2">

					<center>

						<input type="image" src="../img/Admin/b/ok1.gif" value="submit">

					</center>

				</td>

			</tr>

		</tbody>

	</table>

</form>



<?php

	if(isset($_GET['g']))

	{

		echo '<br /><br /><font color="Red"><b>The Server Has Been Reset</font></b>';

	}

?>