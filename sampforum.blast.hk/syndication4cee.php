<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[SA-MP Forums Archive - Русский/Russian]]></title>
	<subtitle type="html"><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></subtitle>
	<link rel="self" href="https://sampforum.blast.hk/syndication.php"/>
	<id>https://sampforum.blast.hk/</id>
	<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/"/>
	<updated>2022-07-28T20:59:30Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=264255">Salik</a>]]></name>
		</author>
		<published>2020-07-27T21:27:00Z</published>
		<updated>2020-07-27T21:27:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677745" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677745</id>
		<title xml:space="preserve"><![CDATA[Regex пример]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677745"><![CDATA[Привет всем, в данный момент ищу какую либо информацию или же примерный код с регуляркой, имеется вид текста:<br />
"CreatePlayerObject(1, posx, posz... / CreatePlayerObject(135, posx, posz... и тд"<br />
<br />
Нужно регуляркой поискать все функции CreatePlayerObject и поменять первый параметр в функции, она у меня идет на прямую в ID, нужно поменять текст на playerid "(135, ... на (playerid, ...", спасибо заранее <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=153390">JM_Millers</a>]]></name>
		</author>
		<published>2020-07-27T18:00:00Z</published>
		<updated>2020-07-27T18:00:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677742" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677742</id>
		<title xml:space="preserve"><![CDATA[Помощь с MySQL plugin R41-4]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677742"><![CDATA[Доброго времени суток, изломал всю голову не могу догнать в чем соль.<br />
<br />
Не могу сохранить значение id в таблицу, конечная запись - 0.<br />
<br />
строка имеет следующие параметры:<br />
<div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table border="0" cellpadding="6" cellspacing="0" width="100%">
<tr>
<td class="alt2" style="border: 1px solid #C2C2C2; font-size: 8pt;">
			<br />
				имя: id<br />
тип: int<br />
длина: 4<br />
по умолчанию: нет<br />
a-i не стоит галочка<br />
			<br />
		</td>
</tr>
</table>
</div>Вот строки кода:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:183px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> <span style="color: #000000;">ORM</span><span style="color: #000000;">:</span>ormid <span style="color: #000000;">=</span> wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>ORMID<span style="color: #000000;">]</span> <span style="color: #000000;">=</span> orm_create<span style="color: #000000;">(</span>DB_TABLE, gConnectionHandle<span style="color: #000000;">)</span>;<br/>orm_addvar_int<span style="color: #000000;">(</span>ormid, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wID<span style="color: #000000;">]</span>, <span style="color: #000066;">"id"</span><span style="color: #000000;">)</span>;<br/>orm_addvar_float<span style="color: #000000;">(</span>ormid, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wPosX<span style="color: #000000;">]</span>, <span style="color: #000066;">"posX"</span><span style="color: #000000;">)</span>;<br/>orm_addvar_float<span style="color: #000000;">(</span>ormid, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wPosY<span style="color: #000000;">]</span>, <span style="color: #000066;">"posY"</span><span style="color: #000000;">)</span>;<br/>orm_addvar_float<span style="color: #000000;">(</span>ormid, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wPosZ<span style="color: #000000;">]</span>, <span style="color: #000066;">"posZ"</span><span style="color: #000000;">)</span>;<br/>orm_addvar_int<span style="color: #000000;">(</span>ormid, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wCount<span style="color: #000000;">]</span>, <span style="color: #000066;">"count"</span><span style="color: #000000;">)</span>;<br/>orm_addvar_string<span style="color: #000000;">(</span>ormid, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wOwner<span style="color: #000000;">]</span>, MAX_PLAYER_NAME, <span style="color: #000066;">"owner"</span><span style="color: #000000;">)</span>;<br/>orm_setkey<span style="color: #000000;">(</span>ormid, <span style="color: #000066;">"id"</span><span style="color: #000000;">)</span>;<br/><span style="color: #222222;">printf</span><span style="color: #000000;">(</span><span style="color: #000066;">"MySQL data to insert:<span style="color: #000099; font-weight: bold;">\n</span>- id %d, count %d, owner %s, pos: %f, %f, %f"</span>,wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wID<span style="color: #000000;">]</span>, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wCount<span style="color: #000000;">]</span>, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wOwner<span style="color: #000000;">]</span>, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wPosX<span style="color: #000000;">]</span>, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wPosY<span style="color: #000000;">]</span>, wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>wPosZ<span style="color: #000000;">]</span><span style="color: #000000;">)</span>;<br/>orm_insert<span style="color: #000000;">(</span>wInfo<span style="color: #000000;">[</span>a<span style="color: #000000;">]</span><span style="color: #000000;">[</span>ORMID<span style="color: #000000;">]</span><span style="color: #000000;">)</span>;</div></div></pre>
</div>
В дебаге следующее:<br />
<div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table border="0" cellpadding="6" cellspacing="0" width="100%">
<tr>
<td class="alt2" style="border: 1px solid #C2C2C2; font-size: 8pt;">
			<br />
				MySQL data to insert:<br />
- id 1, count 0, owner AlbertHofmann, pos: 2820.988037, -1181.162353, 21.233558<br />
			<br />
		</td>
</tr>
</table>
</div>В таблицу в итоге пишет как:<br />
<br />
<div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table border="0" cellpadding="6" cellspacing="0" width="100%">
<tr>
<td class="alt2" style="border: 1px solid #C2C2C2; font-size: 8pt;">
			<br />
				id 0<br />
posX 2820.99<br />
posY -1181.16<br />
posZ 21.234<br />
count 0<br />
owner AlbertHofmann<br />
			<br />
		</td>
</tr>
</table>
</div>Не могу понять где я оступился, выручайте ребят<br />
P.S: В коде больше обращений к бд нет]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=308180">Jasno</a>]]></name>
		</author>
		<published>2020-07-09T04:58:00Z</published>
		<updated>2020-07-09T04:58:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677294" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677294</id>
		<title xml:space="preserve"><![CDATA[Как найти адрес памяти?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677294"><![CDATA[Есть тут особые знатоки, кто может подсказать как найти определённый участок памяти который в gta_sa.exe отвечает к примеру за vorbis.dll<br />
Например как для d3d9x.dll "0x5E8606" Вот такого типа.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=325774">bybyby</a>]]></name>
		</author>
		<published>2020-05-13T11:30:00Z</published>
		<updated>2020-05-13T11:30:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=675468" />
		<id>https://sampforum.blast.hk/showthread.php?tid=675468</id>
		<title xml:space="preserve"><![CDATA[Проблемы с созданием машин]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=675468"><![CDATA[Здраствуйте у меня вмоде есть сток CreatVehicles в нём есть вот такой цикл<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">    </span><span style="color: #007700">for(new </span><span style="color: #0000BB">i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">i </span><span style="color: #007700">&#x26;t </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">); </span><span style="color: #0000BB">i</span><span style="color: #007700">++)
<br/>    {
<br/>        if((</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkX</span><span style="color: #007700">] == </span><span style="color: #0000BB">0.0 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkY</span><span style="color: #007700">] == </span><span style="color: #0000BB">0.0 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkZ</span><span style="color: #007700">] == </span><span style="color: #0000BB">0.0 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkAngle</span><span style="color: #007700">] == </span><span style="color: #0000BB">0.0</span><span style="color: #007700">) || </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vOwned</span><span style="color: #007700">] == </span><span style="color: #0000BB">0</span><span style="color: #007700">)
<br/>        {
<br/>                
<br/>                </span><span style="color: #0000BB">BuyableCar</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">] = </span><span style="color: #0000BB">CreateVehicle</span><span style="color: #007700">(</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vModel</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vPosX</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vPosY</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vPosZ</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vAngle</span><span style="color: #007700">], -</span><span style="color: #0000BB">1</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br/>                </span><span style="color: #FF8000">// printf("aa");
<br/>        </span><span style="color: #007700">}
<br/>        else </span><span style="color: #FF8000">//if(CarsInfo[i][vParkX] != 0.0 &amp;&amp; CarsInfo[i][vParkY] != 0.0 &amp;&amp; CarsInfo[i][vParkZ] != 0.0 &amp;&amp; CarsInfo[i][vParkAngle] != 0.0 &amp;&amp; CarsInfo[i][vOwned] == 1)
<br/>        </span><span style="color: #007700">{
<br/>                </span><span style="color: #0000BB">BuyableCar</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">] = </span><span style="color: #0000BB">CreateVehicle</span><span style="color: #007700">(</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vModel</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkX</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkY</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkZ</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkAngle</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vColorOne</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vColorTwo</span><span style="color: #007700">], -</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br/>        }
<br/>        
<br/>        if(</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vWorld</span><span style="color: #007700">] &#x26;t </span><span style="color: #0000BB">0</span><span style="color: #007700">)
<br/>        {
<br/>             </span><span style="color: #0000BB">LinkVehicleToInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">BuyableCar</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">], </span><span style="color: #0000BB">1</span><span style="color: #007700">); </span><span style="color: #FF8000">// Для гаража
<br/>            </span><span style="color: #0000BB">SetVehicleVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">BuyableCar</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vWorld</span><span style="color: #007700">]);
<br/>        }
<br/>        else
<br/>        {
<br/>            </span><span style="color: #0000BB">LinkVehicleToInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">BuyableCar</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">], </span><span style="color: #0000BB">0</span><span style="color: #007700">);
<br/>            </span><span style="color: #0000BB">SetVehicleVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">BuyableCar</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vWorld</span><span style="color: #007700">]);
<br/>        }
<br/>        if(</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vOwned</span><span style="color: #007700">] == </span><span style="color: #0000BB">0</span><span style="color: #007700">) </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vLock</span><span style="color: #007700">] = </span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">gCarLock</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vLock</span><span style="color: #007700">];
<br/>        </span><span style="color: #0000BB">AddVehicleComponent </span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vKolesocar</span><span style="color: #007700">]);
<br/>        </span><span style="color: #0000BB">AddVehicleComponent </span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vNitro</span><span style="color: #007700">]);
<br/>        </span><span style="color: #0000BB">AddVehicleComponent </span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vGidra</span><span style="color: #007700">]);
<br/>        </span><span style="color: #0000BB">ChangeVehiclePaintjob</span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vPokraska</span><span style="color: #007700">]);
<br/>        if (</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vSpoiler</span><span style="color: #007700">] != </span><span style="color: #0000BB">0</span><span style="color: #007700">) </span><span style="color: #0000BB">AddVehicleComponent </span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vSpoiler</span><span style="color: #007700">]);
<br/>        if (</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vBamper1</span><span style="color: #007700">] != </span><span style="color: #0000BB">0</span><span style="color: #007700">) </span><span style="color: #0000BB">AddVehicleComponent </span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vBamper1</span><span style="color: #007700">]);
<br/>        if (</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vBamper2</span><span style="color: #007700">] != </span><span style="color: #0000BB">0</span><span style="color: #007700">) </span><span style="color: #0000BB">AddVehicleComponent </span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vBamper2</span><span style="color: #007700">]);
<br/>        </span><span style="color: #0000BB">ChangeVehicleColor</span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vColorOne</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vColorTwo</span><span style="color: #007700">]);
<br/>        </span><span style="color: #0000BB">Fuell</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vFuel</span><span style="color: #007700">];
<br/>        new </span><span style="color: #0000BB">vnumber</span><span style="color: #007700">[</span><span style="color: #0000BB">15</span><span style="color: #007700">];
<br/>        </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">vnumber</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">vnumber</span><span style="color: #007700">), </span><span style="color: #DD0000">"%s"</span><span style="color: #007700">, </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vNumber</span><span style="color: #007700">]);
<br/>        </span><span style="color: #0000BB">SetVehicleNumberPlate</span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">vnumber</span><span style="color: #007700">);
<br/>    } 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>А само проблема вот здесь: <div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 114px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">        </span><span style="color: #007700">if((</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkX</span><span style="color: #007700">] == </span><span style="color: #0000BB">0.0 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkY</span><span style="color: #007700">] == </span><span style="color: #0000BB">0.0 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkZ</span><span style="color: #007700">] == </span><span style="color: #0000BB">0.0 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vParkAngle</span><span style="color: #007700">] == </span><span style="color: #0000BB">0.0</span><span style="color: #007700">) || </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vOwned</span><span style="color: #007700">] == </span><span style="color: #0000BB">0</span><span style="color: #007700">)
<br/>        {
<br/>                
<br/>                &#x26;t&#x26;t&#x26;t&#x26;t&#x26;t&#x26;t</span><span style="color: #0000BB">BuyableCar</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">] = </span><span style="color: #0000BB">CreateVehicle</span><span style="color: #007700">(</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vModel</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vPosX</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vPosY</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vPosZ</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vAngle</span><span style="color: #007700">], -</span><span style="color: #0000BB">1</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br/>                </span><span style="color: #FF8000">// printf("aa");
<br/>        </span><span style="color: #007700">} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>После этого цикла мод дальше не загружается а до него всё работает если убраю именно <div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">BuyableCar</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">] = </span><span style="color: #0000BB">CreateVehicle</span><span style="color: #007700">(</span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vModel</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vPosX</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vPosY</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vPosZ</span><span style="color: #007700">], </span><span style="color: #0000BB">CarsInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">vAngle</span><span style="color: #007700">], -</span><span style="color: #0000BB">1</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div> всё работает<br />
<br />
Помогите мне пж(]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=314113">NikitaFoxze</a>]]></name>
		</author>
		<published>2020-05-09T13:12:00Z</published>
		<updated>2020-05-09T13:12:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=675318" />
		<id>https://sampforum.blast.hk/showthread.php?tid=675318</id>
		<title xml:space="preserve"><![CDATA[3-х мерный итератор]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=675318"><![CDATA[Здравствуйте, у меня вопрос по итераторам. Не могу сделать трёх мерный итератор с библиотекой foreach.<br />
Помогите, сделал несколько тестов, но всё идёт в тупик.<br />
<br />
На форумах писали делать так:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 114px;
		text-align: left;
		overflow: auto">new Iterator:Iter3[5][8]&#x26;t10&#x26;t;
for (new i = 0; i != Iter_InternalSize(Iter3); ++i)
{
    Iter_Init(Iter3[i]);
}
Iter_Add(Iter3[3][6], 7);</pre>
</div>Во-первых сразу же ошибка в создании итератора (new):<br />
error 001: expected token: ";", but found "-identifier-"<br />
Меняю на "new Iterator:Iter3[5][8][10];" и всё работает.<br />
<br />
Теперь дальше идут ошибки в Iter_Add:<br />
 error 035: argument type mismatch (argument 1)<br />
 error 017: undefined symbol "@YSII_Cg"<br />
 error 017: undefined symbol "@YSII_Ag"<br />
 fatal error 107: too many error messages on one line<br />
<br />
И я не совсем понимаю за что отвечает Iter_Init. <br />
Sos <img alt="" border="0" class="inlineimg" src="images/smilies/confused.gif" title="Huh?"/>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=250037">Ayzek</a>]]></name>
		</author>
		<published>2020-04-21T16:00:00Z</published>
		<updated>2020-04-21T16:00:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=674545" />
		<id>https://sampforum.blast.hk/showthread.php?tid=674545</id>
		<title xml:space="preserve"><![CDATA[Нужна помощь в создании динамических зон]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=674545"><![CDATA[Всем привет.<br />
Хочу сделать динамическую зону имея только координаты игрока.<br />
Тоесть брать координаты игрока чезез функцию GetPlayerPos далее создавать квадрат на карте.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=264255">Salik</a>]]></name>
		</author>
		<published>2020-04-19T15:15:00Z</published>
		<updated>2020-04-19T15:15:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=674434" />
		<id>https://sampforum.blast.hk/showthread.php?tid=674434</id>
		<title xml:space="preserve"><![CDATA[Вопрос с компиляцией]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=674434"><![CDATA[Здравствуйте! Как решить проблему с компиляцией мода, в моде некоторые функции (stock) разбросаны, многое объявлено в самом низу мода (знаю это плохо), но суть в том что я вроде как нашёл как поставить совместимость и запустить мод в таком варианте, просто переписать всё уйдет уйму времени - поставил параметр -  "-Z+", даже добавил прагму в моде - #pragma compat 1, но ничего, опять же эрроры с сообщениями типа такого - <br />
<br />
C:\Users\User\Desktop\2 ïàðòèÿ\/include/mod_news.inc(4329) : error 017: undefined symbol "PM"<br />
C:\Users\User\Desktop\2 ïàðòèÿ\/include/mod_news.inc(4676) : error 017: undefined symbol "TogglePlayerControllableEx"<br />
C:\Users\User\Desktop\2 ïàðòèÿ\MOD.pwn(1256) : error 017: undefined symbol "TogglePlayerControllableEx"<br />
C:\Users\User\Desktop\2 ïàðòèÿ\MOD.pwn(125<img alt="" border="0" class="inlineimg" src="images/smilies/cool.gif" title="Cool"/> : error 017: undefined symbol "SendAdminLogMessage"<br />
<br />
<br />
--------------------------------------<br />
<br />
<br />
Примерно вот так у меня в моде некоторые функции используются до их объявления (прим.) -<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:135px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;">function PlayerConnect<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span> <span style="color: #000000;">{</span><br/>  checkBan<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span>;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222BB;">stock</span> checkBan<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span> <span style="color: #000000;">{</span><br/>  code...<br/><span style="color: #000000;">}</span></div></div></pre>
</div>
Знаю так кодить плохо, и компилятор выдаёт ошибку, но как разрешить такое через параметры или как можно вообще сделать такое?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=233174">Maks5</a>]]></name>
		</author>
		<published>2020-04-16T03:22:00Z</published>
		<updated>2020-04-16T03:22:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=674269" />
		<id>https://sampforum.blast.hk/showthread.php?tid=674269</id>
		<title xml:space="preserve"><![CDATA[Кодировка в SQLite]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=674269"><![CDATA[Здравствуйте. Возможно ли в SQLite делать сохранение русского текста? Пробовал делать стандартную таблицу.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">CREATE TABLE </span><span style="color: #DD0000">"my_table" </span><span style="color: #007700">(
<br/>    </span><span style="color: #DD0000">"id"    </span><span style="color: #0000BB">INTEGER PRIMARY KEY AUTOINCREMENT</span><span style="color: #007700">,
<br/>    </span><span style="color: #DD0000">"text"    </span><span style="color: #0000BB">TEXT
<br/></span><span style="color: #007700">) 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Если английский текст сохраняется и выводится нормально, то русский текст записывается в поле text как BLOB. А выводит текст к примеру, должно быть: "Сообщение" а выводит "яяяСяяяояяяояяябяяящяяяеяяяняяяияяяе"<br />
Как исправить?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=245620">MikeBN</a>]]></name>
		</author>
		<published>2020-03-20T18:18:00Z</published>
		<updated>2020-03-20T18:18:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=673213" />
		<id>https://sampforum.blast.hk/showthread.php?tid=673213</id>
		<title xml:space="preserve"><![CDATA[Сервер с несколькими IP-адресами?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=673213"><![CDATA[Сервер с несколькими IP-адресами? <br />
У меня Teamspea3 работает на всех 16 IP-адресах, но SA: MP работает только на одном ...<br />
У меня есть dedicated сервер OVH]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=84400">-Stranger-</a>]]></name>
		</author>
		<published>2020-03-04T18:28:00Z</published>
		<updated>2020-03-04T18:28:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=672862" />
		<id>https://sampforum.blast.hk/showthread.php?tid=672862</id>
		<title xml:space="preserve"><![CDATA[Прерывание по коллизии\пересечении\проезде\наезде ....]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=672862"><![CDATA[Ещё вопрос у меня.<br />
Не появилась возможность как-то отслеживать коллизию игрока\транспорта с объектом, или пересечение отрезка или ..... в режиме прерывания ( колбек )?<br />
Например едет машина\игрок по дороге. Нужно узнать что он пересёк линию перпендикулярно дороге.<br />
<br />
PS&#x26;t Разумеется без сотен тысяч проверок в секунду, серверу и так есть чем заняться.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=84400">-Stranger-</a>]]></name>
		</author>
		<published>2020-03-02T17:48:00Z</published>
		<updated>2020-03-02T17:48:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=672822" />
		<id>https://sampforum.blast.hk/showthread.php?tid=672822</id>
		<title xml:space="preserve"><![CDATA[[Вопросы] MySQL Plugin by BlueG]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=672822"><![CDATA[<font size="1">И прошло более 5 лет и решил я опять поднять свой сервер. Думал что за это время и ООП пришло и хотя-бы pawn был обновлён, но ....</font><br />
<br />
Всем привет.<br />
Начал писать новый мод с нуля и возникли непонятки в работе плагина <a href="https://sampforum.blast.hk/showthread.php?tid=56564" target="_blank">MySQL от BlueG</a>.<br />
Вопрос 1:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 50px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">mysql_tquery</span><span style="color: #007700">(</span><span style="color: #0000BB">CORE_SQL</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT * FROM `OBJECTS`"</span><span style="color: #007700">, </span><span style="color: #DD0000">"OnSQLResponse"</span><span style="color: #007700">);
<br/>public </span><span style="color: #0000BB">OnSQLResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">type</span><span style="color: #007700">){} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Далее в этом колбеке используются функции "cache_get_*", например "cache_get_row_count".<br />
Где связь запроса и содержания этих функций? Как я могу быть уверен что в ответ эти функции будут возвращать ответ именно на нужный мне запрос?<br />
Например: Выполняется этот запрос, допустим его ответ придёт через 10 секунд, и в это время выполняется запрос на поиск игрока, который придёт мгновенно и в OnResponse* я буду использовать точно такие-же функции.<br />
Я не понимаю где указание на то, что фуккции "cache_get_*" работают именно с моим запросом а не с другим?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=233075">soul225</a>]]></name>
		</author>
		<published>2020-02-13T12:55:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=672442" />
		<id>https://sampforum.blast.hk/showthread.php?tid=672442</id>
		<title xml:space="preserve"><![CDATA[Краш клиента]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=672442"><![CDATA[Давно уже мучаюсь с этой проблемой<br />
<br />
сначала идут варнинги, далее краш клиента<br />
<a href="https://ibb.co/0Dr29M3" target="_blank"><img alt="" border="0" src="https://i.ibb.co/kHXBD8F/sa-mp-016.png"/></a><br />
<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">SA</span><span style="color: #007700">-</span><span style="color: #0000BB">MP 0.3.7</span><span style="color: #007700">-</span><span style="color: #0000BB">R3
<br/>Exception At Address</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00757607
<br/>Base</span><span style="color: #007700">: </span><span style="color: #0000BB">0x03EA0000

<br/>Registers</span><span style="color: #007700">:
<br/></span><span style="color: #0000BB">EAX</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00C9BC50    EBX</span><span style="color: #007700">: </span><span style="color: #0000BB">0x14899AE0    ECX</span><span style="color: #007700">: </span><span style="color: #0000BB">0x044DCC28    EDX</span><span style="color: #007700">: </span><span style="color: #0000BB">0x08012180
<br/>ESI</span><span style="color: #007700">: </span><span style="color: #0000BB">0x044C5D3C    EDI</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000    EBP</span><span style="color: #007700">: </span><span style="color: #0000BB">0x044DD6C0    ESP</span><span style="color: #007700">: </span><span style="color: #0000BB">0x0028FD18
<br/>EFLAGS</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00210216

<br/>Stack</span><span style="color: #007700">:
<br/>+</span><span style="color: #0000BB">0000</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x044C5D3C   0x76E1A1B9   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0010</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000001   0x3F8CCCCD   0x3F666666   0x00805769
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0020</span><span style="color: #007700">: </span><span style="color: #0000BB">0x044DCC28   0x00C9BC50   0x0000003E   0x14899AE0
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0030</span><span style="color: #007700">: </span><span style="color: #0000BB">0x007491E4   0x044C5D3C   0x14899AE0   0x00000001
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0040</span><span style="color: #007700">: </span><span style="color: #0000BB">0x04987240   0x0053439A   0x14899AE0   0x04987240
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0050</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00553308   0x00000045   0x00553CBD
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0060</span><span style="color: #007700">: </span><span style="color: #0000BB">0x04987200   0x0000001A   0x00000001   0x3F80068E
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0070</span><span style="color: #007700">: </span><span style="color: #0000BB">0x03F44987   0x0053DFE2   0x00000000   0x0053EAA6
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0080</span><span style="color: #007700">: </span><span style="color: #0000BB">0x0161EDC4   0x0053EAC4   0x44200000   0x43B40000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0090</span><span style="color: #007700">: </span><span style="color: #0000BB">0x0053ECC2   0x00000001   0x00619B71   0x0000001A
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">00A0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000001   0x00000001   0x0000000A   0x00748DA0
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">00B0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x0000001A   0x00000001   0x75211245   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">00C0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x0028FF88   0xFFFDE000   0x01610000   0x4F14449B
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">00D0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x01611130   0x00000008   0x00000100   0x00000008
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">00E0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000102   0x44200000   0x43B40000   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">00F0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00000500   0x000002D0   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0100</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000001   0x001804B0   0x00000113   0x00000001
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0110</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x01F22E88   0x00000280   0x00000168
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0120</span><span style="color: #007700">: </span><span style="color: #0000BB">0x0000002C   0x0028FE2C   0x00825EA4   0x75211245
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0130</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0xFFFDE000   0xFFFFFFFF   0x00821D17
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0140</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000065   0x00000065   0x0028FF88   0x008246F1
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0150</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00400000   0x00000000   0x019A3596   0x0000000A
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0160</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000094   0x00000006   0x00000001   0x00001DB1
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0170</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000002   0x76726553   0x20656369   0x6B636150
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0180</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00003120   0x00000000   0x00000000   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0190</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00000000   0x00000000   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">01A0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00000000   0x00000000   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">01B0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00000000   0x00000000   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">01C0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00000000   0x00000000   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">01D0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00000000   0x00000000   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">01E0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00000000   0x00000000   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">01F0</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00824588   0x00000000   0x00000000   0xFFFDE000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0200</span><span style="color: #007700">: </span><span style="color: #0000BB">0xC0000005   0x00000000   0x019A3596   0x00000044
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0210</span><span style="color: #007700">: </span><span style="color: #0000BB">0x019D3F40   0x019D71F0   0x019D72F8   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0220</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00000000   0x00000000   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0230</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00000000   0x00000000   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0240</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0xFFFFFFFF   0xFFFFFFFF   0xFFFFFFFF
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0250</span><span style="color: #007700">: </span><span style="color: #0000BB">0x00000000   0x00000000   0x0028FE78   0x0028F8EC
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0260</span><span style="color: #007700">: </span><span style="color: #0000BB">0x0028FFC4   0x00825EA4   0x00888078   0x00000000
<br/></span><span style="color: #007700">+</span><span style="color: #0000BB">0270</span><span style="color: #007700">: </span><span style="color: #0000BB">0x0028FF94   0x7521343D   0xFFFDE000   0x0028FFD4

<br/>SCM Op</span><span style="color: #007700">: </span><span style="color: #0000BB">0x77E</span><span style="color: #007700">, </span><span style="color: #0000BB">lDbg</span><span style="color: #007700">: </span><span style="color: #0000BB">0 LastRendObj</span><span style="color: #007700">: </span><span style="color: #0000BB">1284

<br/>Game Version</span><span style="color: #007700">: </span><span style="color: #0000BB">US 1.0

<br/>State Information</span><span style="color: #007700">: </span><span style="color: #0000BB">Ped Context</span><span style="color: #007700">: </span><span style="color: #0000BB">0 
<br/></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>
<br />
крашит клиент из-за светофоров    id 1284 чтоли?<br />
не удалять же их]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=339476">natovan</a>]]></name>
		</author>
		<published>2020-02-05T15:39:00Z</published>
		<updated>2020-02-05T15:39:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=672305" />
		<id>https://sampforum.blast.hk/showthread.php?tid=672305</id>
		<title xml:space="preserve"><![CDATA[Команды на русском. .меню вместо /menu]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=672305"><![CDATA[<b>Cnjq, cerf, cgfcb,j, .ьутг, .ьь</b><br />
Забытый недостаток наших серверов — необходимость переключать раскладку. Мало того, что мы открываем чат на F6 вместо задуманного Т, так еще и раскладку переключаем как коробку передач. <br />
Проклятие, которое никто не замечает.<br />
<br />
Решение — команды на кириллице. Примеры: <b>.деньги 456 1000</b>, <b>.меню</b>, <b>.паспорт 992</b>, <b>.ремонт 111</b>. Привыкать почти не придется, слеш / заменен на . точку а названия интуитивны.  Такому нововведению будут только рады. <br />
Но почему так еще никто не сделал? Какие подводные камни?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=317822">wearLy</a>]]></name>
		</author>
		<published>2019-12-19T19:50:00Z</published>
		<updated>2019-12-19T19:50:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=671287" />
		<id>https://sampforum.blast.hk/showthread.php?tid=671287</id>
		<title xml:space="preserve"><![CDATA[SA-MP APK на Android]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=671287"><![CDATA[Добрый вечер, извините за неудобства, но может кто-нибудь сказать мне, как я нахожу сайт, который продает SA-MP APK на Android.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=169845">Bombo</a>]]></name>
		</author>
		<published>2019-11-04T17:51:00Z</published>
		<updated>2019-11-04T17:51:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=670379" />
		<id>https://sampforum.blast.hk/showthread.php?tid=670379</id>
		<title xml:space="preserve"><![CDATA[Перестали отображаться авто]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=670379"><![CDATA[Все автомобили на сервере перестали отображаться. С чем это может быть связано? (выкладывать код не считаю нужным, т.к. там только чтение из БД координат и создание по ним авто).]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>