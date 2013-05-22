<?php 
	include_once 'config.php';
	include_once 'function.php';
	session_start();
	$get_page = $_GET['page'];
	if ( $_SESSION['SESS_USERNAME'] == null )
	{
		header("location:index.php");
	}
	( $get_page != null ) ?	$page=$get_page:$page="home";	
	$fbackend = new functionPool;
	$param = $_GET["param"];
	$no = $_GET["no"];
	$message = $_GET["message"];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Agraprana</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link media="screen and (max-width: 800px)" href="style/small.css" rel="stylesheet" type="text/css">
<link href="style/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="style/table.css" rel="stylesheet" type="text/css">
<link href="style/jquery-te-1.3.5.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-min 1.8.3.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jquery-te-1.3.5.min.js"></script>
<link rel="icon" href="img/icon.png" sizes="32x32">
<script type="text/javascript" charset="utf-8">
</script>
<script>
  $(document).ready(function() { 
		$("table").tablesorter() ;
  	});
	$(function() {
    $( "#tabs" ).tabs();
	$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	$( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
  });
  //fungsi mengload add_image.php yang berguna untuk mambahkan image baru ke table home dalam database
  function addImage() {
      $("#tambah").load("add_image.php");};
</script>
</head>
<body class="backend">
<div class="main">
    <div class="backend_left">
    	<a class="backend_logo" href="backend.php">
            <img src="img/logo_2.png">
        </a>
		<ul class="backend_menu">
        	<li><h3 style="color:#9CC9F5">Welcome, <span style="color:grey"><? echo $_SESSION['SESS_USERNAME']; ?></span></h3></li>
        	<li><a class="trans_all" href="backend.php?page=home">Home</a></li>
            <li><a class="trans_all" href="backend.php?page=project">Project</a></li>
            <li><a class="trans_all" href="backend.php?page=news">News</a></li>
            <li><a class="trans_all" href="backend.php?page=career">Career</a></li>
            <li><a class="trans_all" href="backend.php?page=contact">Contact</a></li>
            <li><a class="trans_all" href="backend.php?page=setting">Setting</a></li>
            <li><a class="trans_all" href="logout-exec.php">Logout</a></li>
        </ul>
    </div>
    <div class="backend_right">
    	<?php
			switch ($page)
				{
				case "home":?>
                	<div id="tabs">
                          <ul>
                            <li><a href="#tabs-1">List Image</a></li>
                            <li><a href="#tabs-2">Add Image</a></li>
                          </ul>
                          <div id="tabs-1">
                          
                          	<table class="table_theme">
                            	<tr>
                                	<th>No</th>
                                    <th>Image Name</th>
                                    <th>Image Preview</th>
                                    <th></th>
                                </tr>
								<? $fbackend->listHome(); ?>
                            </table>
                            </div>
                            <div id="tabs-2">
                                <form method="post" action="catch.php?param=10" enctype="multipart/form-data">
                                <table class="backend_edit">
                                    <tr>
                                        <td>Photo</td>
                                        <td>:<input type="file" value="upload" name="bigphoto"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" value="Save" class="blue_button"></td>
                                        <td></td>
                                    </tr>
                                </table>
                                </form>
						   </div>
                     </div>
				<?php
				  break;
				case "project":?>
                	<div id="tabs">
                          <ul>
                            <li><a href="#tabs-1">List Project</a></li>
                            <li><a href="#tabs-2">Add Project</a></li>
                          </ul>
                          <div id="tabs-1">
                          	<? if ($param==14)
								  {
									  $fbackend->listEditProject($no);
								  }
								  else
								  { ?>
                                    <table class="table_theme">
                                        <tr>
                                            <th>No</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Location</th>
                                            <th>Description</th>
                                            <th>Wide</th>
                                            <th>Client</th>
                                            <th>Year</th>
                                            <th>Photo1</th>
                                            <th>Photo2</th>
                                            <th>Photo3</th>
                                            <th>Photo4</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <?
                                        $fbackend->listProject();
                                        ?>
                                    </table>
                                 <? }?>
						  </div>
                          <div id="tabs-2">
                		  		<form method="post" action="catch.php?param=11" enctype="multipart/form-data">
                                <table class="backend_edit">
                                <tr>
                                    <td>Category :</td>
                                    <td class="r_tab"><select name="category">
                                        <option value="interior">Interior</option>
                                        <option value="house">House</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="education">Education</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="health">Health & Resort</option>
                                        <option value="residential">Residential</option>
                                        <option value="office">Office</option>
                                        <option value="masterplan">Masterplan</option>
                                        <option value="others">Others</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Title :</td>
                                    <td class="r_tab"><input type="text" name="title" ></td>
                                </tr>
                                <tr>
                                    <td>Location :</td>
                                    <td class="r_tab"><input type="text" name="location" ></td>
                                 </tr>
                                 <tr>
                                    <td>Description :</td>
                                    <td class="r_tab"><textarea name="description" class="jqte-test"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Wide :</td>
                                    <td class="r_tab"><input type="text" name="wide" ></td>
                                </tr>
                                <tr>
                                    <td>Client :</td>
                                    <td class="r_tab"><input type="text" name="client" ></td>
                                </tr>
                                <tr>
                                    <td>Year :</td>
                                    <td class="r_tab"><input type="text" name="year" ></td>
                                </tr>
                                <tr>
                                    <td>Big photo :</td>
                                    <td class="r_tab"><input type="file" value="upload" name="bigphoto"></td>
                                </tr>
                                <tr>
                                    <td>Thumbnail 1 :</td>
                                    <td class="r_tab"><input type="file" value="upload" name="thumb1"></td>
                                </tr>
                                <tr>
                                    <td>Thumbnail 2 :</td>
                                    <td class="r_tab"><input type="file" value="upload" name="thumb2"></td>
                                </tr>
                                <tr>
                                    <td>Thumbnail 3 :</td>
                                    <td class="r_tab"><input type="file" value="upload" name="thumb3"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Save" class="blue_button"></td>
                                    <td></td>
                                </tr>
                                </table>
                                </form>
                          </div>
                     </div>
				<?php  break;
				case "news":?>
				  		<div id="tabs">
                          <ul>
                            <li><a href="#tabs-1">List News</a></li>
                            <li><a href="#tabs-2">Add News</a></li>
                          </ul>
                          <div id="tabs-1">
                          <? if ($param==15)
								  {
									  $fbackend->listEditNews($no);
								  }
								  else
								  { ?>
                          	<table class="table_theme">
                            	<tr>
                                	<th>No</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Image Title</th>
                                    <th>Image</th>
                                    <th>Article</th>
                                    <th></th>
                                    <th></th>
                                </tr>
								<? $fbackend->listNews(); ?>
                            </table>
                            <? } ?>
						  </div>
                          <div id="tabs-2">
                			<form method="post" action="catch.php?param=12" enctype="multipart/form-data">
                            <table class="backend_edit">
                            <tr>
                                <td>Title :</td>
                                <td class="r_tab"><input type="text" name="title"></td>
                            </tr>
                            <tr>
                                <td>Date :</td>
                                <td class="r_tab"><input type="text" name="date" id="datepicker"></td>
                             </tr>
                             <tr>
                                <td>Image Title :</td>
                                <td class="r_tab"><input type="text" name="location" ></td>
                            </tr>
                            <tr>
                                <td>Image :</td>
                                <td class="r_tab"><input type="file" value="upload" name="file_name" accept="image/*"></td>
                            </tr>
                            <tr>
                                <td>Article :</td>
                                <td class="r_tab"><textarea name="text" style="width:800px; height:200px;" class="jqte-test"></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Save" class="blue_button"></td>
                                <td></td>
                            </tr>
                            </table>
                            </form>
                          </div>
                     </div>
				   <? break;
				case "career": ?>
					<div id="tabs">
                          <ul>
                            <li><a href="#tabs-1">List Career</a></li>
                          </ul>
                          <div id="tabs-1">
                          	<table class="table_theme">
                            	<tr>
                                	<th>No</th>
                                    <th>Position</th>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Resume</th>
                                    <th>Portofolio</th>    
                                    <th></th>                              
                                </tr>
								<? $fbackend->listCareer(); ?>
                            </table>
						  </div>
					  </div>
				<?	break;
				case "contact": ?>
                	<div id="tabs">
                          <ul>
                            <li><a href="#tabs-1">Contact Information</a></li>
                          </ul>
                          <div id="tabs-1">
                           <? if ($param==16)
								  {
									  $fbackend->listEditContact($no);
								  }
								  else
								  { ?>
                          	<table class="table_theme">
                            	<tr>
                                	<th>No</th>
                                    <th>Phone</th>
                                    <th></th>
                                </tr>
								<? $fbackend->showContact(); ?>
                            </table>
                            <? } ?>
						  </div>
					  </div>
				<?	break;
				default: ?>
				  <div id="tabs">
                          <ul>
                            <li><a href="#tabs-1">List Admin</a></li>
                            <li><a href="#tabs-2">Add Admin</a></li>
                          </ul>
                          <div id="tabs-1">
                          	<table class="table_theme">
                            	<tr>
                                	<th>No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th></th>
                                </tr>
								<? $fbackend->showAdmin(); ?>
                            </table>
						  </div>
                          <div id="tabs-2">
                          	<form method="post" action="catch.php?param=13" enctype="multipart/form-data">
                            <table class="backend_edit">
                            <tr>
                                <td>Username :</td>
                                <td><input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>Password :</td>
                                <td><input type="text" name="password" ></td>
                             </tr>
                            <tr>
                                <td><input type="submit" value="Save" class="blue_button"></td>
                                <td></td>
                            </tr>
                            </table>
                            </form>
                          </div>
					  </div>
			<?	}			
		?>
    </div>
</div>
<?php if ($message != "" ) { ?>
<div class="fade-in message"><?php echo $message; ?></div>
<?php }?>
<script>
	$('.jqte-test').jqte();
</script>

</body>

</html>
<?php
	mysql_close($link);
?>
