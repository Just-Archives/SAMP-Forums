<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[SA-MP Forums Archive - Help Archive]]></title>
		<link>https://sampforum.blast.hk/</link>
		<description><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></description>
		<pubDate>Thu, 28 Jul 2022 20:46:59 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[Team Spawns [HELP]]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278883</link>
			<pubDate>Wed, 24 Aug 2011 10:35:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=106547">BigAl</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278883</guid>
			<description><![CDATA[I would like for some advice on how to create, a team spawns, like Raiders spawn one place, and then the guards spawn in one area, how is this possible?<br />
<br />
<br />
Thanks, bigal <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/>]]></description>
			<content:encoded><![CDATA[I would like for some advice on how to create, a team spawns, like Raiders spawn one place, and then the guards spawn in one area, how is this possible?<br />
<br />
<br />
Thanks, bigal <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Inserting a character into a string.]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278882</link>
			<pubDate>Wed, 24 Aug 2011 10:21:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=122705">iPLEOMAX</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278882</guid>
			<description><![CDATA[I've been trying a lot of methods and some fail and some work a little.. Hmm..<br />
<br />
Suppose I have a string "trololo1o1o1olo1"<br />
<br />
Now How can I replace all the "1"s here with "_1" so it looks like: "trololo_1o_1o_1olo_1"?<br />
<br />
I used loops,strfind,strins.. they all failed cuz I'm messing up somewhere..<br />
<br />
Any Help Please <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/>?]]></description>
			<content:encoded><![CDATA[I've been trying a lot of methods and some fail and some work a little.. Hmm..<br />
<br />
Suppose I have a string "trololo1o1o1olo1"<br />
<br />
Now How can I replace all the "1"s here with "_1" so it looks like: "trololo_1o_1o_1olo_1"?<br />
<br />
I used loops,strfind,strins.. they all failed cuz I'm messing up somewhere..<br />
<br />
Any Help Please <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/>?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Help me, please /a chat]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278881</link>
			<pubDate>Wed, 24 Aug 2011 10:19:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=134757">Jafet_Macario</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278881</guid>
			<description><![CDATA[So, I'm trying to make an admin chat, basically admins can speak with eachother using the command /a [text]<br />
But, I got this command:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:215px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #000000;">CMD</span><span style="color: #000000;">:</span>a<span style="color: #000000;">(</span>playerid, params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> sendername<span style="color: #000000;">[</span>MAX_PLAYER_NAME<span style="color: #000000;">]</span>, result<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>, string<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span><span style="color: #000000;">!</span><span style="color: #000000;">(</span>PlayerInfo<span style="color: #000000;">[</span>playerid<span style="color: #000000;">]</span><span style="color: #000000;">[</span>pAdmin<span style="color: #000000;">]</span> <span style="color: #000000;">&gt;=</span> <span style="color: #000000;">1</span><span style="color: #000000;">)</span><span style="color: #000000;">)</span> <span style="color: #2222BB;">return</span> SCM<span style="color: #000000;">(</span>playerid, COLOR_GREY,<span style="color: #000066;">"You are not authorized to use this command"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>sscanf<span style="color: #000000;">(</span>params,<span style="color: #000066;">"s[128]"</span>, result<span style="color: #000000;">)</span><span style="color: #000000;">)</span> <span style="color: #2222BB;">return</span> SCM<span style="color: #000000;">(</span>playerid, COLOR_GOLD,<span style="color: #000066;">"USAGE: /a [chat]"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">else</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #222222;">format</span><span style="color: #000000;">(</span>string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>string<span style="color: #000000;">)</span>,<span style="color: #000066;">"*%d Admin %s: %s"</span>, PlayerInfo<span style="color: #000000;">[</span>playerid<span style="color: #000000;">]</span><span style="color: #000000;">[</span>pAdmin<span style="color: #000000;">]</span>, sendername, result<span style="color: #000000;">)</span>;<br/>        SendAdminMessage<span style="color: #000000;">(</span>COLOR_GOLD, string<span style="color: #000000;">)</span>;<br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>Every time I type for example: /a hello, or anything, I'm getting always this message: "USAGE: /a [chat]", any help, please?]]></description>
			<content:encoded><![CDATA[So, I'm trying to make an admin chat, basically admins can speak with eachother using the command /a [text]<br />
But, I got this command:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:215px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #000000;">CMD</span><span style="color: #000000;">:</span>a<span style="color: #000000;">(</span>playerid, params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> sendername<span style="color: #000000;">[</span>MAX_PLAYER_NAME<span style="color: #000000;">]</span>, result<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>, string<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span><span style="color: #000000;">!</span><span style="color: #000000;">(</span>PlayerInfo<span style="color: #000000;">[</span>playerid<span style="color: #000000;">]</span><span style="color: #000000;">[</span>pAdmin<span style="color: #000000;">]</span> <span style="color: #000000;">&gt;=</span> <span style="color: #000000;">1</span><span style="color: #000000;">)</span><span style="color: #000000;">)</span> <span style="color: #2222BB;">return</span> SCM<span style="color: #000000;">(</span>playerid, COLOR_GREY,<span style="color: #000066;">"You are not authorized to use this command"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>sscanf<span style="color: #000000;">(</span>params,<span style="color: #000066;">"s[128]"</span>, result<span style="color: #000000;">)</span><span style="color: #000000;">)</span> <span style="color: #2222BB;">return</span> SCM<span style="color: #000000;">(</span>playerid, COLOR_GOLD,<span style="color: #000066;">"USAGE: /a [chat]"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">else</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #222222;">format</span><span style="color: #000000;">(</span>string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>string<span style="color: #000000;">)</span>,<span style="color: #000066;">"*%d Admin %s: %s"</span>, PlayerInfo<span style="color: #000000;">[</span>playerid<span style="color: #000000;">]</span><span style="color: #000000;">[</span>pAdmin<span style="color: #000000;">]</span>, sendername, result<span style="color: #000000;">)</span>;<br/>        SendAdminMessage<span style="color: #000000;">(</span>COLOR_GOLD, string<span style="color: #000000;">)</span>;<br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>Every time I type for example: /a hello, or anything, I'm getting always this message: "USAGE: /a [chat]", any help, please?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Hide player weapon.]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278879</link>
			<pubDate>Wed, 24 Aug 2011 10:17:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=55380">gedux123775</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278879</guid>
			<description><![CDATA[Hey, I need script which hide player weapon but not remove, have any ideas? Thanks <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>]]></description>
			<content:encoded><![CDATA[Hey, I need script which hide player weapon but not remove, have any ideas? Thanks <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[HELP]Timer]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278875</link>
			<pubDate>Wed, 24 Aug 2011 09:59:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=53499">Serialflood</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278875</guid>
			<description><![CDATA[Hello, first of all sorry for my bad english.<br />
My question is, how can I create a timer that does not repeat itself to infinity but is repeated only once?]]></description>
			<content:encoded><![CDATA[Hello, first of all sorry for my bad english.<br />
My question is, how can I create a timer that does not repeat itself to infinity but is repeated only once?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Please help]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278873</link>
			<pubDate>Wed, 24 Aug 2011 09:48:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=106102">Hoss</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278873</guid>
			<description><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:263px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;">dcmd_admins<span style="color: #000000;">(</span>playerid,params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222AA;">#pragma unused params</span><br/>    <span style="color: #2222BB;">new</span> string<span style="color: #000000;">[</span><span style="color: #000000;">256</span><span style="color: #000000;">]</span>, result<span style="color: #000000;">[</span><span style="color: #000000;">256</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i <span style="color: #000000;">=</span> <span style="color: #000000;">0</span>; i <span style="color: #000000;">&lt;</span> MAX_PLAYERS; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>Variables<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span><span style="color: #000000;">[</span>Level<span style="color: #000000;">]</span> <span style="color: #000000;">&gt;</span><span style="color: #000000;">0</span> <span style="color: #000000;">&amp;&amp;</span> Variables<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span><span style="color: #000000;">[</span>Level<span style="color: #000000;">]</span> <span style="color: #000000;">&lt;</span> <span style="color: #000000;">10</span><span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #222222;">format</span><span style="color: #000000;">(</span>string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>string<span style="color: #000000;">)</span>, <span style="color: #000066;">"{FF0000}ADMINISTRATOR: %s ID[%d]{15D4ED}[Level %d]<span style="color: #000099; font-weight: bold;">\n</span>"</span>, RealName<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span>,playerid, Variables<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span><span style="color: #000000;">[</span>Level<span style="color: #000000;">]</span><span style="color: #000000;">)</span>;<br/>            <span style="color: #222222;">strcat</span><span style="color: #000000;">(</span>result, string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>result<span style="color: #000000;">)</span><span style="color: #000000;">)</span>;      <br/>        <span style="color: #000000;">}</span><br/>    <span style="color: #000000;">}</span><br/>    ShowPlayerDialog<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">5591</span>, <span style="color: #000000;">0</span>, <span style="color: #000066;">"{1B1BE0}Online Admins:"</span>, result, <span style="color: #000066;">"Done"</span>, <span style="color: #000066;">""</span><span style="color: #000000;">)</span>; <br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>Can anyone help me to make 2 admin lines,cuz when here are 2+ admins in admin list is only 1 admin<br />
Help me please]]></description>
			<content:encoded><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:263px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;">dcmd_admins<span style="color: #000000;">(</span>playerid,params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222AA;">#pragma unused params</span><br/>    <span style="color: #2222BB;">new</span> string<span style="color: #000000;">[</span><span style="color: #000000;">256</span><span style="color: #000000;">]</span>, result<span style="color: #000000;">[</span><span style="color: #000000;">256</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i <span style="color: #000000;">=</span> <span style="color: #000000;">0</span>; i <span style="color: #000000;">&lt;</span> MAX_PLAYERS; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>Variables<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span><span style="color: #000000;">[</span>Level<span style="color: #000000;">]</span> <span style="color: #000000;">&gt;</span><span style="color: #000000;">0</span> <span style="color: #000000;">&amp;&amp;</span> Variables<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span><span style="color: #000000;">[</span>Level<span style="color: #000000;">]</span> <span style="color: #000000;">&lt;</span> <span style="color: #000000;">10</span><span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #222222;">format</span><span style="color: #000000;">(</span>string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>string<span style="color: #000000;">)</span>, <span style="color: #000066;">"{FF0000}ADMINISTRATOR: %s ID[%d]{15D4ED}[Level %d]<span style="color: #000099; font-weight: bold;">\n</span>"</span>, RealName<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span>,playerid, Variables<span style="color: #000000;">[</span>i<span style="color: #000000;">]</span><span style="color: #000000;">[</span>Level<span style="color: #000000;">]</span><span style="color: #000000;">)</span>;<br/>            <span style="color: #222222;">strcat</span><span style="color: #000000;">(</span>result, string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>result<span style="color: #000000;">)</span><span style="color: #000000;">)</span>;      <br/>        <span style="color: #000000;">}</span><br/>    <span style="color: #000000;">}</span><br/>    ShowPlayerDialog<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">5591</span>, <span style="color: #000000;">0</span>, <span style="color: #000066;">"{1B1BE0}Online Admins:"</span>, result, <span style="color: #000066;">"Done"</span>, <span style="color: #000066;">""</span><span style="color: #000000;">)</span>; <br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>Can anyone help me to make 2 admin lines,cuz when here are 2+ admins in admin list is only 1 admin<br />
Help me please]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Loading password in y_ini]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278871</link>
			<pubDate>Wed, 24 Aug 2011 09:43:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=126163">Wesley221</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278871</guid>
			<description><![CDATA[Hey guys,<br />
Im trying to store the playerpassword in a variable, but i dont really get it how to do that. I tried INI_String(); before, but that gave me the error "Undefined symbol". Zhero(not sure if thats the right name) said this can also be done by using INI_ParseFile();, but i dont really get how to use that. <br />
Zhero also gave me a link to his FS which uses the INI_ParseFile(); aswell, but couldnt really get it how he used it. <br />
Can anyone give me an hand how to get the player password using INI_ParseFile();?<br />
Im using the variable PlayerInfo[playerid][pPass] to store the password in, if you wanna know that. <br />
~Wesley]]></description>
			<content:encoded><![CDATA[Hey guys,<br />
Im trying to store the playerpassword in a variable, but i dont really get it how to do that. I tried INI_String(); before, but that gave me the error "Undefined symbol". Zhero(not sure if thats the right name) said this can also be done by using INI_ParseFile();, but i dont really get how to use that. <br />
Zhero also gave me a link to his FS which uses the INI_ParseFile(); aswell, but couldnt really get it how he used it. <br />
Can anyone give me an hand how to get the player password using INI_ParseFile();?<br />
Im using the variable PlayerInfo[playerid][pPass] to store the password in, if you wanna know that. <br />
~Wesley]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Hex Color Opacity]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278866</link>
			<pubDate>Wed, 24 Aug 2011 09:26:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=58433">Antonio [G-RP]</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278866</guid>
			<description><![CDATA[I never really learned this.. which opacities are more visible? Which are more invisible?<br />
<br />
I basically use 'FF' for my opacity in everything. It works fine. But in my current instance I need darker &amp; lighter opacities. Help, anybody?<br />
<br />
Opacity: 0xFFFFFF<b>FF</b> (bolded)]]></description>
			<content:encoded><![CDATA[I never really learned this.. which opacities are more visible? Which are more invisible?<br />
<br />
I basically use 'FF' for my opacity in everything. It works fine. But in my current instance I need darker &amp; lighter opacities. Help, anybody?<br />
<br />
Opacity: 0xFFFFFF<b>FF</b> (bolded)]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[AttachObjectToVehicle]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278864</link>
			<pubDate>Wed, 24 Aug 2011 09:12:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=119872">Dragony92</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278864</guid>
			<description><![CDATA[GameMod Using: Ravens RP (Fully edited by me)<br />
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
</div>]]></description>
			<content:encoded><![CDATA[GameMod Using: Ravens RP (Fully edited by me)<br />
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
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Help With Textdraws]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278849</link>
			<pubDate>Wed, 24 Aug 2011 08:14:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=133759">Azzeto</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278849</guid>
			<description><![CDATA[I need help with textdraws.. So like when a player connects to my server it'll say "Welcome to SDKFreeRoam scripted by [SDK]Azzeto, This is what I have so far<br />
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
I'v read the wiki and got that, but It doesnt show ingame.]]></description>
			<content:encoded><![CDATA[I need help with textdraws.. So like when a player connects to my server it'll say "Welcome to SDKFreeRoam scripted by [SDK]Azzeto, This is what I have so far<br />
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
I'v read the wiki and got that, but It doesnt show ingame.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[What is GetNameTagDrawDistance]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278847</link>
			<pubDate>Wed, 24 Aug 2011 08:04:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=128370">Moron</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278847</guid>
			<description><![CDATA[What is GetNameTagDrawDistance? I couldn't find any information on it.]]></description>
			<content:encoded><![CDATA[What is GetNameTagDrawDistance? I couldn't find any information on it.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Timer problem]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278846</link>
			<pubDate>Wed, 24 Aug 2011 08:00:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=131315">lukas567</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278846</guid>
			<description><![CDATA[Hey guys!<br />
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
</div>]]></description>
			<content:encoded><![CDATA[Hey guys!<br />
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
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[commands]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278845</link>
			<pubDate>Wed, 24 Aug 2011 07:50:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=116765">Speed</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278845</guid>
			<description><![CDATA[How i can make it, if player have "CMD" = 1<br />
<br />
that he can type no one command expect /help....<br />
<br />
i can put this in each command, but can i do easier?:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:199px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #000000;">CMD</span><span style="color: #000000;">:</span>aaa<span style="color: #000000;">(</span>playerid, params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>GetPVarInt<span style="color: #000000;">(</span>playerid, <span style="color: #000066;">"CMD"</span><span style="color: #000000;">)</span> <span style="color: #000000;">==</span> <span style="color: #000000;">1</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        SendClientMessage<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">"You can only type /help!"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">else</span><br/>    <span style="color: #000000;">{</span><br/>    <span style="color: #228822;">//my code goes here</span><br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>
and i must put that in each command, can it be some how easier?]]></description>
			<content:encoded><![CDATA[How i can make it, if player have "CMD" = 1<br />
<br />
that he can type no one command expect /help....<br />
<br />
i can put this in each command, but can i do easier?:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:199px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #000000;">CMD</span><span style="color: #000000;">:</span>aaa<span style="color: #000000;">(</span>playerid, params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>GetPVarInt<span style="color: #000000;">(</span>playerid, <span style="color: #000066;">"CMD"</span><span style="color: #000000;">)</span> <span style="color: #000000;">==</span> <span style="color: #000000;">1</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        SendClientMessage<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">"You can only type /help!"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">else</span><br/>    <span style="color: #000000;">{</span><br/>    <span style="color: #228822;">//my code goes here</span><br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>
and i must put that in each command, can it be some how easier?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[LAdmin Big Problem!!!...]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278844</link>
			<pubDate>Wed, 24 Aug 2011 07:47:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=112301">Edvin</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278844</guid>
			<description><![CDATA[Hi, yesterday i put my LAdmin in my GameMode...on compilation it works perfectlly...but...when i run register in game...the save logs appear on scriptfiles not normally in /ladmin/users/...i don't know what can i doo...any suggestions?...]]></description>
			<content:encoded><![CDATA[Hi, yesterday i put my LAdmin in my GameMode...on compilation it works perfectlly...but...when i run register in game...the save logs appear on scriptfiles not normally in /ladmin/users/...i don't know what can i doo...any suggestions?...]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[dini problem]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=278842</link>
			<pubDate>Wed, 24 Aug 2011 07:43:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=135759">Tanush123</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=278842</guid>
			<description><![CDATA[is there a function with i could get with dini like for example, GetPlayerScore, GetPlayerMoney etc.. is there something like dini_Get(file);]]></description>
			<content:encoded><![CDATA[is there a function with i could get with dini like for example, GetPlayerScore, GetPlayerMoney etc.. is there something like dini_Get(file);]]></content:encoded>
		</item>
	</channel>
</rss>