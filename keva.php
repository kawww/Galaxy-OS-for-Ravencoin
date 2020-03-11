<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <title>WORD</title>
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

.textarea-inherit {
    width: 90%;
    overflow: auto;
    word-break: break-all;
}

::-webkit-scrollbar { width: 0 !important }



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

 width:50%;
 padding-left:5px;

}

input[type="submit"] {
  background-color: rgb(0, 79, 74);
  color: #59fbea;
  padding: 5px 22px;
  margin-left:3px;
  height:45px;
    
}

div{margin:1px;border:0;padding:0;}

#door {

margin-top:0px;
  
font-size: 15px;
  

}

#newworld{

margin-top:100px;
  
  font-size: 15px;
  

}





#tech {

  


text-align: left;
vertical-align:middle;

  border: 0px solid #59fbea;
  font-family: coda_regular, arial, helvetica, sans-serif;
  -webkit-appearance: none;
  -webkit-border-radius: 0;
  font-size:24px;

width:98%;

 
  
}

@keyframes textShadow {
  0% {
    text-shadow: 0.4389924193300864px 0 1px rgba(0,30,255,0.5), -0.4389924193300864px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }

  100% {
    text-shadow: 2.6208764473832513px 0 1px rgba(0,30,255,0.5), -2.6208764473832513px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
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
                width: 440px;
				height:100px;
				word-break: break-all;
			background-color: rgb(0, 79, 74);
                text-align: center;
                margin-top: 10px;
                margin-bottom: 7px;
				margin-right: 5px;
				margin-left: 1px;
				padding-top:10px;
				padding-left:2px;
				padding-right:2px;
                flex:auto;  
				

            }
			p
			{
			margin-left: 5px;
			}
#universe {

line-height:26px;
ont-weight:100px;
font-size: 22px;
position: absolute;
  
}

p
{

color:#ccc;
margin-top:2px;

}

</style>


<script>

    var maxstrlen=1500;
    function Q(s){return document.getElementById(s);} 
    function checkWord(c){
        len=maxstrlen;
        var str = c.value;
        myLen=getStrleng(str);
        var wck=Q("wordCheck");
        if(myLen>len*2){
            c.value=str.substring(0,i+1);
        }
        else{
            wck.innerHTML = Math.floor((len*2-myLen)/2);
           }
    }
    function getStrleng(str){
        myLen =0;
        i=0;
        for(;(i<str.length)&&(myLen<=maxstrlen*2);i++){
        if(str.charCodeAt(i)>0&&str.charCodeAt(i)<128) 
        myLen++;
        else
        myLen+=2;
    }
    return myLen;
}
</script>

<body>

		


<?php 
error_reporting(0);
include("rpc.php");



$rpc = new Keva();

$vpc = new Raven();

$_REQ = array_merge($_GET, $_POST);

//creat new to blockchain

if(isset($_REQ["newasset"])) {

$forsub=$_REQ["newasset"];

$age= $rpc->keva_put($_REQ["asset"],$_REQ["title"],$forsub);

$url = "?asset=".$_REQ["asset"]; 





echo "<script>window.location.href=decodeURIComponent('keva.php".$url."')</script>";


}

//block

if(isset($_REQ["asset"]) & is_numeric($_REQ["asset"])==true) 
		
		{
			
			echo "<script>window.location.href=decodeURIComponent('subscription.php?block=".$_REQ["asset"]."')</script>";

			}

//add new text

