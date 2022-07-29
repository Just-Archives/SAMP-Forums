<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[SA-MP Forums Archive - Português/Portuguese]]></title>
		<link>https://sampforum.blast.hk/</link>
		<description><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></description>
		<pubDate>Thu, 28 Jul 2022 21:00:21 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[[Ajuda] Sistema de Ficar Inconsciente  ;(]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=678145</link>
			<pubDate>Thu, 13 Aug 2020 20:22:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=338194">CUDECAMELO</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=678145</guid>
			<description><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:263px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> <span style="color: #000000;">bool</span><span style="color: #000000;">:</span>pIncosciente<span style="color: #000000;">[</span>MAX_PLAYER_NAME<span style="color: #000000;">]</span>;<br/><br/><span style="color: #2222BB;">public</span> OnPlayerStateChange<span style="color: #000000;">(</span>playerid, newstate, oldstate<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>      <span style="color: #2222BB;">new</span> <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>Vida;<br/>      GetPlayerHealth<span style="color: #000000;">(</span>playerid, Vida<span style="color: #000000;">)</span>;<br/>      <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>Vida <span style="color: #000000;">&lt;=</span> <span style="color: #000000;">15.0</span><span style="color: #000000;">)</span><br/>      <span style="color: #000000;">{</span><br/><br/>            ApplyAnimation<span style="color: #000000;">(</span>playerid, <span style="color: #000066;">"CRACK"</span>, <span style="color: #000066;">"crckdeth2"</span>, <span style="color: #000000;">4.0</span>, <span style="color: #000000;">1</span>, <span style="color: #000000;">0</span>, <span style="color: #000000;">0</span>, <span style="color: #000000;">0</span>, <span style="color: #000000;">0</span><span style="color: #000000;">)</span>;<br/>            TogglePlayerControllable<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">0</span><span style="color: #000000;">)</span>;<br/>            pIncosciente<span style="color: #000000;">[</span>playerid<span style="color: #000000;">]</span> <span style="color: #000000;">=</span> true;<br/>       <span style="color: #000000;">}</span><br/>       <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>
Oi <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>, esse codigo atй compila, mas na hora de testar, nao acontece nada, quando fica com 15 ou menos de life nao acontece nada <img alt="" border="0" class="inlineimg" src="images/smilies/sad.gif" title="Sad"/>. Se alguem me poder ajudar e explicar agradeco.<br />
<br />
OBS: Sou novato estou aprendendo nao me julguem rsrsrs(mentira, a vontade kk <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>)]]></description>
			<content:encoded><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:263px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> <span style="color: #000000;">bool</span><span style="color: #000000;">:</span>pIncosciente<span style="color: #000000;">[</span>MAX_PLAYER_NAME<span style="color: #000000;">]</span>;<br/><br/><span style="color: #2222BB;">public</span> OnPlayerStateChange<span style="color: #000000;">(</span>playerid, newstate, oldstate<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>      <span style="color: #2222BB;">new</span> <span style="color: #000000;">Float</span><span style="color: #000000;">:</span>Vida;<br/>      GetPlayerHealth<span style="color: #000000;">(</span>playerid, Vida<span style="color: #000000;">)</span>;<br/>      <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>Vida <span style="color: #000000;">&lt;=</span> <span style="color: #000000;">15.0</span><span style="color: #000000;">)</span><br/>      <span style="color: #000000;">{</span><br/><br/>            ApplyAnimation<span style="color: #000000;">(</span>playerid, <span style="color: #000066;">"CRACK"</span>, <span style="color: #000066;">"crckdeth2"</span>, <span style="color: #000000;">4.0</span>, <span style="color: #000000;">1</span>, <span style="color: #000000;">0</span>, <span style="color: #000000;">0</span>, <span style="color: #000000;">0</span>, <span style="color: #000000;">0</span><span style="color: #000000;">)</span>;<br/>            TogglePlayerControllable<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">0</span><span style="color: #000000;">)</span>;<br/>            pIncosciente<span style="color: #000000;">[</span>playerid<span style="color: #000000;">]</span> <span style="color: #000000;">=</span> true;<br/>       <span style="color: #000000;">}</span><br/>       <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>
Oi <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>, esse codigo atй compila, mas na hora de testar, nao acontece nada, quando fica com 15 ou menos de life nao acontece nada <img alt="" border="0" class="inlineimg" src="images/smilies/sad.gif" title="Sad"/>. Se alguem me poder ajudar e explicar agradeco.<br />
<br />
OBS: Sou novato estou aprendendo nao me julguem rsrsrs(mentira, a vontade kk <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>)]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Pedido] Consse]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677986</link>
			<pubDate>Thu, 06 Aug 2020 16:50:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=336401">smith</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677986</guid>
			<description><![CDATA[Pago 10 reais em uma conce em dof2 zcmd explicando o funcionamento <br />
Quem puder me ajudar sou grato dкs de jб<br />
Eu consigo fazer o salvamento sу nгo tф conseguindo getar o carro]]></description>
			<content:encoded><![CDATA[Pago 10 reais em uma conce em dof2 zcmd explicando o funcionamento <br />
Quem puder me ajudar sou grato dкs de jб<br />
Eu consigo fazer o salvamento sу nгo tф conseguindo getar o carro]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Problema ao Ligar VPS linux]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677896</link>
			<pubDate>Mon, 03 Aug 2020 03:56:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=350615">ReturnZero</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677896</guid>
			<description><![CDATA[Opa, beleza pessoal, se alguem puder me dar um auxilio para ligar o servidor, quando digito o comando "./samp03svr &amp;" aparece o seguinte erro:<br />
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
</div>O arquivo estб no diretorio.]]></description>
			<content:encoded><![CDATA[Opa, beleza pessoal, se alguem puder me dar um auxilio para ligar o servidor, quando digito o comando "./samp03svr &amp;" aparece o seguinte erro:<br />
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
</div>O arquivo estб no diretorio.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Pedido] "Dividir" String]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677885</link>
			<pubDate>Sun, 02 Aug 2020 13:41:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=347823">FelipeSilvaGM</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677885</guid>
			<description><![CDATA[Olб, bom queria saber como "dividir" a string, jб procurei mas nгo achei<br />
Exemplo: Quando falar algo no chat<br />
<br />
Nick diz: Hoje o dia esta muito...<br />
... belo.<br />
<br />
Tipo isso, agradeзo desde jб <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>]]></description>
			<content:encoded><![CDATA[Olб, bom queria saber como "dividir" a string, jб procurei mas nгo achei<br />
Exemplo: Quando falar algo no chat<br />
<br />
Nick diz: Hoje o dia esta muito...<br />
... belo.<br />
<br />
Tipo isso, agradeзo desde jб <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[COMPRA APK ANDROID]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677707</link>
			<pubDate>Sat, 25 Jul 2020 23:15:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=350615">ReturnZero</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677707</guid>
			<description><![CDATA[Pessoal, alguem sabe onde compro um apk top, Com AudioStream, RemoveBuildingForPlayer, localizei um site ai, porйm, o pessoal nem responde pra compra, ai gerou uma certa desconfianзa! Obs, que nгo seja o site tailandes <a href="http://sampapk.com/" target="_blank">http://sampapk.com/</a> . Se alguem souber, indica ai! : p]]></description>
			<content:encoded><![CDATA[Pessoal, alguem sabe onde compro um apk top, Com AudioStream, RemoveBuildingForPlayer, localizei um site ai, porйm, o pessoal nem responde pra compra, ai gerou uma certa desconfianзa! Obs, que nгo seja o site tailandes <a href="http://sampapk.com/" target="_blank">http://sampapk.com/</a> . Se alguem souber, indica ai! : p]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ajuda] Cmd deletar conta]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677636</link>
			<pubDate>Thu, 23 Jul 2020 10:25:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=285178">SkolPlay</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677636</guid>
			<description><![CDATA[Olб rapaizada!<br />
Bom estou fazendo um comando pra deletar contas do meu servidor, porйm eu queria saber qual funзгo eu posso utilizar para que a conta deletada seja enviada para pasta de contas deletadas, lembrando que o comando e o salvamento de conta do meu servidor й em dini]]></description>
			<content:encoded><![CDATA[Olб rapaizada!<br />
Bom estou fazendo um comando pra deletar contas do meu servidor, porйm eu queria saber qual funзгo eu posso utilizar para que a conta deletada seja enviada para pasta de contas deletadas, lembrando que o comando e o salvamento de conta do meu servidor й em dini]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ajuda] GivePlayerMoney]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677596</link>
			<pubDate>Tue, 21 Jul 2020 17:26:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=336401">smith</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677596</guid>
			<description><![CDATA[Estou fazendo um sistema de explodir caixa como faзo para hora do assaltante sair com malote ele sair com um valor aleatуrio? Tipo cada vez que ele rouba sai um valor aleatуrio de dinheiro]]></description>
			<content:encoded><![CDATA[Estou fazendo um sistema de explodir caixa como faзo para hora do assaltante sair com malote ele sair com um valor aleatуrio? Tipo cada vez que ele rouba sai um valor aleatуrio de dinheiro]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ajuda] erro compilar]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677218</link>
			<pubDate>Sun, 05 Jul 2020 16:03:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=323979">Aranha</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677218</guid>
			<description><![CDATA[gamemodes\CS.pwn(23085) : error 017: undefined symbol "tmp"<br />
gamemodes\CS.pwn(23085) : error 017: undefined symbol "strtok"<br />
<br />
linha do erro<br />
tmp = strtok(cmdtext,idx);<br />
<br />
isso e falta de include?<br />
<br />
#include a_samp.inc <br />
#include a_npc.inc <br />
#include a_http.inc<br />
#include bCini8.inc <br />
#include bCGz.inc <br />
#include streamer.inc<br />
#include mapandreas.inc]]></description>
			<content:encoded><![CDATA[gamemodes\CS.pwn(23085) : error 017: undefined symbol "tmp"<br />
gamemodes\CS.pwn(23085) : error 017: undefined symbol "strtok"<br />
<br />
linha do erro<br />
tmp = strtok(cmdtext,idx);<br />
<br />
isso e falta de include?<br />
<br />
#include a_samp.inc <br />
#include a_npc.inc <br />
#include a_http.inc<br />
#include bCini8.inc <br />
#include bCGz.inc <br />
#include streamer.inc<br />
#include mapandreas.inc]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ajuda] erro na include progress]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677128</link>
			<pubDate>Wed, 01 Jul 2020 00:46:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=263220">moura98</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677128</guid>
			<description><![CDATA[boa noite o erro й aparentemente dando conflito com as outras includes so que nao consigo resolver <br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 210px;
		text-align: left;
		overflow: auto">C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\DOF2.inc(1368) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\DOF2.inc(1526) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\sscanf2.inc(155) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\sscanf2.inc(199) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\foreach.inc(648) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\foreach.inc(757) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(83) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(107) : error 017: undefined symbol "AB_OnPlayerConnect"
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(120) : error 017: undefined symbol "AB_OnPlayerSpawn"
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(131) : error 017: undefined symbol "AB_OnPlayerDeath"
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(142) : warning 219: local variable "vehicleid" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(190) : error 017: undefined symbol "AB_OnPlayerUpdate"</pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 194px;
		text-align: left;
		overflow: auto">#include &lt; a_samp &gt;
#include &lt; DOF2 &gt;
#include &lt; sscanf2 &gt;
#include &lt; zcmd &gt;
#include &lt; streamer &gt;
#include &lt; a_http &gt;
#include &lt; foreach &gt;
#include &lt; a_zones &gt;
#include &lt; OPA &gt;

#include &lt;progress&gt; // essa include esta dando esses erros</pre>
</div>]]></description>
			<content:encoded><![CDATA[boa noite o erro й aparentemente dando conflito com as outras includes so que nao consigo resolver <br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 210px;
		text-align: left;
		overflow: auto">C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\DOF2.inc(1368) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\DOF2.inc(1526) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\sscanf2.inc(155) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\sscanf2.inc(199) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\foreach.inc(648) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\foreach.inc(757) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(83) : warning 219: local variable "i" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(107) : error 017: undefined symbol "AB_OnPlayerConnect"
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(120) : error 017: undefined symbol "AB_OnPlayerSpawn"
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(131) : error 017: undefined symbol "AB_OnPlayerDeath"
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(142) : warning 219: local variable "vehicleid" shadows a variable at a preceding level
C:\Users\Dan\Desktop\VidaSocialRP\pawno\include\OPA.inc(190) : error 017: undefined symbol "AB_OnPlayerUpdate"</pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 194px;
		text-align: left;
		overflow: auto">#include &lt; a_samp &gt;
#include &lt; DOF2 &gt;
#include &lt; sscanf2 &gt;
#include &lt; zcmd &gt;
#include &lt; streamer &gt;
#include &lt; a_http &gt;
#include &lt; foreach &gt;
#include &lt; a_zones &gt;
#include &lt; OPA &gt;

#include &lt;progress&gt; // essa include esta dando esses erros</pre>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Off] Duvidas sobre PlayerInfo e pJailed]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677119</link>
			<pubDate>Tue, 30 Jun 2020 19:23:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=351447">Kutucu</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677119</guid>
			<description><![CDATA[Quais sгo as funcoes do PlayerInfo e pJailed, tava estudando umas gm e vi que cada gm tem seu jeito, e nesses dois ai fiquei com duvidas]]></description>
			<content:encoded><![CDATA[Quais sгo as funcoes do PlayerInfo e pJailed, tava estudando umas gm e vi que cada gm tem seu jeito, e nesses dois ai fiquei com duvidas]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ajuda] Audiostream aparecer sу quando o player estiver dentro da cordenadas]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677116</link>
			<pubDate>Tue, 30 Jun 2020 18:40:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=333138">KoewBxBcraFt</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677116</guid>
			<description><![CDATA[Opa, eu queria que o PlayAudioStreamForPlayer aparecesse para todos que entrar na coord<img alt="" border="0" class="inlineimg" src="images/smilies/mad.gif" title="angry"/>,y,x, alcance do player e ao sair a mъsica para<br />
<br />
Link pastebin:<br />
<a href="https://pastebin.com/aQzQuLnf/?e=1" target="_blank">Pastebin</a>]]></description>
			<content:encoded><![CDATA[Opa, eu queria que o PlayAudioStreamForPlayer aparecesse para todos que entrar na coord<img alt="" border="0" class="inlineimg" src="images/smilies/mad.gif" title="angry"/>,y,x, alcance do player e ao sair a mъsica para<br />
<br />
Link pastebin:<br />
<a href="https://pastebin.com/aQzQuLnf/?e=1" target="_blank">Pastebin</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ajuda] ajuda ao ligar servidor na vps windows server 2012]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677086</link>
			<pubDate>Mon, 29 Jun 2020 15:11:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=243593">LocoGamer</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677086</guid>
			<description><![CDATA[quando o ligo servidor o servidor na vps da esse erro sendo que no pc liga normal<br />
<div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table border="0" cellpadding="6" cellspacing="0" width="100%">
<tr>
<td class="alt2" style="border: 1px solid #C2C2C2; font-size: 8pt;">
			<br />
				SA-MP Dedicated Server<br />
----------------------<br />
v0.3.7-R2, &copy;2005-2015 SA-MP Team<br />
<br />
[08:11:39] filterscripts = ""  (string)<br />
[08:11:39] <br />
[08:11:39] Server Plugins<br />
[08:11:39] --------------<br />
[08:11:39]  Loading plugin: crashdetect<br />
[08:11:39]   CrashDetect v4.18.1 is OK.<br />
[08:11:39]   Loaded.<br />
[08:11:39]  Loading plugin: xml<br />
[08:11:39]   Loaded.<br />
[08:11:39]  Loading plugin: sscanf<br />
[08:11:39] <br />
<br />
[08:11:39]  ===============================<br />
<br />
[08:11:39]       sscanf plugin loaded.     <br />
<br />
[08:11:39]          Version:  2.8.2        <br />
<br />
[08:11:39]    &copy; 2012 Alex "******" Cole  <br />
<br />
[08:11:39]  ===============================<br />
<br />
[08:11:39]   Loaded.<br />
[08:11:39]  Loading plugin: ColAndreas<br />
[08:11:39] *********************<br />
[08:11:39] ** Created By:     **<br />
[08:11:39] ** [uL]Chris42O    **<br />
[08:11:39] ** [uL]Slice       **<br />
[08:11:39] ** [uL]Pottus      **<br />
[08:11:39] *********************<br />
[08:11:42] Loaded collision data.<br />
[08:11:42] *********************<br />
[08:11:42]   ColAndreas Loaded<br />
[08:11:42]    v1.3.0<br />
[08:11:42] *********************<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: streamer<br />
[08:11:42]   Failed.<br />
[08:11:42]  Loading plugin: mysql<br />
[08:11:42]   Failed.<br />
[08:11:42]  Loading plugin: pawncmd<br />
[08:11:42] Pawn.CMD plugin v3.2.0 by urShadow has been loaded<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: Whirlpool<br />
[08:11:42]  <br />
[08:11:42]  ==================<br />
[08:11:42]  <br />
[08:11:42]   Whirlpool loaded<br />
[08:11:42]  <br />
[08:11:42]  ==================<br />
[08:11:42]  <br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: CTime<br />
[08:11:42]  <br />
 » CTime Library Plugin For Pawn v0.1.0 - Copyright © 2011 RyDeR` <br />
<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: pawnregex<br />
[08:11:42] Pawn.Regex plugin v1.1.1 by urShadow loaded<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: Audio<br />
[08:11:42] <br />
<br />
*** Audio Plugin v0.5 R2 by Incognito loaded ***<br />
<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: filemanager<br />
[08:11:42] ******************<br />
[08:11:42] ** FILE MANAGER **<br />
[08:11:42] **    Loaded    **<br />
[08:11:42] ** Version 1.5 **<br />
[08:11:42] ******************<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: iTD<br />
[08:11:42]   Failed.<br />
[08:11:42]  Loading plugin: TDE<br />
[08:11:42]   Failed.<br />
[08:11:42]  Loaded 10 plugins.<br />
<br />
[08:11:42] <br />
[08:11:42] Ban list<br />
[08:11:42] --------<br />
[08:11:42]  Loaded: samp.ban<br />
[08:11:42] <br />
[08:11:42] <br />
[08:11:42] Filterscripts<br />
[08:11:42] ---------------<br />
[08:11:42]   Loaded 0 filterscripts.<br />
<br />
[08:11:42] [debug] Run time error 19: "File or function is not found"<br />
[08:11:42] [debug]  cache_get_row_count<br />
[08:11:42] [debug]  DestroyDynamicObject<br />
[08:11:42] [debug]  CreateDynamicObject<br />
[08:11:42] [debug]  AttachDynamicObjectToVehicle<br />
[08:11:42] [debug]  IsValidDynamicObject<br />
[08:11:42] [debug]  CreateDynamic3DTextLabel<br />
[08:11:42] [debug]  DestroyDynamic3DTextLabel<br />
[08:11:42] [debug]  GetDynamicObjectPos<br />
[08:11:42] [debug]  GetDynamicObjectRot<br />
[08:11:42] [debug]  mysql_query<br />
[08:11:42] [debug]  cache_get_value_name_int<br />
[08:11:42] [debug]  cache_get_value_name<br />
[08:11:42] [debug]  mysql_format<br />
[08:11:42] [debug]  mysql_tquery<br />
[08:11:42] [debug]  UpdateDynamic3DTextLabelText<br />
[08:11:42] [debug]  SetDynamicObjectMaterial<br />
[08:11:42] [debug]  IsValidDynamicArea<br />
[08:11:42] [debug]  DestroyDynamicArea<br />
[08:11:42] [debug]  CreateDynamicCircle<br />
[08:11:42] [debug]  Streamer_SetArrayData<br />
[08:11:42] [debug]  AttachDynamicAreaToVehicle<br />
[08:11:42] [debug]  IsValidDynamic3DTextLabel<br />
[08:11:42] [debug]  CreateDynamicPickup<br />
[08:11:42] [debug]  IsPlayerInDynamicArea<br />
[08:11:42] [debug]  SetDynamicObjectMaterialText<br />
[08:11:42] [debug]  cache_insert_id<br />
[08:11:42] [debug]  EditDynamicObject<br />
[08:11:42] [debug]  CreateDynamicRectangle<br />
[08:11:42] [debug]  mysql_pquery<br />
[08:11:42] [debug]  Streamer_Update<br />
[08:11:42] [debug]  IsValidDynamicPickup<br />
[08:11:42] [debug]  DestroyDynamicPickup<br />
[08:11:42] [debug]  MoveDynamicObject<br />
[08:11:42] [debug]  IsDynamicObjectMoving<br />
[08:11:42] [debug]  IsValidDynamicActor<br />
[08:11:42] [debug]  DestroyDynamicActor<br />
[08:11:42] [debug]  CreateDynamicActor<br />
[08:11:42] [debug]  ApplyDynamicActorAnimation<br />
[08:11:42] [debug]  cache_get_value_name_float<br />
[08:11:42] [debug]  Streamer_GetArrayData<br />
[08:11:42] [debug]  IsValidDynamicMapIcon<br />
[08:11:42] [debug]  DestroyDynamicMapIcon<br />
[08:11:42] [debug]  mysql_init_options<br />
[08:11:42] [debug]  mysql_set_option<br />
[08:11:42] [debug]  mysql_connect<br />
[08:11:42] [debug]  mysql_log<br />
[08:11:42] [debug]  mysql_errno<br />
[08:11:42] [debug]  Streamer_TickRate<br />
[08:11:42] [debug]  CreateDynamicObjectEx<br />
[08:11:42] [debug]  CreateDynamicCP<br />
[08:11:42] [debug]  CreateDynamic3DTextLabelEx<br />
[08:11:42] [debug]  CreateDynamicMapIcon<br />
[08:11:42] [debug]  StopDynamicObject<br />
[08:11:42] [debug]  SetDynamicObjectPos<br />
[08:11:42] [debug]  SetDynamicObjectRot<br />
[08:11:42] [debug]  mysql_close<br />
[08:11:42] [debug] Run time error 19: "File or function is not found"<br />
[08:11:42] [debug]  cache_get_row_count<br />
[08:11:42] [debug]  DestroyDynamicObject<br />
[08:11:42] [debug]  CreateDynamicObject<br />
[08:11:42] [debug]  AttachDynamicObjectToVehicle<br />
[08:11:42] [debug]  IsValidDynamicObject<br />
[08:11:42] [debug]  CreateDynamic3DTextLabel<br />
[08:11:42] [debug]  DestroyDynamic3DTextLabel<br />
[08:11:42] [debug]  GetDynamicObjectPos<br />
[08:11:42] [debug]  GetDynamicObjectRot<br />
[08:11:42] [debug]  mysql_query<br />
[08:11:42] [debug]  cache_get_value_name_int<br />
[08:11:42] [debug]  cache_get_value_name<br />
[08:11:42] [debug]  mysql_format<br />
[08:11:42] [debug]  mysql_tquery<br />
[08:11:42] [debug]  UpdateDynamic3DTextLabelText<br />
[08:11:42] [debug]  SetDynamicObjectMaterial<br />
[08:11:42] [debug]  IsValidDynamicArea<br />
[08:11:42] [debug]  DestroyDynamicArea<br />
[08:11:42] [debug]  CreateDynamicCircle<br />
[08:11:42] [debug]  Streamer_SetArrayData<br />
[08:11:42] [debug]  AttachDynamicAreaToVehicle<br />
[08:11:42] [debug]  IsValidDynamic3DTextLabel<br />
[08:11:42] [debug]  CreateDynamicPickup<br />
[08:11:42] [debug]  IsPlayerInDynamicArea<br />
[08:11:42] [debug]  SetDynamicObjectMaterialText<br />
[08:11:42] [debug]  cache_insert_id<br />
[08:11:42] [debug]  EditDynamicObject<br />
[08:11:42] [debug]  CreateDynamicRectangle<br />
[08:11:42] [debug]  mysql_pquery<br />
[08:11:42] [debug]  Streamer_Update<br />
[08:11:42] [debug]  IsValidDynamicPickup<br />
[08:11:42] [debug]  DestroyDynamicPickup<br />
[08:11:42] [debug]  MoveDynamicObject<br />
[08:11:42] [debug]  IsDynamicObjectMoving<br />
[08:11:42] [debug]  IsValidDynamicActor<br />
[08:11:42] [debug]  DestroyDynamicActor<br />
[08:11:42] [debug]  CreateDynamicActor<br />
[08:11:42] [debug]  ApplyDynamicActorAnimation<br />
[08:11:42] [debug]  cache_get_value_name_float<br />
[08:11:42] [debug]  Streamer_GetArrayData<br />
[08:11:42] [debug]  IsValidDynamicMapIcon<br />
[08:11:42] [debug]  DestroyDynamicMapIcon<br />
[08:11:42] [debug]  mysql_init_options<br />
[08:11:42] [debug]  mysql_set_option<br />
[08:11:42] [debug]  mysql_connect<br />
[08:11:42] [debug]  mysql_log<br />
[08:11:42] [debug]  mysql_errno<br />
[08:11:42] [debug]  Streamer_TickRate<br />
[08:11:42] [debug]  CreateDynamicObjectEx<br />
[08:11:42] [debug]  CreateDynamicCP<br />
[08:11:42] [debug]  CreateDynamic3DTextLabelEx<br />
[08:11:42] [debug]  CreateDynamicMapIcon<br />
[08:11:42] [debug]  StopDynamicObject<br />
[08:11:42] [debug]  SetDynamicObjectPos<br />
[08:11:42] [debug]  SetDynamicObjectRot<br />
[08:11:42] [debug]  mysql_close<br />
[08:11:42] Script[gamemodes/gm.amx]: Run time error 19: "File or function is not found"<br />
[08:11:42] Number of vehicle models: 0<br />
			<br />
		</td>
</tr>
</table>
</div>]]></description>
			<content:encoded><![CDATA[quando o ligo servidor o servidor na vps da esse erro sendo que no pc liga normal<br />
<div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table border="0" cellpadding="6" cellspacing="0" width="100%">
<tr>
<td class="alt2" style="border: 1px solid #C2C2C2; font-size: 8pt;">
			<br />
				SA-MP Dedicated Server<br />
----------------------<br />
v0.3.7-R2, &copy;2005-2015 SA-MP Team<br />
<br />
[08:11:39] filterscripts = ""  (string)<br />
[08:11:39] <br />
[08:11:39] Server Plugins<br />
[08:11:39] --------------<br />
[08:11:39]  Loading plugin: crashdetect<br />
[08:11:39]   CrashDetect v4.18.1 is OK.<br />
[08:11:39]   Loaded.<br />
[08:11:39]  Loading plugin: xml<br />
[08:11:39]   Loaded.<br />
[08:11:39]  Loading plugin: sscanf<br />
[08:11:39] <br />
<br />
[08:11:39]  ===============================<br />
<br />
[08:11:39]       sscanf plugin loaded.     <br />
<br />
[08:11:39]          Version:  2.8.2        <br />
<br />
[08:11:39]    &copy; 2012 Alex "******" Cole  <br />
<br />
[08:11:39]  ===============================<br />
<br />
[08:11:39]   Loaded.<br />
[08:11:39]  Loading plugin: ColAndreas<br />
[08:11:39] *********************<br />
[08:11:39] ** Created By:     **<br />
[08:11:39] ** [uL]Chris42O    **<br />
[08:11:39] ** [uL]Slice       **<br />
[08:11:39] ** [uL]Pottus      **<br />
[08:11:39] *********************<br />
[08:11:42] Loaded collision data.<br />
[08:11:42] *********************<br />
[08:11:42]   ColAndreas Loaded<br />
[08:11:42]    v1.3.0<br />
[08:11:42] *********************<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: streamer<br />
[08:11:42]   Failed.<br />
[08:11:42]  Loading plugin: mysql<br />
[08:11:42]   Failed.<br />
[08:11:42]  Loading plugin: pawncmd<br />
[08:11:42] Pawn.CMD plugin v3.2.0 by urShadow has been loaded<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: Whirlpool<br />
[08:11:42]  <br />
[08:11:42]  ==================<br />
[08:11:42]  <br />
[08:11:42]   Whirlpool loaded<br />
[08:11:42]  <br />
[08:11:42]  ==================<br />
[08:11:42]  <br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: CTime<br />
[08:11:42]  <br />
 » CTime Library Plugin For Pawn v0.1.0 - Copyright © 2011 RyDeR` <br />
<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: pawnregex<br />
[08:11:42] Pawn.Regex plugin v1.1.1 by urShadow loaded<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: Audio<br />
[08:11:42] <br />
<br />
*** Audio Plugin v0.5 R2 by Incognito loaded ***<br />
<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: filemanager<br />
[08:11:42] ******************<br />
[08:11:42] ** FILE MANAGER **<br />
[08:11:42] **    Loaded    **<br />
[08:11:42] ** Version 1.5 **<br />
[08:11:42] ******************<br />
[08:11:42]   Loaded.<br />
[08:11:42]  Loading plugin: iTD<br />
[08:11:42]   Failed.<br />
[08:11:42]  Loading plugin: TDE<br />
[08:11:42]   Failed.<br />
[08:11:42]  Loaded 10 plugins.<br />
<br />
[08:11:42] <br />
[08:11:42] Ban list<br />
[08:11:42] --------<br />
[08:11:42]  Loaded: samp.ban<br />
[08:11:42] <br />
[08:11:42] <br />
[08:11:42] Filterscripts<br />
[08:11:42] ---------------<br />
[08:11:42]   Loaded 0 filterscripts.<br />
<br />
[08:11:42] [debug] Run time error 19: "File or function is not found"<br />
[08:11:42] [debug]  cache_get_row_count<br />
[08:11:42] [debug]  DestroyDynamicObject<br />
[08:11:42] [debug]  CreateDynamicObject<br />
[08:11:42] [debug]  AttachDynamicObjectToVehicle<br />
[08:11:42] [debug]  IsValidDynamicObject<br />
[08:11:42] [debug]  CreateDynamic3DTextLabel<br />
[08:11:42] [debug]  DestroyDynamic3DTextLabel<br />
[08:11:42] [debug]  GetDynamicObjectPos<br />
[08:11:42] [debug]  GetDynamicObjectRot<br />
[08:11:42] [debug]  mysql_query<br />
[08:11:42] [debug]  cache_get_value_name_int<br />
[08:11:42] [debug]  cache_get_value_name<br />
[08:11:42] [debug]  mysql_format<br />
[08:11:42] [debug]  mysql_tquery<br />
[08:11:42] [debug]  UpdateDynamic3DTextLabelText<br />
[08:11:42] [debug]  SetDynamicObjectMaterial<br />
[08:11:42] [debug]  IsValidDynamicArea<br />
[08:11:42] [debug]  DestroyDynamicArea<br />
[08:11:42] [debug]  CreateDynamicCircle<br />
[08:11:42] [debug]  Streamer_SetArrayData<br />
[08:11:42] [debug]  AttachDynamicAreaToVehicle<br />
[08:11:42] [debug]  IsValidDynamic3DTextLabel<br />
[08:11:42] [debug]  CreateDynamicPickup<br />
[08:11:42] [debug]  IsPlayerInDynamicArea<br />
[08:11:42] [debug]  SetDynamicObjectMaterialText<br />
[08:11:42] [debug]  cache_insert_id<br />
[08:11:42] [debug]  EditDynamicObject<br />
[08:11:42] [debug]  CreateDynamicRectangle<br />
[08:11:42] [debug]  mysql_pquery<br />
[08:11:42] [debug]  Streamer_Update<br />
[08:11:42] [debug]  IsValidDynamicPickup<br />
[08:11:42] [debug]  DestroyDynamicPickup<br />
[08:11:42] [debug]  MoveDynamicObject<br />
[08:11:42] [debug]  IsDynamicObjectMoving<br />
[08:11:42] [debug]  IsValidDynamicActor<br />
[08:11:42] [debug]  DestroyDynamicActor<br />
[08:11:42] [debug]  CreateDynamicActor<br />
[08:11:42] [debug]  ApplyDynamicActorAnimation<br />
[08:11:42] [debug]  cache_get_value_name_float<br />
[08:11:42] [debug]  Streamer_GetArrayData<br />
[08:11:42] [debug]  IsValidDynamicMapIcon<br />
[08:11:42] [debug]  DestroyDynamicMapIcon<br />
[08:11:42] [debug]  mysql_init_options<br />
[08:11:42] [debug]  mysql_set_option<br />
[08:11:42] [debug]  mysql_connect<br />
[08:11:42] [debug]  mysql_log<br />
[08:11:42] [debug]  mysql_errno<br />
[08:11:42] [debug]  Streamer_TickRate<br />
[08:11:42] [debug]  CreateDynamicObjectEx<br />
[08:11:42] [debug]  CreateDynamicCP<br />
[08:11:42] [debug]  CreateDynamic3DTextLabelEx<br />
[08:11:42] [debug]  CreateDynamicMapIcon<br />
[08:11:42] [debug]  StopDynamicObject<br />
[08:11:42] [debug]  SetDynamicObjectPos<br />
[08:11:42] [debug]  SetDynamicObjectRot<br />
[08:11:42] [debug]  mysql_close<br />
[08:11:42] [debug] Run time error 19: "File or function is not found"<br />
[08:11:42] [debug]  cache_get_row_count<br />
[08:11:42] [debug]  DestroyDynamicObject<br />
[08:11:42] [debug]  CreateDynamicObject<br />
[08:11:42] [debug]  AttachDynamicObjectToVehicle<br />
[08:11:42] [debug]  IsValidDynamicObject<br />
[08:11:42] [debug]  CreateDynamic3DTextLabel<br />
[08:11:42] [debug]  DestroyDynamic3DTextLabel<br />
[08:11:42] [debug]  GetDynamicObjectPos<br />
[08:11:42] [debug]  GetDynamicObjectRot<br />
[08:11:42] [debug]  mysql_query<br />
[08:11:42] [debug]  cache_get_value_name_int<br />
[08:11:42] [debug]  cache_get_value_name<br />
[08:11:42] [debug]  mysql_format<br />
[08:11:42] [debug]  mysql_tquery<br />
[08:11:42] [debug]  UpdateDynamic3DTextLabelText<br />
[08:11:42] [debug]  SetDynamicObjectMaterial<br />
[08:11:42] [debug]  IsValidDynamicArea<br />
[08:11:42] [debug]  DestroyDynamicArea<br />
[08:11:42] [debug]  CreateDynamicCircle<br />
[08:11:42] [debug]  Streamer_SetArrayData<br />
[08:11:42] [debug]  AttachDynamicAreaToVehicle<br />
[08:11:42] [debug]  IsValidDynamic3DTextLabel<br />
[08:11:42] [debug]  CreateDynamicPickup<br />
[08:11:42] [debug]  IsPlayerInDynamicArea<br />
[08:11:42] [debug]  SetDynamicObjectMaterialText<br />
[08:11:42] [debug]  cache_insert_id<br />
[08:11:42] [debug]  EditDynamicObject<br />
[08:11:42] [debug]  CreateDynamicRectangle<br />
[08:11:42] [debug]  mysql_pquery<br />
[08:11:42] [debug]  Streamer_Update<br />
[08:11:42] [debug]  IsValidDynamicPickup<br />
[08:11:42] [debug]  DestroyDynamicPickup<br />
[08:11:42] [debug]  MoveDynamicObject<br />
[08:11:42] [debug]  IsDynamicObjectMoving<br />
[08:11:42] [debug]  IsValidDynamicActor<br />
[08:11:42] [debug]  DestroyDynamicActor<br />
[08:11:42] [debug]  CreateDynamicActor<br />
[08:11:42] [debug]  ApplyDynamicActorAnimation<br />
[08:11:42] [debug]  cache_get_value_name_float<br />
[08:11:42] [debug]  Streamer_GetArrayData<br />
[08:11:42] [debug]  IsValidDynamicMapIcon<br />
[08:11:42] [debug]  DestroyDynamicMapIcon<br />
[08:11:42] [debug]  mysql_init_options<br />
[08:11:42] [debug]  mysql_set_option<br />
[08:11:42] [debug]  mysql_connect<br />
[08:11:42] [debug]  mysql_log<br />
[08:11:42] [debug]  mysql_errno<br />
[08:11:42] [debug]  Streamer_TickRate<br />
[08:11:42] [debug]  CreateDynamicObjectEx<br />
[08:11:42] [debug]  CreateDynamicCP<br />
[08:11:42] [debug]  CreateDynamic3DTextLabelEx<br />
[08:11:42] [debug]  CreateDynamicMapIcon<br />
[08:11:42] [debug]  StopDynamicObject<br />
[08:11:42] [debug]  SetDynamicObjectPos<br />
[08:11:42] [debug]  SetDynamicObjectRot<br />
[08:11:42] [debug]  mysql_close<br />
[08:11:42] Script[gamemodes/gm.amx]: Run time error 19: "File or function is not found"<br />
[08:11:42] Number of vehicle models: 0<br />
			<br />
		</td>
</tr>
</table>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ajuda] Sistema De Casas com bug]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677084</link>
			<pubDate>Mon, 29 Jun 2020 14:57:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=346686">OsamaBin</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677084</guid>
			<description><![CDATA[Quando eu inicio o meu servidor nao aparece as Casas criadas nem o 3DtextLabel mas se eu der o cmd /comprarcasa ele retira o dinheiro do mesmo sem ela estar ali.<br />
<br />
Codigo:<br />
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
<span style="color: #0000BB"></span><span style="color: #FF8000">//Topo Da Gm: 
<br/></span><span style="color: #007700">new </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_HOUSES</span><span style="color: #007700">][</span><span style="color: #0000BB">House</span><span style="color: #007700">], </span><span style="color: #0000BB">casaid</span><span style="color: #007700">;

<br/></span><span style="color: #0000BB">CriarCasa</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">34900</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">1324.2987</span><span style="color: #007700">,-</span><span style="color: #0000BB">1906.1194</span><span style="color: #007700">,</span><span style="color: #0000BB">23.0593</span><span style="color: #007700">); </span><span style="color: #FF8000">//OnGameModeInit 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Stock criar casa:<br />
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
<span style="color: #0000BB">stock CriarCasa</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">, </span><span style="color: #0000BB">valor</span><span style="color: #007700">, </span><span style="color: #0000BB">interior</span><span style="color: #007700">,</span><span style="color: #0000BB">level</span><span style="color: #007700">, </span><span style="color: #0000BB">Float</span><span style="color: #007700">: </span><span style="color: #0000BB">X</span><span style="color: #007700">, </span><span style="color: #0000BB">Float</span><span style="color: #007700">: </span><span style="color: #0000BB">Y</span><span style="color: #007700">, </span><span style="color: #0000BB">Float</span><span style="color: #007700">: </span><span style="color: #0000BB">Z</span><span style="color: #007700">)
<br/>{
<br/>        new </span><span style="color: #0000BB">s</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Numero</span><span style="color: #007700">] = </span><span style="color: #0000BB">id</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Valor</span><span style="color: #007700">] = </span><span style="color: #0000BB">valor</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Interior</span><span style="color: #007700">] = </span><span style="color: #0000BB">interior</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Plevel</span><span style="color: #007700">] = </span><span style="color: #0000BB">level</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Xc</span><span style="color: #007700">] = </span><span style="color: #0000BB">X</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">TemDono</span><span style="color: #007700">] = </span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Yc</span><span style="color: #007700">] = </span><span style="color: #0000BB">Y</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Zc</span><span style="color: #007700">] = </span><span style="color: #0000BB">Z</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">PickupX</span><span style="color: #007700">] = </span><span style="color: #0000BB">X</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">PickupY</span><span style="color: #007700">] = </span><span style="color: #0000BB">Y</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">PickupZ</span><span style="color: #007700">] = </span><span style="color: #0000BB">Z</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">s</span><span style="color: #007700">,</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">s</span><span style="color: #007700">), </span><span style="color: #DD0000">"{FFFFFF}Valor:{FF0000} %d\n{FFFFFF}Numero:{ff0000} %d\n{ffffff}Nivel:{FF0000}%d"</span><span style="color: #007700">, </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Valor</span><span style="color: #007700">], </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Numero</span><span style="color: #007700">], </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Plevel</span><span style="color: #007700">]);
<br/>        </span><span style="color: #0000BB">Comprado</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">] = </span><span style="color: #0000BB">CreateDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">s</span><span style="color: #007700">, </span><span style="color: #0000BB">Vermelho</span><span style="color: #007700">, </span><span style="color: #0000BB">X</span><span style="color: #007700">, </span><span style="color: #0000BB">Y</span><span style="color: #007700">, </span><span style="color: #0000BB">Z</span><span style="color: #007700">, </span><span style="color: #0000BB">30.0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">);
<br/>        
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>]]></description>
			<content:encoded><![CDATA[Quando eu inicio o meu servidor nao aparece as Casas criadas nem o 3DtextLabel mas se eu der o cmd /comprarcasa ele retira o dinheiro do mesmo sem ela estar ali.<br />
<br />
Codigo:<br />
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
<span style="color: #0000BB"></span><span style="color: #FF8000">//Topo Da Gm: 
<br/></span><span style="color: #007700">new </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_HOUSES</span><span style="color: #007700">][</span><span style="color: #0000BB">House</span><span style="color: #007700">], </span><span style="color: #0000BB">casaid</span><span style="color: #007700">;

<br/></span><span style="color: #0000BB">CriarCasa</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">34900</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">1324.2987</span><span style="color: #007700">,-</span><span style="color: #0000BB">1906.1194</span><span style="color: #007700">,</span><span style="color: #0000BB">23.0593</span><span style="color: #007700">); </span><span style="color: #FF8000">//OnGameModeInit 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Stock criar casa:<br />
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
<span style="color: #0000BB">stock CriarCasa</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">, </span><span style="color: #0000BB">valor</span><span style="color: #007700">, </span><span style="color: #0000BB">interior</span><span style="color: #007700">,</span><span style="color: #0000BB">level</span><span style="color: #007700">, </span><span style="color: #0000BB">Float</span><span style="color: #007700">: </span><span style="color: #0000BB">X</span><span style="color: #007700">, </span><span style="color: #0000BB">Float</span><span style="color: #007700">: </span><span style="color: #0000BB">Y</span><span style="color: #007700">, </span><span style="color: #0000BB">Float</span><span style="color: #007700">: </span><span style="color: #0000BB">Z</span><span style="color: #007700">)
<br/>{
<br/>        new </span><span style="color: #0000BB">s</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Numero</span><span style="color: #007700">] = </span><span style="color: #0000BB">id</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Valor</span><span style="color: #007700">] = </span><span style="color: #0000BB">valor</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Interior</span><span style="color: #007700">] = </span><span style="color: #0000BB">interior</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Plevel</span><span style="color: #007700">] = </span><span style="color: #0000BB">level</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Xc</span><span style="color: #007700">] = </span><span style="color: #0000BB">X</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">TemDono</span><span style="color: #007700">] = </span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Yc</span><span style="color: #007700">] = </span><span style="color: #0000BB">Y</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Zc</span><span style="color: #007700">] = </span><span style="color: #0000BB">Z</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">PickupX</span><span style="color: #007700">] = </span><span style="color: #0000BB">X</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">PickupY</span><span style="color: #007700">] = </span><span style="color: #0000BB">Y</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">PickupZ</span><span style="color: #007700">] = </span><span style="color: #0000BB">Z</span><span style="color: #007700">;
<br/>        </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">s</span><span style="color: #007700">,</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">s</span><span style="color: #007700">), </span><span style="color: #DD0000">"{FFFFFF}Valor:{FF0000} %d\n{FFFFFF}Numero:{ff0000} %d\n{ffffff}Nivel:{FF0000}%d"</span><span style="color: #007700">, </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Valor</span><span style="color: #007700">], </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Numero</span><span style="color: #007700">], </span><span style="color: #0000BB">Casa</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">][</span><span style="color: #0000BB">Plevel</span><span style="color: #007700">]);
<br/>        </span><span style="color: #0000BB">Comprado</span><span style="color: #007700">[</span><span style="color: #0000BB">casaid</span><span style="color: #007700">] = </span><span style="color: #0000BB">CreateDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">s</span><span style="color: #007700">, </span><span style="color: #0000BB">Vermelho</span><span style="color: #007700">, </span><span style="color: #0000BB">X</span><span style="color: #007700">, </span><span style="color: #0000BB">Y</span><span style="color: #007700">, </span><span style="color: #0000BB">Z</span><span style="color: #007700">, </span><span style="color: #0000BB">30.0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">);
<br/>        
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Off] Diferenзa das abas]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677016</link>
			<pubDate>Sat, 27 Jun 2020 13:15:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=351447">Kutucu</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677016</guid>
			<description><![CDATA[Olб rapaziada.<br />
Queria saber a diferenзa da aba hosted e da internet ?<br />
Ambas sгo pagas?]]></description>
			<content:encoded><![CDATA[Olб rapaziada.<br />
Queria saber a diferenзa da aba hosted e da internet ?<br />
Ambas sгo pagas?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ajuda] Problema ao iniciar]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677007</link>
			<pubDate>Fri, 26 Jun 2020 23:26:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=324194">AztecaJr</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677007</guid>
			<description><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 242px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Server marked </span><span style="color: #007700">as </span><span style="color: #0000BB">STARTING
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Checking size of server data directory</span><span style="color: #007700">...
<br/>[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Disk Usage</span><span style="color: #007700">: </span><span style="color: #0000BB">22M </span><span style="color: #007700">/ </span><span style="color: #0000BB">5000M
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Ensuring correct ownership of files</span><span style="color: #007700">.
<br/>[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Running server preflight</span><span style="color: #007700">.
<br/>[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Starting server container</span><span style="color: #007700">.
<br/>:/</span><span style="color: #0000BB">home</span><span style="color: #007700">/</span><span style="color: #0000BB">container</span><span style="color: #007700">&#36; ./</span><span style="color: #0000BB">samp03svr
<br/></span><span style="color: #007700">/</span><span style="color: #0000BB">entrypoint</span><span style="color: #007700">.</span><span style="color: #0000BB">sh</span><span style="color: #007700">: </span><span style="color: #0000BB">line 12</span><span style="color: #007700">: ./</span><span style="color: #0000BB">samp03svr</span><span style="color: #007700">: </span><span style="color: #0000BB">Permission denied
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Server marked </span><span style="color: #007700">as </span><span style="color: #0000BB">OFF
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] ---------- </span><span style="color: #0000BB">Detected server process in a crashed state</span><span style="color: #007700">! ----------
<br/>[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] Exit </span><span style="color: #0000BB">Code</span><span style="color: #007700">: </span><span style="color: #0000BB">126
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Out of Memory</span><span style="color: #007700">: </span><span style="color: #0000BB">false
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Error Response</span><span style="color: #007700">:
<br/>[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Aborting automatic reboot due to crash within the last 60 seconds</span><span style="color: #007700">. 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Alguйm sabe o que й?]]></description>
			<content:encoded><![CDATA[<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 242px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Server marked </span><span style="color: #007700">as </span><span style="color: #0000BB">STARTING
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Checking size of server data directory</span><span style="color: #007700">...
<br/>[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Disk Usage</span><span style="color: #007700">: </span><span style="color: #0000BB">22M </span><span style="color: #007700">/ </span><span style="color: #0000BB">5000M
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Ensuring correct ownership of files</span><span style="color: #007700">.
<br/>[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Running server preflight</span><span style="color: #007700">.
<br/>[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Starting server container</span><span style="color: #007700">.
<br/>:/</span><span style="color: #0000BB">home</span><span style="color: #007700">/</span><span style="color: #0000BB">container</span><span style="color: #007700">&#36; ./</span><span style="color: #0000BB">samp03svr
<br/></span><span style="color: #007700">/</span><span style="color: #0000BB">entrypoint</span><span style="color: #007700">.</span><span style="color: #0000BB">sh</span><span style="color: #007700">: </span><span style="color: #0000BB">line 12</span><span style="color: #007700">: ./</span><span style="color: #0000BB">samp03svr</span><span style="color: #007700">: </span><span style="color: #0000BB">Permission denied
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Server marked </span><span style="color: #007700">as </span><span style="color: #0000BB">OFF
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] ---------- </span><span style="color: #0000BB">Detected server process in a crashed state</span><span style="color: #007700">! ----------
<br/>[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] Exit </span><span style="color: #0000BB">Code</span><span style="color: #007700">: </span><span style="color: #0000BB">126
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Out of Memory</span><span style="color: #007700">: </span><span style="color: #0000BB">false
<br/></span><span style="color: #007700">[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Error Response</span><span style="color: #007700">:
<br/>[</span><span style="color: #0000BB">NODEPANEL</span><span style="color: #007700">] </span><span style="color: #0000BB">Aborting automatic reboot due to crash within the last 60 seconds</span><span style="color: #007700">. 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Alguйm sabe o que й?]]></content:encoded>
		</item>
	</channel>
</rss>