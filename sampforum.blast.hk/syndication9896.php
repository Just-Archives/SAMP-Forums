<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[SA-MP Forums Archive - All Forums]]></title>
	<subtitle type="html"><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></subtitle>
	<link rel="self" href="https://sampforum.blast.hk/syndication.php"/>
	<id>https://sampforum.blast.hk/</id>
	<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/"/>
	<updated>2022-07-28T20:35:07Z</updated>
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
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=76540">Nexotronix</a>]]></name>
		</author>
		<published>2020-08-23T05:54:00Z</published>
		<updated>2020-08-23T05:54:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=678350" />
		<id>https://sampforum.blast.hk/showthread.php?tid=678350</id>
		<title xml:space="preserve"><![CDATA[[FilterScript] Roleplay Compilation]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=678350"><![CDATA[Hello guys! <br />
<br />
I want to release some functions but i cant to decide to do it!<br />
<br />
<br />
All work you can check here:<br />
<a href="https://www.youtube.com/playlist?list=PLailJRTFYtWc0xqperR9DUSpT5WkleFt6" target="_blank">https://www.youtube.com/playlist?lis...9DUSpT5WkleFt6</a><br />
<br />
Features list:<br />
<br />
-Serverside Los Santos Map<br />
-Texdraw Notifications<br />
-Garbage Collector Job<br />
-Mechanic Job<br />
-Clothing Store System<br />
-Unique taxi system<br />
-Brand new 24/7 system<br />
- A lot of unique mapping features<br />
and more...<br />
<br />
So if this poll will gain 200 answers i'll release it.<br />
But if  want to make yor server unique just PM me;]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=266967">Fairuz</a>]]></name>
		</author>
		<published>2020-08-20T05:27:00Z</published>
		<updated>2020-08-20T05:27:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=678280" />
		<id>https://sampforum.blast.hk/showthread.php?tid=678280</id>
		<title xml:space="preserve"><![CDATA[[FilterScript] IsPlayerUsingAndroid]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=678280"><![CDATA[I've been seeing a massive new players from android and I wanted to share how to detect android users, this might not work for clients that respond to the check, please test it.<br />
Also for mods, if you want me to remove it, I'll be glad to, I don't want to break any forum rules.<br />
<br />
<a href="https://github.com/Fairuz-Afdhal/IsPlayerUsingAndroid" target="_blank">https://github.com/Fairuz-Afdhal/IsPlayerUsingAndroid</a><br />
<br />
I only used it once while I wanted to make my own server working with android but I'm running out of motivation to develop them as they're not really stable.<br />
Note that this doesn't work if you put it in your gamemode, please check <a href="https://github.com/Zeex/sampgdk/issues/189" target="_blank">this out!</a><br />
<br />
I'm open to contribution, please make a pull request.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=5303">beckzy</a>]]></name>
		</author>
		<published>2020-08-15T13:55:00Z</published>
		<updated>2020-08-15T13:55:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=678191" />
		<id>https://sampforum.blast.hk/showthread.php?tid=678191</id>
		<title xml:space="preserve"><![CDATA[eLg Clan's FR/RP Official Server]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=678191"><![CDATA[<div align="center">
<a href="http://www.game-state.com/87.98.132.123:7777" target="_blank"><img alt="" border="0" src="http://www.game-state.com/87.98.132.123:7777/n-560x95_FFFFFF_FFFFFF_000000_000000.png"/></a><br />
<br />
<font size="3"><b><u>eLg Clan's FR/RP Official Server</u> </b>| 0.3.7 | <font color="red">87.98.132.123:7777</font> | <a href="http://www.elgclan.net" target="_blank">www.elgclan.net</a></font><br />
<br />
We first launched in January 2007 and have since opened our doors to thousands of players over the past 13 years. Our script has been developed significantly over this period of time, and is now the most advanced it has ever been. The aim of the server is find the right balance between the players who want to come and freeroam, enjoying the benefits of the server in freeroam mode ( /fr ), and the type of player who wants to come and roleplay with groups of players from within the community ( /rp ) . With all of the relevant features that our script brings to the server, we have attracted both of these types of players for years.<br />
</div>
<u><b>Organisation System</b></u><br />
Our organisation system is the core element of the server. The system allows great flexibility for all types of players. The system itself is categorised into a variety of different organisations (see below). All organisations are created following the players' requests and have the following generic functionality:<br />
<br />
- A fully dynamic system allowing great flexibility for editing and creating organisations; without the need for a server restart, all changes are made dynamically.<br />
- An exclusive organization channel allowing all org members to communicate privately.<br />
- Leader and co-leader functionality.<br />
- Functioning organization gates with gate modes.<br />
- CCTV capabilities and alarm systems to alert of any intruders inside the organisation's HQ.<br />
- A unique organisation color, skins, weapons and vehicles all requested by the organisation’s leader.<br />
- An organization bank and wage system.<br />
- Organization checkpoints containing information and options (depending on your leader and rank status)<br />
- Organization ranks and permission sets for each rank.<br />
<br />
<u>Law Organisations</u><br />
Our law organizations are made up of San Andreas Police Department, Special Weapons and Tactics, and San Andreas Armed Forces. Each of these organizations work together to combat the crime that occurs within the server. Law organisations have special features that allows them to combat crime, some of these features are listed below.<br />
- A law channel allowing all law organizations to communicate with each other.<br />
- A full wanted system allowing players to see who is wanted, along with their level and additional information such as who wanted the player originally and/or which crime belongs to each wanted star.<br />
- The ability to create cones and roadblocks to close off parts of San Andreas.<br />
- The ability to frisk players to discover what items the criminal is carrying as well the ability to remove those items.<br />
- Law enforcers can cuff criminals.<br />
- A location command allowing law enforcers to locate a criminal's last whereabouts (using a timing delay on the arriving information)<br />
- Criminals can be jailed for a set time based on their wanted level in a roleplay situation, or can be arresred by being killed (if they attempt to escape)<br />
- Police officers can fine wanted players. This will remove their wanted level.<br />
- Police officers can deploy stingers in attempt to pop criminals' tires.<br />
<br />
<u>Criminal Organisations</u><br />
Just like our law organisations our criminal organisations also have specific features. These organisations are split into 2 categories (Gang &amp; Mafia). Here is a combined list of the features gangs &amp; mafias have access too.<br />
- The ability to take over turfs. These turfs will be highlighted on the map using the organizations' color.<br />
- The ability to rob banks and casinos (permitting there are enough law enforcers online)<br />
- A fully functioning drugs importing / drugs selling system.<br />
- The ability to add tags using the organization's initials, or alternatively some gangs can use single-player tags.<br />
<br />
The script also supports other types of organizations from health services to public transport, and quarry worker to hitman, etc etc.<br />
<br />
<u><b>Property/House System</b></u><br />
We recognise that players like to have somewhere/something that they can call their own - we have 100+ properties in the server, with more being dynamically added on a weekly basis to meet demand, ensuring that there are a variety of property types available for all players. A player has full control over their property, allowing them to buy and sell when required. Players can sell their property for the 'market' price, or sell it directly to another player. Property owners can also allow their property to be rented out to other players in the server (this creates another source of income). The property pickup color, and the color of the 3D text above, will depend of the currect state of the property (for sale, owned, renting, renting and full, etc). Property owners and tenants can lock/unlock their property interior. Properties interiors have safes, where players can store cash, weapons and drugs. If you own a property, you can reset your personal vehicle locations to your property.<br />
<br />
<u><b>Business System</b></u><br />
In addition to properties, players may also purchase shares in businesses. We have 100+ businesses within the server, which allows players to invest their money, and in return they get a steady source of income (based on their shares %) which is accumulated periodically regardless of if the player is online or not. Players may invest additional money to upgrade their business, which results in a higher timely income. If you own shares in a business, you can reset your personal vehicle locations to your business.<br />
<br />
<u><b>Bank System</b></u><br />
To store the money that you generate within the server, we have a fully functioning bank system. Our bank system has the following functionality.<br />
- Allows players to deposit and withdraw money from any bank or nearby ATM.<br />
- Allows players to complete bank account transfers between different bank accounts.<br />
- You can view your bank statement to see a list of your recent bank transactions.<br />
- You can collect the interest that you have accumulated from the money you have in your bank account.<br />
<br />
<u><b>Licenses</b></u><br />
To ensure that all players are capable of driving, flying, and riding motorcycles, we have the following licences:<br />
- Driving license (Type /drivingschool if you don't have a driving license)<br />
- Flying license<br />
- Motorcycle license<br />
- Weapon License (can be purchased in-game)<br />
<br />
<u><b>Personal Vehicle System</b></u><br />
Throughout the server there are a number of car and bike dealerships allowing you to purchase cars and motorcycles. At dealerships you can purchase and test drive vehicles. Additionally you may purchase insurance for the vehicle, change vehicle color, and add a license plate if you wish to do so.<br />
- All customisation and tuning are saved to personal vehicles, and you can remove them using the relevant commands<br />
- Players have full control over all vehicles (engine, lights, windows, bonnet, storing items in the trunk, doors, etc)<br />
- Not happy with your vehicle anymore? No problem. Either sell it to a dealership for a set price, or sell it to another player for the price of your choice.<br />
- If you own property and/or business, you may choose where you want your vehicle to parked at either asset, then your vehicle will then spawn there if you need to reset it's location. Alternatively you can reset your vehicle's location to the nearest police department.<br />
<br />
<u><b>Jobs System</b></u><br />
We have a variety of jobs/missions for players to complete. This allows the player to earn additional income if needed. We have the following jobs/missions:<br />
- Bus missions<br />
- Trucking missions<br />
- Pizza delivery missions<br />
- Streak missions (train)<br />
<br />
<u><b>Clothes System</b></u><br />
Not happy with your skin's appearance? Then customise it; head to any of the clothing stores to purchase a large variety of accessories. You can attach these to your skin in any way you like. Items include Bandanas, Masks, Caps/Hats, Glasses, Watches and Helmets.<br />
<br />
<u><b>Items System</b></u><br />
There are many 24/7 stores around San Andreas where players can purchase an assortment of items. These items range from personal walkie talkies (allowing players to have their own private channels), GPS (allowing players to choose a location and a way-point being set for them), cellphone (allowing players to call other players, send text messages, have a fully functioning contacts phonebook and many other features), and other functional items (cameras, cigarettes, rope, and much much more).<br />
<br />
<u><b>Unique Interiors</b></u><br />
We have a variety of unique and exclusive interiors within the server. These custom interiors include banks, hospitals, airports, fire dept, bars, restaurants, and more.<br />
<br />
<b><u>Event System</u></b><br />
The server has a dynamic event system; allowing admins to set up unique and custom events ranging from DM/TDM to Capture the flag/Capture the vehicle, to Races, and more. These events are created dynamically by admins can can be opened at any time. This system allows for real time events to occur, and for us to vary the gameplay within the server at any time.<br />
<br />
<u><b>Player Support</b></u><br />
After years of experience we have developed a large range of player support mechanisms which ensure players are comfortable playing in the server. Below these are listed.<br />
- A Help Desk Operator System - This is a dedicated team of players who can answer any player queries about the server, there are dedicated commands to enable you to ask questions and queries directly.<br />
- An Advanced Admin System - Our admin system allows us to identify any unwanted hackers, DM'ers or just general annoyances immediately allowing the admins to deal with any problems quickly and efficiently so that the players' experience isn’t affected.<br />
<br />
<u><b>Server Sided Features</b></u><br />
To make our server more unique we have customised San Andreas' built in features; disabling client mod shops and Ammunations - they have been rebuilt on our server side, which allows much more customisation regarding these features.<br />
<br />
<div align="center"><b>We look forward to seeing you soon! - The eLg Staff Team</b></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=338194">CUDECAMELO</a>]]></name>
		</author>
		<published>2020-08-13T20:22:00Z</published>
		<updated>2020-08-13T20:22:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=678145" />
		<id>https://sampforum.blast.hk/showthread.php?tid=678145</id>
		<title xml:space="preserve"><![CDATA[[Ajuda] Sistema de Ficar Inconsciente  ;(]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=678145"><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:263px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> <span style="color: #000000;">bool</span><span style="color: #000000;">:</span>pIncosciente<span style="color: #000000;">[</span>MAX_PLAYER_NAME<span style="color: #000000;">]</span>;<br/><br/><span style="color: #2222BB;">public</span> OnPlayerStateChange<span style="color: #000000;">(</span>playerid, newstate, oldstate<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>      <span style="color: #2222BB;">new</span> <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>Vida;<br/>      GetPlayerHealth<span style="color: #000000;">(</span>playerid, Vida<span style="color: #000000;">)</span>;<br/>      <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>Vida <span style="color: #000000;">&#x26;t=</span> <span style="color: #000000;">15.0</span><span style="color: #000000;">)</span><br/>      <span style="color: #000000;">{</span><br/><br/>            ApplyAnimation<span style="color: #000000;">(</span>playerid, <span style="color: #000066;">"CRACK"</span>, <span style="color: #000066;">"crckdeth2"</span>, <span style="color: #000000;">4.0</span>, <span style="color: #000000;">1</span>, <span style="color: #000000;">0</span>, <span style="color: #000000;">0</span>, <span style="color: #000000;">0</span>, <span style="color: #000000;">0</span><span style="color: #000000;">)</span>;<br/>            TogglePlayerControllable<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">0</span><span style="color: #000000;">)</span>;<br/>            pIncosciente<span style="color: #000000;">[</span>playerid<span style="color: #000000;">]</span> <span style="color: #000000;">=</span> true;<br/>       <span style="color: #000000;">}</span><br/>       <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>
Oi <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>, esse codigo atй compila, mas na hora de testar, nao acontece nada, quando fica com 15 ou menos de life nao acontece nada <img alt="" border="0" class="inlineimg" src="images/smilies/sad.gif" title="Sad"/>. Se alguem me poder ajudar e explicar agradeco.<br />
<br />
OBS: Sou novato estou aprendendo nao me julguem rsrsrs(mentira, a vontade kk <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>)]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=236770">Krexx</a>]]></name>
		</author>
		<published>2020-08-06T19:37:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677990" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677990</id>
		<title xml:space="preserve"><![CDATA[[ENG|HVY] WoD Presents: VWH-RP (Roleplay as a Supernatural!)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677990"><![CDATA[<div align="center">
<br />
<br />
<b><font size="5"><font color="Black">______________________________________________</font></font></b><br />
<font color="black">Server Name</font>: Vampires, Werewolves And Humans Roleplay<br />
<font color="black">Address:</font> 51.75.71.41:7777<br />
<br />
<b><font size="5"><font color="Black">______________________________________________</font></font></b><br />
<div align="left"><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><img alt="" border="0" src="https://i.imgur.com/dx9JGYR.png"/><font size="8"><a href="http://vwh-rp.com" target="_blank">http://vwh-rp.com</a></font><br />
<img alt="" border="0" src="https://i.imgur.com/jZc8JqD.png"/><font size="8"><a href="https://discord.gg/SU86FEZ" target="_blank">https://discord.gg/SU86FEZ</a></font></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></div><b><font size="5"><font color="Black">______________________________________________</font></font></b><br />
<br />
<font size="6"><font face="Palatino Linotype">INTRODUCTION</font></font></div><i>The World of Darkness is two different lines of RPGs published by White Wolf and later Onyx Path that focus on deep role-playing and, depending on the specific sub-game, the horror genre. The setting can only be described as the modern world, but worse in every aspect. Every creeping suspicion you have is probably true, and the world is as dirty and corrupt as it often seems to be. In the old World of Darkness, each game was meant to be played separately; as a result the games often had conflicting metaplots and, despite using the same basic "Storyteller System", were incompatible when it came to various supernatural powers.</i><br />
<br />
Vampires, Werewolves And Humans Roleplay (formerly known as VHRP) has been around for over a decade. It was initially developed and managed by <b>Rudy</b>. We have an extremely large script that allows you to customize your characters in a fair and way that provides greater depth to your roleplay. This is done via Character Sheets, a system initially introduced in the WoD games. It allows you expend a limited amount of points and morph your character's traits in what you feel is an accurate representation of what it stands for. As you play the server, you will gain experience points which allow you to further increase your character traits. The combat system is usually solved via dicerolling. The in-built randomized system makes things fair for everyone, taking out admin bias and the usual "S/F?" arguments from a scenario. Given the hundreds of powers a player can learn for their character, such combat cannot be scripted, and therefore we opted for a tabletop similar system.<br />
<br />
<br />
The server recently relaunched under a new management and staff roster. The server revolves primarily around Angel Pine and boasts a small concurrent player-base of 15-25 on average.<br />
<br />
<div align="center"><a href="https://cdn.discordapp.com/attachments/269813135387525120/566010021926928403/collage2.png" target="_blank"><img alt="" border="0" src="https://i.imgur.com/QbB4yVK.png"/></a><br />
<font size="1">(Click above for a full scale image)</font><br />
<b><font size="5"><font color="Black">______________________________________________</font></font></b><br />
<br />
<div align="center"><font size="6"><font face="Palatino Linotype">PLAY A SUPERNATURAL</font></font></div>In VWH-RP, you will normally start off as a human. After you learn the system and are confident in your ability to portray a supernatural, you can either apply or donate for a number of races, which will take your roleplaying experience to the next level. Each race is based on a specific gameline from the World of Darkness series. This is by no means the extensive list of character types you can choose from. There's many more options and combinations to try. Check our website for more details!<br />
<br />
<b><u>Vampire: The Masquerade</u></b></div>Vampires are undead creatures. Presumably descendents of Caine, they refer to themselves as Kindred or Cainites and roamed the earth for centuries, hiding behind the curtains of major historical ploys. There are thirteen clans of vampires you can choose from, each with their own quirks, weaknesses and powers. Play a stereotypical Gangrel who can assume the form of bats or wolves like the infamous Dracula, or be a conniving businessman who controls entire cities from the shadows.<br />
<br />
<div align="center"><b><u>Werewolf: The Apocalypse &amp; Changing Breeds</u></b></div>Werewolves are a species of the shifting breeds. Thought to be created by Gaia, they are the sworn protectors of the earth and all that is pure in this world. They wage wars against vampires, demons and other creatures that would prey on humanity. Though war among themselves is not excluded, they are united by a strong sense of hatred for those who serve evil. Other than a Garou, you can portray a number of shifters. Wererats, serpents, bears and even creatures who can shift into human sized spiders.<br />
<br />
<div align="center"><b><u>Mage: The Ascension</u></b></div>The Enlightened, the awoken, the magi. These are your everyday humans who one day had an epiphany and realized there is much more to the world. They are scholars, warriors, or your everyday clerk. What defines them is their thirst for something more. They constantly strive to better themselves on their pursuit of enlightenment, and will more often than not spend their resources on learning and mastering new Spheres.<br />
<br />
<div align="center"><b><u>Hunter: The Reckoning</u></b></div>Hunters are mortals who in a fateful moment had an encounter with the so called "Messengers". These mysterious beings are supposedly the remaining Angels on Earth, and in an attempt to stave off the forces of evil, the imbue your character with power to fight the supernatural. With the power to ward yourself and your loved ones from those who lurk in the shadows, you must now choose how to approach this newly discovered threat.<br />
<br />
<div align="center"><b><u>Demon: The Fallen</u></b></div>The Fallen, also known as demons, are antagonistic characters who recently escaped from their prison. Their stay in Hell made them all go just the tiniest bit completely, murderously insane. After thousands of years the events of the metaplot caused the gates of the Hell that the fallen angels have been trapped in to crack open, allowing the Fallen to slip back to the world and find human hosts to inhabit to avoid falling into Hell again that, as a wonderful bonus also help them regain a bit of their lost sanity. Now the Fallen quarrel amongst themselves to figure out what to do next in the perversion of their creation that is the modern world where God and His angels are absent.<br />
<br />
<div align="center"><a href="https://cdn.discordapp.com/attachments/269813135387525120/566010539143069706/collage_1.png" target="_blank"><img alt="" border="0" src="https://i.imgur.com/0PzUXtb.png"/></a><br />
<font size="1">(Click above for a full scale image)</font><br />
<b><font size="5"><font color="Black">______________________________________________</font></font></b><br />
<font size="6"><font face="Palatino Linotype">FEATURES</font></font><br />
<b><u>STORYTELLERS</u></b></div>Storytellers are essential to driving plot forward, not only for your character but for others as well. Generally speaking, you will get free reign over your character's decisions and the path they wish to follow. The storyteller is there to design the consequences for your actions and relate them to you in a way that's immersive and fun for everyone involved. Thanks to the dicerolling system, their actions or verdicts are arbitrary, and the course of the action is more often than not decided by the throw of a single die. In Midnight Pulse, admins can temporarily give permissions to a regular player to spawn NPCs, map an area or create labels to enhance their story.<br />
<br />
<div align="center"><b><u>INTERACTIVE LAUNCHER</u></b></div>We have our own custom made launcher that allows you to easily install the cache and navigate the application process to easily set you up in-game. It also holds the events planning board along with quicklinks to other GTA prerequisites. <br />
<br />
<div align="center"><font size="1">Click the Image for a redirect to the download page.</font><br />
<a href="http://www.mediafire.com/file/khirne3h028oeeb/VWH-RP.exe/file" target="_blank"><img alt="" border="0" src="https://imgur.com/b9qxKtO.gif"/></a><br />
<br />
<br />
<b><u>SCRIPTED JOBS</u></b></div>There are two categories of jobs you can choose from. Start off as a legal fisherman, mechanic, repairman, lumberjack or deer hunter. These jobs are easy to get a hang of and are generally interactive enough to provided a fairly pleasant experience when trying to amass wealth. After you meet a level quota, you are able to become a car jacker, drug/blood salesman or arms dealer.<br />
<br />
<div align="center"><b><u>CUSTOM JOBS</u></b></div>If you are unsatisfied with the choices provided by the script, you are also able to apply for any custom job fitting your character. Lawyers, physicians, teachers, drivers and so on. You can get an appropriate salary and a function set to you, allowing you to fully immerse yourself in the career you chose for your character.<br />
<br />
<div align="center"><b><u>POWER LABELS</u></b></div>There are a number of scripted powers that you can gain access to via the labels system. For example, if your character has the Life sphere, Obeah discipline or a relevant Lore/Gift, you will be set the "Healing" label, which will allow you to heal yourself and other players with but a few buttons. There is also flight (wings), teleporation, heightened hearing, shapeshifting (turning into birds/animals) and so on.<br />
<br />
<div align="center"><b><u>CHARACTER SHEETS</u></b></div>As previously mentioned, at the creation of your character you are given a number of points to assign to your sheet. These points can be put into traits ranging from 1 to 5. The more points you put in a skill, the better your character is at performing tasks with that particular skillset. This will be reflected in your dicepools. Each dot in a specific skill will grant you 1 more die to roll against other players. For instance, your character is a hunter in the local woods. You assign Survival 2, Firearms 3, Wits 4 and Dexterity 2 to your sheet by using some of your points. You will use Wits + Survival (6 dice) to track down your prey, then shoot it with Dexterity + Firearms (5 dice). Depending on the successes gained on your roll, you will be able to define what happened. (I.e. shooting the heart precisely, or missing narrowly and hitting the hind legs of the deer, allowing it to try and escape).<br />
<br />
<div align="center"><b><u>LABELS</u></b></div>Players are able to get overhead labels that reflect a permanent trait or something specific to them so you don't have to constantly /do it. This allows players to instinctively know what's up before they even approach you, once again providing a small boost to roleplay and avoiding odd missinterpretations.<br />
<br />
<div align="center"><b><u>ROLEPLAY FEATURES</u></b></div>RPFs are a menu which allows you to set up to 64 lines of roleplay features specific to your character. You are able to apply on the forum for Merits, Flaws or Backgrounds, which further shape your character by granting it small quirks. You could make him an Addict to cigaretes, but he's also a brilliant doctor, which in turn will reflect with a decreased difficulty to your Medicine trait rolls. The system is intricate but not too hard to get a grasp on, and the moderator team can help you find what fits your character.<br />
<br />
<div align="center"><b><u>INTEREST RATES, TAXES &amp; INSURANCE</u></b></div>When depositing money in your bank account, you will notice that you slowly begin to amass more money. This is due to a small interest rate, providing you with 0,1% of your total bank account per paycheck on top of your salary. An amount of money is deduced from your businesses, houses and vehicles in the form of taxes. Of course, you can also commit fraud and never register your vehicles, but that's a risky endeavor. Aside from registering vehicles or getting custom plates for them, you are able to insure your vehicles. When destroyed, the vehicles will be repaired by your insurance company within a number of hours.  <br />
<br />
<div align="center"><b><u>HOUSES</u></b></div>Owning a property provides you with locker rooms for your belongings. When you have a stable address, either by renting or owning a house, your paychecks are earned faster. At the beginning you're placed in a motel, but can soon move out and make your own nest, just the way you love it. You can own from 1 to 4 houses, and can custom map them to your preference by buying ingame furniture, up to a total of 300 objects per property.<br />
<br />
<div align="center"><b><u>CUSTOM OBJECTS &amp; SKINS</u></b></div>The server is running on the 0.3.DL-R1 version of the game. This allowed us to import over 200 new textures comprised of skins (werewolves, birds) and objects (swords, guns, spears and so on) that allow you to further customize your character.<br />
<br />
<div align="center"><b><u>ACCESSORIES &amp; CUSTOM ITEMS</u></b></div>On top of having 4 to 7 accessory/toy slots, you can also get custom items, which when equipped spawn an additional accessory to reflect that item. Our inventory system allows you to create a near infinite amount of items, with a specific description, market price and accessory code. You could get a sword that fits your character, a specific weapon name or even something as trivial as a gas lighter that you have emotional ties to.<br />
<br />
<div align="center"><b><u>CHECK OUT THE REST!</u></b></div>This is merely the tip of the iceberg. There's a plethora of features that are designed to make the system immersive, the economy balanced and constantly fluctuating. Car glove compartments, lockers, looting/robbing system, dropping items, character description boxes, a custom health system, intercoms, very interactive phones with contact lists, SMS history, deer hunting, masks, NPC transportation and so much more...<br />
<br />
<b><font size="5"><font color="Black">______________________________________________</font></font></b><br />
<br />
If you have additional questions or want to learn more before diving in, don't hesitate to hop on our discord or register on the website!]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=336401">smith</a>]]></name>
		</author>
		<published>2020-08-06T16:50:00Z</published>
		<updated>2020-08-06T16:50:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677986" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677986</id>
		<title xml:space="preserve"><![CDATA[[Pedido] Consse]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677986"><![CDATA[Pago 10 reais em uma conce em dof2 zcmd explicando o funcionamento <br />
Quem puder me ajudar sou grato dкs de jб<br />
Eu consigo fazer o salvamento sу nгo tф conseguindo getar o carro]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=350615">ReturnZero</a>]]></name>
		</author>
		<published>2020-08-03T03:56:00Z</published>
		<updated>2020-08-03T03:56:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677896" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677896</id>
		<title xml:space="preserve"><![CDATA[Problema ao Ligar VPS linux]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677896"><![CDATA[Opa, beleza pessoal, se alguem puder me dar um auxilio para ligar o servidor, quando digito o comando "./samp03svr &amp;" aparece o seguinte erro:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">bash: ./samp03svr: No such file or directory</pre>
</div>O arquivo estб no diretorio.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=347823">FelipeSilvaGM</a>]]></name>
		</author>
		<published>2020-08-02T13:41:00Z</published>
		<updated>2020-08-02T13:41:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677885" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677885</id>
		<title xml:space="preserve"><![CDATA[[Pedido] "Dividir" String]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677885"><![CDATA[Olб, bom queria saber como "dividir" a string, jб procurei mas nгo achei<br />
Exemplo: Quando falar algo no chat<br />
<br />
Nick diz: Hoje o dia esta muito...<br />
... belo.<br />
<br />
Tipo isso, agradeзo desde jб <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=298276">xRadical3</a>]]></name>
		</author>
		<published>2020-08-02T10:39:00Z</published>
		<updated>2020-08-02T10:39:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677880" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677880</id>
		<title xml:space="preserve"><![CDATA[Npc driver is lagging]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677880"><![CDATA[Why are npc drivers so lagging when they ride? <br />
For example, they suddenly go into the water and then return to the road, or sometimes hit walls and something... <br />
Does anyone have experience? Is there a way to fix it?<br />
I use normal npc script.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
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
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=191337">BarbaNegra</a>]]></name>
		</author>
		<published>2020-07-31T01:49:00Z</published>
		<updated>2020-07-31T01:49:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677822" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677822</id>
		<title xml:space="preserve"><![CDATA[Breaking Desert Roleplay [Bone County Heavy RP]]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677822"><![CDATA[<div align="center"><img alt="" border="0" src="https://imgur.com/1rKt7Uw.jpg"/></div>
<br />
<b><font size="5"><div align="center"><font color="Blue"><font face="Courier New">Information</font></font></div></font></b><br />
<br />
<font size="4"><div align="center">Website: <a href="https://bdroleplay.xyz/" target="_blank">https://bdroleplay.xyz/</a><br />
Discord: <a href="https://discord.gg/aDWGDxT" target="_blank">https://discord.gg/aDWGDxT</a><br />
Server's IP: 51.178.170.254:7777</div></font><br />
<font size="4"><div align="center">Welcome to Breaking Desert Roleplay! We are a friendly medium-heavy roleplay server with a history imbedded deep within SA-MP's roots, with our loyal community we strive to bring a fun and friendly role play experience to everyone from beginners to veterans. Whether its a house you wanna own or a character you wanna portray, Breaking Desert offers an abundance of activities for you to complete at your own pace. So come on down and join the community and show us what you have to offer we are forever growing and welcoming newcomers with open arms.</div></font><br />
<br />
<br />
<b><font size="5"><font color="Blue"><div align="center"><font face="Courier New">Economy</font></div></font></font></b><br />
<br />
<font size="4"><div align="center">Our server has a more realistic economy than other servers. As for jobs, the server provides a lot of opportunities to the player and players can try a lot of different jobs on our server. Each job has its own salary and characteristics and players will not be disappointed</div></font><br />
<br />
<div align="center"><font size="5"><b><font color="Blue"><font face="Courier New">Jobs</font></font></b></font></div><i><div align="center">The server offers a lot of different jobs, some of these jobs are:</div></i><br />
<br />
<div align="center"><font size="4">Courier<br />
Mechanic<br />
Taxi Driver<br />
Cargo Unloader<br />
Miner<br />
Food Vendor<br />
Garbageman<br />
Package sorter</font></div>
<br />
<b><font size="5"><div align="center"><font face="Courier New"><font color="Blue">Factions</font></font></div></font></b><br />
<div align="center"><font size="4">The server contains a lot of interesting factions and services. Players have plenty of options, and choices as far as services are concerned, and one thing is for sure they won’t be disappointed.</font><br />
<font size="4"><br />
1. State Government - Responsibilities include schools, hospitals, conservation and environment, roads, railways and public transport, public works, agriculture and fishing, industrial relations, community services, sport and recreation, consumer affairs, police, prisons and emergency services.</font><br />
<br />
<font size="4">2. County Sheriff's Office - Sheriffs hold many duties in Bone County, these include operating prisons, courts, and standard law enforcement duties. The Sheriff's main duty is to protect every citizen of the county.</font><br />
<br />
<font size="4">3. County Emergency Medical Services - County Emergency Medical services operates throughout the Bone County providing direct and indirect health care to county residents</font><br />
<br />
<font size="4">4. HI-K69 News Agency -  Gathers, writes, and distributes various news to newspapers, periodicals, radio and television broadcasters, government agencies, and other users.</font><br />
<br />
<br />
<font size="4"><font color="Red">Note: We are looking for a leader for HI-K69 News Agency and Emergency Medical Services. If anybody is interesting in taking the leadership of those two factions may contact the faction moderator or server management.</font></font><br />
<br />
<br />
<i><b><font color="Blue"><font size="5">Server Art</font></font></b></i><br />
<br />
<div align="center"><font size="4">Community also provides art for our factions and organizations. Each faction has its own art and characteristic.</font></div>
<img alt="" border="0" src="https://imgur.com/XQD2WD5.jpg"/><br />
<img alt="" border="0" src="https://imgur.com/LZ1N2Lg.jpg"/><br />
<img alt="" border="0" src="https://imgur.com/N7qjIh6.jpg"/><br />
<img alt="" border="0" src="https://imgur.com/Py799oV.jpg"/><br />
<img alt="" border="0" src="https://imgur.com/ZCmpxRg.jpg"/><br />
<img alt="" border="0" src="https://imgur.com/Hg62GYV.jpg"/></div>
**Note: I'm doing a friend a favor, I have no relationship with the server.**]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=354020">ENCORE</a>]]></name>
		</author>
		<published>2020-07-28T05:33:00Z</published>
		<updated>2020-07-28T05:33:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=677751" />
		<id>https://sampforum.blast.hk/showthread.php?tid=677751</id>
		<title xml:space="preserve"><![CDATA[[MAP] Bar in Paysadas with street view.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=677751"><![CDATA[Hello, my name is Bulat. I am Russian myself, so please forgive me for my English.<br />
<br />
Objects: ~500<br />
<a href="https://radikal.ru" target="_blank"><img alt="" border="0" src="https://d.radikal.ru/d34/2007/c6/13a39a0cfe70.png"/></a><br />
<br />
<a href="https://radikal.ru" target="_blank"><img alt="" border="0" src="https://a.radikal.ru/a04/2007/9d/27903c2f10cb.png"/></a><br />
<br />
<a href="https://radikal.ru" target="_blank"><img alt="" border="0" src="https://a.radikal.ru/a40/2007/ad/65d874b81500.png"/></a><br />
<br />
<a href="https://radikal.ru" target="_blank"><img alt="" border="0" src="https://a.radikal.ru/a10/2007/a4/c368fa4b3f7e.png"/></a><br />
<br />
<a href="https://radikal.ru" target="_blank"><img alt="" border="0" src="https://b.radikal.ru/b27/2007/0c/0d6e7da957ce.png"/></a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
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
</feed>