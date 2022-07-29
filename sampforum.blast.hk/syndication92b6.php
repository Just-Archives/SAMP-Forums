<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[SA-MP Forums Archive - Plugin Development]]></title>
	<subtitle type="html"><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></subtitle>
	<link rel="self" href="https://sampforum.blast.hk/syndication.php"/>
	<id>https://sampforum.blast.hk/</id>
	<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/"/>
	<updated>2022-07-28T20:52:41Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=250175">Kursed</a>]]></name>
		</author>
		<published>2020-08-02T08:05:00Z</published>
		<updated>2020-08-02T08:05:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677849" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677849</id>
		<title xml:space="preserve"><![CDATA[[Plugin] Textdraw Streamer - Page 2]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677849"><![CDATA[<div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table border="0" cellpadding="6" cellspacing="0" width="100%">
<tr>
<td class="alt2" style="border: 1px solid #C2C2C2; font-size: 8pt;">
<div>
					Originally Posted by <strong>nieXpro</strong><br />
<a href="showthread.php?pid=4157351#pid4157351" rel="nofollow"><img alt="View Post" border="0" class="inlineimg" src="images/buttons/viewpost.gif"/></a><br />
</div>
<div style="font-style:italic">I think you say the plugin is slow. Can you tell me if you have advice to speed it up?</div>
</td>
</tr>
</table>
</div>I just tested the speed with profiler plugin. I am not expert in making plugins. I just showed the results.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=277862">YourShadow</a>]]></name>
		</author>
		<published>2020-05-30T11:51:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=676123" />
		<id>https://sampforum.blast.hk/showthread.php?tid=676123</id>
		<title xml:space="preserve"><![CDATA[[Tool/Web/Other] [C++] SA:MP Plugin Template Library (samp-ptl)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=676123"><![CDATA[<b><font size="5"><font color="#800080"><div align="center">SA:MP Plugin Template Library (samp-ptl)</div></font></font></b><br />
<br />
<b>Description:</b><br />
<br />
C++17 template library that allows you to create your own plugins for SA:MP server very easy and fast.<br />
<br />
<b>Main features:</b><ul><li>Safe C++ AMX API with errors handling</li>
<li>Pool of scripts (gamemode at the end)</li>
<li>Easy executing the callbacks (publics) with optional caching</li>
<li>Easy registration of natives: auto-conversion parameters from <b>cell</b> type to common C++ types. You may also define your own conversions</li>
<li>Logging</li>
<li>Checking for a version match between the plugin and scripts</li>
</ul>
<b>Examples:</b><br />
<a href="https://github.com/urShadow/samp-ptl/tree/master/example" target="_blank">https://github.com/urShadow/samp-ptl...master/example</a><br />
<a href="https://github.com/urShadow/Pawn.CMD" target="_blank">https://github.com/urShadow/Pawn.CMD</a><br />
<a href="https://github.com/urShadow/Pawn.Regex" target="_blank">https://github.com/urShadow/Pawn.Regex</a><br />
<br />
<b>Source code:</b><br />
<a href="https://github.com/urShadow/samp-ptl" target="_blank">https://github.com/urShadow/samp-ptl</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=1259">Misiek</a>]]></name>
		</author>
		<published>2019-05-20T08:04:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=666687" />
		<id>https://sampforum.blast.hk/showthread.php?tid=666687</id>
		<title xml:space="preserve"><![CDATA[[Plugin] samp-precise-timers ⌚: A timer plugin written in the memory-safe Rust language. Check it out, you might like Rust!]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=666687"><![CDATA[<div align="center"><font size="6">samp-precise-timers ⌚</font><br />
<a href="https://github.com/bmisiak/samp-precise-timers" target="_blank">github.com/bmisiak/samp-precise-timers</a><br />
<br />
</div><font size="4">Briefly</font><br />
Developed for <a href="https://net4game.com/index" target="_blank">net4game.com</a> (RolePlay), this SA-MP plugin provides precise timers for the server. It is written in Rust, a memory-safe language.<br />
<br />
<font size="4">Why rewrite timers?</font><br />
I had a lot of safety concerns with some of the existing solutions. They weren't written with data integrity, memory safety or preventing server crashes in mind and seemed to have quite a few bugs. As privacy and safety is our primary concern at net4game, I wrote this in Rust, which combines high-level ergonomics with the performance of a low-level language. ⚡<br />
<br />
<b>Please check out the code</b> to see the benefits. You might like Rust a lot. The code is much simpler than C++ equivalents, especially the ones which still use *char, free() and delete[] instead of modern C++ idioms such as std::unique_ptr, but as Rust has no runtime, there is no overhead 😉<br />
<br />
<font size="4">We would like your help! 💃</font><br />
Oh, and if you enjoy working on servers, we are looking for a team to help our international expansion. 🎉  net4game has been around for a decade as the biggest Polish server. We introduced a lot of innovations over the years and we are almost ready to become international. Shoot me an e-mail at <a href="mailto:bm+code@net4game.com">bm+code@net4game.com</a> if you're interested.<br />
<br />
<font size="4"><a href="https://github.com/bmisiak/samp-precise-timers/releases" target="_blank">Downloads on GitHub</a></font><br />
Also available on sampctl:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">bmisiak/samp-precise-timers</pre>
</div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=330579">loopg</a>]]></name>
		</author>
		<published>2019-04-13T07:44:00Z</published>
		<updated>2019-04-13T07:44:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=665682" />
		<id>https://sampforum.blast.hk/showthread.php?tid=665682</id>
		<title xml:space="preserve"><![CDATA[[Tool/Web/Other] Ask how to make a plugin]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=665682"><![CDATA[Hello everyone<br />
I want to know how to make a plugin using SAMPSDK. I tried to compile with visual studio 2015, but I have encountered a lot of errors.<br />
If you can give me a tutorial or information, I will thank you very much!]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=295602">Yannick2Go</a>]]></name>
		</author>
		<published>2019-02-22T17:23:00Z</published>
		<updated>2019-02-22T17:23:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=664241" />
		<id>https://sampforum.blast.hk/showthread.php?tid=664241</id>
		<title xml:space="preserve"><![CDATA[[Plugin] [0.3.7] PySAMP - Python based Gamemodes]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=664241"><![CDATA[I began working on a python plugin since 2017 and now I finally got enough time to release it.<br />
There already was a similar plugin in 2010 and it was never released. That's why I decided to create one on my own.<br />
<br />
You can find all technical information (please have a look into the <b>Using</b> section before copying the .dll/.so) here: <a href="https://github.com/habecker/PySAMP" target="_blank">https://github.com/habecker/PySAMP</a>.<br />
You can download the latest releases here: <a href="https://github.com/habecker/PySAMP/releases" target="_blank">https://github.com/habecker/PySAMP/releases</a>.<br />
(Please star it, if you use Github and like my project <img alt="" border="0" class="inlineimg" src="images/smilies/wink.png" title="Wink"/>).<br />
<br />
The main motivation behind it, is the fact, that it gives you the ability to do rapid prototyping without gmx'ing and waiting. For this I'll release an example gamemode very soon.<br />
<br />
If you experience any issues with it, feel free create an issue on GitHub and I'll look into it asap.<br />
<br />
If anybody is interested in translate the sa-mp example gamemodes into python: create a fork, translate it, and create a pull-request <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/><br />
<br />
In the coming weeks, I'll work on the following issues in the specified order (if nobody finds a bug <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.gif" title="Grin"/>):<br />
<ol style="list-style-type: decimal"><li>example gamemode, that can be reloaded without gmx in quarter of a second</li>
<li>0.3dl callbacks and functions</li>
<li>use functions of other plugins</li>
<li>documentation</li>
</ol>
Thanks to:<ul><li> SA:MP Team for developing SA:MP</li>
<li> Zeex for developing the SAMPGDK which is used by PySAMP</li>
<li> Python Software Foundation</li>
</ul>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=29176">Y_Less</a>]]></name>
		</author>
		<published>2019-02-13T16:44:00Z</published>
		<updated>2019-02-13T16:44:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=663874" />
		<id>https://sampforum.blast.hk/showthread.php?tid=663874</id>
		<title xml:space="preserve"><![CDATA[[Tutorial] Run-time plugin feature detection]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=663874"><![CDATA[Plugins provide natives to do things.  This is great, but if you write a library sometimes you want to do one thing if the plugin exists and another thing if it doesn’t.  Until now the best way was to include (or tryinclude) the plugin’s include and use them, but this would cause issues if a user had the include but didn’t load the plugin.  Simply calling the native won’t work - all the natives are checked for existence prior to the script starting - hence all the famous runtime error 19s, and nativecheckers.  The goal has always been to be able to detect which natives exist at run-time, use them if they do, but not error out if they don’t.  I finally figured out a way to do this based on an obscure AMX feature - you can use negative native indexes to not put them in the AMX header:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto"><font color="Brown">#define NATIVE_PrintAmxBacktrace (-5)</font>

<font color="DeepSkyBlue">native</font> PrintAmxBacktrace() = NATIVE_PrintAmxBacktrace;

main()
{
    <font color="Blue">if</font> (QueryNative(NATIVE_PrintAmxBacktrace)) PrintAmxBacktrace();
}</pre>
</div>There are at least two possible ways to write <font face="courier new">QueryNative</font> while being backwards-compatible.<br />
<br />
V1:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto"><font color="DeepSkyBlue">stock</font> QueryNative(id)
{
    <font color="Brown">#emit LOAD.S.alt id</font>
    <font color="Brown">#emit ZERO.pri</font>
    <font color="Brown">#emit LCTRL 10</font>
    <font color="Brown">#emit RETN</font>
    <font color="Blue">return</font> <font color="Orange">0</font>;
}</pre>
</div><font face="courier new">LCTRL 10</font> would be a new control register, somehow hooked by every plugin, that returns 1 if the specified native index exists.  This would require a lot of <font face="courier new">AMX_Exec</font> hooking though.<br />
<br />
V2:<br />
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
		overflow: auto">#define QueryNative(%0) getproperty(.id = 0x504C5547, .value = (%0)) <font color="Green">// !<font color="Red">"PLUG"</font></font></pre>
</div>This is simpler - just a hook of the <font face="courier new">getproperty</font> native looking for a special domain (<font face="courier new">id</font>) for plugin natives.<br />
<br />
I’ve not worked out all the details of either yet, since every negative ID will need to be unique among plugins, and they should only respond to their own IDs, or pass along the chain otherwise.  This implies some sort of global registry, at least of ranges - allocated say 100 at once, so -500 – -599 = mysql, -600 – -699 = streamer, etc (-1 – -99 probably reserved for local testing and errors).]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=193537">IllidanS4</a>]]></name>
		</author>
		<published>2019-02-08T23:24:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=663694" />
		<id>https://sampforum.blast.hk/showthread.php?tid=663694</id>
		<title xml:space="preserve"><![CDATA[[Plugin] Native Fallback – Ignore missing natives]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=663694"><![CDATA[<div align="center"><font size="5"><a href="https://github.com/IllidanS4/NativeFallback" target="_blank">NativeFallback v1.1</a></font><br />
<b><font size="3"><a href="https://github.com/IllidanS4/NativeFallback/releases/" target="_blank">Download</a></font></b></div><b>Introduction</b><br />
When a script that references missing natives is executed, an error is raised even though the natives may not actually be called in the script and aren't required for its normal functioning. This plugin provides a so-called fallback implementation for any missing native and allows the script to be executed in all cases.<br />
<br />
<b>Details</b><br />
This plugin by default creates 256 (can be adjusted before recompilation) stub fallback functions and registers them in place of missing natives before any code is actually executed (a message is printed to the log for every native). When the fallback implementation is called, run-time error 19 (not found) is raised, stopping the execution of the script (and a message is again printed with the name of the function).<br />
<br />
When more than 256 native functions are missing, a generic fallback function is provided instead, but it cannot display the name of the function due to limitations of AMX.<br />
<br />
If you want to customize the fallback function, you can hook it via <a href="https://sampforum.blast.hk/showthread.php?tid=659714" target="_blank">PawnPlus</a>.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=268427">SyS</a>]]></name>
		</author>
		<published>2019-01-21T09:34:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=663075" />
		<id>https://sampforum.blast.hk/showthread.php?tid=663075</id>
		<title xml:space="preserve"><![CDATA[[Plugin] Telegram Connector]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=663075"><![CDATA[<div align="center"><font color="#0088cc"><font size="7"><b>TgConnector</b></font></font><br />
<br />
<a href="https://travis-ci.org/Sreyas-Sreelal/tgconnector" target="_blank"><img alt="" border="0" src="https://travis-ci.org/Sreyas-Sreelal/tgconnector.svg?branch=master"/></a> <a href="https://ci.appveyor.com/project/Sreyas-Sreelal/tgconnector" target="_blank"><img alt="" border="0" src="https://ci.appveyor.com/api/projects/status/snip8i9cd6xh2x1u?svg=true"/></a> <a href="https://github.com/Sreyas-Sreelal/tgconnector" target="_blank"><img alt="" border="0" src="https://shields.southcla.ws/badge/sampctl-TGConnector-2f2f2f.svg"/></a> <a href="https://github.com/Sreyas-Sreelal/tgconnector/issues" target="_blank"><img alt="" border="0" src="https://img.shields.io/github/issues/Sreyas-Sreelal/tgconnector.svg"/></a> <a href="https://github.com/Sreyas-Sreelal/tgconnector/pulls" target="_blank"><img alt="" border="0" src="https://img.shields.io/github/issues-pr-raw/sreyas-sreelal/tgconnector.svg"/></a> <a href="http://LICENSE" target="_blank"><img alt="" border="0" src="https://img.shields.io/github/license/sreyas-sreelal/tgconnector.svg"/></a><br />
<br />
A telegram connector plugin that helps to interact with <a href="https://core.telegram.org/bots" target="_blank">telgram bots</a> through SA-MP.</div>
<font color="#2c2f33"><font size="6"><b>Installing</b></font></font><br />
<br />
If you are a sampctl user<br />
<br />
<font face="courier new"><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">sampctl p install Sreyas-Sreelal/tgconnector</pre>
</div></font><br />
<br />
<font color="SlateGray"><font size="4">OR</font></font><br />
<ul><li>Download suitable binary files from releases for your operating system</li>
<li>Add it your <font face="courier new">plugins</font> folder</li>
<li>Add <font face="courier new">tgconnector</font> to server.cfg or  <font face="courier new">tgconnector.so</font> (for linux)</li>
<li>Add <a href="http://include/tgconnector.inc" target="_blank">tgconnector.inc</a> in includes folder</li>
</ul>
<font color="#2c2f33"><font size="6"><b>Building</b></font></font><br />
<ul><li>Clone the repo<br />
<br />
<font face="courier new"><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">git clone <a href="https://github.com/Sreyas-Sreelal/tgconnector.git" target="_blank">https://github.com/Sreyas-Sreelal/tgconnector.git</a></pre>
</div></font><br/></li>
<li>Use makefile to compile and test<br />
<ul><li>Setup testing environment<br />
<br />
<font face="courier new"><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">make setup</pre>
</div></font><br/></li>
<li>To build release version<br />
<br />
<font face="courier new"><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">make release</pre>
</div></font><br/></li>
<li>Run tests<br />
<br />
<font face="courier new"><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">make run</pre>
</div></font></li>
</ul></li>
</ul>
<br />
<font color="#2c2f33"><font size="6"><b>Example</b></font></font><br />
<br />
<b>A basic bot</b><br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:503px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222AA;">#include&#x26;ta_samp&#x26;t</span><br/><span style="color: #2222AA;">#include&#x26;ttgconnector&#x26;t</span><br/><span style="color: #2222AA;">#include&#x26;tzcmd&#x26;t</span><br/><br/><span style="color: #2222AA;">#define CHAT_ID (TGChatId:"YOUR_CHAT_ID_HERE")</span><br/><br/><span style="color: #2222BB;">new</span> <span style="color: #000000;">TGBot</span><span style="color: #000000;">:</span>g_bot;<br/><br/>main<span style="color: #000000;">(</span><span style="color: #000000;">)</span> <span style="color: #000000;">{</span><br/>    <span style="color: #228822;">//Store bot token in SAMP_TG_BOT environment variable and connect from it</span><br/>    g_bot <span style="color: #000000;">=</span> TGConnectFromEnv<span style="color: #000000;">(</span><span style="color: #000066;">"SAMP_TG_BOT"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>g_bot <span style="color: #000000;">!=</span> INVALID_BOT_ID<span style="color: #000000;">)</span> <span style="color: #000000;">{</span><br/>        <span style="color: #222222;">printf</span><span style="color: #000000;">(</span><span style="color: #000066;">"bot connected successfully!"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #000000;">}</span> <span style="color: #2222BB;">else</span> <span style="color: #000000;">{</span><br/>        <span style="color: #222222;">printf</span><span style="color: #000000;">(</span><span style="color: #000066;">"Error: bot couldn't connect"</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #000000;">}</span><br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222BB;">public</span> OnTGMessage<span style="color: #000000;">(</span><span style="color: #000000;">TGBot</span><span style="color: #000000;">:</span>bot,<span style="color: #000000;">TGUser</span><span style="color: #000000;">:</span>fromid,<span style="color: #000000;">TGMessage</span><span style="color: #000000;">:</span>messageid<span style="color: #000000;">)</span> <span style="color: #000000;">{</span><br/>    <br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>g_bot <span style="color: #000000;">!=</span> bot<span style="color: #000000;">)</span><span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/>    <span style="color: #000000;">}</span><br/><br/>    <span style="color: #2222BB;">new</span> <br/>        message<span style="color: #000000;">[</span><span style="color: #000000;">50</span><span style="color: #000000;">]</span>,<br/>        username<span style="color: #000000;">[</span><span style="color: #000000;">24</span><span style="color: #000000;">]</span>,<br/>        chatname<span style="color: #000000;">[</span><span style="color: #000000;">56</span><span style="color: #000000;">]</span>,<br/>        server_msg<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/><br/>    TGCacheGetMessage<span style="color: #000000;">(</span>message<span style="color: #000000;">)</span>;<br/>    TGCacheGetUserName<span style="color: #000000;">(</span>username<span style="color: #000000;">)</span>;<br/>    TGCacheGetChatName<span style="color: #000000;">(</span>chatname<span style="color: #000000;">)</span>;<br/>    <br/>    <span style="color: #222222;">format</span><span style="color: #000000;">(</span>server_msg,<span style="color: #000000;">128</span>,<span style="color: #000066;">"[%s] %s(%d): %s"</span>,chatname,username,<span style="color: #000000;">_</span><span style="color: #000000;">:</span>fromid,message<span style="color: #000000;">)</span>;<br/>    SendClientMessageToAll<span style="color: #000000;">(</span><span style="color: #000000;">-</span><span style="color: #000000;">1</span>,server_msg<span style="color: #000000;">)</span>;<br/>    <br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span><br/><br/><br/><span style="color: #2222BB;">public</span> OnTGUserJoined<span style="color: #000000;">(</span><span style="color: #000000;">TGBot</span><span style="color: #000000;">:</span>bot,<span style="color: #000000;">TGUser</span><span style="color: #000000;">:</span>userid<span style="color: #000000;">)</span> <span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> <br/>        <span style="color: #000000;">TGChatId</span><span style="color: #000000;">:</span>chatid<span style="color: #000000;">[</span><span style="color: #000000;">15</span><span style="color: #000000;">]</span>,<br/>        username<span style="color: #000000;">[</span><span style="color: #000000;">24</span><span style="color: #000000;">]</span>,<br/>        chatname<span style="color: #000000;">[</span><span style="color: #000000;">56</span><span style="color: #000000;">]</span>,<br/>        server_msg<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <br/>    <span style="color: #228822;">//Retrive data stored in current context</span><br/>    TGCacheGetUserName<span style="color: #000000;">(</span>username<span style="color: #000000;">)</span>;<br/>    TGCacheGetChatId<span style="color: #000000;">(</span>chatid<span style="color: #000000;">)</span>;<br/>    TGCacheGetChatName<span style="color: #000000;">(</span>chatname<span style="color: #000000;">)</span>;<br/><br/>    <span style="color: #222222;">format</span><span style="color: #000000;">(</span>server_msg,<span style="color: #000000;">128</span>,<span style="color: #000066;">"User %s(%d) joined %s(%s)"</span>,username,<span style="color: #000000;">_</span><span style="color: #000000;">:</span>userid,chatname,<span style="color: #000000;">_</span><span style="color: #000000;">:</span>chatid<span style="color: #000000;">)</span>;<br/>    SendClientMessageToAll<span style="color: #000000;">(</span><span style="color: #000000;">-</span><span style="color: #000000;">1</span>,server_msg<span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222BB;">public</span> OnTGUserLeft<span style="color: #000000;">(</span><span style="color: #000000;">TGBot</span><span style="color: #000000;">:</span>bot,<span style="color: #000000;">TGUser</span><span style="color: #000000;">:</span>userid<span style="color: #000000;">)</span> <span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> <br/>        <span style="color: #000000;">TGChatId</span><span style="color: #000000;">:</span>chatid<span style="color: #000000;">[</span><span style="color: #000000;">15</span><span style="color: #000000;">]</span>,<br/>        username<span style="color: #000000;">[</span><span style="color: #000000;">24</span><span style="color: #000000;">]</span>,<br/>        chatname<span style="color: #000000;">[</span><span style="color: #000000;">56</span><span style="color: #000000;">]</span>,<br/>        server_msg<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <br/>    TGCacheGetUserName<span style="color: #000000;">(</span>username<span style="color: #000000;">)</span>;<br/>    TGCacheGetChatId<span style="color: #000000;">(</span>chatid<span style="color: #000000;">)</span>;<br/>    TGCacheGetChatName<span style="color: #000000;">(</span>chatname<span style="color: #000000;">)</span>;<br/><br/>    <span style="color: #222222;">format</span><span style="color: #000000;">(</span>server_msg,<span style="color: #000000;">128</span>,<span style="color: #000066;">"User %s(%d) left %s(%s)"</span>,username,<span style="color: #000000;">_</span><span style="color: #000000;">:</span>userid,chatname,<span style="color: #000000;">_</span><span style="color: #000000;">:</span>chatid<span style="color: #000000;">)</span>;<br/>    SendClientMessageToAll<span style="color: #000000;">(</span><span style="color: #000000;">-</span><span style="color: #000000;">1</span>,server_msg<span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #000000;">CMD</span><span style="color: #000000;">:</span>sendtgmessage<span style="color: #000000;">(</span>playerid,params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span> <span style="color: #000000;">{</span><br/>    TGSendMessage<span style="color: #000000;">(</span>g_bot,CHAT_ID,params<span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>
<font color="#2c2f33"><font size="6"><b>Notes</b></font></font><br />
This plugin is still in WIP and more tests need to be done.If you find any bugs or have anything to contribute feel free to open an issue or pull request on github.<br />
Also be sure to not to share your bot token with anyone it's recommended to store it inside a environment variable.<br />
<br />
<font color="#2c2f33"><font size="6"><b>Repository</b></font></font><br />
Source: <a href="https://github.com/Sreyas-Sreelal/tgconnector" target="_blank">https://github.com/Sreyas-Sreelal/tgconnector</a><br />
Releases: <a href="https://github.com/Sreyas-Sreelal/tgconnector/releases" target="_blank">https://github.com/Sreyas-Sreelal/tgconnector/releases</a><br />
Wiki: <a href="https://github.com/Sreyas-Sreelal/tgconnector/wiki" target="_blank">https://github.com/Sreyas-Sreelal/tgconnector/wiki</a> (Not complete yet)]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=285094">dotSILENT</a>]]></name>
		</author>
		<published>2019-01-20T21:01:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=663066" />
		<id>https://sampforum.blast.hk/showthread.php?tid=663066</id>
		<title xml:space="preserve"><![CDATA[[Plugin] CHandling - Server control of handlings & per-vehicle handlings]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=663066"><![CDATA[<div align="center"><b><font size="7">CHandling client &amp; server plugin</font></b></div>
CHandling is a client &amp; server sided plugin which allows the server to have control over vehicle handlings. In addition, it modifies the default behaviour of GTA, allowing customized handlings between vehicles of the same model.<br />
This means that you can have 10 Banshees while having each of them drive differently.<br />
<br />
The client side is forced to use default handling values when connected to a CHandling-ready server.<br />
Normal players can still play on the server, the plugin just wont have any effect on them.<br />
<br />
Client sided plugin has a very simple update checker which can take the players to the download page of the latest release.<br />
<br />
<b>This is a test release, not everything is working as it should and some things may require a re-write.<br />
I don't advice to introduce this to your players yet.</b><br />
<br />
<b>CURRENTLY SUPPORTS ONLY CARS! Boats, airplanes or bikes might not work properly, since they are handled differently in the game.</b><br />
<br />
<b><font size="5">Supported versions</font></b><br />
The plugin uses a .ini file for detecting the current version &amp; loading proper memory offsets, the file is fetched from GitHub via libcurl when it doesn't exist, or when there is no matching version in the current file.<br />
That means, that theorethically (unless some significant changes are made to SAMP), players wont need to download anything.<br />
<br />
<b>Currently supported versions (client): </b>0.3.7, 0.3.7 R2, 0.3.7 R3, 0.3.7 R3-1, 0.3.7 R4, 0.3DL R1<br />
<br />
<b><font color="Blue"><font size="5">Download</font></font></b><br />
<br />
<a href="https://github.com/dotSILENT/chandling/releases" target="_blank"><b><font size="3">Client side</font></b></a> requires ASI Loader<br />
<br />
<a href="https://github.com/dotSILENT/chandling-svr/releases" target="_blank"><b><font size="3">Server side</font></b></a><br />
<br />
<br />
<a href="https://github.com/dotSILENT/chandling" target="_blank"><b>Source code (client side)</b></a><br />
<a href="https://github.com/dotSILENT/chandling-svr" target="_blank"><b>Source code (server side)</b></a><br />
<br />
<a href="https://github.com/dotSILENT/chandling-svr/wiki" target="_blank"><b><font size="4">WIKI (List of natives, descriptions etc)</font></b></a><br />
<br />
<a href="https://github.com/dotSILENT/chandling-svr/blob/master/examples/chandling_menu.pwn" target="_blank"><b>Example filterscript which may also help testing/trying out</b></a><br />
<br />
<br />
<br />
<font size="5"><b>Thanks to</b></font><ul><li>Zeex for sampGDK and SubHook</li>
<li>DK22Pac for his GTA plugin-sdk that I took some structs from</li>
<li>kurta999 for his AMX Native Redirect (taken from YSF)</li>
<li>Whitetiger for GetPacketId hook (taken from SAMPACv2)</li>
<li>ini for helping with various problems that occured along the way</li>
</ul>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=310964">DanielMor</a>]]></name>
		</author>
		<published>2019-01-13T18:58:00Z</published>
		<updated>2019-01-13T18:58:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=662864" />
		<id>https://sampforum.blast.hk/showthread.php?tid=662864</id>
		<title xml:space="preserve"><![CDATA[[Plugin] SAMPVOICE 2.0]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=662864"><![CDATA[<b>Description:</b><br />
Software Development Kit for implementing Pawn voice systems for SA:MP servers.<br />
<br />
<b>The plugin is compatible only with version SA:MP 0.3.7-R1.</b><br />
<br />
<b>Main features:</b><ul><li>Controlled voice stream</li>
<li>Play audio files</li>
<li>Record voice stream in the buffer and its broadcast</li>
<li>Player microphone control</li>
<li>Creating sound effects</li>
<li>Binding voice stream to game objects</li>
<li>And many more little things ...</li>
</ul>
<b>Binaries:</b><br />
<a href="https://github.com/CyberMor/sampvoice/releases" target="_blank">https://github.com/CyberMor/sampvoice/releases</a><br />
<br />
<b>Source code:</b><br />
<a href="https://github.com/CyberMor/sampvoice" target="_blank">https://github.com/CyberMor/sampvoice</a><br />
<br />
<b>Donate:</b><br />
<a href="https://paypal.me/sampvoice" target="_blank">PayPal</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=169274">kristo</a>]]></name>
		</author>
		<published>2018-12-23T23:27:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=662109" />
		<id>https://sampforum.blast.hk/showthread.php?tid=662109</id>
		<title xml:space="preserve"><![CDATA[[Plugin] Modern GPS plugin]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=662109"><![CDATA[<a href="https://www.burgershot.gg/showthread.php?tid=66" target="_blank">https://www.burgershot.gg/showthread.php?tid=66</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=169426">Yashas</a>]]></name>
		</author>
		<published>2018-12-23T02:58:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=662075" />
		<id>https://sampforum.blast.hk/showthread.php?tid=662075</id>
		<title xml:space="preserve"><![CDATA[[Plugin] AntiAimbot - Artifical Intelligence]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=662075"><![CDATA[<b><font size="7"><font color="DarkRed">Anti</font><font color="Black">Aimbot</font></font></b><br />
<br />
<b><font color="DarkRed">Version:</font> E1 (experimental version)</b><br />
<br />
<b>DISCLAIMER:</b> <br />
- the plugin is still experimental and has undergone rigorous testing on artificial servers but hasn't been tested on a real server with a large player base<br />
- works for M4/AK47/MP5 only<br />
<br />
AntiAimbot is an aimbot detector which uses a combination of empirical methods and artificial intelligence to accurately identify players using any form of aim assist. Empirical methods such as high ratio on moving players are used to efficiently suspect players of using aimbot. The samples of players suspected of using aim assist tools are forwarded to a combination of AI machinery consisting of mainly deep neural networks and support vector machines for further detailed analysis. The AI machinery investigates the samples and decides if the feat achieved is humanly possible or not by analyzing how quickly the aim moves, how synchronized the aim was with the motion of the victim, how fast the player reacts to changes and many such features.<br />
<br />
<font color="DarkGreen"><font size="6">Overview:</font></font><br />
<br />
The entire process can be divided into two sections based on the type of technology used: empirical methods and artificial intelligence methods. The empirical methods are used to quickly suspect the <i>possibility</i> of an aim assist software being used while the artificial intelligence based methods are used to analyze the suspected samples more rigorously.<br />
<br />
The AI-based detectors are trained to identify possible use of aim assist accurately when possible, i.e. they give negatives when they aren't sure. Given enough time, they will mostly detect the use of aim assist.<br />
<br />
<font color="DarkGreen"><font size="6">Usage:</font></font><br />
<br />
<font size="4">building plugin from source (Linux):</font><ol style="list-style-type: decimal"><li>install gcc-8, g++8, gcc-8-multilib, g++-8-multilib, cmake</li>
<li>clone the <a href="https://github.com/YashasSamaga/sampml" target="_blank"><b>sampml</b></a> repository</li>
<li>change directory to `examples/anti-aimbot/plugin`</li>
<li>create and enter `build` directory</li>
<li>generate build files using `cmake .. -DCMAKE_BUILD_TYPE=Release -DCMAKE_C_COMPILER=gcc-8 -DCMAKE_CXX_COMPILER=g++-8`</li>
<li>build plugin using `cmake --build . -- -j &#x26;tnumber of threads&#x26;t`</li>
</ol>
<font size="4">building plugin from source (Windows):</font><ol style="list-style-type: decimal"><li>clone the <a href="https://github.com/YashasSamaga/sampml" target="_blank"><b>sampml</b></a> repository</li>
<li>open `examples/anti-aimbot/plugin` directory in Visual Studio 2017</li>
<li>click on CMake-&#x26;tBuild</li>
</ol>
<font size="4">installing:</font><ol style="list-style-type: decimal"><li>move the plugin binary to the `plugins` directory</li>
<li>create a new directory `anti-aimbot` in the `plugins` directory</li>
<li>create a new directory `models` in `plugins/anti-aimbot` directory</li>
<li>copy three model files from `examples/anti-aimbot/training/models` to the models folder</li>
<li>[optional] create config.cfg in the `anti-aimbot` directory</li>
</ol>
<font size="4">configuring the plugin:</font><br />
<table><tr><td class="alt2"><b><u>name</u></b></td><td class="alt2"><b><u>default</u></b></td><td class="alt2"><b><u>description</u></b></td></tr><tr><td class="alt2">thread_pool_size </td><td class="alt2">4</td><td class="alt2">number of threads that can be used for detectors</td></tr><tr><td class="alt2">rf_model_file</td><td class="alt2">plugins/anti-aimbot/models/rf_classifier.dat</td><td class="alt2">number of threads that can be used for detectors</td></tr><tr><td class="alt2">svm_model_file</td><td class="alt2">plugins/anti-aimbot/models/svm_classifier.dat</td><td class="alt2">number of threads that can be used for detectors</td></tr><tr><td class="alt2">dnn_model_file</td><td class="alt2">plugins/anti-aimbot/models/dnn_classifier.dat</td><td class="alt2">number of threads that can be used for detectors</td></tr></table>
<b>Example `config.cfg`:</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 50px;
		text-align: left;
		overflow: auto">thread_pool_size 2
dnn_model_file plugins/anti-aimbot/models/dnn2_classifier.dat</pre>
</div><font size="4">submitting a shot vector:</font><br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 50px;
		text-align: left;
		overflow: auto">stock CollectDataOPWS(data[E_SHOT_VECTOR], playerid, weaponid, hittype, hitid, Float:fX, Float:fY, Float:fZ)
native submit_vector(playerid, data[E_SHOT_VECTOR]);</pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">#include &#x26;taimbot_dc.inc&#x26;t
public OnPlayerWeaponShot(playerid, weaponid, hittype, hitid, Float:fX, Float:fY, Float:fZ)
{
        new data[E_SHOT_VECTOR];
        CollectDataOPWS(data, playerid, weaponid, hittype, hitid, fX, fY, fZ);
	submit_vector(playerid, data);
 	return 1;
}</pre>
</div><font size="4">obtaining results:</font><br />
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
		overflow: auto">forward OnPlayerSuspectedForAimbot(playerid, Float:probabilities[3], time[3]);</pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">#include &#x26;taimbot_dc.inc&#x26;t
public OnPlayerSuspectedForAimbot(playerid, Float:probabilities[3], time[3])
{
    /* results are sent after a few seconds; hence, check if the player is still connected */
    if(!IsPlayerConnected(playerid))
        return 1;

    static enum {
        COLOR_RED = 0xFF0000FF,
        COLOR_GREEN = 0x00FF00FF,
    };

    new str[144], name[MAX_PLAYER_NAME];
    GetPlayerName(playerid, name, sizeof(name));

    /*
    ** there are three independent detectors
    ** - random forest
    ** - support vector machine
    ** - deep neural network
    **
    ** `probabilities` contains the outputs of the detectors in the aforementioned order
    ** `time` contains the CPU microseconds used by each of the detectors in the aforementioned order
    **
    ** the average of the probabilities can be used to get an overall estimate
    ** choose a cutoff above which the result is considered to be an aimbot sample
    ** the code below sends a message for all samples
    */	

    const Float:cutoff = 0.6;
    new Float:avg = (probabilities[0] + probabilities[1] + probabilities[2])/3;

    format(str, sizeof(str), "%s(%d) &#x26;t&#x26;t RF: %.2f (%dus) SVM: %.2f (%dus), DNN: %.2f (%dus)",
	 						name, playerid,
	 						probabilities[0], time[0],
	 						probabilities[1], time[1],
	  						probabilities[2], time[2]);
	  						
    new color = ((avg &#x26;t cutoff) ? COLOR_RED : COLOR_GREEN);
    SendClientMessageToAll(color, str);
	
    format(str, sizeof(str), "Average: %.2f (%s)", avg, ((avg &#x26;t cutoff) ? ("MOSTLY USING AIMBOT") : ("MAY NOT BE USING AIMBOT")));
    SendClientMessageToAll(color, str);
}</pre>
</div><font color="DarkGreen"><font size="6">Links:</font></font><br />
<b><a href="https://github.com/YashasSamaga/sampml" target="_blank">GitHub Repository</a></b><br />
<br />
<b><a href="https://discord.gg/A3e8D6J" target="_blank">Contributing &amp; Support Requests</a></b><br />
discord server for:<br />
- research &amp; development<br />
- support requests<br />
- contributing<br />
<br />
<b><a href="https://www.youtube.com/watch?v=BUl2NU3YRxw" target="_blank">[outdated] Detailed Demo (18th December 2018)</a></b><br />
- the latest version is significantly more accurate than the results shown above]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=162781">DartfoL</a>]]></name>
		</author>
		<published>2018-11-18T17:29:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=660981" />
		<id>https://sampforum.blast.hk/showthread.php?tid=660981</id>
		<title xml:space="preserve"><![CDATA[[Plugin] SAMP GameMode in Assembly (SGMA)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=660981"><![CDATA[Someone once told me, "You won't be able to write a gamemode in assembly, you ****ing loser." <br />
I accepted this challenge.<br />
Ladies and gentlemen, I proudly present to you the craziest and weirdest **** I've ever done in my life.<br />
<br />
<font size="5"><div align="center"><b>SAMP GameMode in Assembly (SGMA)</b></div></font><br />
<br />
SGMA is the first SAMP gamemode written entirely in assembly programming language using fasm<br />
Technical features:<ul><li>As fast as it gets: doesn't use an AMX machine, runs on native x86 code</li>
<li>Cross-platform: in assembly, yeah!</li>
</ul>Gamemode features<ul><li>Simple Deathmatch</li>
<li>SQLite-based account system</li>
<li>Weapon store</li>
</ul>
<b><a href="https://github.com/evgen1137/SGMA/releases/tag/1.0" target="_blank">Download page</a></b><br />
<b><a href="https://github.com/evgen1137/SGMA/" target="_blank">GitHub page</a></b><br />
Also please read the <a href="https://github.com/evgen1137/SGMA/blob/master/NOTES.md" target="_blank">technical and development notes</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=268427">SyS</a>]]></name>
		</author>
		<published>2018-11-12T16:44:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=660753" />
		<id>https://sampforum.blast.hk/showthread.php?tid=660753</id>
		<title xml:space="preserve"><![CDATA[[Plugin] PawnScraper]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=660753"><![CDATA[<font size="4"><font face="Fixedsys"><font color="#ffa500"><font size="7"><b><font face="Georgia"><div align="center">PawnScraper</div></font></b></font></font><br />
<div align="center">
<img alt="" border="0" src="https://travis-ci.org/Sreyas-Sreelal/pawn-scraper.svg?branch=master"/> <img alt="" border="0" src="https://ci.appveyor.com/api/projects/status/5rq55kukvy8xymly?svg=true"/> <img alt="" border="0" src="https://shields.southcla.ws/badge/sampctl-PawnScraper-2f2f2f.svg"/> <img alt="" border="0" src="https://img.shields.io/github/issues/Sreyas-Sreelal/pawn-scraper.svg"/> <img alt="" border="0" src="https://img.shields.io/github/issues-pr-raw/sreyas-sreelal/pawn-scraper.svg"/> <img alt="" border="0" src="https://img.shields.io/github/license/sreyas-sreelal/pawn-scraper.svg"/><br />
<br />
A powerful scraper plugin that provides interface for utlising html_parsers and css selectors in pawn.</div>
<font color="#7F00FF"><font size="6"><b>Installing</b></font></font><br />
<br />
Thanks to <a href="https://www.github/southclaws" target="_blank">Southclaws</a>,plugin installation is now much easier with <a href="https://www.github/southclaws/sampctl" target="_blank">sampctl</a><br />
<br />
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
<span style="color: #0000BB">sampctl p install Sreyas</span><span style="color: #007700">-</span><span style="color: #0000BB">Sreelal</span><span style="color: #007700">/</span><span style="color: #0000BB">pawn</span><span style="color: #007700">-</span><span style="color: #0000BB">scraper 
<br/></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><font color="SlateGray"><font size="4">OR</font></font><br />
<ul><li>Download suitable binary files from <a href="https://github.com/Sreyas-Sreelal/pawn-scraper/releases" target="_blank">releases</a> for your operating system</li>
<li>Add it your <font face="courier new">plugins</font> folder</li>
<li>Add <font face="courier new">PawnScraper</font> to server.cfg or  <font face="courier new">PawnScraper.so</font> (for linux)</li>
<li>Add <a href="https://github.com/Sreyas-Sreelal/pawn-scraper/blob/master/include/pawnscraper.inc" target="_blank">pawnscraper.inc</a> in includes folder</li>
</ul>
<font color="#7F00FF"><font size="6"><b>Building</b></font></font><br />
<ul><li>Clone the repo<br />
<br />
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
<span style="color: #0000BB">git </span><span style="color: #007700">clone </span><span style="color: #0000BB">https</span><span style="color: #007700">:</span><span style="color: #FF8000">//github.com/Sreyas-Sreelal/pawn-scraper.git 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></li>
<li>Compile the plugin using nightly compiler<br />
<ul><li><b>Windows</b><br />
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
<span style="color: #0000BB">cargo </span><span style="color: #007700">+</span><span style="color: #0000BB">nightly</span><span style="color: #007700">-</span><span style="color: #0000BB">i686</span><span style="color: #007700">-</span><span style="color: #0000BB">pc</span><span style="color: #007700">-</span><span style="color: #0000BB">windows</span><span style="color: #007700">-</span><span style="color: #0000BB">msvc build </span><span style="color: #007700">--</span><span style="color: #0000BB">release 
<br/></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></li>
<li><b>Linux</b><br />
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
<span style="color: #0000BB">cargo </span><span style="color: #007700">+</span><span style="color: #0000BB">nightly</span><span style="color: #007700">-</span><span style="color: #0000BB">i686</span><span style="color: #007700">-</span><span style="color: #0000BB">unknown</span><span style="color: #007700">-</span><span style="color: #0000BB">linux</span><span style="color: #007700">-</span><span style="color: #0000BB">gnu build </span><span style="color: #007700">--</span><span style="color: #0000BB">release 
<br/></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></li>
</ul></li>
</ul>
<font color="#7F00FF"><font size="6"><b>API</b></font></font><br />
<ul><li><font size="4"> ParseHtmlDocument(document[])</font>]<br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">document[]</font> - string of html document</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li>Html document instance id</li>
<li>if failed to parse document <font face="courier new">INVALID_HTML_DOC</font> is returned</li>
</ul></li>
<li><b>Example Usage</b><br />
<font face="courier new"><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">new </span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">doc </span><span style="color: #007700">= </span><span style="color: #0000BB">ParseHtmlDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">"\
<br/>    &#x26;t!DOCTYPE html&#x26;t\
<br/>    &#x26;tmeta charset=\"utf-8\"&#x26;t\
<br/>    &#x26;ttitle&#x26;tHello, world!&#x26;t/title&#x26;t\
<br/>    &#x26;th1 class=\"foo\"&#x26;tHello, &#x26;ti&#x26;tworld!&#x26;t/i&#x26;t&#x26;t/h1&#x26;t\
<br/>    "</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">doc </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></font></li>
</ul></li>
<li><font size="4">ResponseParseHtml(Response:id)</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">id</font> - Http response id returned from HttpGet</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li>Html document instance id</li>
<li>if failed to parse document <font face="courier new">INVALID_HTML_DOC</font> is returned</li>
</ul></li>
<li><b>Example Usage</b><br />
<font face="courier new"><br />
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
<span style="color: #0000BB"></span><span style="color: #007700">new </span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">response </span><span style="color: #007700">= </span><span style="color: #0000BB">HttpGet</span><span style="color: #007700">(</span><span style="color: #DD0000">"https://www.sa-mp.com"</span><span style="color: #007700">);
<br/>new </span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">doc </span><span style="color: #007700">= </span><span style="color: #0000BB">ResponseParseHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">doc </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></font></li>
</ul></li>
<li><font size="4">HttpGet(url[],Header:headerid=INVALID_HEADER)</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">url[]</font> - Url of a website</li>
<li><font face="courier new">header</font> - id of header object created using CreateHeader</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li>Response id if successful</li>
<li>if failed to <font face="courier new">INVALID_HTTP_RESPONSE</font> is returned</li>
</ul></li>
<li><b>Example Usage</b><br />
<font face="courier new"><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">new </span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">response </span><span style="color: #007700">= </span><span style="color: #0000BB">HttpGet</span><span style="color: #007700">(</span><span style="color: #DD0000">"https://www.sa-mp.com"</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">response </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_HTTP_RESPONSE</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></font></li>
</ul></li>
<li><font size="4">HttpGetThreaded(playerid,callback[],url[],Header:headerid=INVALID_HEADER)</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">playerid</font> - id of the player</li>
<li><font face="courier new">callback[]</font> - name of the callback function to handle the response.</li>
<li><font face="courier new">url[]</font> - Url of a website</li>
<li><font face="courier new">header</font> - id of header object created using CreateHeader</li>
</ul></li>
<li><b>Example Usage</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">HttpGetThreaded</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">"MyHandler"</span><span style="color: #007700">,</span><span style="color: #DD0000">"https://sa-mp.com"</span><span style="color: #007700">);
<br/></span><span style="color: #FF8000">//********
<br/></span><span style="color: #0000BB">forward MyHandler</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">responseid</span><span style="color: #007700">);
<br/>public </span><span style="color: #0000BB">MyHandler</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">responseid</span><span style="color: #007700">){
<br/>    </span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">responseid </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_HTTP_RESPONSE</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">responseid</span><span style="color: #007700">);
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></li>
</ul></li>
<li><font size="4">ParseSelector(string[])</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">string[]</font> - CSS selector</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li>Selector instance id if successful</li>
<li>if failed to <font face="courier new">INVALID_SELECTOR</font> is returned</li>
</ul></li>
<li><b>Example Usage</b><br />
<font face="courier new"><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">new </span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector </span><span style="color: #007700">= </span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"h1 .foo"</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">selector </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></font></li>
</ul></li>
<li><font size="4">CreateHeader(…)</font><br />
<ul><li><b>Params</b><br />
<ul><li>key,value pairs of String type</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li>Header instance id if successful</li>
<li>if failed to <font face="courier new">INVALID_HEADER</font> is returned</li>
</ul></li>
<li><b>Example Usage</b><br />
<font face="courier new"><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">new </span><span style="color: #0000BB">Header</span><span style="color: #007700">:</span><span style="color: #0000BB">header </span><span style="color: #007700">= </span><span style="color: #0000BB">CreateHeader</span><span style="color: #007700">(
<br/>    </span><span style="color: #DD0000">"User-Agent"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36"
<br/></span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">header </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_HEADER</span><span style="color: #007700">);
<br/>new </span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">response </span><span style="color: #007700">= </span><span style="color: #0000BB">HttpGet</span><span style="color: #007700">(</span><span style="color: #DD0000">"https://sa-mp.com/"</span><span style="color: #007700">,</span><span style="color: #0000BB">header</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">response </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_HTTP_RESPONSE</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">DeleteHeader</span><span style="color: #007700">(</span><span style="color: #0000BB">header</span><span style="color: #007700">) == </span><span style="color: #0000BB">1</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></font></li>
</ul></li>
<li><font size="4">GetNthElementName(Html:docid,Selector:selectorid,i  dx,string[],size = sizeof(string))</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">docid</font> - Html instance id</li>
<li><font face="courier new">selectorid</font> - CSS selector instance id</li>
<li><font face="courier new">idx</font> - the n’th occurence of element in the document (starts from 0)</li>
<li><font face="courier new">string[]</font> - element name is stored</li>
<li><font face="courier new">size</font> - sizeof string</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li><font face="courier new">1</font> if successful</li>
<li><font face="courier new">0</font> if failed</li>
</ul></li>
<li><b>Example Usage</b><br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 306px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">new </span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">doc </span><span style="color: #007700">= </span><span style="color: #0000BB">ParseHtmlDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">"\
<br/>    &#x26;t!DOCTYPE html&#x26;t\
<br/>    &#x26;tmeta charset=\"utf-8\"&#x26;t\
<br/>    &#x26;ttitle&#x26;tHello, world!&#x26;t/title&#x26;t\
<br/>    &#x26;th1 class=\"foo\"&#x26;tHello, &#x26;ti&#x26;tworld!&#x26;t/i&#x26;t&#x26;t/h1&#x26;t\
<br/>"</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">doc </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">);

<br/>new </span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector </span><span style="color: #007700">= </span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"i"</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">selector </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">);

<br/>new </span><span style="color: #0000BB">i</span><span style="color: #007700">= -</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">element_name</span><span style="color: #007700">[</span><span style="color: #0000BB">10</span><span style="color: #007700">];
<br/>while(</span><span style="color: #0000BB">GetNthElementName</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">,</span><span style="color: #0000BB">selector</span><span style="color: #007700">,++</span><span style="color: #0000BB">i</span><span style="color: #007700">,</span><span style="color: #0000BB">element_name</span><span style="color: #007700">)!=</span><span style="color: #0000BB">0</span><span style="color: #007700">){
<br/>    </span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">element_name</span><span style="color: #007700">,</span><span style="color: #DD0000">"i"</span><span style="color: #007700">) == </span><span style="color: #0000BB">0</span><span style="color: #007700">);
<br/>}

<br/></span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></li>
</ul></li>
<li><font size="4">GetNthElementText(Html:docid,Selector:selectorid,i  dx,string[],size = sizeof(string))</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">docid</font> - Html instance id</li>
<li><font face="courier new">selectorid</font> - CSS selector instance id</li>
<li><font face="courier new">idx</font> - the n’th occurence of element in the document (starts from 0)</li>
<li><font face="courier new">string[]</font> - element name</li>
<li><font face="courier new">size</font> - sizeof string</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li><font face="courier new">1</font> if successful</li>
<li><font face="courier new">0</font> if failed</li>
</ul></li>
<li><b>Example Usage</b><br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 322px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">new </span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">doc </span><span style="color: #007700">= </span><span style="color: #0000BB">ParseHtmlDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">"\
<br/>    &#x26;t!DOCTYPE html&#x26;t\
<br/>    &#x26;tmeta charset=\"utf-8\"&#x26;t\
<br/>    &#x26;ttitle&#x26;tHello, world!&#x26;t/title&#x26;t\
<br/>    &#x26;th1 class=\"foo\"&#x26;tHello, &#x26;ti&#x26;tworld!&#x26;t/i&#x26;t&#x26;t/h1&#x26;t\
<br/>"</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">doc </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">);

<br/>new </span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector </span><span style="color: #007700">= </span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"h1.foo"</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">selector </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">);

<br/>new </span><span style="color: #0000BB">element_text</span><span style="color: #007700">[</span><span style="color: #0000BB">20</span><span style="color: #007700">];
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">GetNthElementText</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">,</span><span style="color: #0000BB">selector</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">element_text</span><span style="color: #007700">) == </span><span style="color: #0000BB">1</span><span style="color: #007700">);

<br/>new </span><span style="color: #0000BB">check </span><span style="color: #007700">= </span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">element_text</span><span style="color: #007700">,(</span><span style="color: #DD0000">"Hello, world!"</span><span style="color: #007700">));
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">check </span><span style="color: #007700">== </span><span style="color: #0000BB">0</span><span style="color: #007700">);

<br/></span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></li>
</ul></li>
<li><font size="4">GetNthElementAttrVal(Html:docid,Selector:selectori  d,idx,attribute[],string[],size = sizeof(string))</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">docid</font> - Html instance id</li>
<li><font face="courier new">selectorid</font> - CSS selector instance id</li>
<li><font face="courier new">idx</font> - the n’th occurence of element in the document (starts from 0)</li>
<li><font face="courier new">attribute[]</font> - the attribute of element</li>
<li><font face="courier new">string[]</font> - element name</li>
<li><font face="courier new">size</font> - sizeof string</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li><font face="courier new">1</font> if successful</li>
<li><font face="courier new">0</font> if failed</li>
</ul></li>
<li><b>Example Usage</b><br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 322px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">new </span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">doc </span><span style="color: #007700">= </span><span style="color: #0000BB">ParseHtmlDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">"\
<br/>    &#x26;t!DOCTYPE html&#x26;t\
<br/>    &#x26;tmeta charset=\"utf-8\"&#x26;t\
<br/>    &#x26;ttitle&#x26;tHello, world!&#x26;t/title&#x26;t\
<br/>    &#x26;th1 class=\"foo\"&#x26;tHello, &#x26;ti&#x26;tworld!&#x26;t/i&#x26;t&#x26;t/h1&#x26;t\
<br/>"</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">doc </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">);

<br/>new </span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector </span><span style="color: #007700">= </span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"h1"</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">selector </span><span style="color: #007700">!= </span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">);

<br/>new </span><span style="color: #0000BB">element_attribute</span><span style="color: #007700">[</span><span style="color: #0000BB">20</span><span style="color: #007700">];
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">GetNthElementAttrVal</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">,</span><span style="color: #0000BB">selector</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">"class"</span><span style="color: #007700">,</span><span style="color: #0000BB">element_attribute</span><span style="color: #007700">) == </span><span style="color: #0000BB">1</span><span style="color: #007700">);

<br/>new </span><span style="color: #0000BB">check </span><span style="color: #007700">= </span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">element_attribute</span><span style="color: #007700">,(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">));
<br/></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">check </span><span style="color: #007700">== </span><span style="color: #0000BB">0</span><span style="color: #007700">);

<br/></span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></li>
</ul><br/></li>
<li><font size="4">DeleteHtml(Html:id)</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">id</font> - html instance to be deleted</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li><font face="courier new">1</font> if successful</li>
<li><font face="courier new">0</font> if failed</li>
</ul></li>
</ul><br/></li>
<li><font size="4">DeleteSelector(Selector:id)</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">id</font> - selector instance to be deleted</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li><font face="courier new">1</font> if successful</li>
<li><font face="courier new">0</font> if failed</li>
</ul></li>
</ul><br/></li>
<li><font size="4">DeleteResponse(Html:id)</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">id</font> - response instance to be deleted</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li><font face="courier new">1</font> if successful</li>
<li><font face="courier new">0</font> if failed</li>
</ul></li>
</ul><br/></li>
<li><font size="4">DeleteHeader(Header:id)</font><br />
<ul><li><b>Params</b><br />
<ul><li><font face="courier new">id</font> - header instance to be deleted</li>
</ul></li>
<li><b>Returns</b><br />
<ul><li><font face="courier new">1</font> if successful</li>
<li><font face="courier new">0</font> if failed</li>
</ul></li>
</ul></li>
</ul>
<br />
<font color="#7F00FF"><font size="6"><b>Example Usage</b></font></font><br />
<br />
A small example to fetch all links in wiki.sa-mp.com<br />
<br />
<font size="3"><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 466px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">new </span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">response </span><span style="color: #007700">= </span><span style="color: #0000BB">HttpGet</span><span style="color: #007700">(</span><span style="color: #DD0000">"https://wiki.sa-mp.com"</span><span style="color: #007700">);
<br/>if(</span><span style="color: #0000BB">response </span><span style="color: #007700">== </span><span style="color: #0000BB">INVALID_HTTP_RESPONSE</span><span style="color: #007700">){
<br/>    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"HTTP ERROR"</span><span style="color: #007700">);
<br/>    return;
<br/>}

<br/>new </span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">html </span><span style="color: #007700">= </span><span style="color: #0000BB">ResponseParseHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);
<br/>if(</span><span style="color: #0000BB">html </span><span style="color: #007700">== </span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">){
<br/>    </span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);
<br/>    return;
<br/>}

<br/>new </span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector </span><span style="color: #007700">= </span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"a"</span><span style="color: #007700">);
<br/>if(</span><span style="color: #0000BB">selector </span><span style="color: #007700">== </span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">){
<br/>    </span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">);
<br/>    return;
<br/>}

<br/>new </span><span style="color: #0000BB">str</span><span style="color: #007700">[</span><span style="color: #0000BB">500</span><span style="color: #007700">],</span><span style="color: #0000BB">i</span><span style="color: #007700">;
<br/>while(</span><span style="color: #0000BB">GetNthElementAttrVal</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">,</span><span style="color: #0000BB">selector</span><span style="color: #007700">,</span><span style="color: #0000BB">i</span><span style="color: #007700">,</span><span style="color: #DD0000">"href"</span><span style="color: #007700">,</span><span style="color: #0000BB">str</span><span style="color: #007700">)){
<br/>    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s"</span><span style="color: #007700">,</span><span style="color: #0000BB">str</span><span style="color: #007700">);
<br/>    ++</span><span style="color: #0000BB">i</span><span style="color: #007700">;
<br/>}
<br/></span><span style="color: #FF8000">//delete created objects after the usage..
<br/></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);
<br/></span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></font><br />
The same above with threaded http call would be<br />
<br />
<font size="3"><div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB">HttpGetThreaded</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">"MyHandler"</span><span style="color: #007700">,</span><span style="color: #DD0000">"https://wiki.sa-mp.com"</span><span style="color: #007700">);
<br/></span><span style="color: #FF8000">//...
<br/></span><span style="color: #0000BB">forward MyHandler</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">responseid</span><span style="color: #007700">);
<br/>public </span><span style="color: #0000BB">MyHandler</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">responseid</span><span style="color: #007700">){
<br/>    if(</span><span style="color: #0000BB">responseid </span><span style="color: #007700">== </span><span style="color: #0000BB">INVALID_HTTP_RESPONSE</span><span style="color: #007700">){
<br/>        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"HTTP ERROR"</span><span style="color: #007700">);
<br/>        return </span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br/>    }

<br/>    new </span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">html </span><span style="color: #007700">= </span><span style="color: #0000BB">ResponseParseHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">responseid</span><span style="color: #007700">);
<br/>    if(</span><span style="color: #0000BB">html </span><span style="color: #007700">== </span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">){
<br/>        </span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);
<br/>        return </span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br/>    }

<br/>    new </span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector </span><span style="color: #007700">= </span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"a"</span><span style="color: #007700">);
<br/>    if(</span><span style="color: #0000BB">selector </span><span style="color: #007700">== </span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">){
<br/>        </span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);
<br/>        </span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">);
<br/>        return </span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br/>    }

<br/>    new </span><span style="color: #0000BB">str</span><span style="color: #007700">[</span><span style="color: #0000BB">500</span><span style="color: #007700">],</span><span style="color: #0000BB">i</span><span style="color: #007700">;
<br/>    while(</span><span style="color: #0000BB">GetNthElementAttrVal</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">,</span><span style="color: #0000BB">selector</span><span style="color: #007700">,</span><span style="color: #0000BB">i</span><span style="color: #007700">,</span><span style="color: #DD0000">"href"</span><span style="color: #007700">,</span><span style="color: #0000BB">str</span><span style="color: #007700">)){
<br/>        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s"</span><span style="color: #007700">,</span><span style="color: #0000BB">str</span><span style="color: #007700">);
<br/>        ++</span><span style="color: #0000BB">i</span><span style="color: #007700">;
<br/>    }

<br/>    </span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">Delete</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></font><br />
<br />
More examples can be found in <a href="https://github.com/Sreyas-Sreelal/pawn-scraper/tree/master/examples" target="_blank">examples</a><br />
<br />
<font color="#7F00FF"><font size="6"><b>Repository</b></font></font><br />
<a href="https://github.com/Sreyas-Sreelal/pawn-scraper" target="_blank">https://github.com/Sreyas-Sreelal/pawn-scraper</a><br />
<br />
<font color="#7F00FF"><font size="6"><b>Note</b></font></font><br />
<br />
The plugin is in primary stage and more tests and features needed to be added.I’m open to any kind of contribution, just open a pull request if you have anything to improve or add new features.<br />
<br />
<font color="#7F00FF"><font size="6"><b>Special thanks</b></font></font><br />
<ul><li><a href="https://github.com/ZOTTCE" target="_blank">Eva</a> for <a href="https://github.com/ZOTTCE/samp-sdk" target="_blank">samp-rust-sdk</a></li>
<li><a href="https://github.com/Y-Less" target="_blank">******</a> for <a href="https://github.com/pawn-lang/YSI-Includes" target="_blank">y_tests</a></li>
<li>Discord members in <a href="https://discord.me/page/samp" target="_blank">SAMP discord channel</a></li>
</ul></font></font>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=193537">IllidanS4</a>]]></name>
		</author>
		<published>2018-10-26T15:06:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=660169" />
		<id>https://sampforum.blast.hk/showthread.php?tid=660169</id>
		<title xml:space="preserve"><![CDATA[[Plugin] Yet Another Lua Plugin]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=660169"><![CDATA[<div align="center"><font size="5"><a href="https://github.com/IllidanS4/YALP" target="_blank">YALP v1.0</a></font><br />
<b><font size="3"><a href="https://github.com/IllidanS4/YALP/releases/" target="_blank">Download</a></font></b><br />
<font size="3"><a href="https://github.com/IllidanS4/YALP/wiki" target="_blank">Tutorials</a></font></div>
<b>Introduction</b><br />
This plugin allows you to use Lua, your favourite dynamic flexible scripting language, in SA-MP, for all purposes, be it sandboxing user scripts, debugging the server, or developing filterscripts and gamemodes. <i>YALP</i> provides lightweight and flexible Lua environment that can use existing or future natives from SA-MP or plugins.<br />
<br />
The main feature of <i>YALP</i> is a powerful interop API to interact with existing Pawn natives and callbacks. It is very easy to call existing functions, <i>without needing to declare them anywhere</i>:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">interop.native.SetPlayerPos(0, 1235.31, -2331.84, 12.33)</pre>
</div><i>YALP</i> automatically converts all arguments to their proper Pawn cells, and allows you to specify what the function returns in the actuall call. All standard cell and single-dimensional array types are supported.<br />
<br />
Callbacks can be specified in a similar simple way:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">function interop.public.OnPlayerConnect(playerid)
  -- ...
end</pre>
</div>Thanks to these mechanisms, you can use any framework you want, or build your own in Lua, without depending on new versions of this plugin.<br />
<br />
<b>Configuration</b><br />
There is no special XML, JSON or other configuration of this plugin, because you can specify everything when you create a new Lua state (you can create any number you wish, and run any code inside). You can specify what packages should be loaded or available in the Lua instance, how much maximum memory it should take, or even limit for how long Lua functions can run.<br />
<br />
<b>Features</b><br />
All standard Lua packages are available (although some of the more unsafe ones aren't allowed by default). The powerful interop package can interface with any Pawn native function or callback. There is also an advanced timer library with support for simple asynchronous functions (with Lua coroutines) and all sorts of timers. The remote package contains functions for remote communication between two separate Lua instance (via serialization or proxies).<br />
<br />
The standard Lua packages are also enhanced with a couple of useful functions. Please see the <a href="https://github.com/IllidanS4/YALP/wiki/Lua-API" target="_blank">wiki</a> for a list of all new functions.<br />
<br />
The <a href="https://github.com/IllidanS4/YALP/wiki/Pawn-API" target="_blank">Pawn API</a> is basically a port of the <a href="https://www.lua.org/manual/5.3/manual.html#4.8" target="_blank">Lua C API</a>, allowing advanced manipulation of the Lua machine. It is recommended to use the Lua API, since it can do everything that Pawn can do, but if you need to interact with an existing complex Pawn library, it is possible as well.<br />
<br />
<b>Sample code</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:279px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222AA;">#include &#x26;ta_samp&#x26;t</span><br/><span style="color: #2222AA;">#include &#x26;tYALP&#x26;t</span><br/><br/><span style="color: #2222BB;">public</span> OnFilterScriptInit<span style="color: #000000;">(</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> <span style="color: #000000;">Lua</span><span style="color: #000000;">:</span>l <span style="color: #000000;">=</span> lua_newstate<span style="color: #000000;">(</span><span style="color: #000000;">)</span>; <span style="color: #228822;">// creates a new Lua instance</span><br/>    <br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>lua_loadfile<span style="color: #000000;">(</span>l, <span style="color: #000066;">"script.lua"</span><span style="color: #000000;">)</span><span style="color: #000000;">)</span> <span style="color: #228822;">// loads a Lua script and returns an error code</span><br/>    <span style="color: #000000;">{</span><br/>        lua_stackdump<span style="color: #000000;">(</span>l<span style="color: #000000;">)</span>; <span style="color: #228822;">// prints the stack for more information about the error</span><br/>        <span style="color: #2222BB;">return</span>;<br/>    <span style="color: #000000;">}</span><br/>    lua_bind<span style="color: #000000;">(</span>l<span style="color: #000000;">)</span>; <span style="color: #228822;">// binds the Lua instance to the current Pawn filterscript/gamemode, so all interation with it is rerouted to Lua</span><br/>    <span style="color: #228822;">// if the binding succeeds, this code is not run (and the Lua instance is destroyed if the script is unloaded)</span><br/>    lua_stackdump<span style="color: #000000;">(</span>l<span style="color: #000000;">)</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">-- script.lua
local interop = require "interop"
interop.native.print("Hello from Lua!")</pre>
</div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>