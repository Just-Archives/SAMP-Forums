<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[SA-MP Forums Archive - Client Support]]></title>
	<subtitle type="html"><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></subtitle>
	<link rel="self" href="https://sampforum.blast.hk/syndication.php"/>
	<id>https://sampforum.blast.hk/</id>
	<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/"/>
	<updated>2022-07-28T20:39:24Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=265453">j7n</a>]]></name>
		</author>
		<published>2020-08-24T09:03:00Z</published>
		<updated>2020-08-24T09:03:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=678370" />
		<id>https://sampforum.blast.hk/showthread.php?tid=678370</id>
		<title xml:space="preserve"><![CDATA[Block Alt-Enter]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=678370"><![CDATA[The key combination sends the game into a windowed mode. I don't ever want to use it. Playing any game with a light desktop visible around it and a chance to lose focus is not useful. How could I completely disable this?<br />
<br />
I have a problem with AutoHotkey scripts sending the game into windowed mode accidentally. This causes the display output to become corrupted, lose anti-aliasing, and usually require a restart.<br />
<br />
In AutoHotkey I do something like the following. Just doing one SendInput {NumpadEnter} is enough to trigger the problem.<br />
<br />
&#36;&#x26;t!0::<br />
Sleep 300<br />
BlockInput On<br />
Sleep 100<br />
SendInput t%Clear%/skin{NumpadEnter}<br />
Sleep 400<br />
; a dialog appears<br />
SendInput %VehId%{NumpadEnter}<br />
BlockInput Off<br />
return<br />
<br />
The combination is Alt-0. If I am still holding the Alt while an input without "t" is being sent, I will trigger the combination Alt-Enter. This happens if I have to reach across the keyboard or use two hands. I was unable to completely trap the key combination in AHK, nor programmatically release the Alt. Maybe you could give me a hint of how to find this command in samp itself to change to some non-existant combo?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=352168">GamerPlayerCZE</a>]]></name>
		</author>
		<published>2020-06-26T17:12:00Z</published>
		<updated>2020-06-26T17:12:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=676997" />
		<id>https://sampforum.blast.hk/showthread.php?tid=676997</id>
		<title xml:space="preserve"><![CDATA[My game crash]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=676997"><![CDATA[Hi my game sometime game crash and get this crash log<br />
<br />
Exception At Address: 0x0082C682<br />
Base: 0x04A00000<br />
<br />
Registers:<br />
EAX: 0x1B07E944	EBX: 0x00000002	ECX: 0x00040020	EDX: 0x00000000<br />
ESI: 0x1B4D80BC	EDI: 0x0000001B	EBP: 0x0177F764	ESP: 0x0177F748<br />
EFLAGS: 0x00010202<br />
<br />
Stack:<br />
+0000: 0x00000000   0x1C5040F0   0x1B4D80C0   0x1B0820F4<br />
+0010: 0x00000000   0x00000021   0x00040020   0x0177F79C<br />
+0020: 0x0082417C   0x01880034   0x1B5180DC   0x1C5040F0<br />
+0030: 0x0187E9F0   0x00000000   0x01880034   0x0177F774<br />
+0040: 0x0177F10C   0x0177F950   0x00825EA4   0x00888038<br />
+0050: 0x00000000   0x00734B90   0x007CCF21   0x1B4D80C0<br />
+0060: 0x00734BC4   0x1B4D80C0   0x1C2F50E8   0x1C2F50E8<br />
+0070: 0x00749B93   0x1C5040F0   0x00000000   0x1C2F50E0<br />
+0080: 0x14CA8648   0x0177F800   0x00000000   0x0053408E<br />
+0090: 0x1C2F50E0   0x00734B90   0x00000000   0x00000016<br />
+00A0: 0x14CA8648   0x04A9F01D   0x00000016   0x0515F9D0<br />
+00B0: 0x14CA8648   0x14CA8648   0x0177F81C   0x04AAFFB7<br />
+00C0: 0x00000016   0x000000BF   0x15F4F4C8   0x00000016<br />
+00D0: 0x14CA8648   0x0177FA4C   0x04A1929C   0x00000016<br />
+00E0: 0x05128190   0x00000001   0x0177F964   0x00000016<br />
+00F0: 0x000000BF   0x00000048   0x00000048   0x00000040<br />
+0100: 0x0177F964   0x0080E700   0x0F9FDE80   0x00000004<br />
+0110: 0x00000986   0x00000000   0x00000052   0x0000BAF6<br />
+0120: 0x00000050   0x00000000   0x017A0970   0x00000002<br />
+0130: 0x00000000   0x00000050   0x00000052   0x00C4D958<br />
+0140: 0x00000010   0x0A29B5EC   0x00000004   0x00000000<br />
+0150: 0x00805769   0x017A20F4   0x00C9BC50   0x00000052<br />
+0160: 0x0178657C   0x007EF657   0x017A0970   0x0178657C<br />
+0170: 0x00000000   0x00000052   0x3F78196A   0x006C6293<br />
+0180: 0x006C62AD   0x00000052   0x00000052   0x006C62B5<br />
+0190: 0x15618FC4   0x00A95094   0x0000021C   0x00C4E4F8<br />
+01A0: 0xC1F7AF37   0x3FF1A19A   0x00000000   0x3F25F734<br />
+01B0: 0x412A20CD   0x00000000   0x00000000   0x3DCCCCCD<br />
+01C0: 0x3F77A3AF   0xBD719680   0xBE7C6F8F   0x3F7FBE2A<br />
+01D0: 0x3E7BF804   0xBC740004   0x3F781984   0xC1A9166B<br />
+01E0: 0x3DB65369   0xBF64AA43   0x0177F97C   0x0177FA4C<br />
+01F0: 0x0177FA94   0x0177FA94   0x04A1FB11   0x05128190<br />
+0200: 0x0177FA4C   0x00000001   0x0177FAA8   0x04AE0E7B<br />
+0210: 0x00000000   0x04A3AEE0   0x0177FA90   0x000000BF<br />
+0220: 0x00000016   0x04A3AE99   0x05164F42   0x05164F40<br />
+0230: 0x00000000   0x00000060   0x00000060   0x0000005C<br />
+0240: 0x05167F50   0x69953400   0x05DE6000   0x0177F9A4<br />
+0250: 0x0F9F1080   0x6995344D   0x3E7BF7C6   0x0F9FB430<br />
+0260: 0x00000000   0x00000000   0x00000000   0x00000780<br />
+0270: 0x00000438   0x0FBDB750   0x00000000   0x00000000<br />
<br />
SCM Op: 0x248, lDbg: 0 LastRendObj: 355<br />
<br />
Game Version: US 1.0<br />
<br />
State Information: Ped Context: 0<br />
P0 (0,0) P1 (0,0) P2 (0,0) P3 (0,0) <br />
P4 (0,0) P5 (32,0) P6 (0,0) P7 (0,0) <br />
P8 (0,0) P9 (0,0) P10 (0,0) P11 (0,0) <br />
P12 (0,0) P13 (0,0) P14 (0,0) P15 (0,0) <br />
P16 (0,0) P17 (0,0) P18 (0,0) P19 (0,0) <br />
P20 (0,0) P21 (0,0) P22 (0,0) P23 (0,0) <br />
P24 (0,0) P25 (0,0) P26 (0,0) P27 (0,0) <br />
P28 (0,0) P29 (0,0) P30 (0,0) P31 (0,0) <br />
P32 (0,0) P33 (0,0) P34 (0,0) P35 (0,0) <br />
P36 (0,0) P37 (0,0) P38 (0,0) P39 (0,0) <br />
P40 (0,0) P41 (0,0) P42 (0,0) P43 (0,0) <br />
P44 (0,0) P45 (0,0) P46 (0,0) P47 (0,0) <br />
P48 (0,0) P49 (0,0) P50 (0,0) P51 (0,0) <br />
P52 (0,0) P53 (0,0) P54 (0,0) P55 (0,0) <br />
P56 (0,0) P57 (17,0) P58 (0,0) P59 (0,0) <br />
P60 (0,0) P61 (0,0) P62 (0,0) P63 (0,0) <br />
P64 (0,0) P65 (0,0) P66 (0,0) P67 (0,0) <br />
P68 (0,0) P69 (0,0) P70 (0,0) P71 (0,0) <br />
P72 (0,0) P73 (17,0) P74 (0,0) P75 (17,0) <br />
P76 (17,0) P77 (0,0) P78 (0,0) P79 (0,0) <br />
P80 (0,0) P81 (0,0) P82 (0,0) P83 (0,0) <br />
P84 (0,0) P85 (0,0) P86 (0,0) P87 (0,0) <br />
P88 (0,0) P89 (0,0) P90 (0,0) P91 (0,0) <br />
P92 (0,0) P93 (0,0) P94 (0,0) P95 (0,0) <br />
P96 (0,0) P97 (0,0) P98 (0,0) P99 (0,0) <br />
P100 (0,0) P101 (32,0) P102 (0,0) P103 (0,0) <br />
P104 (0,0) P105 (0,0) P106 (0,0) P107 (0,0) <br />
P108 (0,0) P109 (0,0) P110 (0,0) P111 (0,0) <br />
P112 (0,0) P113 (0,0) P114 (0,0) P115 (0,0) <br />
P116 (0,0) P117 (0,0) P118 (0,0) P119 (0,0) <br />
P120 (0,0) P121 (0,0) P122 (0,0) P123 (0,0) <br />
P124 (0,0) P125 (0,0) P126 (0,0) P127 (0,0) <br />
P128 (0,0) P129 (0,0) P130 (0,0) P131 (0,0) <br />
P132 (0,0) P133 (0,0) P134 (0,0) P135 (0,0) <br />
P136 (0,0) P137 (0,0) P138 (32,0) P139 (0,0) <br />
P140 (0,0) P141 (0,0) P142 (0,0) P143 (0,0) <br />
P144 (0,0) P145 (0,0) P146 (0,0) P147 (0,0) <br />
P148 (0,0) P149 (0,0) P150 (0,0) P151 (0,0) <br />
P152 (0,0) P153 (0,0) P154 (0,0) P155 (0,0) <br />
P156 (0,0) P157 (0,0) P158 (0,0) P159 (0,0) <br />
P160 (0,0) P162 (0,0) P163 (0,0) <br />
P164 (0,0) P165 (0,0) P166 (0,0) P167 (0,0) <br />
P168 (0,0) P169 (0,0) P170 (0,0) P171 (0,0) <br />
P172 (0,0) P173 (0,0) P174 (0,0) P175 (0,0) <br />
P176 (0,0) P177 (32,0) P178 (0,0) P179 (0,0) <br />
P180 (0,0) P181 (0,0) P182 (0,0) P183 (0,0) <br />
P184 (0,0) P185 (0,0) P186 (0,0) P187 (0,0) <br />
P188 (17,0) P189 (0,0) P190 (0,0) P191 (17,0) <br />
P192 (0,0) P193 (0,0) P194 (0,0) P196 (0,0) P197 (0,0) P198 (0,0) P199 (0,0) <br />
P200 (0,0) P201 (0,0) P202 (0,0) P203 (0,0) <br />
P205 (0,0) P206 (0,0) P207 (32,0) <br />
P208 (0,0) P210 (0,0) P211 (0,0) <br />
P212 (0,0) P213 (0,0) P214 (0,0) P215 (0,0) <br />
P216 (0,0) P219 (0,0) <br />
P221 (0,0) P222 (0,0) P233 (0,0) <br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
Thanks for help i dont know what with this]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=347294">RavenX</a>]]></name>
		</author>
		<published>2020-06-17T15:03:00Z</published>
		<updated>2020-06-17T15:03:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=676722" />
		<id>https://sampforum.blast.hk/showthread.php?tid=676722</id>
		<title xml:space="preserve"><![CDATA[Help about my SA:MP Client]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=676722"><![CDATA[So, Last time i played SA:MP, 6 months ago, everything worked absolutetly perfectly, but today coming back, to ANY server i connect to crashes on start up, here is the crash code<br />
<br />
[SA-MP 0.3.7<br />
Exception At Address: 0x0056F348<br />
Base: 0x04050000<br />
<br />
Registers:<br />
EAX: 0x2B210082	EBX: 0x00000000	ECX: 0x00B7CD98	EDX: 0x00000000<br />
ESI: 0x00B7CD98	EDI: 0x00000001	EBP: 0x74ECE8C0	ESP: 0x0177FD84<br />
EFLAGS: 0x00010206<br />
<br />
Stack:<br />
+0000: 0x00B7CD98   0x00000000   0x005BA1E7   0x00863B10<br />
+0010: 0x0053BCAB   0x00863B10   0x00863B10   0x00863A90<br />
+0020: 0x00863B10   0x0000000A   0x0053E593   0x00863B10<br />
+0030: 0x00748D00   0x75C28F60   0x00000000   0x0177FF70<br />
+0040: 0x00261000   0x01930000   0x00000008   0x04B30048<br />
+0050: 0x00000008   0x00000100   0x00000008   0x00000102<br />
+0060: 0x44480000   0x44160000   0x00000000   0x00000000<br />
+0070: 0x00000640   0x000004B0   0x00000000   0x0177FE3C<br />
+0080: 0x00080746   0x00000113   0x00004242   0x00000000<br />
+0090: 0x207A7F3B   0x00000320   0x00000258   0x0000002C<br />
+00A0: 0x0177FE14   0x00825EA4   0x0177FF60   0x00825EA4<br />
+00B0: 0x00000000   0x00261000   0x00821D17   0x00835342<br />
+00C0: 0x00000065   0x0177FF70   0x008246F1   0x00400000<br />
+00D0: 0x00000000   0x01BF3853   0x0000000A   0x00000094<br />
+00E0: 0x00000006   0x00000002   0x000023F0   0x00000002<br />
+00F0: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+0100: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+0110: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+0120: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+0130: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+0140: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+0150: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+0160: 0x00000000   0x00000000   0x00000000   0x00824588<br />
+0170: 0x00824570   0x00824570   0x00261000   0xC0000005<br />
+0180: 0x00000000   0x01BF3853   0x00000044   0x01C06B80<br />
+0190: 0x01C31640   0x01C329D8   0x00000000   0x00000000<br />
+01A0: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+01B0: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+01C0: 0xFFFFFFFF   0xFFFFFFFF   0xFFFFFFFF   0x00000000<br />
+01D0: 0x00000000   0x0177FE60   0x0177F944   0x0177FFCC<br />
+01E0: 0x00825EA4   0x00888078   0x00000000   0x0177FF80<br />
+01F0: 0x75C26359   0x00261000   0x75C26340   0x0177FFDC<br />
+0200: 0x775E7C24   0x00261000   0x9CCA78B4   0x00000000<br />
+0210: 0x00000000   0x00261000   0x00000000   0x00000000<br />
+0220: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+0230: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+0240: 0x0177FF8C   0x00000000   0x0177FFE4   0x775FA040<br />
+0250: 0xEAD5E4C0   0x00000000   0x0177FFEC   0x775E7BF4<br />
+0260: 0xFFFFFFFF   0x77608FF7   0x00000000   0x00000000<br />
+0270: 0x00824570   0x00261000   0x00000000   0x00905A4D<br />
<br />
SCM Op: 0x0, lDbg: 0 LastRendObj: 0<br />
<br />
Game Version: US 1.0<br />
]<br />
<br />
Can anyone please help me cause i am doing some projects for SA:MP, help is appreciated <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=240678">JamesMc</a>]]></name>
		</author>
		<published>2020-06-04T12:28:00Z</published>
		<updated>2020-06-04T12:28:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=676294" />
		<id>https://sampforum.blast.hk/showthread.php?tid=676294</id>
		<title xml:space="preserve"><![CDATA[SA-MP Settings not saving and chatlog not working]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=676294"><![CDATA[Hi,<br />
<br />
My game doesn't save my screen resolution, audio settings etc, does anyone know what the issue is here? Also my chatlog isn't showing up in my documents.<br />
<br />
Also i am using SA-MP via Steam Launch.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=350909">ma7moud</a>]]></name>
		</author>
		<published>2020-06-03T21:10:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=676278" />
		<id>https://sampforum.blast.hk/showthread.php?tid=676278</id>
		<title xml:space="preserve"><![CDATA[Samp 3.7DL R1 crash .]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=676278"><![CDATA[hey guys, when i join for any server I do not complete one minute inside the game and then he takes me out without any reason and before I open the game he sends me this message<br />
<a href="https://g.top4top.io/p_16156i6k51.png" target="_blank">https://g.top4top.io/p_16156i6k51.png</a><br />
<br />
<br />
i cracking the game?: yes because i don't have money to buy it<br />
<br />
thats a frist time a game crash with me and i try a download the game from  I tried downloading the game from another site and it did not work for me and I also tried it without mods and don't work<br />
1) SA-MP version<br />
2) Windows version<br />
3) Video card type<br />
4) IP:Port (if any) of the server you are trying to play on<br />
5) If you are crashing, paste the crash report in your post and say when the crash occurs<br />
6) If you are crashing loading SA-MP, please say whether GTA:SA single player works (test it)<br />
7) Do you have any other GTA:SA mods installed? e.g. new vehicles<br />
<br />
1- client 3.7DL R1<br />
2- windows 10<br />
3- intel hd graphics 2500<br />
4-every server<br />
5-the photo.<br />
6- nope<br />
7- yup , i try gta sa without any mods and same.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=350342">RaulAlonso</a>]]></name>
		</author>
		<published>2020-05-26T08:55:00Z</published>
		<updated>2020-05-26T08:55:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=675982" />
		<id>https://sampforum.blast.hk/showthread.php?tid=675982</id>
		<title xml:space="preserve"><![CDATA[Game launching crash]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=675982"><![CDATA[Hey guys, early i simply logged out and turned off my laptop and when i came back and tried to login till this started popping out:<br />
<br />
<img alt="" border="0" src="https://i.imgur.com/MgGopVT.png"/><br />
<br />
I have no clue what's that and hopefully you can help me out guys, thank you.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=349781">NoxxeR</a>]]></name>
		</author>
		<published>2020-05-14T19:55:00Z</published>
		<updated>2020-05-14T19:55:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=675518" />
		<id>https://sampforum.blast.hk/showthread.php?tid=675518</id>
		<title xml:space="preserve"><![CDATA[Is there an GTA SA resolution fix for 1920x1080?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=675518"><![CDATA[I have a new screen that is 24 inch, its resolution is in 1920x1080.<br />
But GTA SA does not support this resolution so is there any way to fix this so i can play the game in HD-resolution?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=349449">joanluque</a>]]></name>
		</author>
		<published>2020-05-12T01:47:00Z</published>
		<updated>2020-05-12T01:47:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=675409" />
		<id>https://sampforum.blast.hk/showthread.php?tid=675409</id>
		<title xml:space="preserve"><![CDATA[SA MP issue]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=675409"><![CDATA[Hello people, well my issue is that I keep getting freezing spikes, as shown in this video I found on YouTube<br />
<br />
<a href="https://youtu.be/ZSYCSa0ZR9M" target="_blank">https://youtu.be/ZSYCSa0ZR9M</a><br />
<br />
I've made everything I see on the web, try other versions of sa mp, reset my PC to factory, run in compability with windows 98\me, give priority to the game on task manager, nothing works, its the same full graphics settings or lowest graphic setting, install the game in diferent directories, i've try everything dunno what happen, single player works perfectly, no crashes, no lag, no freeze, I've even saw a fix on GTA inside that someone post here that works for him, didn't work for me, if someone know the issue please, the system usage in task manager during the freeze and playing is normal 40% 60% in all values.<br />
<br />
My system is a AMD A10-9600P oficial 2.4ghz to 3.3ghz<br />
Have a Radeon R7 dedicated of 2gb and a integrated R5 of 512 my<br />
8gb ram <br />
Windows 10 home 64 bits<br />
<br />
As a laptop people say may be overheating, it doesn't I check temperature and its perfect other games run smoothly like FSX.<br />
<br />
By the way my game its totally clean, only sa mp mod.<br />
<br />
Thank you, for your support.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=121342">TheMaddox</a>]]></name>
		</author>
		<published>2020-05-10T23:52:00Z</published>
		<updated>2020-05-10T23:52:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=675369" />
		<id>https://sampforum.blast.hk/showthread.php?tid=675369</id>
		<title xml:space="preserve"><![CDATA[Crashing when trying to edit toys]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=675369"><![CDATA[Every time I try to edit toys ingame I crash <br />
<br />
SA-MP 0.3.7-R4<br />
Exception At Address: 0x03A925A5<br />
Base: 0x03A20000<br />
<br />
Registers:<br />
EAX: 0x99222222	EBX: 0x0028F2FC	ECX: 0x00000000	EDX: 0x0000010F<br />
ESI: 0x034AFE18	EDI: 0x000002B2	EBP: 0x0028F270	ESP: 0x0028F260<br />
EFLAGS: 0x00210286<br />
<br />
Stack:<br />
+0000: 0x000002B2   0x034AFE18   0x03A92E48   0x00000000<br />
+0010: 0x000002B2   0x0000010E   0x000002B3   0x0000010F<br />
+0020: 0x10BAFE60   0x034AFE18   0x0028F61C   0x034AF9D8<br />
+0030: 0xBEE0F5EC   0x00000000   0x00000000   0x44394B5F<br />
+0040: 0xC449DC6C   0x4288917C   0x442CB240   0x438702EA<br />
+0050: 0x4423FE7C   0x43DF49BC   0x034AFE18   0x10288500<br />
+0060: 0x00000005   0x0CB02900   0x0C824A08   0x00734A40<br />
+0070: 0x007C51A0   0x0028F61C   0x03A9399F   0xBEE0F5EC<br />
+0080: 0x3EE0F5EC   0xFFFFFFFF   0x04CEC0E8   0x75A3EB96<br />
+0090: 0x4060F5EC   0x0A060000   0x1E400000   0xBE438D84<br />
+00A0: 0xBC1FF068   0x3F7B46AF   0x09EF2794   0xBF09C593<br />
+00B0: 0xBF55D143   0xBDE77358   0x00000000   0x3F522781<br />
+00C0: 0xBF0CC12C   0x3E1DF371   0x447F0000   0x44394600<br />
+00D0: 0xC449DCB2   0x42896E4B   0x000000E6   0xBE438D84<br />
+00E0: 0xBC1FF068   0x3F7B46AF   0x00000000   0xBF09C593<br />
+00F0: 0xBF55D143   0xBDE77358   0x38BF2800   0x3F522781<br />
+0100: 0xBF0CC12C   0x3E1DF371   0xBE3FE477   0x443948D2<br />
+0110: 0xC449D7AF   0x42896DDD   0x33000000   0x03A95B54<br />
+0120: 0x04CEC0E8   0x007F99B0   0xFFFFFFFF   0x0028F3BC<br />
+0130: 0x5592CAA1   0x0000014A   0x00000000   0x0028F3CC<br />
+0140: 0x5592CAA1   0x0000014A   0x00000000   0x0028F42C<br />
+0150: 0x0028F3E0   0x5592CAA1   0x0000014A   0x00000000<br />
+0160: 0x0028F440   0x21A8EEA8   0x00000000   0x00000000<br />
+0170: 0x5592C48E   0x00004E20   0x00000000   0x56EB4020<br />
+0180: 0x0028F400   0x5592C48E   0x00000000   0x0028F440<br />
+0190: 0x00000000   0x0E01BB98   0x21A60AE8   0x00000000<br />
+01A0: 0x0028F47C   0x0028F47C   0x5586A809   0x0DE695B8<br />
+01B0: 0x0028F4B4   0x08DD0040   0x5586A818   0x0DE695B8<br />
+01C0: 0x00000001   0x00000000   0x21A60AE8   0x29264000<br />
+01D0: 0x29264000   0x00000000   0x0DE65D00   0x0028F4B4<br />
+01E0: 0x00000002   0x00000000   0x00000000   0x00000000<br />
+01F0: 0x00000000   0x00000000   0x00000000   0x00000000<br />
+0200: 0x00004E20   0x00000000   0x00000000   0x00000000<br />
+0210: 0x00000000   0x00000000   0xE0F9D529   0x0028F498<br />
+0220: 0x6A0FB4AF   0x0DE65D00   0x0028F4B4   0x068BE430<br />
+0230: 0x00000001   0x0028F538   0x0028F518   0x6A090F74<br />
+0240: 0x08DD0040   0x0028F4B4   0x068BE430   0x2DF149A0<br />
+0250: 0x0028F5A8   0x21A60AE8   0x09FB10E0   0x00000206<br />
+0260: 0x0690D824   0x00000000   0x0690D824   0x000A5B31<br />
+0270: 0x00000000   0x0028F4F4   0x6A00959E   0x0000040D<br />
<br />
SCM Op: 0x6BD, lDbg: 0 LastRendObj: 19015<br />
<br />
Game Version: US 1.0<br />
<br />
State Information: Ped Context: 0<br />
P0 (0,0) P1 (17,0) P2 (0,0) P3 (33,0) <br />
P4 (0,0) P5 (0,0) P6 (0,0) P7 (0,0) <br />
P8 (0,0) P9 (0,0) P10 (19,341) P12 (0,0) P13 (0,0) P14 (0,0) P15 (0,0) <br />
P16 (19,555) P17 (0,0) P18 (0,0) P19 (0,0) <br />
P20 (0,0) P25 (0,0)]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=342517">makemoneynotfriends</a>]]></name>
		</author>
		<published>2020-05-07T01:19:00Z</published>
		<updated>2020-05-07T01:19:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=675204" />
		<id>https://sampforum.blast.hk/showthread.php?tid=675204</id>
		<title xml:space="preserve"><![CDATA[samp-debug]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=675204"><![CDATA[Hello i just launching samp-debug after typing vehicle name it get crashs for ex /v Cheetah]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=349235">perfOREZ</a>]]></name>
		</author>
		<published>2020-05-05T11:18:00Z</published>
		<updated>2020-05-05T11:18:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=675124" />
		<id>https://sampforum.blast.hk/showthread.php?tid=675124</id>
		<title xml:space="preserve"><![CDATA[Laggy mouse]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=675124"><![CDATA[Samp runs smooth but when I move the camera it lags back and forth every few seconds.. <br />
<br />
Everything i tried :<br />
<br />
1. compatibility, run as admin (instant crash/doesn't start)<br />
2. silentpatch (instant crash/doesn't start)<br />
3. low settings, draw distance<br />
4. dinput8.dll<br />
5. changed the mouse, changed the mouse port usb 3.0 and usb 2.0<br />
6. reinstalled windows 10 (ver 1809, 1909)<br />
7. single core (set affinity)<br />
<br />
specs: rx 580<br />
ryzen 5 2600<br />
16gm ram<br />
windows 10 x64 ver 1909 build 18363.778<br />
<br />
I'm about to give up playing samp because of this problem.. I searched the entire internet and couldn't find a fix for this. I tried playing like this but it's impossible <img alt="" border="0" class="inlineimg" src="images/smilies/sad.gif" title="Sad"/> please help!!]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=22432">[DK]GHOST_DOG</a>]]></name>
		</author>
		<published>2020-05-04T09:31:00Z</published>
		<updated>2020-05-04T09:31:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=675075" />
		<id>https://sampforum.blast.hk/showthread.php?tid=675075</id>
		<title xml:space="preserve"><![CDATA[Weird Lag on Windows 10 / Volume Control Fix]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=675075"><![CDATA[Hey guys, I hope you are all doing well during this Quarantine.<br />
<br />
On topic now; I have a very good solid build. Ryzen 5 2600, RX Vega 56, 16GB of RAM etc. <br />
SA:MP runs fluently locked 90 FPS all the time, but at some points there's a sudden vissible "lag" meanwhile no FPS drop. While on rest games using the Windows Volume Control, it causes lag, here's the opposite. Whenever i get those "laggy" moments, using my Volume Control will fix it and get me a smooth gaming for a little bit.. Keep in mind I use a 144Hz monitor which 90FPS constant lock is visible difference, but those laggy moments feels like FPS go down at 60 or something (PC still reports 89-93 FPS though)<br />
<br />
I am using Windows 10 Pro x64 (18362). All my drivers are updated, AMD on latest 20.4.2 etc. Audio card updated to latest Realtek drivers etc. This does not happen on Single Player, only on SA:MP and I've tried numerous servers to see (so if it was textdraw of some certain server or so).. Happens even with F7 and hidden text. I'll try to capture a video of it.<br />
<br />
What I have tried:<br />
-Updated every single driver (BIOS, Chipset, AMD, Audio etc)<br />
-Run SA:MP with admin rights<br />
-Disabled Compatibility -&#x26;t Fullscreen optimization<br />
-Removed any stats/screen info about FPS (RivaTuner or Fraps)<br />
-CLEAN installation of GTA:SA/SA:MP (R4) (even deleting gta_sa.set and samp config etc)<br />
-Tried other gta_sa.exe's.<br />
-Different servers, few without any textdraw or weird GUI text etc<br />
-Local server with default sa:mp scripts<br />
-PC is always on High Performance mode, CPU stock or 4Ghz overclock, same for the GPU. (apparently I'm certain this is not Hardware related but, but software one or settings.)<br />
-Tried crashes.asi who someone told me maybe it could help me uncap my FPS just for test (ikr 100+ is bugged gameplay) - Did not work at all. Just helped run SA-MP on window with instant alt-enter press.<br />
<br />
Every other game is running fluently on my computer, only SA:MP is getting this laggy bug, idk why.<br />
<br />
Game runs 5% cpu, 5% gpu. I tried DirectX 2 (Graphic Mod) the other day (couldn't get it to work on SA:MP though) and game on single player was running perfect, 40 percent cpu, 60-70 percent on GPU. I just don't get why SA:MP get's laggy while reporting 90 FPS at some points.. It happens on random moments or when I change camera (or re-center it).. Any idea on what else I could try to solve this?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=343955">KateDLynch</a>]]></name>
		</author>
		<published>2020-05-02T08:18:00Z</published>
		<updated>2020-05-02T08:18:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=674982" />
		<id>https://sampforum.blast.hk/showthread.php?tid=674982</id>
		<title xml:space="preserve"><![CDATA[White skin bug]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=674982"><![CDATA[Hello, I beg you to help me because this is VERY urgent. Ok so basically what happens is that when I enter server X there are ONLY 2 skins on that server that have this bug for me: a custom man paramedic and a custom female paramedic (they're both custom skins so I don't think they have an ID). The problem is that I see them entirely white and some other members of the community have this problem as well, I don't get what it could be though. I've already tried reinstalling the game, reinstalling the game from another source, installing HD skins over them (but that would be useless since the bugged skins don't have an ID), installing a new gta3.img and... that pretty much.<br />
<br />
Please help me ASAP!<br />
Reference photo:<br />
<img alt="" border="0" src="https://i.postimg.cc/YCqcFYGF/sa-mp-000.png"/>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=331169">KitsuHG</a>]]></name>
		</author>
		<published>2020-04-26T13:44:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=674725" />
		<id>https://sampforum.blast.hk/showthread.php?tid=674725</id>
		<title xml:space="preserve"><![CDATA[SAMP Installation]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=674725"><![CDATA[Hello everyone,<br />
<br />
 I have a problem when I try to install SA-MP. I can't click on the install button ? How to fix this problem ?<br />
<br />
<div align="center"><img alt="" border="0" src="https://i.goopics.net/KAD53.png"/></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=192386">TerrorDrone</a>]]></name>
		</author>
		<published>2020-04-24T21:59:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=674670" />
		<id>https://sampforum.blast.hk/showthread.php?tid=674670</id>
		<title xml:space="preserve"><![CDATA[SA-MP Crash (0x0040FB80)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=674670"><![CDATA[<b>1) SA-MP version </b><br />
0.3.7-R4<br />
<b>2) Windows version</b><br />
Windows 10 (tried to run as Win8, WinXP)<br />
<b>3) Video card type</b><br />
GTX 1050<br />
<b>4) IP:Port (if any) of the server you are trying to play on</b><br />
Tried to enter several servers.<br />
<b>5) If you are crashing, paste the crash report in your post and say when the crash occurs</b><br />
It happens when i try to join a server. The bar goes to 100% and then it crashes.<br />
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
		overflow: auto">SA-MP 0.3.7-R4
Exception At Address: 0x0040FB80
Base: 0x03D10000

Registers:
EAX: 0x1734DEE0	EBX: 0x18F9EA80	ECX: 0x00000000	EDX: 0x00000000
ESI: 0x03EDDFF0	EDI: 0x18F9EA80	EBP: 0x00000118	ESP: 0x0177FC78
EFLAGS: 0x00210202

Stack:
+0000: 0x004C6DC5   0x00000030   0x18F9EA80   0x18F9EA80
+0010: 0x03EDDFF0   0x00000118   0x00001500   0x0177FCD8
+0020: 0x0177FCD8   0x1734DEE0   0x03EDDFF0   0x03BE8050
+0030: 0x0177FCD8   0x008A62EC   0x008A62EC   0x03EDDFF0
+0040: 0x00001500   0x004C549D   0x03BE7F88   0x004C52F0
+0050: 0x0177FCD8   0x18F9EA80   0x03EDDFF0   0x0177FF60
+0060: 0x0083BC4B   0xFFFFFFFF   0x004C7369   0x18F9EA80
+0070: 0x18F9EA80   0x03EDDFF0   0x005373CF   0x18F9EA80
+0080: 0x008E48AC   0x00000118   0x03EDDFF0   0x000015E0
+0090: 0x0040C814   0x008E48AC   0x03EDDFF0   0x000015E0
+00A0: 0x00000118   0x00000000   0x008E4A60   0x00000000
+00B0: 0x18756800   0x00012000   0x008E7B50   0x0177FF60
+00C0: 0x753B68C0   0xA1D3FD23   0xFFFFFFFE   0x0040E2CA
+00D0: 0x18756800   0xFFFFFFFF   0x00000000   0x00000008
+00E0: 0x00000000   0x757CBCB0   0x00000000   0x00000000
+00F0: 0x00000024   0x0040EAC8   0x00000000   0x00000001
+0100: 0x00000000   0x00863B10   0x005BA263   0x00000000
+0110: 0x00863A6C   0x0086A578   0x00000000   0x0053BCAB
+0120: 0x00863B10   0x00863B10   0x00863A90   0x00863B10
+0130: 0x0000000A   0x0053E593   0x00863B10   0x00748D00
+0140: 0x76BE16D0   0x00000000   0x0177FF70   0x0030F000
+0150: 0x01900000   0x00000008   0x01905D90   0x00000008
+0160: 0x00000100   0x00000008   0x00000102   0x43C80000
+0170: 0x43960000   0x00000000   0x00000000   0x00000320
+0180: 0x00000258   0x00000000   0x0177FE3C   0x000303CE
+0190: 0x00000113   0x00004242   0x00000000   0x001FE0E3
+01A0: 0x00000190   0x0000012C   0x0000002C   0x0177FE14
+01B0: 0x00825EA4   0x0177FF60   0x00825EA4   0x00000000
+01C0: 0x0030F000   0x00821D17   0x00835342   0x00000065
+01D0: 0x0177FF70   0x008246F1   0x00400000   0x00000000
+01E0: 0x01C434D8   0x0000000A   0x00000094   0x00000005
+01F0: 0x00000001   0x00000A28   0x00000002   0x76726553
+0200: 0x20656369   0x6B636150   0x00003320   0x00000000
+0210: 0x00000000   0x00000000   0x00000000   0x00000000
+0220: 0x00000000   0x00000000   0x00000000   0x00000000
+0230: 0x00000000   0x00000000   0x00000000   0x00000000
+0240: 0x00000000   0x00000000   0x00000000   0x00000000
+0250: 0x00000000   0x00000000   0x00000000   0x00000000
+0260: 0x00000000   0x00000000   0x00000000   0x00000000
+0270: 0x00000000   0x00000000   0x00824588   0x00824570

SCM Op: 0x0, lDbg: 0 LastRendObj: 0

Game Version: US 1.0</pre>
</div><b>6) If you are crashing loading SA-MP, please say whether GTA:SA single player works (test it)</b><br />
It works.<br />
<br />
<b>7) Do you have any other GTA:SA mods installed? e.g. new vehicles</b> <br />
No.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>