if(isset($_REQ["mode"])){

		if($_REQ["mode"]==1  & $keva_add=="on"){
		
			if(isset($_REQ["title"])){
		
					$infox= $rpc->keva_get($_REQ["asset"],$_REQ["title"]);

					extract($infox);
		
					$key=str_replace(" ","_",$key);

								}


				
			echo "<div id=\"door\"  class=\"crt\"><form action=\"\" method=\"post\" ><div id=\"tech\"  class=\"crt\"><ul><li style=\"font-size: 30px;animation: textShadow 1.00s infinite;letter-spacing:4px;width:1%;margin-top:20px;padding-top:5px;height:40px;border: 1px solid #59fbea;background-color:#0b0c0d;\"><a href=keva.php><b>GALAXY</b></a></li></ul>";	

			echo "<ul><li style=\"height:670px;\"><br><input type=\"text\" name=\"title\" class=\"textarea-inherit\"  style=\"width:90%;\" value=".$key."><br><br><textarea onKeyUp=\"javascript:checkWord(this);\" onMouseDown=\"javascript:checkWord(this);\" rows=\"25\" cols=\"150\" name=\"newasset\" class=\"textarea-inherit\" id=\"pasteArea\" placeholder=\"\">".$value."</textarea>";

			echo "<br><textarea rows=\"1\" cols=\"150\" class=\"textarea-inherit\">LINK TXID CODE <script>window.location.href=decodeURIComponent(\"http://\")</script></textarea>";
		
			echo "<input type=\"hidden\" name=\"mode\" value=\"bulk\" />";

			echo "<br><br><span style=\"font-family: Georgia; font-size: 22px;\" id=\"wordCheck\">1500</span> [ ".$_REQ['nameid']." ] <br><br><input type=\"submit\" value=\"SUBMIT\"> </li></ul></div></form></div>";

			exit;
			
			}

//ipfs

			if($_REQ["mode"]==2)
				
				{

				$url = "http://linkipfs.com";

					if(isset($_REQ["key"]))
		
					{
	

					$keylink="http://galaxyos.io/keva.php?asset=".$_REQ["asset"]."&key=".$_REQ["key"];			
					$keylink=str_replace(" ","%20",$keylink);

					$keylink = str_replace("&","%26",$keylink);

					$jsonStr = '{"url": "'.$keylink.'"}';

			
					}
			
				else
				
					{

				$jsonStr = '{"url": "http://galaxyos.io/keva.php?asset='.$_REQ["asset"].'"}';
			
					}



			list($returnCode, $returnContent) = http_post_json($url, $jsonStr);


				}
		
//subscribe

			if($_REQ["mode"]==3 & $keva_add=="on")
				
				{

					$namespace= $rpc->keva_list_namespaces();

					$subraven= $vpc->subscribetochannel($_REQ["sname"]);

					foreach ($namespace as $q=>$w) {


						if($w['displayName']=="SUBSCRIPTION")
							
											{
									
						$newadd=$rpc->keva_put($w['namespaceId'],$_REQ["title"],$_REQ["asset"]);
														
						$addend="Success";

														}

													}

				

				}
		
		}





//list keva namespace



if(!isset($_REQ["asset"]) & !isset($_REQ["txid"]))

	{
	

		echo "<div id=\"door\"  class=\"crt\"><form action=\"\" method=\"post\" ><div id=\"tech\"  class=\"crt\"><ul><li style=\"font-size: 30px;animation: textShadow 1.00s infinite;letter-spacing:4px;width:1%;margin-top:20px;padding-top:5px;height:40px;border: 1px solid #59fbea;background-color:#0b0c0d;\"><a href=index.php><b>GALAXY</b></a></li>";	

		echo "<li  style=\"border:0px;width:50%;text-align:left;background-color:#0b0c0d;\"><input type=\"text\" name=\"asset\" maxlength=\"34\" placeholder=\"NAME ADDRESS, BLOCK NUMBER...\">";

		echo "<input type=\"hidden\" name=\"one\" value=\"rvn\" />";
		echo "<input type=\"submit\" value=\"KAW\"></li></ul></div></form></div>";
	


		$age= $rpc->keva_list_namespaces();

		
			
			$error = $rpc->error;

			if($error != "") 
		
				{
	
					echo "<p>&nbsp;&nbsp;Error ADDRESS</p>";
					exit;
				}



			echo "<div id=\"universe\" class=\"crt\"><div id=\"nav\"><ul>";


			foreach($age as $x_value=>$x)

			{

			extract($x);







			$x_value="<h4>".$displayName."</h4>";


			echo "<a href=?asset=".$namespaceId."><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\">".$x_value."<hr style=\"background-color:#59fbea;height:1px;border:none;\"><p style=\"font-size:18px\">".$namespaceId."</p></a></li>";

			}

		echo "</ul></div></div>";



		}


//list namespace finish

//list namespace address

if(isset($_REQ["txid"])) {

		$agetx= $rpc->gettransaction($_REQ["txid"]);

}



