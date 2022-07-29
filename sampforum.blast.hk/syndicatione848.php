<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[SA-MP Forums Archive - News and Updates]]></title>
	<subtitle type="html"><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></subtitle>
	<link rel="self" href="https://sampforum.blast.hk/syndication.php"/>
	<id>https://sampforum.blast.hk/</id>
	<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/"/>
	<updated>2022-07-28T20:36:10Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2019-11-22T08:42:00Z</published>
		<updated>2019-11-22T08:42:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=670757" />
		<id>https://sampforum.blast.hk/showthread.php?tid=670757</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3.7 R4 client update (strongly recommended)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=670757"><![CDATA[<b>An important client update (SA-MP 0.3.7-R4) is now available on the <a href="http://www.sa-mp.com/download.php" target="_blank">Download Page</a>.</b><br />
<br />
&#x26;t There is an exploit in the menu system. A malicious server operator could craft a custom packet which leads to a buffer overflow on the client.<br />
&#x26;t Adds a fix which stops floating checkpoints on objects and vehicle exiting not working on objects while the car is upside down.<br />
&#x26;t Changes the opcode exception handling for vehicle components so it displays the component ID which caused the exception.<br />
<br />
This update fixes the menu system exploit. 0.3.7 server operators should check the client version and recommend players update if they're not using the 0.3.7-R4 version.<br />
<br />
Since this exploit effects clients going back to SA-MP 0.2.0, server lists for all previous versions have been shut down. Previous versions of the SA-MP client should no longer be used.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2018-12-06T12:51:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=661491" />
		<id>https://sampforum.blast.hk/showthread.php?tid=661491</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3.7 R3 client update (optional)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=661491"><![CDATA[<font size="4"><b>This is an optional version of the SA-MP 0.3.7 client containing various fixes.</b></font><br />
<br />
<u>Fixes:</u><br />
<br />
- The game's radar should scale better in widescreen resolutions. No more 'egg of finding'<br />
- The sa-mp.cfg option nohudscale=1 and /hudscalefix client command can be used to toggle the radar scale fix<br />
- A bug introduced in 0.3.7-R2 PlayerPlaySound with sound ID 0 is fixed<br />
- Actors should be able to rotate again<br />
- The game timer wrapping could bug out functions like InterpolateCameraPos<br />
- More checks in the client for bad data (unoccupied sync, character aiming up/down)<br />
<br />
<u>0.3.7-R3 Client</u><br />
<a href="http://files.sa-mp.com/sa-mp-0.3.7-R3-1-install.exe" target="_blank">SA-MP 0.3.7-R3 Client Installer</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2017-09-24T16:58:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=642085" />
		<id>https://sampforum.blast.hk/showthread.php?tid=642085</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3.7 R2 client update (optional)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=642085"><![CDATA[<font size="4"><b>An optional client update SA-MP 0.3.7-R2 is now available on the <a href="http://www.sa-mp.com/download.php" target="_blank">Download Page</a>.</b></font><br />
<br />
The 0.3.7-R2 client addresses a problem with the server browser where it was vulnerable to an IP spoofing attack. Servers could send fake information coming from other servers if they could guess when the client was querying them.<br />
<br />
<b><font size="2">Notes for server owners:</font></b><br />
<br />
The SA-MP query protocol is changed. If you are filtering the 'Port' section of the query packet with a firewall, you should remove this filter.<br />
<br />
<font size="2"><b>Changes to <a href="https://sampwiki.blast.hk/wiki/PlayerPlaySound" target="_blank">PlayerPlaySound</a>.</b></font><br />
<br />
There have been some changes to the way client's handle PlayerPlaySound. Sound ID 1 can be used disable the interior 0 ambience track (wind noise) to create fake interiors. The game's ambience system is used for all sounds below ID 1000, which means many ambience tracks that previously didn't work should now work. Sound ID 0 can be used as normal to stop the current track or return the game's normal outdoor ambience.<br />
<br />
Please check back for future updates.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2017-09-05T12:12:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=640644" />
		<id>https://sampforum.blast.hk/showthread.php?tid=640644</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3.7 R2-2 server update]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=640644"><![CDATA[<u><b>This update is for SA-MP server owners only</b></u><br />
