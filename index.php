<?php $value_array = array(
				array(
					'Name' => 'Trixie',
					'Color' => 'Green',
					'Element' => 'Earth',
					'Likes' => 'Flowers'
					),
				array(
					'Name' => 'Tinkerbell',
					'Element' => 'Air',
					'Likes' => 'Singning',
					'Color' => 'Blue'
					),
				array(
					'Element' => 'Water',
					'Likes' => 'Dancing',
					'Name' => 'Blum',
					'Color' => 'Pink'
					),
		);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assignment</title>
<style type="text/css">
    

<style type="text/css">
    .Table
    {
        display: table;
    }
    .Title
    {
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
    }
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row
    {
        display: table-row;
    }
    .Cell
    {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }
</style>
</head>

<body>
<div class="Table">
    <div class="Title">
        <p>The output of array</p>
    </div>
    <div class="Heading">
        <div class="Cell">
            <p>Name</p>
        </div>
        <div class="Cell">
            <p>Color</p>
        </div>
        <div class="Cell">
            <p>Element</p>
        </div>
         <div class="Cell">
            <p>Likes</p>
        </div>
    </div>
    <?php 
	 
		// llop over main array
		for($i=0;$i<count($value_array);$i++){
		$c=0;
		// Get the array values
		foreach($value_array[$i] as $key=>$value){
			if($key == 'Name')
			$name = $value;
			if($key == 'Element')
			$element = $value;
			if($key == 'Likes')
			$like = $value;
			if($key == 'Color')
			$color = $value;
		}
	?>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $name;?></p>
        </div>
        <div class="Cell">
            <p><?php echo $color;?></p>
        </div>
        <div class="Cell">
            <p><?php echo $element;?></p>
        </div>
        <div class="Cell">
            <p><?php echo $like;?></p>
        </div>
    </div>
    <?php 
		}?>
    
</div>
</body>
</html>