<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[SA-MP Forums Archive - Tools and Files ]]></title>
		<link>https://sampforum.blast.hk/</link>
		<description><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></description>
		<pubDate>Thu, 28 Jul 2022 20:51:13 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[[Tool/Web/Other] Pawn Make - A very simple yet powerful build tool]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676075</link>
			<pubDate>Fri, 29 May 2020 04:28:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=111937">Sasino97</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676075</guid>
			<description><![CDATA[<div align="center"><font size="7"><font color="Red">Pawn</font>Make</font><br />
A very simple yet powerful build tool</div>
I'm releasing PawnMake, a build tool I initially made for my personal use.<br />
<br />
<font size="6"><font color="Red">D</font>ownload</font><br />
<a href="https://github.com/SaSiNO97/PawnMake/releases" target="_blank">Releases</a><br />
<a href="https://github.com/SaSiNO97/PawnMake" target="_blank">Source</a><br />
<br />
<font size="6"><font color="Red">D</font>escription</font><br />
A very simple yet powerful command line tool which can be used to build Pawn scripts in the form of a project, using a json-based configuration file.<br />
<br />
It needs the pawn compiler (in PATH or in the same directory). Currently only working on Windows, being built on .NET Framework 4.7.1, but can be very easily ported to .NET Core, most likely with no changes to the code at all, and it would run on Linux and MacOSX.<br />
<br />
<font size="6"><font color="Red">U</font>sage</font><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">PawnMake &lt;filename.json&gt; [options]</pre>
</div>Currently the only option available is -r, which means that after building, the programs defined in the Run array should be called.<br />
<br />
<font size="6"><font color="Red">E</font>xample input</font><br />
Example build.json file<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">{
    "ProjectName" : "Roleplay",
    "BuildFolders" : [
        {
            "SourceFolder" : "src\\gamemodes",
            "OutputFolder" : "bin\\gamemodes"
        },
        {
            "SourceFolder" : "src\\filterscripts",
            "OutputFolder" : "bin\\filterscripts"
        },
        {
            "SourceFolder" : "src\\npcmodes",
            "OutputFolder" : "bin\\npcmodes"
        }
    ],

    "IncludeFolders" : [
        "C:\\pawncc\\include",
        "src\\include"
    ],

    "Files" : [
        "RP.pwn",
        "RP_Admin.pwn",
        "RP_Clothes.pwn",
        "RP_Dealers.pwn",
        "RP_Friendship.pwn",
        "RP_Drugs.pwn",
        "RP_Houses.pwn",
        "RP_Phone.pwn",
        "RP_NPC_Intro1.pwn"
    ],

    "Args" : "-O1 -;+ -(+ -w239 -w214",

    "Run" : [
        "bin\\samp-server.exe",
        "bin\\debug.exe"
    ]
}</pre>
</div><b>ProjectName</b>: the displayed project name.<br />
<br />
<b>BuildFolders</b>: every BuildFolder entry contains a source and an output folder, which defines that files found in the source folder should be compiled to the output folder. I personally prefer to keep the source separate from the binaries, but if you prefer the default SA-MP server folder structure, you would use the same name for both the source and output settings.<br />
<br />
<b>IncludeFolders</b>: defines the folders where the compiler should search for include files.<br />
<br />
<b>Files</b>: the list of source code file names, without directory and with the extension.<br />
<br />
<b>Args</b>: any additional args you wish to pass to the compiler. For example, pass -w239 to disable warning 239.<br />
<br />
<b>Run</b>: the executable files to run after completion, only if the -r arg is passed to the program.<br />
<br />
<font size="6"><font color="Red">E</font>xample output</font><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 402px;
		text-align: left;
		overflow: auto">------ Build started - Project: Roleplay ------
* Compiling src\gamemodes\RP.pwn -&gt; bin\gamemodes\RP.amx
    src\gamemodes\RP.pwn(271) : warning 204: symbol is assigned a value that is never used: "mapandreasAddress"
    Pawn compiler 3.10.10                       Copyright &copy; 1997-2006, ITB CompuPhase


    1 Warning.

* Compiling src\filterscripts\RP_Admin.pwn -&gt; bin\filterscripts\RP_Admin.amx
* Compiling src\filterscripts\RP_Clothes.pwn -&gt; bin\filterscripts\RP_Clothes.amx
    src\filterscripts\RP_Clothes.pwn(475) : error 017: undefined symbol "tmpScore"
    src\filterscripts\RP_Clothes.pwn(475) : warning 215: expression has no effect
    Pawn compiler 3.10.10                       Copyright &copy; 1997-2006, ITB CompuPhase


    1 Error.

* Skipping src\filterscripts\RP_Dealers.pwn
* Skipping src\filterscripts\RP_Friendship.pwn
* Skipping src\filterscripts\RP_Drugs.pwn
* Skipping src\filterscripts\RP_Houses.pwn
* Skipping src\filterscripts\RP_Phone.pwn
* Skipping src\npcmodes\RP_NPC_Intro1.pwn
========== Build: 2 succeeded, 1 failed, 6 skipped ==========</pre>
</div>If no errors or warnings were encountered, the pawncc output is ignored, otherwise it is shown after the corresponding line. If a file has been skipped it means that it had no changes since the last build (the .amx file is more recent than the source file).<br />
<br />
<br />
<font size="6"><font color="Red">C</font>onfiguring VSCode</font><br />
VSCode can be configure to build the script via this program in the tasks.json file. To open this file, simply go to the folder of your project and locate the .vscode folder, or more simply by clicking Task-&gt;Configure Tasks in the VSCode menu.<br />
<br />
The following is an example tasks.json:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 418px;
		text-align: left;
		overflow: auto">{
    "version": "2.0.0",
    "tasks": [
        {
            "label": "Build",
            "type": "shell",
            "command": "PawnMake.exe",
            "args": [ "&#36;{workspaceRoot}\\build.json" ],
            "group": {
                "kind": "build",
                "isDefault": true
            }
        },
        {
            "label": "Build and Run",
            "type": "shell",
            "command": "PawnMake.exe",
            "args": [ "&#36;{workspaceRoot}\\build.json", "-r" ],
            "group": {
                "kind": "test",
                "isDefault": true
            }
        }
    ]
}</pre>
</div>]]></description>
			<content:encoded><![CDATA[<div align="center"><font size="7"><font color="Red">Pawn</font>Make</font><br />
A very simple yet powerful build tool</div>
I'm releasing PawnMake, a build tool I initially made for my personal use.<br />
<br />
<font size="6"><font color="Red">D</font>ownload</font><br />
<a href="https://github.com/SaSiNO97/PawnMake/releases" target="_blank">Releases</a><br />
<a href="https://github.com/SaSiNO97/PawnMake" target="_blank">Source</a><br />
<br />
<font size="6"><font color="Red">D</font>escription</font><br />
A very simple yet powerful command line tool which can be used to build Pawn scripts in the form of a project, using a json-based configuration file.<br />
<br />
It needs the pawn compiler (in PATH or in the same directory). Currently only working on Windows, being built on .NET Framework 4.7.1, but can be very easily ported to .NET Core, most likely with no changes to the code at all, and it would run on Linux and MacOSX.<br />
<br />
<font size="6"><font color="Red">U</font>sage</font><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">PawnMake &lt;filename.json&gt; [options]</pre>
</div>Currently the only option available is -r, which means that after building, the programs defined in the Run array should be called.<br />
<br />
<font size="6"><font color="Red">E</font>xample input</font><br />
Example build.json file<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">{
    "ProjectName" : "Roleplay",
    "BuildFolders" : [
        {
            "SourceFolder" : "src\\gamemodes",
            "OutputFolder" : "bin\\gamemodes"
        },
        {
            "SourceFolder" : "src\\filterscripts",
            "OutputFolder" : "bin\\filterscripts"
        },
        {
            "SourceFolder" : "src\\npcmodes",
            "OutputFolder" : "bin\\npcmodes"
        }
    ],

    "IncludeFolders" : [
        "C:\\pawncc\\include",
        "src\\include"
    ],

    "Files" : [
        "RP.pwn",
        "RP_Admin.pwn",
        "RP_Clothes.pwn",
        "RP_Dealers.pwn",
        "RP_Friendship.pwn",
        "RP_Drugs.pwn",
        "RP_Houses.pwn",
        "RP_Phone.pwn",
        "RP_NPC_Intro1.pwn"
    ],

    "Args" : "-O1 -;+ -(+ -w239 -w214",

    "Run" : [
        "bin\\samp-server.exe",
        "bin\\debug.exe"
    ]
}</pre>
</div><b>ProjectName</b>: the displayed project name.<br />
<br />
<b>BuildFolders</b>: every BuildFolder entry contains a source and an output folder, which defines that files found in the source folder should be compiled to the output folder. I personally prefer to keep the source separate from the binaries, but if you prefer the default SA-MP server folder structure, you would use the same name for both the source and output settings.<br />
<br />
<b>IncludeFolders</b>: defines the folders where the compiler should search for include files.<br />
<br />
<b>Files</b>: the list of source code file names, without directory and with the extension.<br />
<br />
<b>Args</b>: any additional args you wish to pass to the compiler. For example, pass -w239 to disable warning 239.<br />
<br />
<b>Run</b>: the executable files to run after completion, only if the -r arg is passed to the program.<br />
<br />
<font size="6"><font color="Red">E</font>xample output</font><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 402px;
		text-align: left;
		overflow: auto">------ Build started - Project: Roleplay ------
* Compiling src\gamemodes\RP.pwn -&gt; bin\gamemodes\RP.amx
    src\gamemodes\RP.pwn(271) : warning 204: symbol is assigned a value that is never used: "mapandreasAddress"
    Pawn compiler 3.10.10                       Copyright &copy; 1997-2006, ITB CompuPhase


    1 Warning.

* Compiling src\filterscripts\RP_Admin.pwn -&gt; bin\filterscripts\RP_Admin.amx
* Compiling src\filterscripts\RP_Clothes.pwn -&gt; bin\filterscripts\RP_Clothes.amx
    src\filterscripts\RP_Clothes.pwn(475) : error 017: undefined symbol "tmpScore"
    src\filterscripts\RP_Clothes.pwn(475) : warning 215: expression has no effect
    Pawn compiler 3.10.10                       Copyright &copy; 1997-2006, ITB CompuPhase


    1 Error.

* Skipping src\filterscripts\RP_Dealers.pwn
* Skipping src\filterscripts\RP_Friendship.pwn
* Skipping src\filterscripts\RP_Drugs.pwn
* Skipping src\filterscripts\RP_Houses.pwn
* Skipping src\filterscripts\RP_Phone.pwn
* Skipping src\npcmodes\RP_NPC_Intro1.pwn
========== Build: 2 succeeded, 1 failed, 6 skipped ==========</pre>
</div>If no errors or warnings were encountered, the pawncc output is ignored, otherwise it is shown after the corresponding line. If a file has been skipped it means that it had no changes since the last build (the .amx file is more recent than the source file).<br />
<br />
<br />
<font size="6"><font color="Red">C</font>onfiguring VSCode</font><br />
VSCode can be configure to build the script via this program in the tasks.json file. To open this file, simply go to the folder of your project and locate the .vscode folder, or more simply by clicking Task-&gt;Configure Tasks in the VSCode menu.<br />
<br />
The following is an example tasks.json:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 418px;
		text-align: left;
		overflow: auto">{
    "version": "2.0.0",
    "tasks": [
        {
            "label": "Build",
            "type": "shell",
            "command": "PawnMake.exe",
            "args": [ "&#36;{workspaceRoot}\\build.json" ],
            "group": {
                "kind": "build",
                "isDefault": true
            }
        },
        {
            "label": "Build and Run",
            "type": "shell",
            "command": "PawnMake.exe",
            "args": [ "&#36;{workspaceRoot}\\build.json", "-r" ],
            "group": {
                "kind": "test",
                "isDefault": true
            }
        }
    ]
}</pre>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] Discord Moderation Bot]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=675419</link>
			<pubDate>Tue, 12 May 2020 08:10:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=347725">JasonTheMan</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=675419</guid>
			<description><![CDATA[<div align="center"><img alt="" border="0" src="https://i.imgur.com/Ok4L3Uv.png"/></div><font color="RoyalBlue"><b><div align="center"><font size="7"><font face="Impact">Introduction</font></font></div></b></font><br />
<br />
<div align="center">Hey there! Name's Jason. I have been in the SAMP community for quite a while now and I noticed that a lot of servers use different bots for moderation such as Dyno, MEE6, etc. Me personally? I'm not a fan of those bots, I prefer to make my own stuff. So, what I got here today for you is a Discord moderation bot that I made for my server.<br />
</div>
<font color="RoyalBlue"><b><div align="center"><font size="7"><font face="Impact">Features</font></font></div></b></font><br />
<br />
<div align="center">This is a moderation bot, but I made sure to add some entertaining commands in there too. Its equipped with cool looking embeds (You can change their color in the script). Below you will find a list of all the commands the bot contains.<br />
<br />
<font size="4"><b><u><font color="RoyalBlue">First, it tells you that the commands have been sent in your DM's.</font></u></b></font><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/SWcnIWQ.png"/><br />
<br />
<font size="4"><b><u><font color="royalblue">Then it sends the commands in your DM's.</font></u></b></font><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/bt4rBC4.png"/></div>
<br />
<font color="RoyalBlue"><b><div align="center"><font size="7"><font face="Impact">Credits</font></font></div></b></font><br />
<br />
<b><div align="center"><font color="RoyalBlue">JasonTheMan(Myself) - For making the Bot<br />
<br />
Chaotic - For teaching me everything I know<br />
<br />
My Community - For all the support and ideas</font></div></b><br />
<br />
<font color="RoyalBlue"><b><div align="center"><font size="7"><font face="Impact">Download</font></font></div></b></font><br />
<br />
<div align="center"><font size="4">Github</font> - <a href="https://github.com/JasonTheMan-Discord/Utility-Bot" target="_blank">https://github.com/JasonTheMan-Discord/Utility-Bot</a></div>
<font color="RoyalBlue"><b><div align="center"><font size="7"><font face="Impact">Support</font></font></div></b></font><br />
<br />
<div align="center">Feel free to DM me in discord for any problems you are having. you want to add something to the bot but don't know how? Contact me, ill be glad to help you.<br />
<br />
<font size="3"><b><font color="RoyalBlue">Discord Name + Tag - JasonTheMan#6820</font></b></font></div>]]></description>
			<content:encoded><![CDATA[<div align="center"><img alt="" border="0" src="https://i.imgur.com/Ok4L3Uv.png"/></div><font color="RoyalBlue"><b><div align="center"><font size="7"><font face="Impact">Introduction</font></font></div></b></font><br />
<br />
<div align="center">Hey there! Name's Jason. I have been in the SAMP community for quite a while now and I noticed that a lot of servers use different bots for moderation such as Dyno, MEE6, etc. Me personally? I'm not a fan of those bots, I prefer to make my own stuff. So, what I got here today for you is a Discord moderation bot that I made for my server.<br />
</div>
<font color="RoyalBlue"><b><div align="center"><font size="7"><font face="Impact">Features</font></font></div></b></font><br />
<br />
<div align="center">This is a moderation bot, but I made sure to add some entertaining commands in there too. Its equipped with cool looking embeds (You can change their color in the script). Below you will find a list of all the commands the bot contains.<br />
<br />
<font size="4"><b><u><font color="RoyalBlue">First, it tells you that the commands have been sent in your DM's.</font></u></b></font><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/SWcnIWQ.png"/><br />
<br />
<font size="4"><b><u><font color="royalblue">Then it sends the commands in your DM's.</font></u></b></font><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/bt4rBC4.png"/></div>
<br />
<font color="RoyalBlue"><b><div align="center"><font size="7"><font face="Impact">Credits</font></font></div></b></font><br />
<br />
<b><div align="center"><font color="RoyalBlue">JasonTheMan(Myself) - For making the Bot<br />
<br />
Chaotic - For teaching me everything I know<br />
<br />
My Community - For all the support and ideas</font></div></b><br />
<br />
<font color="RoyalBlue"><b><div align="center"><font size="7"><font face="Impact">Download</font></font></div></b></font><br />
<br />
<div align="center"><font size="4">Github</font> - <a href="https://github.com/JasonTheMan-Discord/Utility-Bot" target="_blank">https://github.com/JasonTheMan-Discord/Utility-Bot</a></div>
<font color="RoyalBlue"><b><div align="center"><font size="7"><font face="Impact">Support</font></font></div></b></font><br />
<br />
<div align="center">Feel free to DM me in discord for any problems you are having. you want to add something to the bot but don't know how? Contact me, ill be glad to help you.<br />
<br />
<font size="3"><b><font color="RoyalBlue">Discord Name + Tag - JasonTheMan#6820</font></b></font></div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] CJ Discord Bot]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=675404</link>
			<pubDate>Mon, 11 May 2020 22:22:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=325995">KevTheJoker</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=675404</guid>
			<description><![CDATA[<div align="center"><img alt="" border="0" src="https://i.imgur.com/RPjdy1G.jpg"/><br />
<b><font face="Impact"><font size="7"><font color="grey">Carl Johnson (CJ) Discord Bot</font></font></font></b></div><blockquote>I, Kevin, present to you the Carl Johnson Discord Bot. This bot is one of a kind, which serves to make the lives of server owners easier. Its main aim is to display <b><font color="Red">LIVE</font></b> statistics of SAMP server, when its commands are used.<br />
<br />
For those who are new to SAMP or Grand Theft Auto San Andreas, Carl "CJ" Johnson is a character in the Grand Theft Auto series, appearing as the protagonist of Grand Theft Auto: San Andreas. CJ was voiced by Chris Bellard, better known as Young Maylay, who is the cousin of Shawn Fonteno, the voice actor for Franklin Clinton and Fam1.</blockquote><div align="center"><b><font size="5"><font face="Arial Black"><font color="#7289da">Here's how it works</font></font></font></b></div><blockquote>After inviting the bot to your guild with it's Oauth2 link, a table is created in our Database with your Discord server ID, default IP address, port, and prefix. Afterwards, you'll use the <b>-setup</b> command which guides you on how to change the default IP address (127.0.0.1) to your own (xxx.xxx.xxx.xxx).<br />
<br />
Image of what the commands look like:<br />
<b>-setip</b><br />
<img alt="" border="0" src="https://i.imgur.com/dqRtdC2.png"/><br />
<br />
<b>-setport</b><br />
<img alt="" border="0" src="https://i.imgur.com/IduVLC0.png"/><br />
<br />
<b>-server</b><br />
<img alt="" border="0" src="https://i.imgur.com/4LEUbz3.png"/><br />
<br />
<b>-players</b><br />
<img alt="" border="0" src="https://i.imgur.com/gjwG3IL.png"/><br />
<br />
<b>-bug</b><br />
<img alt="" border="0" src="https://i.imgur.com/hbgrvOz.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/IMyFyOP.png"/><br />
<br />
<b>-feedback</b><br />
<img alt="" border="0" src="https://i.imgur.com/3IkXxc0.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/lEm3JIw.png"/><br />
<br />
<b>-ip</b> and <b>-currentip</b><br />
<img alt="" border="0" src="https://i.imgur.com/H6g5MkX.png"/><br />
<br />
<b>-port</b> and <b>-currentport</b><br />
<img alt="" border="0" src="https://i.imgur.com/NELhJ1v.png"/><br />
<br />
<b>-code</b><br />
<img alt="" border="0" src="https://i.imgur.com/su1EwDP.png"/><br />
<br />
<b>-imgur</b> (I think we all know what <a href="https://imgur.com/" target="_blank">https://imgur.com/</a> is used for)<br />
I'll allow you to see what this command does. <img alt="" border="0" class="inlineimg" src="images/smilies/wink.png" title="Wink"/><br />
<br />
<br />
<b><font size="5"><font face="Arial Black"><div align="center"><font color="#7289da">Usage of information displayed in this Thread</font></div></font></font></b><br />
The IP address and Port of the information displayed in this thread does <b>NOT</b> belong to me and I have no intentions in inciting hoax. The server is just used as an example to show you, the viewers, what it looks like when the bot's commands are used.</blockquote><b><div align="center"><font face="Arial Black"><font size="5"><font color="#7289da">My to-do list</font></font></font></div></b><br />
<blockquote><ul><li>Working on the <b>-updates</b> command to get server owners connected with us.</li>
<li>Completing the -players command.</li>
<li>Working on the <b>-promote</b> command so you can have your SAMP server promoted and sponsored in our discord server, as soon as we hit 1000 members and 100 bot invites!</li>
<li>Getting the CJ Premium bot up and running with lots of other commands, esp. echoes from SAMP servers, such as player connects, disconnects, spawns, deaths, vehicles destruction, etc.</li>
<li>Build a website for CJ Bot and CJ Premium, so users can get aid when needed, instead of relying on staff members for everything.</li>
</ul></blockquote><b><div align="center"><font face="Arial Black"><font size="5"><font color="#7289da">Acknowledgement</font></font></font></div></b><blockquote>
Special thanks and appreciation is shown to three individuals who stood by my side through thick and thin, in getting my project into existence. Without them, I wouldn't providing this to the public:<ul><li>J.Whiteman - right hand man, who aided in every way possible.</li>
<li>JasonTheMan - co-founder and advisor.</li>
<li>Kalcor - the founder of SAMP. He's not a staff member, but he's thanked for the existence of the SAMP client.</li>
</ul></blockquote><b><div align="center"><font face="Arial Black"><font size="5"><font color="#7289da">Links</font></font></font></div></b><blockquote>
Official Discord Guild: <a href="https://discord.com/invite/6fzTZHR" target="_blank">https://discord.com/invite/6fzTZHR</a><br />
Bot Invitation: <a href="https://discord.com/oauth2/authorize?client_id=582240829234610206&amp;permissions=134573271&amp;scope=bot" target="_blank">https://discord.com/oauth2/authorize...3271&amp;scope=bot</a></blockquote>]]></description>
			<content:encoded><![CDATA[<div align="center"><img alt="" border="0" src="https://i.imgur.com/RPjdy1G.jpg"/><br />
<b><font face="Impact"><font size="7"><font color="grey">Carl Johnson (CJ) Discord Bot</font></font></font></b></div><blockquote>I, Kevin, present to you the Carl Johnson Discord Bot. This bot is one of a kind, which serves to make the lives of server owners easier. Its main aim is to display <b><font color="Red">LIVE</font></b> statistics of SAMP server, when its commands are used.<br />
<br />
For those who are new to SAMP or Grand Theft Auto San Andreas, Carl "CJ" Johnson is a character in the Grand Theft Auto series, appearing as the protagonist of Grand Theft Auto: San Andreas. CJ was voiced by Chris Bellard, better known as Young Maylay, who is the cousin of Shawn Fonteno, the voice actor for Franklin Clinton and Fam1.</blockquote><div align="center"><b><font size="5"><font face="Arial Black"><font color="#7289da">Here's how it works</font></font></font></b></div><blockquote>After inviting the bot to your guild with it's Oauth2 link, a table is created in our Database with your Discord server ID, default IP address, port, and prefix. Afterwards, you'll use the <b>-setup</b> command which guides you on how to change the default IP address (127.0.0.1) to your own (xxx.xxx.xxx.xxx).<br />
<br />
Image of what the commands look like:<br />
<b>-setip</b><br />
<img alt="" border="0" src="https://i.imgur.com/dqRtdC2.png"/><br />
<br />
<b>-setport</b><br />
<img alt="" border="0" src="https://i.imgur.com/IduVLC0.png"/><br />
<br />
<b>-server</b><br />
<img alt="" border="0" src="https://i.imgur.com/4LEUbz3.png"/><br />
<br />
<b>-players</b><br />
<img alt="" border="0" src="https://i.imgur.com/gjwG3IL.png"/><br />
<br />
<b>-bug</b><br />
<img alt="" border="0" src="https://i.imgur.com/hbgrvOz.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/IMyFyOP.png"/><br />
<br />
<b>-feedback</b><br />
<img alt="" border="0" src="https://i.imgur.com/3IkXxc0.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/lEm3JIw.png"/><br />
<br />
<b>-ip</b> and <b>-currentip</b><br />
<img alt="" border="0" src="https://i.imgur.com/H6g5MkX.png"/><br />
<br />
<b>-port</b> and <b>-currentport</b><br />
<img alt="" border="0" src="https://i.imgur.com/NELhJ1v.png"/><br />
<br />
<b>-code</b><br />
<img alt="" border="0" src="https://i.imgur.com/su1EwDP.png"/><br />
<br />
<b>-imgur</b> (I think we all know what <a href="https://imgur.com/" target="_blank">https://imgur.com/</a> is used for)<br />
I'll allow you to see what this command does. <img alt="" border="0" class="inlineimg" src="images/smilies/wink.png" title="Wink"/><br />
<br />
<br />
<b><font size="5"><font face="Arial Black"><div align="center"><font color="#7289da">Usage of information displayed in this Thread</font></div></font></font></b><br />
The IP address and Port of the information displayed in this thread does <b>NOT</b> belong to me and I have no intentions in inciting hoax. The server is just used as an example to show you, the viewers, what it looks like when the bot's commands are used.</blockquote><b><div align="center"><font face="Arial Black"><font size="5"><font color="#7289da">My to-do list</font></font></font></div></b><br />
<blockquote><ul><li>Working on the <b>-updates</b> command to get server owners connected with us.</li>
<li>Completing the -players command.</li>
<li>Working on the <b>-promote</b> command so you can have your SAMP server promoted and sponsored in our discord server, as soon as we hit 1000 members and 100 bot invites!</li>
<li>Getting the CJ Premium bot up and running with lots of other commands, esp. echoes from SAMP servers, such as player connects, disconnects, spawns, deaths, vehicles destruction, etc.</li>
<li>Build a website for CJ Bot and CJ Premium, so users can get aid when needed, instead of relying on staff members for everything.</li>
</ul></blockquote><b><div align="center"><font face="Arial Black"><font size="5"><font color="#7289da">Acknowledgement</font></font></font></div></b><blockquote>
Special thanks and appreciation is shown to three individuals who stood by my side through thick and thin, in getting my project into existence. Without them, I wouldn't providing this to the public:<ul><li>J.Whiteman - right hand man, who aided in every way possible.</li>
<li>JasonTheMan - co-founder and advisor.</li>
<li>Kalcor - the founder of SAMP. He's not a staff member, but he's thanked for the existence of the SAMP client.</li>
</ul></blockquote><b><div align="center"><font face="Arial Black"><font size="5"><font color="#7289da">Links</font></font></font></div></b><blockquote>
Official Discord Guild: <a href="https://discord.com/invite/6fzTZHR" target="_blank">https://discord.com/invite/6fzTZHR</a><br />
Bot Invitation: <a href="https://discord.com/oauth2/authorize?client_id=582240829234610206&amp;permissions=134573271&amp;scope=bot" target="_blank">https://discord.com/oauth2/authorize...3271&amp;scope=bot</a></blockquote>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] SA-MP RCON (Xamarin.Forms App)]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=674438</link>
			<pubDate>Sun, 19 Apr 2020 16:28:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=347128">Nacompllo</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=674438</guid>
			<description><![CDATA[<div align="center"><img alt="" border="0" src="https://1.bp.blogspot.com/-lFZ7Yfq_1X8/XpwYbbuzXdI/AAAAAAAACZU/6RkjCN5aE_0CE0VaZJDdC08MH_BfJC6hACLcBGAsYHQ/s1600/ic_launcher.png"/></div>
<b><font size="4">Description:</font></b><br />
<br />
This application is a RCON client for SA-MP developed with C # and Xamarin.Forms, it is open source so anyone can check its code or send a pull request. Currently the app is compatible with Android, although it would be relatively easy to develop a version for IOS, UWP or Tizen thanks to the fact that in Xamarin.Forms practically all the code is shared between platforms. Any suggestion or bug that you find in the application you can notify me so that I can solve it as soon as I can. The application is available in English, Russian, Portuguese and Spanish.<br />
<br />
<b><font size="4">News of the app:</font></b><br />
<br />
<a href="https://www.nacompllo.com/p/sa-mp-rcon.html" target="_blank"><font size="3">News of the app</font></a> <br />
<br />
<b><font size="4">Features of the app:</font></b><br />
<ul><li>Thanks to the <a href="https://monitor.sacnr.com/api.html" target="_blank">SACNR Monitor API</a>, the application displays a list of the servers that are online.</li>
<li>You can save / delete your favorite servers in a local database thanks to the use of <a href="https://github.com/praeclarum/sqlite-net" target="_blank">sqlite-net</a>.</li>
<li>You can remember your server's RCON password on your device so you don't have to type it every time you open the app (the password is kept encrypted on your device thanks to the use of <a href="https://docs.microsoft.com/en-us/dotnet/api/xamarin.essentials.securestorage?view=xamarin-essentials" target="_blank">SecureStorage</a>).</li>
</ul>
<b><font size="4">YouTube:</font></b><br />
<br />
<a href="https://www.youtube.com/watch?v=Vo_gUVQ91MA" target="_blank"><font size="3">YouTube video</font></a> <br />
<br />
<b><font size="4">Images:</font></b><br />
<br />
<div align="center">
<img alt="" border="0" src="https://1.bp.blogspot.com/-TA6XQ3yQiZQ/Xq2prru5cDI/AAAAAAAACcw/JvecxSveBAc5SX53TKMwTQ6WX5-6YEPLgCLcBGAsYHQ/s1600/2020-05-02_19-10-08.gif"/><br />
<br />
<img alt="" border="0" src="https://1.bp.blogspot.com/-atQQOYjabFc/Xq2qV2-clfI/AAAAAAAACdA/pee8rrclblgdHZAskz3qto3E3kPv4xQwQCLcBGAsYHQ/s1600/2020-05-02_19-13-44.gif"/><br />
<br />
<img alt="" border="0" src="https://1.bp.blogspot.com/-2EHP86-65eQ/Xq2qE-KWpjI/AAAAAAAACc4/fo_ARhwGXwoWhDawDBUmW5FAKIbNbyBlQCLcBGAsYHQ/s1600/2020-05-02_19-12-33.gif"/><br />
</div>
<b><font size="4">RCON Commands:</font></b><br />
<br />
<a href="https://sampwiki.blast.hk/wiki/RCON#RCON_Commands" target="_blank">List of available RCON commands</a><br />
<br />
<b><font size="4">Credits:</font></b><br />
<br />
<a href="https://github.com/nacompllo" target="_blank">Xamarin.Forms app developed by Nacompllo.</a><br />
<a href="https://monitor.sacnr.com/api.html" target="_blank">SACNR Monitor API</a><br />
<a href="https://sampwiki.blast.hk/wiki/Query_Mechanism/Csharp" target="_blank">RCON Query Mechanism example</a><br />
<br />
<b><font size="4">Icons:</font></b><br />
<br />
<a href="https://www.flaticon.com/authors/bqlqn" target="_blank">bqlqn</a><br />
<a href="https://www.flaticon.com/authors/freepik" target="_blank">Freepik</a><br />
<a href="https://www.flaticon.com/authors/surang" target="_blank">surang</a><br />
<a href="https://www.flaticon.com/authors/pixel-perfect" target="_blank">Pixel perfect</a><br />
<a href="https://www.flaticon.com/authors/itim2101" target="_blank">itim2101</a><br />
<br />
<b><font size="4">Downloads:</font></b><br />
<br />
<a href="https://www.nacompllo.com/p/sa-mp-rcon.html" target="_blank"><font size="3">Official Website (All available downloads)</font></a><br />
<br />
<a href="https://github.com/nacompllo/SampRcon" target="_blank"><font size="3">GitHub</font></a>]]></description>
			<content:encoded><![CDATA[<div align="center"><img alt="" border="0" src="https://1.bp.blogspot.com/-lFZ7Yfq_1X8/XpwYbbuzXdI/AAAAAAAACZU/6RkjCN5aE_0CE0VaZJDdC08MH_BfJC6hACLcBGAsYHQ/s1600/ic_launcher.png"/></div>
<b><font size="4">Description:</font></b><br />
<br />
This application is a RCON client for SA-MP developed with C # and Xamarin.Forms, it is open source so anyone can check its code or send a pull request. Currently the app is compatible with Android, although it would be relatively easy to develop a version for IOS, UWP or Tizen thanks to the fact that in Xamarin.Forms practically all the code is shared between platforms. Any suggestion or bug that you find in the application you can notify me so that I can solve it as soon as I can. The application is available in English, Russian, Portuguese and Spanish.<br />
<br />
<b><font size="4">News of the app:</font></b><br />
<br />
<a href="https://www.nacompllo.com/p/sa-mp-rcon.html" target="_blank"><font size="3">News of the app</font></a> <br />
<br />
<b><font size="4">Features of the app:</font></b><br />
<ul><li>Thanks to the <a href="https://monitor.sacnr.com/api.html" target="_blank">SACNR Monitor API</a>, the application displays a list of the servers that are online.</li>
<li>You can save / delete your favorite servers in a local database thanks to the use of <a href="https://github.com/praeclarum/sqlite-net" target="_blank">sqlite-net</a>.</li>
<li>You can remember your server's RCON password on your device so you don't have to type it every time you open the app (the password is kept encrypted on your device thanks to the use of <a href="https://docs.microsoft.com/en-us/dotnet/api/xamarin.essentials.securestorage?view=xamarin-essentials" target="_blank">SecureStorage</a>).</li>
</ul>
<b><font size="4">YouTube:</font></b><br />
<br />
<a href="https://www.youtube.com/watch?v=Vo_gUVQ91MA" target="_blank"><font size="3">YouTube video</font></a> <br />
<br />
<b><font size="4">Images:</font></b><br />
<br />
<div align="center">
<img alt="" border="0" src="https://1.bp.blogspot.com/-TA6XQ3yQiZQ/Xq2prru5cDI/AAAAAAAACcw/JvecxSveBAc5SX53TKMwTQ6WX5-6YEPLgCLcBGAsYHQ/s1600/2020-05-02_19-10-08.gif"/><br />
<br />
<img alt="" border="0" src="https://1.bp.blogspot.com/-atQQOYjabFc/Xq2qV2-clfI/AAAAAAAACdA/pee8rrclblgdHZAskz3qto3E3kPv4xQwQCLcBGAsYHQ/s1600/2020-05-02_19-13-44.gif"/><br />
<br />
<img alt="" border="0" src="https://1.bp.blogspot.com/-2EHP86-65eQ/Xq2qE-KWpjI/AAAAAAAACc4/fo_ARhwGXwoWhDawDBUmW5FAKIbNbyBlQCLcBGAsYHQ/s1600/2020-05-02_19-12-33.gif"/><br />
</div>
<b><font size="4">RCON Commands:</font></b><br />
<br />
<a href="https://sampwiki.blast.hk/wiki/RCON#RCON_Commands" target="_blank">List of available RCON commands</a><br />
<br />
<b><font size="4">Credits:</font></b><br />
<br />
<a href="https://github.com/nacompllo" target="_blank">Xamarin.Forms app developed by Nacompllo.</a><br />
<a href="https://monitor.sacnr.com/api.html" target="_blank">SACNR Monitor API</a><br />
<a href="https://sampwiki.blast.hk/wiki/Query_Mechanism/Csharp" target="_blank">RCON Query Mechanism example</a><br />
<br />
<b><font size="4">Icons:</font></b><br />
<br />
<a href="https://www.flaticon.com/authors/bqlqn" target="_blank">bqlqn</a><br />
<a href="https://www.flaticon.com/authors/freepik" target="_blank">Freepik</a><br />
<a href="https://www.flaticon.com/authors/surang" target="_blank">surang</a><br />
<a href="https://www.flaticon.com/authors/pixel-perfect" target="_blank">Pixel perfect</a><br />
<a href="https://www.flaticon.com/authors/itim2101" target="_blank">itim2101</a><br />
<br />
<b><font size="4">Downloads:</font></b><br />
<br />
<a href="https://www.nacompllo.com/p/sa-mp-rcon.html" target="_blank"><font size="3">Official Website (All available downloads)</font></a><br />
<br />
<a href="https://github.com/nacompllo/SampRcon" target="_blank"><font size="3">GitHub</font></a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[FilterScript] About timecyc editor]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=674398</link>
			<pubDate>Sat, 18 Apr 2020 18:57:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=347706">ImNotJoseff</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=674398</guid>
			<description><![CDATA[Hello, I'm sorry if I did this thread at the wrong prefix, but I just wanna ask about how I can make my own timecyc and how can I play with it in samp servers, thanks.]]></description>
			<content:encoded><![CDATA[Hello, I'm sorry if I did this thread at the wrong prefix, but I just wanna ask about how I can make my own timecyc and how can I play with it in samp servers, thanks.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] VisualTexture l Pawn - SA:MP]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=673075</link>
			<pubDate>Sun, 15 Mar 2020 04:18:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=330105">Mrhind</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=673075</guid>
			<description><![CDATA[<div align="center"><img alt="" border="0" src="https://i.imgur.com/FcNbH8q.png"/><img alt="" border="0" src="https://media.discordapp.net/attachments/522658194602852352/711783281611505684/unknown.png"/><br />
<br />
<font face="Comic Sans MS"><b><font size="5">Introduction</font></b></font></div>
<div align="left"><b>VisualTexture </b>is a tool that I have created with the intention of helping people who do not have an Internet connection in emergent situations, for example, people who use laptops and need to consult textures or animations, could use this tool or also consult colors. that are used in the SA: MP hexadecimal format.<br />
<br />
Im aware that there are other tools somewhere in the forum or outside it, but these tools are a bit incomplete, so I took the liberty of collecting some that already existed, and others were added by me and others.<br />
<br />
Currently, the tool no longer has updates, due to lack of time and help, in any case, maybe one day I will renew the code or update something.</div>
Credits: <a href="https://github.com/KaizerHind" target="_blank">KaizerHind</a>, Fedenet, <a href="https://github.com/DiegoSScript" target="_blank">Diego</a>, Darkthinking, <a href="https://sampforum.blast.hk/showthread.php?tid=35399" target="_blank">JaTochNietDan</a>, <a href="https://github.com/Zume-Zero/Pawn-Color-Picker" target="_blank">Zume</a>.<br />
<br />
<b><font color="Red">D</font>ownload:</b><br />
<a href="https://github.com/KaizerHind/VisualTexture_Pawn_SA-MP/releases" target="_blank">Download Application</a><br />
<br />
<b><font color="red">R</font>equired Libraries:</b><br />
<a href="https://github.com/KaizerHind/VisualTexture_Pawn_SA-MP/releases/download/1.2.3/Requirements.Important.rar" target="_blank">Download Requeriments</a><br />
<br />
<b><font color="red">S</font>ource:</b> (old)<br />
<a href="https://github.com/KaizerHind/VisualTexture_Pawn_SA-MP" target="_blank">Download Source. - Github</a><br />
<b><font color="red">S</font>ource:</b> (latest)<br />
<a href="https://github.com/KaizerHind/VisualTexturev_Pawn_SA-MP-v2" target="_blank">Download Source. - Github</a><br />
<br />
<b>Video:</b><br />
<a href="https://www.youtube.com/watch?v=cVLZPv-Hs2Y&amp;t" target="_blank">https://www.youtube.com/watch?v=cVLZPv-Hs2Y&amp;t</a>]]></description>
			<content:encoded><![CDATA[<div align="center"><img alt="" border="0" src="https://i.imgur.com/FcNbH8q.png"/><img alt="" border="0" src="https://media.discordapp.net/attachments/522658194602852352/711783281611505684/unknown.png"/><br />
<br />
<font face="Comic Sans MS"><b><font size="5">Introduction</font></b></font></div>
<div align="left"><b>VisualTexture </b>is a tool that I have created with the intention of helping people who do not have an Internet connection in emergent situations, for example, people who use laptops and need to consult textures or animations, could use this tool or also consult colors. that are used in the SA: MP hexadecimal format.<br />
<br />
Im aware that there are other tools somewhere in the forum or outside it, but these tools are a bit incomplete, so I took the liberty of collecting some that already existed, and others were added by me and others.<br />
<br />
Currently, the tool no longer has updates, due to lack of time and help, in any case, maybe one day I will renew the code or update something.</div>
Credits: <a href="https://github.com/KaizerHind" target="_blank">KaizerHind</a>, Fedenet, <a href="https://github.com/DiegoSScript" target="_blank">Diego</a>, Darkthinking, <a href="https://sampforum.blast.hk/showthread.php?tid=35399" target="_blank">JaTochNietDan</a>, <a href="https://github.com/Zume-Zero/Pawn-Color-Picker" target="_blank">Zume</a>.<br />
<br />
<b><font color="Red">D</font>ownload:</b><br />
<a href="https://github.com/KaizerHind/VisualTexture_Pawn_SA-MP/releases" target="_blank">Download Application</a><br />
<br />
<b><font color="red">R</font>equired Libraries:</b><br />
<a href="https://github.com/KaizerHind/VisualTexture_Pawn_SA-MP/releases/download/1.2.3/Requirements.Important.rar" target="_blank">Download Requeriments</a><br />
<br />
<b><font color="red">S</font>ource:</b> (old)<br />
<a href="https://github.com/KaizerHind/VisualTexture_Pawn_SA-MP" target="_blank">Download Source. - Github</a><br />
<b><font color="red">S</font>ource:</b> (latest)<br />
<a href="https://github.com/KaizerHind/VisualTexturev_Pawn_SA-MP-v2" target="_blank">Download Source. - Github</a><br />
<br />
<b>Video:</b><br />
<a href="https://www.youtube.com/watch?v=cVLZPv-Hs2Y&amp;t" target="_blank">https://www.youtube.com/watch?v=cVLZPv-Hs2Y&amp;t</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] bAnticheat [C# Client]]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=667208</link>
			<pubDate>Thu, 13 Jun 2019 12:36:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=181815">bruxo00</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=667208</guid>
			<description><![CDATA[<font face="Trebuchet MS"><br />
<div align="center">
<b><font color="Red"><font size="6">bAnticheat</font></font></b><br />
<img alt="" border="0" src="https://i.gyazo.com/8cae6b9e6779faaa2c94eb413d364458.png"/></div>
<br />
<b><font size="5">HOW DOES IT WORK?</font></b><br />
<br />
If a server is protected by bAnticheat, a player will only be able to play on it if it has the anticheat client opened in his computer. When a player connects to the server, he will need to input a code that was on the client for authentication purposes. That code will automatically be copied to the player clipboard. After connected, if the player closes the client, uses cheats, or whatever, it will be kicked by the server.<br />
<br />
When a player is banned, it's banned through hardware id, meaning it will only be able to join the server if it changes the hardware on the PC. This method can be improved.<br />
<br />
<br />
<b><font size="5">SCHEMA CONFIGURATION</font></b><br />
<br />
The first step is to understand the schema that the anticheat uses. When a player connects the anticheat to the server, the server will return a URL that will hold the schema. In this version, it's possible to detect altered game files (via checksum), forbidden files, forbidden directories and forbidden process. This is a simple scheme that I created so you can understand better:<br />
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
<span style="color: #0000BB"></span><span style="color: #007700">{
<br/>  </span><span style="color: #DD0000">"gtaRunning"</span><span style="color: #007700">: </span><span style="color: #0000BB">true</span><span style="color: #007700">,
<br/>  </span><span style="color: #DD0000">"sampRunning"</span><span style="color: #007700">: </span><span style="color: #0000BB">true</span><span style="color: #007700">,
<br/>  </span><span style="color: #DD0000">"monitorProcessesConstantly"</span><span style="color: #007700">: </span><span style="color: #0000BB">true</span><span style="color: #007700">,
<br/>  </span><span style="color: #DD0000">"validationFiles"</span><span style="color: #007700">: [
<br/>    {
<br/>      </span><span style="color: #DD0000">"path"</span><span style="color: #007700">: </span><span style="color: #DD0000">"gta_sa.exe"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"hash"</span><span style="color: #007700">: </span><span style="color: #DD0000">"a559aa772fd136379155efa71f00c47aad34bbfeae6196b0fe1047d0645cbd26"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">},
<br/>    {
<br/>      </span><span style="color: #DD0000">"path"</span><span style="color: #007700">: </span><span style="color: #DD0000">"newton.dll"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"hash"</span><span style="color: #007700">: </span><span style="color: #DD0000">"5a62625396abcd729d37c969de60b6ff72c36fe8bda4f1ad96a5b97f2e96040b"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">},
<br/>    {
<br/>      </span><span style="color: #DD0000">"path"</span><span style="color: #007700">: </span><span style="color: #DD0000">"data/weapon.dat"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"hash"</span><span style="color: #007700">: </span><span style="color: #DD0000">"033b3db45a00464fd95cb28870c97b45b0712f0ac53f3e8c586c88aaa0a420f8"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">}
<br/>  ],
<br/>  </span><span style="color: #DD0000">"forbiddenFiles"</span><span style="color: #007700">: [
<br/>    {
<br/>      </span><span style="color: #DD0000">"path"</span><span style="color: #007700">: </span><span style="color: #DD0000">"vorbisHooked.dll"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">}
<br/>  ],
<br/>  </span><span style="color: #DD0000">"forbiddenDirectories"</span><span style="color: #007700">: [
<br/>    {
<br/>      </span><span style="color: #DD0000">"path"</span><span style="color: #007700">: </span><span style="color: #DD0000">"modloader"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">}
<br/>  ],
<br/>  </span><span style="color: #DD0000">"forbiddenProcesses"</span><span style="color: #007700">: [
<br/>    {
<br/>      </span><span style="color: #DD0000">"name"</span><span style="color: #007700">: </span><span style="color: #DD0000">"cheatengine"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">},
<br/>    {
<br/>      </span><span style="color: #DD0000">"name"</span><span style="color: #007700">: </span><span style="color: #DD0000">"samphack"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"NONE"
<br/>    </span><span style="color: #007700">}
<br/>  ]
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>This is a JSON object that holds the instructions that the anticheat will understand and execute. Gonna explain every field:<br />
<br />
<b>gtaRunning</b> - if <b>true</b>, the AC will be constantly monitoring if GTA is running and also if the running GTA instance is the same that was analysed by the anticheat. This will previne that a player can have multiple installs of GTA, one with cheats and the other one without, and will be always forced to use the clean install. Not having the GTA running or not having the GTA running from the "oficial" location, will result in a kick.<br />
<br />
<b>sampRunning</b> - if <b>true</b>, the AC will be constantly monitoring if SAMP is running. It probably can be useful for someone, or in future versions.<br />
<br />
<b>monitorProcessesConstantly</b> - if <b>true</b>, the AC will be constantly monitoring the running processes in the player computer. If it founds a forbidden one, he will be kicked.<br />
<br />
<b>validationFiles</b> - array of files. The AC will compare the checksums of the player files with the checksum you enter in the schema. If the checksums are different, the AC will execute the action defined for that specific file. At this time, there is only one action avaliable, that is <b>PREVENT_CONNECT</b>, that will prevent the AC to connect to the server. In future versions will be more.<br />
<br />
<b>forbiddenFiles</b> - array of files. The AC will verify if any of the forbidden files exist in the GTA directory. If it does, the action for that specific file will be executed.<br />
<br />
<b>forbiddenDirectories</b> - array of directories. The AC will verify if any of the forbidden directory exist in the GTA directory. If it does, the action for that specific file will be executed.<br />
<br />
<b>forbiddenProcesses</b> - array of processes. The AC will check if any forbidden process is being executed. If it does, the action for that specific process will be executed.<br />
<br />
For those who are not familiarized with JSON, you can use this site to try to visualize it better:<br />
<a href="https://jsoneditoronline.org" target="_blank">https://jsoneditoronline.org</a><br />
<br />
Site to check files checksum (sha256):<br />
<a href="https://md5file.com/calculator" target="_blank">https://md5file.com/calculator</a><br />
<br />
<br />
<b><font size="5">CONFIGURE FILTERSCRIPT</font></b><br />
<br />
First, you will need to create a folder named <b>bac</b> inside the filterscripts. In that folder, create an empty file named <b>uids.txt</b>.<br />
<br />
Change the define <b>SECURITY_CODE</b> to the client checksum (compile the client, go to the site above and get the sha256 checksum), if you done any code changes in the client project.<br />
<br />
Change the define <b>SCHEMA_URL</b> to the schema created by you. You will need to host it in some place, I recommend pastebin (raw).<br />
<br />
Compile.<br />
<br />
<b><font size="5">HOW TO CONNECT THE ANTICHEAT</font></b><br />
<br />
Open the client, enter the server IP and click connect. If you have done everything right, you will now see the message: <b>Validated. Waiting for player to join.</b> You will also see a 5 digit code near the button. That code will need to be introduced in the server. (Just CTRL+V, it's already in your clipboard)<br />
<br />
<br />
<b><font size="5">PRINTSCREENS</font></b><br />
<br />
<b>Interface</b><br />
<img alt="" border="0" src="https://i.gyazo.com/51825c3f6dae2f92c1988819e2f395d5.png"/><br />
<br />
<b>Altered file alert</b><br />
<img alt="" border="0" src="https://i.gyazo.com/54321a0ef80bbc7800afbdf608681723.png"/><br />
<br />
<b>Banned player</b><br />
<img alt="" border="0" src="https://i.gyazo.com/4f0345f8ca472a61127940a2c3856f6d.png"/><br />
<br />
<b>Introduce the join code</b><br />
<img alt="" border="0" src="https://i.gyazo.com/eeccc5df3b03bffb0bc481a06eb481ea.png"/><br />
<br />
<b>If you try to enter without the Anticheat</b><br />
<img alt="" border="0" src="https://i.gyazo.com/09f14f576c06156cd57ef3280f40719b.png"/><br />
<br />
<b><font size="5">DEPENDENCIES</font></b><br />
<br />
<a href="https://github.com/oscar-broman/strlib" target="_blank">strlib</a><br />
<a href="https://github.com/Southclaws/zcmd/blob/master/zcmd.inc" target="_blank">zcmd</a><br />
<a href="https://github.com/maddinat0r/sscanf/releases" target="_blank">sscanf</a><br />
<a href="https://mega.nz/#!ScATEAbA!lGz_Ax5_P08RRY4bjE-4x9_JAeklWSmmVDpxRF5WW9k" target="_blank">socket [0.1b] with fixes</a><br />
<br />
<b><font size="5">ADMIN COMMANDS</font></b><br />
<br />
<b>/bacban</b> - permanently bans a player<br />
<b>/bacinfo</b> - displays some information about a player<br />
<br />
<b><font size="5">DOWNLOADS</font></b><br />
<br />
<a href="https://github.com/bruxo00/bAntiCheat/releases/tag/2.0.0" target="_blank"><font size="4">CLIENT</font></a><br />
<a href="https://github.com/bruxo00/bAntiCheat/archive/master.zip" target="_blank"><font size="4">SOURCE (CLIENT + FILTERSCRIPT)</font></a><br />
<a href="https://github.com/bruxo00/bAntiCheat" target="_blank"><font size="4">REPOSITORY</font></a><br />
<br />
<br />
</font>]]></description>
			<content:encoded><![CDATA[<font face="Trebuchet MS"><br />
<div align="center">
<b><font color="Red"><font size="6">bAnticheat</font></font></b><br />
<img alt="" border="0" src="https://i.gyazo.com/8cae6b9e6779faaa2c94eb413d364458.png"/></div>
<br />
<b><font size="5">HOW DOES IT WORK?</font></b><br />
<br />
If a server is protected by bAnticheat, a player will only be able to play on it if it has the anticheat client opened in his computer. When a player connects to the server, he will need to input a code that was on the client for authentication purposes. That code will automatically be copied to the player clipboard. After connected, if the player closes the client, uses cheats, or whatever, it will be kicked by the server.<br />
<br />
When a player is banned, it's banned through hardware id, meaning it will only be able to join the server if it changes the hardware on the PC. This method can be improved.<br />
<br />
<br />
<b><font size="5">SCHEMA CONFIGURATION</font></b><br />
<br />
The first step is to understand the schema that the anticheat uses. When a player connects the anticheat to the server, the server will return a URL that will hold the schema. In this version, it's possible to detect altered game files (via checksum), forbidden files, forbidden directories and forbidden process. This is a simple scheme that I created so you can understand better:<br />
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
<span style="color: #0000BB"></span><span style="color: #007700">{
<br/>  </span><span style="color: #DD0000">"gtaRunning"</span><span style="color: #007700">: </span><span style="color: #0000BB">true</span><span style="color: #007700">,
<br/>  </span><span style="color: #DD0000">"sampRunning"</span><span style="color: #007700">: </span><span style="color: #0000BB">true</span><span style="color: #007700">,
<br/>  </span><span style="color: #DD0000">"monitorProcessesConstantly"</span><span style="color: #007700">: </span><span style="color: #0000BB">true</span><span style="color: #007700">,
<br/>  </span><span style="color: #DD0000">"validationFiles"</span><span style="color: #007700">: [
<br/>    {
<br/>      </span><span style="color: #DD0000">"path"</span><span style="color: #007700">: </span><span style="color: #DD0000">"gta_sa.exe"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"hash"</span><span style="color: #007700">: </span><span style="color: #DD0000">"a559aa772fd136379155efa71f00c47aad34bbfeae6196b0fe1047d0645cbd26"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">},
<br/>    {
<br/>      </span><span style="color: #DD0000">"path"</span><span style="color: #007700">: </span><span style="color: #DD0000">"newton.dll"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"hash"</span><span style="color: #007700">: </span><span style="color: #DD0000">"5a62625396abcd729d37c969de60b6ff72c36fe8bda4f1ad96a5b97f2e96040b"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">},
<br/>    {
<br/>      </span><span style="color: #DD0000">"path"</span><span style="color: #007700">: </span><span style="color: #DD0000">"data/weapon.dat"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"hash"</span><span style="color: #007700">: </span><span style="color: #DD0000">"033b3db45a00464fd95cb28870c97b45b0712f0ac53f3e8c586c88aaa0a420f8"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">}
<br/>  ],
<br/>  </span><span style="color: #DD0000">"forbiddenFiles"</span><span style="color: #007700">: [
<br/>    {
<br/>      </span><span style="color: #DD0000">"path"</span><span style="color: #007700">: </span><span style="color: #DD0000">"vorbisHooked.dll"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">}
<br/>  ],
<br/>  </span><span style="color: #DD0000">"forbiddenDirectories"</span><span style="color: #007700">: [
<br/>    {
<br/>      </span><span style="color: #DD0000">"path"</span><span style="color: #007700">: </span><span style="color: #DD0000">"modloader"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">}
<br/>  ],
<br/>  </span><span style="color: #DD0000">"forbiddenProcesses"</span><span style="color: #007700">: [
<br/>    {
<br/>      </span><span style="color: #DD0000">"name"</span><span style="color: #007700">: </span><span style="color: #DD0000">"cheatengine"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"PREVENT_CONNECT"
<br/>    </span><span style="color: #007700">},
<br/>    {
<br/>      </span><span style="color: #DD0000">"name"</span><span style="color: #007700">: </span><span style="color: #DD0000">"samphack"</span><span style="color: #007700">,
<br/>      </span><span style="color: #DD0000">"action"</span><span style="color: #007700">: </span><span style="color: #DD0000">"NONE"
<br/>    </span><span style="color: #007700">}
<br/>  ]
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>This is a JSON object that holds the instructions that the anticheat will understand and execute. Gonna explain every field:<br />
<br />
<b>gtaRunning</b> - if <b>true</b>, the AC will be constantly monitoring if GTA is running and also if the running GTA instance is the same that was analysed by the anticheat. This will previne that a player can have multiple installs of GTA, one with cheats and the other one without, and will be always forced to use the clean install. Not having the GTA running or not having the GTA running from the "oficial" location, will result in a kick.<br />
<br />
<b>sampRunning</b> - if <b>true</b>, the AC will be constantly monitoring if SAMP is running. It probably can be useful for someone, or in future versions.<br />
<br />
<b>monitorProcessesConstantly</b> - if <b>true</b>, the AC will be constantly monitoring the running processes in the player computer. If it founds a forbidden one, he will be kicked.<br />
<br />
<b>validationFiles</b> - array of files. The AC will compare the checksums of the player files with the checksum you enter in the schema. If the checksums are different, the AC will execute the action defined for that specific file. At this time, there is only one action avaliable, that is <b>PREVENT_CONNECT</b>, that will prevent the AC to connect to the server. In future versions will be more.<br />
<br />
<b>forbiddenFiles</b> - array of files. The AC will verify if any of the forbidden files exist in the GTA directory. If it does, the action for that specific file will be executed.<br />
<br />
<b>forbiddenDirectories</b> - array of directories. The AC will verify if any of the forbidden directory exist in the GTA directory. If it does, the action for that specific file will be executed.<br />
<br />
<b>forbiddenProcesses</b> - array of processes. The AC will check if any forbidden process is being executed. If it does, the action for that specific process will be executed.<br />
<br />
For those who are not familiarized with JSON, you can use this site to try to visualize it better:<br />
<a href="https://jsoneditoronline.org" target="_blank">https://jsoneditoronline.org</a><br />
<br />
Site to check files checksum (sha256):<br />
<a href="https://md5file.com/calculator" target="_blank">https://md5file.com/calculator</a><br />
<br />
<br />
<b><font size="5">CONFIGURE FILTERSCRIPT</font></b><br />
<br />
First, you will need to create a folder named <b>bac</b> inside the filterscripts. In that folder, create an empty file named <b>uids.txt</b>.<br />
<br />
Change the define <b>SECURITY_CODE</b> to the client checksum (compile the client, go to the site above and get the sha256 checksum), if you done any code changes in the client project.<br />
<br />
Change the define <b>SCHEMA_URL</b> to the schema created by you. You will need to host it in some place, I recommend pastebin (raw).<br />
<br />
Compile.<br />
<br />
<b><font size="5">HOW TO CONNECT THE ANTICHEAT</font></b><br />
<br />
Open the client, enter the server IP and click connect. If you have done everything right, you will now see the message: <b>Validated. Waiting for player to join.</b> You will also see a 5 digit code near the button. That code will need to be introduced in the server. (Just CTRL+V, it's already in your clipboard)<br />
<br />
<br />
<b><font size="5">PRINTSCREENS</font></b><br />
<br />
<b>Interface</b><br />
<img alt="" border="0" src="https://i.gyazo.com/51825c3f6dae2f92c1988819e2f395d5.png"/><br />
<br />
<b>Altered file alert</b><br />
<img alt="" border="0" src="https://i.gyazo.com/54321a0ef80bbc7800afbdf608681723.png"/><br />
<br />
<b>Banned player</b><br />
<img alt="" border="0" src="https://i.gyazo.com/4f0345f8ca472a61127940a2c3856f6d.png"/><br />
<br />
<b>Introduce the join code</b><br />
<img alt="" border="0" src="https://i.gyazo.com/eeccc5df3b03bffb0bc481a06eb481ea.png"/><br />
<br />
<b>If you try to enter without the Anticheat</b><br />
<img alt="" border="0" src="https://i.gyazo.com/09f14f576c06156cd57ef3280f40719b.png"/><br />
<br />
<b><font size="5">DEPENDENCIES</font></b><br />
<br />
<a href="https://github.com/oscar-broman/strlib" target="_blank">strlib</a><br />
<a href="https://github.com/Southclaws/zcmd/blob/master/zcmd.inc" target="_blank">zcmd</a><br />
<a href="https://github.com/maddinat0r/sscanf/releases" target="_blank">sscanf</a><br />
<a href="https://mega.nz/#!ScATEAbA!lGz_Ax5_P08RRY4bjE-4x9_JAeklWSmmVDpxRF5WW9k" target="_blank">socket [0.1b] with fixes</a><br />
<br />
<b><font size="5">ADMIN COMMANDS</font></b><br />
<br />
<b>/bacban</b> - permanently bans a player<br />
<b>/bacinfo</b> - displays some information about a player<br />
<br />
<b><font size="5">DOWNLOADS</font></b><br />
<br />
<a href="https://github.com/bruxo00/bAntiCheat/releases/tag/2.0.0" target="_blank"><font size="4">CLIENT</font></a><br />
<a href="https://github.com/bruxo00/bAntiCheat/archive/master.zip" target="_blank"><font size="4">SOURCE (CLIENT + FILTERSCRIPT)</font></a><br />
<a href="https://github.com/bruxo00/bAntiCheat" target="_blank"><font size="4">REPOSITORY</font></a><br />
<br />
<br />
</font>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] PAWN Fiddle - Share & run PAWN code online]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665358</link>
			<pubDate>Sun, 31 Mar 2019 21:35:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=221253">Peek</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665358</guid>
			<description><![CDATA[<div align="center"><font size="6"><u><b>PAWN Fiddle</b></u></font><br />
Share &amp; run PAWN code</div>
PAWN Fiddle is a playground platform for the PAWN scripting language. Create, execute, fork and share code snippets across the SA-MP community.<br />
<br />
<font size="4"><b>What is this for?</b></font><br />
If you need help with your code, you can use this fiddle service instead of posting big code blocks in the forum or discord which isn't really testable. With PAWN Fiddle you can send a complete example of your problem, which makes it easier for the other person to fix your code / help you with the integrated compiler and plugin / include support. This could also be used to demonstrate the use of your plugin / include (provided it's a sampctl-compatible PAWN-package), or snippet hosting.<br />
<br />
<font size="4"><b>How do I use this?</b></font><ol style="list-style-type: decimal"><li>Navigate to <a href="https://fiddle.sa-mp.dev" target="_blank">https://fiddle.sa-mp.dev</a></li>
<li>Select the dependencies your fiddle needs.<br />
<img alt="" border="0" src="https://i.imgur.com/KyfSbp1.png"/></li>
<li>Write / Paste your code.<br />
<img alt="" border="0" src="https://i.imgur.com/bVGk19t.png"/></li>
<li>Check if your code compiles, by clicking the Run button.<br />
<img alt="" border="0" src="https://i.imgur.com/IwHFRNg.png"/></li>
<li>Share your fiddle with the world.<br />
<img alt="" border="0" src="https://i.imgur.com/iJrwzz8.png"/></li>
</ol>
<font size="4"><b>Liveserver (Beta)</b></font><br />
<a href="https://fiddle.sa-mp.dev" target="_blank">https://fiddle.sa-mp.dev</a><br />
<br />
<font size="4"><b>GitHub (Source Code)</b></font><br />
<a href="https://github.com/samp-dev/fiddle" target="_blank">https://github.com/samp-dev/fiddle</a>]]></description>
			<content:encoded><![CDATA[<div align="center"><font size="6"><u><b>PAWN Fiddle</b></u></font><br />
Share &amp; run PAWN code</div>
PAWN Fiddle is a playground platform for the PAWN scripting language. Create, execute, fork and share code snippets across the SA-MP community.<br />
<br />
<font size="4"><b>What is this for?</b></font><br />
If you need help with your code, you can use this fiddle service instead of posting big code blocks in the forum or discord which isn't really testable. With PAWN Fiddle you can send a complete example of your problem, which makes it easier for the other person to fix your code / help you with the integrated compiler and plugin / include support. This could also be used to demonstrate the use of your plugin / include (provided it's a sampctl-compatible PAWN-package), or snippet hosting.<br />
<br />
<font size="4"><b>How do I use this?</b></font><ol style="list-style-type: decimal"><li>Navigate to <a href="https://fiddle.sa-mp.dev" target="_blank">https://fiddle.sa-mp.dev</a></li>
<li>Select the dependencies your fiddle needs.<br />
<img alt="" border="0" src="https://i.imgur.com/KyfSbp1.png"/></li>
<li>Write / Paste your code.<br />
<img alt="" border="0" src="https://i.imgur.com/bVGk19t.png"/></li>
<li>Check if your code compiles, by clicking the Run button.<br />
<img alt="" border="0" src="https://i.imgur.com/IwHFRNg.png"/></li>
<li>Share your fiddle with the world.<br />
<img alt="" border="0" src="https://i.imgur.com/iJrwzz8.png"/></li>
</ol>
<font size="4"><b>Liveserver (Beta)</b></font><br />
<a href="https://fiddle.sa-mp.dev" target="_blank">https://fiddle.sa-mp.dev</a><br />
<br />
<font size="4"><b>GitHub (Source Code)</b></font><br />
<a href="https://github.com/samp-dev/fiddle" target="_blank">https://github.com/samp-dev/fiddle</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] FS Of Police Chase (Type: Need For Speed) Full Textdraw/BAR]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665063</link>
			<pubDate>Thu, 21 Mar 2019 00:57:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=322827">Cromartie</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665063</guid>
			<description><![CDATA[<font color="Red"><b><font size="5">Police system</font></b></font> <font color="DarkOrange"><font size="5"><b>[PROJECT]</b></font></font> <b><font color="Black"><font size="3">-</font></font></b> <font size="4"><b><font color="DarkGreen">FS is almost done.</font></b></font><br />
<br />
I'm on a project for a complete police system, similar to those for Need For Speed. (Need for speed Most Wanted)<br />
The FS is practically ready, all you need to do is set the time each weapon will take to load.<br />
<br />
<font color="red"><b><font size="4">FS contains:</font></b></font><br />
Bar WANTED = if a BAR is full, car to the sigh to walk off Turns the MOTOR, turns the ALERT, car stays with 1% of HP (Black smoke)<br />
SCAPE bar = if a full bar, full of police fear (Marker of the suspect becomes INVISIBLE), such as "Wanted / Escape / Level Bars and Texts are no longer seen by Suspect".<br />
LEVEL = Suscept bar from 1 to 6 (Increase / decrease risk / low). (Not the same as the singleplayer Wanted stars)<br />
Bar Search = Only appears in the police, when the SCAPE bar is full, is the suspect not see more as WANTED, SCAPE BARS. She seeks sus sus in the 500m<br />
Radar = Gangzone police flash (RED / BLUE) do not RADAR for everyone SEE<br />
Show that the Police Officer is Suspect (APPEAR for the 2) in METERS<br />
View a distance variation in seconds (APPEAR for 2).<br />
<br />
4 ARMS for police officer<br />
5 WEAPONS for the suspect<br />
Weapons Bar = GO GREEN when ready to use, while you're doing transparent<br />
<br />
<font color="red"><font size="3"><b>Weapons:</b></font></font><br />
<font color="Blue"><font size="3"><b>Cop:</b></font></font><br />
RPG Shooting: Car launches a missile forward<br />
Interference: It releases the TYPE intercept the missile, but when it hits, it does not explode but the car makes suspicious starts to turn on and off the engine, turning the alert on and off ... (after a few seconds it returns to normal)<br />
Turbo: Increases speed by 5 Seconds, then returns to normal.<br />
Impulse: Drive the police route forward, if the engine sigh, drill the 2 tires from behind, turn the car engine off for a few seconds. (Similar to the San Francisco Driver's DRIVE mode, Need for Speed ​​...) can easily configure drive efficiency.<br />
<br />
<font color="red"><font size="3"><b>Suspect</b>:</font></font><br />
Shield: Increases the car's LIFE to "99999999" for 10 SECONDS, then returns to normal LIFE<br />
Camouflage: The POINT / NAME of the PLAYER is invisible on the map for 5 SECONDS, and the police officer with the suspect for 5 seconds<br />
Turbo: Increases speed by 5 Seconds, then returns to normal.<br />
Landmine: Car unlocks a MINA, if the police line goes over to explode<br />
Safe Area: Creates 7 safe areas for the role of suspect, if the suspect is inside the safe area, it is almost impossible to be suspicious, INVISIVEL Point / nick, invisible TAG ... (Total of 30 places each time you type the command , opens 7 random safe areas) 0.001% chance of safe cop find, kkk<br />
<br />
<font color="Red"><font size="3"><b>Watch the VIDEO, and give suggestions and tips that improve or not in FS, soon I will be posting as FS!</b></font></font><br />
<b><font size="3">VIDEO LINK: <a href="https://www.youtube.com/watch?v=ADMntblhVWU" target="_blank">https://www.youtube.com/watch?v=ADMntblhVWU</a></font></b>]]></description>
			<content:encoded><![CDATA[<font color="Red"><b><font size="5">Police system</font></b></font> <font color="DarkOrange"><font size="5"><b>[PROJECT]</b></font></font> <b><font color="Black"><font size="3">-</font></font></b> <font size="4"><b><font color="DarkGreen">FS is almost done.</font></b></font><br />
<br />
I'm on a project for a complete police system, similar to those for Need For Speed. (Need for speed Most Wanted)<br />
The FS is practically ready, all you need to do is set the time each weapon will take to load.<br />
<br />
<font color="red"><b><font size="4">FS contains:</font></b></font><br />
Bar WANTED = if a BAR is full, car to the sigh to walk off Turns the MOTOR, turns the ALERT, car stays with 1% of HP (Black smoke)<br />
SCAPE bar = if a full bar, full of police fear (Marker of the suspect becomes INVISIBLE), such as "Wanted / Escape / Level Bars and Texts are no longer seen by Suspect".<br />
LEVEL = Suscept bar from 1 to 6 (Increase / decrease risk / low). (Not the same as the singleplayer Wanted stars)<br />
Bar Search = Only appears in the police, when the SCAPE bar is full, is the suspect not see more as WANTED, SCAPE BARS. She seeks sus sus in the 500m<br />
Radar = Gangzone police flash (RED / BLUE) do not RADAR for everyone SEE<br />
Show that the Police Officer is Suspect (APPEAR for the 2) in METERS<br />
View a distance variation in seconds (APPEAR for 2).<br />
<br />
4 ARMS for police officer<br />
5 WEAPONS for the suspect<br />
Weapons Bar = GO GREEN when ready to use, while you're doing transparent<br />
<br />
<font color="red"><font size="3"><b>Weapons:</b></font></font><br />
<font color="Blue"><font size="3"><b>Cop:</b></font></font><br />
RPG Shooting: Car launches a missile forward<br />
Interference: It releases the TYPE intercept the missile, but when it hits, it does not explode but the car makes suspicious starts to turn on and off the engine, turning the alert on and off ... (after a few seconds it returns to normal)<br />
Turbo: Increases speed by 5 Seconds, then returns to normal.<br />
Impulse: Drive the police route forward, if the engine sigh, drill the 2 tires from behind, turn the car engine off for a few seconds. (Similar to the San Francisco Driver's DRIVE mode, Need for Speed ​​...) can easily configure drive efficiency.<br />
<br />
<font color="red"><font size="3"><b>Suspect</b>:</font></font><br />
Shield: Increases the car's LIFE to "99999999" for 10 SECONDS, then returns to normal LIFE<br />
Camouflage: The POINT / NAME of the PLAYER is invisible on the map for 5 SECONDS, and the police officer with the suspect for 5 seconds<br />
Turbo: Increases speed by 5 Seconds, then returns to normal.<br />
Landmine: Car unlocks a MINA, if the police line goes over to explode<br />
Safe Area: Creates 7 safe areas for the role of suspect, if the suspect is inside the safe area, it is almost impossible to be suspicious, INVISIVEL Point / nick, invisible TAG ... (Total of 30 places each time you type the command , opens 7 random safe areas) 0.001% chance of safe cop find, kkk<br />
<br />
<font color="Red"><font size="3"><b>Watch the VIDEO, and give suggestions and tips that improve or not in FS, soon I will be posting as FS!</b></font></font><br />
<b><font size="3">VIDEO LINK: <a href="https://www.youtube.com/watch?v=ADMntblhVWU" target="_blank">https://www.youtube.com/watch?v=ADMntblhVWU</a></font></b>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] How to get information inside nodes*.dat files?]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=664614</link>
			<pubDate>Tue, 05 Mar 2019 15:35:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=323896">FR0DG3R</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=664614</guid>
			<description><![CDATA[I need to read these files and obtain information about the nodes inside it, I've seen tools that help you edit or see the content inside the files like <a href="https://sampforum.blast.hk/showthread.php?tid=496809&amp;highlight=nodes+.dat" target="_blank">Kyle's GPS Route Finder</a>, <a href="https://gtaforums.com/topic/226138-wip-sa-path-editor/" target="_blank">JGuntherS@NL's SA Path Editor</a> and <a href="https://gtaforums.com/topic/283684-sa-path-tool/" target="_blank">Deniska's SA Path Tool</a> but what I really want is to make my own reading of the files.<br />
<br />
What I want, in details, is:<ul><li>Decompile nodes*.dat and/or read them through an algorithm</li>
<li>Use a C++ code or something to filter this content and obtain what I want (e.g. nodes coords)</li>
<li>Implement this nodes in my own SA-MP scripting project﻿﻿﻿﻿</li>
</ul>
Seems like an easy thing to do since many are doing without explaining how.<br />
Please let me know if I can explain something better.]]></description>
			<content:encoded><![CDATA[I need to read these files and obtain information about the nodes inside it, I've seen tools that help you edit or see the content inside the files like <a href="https://sampforum.blast.hk/showthread.php?tid=496809&amp;highlight=nodes+.dat" target="_blank">Kyle's GPS Route Finder</a>, <a href="https://gtaforums.com/topic/226138-wip-sa-path-editor/" target="_blank">JGuntherS@NL's SA Path Editor</a> and <a href="https://gtaforums.com/topic/283684-sa-path-tool/" target="_blank">Deniska's SA Path Tool</a> but what I really want is to make my own reading of the files.<br />
<br />
What I want, in details, is:<ul><li>Decompile nodes*.dat and/or read them through an algorithm</li>
<li>Use a C++ code or something to filter this content and obtain what I want (e.g. nodes coords)</li>
<li>Implement this nodes in my own SA-MP scripting project﻿﻿﻿﻿</li>
</ul>
Seems like an easy thing to do since many are doing without explaining how.<br />
Please let me know if I can explain something better.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] [WEBSITE TEMPLATE] Single SaWeb]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=662064</link>
			<pubDate>Sat, 22 Dec 2018 20:37:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=323692">KaliDobrev</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=662064</guid>
			<description><![CDATA[<img alt="" border="0" src="https://i.imgur.com/9qxrPRw.jpg"/><br />
<img alt="" border="0" src="https://i.imgur.com/A9j4Ltc.jpg"/><br />
<img alt="" border="0" src="https://i.imgur.com/w8N9aYT.jpg"/><br />
<img alt="" border="0" src="https://i.imgur.com/GFwoeCc.jpg"/><br />
<img alt="" border="0" src="https://i.imgur.com/8zNs4j0.jpg"/><br />
<br />
Download: <a href="https://github.com/WifSonStudios/singlesaweb" target="_blank">https://github.com/WifSonStudios/singlesaweb</a>]]></description>
			<content:encoded><![CDATA[<img alt="" border="0" src="https://i.imgur.com/9qxrPRw.jpg"/><br />
<img alt="" border="0" src="https://i.imgur.com/A9j4Ltc.jpg"/><br />
<img alt="" border="0" src="https://i.imgur.com/w8N9aYT.jpg"/><br />
<img alt="" border="0" src="https://i.imgur.com/GFwoeCc.jpg"/><br />
<img alt="" border="0" src="https://i.imgur.com/8zNs4j0.jpg"/><br />
<br />
Download: <a href="https://github.com/WifSonStudios/singlesaweb" target="_blank">https://github.com/WifSonStudios/singlesaweb</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] Problema com a GameModes]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=661874</link>
			<pubDate>Mon, 17 Dec 2018 17:06:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=325462">MarcinhoSilva</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=661874</guid>
			<description><![CDATA[Alguйm pode passa entrar em contato comigo. Estou com problema muito sйrio ao ponto de ficar doido<img alt="" border="0" class="inlineimg" src="images/smilies/sad.gif" title="Sad"/>]]></description>
			<content:encoded><![CDATA[Alguйm pode passa entrar em contato comigo. Estou com problema muito sйrio ao ponto de ficar doido<img alt="" border="0" class="inlineimg" src="images/smilies/sad.gif" title="Sad"/>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] SA:MP Logo & Banner | PSD File | Winter Edition]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=661836</link>
			<pubDate>Sun, 16 Dec 2018 09:27:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=325278">ek2k18</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=661836</guid>
			<description><![CDATA[<font face="Arial Black"><b><div align="center"><font color="DeepSkyBlue"><font size="6">Logo and Banner by Emo Khalifa ( ek2k18 )</font><br />
<font size="5">(TEXT CAN BE EDITED)<br />
<br />
Enjoy</font><br />
<br />
<font size="5">VIDEO:<br />
<a href="https://*********/VJra3gQPHUE" target="_blank">https://*********/VJra3gQPHUE</a></font><br />
<br />
<font size="5">VIRUS SCAN:</font><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto"><a href="https://www.virustotal.com/#/file/82a74e1bf7bea83c7e71a5deb2adc4b1a25cd894e8cb9491916c7ebfc20b5f7e/detection" target="_blank" rel="noopener" class="mycode_url">https://www.virustotal.com/#/file/82a74e.../detection</a></pre>
</div><font size="5">Download link: </font><br />
<font size="4"><a href="https://www.sendspace.com/file/51y1ru" target="_blank">https://www.sendspace.com/file/51y1ru</a></font><br />
<br />
<font size="5">HQI:</font><br />
<font size="4">BANNER: <a href="https://ibb.co/0M0tMGY" target="_blank">https://ibb.co/0M0tMGY</a></font><br />
<font size="4">LOGO: <a href="https://ibb.co/QJd1j7Q" target="_blank">https://ibb.co/QJd1j7Q</a></font><br />
<br />
<font size="5">Preview:</font><br />
<font color="DeepSkyBlue"><font size="4">Banner(851x315)</font></font><font size="4"><br />
</font><img alt="" border="0" src="https://i.ibb.co/gT0VTRt/ek2k18-freebanner.jpg"/><br />
<br />
<font size="4"><font color="DeepSkyBlue">Logo(800x800)</font><br />
</font><img alt="" border="0" src="https://i.ibb.co/qD5PFLj/ek2k18-freelogo.jpg"/></font><br />
</div></b></font>]]></description>
			<content:encoded><![CDATA[<font face="Arial Black"><b><div align="center"><font color="DeepSkyBlue"><font size="6">Logo and Banner by Emo Khalifa ( ek2k18 )</font><br />
<font size="5">(TEXT CAN BE EDITED)<br />
<br />
Enjoy</font><br />
<br />
<font size="5">VIDEO:<br />
<a href="https://*********/VJra3gQPHUE" target="_blank">https://*********/VJra3gQPHUE</a></font><br />
<br />
<font size="5">VIRUS SCAN:</font><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto"><a href="https://www.virustotal.com/#/file/82a74e1bf7bea83c7e71a5deb2adc4b1a25cd894e8cb9491916c7ebfc20b5f7e/detection" target="_blank" rel="noopener" class="mycode_url">https://www.virustotal.com/#/file/82a74e.../detection</a></pre>
</div><font size="5">Download link: </font><br />
<font size="4"><a href="https://www.sendspace.com/file/51y1ru" target="_blank">https://www.sendspace.com/file/51y1ru</a></font><br />
<br />
<font size="5">HQI:</font><br />
<font size="4">BANNER: <a href="https://ibb.co/0M0tMGY" target="_blank">https://ibb.co/0M0tMGY</a></font><br />
<font size="4">LOGO: <a href="https://ibb.co/QJd1j7Q" target="_blank">https://ibb.co/QJd1j7Q</a></font><br />
<br />
<font size="5">Preview:</font><br />
<font color="DeepSkyBlue"><font size="4">Banner(851x315)</font></font><font size="4"><br />
</font><img alt="" border="0" src="https://i.ibb.co/gT0VTRt/ek2k18-freebanner.jpg"/><br />
<br />
<font size="4"><font color="DeepSkyBlue">Logo(800x800)</font><br />
</font><img alt="" border="0" src="https://i.ibb.co/qD5PFLj/ek2k18-freelogo.jpg"/></font><br />
</div></b></font>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] Samp Front - A web template for SA:MP related websites.]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=661572</link>
			<pubDate>Sat, 08 Dec 2018 14:15:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=282620">Eoussama</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=661572</guid>
			<description><![CDATA[<div align="center">
<img alt="" border="0" src="https://github.com/EOussama/samp-front/blob/master/src/public/assets/img/logo.png"/><br />
<b><font size="6"><font color="DarkOrange">Samp Front</font></font></b><br />
<i><font color="Gray">A web template for SA:MP related websites.</font></i><br />
</div>
<br />
<blockquote><blockquote><font size="5">Description</font><br />
<blockquote>Samp Front is a basic starter landing page template for <a href="https://www.sa-mp.com/" target="_blank">SA:MP</a> communities related websites. It's always better to craft your stuff from scratch, however, for the oblivious, it's life-saving to have a starter prototype filling your hands at your debut.<br />
Of course, Samp Front can be customized to meet your needs, that's the reason for affixing it with the word “template”. However, note that the credits should remain untouched so that the contributors are at least acknowledged.</blockquote>
<font size="5">Preview</font><blockquote>
I apologize in advance I couldn't get the template live for demo-ing it, all I could do was provide these video clips:<br />
<ul><li> <a href="https://*********/j5alM9YlEDQ" target="_blank">Light theme (default)</a>.</li>
<li> <a href="https://*********/2rticshcB4k" target="_blank">Dark theme</a>.</li>
<li> <a href="https://*********/TtDmtPEfHgc" target="_blank">Dashboard</a>.</li>
</ul></blockquote>
<font size="5">Download</font><br />
Simply pay a visit to <a href="https://github.com/EOussama/samp-front" target="_blank">this repository</a> and either clone or download it.<br />
<br />
<br />
<font size="5">Setup</font><br />
<blockquote>The installation is pretty easy, navigate to the config folder, there you'll find a file named <font color="gray"><i>config.ini</i></font>, open it up on edit mode and tweaks the settings in there to your liking, then simply save it and the website will reflect those changes.<br />
As for the logo, replace the <i><font color="gray">logo.png</font></i> file that's located under <i><font color="Gray">public/assets/img</font></i></blockquote>
<font size="5">Features</font><br />
<blockquote><ul><li> Live server/players statistic preview.</li>
<li> Dark/Light themes.</li>
<li> Discord sever embed.</li>
<li> CRUD for news articles.</li>
<li> Image gallery.</li>
</ul></blockquote>
<font size="5">Contribution</font><br />
<blockquote>Any help is welcomed, feel free to fire an <a href="https://github.com/EOussama/samp-front/issues" target="_blank">issue</a> or a <a href="https://github.com/EOussama/samp-front/pulls" target="_blank">pull request</a> any time.</blockquote>A contribution is also counted if all you did was simply report bugs or suggest new features, the best way to voice your idea is by filing an issue <a href="https://github.com/EOussama/samp-front/issues" target="_blank">here</a>.<br />
<br />
<br />
<font size="5">Credits</font><br />
<blockquote>Big thanks to <a href="https://github.com/Westie" target="_blank">David Weston</a> for <a href="https://github.com/Westie/samp-php" target="_blank">SampQueryAPI</a>.</blockquote></blockquote></blockquote>]]></description>
			<content:encoded><![CDATA[<div align="center">
<img alt="" border="0" src="https://github.com/EOussama/samp-front/blob/master/src/public/assets/img/logo.png"/><br />
<b><font size="6"><font color="DarkOrange">Samp Front</font></font></b><br />
<i><font color="Gray">A web template for SA:MP related websites.</font></i><br />
</div>
<br />
<blockquote><blockquote><font size="5">Description</font><br />
<blockquote>Samp Front is a basic starter landing page template for <a href="https://www.sa-mp.com/" target="_blank">SA:MP</a> communities related websites. It's always better to craft your stuff from scratch, however, for the oblivious, it's life-saving to have a starter prototype filling your hands at your debut.<br />
Of course, Samp Front can be customized to meet your needs, that's the reason for affixing it with the word “template”. However, note that the credits should remain untouched so that the contributors are at least acknowledged.</blockquote>
<font size="5">Preview</font><blockquote>
I apologize in advance I couldn't get the template live for demo-ing it, all I could do was provide these video clips:<br />
<ul><li> <a href="https://*********/j5alM9YlEDQ" target="_blank">Light theme (default)</a>.</li>
<li> <a href="https://*********/2rticshcB4k" target="_blank">Dark theme</a>.</li>
<li> <a href="https://*********/TtDmtPEfHgc" target="_blank">Dashboard</a>.</li>
</ul></blockquote>
<font size="5">Download</font><br />
Simply pay a visit to <a href="https://github.com/EOussama/samp-front" target="_blank">this repository</a> and either clone or download it.<br />
<br />
<br />
<font size="5">Setup</font><br />
<blockquote>The installation is pretty easy, navigate to the config folder, there you'll find a file named <font color="gray"><i>config.ini</i></font>, open it up on edit mode and tweaks the settings in there to your liking, then simply save it and the website will reflect those changes.<br />
As for the logo, replace the <i><font color="gray">logo.png</font></i> file that's located under <i><font color="Gray">public/assets/img</font></i></blockquote>
<font size="5">Features</font><br />
<blockquote><ul><li> Live server/players statistic preview.</li>
<li> Dark/Light themes.</li>
<li> Discord sever embed.</li>
<li> CRUD for news articles.</li>
<li> Image gallery.</li>
</ul></blockquote>
<font size="5">Contribution</font><br />
<blockquote>Any help is welcomed, feel free to fire an <a href="https://github.com/EOussama/samp-front/issues" target="_blank">issue</a> or a <a href="https://github.com/EOussama/samp-front/pulls" target="_blank">pull request</a> any time.</blockquote>A contribution is also counted if all you did was simply report bugs or suggest new features, the best way to voice your idea is by filing an issue <a href="https://github.com/EOussama/samp-front/issues" target="_blank">here</a>.<br />
<br />
<br />
<font size="5">Credits</font><br />
<blockquote>Big thanks to <a href="https://github.com/Westie" target="_blank">David Weston</a> for <a href="https://github.com/Westie/samp-php" target="_blank">SampQueryAPI</a>.</blockquote></blockquote></blockquote>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] SA:MP Website Template PHP]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=661091</link>
			<pubDate>Thu, 22 Nov 2018 00:32:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=291421">rade023</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=661091</guid>
			<description><![CDATA[<font face="Tahoma"><font size="6">Hello guys,<br />
<b>I present you my work <img alt="" border="0" class="inlineimg" src="images/smilies/cool.png" title="cool"/>.</b><br />
<div align="center"><img alt="" border="0" src="https://i.imgur.com/kMccBpF.png"/></div><a href="http://radisic00.com/boris/" target="_blank">http://radisic00.com/boris/</a><br />
If you interested contact me at <a href="mailto:radisic00@gmail.com">radisic00@gmail.com</a></font></font>]]></description>
			<content:encoded><![CDATA[<font face="Tahoma"><font size="6">Hello guys,<br />
<b>I present you my work <img alt="" border="0" class="inlineimg" src="images/smilies/cool.png" title="cool"/>.</b><br />
<div align="center"><img alt="" border="0" src="https://i.imgur.com/kMccBpF.png"/></div><a href="http://radisic00.com/boris/" target="_blank">http://radisic00.com/boris/</a><br />
If you interested contact me at <a href="mailto:radisic00@gmail.com">radisic00@gmail.com</a></font></font>]]></content:encoded>
		</item>
	</channel>
</rss>