<br />
<b><u>Update 0.3.7 R2-2:</u></b><br />
<br />
- Changes the query flood control to deal with different query types independently.<br />
- Connection cookie logging is disabled by default.<br />
<br />
<b><u>Downloads:</u></b><br />
<br />
Please review the <a href="http://www.sa-mp.com/service_agreement.txt" target="_blank">SA-MP Services Agreement </a> if you wish to run a public SA-MP server.<br />
<br />
<u>SA-MP 0.3.7 R2-2 Linux Server:</u> <a href="http://files.sa-mp.com/samp037svr_R2-2-1.tar.gz" target="_blank">http://files.sa-mp.com/samp037svr_R2-2-1.tar.gz</a><br />
<u>SA-MP 0.3.7 R2-2 Windows Server:</u> <a href="http://files.sa-mp.com/samp037_svr_R2-2-1_win32.zip" target="_blank">http://files.sa-mp.com/samp037_svr_R2-2-1_win32.zip</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2015-07-11T20:00:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=581259" />
		<id>https://sampforum.blast.hk/showthread.php?tid=581259</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3.7 R2-1 server update]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=581259"><![CDATA[<u><b>This update is for SA-MP server owners only</b></u><br />
<br />
- Adds protection against hackers who spam OnPlayerConnect messages.<br />
- Weapon ID checking after OnPlayerWeaponShot in case the script doesn't filter it.<br />
- Actors now default to being invulnerable (this might be needed later for a bandaid rotation fix in the client).<br />
- Adds console variable 'conncookies' (int) to disable the 0.3.7 connection cookie system.<br />
- Adds console variable 'cookielogging' to disable logging of connection cookies requested by newly connecting players.<br />
- Adds SHA256_PassHash() function for hashing player passwords.<br />
<br />
SQLite stuff:<br />
- The sqlite functions db_open and db_query now return indexes (starting at 1) instead of memory handles. That means the server tracks the memory handles internally and won't crash if invalid handles are used.<br />
- Several extra sqlite db_* functions have been added. Please see the a_sampdb.inc for a full list.<br />
- Adds %q to format(). %q is the same as %s although the input will first be passed through sqlite's string escaping function.<br />
- Adds console variable 'db_logging'. Logs sqlite db_* function errors to the main server_log.<br />
- Adds console variable 'db_log_queries'. Logs all sqlite db_query() calls including the query string.<br />
<br />
Server variable system (SVars):<br />
- The SVar system is the same as the <a href="https://sampwiki.blast.hk/wiki/Per-player_variable_system" target="_blank">PVars</a>, although the variables created are server-wide, not attached to any playerid, and persist through gamemode changes.<br />
<br />
The pawn functions intended to read console/config variables (GetServerVarAs*) have been deprecated due to a naming conflict with the SVar system. These functions will still work for the time being. Moving forward it's recommended you rename these functions as listed below:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">native GetConsoleVarAsString(const varname[], buffer[], len);
native GetConsoleVarAsInt(const varname[]);
native GetConsoleVarAsBool(const varname[]);</pre>
</div><b><u>Update 0.3.7 R2-1:</u></b><br />
<br />
- Adds null value checks to sqlite db_get*. These functions would crash on invalid rows or field names.<br />
- Updates SHA256_PassHash() sha256 implementation to fix a padding problem.<br />
- Fixes an index problem with PVars and SVars where *GetUpperIndex would return 1 when all vars had been deleted.<br />
<br />
<b><u>Downloads:</u></b><br />
<br />
Please review the <a href="http://www.sa-mp.com/service_agreement.txt" target="_blank">SA-MP Services Agreement </a> if you wish to run a public SA-MP server.<br />
<br />
<u>SA-MP 0.3.7 R2-1 Linux Server:</u> <a href="http://files.sa-mp.com/samp037svr_R2-1.tar.gz" target="_blank">http://files.sa-mp.com/samp037svr_R2-1.tar.gz</a><br />
<u>SA-MP 0.3.7 R2-1 Windows Server:</u> <a href="http://files.sa-mp.com/samp037_svr_R2-1-1_win32.zip" target="_blank">http://files.sa-mp.com/samp037_svr_R2-1-1_win32.zip</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2015-05-01T04:08:00Z</published>
		<updated>2015-05-01T04:08:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=572700" />
		<id>https://sampforum.blast.hk/showthread.php?tid=572700</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3.7 is released!]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=572700"><![CDATA[SA-MP 0.3.7 is released! You can find it on the <a href="http://www.sa-mp.com/download.php" target="_blank">Download Page</a>.<br />
