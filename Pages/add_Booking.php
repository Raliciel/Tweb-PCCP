<?php
	$subject=$_POST['subject'];
	$class=$_POST['class'];
	$room=$_POST['room'];
	$user=$_POST['user2'];
	$room2=$_POST['radio-stacked'];
	$day=$_POST['day'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$password=$_POST['password'];
	$check="0";
	$link=mysqli_connect("127.0.0.1","root");
	mysqli_set_charset($link,'utf8');
	$sql="Use projectroom";
	$result=mysqli_query($link,$sql);
	if($user!=NULL)
	{
		$name=$user;
	}
	else if($class!=NULL)
	{
		if($room!=NULL)
		{
			if($class=="1")
			{
				if($room=="1")
					$name="1/1";
				else if($room=="2")
					$name="1/2";
				else if($room=="3")
					$name="1/3";
				else if($room=="4")
					$name="1/4";
			}
			else if($class=="2")
			{
				if($room=="1")
					$name="2/1";
				else if($room=="2")
					$name="2/2";
				else if($room=="3")
					$name="2/3";
				else if($room=="4")
					$name="2/4";
			}
			else if($class=="3")
			{
				if($room=="1")
					$name="3/1";
				else if($room=="2")
					$name="3/2";
				else if($room=="3")
					$name="3/3";
				else if($room=="4")
					$name="3/4";
			}
			else if($class=="4")
			{
				if($room=="1")
					$name="4/1";
				else if($room=="2")
					$name="4/2";
				else if($room=="3")
					$name="4/3";
				else if($room=="4")
					$name="4/4";
				else if($room=="5")
					$name="4/5";
				else if($room=="6")
					$name="4/6";
			}
			else if($class=="5")
			{
				if($room=="1")
					$name="5/1";
				else if($room=="2")
					$name="5/2";
				else if($room=="3")
					$name="5/3";
				else if($room=="4")
					$name="5/4";
				else if($room=="5")
					$name="5/5";
				else if($room=="6")
					$name="5/6";
			}
			else if($class=="6")
			{
				if($room=="1")
					$name="6/1";
				else if($room=="2")
					$name="6/2";
				else if($room=="3")
					$name="6/3";
				else if($room=="4")
					$name="6/4";
				else if($room=="5")
					$name="6/5";
				else if($room=="6")
					$name="6/6";
			}
		}
	}
	else
		$check="1";
	$count="0";
	if($room2=="2")
	{
		$sql="Select * From meetingroom Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into meetingroom Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
	}
	else if($room2=="3")
		{
		$sql="Select * From bio_laboratory Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into bio_laboratory Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
	}
	else if($room2=="4")
				{
		$sql="Select * From chemistry_laboratory Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into chemistry_laboratory_laboratory Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
	}
	else if($room2=="5")
				{
		$sql="Select * From physics_laboratory Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into physics_laboratory Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
	}
	else if($room2=="6")
				{
		$sql="Select * From auditorium Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into auditorium Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
	}
	else if($room2=="1")
	{
		if($password=="3101")
		{
		$sql="Select * From p3101 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3101 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3102")
			{
		$sql="Select * From p3102 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3102 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3103")
			{
		$sql="Select * From p3103 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3103 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3104")
			{
		$sql="Select * From p3104 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3104 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3105")
			{
		$sql="Select * From p3105 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3105 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3201")
			{
		$sql="Select * From p3201 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3201 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3202")
			{
		$sql="Select * From p3202 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3202 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3203")
			{
		$sql="Select * From p3203 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3203 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3204")
			{
		$sql="Select * From p3204 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3204 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3205")
			{
		$sql="Select * From p3205 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3205 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3206")
			{
		$sql="Select * From p3206 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3206 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3207")
			{
		$sql="Select * From p3207 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3207 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3208")
			{
		$sql="Select * From p3208 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3208 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3301")
			{
		$sql="Select * From p3301 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3301 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3302")
			{
		$sql="Select * From p3302 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3302 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3303")
			{
		$sql="Select * From p3303 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3303 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3304")
			{
		$sql="Select * From p3304 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3304 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3305")
			{
		$sql="Select * From p3305 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3305 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3306")
			{
		$sql="Select * From p3306 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3306 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3307")
			{
		$sql="Select * From p3307 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3307 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3308")
			{
		$sql="Select * From p3308 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3308 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3401")
			{
		$sql="Select * From p3401 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3401 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3402")
			{
		$sql="Select * From p3402 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3402 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3403")
			{
		$sql="Select * From p3403 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3403 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3404")
			{
		$sql="Select * From p3404 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3404 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3405")
			{
		$sql="Select * From p3405 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3405 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3406")
			{
		$sql="Select * From p3406 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3406 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3407")
			{
		$sql="Select * From p3407 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3407 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3408")
			{
		$sql="Select * From p3408 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3408 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else if($password=="3409")
			{
		$sql="Select * From p3409 Where day='$day';";
		$result=mysqli_query($link,$sql);
		while($dbarr=mysqli_fetch_array($result))
		{
		if($dbarr['timein']<$start)
		{
			if($dbarr['timeout']<$start)
				$count="1";
		}
		if($dbarr['timein']<$end)
		{
			if($dbarr['timeout']<$end)
				$count="1";
		}
		}
		if($count=="0")
			$sql="Insert into p3409 Values('$day','$subject','$name','$start','$end');";
		else
			$check="1";
		}
		else
			$check="1";
	}
	if($check=="0")
	{
		$result=mysqli_query($link,$sql);
		echo "เพิ่มเวลาในการจัดการเวลาสำเร็จ";
		mysqli_close($link);
	}
	else
		echo "ไม่สามารถเพิ่มลงการจัดการเวลาได้";
	
?>