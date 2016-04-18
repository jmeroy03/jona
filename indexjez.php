
<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/layout.css" media="screen,projection" />
	
<title>MSU-DIVISION OF STUDENT AFFAIRS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
<meta name="description" content="MSU-DIVISION OF STUDENT AFFAIRS" >
<meta name="keywords" content="MSU-DIVISION OF STUDENT AFFAIRS" >
<meta name="GENERATOR" content="Ewisoft Website Builder eCommerce Software from http://www.ewisoft.com/" >
<style type="text/css" >
<!--
.link5777
{
	color:#FFF;
}

--></style></head>
<body>
<table class="container" width="100%" ><tr><td><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="banner" >
<tr>
<td><img src="./user/gimage/100organic_164_100.jpg" width="164" height="100" border="0" ></td>
<td><div align="left" class="slogan" >MSU-DIVISION OF STUDENT AFFAIRS</div></td>
<td><div align="right" class="slogan" >
<?php
		if(!(isset($_SESSION['logged']))){
			echo "<div id='navbar' class='navbar-collapse collapse'>";
			echo "<form class='navbar-form navbar-right'>";
            echo "<input type='button'  class='btn btn-primary btn	' data-toggle='modal' data-target='#myModalLogin' value=Log-In>";
			echo "</form>";
			echo "</div>";
		}
		?>

		<?php
		if($checker){
		 echo "<div id='navbar' class='navbar-collapse collapse'>";
         echo "<form class='navbar-form navbar-right' method='POST'>";
         echo "   <input class='btn btn-danger' type='submit' name='logoutmain' value='Logout'>";
         echo " </form>";
        echo "</div>";
		
			if(isset($_POST['logoutmain'])){
				include 'logout.php';
				logout();
			}
		}
		
		
				include 'connectdb.php';
				include 'session.php';
				connect();
				$param=null;
				if(isset($_POST['login'])){
					$username=$_POST['username'];
					$password=$_POST['password'];
					login($username,$password);
						
				}
			?>
</div></td>
</tr></table>

	<div class="toppict" >
	
	</div>
	
		<table class="topmenu" width="100%" >
		<tr>
			<td>
				<table id="topnavcontainer" width="100%" ><tr><td>
				<ul id="topnavlist">
					<li id="topactive" ><a href="index.php" target="_self" id="topcurrent" >Home</a></li>
					<li>
					<?php
					if(($checker)&&($_SESSION['accountType']=='loanee')){
						echo "<a href='sap.php'";
					}else{
						echo "<a href='sapOverview.php'";
					}
					?>
						target="_self" >Student Assistanship Program (SAP)</a></li>
					<li><a href="jobSearch.php" target="_self" >Job Search</a></li>
					<li>
					<?php
					if(($checker)&&($_SESSION['accountType']=='organization')){
						echo "<a href='organizationLogin.php'";
					}else{
						echo "<a href='organizationOverview.php'";
					}
					?>
						target="_self" >Organization</a></li>
					<li><a href="permits.php" target="_self" >Permits</a></li>
					<li><a href="studenthandbook.php" target="_self" >Student Handbook</a></li>
					<?php
						$query="select * from electionstatus";
						$result=mysql_query($query);
						$row=mysql_fetch_row($result);
				
						if($row[1]=='active'){
							echo "<li><a href='election.php' target='_self' >SSG Election</a></li>";
						}
					?>	
					
				</ul>
				</td></tr>
				</table>
			</td>
		</tr>
		</table>
	<div class="mainpict" ></div>


		<table class="leftmenu" width="100%" >
		<tr><td>
		<p>
			<ul id="leftnavlist" >
			
			
		</p>
		</td></tr>
		</table>
		
		<div class="contframe" >
		<div class="contents" ><H1>Welcome to MSU-Division of Student Affairs</H1>
			<P>
			<Strong>Functions of the Division of Student Affairs per BOR Resolution No. 496:</Strong>
			</P>
		
		<P>
		1. Provides an effective channel of communication between the student body on the one hand and the administration, faculty and employees on the other;<BR>
		</P>
		<P>
		2. Receives from the students and student organizations suggestions and recommendations for improvement of the University as well as complaints and grievances of students;<BR>
		</P>
		<P>
		3. Endeavors to explain the policies of the University;<BR>
		</P>
		<P>
		4. Endeavors to resolve student problems, provided that those that cannot be solved or lie beyond its competence shall be transmitted to higher authorities of the University for information, guidance or appropriate action;<BR>
		</P>
		<P>
		5. Coordinates the operations of units in charge of student services such as;<BR>
		</P>
		<P>
		&nbsp;&nbsp;&nbsp;&nbsp; University Infirmary<BR>
		
		&nbsp;&nbsp;&nbsp;&nbsp; Student Organization<BR>
		
		&nbsp;&nbsp;&nbsp;&nbsp; Student Publications<BR>
		
		&nbsp;&nbsp;&nbsp;&nbsp; Student Residence Halls and Villages<BR>
		
		&nbsp;&nbsp;&nbsp;&nbsp; University Cafeteria<BR>
		</P>
		
		</div>
		</div>

			
		<table class="footer" width="100%" ><tr><td>Copyright &copy; MSU-Division of Student Affairs. All rights reserved.<br>
		contact us: <a href="http://www.facebook.com/markjezreel" target="_blank" class="link5777" >Mark Jezreel C. Dagot</a>
		and <a href="http://www.facebook.com/emanueljarlata" target="_blank" class="link5777" >Edwin Manuel M. Jarlata</a></td></tr>
		</table></td></tr>
</table>



<!-- Modal LOGIN-->
<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Log-In</h4>
      </div>
	  <form method='POST'>
      <div class="modal-body">
        <input class='form-control' type='text' name='username' placeholder='Username' required>
		<input class='form-control' type='password' name='password' placeholder='Password' required>
      </div>
      <div class="modal-footer">		
		
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input class='btn btn-primary' type='submit' name='login' value='Log-In'>
       </form>
      
	  </div>
    </div>
  </div>
</div>
<!-- Modal LOGIN-->	



	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>