<br />
<font color="Red"><b>SA-MP 0.3.7 Updates</b></font><br />
<br />
- Over 500 new object IDs added, including stunt objects and land objects. <br />
- Interface font size changing.<br />
- Some new variations of the San Andreas cop skins.<br />
- Server control of the car doors and windows.<br />
- The ability to add sirens for unmarked cop cars.<br />
- A simple static actor system to more easily create actor NPCs for shops.<br />
- Many bug fixes and new scripting features.<br />
<br />
Special thanks to Matite and GamerX server for contributing the new the object IDs. Thanks to everyone who tested the new version while it was in testing. <br />
<br />
We hope you enjoy the new version. Please check back for any updates.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2015-01-17T08:34:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=558447" />
		<id>https://sampforum.blast.hk/showthread.php?tid=558447</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3.7 in development]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=558447"><![CDATA[I'm pleased to announce a new version of SA-MP, version 0.3.7. While we're still not ready to make the jump to 0.4, it's clear an update is needed to address some of the existing problems in 0.3z.<br />
<br />
<img alt="" border="0" src="http://www.sa-mp.com/stuff/037shots/sa-mp-139-2.png"/><br />
<br />
Here are some of the new features coming in SA-MP 0.3.7. You can expect more things to be added and shown as we get closer to release.<br />
<br />
<font size="4"><b>Font size changing</b></font><br />
<br />
You can now change the font size used by the SA-MP chat box and UIs. Although not officially supported, you can also change the font face and weight.<br />
<br />
<img alt="" border="0" src="http://www.sa-mp.com/stuff/037shots/sa-mp-137.png"/><br />
<br />
<font size="4"><b>Other features and fixes</b></font><br />
<br />
Fixes camera collisions on objects and vehicles that are outside the normal world map.<br />
The server can disable collisions between driven vehicles for racing and stunt tracks.<br />
Improvements to the editor's test mode.<br />
Connection cookie system to prevent spoofed connection flooding.<br />
Fixes for vertex lighting and UV animation on objects that have a large draw distance.<br />
Fixed player weapon ID shot desync during a weapon change.<br />
The scoreboard is bigger if you run the game at higher resolutions.<br />
Fixes for various client crashes in 0.3z.<br />
<br />
<font size="4"><b>New objects</b></font><br />
<br />
Matite from GamerX server jumped aboard again for SA-MP 0.3.7. There are over 240 new objects added, featuring everything from hats, to fruits, to new stunting areas. Below are just of a few of the new objects added.<br />
<br />
<font size="4"><b>Modular land objects</b></font><br />
<br />
These can be used as a base to build custom maps and islands.<br />
<br />
<img alt="" border="0" src="http://www.sa-mp.com/stuff/037shots/sa-mp-136.png"/><br />
<br />
<font size="4"><b>New enterable building LS Beachside</b></font><br />
<br />
<img alt="" border="0" src="http://www.sa-mp.com/stuff/037shots/LSBeachSide-1b.png"/><br />
<br />
<img alt="" border="0" src="http://www.sa-mp.com/stuff/037shots/LSBeachSideInside-5.png"/><br />
<br />
<img alt="" border="0" src="http://www.sa-mp.com/stuff/037shots/LSBeachSideInside-9.png"/><br />
<br />
<font size="4"><b>New stunting objects including half tubes and a mapped island</b></font><br />
<br />
These tubes are reusable and come in 3 different sizes.<br />
<br />
<img alt="" border="0" src="http://www.sa-mp.com/stuff/037shots/sa-mp-034.png"/><br />
<br />
<img alt="" border="0" src="http://www.sa-mp.com/stuff/037shots/sa-mp-072.png"/><br />
<br />
<img alt="" border="0" src="http://www.sa-mp.com/stuff/037shots/sa-mp-085.png"/><br />
<br />
More screenshots of the stunt island <a href="http://www.sa-mp.com/stuff/037shots/tubesrc.html" target="_blank">here</a>.<br />
<br />
<font size="4"><b>A stage, microphone, and instruments</b></font><br />
<br />
<img alt="" border="0" src="http://www.sa-mp.com/stuff/037shots/StageAndInstruments-4.png"/><br />
<br />
... and much more. Coming soon.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2014-11-02T16:10:00Z</published>
		<updated>2014-11-02T16:10:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=544585" />
		<id>https://sampforum.blast.hk/showthread.php?tid=544585</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3z R2 client update (optional)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=544585"><![CDATA[SA-MP 0.3z-R2 client update is available on the <a href="http://www.sa-mp.com/download.php" target="_blank">Download Page</a>. <br />
