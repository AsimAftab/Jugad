function clearfield()
{
	document.getElementById('inputArea1').value='';
	document.getElementById('inputArea2').value='';
	document.getElementById('answer').value='';
}

function calculate(id)
{
	var val1=parseFloat(document.getElementById('inputArea1').value);
	var val2=parseFloat(document.getElementById('inputArea2').value);

	var result=0;

	if(isNaN(val1) || isNaN(val2))
	{
		document.getElementById('answer').value="Error";
		document.getElementById('answer').value="Missing";
		document.getElementById('answer').style.color="red";
	}else{
		if(id=='+')
		{
			result=val1+val2;
		}
		else if(id=='-')
		{
			result=val1-val2;
		}
		else if(id=='*')
		{
			result=val1*val2;
		}
		else if(id=='/')
		{
			if(val2!=0)
			{
				result=val1/val2;
			}else{
				document.getElementById('answer').value="Cannot Divide by Zero";
				document.getElementById('answer').style.color="red";
				return;
			}
		}

	}
			document.getElementById('answer').value=result;
			document.getElementById('answer').style.color = 'black';


}