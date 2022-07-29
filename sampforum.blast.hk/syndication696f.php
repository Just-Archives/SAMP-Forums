<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[SA-MP Forums Archive - Scripting Help]]></title>
		<link>https://sampforum.blast.hk/</link>
		<description><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></description>
		<pubDate>Thu, 28 Jul 2022 20:44:10 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[Npc driver is lagging]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677880</link>
			<pubDate>Sun, 02 Aug 2020 10:39:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=298276">xRadical3</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677880</guid>
			<description><![CDATA[Why are npc drivers so lagging when they ride? <br />
For example, they suddenly go into the water and then return to the road, or sometimes hit walls and something... <br />
Does anyone have experience? Is there a way to fix it?<br />
I use normal npc script.]]></description>
			<content:encoded><![CDATA[Why are npc drivers so lagging when they ride? <br />
For example, they suddenly go into the water and then return to the road, or sometimes hit walls and something... <br />
Does anyone have experience? Is there a way to fix it?<br />
I use normal npc script.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[crash server]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677697</link>
			<pubDate>Sat, 25 Jul 2020 20:30:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=238892">Ertouq</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677697</guid>
			<description><![CDATA[Hello, the server crashed when i banned someone, I don't know what happens.<br />
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
<span style="color: #0000BB"></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">Server crashed due to an unknown error
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">Native backtrace</span><span style="color: #007700">:
<br/>[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#0 f676f8b6 in _Z13GetStackTraceRSt6vectorI10StackFrameSaIS0_EEPv () in plugins/crashdetect.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#1 f6767120 in _ZN18CrashDetectHandler20PrintNativeBacktraceERSoRKN2os7ContextE () in plugins/crashdetect.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#2 f6767886 in _ZN18CrashDetectHandler20PrintNativeBacktraceERKN2os7ContextE () in plugins/crashdetect.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#3 f6767f96 in _ZN18CrashDetectHandler7OnCrashERKN2os7ContextE () in plugins/crashdetect.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#4 f676ef82 in ?? () in plugins/crashdetect.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#5 f778fd40 in __kernel_rt_sigreturn () in linux-gate.so.1
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#6 f74dd5e8 in ?? () in /lib32/libc.so.6
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#7 0809571b in ?? () in ./server
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#8 f73fa7cf in ?? () in plugins/mysql.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#9 f7425843 in ?? () in plugins/mysql.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#10 f740d3a4 in ?? () in plugins/mysql.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#11 00000000 in nil ()
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">Registers</span><span style="color: #007700">:
<br/>[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">EAX</span><span style="color: #007700">: </span><span style="color: #0000BB">ffc2c8d0 EBX</span><span style="color: #007700">: </span><span style="color: #0000BB">f22d5008 ECX</span><span style="color: #007700">: </span><span style="color: #0000BB">0875500e EDX</span><span style="color: #007700">: </span><span style="color: #0000BB">ffc2c8d0
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESI</span><span style="color: #007700">: </span><span style="color: #0000BB">ffffd8c0 EDI</span><span style="color: #007700">: </span><span style="color: #0000BB">00000008 EBP</span><span style="color: #007700">: </span><span style="color: #0000BB">ffc2c7d8 ESP</span><span style="color: #007700">: </span><span style="color: #0000BB">ffc2c7ac
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">EIP</span><span style="color: #007700">: </span><span style="color: #0000BB">f74dd5e8 EFLAGS</span><span style="color: #007700">: </span><span style="color: #0000BB">00010203
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">Stack</span><span style="color: #007700">:
<br/>[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000000</span><span style="color: #007700">: </span><span style="color: #0000BB">0809571b ffc2c8d0 0875500e ffc2caf8
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000020</span><span style="color: #007700">: </span><span style="color: #0000BB">f744e000 088375e8 00000001 ffc2caf8
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000040</span><span style="color: #007700">: </span><span style="color: #0000BB">f744e000 088375e8 f7711ed6 f744e000
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000060</span><span style="color: #007700">: </span><span style="color: #0000BB">00000000 00000000 00000003 00000028
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000080</span><span style="color: #007700">: </span><span style="color: #0000BB">00000030 087bbd48 0000000a 0000000b
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000000a0</span><span style="color: #007700">: </span><span style="color: #0000BB">00000038 f7710e87 f774c000 087ae94c
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000000c0</span><span style="color: #007700">: </span><span style="color: #0000BB">f75fa000 08d597c4 f754a342 ffc2c938
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000000e0</span><span style="color: #007700">: </span><span style="color: #0000BB">f74c3ea5 0878cd5c 0878cbb4 f774c000
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000100</span><span style="color: #007700">: </span><span style="color: #0000BB">f73ef000 0000032d 00000000 ffc2c8d0
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000120</span><span style="color: #007700">: </span><span style="color: #0000BB">f73da722 08a89d58 f774c000 f7439b14
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000140</span><span style="color: #007700">: </span><span style="color: #0000BB">f774c000 00000001 ffc2c980 ffc2c9c8
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000160</span><span style="color: #007700">: </span><span style="color: #0000BB">f74c3ea5 00000000 f76aae56 00000008
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000180</span><span style="color: #007700">: </span><span style="color: #0000BB">00000020 00000000 087a74f8 f75fa420
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000001a0</span><span style="color: #007700">: </span><span style="color: #0000BB">00000038 00000000 0000005b 00000000
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000001c0</span><span style="color: #007700">: </span><span style="color: #0000BB">f774c000 087a74f8 08d55918 ffc2caf8
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000001e0</span><span style="color: #007700">: </span><span style="color: #0000BB">f76aae68 00000000 f76aae56 f744e000
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000200</span><span style="color: #007700">: </span><span style="color: #0000BB">f76aae68 00000000 087a74fc f7402319
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000220</span><span style="color: #007700">: </span><span style="color: #0000BB">f73fb90b 08d562e0 f744d440 f7439b14
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000240</span><span style="color: #007700">: </span><span style="color: #0000BB">00000005 087bbd30 087bbd48 ffc2ca90
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000260</span><span style="color: #007700">: </span><span style="color: #0000BB">08d59d38 ffffd8c0 0878f350 ff800084
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000280</span><span style="color: #007700">: </span><span style="color: #0000BB">ffc2ca31 0003cb01 e401d835 50fdf83e
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000002a0</span><span style="color: #007700">: </span><span style="color: #0000BB">8b372c41 08d59a34 fdfdb30b 00000015
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000002c0</span><span style="color: #007700">: </span><span style="color: #0000BB">00000063 ffc2ca90 081596ef ffc2ca88
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000002e0</span><span style="color: #007700">: </span><span style="color: #0000BB">0806f87b 08d55440 08d562e0 f66fbcb8
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000300</span><span style="color: #007700">: </span><span style="color: #0000BB">f74c6bd1 f743cef0 087a0f63 f0617898
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000320</span><span style="color: #007700">: </span><span style="color: #0000BB">f76ad074 00000015 02e107d0 00000001
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000340</span><span style="color: #007700">: </span><span style="color: #0000BB">f744e000 f05006ac ffc2cb50 ffc2cb78
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000360</span><span style="color: #007700">: </span><span style="color: #0000BB">f743cd26 f743cd25 00000426 f05006ac
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000380</span><span style="color: #007700">: </span><span style="color: #0000BB">f76aae68 00000000 00000000 f7712e49
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000003a0</span><span style="color: #007700">: </span><span style="color: #0000BB">f7711ee8 087bbd40 087bbd30 00000009
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000003c0</span><span style="color: #007700">: </span><span style="color: #0000BB">f744e000 081a1990 f05006ac ffc2cbf0
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000003e0</span><span style="color: #007700">: </span><span style="color: #0000BB">087891c8 00000100 00000100 00000100
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">Loaded modules</span><span style="color: #007700">:
<br/>[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">00000000 </span><span style="color: #007700">- </span><span style="color: #0000BB">00187dc3 server
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f778f000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f778fe82 linux</span><span style="color: #007700">-</span><span style="color: #0000BB">gate</span><span style="color: #007700">.</span><span style="color: #0000BB">so.1
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7770000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f777281b </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libdl</span><span style="color: #007700">.</span><span style="color: #0000BB">so.2
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7754000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f776ed2b </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libpthread</span><span style="color: #007700">.</span><span style="color: #0000BB">so.0
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7662000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f775bd1a </span><span style="color: #007700">/</span><span style="color: #0000BB">usr</span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libstdc</span><span style="color: #007700">++.</span><span style="color: #0000BB">so.6
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f761c000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f7660b97 </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libm</span><span style="color: #007700">.</span><span style="color: #0000BB">so.6
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f75ff000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f761b3c4 </span><span style="color: #007700">/</span><span style="color: #0000BB">usr</span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libgcc_s</span><span style="color: #007700">.</span><span style="color: #0000BB">so.1
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7451000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f7606237 </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libc</span><span style="color: #007700">.</span><span style="color: #0000BB">so.6
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7792000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f77b34a0 </span><span style="color: #007700">/</span><span style="color: #0000BB">lib</span><span style="color: #007700">/</span><span style="color: #0000BB">ld</span><span style="color: #007700">-</span><span style="color: #0000BB">linux</span><span style="color: #007700">.</span><span style="color: #0000BB">so.2
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7783000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f778b7c4 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">Whirlpool</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f73f0000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f744eaec plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f73cd000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f73ee108 </span><span style="color: #007700">/</span><span style="color: #0000BB">home</span><span style="color: #007700">/</span><span style="color: #0000BB">samp03</span><span style="color: #007700">/</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/../</span><span style="color: #0000BB">log</span><span style="color: #007700">-</span><span style="color: #0000BB">core</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f777a000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f778109f </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">librt</span><span style="color: #007700">.</span><span style="color: #0000BB">so.1
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f6fa3000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f73b6e9f </span><span style="color: #007700">/</span><span style="color: #0000BB">home</span><span style="color: #007700">/</span><span style="color: #0000BB">samp03</span><span style="color: #007700">/</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/../</span><span style="color: #0000BB">libmysqlclient</span><span style="color: #007700">.</span><span style="color: #0000BB">so.18
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f6795000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f67a03ef </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libnss_files</span><span style="color: #007700">.</span><span style="color: #0000BB">so.2
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f73bc000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f73cb9b4 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f6750000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f67943ac plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">crashdetect</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f6714000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f674e7c8 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">jit</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f664e000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f6713740 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">streamer</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f6569000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f6650b50 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">pawncmd</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f63c9000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f6570168 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">SKY</span><span style="color: #007700">.</span><span style="color: #0000BB">so 
<br/></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>
In mysql log:<br />
<br />
<div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB"></span><span style="color: #007700">[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 12</span><span style="color: #007700">:</span><span style="color: #0000BB">19</span><span style="color: #007700">:</span><span style="color: #0000BB">33</span><span style="color: #007700">] [</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">] </span><span style="color: #0000BB">cache_get_value_name_int</span><span style="color: #007700">: </span><span style="color: #0000BB">invalid row index </span><span style="color: #DD0000">'0' </span><span style="color: #007700">(</span><span style="color: #0000BB">number of rows</span><span style="color: #007700">: </span><span style="color: #DD0000">'0'</span><span style="color: #007700">) (</span><span style="color: #0000BB">C</span><span style="color: #007700">:\</span><span style="color: #0000BB">Users</span><span style="color: #007700">\</span><span style="color: #0000BB">ert</span><span style="color: #007700">\</span><span style="color: #0000BB">Desktop</span><span style="color: #007700">\</span><span style="color: #0000BB">SERVER</span><span style="color: #007700">\</span><span style="color: #0000BB">gamemodes</span><span style="color: #007700">\</span><span style="color: #0000BB">game</span><span style="color: #007700">.</span><span style="color: #0000BB">pwn</span><span style="color: #007700">:</span><span style="color: #0000BB">2344</span><span style="color: #007700">)
<br/>[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 12</span><span style="color: #007700">:</span><span style="color: #0000BB">20</span><span style="color: #007700">:</span><span style="color: #0000BB">41</span><span style="color: #007700">] [</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">] </span><span style="color: #0000BB">cache_get_value_name_int</span><span style="color: #007700">: </span><span style="color: #0000BB">invalid row index </span><span style="color: #DD0000">'0' </span><span style="color: #007700">(</span><span style="color: #0000BB">number of rows</span><span style="color: #007700">: </span><span style="color: #DD0000">'0'</span><span style="color: #007700">) (</span><span style="color: #0000BB">C</span><span style="color: #007700">:\</span><span style="color: #0000BB">Users</span><span style="color: #007700">\</span><span style="color: #0000BB">ert</span><span style="color: #007700">\</span><span style="color: #0000BB">Desktop</span><span style="color: #007700">\</span><span style="color: #0000BB">SERVER</span><span style="color: #007700">\</span><span style="color: #0000BB">gamemodes</span><span style="color: #007700">\</span><span style="color: #0000BB">game</span><span style="color: #007700">.</span><span style="color: #0000BB">pwn</span><span style="color: #007700">:</span><span style="color: #0000BB">2344</span><span style="color: #007700">)
<br/>[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 12</span><span style="color: #007700">:</span><span style="color: #0000BB">58</span><span style="color: #007700">:</span><span style="color: #0000BB">00</span><span style="color: #007700">] [</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">] </span><span style="color: #0000BB">cache_get_value_name_int</span><span style="color: #007700">: </span><span style="color: #0000BB">invalid row index </span><span style="color: #DD0000">'0' </span><span style="color: #007700">(</span><span style="color: #0000BB">number of rows</span><span style="color: #007700">: </span><span style="color: #DD0000">'0'</span><span style="color: #007700">) (</span><span style="color: #0000BB">C</span><span style="color: #007700">:\</span><span style="color: #0000BB">Users</span><span style="color: #007700">\</span><span style="color: #0000BB">ert</span><span style="color: #007700">\</span><span style="color: #0000BB">Desktop</span><span style="color: #007700">\</span><span style="color: #0000BB">SERVER</span><span style="color: #007700">\</span><span style="color: #0000BB">gamemodes</span><span style="color: #007700">\</span><span style="color: #0000BB">game</span><span style="color: #007700">.</span><span style="color: #0000BB">pwn</span><span style="color: #007700">:</span><span style="color: #0000BB">2344</span><span style="color: #007700">)
<br/>[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 15</span><span style="color: #007700">:</span><span style="color: #0000BB">41</span><span style="color: #007700">:</span><span style="color: #0000BB">03</span><span style="color: #007700">] [</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">] </span><span style="color: #0000BB">cache_get_value_name_int</span><span style="color: #007700">: </span><span style="color: #0000BB">invalid row index </span><span style="color: #DD0000">'0' </span><span style="color: #007700">(</span><span style="color: #0000BB">number of rows</span><span style="color: #007700">: </span><span style="color: #DD0000">'0'</span><span style="color: #007700">) (</span><span style="color: #0000BB">C</span><span style="color: #007700">:\</span><span style="color: #0000BB">Users</span><span style="color: #007700">\</span><span style="color: #0000BB">ert</span><span style="color: #007700">\</span><span style="color: #0000BB">Desktop</span><span style="color: #007700">\</span><span style="color: #0000BB">SERVER</span><span style="color: #007700">\</span><span style="color: #0000BB">gamemodes</span><span style="color: #007700">\</span><span style="color: #0000BB">game</span><span style="color: #007700">.</span><span style="color: #0000BB">pwn</span><span style="color: #007700">:</span><span style="color: #0000BB">2344</span><span style="color: #007700">)
<br/>[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">] </span><span style="color: #0000BB">error </span><span style="color: #FF8000">#1062 while executing query "INSERT INTO bans (`name`, `accid`, `by`, `reason`, `date`) VALUES ('Stefanrty', '43', 'Waser', 'cheat', NOW())": Duplicate entry '0' for key 'PRIMARY' (C:\Users\ert\Desktop\SERVER\gamemodes\game.pwn:4761)
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">log</span><span style="color: #007700">-</span><span style="color: #0000BB">core</span><span style="color: #007700">] </span><span style="color: #0000BB">signal 11 </span><span style="color: #007700">(</span><span style="color: #0000BB">SIGSEGV</span><span style="color: #007700">) </span><span style="color: #0000BB">catched</span><span style="color: #007700">; </span><span style="color: #0000BB">shutting log</span><span style="color: #007700">-</span><span style="color: #0000BB">core down </span><span style="color: #007700">(</span><span style="color: #0000BB">errno</span><span style="color: #007700">: </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">signal code</span><span style="color: #007700">: -</span><span style="color: #0000BB">6</span><span style="color: #007700">, exit </span><span style="color: #0000BB">status</span><span style="color: #007700">: </span><span style="color: #0000BB">0</span><span style="color: #007700">) 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>
Line 2344: <div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB">cache_get_value_int</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #DD0000">"banned"</span><span style="color: #007700">, </span><span style="color: #0000BB">banned</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div> in<br />
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
<span style="color: #0000BB">forward OnAccountCheckBan</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);
<br/>public </span><span style="color: #0000BB">OnAccountCheckBan</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)
<br/>{
<br/>    new </span><span style="color: #0000BB">banned</span><span style="color: #007700">;
<br/>    </span><span style="color: #0000BB">cache_get_value_int</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #DD0000">"banned"</span><span style="color: #007700">, </span><span style="color: #0000BB">banned</span><span style="color: #007700">);
<br/>    if(</span><span style="color: #0000BB">banned </span><span style="color: #007700">== </span><span style="color: #0000BB">1</span><span style="color: #007700">)
<br/>    {
<br/>        </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"account banned :("</span><span style="color: #007700">);
<br/>        </span><span style="color: #0000BB">SetTimerEx</span><span style="color: #007700">(</span><span style="color: #DD0000">"SendToKick"</span><span style="color: #007700">, </span><span style="color: #0000BB">500</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #DD0000">"i"</span><span style="color: #007700">, </span><span style="color: #0000BB">playerid</span><span style="color: #007700">);
<br/>    }
<br/>    else
<br/>    {
<br/>        new </span><span style="color: #0000BB">playername</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_PLAYER_NAME</span><span style="color: #007700">], </span><span style="color: #0000BB">query</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];
<br/>        </span><span style="color: #0000BB">GetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">playername</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">playername</span><span style="color: #007700">));
<br/>        </span><span style="color: #0000BB">mysql_format</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">), </span><span style="color: #DD0000">"SELECT `password`, `id` FROM `accounts` WHERE `name` = '%e' LIMIT 1"</span><span style="color: #007700">, </span><span style="color: #0000BB">playername</span><span style="color: #007700">);
<br/>        </span><span style="color: #0000BB">mysql_tquery</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">, </span><span style="color: #DD0000">"OnAccountCheck"</span><span style="color: #007700">, </span><span style="color: #DD0000">"d"</span><span style="color: #007700">, </span><span style="color: #0000BB">playerid</span><span style="color: #007700">);
<br/>    }
<br/>    return </span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>and line 4761: <div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB">mysql_tquery</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div> in<br />
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
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">ban</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    new </span><span style="color: #0000BB">id</span><span style="color: #007700">, </span><span style="color: #0000BB">reason</span><span style="color: #007700">[</span><span style="color: #0000BB">124</span><span style="color: #007700">], </span><span style="color: #0000BB">query</span><span style="color: #007700">[</span><span style="color: #0000BB">230</span><span style="color: #007700">], </span><span style="color: #0000BB">update</span><span style="color: #007700">[</span><span style="color: #0000BB">120</span><span style="color: #007700">], </span><span style="color: #0000BB">str</span><span style="color: #007700">[</span><span style="color: #0000BB">245</span><span style="color: #007700">], </span><span style="color: #0000BB">stringa</span><span style="color: #007700">[</span><span style="color: #0000BB">200</span><span style="color: #007700">];
<br/>    if(</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Admin</span><span style="color: #007700">] &lt; </span><span style="color: #0000BB">4</span><span style="color: #007700">) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"Nope"</span><span style="color: #007700">);
<br/>    if(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">, </span><span style="color: #DD0000">"us[124]"</span><span style="color: #007700">, </span><span style="color: #0000BB">id</span><span style="color: #007700">, </span><span style="color: #0000BB">reason</span><span style="color: #007700">)) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"/ban (id/name) (reason)"</span><span style="color: #007700">);
<br/>    if(!</span><span style="color: #0000BB">IsPlayerConnected</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">)) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"Player disconnected"</span><span style="color: #007700">);
<br/>    if(</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Admin</span><span style="color: #007700">] &lt; </span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">][</span><span style="color: #0000BB">Admin</span><span style="color: #007700">]) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"U cant"</span><span style="color: #007700">);
<br/>    if(</span><span style="color: #0000BB">id </span><span style="color: #007700">== </span><span style="color: #0000BB">playerid</span><span style="color: #007700">) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"nope"</span><span style="color: #007700">);

<br/>    </span><span style="color: #0000BB">mysql_format</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">), </span><span style="color: #DD0000">"INSERT INTO bans (`name`, `accid`, `by`, `reason`, `date`) VALUES ('%e', '%d', '%e', '%e', NOW())"</span><span style="color: #007700">, </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">), </span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">], </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">), </span><span style="color: #0000BB">reason</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">mysql_format</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">update</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">update</span><span style="color: #007700">), </span><span style="color: #DD0000">"UPDATE `accounts` SET `banned` = 1 WHERE name = '%e'"</span><span style="color: #007700">, </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">));

<br/>    </span><span style="color: #0000BB">mysql_tquery</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">); 
<br/>    </span><span style="color: #0000BB">mysql_tquery</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">update</span><span style="color: #007700">); 
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">str</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">str</span><span style="color: #007700">), </span><span style="color: #DD0000">"%s has been banned by %s. (Reason: %s)"</span><span style="color: #007700">, </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">), </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">), </span><span style="color: #0000BB">reason</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">SendClientMessageToAll</span><span style="color: #007700">(</span><span style="color: #0000BB">0xff6b6bFF</span><span style="color: #007700">, </span><span style="color: #0000BB">str</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">SetTimerEx</span><span style="color: #007700">(</span><span style="color: #DD0000">"SendToKick"</span><span style="color: #007700">, </span><span style="color: #0000BB">500</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #DD0000">"i"</span><span style="color: #007700">, </span><span style="color: #0000BB">id</span><span style="color: #007700">);

<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">stringa</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">stringa</span><span style="color: #007700">), </span><span style="color: #DD0000">"Admin %s(%d) used the cmd /ban to %s."</span><span style="color: #007700">, </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">), </span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">));
<br/>    </span><span style="color: #0000BB">SendMessageToAdmins</span><span style="color: #007700">(</span><span style="color: #0000BB">0xe8e8e8FF</span><span style="color: #007700">, </span><span style="color: #0000BB">stringa</span><span style="color: #007700">);

<br/>    new
<br/>    </span><span style="color: #0000BB">File</span><span style="color: #007700">:</span><span style="color: #0000BB">lFile </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"db/logs/logs_ban.txt"</span><span style="color: #007700">, </span><span style="color: #0000BB">io_append</span><span style="color: #007700">),
<br/>    </span><span style="color: #0000BB">logData</span><span style="color: #007700">[</span><span style="color: #0000BB">178</span><span style="color: #007700">],
<br/>    </span><span style="color: #0000BB">fyear</span><span style="color: #007700">, </span><span style="color: #0000BB">fmonth</span><span style="color: #007700">, </span><span style="color: #0000BB">fday</span><span style="color: #007700">,
<br/>    </span><span style="color: #0000BB">fhour</span><span style="color: #007700">, </span><span style="color: #0000BB">fminute</span><span style="color: #007700">, </span><span style="color: #0000BB">fsecond</span><span style="color: #007700">;

