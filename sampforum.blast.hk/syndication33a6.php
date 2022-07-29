<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[SA-MP Forums Archive - Help Archive]]></title>
	<subtitle type="html"><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></subtitle>
	<link rel="self" href="https://sampforum.blast.hk/syndication.php"/>
	<id>https://sampforum.blast.hk/</id>
	<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/"/>
	<updated>2022-07-28T20:47:00Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=106547">BigAl</a>]]></name>
		</author>
		<published>2011-08-24T10:35:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278883" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278883</id>
		<title xml:space="preserve"><![CDATA[Team Spawns [HELP]]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278883"><![CDATA[I would like for some advice on how to create, a team spawns, like Raiders spawn one place, and then the guards spawn in one area, how is this possible?<br />
<br />
<br />
Thanks, bigal <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=122705">iPLEOMAX</a>]]></name>
		</author>
		<published>2011-08-24T10:21:00Z</published>
		<updated>2011-08-24T10:21:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278882" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278882</id>
		<title xml:space="preserve"><![CDATA[Inserting a character into a string.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278882"><![CDATA[I've been trying a lot of methods and some fail and some work a little.. Hmm..<br />
<br />
Suppose I have a string "trololo1o1o1olo1"<br />
<br />
Now How can I replace all the "1"s here with "_1" so it looks like: "trololo_1o_1o_1olo_1"?<br />
<br />
I used loops,strfind,strins.. they all failed cuz I'm messing up somewhere..<br />
<br />
Any Help Please <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/>?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=134757">Jafet_Macario</a>]]></name>
		</author>
		<published>2011-08-24T10:19:00Z</published>
		<updated>2011-08-24T10:19:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278881" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278881</id>
		<title xml:space="preserve"><![CDATA[Help me, please /a chat]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278881"><![CDATA[So, I'm trying to make an admin chat, basically admins can speak with eachother using the command /a [text]<br />
But, I got this command:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:215px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #000000;">CMD</span><span style="color: #000000;">:</span>a<span style="color: #000000;">(</span>playerid, params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> sendername<span style="color: #000000;">[</span>MAX_PLAYER_NAME<span style="color: #000000;">]</span>, result<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>, string<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span><span style="color: #000000;">!</span><span style="color: #000000;">(</span>PlayerInfo<span style="color: #000000;">[</span>playerid<span style="color: #000000;">]</span><span style="color: #000000;">[</span>pAdmin<span style="color: #000000;">]</span> <span style="color: #000000;">&#x26;t=</span> <span style="color: #000000;">1</span><span style="color: #000000;">)</span><span style="color: #000000;">)</span> <span style="color: #2222BB;">return</span> SCM<span style="color: #000000;">(</span>playerid, COLOR_GREY,<span style="color: #000066;">"You are not authorized to use this command"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>sscanf<span style="color: #000000;">(</span>params,<span style="color: #000066;">"s[128]"</span>, result<span style="color: #000000;">)</span><span style="color: #000000;">)</span> <span style="color: #2222BB;">return</span> SCM<span style="color: #000000;">(</span>playerid, COLOR_GOLD,<span style="color: #000066;">"USAGE: /a [chat]"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">else</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #222222;">format</span><span style="color: #000000;">(</span>string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>string<span style="color: #000000;">)</span>,<span style="color: #000066;">"*%d Admin %s: %s"</span>, PlayerInfo<span style="color: #000000;">[</span>playerid<span style="color: #000000;">]</span><span style="color: #000000;">[</span>pAdmin<span style="color: #000000;">]</span>, sendername, result<span style="color: #000000;">)</span>;<br/>        SendAdminMessage<span style="color: #000000;">(</span>COLOR_GOLD, string<span style="color: #000000;">)</span>;<br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>Every time I type for example: /a hello, or anything, I'm getting always this message: "USAGE: /a [chat]", any help, please?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=55380">gedux123775</a>]]></name>
		</author>
		<published>2011-08-24T10:17:00Z</published>
		<updated>2011-08-24T10:17:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278879" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278879</id>
		<title xml:space="preserve"><![CDATA[Hide player weapon.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278879"><![CDATA[Hey, I need script which hide player weapon but not remove, have any ideas? Thanks <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=53499">Serialflood</a>]]></name>
		</author>
		<published>2011-08-24T09:59:00Z</published>
		<updated>2011-08-24T09:59:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278875" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278875</id>
		<title xml:space="preserve"><![CDATA[[HELP]Timer]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278875"><![CDATA[Hello, first of all sorry for my bad english.<br />
My question is, how can I create a timer that does not repeat itself to infinity but is repeated only once?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=106102">Hoss</a>]]></name>
		</author>
		<published>2011-08-24T09:48:00Z</published>
		<updated>2011-08-24T09:48:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278873" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278873</id>
		<title xml:space="preserve"><![CDATA[Please help]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278873"><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:263px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;">dcmd_admins<span style="color: #000000;">(</span>playerid,params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222AA;">#pragma unused params</span><br/>    <span style="color: #2222BB;">new</span> string<span style="color: #000000;">[</span><span style="color: #000000;">256</span><span style="color: #000000;">]</span>, result<span style="color: #000000;">[</span><span style="color: #000000;">256</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i <span style="color: #000000;">=</span> <span style="color: #000000;">0</span>; i <span style="color: #000000;">&#x26;t</span> MAX_PLAYERS; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>Variables<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span><span style="color: #000000;">[</span>Level<span style="color: #000000;">]</span> <span style="color: #000000;">&#x26;t</span><span style="color: #000000;">0</span> <span style="color: #000000;">&amp;&amp;</span> Variables<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span><span style="color: #000000;">[</span>Level<span style="color: #000000;">]</span> <span style="color: #000000;">&#x26;t</span> <span style="color: #000000;">10</span><span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #222222;">format</span><span style="color: #000000;">(</span>string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>string<span style="color: #000000;">)</span>, <span style="color: #000066;">"{FF0000}ADMINISTRATOR: %s ID[%d]{15D4ED}[Level %d]<span style="color: #000099; font-weight: bold;">\n</span>"</span>, RealName<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span>,playerid, Variables<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span><span style="color: #000000;">[</span>Level<span style="color: #000000;">]</span><span style="color: #000000;">)</span>;<br/>            <span style="color: #222222;">strcat</span><span style="color: #000000;">(</span>result, string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>result<span style="color: #000000;">)</span><span style="color: #000000;">)</span>;      <br/>        <span style="color: #000000;">}</span><br/>    <span style="color: #000000;">}</span><br/>    ShowPlayerDialog<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">5591</span>, <span style="color: #000000;">0</span>, <span style="color: #000066;">"{1B1BE0}Online Admins:"</span>, result, <span style="color: #000066;">"Done"</span>, <span style="color: #000066;">""</span><span style="color: #000000;">)</span>; <br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>Can anyone help me to make 2 admin lines,cuz when here are 2+ admins in admin list is only 1 admin<br />
Help me please]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=126163">Wesley221</a>]]></name>
		</author>
		<published>2011-08-24T09:43:00Z</published>
		<updated>2011-08-24T09:43:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278871" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278871</id>
		<title xml:space="preserve"><![CDATA[Loading password in y_ini]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278871"><![CDATA[Hey guys,<br />
Im trying to store the playerpassword in a variable, but i dont really get it how to do that. I tried INI_String(); before, but that gave me the error "Undefined symbol". Zhero(not sure if thats the right name) said this can also be done by using INI_ParseFile();, but i dont really get how to use that. <br />
Zhero also gave me a link to his FS which uses the INI_ParseFile(); aswell, but couldnt really get it how he used it. <br />
Can anyone give me an hand how to get the player password using INI_ParseFile();?<br />
Im using the variable PlayerInfo[playerid][pPass] to store the password in, if you wanna know that. <br />
~Wesley]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=58433">Antonio [G-RP]</a>]]></name>
		</author>
		<published>2011-08-24T09:26:00Z</published>
		<updated>2011-08-24T09:26:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278866" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278866</id>
		<title xml:space="preserve"><![CDATA[Hex Color Opacity]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278866"><![CDATA[I never really learned this.. which opacities are more visible? Which are more invisible?<br />
<br />
I basically use 'FF' for my opacity in everything. It works fine. But in my current instance I need darker &amp; lighter opacities. Help, anybody?<br />
<br />
Opacity: 0xFFFFFF<b>FF</b> (bolded)]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=119872">Dragony92</a>]]></name>
		</author>
		<published>2011-08-24T09:12:00Z</published>
		<updated>2011-08-24T09:12:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278864" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278864</id>
		<title xml:space="preserve"><![CDATA[AttachObjectToVehicle]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278864"><![CDATA[GameMod Using: Ravens RP (Fully edited by me)<br />
<br />
This command dont want to attach object on vehicle....just send message and nothing else....<br />
<br />
This is part of this FS <a href="https://sampforum.blast.hk/showthread.php?tid=200569&amp;highlight=neon" target="_blank">http://forum.sa-mp.com/showthread.ph...highlight=neon</a><br />
FS also dont want to work on my server....<br />
I'm running server on 0.3c R5 (Linux) with plugins streamer(last update, by Incognito) and sscanf(last update), FS junkbuster(v10), that's all...<br />
<br />
On my home server everything works fine, on windows with same plugins and FS....<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:279px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">if</span><span style="color: #000000;">(</span><span style="color: #222222;">strcmp</span><span style="color: #000000;">(</span>cmd, <span style="color: #000066;">"/undercover"</span>, true<span style="color: #000000;">)</span> <span style="color: #000000;">==</span> <span style="color: #000000;">0</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>IsACop<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span> || IsAFreecop<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span><span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SetPVarInt<span style="color: #000000;">(</span>playerid, <span style="color: #000066;">"undercover"</span>, CreateDynamicObject<span style="color: #000000;">(</span><span style="color: #000000;">18646</span>,<span style="color: #000000;">0</span>,<span style="color: #000000;">0</span>,<span style="color: #000000;">0</span>,<span style="color: #000000;">0</span>,<span style="color: #000000;">0</span>,<span style="color: #000000;">0</span><span style="color: #000000;">)</span><span style="color: #000000;">)</span>;<br/>            SetPVarInt<span style="color: #000000;">(</span>playerid, <span style="color: #000066;">"undercover1"</span>, CreateDynamicObject<span style="color: #000000;">(</span><span style="color: #000000;">18646</span>,<span style="color: #000000;">0</span>,<span style="color: #000000;">0</span>,<span style="color: #000000;">0</span>,<span style="color: #000000;">0</span>,<span style="color: #000000;">0</span>,<span style="color: #000000;">0</span><span style="color: #000000;">)</span><span style="color: #000000;">)</span>;<br/>            AttachObjectToVehicle<span style="color: #000000;">(</span>GetPVarInt<span style="color: #000000;">(</span>playerid, <span style="color: #000066;">"undercover"</span><span style="color: #000000;">)</span>, GetPlayerVehicleID<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span>, <span style="color: #000000;">-</span><span style="color: #000000;">0.5</span>, <span style="color: #000000;">-</span><span style="color: #000000;">0.2</span>, <span style="color: #000000;">0.8</span>, <span style="color: #000000;">2.0</span>, <span style="color: #000000;">2.0</span>, <span style="color: #000000;">3.0</span><span style="color: #000000;">)</span>;<br/>            AttachObjectToVehicle<span style="color: #000000;">(</span>GetPVarInt<span style="color: #000000;">(</span>playerid, <span style="color: #000066;">"undercover1"</span><span style="color: #000000;">)</span>, GetPlayerVehicleID<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span>, <span style="color: #000000;">-</span><span style="color: #000000;">0.5</span>, <span style="color: #000000;">-</span><span style="color: #000000;">0.2</span>, <span style="color: #000000;">0.8</span>, <span style="color: #000000;">2.0</span>, <span style="color: #000000;">2.0</span>, <span style="color: #000000;">3.0</span><span style="color: #000000;">)</span>;<br/>            SendClientMessage<span style="color: #000000;">(</span>playerid, 0xFFFFFFAA, <span style="color: #000066;">"You have Attched Undercover light on your vehicle!"</span><span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span><br/>        <span style="color: #000000;">{</span><br/>            SendClientMessage<span style="color: #000000;">(</span>playerid, COLOR_GREY, <span style="color: #000066;">"**You are not a Cop!"</span><span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/>    <span style="color: #000000;">}</span></div></div></pre>
</div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=133759">Azzeto</a>]]></name>
		</author>
		<published>2011-08-24T08:14:00Z</published>
		<updated>2011-08-24T08:14:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278849" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278849</id>
		<title xml:space="preserve"><![CDATA[Help With Textdraws]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278849"><![CDATA[I need help with textdraws.. So like when a player connects to my server it'll say "Welcome to SDKFreeRoam scripted by [SDK]Azzeto, This is what I have so far<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:39px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> <span style="color: #000000;">Text</span><span style="color: #000000;">:</span>welcome;</div></div></pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:55px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;">Public OnGameModeInit<br/>welcome <span style="color: #000000;">=</span> TextDrawCreate<span style="color: #000000;">(</span><span style="color: #000000;">240.0</span>,<span style="color: #000000;">580.0</span>,<span style="color: #000066;">"SDKFreeRoam Scripted by [SDK]Azzeto"</span><span style="color: #000000;">)</span>;</div></div></pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:55px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;">Public OnPlayerConnect<br/>TextDrawShowForPlayer<span style="color: #000000;">(</span>playerid,welcome<span style="color: #000000;">)</span>;</div></div></pre>
</div>
I'v read the wiki and got that, but It doesnt show ingame.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=128370">Moron</a>]]></name>
		</author>
		<published>2011-08-24T08:04:00Z</published>
		<updated>2011-08-24T08:04:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278847" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278847</id>
		<title xml:space="preserve"><![CDATA[What is GetNameTagDrawDistance]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278847"><![CDATA[What is GetNameTagDrawDistance? I couldn't find any information on it.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=131315">lukas567</a>]]></name>
		</author>
		<published>2011-08-24T08:00:00Z</published>
		<updated>2011-08-24T08:00:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278846" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278846</id>
		<title xml:space="preserve"><![CDATA[Timer problem]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278846"><![CDATA[Hey guys!<br />
<br />
I have a problem...<br />
<br />
When I and my friend join to server, timers don't work... It have to Set other Camera Pos but don't work.<br />
But when I join to server alone, it works...<br />
<br />
Help me!!!<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 226px;
		text-align: left;
		overflow: auto"> 	if(playerDB[playerid][newguy]==true)
	{
	TextDrawShowForPlayer(playerid, Text:Line1);
	TextDrawShowForPlayer(playerid, Text:Line2);
	SetTimer("lines", 15000, false);
	SetPlayerCameraPos(playerid,2047.1219,1008.4376,19.7687);
	SetPlayerCameraLookAt(playerid,2021.9423,1007.6476,15.2949);
	SetTimer("camera", 5000, false);
	SetPlayerSkin(playerid,248);
	playerDB[playerid][skin]=248;
	SetPlayerAttachedObject(playerid, 3, 1550, 1, 0.1, -0.3, 0, 0, 40, 0, 1, 1, 1);
		SetPlayerPos(playerid,1903.3308,965.7521,10.8203);
 	}</pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 482px;
		text-align: left;
		overflow: auto">forward camera(playerid);
public camera(playerid)
{
SetPlayerCameraPos(playerid,1908.6547,963.1794,10.8203);
SetPlayerCameraLookAt(playerid,1903.4467,967.1631,10.8203);
SetTimer("camera2", 5000, false);
return 1;
}
forward lines(playerid);
public lines(playerid)
{
TextDrawHideForPlayer(playerid, Text:Line1);
TextDrawHideForPlayer(playerid, Text:Line2);
return 1;
}
forward camera2(playerid);
public camera2(playerid)
{
SetPlayerCameraPos(playerid,1888.9412,946.0771,15.0975);
SetPlayerCameraLookAt(playerid,1883.4490,977.2070,10.8203);
SetTimer("camerab", 5000, false);
return 1;
}
forward camerab(playerid);
public camerab(playerid)
{
SetCameraBehindPlayer(playerid);
return 1;
}</pre>
</div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=116765">Speed</a>]]></name>
		</author>
		<published>2011-08-24T07:50:00Z</published>
		<updated>2011-08-24T07:50:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278845" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278845</id>
		<title xml:space="preserve"><![CDATA[commands]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278845"><![CDATA[How i can make it, if player have "CMD" = 1<br />
<br />
that he can type no one command expect /help....<br />
<br />
i can put this in each command, but can i do easier?:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:199px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #000000;">CMD</span><span style="color: #000000;">:</span>aaa<span style="color: #000000;">(</span>playerid, params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>GetPVarInt<span style="color: #000000;">(</span>playerid, <span style="color: #000066;">"CMD"</span><span style="color: #000000;">)</span> <span style="color: #000000;">==</span> <span style="color: #000000;">1</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        SendClientMessage<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">"You can only type /help!"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">else</span><br/>    <span style="color: #000000;">{</span><br/>    <span style="color: #228822;">//my code goes here</span><br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>
and i must put that in each command, can it be some how easier?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=112301">Edvin</a>]]></name>
		</author>
		<published>2011-08-24T07:47:00Z</published>
		<updated>2011-08-24T07:47:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278844" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278844</id>
		<title xml:space="preserve"><![CDATA[LAdmin Big Problem!!!...]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278844"><![CDATA[Hi, yesterday i put my LAdmin in my GameMode...on compilation it works perfectlly...but...when i run register in game...the save logs appear on scriptfiles not normally in /ladmin/users/...i don't know what can i doo...any suggestions?...]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=135759">Tanush123</a>]]></name>
		</author>
		<published>2011-08-24T07:43:00Z</published>
		<updated>2011-08-24T07:43:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=278842" />
		<id>https://sampforum.blast.hk/showthread.php?tid=278842</id>
		<title xml:space="preserve"><![CDATA[dini problem]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=278842"><![CDATA[is there a function with i could get with dini like for example, GetPlayerScore, GetPlayerMoney etc.. is there something like dini_Get(file);]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>