<br />
- Fixes player health bar rendering on Intel graphics chips.<br />
- Fixes a potential client freeze/hang if a remote player shot themselves.<br />
<br />
Please check back for any further updates to the SA-MP client/server.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2014-08-12T03:08:00Z</published>
		<updated>2014-08-12T03:08:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=531302" />
		<id>https://sampforum.blast.hk/showthread.php?tid=531302</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3z R4 server update]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=531302"><![CDATA[<u>This update is for SA-MP server owners only</u><br />
<br />
<font color="Red"><b>If updating from an existing 0.3z server:</b></font> you can update simply by replacing the 'samp03svr' file on linux, or 'samp-server.exe' file on Windows, found in the 0.3z server download package.<br />
<br />
<font color="Red"><b>Important:</b></font> If your script uses the OnUnoccupiedVehicleUpdate callback, you will need to recompile your scripts with the latest pawn includes to use this server update.<br />
<br />
<font size="3"><b>SA-MP 0.3z R4 server</b></font><br />
<br />
We received some reports that players might be able to use the vehicle trailer syncing in order to move vehicles around on the server without being in control of them.<br />
<br />
- Additional sanity checks have been added to the trailer validation on the server.<br />
- A new callback is added to identify players updating their vehicle's trailers:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Код:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:71px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">public</span> OnTrailerUpdate<span style="color: #000000;">(</span>playerid, vehicleid<span style="color: #000000;">)</span>; <br/><span style="color: #228822;">// playerid is the player who sent a trailer update. vehicleid is the trailer being updated.</span><br/><span style="color: #228822;">// Returning 0 to this function will stop the trailer update being sent to other players on the server. The trailer's position will still be updated internally on the server.</span></div></div></pre>
</div>
- The OnUnoccupiedVehicleUpdate is updated to include the new velocity of the vehicle updated.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Код:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:55px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">public</span> OnUnoccupiedVehicleUpdate<span style="color: #000000;">(</span>vehicleid, playerid, passenger_seat, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>new_x, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>new_y, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>new_z, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>vel_x, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>vel_y, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>vel_z<span style="color: #000000;">)</span>;<br/><span style="color: #228822;">// If your script uses this callback, you will need to update this definition and recompile your scripts to use the 0.3z-R4 server.</span></div></div></pre>
</div>
- Removes script HTTP debug messages left in the 0.3z-R3 server.<br />
<br />
Downloads:<br />
<br />
SA-MP 0.3z R4 Linux Server: <a href="http://files.sa-mp.com/samp03zsvr_R4.tar.gz" target="_blank">http://files.sa-mp.com/samp03zsvr_R4.tar.gz</a><br />
SA-MP 0.3z R4 Windows Server: <a href="http://files.sa-mp.com/samp03z_svr_R4_win32.zip" target="_blank">http://files.sa-mp.com/samp03z_svr_R4_win32.zip</a><br />
SA-MP 0.3z R4 Linux Server (1000 max player): <a href="http://files.sa-mp.com/samp03zsvr_R4-1000p.tar.gz" target="_blank">http://files.sa-mp.com/samp03zsvr_R4-1000p.tar.gz</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2014-07-05T01:34:00Z</published>
		<updated>2014-07-05T01:34:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=524049" />
		<id>https://sampforum.blast.hk/showthread.php?tid=524049</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3z R3 server update]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=524049"><![CDATA[<u>This update is for SA-MP server owners only</u><br />
