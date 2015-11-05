// JavaScript Document

/*function thongbao()
{
	alert('hello');
}*/


function kiemTra()
{
	var s = document.frm1.txtName.value;
	//alert(s);
	if (s.length <= 0)
	{
		alert('Vui lòng username!');		
		return false;
	}
	
	var a = document.frm1.txtPass.value;	
	if (a.length <= 0)
	{
		alert('Vui lòng password!');		
		return false;
	}
	
	
}

/*function startTime()
	{
		today = new Date();
		h = today.getHours();
		m = today.getMinutes();
		s = today.getSeconds();
		
		m = checkTime(m);
		s = checkTime(s);
		
		function checkTime(i)
		{
			if(i<10)
			{
				i = "0" + i;
			}
			return i;
		}
		
		document.getElementById("time").innerHTML = h + "<b> : </b>" + m + " <b> : </b>" + s;
		
		t = setTimeout('startTime()',500);
	}
	function inTable_lich()
	{
		
		monthnames = new Array("Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7",
								"Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12");
								
		today = new Date();
		
		thisday = today.getDay();
		thisdate = today.getDate();
		thismonth = today.getMonth();
		thisyear = today.getFullYear();
		
		alert(thismonth + 1);
		switch(thismonth + 1)
		{
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 12: //alert('31');
				songay = 31; break;
			
			case 4:
			case 6:
			case 9:
			case 11: //alert('30');
				songay = 30; break;
				
			case 2: if((thisyear %4==0 &&thisyear%100!=0)||(thisyear %400==0 &&thisyear%100==0))
					{	//alert('29');
						songay = 29
					}
					else
					{
						//alert('28');
						songay = 28;
					}
					break;
		}
		
		monthdays = new Array(12); 
        monthdays[0]=31; 
        monthdays[1]=28; 
        monthdays[2]=31; 
        monthdays[3]=30; 
        monthdays[4]=31; 
        monthdays[5]=30; 
        monthdays[6]=31; 
        monthdays[7]=31; 
        monthdays[8]=30; 
        monthdays[9]=31; 
        monthdays[10]=30; 
        monthdays[11]=31; 
		
		weekdays = new Array(7)
		weekdays[0] = 'Chủ Nhật';
		weekdays[1] = 'Thứ 2';
		weekdays[2] = 'Thứ 3';
		weekdays[3] = 'Thứ 4';
		weekdays[4] = 'Thứ 5';
		weekdays[5] = 'Thứ 6';
		weekdays[6] = 'Thứ 7';
		
		if((thisyear %4==0 &&thisyear%100!=0)||(thisyear %400==0 &&thisyear%100==0))
		{	//alert('29');
			monthdays[1]++;
		}
		
		firstdaymonth = thisdate;
		while(firstdaymonth > 7)
			firstdaymonth -= 7;
		firstdaymonth = thisday - firstdaymonth + 1;
		
		if(firstdaymonth < 0)
			firstdaymonth+=7;
			
		tb = '<table border="2" cellpadding="2" cellspacing="0" bgcolor="#FFFFCC">';

		tb += '<tr><td colspan ="7" bgcolor="#ffff" style="color:white"><center><strong>'
		  + weekdays[thisday]+ ", "	+ monthnames[thismonth] + ", " + thisyear
			 + '</center></strong></td></tr>';
		
		tb += '<tr bgcolor="#FFFFFF" style="color:blue;font-weight:800">'
			+ '<td><center>CN</center></td>'
			+ '<td><center>T2</center></td>'
			+ '<td><center>T3</center></td>'
			+ '<td><center>T4</center></td>'
			+ '<td><center>T5</center></td>'
			+ '<td><center>T6</center></td>'
			+ '<td><center>T7</center></td>';
		tb += '</tr>';
			
		tb += '<tr>';
		for(sp = 0; sp<firstdaymonth; sp++)
		{
			tb += '<td></td>';
		}
		
		
		dem = firstdaymonth;
		for( i= 1;i<= monthdays[thismonth];i++)
		{
			if( i != thisdate )
			{
				tb += '<td><center>' + i + '</center></td>';
			}
			else
			{
				tb += '<td bgcolor="pink"><center><strong style="color:red" >' +i+ '</strong></center></td>';
			}
			dem++;
			if(dem%7==0)
			{
				tb += '</tr>';
			}
		}
		
		for(dem;dem<35;dem++)
		{
			tb += '<td></td>';
		}
		tb += '</tr>';
		
		tb += '<tr><td id="time" colspan=7 align="center" style="color:white" bgcolor="#0000FF"></td></tr>';
		
		tb += '</table>';
		
		document.getElementById("table_lich").innerHTML = tb;
			
	}
*/