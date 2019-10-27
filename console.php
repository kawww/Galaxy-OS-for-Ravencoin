<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <title>GALAXY OS</title>
		<style>


html,
body,
.site_font {
  font-family: coda_regular, arial, helvetica, sans-serif;
}

html, body {
  background-color: #0b0c0d;
  color: #fff;
  font-size: 15px;
  margin: 0 auto -100px;
  padding: 0;
}





a:link,
a:visited,
a:active{
 transition:0.5s;
color: #28f428;	
  text-decoration: none;
}

a:hover { color:yellow; }

input[type="text"],
input[type="submit"] {
  font-size: 18px;
}



input[type="text"],
input[type="submit"] {
  border: 1px solid #59fbea;
  font-family: coda_regular, arial, helvetica, sans-serif;
  -webkit-appearance: none;
  -webkit-border-radius: 0;
  height:42px;
 

}

input[type="text"] {
  background-color: rgb(11, 12, 13);
  color: #ddd;

 width:500px;
 padding-left:5px;

}

input[type="submit"] {
  background-color: rgb(0, 79, 74);
  color: #59fbea;
  padding: 5px 22px;
margin-left:3px;
  height:45px;
    
}

div{margin:5px;border:0;padding:0;}

#door {

margin-top:15px;
  
  font-size: 15px;
  

}

#newworld{

margin-top:100px;
  
  font-size: 15px;
  

}





#tech {

  
margin-left: 11px;
padding-left: 2px;
text-align: left;
vertical-align:middle;

  border: 0px solid #59fbea;
  font-family: coda_regular, arial, helvetica, sans-serif;
  -webkit-appearance: none;
  -webkit-border-radius: 0;
  font-size:24px;

width:98%;

 
  
}



.crt::before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: linear-gradient(rgba(18, 16, 16, 0) 80%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06));
  z-index: 2;
  background-size: 100% 2px;
  pointer-events: none;
}
.crt {
  animation: textShadow 0.00s infinite;
}

            #nav
            {
                /*width: 80%;*/
                margin: 0 auto;
				margin-left: 13px;
				padding-left: 3px;
                border: 0px solid #59fbea;
            }
            ul,li 
            {
                margin: 0px;
                padding: 0px;
                list-style: none;
            }
            ul 
            {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;

            }

			div:before {
  content:"";
  position:absolute;
  top:0px;
  bottom:0;
  left:0;
  right:0;
  background:linear-gradient(to bottom,transparent,#000 0px);
  animation:fadeIn 1s forwards
}

@keyframes fadeIn {
  0% {
    top:5%;
  }
  100% {
    top: 100%;
  }
}

            li
            {
                border: 1px solid #59fbea;
                width: 270px;
				height:60px;
				word-break: break-all;
			background-color: rgb(0, 79, 74);
                text-align: center;
                margin-top: 10px;
                margin-bottom: 10px;
				margin-right: 5px;
				margin-left: 5px;
				padding-top:10px;
				padding-left:2px;
				padding-right:2px;
                flex:auto;  
	

            }
#universe {

line-height:26px;
ont-weight:100px;
font-size: 22px;
position: absolute;
  
}


</style>
		<body>

		


<?php 

if(isset($_REQUEST["asset"])) 

{
	$ec=$_REQUEST["asset"];	

		echo "<div id=\"door\"  class=\"crt\"><form action=\"\" method=\"post\" ><div id=\"tech\"  class=\"crt\"><ul><li style=\"font-size: 30px;animation: textShadow 1.00s infinite;letter-spacing:4px;width:1%;margin-top:20px;padding-top:5px;height:40px;border: 1px solid #59fbea;background-color:black;\"><a href=index.php><b>GALAXY</b></a></li>";	

		echo "<li  style=\"border:0px;width:50%;text-align:left;background-color:black;\"><input type=\"text\" name=\"asset\" maxlength=\"46\" value=\"".$ec."\" placeholder=\"support 4 commands\">";

		echo "<input type=\"hidden\" name=\"one\" value=\"rvn\" />";
		echo "<input type=\"submit\" value=\"KAW\"></div></form></div>";
	}

		else {

			
	

		echo "<div id=\"door\"  class=\"crt\"><form action=\"\" method=\"post\" ><div id=\"tech\"  class=\"crt\"><ul><li style=\"font-size: 30px;animation: textShadow 1.00s infinite;letter-spacing:4px;width:1%;margin-top:20px;padding-top:5px;height:40px;border: 1px solid #59fbea;background-color:black;\"><a href=index.php><b>GALAXY</b></a></li>";	

		echo "<li  style=\"border:0px;width:50%;text-align:left;background-color:black;\"><input type=\"text\" name=\"asset\" maxlength=\"46\" placeholder=\"support 4 commands\">";

		echo "<input type=\"hidden\" name=\"one\" value=\"rvn\" />";
		echo "<input type=\"submit\" value=\"KAW\"></div></form></div>";
	


		}

		echo "<div id=\"nav\"><ul>";
		
		
		echo"<li style=\"height:100px;color:#bbb;\"><a href=?asset=help ><h2>[ HELP ]</a></h2></a><hr style=\"background-color:#59fbea;height:1px;border:none;\">CONSOLE COMMAND LIST</li>";
		
		echo"<li style=\"height:100px;color:#bbb;\"><a href=?asset=getinfo ><h2>[ Get Info ]</a></h2></a><hr style=\"background-color:#59fbea;height:1px;border:none;\">NODE INFO</li>";

		echo"<li style=\"height:100px;color:#bbb;\"><a href=?asset=getblockchaininfo ><h2>[ Get Blockchain Info ]</a></h2></a><hr style=\"background-color:#59fbea;height:1px;border:none;\">BLOCKCHAIN INFO</li>";

		echo"<li style=\"height:100px;color:#bbb;\"><a href=?asset=getblockcount ><h2>[ Get Block Count ]</a></h2></a><hr style=\"background-color:#59fbea;height:1px;border:none;\">BLOCK COUNT</li>";

		

		echo "</ul></div>";

		echo "<div id=\"universe\" class=\"crt\">";

if(isset($_REQUEST["asset"])) {


//check server


include("rpc.php");

$rpc = new Linda();


//rpc

$_REQ = array_merge($_GET, $_POST);

$asset=$_REQ["asset"];


echo "<div id=\"nav\">";

if($asset=="getinfo"){

$command = $rpc->getinfo();}

elseif($asset=="getblockchaininfo"){

$command = $rpc->getblockchaininfo();}

elseif($asset=="getblockcount"){

$command = $rpc->getblockcount();echo "<pre>";
print_r($command);
echo "</pre>"; exit;}




if($asset=="help"){

$command = $rpc->help();echo "<pre>";
print_r($command);
echo "</pre>"; exit;}






if(isset($command) && $command!=""){

foreach($command as $x=>$x_value)
	
{

if(!is_array($x_value)){
echo $x.": ".$x_value."<br>";}
}

}

echo "</div>";

}

//echo "<br><br>&nbsp;&nbsp;<a href=http://onervn.com/search?asset=".$address." >http://onervn.com/search?asset=".$address."</a>&nbsp;<br>";





?>
</div>
</div>
</body>
</html>