<br />
<font color="Red"><b>If updating from an existing 0.3z server:</b></font> you can update simply by replacing the 'samp03svr' file on linux, or 'samp-server.exe' file on Windows, found in the 0.3z server download package.<br />
<br />
<font size="3"><b>SA-MP 0.3z R3 server</b></font><br />
<br />
- Fixes: Server crashes caused by network statistics functions (GetPlayerNetworkStats, NetStats_*).<br />
- Fixes: Invalid packet IDs sent by fake clients may cause a memory leak.<br />
- Adds: 'minconnectiontime (time in milliseconds)' server variable to control the rate which the server accepts connections from newly connecting players. Example: minconnectiontime 1000, the server will accept a new connection every 1 second. If the server does not accept the connection, the connection request will be ignored. It is not recommended that you use this variable unless your server is under a connection flood attack.<br />
<br />
<br />
Downloads:<br />
<br />
SA-MP 0.3z R3 Linux Server: <a href="http://files.sa-mp.com/samp03zsvr_R3.tar.gz" target="_blank">http://files.sa-mp.com/samp03zsvr_R3.tar.gz</a><br />
SA-MP 0.3z R3 Windows Server: <a href="http://files.sa-mp.com/samp03z_svr_R3_win32.zip" target="_blank">http://files.sa-mp.com/samp03z_svr_R3_win32.zip</a><br />
SA-MP 0.3z R3 Linux Server (1000 max player): <a href="http://files.sa-mp.com/samp03zsvr_R3-1000p.tar.gz" target="_blank">http://files.sa-mp.com/samp03zsvr_R3-1000p.tar.gz</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2014-04-12T10:20:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=506214" />
		<id>https://sampforum.blast.hk/showthread.php?tid=506214</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3z R2-2 server update]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=506214"><![CDATA[<u>This update is for SA-MP server owners only</u><br />