<br/>    </span><span style="color: #0000BB">getdate</span><span style="color: #007700">(</span><span style="color: #0000BB">fyear</span><span style="color: #007700">, </span><span style="color: #0000BB">fmonth</span><span style="color: #007700">, </span><span style="color: #0000BB">fday</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">gettime</span><span style="color: #007700">(</span><span style="color: #0000BB">fhour</span><span style="color: #007700">, </span><span style="color: #0000BB">fminute</span><span style="color: #007700">, </span><span style="color: #0000BB">fsecond</span><span style="color: #007700">);

<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">logData</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">logData</span><span style="color: #007700">),</span><span style="color: #DD0000">"[%02d/%02d/%04d %02d:%02d:%02d] (ADMIN NIVEL %d) %s banned %s. (Reason: %s)\r\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">fday</span><span style="color: #007700">, </span><span style="color: #0000BB">fmonth</span><span style="color: #007700">, </span><span style="color: #0000BB">fyear</span><span style="color: #007700">, </span><span style="color: #0000BB">fhour</span><span style="color: #007700">, </span><span style="color: #0000BB">fminute</span><span style="color: #007700">, </span><span style="color: #0000BB">fsecond</span><span style="color: #007700">, </span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Admin</span><span style="color: #007700">], </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">), </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">), </span><span style="color: #0000BB">reason</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">lFile</span><span style="color: #007700">, </span><span style="color: #0000BB">logData</span><span style="color: #007700">);

