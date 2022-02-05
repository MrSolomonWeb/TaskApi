<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1251">
<meta name=Generator content="Microsoft Word 15 (filtered)">

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
