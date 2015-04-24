<HTML>

<HEAD>

<TITLE>Javascript Calculator</TITLE>

<SCRIPT language="javascript" type="text/javascript">

function multiply()

{

a=Number(document.calculator.number1.value);

b=Number(document.calculator.number2.value);

c=a*b;

document.calculator.total.value=c;

}

</SCRIPT>

<SCRIPT language="javascript" type="text/javascript">

function addition()

{

a=Number(document.calculator.number1.value);

b=Number(document.calculator.number2.value);

c=a+b;

document.calculator.total.value=c;

}

</SCRIPT>

<SCRIPT language="javascript" type="text/javascript">

function subtraction()

{

a=Number(document.calculator.number1.value);

b=Number(document.calculator.number2.value);

c=a-b;

document.calculator.total.value=c;

}

</SCRIPT>

<SCRIPT language="javascript" type="text/javascript">

function division()

{

a=Number(document.calculator.number1.value);

b=Number(document.calculator.number2.value);

c=a/b;

document.calculator.total.value=c;

}

</SCRIPT>

</HEAD>

<BODY>

<FORM name="calculator">

Number 1: <INPUT type="text" name="number1"> <br>

Number 2: <INPUT type="text" name="number2"> <br>

Get Result: <INPUT type="text" name="total"> <br>

<INPUT type="button" value="Add" onclick="javascript:addition();">

<INPUT type="button" value="Subtract" onclick="javascript:subtraction();">

<INPUT type="button" value="Multiply" onclick="javascript:multiply();">

<INPUT type="button" value="Divide" onclick="javascript:division();">

</FORM>

</BODY>

</HTML>