<br />
<font color="Red"><b>If updating from an existing 0.3z server:</b></font> you can update simply by replacing the 'samp03svr' file on linux, or 'samp-server.exe' file on Windows, found in the 0.3z server download package.<br />
<br />
<font size="3"><b>SA-MP 0.3z R2-1 server</b></font><br />
<br />
- Fix: Specially crafted tools could attack the server's lower level networking layer, causing the server to hang and drop players.<br />
<br />
<font size="3"><b>SA-MP 0.3z R2-2 server</b></font><br />
<br />
- The default 'ackslimit' is raised from 1000 to 3000. Some servers had problems with players being erroneously kicked with an 'ackslimit' of 1000.<br />
<br />
- Adds OnIncomingConnection pawn callback. This is a notification when an IP address attempts a connection to the server.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:39px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">forward</span> OnIncomingConnection<span style="color: #000000;">(</span>playerid, ip_address<span style="color: #000000;">[</span><span style="color: #000000;">]</span>, port<span style="color: #000000;">)</span>;</div></div></pre>
</div>- Adds the following pawn natives:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:87px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">native</span> BlockIpAddress<span style="color: #000000;">(</span>ip_address<span style="color: #000000;">[</span><span style="color: #000000;">]</span>, timems<span style="color: #000000;">)</span>; <span style="color: #228822;">// blocks an IP address from further communication (wildcards allowed)</span><br/><span style="color: #2222BB;">native</span> UnBlockIpAddress<span style="color: #000000;">(</span>ip_address<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span>; <span style="color: #228822;">// IP unblock</span><br/><span style="color: #2222BB;">native</span> SendDeathMessageToPlayer<span style="color: #000000;">(</span>playerid, killer, killee, weapon<span style="color: #000000;">)</span>;<br/><span style="color: #2222BB;">native</span> CreateExplosionForPlayer<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>X, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>Y, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>Z, type, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>Radius<span style="color: #000000;">)</span>;</div></div></pre>
</div>
- Removes the Packet Modified lines from the server log.<br />
- [death] [kill] [nick] messages won't be written to the server log if 'chatlogging' is 0.<br />
<br />
Downloads:<br />
<br />
SA-MP 0.3z R2-2 Linux Server: <a href="http://files.sa-mp.com/samp03zsvr_R2-2.tar.gz" target="_blank">http://files.sa-mp.com/samp03zsvr_R2-2.tar.gz</a><br />
SA-MP 0.3z R2-2 Windows Server: <a href="http://files.sa-mp.com/samp03z_svr_R2-2_win32.zip" target="_blank">http://files.sa-mp.com/samp03z_svr_R2-2_win32.zip</a><br />
SA-MP 0.3z R2-2 Linux Server (1000 max player): <a href="http://files.sa-mp.com/samp03zsvr_R2-2-1000p.tar.gz" target="_blank">http://files.sa-mp.com/samp03zsvr_R2-2-1000p.tar.gz</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2014-02-16T18:42:00Z</published>
		<updated>2014-02-16T18:42:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=495315" />
		<id>https://sampforum.blast.hk/showthread.php?tid=495315</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3z R1-2 server update (optional)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=495315"><![CDATA[<u><b>This update is for SA-MP server owners only</b></u><br />
<br />
- The player's current weapon ID was not correctly reported to pawn scripts when they were passengering in a vehicle. <br />
<br />
Downloads:<br />
<br />
<u>SA-MP 0.3z R1-2 Linux Server:</u> <a href="http://files.sa-mp.com/samp03zsvr_R1-2.tar.gz" target="_blank">http://files.sa-mp.com/samp03zsvr_R1-2.tar.gz</a><br />
<u>SA-MP 0.3z R1-2 Windows Server:</u> <a href="http://files.sa-mp.com/samp03z_svr_R1-2_win32.zip" target="_blank">http://files.sa-mp.com/samp03z_svr_R1-2_win32.zip</a><br />
<u>SA-MP 0.3z R1-2 Linux Server (1000 max player):</u> <a href="http://files.sa-mp.com/samp03zsvr_R1-2-1000p.tar.gz" target="_blank">http://files.sa-mp.com/samp03zsvr_R1-2-1000p.tar.gz</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2014-02-13T09:29:00Z</published>
		<updated>2014-02-13T09:29:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=494414" />
		<id>https://sampforum.blast.hk/showthread.php?tid=494414</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3z is released!]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=494414"><![CDATA[SA-MP 0.3z is released! You can find it on the <a href="http://www.sa-mp.com/download.php" target="_blank">Download Page</a>.<br />