<br/>    </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">lFile</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Thanks!]]></description>
			<content:encoded><![CDATA[Hello, the server crashed when i banned someone, I don't know what happens.<br />
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
<span style="color: #0000BB"></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">Server crashed due to an unknown error
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">Native backtrace</span><span style="color: #007700">:
<br/>[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#0 f676f8b6 in _Z13GetStackTraceRSt6vectorI10StackFrameSaIS0_EEPv () in plugins/crashdetect.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#1 f6767120 in _ZN18CrashDetectHandler20PrintNativeBacktraceERSoRKN2os7ContextE () in plugins/crashdetect.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#2 f6767886 in _ZN18CrashDetectHandler20PrintNativeBacktraceERKN2os7ContextE () in plugins/crashdetect.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#3 f6767f96 in _ZN18CrashDetectHandler7OnCrashERKN2os7ContextE () in plugins/crashdetect.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#4 f676ef82 in ?? () in plugins/crashdetect.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#5 f778fd40 in __kernel_rt_sigreturn () in linux-gate.so.1
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#6 f74dd5e8 in ?? () in /lib32/libc.so.6
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#7 0809571b in ?? () in ./server
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#8 f73fa7cf in ?? () in plugins/mysql.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#9 f7425843 in ?? () in plugins/mysql.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#10 f740d3a4 in ?? () in plugins/mysql.so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #FF8000">#11 00000000 in nil ()
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">Registers</span><span style="color: #007700">:
<br/>[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">EAX</span><span style="color: #007700">: </span><span style="color: #0000BB">ffc2c8d0 EBX</span><span style="color: #007700">: </span><span style="color: #0000BB">f22d5008 ECX</span><span style="color: #007700">: </span><span style="color: #0000BB">0875500e EDX</span><span style="color: #007700">: </span><span style="color: #0000BB">ffc2c8d0
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESI</span><span style="color: #007700">: </span><span style="color: #0000BB">ffffd8c0 EDI</span><span style="color: #007700">: </span><span style="color: #0000BB">00000008 EBP</span><span style="color: #007700">: </span><span style="color: #0000BB">ffc2c7d8 ESP</span><span style="color: #007700">: </span><span style="color: #0000BB">ffc2c7ac
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">EIP</span><span style="color: #007700">: </span><span style="color: #0000BB">f74dd5e8 EFLAGS</span><span style="color: #007700">: </span><span style="color: #0000BB">00010203
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">Stack</span><span style="color: #007700">:
<br/>[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000000</span><span style="color: #007700">: </span><span style="color: #0000BB">0809571b ffc2c8d0 0875500e ffc2caf8
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000020</span><span style="color: #007700">: </span><span style="color: #0000BB">f744e000 088375e8 00000001 ffc2caf8
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000040</span><span style="color: #007700">: </span><span style="color: #0000BB">f744e000 088375e8 f7711ed6 f744e000
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000060</span><span style="color: #007700">: </span><span style="color: #0000BB">00000000 00000000 00000003 00000028
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000080</span><span style="color: #007700">: </span><span style="color: #0000BB">00000030 087bbd48 0000000a 0000000b
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000000a0</span><span style="color: #007700">: </span><span style="color: #0000BB">00000038 f7710e87 f774c000 087ae94c
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000000c0</span><span style="color: #007700">: </span><span style="color: #0000BB">f75fa000 08d597c4 f754a342 ffc2c938
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000000e0</span><span style="color: #007700">: </span><span style="color: #0000BB">f74c3ea5 0878cd5c 0878cbb4 f774c000
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000100</span><span style="color: #007700">: </span><span style="color: #0000BB">f73ef000 0000032d 00000000 ffc2c8d0
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000120</span><span style="color: #007700">: </span><span style="color: #0000BB">f73da722 08a89d58 f774c000 f7439b14
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000140</span><span style="color: #007700">: </span><span style="color: #0000BB">f774c000 00000001 ffc2c980 ffc2c9c8
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000160</span><span style="color: #007700">: </span><span style="color: #0000BB">f74c3ea5 00000000 f76aae56 00000008
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000180</span><span style="color: #007700">: </span><span style="color: #0000BB">00000020 00000000 087a74f8 f75fa420
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000001a0</span><span style="color: #007700">: </span><span style="color: #0000BB">00000038 00000000 0000005b 00000000
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000001c0</span><span style="color: #007700">: </span><span style="color: #0000BB">f774c000 087a74f8 08d55918 ffc2caf8
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000001e0</span><span style="color: #007700">: </span><span style="color: #0000BB">f76aae68 00000000 f76aae56 f744e000
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000200</span><span style="color: #007700">: </span><span style="color: #0000BB">f76aae68 00000000 087a74fc f7402319
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000220</span><span style="color: #007700">: </span><span style="color: #0000BB">f73fb90b 08d562e0 f744d440 f7439b14
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000240</span><span style="color: #007700">: </span><span style="color: #0000BB">00000005 087bbd30 087bbd48 ffc2ca90
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000260</span><span style="color: #007700">: </span><span style="color: #0000BB">08d59d38 ffffd8c0 0878f350 ff800084
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000280</span><span style="color: #007700">: </span><span style="color: #0000BB">ffc2ca31 0003cb01 e401d835 50fdf83e
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000002a0</span><span style="color: #007700">: </span><span style="color: #0000BB">8b372c41 08d59a34 fdfdb30b 00000015
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000002c0</span><span style="color: #007700">: </span><span style="color: #0000BB">00000063 ffc2ca90 081596ef ffc2ca88
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000002e0</span><span style="color: #007700">: </span><span style="color: #0000BB">0806f87b 08d55440 08d562e0 f66fbcb8
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000300</span><span style="color: #007700">: </span><span style="color: #0000BB">f74c6bd1 f743cef0 087a0f63 f0617898
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000320</span><span style="color: #007700">: </span><span style="color: #0000BB">f76ad074 00000015 02e107d0 00000001
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000340</span><span style="color: #007700">: </span><span style="color: #0000BB">f744e000 f05006ac ffc2cb50 ffc2cb78
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000360</span><span style="color: #007700">: </span><span style="color: #0000BB">f743cd26 f743cd25 00000426 f05006ac
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">00000380</span><span style="color: #007700">: </span><span style="color: #0000BB">f76aae68 00000000 00000000 f7712e49
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000003a0</span><span style="color: #007700">: </span><span style="color: #0000BB">f7711ee8 087bbd40 087bbd30 00000009
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000003c0</span><span style="color: #007700">: </span><span style="color: #0000BB">f744e000 081a1990 f05006ac ffc2cbf0
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">ESP</span><span style="color: #007700">+</span><span style="color: #0000BB">000003e0</span><span style="color: #007700">: </span><span style="color: #0000BB">087891c8 00000100 00000100 00000100
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">Loaded modules</span><span style="color: #007700">:
<br/>[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">00000000 </span><span style="color: #007700">- </span><span style="color: #0000BB">00187dc3 server
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f778f000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f778fe82 linux</span><span style="color: #007700">-</span><span style="color: #0000BB">gate</span><span style="color: #007700">.</span><span style="color: #0000BB">so.1
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7770000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f777281b </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libdl</span><span style="color: #007700">.</span><span style="color: #0000BB">so.2
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7754000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f776ed2b </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libpthread</span><span style="color: #007700">.</span><span style="color: #0000BB">so.0
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7662000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f775bd1a </span><span style="color: #007700">/</span><span style="color: #0000BB">usr</span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libstdc</span><span style="color: #007700">++.</span><span style="color: #0000BB">so.6
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f761c000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f7660b97 </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libm</span><span style="color: #007700">.</span><span style="color: #0000BB">so.6
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f75ff000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f761b3c4 </span><span style="color: #007700">/</span><span style="color: #0000BB">usr</span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libgcc_s</span><span style="color: #007700">.</span><span style="color: #0000BB">so.1
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7451000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f7606237 </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libc</span><span style="color: #007700">.</span><span style="color: #0000BB">so.6
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7792000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f77b34a0 </span><span style="color: #007700">/</span><span style="color: #0000BB">lib</span><span style="color: #007700">/</span><span style="color: #0000BB">ld</span><span style="color: #007700">-</span><span style="color: #0000BB">linux</span><span style="color: #007700">.</span><span style="color: #0000BB">so.2
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f7783000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f778b7c4 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">Whirlpool</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f73f0000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f744eaec plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f73cd000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f73ee108 </span><span style="color: #007700">/</span><span style="color: #0000BB">home</span><span style="color: #007700">/</span><span style="color: #0000BB">samp03</span><span style="color: #007700">/</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/../</span><span style="color: #0000BB">log</span><span style="color: #007700">-</span><span style="color: #0000BB">core</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f777a000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f778109f </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">librt</span><span style="color: #007700">.</span><span style="color: #0000BB">so.1
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f6fa3000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f73b6e9f </span><span style="color: #007700">/</span><span style="color: #0000BB">home</span><span style="color: #007700">/</span><span style="color: #0000BB">samp03</span><span style="color: #007700">/</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/../</span><span style="color: #0000BB">libmysqlclient</span><span style="color: #007700">.</span><span style="color: #0000BB">so.18
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f6795000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f67a03ef </span><span style="color: #007700">/</span><span style="color: #0000BB">lib32</span><span style="color: #007700">/</span><span style="color: #0000BB">libnss_files</span><span style="color: #007700">.</span><span style="color: #0000BB">so.2
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f73bc000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f73cb9b4 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f6750000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f67943ac plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">crashdetect</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f6714000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f674e7c8 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">jit</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f664e000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f6713740 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">streamer</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f6569000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f6650b50 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">pawncmd</span><span style="color: #007700">.</span><span style="color: #0000BB">so
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">debug</span><span style="color: #007700">] </span><span style="color: #0000BB">f63c9000 </span><span style="color: #007700">- </span><span style="color: #0000BB">f6570168 plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">SKY</span><span style="color: #007700">.</span><span style="color: #0000BB">so 
<br/></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>
In mysql log:<br />
<br />
<div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB"></span><span style="color: #007700">[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 12</span><span style="color: #007700">:</span><span style="color: #0000BB">19</span><span style="color: #007700">:</span><span style="color: #0000BB">33</span><span style="color: #007700">] [</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">] </span><span style="color: #0000BB">cache_get_value_name_int</span><span style="color: #007700">: </span><span style="color: #0000BB">invalid row index </span><span style="color: #DD0000">'0' </span><span style="color: #007700">(</span><span style="color: #0000BB">number of rows</span><span style="color: #007700">: </span><span style="color: #DD0000">'0'</span><span style="color: #007700">) (</span><span style="color: #0000BB">C</span><span style="color: #007700">:\</span><span style="color: #0000BB">Users</span><span style="color: #007700">\</span><span style="color: #0000BB">ert</span><span style="color: #007700">\</span><span style="color: #0000BB">Desktop</span><span style="color: #007700">\</span><span style="color: #0000BB">SERVER</span><span style="color: #007700">\</span><span style="color: #0000BB">gamemodes</span><span style="color: #007700">\</span><span style="color: #0000BB">game</span><span style="color: #007700">.</span><span style="color: #0000BB">pwn</span><span style="color: #007700">:</span><span style="color: #0000BB">2344</span><span style="color: #007700">)
<br/>[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 12</span><span style="color: #007700">:</span><span style="color: #0000BB">20</span><span style="color: #007700">:</span><span style="color: #0000BB">41</span><span style="color: #007700">] [</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">] </span><span style="color: #0000BB">cache_get_value_name_int</span><span style="color: #007700">: </span><span style="color: #0000BB">invalid row index </span><span style="color: #DD0000">'0' </span><span style="color: #007700">(</span><span style="color: #0000BB">number of rows</span><span style="color: #007700">: </span><span style="color: #DD0000">'0'</span><span style="color: #007700">) (</span><span style="color: #0000BB">C</span><span style="color: #007700">:\</span><span style="color: #0000BB">Users</span><span style="color: #007700">\</span><span style="color: #0000BB">ert</span><span style="color: #007700">\</span><span style="color: #0000BB">Desktop</span><span style="color: #007700">\</span><span style="color: #0000BB">SERVER</span><span style="color: #007700">\</span><span style="color: #0000BB">gamemodes</span><span style="color: #007700">\</span><span style="color: #0000BB">game</span><span style="color: #007700">.</span><span style="color: #0000BB">pwn</span><span style="color: #007700">:</span><span style="color: #0000BB">2344</span><span style="color: #007700">)
<br/>[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 12</span><span style="color: #007700">:</span><span style="color: #0000BB">58</span><span style="color: #007700">:</span><span style="color: #0000BB">00</span><span style="color: #007700">] [</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">] </span><span style="color: #0000BB">cache_get_value_name_int</span><span style="color: #007700">: </span><span style="color: #0000BB">invalid row index </span><span style="color: #DD0000">'0' </span><span style="color: #007700">(</span><span style="color: #0000BB">number of rows</span><span style="color: #007700">: </span><span style="color: #DD0000">'0'</span><span style="color: #007700">) (</span><span style="color: #0000BB">C</span><span style="color: #007700">:\</span><span style="color: #0000BB">Users</span><span style="color: #007700">\</span><span style="color: #0000BB">ert</span><span style="color: #007700">\</span><span style="color: #0000BB">Desktop</span><span style="color: #007700">\</span><span style="color: #0000BB">SERVER</span><span style="color: #007700">\</span><span style="color: #0000BB">gamemodes</span><span style="color: #007700">\</span><span style="color: #0000BB">game</span><span style="color: #007700">.</span><span style="color: #0000BB">pwn</span><span style="color: #007700">:</span><span style="color: #0000BB">2344</span><span style="color: #007700">)
<br/>[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 15</span><span style="color: #007700">:</span><span style="color: #0000BB">41</span><span style="color: #007700">:</span><span style="color: #0000BB">03</span><span style="color: #007700">] [</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">] </span><span style="color: #0000BB">cache_get_value_name_int</span><span style="color: #007700">: </span><span style="color: #0000BB">invalid row index </span><span style="color: #DD0000">'0' </span><span style="color: #007700">(</span><span style="color: #0000BB">number of rows</span><span style="color: #007700">: </span><span style="color: #DD0000">'0'</span><span style="color: #007700">) (</span><span style="color: #0000BB">C</span><span style="color: #007700">:\</span><span style="color: #0000BB">Users</span><span style="color: #007700">\</span><span style="color: #0000BB">ert</span><span style="color: #007700">\</span><span style="color: #0000BB">Desktop</span><span style="color: #007700">\</span><span style="color: #0000BB">SERVER</span><span style="color: #007700">\</span><span style="color: #0000BB">gamemodes</span><span style="color: #007700">\</span><span style="color: #0000BB">game</span><span style="color: #007700">.</span><span style="color: #0000BB">pwn</span><span style="color: #007700">:</span><span style="color: #0000BB">2344</span><span style="color: #007700">)
<br/>[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">plugins</span><span style="color: #007700">/</span><span style="color: #0000BB">mysql</span><span style="color: #007700">] </span><span style="color: #0000BB">error </span><span style="color: #FF8000">#1062 while executing query "INSERT INTO bans (`name`, `accid`, `by`, `reason`, `date`) VALUES ('Stefanrty', '43', 'Waser', 'cheat', NOW())": Duplicate entry '0' for key 'PRIMARY' (C:\Users\ert\Desktop\SERVER\gamemodes\game.pwn:4761)
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">07</span><span style="color: #007700">/</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">20 16</span><span style="color: #007700">:</span><span style="color: #0000BB">14</span><span style="color: #007700">:</span><span style="color: #0000BB">10</span><span style="color: #007700">] [</span><span style="color: #0000BB">log</span><span style="color: #007700">-</span><span style="color: #0000BB">core</span><span style="color: #007700">] </span><span style="color: #0000BB">signal 11 </span><span style="color: #007700">(</span><span style="color: #0000BB">SIGSEGV</span><span style="color: #007700">) </span><span style="color: #0000BB">catched</span><span style="color: #007700">; </span><span style="color: #0000BB">shutting log</span><span style="color: #007700">-</span><span style="color: #0000BB">core down </span><span style="color: #007700">(</span><span style="color: #0000BB">errno</span><span style="color: #007700">: </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">signal code</span><span style="color: #007700">: -</span><span style="color: #0000BB">6</span><span style="color: #007700">, exit </span><span style="color: #0000BB">status</span><span style="color: #007700">: </span><span style="color: #0000BB">0</span><span style="color: #007700">) 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>
Line 2344: <div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB">cache_get_value_int</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #DD0000">"banned"</span><span style="color: #007700">, </span><span style="color: #0000BB">banned</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div> in<br />
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
<span style="color: #0000BB">forward OnAccountCheckBan</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);
<br/>public </span><span style="color: #0000BB">OnAccountCheckBan</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)
<br/>{
<br/>    new </span><span style="color: #0000BB">banned</span><span style="color: #007700">;
<br/>    </span><span style="color: #0000BB">cache_get_value_int</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #DD0000">"banned"</span><span style="color: #007700">, </span><span style="color: #0000BB">banned</span><span style="color: #007700">);
<br/>    if(</span><span style="color: #0000BB">banned </span><span style="color: #007700">== </span><span style="color: #0000BB">1</span><span style="color: #007700">)
<br/>    {
<br/>        </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"account banned :("</span><span style="color: #007700">);
<br/>        </span><span style="color: #0000BB">SetTimerEx</span><span style="color: #007700">(</span><span style="color: #DD0000">"SendToKick"</span><span style="color: #007700">, </span><span style="color: #0000BB">500</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #DD0000">"i"</span><span style="color: #007700">, </span><span style="color: #0000BB">playerid</span><span style="color: #007700">);
<br/>    }
<br/>    else
<br/>    {
<br/>        new </span><span style="color: #0000BB">playername</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_PLAYER_NAME</span><span style="color: #007700">], </span><span style="color: #0000BB">query</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];
<br/>        </span><span style="color: #0000BB">GetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">playername</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">playername</span><span style="color: #007700">));
<br/>        </span><span style="color: #0000BB">mysql_format</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">), </span><span style="color: #DD0000">"SELECT `password`, `id` FROM `accounts` WHERE `name` = '%e' LIMIT 1"</span><span style="color: #007700">, </span><span style="color: #0000BB">playername</span><span style="color: #007700">);
<br/>        </span><span style="color: #0000BB">mysql_tquery</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">, </span><span style="color: #DD0000">"OnAccountCheck"</span><span style="color: #007700">, </span><span style="color: #DD0000">"d"</span><span style="color: #007700">, </span><span style="color: #0000BB">playerid</span><span style="color: #007700">);
<br/>    }
<br/>    return </span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>and line 4761: <div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB">mysql_tquery</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div> in<br />
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
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">ban</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    new </span><span style="color: #0000BB">id</span><span style="color: #007700">, </span><span style="color: #0000BB">reason</span><span style="color: #007700">[</span><span style="color: #0000BB">124</span><span style="color: #007700">], </span><span style="color: #0000BB">query</span><span style="color: #007700">[</span><span style="color: #0000BB">230</span><span style="color: #007700">], </span><span style="color: #0000BB">update</span><span style="color: #007700">[</span><span style="color: #0000BB">120</span><span style="color: #007700">], </span><span style="color: #0000BB">str</span><span style="color: #007700">[</span><span style="color: #0000BB">245</span><span style="color: #007700">], </span><span style="color: #0000BB">stringa</span><span style="color: #007700">[</span><span style="color: #0000BB">200</span><span style="color: #007700">];
<br/>    if(</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Admin</span><span style="color: #007700">] &lt; </span><span style="color: #0000BB">4</span><span style="color: #007700">) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"Nope"</span><span style="color: #007700">);
<br/>    if(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">, </span><span style="color: #DD0000">"us[124]"</span><span style="color: #007700">, </span><span style="color: #0000BB">id</span><span style="color: #007700">, </span><span style="color: #0000BB">reason</span><span style="color: #007700">)) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"/ban (id/name) (reason)"</span><span style="color: #007700">);
<br/>    if(!</span><span style="color: #0000BB">IsPlayerConnected</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">)) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"Player disconnected"</span><span style="color: #007700">);
<br/>    if(</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Admin</span><span style="color: #007700">] &lt; </span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">][</span><span style="color: #0000BB">Admin</span><span style="color: #007700">]) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"U cant"</span><span style="color: #007700">);
<br/>    if(</span><span style="color: #0000BB">id </span><span style="color: #007700">== </span><span style="color: #0000BB">playerid</span><span style="color: #007700">) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"nope"</span><span style="color: #007700">);

<br/>    </span><span style="color: #0000BB">mysql_format</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">), </span><span style="color: #DD0000">"INSERT INTO bans (`name`, `accid`, `by`, `reason`, `date`) VALUES ('%e', '%d', '%e', '%e', NOW())"</span><span style="color: #007700">, </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">), </span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">], </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">), </span><span style="color: #0000BB">reason</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">mysql_format</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">update</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">update</span><span style="color: #007700">), </span><span style="color: #DD0000">"UPDATE `accounts` SET `banned` = 1 WHERE name = '%e'"</span><span style="color: #007700">, </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">));

<br/>    </span><span style="color: #0000BB">mysql_tquery</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">); 
<br/>    </span><span style="color: #0000BB">mysql_tquery</span><span style="color: #007700">(</span><span style="color: #0000BB">db</span><span style="color: #007700">, </span><span style="color: #0000BB">update</span><span style="color: #007700">); 
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">str</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">str</span><span style="color: #007700">), </span><span style="color: #DD0000">"%s has been banned by %s. (Reason: %s)"</span><span style="color: #007700">, </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">), </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">), </span><span style="color: #0000BB">reason</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">SendClientMessageToAll</span><span style="color: #007700">(</span><span style="color: #0000BB">0xff6b6bFF</span><span style="color: #007700">, </span><span style="color: #0000BB">str</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">SetTimerEx</span><span style="color: #007700">(</span><span style="color: #DD0000">"SendToKick"</span><span style="color: #007700">, </span><span style="color: #0000BB">500</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #DD0000">"i"</span><span style="color: #007700">, </span><span style="color: #0000BB">id</span><span style="color: #007700">);

<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">stringa</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">stringa</span><span style="color: #007700">), </span><span style="color: #DD0000">"Admin %s(%d) used the cmd /ban to %s."</span><span style="color: #007700">, </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">), </span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">));
<br/>    </span><span style="color: #0000BB">SendMessageToAdmins</span><span style="color: #007700">(</span><span style="color: #0000BB">0xe8e8e8FF</span><span style="color: #007700">, </span><span style="color: #0000BB">stringa</span><span style="color: #007700">);

