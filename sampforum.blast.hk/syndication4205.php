<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[SA-MP Forums Archive - Bug Reports]]></title>
		<link>https://sampforum.blast.hk/</link>
		<description><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></description>
		<pubDate>Thu, 28 Jul 2022 20:40:12 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[Vehicle models are dark]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=671306</link>
			<pubDate>Fri, 20 Dec 2019 13:17:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=339476">natovan</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=671306</guid>
			<description><![CDATA[Sometimes vehicle models are dark on spawn (CreateVehicle and AddStaticVehicle). Punching, walking near and demaging it fixes the problem, but you can still drive it and it'll be like this forever, untill you bump into something(does not always work).<br />
<br />
Video:<br />
<a href="https://youtu.be/mkSL2XvBfyM" target="_blank">https://youtu.be/mkSL2XvBfyM</a>]]></description>
			<content:encoded><![CDATA[Sometimes vehicle models are dark on spawn (CreateVehicle and AddStaticVehicle). Punching, walking near and demaging it fixes the problem, but you can still drive it and it'll be like this forever, untill you bump into something(does not always work).<br />
<br />
Video:<br />
<a href="https://youtu.be/mkSL2XvBfyM" target="_blank">https://youtu.be/mkSL2XvBfyM</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Num Lock does not work]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=671304</link>
			<pubDate>Fri, 20 Dec 2019 11:01:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=203215">m1n1vv</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=671304</guid>
			<description><![CDATA[If you put 5 vehicles next to you in which Num Lock is used, it won't work in one of the vehicles.<br />
<br />
For example:<ul><li>All lowride vehicles</li>
<li>Forklift<br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/0/0c/Vehicle_530.jpg"/></li>
<li>Dozer<br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/f/f2/Vehicle_486.jpg"/></li>
<li>Towtruck<br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/f/f3/Vehicle_525.jpg"/></li>
<li>Hydra<br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/3/3f/Vehicle_520.jpg"/></li>
<li>Packer<br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/c/cf/Vehicle_443.jpg"/></li>
<li>Etc..</li>
</ul>]]></description>
			<content:encoded><![CDATA[If you put 5 vehicles next to you in which Num Lock is used, it won't work in one of the vehicles.<br />
<br />
For example:<ul><li>All lowride vehicles</li>
<li>Forklift<br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/0/0c/Vehicle_530.jpg"/></li>
<li>Dozer<br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/f/f2/Vehicle_486.jpg"/></li>
<li>Towtruck<br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/f/f3/Vehicle_525.jpg"/></li>
<li>Hydra<br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/3/3f/Vehicle_520.jpg"/></li>
<li>Packer<br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/c/cf/Vehicle_443.jpg"/></li>
<li>Etc..</li>
</ul>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[SAMP Query on client]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=670467</link>
			<pubDate>Thu, 07 Nov 2019 12:52:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=325349">Sn0wden</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=670467</guid>
			<description><![CDATA[Hi,<br />
<br />
I was observing the operation of the mechanism of queries in SAMP and I noticed a failure in the SA-MP client that some servers in favorites did not work sometimes and I had to delete the IP Address and add it again so that the client receives queries.<br />
<br />
This is because when you open the SA-MP Client, the hash of ports in the payload of the query is never done correctly in the favorites list and you have to delete and add it again.<br />
<br />
This problem happens only in the client 0.3.7 R3 because in the 0.3.7 DL this problem seems to be solved.<br />
<br />
I also take this same thread to report another BUG in the SAMP client and it is that some hackers are bothering in the hosted tab by setting servers with the modified queries mechanism and sending the server ping in -1 and this causes an interger overflow in the client and it is annoying because sometimes the crash application or the MSGBOX appears saying “interger overflow”.<br />
<br />
Thanks.]]></description>
			<content:encoded><![CDATA[Hi,<br />
<br />
I was observing the operation of the mechanism of queries in SAMP and I noticed a failure in the SA-MP client that some servers in favorites did not work sometimes and I had to delete the IP Address and add it again so that the client receives queries.<br />
<br />
This is because when you open the SA-MP Client, the hash of ports in the payload of the query is never done correctly in the favorites list and you have to delete and add it again.<br />
<br />
This problem happens only in the client 0.3.7 R3 because in the 0.3.7 DL this problem seems to be solved.<br />
<br />
I also take this same thread to report another BUG in the SAMP client and it is that some hackers are bothering in the hosted tab by setting servers with the modified queries mechanism and sending the server ping in -1 and this causes an interger overflow in the client and it is annoying because sometimes the crash application or the MSGBOX appears saying “interger overflow”.<br />
<br />
Thanks.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Move Object and reconnect (0.3.DL?)]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=666039</link>
			<pubDate>Tue, 23 Apr 2019 20:01:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=57188">ATomas</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=666039</guid>
			<description><![CDATA[Hello,<br />
i found a bug. Create object. Move it (long way). Disconnect from server, connect to the same server and port to the object. And you see object in the actual pos but not moving. (testing on 0.3.DL, I use natives: CreateObject and MoveObject). GetObjectPos return correct position, but object in client not show in this return position.]]></description>
			<content:encoded><![CDATA[Hello,<br />
i found a bug. Create object. Move it (long way). Disconnect from server, connect to the same server and port to the object. And you see object in the actual pos but not moving. (testing on 0.3.DL, I use natives: CreateObject and MoveObject). GetObjectPos return correct position, but object in client not show in this return position.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[OnPlayerTakeDamage called after gmx]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=663929</link>
			<pubDate>Thu, 14 Feb 2019 22:40:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=152126">Manyula</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=663929</guid>
			<description><![CDATA[Has anyone ever noticed OnPlayerTakeDamage being called right after a gmx? Is that intentional or a bug?<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">playerid: 0, issuerid: 65535, amount: 1079194420, weaponid: 54, bodypart: 3</pre>
</div>]]></description>
			<content:encoded><![CDATA[Has anyone ever noticed OnPlayerTakeDamage being called right after a gmx? Is that intentional or a bug?<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">playerid: 0, issuerid: 65535, amount: 1079194420, weaponid: 54, bodypart: 3</pre>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Player automatic AFK when iddle in the truck with attached trailer.]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=663717</link>
			<pubDate>Sat, 09 Feb 2019 14:52:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=304769">Assister</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=663717</guid>
			<description><![CDATA[So Me and my friend do something and we found this case.<br />
<br />
So when someone in the truck with attached trailer, and do nothing (didn't press esc, only chat) in that truck, that player will be AFK.<br />
<br />
We have try to another vehicle, and it doesn't work also we try in the truck without trailer it doesn't work too.<br />
<br />
Is this bug from 0.3DL or the server problem? The server connection is good and our connection is good no problem. ( Ping under 50 )<br />
<br />
Sorry for my bad english, we just try to fix this.]]></description>
			<content:encoded><![CDATA[So Me and my friend do something and we found this case.<br />
<br />
So when someone in the truck with attached trailer, and do nothing (didn't press esc, only chat) in that truck, that player will be AFK.<br />
<br />
We have try to another vehicle, and it doesn't work also we try in the truck without trailer it doesn't work too.<br />
<br />
Is this bug from 0.3DL or the server problem? The server connection is good and our connection is good no problem. ( Ping under 50 )<br />
<br />
Sorry for my bad english, we just try to fix this.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Unseen Checkpoint Bug in Radar]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=663546</link>
			<pubDate>Mon, 04 Feb 2019 12:37:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=251652">Artix26</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=663546</guid>
			<description><![CDATA[I spawn 200 vehicles. And checkpoint does not appear because of the tool markers on the radar.<br />
<br />
Probably the same result in the streamer plugin (CreateDynamicCP).<br />
<br />
<br />
<br />
<b>Function of test commands in video:</b><br />
/a1 SetPlayerCheckpoint<br />
/a2 DisablePlayerCheckpoint<br />
<a href="https://www.youtube.com/watch?v=aoDPXMIDvXI" target="_blank">https://www.youtube.com/watch?v=aoDPXMIDvXI</a>]]></description>
			<content:encoded><![CDATA[I spawn 200 vehicles. And checkpoint does not appear because of the tool markers on the radar.<br />
<br />
Probably the same result in the streamer plugin (CreateDynamicCP).<br />
<br />
<br />
<br />
<b>Function of test commands in video:</b><br />
/a1 SetPlayerCheckpoint<br />
/a2 DisablePlayerCheckpoint<br />
<a href="https://www.youtube.com/watch?v=aoDPXMIDvXI" target="_blank">https://www.youtube.com/watch?v=aoDPXMIDvXI</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Server crashes when kicking a player inside OnPlayerStateChange]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=662952</link>
			<pubDate>Wed, 16 Jan 2019 20:36:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=198674">Graber</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=662952</guid>
			<description><![CDATA[When using Kick(playerid) inside OnPlayerStateChange, and the newstate is PLAYER_STATE_DRIVER, the server crashes:<br />
<br />
0.3.DL Windows:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">[22:11:08] [debug] Server crashed due to an unknown error
[22:11:08] [debug] Native backtrace:
[22:11:08] [debug] #0 004874d1 in ?? () in samp-server.exe
[22:11:08] [debug] #1 004950b3 in ?? () in samp-server.exe
[22:11:08] [debug] #2 777fb8d0 in ?? () in C:\WINDOWS\SYSTEM32\ntdll.dll</pre>
</div>After making some internal debugging, it seems this happens because the server tries to use the player's pointer after calling the callback, but the pointed memory was already freed because the player was kicked.]]></description>
			<content:encoded><![CDATA[When using Kick(playerid) inside OnPlayerStateChange, and the newstate is PLAYER_STATE_DRIVER, the server crashes:<br />
<br />
0.3.DL Windows:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">[22:11:08] [debug] Server crashed due to an unknown error
[22:11:08] [debug] Native backtrace:
[22:11:08] [debug] #0 004874d1 in ?? () in samp-server.exe
[22:11:08] [debug] #1 004950b3 in ?? () in samp-server.exe
[22:11:08] [debug] #2 777fb8d0 in ?? () in C:\WINDOWS\SYSTEM32\ntdll.dll</pre>
</div>After making some internal debugging, it seems this happens because the server tries to use the player's pointer after calling the callback, but the pointed memory was already freed because the player was kicked.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[0.3DL transparency bug]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=662296</link>
			<pubDate>Fri, 28 Dec 2018 17:31:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=83074">Kasis</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=662296</guid>
			<description><![CDATA[So yeah would be nice if added objects have fixed transperancy bugs. Basically if you set object transparrent in 3ds max sa-mp will return mirror see thru effect. As far i understand it has to do with streamers :P That be decent fix ya know what am sayin']]></description>
			<content:encoded><![CDATA[So yeah would be nice if added objects have fixed transperancy bugs. Basically if you set object transparrent in 3ds max sa-mp will return mirror see thru effect. As far i understand it has to do with streamers :P That be decent fix ya know what am sayin']]></content:encoded>
		</item>
		<item>
			<title><![CDATA[SetSpawnInfo and some other funcs]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=662010</link>
			<pubDate>Fri, 21 Dec 2018 11:26:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=85372">Riddick94</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=662010</guid>
			<description><![CDATA[Hello,<br />
<br />
Since Kalcor has decided to be more active at forums recently, I have decided to report two of the <b>many</b> bugs.<br />
<br />
---<br />
#1<br />
One of the messages from 2010:<br />
<div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table border="0" cellpadding="6" cellspacing="0" width="100%">
<tr>
<td class="alt2" style="border: 1px solid #C2C2C2; font-size: 8pt;">
<div>
					Originally Posted by <strong>Riddick</strong><br />
</div>
<div style="font-style:italic">Hey.. i had today a some bug with GivePlayerWeapon. I've a command /gun [weapon_id] [ammo] and skills of weapons to one hand. One pistol, sawn-0ff etc. After i wrote /gun 22 100 (Pistol and 100 ammo) ammuntion to magazine has set to 34.. not 17.<br />
<br />
[...]</div>
</td>
</tr>
</table>
</div>In short - weapon's clip size ammo is set to 34 (as for example of 9mm pistol) even though that my weapon skill for 9mm is set to have pistol in one hand. So in fact as a result as I should have 17 ammo, not 34 (17 * 2 = 34). May not be SA-MP's bug, but SA, I am not sure.<br />
<br />
---<br />
#2<br />
native's "SetSpawnInfo" parameter called "team" does NOT have any effect at all. You gotta set your team manually anyway with "SetPlayerTeam".<br />
<br />
That should be fixed internally.<br />
<br />
Thanks<br />
<br />
<font size="1"><i>edit://<br />
Oh, oh! Let me edit my post real quick before I hear some other people saying some shit like "scriptable".... Thank you very much, don't waste your keyboard and time.</i></font>]]></description>
			<content:encoded><![CDATA[Hello,<br />
<br />
Since Kalcor has decided to be more active at forums recently, I have decided to report two of the <b>many</b> bugs.<br />
<br />
---<br />
#1<br />
One of the messages from 2010:<br />
<div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table border="0" cellpadding="6" cellspacing="0" width="100%">
<tr>
<td class="alt2" style="border: 1px solid #C2C2C2; font-size: 8pt;">
<div>
					Originally Posted by <strong>Riddick</strong><br />
</div>
<div style="font-style:italic">Hey.. i had today a some bug with GivePlayerWeapon. I've a command /gun [weapon_id] [ammo] and skills of weapons to one hand. One pistol, sawn-0ff etc. After i wrote /gun 22 100 (Pistol and 100 ammo) ammuntion to magazine has set to 34.. not 17.<br />
<br />
[...]</div>
</td>
</tr>
</table>
</div>In short - weapon's clip size ammo is set to 34 (as for example of 9mm pistol) even though that my weapon skill for 9mm is set to have pistol in one hand. So in fact as a result as I should have 17 ammo, not 34 (17 * 2 = 34). May not be SA-MP's bug, but SA, I am not sure.<br />
<br />
---<br />
#2<br />
native's "SetSpawnInfo" parameter called "team" does NOT have any effect at all. You gotta set your team manually anyway with "SetPlayerTeam".<br />
<br />
That should be fixed internally.<br />
<br />
Thanks<br />
<br />
<font size="1"><i>edit://<br />
Oh, oh! Let me edit my post real quick before I hear some other people saying some shit like "scriptable".... Thank you very much, don't waste your keyboard and time.</i></font>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[RemoveBuildingForPlayer leaves a ghost building behind]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=661906</link>
			<pubDate>Tue, 18 Dec 2018 15:03:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=242051">edyun</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=661906</guid>
			<description><![CDATA[Hello,<br />
<br />
Recently I removed a house using the RemoveBuildingForPlayer function, and when i move the camera around that place it just shows me a ghost of what the building used to look like, down below I left a couple of photos of the effect.. If someone knows what may be causing this please leave a comment down below.<br />
<br />
<br />
<a href="https://imgur.com/a/bm2bqBX" target="_blank">https://imgur.com/a/bm2bqBX</a>]]></description>
			<content:encoded><![CDATA[Hello,<br />
<br />
Recently I removed a house using the RemoveBuildingForPlayer function, and when i move the camera around that place it just shows me a ghost of what the building used to look like, down below I left a couple of photos of the effect.. If someone knows what may be causing this please leave a comment down below.<br />
<br />
<br />
<a href="https://imgur.com/a/bm2bqBX" target="_blank">https://imgur.com/a/bm2bqBX</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[GetPlayerLastShotVector returns wrong information]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=661485</link>
			<pubDate>Thu, 06 Dec 2018 07:41:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=169426">Yashas</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=661485</guid>
			<description><![CDATA[The wiki states that "If the player hit nothing, the hit positions will be 0. This means you can't currently calculate how far a bullet travels through open air. ".<br />
<br />
While looking into the data, I found that it does not always return (0, 0 ,0). Sometimes, it returns (X, 0, 0) where X appears to be some coordinate not anywhere close to the origin.<br />
<br />
Screenshots attached.<br />
<br />
UPDATE:<br />
It returns a random hit position far away from origin sometimes. Screenshot attached.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 370px;
		text-align: left;
		overflow: auto">public OnPlayerWeaponShot(playerid, weaponid, hittype, hitid, Float:fX, Float:fY, Float:fZ)
{
	new data[E_SHOT_VECTOR];
    CollectDataOPWS(data, playerid, weaponid, hittype, hitid, fX, fY, fZ);
    
    new buffer[1024];
    EncodeShotVector(data, buffer);
    
    new Float:X, Float:Y, Float:Z, Float:x, Float:y, Float:z;
     GetPlayerLastShotVectors(playerid, X, Y, Z, x, y, z);
     
    
    fwrite(dataFile[playerid], buffer);
    fwrite(dataFile[playerid], "\r\n");
    
    format(buffer, 1024, "O: %.2f %.2f %.2f H: %.2f %.2f %.2f", X, Y, Z, x, y, z);
    SendClientMessageToAll(0x00FF00FF, buffer);
    format(buffer, 1024, "O: %.2f %.2f %.2f H: %.2f %.2f %.2f", data[fOriginX], data[fOriginY], data[fOriginZ],
 								    data[fHitPosX], data[fHitPosY], data[fHitPosZ]);
    SendClientMessageToAll(0x0000FFFF, buffer);
    return 1;
}</pre>
</div>Please ignore the blue messages (they are expected to match exactly with the green messages).<br />
<br />
EDIT:<br />
I checked the hittype and it's zero in both cases: (0, 0, 0) and the weird number case]]></description>
			<content:encoded><![CDATA[The wiki states that "If the player hit nothing, the hit positions will be 0. This means you can't currently calculate how far a bullet travels through open air. ".<br />
<br />
While looking into the data, I found that it does not always return (0, 0 ,0). Sometimes, it returns (X, 0, 0) where X appears to be some coordinate not anywhere close to the origin.<br />
<br />
Screenshots attached.<br />
<br />
UPDATE:<br />
It returns a random hit position far away from origin sometimes. Screenshot attached.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 370px;
		text-align: left;
		overflow: auto">public OnPlayerWeaponShot(playerid, weaponid, hittype, hitid, Float:fX, Float:fY, Float:fZ)
{
	new data[E_SHOT_VECTOR];
    CollectDataOPWS(data, playerid, weaponid, hittype, hitid, fX, fY, fZ);
    
    new buffer[1024];
    EncodeShotVector(data, buffer);
    
    new Float:X, Float:Y, Float:Z, Float:x, Float:y, Float:z;
     GetPlayerLastShotVectors(playerid, X, Y, Z, x, y, z);
     
    
    fwrite(dataFile[playerid], buffer);
    fwrite(dataFile[playerid], "\r\n");
    
    format(buffer, 1024, "O: %.2f %.2f %.2f H: %.2f %.2f %.2f", X, Y, Z, x, y, z);
    SendClientMessageToAll(0x00FF00FF, buffer);
    format(buffer, 1024, "O: %.2f %.2f %.2f H: %.2f %.2f %.2f", data[fOriginX], data[fOriginY], data[fOriginZ],
 								    data[fHitPosX], data[fHitPosY], data[fHitPosZ]);
    SendClientMessageToAll(0x0000FFFF, buffer);
    return 1;
}</pre>
</div>Please ignore the blue messages (they are expected to match exactly with the green messages).<br />
<br />
EDIT:<br />
I checked the hittype and it's zero in both cases: (0, 0, 0) and the weird number case]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Weapon Reset Problem]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=661154</link>
			<pubDate>Sat, 24 Nov 2018 02:53:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=308162">coderkid</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=661154</guid>
			<description><![CDATA[Hello, im getting into the car with the deagle. I remove the gun after I get in the car. But I still have the gun.<br />
I'm checking with GetPlayerWeapon(playerid) and i remove with ResetPlayerWeapons(playerid)<br />
<br />
And like this bug; <a href="https://sampforum.blast.hk/showthread.php?tid=199046" target="_blank">https://sampforum.blast.hk/showthread.php?tid=199046</a><br />
<br />
i think this fixing new version.<br />
<br />
<font size="1">sorry for english.</font>]]></description>
			<content:encoded><![CDATA[Hello, im getting into the car with the deagle. I remove the gun after I get in the car. But I still have the gun.<br />
I'm checking with GetPlayerWeapon(playerid) and i remove with ResetPlayerWeapons(playerid)<br />
<br />
And like this bug; <a href="https://sampforum.blast.hk/showthread.php?tid=199046" target="_blank">https://sampforum.blast.hk/showthread.php?tid=199046</a><br />
<br />
i think this fixing new version.<br />
<br />
<font size="1">sorry for english.</font>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[0.3.7] SetPlayerInterior bug]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=659443</link>
			<pubDate>Wed, 03 Oct 2018 14:49:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=296925">Spoookymon</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=659443</guid>
			<description><![CDATA[Can't set player interior if player was never spawned.<br />
<br />
SetPlayerInterior returns 1 ( success ), but GetPlayerInterior returns 0.<br />
<br />
<font color="Red">* I'm using spectate mode to avoid default spawn system, so it might be part of the problem.</font>]]></description>
			<content:encoded><![CDATA[Can't set player interior if player was never spawned.<br />
<br />
SetPlayerInterior returns 1 ( success ), but GetPlayerInterior returns 0.<br />
<br />
<font color="Red">* I'm using spectate mode to avoid default spawn system, so it might be part of the problem.</font>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Vehicle X was not deleted [Trains]]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=658695</link>
			<pubDate>Mon, 10 Sep 2018 00:08:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=86311">GangstaSunny.</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=658695</guid>
			<description><![CDATA[Hey,<br />
i know this bug have already been reported some years ago. Still, it exists.<br />
<br />
Example Explanation:<br />
Creating <a href="https://sampwiki.blast.hk/wiki/Image:Vehicle_537.jpg" target="_blank">https://sampwiki.blast.hk/wiki/Image:Vehicle_537.jpg</a> will also bring 3 <a href="https://sampwiki.blast.hk/wiki/Image:Vehicle_569.jpg" target="_blank">https://sampwiki.blast.hk/wiki/Image:Vehicle_569.jpg</a> with it. The 3 trailers will ALWAYS have the trains vehicle id +X.<br />
<br />
If the train got the vehicleid 500, the first trailer will have the id 501, the second the id 502 and the third the id 503. And here it comes to the problem. This trailer will realy ALWAYS get the trains id ++. Even if another vehicle already got this id. The vehicle will automaticly be destroyed, regardless if a player is inside, the car is not even inside the stream radius and and and...<br />
<br />
Fix:<br />
If the modelid 537 or 538 (both are trains with 3 trailers) will be created, SA-MP should firstly selected the current highest vehicleid and spawn the trailer on this id. This will easily fix it. If the highest vehicleid =&gt; 1996, the train should not be able to spawn (since 2000 max vehicles, or: 1999).<br />
<br />
<br />
Also: I'm actualy working with a workaround (creating vehicles until the id the train would get + 3 more ids are free) but this is awfuel.]]></description>
			<content:encoded><![CDATA[Hey,<br />
i know this bug have already been reported some years ago. Still, it exists.<br />
<br />
Example Explanation:<br />
Creating <a href="https://sampwiki.blast.hk/wiki/Image:Vehicle_537.jpg" target="_blank">https://sampwiki.blast.hk/wiki/Image:Vehicle_537.jpg</a> will also bring 3 <a href="https://sampwiki.blast.hk/wiki/Image:Vehicle_569.jpg" target="_blank">https://sampwiki.blast.hk/wiki/Image:Vehicle_569.jpg</a> with it. The 3 trailers will ALWAYS have the trains vehicle id +X.<br />
<br />
If the train got the vehicleid 500, the first trailer will have the id 501, the second the id 502 and the third the id 503. And here it comes to the problem. This trailer will realy ALWAYS get the trains id ++. Even if another vehicle already got this id. The vehicle will automaticly be destroyed, regardless if a player is inside, the car is not even inside the stream radius and and and...<br />
<br />
Fix:<br />
If the modelid 537 or 538 (both are trains with 3 trailers) will be created, SA-MP should firstly selected the current highest vehicleid and spawn the trailer on this id. This will easily fix it. If the highest vehicleid =&gt; 1996, the train should not be able to spawn (since 2000 max vehicles, or: 1999).<br />
<br />
<br />
Also: I'm actualy working with a workaround (creating vehicles until the id the train would get + 3 more ids are free) but this is awfuel.]]></content:encoded>
		</item>
	</channel>
</rss>