if(isset($_REQ["asset"]) or isset($_REQ["txid"])) 
	
	{



		echo "<div id=\"door\"  class=\"crt\"><form action=\"keva.php\" method=\"post\" ><div id=\"tech\"  class=\"crt\"><ul><li style=\"font-size: 30px;animation: textShadow 1.00s infinite;letter-spacing:4px;width:1%;margin-top:20px;padding-top:5px;height:40px;border: 1px solid #59fbea;background-color:#0b0c0d;\"><a href=keva.php><b>GALAXY</b></a></li>";	

		echo "<li  style=\"border:0px;width:50%;text-align:left;background-color:#0b0c0d;\"><input type=\"text\" name=\"title\" maxlength=\"34\" placeholder=\"KEY WORDS\">";

		echo "<input type=\"hidden\" name=\"asset\" value=".$_REQ["asset"]." />";
		echo "<input type=\"submit\" value=\"KAW\"></div></form></div>";
	


		//rpc

if(isset($_REQ["asset"])){$asset=$_REQ["asset"];}

if(isset($_REQ["txid"])){$asset=$agetx['details'][0]['keva'];$asset=str_replace("update:","",$asset);$asset=str_replace("new:","",$asset);$asset=trim($asset);}

	

		$asset=trim($asset);


	 if(!$_REQ["skey"]){$info= $rpc->keva_filter($asset);}
	 
	 else {$info= $rpc->keva_filter($asset,$_REQ["skey"]);}
		

		
			
		
		$error = $rpc->error;

			if($error != "") 
		
				{
	
					echo "<p>&nbsp;&nbsp;Error ADDRESS</p>";
					exit;
				}



		echo "<div id=\"universe\" class=\"crt\"><div id=\"nav\"><ul>";

		$arr=array();
		$totalass=array();

		foreach($info as $x_value=>$x)

			{
			
			extract($x);

			

			$arr["heightx"]=$height;
			$arr["key"]=$key;
			$arr["adds"]=$address;
			$arr["value"]=$value;
			$arr["txx"]=$txid;
			
			array_push($totalass,$arr);

			If($key=="ID"){$title=$value;}
			
			
		





			}


			arsort($totalass);

			$listasset=$totalass;



			if(isset($_REQ["key"])) {

			$kkey=$_REQ["key"];


			//value







					foreach ($listasset as $k=>$v) 

							{
							
								extract($v);
		
								if($key==$kkey){

								$fkey=$key;

								$heightm=$heightx;

								$x_value="<h4>".$key."</h4>";

								

								echo "<li style=\"background-color: rgb(0, 79, 74);display:block;height:auto;width:900px;\"><h4>".$key."</h4></li>";

									if(stristr($value,$asset) == false)
										
									{

										$valuex=str_replace("\n","<br>",$value);

	

										if(strlen($value)==strlen($asset))
							
											{

										echo "<script>window.location.href=decodeURIComponent('keva.php?asset=".$value."&showall=11')</script>";

											}
											else

											{
						
											  if(stristr($valuex,"decodeURIComponent") == true or stristr($valuex,"src") == true)
											{
												
												echo "<li style=\"background-color: rgb(0, 79, 74);display:block;height:auto;width:900px;\"><p align=left>".$valuex."</p></li>";}	  
											

													else
  {
										echo "<li style=\"background-color: rgb(0, 79, 74);display:block;height:auto;width:900px;\"><p align=left>".turnUrlIntoHyperlink($valuex)."</p></li>";}
												


											}
											
											}

								else

									{

										$arr1=explode("\n",$value);


										foreach ($arr1 as $m=>$n) {

											$n=trim(str_replace($asset,"",$n));


											foreach ($listasset as $k=>$v) 

													{
			
											extract($v);	

										
		
										if($key==$n){


										$valuex=str_replace("\n","<br>",$value);


										echo "<li style=\"background-color: rgb(0, 79, 74);display:block;height:auto;width:900px;\"><p align=left>".turnUrlIntoHyperlink($valuex)."</p></li>";
					}

				}
			
	
			}

			}


		$vadd= $rpc->validateaddress($adds);
		$fkey=str_replace(" ","%20",$fkey);

		extract($vadd);

		$tadd=$rpc->keva_list_namespaces();

		foreach ($tadd as $t)

					{

					if($t['namespaceId']==$asset){$title=$t['displayName'];}
									
							
					}

			$sname=$_REQ["sname"];

			if(!$_REQ["sname"]){$sname=strtoupper($title);}



		if($ismine=="1" & $keva_add=="on"){echo "</ul><ul><p><a href=?mode=1&asset=".$asset."&title=".$fkey."&nameid=".$title."><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>EDIT</a> [ <a href=subscription.php?block=".$heightm.">".$heightm."</a> ]</h4><hr style=\"background-color:#59fbea;height:1px;border:none;\"></a><font size=1>".$txx."</font></li>";
		
			echo "<a href=?asset=".$asset."&key=".$fkey."&title=".$title."&sname=".$sname."&mode=3><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>SUBSCRIBE</h4></a><hr style=\"background-color:#59fbea;height:1px;border:none;\"><font size=3>".$title."</font> ".$addend."</li>";
			}
			else

			{
				
			echo "</ul><ul><p><a href=subscription.php?txid=".$txx."><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>TXID</a> [ <a href=subscription.php?block=".$heightm.">".$heightm."</a> ]</h4><hr style=\"background-color:#59fbea;height:1px;border:none;\"><font size=1>".$txx."</font></li>";
			
			}

		
//linkipfs	

			$linkipfs = json_decode($returnContent, true);


			echo "<a href=?asset=".$asset."&key=".$fkey."&mode=2><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>LINK IPFS</h4></a><hr style=\"background-color:#59fbea;height:1px;border:none;\"><a href=".$linkipfs['data']['hash_urls'][1]." target=_blank><font size=3>".$linkipfs['data']['hash_urls'][0]."</font></a></li>";

//broadcast

			echo "<a href=channel.php?txid=".$txx."&ipfs=".$linkipfs['data']['hash_urls'][0]."><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>BROADCAST</h4></a><hr style=\"background-color:#59fbea;height:1px;border:none;\"></a></li>";



				}
			}





							}
//article over
	else
//menu
							{


			//menu
			$namespace= $rpc->keva_list_namespaces();

			foreach ($namespace as $q=>$w) {

		

						if($w['namespaceId']==$asset){$title=$w['displayName'];}

			}




		echo "<li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><a href=\"https://explorer.kevacoin.org/ns/html/".$asset."\" target=_blank><h4>".$title."</h4></a><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p style=\"font-size:18px\">".$asset."</p></li>";


		if(strlen($_REQ["showall"])>1){echo "<a href=?asset=".$asset."&showall=1><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>SHOW LIST</h4><hr style=\"background-color:#59fbea;height:1px;border:none;\">-</a></li>";}else {echo "<a href=?asset=".$asset."&showall=11><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>SHOW ALL CONTENTS</h4><hr style=\"background-color:#59fbea;height:1px;border:none;\">-</a></li>";



		$vadd= $rpc->validateaddress($address);




extract($vadd);


$linkipfs = json_decode($returnContent, true);


if($ismine=="1"  & $keva_add=="on"){echo "<a href=?asset=".$asset."&mode=1&nameid=".$title."><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>ADD NEW</h4><hr style=\"background-color:#59fbea;height:1px;border:none;\">-</a></li>";

echo "<a href=?asset=".$asset."&title=".$title."&sname=".$sname."&mode=3><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>SUBSCRIBE</h4></a><hr style=\"background-color:#59fbea;height:1px;border:none;\"><font size=2>".$title."</font> ".$addend."</li>";}




}


	$sname=$_REQ["sname"];
			if(!$_REQ["sname"]){$sname=strtoupper($title);}




echo "<a href=?asset=".$asset."&mode=2><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>LINK IPFS</h4></a><hr style=\"background-color:#59fbea;height:1px;border:none;\"><a href=".$linkipfs['data']['hash_urls'][1]." target=_blank><font size=3>".$linkipfs['data']['hash_urls'][0]."</font></a></li></ul><div id=\"nav\"><ul>";



foreach ($listasset as $k=>$v) 

			{
			
			extract($v);

		
		
			$x_value="<h4>".$key."</h4>";

$key=trim($key);

if(strlen($_REQ["showall"])<2)
	
			{

			if(stristr($value,"decodeURIComponent") == true){$valuex="<font size=2>".$txx." <a href=?mode=1&asset=".$asset."&title=".$key.">[edit]</a></font>";}

			if(strlen($value)==34){$valuex="<font size=2>".$txx." [ ".$heightm." ] <a href=?mode=1&asset=".$asset."&title=".$key.">[edit]</a></font>";}



			if(strlen($value)>18 & stristr($value,"decodeURIComponent")== false & strlen($value)<>34){$valuex=mb_substr($value,0,18,'utf8')."....";}

		
													

			$key=str_replace(" ","%20",$key);

			
			if(stristr($value,$_REQ["title"])==true or stristr(key,$_REQ["title"])==true){
			echo "<a href=?asset=".$asset."&title=".$key."&key=".$key."&sname=".$_REQ["sname"]."><li style=\"background-color: rgb(0, 79, 74);height:130px;width:600px;display:block;\">".$x_value."<hr style=\"background-color:#59fbea;height:1px;border:none;\"></a><p>".$valuex."</p></li>";
			
			}


			if(!isset($_REQ["title"])){

			echo "<a href=?asset=".$asset."&title=".$key."&key=".$key."&sname=".$_REQ["sname"]."><li style=\"background-color: rgb(0, 79, 74);height:130px;width:600px;display:block;\">".$x_value."<hr style=\"background-color:#59fbea;height:1px;border:none;\"></a><p>".$valuex."</p></li>";
							}

			}

			else

				{

			if(stristr($value,"decodeURIComponent") == true){$value=$txx;}


			

			echo "<li style=\"background-color: rgb(0, 79,74);display:block;height:auto;width:900px;\"><a href=?asset=".$asset."&title=".$key."&key=".$key."&sname=".$_REQ["sname"]."><h4>".$key."</h4></a></li>";

			$valuex=str_replace("\n","<br>",$value);


			echo "<li style=\"background-color: rgb(0, 79, 74);display:block;height:auto;width:900px;\"><p align=left>".turnUrlIntoHyperlink($valuex)."</p></li>";

				

			}

			}


		echo "</ul></div></div>";


	}
			

	



}	
	











?>
</ul></div>
</div>





</body>
</html>