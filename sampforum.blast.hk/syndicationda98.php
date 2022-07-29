<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[SA-MP Forums Archive - Showroom]]></title>
	<subtitle type="html"><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></subtitle>
	<link rel="self" href="https://sampforum.blast.hk/syndication.php"/>
	<id>https://sampforum.blast.hk/</id>
	<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/"/>
	<updated>2022-07-29T03:05:31Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=246223">TheArrow</a>]]></name>
		</author>
		<published>2015-11-15T07:32:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=594242" />
		<id>https://sampforum.blast.hk/showthread.php?tid=594242</id>
		<title xml:space="preserve"><![CDATA[[Tool/Web/Other] SA:MP Launcher [Bis]]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=594242"><![CDATA[Salut а tous,<br />
<br />
je poste aujourd'hui afin d'annoncer et d'expliquer un projet inspirй des idйes de Papawy et S4t3k (leurs projet йtant interrompu).<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Quel est le principe ?</span><br />
<br />
J'ai vraiment bien aimй le principe et donc pour le moment j'ai dйcidй de commencer а dйvelopper un simple launcher ayant les mкmes caractйristiques que le launcher de base а l’exception prкt qu'il vous sera possible de tйlйcharger du contenu venant de ce dernier (.txd, .img, .asi ect...) ensuite au fil des mises а jour il sera possible d'approfondir dans l'optique de l'ancien projet.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Comment rйcupйrer les fichiers (img, txd ect...) du serveur ?</span><br />
<br />
Pour rйcupйrer les fichiers le client va faire une requкte HTTP а l'adresse suivante: <span style="font-weight: bold;" class="mycode_b">weburl</span>/sLauncher<br />
<br />
weburl йtant l'url menant vers le site que vous spйcifiй dans server.cfg.<br />
<br />
Les formats de tйlйchargement seront les suivantes: zip, tar, gz, rar.<br />
<br />
Si le serveur ne met aucun fichier а cet url, vous vous connecterez de faзon classique.<br />
<br />
Une backup de vos fichiers sera automatiquement faites avec une restauration а la dйconnexion.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Qu'est ce qui est fait ?</span><br />
<br />
Pour le moment j'ai commencй la partie design avec la connexion au serveur SA:MP qui pose encore soucis.<br />
J'ai aussi rйcupйrer la liste hosted + internet (merci wireshark), plus qu'а faire une requкte HTTP pour rйcupйrer les IP.<br />
<br />
Je vais mettre le projet sur Github dans l'aprиs-midi.<br />
<br />
Pour finir, j'ai essayй de faire en sorte que ce launcher puisse fonctionner pour chaque serveur, d'ou le fait que j'impose un url de tйlйchargement.<br />
<br />
Voici un petit aperзu en piиce jointe du launcher pour le moment (c'est vraiment plus compliquй que ce que je pensais le design avec windows Form)<br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Projet:</span> <a href="https://github.com/SAMP-TheArrow/sLauncher-0.3.7" target="_blank" rel="noopener" class="mycode_url">https://github.com/SAMP-TheArrow/sLauncher-0.3.7</a><br />
<br />
J'attends vos avis :)]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=238036">Dutheil</a>]]></name>
		</author>
		<published>2015-11-10T20:03:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=593875" />
		<id>https://sampforum.blast.hk/showthread.php?tid=593875</id>
		<title xml:space="preserve"><![CDATA[[Tutorial] L'assembleur (#emit) - Partie 3]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=593875"><![CDATA[[CENTER][SIZE="6"]<span style="text-decoration: underline;" class="mycode_u">[COLOR="RoyalBlue"]<span style="font-weight: bold;" class="mycode_b">L'assembleur (#emit) - Partie 3</span>[/COLOR]</span>[/SIZE]<br />
Suite du tutoriel sur la maоtrise de l'assembleur en Pawn avec la directive #emit.<br />
Nous verrons les diffйrentes adresses et comment les obtenir.[/CENTER]<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">[SIZE="4"]Initiation:[/SIZE]</span></span><br />
Petite dйfinition de Wikipйdia pour commencer :<br />
<blockquote class="mycode_quote"><cite>Wikipйdia Wrote:</cite>L’adressage mйmoire est, en йlectronique et informatique, la faзon dont sont accйdйes des donnйes stockйes en mйmoire. Une adresse mйmoire est un nombre entier naturel (rarement une autre sorte d'identifiant) qui dйsigne une zone particuliиre de la mйmoire, ou juste le dйbut d'une zone. Le plus souvent, une donnйe peut кtre lue ou йcrite. La mйmoire peut кtre temporaire (mйmoire vive) pour le travail ou au contraire durable (mйmoire non volatile) pour le stockage.</blockquote><br />
Зa nous parle donc d'adresses et de mйmoires. Comme je vous l'ai dit dans les premiers tutoriels, vous avez diffйrents registres, certains sont considйrйs comme des mйmoires temporaires, leur valeur change souvent durant l'exйcution du programme, d'autres ne changent pas.<br />
Nous saurons dans ce tutoriel quels registres stockent les adresses ou pointeurs d'adresses importantes et surtout vers quoi ces adresses pointent.<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">[SIZE="3"]Adresse locale:[/SIZE]</span></span>[INDENT]Si vous avez dйjа compilй votre code avec la sortie '-a', vous avez donc pu remarquer dans votre fichier .asm, qu'а la ligne de votre variable, s'y joint une valeur hexadйcimale.<br />
C'est en rйalitй une adresse locale.<br />
<br />
Il y a deux types d'adresses locales :<br />
- L'adresse locale de variable locale -&#x26;t est toujours une valeur nйgative.<br />
- L'adresse locale de paramиtres d'une fonction -&#x26;t est toujours une valeur positive.<br />
<br />
Prenons par exemple ce code :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;"a_samp"<br /><br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">func</span><span style="color: #007700">(</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">func</span><span style="color: #007700">(</span><span style="color: #0000BB">c</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">d</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#pragma&nbsp;unused&nbsp;c,&nbsp;d<br /></span><span style="color: #007700">}&nbsp;<br /></span></code></div></div></div><br />
Nous avons donc deux variables locales dйclarйes dans la fonction "main", nommйes "a" et "b", qui sont passйs en arguments dans la fonction "func". <br />
Notre fonction "func" contient deux paramиtres, "c" et "d".<br />
<br />
Derniиre nos "a" et "b" nous aurons donc 2 adresses locales nйgatives car ce sont des variables locales.<br />
Et derriиre nos "c" et "d" nous aurons donc 2 adresses locales positives car ce sont des paramиtres de fonction.<br />
<br />
Compilons en sortie '-a' et regardons de plus prиs nos adresses :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">proc&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">main<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">;</span><span style="color: #0000BB">&#36;lcl&nbsp;a&nbsp;fffffffc<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">;</span><span style="color: #0000BB">&#36;lcl&nbsp;b&nbsp;fffffff8<br /><br />proc&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">func<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">;</span><span style="color: #0000BB">&#36;lcl&nbsp;d&nbsp;10<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">;</span><span style="color: #0000BB">&#36;lcl&nbsp;c&nbsp;c&nbsp;<br /></span></code></div></div></div><br />
J'ai volontairement laissй les "proc" pour que vous vous y retrouviez.<br />
En utilisant ce site <a href="http://www.mathsisfun.com/binary-decimal-hexadecimal-converter.html" target="_blank" rel="noopener" class="mycode_url">http://www.mathsisfun.com/binary-decimal...erter.html</a>, vous pouvez convertir de l’hexadйcimale vers du dйcimale en respectant le type <span style="font-weight: bold;" class="mycode_b">signed 32 bits</span>.<br />
<br />
Je n'ai pas besoin d'utiliser ce site pour vous dire que l'adresse locale de la variable :<br />
a = -4<br />
b = -8<br />
<br />
c = 12<br />
d = 16<br />
<br />
Pourquoi ? Une simple habitude que vous devrez avoir.<br />
Comme je vous l'ai dit, vous pouvez constater des valeurs positives et nйgatives pour nos adresses.<br />
Ce qu'il faut donc savoir, c'est que l'adresse locale de la premiиre variable locale dans votre fonction sera -4.<br />
Pour les suivantes, vous n'aurez plus qu'а soustraire par 4. (-4, -8, -12, -16, -20...)<br />
<br />
Pour les adresses locales dans nos fonctions, c'est diffйrent, nous avons nos valeurs positives qui commencent а 12.<br />
Nous verrons dans d'autres tutoriels ce que renferme les valeurs 0, 4 et 8 de nos fonctions.<br />
Donc l'adresse locale de n'autre premier paramиtre de fonction sera 12, pour la suite il faut y ajouter 4 а chaque fois. (12, 16, 20 24, 28, 32...).<br />
<br />
Il y a une mйthode pour charger l'adresse locale d'une variable ou d'un paramиtre de fonction dans un registre temporaire (primaire ou alternй si vous avez oubliй).<br />
<br />
Pour зa nous utiliserons le p-code CONST.pri/alt.<br />
Ce p-code permet de charger une constante dans un registre temporaire.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#emit&nbsp;CONST.pri&nbsp;5&nbsp;<br /></span></code></div></div></div>Ici je charge la valeur 5 dans le registre temporaire.<br />
<br />
Mais les adresses locales sont considйrйes comme des constantes, on peut donc passer en paramиtre du p-code une variable.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;"a_samp"<br /><br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#emit&nbsp;CONST.pri&nbsp;a<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;STOR.S.pri&nbsp;a<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;|&nbsp;0x%x"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Si vous avez compris, vous saurez que зa nous affichera : -4 | 0xFFFFFFFC.<br />
Si vous ne comprenez pas, n'hйsitez pas а relire cette partie, ne cherchez pas а comprendre а quoi зa sert pour le moment, retenez juste зa et pensez а essayer le p-code CONST dans d'autres cas.[/INDENT]<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">[SIZE="3"]Adresse relative:[/SIZE]</span></span>[INDENT]Si vous vous souvenez du Frame Pointer, vous pouvez continuer de lire, sinon, relisez le tutoriel prйcйdent.<br />
<br />
L'adresse relative permet tout simplement de pointer vers une autre adresse pour rйcupйrer la valeur d'une variable ("Adresse globale" appelйe aussi "adresse de la valeur").<br />
<br />
Pour obtenir l'adresse relative d'une variable, il y a 2 solutions avec des p-codes, je vais vous montrer la plus "compliquйe" pour que vous compreniez la plus simple.<br />
<br />
L'adresse relative d'une variable est composйe du frame pointer + l'adresse locale de la variable.<br />
En 4 йtapes :<br />
On charge le Frame Pointer dans le registre primaire, зa vous savez pas encore le faire, mais зa vient.<br />
On charge l'adresse locale d'une variable locale dans le registre alternй, vous savez faire.<br />
On additionne le registre alternй avec le registre primaire, vous savez faire.<br />
On stocke la valeur du registre primaire dans une autre variable locale, vous savez faire.<br />
<br />
Donc vous savez а 75% faire tout зa, il faut donc que je vous apprenne а charger dans le registre primaire le Frame Pointer. <br />
Le p-code pour зa est LCTRL, il permet de charger dans le registre primaire des mйmoires indiquйes en paramиtre.<br />
Les mйmoires sont numйrotйes de 0 а 6.<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>0 -&amp;gt; Le segment CODE<br />
1 -&amp;gt; Le segment DATA<br />
2 -&amp;gt; Le Heap<br />
3 -&amp;gt; Le Stack Top<br />
4 -&amp;gt; Le Stack<br />
5 -&amp;gt; Le Frame Pointer<br />
6 -&amp;gt; Le CIP (Code Instruction Pointer pour ceux qui auraient oubliйs)</code></div></div><br />
Vous savez maintenant charger le FRM dans le registre primaire.<br />
Tenter de stocker l'adresse relative de la variable "a" dans le variable "relative_address" :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;"a_samp"<br /><br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;|&nbsp;0x%x"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
A tout de suite !<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
Donc, si vous кtes lа c'est que vous avez tentй (ou pas) de faire le code demandй et que vous voulez la suite de ce tutoriel.<br />
<br />
Voici le code correct :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;"a_samp"<br /><br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#emit&nbsp;LCTRL&nbsp;5<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;CONST.alt&nbsp;a<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;ADD<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;STOR.S.pri&nbsp;relative_address<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;|&nbsp;0x%x"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Mais je peux vous dire qu'il y a moyen de simplifier ce code ici :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#emit&nbsp;CONST.alt&nbsp;a<br />#emit&nbsp;ADD&nbsp;<br /></span></code></div></div></div>Grвce au p-code : ADD.C<br />
Il permet de charger une constante et l'additionner avec le registre primaire.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;"a_samp"<br /><br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#emit&nbsp;LCTRL&nbsp;5<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;ADD.C&nbsp;a<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;STOR.S.pri&nbsp;relative_address<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;|&nbsp;0x%x"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Pfiou un p-code en moins !<br />
Mais si je vous dis que l'on peut encore diminuer d'un p-code !<br />
Oui, souvenez-vous je vous parlais de la mйthode simple, elle fonctionne simplement en utilisant le p-code ADDR.pri/alt qui charge l'adresse relative d'une variable dans le registre indiquй.<br />
<br />
En pratique :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;"a_samp"<br /><br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#emit&nbsp;ADDR.pri&nbsp;a<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;STOR.S.pri&nbsp;relative_address<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;|&nbsp;0x%x"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">relative_address</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Et voilа, vous savez rйcupйrer l'adresse relative d'une variable et vous comprenez dans quel cas vous pouvez utiliser l'adresse locale d'une variable.[/INDENT]<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">[SIZE="3"]Adresse globale:[/SIZE]</span></span>[INDENT]L'adresse globale est l'adresse а laquelle est stockйe vйritablement la valeur dans la [URL="https://fr.wikipedia.org/wiki/M%C3%A9moire_vive"]mйmoire vive[/URL].<br />
<br />
Prenons une variable nommйe "a" stockant la valeur 5533.<br />
L'adresse globale ayant la valeur 5533 peut-кtre obtenue а partir de l'adresse relative de la variable "a" en l'additionnant а un segment. Mais lequel ?<br />
Ca va vous choquer si je vous dis que c'est le segment DATA ? Et pourtant si.<br />
Je vous expliquerai dans un autre tutoriel pourquoi.<br />
<br />
Contentons-nous de la rйcupйrer et la stocker dans une variable. <br />
Je vous redonne ceci : <br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>0 -&amp;gt; Le segment CODE<br />
1 -&amp;gt; Le segment DATA<br />
2 -&amp;gt; Le Heap<br />
3 -&amp;gt; Le Stack Top<br />
4 -&amp;gt; Le Stack<br />
5 -&amp;gt; Le Frame Pointer<br />
6 -&amp;gt; Le CIP (Code Instruction Pointer pour ceux qui auraient oubliйs)</code></div></div><br />
Vous кtes normalement capable de me rйsoudre ce code :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;"a_samp"<br /><br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">global_address</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;|&nbsp;0x%x"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">global_address</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">global_address</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
A tout de suite :mrgreen:<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
Ah vous кtes dйjа lа ? Vous avez fini ? Trиs bien, comparons nos codes ! :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;"a_samp"<br /><br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">global_address</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#emit&nbsp;LCTRL&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;ADDR.alt&nbsp;a<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;ADD<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;STOR.S.pri&nbsp;global_address<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;|&nbsp;0x%x"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">global_address</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">global_address</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Vous avez bon ? Tant mieux, vous кtes sur la bonne voie de l'apprentissage de l'assembleur.<br />
Dans le cas contraire, n'hйsitez pas а relire les tutoriels et posez vos questions.<br />
<br />
Pour l'utilisation de l'adresse globale, vous comprendrez dans d'autres tutoriels pourquoi je vous ai appris а la rйcupйrer.[/INDENT]<br />
[CENTER]____________________________________________________<br />
Tutoriel fini !<br />
Si vous avez une question n'hйsitez pas, postez а la suite de ce sujet.<br />
<br />
Allez bisous ![/CENTER]]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=259631">TheMatrix</a>]]></name>
		</author>
		<published>2015-11-10T19:07:00Z</published>
		<updated>2015-11-10T19:07:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=593869" />
		<id>https://sampforum.blast.hk/showthread.php?tid=593869</id>
		<title xml:space="preserve"><![CDATA[[Map] Map DM Las Venturas]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=593869"><![CDATA[Bonsoir tout le monde ! , je vous partage une map assez sympa pour DM :).<br />
La voici en image ! :<br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/46/1447185993-capture.png" loading="lazy"  alt="[Image: 1447185993-capture.png]" class="mycode_img img-responsive" /><br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/46/1447185995-capture2.png" loading="lazy"  alt="[Image: 1447185995-capture2.png]" class="mycode_img img-responsive" /><br />
<br />
Voici ou se trouve la map ( la ou qui a mon curseur ):<br />
<img src="http://image.noelshack.com/fichiers/2015/46/1447185837-sa-mp-005.png" loading="lazy"  alt="[Image: 1447185837-sa-mp-005.png]" class="mycode_img img-responsive" /><br />
<br />
Mapping: <a href="http://pastebin.com/8sxrS5ZL" target="_blank" rel="noopener" class="mycode_url">http://pastebin.com/8sxrS5ZL</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=241926">Herka</a>]]></name>
		</author>
		<published>2015-11-06T23:21:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=593559" />
		<id>https://sampforum.blast.hk/showthread.php?tid=593559</id>
		<title xml:space="preserve"><![CDATA[[Tool/Web/Other] Panel PHP Y_INI.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=593559"><![CDATA[Salut tout le monde ! Je refais le tutoriel puisqu'il y avait une faille XSS exploitable et qu'il y a des dйbutants en PHP ici.<br />
<br />
Tout d'abord on va commencer par le code [COLOR="RoyalBlue"]HTML[/COLOR], en  [COLOR="RoyalBlue"]HTML[/COLOR] pour une connexion on a besoin d'un formulaire.<br />
 [COLOR="RoyalBlue"]Un formulaire en HTML se commence avec la balise &#x26;tform&#x26;t, oщ l'ont met ensuite les instructions nйcessaires.<br />
<br />
Commenзons par crйer cette balise, et ensuite l'instruire (donc lui ajouter des inscructions).<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>&amp;lt;form // Ici, on ouvre la balise de formulaire HTML.<br />
action="" // Ici, on dit que le formulaire sera redirigй vers la page "", ici il n'y a rien puisqu'on va mettre notre code PHP<br />
method="POST" // Ici, on indique que le formulaire sera basй sur du POST, et non sur du GET (Le post est une faзon de passer des informations invisible d'une page а l'autre, sans information telles que echo, le get est une faзon de faire passer des informations par URL d'une page а l'autre)<br />
&amp;gt; // On ferme la balise<br />
<br />
&amp;lt;input type="text" name="utilisateur" placeholder="Nom d'utilisateur"/&amp;gt;<br />
&amp;lt;input type="password" name="passe" placeholder="Mot de passe"/&amp;gt;<br />
&amp;lt;/form&amp;gt;</code></div></div><br />
Voilа notre code HTML crйй, maintenant on n'a plus qu'а faire le code[/COLOR] [COLOR="Orange"]PHP[/COLOR].<br />
<br />
[COLOR="Orange"]Sur mon serveur, je crypt les mots de passe en UDB_HASH, ce qui est simple et rapide (pas le plus sйcurisй, mais c'est dйjа зa). Ce qui est bien avec le UDB_HASH, du cфtй serveur (de jeu) il est facile а introduire et il est seulement en chiffre, contrairement а d'autre hasher tel que MD5. Cфtй PHP, il y a une fonction pour crypter des mots en UDB_HASH.<br />
<br />
Nous allons donc commencer par ouvrir la balise PHP et ajouter la fonction UDB_HASH.<br />
(On commence йgalement les sessions pour la suite)<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>&amp;lt;?php<br />
session_start();<br />
function udb_hash(&#36;buf) { <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#36;length=strlen(&#36;buf); <br />
&nbsp;&nbsp;&nbsp;&nbsp;&#36;s1 = 1; <br />
&nbsp;&nbsp;&nbsp;&nbsp;&#36;s2 = 0; <br />
&nbsp;&nbsp;&nbsp;&nbsp;for(&#36;n=0; &#36;n&amp;lt;&#36;length; &#36;n++) <br />
&nbsp;&nbsp;&nbsp;&nbsp;{ <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#36;s1 = (&#36;s1 + ord(&#36;buf[&#36;n])) % 65521; <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#36;s2 = (&#36;s2 + &#36;s1) % 65521; <br />
&nbsp;&nbsp;&nbsp;&nbsp;} <br />
&nbsp;&nbsp;&nbsp;&nbsp;return (&#36;s2 &amp;lt;&amp;lt; 16) + &#36;s1; <br />
} // La fonction udb_hash, exemple d'utilisation : echo udb_hash("mdp");</code></div></div><br />
Maintenant que l'udb est installй nous pouvons commencer а mettre des "si", par exemple :<br />
<br />
"Si "utilisateur" et "passe" ont йtй appelйs, on lance le script, voici cette instruction en code :<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(isset(&#36;_POST['utilisateur']) &amp;amp;&amp;amp; isset(&#36;_POST['passe'])) {</code></div></div><br />
If = si,<br />
Isset = existe,<br />
&#36;_POST['utilisateur'] = notre input "utilisateur".<br />
<br />
Ensuite, on demande а PHP de vйrifier si le fichier "utilisateur".ini existe bien.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!file_exists("linux/scriptfiles/Joueurs/".&#36;_POST['utilisateur'].".ini")) { // Demande si le fichier existe ou pas<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Votre compte n'existe pas."; // Dit а l'utilisateur qu'il n'a pas de compte<br />
} else { // Sinon,</code></div></div><br />
Maintenant, on demande а PHP de charger le fichier de l'utilisateur.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>&#36;inifile = parse_ini_file("linux/scriptfiles/Joueurs/".&#36;_POST['utilisateur'].".ini");</code></div></div><br />
Maintenant qu'il est chargй, on peux vйrifier le mot de passe.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(udb_hash(htmlentities(&#36;_POST['passe'])) == &#36;inifile['Password']) { // On demande si le mot de passe cryptй est celui qu'il y a dans le fichier ini. (htmlentities est la protection contre les failles XSS)<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#36;_SESSION['compte'] = &#36;_POST['utilisateur']; // On crйй la session "compte" et on lui indique que pour cet utilisateur, le nom de la session sera le nom de l'utilisateur<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;header('Location: index.php'); // On le redirige vers une page, ici index.php<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else { echo "Rй-essayez."; } // On lui indique que le mot de passe n'est pas bon<br />
} // On ferme le else { de tout а l'heure.</code></div></div><br />
Et voilа, votre page de connexion est faites, maintenant on va afficher quelques instructions.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>echo &#36;_SESSION['compte']; // Affiche le nom de l'utilisateur<br />
echo &#36;inifile['Level']; // Affiche le niveau de l'utilisateur</code></div></div><br />
Les "echo" avec "&#36;inifile" doivent avoir des instructions que vous avez dans votre fichier .INI.<br />
<br />
[/COLOR]<br />
<br />
Code complet :<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>&amp;lt;form action="" method="POST"&amp;gt;<br />
&amp;lt;input type="text" name="utilisateur" placeholder="Nom d'utilisateur"/&amp;gt;<br />
&amp;lt;input type="password" name="passe" placeholder="Mot de passe"/&amp;gt;<br />
&amp;lt;/form&amp;gt;<br />
<br />
if(isset(&#36;_POST['utilisateur']) &amp;amp;&amp;amp; isset(&#36;_POST['passe'])) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!file_exists("linux/scriptfiles/Joueurs/".&#36;_POST['utilisateur'].".ini")) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Aucun compte n'existe avec ce nom.";<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#36;inifile = parse_ini_file("linux/scriptfiles/Players/".&#36;_POST['utilisateur'].".ini");<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function udb_hash(&#36;buf) { <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#36;length=strlen(&#36;buf); <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#36;s1 = 1; <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#36;s2 = 0; <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(&#36;n=0; &#36;n&amp;lt;&#36;length; &#36;n++) <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#36;s1 = (&#36;s1 + ord(&#36;buf[&#36;n])) % 65521; <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#36;s2 = (&#36;s2 + &#36;s1) % 65521; <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (&#36;s2 &amp;lt;&amp;lt; 16) + &#36;s1; <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(udb_hash(htmlentities(&#36;_POST['passe'])) == &#36;inifile['Password']) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#36;_SESSION['compte'] = htmlentities(&#36;_POST['utilisateur']);<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;header('Location: index.php');<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else { echo "Rй-essayez."; }<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} }</code></div></div><br />
<br />
Bonus : [URL="http://uptobox.com/mlfqlv1fkk0y"]Cliquez ici pour tйlйcharger le panel de Original World RфlePlay.[/URL] (Complet, v0.1)<br />
<br />
Voilа, n'hйsitez pas а faire des remarques si j'ai oubliй quelque chose :)]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=245317">vitespirite</a>]]></name>
		</author>
		<published>2015-11-05T16:48:00Z</published>
		<updated>2015-11-05T16:48:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=593444" />
		<id>https://sampforum.blast.hk/showthread.php?tid=593444</id>
		<title xml:space="preserve"><![CDATA[[FilterScript] degat dynamic]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=593444"><![CDATA[[CENTER]Salut a tous :)<br />
<br />
Je vous prйsente un systиme de dкgat que j'ai dйvelopper :)<br />
<br />
[COLOR="Red"]Logiquement il fonctionne mais je n'est pas pus le tester car il faut кtre 2[/COLOR]<br />
<br />
Bug :<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>Aucun bug connue , merci de les reporter</blockquote>
<br />
screen :<br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/45/1446745360-gta-sa-mp-05-11-2015-18-38-44.png" loading="lazy"  alt="[Image: 1446745360-gta-sa-mp-05-11-2015-18-38-44.png]" class="mycode_img img-responsive" /><br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/45/1446745278-gta-sa-mp-05-11-2015-18-39-00.png" loading="lazy"  alt="[Image: 1446745278-gta-sa-mp-05-11-2015-18-39-00.png]" class="mycode_img img-responsive" /><br />
<br />
Tйlйchargement :<br />
<a href="http://pastebin.com/gut9DW4m" target="_blank" rel="noopener" class="mycode_url">http://pastebin.com/gut9DW4m</a><br />
<br />
Merci de ne pas retirer les crйdits.<br />
<br />
dite moi si sa fonctionne :D[/CENTER]]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=255905">Jeremyy</a>]]></name>
		</author>
		<published>2015-11-03T16:05:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=593277" />
		<id>https://sampforum.blast.hk/showthread.php?tid=593277</id>
		<title xml:space="preserve"><![CDATA[[Map] Extйrieur Pizza & Lspd]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=593277"><![CDATA[[CENTER]<a href="http://www.hostingpics.net/viewer.php?id=6428427N4fYJ8.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img15.hostingpics.net/pics/6428427N4fYJ8.png" loading="lazy"  alt="[Image: 6428427N4fYJ8.png]" class="mycode_img img-responsive" /></a><br />
<a href="http://www.hostingpics.net/viewer.php?id=731217CapturePNGddd.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img11.hostingpics.net/pics/731217CapturePNGddd.png" loading="lazy"  alt="[Image: 731217CapturePNGddd.png]" class="mycode_img img-responsive" /></a><br />
<a href="http://www.hostingpics.net/viewer.php?id=170515CapturePNGzzz.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img11.hostingpics.net/pics/170515CapturePNGzzz.png" loading="lazy"  alt="[Image: 170515CapturePNGzzz.png]" class="mycode_img img-responsive" /></a>[/CENTER]<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>RemoveBuildingForPlayer(playerid, 647, 1541.4453, -1713.3047, 14.4297, 0.25);<br />
RemoveBuildingForPlayer(playerid, 647, 1541.2969, -1702.6016, 14.4375, 0.25);<br />
RemoveBuildingForPlayer(playerid, 647, 1546.6016, -1693.3906, 14.4375, 0.25);<br />
RemoveBuildingForPlayer(playerid, 620, 1547.5703, -1689.9844, 13.0469, 0.25);<br />
RemoveBuildingForPlayer(playerid, 647, 1546.8672, -1687.1016, 14.4375, 0.25);<br />
RemoveBuildingForPlayer(playerid, 646, 1545.5234, -1678.8438, 14.0000, 0.25);<br />
RemoveBuildingForPlayer(playerid, 646, 1553.8672, -1677.7266, 16.4375, 0.25);<br />
RemoveBuildingForPlayer(playerid, 646, 1553.8672, -1673.4609, 16.4375, 0.25);<br />
RemoveBuildingForPlayer(playerid, 646, 1545.5625, -1672.2188, 14.0000, 0.25);<br />
RemoveBuildingForPlayer(playerid, 647, 1546.6016, -1664.6250, 14.4375, 0.25);<br />
RemoveBuildingForPlayer(playerid, 647, 1546.8672, -1658.3438, 14.4375, 0.25);<br />
RemoveBuildingForPlayer(playerid, 620, 1547.5703, -1661.0313, 13.0469, 0.25);<br />
RemoveBuildingForPlayer(playerid, 647, 1541.4766, -1648.4531, 14.4375, 0.25);<br />
RemoveBuildingForPlayer(playerid, 620, 1541.4531, -1642.0313, 13.0469, 0.25);<br />
RemoveBuildingForPlayer(playerid, 647, 1541.7422, -1638.9141, 14.4375, 0.25);<br />
CreateObject(869, 1547.77002, -1658.21997, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1545.66003, -1658.05005, 13.17000,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(869, 1547.66003, -1661.12000, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1547.68005, -1664.53003, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1543.18005, -1648.93005, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1545.85999, -1661.52002, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(717, 1546.70996, -1661.19995, 12.93000,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(869, 1547.85999, -1686.43994, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1545.76001, -1686.51001, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1545.69995, -1690.40002, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1547.95996, -1690.06995, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1547.92004, -1693.40002, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1545.68005, -1693.26001, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(717, 1546.70996, -1690.19995, 12.93000,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(869, 1543.82996, -1702.27002, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1541.50000, -1702.18994, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1542.46997, -1706.03003, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1542.45996, -1709.54004, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1543.42004, -1713.44995, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1541.37000, -1713.41003, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1541.18994, -1710.32996, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1545.79004, -1664.69995, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(717, 1539.90002, -1707.73999, 12.93000,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(869, 1542.46997, -1706.03003, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1541.18994, -1648.68994, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 259.92999);<br />
CreateObject(869, 1543.01001, -1645.31995, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1543.12000, -1641.96997, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1541.51001, -1638.63000, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1543.53003, -1638.18994, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 990.00000);<br />
CreateObject(869, 1541.31006, -1645.23999, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 259.92999);<br />
CreateObject(869, 1541.37000, -1642.02002, 13.27000,&nbsp;&nbsp; 0.00000, 0.00000, 259.92999);<br />
CreateObject(717, 1539.90002, -1643.73999, 12.93000,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(1280, 1543.36414, -1656.94336, 12.92920,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(1280, 1543.36414, -1664.85828, 12.92920,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(1280, 1543.36414, -1685.62573, 12.92920,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(1280, 1543.36414, -1694.15308, 12.92920,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(1359, 1545.65063, -1678.75586, 13.15180,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(1345, 1538.78210, -1613.81079, 13.16700,&nbsp;&nbsp; 0.00000, 0.00000, -90.00000);<br />
CreateObject(19430, 1534.48279, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1533.48279, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 153.48280, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1532.48279, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1531.48279, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1530.48279, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1529.48279, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1528.48279, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1527.48279, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1526.48279, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1525.48279, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1524.66284, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1534.48279, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1534.30286, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1533.30286, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1532.32275, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1531.30286, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1530.30286, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1529.30286, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1525.30286, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1528.30286, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1527.30286, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1526.30286, -1659.39502, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1534.30286, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1533.30286, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1533.48279, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1532.48279, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1532.32275, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1531.48279, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1531.30286, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1530.30286, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1530.48279, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1529.48279, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1529.30286, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1528.30286, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1528.48279, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1527.30286, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1527.48279, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1526.30286, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1526.48279, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1524.66284, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1525.48279, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19430, 1525.30286, -1657.80347, 10.64590,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(970, 1544.77966, -1620.35754, 13.05470,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(970, 1546.25769, -1635.17529, 13.05470,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19893, 1581.39734, -1634.38794, 13.65930,&nbsp;&nbsp; 0.00000, 0.00000, -70.00000);<br />
CreateObject(19893, 1580.44373, -1633.39929, 13.65930,&nbsp;&nbsp; 0.00000, 0.00000, -40.00000);<br />
CreateObject(19868, 1542.69409, -1617.68384, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19868, 1539.66907, -1614.66675, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, -90.00000);<br />
CreateObject(19868, 1539.64697, -1609.46326, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, -90.00000);<br />
CreateObject(19868, 1539.67224, -1605.36279, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, -90.00000);<br />
CreateObject(19868, 1542.70923, -1602.34363, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1547.89087, -1602.34363, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1553.06897, -1602.34363, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1558.26465, -1602.34363, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1563.43542, -1602.34363, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1568.59668, -1602.36365, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1573.76172, -1602.36365, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1578.93616, -1602.36365, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1584.11084, -1602.36365, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1589.29517, -1602.36365, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1594.48108, -1602.36365, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1599.66016, -1602.36365, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1604.86145, -1602.36365, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(19868, 1607.91931, -1605.35535, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19868, 1607.91931, -1610.53760, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19868, 1607.91931, -1615.71570, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19868, 1607.91931, -1620.88440, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19868, 1607.91931, -1626.05396, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19868, 1607.91931, -1631.21863, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(970, 1605.89990, -1637.92468, 15.92560,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19868, 1607.91406, -1634.72729, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19868, 1546.21655, -1617.69751, 13.48560,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
<br />
Barriere fermйe = CreateObject(2920, 1544.66882, -1630.96191, 13.10220,&nbsp;&nbsp; 90.00000, 90.00000, 90.00000);<br />
Barriиre ouverte = CreateObject(2920, 1544.69641, -1630.75806, 13.10220,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);</code></div></div>[CENTER]<a href="http://www.hostingpics.net/viewer.php?id=637293Capture.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img11.hostingpics.net/pics/637293Capture.png" loading="lazy"  alt="[Image: 637293Capture.png]" class="mycode_img img-responsive" /></a>[/CENTER]<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>RemoveBuildingForPlayer(playerid, 1408, 2099.8516, -1813.9063, 13.1016, 0.25);<br />
RemoveBuildingForPlayer(playerid, 1408, 2099.8594, -1819.3594, 13.1016, 0.25);<br />
RemoveBuildingForPlayer(playerid, 1408, 2099.8594, -1799.4219, 13.1016, 0.25);<br />
RemoveBuildingForPlayer(playerid, 1408, 2102.6016, -1822.0781, 13.1172, 0.25);<br />
RemoveBuildingForPlayer(playerid, 1408, 2099.8516, -1793.9766, 13.1016, 0.25);<br />
RemoveBuildingForPlayer(playerid, 712, 2100.8125, -1764.3750, 21.3906, 0.25);<br />
RemoveBuildingForPlayer(playerid, 1408, 2102.6641, -1791.3281, 13.1016, 0.25);<br />
RemoveBuildingForPlayer(playerid, 620, 2105.0859, -1765.6094, 10.8047, 0.25);<br />
CreateObject(673, 2103.15210, -1765.23096, 12.65048,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(1359, 2100.10620, -1767.34998, 13.19060,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(673, 2095.70679, -1782.63037, 12.65048,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(1280, 2097.98315, -1771.40442, 12.88080,&nbsp;&nbsp; 0.00000, 0.00000, 346.73807);<br />
CreateObject(1280, 2096.26758, -1778.38794, 12.88080,&nbsp;&nbsp; 0.00000, 0.00000, 337.56235);<br />
CreateObject(1359, 2097.35815, -1789.96729, 13.26890,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(1345, 2115.50366, -1790.27991, 13.31730,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(1438, 2112.27319, -1789.64575, 12.54620,&nbsp;&nbsp; 0.00000, 0.00000, 180.00000);<br />
CreateObject(1338, 2120.75220, -1790.19763, 13.22770,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19357, 2121.86499, -1782.09021, 10.63780,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19357, 2121.86499, -1779.09021, 10.63980,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19357, 2121.86499, -1776.09021, 10.64380,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19357, 2121.86499, -1773.09021, 10.64380,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19357, 2121.86499, -1770.09021, 10.64780,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19357, 2119.68872, -1784.15210, 10.63780,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19357, 2116.68872, -1784.15210, 10.63780,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19357, 2113.68872, -1784.15210, 10.63780,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19357, 2110.68872, -1784.15210, 10.63780,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19357, 2107.68872, -1784.15210, 10.63780,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(19357, 2104.68872, -1784.15210, 10.63780,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(983, 2099.24023, -1794.19482, 13.19510,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(983, 2099.24023, -1798.96375, 13.19510,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(983, 2099.24023, -1814.94373, 13.19510,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(983, 2099.24023, -1819.71069, 13.19510,&nbsp;&nbsp; 0.00000, 0.00000, 0.00000);<br />
CreateObject(983, 2120.84253, -1786.15515, 13.19510,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(983, 2114.44653, -1786.15515, 13.19510,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(983, 2108.07642, -1786.15515, 13.19510,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19357, 2101.58765, -1777.08044, 10.65180,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19357, 2101.97681, -1774.12622, 10.65180,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);<br />
CreateObject(19357, 2102.36157, -1771.11230, 10.65180,&nbsp;&nbsp; 0.00000, 0.00000, 90.00000);</code></div></div>cadeau, j'viens de retrouver les deux mappings<br />
ƿsуcнιк ♥]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=201770">Kevin51</a>]]></name>
		</author>
		<published>2015-11-02T17:39:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=593186" />
		<id>https://sampforum.blast.hk/showthread.php?tid=593186</id>
		<title xml:space="preserve"><![CDATA[[GameMode] West Side Generation RP]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=593186"><![CDATA[[CENTER]<span style="font-weight: bold;" class="mycode_b">Bonjour a tous, aujourd'hui je met en libre partage le gamemode dont je me suis servis pour ouvrir mon serveur roleplay il y a plus d'un ans dйjа, West Side generation roleplay Version 2. Je vous le dit tout de suite, il n'y a rien d'inйdit. Je vous met quelque screen ( j'ai pas tout prix car je suis assez occupй en se moment. ) Base du Gamemode FORP by Justerius.</span><br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">GARE</span><br />
<br />
<a href="http://www.hostingpics.net/viewer.php?id=927291samp001.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img15.hostingpics.net/thumbs/mini_927291samp001.png" loading="lazy"  alt="[Image: mini_927291samp001.png]" class="mycode_img img-responsive" /></a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Mapping SDF ( Dйsolй mon herbe qui cache tout )</span><br />
<br />
<a href="http://www.hostingpics.net/viewer.php?id=609511samp002.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img15.hostingpics.net/thumbs/mini_609511samp002.png" loading="lazy"  alt="[Image: mini_609511samp002.png]" class="mycode_img img-responsive" /></a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Mapping prison</span><br />
<br />
<a href="http://www.hostingpics.net/viewer.php?id=975760samp003.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img15.hostingpics.net/thumbs/mini_975760samp003.png" loading="lazy"  alt="[Image: mini_975760samp003.png]" class="mycode_img img-responsive" /></a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Mapping Hфtel</span><br />
<br />
<a href="http://www.hostingpics.net/viewer.php?id=833186samp004.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img15.hostingpics.net/thumbs/mini_833186samp004.png" loading="lazy"  alt="[Image: mini_833186samp004.png]" class="mycode_img img-responsive" /></a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Mapping Bar</span><br />
<br />
<a href="http://www.hostingpics.net/viewer.php?id=855167samp005.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img15.hostingpics.net/thumbs/mini_855167samp005.png" loading="lazy"  alt="[Image: mini_855167samp005.png]" class="mycode_img img-responsive" /></a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Mapping quartier gang</span><br />
<br />
<a href="http://www.hostingpics.net/viewer.php?id=942290samp007.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img15.hostingpics.net/thumbs/mini_942290samp007.png" loading="lazy"  alt="[Image: mini_942290samp007.png]" class="mycode_img img-responsive" /></a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Aide</span><br />
<br />
<a href="http://www.hostingpics.net/viewer.php?id=980172samp008.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img15.hostingpics.net/thumbs/mini_980172samp008.png" loading="lazy"  alt="[Image: mini_980172samp008.png]" class="mycode_img img-responsive" /></a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Systиme faction</span><br />
<br />
<a href="http://www.hostingpics.net/viewer.php?id=176376samp009.png" target="_blank" rel="noopener" class="mycode_url"><img src="http://img15.hostingpics.net/thumbs/mini_176376samp009.png" loading="lazy"  alt="[Image: mini_176376samp009.png]" class="mycode_img img-responsive" /></a><br />
<br />
<br />
[COLOR="DeepSkyBlue"]<span style="font-weight: bold;" class="mycode_b">Se que j'ai modifiй.</span>[/COLOR]<br />
[/CENTER]<br />
[COLOR="Black"]-Debug entier du systиme de garage/Tuning.[/COLOR]<br />
-Dйbug entier du systиme de factions.<br />
-Ajout d'un mapping taxi (+ Barriиre que l'on peut ouvrir via une commande)<br />
-Ajout mapping SDF<br />
-Ajout d'un mapping Gare intйrieur + extйrieure.<br />
-Modification du systиme de faction.<br />
-Modification du systиme d'aide (ajout de textdraw)<br />
-Ajout d'un mapping Hфtel Intйrieur et extйrieur.<br />
-Ajout de musique diffйrente entre l'inscription et la connexion.<br />
-Modification du systиme administratif.<br />
-Ajout de plusieurs commande staff.<br />
-Ajout du /staff qui permet de savoir qu'elle admin est connectй et sont level.<br />
-Ajout de /fps<br />
-Ajout de plusieurs commande pour les joueurs.<br />
-Modification de plusieurs mapping.<br />
-Ajout d'une prison.<br />
-Ajout de plusieurs grade des force de l'ordre, dont gardien de prison et Brigade Anti Criminel.<br />
-Ajout de plusieurs commande pour les flics.<br />
-Dйbug de certain systиme de police.<br />
-Ajout d'un mapping a seville.<br />
-Ajout de plus de 100 maison un peut partout Los Santos.<br />
-Ajout de plus de 30 business un peut partout Los Santos.<br />
-Ajout de plusieurs endroit pour crйe des faction.<br />
-Les couleur de la plus part des chat ont йtй modifiй ( meilleur couleur ).<br />
-Ajout de /l pour parler sans bouger les mains.<br />
-Ajout de /combat pour choisir sont style de combat.<br />
-Ajout d'une sale de sport prкt de ganton.<br />
-Ajout de binco prкt de ganton.<br />
<br />
[CENTER]Et j'ai pas tout dit je vous laisse dйcouvrir, en йspйrant vous avoir fait plaisir mкme si il n'y a pas de systиme de malade ! Peace.[/CENTER]]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=245317">vitespirite</a>]]></name>
		</author>
		<published>2015-11-01T14:03:00Z</published>
		<updated>2015-11-01T14:03:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=593078" />
		<id>https://sampforum.blast.hk/showthread.php?tid=593078</id>
		<title xml:space="preserve"><![CDATA[[FilterScript] Systиme de Tockie]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=593078"><![CDATA[Salut tout le monde,<br />
<br />
en cette belle journйe a s'ennuyer :D<br />
j'ai fait un filterscript basique trиs basique , mais qui peuvent aider certaine personne :)<br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/44/1446389901-gta-sa-mp-01-11-2015-15-55-57.png" loading="lazy"  alt="[Image: 1446389901-gta-sa-mp-01-11-2015-15-55-57.png]" class="mycode_img img-responsive" /><br />
<br />
Voici les diffйrente commande<br />
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>/aidetw - permet d'ouvrir le dialog d'aide </blockquote>
<br />
Tйlйchargement :<br />
<a href="http://pastebin.com/Z3h53rxm" target="_blank" rel="noopener" class="mycode_url">http://pastebin.com/Z3h53rxm</a><br />
<br />
Merci de ne pas retirer les crйdits<br />
<br />
Bonne reprise а tous :D]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=254329">Hamiltonn</a>]]></name>
		</author>
		<published>2015-10-31T21:57:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=593001" />
		<id>https://sampforum.blast.hk/showthread.php?tid=593001</id>
		<title xml:space="preserve"><![CDATA[[Map] Labyrinthe]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=593001"><![CDATA[[CENTER]Bonjour tout le monde, je reposte une map que j'ai faite il y a longtemps parce que j'ai arrкtй de mapper ya un certain temps maintenant.<br />
<br />
Donc, c'est un labyrinthe, pour les events ou ce que vous voulez, construit au dessus de l'eau, compliquй ou pas je sais pas j'ai jamais eu le courage de le faire. Ca m'a pris du temps de le faire, donc soyez respectueux svp :c<br />
<br />
Donc voilа les codes c'est cadeaux : <a href="http://pastebin.com/WxMxazVN" target="_blank" rel="noopener" class="mycode_url">http://pastebin.com/WxMxazVN</a><br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/44/1446328496-laby.jpg" loading="lazy"  alt="[Image: 1446328496-laby.jpg]" class="mycode_img img-responsive" /><br />
<br />
Je sais que y'a pas mal de lignes de codes c'est normal c'est tout les murs et dieu sait que y'en a.<br />
<br />
Bon certes il est pas super beau mais c'est un labyrinthe et au pire dйcorez le inshallah. <br />
<br />
La bise et amuse toi bien bb<br />
<br />
( Si vous utilisez, donnez un peu de reput siteplait ji suis povre )[/CENTER]]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=237793">Buthers</a>]]></name>
		</author>
		<published>2015-10-31T18:13:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=592985" />
		<id>https://sampforum.blast.hk/showthread.php?tid=592985</id>
		<title xml:space="preserve"><![CDATA[[Tutorial] Apprendre а programmer en Pawn #1]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=592985"><![CDATA[[CENTER]<span style="font-family: Microsoft Sans Serif;" class="mycode_font"><span style="text-decoration: underline;" class="mycode_u"><span style="font-weight: bold;" class="mycode_b">[COLOR="Red"][SIZE="5"]Apprendre а programmer en Pawn - Chapitre I<br />
<span style="font-style: italic;" class="mycode_i">[SIZE="4"]Mise en place des piliers[/SIZE]</span>[/SIZE][/COLOR]</span></span><br />
<br />
[SIZE="3"]<span style="font-style: italic;" class="mycode_i"><span style="text-decoration: underline;" class="mycode_u">A. Le Pawn, c'est quoi ?</span></span><br />
<br />
Il n'est pas un langage spйcifique а GTA:SA mais permet d'y exйcuter des instructions. <br />
En effet, vous pourrez grвce а ce langage dйvelopper votre propre mode de jeu а l'intйrieur de GTA:SA.<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="text-decoration: underline;" class="mycode_u">B. Bien commencer ?</span></span><br />
<br />
Commenзons par ouvrir notre traditionnel logiciel [URL="http://www.sa-mp.com/download.php"]Pawno[/URL] depuis notre serveur.<br />
Comme je vous l'ai prйcisй, il n'est pas un langage spйcifique а GTA:SA. Vous devrez donc y inclure les fonctions de base de SA:MP grвce а cette instruction :<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;&nbsp;<br /></span></code></div></div></div><br />
<span style="font-style: italic;" class="mycode_i"><span style="text-decoration: underline;" class="mycode_u">C. Include ?</span></span><br />
<br />
Cette instruction que vous voyez s'appelle une <span style="text-decoration: underline;" class="mycode_u">directive</span>. Elle sert а dйclarer une instruction qui sera <span style="text-decoration: underline;" class="mycode_u">constante</span>. <br />
Nombreuses sont les autres directives et je vous invite donc а vous rediriger vers mon [URL="https://sampforum.blast.hk/showthread.php?tid=571819"]tutoriel[/URL] sur celles-ci afin d'en savoir plus. La directive define est expliquйe [URL="https://sampforum.blast.hk/showthread.php?tid=571802"]ici[/URL].<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="text-decoration: underline;" class="mycode_u">D. Commenзons !</span></span><br />
<br />
Habituellement, tout gamemode contient <span style="text-decoration: underline;" class="mycode_u">la fonction main qui sera appelйe lors du dйmarrage de la console samp-server.exe</span>. On la construit comme ceci:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br /><br />}&nbsp;<br /></span></code></div></div></div><br />
Place aux explications. Les parenthиses permettent d'insйrer ce que l'on appelle des <span style="text-decoration: underline;" class="mycode_u">paramиtres</span>. La fonction main, de base, ne contient aucun paramиtre. <br />
Tout ce qui se trouvera entre les accolades sera ce que la fonction main devra exйcuter. <br />
Elle exйcutera<span style="text-decoration: underline;" class="mycode_u"> chaque instruction ligne par ligne par ordre chronologique</span> et laissera entre chaque instruction un temps presque incalculable par nous-mкme.<br />
<br />
Par exemple :<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;print(</span><span style="color: #DD0000">"Je&nbsp;dйmarre&nbsp;ma&nbsp;console&nbsp;!"</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Ici, la fonction main exйcutera l'instruction <span style="text-decoration: underline;" class="mycode_u">print</span> qui contient la chaоne <span style="font-style: italic;" class="mycode_i">Je dйmarre ma console !</span>.<br />
 L'instruction print est avant tout une fonction qui permet d'afficher un message dans la console, mais sans aucun argument derriиre,<br />
contrairement а la fonction <span style="text-decoration: underline;" class="mycode_u">printf</span> qui peut contenir des arguments, voici la diffйrence: <br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;print(</span><span style="color: #DD0000">"Je&nbsp;dйmarre&nbsp;ma&nbsp;console&nbsp;!"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Je&nbsp;dйmarre&nbsp;ma&nbsp;console&nbsp;!"</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Ici, la chaоne de caractиres <span style="font-style: italic;" class="mycode_i">Je dйmarre ma console !</span> est passйe en argument grвce а ce qu'on appelle un spйcificateur, qui ici est <span style="text-decoration: underline;" class="mycode_u">%s</span>,<br />
autrement dit un spйcificateur qui permet de passer en argument une chaоne de caractиres.<br />
Vous pouvez йgalement passer en argument un entier ou un nombre dйcimal grвce а deux autres spйcificateurs: <span style="text-decoration: underline;" class="mycode_u">%i</span> et <span style="text-decoration: underline;" class="mycode_u">%f</span> :<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%f"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">10.10</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Les spйcificateurs sont trиs pratiques si vous souhaitez dynamiser des valeurs, notamment grвce aux opйrations d'addition, de soustraction, de division ou de multiplication. Il en existe d'autres que je vous prйsenterai dans un prochain tutoriel.<br />
Je vais donc vous parler avant tout des <span style="text-decoration: underline;" class="mycode_u">variables</span>.<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="text-decoration: underline;" class="mycode_u">E. Les variables</span></span><br />
<br />
Une variable est un йlйment dans lequel nous pouvons stocker une donnйe et la faire varier а tout moment. <br />
Nous notons plusieurs types de variables telles que <span style="text-decoration: underline;" class="mycode_u">les variables qui peuvent contenir entier/caractиres</span>,<br />
<span style="text-decoration: underline;" class="mycode_u">les variables flottantes qui contiennent des dйcimaux</span> et<span style="text-decoration: underline;" class="mycode_u"> les variables boolйennes qui ne retournent que vrai ou faux</span>. <br />
On peut les distinguer comme ceci:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />new&nbsp;</span><span style="color: #0000BB">Chaine</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"Dix"</span><span style="color: #007700">;<br />new&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Decimal&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10.0</span><span style="color: #007700">;<br />new&nbsp;</span><span style="color: #0000BB">bool</span><span style="color: #007700">:</span><span style="color: #0000BB">Vrai&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />new&nbsp;</span><span style="color: #0000BB">bool</span><span style="color: #007700">:</span><span style="color: #0000BB">Faux&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;&nbsp;<br /></span></code></div></div></div><br />
Tout d'abord, en Pawn, peu importe le type de variable, celle-ci sera toujours prйcйdйe de <span style="text-decoration: underline;" class="mycode_u">new qui permet de dйclarer la variable</span>.<br />
<br />
La variable <span style="text-decoration: underline;" class="mycode_u">Entier contient la donnйe stockйe qui est la valeur 10</span>.<br />
<br />
La variable Chaine contient la donnйe stockйe qui est une chaоne de 3 caractиres. <span style="text-decoration: underline;" class="mycode_u">Ce fameux [4] s'appelle un tableau</span>.<br />
En effet, en Pawn, <span style="text-decoration: underline;" class="mycode_u">une variable qui contient une chaоne de caractиres doit obligatoirement кtre suivie d'un tableau</span>,<br />
 qui est tout simplement <span style="text-decoration: underline;" class="mycode_u">le nombre de caractиres stockйs dans la variable mais йgalement le nullbyte qui est 1</span>. <br />
<span style="text-decoration: underline;" class="mycode_u">Le nullbyte, en Pawn, doit кtre ajoutй aux tableaux des chaоnes de caractиres pour dire <br />
au compilateur de s'arrкter un pas aprиs le dernier caractиre, sinon il s'arrкterait un pas avant</span>.<br />
<br />
Ce que vous voyez avant la variable <span style="text-decoration: underline;" class="mycode_u">Demical</span> s'appelle un <span style="text-decoration: underline;" class="mycode_u">tag</span>. <br />
En effet, ce tag permet de dйclarer une variable de type dйcimale, <br />
qui stockera une donnйe de valeur dйcimale (chiffres aprиs la virgule plus simplement).<br />
<span style="text-decoration: underline;" class="mycode_u">Une variable qui contient une valeur dйcimale doit toujours кtre prйcйdйe du tag float</span>.<br />
<br />
Les variables <span style="text-decoration: underline;" class="mycode_u">Vrai et Faux sont appelйes des boolйennes</span>. <br />
En effet, elles ne peuvent retourner que true ou false, soit vrai ou faux. <br />
Elles peuvent йgalement retourner des valeurs (<span style="text-decoration: underline;" class="mycode_u">si supйrieure а 0, alors la variable retournera true, si йgale а zйro, alors elle retournera false</span>).<br />
<br />
Il existe d'autres variables telles que les constantes ou statiques que j'expliquerai dans un autre tutoriel.<br />
<br />
J'en reviens donc а ma <span style="text-decoration: underline;" class="mycode_u">fonction printf</span>, dans laquelle je peux directement insйrer mes variables :<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Chaine</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"Dix"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Decimal&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10.0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%i&nbsp;%s&nbsp;%f"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Entier</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Chaine</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Decimal</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
On ne passe gйnйralement que trиs rarement une variable boolйenne en argument, car celle-ci est plus utilisйe pour ce que l'on appelle des conditions, dont je vais vous parler juste aprиs.<br />
<br />
Finissons cette partie sur les opйrations. En effet, <span style="text-decoration: underline;" class="mycode_u">l'utilisation d'une variable permet de faire varier une donnйe а tout moment</span>. Nous pouvons donc incrйmenter une variable :<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Entier</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Entier</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Ici, <span style="text-decoration: underline;" class="mycode_u">nous incrйmentons la variable Entier de 10 grвce а une addition</span>. On l'affiche juste aprиs car souvenez-vous : <span style="text-decoration: underline;" class="mycode_u">Le compilateur va exйcuter les instructions par ordre chronologique</span>.<br />
<br />
Nous pouvons soustraire, multiplier ou bien diviser :<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Entier</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Addition<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">-=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Soustraction<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Multiplication<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Division<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Entier</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
<span style="font-style: italic;" class="mycode_i"><span style="text-decoration: underline;" class="mycode_u">F. Les conditions</span></span><br />
<br />
Une condition va nous permettre de comparer plusieurs donnйes, notamment grвce aux dйclarations <span style="text-decoration: underline;" class="mycode_u">if</span>, <span style="text-decoration: underline;" class="mycode_u">else</span>, <span style="text-decoration: underline;" class="mycode_u">else if</span> et bien d'autres que nous verrons dans d'autres tutoriels.<br />
<br />
Commenзons par effectuer une comparaison trиs simple grвce а notre variable <span style="text-decoration: underline;" class="mycode_u">Entier</span>:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">lt</span><span style="color: #007700">;=&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">lt</span><span style="color: #007700">;=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;Si&nbsp;Entier&nbsp;est&nbsp;plus&nbsp;grand&nbsp;ou&nbsp;йgal&nbsp;а&nbsp;0&nbsp;et&nbsp;plus&nbsp;petit&nbsp;ou&nbsp;йgal&nbsp;а&nbsp;10.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Variable&nbsp;Entier&nbsp;comprise&nbsp;entre&nbsp;0&nbsp;et&nbsp;10.&nbsp;Valeur&nbsp;:&nbsp;%i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Entier</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;if(</span><span style="color: #0000BB">10&nbsp;</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">lt</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">lt</span><span style="color: #007700">;=&nbsp;</span><span style="color: #0000BB">20</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;Si&nbsp;Entier&nbsp;est&nbsp;strictement&nbsp;supйrieur&nbsp;а&nbsp;10&nbsp;et&nbsp;plus&nbsp;petit&nbsp;ou&nbsp;йgal&nbsp;а&nbsp;20.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Variable&nbsp;Entier&nbsp;strictement&nbsp;supйrieure&nbsp;а&nbsp;10&nbsp;et&nbsp;infйrieure&nbsp;ou&nbsp;йgale&nbsp;а&nbsp;20.&nbsp;Valeur&nbsp;:&nbsp;%i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Entier</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #FF8000">//&nbsp;Si&nbsp;aucune&nbsp;des&nbsp;conditions&nbsp;n'est&nbsp;vraie.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(</span><span style="color: #DD0000">"Variable&nbsp;Entier&nbsp;ni&nbsp;comprise&nbsp;entre&nbsp;0&nbsp;et&nbsp;10&nbsp;ou&nbsp;entre&nbsp;10&nbsp;et&nbsp;20."</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}&nbsp;<br /></span></code></div></div></div><br />
<span style="text-decoration: underline;" class="mycode_u">La variable Entier est dйclarйe comme Integer (entier) et stocke comme valeur 10</span>.<br />
Ici, nous sommes en prйsence de trois dйclarations: <span style="text-decoration: underline;" class="mycode_u">if</span>, <span style="text-decoration: underline;" class="mycode_u">else if</span> et <span style="text-decoration: underline;" class="mycode_u">else</span>. <br />
Elles permettent pourtant toutes de comparer des donnйes mais ne jouent pas dans le mкme ordre. <br />
Il faut savoir que <span style="text-decoration: underline;" class="mycode_u">else</span> ne sera jamais placй avant <span style="text-decoration: underline;" class="mycode_u">if</span>. <span style="text-decoration: underline;" class="mycode_u">else if</span> ne sera jamais placй avant <span style="text-decoration: underline;" class="mycode_u">if</span> non plus. <br />
Le code donne "si [...] ou alors que si [....] sinon [...]". <br />
<br />
Il existe plusieurs types de conditions:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />new&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1.1</span><span style="color: #007700">;<br />if(</span><span style="color: #0000BB">x&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">y</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;si&nbsp;x&nbsp;est&nbsp;йgal&nbsp;а&nbsp;y<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">x&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">y</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;si&nbsp;x&nbsp;n'est&nbsp;pas&nbsp;йgal&nbsp;а&nbsp;y<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">x&nbsp;</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">gt</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">y</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;si&nbsp;x&nbsp;est&nbsp;strictement&nbsp;supйrieur&nbsp;а&nbsp;y<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">x&nbsp;</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">gt</span><span style="color: #007700">;=&nbsp;</span><span style="color: #0000BB">y</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;si&nbsp;x&nbsp;est&nbsp;supйrieur&nbsp;ou&nbsp;йgal&nbsp;а&nbsp;y<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">x&nbsp;</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">lt</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">y</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;si&nbsp;x&nbsp;est&nbsp;strictement&nbsp;infйrieur&nbsp;а&nbsp;y<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">x&nbsp;</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">lt</span><span style="color: #007700">;=&nbsp;</span><span style="color: #0000BB">y</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;si&nbsp;x&nbsp;est&nbsp;infйrieur&nbsp;ou&nbsp;йgal&nbsp;а&nbsp;y<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">x&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">y&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1.1</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;si&nbsp;x&nbsp;est&nbsp;йgal&nbsp;а&nbsp;1&nbsp;et&nbsp;si&nbsp;y&nbsp;est&nbsp;йgal&nbsp;а&nbsp;1.1&nbsp;<br /></span></code></div></div></div><br />
J'ai dйclarй ici deux variables; un <span style="text-decoration: underline;" class="mycode_u">Entier</span> et un <span style="text-decoration: underline;" class="mycode_u">Flottant</span>. De base, <span style="text-decoration: underline;" class="mycode_u">y est plus grand que x</span>. <br />
Pourtant, chacune de ces conditions va vйrifier une chose bien diffйrente. <br />
Passons maintenant aux <span style="text-decoration: underline;" class="mycode_u">callbacks</span> !<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="text-decoration: underline;" class="mycode_u">G. Les callbacks</span></span><br />
<br />
Une callback est en rйalitй comparable а une fonction que vous allez appeler а un moment prйcis dans votre programme. <br />
Elle dйtermine une suite d'instructions а exйcuter lors de son appel.<br />
Voici comment se construit une callback manuelle (les callbacks que j'appelle "automatiques" sont celles de base de SA:MP):<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #0000BB">forward&nbsp;Connexion</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br />public&nbsp;</span><span style="color: #0000BB">Connexion</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<span style="text-decoration: underline;" class="mycode_u">forward</span> et <span style="text-decoration: underline;" class="mycode_u">public</span> sont des Initialisers. Sachez que lorsque vous crйez une callback dans votre mode, <br />
celle-ci devra avant tout кtre dйfinie par <span style="text-decoration: underline;" class="mycode_u">forward avec ses mкmes paramиtres</span> (qui ici est seulement playerid). <br />
Ce fameux <span style="text-decoration: underline;" class="mycode_u">return true</span> signifie que la callback <span style="text-decoration: underline;" class="mycode_u">Connexion retournera toujours vrai, les instructions y seront donc exйcutйes correctement</span>. <br />
Vous pouvez retourner faux dans votre callback avec une condition: <br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #0000BB">forward&nbsp;Connexion</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br />public&nbsp;</span><span style="color: #0000BB">Connexion</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">Entier&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Je peux maintenant appeler ma callback Connexion dans la callback de base de SA:MP OnPlayerSpawn:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br /></span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnPlayerSpawn</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Connexion</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Pour finir, apprenons а <span style="text-decoration: underline;" class="mycode_u">commenter nos instructions</span>:<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="text-decoration: underline;" class="mycode_u">H. Le commentaire d'instructions</span></span><br />
<br />
J'ai commentй plusieurs fois certaines instructions dans mon tutoriel comme ceci:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br />//&nbsp;Je&nbsp;commente&nbsp;!&nbsp;<br /></span></code></div></div></div><br />
En effet, ce systиme est trиs utilisй. Il sert parfois а dйcrire quelque chose. <br />
Il faut que vous sachiez que <span style="text-decoration: underline;" class="mycode_u">le compilateur n'exйcutera jamais un commentaire</span>, ce pourquoi il est si utile.<br />
Il existe plusieurs maniиres de commenter, lignes par lignes ou alors en bloc directement comme ceci:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&amp;lt;a_samp&amp;gt;<br />//&nbsp;Premier&nbsp;commentaire<br />//&nbsp;Second&nbsp;commentaire<br />/*&nbsp;<br />Premier&nbsp;commentaire<br />Second&nbsp;commentaire<br />*/&nbsp;<br /></span></code></div></div></div><br />
Ce tutoriel est а prйsent terminй.<br />
J'accepte toute critique mais seulement а partir du moment oщ celle-ci est constructive. <br />
Ce tutoriel est assez court, mais ce n'est que notre premiиre partie.<br />
Je vous remercie d'avoir pris le temps de me lire, а trиs vite ![/SIZE]</span>[/CENTER]]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=259631">TheMatrix</a>]]></name>
		</author>
		<published>2015-10-28T15:35:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=592670" />
		<id>https://sampforum.blast.hk/showthread.php?tid=592670</id>
		<title xml:space="preserve"><![CDATA[[Map] Pizzeria (extйrieure) Los Santos]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=592670"><![CDATA[Bonjour a tous , aujourd'hui je vous partage le mapping de pizzeria ( extйrieure ) de LS. N’oubliez pas de donner d vos avis :).<br />
<br />
Images du mapping: <a href="http://www.casimages.com/a/aPCSF" target="_blank" rel="noopener" class="mycode_url">http://www.casimages.com/a/aPCSF</a><br />
<br />
Le mapping: <a href="http://pastebin.com/d2bFNSHy" target="_blank" rel="noopener" class="mycode_url">http://pastebin.com/d2bFNSHy</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=245473">NitramDom</a>]]></name>
		</author>
		<published>2015-10-28T14:24:00Z</published>
		<updated>2015-10-28T14:24:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=592663" />
		<id>https://sampforum.blast.hk/showthread.php?tid=592663</id>
		<title xml:space="preserve"><![CDATA[[GameMode] American dream RP]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=592663"><![CDATA[[CENTER]Je vous partage le gamemode sur lequel j'ai travaillй cet йtй et qui a йtй utilisй pour le serveur American dream RP. Ce gamemode est basй sur SARP, il fonctionne donc en SQL. Vous pouvez en faire ce que vous voulez mais respectez le travail et laissez les crйdits.<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Les diffйrents systиmes</span></span><br />
<br />
J'ai fais la liste ci-dessous de mйmoire, il est possible qu'il manque des йlйments.<br />
<br />
Refonte du systиme d'inscription<br />
Refonte des tous les jobs (modifications/ajouts)<br />
Refonte de toutes les factions (modifications/ajouts)<br />
Ajout d'un systиme de garage<br />
Refonte de l'auto-йcole<br />
Refonte du systиme d'arme et weed pour les mafias<br />
Ajout d'un systиme de tag pour les gangs<br />
Refonte du systиme de braquage de banque<br />
Ajout d'un systиme de braquage d'ATM<br />
Refonte du systиme de concession<br />
<br />
Aprиs il y a diffйrents petits ajouts comme l'ajout du C4 par exemple.<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Tйlйchargement</span></span><br />
<br />
Lien : [URL="https://mega.nz/#!w0QxCKIB"]Mega[/URL]<br />
Clй : !JyZKTmDVEKM0zZ91oms0RrJGPtk0rHIHXAjnWsjVy0w[/CENTER]]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=238036">Dutheil</a>]]></name>
		</author>
		<published>2015-10-28T00:15:00Z</published>
		<updated>2015-10-28T00:15:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=592640" />
		<id>https://sampforum.blast.hk/showthread.php?tid=592640</id>
		<title xml:space="preserve"><![CDATA[[Tutorial] L'assembleur (#emit) - Partie 2]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=592640"><![CDATA[[CENTER][SIZE="6"]<span style="text-decoration: underline;" class="mycode_u">[COLOR="RoyalBlue"]<span style="font-weight: bold;" class="mycode_b">L'assembleur (#emit) - Partie 2</span>[/COLOR]</span>[/SIZE]<br />
Suite du tutoriel sur la maоtrise de l'assembleur en Pawn avec la directive #emit.<br />
Nous verrons ce qu'est le FRM, le CIP et nous nous focaliserons de plus prкt au DATA.[/CENTER]<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">[SIZE="4"]Initiation:[/SIZE]</span></span><br />
On commence avec un schйma !<br />
<br />
<img src="http://i.imgur.com/n2VFXps.png" loading="lazy"  alt="[Image: n2VFXps.png]" class="mycode_img img-responsive" /><br />
<br />
Il y a surement quelques termes dans ce schйma qui vous parlent, notamment le "stack".<br />
Derriиre des valeurs stockйes dans le stack, se cachent des adresses. Elles sont pointйes par le FRM (Frame Pointer). L'abstract machine, ne peut pas rйcupйrer l'adresse а partir d'une valeur, c'est pourquoi le Frame Pointer est rйguliиrement utilisй, par exemple quand vous pushez des valeurs dans vos paramиtres, par "pusher" qui se traduit par "pousser" je parle de passer des valeurs en paramиtres de fonctions tout simplement.<br />
Retenez bien ce terme "push".<br />
<br />
Le CIP (Code Instruction Pointer) stocke tout simplement la valeur ou l'adresse qui sont passйes en paramиtre avec un p-code (mnйmonique pour les nostalgiques, boum une rime).<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">[SIZE="3"]Data, static, valeur, load:[/SIZE]</span></span>[INDENT]C'est une partie importante de l'abstract machine, donc soyez attentifs.<br />
Je vous disais dans la partie 1 que :<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>Les variables en dehors des fonctions dites globales, sont stockйes dans le segment "data" (DAT).</blockquote>
Mais pas seulement! <br />
Le data ne s'arrкte pas lа. Ce qu'il faut savoir, c'est que le data stocke aussi les valeurs de vos variables statiques.<br />
Donc, LOAD.S.pri ne fonctionnera pas avec un offset (variable en paramиtre d'un p-code) statique, vous pouvez faire le test :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;"a_samp"<br /><br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">a&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#emit&nbsp;LOAD.S.pri&nbsp;a<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;STOR.S.pri&nbsp;b<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div>Cela vous affichera 0.<br />
<br />
Mais comment faire ? <br />
Avant toute chose, je n'ai pas expliquй concrиtement ce que fait le p-code LOAD.S.pri vous pensez qu'il permet de charger une valeur а partir d'une variable en offset, mais pas vraiment.<br />
<br />
C'est lа que viens l'utilisation de notre FRM et notre DATA, allez cadeau voici un code en C (amx.c) :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">case&nbsp;</span><span style="color: #0000BB">OP_LOAD_S_PRI</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">GETPARAM</span><span style="color: #007700">(</span><span style="color: #0000BB">offs</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">pri</span><span style="color: #007700">=&nbsp;*&nbsp;(</span><span style="color: #0000BB">cell&nbsp;</span><span style="color: #007700">*)(</span><span style="color: #0000BB">data</span><span style="color: #007700">+(int)</span><span style="color: #0000BB">frm</span><span style="color: #007700">+(int)</span><span style="color: #0000BB">offs</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Si on retire les cast (type des variables) et que je remplace la macro GETPARAM, зa nous donne ceci :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">case&nbsp;</span><span style="color: #0000BB">OP_LOAD_S_PRI</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">offs&nbsp;</span><span style="color: #007700">=&nbsp;*</span><span style="color: #0000BB">cip</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">pri</span><span style="color: #007700">=&nbsp;*&nbsp;(</span><span style="color: #0000BB">data</span><span style="color: #007700">+</span><span style="color: #0000BB">frm</span><span style="color: #007700">+</span><span style="color: #0000BB">offs</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div>Je traduis donc : <br />
- On rйcupиre la valeur а l'adresse de "cip", on stocke la valeur dans "offset" et on incrйmente "cip", donc c'est la variable qu'on aura passй en paramиtre au p-code.<br />
<br />
- On additionne le pointeur "data" aux variables "frm" et "offs", le rйsultat nous donnera l'adresse de la variable qu'on aura passй en paramиtre au p-code, on rйcupиre donc sa valeur а l'aide du caractиre <span style="font-weight: bold;" class="mycode_b">*</span> et on la stocke dans la variable "pri" qui est le registre primaire.<br />
<br />
Pourquoi frm+offs ? Car c'est une base de l'adresse de la variable (rappelez-vous le FRM stocke seulement une adresse de variable et non sa valeur) et en y rajoutant le pointeur data, on obtient la valeur de l'adresse.<br />
<br />
Pourquoi ajouter le data ? Vous comprendrez plus tard, mais sachez que vous entendrez toujours parler.<br />
<br />
Ce p-code permet donc de rйcupйrer une valeur а partir de la variable, de la stocker dans le registre primaire.<br />
La variable doit кtre locale et кtre situйe dans le stack, donc ne doit pas кtre statique.<br />
<br />
Je vais quand mкme dйcortiquer encore un peu le p-code, juste son nom pas d'inquiйtude :<ul class="mycode_list"><li>LOAD -&#x26;t Charge la valeur</li>
<li>S -&#x26;t se trouvant dans le stack</li>
<li>pri -&#x26;t et met dans le registre primaire</li>
</ul>
Voici donc des p-codes que vous sauriez reconnaоtre (ou presque) :<ul class="mycode_list"><li>LOAD.pri</li>
<li>LOAD.alt</li>
<li>LOAD.S.pri</li>
<li>LOAD.S.alt</li>
<li>STOR.pri</li>
<li>STOR.alt</li>
<li>STOR.S.pri</li>
<li>STOR.S.alt</li>
</ul>
Regardez bien le noms de ces p-codes, oui je sais, il y en qui peuvent vous perturber.<br />
Ils se ressemblent, а quelques exceptions, certains commencent par LOAD, d'autres par STOR, certains comportent un S, d'autres non, certains comportent un pri, d'autres un alt.<br />
<br />
Pour sauter vite fait un paragraphe, les p-codes finissant par .alt, sachez juste que c'est pour agir sur le registre alternй et que c'est similaire au registre primaire, ce n'est qu'un registre temporaire.<br />
<br />
On reprend donc notre liste sans nos .alt :<ul class="mycode_list"><li>LOAD.pri</li>
<li>LOAD.S.pri</li>
<li>STOR.pri</li>
<li>STOR.S.pri</li>
</ul>
Explication rapide pour STOR.S.pri :<ul class="mycode_list"><li>STOR -&#x26;t Stocker la valeur</li>
<li>S -&#x26;t dans une variable situйe dans le stack</li>
<li>pri -&#x26;t du registre primaire</li>
</ul>
On reprend notre liste en enlevant nos .S.pri puisque vous les comprenez logiquement :<ul class="mycode_list"><li>LOAD.pri</li>
<li>STOR.pri</li>
</ul>
Argh, nous n'avons pas de 'S', qu'est-ce que зa peut bien vouloir dire ?<br />
Et bien tout simplement d'aller chercher une valeur dans le DATA sans passer par un autre segment.<br />
<br />
Cela signifie qu'avec ces p-codes vous pourrez charger ou stocker des valeurs dans des variables statiques ou globales.<br />
<br />
Voici un exemple :<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;"a_samp"<br /><br /></span><span style="color: #007700">new<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">a&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">main</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#emit&nbsp;LOAD.pri&nbsp;a<br />&nbsp;&nbsp;&nbsp;&nbsp;#emit&nbsp;STOR.pri&nbsp;b<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div>[/INDENT]<br />
[CENTER]____________________________________________________<br />
Tutoriel fini !<br />
Si vous avez une question n'hйsitez pas, postez а la suite de ce sujet.<br />
<br />
Prochaine partie "зa va pousser".<br />
<br />
Allez bisous ![/CENTER]]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=259631">TheMatrix</a>]]></name>
		</author>
		<published>2015-10-27T17:15:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=592618" />
		<id>https://sampforum.blast.hk/showthread.php?tid=592618</id>
		<title xml:space="preserve"><![CDATA[[Map] Base militaire]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=592618"><![CDATA[Salut tous le monde ! , j'ai rйaliser pour la premiиre fois un mapping base militaire . Je voudrais avoirs vos avis :).<br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/44/1445965755-sa-mp-007.png" loading="lazy"  alt="[Image: 1445965755-sa-mp-007.png]" class="mycode_img img-responsive" /><br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/44/1445965747-sa-mp-008-2.png" loading="lazy"  alt="[Image: 1445965747-sa-mp-008-2.png]" class="mycode_img img-responsive" /><br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/44/1445965755-sa-mp-008.png" loading="lazy"  alt="[Image: 1445965755-sa-mp-008.png]" class="mycode_img img-responsive" /><br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/44/1445965855-sa-mp-009.png" loading="lazy"  alt="[Image: 1445965855-sa-mp-009.png]" class="mycode_img img-responsive" /><br />
<br />
<img src="http://image.noelshack.com/fichiers/2015/44/1445965967-sa-mp-007-2.png" loading="lazy"  alt="[Image: 1445965967-sa-mp-007-2.png]" class="mycode_img img-responsive" /><br />
<br />
EDIT: Pour ce qui voudrais le mapping il suffit de me MP :).]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=245317">vitespirite</a>]]></name>
		</author>
		<published>2015-10-16T16:51:00Z</published>
		<updated>2015-10-16T16:51:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=591780" />
		<id>https://sampforum.blast.hk/showthread.php?tid=591780</id>
		<title xml:space="preserve"><![CDATA[[Tutorial] faire une base de systиme d'administration [I-ZCMD - SSCANF]]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=591780"><![CDATA[Salut tout le monde :D<br />
<br />
J'ouvre se sujet pour vous prйsenter un tutoriel , pour savoit comment faire une base de systиme d'administration :D je vais faire simple car sa n'est pas trиs compliquer une fois que les plugin/include son bien pris en main :D<br />
<br />
Avent tout de chose vous devrez les tйlйcharger le plugin sscanf et l'include I-ZCMD<br />
<br />
I-ZCMD : <a href="http://pastebin.com/cuSu7Uaf" target="_blank" rel="noopener" class="mycode_url">http://pastebin.com/cuSu7Uaf</a> © - Yashas<br />
SSCANF : <a href="https://dl.dropboxusercontent.com/u/102595204/sscanf-2.8.2.zip" target="_blank" rel="noopener" class="mycode_url">https://dl.dropboxusercontent.com/u/1025...-2.8.2.zip</a> © - Emmet_<br />
<br />
et vous mettez tout sa dans les dossier approprier .<br />
En suite vous mettez tout en haut de votre script c'est ligne :<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#incluse&nbsp;&amp;lt;sscanf&amp;gt;<br />#include&nbsp;&amp;lt;I-ZCMD&amp;gt;&nbsp;<br /></span></code></div></div></div><br />
bien tout est prкt :D<br />
alors commenзons :<br />
<br />
nous allons commencer par faire une commande trиs simple que je vous expliquerez les fonction utilisй ensuite , je parle de la base de la base le /kick :D  <br />
<br />
Voici la command :<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">kick</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ID</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">NameID</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_PLAYER_NAME</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">AdminName</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_PLAYER_NAME</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">raison</span><span style="color: #007700">[</span><span style="color: #0000BB">50</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">msg</span><span style="color: #007700">[</span><span style="color: #0000BB">150</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">IsPlayerAdmin</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">GetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">AdminName</span><span style="color: #007700">,</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">AdminName</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #DD0000">"is[50]"</span><span style="color: #007700">,</span><span style="color: #0000BB">ID</span><span style="color: #007700">,</span><span style="color: #0000BB">raison</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">0xFF0000FF</span><span style="color: #007700">,</span><span style="color: #DD0000">"[UTILISATION&nbsp;:]/kick&nbsp;[ID]&nbsp;[raison]"</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">IsPlayerConnected</span><span style="color: #007700">(</span><span style="color: #0000BB">ID</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">0xFF0000FF</span><span style="color: #007700">,</span><span style="color: #DD0000">"[ERREUR&nbsp;:]&nbsp;ID&nbsp;du&nbsp;joueur&nbsp;invalide&nbsp;!"</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">GetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">ID</span><span style="color: #007700">,</span><span style="color: #0000BB">NameID</span><span style="color: #007700">,</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">NameID</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">msg</span><span style="color: #007700">,</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">msg</span><span style="color: #007700">),</span><span style="color: #DD0000">"[KICK&nbsp;:]&nbsp;l'admin&nbsp;%s&nbsp;a&nbsp;kickй&nbsp;le&nbsp;joueur&nbsp;%s&nbsp;pour&nbsp;la&nbsp;raison&nbsp;:&nbsp;%s"</span><span style="color: #007700">,</span><span style="color: #0000BB">AdminName</span><span style="color: #007700">,</span><span style="color: #0000BB">NameID</span><span style="color: #007700">,</span><span style="color: #0000BB">raison</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">SendClientMessageToAll</span><span style="color: #007700">(</span><span style="color: #0000BB">0xFF8000FF</span><span style="color: #007700">,</span><span style="color: #0000BB">msg</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Kick</span><span style="color: #007700">(</span><span style="color: #0000BB">ID</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">0xFF0000FF</span><span style="color: #007700">,</span><span style="color: #DD0000">"[ERREUR&nbsp;:]&nbsp;Vous&nbsp;n'кtes&nbsp;pas&nbsp;connecter&nbsp;en&nbsp;RCON&nbsp;!"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
les explication :<br />
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>CMD:kick(playerid,params[])<br />
Avec le "CMD:" devant on indique au serveur que c'est une commande qui va s'appeler kick ,<br />
donc ig sa donnera /kick :D jusque lа logique</blockquote>
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>new<br />
		ID,<br />
		NameID[MAX_PLAYER_NAME],<br />
		AdminName[MAX_PLAYER_NAME],<br />
		raison[50],<br />
		msg[150];<br />
<br />
ici nous crйerons tout les variable nйcessaire je vais vous les йxpliquer quand mкme :D<br />
<br />
ID : stockera l'id du joueur<br />
NameID[MAX_PLAYER_NAME] : stockera le nom du joueur visйe par l'admin <br />
AdminName[MAX_PLAYER_NAME] : stockera le nom de l'admin<br />
raison[50] : stockera la raison du kick elle stockera 50 caractиre maximum<br />
msg[150] : servira a rйunir tout c'est donnйe pour en faire un message que tout les joueur verrons :D </blockquote>
<br />
jusque ici sa doit кtre compris normalement<br />
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>if(!IsPlayerAdmin(playerid))<br />
<br />
on utilise cette fonction pour savoir si le joueur est bien connecter en RCON password</blockquote>
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>GetPlayerName(playerid,AdminName,sizeof(AdminName)); <br />
<br />
Ici on enregistre le nom de l'admin dans la variable AdminName</blockquote>
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>if(sscanf(params,"is[50]",ID,raison)) return SendClientMessage(playerid,0xFF0000FF,"[UTILISATION :]/kick [ID] [raison]"); <br />
<br />
Ici va faire l'entrйe de la fonction sscanf pourquoi on mais "if" devant ? tout simplement car c'est si le joueur йcrit quelque chose aprиs la commande sinnon il est renvoyйe au return , qui lui envoie un message disant comment utiliser la commande.</blockquote>
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>йxaminon de plus prиs celle ci :<br />
(sscanf(params,"is[50]",ID,raison))<br />
<br />
pourquoi mettons "is[50]" car tout simplement sa remplace le %i qui lui stock un chiffre donc dans se cas ici l'id et le "s" qui lui aussi remplace le %s qui stock une chaine de caractиres de [50] lettre car nous avons mis "[50]"</blockquote>
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>if(!IsPlayerConnected(ID)) return SendClientMessage(playerid,0xFF0000FF,"[ERREUR :] ID du joueur invalide !"); <br />
<br />
cette fonction qui est simple de comprйhension on vйrifie juste que le joueur est connecter rien de compliquйe la dedans</blockquote>
<br />
Aprиs tout les fonction en dessous je pense que vous les comprenez enfin c'est la base du langage pawno ;)<br />
<br />
passons a une deuxiиme fonction qui va consister a convertir un chiffre en seconde pour le mettre en ms et le mettre dans un timer :)<br />
<br />
pour faire je sais pas par exemple un /restart :D sa peut-кtre intйressent sa non ?<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">restart</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">temps</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">convertMS</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_PLAYER_NAME</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">msg</span><span style="color: #007700">[</span><span style="color: #0000BB">150</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">IsPlayerAdmin</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #DD0000">"d"</span><span style="color: #007700">,</span><span style="color: #0000BB">temps</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">0xFF0000FF</span><span style="color: #007700">,</span><span style="color: #DD0000">"[UTILISATION&nbsp;:]/restart&nbsp;[temps]"</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">GetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">name</span><span style="color: #007700">,</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">name</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">convertMS&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">temps&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">1000</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">SetTimer</span><span style="color: #007700">(</span><span style="color: #DD0000">"restart"</span><span style="color: #007700">,</span><span style="color: #0000BB">convertMS</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">msg</span><span style="color: #007700">,</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">msg</span><span style="color: #007700">),</span><span style="color: #DD0000">"[REBOOT&nbsp;:]&nbsp;le&nbsp;serveur&nbsp;va&nbsp;redйmarer&nbsp;dans&nbsp;%d&nbsp;secondes&nbsp;,&nbsp;merci&nbsp;de&nbsp;vous&nbsp;dйconnecter&nbsp;!"</span><span style="color: #007700">,</span><span style="color: #0000BB">temps</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">SendClientMessageToAll</span><span style="color: #007700">(</span><span style="color: #0000BB">0xFF0000FF</span><span style="color: #007700">,</span><span style="color: #0000BB">msg</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">0xFF0000FF</span><span style="color: #007700">,</span><span style="color: #DD0000">"[ERREUR&nbsp;:]&nbsp;vous&nbsp;n'avez&nbsp;pas&nbsp;le&nbsp;droit&nbsp;a&nbsp;cette&nbsp;commande&nbsp;!"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">forward&nbsp;restart</span><span style="color: #007700">();<br />public&nbsp;</span><span style="color: #0000BB">restart</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">SendClientMessageToAll</span><span style="color: #007700">(-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #DD0000">"[REBOOT&nbsp;:]&nbsp;le&nbsp;serveur&nbsp;redйmarre&nbsp;imйdiatement!"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">SendRconCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"gmx"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Ici se sont tout des fonction dite plus en haut appart que la on fait un petit calcul pour convertire les seconde qui son stocker dans la variable temps pour faite une multiplication dans la variable convertMS.<br />
<br />
je rappel que le signe "*" veut dire fois donc "temps x 1000" ;)<br />
<br />
je pense ne rien avoir oubliйe , si vous voulez examiner de plus prиs les code vous pouvez dl la piиce jointe , dite moi se que vous pensez du tuto et si j'ai oubliйe des chose hйsitez pas :D<br />
<br />
<span style="font-weight: bold;" class="mycode_b">PS : beaucoup de faute d'orthographe dans le tuto dйsolйe</span><br />
<br />
<span style="text-decoration: underline;" class="mycode_u">bon week-end a vous et pour les gens de se Pas-de-Calais aprиs je sais pas qui encore mais bonne vacance !</span>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>