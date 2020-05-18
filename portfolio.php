<?php

$image=array(
				/*Col 1*/
				["href"=>"https://yokoshop.com","name"=>"portfolio_img_1.jpg"],
				["href"=>"#","name"=>"portfolio_img_2.jpg"],
				["href"=>"#","name"=>"portfolio_img_3.jpg"],
				/*Col 2*/
				["href"=>"#","name"=>"portfolio_img_4.jpg"],
				["href"=>"#","name"=>"portfolio_img_5.jpg"],
				["href"=>"#","name"=>"portfolio_img_6.jpg"],
				/*Col 3*/
				["href"=>"#","name"=>"portfolio_img_7.jpg"],
				["href"=>"#","name"=>"portfolio_img_8.jpg"],
				["href"=>"#","name"=>"portfolio_img_9.jpg"],
				/*Col 4*/
				["href"=>"#","name"=>"portfolio_img_10.jpg"],
				["href"=>"#","name"=>"portfolio_img_11.jpg"],
				["href"=>"#","name"=>"portfolio_img_12.jpg"],
				/*Col 5*/
				["href"=>"#","name"=>"portfolio_img_13.jpg"],
				["href"=>"#","name"=>"portfolio_img_14.jpg"],
				["href"=>"#","name"=>"portfolio_img_15.jpg"],
			);

function portfolio ($tableau){
	$nombreImage = count($tableau);
	$nbImageCol= $nombreImage/5;
	
	for($i=0;$i<5;$i++){ ?>
	   <div class="bloc bloc-<?php echo $i+1?>">
		   <?php if($i==0){for($e=0;$e<$nbImageCol;$e++){ ?>
		   		<a href ="<?php echo $tableau[$e]["href"];?>"><img src="images/<?php echo $tableau[$e]["name"];?>" alt="Notre client <?php echo $e+1;?>"></a>
		   <?php } }//if?>
		   
		   <?php if($i==1){for($e=$nbImageCol;$e<$nbImageCol*2;$e++){ ?>
		   		<a href ="<?php echo $tableau[$e]["href"];?>"><img src="images/<?php echo $tableau[$e]["name"];?>" alt="Notre client <?php echo $e+1;?>"></a>
		   <?php } }//if?>
		   
		   <?php if($i==2){for($e=$nbImageCol*2;$e<$nbImageCol*3;$e++){ ?>
		   		<a href ="<?php echo $tableau[$e]["href"];?>"><img src="images/<?php echo $tableau[$e]["name"];?>" alt="Notre client <?php echo $e+1;?>"></a>
		   <?php } }//if?>
		   
		   <?php if($i==3){for($e=$nbImageCol*3;$e<$nbImageCol*4;$e++){ ?>
		   		<a href ="<?php echo $tableau[$e]["href"];?>"><img src="images/<?php echo $tableau[$e]["name"];?>" alt="Notre client <?php echo $e+1;?>"></a>
		   <?php } }//if?>
		   
		   <?php if($i==4){for($e=$nbImageCol*4;$e<$nbImageCol*5;$e++){ ?>
		   		<a href ="<?php echo $tableau[$e]["href"];?>"><img src="images/<?php echo $tableau[$e]["name"];?>" alt="Notre client <?php echo $e+1;?>"></a>
		   <?php } }//if?>
	    </div>
	<?php }
}
