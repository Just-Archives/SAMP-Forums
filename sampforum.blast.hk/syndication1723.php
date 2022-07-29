<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[SA-MP Forums Archive - Server Support]]></title>
		<link>https://sampforum.blast.hk/</link>
		<description><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></description>
		<pubDate>Thu, 28 Jul 2022 20:42:01 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[BUG SPAWN]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677197</link>
			<pubDate>Sat, 04 Jul 2020 01:53:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=304780">ViniBnT</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677197</guid>
			<description><![CDATA[Estou com um BUG no meu server, ele funcionava perfeitamente.. mas do nada os players comeзaram a nascer numa fazenda aleatoria e ficar todo bugado e aparece que voce nao esta logado sendo q digitou a senha.. <br />
Alguem pode me ajudar?]]></description>
			<content:encoded><![CDATA[Estou com um BUG no meu server, ele funcionava perfeitamente.. mas do nada os players comeзaram a nascer numa fazenda aleatoria e ficar todo bugado e aparece que voce nao esta logado sendo q digitou a senha.. <br />
Alguem pode me ajudar?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[I am looking for a good and experienced SA:MP scripter.]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677183</link>
			<pubDate>Fri, 03 Jul 2020 16:35:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=349638">C0loneL</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677183</guid>
			<description><![CDATA[Hello , I am Kevin.<br />
I have a server with one of my friends and we need some help in the server’s script . <br />
It is a regular Rp/Fr server and we are trying to make it Unique. Anyways the script that we need for now is the Organization Manager  and Event Manager roles . If you think you can help us contact me as fast as possible.<br />
You can contact me in discord , and there we will discuss about everything.<br />
Keep in touch,<br />
Kevin<br />
<br />
Discord Name and Id: K3vIn#8001]]></description>
			<content:encoded><![CDATA[Hello , I am Kevin.<br />
I have a server with one of my friends and we need some help in the server’s script . <br />
It is a regular Rp/Fr server and we are trying to make it Unique. Anyways the script that we need for now is the Organization Manager  and Event Manager roles . If you think you can help us contact me as fast as possible.<br />
You can contact me in discord , and there we will discuss about everything.<br />
Keep in touch,<br />
Kevin<br />
<br />
Discord Name and Id: K3vIn#8001]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[problem with database SQLite]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677146</link>
			<pubDate>Wed, 01 Jul 2020 23:38:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=350662">votati</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677146</guid>
			<description><![CDATA[Heyy, I have a problem with my database (SQLite). When I register an account, everything works fine, the system saves the name and its respective password, but, when I log back in, it asks me to enter my account password, right? Well, when I enter the password, it tells me that it is WRONG (and I have entered the correct password), and it is a problem that I have still been able to solve (the game mode is made from 0 for my, forgive my ignorance, I am learning).<br />
<br />
Code:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 450px;
		text-align: left;
		overflow: auto">		case D_LOGIN:
		{
			if(!response) return Kick(playerid);
			{
				new DBResult:resultado, l_sQuery[350];
				format(l_sQuery, sizeof(l_sQuery), "SELECT * FROM `USUARIOS` WHERE Nick = '%q' COLLATE NOCASE AND Password = '%q'", GetPlayerNameEx(playerid), PI[playerid][e_sPassword]);
				resultado = db_query(edb, l_sQuery);
				if(db_num_rows(resultado))
				{
					new l_sString[70];
					
					CargarCuenta(playerid);

					PI[playerid][e_bSesion] = true;

					PlayerPlaySound(playerid, 1057, 0.0, 0.0, 0.0);

					format(l_sString, sizeof(l_sString), "Welcome!, %s", GetPlayerNameEx(playerid));
					Mensaje(playerid, -1, l_sString);
				}
				else
				{
					ShowPlayerDialog(playerid, D_LOGIN, DIALOG_STYLE_PASSWORD, "{FFFFFF}Log In", "{FFBF00}* {FF6262}ERROR: {FFFFFF}The entered password is incorrect.\n{FFBF00}* {FFFFFF}Please re-enter the account password to log in.", "Join", "Leave");
				}
				db_free_result(resultado);
			}
		}</pre>
</div>]]></description>
			<content:encoded><![CDATA[Heyy, I have a problem with my database (SQLite). When I register an account, everything works fine, the system saves the name and its respective password, but, when I log back in, it asks me to enter my account password, right? Well, when I enter the password, it tells me that it is WRONG (and I have entered the correct password), and it is a problem that I have still been able to solve (the game mode is made from 0 for my, forgive my ignorance, I am learning).<br />
<br />
Code:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 450px;
		text-align: left;
		overflow: auto">		case D_LOGIN:
		{
			if(!response) return Kick(playerid);
			{
				new DBResult:resultado, l_sQuery[350];
				format(l_sQuery, sizeof(l_sQuery), "SELECT * FROM `USUARIOS` WHERE Nick = '%q' COLLATE NOCASE AND Password = '%q'", GetPlayerNameEx(playerid), PI[playerid][e_sPassword]);
				resultado = db_query(edb, l_sQuery);
				if(db_num_rows(resultado))
				{
					new l_sString[70];
					
					CargarCuenta(playerid);

					PI[playerid][e_bSesion] = true;

					PlayerPlaySound(playerid, 1057, 0.0, 0.0, 0.0);

					format(l_sString, sizeof(l_sString), "Welcome!, %s", GetPlayerNameEx(playerid));
					Mensaje(playerid, -1, l_sString);
				}
				else
				{
					ShowPlayerDialog(playerid, D_LOGIN, DIALOG_STYLE_PASSWORD, "{FFFFFF}Log In", "{FFBF00}* {FF6262}ERROR: {FFFFFF}The entered password is incorrect.\n{FFBF00}* {FFFFFF}Please re-enter the account password to log in.", "Join", "Leave");
				}
				db_free_result(resultado);
			}
		}</pre>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Transferring to another host]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677129</link>
			<pubDate>Wed, 01 Jul 2020 04:19:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=166275">Uberanwar</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677129</guid>
			<description><![CDATA[Hi everyone,<br />
Currently I host my gameservers and my webservers at Hetzner Hosting with CentOS7 as the operating system. I am thinking of transferring to another hosting services. However it's gonna be tiring to do all things over and over again. Is there a way I could have a snapshot myself and then install the snapshot to new host?]]></description>
			<content:encoded><![CDATA[Hi everyone,<br />
Currently I host my gameservers and my webservers at Hetzner Hosting with CentOS7 as the operating system. I am thinking of transferring to another hosting services. However it's gonna be tiring to do all things over and over again. Is there a way I could have a snapshot myself and then install the snapshot to new host?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[what different horizonRP and LS-RP server?]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677121</link>
			<pubDate>Tue, 30 Jun 2020 20:44:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=304127">uni12</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677121</guid>
			<description><![CDATA[tell me a few point]]></description>
			<content:encoded><![CDATA[tell me a few point]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[anybody don`t know aws ec2 and ovh?]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677095</link>
			<pubDate>Mon, 29 Jun 2020 20:58:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=304127">uni12</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677095</guid>
			<description><![CDATA[(my native language not english)<br />
<br />
i will open samp server.<br />
<br />
but i`m very disgust ddos<br />
<br />
i already use other ddos hosting but server people disconnect from my server<br />
<br />
if buy the aws ec2 with aws shield or ovh gameserver, they<br />
<br />
autometically protect my server from ddos?<br />
<br />
if not, how to do?]]></description>
			<content:encoded><![CDATA[(my native language not english)<br />
<br />
i will open samp server.<br />
<br />
but i`m very disgust ddos<br />
<br />
i already use other ddos hosting but server people disconnect from my server<br />
<br />
if buy the aws ec2 with aws shield or ovh gameserver, they<br />
<br />
autometically protect my server from ddos?<br />
<br />
if not, how to do?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[AJUDA]PC/ANDROID]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677028</link>
			<pubDate>Sat, 27 Jun 2020 20:44:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=304780">ViniBnT</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677028</guid>
			<description><![CDATA[Estou com uma GM que peguei uma base na intenet e fui editandp que falaram que suporta pc/android.. Mas quando vc entra com android nela o android atira mas nгo da dano em ninguem. Ja testei uns 10 APK e nada. Alguem pode me ajudar? O problema й na GM ou no APK ? OBS: PC ATIRA E TIRA DANO DE BOA]]></description>
			<content:encoded><![CDATA[Estou com uma GM que peguei uma base na intenet e fui editandp que falaram que suporta pc/android.. Mas quando vc entra com android nela o android atira mas nгo da dano em ninguem. Ja testei uns 10 APK e nada. Alguem pode me ajudar? O problema й na GM ou no APK ? OBS: PC ATIRA E TIRA DANO DE BOA]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[How to add Game mode to my server]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677013</link>
			<pubDate>Sat, 27 Jun 2020 10:07:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=352274">bringo</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677013</guid>
			<description><![CDATA[<font size="4">Hi guys first of all i have download grand larcy server and i wanna change it to eLg script but idk how i wanna help please with video and ty all</font> <img alt="" border="0" class="inlineimg" src="images/smilies/razz.gif" title="Tongue"/>]]></description>
			<content:encoded><![CDATA[<font size="4">Hi guys first of all i have download grand larcy server and i wanna change it to eLg script but idk how i wanna help please with video and ty all</font> <img alt="" border="0" class="inlineimg" src="images/smilies/razz.gif" title="Tongue"/>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Server offline]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676996</link>
			<pubDate>Fri, 26 Jun 2020 15:07:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=210074">Inspiron</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676996</guid>
			<description><![CDATA[I've set the permission of whole folder to 755 including all files and subdirectories. I'm stuck at<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 50px;
		text-align: left;
		overflow: auto"> [1] 1194
[samp@uhfgamin samp03]&#36; nohup: ignoring input and appending output to 'nohup.out'</pre>
</div>I followed <a href="https://shadowhosting.net/blog/install-samp-server-on-centos-7/" target="_blank">this</a> tutorial and also installed the extra needed binaries/packages that were needed.<br />
Its saving log in the server_log.txt and nohup.out also says server started. But its still offline on client.]]></description>
			<content:encoded><![CDATA[I've set the permission of whole folder to 755 including all files and subdirectories. I'm stuck at<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 50px;
		text-align: left;
		overflow: auto"> [1] 1194
[samp@uhfgamin samp03]&#36; nohup: ignoring input and appending output to 'nohup.out'</pre>
</div>I followed <a href="https://shadowhosting.net/blog/install-samp-server-on-centos-7/" target="_blank">this</a> tutorial and also installed the extra needed binaries/packages that were needed.<br />
Its saving log in the server_log.txt and nohup.out also says server started. But its still offline on client.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Server is crashing everyday!]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676984</link>
			<pubDate>Fri, 26 Jun 2020 02:19:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=263809">Pitstop</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676984</guid>
			<description><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">*** Error in `./samp03svr': free(): invalid pointer: 0x0a2a8aa8 ***
======= Backtrace: =========
/lib/libc.so.6(+0x7963d)[0xf74dd63d]
/lib/libstdc++.so.6(_ZdlPv+0x1f)[0xf76d5aef]
plugins/mysql.so(+0x323d3)[0xf73083d3]
plugins/mysql.so(+0x34333)[0xf730a333]
plugins/mysql.so(_ZNSt16_Sp_counted_baseILN9__gnu_cxx12_Lock_policyE2EE10_M_releaseEv+0x48)[0xf72f3b58]
plugins/mysql.so(+0x434d5)[0xf73194d5]
plugins/mysql.so(_ZNSt14_Function_base13_Base_managerISt5_BindIFSt7_Mem_fnIM6CQueryFvvEESt10shared_ptrIS3_EEEE10_M_managerERSt9_Any_dataRKSC_St18_Manager_operation+0x120)[0xf72f3900]
plugins/mysql.so(+0x1e50d)[0xf72f450d]
plugins/mysql.so(ProcessTick+0x24)[0xf731d8b4]
./samp03svr[0x80dd3d2]
./samp03svr[0x80b7bea]
./samp03svr[0x80b2d92]
/lib/libc.so.6(__libc_start_main+0xf3)[0xf747e2a3]
./samp03svr[0x804b4e1]
======= Memory map: ========
08048000-0809d000 r-xp 00000000 fd:01 386865 /home/samp03/samp03svr
0809d000-0809f000 rwxp 00055000 fd:01 386865 /home/samp03/samp03svr
0809f000-08161000 r-xp 00057000 fd:01 386865 /home/samp03/samp03svr
08161000-08162000 rwxp 00119000 fd:01 386865 /home/samp03/samp03svr
08162000-0818d000 r-xp 0011a000 fd:01 386865 /home/samp03/samp03svr
0818d000-081af000 rw-p 00145000 fd:01 386865 /home/samp03/samp03svr
081af000-081da000 rw-p 00000000 00:00 0
0875e000-0875f000 rw-p 00000000 00:00 0 [heap]
0875f000-08762000 rwxp 00000000 00:00 0 [heap]
08762000-0badd000 rw-p 00000000 00:00 0 [heap]
e2800000-e292f000 rw-p 00000000 00:00 0
e292f000-e2a00000 ---p 00000000 00:00 0
e2a00000-e2bc4000 rw-p 00000000 00:00 0
e2bc4000-e2c00000 ---p 00000000 00:00 0
e2c00000-e2d00000 rw-p 00000000 00:00 0
e2dff000-e2e00000 ---p 00000000 00:00 0
e2e00000-e3600000 rw-p 00000000 00:00 0
e3600000-e3700000 rw-p 00000000 00:00 0
e377e000-e37ff000 rw-p 00000000 00:00 0
e37ff000-e3800000 ---p 00000000 00:00 0
e3800000-e4000000 rw-p 00000000 00:00 0
e4000000-e4100000 rw-p 00000000 00:00 0
e417e000-e41ff000 rw-p 00000000 00:00 0
e41ff000-e4200000 ---p 00000000 00:00 0
e4200000-e4a00000 rw-p 00000000 00:00 0
e4a00000-e4a21000 rw-p 00000000 00:00 0
e4a21000-e4b00000 ---p 00000000 00:00 0
e4b54000-e4bd5000 rw-p 00000000 00:00 0
e4bd5000-e4bd6000 ---p 00000000 00:00 0
e4bd6000-f5a49000 rw-p 00000000 00:00 0
f5a49000-f5a4a000 ---p 00000000 00:00 0
f5a4a000-f624a000 rw-p 00000000 00:00 0
f624a000-f625f000 r-xp 00000000 fd:01 24905 /usr/lib/libresolv-2.17.so
f625f000-f6260000 r--p 00014000 fd:01 24905 /usr/lib/libresolv-2.17.so
f6260000-f6261000 rw-p 00015000 fd:01 24905 /usr/lib/libresolv-2.17.so
f6261000-f6263000 rw-p 00000000 00:00 0
f6263000-f6268000 r-xp 00000000 fd:01 24893 /usr/lib/libnss_dns-2.17.so
f6268000-f6269000 r--p 00004000 fd:01 24893 /usr/lib/libnss_dns-2.17.so
f6269000-f626a000 rw-p 00005000 fd:01 24893 /usr/lib/libnss_dns-2.17.so
f626a000-f6306000 rw-p 00000000 00:00 0
f6306000-f642f000 r-xp 00000000 fd:01 386127 /home/samp03/plugins/SKY.so
f642f000-f6430000 ---p 00129000 fd:01 386127 /home/samp03/plugins/SKY.so
f6430000-f6434000 r--p 00129000 fd:01 386127 /home/samp03/plugins/SKY.so
f6434000-f6435000 rw-p 0012d000 fd:01 386127 /home/samp03/plugins/SKY.so
f6435000-f64a6000 rw-p 00000000 00:00 0
f64a6000-f64b0000 r-xp 00000000 fd:01 386117 /home/samp03/plugins/whirlpool.so
f64b0000-f64b1000 r--p 00009000 fd:01 386117 /home/samp03/plugins/whirlpool.so
f64b1000-f64b2000 rw-p 0000a000 fd:01 386117 /home/samp03/plugins/whirlpool.so
f64b2000-f64bd000 r-xp 00000000 fd:01 24895 /usr/lib/libnss_files-2.17.so
f64bd000-f64be000 r--p 0000a000 fd:01 24895 /usr/lib/libnss_files-2.17.so
f64be000-f64bf000 rw-p 0000b000 fd:01 24895 /usr/lib/libnss_files-2.17.so
f64bf000-f64c5000 rw-p 00000000 00:00 0
f64c5000-f64c6000 ---p 00000000 00:00 0
f64c6000-f6cc6000 rw-p 00000000 00:00 0
f6cc6000-f71ce000 r-xp 00000000 fd:01 259347 /usr/lib/mysql/libmysqlclient.so.18.1.0
f71ce000-f71eb000 r--p 00507000 fd:01 259347 /usr/lib/mysql/libmysqlclient.so.18.1.0
f71eb000-f72ac000 rw-p 00524000 fd:01 259347 /usr/lib/mysql/libmysqlclient.so.18.1.0
f72ac000-f72b3000 rw-p 00000000 00:00 0
f72b3000-f72d3000 r-xp 00000000 fd:01 386133 /home/samp03/log-core.so
f72d3000-f72d4000 ---p 00020000 fd:01 386133 /home/samp03/log-core.so
f72d4000-f72d5000 r--p 00020000 fd:01 386133 /home/samp03/log-core.so
f72d5000-f72d6000 rw-p 00021000 fd:01 386133 /home/samp03/log-core.so
f72d6000-f7332000 r-xp 00000000 fd:01 389993 /home/samp03/plugins/mysql.so
f7332000-f7333000 ---p 0005c000 fd:01 389993 /home/samp03/plugins/mysql.so
f7333000-f7334000 r--p 0005c000 fd:01 389993 /home/samp03/plugins/mysql.so
f7334000-f7335000 rw-p 0005d000 fd:01 389993 /home/samp03/plugins/mysql.so
f7335000-f733c000 r-xp 00000000 fd:01 24907 /usr/lib/librt-2.17.so
f733c000-f733d000 r--p 00006000 fd:01 24907 /usr/lib/librt-2.17.so
f733d000-f733e000 rw-p 00007000 fd:01 24907 /usr/lib/librt-2.17.so
f7345000-f7408000 r-xp 00000000 fd:01 389988 /home/samp03/plugins/streamer.so
f7408000-f740a000 rw-p 000c2000 fd:01 389988 /home/samp03/plugins/streamer.so
f740a000-f740b000 rw-p 00000000 00:00 0
f740b000-f741b000 r-xp 00000000 fd:01 386118 /home/samp03/plugins/sscanf.so
f741b000-f741c000 rw-p 0000f000 fd:01 386118 /home/samp03/plugins/sscanf.so
f741c000-f745f000 r-xp 00000000 fd:01 389986 /home/samp03/plugins/crashdetect.so
f745f000-f7460000 r--p 00042000 fd:01 389986 /home/samp03/plugins/crashdetect.so
f7460000-f7461000 rw-p 00043000 fd:01 389986 /home/samp03/plugins/crashdetect.so</pre>
</div>Server is crashing twice in one day. NOT using YSF and not SKY plugins.<br />
What's the issue guys?<br />
<br />
I had some missing blocks of '%' bug in dialog but I fixed it.<br />
Are there more bugs in dialogs that might crash the server ? apart of the '%' symbol.<img alt="" border="0" class="inlineimg" src="images/smilies/confused.gif" title="Huh?"/>]]></description>
			<content:encoded><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">*** Error in `./samp03svr': free(): invalid pointer: 0x0a2a8aa8 ***
======= Backtrace: =========
/lib/libc.so.6(+0x7963d)[0xf74dd63d]
/lib/libstdc++.so.6(_ZdlPv+0x1f)[0xf76d5aef]
plugins/mysql.so(+0x323d3)[0xf73083d3]
plugins/mysql.so(+0x34333)[0xf730a333]
plugins/mysql.so(_ZNSt16_Sp_counted_baseILN9__gnu_cxx12_Lock_policyE2EE10_M_releaseEv+0x48)[0xf72f3b58]
plugins/mysql.so(+0x434d5)[0xf73194d5]
plugins/mysql.so(_ZNSt14_Function_base13_Base_managerISt5_BindIFSt7_Mem_fnIM6CQueryFvvEESt10shared_ptrIS3_EEEE10_M_managerERSt9_Any_dataRKSC_St18_Manager_operation+0x120)[0xf72f3900]
plugins/mysql.so(+0x1e50d)[0xf72f450d]
plugins/mysql.so(ProcessTick+0x24)[0xf731d8b4]
./samp03svr[0x80dd3d2]
./samp03svr[0x80b7bea]
./samp03svr[0x80b2d92]
/lib/libc.so.6(__libc_start_main+0xf3)[0xf747e2a3]
./samp03svr[0x804b4e1]
======= Memory map: ========
08048000-0809d000 r-xp 00000000 fd:01 386865 /home/samp03/samp03svr
0809d000-0809f000 rwxp 00055000 fd:01 386865 /home/samp03/samp03svr
0809f000-08161000 r-xp 00057000 fd:01 386865 /home/samp03/samp03svr
08161000-08162000 rwxp 00119000 fd:01 386865 /home/samp03/samp03svr
08162000-0818d000 r-xp 0011a000 fd:01 386865 /home/samp03/samp03svr
0818d000-081af000 rw-p 00145000 fd:01 386865 /home/samp03/samp03svr
081af000-081da000 rw-p 00000000 00:00 0
0875e000-0875f000 rw-p 00000000 00:00 0 [heap]
0875f000-08762000 rwxp 00000000 00:00 0 [heap]
08762000-0badd000 rw-p 00000000 00:00 0 [heap]
e2800000-e292f000 rw-p 00000000 00:00 0
e292f000-e2a00000 ---p 00000000 00:00 0
e2a00000-e2bc4000 rw-p 00000000 00:00 0
e2bc4000-e2c00000 ---p 00000000 00:00 0
e2c00000-e2d00000 rw-p 00000000 00:00 0
e2dff000-e2e00000 ---p 00000000 00:00 0
e2e00000-e3600000 rw-p 00000000 00:00 0
e3600000-e3700000 rw-p 00000000 00:00 0
e377e000-e37ff000 rw-p 00000000 00:00 0
e37ff000-e3800000 ---p 00000000 00:00 0
e3800000-e4000000 rw-p 00000000 00:00 0
e4000000-e4100000 rw-p 00000000 00:00 0
e417e000-e41ff000 rw-p 00000000 00:00 0
e41ff000-e4200000 ---p 00000000 00:00 0
e4200000-e4a00000 rw-p 00000000 00:00 0
e4a00000-e4a21000 rw-p 00000000 00:00 0
e4a21000-e4b00000 ---p 00000000 00:00 0
e4b54000-e4bd5000 rw-p 00000000 00:00 0
e4bd5000-e4bd6000 ---p 00000000 00:00 0
e4bd6000-f5a49000 rw-p 00000000 00:00 0
f5a49000-f5a4a000 ---p 00000000 00:00 0
f5a4a000-f624a000 rw-p 00000000 00:00 0
f624a000-f625f000 r-xp 00000000 fd:01 24905 /usr/lib/libresolv-2.17.so
f625f000-f6260000 r--p 00014000 fd:01 24905 /usr/lib/libresolv-2.17.so
f6260000-f6261000 rw-p 00015000 fd:01 24905 /usr/lib/libresolv-2.17.so
f6261000-f6263000 rw-p 00000000 00:00 0
f6263000-f6268000 r-xp 00000000 fd:01 24893 /usr/lib/libnss_dns-2.17.so
f6268000-f6269000 r--p 00004000 fd:01 24893 /usr/lib/libnss_dns-2.17.so
f6269000-f626a000 rw-p 00005000 fd:01 24893 /usr/lib/libnss_dns-2.17.so
f626a000-f6306000 rw-p 00000000 00:00 0
f6306000-f642f000 r-xp 00000000 fd:01 386127 /home/samp03/plugins/SKY.so
f642f000-f6430000 ---p 00129000 fd:01 386127 /home/samp03/plugins/SKY.so
f6430000-f6434000 r--p 00129000 fd:01 386127 /home/samp03/plugins/SKY.so
f6434000-f6435000 rw-p 0012d000 fd:01 386127 /home/samp03/plugins/SKY.so
f6435000-f64a6000 rw-p 00000000 00:00 0
f64a6000-f64b0000 r-xp 00000000 fd:01 386117 /home/samp03/plugins/whirlpool.so
f64b0000-f64b1000 r--p 00009000 fd:01 386117 /home/samp03/plugins/whirlpool.so
f64b1000-f64b2000 rw-p 0000a000 fd:01 386117 /home/samp03/plugins/whirlpool.so
f64b2000-f64bd000 r-xp 00000000 fd:01 24895 /usr/lib/libnss_files-2.17.so
f64bd000-f64be000 r--p 0000a000 fd:01 24895 /usr/lib/libnss_files-2.17.so
f64be000-f64bf000 rw-p 0000b000 fd:01 24895 /usr/lib/libnss_files-2.17.so
f64bf000-f64c5000 rw-p 00000000 00:00 0
f64c5000-f64c6000 ---p 00000000 00:00 0
f64c6000-f6cc6000 rw-p 00000000 00:00 0
f6cc6000-f71ce000 r-xp 00000000 fd:01 259347 /usr/lib/mysql/libmysqlclient.so.18.1.0
f71ce000-f71eb000 r--p 00507000 fd:01 259347 /usr/lib/mysql/libmysqlclient.so.18.1.0
f71eb000-f72ac000 rw-p 00524000 fd:01 259347 /usr/lib/mysql/libmysqlclient.so.18.1.0
f72ac000-f72b3000 rw-p 00000000 00:00 0
f72b3000-f72d3000 r-xp 00000000 fd:01 386133 /home/samp03/log-core.so
f72d3000-f72d4000 ---p 00020000 fd:01 386133 /home/samp03/log-core.so
f72d4000-f72d5000 r--p 00020000 fd:01 386133 /home/samp03/log-core.so
f72d5000-f72d6000 rw-p 00021000 fd:01 386133 /home/samp03/log-core.so
f72d6000-f7332000 r-xp 00000000 fd:01 389993 /home/samp03/plugins/mysql.so
f7332000-f7333000 ---p 0005c000 fd:01 389993 /home/samp03/plugins/mysql.so
f7333000-f7334000 r--p 0005c000 fd:01 389993 /home/samp03/plugins/mysql.so
f7334000-f7335000 rw-p 0005d000 fd:01 389993 /home/samp03/plugins/mysql.so
f7335000-f733c000 r-xp 00000000 fd:01 24907 /usr/lib/librt-2.17.so
f733c000-f733d000 r--p 00006000 fd:01 24907 /usr/lib/librt-2.17.so
f733d000-f733e000 rw-p 00007000 fd:01 24907 /usr/lib/librt-2.17.so
f7345000-f7408000 r-xp 00000000 fd:01 389988 /home/samp03/plugins/streamer.so
f7408000-f740a000 rw-p 000c2000 fd:01 389988 /home/samp03/plugins/streamer.so
f740a000-f740b000 rw-p 00000000 00:00 0
f740b000-f741b000 r-xp 00000000 fd:01 386118 /home/samp03/plugins/sscanf.so
f741b000-f741c000 rw-p 0000f000 fd:01 386118 /home/samp03/plugins/sscanf.so
f741c000-f745f000 r-xp 00000000 fd:01 389986 /home/samp03/plugins/crashdetect.so
f745f000-f7460000 r--p 00042000 fd:01 389986 /home/samp03/plugins/crashdetect.so
f7460000-f7461000 rw-p 00043000 fd:01 389986 /home/samp03/plugins/crashdetect.so</pre>
</div>Server is crashing twice in one day. NOT using YSF and not SKY plugins.<br />
What's the issue guys?<br />
<br />
I had some missing blocks of '%' bug in dialog but I fixed it.<br />
Are there more bugs in dialogs that might crash the server ? apart of the '%' symbol.<img alt="" border="0" class="inlineimg" src="images/smilies/confused.gif" title="Huh?"/>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[the number pings of player can affect server pings?]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676945</link>
			<pubDate>Wed, 24 Jun 2020 19:35:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=111269">haim986</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676945</guid>
			<description><![CDATA[hey,<br />
i have simple question:<br />
example: i have server and in my server there are 50 players that play, to each of players the are 450 pings !<br />
in another server: if to each of players the are 50 pings, the pings of the server will be less than the first server or it doesnt affect?<br />
thank you !]]></description>
			<content:encoded><![CDATA[hey,<br />
i have simple question:<br />
example: i have server and in my server there are 50 players that play, to each of players the are 450 pings !<br />
in another server: if to each of players the are 50 pings, the pings of the server will be less than the first server or it doesnt affect?<br />
thank you !]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Strange Backtrace error]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676843</link>
			<pubDate>Sun, 21 Jun 2020 02:22:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=163732">Xlithan</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676843</guid>
			<description><![CDATA[I've never ever seen this error before in SAMP. Just recently it's been coming up when I replaced some Includes.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 162px;
		text-align: left;
		overflow: auto">[03:21:29] [debug] Run time error 6: "Invalid instruction"
[03:21:29] [debug]  Unknown opcode 0x7800 at address 0xFFFFFFFF
[03:21:29] [debug] AMX backtrace:
[03:21:29] [debug] #0 ???????? in ?? () from gamemode.amx
[03:21:29] [debug] #1 native DestroyVehicle () [00471490] from samp-server.exe
[03:21:29] [debug] #2 000aa798 in ?? () from gamemode.amx
[03:21:29] [debug] #3 00211980 in public cmd_dvrespawn () from gamemode.amx
[03:21:29] [debug] #4 native CallLocalFunction () [004743b0] from samp-server.exe
[03:21:29] [debug] #5 00006ac8 in public OnPlayerCommandText () from gamemode.amx</pre>
</div>]]></description>
			<content:encoded><![CDATA[I've never ever seen this error before in SAMP. Just recently it's been coming up when I replaced some Includes.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 162px;
		text-align: left;
		overflow: auto">[03:21:29] [debug] Run time error 6: "Invalid instruction"
[03:21:29] [debug]  Unknown opcode 0x7800 at address 0xFFFFFFFF
[03:21:29] [debug] AMX backtrace:
[03:21:29] [debug] #0 ???????? in ?? () from gamemode.amx
[03:21:29] [debug] #1 native DestroyVehicle () [00471490] from samp-server.exe
[03:21:29] [debug] #2 000aa798 in ?? () from gamemode.amx
[03:21:29] [debug] #3 00211980 in public cmd_dvrespawn () from gamemode.amx
[03:21:29] [debug] #4 native CallLocalFunction () [004743b0] from samp-server.exe
[03:21:29] [debug] #5 00006ac8 in public OnPlayerCommandText () from gamemode.amx</pre>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[New generation roleplay - tutorial bug]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676828</link>
			<pubDate>Sat, 20 Jun 2020 14:52:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=250175">Kursed</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676828</guid>
			<description><![CDATA[it registers my account but as soon as i enter my password it shows me tutorial again<br />
<img alt="" border="0" src="https://i.ibb.co/t83tCQq/Capture.png"/><br />
<img alt="" border="0" src="https://i.ibb.co/dQpBL2Q/Capture1.png"/>]]></description>
			<content:encoded><![CDATA[it registers my account but as soon as i enter my password it shows me tutorial again<br />
<img alt="" border="0" src="https://i.ibb.co/t83tCQq/Capture.png"/><br />
<img alt="" border="0" src="https://i.ibb.co/dQpBL2Q/Capture1.png"/>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[A little help with sscanf]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676737</link>
			<pubDate>Wed, 17 Jun 2020 20:45:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=145183">JR_Junior</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676737</guid>
			<description><![CDATA[Hello.<br />
I have a "problem" using multiple text string in sscanf params:<br />
<br />
The cmd:<br />
<div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB"> </span><span style="color: #007700">/</span><span style="color: #0000BB">sendinfo </span><span style="color: #007700">[</span><span style="color: #0000BB">JR_Junior</span><span style="color: #007700">] [</span><span style="color: #0000BB">Nick_Name</span><span style="color: #007700">] [</span><span style="color: #0000BB">No reason</span><span style="color: #007700">] [</span><span style="color: #0000BB">No details</span><span style="color: #007700">] 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 178px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">sendinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    new </span><span style="color: #0000BB">admin</span><span style="color: #007700">[</span><span style="color: #0000BB">25</span><span style="color: #007700">],</span><span style="color: #0000BB">account</span><span style="color: #007700">[</span><span style="color: #0000BB">25</span><span style="color: #007700">],</span><span style="color: #0000BB">reason</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">],</span><span style="color: #0000BB">details</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];

<br/>    if(!</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">, </span><span style="color: #DD0000">"s[25]s[25]s[128]s[128]"</span><span style="color: #007700">,</span><span style="color: #0000BB">admin</span><span style="color: #007700">,</span><span style="color: #0000BB">account</span><span style="color: #007700">,</span><span style="color: #0000BB">reason</span><span style="color: #007700">,</span><span style="color: #0000BB">details</span><span style="color: #007700">))
<br/>    {
<br/>        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s | %s | %s | %s"</span><span style="color: #007700">,</span><span style="color: #0000BB">admin</span><span style="color: #007700">,</span><span style="color: #0000BB">account</span><span style="color: #007700">,</span><span style="color: #0000BB">reason</span><span style="color: #007700">,</span><span style="color: #0000BB">details</span><span style="color: #007700">);
<br/>    }
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>The result is:<br />
<div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB">JR_Junior </span><span style="color: #007700">| </span><span style="color: #0000BB">Nick_Name </span><span style="color: #007700">| </span><span style="color: #0000BB">No </span><span style="color: #007700">| </span><span style="color: #0000BB">reason No details 
<br/></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Any solution?<br />
Thank you!]]></description>
			<content:encoded><![CDATA[Hello.<br />
I have a "problem" using multiple text string in sscanf params:<br />
<br />
The cmd:<br />
<div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB"> </span><span style="color: #007700">/</span><span style="color: #0000BB">sendinfo </span><span style="color: #007700">[</span><span style="color: #0000BB">JR_Junior</span><span style="color: #007700">] [</span><span style="color: #0000BB">Nick_Name</span><span style="color: #007700">] [</span><span style="color: #0000BB">No reason</span><span style="color: #007700">] [</span><span style="color: #0000BB">No details</span><span style="color: #007700">] 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 178px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">sendinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    new </span><span style="color: #0000BB">admin</span><span style="color: #007700">[</span><span style="color: #0000BB">25</span><span style="color: #007700">],</span><span style="color: #0000BB">account</span><span style="color: #007700">[</span><span style="color: #0000BB">25</span><span style="color: #007700">],</span><span style="color: #0000BB">reason</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">],</span><span style="color: #0000BB">details</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];

<br/>    if(!</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">, </span><span style="color: #DD0000">"s[25]s[25]s[128]s[128]"</span><span style="color: #007700">,</span><span style="color: #0000BB">admin</span><span style="color: #007700">,</span><span style="color: #0000BB">account</span><span style="color: #007700">,</span><span style="color: #0000BB">reason</span><span style="color: #007700">,</span><span style="color: #0000BB">details</span><span style="color: #007700">))
<br/>    {
<br/>        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s | %s | %s | %s"</span><span style="color: #007700">,</span><span style="color: #0000BB">admin</span><span style="color: #007700">,</span><span style="color: #0000BB">account</span><span style="color: #007700">,</span><span style="color: #0000BB">reason</span><span style="color: #007700">,</span><span style="color: #0000BB">details</span><span style="color: #007700">);
<br/>    }
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>The result is:<br />
<div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB">JR_Junior </span><span style="color: #007700">| </span><span style="color: #0000BB">Nick_Name </span><span style="color: #007700">| </span><span style="color: #0000BB">No </span><span style="color: #007700">| </span><span style="color: #0000BB">reason No details 
<br/></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Any solution?<br />
Thank you!]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[EC2 Free tier - PacketLoss]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676668</link>
			<pubDate>Tue, 16 Jun 2020 03:06:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=175120">SuperSpeed52</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676668</guid>
			<description><![CDATA[Hello there, I've been facing some issues regarding packet-loss in my server hosted on a humble free tier EC2 instance, with Ubuntu 18 with no GUI, t2.micro size which presumably has a single core Xeon and 1gb ram, and the gigantic amazon network infrastructure.<br />
<br />
The context here is that I want to host some samp server's with a well known and tested A/D gamemode for my friends' private matches, its been alright with 3 servers running in different ports.<br />
<br />
The only problem I'm facing is that the packet-loss function, shortly after going ingame, starts reading values ranging 0.2 ~ 1.0 for myself, and steadily increasing to 2 or 3% for the players known to lag.<br />
<br />
I didn't code the gamemode myself, but in my community it is pretty known that some servers with the same opensource gamemode are pretty stable in that regard, and the packetloss function reads 0.0% for me 95% of the time.<br />
<br />
I don't think its bandwidth related, cpu usage is just as low as it can get due to the nature of the gamemode, and ram usage is never above 40%, <br />
<br />
Any help is appreciated, thanks!!]]></description>
			<content:encoded><![CDATA[Hello there, I've been facing some issues regarding packet-loss in my server hosted on a humble free tier EC2 instance, with Ubuntu 18 with no GUI, t2.micro size which presumably has a single core Xeon and 1gb ram, and the gigantic amazon network infrastructure.<br />
<br />
The context here is that I want to host some samp server's with a well known and tested A/D gamemode for my friends' private matches, its been alright with 3 servers running in different ports.<br />
<br />
The only problem I'm facing is that the packet-loss function, shortly after going ingame, starts reading values ranging 0.2 ~ 1.0 for myself, and steadily increasing to 2 or 3% for the players known to lag.<br />
<br />
I didn't code the gamemode myself, but in my community it is pretty known that some servers with the same opensource gamemode are pretty stable in that regard, and the packetloss function reads 0.0% for me 95% of the time.<br />
<br />
I don't think its bandwidth related, cpu usage is just as low as it can get due to the nature of the gamemode, and ram usage is never above 40%, <br />
<br />
Any help is appreciated, thanks!!]]></content:encoded>
		</item>
	</channel>
</rss>