<br/>    new
<br/>    </span><span style="color: #0000BB">File</span><span style="color: #007700">:</span><span style="color: #0000BB">lFile </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"db/logs/logs_ban.txt"</span><span style="color: #007700">, </span><span style="color: #0000BB">io_append</span><span style="color: #007700">),
<br/>    </span><span style="color: #0000BB">logData</span><span style="color: #007700">[</span><span style="color: #0000BB">178</span><span style="color: #007700">],
<br/>    </span><span style="color: #0000BB">fyear</span><span style="color: #007700">, </span><span style="color: #0000BB">fmonth</span><span style="color: #007700">, </span><span style="color: #0000BB">fday</span><span style="color: #007700">,
<br/>    </span><span style="color: #0000BB">fhour</span><span style="color: #007700">, </span><span style="color: #0000BB">fminute</span><span style="color: #007700">, </span><span style="color: #0000BB">fsecond</span><span style="color: #007700">;

<br/>    </span><span style="color: #0000BB">getdate</span><span style="color: #007700">(</span><span style="color: #0000BB">fyear</span><span style="color: #007700">, </span><span style="color: #0000BB">fmonth</span><span style="color: #007700">, </span><span style="color: #0000BB">fday</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">gettime</span><span style="color: #007700">(</span><span style="color: #0000BB">fhour</span><span style="color: #007700">, </span><span style="color: #0000BB">fminute</span><span style="color: #007700">, </span><span style="color: #0000BB">fsecond</span><span style="color: #007700">);

<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">logData</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">logData</span><span style="color: #007700">),</span><span style="color: #DD0000">"[%02d/%02d/%04d %02d:%02d:%02d] (ADMIN NIVEL %d) %s banned %s. (Reason: %s)\r\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">fday</span><span style="color: #007700">, </span><span style="color: #0000BB">fmonth</span><span style="color: #007700">, </span><span style="color: #0000BB">fyear</span><span style="color: #007700">, </span><span style="color: #0000BB">fhour</span><span style="color: #007700">, </span><span style="color: #0000BB">fminute</span><span style="color: #007700">, </span><span style="color: #0000BB">fsecond</span><span style="color: #007700">, </span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Admin</span><span style="color: #007700">], </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">), </span><span style="color: #0000BB">GetName</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">), </span><span style="color: #0000BB">reason</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">lFile</span><span style="color: #007700">, </span><span style="color: #0000BB">logData</span><span style="color: #007700">);

