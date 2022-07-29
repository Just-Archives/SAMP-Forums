<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[SA-MP Forums Archive - Salonul Scripturilor]]></title>
	<subtitle type="html"><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></subtitle>
	<link rel="self" href="https://sampforum.blast.hk/syndication.php"/>
	<id>https://sampforum.blast.hk/</id>
	<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/"/>
	<updated>2022-07-29T03:07:28Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=258888">Kaz13</a>]]></name>
		</author>
		<published>2018-04-29T14:39:00Z</published>
		<updated>2018-04-29T14:39:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=653238" />
		<id>https://sampforum.blast.hk/showthread.php?tid=653238</id>
		<title xml:space="preserve"><![CDATA[[FilterScript] Primarul orasului]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=653238"><![CDATA[Salut,<br />
<br />
Astazi m-am hotarat sa postez o idee de a mea de misiune. *E un pic caterinca*dar eu zic ca e cat de cat okay. Astept si parerile voastre.<br />
<br />
<br />
In aceasta misiune este vorba de un primar mai 'special'. Acest primar abuzeaza de functia pe care o detine si hartuieste secretarele. Intr-o zi, un angajat de-al lui s-a saturat sa tina secret actiuniile lui si s-a gandit sa-l dea jos din functie. El ne va ruga sa-i facem 3 poze primarului din 3 unghiuri diferite cand acesta este la 'datorie'.*Dupa ce vom preda cele 3 poze vom fi rasplatiti cu &#36;50,000 si 5RP.*Daca primarul ne va observa, vom esua si vom avea posibilitatea de a reincepe misiunea.<br />
<br />
Dragut, nu?*<br />
<br />
<br />
<br />
Video:*<a href="https://www.youtube.com/watch?v=HhpbtW7cEpw&amp;t=5s" target="_blank">Click</a>(Imi cer scuze pentru calitate, insa la cat postez eu pe *******... n-are rost sa umblu pe acolo)<br />
<br />
Download:*<a href="https://www32.zippyshare.com/v/zueyuK03/file.html" target="_blank">Click</a><br />
<br />
<br />
<br />
Aceasta misiune a fost creata pentru gamemode-ul meu, intrucat acest cod necesita:<br />
<br />
Libraria YSI, respectiv y_timers, y_hooks, y_iterate.<br />
<br />
Si de*stock: <a href="https://pastebin.com/Ljxy36Y8" target="_blank">Click</a><br />
<br />
Multumesc,*<br />
<br />
Mefisto.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=242051">edyun</a>]]></name>
		</author>
		<published>2018-01-30T17:36:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=648906" />
		<id>https://sampforum.blast.hk/showthread.php?tid=648906</id>
		<title xml:space="preserve"><![CDATA[[Tutorial] Admin chat(/a) [Incepatori]]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=648906"><![CDATA[Buna ziua,<br />
<br />
Ma numesc Edy, ma ocup de ethical hacking si de asemenea in timpul liber sunt programator, am decis sa vin astazi cu un tutorial pentru un Admin Chat, este unul de incepatori acesta fiind foarte usor de realizat, si va poate dezvolta gandirea pentru tot felul de chaturi cum ar fi /f, /r, toate acestea sunt extrem de similare.<br />
Asa ca, sa nu mai pierdem vremea si sa incepem cu tutorialul.<br />
<br />
Inainte de a incepe declararea comenzilor, asigurati-va ca aveti include-ul ZCMD, pentru a putea urmari tutorialul si pentru a va face munca mai usoara.<br />
<br />
Mai jos aveti culorile folosite in acest tutorial<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 50px;
		text-align: left;
		overflow: auto">#define <font color="Yellow">GALBEN</font> 0xFFFF00AA
#define <font color="Red">ROSU</font> 0xFF6347AA</pre>
</div>Vom incepe prin declararea unei functii simple.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">forward TrimiteMesajPentruAdmini(text[])</pre>
</div>Dupa aceea vom crea aceasta functie.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 306px;
		text-align: left;
		overflow: auto">public TrimiteMesajPentruAdmini(text[])
{

	for(new i = 0; i &#x26;t MAX_PLAYERS; i ++)
	{


		    if(AccountInfo[i][aAdmin] &#x26;t= 1) // Inlocuiti " AccountInfo[i][aAdmin]  " cu variabila voastra.
		    {

				SendClientMessage(i,GALBEN,text);

		    }


	}

}</pre>
</div>Ca sa va explic cum functioneaza aceasta functie, acel "for" incepe sa numere de la ID-ul 0, pana la "MAX_PLAYERS", dupa aceea verificam pentru fiecare valoare a lui "i", adica a ID-ului, daca player-ul are admin, daca acesta nu are admin, nu i se va trimite niciun mesaj, daca acesta are admin, i se va trimite un mesaj definit de o comanda.<br />
Acum, sa trecem la comanda propriu zisa.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 434px;
		text-align: left;
		overflow: auto">COMMAND:a(playerid,params[])
{

    if(AccountInfo[playerid][aAdmin] &#x26;t= 1)
    {
    
		new textintrodus[256];
                new nume[24];
                GetPlayerName(playerid, nume, sizeof(nume));
		FetchParamText(result,params,0);
		if(!strlen(result)) { SendClientMessage(playerid,ROSU,"COMANDA: /a [admin chat]"); return 1; }
		new mesajdetrimis[256];
		format(mesajdetrimis,sizeof(mesajdetrimis),"[Admin Chat] %s: %s",nume,textintrodus);
		TrimiteMesajPentruAdmini(mesajdetrimis);
		return 1;
    }
    else
    {

        SendClientMessage(i, ROSU, "Nu esti administrator");
        return 1;

    }


}</pre>
</div>Aceasta comanda va verifica daca utilizatorul este administrator si ii va trimite mesajul prin functia creata mai sus.<br />
Daca aveti nelamuriri nu ezitati sa ma contactati.<br />
<br />
Daca mai doriti astfel de tutoriale, puteti lasa mai jos o cerere iar in timpul liber in care nu lucrez la server-ul meu voi incerca sa o indeplinesc. Doar ca sa stiti, in momentul de fata ma pregatesc pentru certificarea CEH(Certified Ethical Hacking) si s-ar putea sa postez umpic mai greu tutorialele.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=303391">QuizakaBeto</a>]]></name>
		</author>
		<published>2017-12-17T18:15:00Z</published>
		<updated>2017-12-17T18:15:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=646493" />
		<id>https://sampforum.blast.hk/showthread.php?tid=646493</id>
		<title xml:space="preserve"><![CDATA[[Tutorial] Cum sa creezi o poarta [ SA:MP 0.3.7 ] + miscarea acesteia]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=646493"><![CDATA[Acest tutorial este facut , pentru incepatori ( cum am fost si eu candva, dar pe mine nu m-a invatat nimeni , a trebuit sa invat singur ) asa ca, o sa va las mai jos cativa pasi. Daca nu intelegeti pute-ti sa-mi dati un mesaj pe skype ( beto.alberto25 ) sau aici printr-un reply / PM !<br />
<br />
Pasii:<br />
<br />
PASUL 1 :<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">Asigurati-va ca aveti urmatorul public:

public OnPlayerConnect

La acest public v-eti adauga mapping-ul</pre>
</div>PASUL 2 :<br />
<br />
Creeati poarta in mapping, un exemplu de code ar fi:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">CreateDynamicObject(968, 1126.96619, -1291.97839, 13.45620,   0.00000, 90.00000, 0.00000);</pre>
</div>PASUL 3 :<br />
<br />
Pune-ti obiectul ca sa fie citit, de catre script<br />
Pune-ti urmatorea linie:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 50px;
		text-align: left;
		overflow: auto">new numeleobiecutlui;
new numeleobiectuluistatus = 0;</pre>
</div>PASUL 4 :<br />
<br />
Modificati la linia cu CreateDynamicObject astfel:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">numeleobiectului = CreateDynamicObject(968, 1126.96619, -1291.97839, 13.45620,   0.00000, 90.00000, 0.00000);</pre>
</div>PASUL 5:<br />
<br />
Faceti comanda de miscare a gate-ului<br />
Aici aveti doua optiuni:<br />
1) Cu statusul portii ( pentru scripteri umpic mai avansati )<br />
2) Cu doua comenzi ( pentru incepatori, <b>recomandat</b> daca nu ai mai facut asa ceva vreodata )<br />
<br />
Eu o sa va arat ambele variante, ramane la laltitudinea voastra pe care o alegeti<br />
<br />
Optiunea 1 :<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 306px;
		text-align: left;
		overflow: auto">	if(strcmp(cmd, "/comanda", true) == 0)
	{
		if(IsPlayerConnected(playerid))
      	{
				if(numeleobiectuluistatus == 0)
				{
				MoveDynamicObject(numeleobiectului, 1126.96619, -1291.97839, 13.45620, 0.50, 0.00000,0.00000, 0.00000);
				numeleobiectuluistatus = 1;
				}
				else if(numeleobiectuluistatus == 1)
			       {
    				MoveDynamicObject(numeleobiectului, 1126.96619, -1291.97839, 13.45620, 0.50, 0.00000, 
90.00000, 0.00000);
				    numeleobiectuluistatus = 0;
			        }
			}
		}
	}</pre>
</div>Optiunea 2 :<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">COMMAND:comanda(playerid, params[])
{
MoveDynamicObject(numeleobiectului, 1126.96619, -1291.97839, 13.45620, 0.50, 0.00000,0.00000, 0.00000);
}
COMMAND:comanda2(playerid, params[])
{
MoveDynamicObject(numeleobiectului, 1126.96619, -1291.97839, 13.45620, 0.50, 0.00000, 90.00000, 0.00000);
}</pre>
</div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=303391">QuizakaBeto</a>]]></name>
		</author>
		<published>2017-12-17T12:55:00Z</published>
		<updated>2017-12-17T12:55:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=646461" />
		<id>https://sampforum.blast.hk/showthread.php?tid=646461</id>
		<title xml:space="preserve"><![CDATA[[GameMode] Los Santos Roleplay Romania , Proffesional Roleplay, Hard Roleplay 2017]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=646461"><![CDATA[Deja vreau sa va anunt ca m-am saturat de toate fantomele ce apar in comunitatea Roleplay din Romania , cum ar fi Hard Roleplay, asa ca m-am hotarat odata pentru totdeauna sa le deschid ochii oameniilor, candva, recunosc si eu imi faceam fantome, dar deja United-Roleplay ( actualul meu server ) nu mai este o fantoma.<br />
<br />
Gamemode-uri:<br />
- Los Santos Roleplay Romania ( editat de mine si de DragonuAK , full pe gratis )<br />
- Proffesional Roleplay ( de vanzare, cu tot cu UCP, skype: beto.alberto25 )<br />
- Hard Roleplay 2017 ( de vanzare, va public doar scriptul, gamemode-ul utilizeaza baza de date, asa ca nu aveti ce sa faceti cu el, skype: beto.alberto25 )<br />
<br />
Ne intelegem la pret, preturile vor fi intre 5 si 10 euro !<br />
<br />
Link-uri de download :<br />
<br />
UCP Hard-Roleplay ( compatibil cu LS:RP Romania in ce varianta este urcat acuma, public, dar pentru cumpararea gamemode-ului Hard-Roleplay vi-l configurez ptr. Hard-RP ) : <a href="https://sampforum.blast.hk/showthread.php?tid=646454" target="_blank">https://sampforum.blast.hk/showthread.php?tid=646454</a><br />
Gamemode LS:RP Romania : <a href="http://www106.zippyshare.com/v/hvSkhnOO/file.html" target="_blank">http://www106.zippyshare.com/v/hvSkhnOO/file.html</a><br />
Gamemode Hard-RP 2017 : <a href="http://www106.zippyshare.com/v/THwPnuWh/file.html" target="_blank">http://www106.zippyshare.com/v/THwPnuWh/file.html</a><br />
<br />
Daca vreti sa va faceti servere cu ele, sunteti liberi !<br />
<br />
Bafta cu scripting-ul ! <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=303391">QuizakaBeto</a>]]></name>
		</author>
		<published>2017-12-17T11:59:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=646456" />
		<id>https://sampforum.blast.hk/showthread.php?tid=646456</id>
		<title xml:space="preserve"><![CDATA[[FilterScript] Refuse report + refuse askq ( Pentru RolePlay )]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=646456"><![CDATA[Aceste systeme le detin si eu. Am decis sa le fac publice, daca tot se bucura niste amatori ca FrankAdv, de ce sa nu se bucure si altii ?<br />
<br />
<b>SCRIPTUL FUNCTIONEAZA DOAR PE GAMEMODE-UL IBP SI IMI REZERV DREPTUL SI CREDITELE PENTRU ACESTE SCRIPTURI.</b><br />
<br />
Refuse report :<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">COMMAND:rr(playerid, params[])
{
	if (PlayerInfo[playerid][pAdministrator] &#x26;t 1)
	{
		SendClientMessage(playerid, COLOR_GREY,"Nu esti autorizat sa folosesti aceasta comanda.");
		return 1;
	}
	new iPlayerID,
		szReason[128],
		szMessage[128];
	if(sscanf(params, "us[128]", iPlayerID, szReason))
	{
		return SendClientMessage(playerid, COLOR_GRAD2, "FOLOSIRE: {FFFFFF}/rreport [PlayerID/Nume] [Motiv]");
	}
	if(!IsPlayerConnected(iPlayerID))
	{
 		SendClientMessage(playerid, COLOR_LIGHTRED, "Jucatorul respectiv nu este conectat !");
		return 1;
	}
	if(PlayerInfo[iPlayerID][pReport] == -1)
	{
		return SendErrorMessage(playerid, "* Un admininistrator a dat deja un raspuns la acest repoart sau jucatorul respectiv nu a dat report !");
	}
	if(strlen(szReason) &#x26;t 30)
	{
		new pos = 30;
		if(pos &#x26;t 30-1) pos = 30;
		format(szMessage, 128,"[INFO] Administratorul %s ti-a respins reportul. Motiv: %.*s ...", GetPlayerNameEx(playerid), pos, szReason);
		SendClientMessage(iPlayerID, COLOR_YELLOW, szMessage);
		format(szMessage, 128,"... %s", szReason[pos]);
		SendClientMessage(iPlayerID, COLOR_YELLOW, szMessage);
		format(szMessage, 128,"[AdmCmd] %s (%d) i-a refuzat reportul lui %s (%d). Motiv: %.*s ...", GetPlayerNameEx(playerid), playerid, GetPlayerNameEx(iPlayerID), iPlayerID, pos, szReason);
		AdministratorMessage(COLOR_ORANGE,szMessage,1);
		format(szMessage, 128,"... %s", szReason[pos]);
		AdministratorMessage(COLOR_ORANGE,szMessage,1);
	}
	else
	{
		format(szMessage, 128,"[INFO] Administratorul %s ti-a respins reportul. Motiv: %s", GetPlayerNameEx(playerid), szReason);
		SendClientMessage(iPlayerID, COLOR_YELLOW, szMessage);
		format(szMessage, 128,"[AdmCmd] %s (%d) i-a refuzat reportul lui %s (%d). Motiv: %s", GetPlayerNameEx(playerid), playerid, GetPlayerNameEx(iPlayerID), iPlayerID, szReason);
		AdministratorMessage(COLOR_ORANGE,szMessage,1);
	}
	format(szMessage, 128,"[ADMIN] I-ai refuzat reportul lui %s (%d).", GetPlayerNameEx(iPlayerID), iPlayerID);
	SendClientMessage(playerid,COLOR_GREY,szMessage);
	PlayerInfo[iPlayerID][pReport] = -1;
	return 1;
}</pre>
</div>Refuse askq :<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">COMMAND:rq(playerid,params[])
{
	if(!PlayerInfo[playerid][pAdministrator])
	{
		if (PlayerInfo[playerid][pTester] == 0)
		{
		SendClientMessage(playerid, COLOR_GREY,"Nu esti autorizat sa folosesti aceasta comanda.");
		return 1;
		}
	}
	new iPlayerID,
		szReason[128],
		szMessage[128];
	if(sscanf(params, "us[128]", iPlayerID, szReason))
	{
		return SendClientMessage(playerid, COLOR_GRAD2, "FOLOSIRE: {FFFFFF}/rq [PlayerID/Nume] [Motiv]");
	}
	if(PlayerInfo[iPlayerID][pQuestion] == -1)
	{
		return SendErrorMessage(playerid, "* Un tester a respins deja aceasta intrebare sau jucatorul respectiv nu a pus una !");
	}
	if(strlen(szReason) &#x26;t 30)
	{
		new pos = 30;
		if(pos &#x26;t 30-1) pos = 30;
		format(szMessage, 128,"[INFO] Testerul %s ti-a respins intrebarea. Motiv: %.*s ...", GetPlayerNameEx(playerid), pos, szReason);
		SendClientMessage(iPlayerID, COLOR_YELLOW, szMessage);
		format(szMessage, 128,"... %s", szReason[pos]);
		SendClientMessage(iPlayerID, COLOR_YELLOW, szMessage);
		format(szMessage, 128,"[TesterCmd] %s (%d) i-a refuzat intrebarea lui %s (%d). Motiv: %.*s ...", GetPlayerNameEx(playerid), playerid, GetPlayerNameEx(iPlayerID), iPlayerID, pos, szReason);
		AdministratorMessage(COLOR_ORANGE,szMessage,1);
		format(szMessage, 128,"... %s", szReason[pos]);
		AdministratorMessage(COLOR_ORANGE,szMessage,1);
	}
	else
	{
		format(szMessage, 128,"[INFO] Testerul %s ti-a respins intrebarea. Motiv: %s", GetPlayerNameEx(playerid), szReason);
		SendClientMessage(iPlayerID, COLOR_YELLOW, szMessage);
		format(szMessage, 128,"[TestrCmd] %s (%d) i-a refuzat intrebarea lui %s (%d). Motiv: %s", GetPlayerNameEx(playerid), playerid, GetPlayerNameEx(iPlayerID), iPlayerID, szReason);
		AdministratorMessage(COLOR_ORANGE,szMessage,1);
	}
	format(szMessage, 128,"[TESTER] I-ai refuzat intrebarea lui %s (%d).", GetPlayerNameEx(iPlayerID), iPlayerID);
	SendClientMessage(playerid,COLOR_GREY,szMessage);
	PlayerInfo[iPlayerID][pQuestion] = -1;
	return 1;
}</pre>
</div>Bafta cu ele ! <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=303391">QuizakaBeto</a>]]></name>
		</author>
		<published>2017-12-17T11:30:00Z</published>
		<updated>2017-12-17T11:30:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=646454" />
		<id>https://sampforum.blast.hk/showthread.php?tid=646454</id>
		<title xml:space="preserve"><![CDATA[[UCP] Hard-Roleplay 2017 - 2018]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=646454"><![CDATA[Acest topic este facut mai mult, pentru a arata " originalitatea " server-ului Hard-Roleplay, tocmai de aceea am sa va las aici cateva scripturi.<br />
Acest server 'unic' foloseste gamemode-ul PR-RP ( umpic editat ) + UCP LS-RP Romania ( Cel ce il am de la DragonuAK, respect frate &#x26;t3 ) .<br />
Tot ce are diferit UCP-ul este doar background-ul, si cateva texte, aceleasi vulnerabilitati si script-uri pe el + HTML / PHP Template.<br />
<br />
Link de download : <a href="http://www19.zippyshare.com/v/K6xVltC0/file.html" target="_blank">http://www19.zippyshare.com/v/K6xVltC0/file.html</a><br />
<br />
Daca jucati RolePlay si sunteti interesati de un alt server roman care nu este fantoma inafara de Romania-Roleplay, va asteptam pe United-Roleplay ( DNS de conectare: server.un-rp.ro , site <a href="http://un-rp.ro" target="_blank">http://un-rp.ro</a> / va puteti face conturile pe: <a href="http://un-rp.ro/inregistrare/" target="_blank">http://un-rp.ro/inregistrare/</a> )<br />
<br />
<b>UCP-UL CE L-AM PUBLICAT ACUMA NU IMI APARTINE MIE, NU IMI REZERV CREDITE PE EL, IL PUTETI FOLOSI LINISTITI, PE MINE NU MA INTERESEAZA ! INSA ACESTA FUNCTIONEAZA DOAR CU GM-UL LS:RP ROMANIA, O SA-I FAC UN RELASE IN VIITOARELE ZILE, FI-TI CU OCHII PE TOPIC <img alt="" border="0" class="inlineimg" src="images/smilies/wink.png" title="Wink"/></b><br />
<br />
Va multumesc de atentie !]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=305013">SeeNN</a>]]></name>
		</author>
		<published>2017-09-13T14:34:00Z</published>
		<updated>2017-09-13T14:34:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=641266" />
		<id>https://sampforum.blast.hk/showthread.php?tid=641266</id>
		<title xml:space="preserve"><![CDATA[[GameMode] GameMode ESS,edit by me.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=641266"><![CDATA[Salut,vreau sa va arat Etrion Stunt Server by xHoT,edit facut de mine.<br />
Sincer,o sa imi ziceti ca de ce nu l-am pastrat la credite,cel putin la multumiri speciale...<br />
Dar,orice bug pe care il stiam a fost rezolvat,a-m adaugat multe,pot spune ca am drepturi de autor.<br />
Puteti zice ce vreti,mie imi e indiferent,dar totusi,sper sa va placa...<br />
Nu stiu daca o sa apreciati,sau nu,munca depusa...in fine,eu sper ca a iesit ok...decideti voi =))<br />
<br />
Link: <a href="http://www.fileshare.ro/e3172661907" target="_blank">http://www.fileshare.ro/e3172661907</a><br />
<br />
Poze: <br />
<br />
<a href="https://ibb.co/gczBEF" target="_blank">https://ibb.co/gczBEF</a><br />
<a href="https://ibb.co/hLX91v" target="_blank">https://ibb.co/hLX91v</a><br />
<a href="https://ibb.co/k22Rgv" target="_blank">https://ibb.co/k22Rgv</a><br />
<a href="https://ibb.co/dtx3Ta" target="_blank">https://ibb.co/dtx3Ta</a><br />
<a href="https://ibb.co/h27dTa" target="_blank">https://ibb.co/h27dTa</a><br />
<a href="https://ibb.co/gmAZZF" target="_blank">https://ibb.co/gmAZZF</a><br />
<a href="https://ibb.co/dUg58a" target="_blank">https://ibb.co/dUg58a</a><br />
<a href="https://ibb.co/bxkMgv" target="_blank">https://ibb.co/bxkMgv</a><br />
<a href="https://ibb.co/iS4KZF" target="_blank">https://ibb.co/iS4KZF</a><br />
<a href="https://ibb.co/k23P1v" target="_blank">https://ibb.co/k23P1v</a><br />
<a href="https://ibb.co/hB48Ta" target="_blank">https://ibb.co/hB48Ta</a><br />
<a href="https://ibb.co/mNv41v" target="_blank">https://ibb.co/mNv41v</a><br />
<a href="https://ibb.co/iR9mEF" target="_blank">https://ibb.co/iR9mEF</a><br />
<a href="https://ibb.co/b6QyTa" target="_blank">https://ibb.co/b6QyTa</a><br />
<a href="https://ibb.co/hXkMgv" target="_blank">https://ibb.co/hXkMgv</a><br />
<a href="https://ibb.co/mRUggv" target="_blank">https://ibb.co/mRUggv</a><br />
<a href="https://ibb.co/jZzggv" target="_blank">https://ibb.co/jZzggv</a><br />
<a href="https://ibb.co/cSa9ZF" target="_blank">https://ibb.co/cSa9ZF</a><br />
<a href="https://ibb.co/edVREF" target="_blank">https://ibb.co/edVREF</a><br />
<a href="https://ibb.co/cSpWgv" target="_blank">https://ibb.co/cSpWgv</a><br />
<a href="https://ibb.co/cpKWgv" target="_blank">https://ibb.co/cpKWgv</a><br />
<a href="https://ibb.co/euP8Ta" target="_blank">https://ibb.co/euP8Ta</a><br />
<a href="https://ibb.co/iPK3uF" target="_blank">https://ibb.co/iPK3uF</a><br />
<a href="https://ibb.co/dVL9ZF" target="_blank">https://ibb.co/dVL9ZF</a><br />
<a href="https://ibb.co/dmza8a" target="_blank">https://ibb.co/dmza8a</a><br />
<a href="https://ibb.co/doN6EF" target="_blank">https://ibb.co/doN6EF</a><br />
<a href="https://ibb.co/ea8eZF" target="_blank">https://ibb.co/ea8eZF</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=158932">Flashhiee</a>]]></name>
		</author>
		<published>2017-02-12T12:23:00Z</published>
		<updated>2017-02-12T12:23:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=628622" />
		<id>https://sampforum.blast.hk/showthread.php?tid=628622</id>
		<title xml:space="preserve"><![CDATA[[Map] Terasa - Speed Mapping]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=628622"><![CDATA[Salutare dragilor! In acest videoclip am sa reimprospatez un loc despre care cred ca a fost putin lasat balta. Daca va place acest clip dati-mi de stire printr-un like la acest videoclip sau printr-un punct de reputatie. Multumesc!<br />
<br />
<br />
<br />
Download:  <a href="http://pastebin.com/zGQwsLyW" target="_blank">http://pastebin.com/zGQwsLyW</a><br />
<br />
*******: <a href="https://www.youtube.com/watch?v=ADKRwZWyZog" target="_blank">https://www.youtube.com/watch?v=ADKRwZWyZog</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=158932">Flashhiee</a>]]></name>
		</author>
		<published>2017-02-04T20:53:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=628029" />
		<id>https://sampforum.blast.hk/showthread.php?tid=628029</id>
		<title xml:space="preserve"><![CDATA[[Map] Insula - Speed Mapping]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=628029"><![CDATA[Salutare dragilor! In acest episod o sa facem o insula plina cu case si tot felul de cladiri. <br />
<br />
Link *******: <a href="https://www.youtube.com/watch?v=tSrUEi-cabo" target="_blank">https://www.youtube.com/watch?v=tSrUEi-cabo</a><br />
<br />
Download: <a href="http://pastebin.com/DkjJFZqA" target="_blank">http://pastebin.com/DkjJFZqA</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=158932">Flashhiee</a>]]></name>
		</author>
		<published>2017-01-26T13:00:00Z</published>
		<updated>2017-01-26T13:00:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=627309" />
		<id>https://sampforum.blast.hk/showthread.php?tid=627309</id>
		<title xml:space="preserve"><![CDATA[[Tutorial] Texture Studio]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=627309"><![CDATA[In acest video explic cum se instaleaza si cum se foloseste Texture Studio. Click pe link-ul de mai jos.<br />
<br />
<a href="https://www.youtube.com/watch?v=Nm4qGkxX0xI" target="_blank">https://www.youtube.com/watch?v=Nm4qGkxX0xI</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=158932">Flashhiee</a>]]></name>
		</author>
		<published>2017-01-21T08:42:00Z</published>
		<updated>2017-01-21T08:42:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=626849" />
		<id>https://sampforum.blast.hk/showthread.php?tid=626849</id>
		<title xml:space="preserve"><![CDATA[[Map] Meteoritul]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=626849"><![CDATA[Cea mai inutila mapa pe care am facut-o vreodata(totusi ar fi buna pentru serverele RolePlay). Check this out!<br />
<br />
Link Download:  <a href="http://pastebin.com/B4TFgXNL" target="_blank">http://pastebin.com/B4TFgXNL</a><br />
<br />
<a href="https://www.youtube.com/watch?v=PQuk2-EH828" target="_blank">https://www.youtube.com/watch?v=PQuk2-EH828</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=250246">CMH</a>]]></name>
		</author>
		<published>2017-01-20T21:43:00Z</published>
		<updated>2017-01-20T21:43:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=626819" />
		<id>https://sampforum.blast.hk/showthread.php?tid=626819</id>
		<title xml:space="preserve"><![CDATA[[GameMode] IPHONE 7 for SA-MP]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=626819"><![CDATA[Acest script este creat de CMHDev !<br />
<br />
<br />
<br />
<br />
<br />
<br />
<a href="http://imgur.com/gallery/5p0DL" target="_blank">Imagini</a><br />
<br />
<a href="https://www.solidfiles.com/v/WwaDrewdBryVy" target="_blank">Download 1</a><br />
<a href="http://www.fileshare.ro/e3172441414" target="_blank">Download 2</a><br />
<a href="http://www.mediafire.com/file/aj4rm2305ai3yql/IPhone_7_Pentru_SA-MP_By_CMHDev%C2%A9.zip" target="_blank">Download 3</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=266362">PedroMojica0715</a>]]></name>
		</author>
		<published>2016-12-26T20:55:00Z</published>
		<updated>2016-12-26T20:55:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=625021" />
		<id>https://sampforum.blast.hk/showthread.php?tid=625021</id>
		<title xml:space="preserve"><![CDATA[[Map] Turnul de foc]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=625021"><![CDATA[<i><b>Bună</b>, bine, această hartă este o clădire care predestinat un server, dar nu avea nimic de-a face cu contextul оn care proiectul a fost planificat xD, așa că decid să ajute pe cineva vrea să-l folosească.<br />
<br />
Nu mai lăsa să cartografiați imagini</i><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/z2yoK7r.jpg"/><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/0YtvQhM.jpg"/><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/LfLKrmF.jpg"/><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/10Ozt2Q.jpg"/><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/zybmdYc.jpg"/><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/1UysKWK.jpg"/><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/Duga0zB.jpg"/><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/pMxFfiO.jpg"/><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/9p9WQqf.jpg"/><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/cMouOLY.jpg"/><br />
<br />
<img alt="" border="0" src="http://i.imgur.com/iBTBswe.jpg"/><br />
<br />
<b><i>Codul hartă</i></b><br />
<br />
<b><i>Removes</i></b><br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 322px;
		text-align: left;
		overflow: auto">
RemoveBuildingForPlayer(playerid, 1307, 787.6719, -1384.3828, 12.7813, 0.25);
RemoveBuildingForPlayer(playerid, 6491, 717.4844, -1357.3047, 20.2969, 0.25);
RemoveBuildingForPlayer(playerid, 1689, 650.8359, -1377.6641, 21.7578, 0.25);
RemoveBuildingForPlayer(playerid, 1226, 642.0938, -1359.8203, 16.2734, 0.25);
RemoveBuildingForPlayer(playerid, 1689, 650.8359, -1356.5859, 21.7578, 0.25);
RemoveBuildingForPlayer(playerid, 1226, 623.5469, -1331.9531, 16.2734, 0.25);
RemoveBuildingForPlayer(playerid, 1226, 642.0938, -1334.8516, 16.2734, 0.25);
RemoveBuildingForPlayer(playerid, 1689, 650.8359, -1338.2422, 21.7578, 0.25);
RemoveBuildingForPlayer(playerid, 1635, 677.1953, -1328.8750, 25.1094, 0.25);
RemoveBuildingForPlayer(playerid, 1689, 745.5859, -1381.1094, 25.8750, 0.25);
RemoveBuildingForPlayer(playerid, 1689, 751.3359, -1368.0313, 25.8750, 0.25);
RemoveBuildingForPlayer(playerid, 6490, 717.4844, -1357.3047, 20.2969, 0.25);
RemoveBuildingForPlayer(playerid, 6516, 717.6875, -1357.2813, 18.0469, 0.25);
RemoveBuildingForPlayer(playerid, 1635, 696.1953, -1328.8750, 25.1094, 0.25);
RemoveBuildingForPlayer(playerid, 1635, 702.2344, -1328.8750, 25.1094, 0.25);
RemoveBuildingForPlayer(playerid, 1635, 721.2109, -1328.8750, 25.1094, 0.25);
RemoveBuildingForPlayer(playerid, 1415, 732.8516, -1332.8984, 12.6875, 0.25);
RemoveBuildingForPlayer(playerid, 1439, 732.7266, -1341.7734, 12.6328, 0.25);</pre>
</div><b><i>CreateObject</i></b><br />
<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">

new Meamoh[29];
Meamoh[0] = CreateObject(19379, 729.15796, -1361.79700, 113.19676,   0.00000, -89.96000, 0.00000);
Meamoh[1] = CreateObject(19379, 718.49628, -1361.74585, 113.19676,   0.00000, -89.96000, 0.00000);
Meamoh[2] = CreateObject(19379, 710.88232, -1361.73511, 113.19676,   0.00000, -89.96000, 0.00000);
Meamoh[3] = CreateObject(19379, 710.91693, -1371.26892, 113.19676,   0.00000, -89.96000, 0.00000);
Meamoh[4] = CreateObject(19379, 710.97748, -1375.97827, 113.19676,   0.00000, -89.96000, -1.92000);
Meamoh[5] = CreateObject(19379, 718.51312, -1371.23901, 113.19676,   0.00000, -89.96000, 0.00000);
Meamoh[6] = CreateObject(19379, 718.60730, -1376.07031, 113.19676,   0.00000, -89.96000, 0.00000);
Meamoh[7] = CreateObject(19379, 729.19250, -1371.33118, 113.19676,   0.00000, -89.96000, 0.00000);
Meamoh[8] = CreateObject(19379, 729.22961, -1376.09949, 113.19676,   0.00000, -89.96000, 0.00000);
Meamoh[9] = CreateObject(19379, 637.64551, -1379.52649, 12.76347,   0.00000, -89.96000, 0.00000);
Meamoh[10] = CreateObject(19379, 627.80273, -1379.55066, 12.76347,   0.00000, -89.96000, 0.00000);
Meamoh[11] = CreateObject(19379, 637.62585, -1370.01038, 12.76347,   0.00000, -89.96000, 0.00000);
Meamoh[12] = CreateObject(19379, 627.79309, -1370.02356, 12.76347,   0.00000, -89.96000, 0.00000);
Meamoh[13] = CreateObject(19379, 637.61664, -1364.08374, 12.76350,   10.00000, -90.00000, 0.00000);
Meamoh[14] = CreateObject(19379, 637.55591, -1354.49902, 13.58538,   0.00000, -89.96000, 0.00000);
Meamoh[15] = CreateObject(19379, 637.57800, -1344.90222, 13.58538,   0.00000, -89.96000, 0.00000);
Meamoh[16] = CreateObject(19379, 637.58026, -1335.24268, 13.58538,   0.00000, -89.96000, 0.00000);
Meamoh[17] = CreateObject(19379, 637.49927, -1325.80225, 12.76350,   10.00000, -90.00000, -179.00000);
Meamoh[18] = CreateObject(19379, 627.66302, -1364.06921, 12.76350,   10.00000, -90.00000, 0.00000);
Meamoh[19] = CreateObject(19379, 627.68054, -1354.49475, 13.58538,   0.00000, -89.96000, 0.00000);
Meamoh[20] = CreateObject(19379, 627.70959, -1344.88318, 13.58538,   0.00000, -89.96000, 0.00000);
Meamoh[21] = CreateObject(19379, 627.67371, -1335.26282, 13.58538,   0.00000, -89.96000, 0.00000);
Meamoh[22] = CreateObject(19379, 627.67456, -1325.79150, 12.76350,   10.00000, -90.00000, -179.00000);
Meamoh[23] = CreateObject(19379, 642.74445, -1335.21521, 8.39931,   0.00000, 0.00000, 0.00000);
Meamoh[24] = CreateObject(19379, 642.75397, -1344.80896, 8.39931,   0.00000, 0.00000, 0.00000);
Meamoh[25] = CreateObject(19379, 642.76971, -1354.41760, 8.39931,   0.00000, 0.00000, 0.00000);
Meamoh[26] = CreateObject(19379, 622.42877, -1335.18958, 8.39931,   0.00000, 0.00000, 0.00000);
Meamoh[27] = CreateObject(19379, 622.42529, -1344.70300, 8.39931,   0.00000, 0.00000, 0.00000);
Meamoh[28] = CreateObject(19379, 622.42529, -1344.70300, 8.39931,   0.00000, 0.00000, 0.00000);
for(new MeamoTexturizarIDVV; MeamoTexturizarIDVV &#x26;t 3; MeamoTexturizarIDVV++){SetObjectMaterial(Meamoh[MeamoTexturizarIDVV], 0, 10789, "xenon_sfse", "newindow4", 0xFF8B8B83);}

new Vidrios[3];
Vidrios[0] = CreateObject(5644, 720.01379, -1368.64746, 50.20183,   0.00000, 0.00000, 0.00000);
Vidrios[1] = CreateObject(5644, 720.01044, -1368.66711, 75.45826,   0.00000, 0.00000, 0.00000);
Vidrios[2] = CreateObject(5644, 720.01044, -1368.66711, 100.63916,   0.00000, 0.00000, 0.00000);
for(new TexturizarIDVV; TexturizarIDVV &#x26;t 3; TexturizarIDVV++){SetObjectMaterial(Vidrios[TexturizarIDVV], 0, 10789, "xenon_sfse", "newindow4", 0xFF8B8B83);}

new pedritoh = CreateObject(5644, 720.01379, -1368.64746, 25.10285,   0.00000, 0.00000, 0.00000);
SetObjectMaterial(pedritoh, 0, 10872, "wc_lift_sfse", "steel64", 0xFFFFFFFF);

CreateObject(6959, 767.37085, -1349.02686, 12.53888,   0.00000, 0.00000, 0.00000);
CreateObject(6959, 726.66754, -1348.79333, 12.48778,   0.00000, 0.00000, 0.00000);
CreateObject(6959, 686.11835, -1348.89355, 12.50710,   0.00000, 0.00000, 0.00000);
CreateObject(6959, 644.95526, -1348.93030, 12.57670,   0.00000, 0.00000, 0.00000);
CreateObject(6959, 668.28064, -1365.54333, 12.76241,   0.00000, 0.00000, 0.00000);
CreateObject(6959, 709.17780, -1365.62927, 12.76241,   0.00000, 0.00000, 0.00000);
CreateObject(6959, 749.99255, -1365.63660, 12.76241,   0.00000, 0.00000, 0.00000);
CreateObject(6959, 767.00696, -1365.68848, 12.76241,   0.00000, 0.00000, 0.00000);
CreateObject(3660, 694.64203, -1384.61804, 15.26934,   0.00000, 0.00000, 0.00000);
CreateObject(3660, 675.19293, -1384.67151, 15.26934,   0.00000, 0.00000, 0.00000);
CreateObject(3660, 657.07294, -1384.76086, 15.26934,   0.00000, 0.00000, 0.00000);
CreateObject(3660, 647.93536, -1374.19592, 15.26930,   0.00000, 0.00000, 90.00000);
CreateObject(3660, 647.94904, -1354.55078, 15.26930,   0.00000, 0.00000, 90.00000);
CreateObject(3660, 647.99335, -1339.30432, 15.26930,   0.00000, 0.00000, 90.00000);
CreateObject(3660, 658.88831, -1330.10803, 15.26934,   0.00000, 0.00000, 0.00000);
CreateObject(3660, 678.39185, -1330.10376, 15.26934,   0.00000, 0.00000, 0.00000);
CreateObject(3660, 698.10370, -1330.13306, 15.26934,   0.00000, 0.00000, 0.00000);
CreateObject(3749, 718.01270, -1331.60632, 18.36719,   356.85840, 0.00000, 3.14159);
CreateObject(3660, 737.61859, -1330.17590, 15.26934,   0.00000, 0.00000, 0.00000);
CreateObject(3660, 757.20129, -1330.14331, 15.26934,   0.00000, 0.00000, 0.00000);
CreateObject(3660, 776.05322, -1330.09644, 15.26934,   0.00000, 0.00000, 0.06000);
CreateObject(3660, 786.36957, -1339.15930, 15.26930,   0.00000, 0.00000, 90.00000);
CreateObject(3660, 786.32294, -1358.73108, 15.26930,   0.00000, 0.00000, 90.00000);
CreateObject(3660, 786.35590, -1374.16455, 15.26930,   0.00000, 0.00000, 90.00000);
CreateObject(3660, 777.86633, -1384.53467, 15.26934,   0.00000, 0.00000, 0.06000);
CreateObject(3660, 758.47675, -1384.55884, 15.26934,   0.00000, 0.00000, 0.06000);
CreateObject(3660, 738.96887, -1384.55200, 15.26934,   0.00000, 0.00000, 0.06000);
CreateObject(3660, 719.68109, -1384.53259, 15.26934,   0.00000, 0.00000, 0.06000);
CreateObject(3660, 704.33368, -1384.56665, 15.26934,   0.00000, 0.00000, 0.06000);
CreateObject(6965, 689.19623, -1375.16687, 15.66919,   0.00000, 0.00000, 0.00000);
CreateObject(6965, 689.67523, -1333.06421, 15.16197,   0.00000, 0.00000, 0.00000);
CreateObject(3472, 649.26758, -1362.35327, 12.70264,   0.00000, 0.00000, 0.00000);
CreateObject(3472, 649.41077, -1332.47534, 12.70264,   0.00000, 0.00000, 0.00000);
CreateObject(3472, 649.16394, -1383.59656, 12.70264,   0.00000, 0.00000, 0.00000);
CreateObject(3472, 704.18774, -1330.34985, 12.70264,   0.00000, 0.00000, -0.36000);
CreateObject(3472, 689.40942, -1383.19324, 12.70264,   0.00000, 0.00000, 0.00000);
CreateObject(3472, 729.41388, -1383.75598, 12.70264,   0.00000, 0.00000, 0.00000);
CreateObject(3472, 784.86139, -1383.35925, 12.70264,   0.00000, 0.00000, -0.18000);
CreateObject(3472, 785.21674, -1360.41223, 12.70264,   0.00000, 0.00000, -0.18000);
CreateObject(3472, 785.28900, -1331.76221, 12.70264,   0.00000, 0.00000, -0.18000);
CreateObject(3472, 729.89581, -1329.35181, 12.70264,   0.00000, 0.00000, -0.18000);
CreateObject(1257, 687.60138, -1326.74365, 13.70130,   0.00000, 0.00000, -91.00000);
CreateObject(16133, 663.14722, -1363.18640, 7.39933,   0.00000, 0.00000, 0.00000);
CreateObject(6965, 689.53918, -1354.04443, 15.16197,   0.00000, 0.00000, 0.00000);
CreateObject(1432, 700.77020, -1368.50537, 12.75315,   0.00000, 0.00000, 0.00000);
CreateObject(1432, 701.07196, -1377.53870, 12.75315,   0.00000, 0.00000, 0.00000);
CreateObject(1432, 694.17316, -1377.70056, 12.75315,   0.00000, 0.00000, 0.00000);
CreateObject(1432, 693.52271, -1368.39734, 12.75315,   0.00000, 0.00000, 0.00000);
CreateObject(1432, 683.77734, -1377.34424, 12.75315,   0.00000, 0.00000, 0.00000);
CreateObject(1432, 683.44708, -1368.18604, 12.75315,   0.00000, 0.00000, 0.00000);
CreateObject(1432, 677.59479, -1377.28430, 12.75315,   0.00000, 0.00000, 0.00000);
CreateObject(1432, 677.84753, -1368.26184, 12.75315,   0.00000, 0.00000, 0.00000);
CreateObject(1432, 675.11285, -1372.85742, 12.75315,   0.00000, 0.00000, 0.00000);
CreateObject(1432, 704.42725, -1372.51233, 12.75315,   0.00000, 0.00000, 0.00000);
CreateObject(1364, 673.23077, -1353.56067, 13.20570,   0.00000, 0.00000, -269.00000);
CreateObject(1364, 673.17175, -1347.44727, 13.20570,   0.00000, 0.00000, -269.00000);
CreateObject(1364, 672.66852, -1341.15283, 13.20570,   0.00000, 0.00000, -269.00000);
CreateObject(1364, 672.63812, -1334.81433, 13.20570,   0.00000, 0.00000, -269.00000);
CreateObject(1364, 701.45679, -1353.77673, 13.20570,   0.00000, 0.00000, -90.00000);
CreateObject(1364, 701.69489, -1347.77771, 13.20570,   0.00000, 0.00000, -90.00000);
CreateObject(1364, 701.80951, -1341.93164, 13.20570,   0.00000, 0.00000, -90.00000);
CreateObject(1364, 701.80786, -1335.01245, 13.20570,   0.00000, 0.00000, -90.00000);
CreateObject(1557, 718.41125, -1356.92090, 12.72685,   0.00000, 0.00000, 0.00000);
CreateObject(1557, 721.45227, -1356.93506, 12.72680,   0.00000, 0.00000, -180.00000);
CreateObject(3515, 759.77667, -1357.40771, 11.89012,   0.00000, 0.00000, 0.00000);
CreateObject(1597, 766.59235, -1356.93298, 15.23956,   0.00000, 0.00000, -89.00000);
CreateObject(1597, 753.07025, -1357.38171, 15.23956,   0.00000, 0.00000, -89.00000);</pre>
</div>
<i><b>CreateVehicle</b></i><br />
<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 338px;
		text-align: left;
		overflow: auto">
CreateVehicle(407, 781.8701, -1376.3805, 13.5015, 0.0000, -1, -1, 100);
CreateVehicle(407, 776.1760, -1376.3666, 13.5015, 0.0000, -1, -1, 100);
CreateVehicle(407, 770.5848, -1375.8475, 13.5015, 0.0000, -1, -1, 100);
CreateVehicle(407, 765.0844, -1375.9219, 13.5015, 0.0000, -1, -1, 100);
CreateVehicle(407, 759.8239, -1375.9719, 13.5015, 0.0000, -1, -1, 100);
CreateVehicle(407, 754.4648, -1376.0403, 13.5015, 0.0000, -1, -1, 100);
CreateVehicle(407, 749.5014, -1376.4821, 13.5015, 0.0000, -1, -1, 100);
CreateVehicle(407, 744.3215, -1376.6385, 13.5015, 0.0000, -1, -1, 100);
CreateVehicle(407, 738.8726, -1376.9880, 13.5015, 0.0000, -1, -1, 100);
CreateVehicle(416, 782.7485, -1337.3077, 13.1959, -180.0000, -1, -1, 100);
CreateVehicle(416, 777.5339, -1337.5166, 13.1959, -180.0000, -1, -1, 100);
CreateVehicle(416, 772.9915, -1337.8817, 13.1959, -180.0000, -1, -1, 100);
CreateVehicle(416, 767.6431, -1338.0320, 13.1959, -180.0000, -1, -1, 100);
CreateVehicle(416, 762.2260, -1338.1608, 13.1959, -180.0000, -1, -1, 100);
CreateVehicle(416, 757.1249, -1338.4475, 13.1959, -180.0000, -1, -1, 100);
CreateVehicle(416, 752.0022, -1338.8030, 13.1959, -180.0000, -1, -1, 100);
CreateVehicle(416, 747.1167, -1338.7532, 13.1959, -180.0000, -1, -1, 100);
CreateVehicle(416, 742.2950, -1338.8513, 13.1959, -180.0000, -1, -1, 100);
CreateVehicle(416, 737.7606, -1338.9016, 13.1959, -180.0000, -1, -1, 100);</pre>
</div>
<br />
SPER ca va place, tchauuuuu<br />
<br />
<br />
<br />
<b>Nici vă rugăm să vorbesc comprendeme romвnă vorbesc spaniolă și de a folosi un traducător pentru această publicație</b>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=248125">Kla</a>]]></name>
		</author>
		<published>2016-08-03T09:51:00Z</published>
		<updated>2016-08-03T09:51:00Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=613989" />
		<id>https://sampforum.blast.hk/showthread.php?tid=613989</id>
		<title xml:space="preserve"><![CDATA[[GameMode] Protect the President]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=613989"><![CDATA[Salut SA:MP! Astazi am decis sa postez un gamemode facut de mine: KroNix - Protect the President ( KroNix pentru ca a fost facut pentru KroNix).<br />
<br />
<br />
<b><font size="5">Ce e Protect the President?</font></b><br />
<br />
Protect the President este un mod unic in Romania. La conectare, ai de ales dintre mai multe clase ( <a href="http://imgur.com/4daQajN):" target="_blank">http://imgur.com/4daQajN):</a><br />
<br />
<b>• President</b> - Aceasta este cea mai importanta clasa din joc. Obiective: Supravietuirea timp de 10 minute / Ajungerea la Air Force One si pilotarea pana la checkpointul marcat ( <a href="http://i.imgur.com/oUlOgD2.png" target="_blank">http://i.imgur.com/oUlOgD2.png</a>). ATENTIE: Aceasta este cea mai periculoasa clasa, deoarece toti vor incerca sa te omoare!<br />
<b>• Vice-President</b> - Aceasta este a doua cea mai importanta clasa din joc. Obiective: Inlocuirea presedintelui, daca este nevoie!<br />
<b>• Securitatea</b> - Obiective: Protejarea Presedintelui / Escortarea acestuia pana la Air Force One!<br />
<b>• Teroristii</b> - Obiective: asasinarea Presedintelui!<br />
<br />
<br />
<br />
<b><font size="5">Ce 'Air Force One'?</font></b><br />
Air Force One este un avion aflat pe <b>Aeroportul Los Santos </b>( <a href="http://imgur.com/gV9ylOW" target="_blank">http://imgur.com/gV9ylOW</a>), care este blocat de o poarta ( <a href="http://imgur.com/k2o03KE" target="_blank">http://imgur.com/k2o03KE</a>) care se deschide doar la Presedinte / Vice-Presedinte / Securitate. Nu va fi asa prea greu pentru Teroristi? NU! Teroristii pot detona poarta folosind tot<b> /gate</b>!<br />
<br />
<br />
<b><font size="5">Poze:</font></b><br />
<br />
Uitati si pozele:<br />
<br />
Comenzi [ /help ] : <a href="http://i.imgur.com/ASLmsQN.png" target="_blank">http://i.imgur.com/ASLmsQN.png</a><br />
RCON Security: <a href="http://i.imgur.com/RFBDCbX.png" target="_blank">http://i.imgur.com/RFBDCbX.png</a><br />
Admin Control Panel [ /acp ]: <a href="http://i.imgur.com/gZK2T1m.png" target="_blank">http://i.imgur.com/gZK2T1m.png</a><br />
<b><br />
Download link:</b> <a href="http://www.fileshare.ro/e31801482" target="_blank">Fileshare.ro</a><br />
<b>VirusTotal scan:</b> <a href="https://www.virustotal.com/en/url/dd5b9f616371965cb46c38fd2424c4691cf2cc42d81ce4e11f0d665ffd112ceb/analysis/1462202571/" target="_blank">VirusTotal.com</a><br />
<font color="Red"><b><font size="2"><br />
(!) This gamemode is both in Romanian and in English. 90% of the texts are translated into both languages.</font></b></font>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=255707">TheRullZ</a>]]></name>
		</author>
		<published>2015-10-30T20:20:00Z</published>
		<updated>1970-01-01T00:00:01Z</updated>
		<link rel="alternate" type="text/html" href="https://sampforum.blast.hk/showthread.php?tid=592888" />
		<id>https://sampforum.blast.hk/showthread.php?tid=592888</id>
		<title xml:space="preserve"><![CDATA[[GameMode] eXtreme Stunt World V1]]></title>
		<content type="html" xml:space="preserve" xml:base="https://sampforum.blast.hk/showthread.php?tid=592888"><![CDATA[<div align="center"><b><font size="5"><font color="RoyalBlue">eXtreme</font> <font color="Yellow">Stunt</font> <font color="Red">World</font> <font color="LightBlue">(</font><font color="Orange">V1</font> <font color="LightBlue">-</font> <font color="Orange">0.3.7</font><font color="LightBlue">)</font></font></b></div>
<font size="4"><font color="LightBlue">• Informatii (</font><font color="Orange">Must Read!</font><font color="LightBlue">)</font></font><br />
Acest GameMode este unul facut 90% de mine ([XSW]RullZ_, [XSS]Seby, [RNG]Seby, care cum ma stiti) si 10% de alti doi Scripteri care au fost impreuna cu mine pe comunitatea cu acelasi nume fondata si, dupa parasirea mea, inchisa, in acest an (2015). Este un GameMode care nu are, din pacate, toate sistemele dorite de jucatori si scripteri, dar sistemele pe care le are, le are atent lucrate. Foarte atent. Ma simt in stare sa bag mana in foc ca nu gasiti pe net sistemele mele, scriptate cum le veti vedea in acest GameMode. Oricum, garantez ca acest GameMode nu se gaseste pe net si la nimeni in afara de cei 3 scripteri. Ma rog, nu se gasea, la momentul la care citesti tu acest topic probabil ca zeci de persoane il au deja. Este, cel mai probabil, singurul GameMode pus pe net care are nivelul acesta de optimizare si, mai ales, nivelul acesta de calitate a script-urilor. Fiecare sistem a fost reconstruit de minim 3-4 ori. Am lucrat la acest GM din 13 Noiembrie 2014 pana prin Mai 2015, cand am decis sa iau o pauza. In acea perioada scriptam de multe ori si 6-7 ore pe zi la el, adaugand chestii noi (nu luate din alte servere, ci facute de la 0) si reconstruind ceea ce era deja prin el. Nu era zi pe saptamana sa nu il citesc din cap in cap si sa fac modificari.<br />
<br />
Am renuntat sa mai lucrez la el pentru ca in perioada aia aparuse GTA V, si na, m-am apucat de 'gaming'... Ar fi trebuit sa lansez comunitatea in Iunie anul acesta (2015), dar amanasem lucrarile la server/site/forum prea mult. Prin Iulie am avut o tentativa de a ma reapuca de a lucra la el, dar fix in saptamana aceea am primit de la niste rude GTA V original, si m-am apucat de GTA Online -.-<br />
Prin August l-am dat prietenului meu [XSW]Edward ([XSW]Eddu., [XSS]Eddu, [RNG]Eddu, care cum il stiti), sa isi faca comunitate cu el. I-am promis ca il sustin. In August si-a facut comunitate, l-am sustinut si ajutat non-stop, dar la cateva zile dupa lansare probabil si-a dat seama ca nu e de el asa ceva, asa ca i-am gasit un scripter, Eddu urmand sa ramana doar Owner, eu continuand sa ii sustin, scripter-ul fiind un prieten vechi de-al meu ([XSW]Liviu, [RNG]Liviu, [RNG]XGamer, care cum il stiti si pe asta <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>) ) cu care am lucrat la cateva proiecte mai vechi de ale mele (RXS, RNG V4, etc.). Ei doi, cu sustinerea mea, au tinut comunitatea Online pana in Septembrie, si dupa au renuntat la tot. Greseala lor, parerea mea. Nu sunt prea multi cei ce aveau un astfel de GameMode la vremea aceea, facut de la 0, cu un Site unic in 'industrie'... Sa nu mai vorbim ca staff-ul era intr-o oarecare masura provenit de pe vechiul RNG sau chiar si de pe XSS, deci reclama isi puteau face usor, la lansare comunitatea avand in primele zile de cateva ori chiar si 50/50... Server-ul mai avea nevoie de cateva (la vremea aceea) mici imbunatatiri si adaugiri, iar Site-ul la fel... Deci lansat in August, in Decembrie de Christmas Edition trebuia sa fie deja foarte populat si placut de toti... Fraieri au fost respectivii Owneri, asa-i ?.. Unii spun ca mai fraier am fost eu ca am dat un asa GM pe mana lor, ca sa faca in el Update-uri neingrijite (se poate vedea unde nu am scriptat eu in GM... din pacate), in loc sa imi fac eu o comunitate geniala cu el... Poate ca asa e, poate eu am fost cel mai fraier, mai ales ca prietenii mei ma sustineau atunci in acest proiect, si le multumesc si imi cer scuze ca i-am dezamagit (Erika (Jess), DarkReturn, Alex.. si altii...). Dar poate ca asa a fost cel mai bine...<br />
<br />
Am zis mai sus ca GM-ul nu e complet. Nu e complet deoarece nu am avut niciodata timp sa il termin. L-am dat altor persoane sa se ocupe de el, au facut ce au putut, si a ramas in stadiul in care il veti vedea mai jos. <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/> Enjoy!<br />
<br />
<font size="4"><font color="LightBlue">• Poze</font></font><br />
<br />
<div align="center"><img alt="" border="0" src="http://s22.postimg.org/vd4yxjhj5/screenshot_106.png"/><br />
<font color="Red">Primul Dialog care apare dupa Conectare</font><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/l4chrpthd/screenshot_107.png"/><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/57dpv0135/screenshot_108.png"/><br />
<font color="Red">Account System</font><br />
<br />
<img alt="" border="0" src="http://s32.postimg.org/gkziru5at/screenshot_345.png"/><br />
<font color="Red">/Credits - Most Important Dialog</font><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/ict813uyp/screenshot_109.png"/><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/fk00h2um9/screenshot_110.png"/><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/4loqyw60x/screenshot_111.png"/><br />
<font color="Red">/Cmds</font><br />
<br />
* Poza asta nu o fac sa se vada direct, e prea mare * <a href="http://s22.postimg.org/4zuoc8fi7/sa_mp_006.png" target="_blank">http://s22.postimg.org/4zuoc8fi7/sa_mp_006.png</a><br />
<font color="Red">/CreateClan si TD-urile Server-ului</font><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/a4vvtusg1/screenshot_116.png"/><br />
<font color="Red">/VCmds</font><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/4uqx2k875/screenshot_117.png"/><br />
<font color="Red">/Speed</font><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/z0pbhcf41/screenshot_118.png"/><br />
<font color="Red">/VUP</font><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/85kbzk4g1/screenshot_121.png"/><br />
<font color="Red">/MP3, /Radio with /vAccount Radio-Start/Stop Preference</font><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/4zzq9cltt/screenshot_122.png"/><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/8kvlskqdd/screenshot_123.png"/><br />
<br />
<img alt="" border="0" src="http://s22.postimg.org/n6mmgtn5t/screenshot_125.png"/><br />
<font color="Red">/house, /property (/prop)</font></div>
** Restul Pozelor nu au mai incaput active, asa ca le-am pus cu Link-uri pentru cine e interesat **<br />
<br />
<a href="http://s22.postimg.org/fww01029t/screenshot_119.png" target="_blank">http://s22.postimg.org/fww01029t/screenshot_119.png</a> - <font color="Red">/Stats</font><br />
<a href="http://s22.postimg.org/kwtg8y7wh/screenshot_120.png" target="_blank">http://s22.postimg.org/kwtg8y7wh/screenshot_120.png</a> - <font color="Red">/V, /Car</font><br />
<a href="http://s22.postimg.org/unvtw1cox/screenshot_126.png" target="_blank">http://s22.postimg.org/unvtw1cox/screenshot_126.png</a> - <font color="Red">/vAccount</font><br />
<a href="http://s22.postimg.org/6lf015w1t/screenshot_127.png" target="_blank">http://s22.postimg.org/6lf015w1t/screenshot_127.png</a> - <font color="Red">Favorite Radio - /vAccount (or /mp3)</font><br />
<a href="http://s22.postimg.org/v373p1ym9/screenshot_128.png" target="_blank">http://s22.postimg.org/v373p1ym9/screenshot_128.png</a> - <font color="Red">/Teles</font><br />
<a href="http://s22.postimg.org/5lop5ggw1/screenshot_129.png" target="_blank">http://s22.postimg.org/5lop5ggw1/screenshot_129.png</a> - <font color="Red">/Admins</font><br />
<a href="http://s22.postimg.org/tqpen616p/screenshot_130.png" target="_blank">http://s22.postimg.org/tqpen616p/screenshot_130.png</a> - <font color="Red">/VIPs</font><br />
<a href="http://s22.postimg.org/4m2znhr41/screenshot_131.png" target="_blank">http://s22.postimg.org/4m2znhr41/screenshot_131.png</a> - <font color="Red">/GodP (working on /GodMode and /GodCar both)</font><br />
<a href="http://s22.postimg.org/ff0ul5cox/screenshot_115.png" target="_blank">http://s22.postimg.org/ff0ul5cox/screenshot_115.png</a> - <font color="Red">Top Clans</font><br />
<a href="http://s22.postimg.org/5gfvyo39d/screenshot_114.png" target="_blank">http://s22.postimg.org/5gfvyo39d/screenshot_114.png</a> - <font color="Red">/cm</font><br />
<a href="http://s22.postimg.org/px0jrr98h/screenshot_132.png" target="_blank">http://s22.postimg.org/px0jrr98h/screenshot_132.png</a> - <font color="Red">/AStats</font><br />
<a href="http://s22.postimg.org/cu4x8hj0h/screenshot_133.png" target="_blank">http://s22.postimg.org/cu4x8hj0h/screenshot_133.png</a> - <font color="Red">USAGE-urile unor Comenzi</font><br />
<a href="http://s22.postimg.org/buemcs3up/screenshot_135.png" target="_blank">http://s22.postimg.org/buemcs3up/screenshot_135.png</a> - <font color="Red">/DM</font><br />
<a href="http://s22.postimg.org/4sgoql08x/screenshot_136.png" target="_blank">http://s22.postimg.org/4sgoql08x/screenshot_136.png</a> - <font color="Red">/Int</font><br />
<a href="http://s22.postimg.org/68s78q35t/screenshot_137.png" target="_blank">http://s22.postimg.org/68s78q35t/screenshot_137.png</a> - <font color="Red">/Tune</font><br />
<a href="http://s22.postimg.org/4pn5sw0w1/screenshot_113.png" target="_blank">http://s22.postimg.org/4pn5sw0w1/screenshot_113.png</a> - <font color="Red">/Clan</font><br />
<a href="http://s22.postimg.org/caztz7rlt/screenshot_138.png" target="_blank">http://s22.postimg.org/caztz7rlt/screenshot_138.png</a> - <font color="Red">/Gang @@@ Must See *** It looks lovely @@@</font><br />
<a href="http://s22.postimg.org/a8zckytmp/screenshot_140.png" target="_blank">http://s22.postimg.org/a8zckytmp/screenshot_140.png</a> - <font color="Red">! - Clan (or Gang) Chat, @ - Admin Chat - # VIP Chat, * - RCON Chat.</font><br />
<a href="http://s22.postimg.org/3l7cc3zi9/screenshot_142.png" target="_blank">http://s22.postimg.org/3l7cc3zi9/screenshot_142.png</a> - <font color="Red">/Jobs (by Eddu or Liviu)</font><br />
<a href="http://s22.postimg.org/sfclhkz9d/screenshot_112.png" target="_blank">http://s22.postimg.org/sfclhkz9d/screenshot_112.png</a> - <font color="Red">Finalizarea /CreateClan</font><br />
<a href="http://s22.postimg.org/dl28s0arl/screenshot_144.png" target="_blank">http://s22.postimg.org/dl28s0arl/screenshot_144.png</a> - <font color="Red">/GStats</font><br />
<a href="http://s22.postimg.org/7y5vuj88x/screenshot_145.png" target="_blank">http://s22.postimg.org/7y5vuj88x/screenshot_145.png</a> - <font color="Red">/Settings (Gang Settings)</font><br />
<a href="http://s22.postimg.org/p18nq1oxt/screenshot_146.png" target="_blank">http://s22.postimg.org/p18nq1oxt/screenshot_146.png</a> - <font color="Red">In Car-TD</font><br />
<a href="http://s22.postimg.org/4idrkzb0h/screenshot_147.png" target="_blank">http://s22.postimg.org/4idrkzb0h/screenshot_147.png</a> - <font color="Red">Click on Player</font><br />
<a href="http://s22.postimg.org/vhhmg4xhd/screenshot_148.png" target="_blank">http://s22.postimg.org/vhhmg4xhd/screenshot_148.png</a> - <font color="Red">/Rules</font><br />
<a href="http://s22.postimg.org/qrrorj6gx/sa_mp_042.png" target="_blank">http://s22.postimg.org/qrrorj6gx/sa_mp_042.png</a> - <font color="Red">/cc, /LSAir, TD-urile (cel de Summer Edition a fost dezactivat la finalul verii), /hm. TD-ul 'X has joined the server' are Random Colors.</font><br />
<a href="http://s22.postimg.org/96trg6075/screenshot_149.png" target="_blank">http://s22.postimg.org/96trg6075/screenshot_149.png</a> - <font color="Red">/Race &amp; /Races (by Eddu). NU garantez ca nu e de pe net partial. Eu din Mai nu am mai scriptat la acest server. Tot ce a fost facut de atunci si pana acum, adica tot ce nu se afla in changelog.txt (gasiti fisierul in server) se poate sa nu fie facut de la 0. Am mentionat si mai sus ce nu e facut de mine. Pe langa /Race, in poza se mai vede si /Set.</font><br />
<a href="http://s22.postimg.org/z7cnvajy9/screenshot_134.png" target="_blank">http://s22.postimg.org/z7cnvajy9/screenshot_134.png</a> - <font color="Red">/ChangeName - Cel mai compelx sistem din Server. Chiar daca numele pe care ti-l doresti este luat, daca stii parola de la acel cont, poti folosi numele pastrandu-ti statisticile.</font><br />
<br />
<font size="4"><font color="LightBlue">• Download Link (</font><font color="Red">Old!</font><font color="LightBlue">)</font></font><br />
<a href="https://www.dropbox.com/s/2s179hjggeltove/XSW%20V1.rar?dl=0" target="_blank">https://www.dropbox.com/s/2s179hjgge...%20V1.rar?dl=0</a> - <font color="Red">Dropbox Link</font>. Mi se pare cel mai ok. Am stat cam mult sa Uploadez tot, sunt multe fisiere .mp3, deci nu o sa stau sa mai incarc arhiva si pe alte Site-uri. Daca aveti probleme la Download, imi spuneti si le rezolvam.<br />
<br />
<font size="4"><font color="LightBlue">• Download Link (</font><font color="Lime">New!</font><font color="LightBlue">)</font></font><br />
<a href="https://www.dropbox.com/s/dwuth6bsnkpv9gx/eXtreme%20Stunt%20World.rar?dl=0" target="_blank">https://www.dropbox.com/s/dwuth6bsnk...World.rar?dl=0</a> - <font color="Red">Nu va recomand sa folositi vechiul Link!</font> Am adus cateva imbunatatiri pentru cei ce sunt mai incepatori in domeniul SA-MP-ului in intreaga arhiva, si am adaugat ceva ce pe toti va va interesa... Din greseala, in arhiva pe care o gasiti in vechiul Link v-am pus un fel de preview, un BETA al Site-ului cu care a trait XSW-ul, ci nu tot site-ul final, si prin dosarul GameModes era o jale totala. Acum am ordonat totul si v-am lasat in arhiva (in scriptfiles =&#x26;t Server WebSite) atat BETA-ul Site-ului, cat si varianta 'finala'. In GameMode am dezactivat functia ConnectedIPs pentru a scapa de acel Warning urat. Daca doriti sa activati Anti Flood-urile, trebuie sa reparati functia ConnectedIPs pentru a nu mai crede Server-ul ca toti playerii au IP-ul 255.255.255.255.<br />
<br />
<font size="4"><font color="Red">• De Stiut</font></font><br />
- Parola RCON este '1234'. Ea merge schimbata din GameMode, mai exact la 'public OnGameModeInit()'.<br />
- Parola Server-ului este '13112014'. Ea merge schimbata din server.cfg.<br />
- /ACmds nu a fost creat. Ar fi trebuit sa fie pe Site, dar n-a mai apucat nimeni sa-l faca. Nici /RCmds nu exista. In schimb, in GameMode gasiti foarte usor comenzile de VIP, Admin, Gold VIP, RCON, House System, etc. Sunt foarte bine asezate si aranjate toate. <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/><br />
- Merita sa arunci un ochi peste comenzile de RCON din GameMode sau cele ascunse in Maps.pwn.<br />
- Gang System-ul este doar inceput. Are bazele puse (nu ma refer la Mape, Baze de Gang-uri, ci bazele sistemului sunt puse), dar n-are comenzi/functii prea multe. <img alt="" border="0" class="inlineimg" src="images/smilies/sad.gif" title="Sad"/> Eu am facut bazele, Eddu /settings si inca ceva.<br />
- Interioarele sunt inregistrate si preluate la OnGameModeInit din Baza de Date. La fel si Race-urile si Drift-urile, Cont-urile, Clanurile si Gang-urile nici n-are rost sa mai zic, la fel si masinile personale si multe alte chestii, gen +1000 case, +100 Proprietati, etc.. Fiind toate incarcate la pornire, in timpul rularii, server-ul n-are pic de lag. Toate datele sunt luate din Baza de Date si salvate in variabile. /Ticks imi da dreptate. Server-ul este pe MySQL R34. mysql_debug este dezactivat, ceea ce inseamna ca mysql_log.txt nu are de ce sa apara deloc. Daca nu instalati server-ul corespunzator, se va crea si va va spune ce ati facut gresit.<br />
- /mp3 se leaga in timp real la <a href="http://www.XSW-Servers.com" target="_blank">www.XSW-Servers.com</a>, pentru a-si prelua listele de melodii si pentru a reda in timp real melodiile direct de pe Host. Din pacate, <a href="http://www.XSW-Servers.com" target="_blank">www.XSW-Servers.com</a> nu mai exista, asa ca daca vrei sa ai parte de o experienta completa a Server-ului, iti recomand sa iti instalezi in PC Site-ul pe care il gasesti in scriptfiles =&#x26;t Server WebSite, si sa iti legi frumos Server-ul de Site, cum il legi neaparat si de Baza de Date pentru a il putea rula corespunzator. Poti cauta pe ****** cum sa instalezi un Site folosind Wamp Server. Site-ul XSW-ului se leaga de exact aceeasi Baza de Date pe care ti-o vei instala in Wamp Server / Xampp Server, de care se leaga si Server-ului de SA-MP.<br />
<b><font color="Red">• Recomand - Old Download Link!</font></b> sa folositi din scriptfiles =&#x26;t Backups =&#x26;t DataBase Backups =&#x26;t 2015 versiunea ce are numele '24th of August 2015 - Last Eddu Update - Stable Backup.sql'. Este cea mai recenta si, cred, singura compatibila cu toate sistemele Server-ului.<br />
<b><font color="Red">• Recomand - New Download Link!</font></b> sa cititi 'Read Me'-ul pe care il gasiti in arhiva server-ului. El va va explica exact ce e cu fiecare GameMode din dosarul 'gamemodes' si va va explica si ce Baza de Date sa folositi pentru a va putea porni cu succes Server-ul.<br />
- Toate cont-urile au parolele criptate in format SHA1. Dupa fiecare conectare (mai exact dupa ce te spawnezi), daca nu ai un E-Mail in cont, Server-ul iti cere sa introduci unul, pentru a-ti putea recupera statisticile in caz ca iti uiti parola. Pe Site aveam sistem de Login bazat pe cont-ul de pe Server, dar nu mai tin minte daca avea sau nu si Recover Password... Nu am apucat sa finalizam nici Site-ul.<br />
- In scriptfiles se poate gasi si site-ul compatibil cu acest server (atat versiunea BETA a Site-ului, cat si cea Finala - din pacate, cea finala are cateva erori de care nu s-a mai ocupat nimeni, dar cu un pic de ambitie, ele se repara usor - Site-ul nu este nici el finalizat, din acelasi motiv din care nici GM-ul nu este finalizat, din pacate).<br />
- Intre fisierele Site-ului se afla si partea de 'Online' a sistemului /MP3. Daca va puneti Site-ul in Wamp si il faceti functional (il legati la Baza de Date a server-ului) si daca conectati frumos si Server-ul la DB-ul lui si la localhost, aveti sanse de 100% sa functioneze absolut toate 'feature'-urile fara nici cea mai mica problema. Daca nu, va recomand sa va documentati despre cum se foloseste Wamp Server sau alte programe asemanatoare. Totul se leaga de ceea ce gasiti in 'header'-ul Server-ului (SQL_Host, SQL_User, SQL_Pass, SQL_DB, WEB_URL) si in 'header'-ul Site-ului.<br />
<br />
<font color="Red">For OLD Download Link!:</font><br />
- XSW.pwn este versiunea la care am lucrat doar eu si, din pacate, cea mai 'goala' versiune. XSW_2.pwn este versiunea la care am lucrat eu, dupa care i-am dat-o lui Eddu si a adaugat multe lucruri noi facute sau nu de el, iar XSW_3.pwn este cea mai completa versiune, cea la care am lucrat toti 3 scripterii (eu, Eddu si Liviu) si care a ramas, din pacate, versiunea finala a XSW-ului. Va recomand sa o folositi pe a 3-a. Tests.pwn este GM-ul nostru de Teste. Toate FS-urile in afara de Maps.pwn au fost sau ar fi urmat sa fie folosite de noi. N-aveti nevoie de niciunul pentru 'o experienta completa' a Server-ului.<br />
- In Topic-ul acesta nu apar toate functiile Server-ului. Una importanta despre care nu am spus nimic pana acum ar fi /SPassword (tot cu crypt in SHA1). Restul, va las sa le descoperiti. <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/> Idem cu functiile Site-ului.<br />
<br />
<font color="Red">For NEW Download Link!:</font><br />
- XSW_Beta_Original.pwn este versiunea la care am lucrat DOAR EU si, din pacate, cea mai 'goala' versiune a server-ului, deoarece eu m-am lasat primul de script, si am dat server-ul prietenilor mei.<br />
- XSW_Full.pwn este versiunea cea mai completa, versiunea la care am lucrat eu, dupa care au lucrat Eddu si Liviu. Ea este si versiunea finala a server-ului...<br />
- In dosarul scriptfiles gasiti printre altele si 'Best DataBase - with Data.sql', aceasta fiind baza de date cu care va recomand sa rulati 'XSW_Full.amx'. Este cea mai completa Baza de Date a server-ului, si contine tot ce exista pe server inainte de inchiderea comunitatii (cont-uri, clan-uri, gang-uri, etc.). Este usor de golit, dar aveti grija la AUTO_INCREMENT, pentru a nu se crea bug-uri (cei ce stiu sa o goleasca ar trebui sa stie si la ce fac referire aici).<br />
- Va recomand insistent sa cititi Read Me-ul pe care il gasiti in arhiva. Sper ca stiti engleza. El va va explica multe.<br />
- Nu va garantez ca Site-ul va va functiona imediat ce veti modifica datele de conectare la Baza de Date din Header. S-ar putea sa fie nevoie sa faceti niste modificari si la partea de CSS sau JS (cum ar fi in Header sa modificati din <a href="http://localhost/XSW/Others/CSS/XSW-Styles.css" target="_blank">http://localhost/XSW/Others/CSS/XSW-Styles.css</a> in ce stiu eu ce alt URL, sau in Others =&#x26;t CSS =&#x26;t XSW-Styles.css sa modificati absolut toate link-urile pe care le gasiti...). Cei ce au mai lucrat in PHP/HTML, stiu la ce fac referire, si mai mult ca sigur se vor descurca in a-si instala Site-ul.<br />
<br />
<font size="4"><font color="LightBlue">• Final</font></font><br />
Acesta nu este nici pe departe cel mai ok GameMode. Dar pe net se gasesc mii de alte GM-uri mult mai jalnice. Sper sa fie de folos cuiva, mai ales cuiva la inceput de drum. Sper sa gasiti multe lucruri utile, interesante sau macar 'de apreciat' prin el, si sper sa il vad in cateva saptamani folosit de toti cei ce v-ati saturat de WoS-uri sau alte GM-uri 'cu de toate', mai exact 'de toate facute jalnic, stupid, prost' sau cum vreti voi sa ziceti. <img alt="" border="0" class="inlineimg" src="images/smilies/smile.png" title="Smiley"/>)<br />
Doar o rugaminte am: Nu modificati la /Credits prima categorie, cea cu Scripterii. De preferat nici cea cu Mapperii sau cea de la WebSite. Eddu chiar a facut Mape frumoase. TD-urile la fel, sunt facute tot de el. Toate. Iar Site-ul este si el frumos si muncit destul de mult.<br />
<br />
Hope you'll enjoy my GameMode! Any questions or problems you have, you can tell me here, in English or Romanian.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>