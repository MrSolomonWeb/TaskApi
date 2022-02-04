<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1251">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:36.0pt;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:36.0pt;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
span.MsoSubtleReference
	{font-variant:small-caps;
	color:#5A5A5A;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>

</head>

<body lang=RU>

<div class=WordSection1>

<p class=MsoNormal>Тестовое задание:</p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Создать
2 модели <span lang=EN-US>User</span> и <span lang=EN-US>Gift</span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Создать
механизм взаимодействия с БД на:</p>

<p class=MsoListParagraphCxSpMiddle>- получение списка пользователей</p>

<p class=MsoListParagraphCxSpMiddle>- получение конкретного пользователя</p>

<p class=MsoListParagraphCxSpMiddle>- добавление пользователя</p>

<p class=MsoListParagraphCxSpMiddle>- добавление подарка (подарок может быть
присвоен как пользователю, так и другому подарку т.е. стать его дочерним
вложением)</p>

<p class=MsoListParagraphCxSpMiddle>- удаление подарка</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Создать
5 <span lang=EN-US>API</span> запросов для механизмов взаимодействия</p>

<p class=MsoListParagraphCxSpLast>&nbsp;</p>

<p class=MsoNormal>Пример результата запроса для одного пользователя:</p>

<p class=MsoNormal style='text-indent:36.0pt'><span lang=EN-US>Requset: [GET]
/api/user/1</span></p>

<p class=MsoListParagraphCxSpFirst><span lang=EN-US>Response:</span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>{</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'> 
&quot;success&quot;: true,</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'> 
&quot;data&quot;: {</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>   
&quot;id&quot;: 1,</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>   
&quot;name&quot;: &quot;user&quot;,</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>   
&quot;email&quot;: &quot;user@mail.com&quot;,</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>   
&quot;gifts&quot;: [</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>     
{</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>       
&quot;id&quot;: 1,</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>       
&quot;name&quot;: &quot;gift Box&quot;,</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>       
&quot;gifts&quot;: [</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>         
{</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>           
&quot;id&quot;: 2,</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>           
&quot;name&quot;: &quot;iPhone&quot;</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>         
},</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>         
{</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>           
&quot;id&quot;: 3,</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>           
&quot;name&quot;: &quot;Apple Watch&quot;</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>         
}</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>       
]</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>     
},</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>     
{</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>       
&quot;id&quot;: 4,</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>       
&quot;name&quot;: &quot;Google glasses 2&quot;</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>     
}</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>   
]</span></p>

<p class=MsoListParagraphCxSpMiddle style='background:#D0CECE'><span
lang=EN-US style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'> 
}</span></p>

<p class=MsoListParagraphCxSpLast style='background:#D0CECE'><span lang=EN-US
style='font-size:9.0pt;line-height:107%;font-family:"Courier New"'>}</span></p>

</div>

</body>

</html>