<br/>    </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">lFile</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Thanks!]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[New to Loops such as these ones, any advice?]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677520</link>
			<pubDate>Sat, 18 Jul 2020 06:34:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=255802">SkyFlare</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677520</guid>
			<description><![CDATA[This function is to get the Free Biz ID in my Database... (well actually it doesnt read the database)<br />
Ex: I have BIZ ids 1,2,3,5: Output: Biz ID 4 is free.<br />
This is what the loop looks like and I am just wondering if there's a smarter way to do this, it works right now though.<br />
<br />
But I don't think it'll work if I change it in realtime, as the Array's ID's will change if I add ID 4 in, and delete ID 2, my result may not output 2.... <br />
<div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB">GetFreeBizID</span><span style="color: #007700">()
<br/>{
<br/>    new </span><span style="color: #0000BB">Result</span><span style="color: #007700">, </span><span style="color: #0000BB">LastID</span><span style="color: #007700">;
<br/>    for(new </span><span style="color: #0000BB">i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">MAX_BIZS</span><span style="color: #007700">; </span><span style="color: #0000BB">i</span><span style="color: #007700">++)
<br/>    {
<br/>        if(</span><span style="color: #0000BB">i </span><span style="color: #007700">== </span><span style="color: #0000BB">0</span><span style="color: #007700">)
<br/>        {
<br/>            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Iteration [%i]"</span><span style="color: #007700">, </span><span style="color: #0000BB">i</span><span style="color: #007700">);</span><span style="color: #FF8000">//Result 0
<br/>            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"DynamicBizs[i][ID]: [%i]"</span><span style="color: #007700">, </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">]);</span><span style="color: #FF8000">// Result 1
<br/>            </span><span style="color: #0000BB">LastID </span><span style="color: #007700">= </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">];
<br/>            continue;
<br/>        }
<br/>        if(</span><span style="color: #0000BB">LastID </span><span style="color: #007700">== </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">]-</span><span style="color: #0000BB">1 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">] == </span><span style="color: #0000BB">LastID </span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">)
<br/>        {
<br/>            </span><span style="color: #0000BB">LastID </span><span style="color: #007700">= </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">];
<br/>            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Iteration [%i]"</span><span style="color: #007700">, </span><span style="color: #0000BB">i</span><span style="color: #007700">);</span><span style="color: #FF8000">//Result 0
<br/>            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"DynamicBizs[i][ID]: [%i]"</span><span style="color: #007700">, </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">]);</span><span style="color: #FF8000">// Result 1
<br/>            </span><span style="color: #007700">continue;
<br/>        }
<br/>        if(</span><span style="color: #0000BB">LastID </span><span style="color: #007700">== </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">]-</span><span style="color: #0000BB">2</span><span style="color: #007700">)
<br/>        {
<br/>            </span><span style="color: #0000BB">Result </span><span style="color: #007700">= </span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>            break;
<br/>        }
<br/>    }
<br/>    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"GetFreeBizID Result: %i"</span><span style="color: #007700">, </span><span style="color: #0000BB">Result</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">Result</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>]]></description>
			<content:encoded><![CDATA[This function is to get the Free Biz ID in my Database... (well actually it doesnt read the database)<br />
Ex: I have BIZ ids 1,2,3,5: Output: Biz ID 4 is free.<br />
This is what the loop looks like and I am just wondering if there's a smarter way to do this, it works right now though.<br />
<br />
But I don't think it'll work if I change it in realtime, as the Array's ID's will change if I add ID 4 in, and delete ID 2, my result may not output 2.... <br />
<div style="margin:20px; margin-top:5px">
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
<span style="color: #0000BB">GetFreeBizID</span><span style="color: #007700">()
<br/>{
<br/>    new </span><span style="color: #0000BB">Result</span><span style="color: #007700">, </span><span style="color: #0000BB">LastID</span><span style="color: #007700">;
<br/>    for(new </span><span style="color: #0000BB">i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">MAX_BIZS</span><span style="color: #007700">; </span><span style="color: #0000BB">i</span><span style="color: #007700">++)
<br/>    {
<br/>        if(</span><span style="color: #0000BB">i </span><span style="color: #007700">== </span><span style="color: #0000BB">0</span><span style="color: #007700">)
<br/>        {
<br/>            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Iteration [%i]"</span><span style="color: #007700">, </span><span style="color: #0000BB">i</span><span style="color: #007700">);</span><span style="color: #FF8000">//Result 0
<br/>            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"DynamicBizs[i][ID]: [%i]"</span><span style="color: #007700">, </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">]);</span><span style="color: #FF8000">// Result 1
<br/>            </span><span style="color: #0000BB">LastID </span><span style="color: #007700">= </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">];
<br/>            continue;
<br/>        }
<br/>        if(</span><span style="color: #0000BB">LastID </span><span style="color: #007700">== </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">]-</span><span style="color: #0000BB">1 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">] == </span><span style="color: #0000BB">LastID </span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">)
<br/>        {
<br/>            </span><span style="color: #0000BB">LastID </span><span style="color: #007700">= </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">];
<br/>            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Iteration [%i]"</span><span style="color: #007700">, </span><span style="color: #0000BB">i</span><span style="color: #007700">);</span><span style="color: #FF8000">//Result 0
<br/>            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"DynamicBizs[i][ID]: [%i]"</span><span style="color: #007700">, </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">]);</span><span style="color: #FF8000">// Result 1
<br/>            </span><span style="color: #007700">continue;
<br/>        }
<br/>        if(</span><span style="color: #0000BB">LastID </span><span style="color: #007700">== </span><span style="color: #0000BB">DynamicBizs</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">]-</span><span style="color: #0000BB">2</span><span style="color: #007700">)
<br/>        {
<br/>            </span><span style="color: #0000BB">Result </span><span style="color: #007700">= </span><span style="color: #0000BB">i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>            break;
<br/>        }
<br/>    }
<br/>    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"GetFreeBizID Result: %i"</span><span style="color: #007700">, </span><span style="color: #0000BB">Result</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">Result</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[CreateDynamic3DTextLabel not deleting after update.]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677285</link>
			<pubDate>Thu, 09 Jul 2020 00:24:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=255802">SkyFlare</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677285</guid>
			<description><![CDATA[Fixed, simply just an ID bug, I was adding 1 extra ID number on my Integer Value by accident, sorry for spam.]]></description>
			<content:encoded><![CDATA[Fixed, simply just an ID bug, I was adding 1 extra ID number on my Integer Value by accident, sorry for spam.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[How do i install YSI on my SAMP server?]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677202</link>
			<pubDate>Sat, 04 Jul 2020 07:44:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=351374">STORIEL000</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677202</guid>
			<description><![CDATA[I have all the folders and files, but how do i install them?]]></description>
			<content:encoded><![CDATA[I have all the folders and files, but how do i install them?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Kicking X because they didn't logon to the game.]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677198</link>
			<pubDate>Sat, 04 Jul 2020 02:55:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=263809">Pitstop</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677198</guid>
			<description><![CDATA[getting this line on server_logs<br />
server get freezed and no one can log in.<br />
<br />
no logs before that line.<br />
What the solution for it ?]]></description>
			<content:encoded><![CDATA[getting this line on server_logs<br />
server get freezed and no one can log in.<br />
<br />
no logs before that line.<br />
What the solution for it ?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[samp.ban and temporary banning]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677190</link>
			<pubDate>Fri, 03 Jul 2020 18:53:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=317673">GameOvr</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677190</guid>
			<description><![CDATA[Hello guys,<br />
<br />
When some one gets ban i transfer his ip range to <b>samp.ban</b> so he cant connect again with that range but <b>samp.ban </b>even doesnt even allow server to call OnPlayerConnect for the banned player when connecting... so the problem is if the ban is a temporary one, how can i unban him?<br />
<br />
What i did before is.. Instead of using <b>samp.ban</b> i used a seperate table for banned ranges in the database so when player connects I can check weather his ban is expired.. but still I wanna use this <b>samp.ban </b>as cheaters still can affect the server if i used that server side method.<br />
<br />
Is there any callback or smth which respond this connection?]]></description>
			<content:encoded><![CDATA[Hello guys,<br />
<br />
When some one gets ban i transfer his ip range to <b>samp.ban</b> so he cant connect again with that range but <b>samp.ban </b>even doesnt even allow server to call OnPlayerConnect for the banned player when connecting... so the problem is if the ban is a temporary one, how can i unban him?<br />
<br />
What i did before is.. Instead of using <b>samp.ban</b> i used a seperate table for banned ranges in the database so when player connects I can check weather his ban is expired.. but still I wanna use this <b>samp.ban </b>as cheaters still can affect the server if i used that server side method.<br />
<br />
Is there any callback or smth which respond this connection?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Question about YSI]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677180</link>
			<pubDate>Fri, 03 Jul 2020 15:09:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=313961">MarianImmortalGod</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677180</guid>
			<description><![CDATA[Hello.<br />
<br />
<br />
<br />
Who know's the YSI/y_va include know's about va_SendClientMessage.<br />
<br />
I just readed the impl.inc and in my head i saw something like is counting the characters then use the string +1.<br />
Is like you having 'hello' having 5 but the count will be 5+1 and then it stops, it is that true ?<br />
I want to use it to be easyer for me not to count every message that i create is verry hard to count a lot of messages.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">/**--------------------------------------------------------------------------**\
					==============================
					 y_va - Enhanced vararg code!
					==============================
Description:
	This library currently provides two functions - va_printf and va_format
	which perform printf and format using variable arguments passed to another
	function.
	
	This is bsed on the variable parameter passing method based on code by Zeex.
	See page 15 of the code optimisations topic.
Legal:
	Version: MPL 1.1
	
	The contents of this file are subject to the Mozilla Public License Version 
	1.1 (the "License"); you may not use this file except in compliance with 
	the License. You may obtain a copy of the License at 
	<a href="http://www.mozilla.org/MPL/
" target="_blank" rel="noopener" class="mycode_url">http://www.mozilla.org/MPL/
</a>	
	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.
	
	The Original Code is the YSI vararg include.
	
	The Initial Developer of the Original Code is Alex "******" Cole.
	Portions created by the Initial Developer are Copyright &copy; 2011
	the Initial Developer. All Rights Reserved.
	
	Contributors:
		ZeeX, koolk, JoeBullet/******63, g_aSlice/Slice
	
	Thanks:
		JoeBullet/******63 - Handy arbitrary ASM jump code using SCTRL.
		ZeeX - Very productive conversations.
		koolk - IsPlayerinAreaEx code.
		TheAlpha - Danish translation.
		breadfish - German translation.
		Fireburn - Dutch translation.
		yom - French translation.
		50p - Polish translation.
		Zamaroht - Spanish translation.
		Dracoblue, sintax, mabako, Xtreme, other coders - Producing other modes
			for me to strive to better.
		Pixels^ - Running XScripters where the idea was born.
		Matite - Pestering me to release it and using it.
	
	Very special thanks to:
		Thiadmer - PAWN, whose limits continue to amaze me!
		Kye/Kalcor - SA:MP.
		SA:MP Team past, present and future - SA:MP.
	
Version:
	1.0
Changelog:
	02/05/11:
		First version.
Functions:
	Public:
		-
	Core:
		-
	Stock:
		-
	Static:
		-
	Inline:
		-
	API:
		-
Callbacks:
	-
Definitions:
	-
Enums:
	-
Macros:
	-
Tags:
	-
Variables:
	Global:
		-
	Static:
		-
Commands:
	-
Compile options:
	-
Operators:
	-
\**--------------------------------------------------------------------------**/

static stock
	YSI_g_sHeap,
	YSI_g_sStack,
	YSI_g_sArgCount,
	YSI_g_sArgs[5];

stock va_printf(const fmat[], va_:STATIC_ARGS)
{
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit INC.alt      // 2 - n
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes - 4.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "printf"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         8 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        8 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat            // Get the final parameter.
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Call the function.
	#emit SYSREQ.C     printf
	#emit STOR.pri     YSI_g_sArgCount
	
	// Copy the data back.
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         8
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	#emit LOAD.pri     YSI_g_sArgCount
	#emit RETN
	
	// This new version of the code worked first time!  I'm very happy with that
	// result, but I also feel it was justified given how long I spent staring
	// at it!
	return 0;
}

stock va_CallRemoteFunction(const function[], const fmat[], va_:STATIC_ARGS)
{
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "format"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         12 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        12 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat
	#emit PUSH.S       function
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Call the function.
	#emit SYSREQ.C     CallRemoteFunction
	#emit STOR.pri     YSI_g_sArgCount
	
	// Copy the data back.
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         12
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	#emit LOAD.pri     YSI_g_sArgCount
	#emit RETN
	
	return 0;
}

stock va_CallLocalFunction(const function[], const fmat[], va_:STATIC_ARGS)
{
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "format"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         12 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        12 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat
	#emit PUSH.S       function
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Call the function.
	#emit SYSREQ.C     CallLocalFunction
	#emit STOR.pri     YSI_g_sArgCount
	
	// Copy the data back.
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         12
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	#emit LOAD.pri     YSI_g_sArgCount
	#emit RETN
	
	return 0;
}

stock va_SetTimerEx(const function[], interval, bool:repeating, const fmat[], va_:STATIC_ARGS)
{
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit DEC.alt      // 2 - n
	#emit DEC.alt
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes - 8.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "format"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         20 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        20 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat
	#emit PUSH.S       repeating
	#emit PUSH.S       interval
	#emit PUSH.S       function
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Call the function.
	#emit SYSREQ.C     SetTimerEx
	#emit STOR.pri     YSI_g_sArgCount
	
	// Copy the data back.
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         20
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	#emit LOAD.pri     YSI_g_sArgCount
	#emit RETN
	
	return 0;
}

stock va_format(out[], size, const fmat[], va_:STATIC_ARGS)
{
	//P:C(if (_:STATIC_ARGS &lt; 1) P:W("No static args found, please add a dummy local"););
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit DEC.alt      // 2 - n
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes - 4.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "format"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         16 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        16 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat
	#emit PUSH.S       size
	#emit PUSH.S       out
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Modify the heap to hold "locals".
	#emit HEAP         0
	#emit STOR.alt     YSI_g_sHeap
	#emit LCTRL        4
	#emit SCTRL        2
	
	// Call the function.
	#emit SYSREQ.C     format
	#emit STOR.pri     YSI_g_sArgCount
	
	// Copy the data back.
	#emit LOAD.pri     YSI_g_sHeap
	#emit SCTRL        2
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         16
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	#emit LOAD.pri     YSI_g_sArgCount
	#emit RETN
	
	return 0;
}

stock va_return(const fmat[], va_:STATIC_ARGS)
{
	static
		out[YSI_MAX_STRING * 8],
		size = sizeof (out);
	
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit DEC.alt      // 2 - n
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes - 4.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "format"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         16 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        16 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat
	#emit PUSH         size
	#emit PUSH.C       out
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Modify the heap to hold "locals".
	#emit HEAP         0
	#emit STOR.alt     YSI_g_sHeap
	#emit LCTRL        4
	#emit SCTRL        2
	
	// Call the function.
	#emit SYSREQ.C     format
	
	// Copy the data back.
	#emit LOAD.pri     YSI_g_sHeap
	#emit SCTRL        2
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         16
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	// Now do the real return.
	return out;
}

stock va_strlen(arg)
{
	// Get the length of the string at the given position on the previous
	// function's stack (convenience function).
	// Get the address of the previous function's stack.  First get the index of
	// the argument required.
	#emit LOAD.S.pri arg
	// Then convert that number to bytes from cells.
	#emit SMUL.C     4
	// Get the previous function's frame.  Stored in variable 0 (in the current
	// frame).  Parameters are FRM+n+12, locals are FRM-n, previous frame is
	// FRM+0, return address is FRM+4, parameter count is FRM+8.  We could add
	// checks that "arg * 4 &lt; *(*(FRM + 0) + 8)", for the previous frame parameter
	// count (in C pointer speak).
	#emit LOAD.S.alt 0
	// Add the frame pointer to the argument offset in bytes.
	#emit ADD
	// Add 12 to skip over the function header.
	#emit ADD.C      12
	// Load the address stored in the specified address.
	#emit LOAD.I
	// Push the address we just determined was the source.
	#emit PUSH.pri
	// Push the number of parameters passed (in bytes) to the function.
	#emit PUSH.C     4
	// Call the function.
	#emit SYSREQ.C   strlen
	// Restore the stack to its level before we called this native.
	#emit STACK      8
	#emit RETN
	// Never called.
	return 0;
}

stock va_getstring(dest[], arg, len = sizeof (dest))
{
	// Get the address of the previous function's stack.  First get the index of
	// the argument required.
	#emit LOAD.S.pri arg
	// Then convert that number to bytes from cells.
	#emit SMUL.C     4
	// Get the previous function's frame.  Stored in variable 0 (in the current
	// frame).  Parameters are FRM+n+12, locals are FRM-n, previous frame is
	// FRM+0, return address is FRM+4, parameter count is FRM+8.  We could add
	// checks that "arg * 4 &lt; *(*(FRM + 0) + 8)", for the previous frame parameter
	// count (in C pointer speak).
	#emit LOAD.S.alt 0
	// Add the frame pointer to the argument offset in bytes.
	#emit ADD
	// Add 12 to skip over the function header.
	#emit ADD.C      12
	// Load the address stored in the specified address.
	#emit LOAD.I
	// Push the length for "strcat".
	#emit PUSH.S     len
	// Push the address we just determined was the source.
	#emit PUSH.pri
	// Load the address of the destination.
	#emit LOAD.S.alt dest
	// Blank the first cell so "strcat" behaves like "strcpy".
	#emit CONST.pri  0
	// Store the loaded number 0 to the loaded address.
	#emit STOR.I
	// Push the loaded address.
	#emit PUSH.alt
	// Push the number of parameters passed (in bytes) to the function.
	#emit PUSH.C     12
	// Call the function.
	#emit SYSREQ.C   strcat
	// Restore the stack to its level before we called this native.
	#emit STACK      16
}

stock PlayerText:va_CreatePlayerTextDraw(playerid, Float:x, Float:y, fmat[], va_args&lt;&gt;)
{
	return CreatePlayerTextDraw(playerid, x, y, va_return(fmat, va_start&lt;4&gt;));
}

stock Text:va_TextDrawCreate(Float:x, Float:y, fmat[], va_args&lt;&gt;)
{
	return TextDrawCreate(x, y, va_return(fmat, va_start&lt;3&gt;));
}

stock va_SendClientMessage(playerid, colour, const fmat[], va_args&lt;&gt;)
{
	return SendClientMessage(playerid, colour, va_return(fmat, va_start&lt;3&gt;));
}

stock va_SendClientMessageToAll(colour, const fmat[], va_args&lt;&gt;)
{
	return SendClientMessageToAll(colour, va_return(fmat, va_start&lt;2&gt;));
}

stock va_SendPlayerMessageToPlayer(playerid, senderid, const fmat[], va_args&lt;&gt;)
{
	return SendPlayerMessageToPlayer(playerid, senderid, va_return(fmat, va_start&lt;3&gt;));
}

stock va_SendPlayerMessageToAll(senderid, const fmat[], va_args&lt;&gt;)
{
	return SendPlayerMessageToAll(senderid, va_return(fmat, va_start&lt;2&gt;));
}

stock va_GameTextForPlayer(playerid, const fmat[], time, style, va_args&lt;&gt;)
{
	return GameTextForPlayer(playerid, va_return(fmat, va_start&lt;4&gt;), time, style);
}

stock va_GameTextForAll(const fmat[], time, style, va_args&lt;&gt;)
{
	return GameTextForAll(va_return(fmat, va_start&lt;3&gt;), time, style);
}

stock va_print(const fmat[], va_args&lt;&gt;)
{
	return print(va_return(fmat, va_start&lt;1&gt;));
}

stock va_fprintf(File:fhnd, const fmat[], va_args&lt;&gt;)
{
	return fwrite(fhnd, va_return(fmat, va_start&lt;2&gt;));
}</pre>
</div>]]></description>
			<content:encoded><![CDATA[Hello.<br />
<br />
<br />
<br />
Who know's the YSI/y_va include know's about va_SendClientMessage.<br />
<br />
I just readed the impl.inc and in my head i saw something like is counting the characters then use the string +1.<br />
Is like you having 'hello' having 5 but the count will be 5+1 and then it stops, it is that true ?<br />
I want to use it to be easyer for me not to count every message that i create is verry hard to count a lot of messages.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">/**--------------------------------------------------------------------------**\
					==============================
					 y_va - Enhanced vararg code!
					==============================
Description:
	This library currently provides two functions - va_printf and va_format
	which perform printf and format using variable arguments passed to another
	function.
	
	This is bsed on the variable parameter passing method based on code by Zeex.
	See page 15 of the code optimisations topic.
Legal:
	Version: MPL 1.1
	
	The contents of this file are subject to the Mozilla Public License Version 
	1.1 (the "License"); you may not use this file except in compliance with 
	the License. You may obtain a copy of the License at 
	<a href="http://www.mozilla.org/MPL/
" target="_blank" rel="noopener" class="mycode_url">http://www.mozilla.org/MPL/
</a>	
	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.
	
	The Original Code is the YSI vararg include.
	
	The Initial Developer of the Original Code is Alex "******" Cole.
	Portions created by the Initial Developer are Copyright &copy; 2011
	the Initial Developer. All Rights Reserved.
	
	Contributors:
		ZeeX, koolk, JoeBullet/******63, g_aSlice/Slice
	
	Thanks:
		JoeBullet/******63 - Handy arbitrary ASM jump code using SCTRL.
		ZeeX - Very productive conversations.
		koolk - IsPlayerinAreaEx code.
		TheAlpha - Danish translation.
		breadfish - German translation.
		Fireburn - Dutch translation.
		yom - French translation.
		50p - Polish translation.
		Zamaroht - Spanish translation.
		Dracoblue, sintax, mabako, Xtreme, other coders - Producing other modes
			for me to strive to better.
		Pixels^ - Running XScripters where the idea was born.
		Matite - Pestering me to release it and using it.
	
	Very special thanks to:
		Thiadmer - PAWN, whose limits continue to amaze me!
		Kye/Kalcor - SA:MP.
		SA:MP Team past, present and future - SA:MP.
	
Version:
	1.0
Changelog:
	02/05/11:
		First version.
Functions:
	Public:
		-
	Core:
		-
	Stock:
		-
	Static:
		-
	Inline:
		-
	API:
		-
Callbacks:
	-
Definitions:
	-
Enums:
	-
Macros:
	-
Tags:
	-
Variables:
	Global:
		-
	Static:
		-
Commands:
	-
Compile options:
	-
Operators:
	-
\**--------------------------------------------------------------------------**/

static stock
	YSI_g_sHeap,
	YSI_g_sStack,
	YSI_g_sArgCount,
	YSI_g_sArgs[5];

stock va_printf(const fmat[], va_:STATIC_ARGS)
{
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit INC.alt      // 2 - n
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes - 4.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "printf"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         8 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        8 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat            // Get the final parameter.
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Call the function.
	#emit SYSREQ.C     printf
	#emit STOR.pri     YSI_g_sArgCount
	
	// Copy the data back.
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         8
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	#emit LOAD.pri     YSI_g_sArgCount
	#emit RETN
	
	// This new version of the code worked first time!  I'm very happy with that
	// result, but I also feel it was justified given how long I spent staring
	// at it!
	return 0;
}

stock va_CallRemoteFunction(const function[], const fmat[], va_:STATIC_ARGS)
{
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "format"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         12 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        12 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat
	#emit PUSH.S       function
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Call the function.
	#emit SYSREQ.C     CallRemoteFunction
	#emit STOR.pri     YSI_g_sArgCount
	
	// Copy the data back.
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         12
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	#emit LOAD.pri     YSI_g_sArgCount
	#emit RETN
	
	return 0;
}

stock va_CallLocalFunction(const function[], const fmat[], va_:STATIC_ARGS)
{
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "format"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         12 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        12 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat
	#emit PUSH.S       function
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Call the function.
	#emit SYSREQ.C     CallLocalFunction
	#emit STOR.pri     YSI_g_sArgCount
	
	// Copy the data back.
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         12
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	#emit LOAD.pri     YSI_g_sArgCount
	#emit RETN
	
	return 0;
}

stock va_SetTimerEx(const function[], interval, bool:repeating, const fmat[], va_:STATIC_ARGS)
{
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit DEC.alt      // 2 - n
	#emit DEC.alt
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes - 8.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "format"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         20 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        20 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat
	#emit PUSH.S       repeating
	#emit PUSH.S       interval
	#emit PUSH.S       function
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Call the function.
	#emit SYSREQ.C     SetTimerEx
	#emit STOR.pri     YSI_g_sArgCount
	
	// Copy the data back.
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         20
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	#emit LOAD.pri     YSI_g_sArgCount
	#emit RETN
	
	return 0;
}

stock va_format(out[], size, const fmat[], va_:STATIC_ARGS)
{
	//P:C(if (_:STATIC_ARGS &lt; 1) P:W("No static args found, please add a dummy local"););
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit DEC.alt      // 2 - n
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes - 4.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "format"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         16 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        16 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat
	#emit PUSH.S       size
	#emit PUSH.S       out
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Modify the heap to hold "locals".
	#emit HEAP         0
	#emit STOR.alt     YSI_g_sHeap
	#emit LCTRL        4
	#emit SCTRL        2
	
	// Call the function.
	#emit SYSREQ.C     format
	#emit STOR.pri     YSI_g_sArgCount
	
	// Copy the data back.
	#emit LOAD.pri     YSI_g_sHeap
	#emit SCTRL        2
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         16
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	#emit LOAD.pri     YSI_g_sArgCount
	#emit RETN
	
	return 0;
}

stock va_return(const fmat[], va_:STATIC_ARGS)
{
	static
		out[YSI_MAX_STRING * 8],
		size = sizeof (out);
	
	// Get the number of parameters.
	#emit LOAD.S.alt   STATIC_ARGS
	#emit DEC.alt      // 2 - n
	#emit SHL.C.alt    2
	// "alt" now contains the number of static arguments in bytes - 4.
	
	// Get the previous parameter count.
	#emit LOAD.S.pri   0
	#emit ADD.C        8
	#emit LOAD.I
	#emit SUB
	#emit ADD.C        8
	#emit STOR.pri     YSI_g_sArgCount // "format"s parameter count.
	
	// Get the address of the arguments we are replacing.
	#emit LOAD.S.pri   0
	#emit ADD
	
	// Copy them to our temporary buffer.
	#emit CONST.alt    YSI_g_sArgs
	#emit MOVS         16 // (n + 1) * 4
	
	// Go to the new "top" of the stack.
	#emit STACK        0
	#emit STOR.alt     YSI_g_sStack    // Store it.
	#emit ADD.C        16 // (n + 1) * 4
	#emit SCTRL        4
	
	// "frm" is still valid.
	#emit PUSH.S       fmat
	#emit PUSH         size
	#emit PUSH.C       out
	#emit PUSH         YSI_g_sArgCount // Push the parameter count.
	
	// Modify the heap to hold "locals".
	#emit HEAP         0
	#emit STOR.alt     YSI_g_sHeap
	#emit LCTRL        4
	#emit SCTRL        2
	
	// Call the function.
	#emit SYSREQ.C     format
	
	// Copy the data back.
	#emit LOAD.pri     YSI_g_sHeap
	#emit SCTRL        2
	#emit STACK        0
	#emit CONST.pri    YSI_g_sArgs
	#emit MOVS         16
	#emit LOAD.pri     YSI_g_sStack
	#emit SCTRL        4
	
	// Now do the real return.
	return out;
}

stock va_strlen(arg)
{
	// Get the length of the string at the given position on the previous
	// function's stack (convenience function).
	// Get the address of the previous function's stack.  First get the index of
	// the argument required.
	#emit LOAD.S.pri arg
	// Then convert that number to bytes from cells.
	#emit SMUL.C     4
	// Get the previous function's frame.  Stored in variable 0 (in the current
	// frame).  Parameters are FRM+n+12, locals are FRM-n, previous frame is
	// FRM+0, return address is FRM+4, parameter count is FRM+8.  We could add
	// checks that "arg * 4 &lt; *(*(FRM + 0) + 8)", for the previous frame parameter
	// count (in C pointer speak).
	#emit LOAD.S.alt 0
	// Add the frame pointer to the argument offset in bytes.
	#emit ADD
	// Add 12 to skip over the function header.
	#emit ADD.C      12
	// Load the address stored in the specified address.
	#emit LOAD.I
	// Push the address we just determined was the source.
	#emit PUSH.pri
	// Push the number of parameters passed (in bytes) to the function.
	#emit PUSH.C     4
	// Call the function.
	#emit SYSREQ.C   strlen
	// Restore the stack to its level before we called this native.
	#emit STACK      8
	#emit RETN
	// Never called.
	return 0;
}

stock va_getstring(dest[], arg, len = sizeof (dest))
{
	// Get the address of the previous function's stack.  First get the index of
	// the argument required.
	#emit LOAD.S.pri arg
	// Then convert that number to bytes from cells.
	#emit SMUL.C     4
	// Get the previous function's frame.  Stored in variable 0 (in the current
	// frame).  Parameters are FRM+n+12, locals are FRM-n, previous frame is
	// FRM+0, return address is FRM+4, parameter count is FRM+8.  We could add
	// checks that "arg * 4 &lt; *(*(FRM + 0) + 8)", for the previous frame parameter
	// count (in C pointer speak).
	#emit LOAD.S.alt 0
	// Add the frame pointer to the argument offset in bytes.
	#emit ADD
	// Add 12 to skip over the function header.
	#emit ADD.C      12
	// Load the address stored in the specified address.
	#emit LOAD.I
	// Push the length for "strcat".
	#emit PUSH.S     len
	// Push the address we just determined was the source.
	#emit PUSH.pri
	// Load the address of the destination.
	#emit LOAD.S.alt dest
	// Blank the first cell so "strcat" behaves like "strcpy".
	#emit CONST.pri  0
	// Store the loaded number 0 to the loaded address.
	#emit STOR.I
	// Push the loaded address.
	#emit PUSH.alt
	// Push the number of parameters passed (in bytes) to the function.
	#emit PUSH.C     12
	// Call the function.
	#emit SYSREQ.C   strcat
	// Restore the stack to its level before we called this native.
	#emit STACK      16
}

stock PlayerText:va_CreatePlayerTextDraw(playerid, Float:x, Float:y, fmat[], va_args&lt;&gt;)
{
	return CreatePlayerTextDraw(playerid, x, y, va_return(fmat, va_start&lt;4&gt;));
}

stock Text:va_TextDrawCreate(Float:x, Float:y, fmat[], va_args&lt;&gt;)
{
	return TextDrawCreate(x, y, va_return(fmat, va_start&lt;3&gt;));
}

stock va_SendClientMessage(playerid, colour, const fmat[], va_args&lt;&gt;)
{
	return SendClientMessage(playerid, colour, va_return(fmat, va_start&lt;3&gt;));
}

stock va_SendClientMessageToAll(colour, const fmat[], va_args&lt;&gt;)
{
	return SendClientMessageToAll(colour, va_return(fmat, va_start&lt;2&gt;));
}

stock va_SendPlayerMessageToPlayer(playerid, senderid, const fmat[], va_args&lt;&gt;)
{
	return SendPlayerMessageToPlayer(playerid, senderid, va_return(fmat, va_start&lt;3&gt;));
}

stock va_SendPlayerMessageToAll(senderid, const fmat[], va_args&lt;&gt;)
{
	return SendPlayerMessageToAll(senderid, va_return(fmat, va_start&lt;2&gt;));
}

stock va_GameTextForPlayer(playerid, const fmat[], time, style, va_args&lt;&gt;)
{
	return GameTextForPlayer(playerid, va_return(fmat, va_start&lt;4&gt;), time, style);
}

stock va_GameTextForAll(const fmat[], time, style, va_args&lt;&gt;)
{
	return GameTextForAll(va_return(fmat, va_start&lt;3&gt;), time, style);
}

stock va_print(const fmat[], va_args&lt;&gt;)
{
	return print(va_return(fmat, va_start&lt;1&gt;));
}

stock va_fprintf(File:fhnd, const fmat[], va_args&lt;&gt;)
{
	return fwrite(fhnd, va_return(fmat, va_start&lt;2&gt;));
}</pre>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Run time error 4]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677158</link>
			<pubDate>Thu, 02 Jul 2020 14:37:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=288306">Yukie</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677158</guid>
			<description><![CDATA[I always got this error in my server console<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 226px;
		text-align: left;
		overflow: auto">[22:05:28] [debug] Parameter count corrections:
[22:05:28] [debug]
[22:05:28] [debug] The 1st mangled argments (e.g. `&lt;1073741823 arguments&gt;`) below should read `&lt;1 arguments&gt;`
[22:05:28] [debug]
[22:05:28] [debug] Run time error 4: "Array index out of bounds"
[22:05:28] [debug]  Attempted to read/write array element at index 60 in array of size 50
[22:05:28] [debug] AMX backtrace:
[22:05:28] [debug] #0 003dd368 in public _y_utils_OnPlayerConnect (60) in roleplay.amx
[22:05:28] [debug] #1 00016738 in public SSCANF_OnPlayerConnect (60) in roleplay.amx
[22:05:28] [debug] #2 00008a64 in public MP_OPC (60) in roleplay.amx
[22:05:28] [debug] #3 native CallLocalFunction () in samp03svr
[22:05:28] [debug] #4 00006650 in ?? (60) in roleplay.amx
[22:05:28] [debug] #5 00025cc4 in public OnPlayerConnect (60) in roleplay.amx</pre>
</div>I dont know how to fix it<br />
<br />
here's my onplayerconnect codes<br />
its quite long thats why I put in pastebin<br />
<a href="https://pastebin.com/FaxLDbUz" target="_blank">https://pastebin.com/FaxLDbUz</a><br />
<br />
Thanks in advance]]></description>
			<content:encoded><![CDATA[I always got this error in my server console<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 226px;
		text-align: left;
		overflow: auto">[22:05:28] [debug] Parameter count corrections:
[22:05:28] [debug]
[22:05:28] [debug] The 1st mangled argments (e.g. `&lt;1073741823 arguments&gt;`) below should read `&lt;1 arguments&gt;`
[22:05:28] [debug]
[22:05:28] [debug] Run time error 4: "Array index out of bounds"
[22:05:28] [debug]  Attempted to read/write array element at index 60 in array of size 50
[22:05:28] [debug] AMX backtrace:
[22:05:28] [debug] #0 003dd368 in public _y_utils_OnPlayerConnect (60) in roleplay.amx
[22:05:28] [debug] #1 00016738 in public SSCANF_OnPlayerConnect (60) in roleplay.amx
[22:05:28] [debug] #2 00008a64 in public MP_OPC (60) in roleplay.amx
[22:05:28] [debug] #3 native CallLocalFunction () in samp03svr
[22:05:28] [debug] #4 00006650 in ?? (60) in roleplay.amx
[22:05:28] [debug] #5 00025cc4 in public OnPlayerConnect (60) in roleplay.amx</pre>
</div>I dont know how to fix it<br />
<br />
here's my onplayerconnect codes<br />
its quite long thats why I put in pastebin<br />
<a href="https://pastebin.com/FaxLDbUz" target="_blank">https://pastebin.com/FaxLDbUz</a><br />
<br />
Thanks in advance]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Server Sided Health/Armour Functions.]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677133</link>
			<pubDate>Wed, 01 Jul 2020 09:57:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=255802">SkyFlare</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677133</guid>
			<description><![CDATA[So I am making my own Server Sided Health / Armour in Textdraws, which is complete.<br />
<br />
Just looking to upgrade my script a little bit.<br />
<br />
in a bonestock standard Script, using GetPlayerHealth(playerid, Player[playerid][Health]);<br />
would get the players Health, and in return save the value into the float specified.<br />
how can I create a function myself like this.. here's what I am doing so far.<br />
<br />
<br />
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
<span style="color: #0000BB">GetPlayerHealthEx</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">HpAmount</span><span style="color: #007700">) </span><span style="color: #0000BB">HpAmount </span><span style="color: #007700">= </span><span style="color: #0000BB">Player</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Health</span><span style="color: #007700">];
<br/></span><span style="color: #0000BB">GetPlayerArmorEx</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">ArmorAmount</span><span style="color: #007700">) </span><span style="color: #0000BB">ArmorAmount </span><span style="color: #007700">= </span><span style="color: #0000BB">Player</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Armor</span><span style="color: #007700">];
<br/></span><span style="color: #0000BB">SetPlayerHealthEx</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">HpAmount</span><span style="color: #007700">) </span><span style="color: #0000BB">Player</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Health</span><span style="color: #007700">] = </span><span style="color: #0000BB">HpAmount</span><span style="color: #007700">;
<br/></span><span style="color: #0000BB">SetPlayerArmorEx</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">ArmorAmount</span><span style="color: #007700">) </span><span style="color: #0000BB">Player</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Armor</span><span style="color: #007700">] = </span><span style="color: #0000BB">ArmorAmount</span><span style="color: #007700">; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Note I am moving right away from the whole standard Get/Set PlayerHealth standard CMDS as they are now useless, because every players HP will be infinite in that value.]]></description>
			<content:encoded><![CDATA[So I am making my own Server Sided Health / Armour in Textdraws, which is complete.<br />
<br />
Just looking to upgrade my script a little bit.<br />
<br />
in a bonestock standard Script, using GetPlayerHealth(playerid, Player[playerid][Health]);<br />
would get the players Health, and in return save the value into the float specified.<br />
how can I create a function myself like this.. here's what I am doing so far.<br />
<br />
<br />
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
<span style="color: #0000BB">GetPlayerHealthEx</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">HpAmount</span><span style="color: #007700">) </span><span style="color: #0000BB">HpAmount </span><span style="color: #007700">= </span><span style="color: #0000BB">Player</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Health</span><span style="color: #007700">];
<br/></span><span style="color: #0000BB">GetPlayerArmorEx</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">ArmorAmount</span><span style="color: #007700">) </span><span style="color: #0000BB">ArmorAmount </span><span style="color: #007700">= </span><span style="color: #0000BB">Player</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Armor</span><span style="color: #007700">];
<br/></span><span style="color: #0000BB">SetPlayerHealthEx</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">HpAmount</span><span style="color: #007700">) </span><span style="color: #0000BB">Player</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Health</span><span style="color: #007700">] = </span><span style="color: #0000BB">HpAmount</span><span style="color: #007700">;
<br/></span><span style="color: #0000BB">SetPlayerArmorEx</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">ArmorAmount</span><span style="color: #007700">) </span><span style="color: #0000BB">Player</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">Armor</span><span style="color: #007700">] = </span><span style="color: #0000BB">ArmorAmount</span><span style="color: #007700">; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Note I am moving right away from the whole standard Get/Set PlayerHealth standard CMDS as they are now useless, because every players HP will be infinite in that value.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[RegEx plugin does not load]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677124</link>
			<pubDate>Tue, 30 Jun 2020 23:04:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=298276">xRadical3</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677124</guid>
			<description><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 114px;
		text-align: left;
		overflow: auto">Loading plugin: libRegEx
  Failed.

[DEBUG] regex_exmatch
[DEBUG] regex_exsearch
[DEBUG] regex_exreplace</pre>
</div>what's the solution? <br />
All other plugins load well and have no problems.<br />
I have onig.dll in the root folder.<br />
<a href="https://sampforum.blast.hk/showthread.php?tid=526725" target="_blank">Regular Expressions Plugin v0.2 (RegEx)</a><br />
<br />
I just wanted regex for a anti adv system.]]></description>
			<content:encoded><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 114px;
		text-align: left;
		overflow: auto">Loading plugin: libRegEx
  Failed.

[DEBUG] regex_exmatch
[DEBUG] regex_exsearch
[DEBUG] regex_exreplace</pre>
</div>what's the solution? <br />
All other plugins load well and have no problems.<br />
I have onig.dll in the root folder.<br />
<a href="https://sampforum.blast.hk/showthread.php?tid=526725" target="_blank">Regular Expressions Plugin v0.2 (RegEx)</a><br />
<br />
I just wanted regex for a anti adv system.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Timer error]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677088</link>
			<pubDate>Mon, 29 Jun 2020 16:46:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=108281">_GHT_MarK445</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677088</guid>
			<description><![CDATA[Hi guys, this is info, that I see in my server_log:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">[18:46:08] [debug] Run time error 4: "Array index out of bounds"
[18:46:08] [debug]  Attempted to read/write array element at index 65535 in array of size 100
[18:46:08] [debug] AMX backtrace:
[18:46:08] [debug] #0 0004e060 in public miniguntimer () in jb.amx</pre>
</div>And this is the code:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 258px;
		text-align: left;
		overflow: auto">forward miniguntimer();
public miniguntimer()
{
	new string[128], mostkills = INVALID_PLAYER_ID;
	for(new i = 0; i &lt; MAX_PLAYERS; i++)
	{
	    if(IsPlayerConnected(i) &amp;&amp; InEvent[i] == true)
	    {
			if(MgKills[i] &gt; MgKills[mostkills]) mostkills = i;
		}
	}
	format(string, sizeof(string), "The player with Most Kills is %s with %d kills.", GetName(mostkills), MgKills[mostkills]);
	SendClientMessageToAll(MGDM, string);
	return 1;
}</pre>
</div>Do you guys have any idea, what could be the problem?]]></description>
			<content:encoded><![CDATA[Hi guys, this is info, that I see in my server_log:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">[18:46:08] [debug] Run time error 4: "Array index out of bounds"
[18:46:08] [debug]  Attempted to read/write array element at index 65535 in array of size 100
[18:46:08] [debug] AMX backtrace:
[18:46:08] [debug] #0 0004e060 in public miniguntimer () in jb.amx</pre>
</div>And this is the code:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 258px;
		text-align: left;
		overflow: auto">forward miniguntimer();
public miniguntimer()
{
	new string[128], mostkills = INVALID_PLAYER_ID;
	for(new i = 0; i &lt; MAX_PLAYERS; i++)
	{
	    if(IsPlayerConnected(i) &amp;&amp; InEvent[i] == true)
	    {
			if(MgKills[i] &gt; MgKills[mostkills]) mostkills = i;
		}
	}
	format(string, sizeof(string), "The player with Most Kills is %s with %d kills.", GetName(mostkills), MgKills[mostkills]);
	SendClientMessageToAll(MGDM, string);
	return 1;
}</pre>
</div>Do you guys have any idea, what could be the problem?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[How to text to all Leader]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677079</link>
			<pubDate>Mon, 29 Jun 2020 10:06:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=164432">supermember</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677079</guid>
			<description><![CDATA[I am Admin, If i want to send my message to Leader all faction. How to make it ?<br />
<br />
If I type /msgtoleader &lt;text&gt;<br />
and I want send to... all Leader who's online!<br />
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
		overflow: auto">PlayerInfo[i][pLeader]</pre>
</div>How to make it ?<br />
<br />
Thank you!!]]></description>
			<content:encoded><![CDATA[I am Admin, If i want to send my message to Leader all faction. How to make it ?<br />
<br />
If I type /msgtoleader &lt;text&gt;<br />
and I want send to... all Leader who's online!<br />
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
		overflow: auto">PlayerInfo[i][pLeader]</pre>
</div>How to make it ?<br />
<br />
Thank you!!]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[curso/pawn]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677075</link>
			<pubDate>Mon, 29 Jun 2020 02:21:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=351504">Micaell</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677075</guid>
			<description><![CDATA[alguem me indica um curso bom para eu pelo menos aprender o bбsico]]></description>
			<content:encoded><![CDATA[alguem me indica um curso bom para eu pelo menos aprender o bбsico]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[what is wrong with create faction command]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677058</link>
			<pubDate>Sun, 28 Jun 2020 17:02:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=212344">xAlecsu</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677058</guid>
			<description><![CDATA[Hello ,i create this command :<br />
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
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">fcreate</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    new </span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">], </span><span style="color: #0000BB">query</span><span style="color: #007700">[</span><span style="color: #0000BB">400</span><span style="color: #007700">], </span><span style="color: #0000BB">fname</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">];
<br/>    if(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">, </span><span style="color: #DD0000">"s[32]"</span><span style="color: #007700">, </span><span style="color: #0000BB">fname</span><span style="color: #007700">)) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"USAGE: /fcreate factionname"</span><span style="color: #007700">);
<br/>    </span><span style="color: #FF8000">// GETTING ALL THE FACTIONS CREATED, THEN ADDING 1 TO MAKE THE NEW ONE
<br/>    </span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">++;
<br/>    </span><span style="color: #FF8000">//=====================================================================
<br/>    
<br/>    // THIS SETS THE FACTIONS NAME TO WHATEVER YOU JUST NAMED IT, PLUS SETS THE ID FOR THE FACTION
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">FactionName</span><span style="color: #007700">], </span><span style="color: #0000BB">64</span><span style="color: #007700">, </span><span style="color: #DD0000">"%s"</span><span style="color: #007700">, </span><span style="color: #0000BB">fname</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">] = </span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">;
<br/>    </span><span style="color: #FF8000">//==============================================================================================
<br/>    
<br/>    // THIS IS JUST TELLING YOU CREATED A FACTION, WITH THE NAME
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string), </span><span style="color: #DD0000">"You have created a faction named: %s(ID:%d)."</span><span style="color: #007700">,</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">FactionName</span><span style="color: #007700">], </span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">]);
<br/>    </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">string</span><span style="color: #007700">);
<br/>    </span><span style="color: #FF8000">//================================================================================================
<br/>    
<br/>    // THIS IS SETTING ALL THE FACTION NAMES, WILL BE USED LATER FOR EDITTING AROUND
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank1</span><span style="color: #007700">], </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #DD0000">"Rank 1 - Lowest"</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank2</span><span style="color: #007700">], </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #DD0000">"Rank 2"</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank3</span><span style="color: #007700">], </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #DD0000">"Rank 3"</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank4</span><span style="color: #007700">], </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #DD0000">"Rank 4"</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank5</span><span style="color: #007700">], </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #DD0000">"Rank 5"</span><span style="color: #007700">);
<br/>    </span><span style="color: #FF8000">//================================================================================
<br/>    
<br/>    // THIS IS FOR SAVING ALL THE DATA INTO THE MYSQL DATABASE
<br/>    </span><span style="color: #0000BB">mysql_format</span><span style="color: #007700">(</span><span style="color: #0000BB">MySQL</span><span style="color: #007700">:</span><span style="color: #0000BB">Database</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">), </span><span style="color: #DD0000">"INSERT INTO 'factions' ('ID', 'FactionName', 'FactionLeader', 'Rank1name', 'Rank2name', 'Rank3name', 'Rank4name', 'Rank5name'"</span><span style="color: #007700">, 
<br/>        </span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">FactionName</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">FactionLeader</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank1</span><span style="color: #007700">],
<br/>        </span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank2</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank3</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank4</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank5</span><span style="color: #007700">]);
<br/>    </span><span style="color: #0000BB">mysql_query</span><span style="color: #007700">(</span><span style="color: #0000BB">MySQL</span><span style="color: #007700">:</span><span style="color: #0000BB">Database</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">);
<br/>    </span><span style="color: #FF8000">//=================================================================================
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>But when i create a faction , my database is still blank...<br />
Mysql: <a href="https://imgur.com/LFB0zJC.png" target="_blank">https://imgur.com/LFB0zJC.png</a>]]></description>
			<content:encoded><![CDATA[Hello ,i create this command :<br />
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
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">fcreate</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    new </span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">], </span><span style="color: #0000BB">query</span><span style="color: #007700">[</span><span style="color: #0000BB">400</span><span style="color: #007700">], </span><span style="color: #0000BB">fname</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">];
<br/>    if(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">, </span><span style="color: #DD0000">"s[32]"</span><span style="color: #007700">, </span><span style="color: #0000BB">fname</span><span style="color: #007700">)) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"USAGE: /fcreate factionname"</span><span style="color: #007700">);
<br/>    </span><span style="color: #FF8000">// GETTING ALL THE FACTIONS CREATED, THEN ADDING 1 TO MAKE THE NEW ONE
<br/>    </span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">++;
<br/>    </span><span style="color: #FF8000">//=====================================================================
<br/>    
<br/>    // THIS SETS THE FACTIONS NAME TO WHATEVER YOU JUST NAMED IT, PLUS SETS THE ID FOR THE FACTION
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">FactionName</span><span style="color: #007700">], </span><span style="color: #0000BB">64</span><span style="color: #007700">, </span><span style="color: #DD0000">"%s"</span><span style="color: #007700">, </span><span style="color: #0000BB">fname</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">] = </span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">;
<br/>    </span><span style="color: #FF8000">//==============================================================================================
<br/>    
<br/>    // THIS IS JUST TELLING YOU CREATED A FACTION, WITH THE NAME
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string), </span><span style="color: #DD0000">"You have created a faction named: %s(ID:%d)."</span><span style="color: #007700">,</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">FactionName</span><span style="color: #007700">], </span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">]);
<br/>    </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">string</span><span style="color: #007700">);
<br/>    </span><span style="color: #FF8000">//================================================================================================
<br/>    
<br/>    // THIS IS SETTING ALL THE FACTION NAMES, WILL BE USED LATER FOR EDITTING AROUND
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank1</span><span style="color: #007700">], </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #DD0000">"Rank 1 - Lowest"</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank2</span><span style="color: #007700">], </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #DD0000">"Rank 2"</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank3</span><span style="color: #007700">], </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #DD0000">"Rank 3"</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank4</span><span style="color: #007700">], </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #DD0000">"Rank 4"</span><span style="color: #007700">);
<br/>    </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank5</span><span style="color: #007700">], </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #DD0000">"Rank 5"</span><span style="color: #007700">);
<br/>    </span><span style="color: #FF8000">//================================================================================
<br/>    
<br/>    // THIS IS FOR SAVING ALL THE DATA INTO THE MYSQL DATABASE
<br/>    </span><span style="color: #0000BB">mysql_format</span><span style="color: #007700">(</span><span style="color: #0000BB">MySQL</span><span style="color: #007700">:</span><span style="color: #0000BB">Database</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">, </span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">), </span><span style="color: #DD0000">"INSERT INTO 'factions' ('ID', 'FactionName', 'FactionLeader', 'Rank1name', 'Rank2name', 'Rank3name', 'Rank4name', 'Rank5name'"</span><span style="color: #007700">, 
<br/>        </span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">ID</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">FactionName</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">FactionLeader</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank1</span><span style="color: #007700">],
<br/>        </span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank2</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank3</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank4</span><span style="color: #007700">],</span><span style="color: #0000BB">Factions</span><span style="color: #007700">[</span><span style="color: #0000BB">Total_Factions_Created</span><span style="color: #007700">][</span><span style="color: #0000BB">Rank5</span><span style="color: #007700">]);
<br/>    </span><span style="color: #0000BB">mysql_query</span><span style="color: #007700">(</span><span style="color: #0000BB">MySQL</span><span style="color: #007700">:</span><span style="color: #0000BB">Database</span><span style="color: #007700">, </span><span style="color: #0000BB">query</span><span style="color: #007700">);
<br/>    </span><span style="color: #FF8000">//=================================================================================
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>But when i create a faction , my database is still blank...<br />
Mysql: <a href="https://imgur.com/LFB0zJC.png" target="_blank">https://imgur.com/LFB0zJC.png</a>]]></content:encoded>
		</item>
	</channel>
</rss>