<br />
<font color="Red"><b>SA-MP 0.3z Updates</b></font><br />
<br />
SA-MP 0.3z is mainly a security update for the SA-MP 0.3 branch. We've managed to include a few features and fixes too.<br />
<br />
- An optional lag compensation mode improves sync accuracy.<br />
- New server callbacks allow greater control over the game.<br />
- Network statistics functions will make it easier to admin servers.<br />
- Fixes range check errors in the server browser.<br />
- Fixes problems with mouse control in the game menu.<br />
- Many minor security updates for both the client and server.<br />
<br />
Thanks to everyone who helped test 0.3z!]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2014-01-06T19:37:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=486023" />
		<id>https://sampforum.blast.hk/showthread.php?tid=486023</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3x R2 server patch 1]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=486023"><![CDATA[This update is for SA-MP server owners only.<br />
<br />
As I'm sure most server owners are aware, there has been a large scale 'denial of service' attack against most of the popular SA-MP servers. This attack was caused by a 'denial of service' vulnerability in SA-MP's lower level networking layer. Attackers used custom written tools and specially formulated packets to attack SA-MP servers.<br />
<br />
We have logged many different IP addresses participating in the attacks, and intend to lodge formal complaints with the ISPs where the attacks originated.<br />
<br />
Due to the nature of the attack, it may require several updates to completely resolve.<br />
<br />
We are issuing an emergency server patch for the 0.3x R2 server, for now. You should expect more updates shortly as we attempt to fully resolve this issue.<br />
<br />
You can update your server simply by replacing the samp03svr or samp-server.exe file.<br />
<br />
Downloads:<br />
<u>SA-MP 0.3x R2 Patch 1 Linux Server:</u> <a href="http://files.sa-mp.com/samp03xsvr_R2_patch1.tar.gz" target="_blank">http://files.sa-mp.com/samp03xsvr_R2_patch1.tar.gz</a><br />
<u>SA-MP 0.3x R2 Patch 1 Windows Server:</u> <a href="http://files.sa-mp.com/samp03x_svr_R2_patch1_win32.zip" target="_blank">http://files.sa-mp.com/samp03x_svr_R2_patch1_win32.zip</a><br />
<u>SA-MP 0.3x R2 Patch 1 Linux Server 1000p:</u> <a href="http://files.sa-mp.com/samp03xsvr_R2-1000p_patch1.tar.gz" target="_blank">http://files.sa-mp.com/samp03xsvr_R2..._patch1.tar.gz</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=3">Kalcor</a>]]></name>
		</author>
		<published>2013-09-13T14:11:00Z</published>
		<updated>2013-09-13T14:11:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=463694" />
		<id>https://sampforum.blast.hk/showthread.php?tid=463694</id>
		<title xml:space="preserve"><![CDATA[SA-MP 0.3x R2 server update]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=463694"><![CDATA[<u><b>This update is for SA-MP server owners only</b></u><br />
<br />
We are issuing a server update for SA-MP 0.3x to address some crash problems. <br />
<br />
<font color="Red"><b>If updating from an existing 0.3x server:</b></font> you can update simply by replacing the 'samp03svr' file on linux, or 'samp-server.exe' file on Windows, found in the 0.3x server download package.<br />
<br />
<u><font size="3">SA-MP 0.3x R2 server</font></u><br />
<br />
- Fix: Specially crafted tools could attack SA-MP's network layer causing the server to crash.<br />
- Fix: Bad camera data sent by a player might crash other players.<br />
<br />
Downloads:<br />
<br />
<u>SA-MP 0.3x R2 Linux Server:</u> <a href="http://files.sa-mp.com/samp03xsvr_R2.tar.gz" target="_blank">http://files.sa-mp.com/samp03xsvr_R2.tar.gz</a><br />
<u>SA-MP 0.3X R2 Windows Server:</u> <a href="http://files.sa-mp.com/samp03x_svr_R2_win32.zip" target="_blank">http://files.sa-mp.com/samp03x_svr_R2_win32.zip</a><br />
<u>SA-MP 0.3x R2 Linux Server (1000 max player):</u> <a href="http://files.sa-mp.com/samp03xsvr_R2-1000p.tar.gz" target="_blank">http://files.sa-mp.com/samp03xsvr_R2-1000p.tar.gz</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>