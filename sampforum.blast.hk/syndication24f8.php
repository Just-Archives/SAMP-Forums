<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[SA-MP Forums Archive - Tutorials]]></title>
		<link>https://sampforum.blast.hk/</link>
		<description><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></description>
		<pubDate>Thu, 28 Jul 2022 20:45:31 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[[Tutorial] Wreck Car After Respawn [Easily]]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=677255</link>
			<pubDate>Tue, 07 Jul 2020 15:41:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=164432">supermember</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=677255</guid>
			<description><![CDATA[I am New developer, And I have Low skill for sa-mp.<br />
<i>[I am weak english]</i><br />
<br />
I am open a server for real life. But sometimes players often seize the opportunity to Spawn car, such as Drive the car fall water without Mechanic's repair. I try to fix this problems but I am new developer [weak developer]<br />
<br />
First : I try to make Save health's Car into Mysql but I can't make it. <br />
Second : I am think to easy make and I tried not related to the database.<br />
<br />
Yep! I choose the second method.  and I think it basic for all gamemode.<br />
<br />
<b>Begin</b> : make it<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">new Float:VehicleDamage[MAX_VEHICLES];</pre>
</div><b>Next : </b> <b>Find to : </b><font color="Blue">public OnVehicleDeath(vehicleid)</font><br />
<b>Describe : </b><i>When The Vehicle was damage by something such as Fall the water, Weapon or Crash</i><br />
<i>It's Check = 1.</i><br />
<b>Type : </b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">VehicleDamage[vehicleid] = 1;</pre>
</div><b>Next : Find </b><font color="blue">public OnVehicleSpawn(vehicleid)</font><br />
<b>Describe :</b> <i>If the vehicledamage = 1 ,  It will determine what the vehicle will look like.</i><br />
<b>TYPE:</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 114px;
		text-align: left;
		overflow: auto">if(VehicleDamage[vehicleid] == 1)
    {
	UpdateVehicleDamageStatus(vehicleid, panels, doors, lights, 15);//If want to Show look the car's damage
        SetVehicleHealth(vehicleid, 300);//Set Health After Respawn
        VehicleDamage[vehicleid] = 0; // Back Check this car to 0
    }</pre>
</div>This is working, But If you're Restart Server Or Vehicle's Respawn. The Car is comeback to Full hp.<br />
-----------------------------------------------------------------------------------------------------------------<br />
<br />
I developed knowledge from...<br />
<br />
Credit : SharpenBlade<br />
<a href="https://sampforum.blast.hk/showthread.php?tid=676775" target="_blank">https://sampforum.blast.hk/showthread.php?tid=676775</a>]]></description>
			<content:encoded><![CDATA[I am New developer, And I have Low skill for sa-mp.<br />
<i>[I am weak english]</i><br />
<br />
I am open a server for real life. But sometimes players often seize the opportunity to Spawn car, such as Drive the car fall water without Mechanic's repair. I try to fix this problems but I am new developer [weak developer]<br />
<br />
First : I try to make Save health's Car into Mysql but I can't make it. <br />
Second : I am think to easy make and I tried not related to the database.<br />
<br />
Yep! I choose the second method.  and I think it basic for all gamemode.<br />
<br />
<b>Begin</b> : make it<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">new Float:VehicleDamage[MAX_VEHICLES];</pre>
</div><b>Next : </b> <b>Find to : </b><font color="Blue">public OnVehicleDeath(vehicleid)</font><br />
<b>Describe : </b><i>When The Vehicle was damage by something such as Fall the water, Weapon or Crash</i><br />
<i>It's Check = 1.</i><br />
<b>Type : </b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">VehicleDamage[vehicleid] = 1;</pre>
</div><b>Next : Find </b><font color="blue">public OnVehicleSpawn(vehicleid)</font><br />
<b>Describe :</b> <i>If the vehicledamage = 1 ,  It will determine what the vehicle will look like.</i><br />
<b>TYPE:</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 114px;
		text-align: left;
		overflow: auto">if(VehicleDamage[vehicleid] == 1)
    {
	UpdateVehicleDamageStatus(vehicleid, panels, doors, lights, 15);//If want to Show look the car's damage
        SetVehicleHealth(vehicleid, 300);//Set Health After Respawn
        VehicleDamage[vehicleid] = 0; // Back Check this car to 0
    }</pre>
</div>This is working, But If you're Restart Server Or Vehicle's Respawn. The Car is comeback to Full hp.<br />
-----------------------------------------------------------------------------------------------------------------<br />
<br />
I developed knowledge from...<br />
<br />
Credit : SharpenBlade<br />
<a href="https://sampforum.blast.hk/showthread.php?tid=676775" target="_blank">https://sampforum.blast.hk/showthread.php?tid=676775</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] Creating Menus/Dialog Box's]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676988</link>
			<pubDate>Fri, 26 Jun 2020 07:52:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=255802">SkyFlare</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676988</guid>
			<description><![CDATA[<font size="4"><div align="center"><b><br />
<font color="DarkRed"><u>Creating A Menu with a Dialog</u></font></b></div></font><div align="center"><b><font color="DarkRed"><font size="2"><br />
<br />
<u>Syntax for Dialogs</u><br />
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
<span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, **</span><span style="color: #0000BB">DIALOGID</span><span style="color: #007700">**, **</span><span style="color: #0000BB">DIALOGSTYLE</span><span style="color: #007700">**, </span><span style="color: #DD0000">"**DIALOGTITLE**"</span><span style="color: #007700">, </span><span style="color: #DD0000">"**DIALOGBODYCONTENT**"</span><span style="color: #007700">, </span><span style="color: #DD0000">"**LEFTBUTTONTEXT**"</span><span style="color: #007700">, </span><span style="color: #DD0000">"**RIGHTBUTTONTEXT**"</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>DialogID - This is used to reference a Dialog in different area's of your Gamemode/Filterscript.<br />
DialogStyle - This is a multi choice depending what kind of Dialog Style you need or want, you will learn about these in this tutorial.<br />
DialogTitle - This goes on the Dialog at the top, as the Title shown.<br />
DialogBodyContent - This is what is in the middle of your Dialog, weather that is Text,Numbers,Items etc, you will also learn how to create Listitems in this tutorial.<br />
Left &amp; Right Button - This is to make your Dialogs Responsive and do different things, adding extra dialogs to open after you click it, or do certain tasks.<br />
<br />
<br />
<u>Setting Up Framework for Dialogs</u><br />
We will use an Enumerator for this, so we don't have to constantly define numbers and have a possibility of forgetting DialogID's along the way.<br />
If you don't know how to use an Enumerator, there is a great Article about this already.<br />
<a href="https://sampforum.blast.hk/showthread.php?tid=318307" target="_blank">https://sampforum.blast.hk/showthread.php?tid=318307</a><br />
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
<span style="color: #0000BB">enum
<br/></span><span style="color: #007700">{
<br/>    </span><span style="color: #0000BB">DIALOG_UNUSED
<br/></span><span style="color: #007700">}; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>First off the bat, you'll want to make sure this Enumerator is placed at the top of your script, below your Includes,Defines, beside any custom Global Variables you've created already.<br />
<br />
What is DIALOG_UNUSED? This is basically DIALOG ID 0, we are using this as a placeholder and I will explain why.<br />
<br />
Say you have your Help Command, which just shows all the available CMD's on your server, but it doesn't do anything else when you click the Menu Buttons on the Dialog? That mean's we wont need to use OnDialogResponse Callback's features for that Dialog, and if there is any more Dialogs you have, that have no functions with the buttons, you also wont need OnDialogResponse's Features, therefore you're able to use the same Dialog ID, so we can just use DIALOG_UNUSED like this<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">ShowPlayerDialog(playerid, DIALOG_UNUSED, DIALOG_STYLE_MSGBOX, "Messagebox Title 1", "This is Information inside the first Messagebox", "Ok", "");

ShowPlayerDialog(playerid, DIALOG_UNUSED, DIALOG_STYLE_MSGBOX, "Messagebox Title 2", "This is Information inside the second Messagebox", "Okay", "");</pre>
</div><u>DIALOG_STYLE_MSGBOX</u><br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/a/a1/Dialog_style_msgbox.png"/><br />
This is a MessageBox, You can fit a lot of text into these, It's useful for Help Commands such as /ahelp or /help<br />
or even /stats or whatever feature you want, like maybe even Text Messages in a Roleplay Gamemode?<br />
Literally your Imagination will be the limit of this Dialog's Usage.<br />
<br />
So lets create one!<br />
First we should have another look at that Enumerator <br />
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
<span style="color: #0000BB">enum
<br/></span><span style="color: #007700">{
<br/>    </span><span style="color: #0000BB">DIALOG_UNUSED
<br/></span><span style="color: #007700">}; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>We can add more DialogID's we are actually going to use with response functions, so for now lets just show a Helpful MessageBox with information.<br />
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
<span style="color: #0000BB">enum
<br/></span><span style="color: #007700">{
<br/>    </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">,
<br/>    </span><span style="color: #0000BB">DIALOG_HELP</span><span style="color: #007700">,
<br/>    </span><span style="color: #0000BB">DIALOG_HELP2
<br/></span><span style="color: #007700">}; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>So now we have the DialogID DIALOG_HELP and DIALOG_HELP2 defined and now ready to be used, so lets use them in a Command.<br />
<br />
NOTE: I am not creating a tutorial on CMDS and Processors, this is ZCMD Format, if you can't understand it then I suggest you go study it a little.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">help</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    </span><span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_HELP</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_MSGBOX</span><span style="color: #007700">, </span><span style="color: #DD0000">"Help Page 1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"This is Page 1 of the Help Messagebox"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Page 2"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Exit"</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Now that we have that Command created, if you were to test it, you'd notice typing /help will show a Messagebox, with what we wrote in it, furthermore youll notice the Page 2 Button does not actually do anything, so lets change that and make it do something.<br />
<br />
First I would like to mention, using Switches is the best method here, youll have less confusion with your code and switch brings some great benefits and in some cases less code to actually write.<br />
<br />
And theres been mention if youre running filterscripts with dialogs in them, that when youre coding your dialog response  you should be returning 0, ill quote something here for you guys.<br />
<br />
<div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table border="0" cellpadding="6" cellspacing="0" width="100%">
<tr>
<td class="alt2" style="border: 1px solid #C2C2C2; font-size: 8pt;">
<div>
					Originally Posted by <strong>l0gic</strong><br />
<a href="showthread.php?pid=4153136#pid4153136" rel="nofollow"><img alt="View Post" border="0" class="inlineimg" src="images/buttons/viewpost.gif"/></a><br />
</div>
<div style="font-style:italic">OnDialogResponse<br />
"Returning 0 in this callback will pass the dialog to another script in case no matching code were found in your gamemode's callback.<br />
It is always called first in filterscripts so returning 1 there blocks other filterscripts from seeing it."</div>
</td>
</tr>
</table>
</div>In my opinion all dialogs should be together and in one place however thats not always the case, so return however you need, thanks l0gic for this information, but lets pretend all our dialogs are just in the gamemode for this Tutorial.<br />
<br />
So lets do our response for our help command we created.<br />
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
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnDialogResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">dialogid</span><span style="color: #007700">, </span><span style="color: #0000BB">response</span><span style="color: #007700">, </span><span style="color: #0000BB">listitem</span><span style="color: #007700">, </span><span style="color: #0000BB">inputtext</span><span style="color: #007700">[])
<br/>{
<br/>    switch(</span><span style="color: #0000BB">dialogid</span><span style="color: #007700">)
<br/>    {
<br/>        case </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">: return </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">//This is the Empty Dialog that isn't used as I previously mentioned.
<br/>        </span><span style="color: #007700">case </span><span style="color: #0000BB">DIALOG_HELP</span><span style="color: #007700">:</span><span style="color: #FF8000">//This is our Help Dialog called from CMD:help
<br/>        </span><span style="color: #007700">{
<br/>            if(!</span><span style="color: #0000BB">response</span><span style="color: #007700">) return </span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #FF8000">//This is the Exit Button we made, the right side Button
<br/>            </span><span style="color: #007700">else if(</span><span style="color: #0000BB">response</span><span style="color: #007700">)</span><span style="color: #FF8000">//This is the Page 2 Button we made, the left side Button
<br/>            </span><span style="color: #007700">{
<br/>                </span><span style="color: #FF8000">//We want to show the Page 2 Dialog now that they have pressed the Help Page 2 Button
<br/>                </span><span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_HELP2</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_MSGBOX</span><span style="color: #007700">, </span><span style="color: #DD0000">"Help Page 2"</span><span style="color: #007700">, </span><span style="color: #DD0000">"This is Page 2 of the Help Messagebox"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Page 1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Exit"</span><span style="color: #007700">);
<br/>                return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>            }
<br/>        }
<br/>        case </span><span style="color: #0000BB">DIALOG_HELP2</span><span style="color: #007700">:</span><span style="color: #FF8000">//This is our Page 2 Dialog Response, called from DIALOG_HELP Button
<br/>        </span><span style="color: #007700">{
<br/>            if(!</span><span style="color: #0000BB">response</span><span style="color: #007700">) return </span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #FF8000">//This is the Exit Button we made, the right side Button
<br/>            </span><span style="color: #007700">else if(</span><span style="color: #0000BB">response</span><span style="color: #007700">)</span><span style="color: #FF8000">//This is the Page 1 Button we made, the left side Button, to take us back to the Page 1 Dialog
<br/>            </span><span style="color: #007700">{
<br/>                </span><span style="color: #FF8000">//We want to show the Page 1 Dialog now that they have pressed the Help Page 1 Button
<br/>                </span><span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_HELP</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_MSGBOX</span><span style="color: #007700">, </span><span style="color: #DD0000">"Help Page 1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"This is Page 1 of the Help Messagebox"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Page 2"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Exit"</span><span style="color: #007700">);
<br/>                return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>            }
<br/>        }
<br/>    }
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Now if you go ingame and test that, you'll see that /help still works the same, but the button "Page 2" Actually displays the Page 2 Dialog now.<br />
and if we click the "Page 1" Button, you'll be directed back to the 1st Page of Help.<br />
Things to note: You can add new lines in a Messagebox by writing "\n" within the Text for the Messagebox Content, See Below as an Example.<br />
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
<span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_MSGBOX</span><span style="color: #007700">, </span><span style="color: #DD0000">"Line Testing"</span><span style="color: #007700">, </span><span style="color: #DD0000">"This is Line 1\nThis is Line 2\nThis is Line 3"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Ok"</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>
<br />
<br />
<u>DIALOG_STYLE_INPUT</u><br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/d/d5/Dialog_style_input.png"/><br />
This is an Input Box, This can be used for many different things, Setting a Skin ID, by typing it into the Dialog Input, anything to do with Numbers really, or even Strings!, changing a players name can be done here aswell!<br />
<br />
SOoOoO let's create a Name Change Input Box! <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/><br />
<br />
First off, we will add a new DialogID into our Enum, name it DIALOG_CHANGENAME<br />
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
<span style="color: #0000BB">enum
<br/></span><span style="color: #007700">{
<br/>    </span><span style="color: #0000BB">DIALOG_CHANGENAME
<br/></span><span style="color: #007700">}; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Now we have a Dialog ID for Change Name Dialog, we can make the Command to show the Dialog itself.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">changename</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    </span><span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_CHANGENAME</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_INPUT</span><span style="color: #007700">, </span><span style="color: #DD0000">"Change Name"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Enter your new desired Name you wish to use:"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Change"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Exit"</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>There we go, if you go ingame, you'll see when you type /changename, a dialog will show up, with an input field, to change your name, however it won't do anything, because again, we have not setup the response in OnDialogResponse.<br />
<br />
So let's do that now!<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 338px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnDialogResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">dialogid</span><span style="color: #007700">, </span><span style="color: #0000BB">response</span><span style="color: #007700">, </span><span style="color: #0000BB">listitem</span><span style="color: #007700">, </span><span style="color: #0000BB">inputtext</span><span style="color: #007700">[])
<br/>{
<br/>    switch(</span><span style="color: #0000BB">dialogid</span><span style="color: #007700">)
<br/>    {
<br/>        case </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">: return </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">//This is the Empty Dialog that isn't used as I previously mentioned.
<br/>        </span><span style="color: #007700">case </span><span style="color: #0000BB">DIALOG_CHANGENAME</span><span style="color: #007700">:</span><span style="color: #FF8000">//This is our Changename Dialog called from CMD:changename
<br/>        </span><span style="color: #007700">{
<br/>            if(!</span><span style="color: #0000BB">response</span><span style="color: #007700">) return </span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #FF8000">//This is the Exit Button we made, the right side Button
<br/>            </span><span style="color: #007700">else if(</span><span style="color: #0000BB">response</span><span style="color: #007700">)</span><span style="color: #FF8000">//This is the Change Button we made, the left side Button
<br/>            </span><span style="color: #007700">{
<br/>                if(!</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">inputtext</span><span style="color: #007700">) || </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">inputtext</span><span style="color: #007700">) &gt; </span><span style="color: #0000BB">24</span><span style="color: #007700">) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"Name Changing requires the name to be of a length between 1-24"</span><span style="color: #007700">);</span><span style="color: #FF8000">//This checks if they typed nothing or too much.
<br/>                //We want to Change the Players Username based on what they typed in the Box earlier since we now know its between 1-24, so we use "inputtext" for that again.
<br/>                </span><span style="color: #0000BB">SetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">inputtext</span><span style="color: #007700">);</span><span style="color: #FF8000">//This will change the players name based on what they wrote in the Input Dialog.
<br/>                </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"You have successfully changed your name, enjoy!"</span><span style="color: #007700">);
<br/>                return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>            }
<br/>        }
<br/>    }
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Now when you go ingame, typing /changename and enter a name in the Input Box, you'll notice your name will be changed!, quite a small basic feature but you can imagine how complicated it would get, if you want to check if another player has that name, but this is for the sake of a Tutorial and learning to use the Dialog's themselves, not feature packed Functions within them.<br />
<br />
<u>DIALOG_STYLE_LIST</u><br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/b/b1/Dialog_style_list.png"/><br />
This is a ListBox, personally my favorite of them all, because of how Dynamic this can be, and its functions, so much use within this 1 Dialog type that it's hard for me to pick a Feature to use for the Tutorial, Teleport List? Yeah lets do it.<br />
<br />
So again, we need that Enum to have our new Dialog ID, name it DIALOG_TELEPORTS.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">enum
<br/></span><span style="color: #007700">{
<br/>    </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">,
<br/>    </span><span style="color: #0000BB">DIALOG_TELEPORTS
<br/></span><span style="color: #007700">}; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Now we have a Dialog ID for Teleport List, we can make the Command to show the Dialog itself.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">teleport</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    </span><span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_TELEPORTS</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_LIST</span><span style="color: #007700">, </span><span style="color: #DD0000">"Teleport"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Los Santos\nSan Fierro\nLas Venturas"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Teleport"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Exit"</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>See how we are using that "\n" in the string there, thats because again we are making a new line, like how I exampled earlier, but this time, it does a little more than adding a new "line", let me explain this here.<br />
"Los Santos" will be now on its own line, and when we click only that line, its response would be different than "San Fierro" or "Las Venturas"<br />
they basically get split up into a ***LIST*** <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/> Simple right? sure is!<br />
<br />
So if we go ingame, yet again we can use the Command associated with our new Dialog Type, /teleport, we can click all 3 but nothing will happen because again OnDialogResponse needs to be coded for it, so lets get going with our response code.<br />
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
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnDialogResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">dialogid</span><span style="color: #007700">, </span><span style="color: #0000BB">response</span><span style="color: #007700">, </span><span style="color: #0000BB">listitem</span><span style="color: #007700">, </span><span style="color: #0000BB">inputtext</span><span style="color: #007700">[])
<br/>{
<br/>    switch(</span><span style="color: #0000BB">dialogid</span><span style="color: #007700">)
<br/>    {
<br/>        case </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">: return </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">//This is the Empty Dialog that isn't used as I previously mentioned.
<br/>        </span><span style="color: #007700">case </span><span style="color: #0000BB">DIALOG_TELEPORTS</span><span style="color: #007700">:</span><span style="color: #FF8000">//This is our Teleports Dialog called from CMD:teleport
<br/>        </span><span style="color: #007700">{
<br/>            if(!</span><span style="color: #0000BB">response</span><span style="color: #007700">) return </span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #FF8000">//This is the Exit Button we made, the right side Button
<br/>            </span><span style="color: #007700">else if(</span><span style="color: #0000BB">response</span><span style="color: #007700">)</span><span style="color: #FF8000">//This is the Teleport Button we made, the left side Button
<br/>            </span><span style="color: #007700">{
<br/>                switch(</span><span style="color: #0000BB">listitem</span><span style="color: #007700">)</span><span style="color: #FF8000">//This is switching ListItems, self explanatory BUT this is smart, them "\n" we added play the role on determining how many List Items we have.
<br/>                </span><span style="color: #007700">{
<br/>                    </span><span style="color: #FF8000">//We always start with "0" which is essentially the First List Item from the top.
<br/>                    </span><span style="color: #007700">case </span><span style="color: #0000BB">0</span><span style="color: #007700">:</span><span style="color: #FF8000">//Los Santos Teleport
<br/>                    </span><span style="color: #007700">{
<br/>                        </span><span style="color: #0000BB">SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">1532.0996</span><span style="color: #007700">,-</span><span style="color: #0000BB">1675.6741</span><span style="color: #007700">,</span><span style="color: #0000BB">13.3828</span><span style="color: #007700">);
<br/>                        </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"You've teleported to Los Santos"</span><span style="color: #007700">);
<br/>                        return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>                    }
<br/>                    case </span><span style="color: #0000BB">1</span><span style="color: #007700">:</span><span style="color: #FF8000">//San Fierro Teleport
<br/>                    </span><span style="color: #007700">{
<br/>                        </span><span style="color: #0000BB">SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">2649.0630</span><span style="color: #007700">,</span><span style="color: #0000BB">21.0362</span><span style="color: #007700">,</span><span style="color: #0000BB">6.1328</span><span style="color: #007700">,</span><span style="color: #0000BB">357.6369</span><span style="color: #007700">); </span><span style="color: #FF8000">// San Fierro
<br/>                        </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"You've teleported to San Fierro"</span><span style="color: #007700">);
<br/>                        return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>                    }
<br/>                    case </span><span style="color: #0000BB">2</span><span style="color: #007700">:</span><span style="color: #FF8000">//Las Venturas Teleport
<br/>                    </span><span style="color: #007700">{
<br/>                        </span><span style="color: #0000BB">SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">1687.0597</span><span style="color: #007700">,</span><span style="color: #0000BB">1446.8789</span><span style="color: #007700">,</span><span style="color: #0000BB">10.7688</span><span style="color: #007700">,</span><span style="color: #0000BB">275.8561</span><span style="color: #007700">); </span><span style="color: #FF8000">// Las Venturas
<br/>                        </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"You've teleported to Las Venturas"</span><span style="color: #007700">);
<br/>                        return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>                    }
<br/>                }
<br/>            }
<br/>        }
<br/>    }
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>That should be perfect, going ingame, typing /teleport should bring us to our Teleport Menu with our 3 Options, selecting one and pressing "Teleport" Button should teleport us to the desired Location now, you can easily add onto this list and create more teleports and modify the existing ones.<br />
<br />
<u>DIALOG_STYLE_PASSWORD</u><br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/f/f8/Dialog_style_password.png"/><br />
This is a Password Input, exactly the same type of Input Dialog as the standard Input one we used to change our name, but this one simply covers the password with the<br />
hidden character, during input... using this is exactly the same as DIALOG_STYLE_INPUT.<br />
Create one and see for yourself, you'd use this specifically for a password screen.<br />
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
<span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">PUTDIALOGIDHERE</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_PASSWORD</span><span style="color: #007700">, </span><span style="color: #DD0000">"Password"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Things you type here will be shown as a password:"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Ok"</span><span style="color: #007700">,</span><span style="color: #DD0000">""</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>
<br />
And that concludes the Tutorial, I seen a few different Tutorials for Dialogs, I even created one myself a few years ago, however that was in 2012 and I wasn't as smart as I am now, so reiterating on it, with switches and decent examples of usage, hopefully this helps someone, it's good to know how to use these, even with all the Textdraws nowadays I still personally prefer Dialogs, feel free to comment any ideas for another Tutorial if you guys need help with something else.<br />
</font></font></b></div>]]></description>
			<content:encoded><![CDATA[<font size="4"><div align="center"><b><br />
<font color="DarkRed"><u>Creating A Menu with a Dialog</u></font></b></div></font><div align="center"><b><font color="DarkRed"><font size="2"><br />
<br />
<u>Syntax for Dialogs</u><br />
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
<span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, **</span><span style="color: #0000BB">DIALOGID</span><span style="color: #007700">**, **</span><span style="color: #0000BB">DIALOGSTYLE</span><span style="color: #007700">**, </span><span style="color: #DD0000">"**DIALOGTITLE**"</span><span style="color: #007700">, </span><span style="color: #DD0000">"**DIALOGBODYCONTENT**"</span><span style="color: #007700">, </span><span style="color: #DD0000">"**LEFTBUTTONTEXT**"</span><span style="color: #007700">, </span><span style="color: #DD0000">"**RIGHTBUTTONTEXT**"</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>DialogID - This is used to reference a Dialog in different area's of your Gamemode/Filterscript.<br />
DialogStyle - This is a multi choice depending what kind of Dialog Style you need or want, you will learn about these in this tutorial.<br />
DialogTitle - This goes on the Dialog at the top, as the Title shown.<br />
DialogBodyContent - This is what is in the middle of your Dialog, weather that is Text,Numbers,Items etc, you will also learn how to create Listitems in this tutorial.<br />
Left &amp; Right Button - This is to make your Dialogs Responsive and do different things, adding extra dialogs to open after you click it, or do certain tasks.<br />
<br />
<br />
<u>Setting Up Framework for Dialogs</u><br />
We will use an Enumerator for this, so we don't have to constantly define numbers and have a possibility of forgetting DialogID's along the way.<br />
If you don't know how to use an Enumerator, there is a great Article about this already.<br />
<a href="https://sampforum.blast.hk/showthread.php?tid=318307" target="_blank">https://sampforum.blast.hk/showthread.php?tid=318307</a><br />
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
<span style="color: #0000BB">enum
<br/></span><span style="color: #007700">{
<br/>    </span><span style="color: #0000BB">DIALOG_UNUSED
<br/></span><span style="color: #007700">}; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>First off the bat, you'll want to make sure this Enumerator is placed at the top of your script, below your Includes,Defines, beside any custom Global Variables you've created already.<br />
<br />
What is DIALOG_UNUSED? This is basically DIALOG ID 0, we are using this as a placeholder and I will explain why.<br />
<br />
Say you have your Help Command, which just shows all the available CMD's on your server, but it doesn't do anything else when you click the Menu Buttons on the Dialog? That mean's we wont need to use OnDialogResponse Callback's features for that Dialog, and if there is any more Dialogs you have, that have no functions with the buttons, you also wont need OnDialogResponse's Features, therefore you're able to use the same Dialog ID, so we can just use DIALOG_UNUSED like this<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">ShowPlayerDialog(playerid, DIALOG_UNUSED, DIALOG_STYLE_MSGBOX, "Messagebox Title 1", "This is Information inside the first Messagebox", "Ok", "");

ShowPlayerDialog(playerid, DIALOG_UNUSED, DIALOG_STYLE_MSGBOX, "Messagebox Title 2", "This is Information inside the second Messagebox", "Okay", "");</pre>
</div><u>DIALOG_STYLE_MSGBOX</u><br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/a/a1/Dialog_style_msgbox.png"/><br />
This is a MessageBox, You can fit a lot of text into these, It's useful for Help Commands such as /ahelp or /help<br />
or even /stats or whatever feature you want, like maybe even Text Messages in a Roleplay Gamemode?<br />
Literally your Imagination will be the limit of this Dialog's Usage.<br />
<br />
So lets create one!<br />
First we should have another look at that Enumerator <br />
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
<span style="color: #0000BB">enum
<br/></span><span style="color: #007700">{
<br/>    </span><span style="color: #0000BB">DIALOG_UNUSED
<br/></span><span style="color: #007700">}; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>We can add more DialogID's we are actually going to use with response functions, so for now lets just show a Helpful MessageBox with information.<br />
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
<span style="color: #0000BB">enum
<br/></span><span style="color: #007700">{
<br/>    </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">,
<br/>    </span><span style="color: #0000BB">DIALOG_HELP</span><span style="color: #007700">,
<br/>    </span><span style="color: #0000BB">DIALOG_HELP2
<br/></span><span style="color: #007700">}; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>So now we have the DialogID DIALOG_HELP and DIALOG_HELP2 defined and now ready to be used, so lets use them in a Command.<br />
<br />
NOTE: I am not creating a tutorial on CMDS and Processors, this is ZCMD Format, if you can't understand it then I suggest you go study it a little.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">help</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    </span><span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_HELP</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_MSGBOX</span><span style="color: #007700">, </span><span style="color: #DD0000">"Help Page 1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"This is Page 1 of the Help Messagebox"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Page 2"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Exit"</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Now that we have that Command created, if you were to test it, you'd notice typing /help will show a Messagebox, with what we wrote in it, furthermore youll notice the Page 2 Button does not actually do anything, so lets change that and make it do something.<br />
<br />
First I would like to mention, using Switches is the best method here, youll have less confusion with your code and switch brings some great benefits and in some cases less code to actually write.<br />
<br />
And theres been mention if youre running filterscripts with dialogs in them, that when youre coding your dialog response  you should be returning 0, ill quote something here for you guys.<br />
<br />
<div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table border="0" cellpadding="6" cellspacing="0" width="100%">
<tr>
<td class="alt2" style="border: 1px solid #C2C2C2; font-size: 8pt;">
<div>
					Originally Posted by <strong>l0gic</strong><br />
<a href="showthread.php?pid=4153136#pid4153136" rel="nofollow"><img alt="View Post" border="0" class="inlineimg" src="images/buttons/viewpost.gif"/></a><br />
</div>
<div style="font-style:italic">OnDialogResponse<br />
"Returning 0 in this callback will pass the dialog to another script in case no matching code were found in your gamemode's callback.<br />
It is always called first in filterscripts so returning 1 there blocks other filterscripts from seeing it."</div>
</td>
</tr>
</table>
</div>In my opinion all dialogs should be together and in one place however thats not always the case, so return however you need, thanks l0gic for this information, but lets pretend all our dialogs are just in the gamemode for this Tutorial.<br />
<br />
So lets do our response for our help command we created.<br />
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
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnDialogResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">dialogid</span><span style="color: #007700">, </span><span style="color: #0000BB">response</span><span style="color: #007700">, </span><span style="color: #0000BB">listitem</span><span style="color: #007700">, </span><span style="color: #0000BB">inputtext</span><span style="color: #007700">[])
<br/>{
<br/>    switch(</span><span style="color: #0000BB">dialogid</span><span style="color: #007700">)
<br/>    {
<br/>        case </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">: return </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">//This is the Empty Dialog that isn't used as I previously mentioned.
<br/>        </span><span style="color: #007700">case </span><span style="color: #0000BB">DIALOG_HELP</span><span style="color: #007700">:</span><span style="color: #FF8000">//This is our Help Dialog called from CMD:help
<br/>        </span><span style="color: #007700">{
<br/>            if(!</span><span style="color: #0000BB">response</span><span style="color: #007700">) return </span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #FF8000">//This is the Exit Button we made, the right side Button
<br/>            </span><span style="color: #007700">else if(</span><span style="color: #0000BB">response</span><span style="color: #007700">)</span><span style="color: #FF8000">//This is the Page 2 Button we made, the left side Button
<br/>            </span><span style="color: #007700">{
<br/>                </span><span style="color: #FF8000">//We want to show the Page 2 Dialog now that they have pressed the Help Page 2 Button
<br/>                </span><span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_HELP2</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_MSGBOX</span><span style="color: #007700">, </span><span style="color: #DD0000">"Help Page 2"</span><span style="color: #007700">, </span><span style="color: #DD0000">"This is Page 2 of the Help Messagebox"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Page 1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Exit"</span><span style="color: #007700">);
<br/>                return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>            }
<br/>        }
<br/>        case </span><span style="color: #0000BB">DIALOG_HELP2</span><span style="color: #007700">:</span><span style="color: #FF8000">//This is our Page 2 Dialog Response, called from DIALOG_HELP Button
<br/>        </span><span style="color: #007700">{
<br/>            if(!</span><span style="color: #0000BB">response</span><span style="color: #007700">) return </span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #FF8000">//This is the Exit Button we made, the right side Button
<br/>            </span><span style="color: #007700">else if(</span><span style="color: #0000BB">response</span><span style="color: #007700">)</span><span style="color: #FF8000">//This is the Page 1 Button we made, the left side Button, to take us back to the Page 1 Dialog
<br/>            </span><span style="color: #007700">{
<br/>                </span><span style="color: #FF8000">//We want to show the Page 1 Dialog now that they have pressed the Help Page 1 Button
<br/>                </span><span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_HELP</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_MSGBOX</span><span style="color: #007700">, </span><span style="color: #DD0000">"Help Page 1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"This is Page 1 of the Help Messagebox"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Page 2"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Exit"</span><span style="color: #007700">);
<br/>                return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>            }
<br/>        }
<br/>    }
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Now if you go ingame and test that, you'll see that /help still works the same, but the button "Page 2" Actually displays the Page 2 Dialog now.<br />
and if we click the "Page 1" Button, you'll be directed back to the 1st Page of Help.<br />
Things to note: You can add new lines in a Messagebox by writing "\n" within the Text for the Messagebox Content, See Below as an Example.<br />
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
<span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_MSGBOX</span><span style="color: #007700">, </span><span style="color: #DD0000">"Line Testing"</span><span style="color: #007700">, </span><span style="color: #DD0000">"This is Line 1\nThis is Line 2\nThis is Line 3"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Ok"</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>
<br />
<br />
<u>DIALOG_STYLE_INPUT</u><br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/d/d5/Dialog_style_input.png"/><br />
This is an Input Box, This can be used for many different things, Setting a Skin ID, by typing it into the Dialog Input, anything to do with Numbers really, or even Strings!, changing a players name can be done here aswell!<br />
<br />
SOoOoO let's create a Name Change Input Box! <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/><br />
<br />
First off, we will add a new DialogID into our Enum, name it DIALOG_CHANGENAME<br />
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
<span style="color: #0000BB">enum
<br/></span><span style="color: #007700">{
<br/>    </span><span style="color: #0000BB">DIALOG_CHANGENAME
<br/></span><span style="color: #007700">}; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Now we have a Dialog ID for Change Name Dialog, we can make the Command to show the Dialog itself.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">changename</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    </span><span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_CHANGENAME</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_INPUT</span><span style="color: #007700">, </span><span style="color: #DD0000">"Change Name"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Enter your new desired Name you wish to use:"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Change"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Exit"</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>There we go, if you go ingame, you'll see when you type /changename, a dialog will show up, with an input field, to change your name, however it won't do anything, because again, we have not setup the response in OnDialogResponse.<br />
<br />
So let's do that now!<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 338px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnDialogResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">dialogid</span><span style="color: #007700">, </span><span style="color: #0000BB">response</span><span style="color: #007700">, </span><span style="color: #0000BB">listitem</span><span style="color: #007700">, </span><span style="color: #0000BB">inputtext</span><span style="color: #007700">[])
<br/>{
<br/>    switch(</span><span style="color: #0000BB">dialogid</span><span style="color: #007700">)
<br/>    {
<br/>        case </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">: return </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">//This is the Empty Dialog that isn't used as I previously mentioned.
<br/>        </span><span style="color: #007700">case </span><span style="color: #0000BB">DIALOG_CHANGENAME</span><span style="color: #007700">:</span><span style="color: #FF8000">//This is our Changename Dialog called from CMD:changename
<br/>        </span><span style="color: #007700">{
<br/>            if(!</span><span style="color: #0000BB">response</span><span style="color: #007700">) return </span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #FF8000">//This is the Exit Button we made, the right side Button
<br/>            </span><span style="color: #007700">else if(</span><span style="color: #0000BB">response</span><span style="color: #007700">)</span><span style="color: #FF8000">//This is the Change Button we made, the left side Button
<br/>            </span><span style="color: #007700">{
<br/>                if(!</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">inputtext</span><span style="color: #007700">) || </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">inputtext</span><span style="color: #007700">) &gt; </span><span style="color: #0000BB">24</span><span style="color: #007700">) return </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"Name Changing requires the name to be of a length between 1-24"</span><span style="color: #007700">);</span><span style="color: #FF8000">//This checks if they typed nothing or too much.
<br/>                //We want to Change the Players Username based on what they typed in the Box earlier since we now know its between 1-24, so we use "inputtext" for that again.
<br/>                </span><span style="color: #0000BB">SetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">inputtext</span><span style="color: #007700">);</span><span style="color: #FF8000">//This will change the players name based on what they wrote in the Input Dialog.
<br/>                </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"You have successfully changed your name, enjoy!"</span><span style="color: #007700">);
<br/>                return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>            }
<br/>        }
<br/>    }
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Now when you go ingame, typing /changename and enter a name in the Input Box, you'll notice your name will be changed!, quite a small basic feature but you can imagine how complicated it would get, if you want to check if another player has that name, but this is for the sake of a Tutorial and learning to use the Dialog's themselves, not feature packed Functions within them.<br />
<br />
<u>DIALOG_STYLE_LIST</u><br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/b/b1/Dialog_style_list.png"/><br />
This is a ListBox, personally my favorite of them all, because of how Dynamic this can be, and its functions, so much use within this 1 Dialog type that it's hard for me to pick a Feature to use for the Tutorial, Teleport List? Yeah lets do it.<br />
<br />
So again, we need that Enum to have our new Dialog ID, name it DIALOG_TELEPORTS.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">enum
<br/></span><span style="color: #007700">{
<br/>    </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">,
<br/>    </span><span style="color: #0000BB">DIALOG_TELEPORTS
<br/></span><span style="color: #007700">}; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Now we have a Dialog ID for Teleport List, we can make the Command to show the Dialog itself.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">teleport</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">params</span><span style="color: #007700">[])
<br/>{
<br/>    </span><span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_TELEPORTS</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_LIST</span><span style="color: #007700">, </span><span style="color: #DD0000">"Teleport"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Los Santos\nSan Fierro\nLas Venturas"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Teleport"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Exit"</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>See how we are using that "\n" in the string there, thats because again we are making a new line, like how I exampled earlier, but this time, it does a little more than adding a new "line", let me explain this here.<br />
"Los Santos" will be now on its own line, and when we click only that line, its response would be different than "San Fierro" or "Las Venturas"<br />
they basically get split up into a ***LIST*** <img alt="" border="0" class="inlineimg" src="images/smilies/biggrin.png" title="Cheesy"/> Simple right? sure is!<br />
<br />
So if we go ingame, yet again we can use the Command associated with our new Dialog Type, /teleport, we can click all 3 but nothing will happen because again OnDialogResponse needs to be coded for it, so lets get going with our response code.<br />
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
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnDialogResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">dialogid</span><span style="color: #007700">, </span><span style="color: #0000BB">response</span><span style="color: #007700">, </span><span style="color: #0000BB">listitem</span><span style="color: #007700">, </span><span style="color: #0000BB">inputtext</span><span style="color: #007700">[])
<br/>{
<br/>    switch(</span><span style="color: #0000BB">dialogid</span><span style="color: #007700">)
<br/>    {
<br/>        case </span><span style="color: #0000BB">DIALOG_UNUSED</span><span style="color: #007700">: return </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">//This is the Empty Dialog that isn't used as I previously mentioned.
<br/>        </span><span style="color: #007700">case </span><span style="color: #0000BB">DIALOG_TELEPORTS</span><span style="color: #007700">:</span><span style="color: #FF8000">//This is our Teleports Dialog called from CMD:teleport
<br/>        </span><span style="color: #007700">{
<br/>            if(!</span><span style="color: #0000BB">response</span><span style="color: #007700">) return </span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #FF8000">//This is the Exit Button we made, the right side Button
<br/>            </span><span style="color: #007700">else if(</span><span style="color: #0000BB">response</span><span style="color: #007700">)</span><span style="color: #FF8000">//This is the Teleport Button we made, the left side Button
<br/>            </span><span style="color: #007700">{
<br/>                switch(</span><span style="color: #0000BB">listitem</span><span style="color: #007700">)</span><span style="color: #FF8000">//This is switching ListItems, self explanatory BUT this is smart, them "\n" we added play the role on determining how many List Items we have.
<br/>                </span><span style="color: #007700">{
<br/>                    </span><span style="color: #FF8000">//We always start with "0" which is essentially the First List Item from the top.
<br/>                    </span><span style="color: #007700">case </span><span style="color: #0000BB">0</span><span style="color: #007700">:</span><span style="color: #FF8000">//Los Santos Teleport
<br/>                    </span><span style="color: #007700">{
<br/>                        </span><span style="color: #0000BB">SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">1532.0996</span><span style="color: #007700">,-</span><span style="color: #0000BB">1675.6741</span><span style="color: #007700">,</span><span style="color: #0000BB">13.3828</span><span style="color: #007700">);
<br/>                        </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"You've teleported to Los Santos"</span><span style="color: #007700">);
<br/>                        return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>                    }
<br/>                    case </span><span style="color: #0000BB">1</span><span style="color: #007700">:</span><span style="color: #FF8000">//San Fierro Teleport
<br/>                    </span><span style="color: #007700">{
<br/>                        </span><span style="color: #0000BB">SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">2649.0630</span><span style="color: #007700">,</span><span style="color: #0000BB">21.0362</span><span style="color: #007700">,</span><span style="color: #0000BB">6.1328</span><span style="color: #007700">,</span><span style="color: #0000BB">357.6369</span><span style="color: #007700">); </span><span style="color: #FF8000">// San Fierro
<br/>                        </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"You've teleported to San Fierro"</span><span style="color: #007700">);
<br/>                        return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>                    }
<br/>                    case </span><span style="color: #0000BB">2</span><span style="color: #007700">:</span><span style="color: #FF8000">//Las Venturas Teleport
<br/>                    </span><span style="color: #007700">{
<br/>                        </span><span style="color: #0000BB">SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">1687.0597</span><span style="color: #007700">,</span><span style="color: #0000BB">1446.8789</span><span style="color: #007700">,</span><span style="color: #0000BB">10.7688</span><span style="color: #007700">,</span><span style="color: #0000BB">275.8561</span><span style="color: #007700">); </span><span style="color: #FF8000">// Las Venturas
<br/>                        </span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"You've teleported to Las Venturas"</span><span style="color: #007700">);
<br/>                        return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>                    }
<br/>                }
<br/>            }
<br/>        }
<br/>    }
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>That should be perfect, going ingame, typing /teleport should bring us to our Teleport Menu with our 3 Options, selecting one and pressing "Teleport" Button should teleport us to the desired Location now, you can easily add onto this list and create more teleports and modify the existing ones.<br />
<br />
<u>DIALOG_STYLE_PASSWORD</u><br />
<img alt="" border="0" src="https://sampwiki.blast.hk/wroot/images2/f/f8/Dialog_style_password.png"/><br />
This is a Password Input, exactly the same type of Input Dialog as the standard Input one we used to change our name, but this one simply covers the password with the<br />
hidden character, during input... using this is exactly the same as DIALOG_STYLE_INPUT.<br />
Create one and see for yourself, you'd use this specifically for a password screen.<br />
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
<span style="color: #0000BB">ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">PUTDIALOGIDHERE</span><span style="color: #007700">, </span><span style="color: #0000BB">DIALOG_STYLE_PASSWORD</span><span style="color: #007700">, </span><span style="color: #DD0000">"Password"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Things you type here will be shown as a password:"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Ok"</span><span style="color: #007700">,</span><span style="color: #DD0000">""</span><span style="color: #007700">); 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>
<br />
And that concludes the Tutorial, I seen a few different Tutorials for Dialogs, I even created one myself a few years ago, however that was in 2012 and I wasn't as smart as I am now, so reiterating on it, with switches and decent examples of usage, hopefully this helps someone, it's good to know how to use these, even with all the Textdraws nowadays I still personally prefer Dialogs, feel free to comment any ideas for another Tutorial if you guys need help with something else.<br />
</font></font></b></div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] An In-Depth philosophy to creating a SA-MP Server.]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=675439</link>
			<pubDate>Tue, 12 May 2020 20:15:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=167414">XStormiest</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=675439</guid>
			<description><![CDATA[<font face="Arial"><br />
<font color="Red">Introduction</font><br />
<font color="Black">Hello, for those of you who do not know me, I've been here for quite a while. I have created several gamemodes and scripts, some of them I published here, and some of them had laid waste in my computer. So far from past years of experience. I have came to the conclusion that I want to share my knowledge with you so you will be able to create a server for your own.<br />
<br />
This tutorial is aimed towards an introduction to simple programming scope and learning how to use simple things like methods, events and variables to attain what you want.<br />
Even though you many deny, most of the time you use only 20% of the programming language to deliver 80%. We use simple things like, ifs, for, while, methods, variable, macros and functions to create that awesome dynamic house system that we so want for our server. While is true that more advanced things like plugins to be able to store data in a database on the internet (MySQL), or be able to use great functions to check if player is colliding with a building (MapAndreeas) or even use simple but powerfull cryptic plugins like Whirlpool. In the end, we still use the same toys but with new power.<br />
</font><br />
<br />
<font color="Red">Content</font><ol style="list-style-type: decimal"><li>Methods</li>
<li>Events</li>
<li>Variables</li>
<li>Redefinitions</li>
</ol>
<font color="Red">Methods</font><br />
<font color="Black">When coming across the internet, you may see a lot of name interpretations, some will those functions, some will call them methods. Methods are just a quick way to deliver a sample of code throughout the code without having to repeat it. We don't want to have to write a 500 line code each time we want to add a new system.<br />
Methods can be used for simple things like, creating a car at the player's position<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">CreateCarAtPlayerPosition(playerid, modelid, Float: rotation, color1, color2, siren)
{
     new Float: X, Float: Y,  Float: Z;
     GetPlayerPos(playerid, X, Y, Z);
     new carid = CreateVehicle(modelid, X, Y, Z, rotation, color1, color2, siren);
     PutPlayerInVehicle(playerid, carid, 0);
     return carid;
}</pre>
</div>You don't have to worry about what these things mean, as they are simply self-explanatory, we are creating three float variables that store numerical value with decimal points, we are getting the player's position with a method called GetPlayerPoss, that requires the three variables we just declared previously. We then create a new variable that stores the id of a car that we are creating. The variable carid stores informations about a vehicle that has a modelid given by the method, the current position of the player, the colors, rotation and siren properties that are given by the method.  We then proceed at the end by putting the player in the vehicle we just created in the seat of the passenger, seat 0. Afer that, we return the id of the vehicle that we created for later code uses.<br />
We do this so next time we want to create a new vehicle we will just do this<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">public OnPlayerSpawn(playerid)
{
    CreateCarAtPlayerPosition(playerid, 411, 0.0, 0, 0, 0);
    return 1;
}</pre>
</div>What this code does is creating an infernus for the player with a rotation of 0, black and without a siren at it's current position when the player spawns. <br />
<br />
Let's say we don't want to specify the rotation each time, or the color, we just want our code to spawn a red vehicle at the player's position that has no sirens and for that we just need to create a new method<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">CreateRedVehicleAtPlayerPosition(playerid, modelid)
{
    return CreateCarAtPlayerPosition(playerid, modelid, 0.0, 3, 0, 0);
}</pre>
</div>See how super-simplified this method got? Now with a simple function we can create any red vehicle we want and at the player's position<br />
The above code and explanation is a philosophy and also a simple guide of how most of the scripts work at their core. Simple methods, that do simple things. It is said, that a method should not do more than just one thing.<br />
We don't want a method that creates the entirety of the server, we create a method for each thing that we want to do.<br />
For example, we can have methods like:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">CreatePlayerVehicleInRangeOf(playerid, Float:range, Float: X, Float: Y, Float: Z);
CreateShopInRangeOf(Float:range, Float: X, Float: Y, Float: Z, interior, virtual_world);
CreatePickupBehindPlayer(playerid, pickupid, type);</pre>
</div>And many more uses as well.  Methods should allow code reuse.<br />
</font><br />
<br />
<font color="red">Events</font><br />
We describe an event as something that occurs when an entity x is influenced by an exterior force that has some kind of effect on the given entity. Thus, we can see, that sa-mp servers has in fact, many events, for example, we have an event that handles what happens when the player joins a server: OnPlayerConnect or when player types on the main chat: OnPlayerText, when types a command: OnPlayerCommandText, so far and so forth. <br />
We can also create events of our own by using timers. Timers allow the posibility of calling a method to act as an event every x amount of time, where x can be any amount of time we want, yes, even years (don't know why you would want that). You can use timers to check if something happens: example -&gt; player is using the minigun. In the timer main method you can make so that if the player indeed uses a minigun and the player is not an admin, a new event is called: OnPlayerCheating(cheaterid)<br />
<br />
A simple example of the explanation above would be this:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">...bla bla #include... blala

public OnGameModeInit()
{
    SetTimer("CheckCheaters", 1000, true);
    return 0;
}

forward CheckCheaters();
public CheckCheaters()
{
    for(new i = 0; i &lt; MAX_PLAYERS; i++)
    {
         if(IsPlayerConnected(i))
         {
              new weapon[13][2];
              for(j = 0; j &lt;= 12; j++)
             {
                  GetPlayerWeaponData(i, j, weapon[j][0], weapon[j][1]);
             }
             
              for(j = 0; j &lt;= 12; j++)
             { 
                  if(weapon[j][0] == 46 &amp;&amp; !IsPlayerAdmin(playerid) ) OnPlayerCheating(i);
             }
         }
    }
    return 1;
}

forward OnPlayerCheating(cheaterid);
public OnPlayerCheating(cheaterid)
{
    new cheater_name[MAX_PLAYER_NAME];
    GetPlayerName(cheaterid, cheater_name, sizeof(cheater_name));
    new message[50];
    format(message, sizeof(message), "%s has been found cheating. Banned", cheater_name);
    SendClientMessageToAll(-1,  message);
    BanEx(cheaterid, "Hacks");
    return 1;
}</pre>
</div>Why use it likes this? Because now you can create multiple checks in the timer for other hacks, example if player is flying and is not in a car or an admin, like this:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">...bla bla #include... blala

public OnGameModeInit()
{
    SetTimer("CheckCheaters", 1000, true);
    return 0;
}

forward CheckCheaters();
public CheckCheaters()
{
    for(new i = 0; i &lt; MAX_PLAYERS; i++)
    {
         if(IsPlayerConnected(i))
         { 
              // weapon check, you can also create a method like: CheckHackWeapon(playerid, weaponid) and use that instead of this whole code
              new weapon[13][2];
              for(j = 0; j &lt;= 12; j++)
             {
                  GetPlayerWeaponData(i, j, weapon[j][0], weapon[j][1]);
             }
             
              for(j = 0; j &lt;= 12; j++)
             { 
                  if(weapon[j][0] == 46 &amp;&amp; !IsPlayerAdmin(playerid) ) OnPlayerCheating(i);
             }

             //flying hack - not in a vehicle check + in a vehicle check
            new Float: X, Float: Y, Float: Z;
            GetPlayerPos(playerid, X, Y, Z);
            new Float: velocityX, Float: velocityY, Float: velocityZ;
            new Float: vehiclevX, Float: vehiclevY, Float: vehiclevZ;
            GetVehicleVelocity(GetPlayerVehicleID(i), vehiclevX, vehiclevY, vehiclevZ);
            GetPlayerVelocity(playerid, X, Y, Z);
            if(!IsPlayerInAnyVehicle(i)) {
            new Float: speed = (( velocityX*velocityX ) + (velocityY * velocityY) + (velocityZ*velocityZ));
                 if(speed &gt; 100) {
                      if(!IsPlayerAdmin(playerid)) OnPlayerCheating(i);
                 }
            }
           else {
               new speed = ( (vehiclevX*vehiclevX) + (vehiclevY*vehiclevY) + (vehiclevZ*vehiclevZ) );
               if(speed &gt; 100) {
                   if(!IsPlayerAdmin(playerid)) OnPlayerCheating(i);
               }
          }
         }
    }
    return 1;
}

forward OnPlayerCheating(cheaterid);
public OnPlayerCheating(cheaterid)
{
    new cheater_name[MAX_PLAYER_NAME];
    GetPlayerName(cheaterid, cheater_name, sizeof(cheater_name));
    new message[50];
    format(message, sizeof(message), "%s has been found cheating. Banned", cheater_name);
    SendClientMessageToAll(-1,  message);
    BanEx(cheaterid, "Hacks");
    return 1;
}</pre>
</div>This is not a tutorial to teach you how to do those things that I just explained and some of the things that I have explained myself, maybe wrong to the ideea that some things may not be precise. There are plenty of great tutorials on this website to teach you on how to create the ideal" anti-flying hack or just direct scripts that let's you add them into your server without much struggle. This is tutorial is not meant to teach you how to do those things, but to give you an ideea about the philosophy of programming language and how to use this philosophy to create great code that can be re-used at any time without having to create a new gamemode just because you forgot what is in your gamemode after not scripting for a while.<br />
<br />
As you can see in the code above, both uses the same method as an event. If the player is passing through this checks in this timer, the method will be called each time, if not, it will not be called<br />
<br />
This is an excellent example, of how we could create an event to handle something, let's say for instance, we want an event that handles what happens when the player creates a new account, or what happens when the player is doing something that is worth creating an event for.<br />
<br />
Yes, some of you may say that timers are not necesarily needed always, that is true, they consume a lot of power and are quite laggy at times. You can also call the method that acts as an event in certain situations. Example, you have an event that handles what happens when the player levels up on an rpg server. In this case you would create for example a method called: AdvancePlayerLevel:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">AdvancePlayerLevel(playerid)
{
     PLAYER_ACCOUNT[playerid][pLevel]++;
     OnPlayerHadLevelUp(playerid, PLAYER_ACCOUNT[playerid][pLevel]);
}</pre>
</div>and thus, we can declare the event method like this.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 162px;
		text-align: left;
		overflow: auto">forward OnPlayerHadLevelUp(playerid, level);
public OnPlayerHadLevelUp(playerid, level)
{
    new name[MAX_PLAYER_NAME];
    GetPlayerName(playerid, name, sizeof(name));
    new message[256];
    format(message, sizeof(message), "%s has advanced to level %d. Congratiolations!",  name, level);
    SendClientMessageToAll(-1, message);
}</pre>
</div>And now we have an event that handles what happens after the player reaches a new level, you can use this new event in any shape you want it. Why not give him ability to use new commands when he levels up to level 10? Or give him a new car at level 15, your imagination is the sky now.<br />
<br />
<font color="Red">[TO-BE-CONTINUED]</font><br />
<br />
<font color="Red">Conclusions</font><br />
Well, as an end, I want to say, I am sorry for any gramatical errors that I may had made in this post, I'll come from time to time to update this post and make it better. Also why I made this post? Well, while it makes perfect sense what I just wrote, it's a great mindset to start with when programming, and not just a sa-mp server. We want to be able to create includes, plugins and scripts that allow us to be able to re-use code without having to write the same thing 500 times over the whole sa-mp server project. We also want code that can handle any situation and events or methods that can come to our aid when want to create a simple method that update's a player's password or deletes or creates an account. <br />
<br />
What's your own tips and advice? <br />
How do you use methods in your script?<br />
How do you use events in your script?<br />
How do you use timers in your scripts?<br />
How do you use variables in your script, or redefinitions?<br />
<br />
Those are simple and good questions, because a great way of creating scripts can save up a long time of struggling to get over an ugly, big and unordered chunk of 27.000 lines code gamemode where everything is shuffled randomly everywhere.<br />
</font>]]></description>
			<content:encoded><![CDATA[<font face="Arial"><br />
<font color="Red">Introduction</font><br />
<font color="Black">Hello, for those of you who do not know me, I've been here for quite a while. I have created several gamemodes and scripts, some of them I published here, and some of them had laid waste in my computer. So far from past years of experience. I have came to the conclusion that I want to share my knowledge with you so you will be able to create a server for your own.<br />
<br />
This tutorial is aimed towards an introduction to simple programming scope and learning how to use simple things like methods, events and variables to attain what you want.<br />
Even though you many deny, most of the time you use only 20% of the programming language to deliver 80%. We use simple things like, ifs, for, while, methods, variable, macros and functions to create that awesome dynamic house system that we so want for our server. While is true that more advanced things like plugins to be able to store data in a database on the internet (MySQL), or be able to use great functions to check if player is colliding with a building (MapAndreeas) or even use simple but powerfull cryptic plugins like Whirlpool. In the end, we still use the same toys but with new power.<br />
</font><br />
<br />
<font color="Red">Content</font><ol style="list-style-type: decimal"><li>Methods</li>
<li>Events</li>
<li>Variables</li>
<li>Redefinitions</li>
</ol>
<font color="Red">Methods</font><br />
<font color="Black">When coming across the internet, you may see a lot of name interpretations, some will those functions, some will call them methods. Methods are just a quick way to deliver a sample of code throughout the code without having to repeat it. We don't want to have to write a 500 line code each time we want to add a new system.<br />
Methods can be used for simple things like, creating a car at the player's position<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">CreateCarAtPlayerPosition(playerid, modelid, Float: rotation, color1, color2, siren)
{
     new Float: X, Float: Y,  Float: Z;
     GetPlayerPos(playerid, X, Y, Z);
     new carid = CreateVehicle(modelid, X, Y, Z, rotation, color1, color2, siren);
     PutPlayerInVehicle(playerid, carid, 0);
     return carid;
}</pre>
</div>You don't have to worry about what these things mean, as they are simply self-explanatory, we are creating three float variables that store numerical value with decimal points, we are getting the player's position with a method called GetPlayerPoss, that requires the three variables we just declared previously. We then create a new variable that stores the id of a car that we are creating. The variable carid stores informations about a vehicle that has a modelid given by the method, the current position of the player, the colors, rotation and siren properties that are given by the method.  We then proceed at the end by putting the player in the vehicle we just created in the seat of the passenger, seat 0. Afer that, we return the id of the vehicle that we created for later code uses.<br />
We do this so next time we want to create a new vehicle we will just do this<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">public OnPlayerSpawn(playerid)
{
    CreateCarAtPlayerPosition(playerid, 411, 0.0, 0, 0, 0);
    return 1;
}</pre>
</div>What this code does is creating an infernus for the player with a rotation of 0, black and without a siren at it's current position when the player spawns. <br />
<br />
Let's say we don't want to specify the rotation each time, or the color, we just want our code to spawn a red vehicle at the player's position that has no sirens and for that we just need to create a new method<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">CreateRedVehicleAtPlayerPosition(playerid, modelid)
{
    return CreateCarAtPlayerPosition(playerid, modelid, 0.0, 3, 0, 0);
}</pre>
</div>See how super-simplified this method got? Now with a simple function we can create any red vehicle we want and at the player's position<br />
The above code and explanation is a philosophy and also a simple guide of how most of the scripts work at their core. Simple methods, that do simple things. It is said, that a method should not do more than just one thing.<br />
We don't want a method that creates the entirety of the server, we create a method for each thing that we want to do.<br />
For example, we can have methods like:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">CreatePlayerVehicleInRangeOf(playerid, Float:range, Float: X, Float: Y, Float: Z);
CreateShopInRangeOf(Float:range, Float: X, Float: Y, Float: Z, interior, virtual_world);
CreatePickupBehindPlayer(playerid, pickupid, type);</pre>
</div>And many more uses as well.  Methods should allow code reuse.<br />
</font><br />
<br />
<font color="red">Events</font><br />
We describe an event as something that occurs when an entity x is influenced by an exterior force that has some kind of effect on the given entity. Thus, we can see, that sa-mp servers has in fact, many events, for example, we have an event that handles what happens when the player joins a server: OnPlayerConnect or when player types on the main chat: OnPlayerText, when types a command: OnPlayerCommandText, so far and so forth. <br />
We can also create events of our own by using timers. Timers allow the posibility of calling a method to act as an event every x amount of time, where x can be any amount of time we want, yes, even years (don't know why you would want that). You can use timers to check if something happens: example -&gt; player is using the minigun. In the timer main method you can make so that if the player indeed uses a minigun and the player is not an admin, a new event is called: OnPlayerCheating(cheaterid)<br />
<br />
A simple example of the explanation above would be this:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">...bla bla #include... blala

public OnGameModeInit()
{
    SetTimer("CheckCheaters", 1000, true);
    return 0;
}

forward CheckCheaters();
public CheckCheaters()
{
    for(new i = 0; i &lt; MAX_PLAYERS; i++)
    {
         if(IsPlayerConnected(i))
         {
              new weapon[13][2];
              for(j = 0; j &lt;= 12; j++)
             {
                  GetPlayerWeaponData(i, j, weapon[j][0], weapon[j][1]);
             }
             
              for(j = 0; j &lt;= 12; j++)
             { 
                  if(weapon[j][0] == 46 &amp;&amp; !IsPlayerAdmin(playerid) ) OnPlayerCheating(i);
             }
         }
    }
    return 1;
}

forward OnPlayerCheating(cheaterid);
public OnPlayerCheating(cheaterid)
{
    new cheater_name[MAX_PLAYER_NAME];
    GetPlayerName(cheaterid, cheater_name, sizeof(cheater_name));
    new message[50];
    format(message, sizeof(message), "%s has been found cheating. Banned", cheater_name);
    SendClientMessageToAll(-1,  message);
    BanEx(cheaterid, "Hacks");
    return 1;
}</pre>
</div>Why use it likes this? Because now you can create multiple checks in the timer for other hacks, example if player is flying and is not in a car or an admin, like this:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">...bla bla #include... blala

public OnGameModeInit()
{
    SetTimer("CheckCheaters", 1000, true);
    return 0;
}

forward CheckCheaters();
public CheckCheaters()
{
    for(new i = 0; i &lt; MAX_PLAYERS; i++)
    {
         if(IsPlayerConnected(i))
         { 
              // weapon check, you can also create a method like: CheckHackWeapon(playerid, weaponid) and use that instead of this whole code
              new weapon[13][2];
              for(j = 0; j &lt;= 12; j++)
             {
                  GetPlayerWeaponData(i, j, weapon[j][0], weapon[j][1]);
             }
             
              for(j = 0; j &lt;= 12; j++)
             { 
                  if(weapon[j][0] == 46 &amp;&amp; !IsPlayerAdmin(playerid) ) OnPlayerCheating(i);
             }

             //flying hack - not in a vehicle check + in a vehicle check
            new Float: X, Float: Y, Float: Z;
            GetPlayerPos(playerid, X, Y, Z);
            new Float: velocityX, Float: velocityY, Float: velocityZ;
            new Float: vehiclevX, Float: vehiclevY, Float: vehiclevZ;
            GetVehicleVelocity(GetPlayerVehicleID(i), vehiclevX, vehiclevY, vehiclevZ);
            GetPlayerVelocity(playerid, X, Y, Z);
            if(!IsPlayerInAnyVehicle(i)) {
            new Float: speed = (( velocityX*velocityX ) + (velocityY * velocityY) + (velocityZ*velocityZ));
                 if(speed &gt; 100) {
                      if(!IsPlayerAdmin(playerid)) OnPlayerCheating(i);
                 }
            }
           else {
               new speed = ( (vehiclevX*vehiclevX) + (vehiclevY*vehiclevY) + (vehiclevZ*vehiclevZ) );
               if(speed &gt; 100) {
                   if(!IsPlayerAdmin(playerid)) OnPlayerCheating(i);
               }
          }
         }
    }
    return 1;
}

forward OnPlayerCheating(cheaterid);
public OnPlayerCheating(cheaterid)
{
    new cheater_name[MAX_PLAYER_NAME];
    GetPlayerName(cheaterid, cheater_name, sizeof(cheater_name));
    new message[50];
    format(message, sizeof(message), "%s has been found cheating. Banned", cheater_name);
    SendClientMessageToAll(-1,  message);
    BanEx(cheaterid, "Hacks");
    return 1;
}</pre>
</div>This is not a tutorial to teach you how to do those things that I just explained and some of the things that I have explained myself, maybe wrong to the ideea that some things may not be precise. There are plenty of great tutorials on this website to teach you on how to create the ideal" anti-flying hack or just direct scripts that let's you add them into your server without much struggle. This is tutorial is not meant to teach you how to do those things, but to give you an ideea about the philosophy of programming language and how to use this philosophy to create great code that can be re-used at any time without having to create a new gamemode just because you forgot what is in your gamemode after not scripting for a while.<br />
<br />
As you can see in the code above, both uses the same method as an event. If the player is passing through this checks in this timer, the method will be called each time, if not, it will not be called<br />
<br />
This is an excellent example, of how we could create an event to handle something, let's say for instance, we want an event that handles what happens when the player creates a new account, or what happens when the player is doing something that is worth creating an event for.<br />
<br />
Yes, some of you may say that timers are not necesarily needed always, that is true, they consume a lot of power and are quite laggy at times. You can also call the method that acts as an event in certain situations. Example, you have an event that handles what happens when the player levels up on an rpg server. In this case you would create for example a method called: AdvancePlayerLevel:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">AdvancePlayerLevel(playerid)
{
     PLAYER_ACCOUNT[playerid][pLevel]++;
     OnPlayerHadLevelUp(playerid, PLAYER_ACCOUNT[playerid][pLevel]);
}</pre>
</div>and thus, we can declare the event method like this.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 162px;
		text-align: left;
		overflow: auto">forward OnPlayerHadLevelUp(playerid, level);
public OnPlayerHadLevelUp(playerid, level)
{
    new name[MAX_PLAYER_NAME];
    GetPlayerName(playerid, name, sizeof(name));
    new message[256];
    format(message, sizeof(message), "%s has advanced to level %d. Congratiolations!",  name, level);
    SendClientMessageToAll(-1, message);
}</pre>
</div>And now we have an event that handles what happens after the player reaches a new level, you can use this new event in any shape you want it. Why not give him ability to use new commands when he levels up to level 10? Or give him a new car at level 15, your imagination is the sky now.<br />
<br />
<font color="Red">[TO-BE-CONTINUED]</font><br />
<br />
<font color="Red">Conclusions</font><br />
Well, as an end, I want to say, I am sorry for any gramatical errors that I may had made in this post, I'll come from time to time to update this post and make it better. Also why I made this post? Well, while it makes perfect sense what I just wrote, it's a great mindset to start with when programming, and not just a sa-mp server. We want to be able to create includes, plugins and scripts that allow us to be able to re-use code without having to write the same thing 500 times over the whole sa-mp server project. We also want code that can handle any situation and events or methods that can come to our aid when want to create a simple method that update's a player's password or deletes or creates an account. <br />
<br />
What's your own tips and advice? <br />
How do you use methods in your script?<br />
How do you use events in your script?<br />
How do you use timers in your scripts?<br />
How do you use variables in your script, or redefinitions?<br />
<br />
Those are simple and good questions, because a great way of creating scripts can save up a long time of struggling to get over an ugly, big and unordered chunk of 27.000 lines code gamemode where everything is shuffled randomly everywhere.<br />
</font>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] How to make a simple discord bot, In Javascript.]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=675430</link>
			<pubDate>Tue, 12 May 2020 15:39:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=347725">JasonTheMan</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=675430</guid>
			<description><![CDATA[<div align="center"><img alt="" border="0" src="https://i.imgur.com/4lePkpX.png"/></div>_________________<br />
<br />
<font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">Introduction</div></font></b></font></font><br />
<br />
<div align="center"><font face="Arial Narrow">Hey there! I released a moderation bot here in the forums today and a lot of people were asking on how I made it, so here I am making a tutorial for everyone. To make a discord bot you can use python or javascript, in this case, we will be using javascript as it is easier (I think so at least). So, I am sure most of you know this but just to make sure ill say it again. Discord is a real-time messaging platform that bills itself as an “all-in-one voice and text chat for gamers.” Due to its slick interface, ease of use, and extensive features, Discord has experienced rapid growth and is becoming increasingly popular even among those with little interest in video games, including the SAMP community. For this bot you can use any kind of editor you want, i recommend Visual Studio Code. Let's start making our bot.</font></div>
<br />
<font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">1 -Create an application in the developer portal</div></font></b></font></font><br />
<br />
<div align="center">Go to - <a href="https://discord.com/developers/applications" target="_blank">https://discord.com/developers/applications</a><br />
After you, Login/Signup create an application.<br />
<br />
<br />
<img alt="" border="0" src="https://i.imgur.com/3cRl33P.png"/></div>
<font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">2 - Create a bot for your application</div></font></b></font></font><br />
<div align="center">Go to your new application and create a bot for it, after that copy the token from it.<br />
<br />
<br />
<img alt="" border="0" src="https://i.imgur.com/ubcqTEW.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/vPGgxfi.png"/></div>
<br />
<font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">3 - Copy the client ID and invite the bot</div></font></b></font></font><br />
<br />
<div align="center">Go to - <a href="https://discordapi.com/permissions.html" target="_blank">https://discordapi.com/permissions.html</a><br />
Enter your Client ID and enable all permissions, then click the link to invite the bot to the desired server.<br />
<br />
<img alt="" border="0" src="https://i.imgur.com/U1tsIqj.png"/></div>
<br />
<font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">4 - Making the actual bot</div></font></b></font></font><br />
<br />
<div align="center">Now read carefully. First of all, you need to download Node.js - <a href="https://nodejs.org/en/download/" target="_blank">https://nodejs.org/en/download/</a><br />
Then you create a folder in your desktop and using the command prompt use "cd" to go to the folder you created.<br />
Then you can do "npm init", you may skip all the steps by pressing enter if you want. This will create a son file.<br />
After that we need to install the discord.js modules, we can do that by typing "npm install discord.js" in the command prompt. Now you will find a folder named "node_modules" in your discord bot's folder. (Ignore the warnings that it will show)<br />
Next, we need to create a new file in our folder called index.js. now we can start making the actual script.<br />
I will only give you the basics, the rest you will have to learn by yourself (I can assist at any time if you need help). Try to write it instead of just copy/pasting, it really helps.<br />
<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 194px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">const </span><span style="color: #0000BB">Discord </span><span style="color: #007700">= require(</span><span style="color: #DD0000">"discord.js"</span><span style="color: #007700">) </span><span style="color: #FF8000">// We require discord.js’s library
<br/></span><span style="color: #007700">const </span><span style="color: #0000BB">client </span><span style="color: #007700">= new </span><span style="color: #0000BB">Discord</span><span style="color: #007700">.</span><span style="color: #0000BB">Client</span><span style="color: #007700">() </span><span style="color: #FF8000">// We initialize it by calling Client()
<br/></span><span style="color: #0000BB">client</span><span style="color: #007700">.</span><span style="color: #0000BB">on</span><span style="color: #007700">(</span><span style="color: #DD0000">"ready"</span><span style="color: #007700">, () =&gt; { </span><span style="color: #FF8000">// Then we listen for the ready event via the on method and we tell how to handle this event with a callback function.
<br/>  </span><span style="color: #0000BB">console</span><span style="color: #007700">.</span><span style="color: #0000BB">log</span><span style="color: #007700">(`</span><span style="color: #DD0000">Logged in as </span><span style="color: #007700">&#36;{</span><span style="color: #0000BB">client</span><span style="color: #007700">.</span><span style="color: #0000BB">user</span><span style="color: #007700">.</span><span style="color: #0000BB">tag</span><span style="color: #007700">}</span><span style="color: #DD0000">!</span><span style="color: #007700">`) </span><span style="color: #FF8000">// Send's a message in the console when the bot starts
<br/></span><span style="color: #007700">})
<br/></span><span style="color: #0000BB">client</span><span style="color: #007700">.</span><span style="color: #0000BB">on</span><span style="color: #007700">(</span><span style="color: #DD0000">"message"</span><span style="color: #007700">, </span><span style="color: #0000BB">msg </span><span style="color: #007700">=&gt; { </span><span style="color: #FF8000">// // Now we listen for the message event via the on method and we tell how to handle this event with a callback function again.
<br/>  </span><span style="color: #007700">if (</span><span style="color: #0000BB">msg</span><span style="color: #007700">.</span><span style="color: #0000BB">content </span><span style="color: #007700">=== </span><span style="color: #DD0000">"ping"</span><span style="color: #007700">) { </span><span style="color: #FF8000">// This tells the bot that if a user types "ping", he should respond with "Pong!"
<br/>    </span><span style="color: #0000BB">msg</span><span style="color: #007700">.</span><span style="color: #0000BB">reply</span><span style="color: #007700">(</span><span style="color: #DD0000">"Pong!"</span><span style="color: #007700">)
<br/>  }
<br/>})
<br/></span><span style="color: #0000BB">client</span><span style="color: #007700">.</span><span style="color: #0000BB">login</span><span style="color: #007700">(</span><span style="color: #DD0000">"token-goes-here"</span><span style="color: #007700">)</span><span style="color: #FF8000">// Here you should put the token you copied from the discord's developer website. 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>To start the bot you can do "node index.js"(or any other name u used), or you can create a .bat file and put in it the following code: <br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">echo </span><span style="color: #0000BB">off
<br/>cls
<br/></span><span style="color: #007700">echo </span><span style="color: #0000BB">Starting Bot
<br/>node index</span><span style="color: #007700">.</span><span style="color: #0000BB">js
<br/>pause 
<br/></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></div><font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">Enjoy!</div></font></b></font></font><br />
<br />
<div align="center">Now this is the most basic bot you may create, there are a lot of other features you may add, economy systems, new commands, etc. No-one was born as a developer It only takes concentration, put some time into it and you will reach perfection. Feel free to ask me any questions you have, ill be glad to respond and assist you.</div>]]></description>
			<content:encoded><![CDATA[<div align="center"><img alt="" border="0" src="https://i.imgur.com/4lePkpX.png"/></div>_________________<br />
<br />
<font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">Introduction</div></font></b></font></font><br />
<br />
<div align="center"><font face="Arial Narrow">Hey there! I released a moderation bot here in the forums today and a lot of people were asking on how I made it, so here I am making a tutorial for everyone. To make a discord bot you can use python or javascript, in this case, we will be using javascript as it is easier (I think so at least). So, I am sure most of you know this but just to make sure ill say it again. Discord is a real-time messaging platform that bills itself as an “all-in-one voice and text chat for gamers.” Due to its slick interface, ease of use, and extensive features, Discord has experienced rapid growth and is becoming increasingly popular even among those with little interest in video games, including the SAMP community. For this bot you can use any kind of editor you want, i recommend Visual Studio Code. Let's start making our bot.</font></div>
<br />
<font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">1 -Create an application in the developer portal</div></font></b></font></font><br />
<br />
<div align="center">Go to - <a href="https://discord.com/developers/applications" target="_blank">https://discord.com/developers/applications</a><br />
After you, Login/Signup create an application.<br />
<br />
<br />
<img alt="" border="0" src="https://i.imgur.com/3cRl33P.png"/></div>
<font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">2 - Create a bot for your application</div></font></b></font></font><br />
<div align="center">Go to your new application and create a bot for it, after that copy the token from it.<br />
<br />
<br />
<img alt="" border="0" src="https://i.imgur.com/ubcqTEW.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/vPGgxfi.png"/></div>
<br />
<font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">3 - Copy the client ID and invite the bot</div></font></b></font></font><br />
<br />
<div align="center">Go to - <a href="https://discordapi.com/permissions.html" target="_blank">https://discordapi.com/permissions.html</a><br />
Enter your Client ID and enable all permissions, then click the link to invite the bot to the desired server.<br />
<br />
<img alt="" border="0" src="https://i.imgur.com/U1tsIqj.png"/></div>
<br />
<font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">4 - Making the actual bot</div></font></b></font></font><br />
<br />
<div align="center">Now read carefully. First of all, you need to download Node.js - <a href="https://nodejs.org/en/download/" target="_blank">https://nodejs.org/en/download/</a><br />
Then you create a folder in your desktop and using the command prompt use "cd" to go to the folder you created.<br />
Then you can do "npm init", you may skip all the steps by pressing enter if you want. This will create a son file.<br />
After that we need to install the discord.js modules, we can do that by typing "npm install discord.js" in the command prompt. Now you will find a folder named "node_modules" in your discord bot's folder. (Ignore the warnings that it will show)<br />
Next, we need to create a new file in our folder called index.js. now we can start making the actual script.<br />
I will only give you the basics, the rest you will have to learn by yourself (I can assist at any time if you need help). Try to write it instead of just copy/pasting, it really helps.<br />
<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 194px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">const </span><span style="color: #0000BB">Discord </span><span style="color: #007700">= require(</span><span style="color: #DD0000">"discord.js"</span><span style="color: #007700">) </span><span style="color: #FF8000">// We require discord.js’s library
<br/></span><span style="color: #007700">const </span><span style="color: #0000BB">client </span><span style="color: #007700">= new </span><span style="color: #0000BB">Discord</span><span style="color: #007700">.</span><span style="color: #0000BB">Client</span><span style="color: #007700">() </span><span style="color: #FF8000">// We initialize it by calling Client()
<br/></span><span style="color: #0000BB">client</span><span style="color: #007700">.</span><span style="color: #0000BB">on</span><span style="color: #007700">(</span><span style="color: #DD0000">"ready"</span><span style="color: #007700">, () =&gt; { </span><span style="color: #FF8000">// Then we listen for the ready event via the on method and we tell how to handle this event with a callback function.
<br/>  </span><span style="color: #0000BB">console</span><span style="color: #007700">.</span><span style="color: #0000BB">log</span><span style="color: #007700">(`</span><span style="color: #DD0000">Logged in as </span><span style="color: #007700">&#36;{</span><span style="color: #0000BB">client</span><span style="color: #007700">.</span><span style="color: #0000BB">user</span><span style="color: #007700">.</span><span style="color: #0000BB">tag</span><span style="color: #007700">}</span><span style="color: #DD0000">!</span><span style="color: #007700">`) </span><span style="color: #FF8000">// Send's a message in the console when the bot starts
<br/></span><span style="color: #007700">})
<br/></span><span style="color: #0000BB">client</span><span style="color: #007700">.</span><span style="color: #0000BB">on</span><span style="color: #007700">(</span><span style="color: #DD0000">"message"</span><span style="color: #007700">, </span><span style="color: #0000BB">msg </span><span style="color: #007700">=&gt; { </span><span style="color: #FF8000">// // Now we listen for the message event via the on method and we tell how to handle this event with a callback function again.
<br/>  </span><span style="color: #007700">if (</span><span style="color: #0000BB">msg</span><span style="color: #007700">.</span><span style="color: #0000BB">content </span><span style="color: #007700">=== </span><span style="color: #DD0000">"ping"</span><span style="color: #007700">) { </span><span style="color: #FF8000">// This tells the bot that if a user types "ping", he should respond with "Pong!"
<br/>    </span><span style="color: #0000BB">msg</span><span style="color: #007700">.</span><span style="color: #0000BB">reply</span><span style="color: #007700">(</span><span style="color: #DD0000">"Pong!"</span><span style="color: #007700">)
<br/>  }
<br/>})
<br/></span><span style="color: #0000BB">client</span><span style="color: #007700">.</span><span style="color: #0000BB">login</span><span style="color: #007700">(</span><span style="color: #DD0000">"token-goes-here"</span><span style="color: #007700">)</span><span style="color: #FF8000">// Here you should put the token you copied from the discord's developer website. 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>To start the bot you can do "node index.js"(or any other name u used), or you can create a .bat file and put in it the following code: <br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">echo </span><span style="color: #0000BB">off
<br/>cls
<br/></span><span style="color: #007700">echo </span><span style="color: #0000BB">Starting Bot
<br/>node index</span><span style="color: #007700">.</span><span style="color: #0000BB">js
<br/>pause 
<br/></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div></div><font face="Impact"><font size="6"><b><font color="RoyalBlue"><div align="center">Enjoy!</div></font></b></font></font><br />
<br />
<div align="center">Now this is the most basic bot you may create, there are a lot of other features you may add, economy systems, new commands, etc. No-one was born as a developer It only takes concentration, put some time into it and you will reach perfection. Feel free to ask me any questions you have, ill be glad to respond and assist you.</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] Anti firing bullets from non-bullet weapon hack]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=673873</link>
			<pubDate>Tue, 07 Apr 2020 06:42:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=5303">beckzy</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=673873</guid>
			<description><![CDATA[In recent days players in my server have been suffering from a game freeze/crash caused by hackers firing bullets from weapon ID 0 (a non-bullet weapon). This was supposedly fixed in the 0.3.7-R2 server, but it doesn't seem to be. This is how you can fix it:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 274px;
		text-align: left;
		overflow: auto">public OnPlayerWeaponShot(playerid, weaponid, hittype, hitid, Float:fX, Float:fY, Float:fZ)
{
    switch (weaponid)
    {
        case 22 .. 34, 38:
        {
            // valid bullet weapon
        }
        default:
        {
            // invalid bullet weapon
            return 0; // desync the shot
        }
    }
    return 1;
}</pre>
</div>]]></description>
			<content:encoded><![CDATA[In recent days players in my server have been suffering from a game freeze/crash caused by hackers firing bullets from weapon ID 0 (a non-bullet weapon). This was supposedly fixed in the 0.3.7-R2 server, but it doesn't seem to be. This is how you can fix it:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 274px;
		text-align: left;
		overflow: auto">public OnPlayerWeaponShot(playerid, weaponid, hittype, hitid, Float:fX, Float:fY, Float:fZ)
{
    switch (weaponid)
    {
        case 22 .. 34, 38:
        {
            // valid bullet weapon
        }
        default:
        {
            // invalid bullet weapon
            return 0; // desync the shot
        }
    }
    return 1;
}</pre>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] Pre-sized random strings]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=670721</link>
			<pubDate>Wed, 20 Nov 2019 16:33:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=326443">OuDayas</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=670721</guid>
			<description><![CDATA[Hi guy's I'm making a little system for my RP server for transfer "money" player to player like an IBAN code...then after taked a look on internet I didn't found nothing interesting, then I tryied a raw method, then it work.<br />
It's various stock for get random strings, number, character.<br />
This is a basic random method, hope you liked and it's usefull for who need it.<br />
(sorry if I wrote wrong, I'm from Italy...then MAMMAMIA MARCELLO, pizzeria, mafia etc <img alt="" border="0" class="inlineimg" src="images/smilies/lol.gif" title="cheesy"/> )<br />
<br />
<div align="center"><b>how to use</b></div>for make it easy this is a little example:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:199px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #000000;">CMD</span><span style="color: #000000;">:</span>test<span style="color: #000000;">(</span>playerid, params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> string<span style="color: #000000;">[</span><span style="color: #000000;">22</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #222222;">format</span><span style="color: #000000;">(</span>string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>string<span style="color: #000000;">)</span>, <span style="color: #000066;">"%s"</span>, SizedRandomNumbers<span style="color: #000000;">(</span><span style="color: #000000;">10</span><span style="color: #000000;">)</span> <span style="color: #000000;">)</span>;<br/>    SendClientMessage<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, string<span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span><br/><span style="color: #228822;">/*<br/>the output will be a string with 10 random numbers<br/>and not like using random(9999999999) where the output can be less than you wanted<br/>*/</span></div></div></pre>
</div>
<div align="center"><b>the code</b></div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:503px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #228822;">/* --- numbers --- */</span><br/><span style="color: #2222BB;">stock</span> SizedRandomNumbers<span style="color: #000000;">(</span>size<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i<span style="color: #000000;">=</span><span style="color: #000000;">0</span>; i<span style="color: #000000;">&lt;</span>size; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%s%d"</span>, str, <span style="color: #222222;">random</span><span style="color: #000000;">(</span><span style="color: #000000;">9</span><span style="color: #000000;">)</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #228822;">/* --- Characters --- */</span><br/><span style="color: #2222BB;">stock</span> SizedRandomUpperCharacters<span style="color: #000000;">(</span>size<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i<span style="color: #000000;">=</span><span style="color: #000000;">0</span>; i<span style="color: #000000;">&lt;</span>size; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">new</span> lettere <span style="color: #000000;">=</span> RandomEx<span style="color: #000000;">(</span><span style="color: #000000;">1</span>, <span style="color: #000000;">26</span><span style="color: #000000;">)</span>;<br/>        <span style="color: #2222BB;">switch</span><span style="color: #000000;">(</span>lettere<span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">1</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sA"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">2</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sB"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">3</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sC"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">4</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sD"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">5</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sE"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">6</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sF"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">7</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sG"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">8</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sH"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">9</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sI"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">10</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sL"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">11</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sM"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">12</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sN"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">13</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sO"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">14</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sP"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">15</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sQ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">16</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sK"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">17</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sJ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">18</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sR"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">19</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sS"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">20</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sT"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">21</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sU"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">22</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sV"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">23</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sZ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">24</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sX"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">25</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sY"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">26</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sW"</span>, str<span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222BB;">stock</span> SizedRandomDownCharacters<span style="color: #000000;">(</span>size<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i<span style="color: #000000;">=</span><span style="color: #000000;">0</span>; i<span style="color: #000000;">&lt;</span>size; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">new</span> lettere <span style="color: #000000;">=</span> RandomEx<span style="color: #000000;">(</span><span style="color: #000000;">1</span>, <span style="color: #000000;">26</span><span style="color: #000000;">)</span>;<br/>        <span style="color: #2222BB;">switch</span><span style="color: #000000;">(</span>lettere<span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">1</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sa"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">2</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sb"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">3</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sc"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">4</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sd"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">5</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%se"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">6</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sf"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">7</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sg"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">8</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sh"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">9</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%si"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">10</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sl"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">11</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sm"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">12</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sn"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">13</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%so"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">14</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sp"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">15</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sq"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">16</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sk"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">17</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sj"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">18</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sr"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">19</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%ss"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">20</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%st"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">21</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%su"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">22</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sv"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">23</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sz"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">24</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sx"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">25</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sy"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">26</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sw"</span>, str<span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222BB;">stock</span> SizedRandomUDCharacters<span style="color: #000000;">(</span>size<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i<span style="color: #000000;">=</span><span style="color: #000000;">0</span>; i<span style="color: #000000;">&lt;</span>size; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">new</span> lettere <span style="color: #000000;">=</span> RandomEx<span style="color: #000000;">(</span><span style="color: #000000;">1</span>, <span style="color: #000000;">52</span><span style="color: #000000;">)</span>;<br/>        <span style="color: #2222BB;">switch</span><span style="color: #000000;">(</span>lettere<span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #228822;">// lettere minuscole</span><br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">1</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sa"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">2</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sb"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">3</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sc"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">4</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sd"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">5</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%se"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">6</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sf"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">7</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sg"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">8</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sh"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">9</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%si"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">10</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sl"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">11</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sm"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">12</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sn"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">13</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%so"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">14</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sp"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">15</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sq"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">16</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sk"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">17</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sj"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">18</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sr"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">19</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%ss"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">20</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%st"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">21</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%su"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">22</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sv"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">23</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sz"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">24</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sx"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">25</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sy"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">26</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sw"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #228822;">// Lettere maiuscole</span><br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">27</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sA"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">28</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sB"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">29</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sC"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">30</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sD"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">31</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sE"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">32</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sF"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">33</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sG"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">34</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sH"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">35</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sI"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">36</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sL"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">37</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sM"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">38</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sN"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">39</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sO"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">40</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sP"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">41</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sQ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">42</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sK"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">43</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sJ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">44</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sR"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">45</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sS"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">46</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sT"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">47</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sU"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">48</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sV"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">49</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sZ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">50</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sX"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">51</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sY"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">52</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sW"</span>, str<span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>]]></description>
			<content:encoded><![CDATA[Hi guy's I'm making a little system for my RP server for transfer "money" player to player like an IBAN code...then after taked a look on internet I didn't found nothing interesting, then I tryied a raw method, then it work.<br />
It's various stock for get random strings, number, character.<br />
This is a basic random method, hope you liked and it's usefull for who need it.<br />
(sorry if I wrote wrong, I'm from Italy...then MAMMAMIA MARCELLO, pizzeria, mafia etc <img alt="" border="0" class="inlineimg" src="images/smilies/lol.gif" title="cheesy"/> )<br />
<br />
<div align="center"><b>how to use</b></div>for make it easy this is a little example:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:199px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #000000;">CMD</span><span style="color: #000000;">:</span>test<span style="color: #000000;">(</span>playerid, params<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> string<span style="color: #000000;">[</span><span style="color: #000000;">22</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #222222;">format</span><span style="color: #000000;">(</span>string, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>string<span style="color: #000000;">)</span>, <span style="color: #000066;">"%s"</span>, SizedRandomNumbers<span style="color: #000000;">(</span><span style="color: #000000;">10</span><span style="color: #000000;">)</span> <span style="color: #000000;">)</span>;<br/>    SendClientMessage<span style="color: #000000;">(</span>playerid, <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, string<span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span><br/><span style="color: #228822;">/*<br/>the output will be a string with 10 random numbers<br/>and not like using random(9999999999) where the output can be less than you wanted<br/>*/</span></div></div></pre>
</div>
<div align="center"><b>the code</b></div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:503px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #228822;">/* --- numbers --- */</span><br/><span style="color: #2222BB;">stock</span> SizedRandomNumbers<span style="color: #000000;">(</span>size<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i<span style="color: #000000;">=</span><span style="color: #000000;">0</span>; i<span style="color: #000000;">&lt;</span>size; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%s%d"</span>, str, <span style="color: #222222;">random</span><span style="color: #000000;">(</span><span style="color: #000000;">9</span><span style="color: #000000;">)</span><span style="color: #000000;">)</span>;<br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #228822;">/* --- Characters --- */</span><br/><span style="color: #2222BB;">stock</span> SizedRandomUpperCharacters<span style="color: #000000;">(</span>size<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i<span style="color: #000000;">=</span><span style="color: #000000;">0</span>; i<span style="color: #000000;">&lt;</span>size; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">new</span> lettere <span style="color: #000000;">=</span> RandomEx<span style="color: #000000;">(</span><span style="color: #000000;">1</span>, <span style="color: #000000;">26</span><span style="color: #000000;">)</span>;<br/>        <span style="color: #2222BB;">switch</span><span style="color: #000000;">(</span>lettere<span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">1</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sA"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">2</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sB"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">3</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sC"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">4</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sD"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">5</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sE"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">6</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sF"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">7</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sG"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">8</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sH"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">9</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sI"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">10</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sL"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">11</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sM"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">12</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sN"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">13</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sO"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">14</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sP"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">15</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sQ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">16</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sK"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">17</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sJ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">18</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sR"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">19</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sS"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">20</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sT"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">21</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sU"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">22</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sV"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">23</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sZ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">24</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sX"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">25</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sY"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">26</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sW"</span>, str<span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222BB;">stock</span> SizedRandomDownCharacters<span style="color: #000000;">(</span>size<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i<span style="color: #000000;">=</span><span style="color: #000000;">0</span>; i<span style="color: #000000;">&lt;</span>size; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">new</span> lettere <span style="color: #000000;">=</span> RandomEx<span style="color: #000000;">(</span><span style="color: #000000;">1</span>, <span style="color: #000000;">26</span><span style="color: #000000;">)</span>;<br/>        <span style="color: #2222BB;">switch</span><span style="color: #000000;">(</span>lettere<span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">1</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sa"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">2</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sb"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">3</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sc"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">4</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sd"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">5</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%se"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">6</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sf"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">7</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sg"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">8</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sh"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">9</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%si"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">10</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sl"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">11</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sm"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">12</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sn"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">13</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%so"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">14</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sp"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">15</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sq"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">16</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sk"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">17</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sj"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">18</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sr"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">19</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%ss"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">20</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%st"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">21</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%su"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">22</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sv"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">23</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sz"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">24</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sx"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">25</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sy"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">26</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sw"</span>, str<span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222BB;">stock</span> SizedRandomUDCharacters<span style="color: #000000;">(</span>size<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">128</span><span style="color: #000000;">]</span>;<br/>    <span style="color: #2222BB;">for</span><span style="color: #000000;">(</span><span style="color: #2222BB;">new</span> i<span style="color: #000000;">=</span><span style="color: #000000;">0</span>; i<span style="color: #000000;">&lt;</span>size; i<span style="color: #000000;">++</span><span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">new</span> lettere <span style="color: #000000;">=</span> RandomEx<span style="color: #000000;">(</span><span style="color: #000000;">1</span>, <span style="color: #000000;">52</span><span style="color: #000000;">)</span>;<br/>        <span style="color: #2222BB;">switch</span><span style="color: #000000;">(</span>lettere<span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #228822;">// lettere minuscole</span><br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">1</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sa"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">2</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sb"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">3</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sc"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">4</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sd"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">5</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%se"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">6</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sf"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">7</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sg"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">8</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sh"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">9</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%si"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">10</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sl"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">11</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sm"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">12</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sn"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">13</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%so"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">14</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sp"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">15</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sq"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">16</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sk"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">17</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sj"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">18</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sr"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">19</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%ss"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">20</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%st"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">21</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%su"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">22</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sv"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">23</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sz"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">24</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sx"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">25</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sy"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">26</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sw"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #228822;">// Lettere maiuscole</span><br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">27</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sA"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">28</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sB"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">29</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sC"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">30</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sD"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">31</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sE"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">32</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sF"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">33</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sG"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">34</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sH"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">35</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sI"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">36</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sL"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">37</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sM"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">38</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sN"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">39</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sO"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">40</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sP"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">41</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sQ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">42</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sK"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">43</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sJ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">44</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sR"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">45</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sS"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">46</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sT"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">47</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sU"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">48</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sV"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">49</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sZ"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">50</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sX"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">51</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sY"</span>, str<span style="color: #000000;">)</span>;<br/>            <span style="color: #2222BB;">case</span> <span style="color: #000000;">52</span><span style="color: #000000;">:</span> <span style="color: #222222;">format</span><span style="color: #000000;">(</span>str, <span style="color: #2222BB;">sizeof</span><span style="color: #000000;">(</span>str<span style="color: #000000;">)</span>, <span style="color: #000066;">"%sW"</span>, str<span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>    <span style="color: #000000;">}</span><br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] How To Create Random Spawns!]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=668170</link>
			<pubDate>Tue, 23 Jul 2019 18:39:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=331621">YouShootIDodge</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=668170</guid>
			<description><![CDATA[<b><font size="6"><div align="center"><font color="RoyalBlue">Creating Random Spawns</font></div></font></b><br />
<br />
So this is a very simple, straight-forward tutorial on how to make random spawns.<br />
<br />
For creating random spawns, there are 2 methods i can think of right now. First simple switch () statement and second using milti-dimentional arrays.<br />
<br />
There are alot of beginners who are unable to understand the concept of multi-dimensional arrays so in this tutorial i will show them how to make a random spawn system and similar stuff without using the arrays. Since the array method is explained in the <a href="https://sampwiki.blast.hk/wiki/Random" target="_blank"><b>wiki</b></a>, i'll be explaining the second one.<br />
<br />
Here is a code showing the <b>OnPlayerSpawn ()</b> callback, for-example if you want to spawn the player at one of five random positions, this code will work:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 242px;
		text-align: left;
		overflow: auto">public OnPlayerSpawn (playerid)
{
    new selected_spawn = random (5);

    switch (selected_spawn)
    {
        case 0: { SetPlayerPos (playerid, 0.0,   0.0,   0.0);  SetPlayerFacingAngle (playerid, 0.0); }
        case 1: { SetPlayerPos (playerid, 10.0, 10.0, 10.0); SetPlayerFacingAngle (playerid, 10.0); }
        case 2: { SetPlayerPos (playerid, 20.0, 20.0, 20.0); SetPlayerFacingAngle (playerid, 20.0); }
        case 3: { SetPlayerPos (playerid, 30.0, 30.0, 30.0); SetPlayerFacingAngle (playerid, 30.0); }
        case 4: { SetPlayerPos (playerid, 40.0, 40.0, 40.0); SetPlayerFacingAngle (playerid, 40.0); }
    }
    return 1;
}</pre>
</div>Explained:<br />
<br />
<b>1.</b> <div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">new selected_spawn = random (5);</pre>
</div>Here you can see a new integer type variable being created followed by an assignment operator and a function named '<b>random ()</b>'. This semantic of this line of code works like this:<br />
<br />
- It creates an integer variable.<br />
- It then generates a random value between 0 and 4 (5 is the size of its range, since in coding counting starts from 0 so 0, 1, 2, 3, 4 = 5)<br />
- It assigns the randomly generated value to the newly created variable.<br />
<br />
<br />
<b>2.</b> <div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">switch (selected_spawn) { }</pre>
</div>This is called a switch statement, in simple words it is an alternative to the if-statement with some limitations but it can be used neatly in this case. So it will execute a function or set of functions depending upon the value of variable '<b>selected_spawn</b>'.<br />
<br />
As you can see, we have provided it 2 functions to perform in each case, for-example if the value of '<b>selected_spawn</b>' turns out to be <b>1</b>, it will perform the following functions and hence the player's position will be set to the given coordinates.<br />
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
		overflow: auto">switch (selected_spawn)
    {
        case 0: { SetPlayerPos (playerid, 0.0,   0.0,   0.0);  SetPlayerFacingAngle (playerid, 0.0); }
        case 1: { SetPlayerPos (playerid, 10.0, 10.0, 10.0); SetPlayerFacingAngle (playerid, 10.0); }
        case 2: { SetPlayerPos (playerid, 20.0, 20.0, 20.0); SetPlayerFacingAngle (playerid, 20.0); }
        case 3: { SetPlayerPos (playerid, 30.0, 30.0, 30.0); SetPlayerFacingAngle (playerid, 30.0); }
        case 4: { SetPlayerPos (playerid, 40.0, 40.0, 40.0); SetPlayerFacingAngle (playerid, 40.0); }
    }</pre>
</div>
Now, that was all, if you want to add another random spawn, you can increment the range of the <b>random ()</b> function and add it's coordinates in the <b>switch ()</b> statement. <br />
<br />
You can also make a function out of it,  so if you want to set random positions multiple times in the code, it will be useful. <br />
<br />
Here is an example code:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 338px;
		text-align: left;
		overflow: auto">public OnPlayerSpawn (playerid)
{
    SetRandomPosition (playerid); // You can use this multiple times in other parts of code too.
    return 1;
}

stock SetRandomPosition (playerid)
{
    new selected_spawn = random (5);

    switch (selected_spawn)
    {
        case 0: { SetPlayerPos (playerid, 0.0,   0.0,   0.0);  SetPlayerFacingAngle (playerid, 0.0); }
        case 1: { SetPlayerPos (playerid, 10.0, 10.0, 10.0); SetPlayerFacingAngle (playerid, 10.0); }
        case 2: { SetPlayerPos (playerid, 20.0, 20.0, 20.0); SetPlayerFacingAngle (playerid, 20.0); }
        case 3: { SetPlayerPos (playerid, 30.0, 30.0, 30.0); SetPlayerFacingAngle (playerid, 30.0); }
        case 4: { SetPlayerPos (playerid, 40.0, 40.0, 40.0); SetPlayerFacingAngle (playerid, 40.0); }
    }
    return 1;
}</pre>
</div>]]></description>
			<content:encoded><![CDATA[<b><font size="6"><div align="center"><font color="RoyalBlue">Creating Random Spawns</font></div></font></b><br />
<br />
So this is a very simple, straight-forward tutorial on how to make random spawns.<br />
<br />
For creating random spawns, there are 2 methods i can think of right now. First simple switch () statement and second using milti-dimentional arrays.<br />
<br />
There are alot of beginners who are unable to understand the concept of multi-dimensional arrays so in this tutorial i will show them how to make a random spawn system and similar stuff without using the arrays. Since the array method is explained in the <a href="https://sampwiki.blast.hk/wiki/Random" target="_blank"><b>wiki</b></a>, i'll be explaining the second one.<br />
<br />
Here is a code showing the <b>OnPlayerSpawn ()</b> callback, for-example if you want to spawn the player at one of five random positions, this code will work:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 242px;
		text-align: left;
		overflow: auto">public OnPlayerSpawn (playerid)
{
    new selected_spawn = random (5);

    switch (selected_spawn)
    {
        case 0: { SetPlayerPos (playerid, 0.0,   0.0,   0.0);  SetPlayerFacingAngle (playerid, 0.0); }
        case 1: { SetPlayerPos (playerid, 10.0, 10.0, 10.0); SetPlayerFacingAngle (playerid, 10.0); }
        case 2: { SetPlayerPos (playerid, 20.0, 20.0, 20.0); SetPlayerFacingAngle (playerid, 20.0); }
        case 3: { SetPlayerPos (playerid, 30.0, 30.0, 30.0); SetPlayerFacingAngle (playerid, 30.0); }
        case 4: { SetPlayerPos (playerid, 40.0, 40.0, 40.0); SetPlayerFacingAngle (playerid, 40.0); }
    }
    return 1;
}</pre>
</div>Explained:<br />
<br />
<b>1.</b> <div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">new selected_spawn = random (5);</pre>
</div>Here you can see a new integer type variable being created followed by an assignment operator and a function named '<b>random ()</b>'. This semantic of this line of code works like this:<br />
<br />
- It creates an integer variable.<br />
- It then generates a random value between 0 and 4 (5 is the size of its range, since in coding counting starts from 0 so 0, 1, 2, 3, 4 = 5)<br />
- It assigns the randomly generated value to the newly created variable.<br />
<br />
<br />
<b>2.</b> <div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">switch (selected_spawn) { }</pre>
</div>This is called a switch statement, in simple words it is an alternative to the if-statement with some limitations but it can be used neatly in this case. So it will execute a function or set of functions depending upon the value of variable '<b>selected_spawn</b>'.<br />
<br />
As you can see, we have provided it 2 functions to perform in each case, for-example if the value of '<b>selected_spawn</b>' turns out to be <b>1</b>, it will perform the following functions and hence the player's position will be set to the given coordinates.<br />
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
		overflow: auto">switch (selected_spawn)
    {
        case 0: { SetPlayerPos (playerid, 0.0,   0.0,   0.0);  SetPlayerFacingAngle (playerid, 0.0); }
        case 1: { SetPlayerPos (playerid, 10.0, 10.0, 10.0); SetPlayerFacingAngle (playerid, 10.0); }
        case 2: { SetPlayerPos (playerid, 20.0, 20.0, 20.0); SetPlayerFacingAngle (playerid, 20.0); }
        case 3: { SetPlayerPos (playerid, 30.0, 30.0, 30.0); SetPlayerFacingAngle (playerid, 30.0); }
        case 4: { SetPlayerPos (playerid, 40.0, 40.0, 40.0); SetPlayerFacingAngle (playerid, 40.0); }
    }</pre>
</div>
Now, that was all, if you want to add another random spawn, you can increment the range of the <b>random ()</b> function and add it's coordinates in the <b>switch ()</b> statement. <br />
<br />
You can also make a function out of it,  so if you want to set random positions multiple times in the code, it will be useful. <br />
<br />
Here is an example code:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 338px;
		text-align: left;
		overflow: auto">public OnPlayerSpawn (playerid)
{
    SetRandomPosition (playerid); // You can use this multiple times in other parts of code too.
    return 1;
}

stock SetRandomPosition (playerid)
{
    new selected_spawn = random (5);

    switch (selected_spawn)
    {
        case 0: { SetPlayerPos (playerid, 0.0,   0.0,   0.0);  SetPlayerFacingAngle (playerid, 0.0); }
        case 1: { SetPlayerPos (playerid, 10.0, 10.0, 10.0); SetPlayerFacingAngle (playerid, 10.0); }
        case 2: { SetPlayerPos (playerid, 20.0, 20.0, 20.0); SetPlayerFacingAngle (playerid, 20.0); }
        case 3: { SetPlayerPos (playerid, 30.0, 30.0, 30.0); SetPlayerFacingAngle (playerid, 30.0); }
        case 4: { SetPlayerPos (playerid, 40.0, 40.0, 40.0); SetPlayerFacingAngle (playerid, 40.0); }
    }
    return 1;
}</pre>
</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] Adding and Removing Mapped Objects to/from your Script]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=666713</link>
			<pubDate>Wed, 22 May 2019 01:43:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=325995">KevTheJoker</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=666713</guid>
			<description><![CDATA[<div align="center"><img alt="" border="0" src="https://i.imgur.com/vgL3x1s.png"/><br />
<font face="Impact"><font size="6"><font color="Black"><u>Dual Gaming - Tutorial #1</u></font></font></font><br />
<br />
<br />
<font face="Impact"><font size="5"><font color="Sienna"><u>Introduction</u></font></font></font></div>
I've noticed that some tutorials are hard for persons who are opening pawno for the first time or those who are a bit or completely new to how scripting on SA-MP works. This is my first tutorial, and I hope it helps and aids those who are adding objects to their server or gamemode for the first time.<br />
<br />
<div align="center"><font face="Impact"><font size="5"><font color="Sienna"><u>Mapping your objects</u></font></font></font></div>
Mapping in SA-MP is quite easy, in my point of view. It simply needs patience, dedication and time. Some persons tend to become annoyed when they're mapping, and when things aren't going their way, they flip off. Trust me, it happens to me sometimes. You may map an object in a map editor, but after adding it to the gamemode or filterscript and testing it on the server, it doesn't give the output you expected. What I want you to do is take a deep breath, and aim towards fixing it, as if you've never had difficulties while mapping it.<br />
<br />
I personally recommend two map editor softwares. They are:<ul><li>SA-MP Map Editor - <a href="https://www.moddb.com/downloads/san-andreas-multiplayer-map-editor" target="_blank">Click here to download/view it</a> (More preferable)</li>
<li>MTA (Multi Theft Auto) Map Editor - <a href="https://mtasa.com/" target="_blank">Click here to download/view this extension</a></li>
</ul>
The SA-MP Map Editor is a software which is based on the default map of San Andreas. It covers the entire map, and it's used for adding, deleting, and editing objects of all kinds, sorts and models. It's easy to use, and after mapping a specific part of the map, you can click on "Show Code" to give you the codes of the Objects Created and Objects Deleted. On the other hand, the MTA map editor is mainly used for mapping MTA servers (no intentions in drawing your attention away from SA-MP and its Map Editor) but we're luckily able to convert the MTA Object Codes to SA-MP objects. Are you wondering where and how to do that? Simple, head over to <a href="https://convertffs.com/" target="_blank">https://convertffs.com/</a>. After visiting this website, open your MTA map file (the file with the <b>.map</b> extension, e.g. TutorialMaps.map) which you saved via the MTA Map editor and copy its code. Paste the copied code into the dialog box on the convertffs website, and choose an OutPut mode. It's highly recommend to use <b>CreateDynamicObjectEx</b> when compiling object codes, because it caters for lags and avoids the objects limit. In some cases, you may find or see persons using CreateDynamicObject in their codes, but you'll get to know more about that (in-depth info) in the future.<br />
<br />
Differences:<br />
<ul><li>CreateDynamicObjectEx - allows you to change the draw distance (how many objects a player can see from their distance) and show the object for various worlds, interiors or players.</li>
<li>CreateDynamicObject - has no settings to allow players to view objects from a far distance (streaming many at one time) and such objects can only be seen in one world or interior.</li>
<li>CreateObject - is default. However, it only limits you to a certain amount of objects (which can be seen here: <a href="https://sampwiki.blast.hk/wiki/Limits" target="_blank">https://sampwiki.blast.hk/wiki/Limits</a>)</li>
<li>RemoveBuildingForPlayer - this removes the buildings and objects for players.</li>
</ul>
<div align="center"><font face="Impact"><font size="5"><font color="Sienna"><u>Differentiation and Specific Usages</u></font></font></font></div>
If you're adding the mapped object codes to your .pwn gamemode file, found in the <b>gamemode</b> folder, place the codes under:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnGameModeInit</span><span style="color: #007700">()
<br/>{
<br/>    </span><span style="color: #FF8000">// Place the Codes here
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>For adding the object codes to a filterscript's .pwn file, which can be found in the <b>filterscripts</b> folder, place them under:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnFilterScriptInit</span><span style="color: #007700">()
<br/>{
<br/>    </span><span style="color: #FF8000">// Place the Codes here
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>For removing objects from the San Andreas Map, place the codes under:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnPlayerRequestClass</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">classid</span><span style="color: #007700">)
<br/>{
<br/>    </span><span style="color: #FF8000">// Codes
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>OR <br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnPlayerConnect</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)
<br/>{
<br/>        </span><span style="color: #FF8000">// Codes
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>For some persons, the objects may not be removed if you place them under <b>public OnPlayerConnect(playerid)</b>, so <b>public OnPlayerRequestClass(playerid, classid)</b> is an alternative method. <br />
<br />
<b><u><font color="Red">Tip:</font></u></b> You <b>must</b> add the streamer include to your <b>pawno/includes</b> folder (which can be found here: <a href="https://github.com/samp-incognito/samp-streamer-plugin/releases" target="_blank">GitHub Releases</a>).<br />
<br />
How to add it to your .pwn gamemode file after placing it in the include folder? Look below (add it below <b>#include &lt;a_samp&gt;</b><font color="Red">[At the top of the script]</font>)<br />
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
<span style="color: #0000BB"></span><span style="color: #FF8000">#include &lt;streamer&gt; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><div align="center">Good luck, and if you have comments/remarks, feel free to share them below. I might make tutorials of how to create certain stuff, like faction-related scripts, attaching items/objects to players/vehicles, creating login/register dialogs, how to built master-account scripts (which allows you to create a main account, and create characters afterwards in-game (step-by-step), and some other stuff!</div>]]></description>
			<content:encoded><![CDATA[<div align="center"><img alt="" border="0" src="https://i.imgur.com/vgL3x1s.png"/><br />
<font face="Impact"><font size="6"><font color="Black"><u>Dual Gaming - Tutorial #1</u></font></font></font><br />
<br />
<br />
<font face="Impact"><font size="5"><font color="Sienna"><u>Introduction</u></font></font></font></div>
I've noticed that some tutorials are hard for persons who are opening pawno for the first time or those who are a bit or completely new to how scripting on SA-MP works. This is my first tutorial, and I hope it helps and aids those who are adding objects to their server or gamemode for the first time.<br />
<br />
<div align="center"><font face="Impact"><font size="5"><font color="Sienna"><u>Mapping your objects</u></font></font></font></div>
Mapping in SA-MP is quite easy, in my point of view. It simply needs patience, dedication and time. Some persons tend to become annoyed when they're mapping, and when things aren't going their way, they flip off. Trust me, it happens to me sometimes. You may map an object in a map editor, but after adding it to the gamemode or filterscript and testing it on the server, it doesn't give the output you expected. What I want you to do is take a deep breath, and aim towards fixing it, as if you've never had difficulties while mapping it.<br />
<br />
I personally recommend two map editor softwares. They are:<ul><li>SA-MP Map Editor - <a href="https://www.moddb.com/downloads/san-andreas-multiplayer-map-editor" target="_blank">Click here to download/view it</a> (More preferable)</li>
<li>MTA (Multi Theft Auto) Map Editor - <a href="https://mtasa.com/" target="_blank">Click here to download/view this extension</a></li>
</ul>
The SA-MP Map Editor is a software which is based on the default map of San Andreas. It covers the entire map, and it's used for adding, deleting, and editing objects of all kinds, sorts and models. It's easy to use, and after mapping a specific part of the map, you can click on "Show Code" to give you the codes of the Objects Created and Objects Deleted. On the other hand, the MTA map editor is mainly used for mapping MTA servers (no intentions in drawing your attention away from SA-MP and its Map Editor) but we're luckily able to convert the MTA Object Codes to SA-MP objects. Are you wondering where and how to do that? Simple, head over to <a href="https://convertffs.com/" target="_blank">https://convertffs.com/</a>. After visiting this website, open your MTA map file (the file with the <b>.map</b> extension, e.g. TutorialMaps.map) which you saved via the MTA Map editor and copy its code. Paste the copied code into the dialog box on the convertffs website, and choose an OutPut mode. It's highly recommend to use <b>CreateDynamicObjectEx</b> when compiling object codes, because it caters for lags and avoids the objects limit. In some cases, you may find or see persons using CreateDynamicObject in their codes, but you'll get to know more about that (in-depth info) in the future.<br />
<br />
Differences:<br />
<ul><li>CreateDynamicObjectEx - allows you to change the draw distance (how many objects a player can see from their distance) and show the object for various worlds, interiors or players.</li>
<li>CreateDynamicObject - has no settings to allow players to view objects from a far distance (streaming many at one time) and such objects can only be seen in one world or interior.</li>
<li>CreateObject - is default. However, it only limits you to a certain amount of objects (which can be seen here: <a href="https://sampwiki.blast.hk/wiki/Limits" target="_blank">https://sampwiki.blast.hk/wiki/Limits</a>)</li>
<li>RemoveBuildingForPlayer - this removes the buildings and objects for players.</li>
</ul>
<div align="center"><font face="Impact"><font size="5"><font color="Sienna"><u>Differentiation and Specific Usages</u></font></font></font></div>
If you're adding the mapped object codes to your .pwn gamemode file, found in the <b>gamemode</b> folder, place the codes under:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnGameModeInit</span><span style="color: #007700">()
<br/>{
<br/>    </span><span style="color: #FF8000">// Place the Codes here
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>For adding the object codes to a filterscript's .pwn file, which can be found in the <b>filterscripts</b> folder, place them under:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnFilterScriptInit</span><span style="color: #007700">()
<br/>{
<br/>    </span><span style="color: #FF8000">// Place the Codes here
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>For removing objects from the San Andreas Map, place the codes under:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnPlayerRequestClass</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">, </span><span style="color: #0000BB">classid</span><span style="color: #007700">)
<br/>{
<br/>    </span><span style="color: #FF8000">// Codes
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>OR <br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public </span><span style="color: #0000BB">OnPlayerConnect</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)
<br/>{
<br/>        </span><span style="color: #FF8000">// Codes
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>For some persons, the objects may not be removed if you place them under <b>public OnPlayerConnect(playerid)</b>, so <b>public OnPlayerRequestClass(playerid, classid)</b> is an alternative method. <br />
<br />
<b><u><font color="Red">Tip:</font></u></b> You <b>must</b> add the streamer include to your <b>pawno/includes</b> folder (which can be found here: <a href="https://github.com/samp-incognito/samp-streamer-plugin/releases" target="_blank">GitHub Releases</a>).<br />
<br />
How to add it to your .pwn gamemode file after placing it in the include folder? Look below (add it below <b>#include &lt;a_samp&gt;</b><font color="Red">[At the top of the script]</font>)<br />
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
<span style="color: #0000BB"></span><span style="color: #FF8000">#include &lt;streamer&gt; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><div align="center">Good luck, and if you have comments/remarks, feel free to share them below. I might make tutorials of how to create certain stuff, like faction-related scripts, attaching items/objects to players/vehicles, creating login/register dialogs, how to built master-account scripts (which allows you to create a main account, and create characters afterwards in-game (step-by-step), and some other stuff!</div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tool/Web/Other] Check the script for curly bracket mistakes (linux)]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665470</link>
			<pubDate>Fri, 05 Apr 2019 17:37:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=321885">Doddinger</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665470</guid>
			<description><![CDATA[Hello samp-forum community,<br />
<br />
I had some problems with curly brackets in the past. I read it also very often already, that people had to deal with these problems already.<br />
<br />
I just created a tool for finding these curly bracket mistakes and I also tested it. It was really annoying for me to find these curly bracket mistakes. I found them relatively quickly because I know what I have done before etc. but it's better and easier if I use my little tool.<br />
<br />
<b>Example code (with the known problem):</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">if(ianduisnotme == 1)
{
    put some code in here
}
}</pre>
</div><b>Example code (without the known problem):</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">if(ianduisnotme == 1)
{
    put some code in here
}</pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 226px;
		text-align: left;
		overflow: auto">Y_Less suggestion:
How does it deal with code like:

Code:

#if A
    Func(a) {
#else
    Func(b) {
#endif


    }</pre>
</div>It also deals with this code. <br />
<br />
It also tells you if there's a mistake; for instance:<br />
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
		overflow: auto">#if A
    Func(a) {
#else
    Func(b) //Mistake is here
#endif


    }</pre>
</div>or<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">#if A
    Func(a) {
#else
    Func(b) //Mistake is here, missing opening bracket
#endif

    //Mistake here also, missing closing bracket</pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">#if A
    Func(a) //Mistake here, missing closing bracket
#else
    Func(b) //Mistake is here, missing closing bracket
#endif
}

    }</pre>
</div><b>Use:</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">perl syncor.pl -f &lt;file.pwn&gt;</pre>
</div><b><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">DL-Link (v. 3): <a href="https://drive.******.com/open?id=1XmrkXewtwjX_VW7prC00LYko5SEJ1qeA" target="_blank" rel="noopener" class="mycode_url">https://drive.******.com/open?id=1XmrkXe...ko5SEJ1qeA</a></pre>
</div></b><br />
<br />
What doesn't do the script? It doesn't tell you the kind of mistake! It's simply unecessary for you because you know how to script pawno right <img alt="" border="0" class="inlineimg" src="images/smilies/wink.png" title="Wink"/> ?<br />
<br />
Have fun and enjoy the future without doing a long long search for the curly bracket mistake!<br />
<br />
-Doddinger<br />
<br />
PS. If you have any suggestions, simply write them down and reply here.]]></description>
			<content:encoded><![CDATA[Hello samp-forum community,<br />
<br />
I had some problems with curly brackets in the past. I read it also very often already, that people had to deal with these problems already.<br />
<br />
I just created a tool for finding these curly bracket mistakes and I also tested it. It was really annoying for me to find these curly bracket mistakes. I found them relatively quickly because I know what I have done before etc. but it's better and easier if I use my little tool.<br />
<br />
<b>Example code (with the known problem):</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">if(ianduisnotme == 1)
{
    put some code in here
}
}</pre>
</div><b>Example code (without the known problem):</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">if(ianduisnotme == 1)
{
    put some code in here
}</pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 226px;
		text-align: left;
		overflow: auto">Y_Less suggestion:
How does it deal with code like:

Code:

#if A
    Func(a) {
#else
    Func(b) {
#endif


    }</pre>
</div>It also deals with this code. <br />
<br />
It also tells you if there's a mistake; for instance:<br />
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
		overflow: auto">#if A
    Func(a) {
#else
    Func(b) //Mistake is here
#endif


    }</pre>
</div>or<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">#if A
    Func(a) {
#else
    Func(b) //Mistake is here, missing opening bracket
#endif

    //Mistake here also, missing closing bracket</pre>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">#if A
    Func(a) //Mistake here, missing closing bracket
#else
    Func(b) //Mistake is here, missing closing bracket
#endif
}

    }</pre>
</div><b>Use:</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">perl syncor.pl -f &lt;file.pwn&gt;</pre>
</div><b><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">DL-Link (v. 3): <a href="https://drive.******.com/open?id=1XmrkXewtwjX_VW7prC00LYko5SEJ1qeA" target="_blank" rel="noopener" class="mycode_url">https://drive.******.com/open?id=1XmrkXe...ko5SEJ1qeA</a></pre>
</div></b><br />
<br />
What doesn't do the script? It doesn't tell you the kind of mistake! It's simply unecessary for you because you know how to script pawno right <img alt="" border="0" class="inlineimg" src="images/smilies/wink.png" title="Wink"/> ?<br />
<br />
Have fun and enjoy the future without doing a long long search for the curly bracket mistake!<br />
<br />
-Doddinger<br />
<br />
PS. If you have any suggestions, simply write them down and reply here.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] State-based hooks (aka pre-hooks)]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665361</link>
			<pubDate>Sun, 31 Mar 2019 22:24:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=29176">Y_Less</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665361</guid>
			<description><![CDATA[This is a hook method I came up with long ago (before hook method 7, i.e. modern ALS). It uses states to determine if a hook exists or not.  This was previously documented, but that documentation is both deleted and obsolete - the technique is the same, but the implementation has evolved a little bit.<br />
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
<span style="color: #0000BB"></span><span style="color: #FF8000">#include &lt;a_samp&gt;

<br/>/*
<br/>First define several states for "hooked" and "unhooked".  These functions are
<br/>purely to define states, they are never used.  The states only need to be
<br/>defined once per mode, and both fixes.inc and YSI already define them.  The
<br/>function name is unimportant, but the state specifiers must be exactly as below:
<br/>*/

<br/></span><span style="color: #007700">static </span><span style="color: #0000BB">stock Library_IncludeStates</span><span style="color: #007700">() &lt;</span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x0</span><span style="color: #007700">, </span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x1</span><span style="color: #007700">, </span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x2</span><span style="color: #007700">, </span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x3</span><span style="color: #007700">&gt;
<br/>{
<br/>}

<br/>static </span><span style="color: #0000BB">stock Library_IncludeStates</span><span style="color: #007700">() &lt;</span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_go</span><span style="color: #007700">&gt;
<br/>{
<br/>}

<br/></span><span style="color: #FF8000">/*
<br/>Here is our first hooked function, it is always a good idea to hook a ScriptInit
<br/>function so you can set "_ALS_" state, but you can also do that in any other
<br/>callback, this is just merely a small optimisation.
<br/>*/
<br/></span><span style="color: #007700">public </span><span style="color: #0000BB">OnGameModeInit</span><span style="color: #007700">()
<br/>{
<br/>    </span><span style="color: #FF8000">/*
<br/>    Set the `_ALS_` state to `_ALS_go`.  The basic idea is that this state is
<br/>    ALWAYS `_ALS_go`, if the next callback in a callback chain exists it will
<br/>    have an implementation defined for the `_ALS_go` state; if there is no next
<br/>    callback, only the fallback will exist.  This should be done before the
<br/>    first chain call - it only NEEDs to be done once but multiple times is fine,
<br/>    and multiple libraries can (and do) do this.
<br/>    */
<br/>    </span><span style="color: #0000BB">state _ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_go</span><span style="color: #007700">;

<br/>    </span><span style="color: #FF8000">/*
<br/>    Now call the next callback in the chain.  With the normal ALS method this
<br/>    requires a pre-processor `#if` directive to protect against the case where
<br/>    the next item in the chain doesn't exist.  With this version, the next
<br/>    chain callback always exists in some form even if the user didn't define it.
<br/>    */
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">Library_OnGameModeInit</span><span style="color: #007700">();
<br/>}

<br/></span><span style="color: #FF8000">/*
<br/>Forward the next callback in the chain.
<br/>*/
<br/></span><span style="color: #0000BB">forward Library_OnGameModeInit</span><span style="color: #007700">();

<br/></span><span style="color: #FF8000">/*
<br/>Normal ALS redefinition checks.
<br/>*/
<br/>#if defined _ALS_OnGameModeInit
<br/>    #undef OnGameModeInit
<br/>#else
<br/>    #define _ALS_OnGameModeInit
<br/>#endif

<br/>/*
<br/>Now this is where it starts getting interesting.  Because we unconditionally
<br/>call `Library_OnGameModeInit`, the code MUST include this function, but because
<br/>we are hooking it, we don't know if it will or not - so we create it!  But if we
<br/>create it, then what's in the next library (or mode) in the chain?  The answer
<br/>is they are BOTH the next function in the chain thanks to the magic of states.

<br/>The first line here defines `OnGameModeInit` when `_ALS` is set to two of the
<br/>other values - this is actually NEVER the case, but is important as it tells the
<br/>compiler which automata our `Library_OnGameModeInit` function is controlled by
<br/>(i.e. `_ALS`).  The second line is the "fallback" function - if `_ALS` is in a
<br/>state for which there is no specific implementation, this one will get called
<br/>instead and just instantly return (maybe you can now see the trick).  If `_ALS`
<br/>is set to `_ALS_go` and there is no other function, then the compiler will
<br/>identify this fallback function as the correct one to call (or rather the
<br/>runtime will).  If the hooked function DOES exist, then that more specialised
<br/>version will be called instead.

<br/>If we didn't have the first function to define states, then the fallback
<br/>wouldn't compile.
<br/>*/
<br/></span><span style="color: #007700">public </span><span style="color: #0000BB">Library_OnGameModeInit</span><span style="color: #007700">() &lt;</span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x0</span><span style="color: #007700">, </span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x1</span><span style="color: #007700">&gt; { return </span><span style="color: #0000BB">1</span><span style="color: #007700">; }
<br/>public </span><span style="color: #0000BB">Library_OnGameModeInit</span><span style="color: #007700">() &lt;&gt; { return </span><span style="color: #0000BB">1</span><span style="color: #007700">; }

<br/></span><span style="color: #FF8000">/*
<br/>Because we are now using states, we need a slightly more complex redefinition of
<br/>the next callback's function definition - we need to transparently add the
<br/>`_ALS : _ALS_go` state to it, so that's exactly what this line does.

<br/>Remember that `_ALS` only needs to be defined once in a mode, and `Library_` is
<br/>just the prefix I've used in this example - it needs to be unique.
<br/>*/
<br/>#define OnGameModeInit(%0) Library_OnGameModeInit(%0) &lt;_ALS : _ALS_go&gt; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 178px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #FF8000">/*
<br/>This is just another `OnGameModeInit` that will be correctly called if it
<br/>exists.  It shouldn't be part of your library (i.e. this is user code).
<br/>*/

<br/></span><span style="color: #007700">public </span><span style="color: #0000BB">OnGameModeInit</span><span style="color: #007700">()
<br/>{
<br/>    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hello"</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>y_hooks are simpler to write, and faster to run.  Normal ALS hooks are slightly faster, but lack two properties.  Because this version uses states the next item in the chain always exists, and the entry point to the chain function is in a known format and location in the AMX.  These properties together allow us to detect and intercept these calls at run-time.  And so introduces "pre-hooks".  The standard call order for hooks is as follows:<br />
<ol style="list-style-type: decimal"><li>y_hooks, in include order.</li>
<li>ALS hooks, in include order.</li>
<li>User code.</li>
</ol>
However, there are some libraries (notably fixes.inc) which must be called before y_hooks hooks, but can't rely on y_hooks to use `hook` and thus come first.  For these, we have pre-hooks, defined by these state hooks, and natively supported by y_hooks (which leads to the interesting property that including y_hooks actually optimises these functions.  The new order thus becomes:<br />
<ol style="list-style-type: decimal"><li>Pre-hooks.</li>
<li>y_hooks, in include order.</li>
<li>ALS hooks, in include order.</li>
<li>User code.</li>
</ol>
Pre-hooks are called in include order, but y_hooks can not determine which is the last one, so we need to explicitly inform it of the order:<br />
<br />
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
<span style="color: #0000BB">CHAIN_ORDER</span><span style="color: #007700">(</span><span style="color: #0000BB">Library</span><span style="color: #007700">);
<br/></span><span style="color: #FF8000">#undef CHAIN_ORDER
<br/>#define CHAIN_ORDER CHAIN_NEXT(Library) 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>This assumes you have YSI (and thus y_prehook, part of YSI_Core).  Otherwise, check the file for the macro definitions:<br />
<br />
<a href="https://github.com/pawn-lang/YSI-Includes/blob/9868b37e42dd0827058f7ddcae0012a872fb27aa/YSI_Core/y_core/y_prehook.inc" target="_blank">https://github.com/pawn-lang/YSI-Inc.../y_prehook.inc</a><br />
<br />
It also defines macros to simplify the forwarding, and add custom return values:<br />
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
<span style="color: #0000BB"></span><span style="color: #FF8000">/*
<br/>Normal ALS definitions.
<br/>*/
<br/>#if defined _ALS_OnGameModeInit
<br/>    #undef OnGameModeInit
<br/>#else
<br/>    #define _ALS_OnGameModeInit
<br/>#endif

<br/>/*
<br/>All that is required for forwarding.  The `= 1` is to define the default return
<br/>value, so in `OnPlayerCommandText` this would be `= 0`.
<br/>*/
<br/></span><span style="color: #0000BB">CHAIN_FORWARD</span><span style="color: #007700">:</span><span style="color: #0000BB">Library_OnGameModeInit</span><span style="color: #007700">() = </span><span style="color: #0000BB">1</span><span style="color: #007700">;

<br/></span><span style="color: #FF8000">/*
<br/>Now the redefinition.
<br/>*/
<br/>#define OnGameModeInit(%0) CHAIN_PUBLIC:Library_OnGameModeInit(%0) 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Again, check y_prehook for more information.  These macros are also mostly in fixes.inc, but currently misnamed.]]></description>
			<content:encoded><![CDATA[This is a hook method I came up with long ago (before hook method 7, i.e. modern ALS). It uses states to determine if a hook exists or not.  This was previously documented, but that documentation is both deleted and obsolete - the technique is the same, but the implementation has evolved a little bit.<br />
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
<span style="color: #0000BB"></span><span style="color: #FF8000">#include &lt;a_samp&gt;

<br/>/*
<br/>First define several states for "hooked" and "unhooked".  These functions are
<br/>purely to define states, they are never used.  The states only need to be
<br/>defined once per mode, and both fixes.inc and YSI already define them.  The
<br/>function name is unimportant, but the state specifiers must be exactly as below:
<br/>*/

<br/></span><span style="color: #007700">static </span><span style="color: #0000BB">stock Library_IncludeStates</span><span style="color: #007700">() &lt;</span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x0</span><span style="color: #007700">, </span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x1</span><span style="color: #007700">, </span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x2</span><span style="color: #007700">, </span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x3</span><span style="color: #007700">&gt;
<br/>{
<br/>}

<br/>static </span><span style="color: #0000BB">stock Library_IncludeStates</span><span style="color: #007700">() &lt;</span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_go</span><span style="color: #007700">&gt;
<br/>{
<br/>}

<br/></span><span style="color: #FF8000">/*
<br/>Here is our first hooked function, it is always a good idea to hook a ScriptInit
<br/>function so you can set "_ALS_" state, but you can also do that in any other
<br/>callback, this is just merely a small optimisation.
<br/>*/
<br/></span><span style="color: #007700">public </span><span style="color: #0000BB">OnGameModeInit</span><span style="color: #007700">()
<br/>{
<br/>    </span><span style="color: #FF8000">/*
<br/>    Set the `_ALS_` state to `_ALS_go`.  The basic idea is that this state is
<br/>    ALWAYS `_ALS_go`, if the next callback in a callback chain exists it will
<br/>    have an implementation defined for the `_ALS_go` state; if there is no next
<br/>    callback, only the fallback will exist.  This should be done before the
<br/>    first chain call - it only NEEDs to be done once but multiple times is fine,
<br/>    and multiple libraries can (and do) do this.
<br/>    */
<br/>    </span><span style="color: #0000BB">state _ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_go</span><span style="color: #007700">;

<br/>    </span><span style="color: #FF8000">/*
<br/>    Now call the next callback in the chain.  With the normal ALS method this
<br/>    requires a pre-processor `#if` directive to protect against the case where
<br/>    the next item in the chain doesn't exist.  With this version, the next
<br/>    chain callback always exists in some form even if the user didn't define it.
<br/>    */
<br/>    </span><span style="color: #007700">return </span><span style="color: #0000BB">Library_OnGameModeInit</span><span style="color: #007700">();
<br/>}

<br/></span><span style="color: #FF8000">/*
<br/>Forward the next callback in the chain.
<br/>*/
<br/></span><span style="color: #0000BB">forward Library_OnGameModeInit</span><span style="color: #007700">();

<br/></span><span style="color: #FF8000">/*
<br/>Normal ALS redefinition checks.
<br/>*/
<br/>#if defined _ALS_OnGameModeInit
<br/>    #undef OnGameModeInit
<br/>#else
<br/>    #define _ALS_OnGameModeInit
<br/>#endif

<br/>/*
<br/>Now this is where it starts getting interesting.  Because we unconditionally
<br/>call `Library_OnGameModeInit`, the code MUST include this function, but because
<br/>we are hooking it, we don't know if it will or not - so we create it!  But if we
<br/>create it, then what's in the next library (or mode) in the chain?  The answer
<br/>is they are BOTH the next function in the chain thanks to the magic of states.

<br/>The first line here defines `OnGameModeInit` when `_ALS` is set to two of the
<br/>other values - this is actually NEVER the case, but is important as it tells the
<br/>compiler which automata our `Library_OnGameModeInit` function is controlled by
<br/>(i.e. `_ALS`).  The second line is the "fallback" function - if `_ALS` is in a
<br/>state for which there is no specific implementation, this one will get called
<br/>instead and just instantly return (maybe you can now see the trick).  If `_ALS`
<br/>is set to `_ALS_go` and there is no other function, then the compiler will
<br/>identify this fallback function as the correct one to call (or rather the
<br/>runtime will).  If the hooked function DOES exist, then that more specialised
<br/>version will be called instead.

<br/>If we didn't have the first function to define states, then the fallback
<br/>wouldn't compile.
<br/>*/
<br/></span><span style="color: #007700">public </span><span style="color: #0000BB">Library_OnGameModeInit</span><span style="color: #007700">() &lt;</span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x0</span><span style="color: #007700">, </span><span style="color: #0000BB">_ALS </span><span style="color: #007700">: </span><span style="color: #0000BB">_ALS_x1</span><span style="color: #007700">&gt; { return </span><span style="color: #0000BB">1</span><span style="color: #007700">; }
<br/>public </span><span style="color: #0000BB">Library_OnGameModeInit</span><span style="color: #007700">() &lt;&gt; { return </span><span style="color: #0000BB">1</span><span style="color: #007700">; }

<br/></span><span style="color: #FF8000">/*
<br/>Because we are now using states, we need a slightly more complex redefinition of
<br/>the next callback's function definition - we need to transparently add the
<br/>`_ALS : _ALS_go` state to it, so that's exactly what this line does.

<br/>Remember that `_ALS` only needs to be defined once in a mode, and `Library_` is
<br/>just the prefix I've used in this example - it needs to be unique.
<br/>*/
<br/>#define OnGameModeInit(%0) Library_OnGameModeInit(%0) &lt;_ALS : _ALS_go&gt; 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 178px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #FF8000">/*
<br/>This is just another `OnGameModeInit` that will be correctly called if it
<br/>exists.  It shouldn't be part of your library (i.e. this is user code).
<br/>*/

<br/></span><span style="color: #007700">public </span><span style="color: #0000BB">OnGameModeInit</span><span style="color: #007700">()
<br/>{
<br/>    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hello"</span><span style="color: #007700">);
<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br/>} 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>y_hooks are simpler to write, and faster to run.  Normal ALS hooks are slightly faster, but lack two properties.  Because this version uses states the next item in the chain always exists, and the entry point to the chain function is in a known format and location in the AMX.  These properties together allow us to detect and intercept these calls at run-time.  And so introduces "pre-hooks".  The standard call order for hooks is as follows:<br />
<ol style="list-style-type: decimal"><li>y_hooks, in include order.</li>
<li>ALS hooks, in include order.</li>
<li>User code.</li>
</ol>
However, there are some libraries (notably fixes.inc) which must be called before y_hooks hooks, but can't rely on y_hooks to use `hook` and thus come first.  For these, we have pre-hooks, defined by these state hooks, and natively supported by y_hooks (which leads to the interesting property that including y_hooks actually optimises these functions.  The new order thus becomes:<br />
<ol style="list-style-type: decimal"><li>Pre-hooks.</li>
<li>y_hooks, in include order.</li>
<li>ALS hooks, in include order.</li>
<li>User code.</li>
</ol>
Pre-hooks are called in include order, but y_hooks can not determine which is the last one, so we need to explicitly inform it of the order:<br />
<br />
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
<span style="color: #0000BB">CHAIN_ORDER</span><span style="color: #007700">(</span><span style="color: #0000BB">Library</span><span style="color: #007700">);
<br/></span><span style="color: #FF8000">#undef CHAIN_ORDER
<br/>#define CHAIN_ORDER CHAIN_NEXT(Library) 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>This assumes you have YSI (and thus y_prehook, part of YSI_Core).  Otherwise, check the file for the macro definitions:<br />
<br />
<a href="https://github.com/pawn-lang/YSI-Includes/blob/9868b37e42dd0827058f7ddcae0012a872fb27aa/YSI_Core/y_core/y_prehook.inc" target="_blank">https://github.com/pawn-lang/YSI-Inc.../y_prehook.inc</a><br />
<br />
It also defines macros to simplify the forwarding, and add custom return values:<br />
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
<span style="color: #0000BB"></span><span style="color: #FF8000">/*
<br/>Normal ALS definitions.
<br/>*/
<br/>#if defined _ALS_OnGameModeInit
<br/>    #undef OnGameModeInit
<br/>#else
<br/>    #define _ALS_OnGameModeInit
<br/>#endif

<br/>/*
<br/>All that is required for forwarding.  The `= 1` is to define the default return
<br/>value, so in `OnPlayerCommandText` this would be `= 0`.
<br/>*/
<br/></span><span style="color: #0000BB">CHAIN_FORWARD</span><span style="color: #007700">:</span><span style="color: #0000BB">Library_OnGameModeInit</span><span style="color: #007700">() = </span><span style="color: #0000BB">1</span><span style="color: #007700">;

<br/></span><span style="color: #FF8000">/*
<br/>Now the redefinition.
<br/>*/
<br/>#define OnGameModeInit(%0) CHAIN_PUBLIC:Library_OnGameModeInit(%0) 
<br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div>Again, check y_prehook for more information.  These macros are also mostly in fixes.inc, but currently misnamed.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] Returning strings and arrays]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=664024</link>
			<pubDate>Sun, 17 Feb 2019 15:09:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=193537">IllidanS4</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=664024</guid>
			<description><![CDATA[While functions in Pawn typically return only simple cell-sized values, the language does allow for (even native) functions to return arrays and therefore also strings. However, the mechanism that allows it is a bit more complex and may not be suited for some use cases.<br />
<br />
First of all, let's look at the standard way of getting a string out of a function.<br />
<br />
<b>Via an output parameter</b><br />
All native SA-MP functions produce a string via a standard non-const array parameter. Since arrays are passed by reference (meaning the function gets access to the actual <i>variable</i> and not just the value inside), the native function can easily store any data inside:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:55px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> name<span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>;<br/>GetPlayerName<span style="color: #000000;">(</span>playerid, name, <span style="color: #2222BB;">sizeof</span> name<span style="color: #000000;">)</span>;</div></div></pre>
</div>Usually, another parameter is used alongside the array parameter to specify the length of the array. In Pawn, there is no simple way to obtain the length of an array directly at runtime, and so the compiler has to provide the length when needed (the <font face="Courier New">sizeof</font> operator). For strings, an extra cell must be allocated in the array to store the null character, indicating the end of the string (hence the <font face="Courier New">+ 1</font>).<br />
<br />
This way is especially useful for obtaining variable-length arrays (such as strings). The <font face="Courier New">format</font> function, for example, can be only implemented for this way, because the theoretical length of the output string is unlimited.<br />
<br />
<b>Returning an array directly</b><br />
If you want to produce a <b>fixed-size</b> array, you can return it from a function directly:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:135px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">forward</span> <span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span>;<br/><span style="color: #2222BB;">stock</span> PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> name<span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>;<br/>    GetPlayerName<span style="color: #000000;">(</span>playerid, name, <span style="color: #2222BB;">sizeof</span> name<span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">return</span> name;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>The forward declaration is optional, but it is useful since it makes you keep in mind that the length of the array is important.<br />
<br />
Now, if you know a bit of other languages like C etc., you may be aware that since <font face="Courier New">name</font> is allocated on the stack, it doesn't exist anymore when the function returns. Pawn gets around this fact using a trick – when the function is called, extra space for the array is allocated, and the address of this variable is provided to the function via a secret parameter.<br />
<br />
In reality, the function looks like this:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:119px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">stock</span> PlayerName<span style="color: #000000;">(</span>playerid, output<span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> name<span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>;<br/>    GetPlayerName<span style="color: #000000;">(</span>playerid, name, <span style="color: #2222BB;">sizeof</span> name<span style="color: #000000;">)</span>;<br/>    output <span style="color: #000000;">=</span> name;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>As you can see, returning a string is just a convenient syntactic shortcut for an extra output parameter.<br />
<br />
However, this comes at a cost of slightly decreased performance and bugs in certain cases. Let's start with the issues:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:103px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">stock</span> Select<span style="color: #000000;">(</span>index, arg<span style="color: #000000;">[</span><span style="color: #000000;">]</span>, arg2<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>index <span style="color: #000000;">==</span> <span style="color: #000000;">0</span><span style="color: #000000;">)</span> <span style="color: #2222BB;">return</span> arg;<br/>    <span style="color: #2222BB;">return</span> arg2;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>This simple function seems to return one of the arguments, but since they have indeterminate sizes (represented as 0), the compiler thinks this function returns a zero-sized array and does not actually allocate any extra space for the string. You cannot return strings (or arrays) that have indeterminate length, and the compiler sometimes fails to inform you about this.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:215px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">forward</span> <span style="color: #000000;">[</span><span style="color: #000000;">4</span><span style="color: #000000;">]</span>Func1<span style="color: #000000;">(</span><span style="color: #000000;">)</span>;<br/><span style="color: #2222BB;">stock</span> Func1<span style="color: #000000;">(</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">]</span> <span style="color: #000000;">=</span> <span style="color: #000066;">"abc"</span>;<br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222BB;">forward</span> <span style="color: #000000;">[</span><span style="color: #000000;">4</span><span style="color: #000000;">]</span>Func2<span style="color: #000000;">(</span><span style="color: #000000;">)</span>;<br/><span style="color: #2222BB;">stock</span> Func2<span style="color: #000000;">(</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">return</span> Func1<span style="color: #000000;">(</span><span style="color: #000000;">)</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>This code is also horribly wrong, but in a subtle way. <font face="Courier New">Func2</font> does allocate extra space for the array returned from <font face="Courier New">Func1</font>, but before the array can be copied to the secret output array of the second function, it is deallocated again and isn't accessible anymore.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:103px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">stock</span> Func<span style="color: #000000;">(</span>...<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">]</span> <span style="color: #000000;">=</span> <span style="color: #000066;">"abc"</span>;<br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>The extra output argument is placed <i>at the end</i> of all arguments, even after the variadic ones. However, the compiler fails to correctly obtain the return address in this case, and assumes its position is constant.<br />
<br />
In all these cases, returning a string is a really bad thing to do, since the code usually compiles fine, and the issue only becomes apparent at runtime.<br />
<br />
There is a slight performance cost associated with returning arrays as well: the <font face="Courier New">output = name;</font> always happens if the function is implemented in Pawn, and so the array is copied at least once. Take a look at this code:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:55px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> name<span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>; <span style="color: #228822;">// = PlayerName(playerid); doesn't work, direct assignment isn't supported</span><br/>name <span style="color: #000000;">=</span> PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span>;</div></div></pre>
</div>The compiler again allocates extra space for the string returned from <font face="Courier New">PlayerName</font> (always on the heap), before it moves it to <font face="Courier New">name</font>. Therefore, the array has to be unnecessarily copied twice before it is usable.<br />
<br />
As you can see, returning arrays has some significant drawbacks, but it is still useful in some cases, when you are cautious.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:39px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #222222;">format</span><span style="color: #000000;">(</span>string, <span style="color: #2222BB;">sizeof</span> string, <span style="color: #000066;">"Your name is %s."</span>, PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span><span style="color: #000000;">)</span>;</div></div></pre>
</div>This is the intended usage of returning arrays – as temporary arguments to other functions. In all other cases, using a normal output parameter is safer and faster. In this case, no extra copying happens at the caller's site.<br />
<br />
<font face="Courier New">PlayerName</font> itself can be "fixed" to return the string directly without unnecessary copying, via in-line assembly:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:215px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">forward</span> <span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span>;<br/><span style="color: #2222BB;">stock</span> PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222AA;">#assert MAX_PLAYER_NAME + 1 == 25</span><br/>    <span style="color: #2222AA;">#emit PUSH.C 25 // size parameter of GetPlayerName</span><br/>    <span style="color: #2222AA;">#emit PUSH.S 16 // secret return parameter of PlayerName at address 16 (&amp;playerid + 4)</span><br/>    <span style="color: #2222AA;">#emit PUSH.S playerid // equal to 12</span><br/>    <span style="color: #2222AA;">#emit PUSH.C 12 // number of bytes passed to the function (4 * 3 arguments)</span><br/>    <span style="color: #2222AA;">#emit SYSREQ.C GetPlayerName // calling the function</span><br/>    <span style="color: #2222AA;">#emit STACK 16 // cleanup of the arguments from the stack</span><br/>    <span style="color: #2222AA;">#emit RETN</span><br/><span style="color: #000000;">}</span></div></div></pre>
</div>This way, <font face="Courier New">PlayerName</font> does no extra copying, passing the secret return address directly to <font face="Courier New">GetPlayerName</font>.<br />
<br />
<b><i>PawnPlus</i> strings</b><br />
Dynamic strings in <i><a href="https://sampforum.blast.hk/showthread.php?tid=659714" target="_blank">PawnPlus</a></i> offer the flexibility and convenience of normal values, since they are passed around as references.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:87px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">stock</span> <span style="color: #000000;">String</span><span style="color: #000000;">:</span>Func<span style="color: #000000;">(</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">return</span> str_new<span style="color: #000000;">(</span><span style="color: #000066;">"abc"</span><span style="color: #000000;">)</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>The string can be returned from functions, passed to other functions or even to native functions, inspected, or modified, and all of this without any additional copying.<br />
<br />
<b>Constant strings</b><br />
All the previous methods are suitable for strings that are produced at runtime, but for constant strings, I'd advise against using any of them. Use macros instead.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:135px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> <span style="color: #2222BB;">const</span> _tips<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">[</span><span style="color: #000000;">]</span> <span style="color: #000000;">=</span> <span style="color: #000000;">{</span><br/>    <span style="color: #000066;">"Tip one"</span>,<br/>    <span style="color: #000066;">"Tip two"</span>,<br/>    <span style="color: #000066;">"Tip three"</span>,<br/>    <span style="color: #000066;">"Tip four"</span><br/><span style="color: #000000;">}</span>;<br/><span style="color: #2222AA;">#define RandomTip() (_tips[random(sizeof _tips)])</span></div></div></pre>
</div>Using this in functions like <font face="Courier New">SendClientMessage</font> requires no string copying at all, since the address of the string is used directly. You can also afford to use variable-length strings in the array, resulting in a little more efficient storage.]]></description>
			<content:encoded><![CDATA[While functions in Pawn typically return only simple cell-sized values, the language does allow for (even native) functions to return arrays and therefore also strings. However, the mechanism that allows it is a bit more complex and may not be suited for some use cases.<br />
<br />
First of all, let's look at the standard way of getting a string out of a function.<br />
<br />
<b>Via an output parameter</b><br />
All native SA-MP functions produce a string via a standard non-const array parameter. Since arrays are passed by reference (meaning the function gets access to the actual <i>variable</i> and not just the value inside), the native function can easily store any data inside:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:55px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> name<span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>;<br/>GetPlayerName<span style="color: #000000;">(</span>playerid, name, <span style="color: #2222BB;">sizeof</span> name<span style="color: #000000;">)</span>;</div></div></pre>
</div>Usually, another parameter is used alongside the array parameter to specify the length of the array. In Pawn, there is no simple way to obtain the length of an array directly at runtime, and so the compiler has to provide the length when needed (the <font face="Courier New">sizeof</font> operator). For strings, an extra cell must be allocated in the array to store the null character, indicating the end of the string (hence the <font face="Courier New">+ 1</font>).<br />
<br />
This way is especially useful for obtaining variable-length arrays (such as strings). The <font face="Courier New">format</font> function, for example, can be only implemented for this way, because the theoretical length of the output string is unlimited.<br />
<br />
<b>Returning an array directly</b><br />
If you want to produce a <b>fixed-size</b> array, you can return it from a function directly:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:135px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">forward</span> <span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span>;<br/><span style="color: #2222BB;">stock</span> PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> name<span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>;<br/>    GetPlayerName<span style="color: #000000;">(</span>playerid, name, <span style="color: #2222BB;">sizeof</span> name<span style="color: #000000;">)</span>;<br/>    <span style="color: #2222BB;">return</span> name;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>The forward declaration is optional, but it is useful since it makes you keep in mind that the length of the array is important.<br />
<br />
Now, if you know a bit of other languages like C etc., you may be aware that since <font face="Courier New">name</font> is allocated on the stack, it doesn't exist anymore when the function returns. Pawn gets around this fact using a trick – when the function is called, extra space for the array is allocated, and the address of this variable is provided to the function via a secret parameter.<br />
<br />
In reality, the function looks like this:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:119px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">stock</span> PlayerName<span style="color: #000000;">(</span>playerid, output<span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> name<span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>;<br/>    GetPlayerName<span style="color: #000000;">(</span>playerid, name, <span style="color: #2222BB;">sizeof</span> name<span style="color: #000000;">)</span>;<br/>    output <span style="color: #000000;">=</span> name;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>As you can see, returning a string is just a convenient syntactic shortcut for an extra output parameter.<br />
<br />
However, this comes at a cost of slightly decreased performance and bugs in certain cases. Let's start with the issues:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:103px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">stock</span> Select<span style="color: #000000;">(</span>index, arg<span style="color: #000000;">[</span><span style="color: #000000;">]</span>, arg2<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span>index <span style="color: #000000;">==</span> <span style="color: #000000;">0</span><span style="color: #000000;">)</span> <span style="color: #2222BB;">return</span> arg;<br/>    <span style="color: #2222BB;">return</span> arg2;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>This simple function seems to return one of the arguments, but since they have indeterminate sizes (represented as 0), the compiler thinks this function returns a zero-sized array and does not actually allocate any extra space for the string. You cannot return strings (or arrays) that have indeterminate length, and the compiler sometimes fails to inform you about this.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:215px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">forward</span> <span style="color: #000000;">[</span><span style="color: #000000;">4</span><span style="color: #000000;">]</span>Func1<span style="color: #000000;">(</span><span style="color: #000000;">)</span>;<br/><span style="color: #2222BB;">stock</span> Func1<span style="color: #000000;">(</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">]</span> <span style="color: #000000;">=</span> <span style="color: #000066;">"abc"</span>;<br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222BB;">forward</span> <span style="color: #000000;">[</span><span style="color: #000000;">4</span><span style="color: #000000;">]</span>Func2<span style="color: #000000;">(</span><span style="color: #000000;">)</span>;<br/><span style="color: #2222BB;">stock</span> Func2<span style="color: #000000;">(</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">return</span> Func1<span style="color: #000000;">(</span><span style="color: #000000;">)</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>This code is also horribly wrong, but in a subtle way. <font face="Courier New">Func2</font> does allocate extra space for the array returned from <font face="Courier New">Func1</font>, but before the array can be copied to the secret output array of the second function, it is deallocated again and isn't accessible anymore.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:103px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">stock</span> Func<span style="color: #000000;">(</span>...<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">new</span> str<span style="color: #000000;">[</span><span style="color: #000000;">]</span> <span style="color: #000000;">=</span> <span style="color: #000066;">"abc"</span>;<br/>    <span style="color: #2222BB;">return</span> str;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>The extra output argument is placed <i>at the end</i> of all arguments, even after the variadic ones. However, the compiler fails to correctly obtain the return address in this case, and assumes its position is constant.<br />
<br />
In all these cases, returning a string is a really bad thing to do, since the code usually compiles fine, and the issue only becomes apparent at runtime.<br />
<br />
There is a slight performance cost associated with returning arrays as well: the <font face="Courier New">output = name;</font> always happens if the function is implemented in Pawn, and so the array is copied at least once. Take a look at this code:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:55px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> name<span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>; <span style="color: #228822;">// = PlayerName(playerid); doesn't work, direct assignment isn't supported</span><br/>name <span style="color: #000000;">=</span> PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span>;</div></div></pre>
</div>The compiler again allocates extra space for the string returned from <font face="Courier New">PlayerName</font> (always on the heap), before it moves it to <font face="Courier New">name</font>. Therefore, the array has to be unnecessarily copied twice before it is usable.<br />
<br />
As you can see, returning arrays has some significant drawbacks, but it is still useful in some cases, when you are cautious.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:39px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #222222;">format</span><span style="color: #000000;">(</span>string, <span style="color: #2222BB;">sizeof</span> string, <span style="color: #000066;">"Your name is %s."</span>, PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span><span style="color: #000000;">)</span>;</div></div></pre>
</div>This is the intended usage of returning arrays – as temporary arguments to other functions. In all other cases, using a normal output parameter is safer and faster. In this case, no extra copying happens at the caller's site.<br />
<br />
<font face="Courier New">PlayerName</font> itself can be "fixed" to return the string directly without unnecessary copying, via in-line assembly:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:215px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">forward</span> <span style="color: #000000;">[</span>MAX_PLAYER_NAME <span style="color: #000000;">+</span> <span style="color: #000000;">1</span><span style="color: #000000;">]</span>PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span>;<br/><span style="color: #2222BB;">stock</span> PlayerName<span style="color: #000000;">(</span>playerid<span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222AA;">#assert MAX_PLAYER_NAME + 1 == 25</span><br/>    <span style="color: #2222AA;">#emit PUSH.C 25 // size parameter of GetPlayerName</span><br/>    <span style="color: #2222AA;">#emit PUSH.S 16 // secret return parameter of PlayerName at address 16 (&amp;playerid + 4)</span><br/>    <span style="color: #2222AA;">#emit PUSH.S playerid // equal to 12</span><br/>    <span style="color: #2222AA;">#emit PUSH.C 12 // number of bytes passed to the function (4 * 3 arguments)</span><br/>    <span style="color: #2222AA;">#emit SYSREQ.C GetPlayerName // calling the function</span><br/>    <span style="color: #2222AA;">#emit STACK 16 // cleanup of the arguments from the stack</span><br/>    <span style="color: #2222AA;">#emit RETN</span><br/><span style="color: #000000;">}</span></div></div></pre>
</div>This way, <font face="Courier New">PlayerName</font> does no extra copying, passing the secret return address directly to <font face="Courier New">GetPlayerName</font>.<br />
<br />
<b><i>PawnPlus</i> strings</b><br />
Dynamic strings in <i><a href="https://sampforum.blast.hk/showthread.php?tid=659714" target="_blank">PawnPlus</a></i> offer the flexibility and convenience of normal values, since they are passed around as references.<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:87px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">stock</span> <span style="color: #000000;">String</span><span style="color: #000000;">:</span>Func<span style="color: #000000;">(</span><span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">return</span> str_new<span style="color: #000000;">(</span><span style="color: #000066;">"abc"</span><span style="color: #000000;">)</span>;<br/><span style="color: #000000;">}</span></div></div></pre>
</div>The string can be returned from functions, passed to other functions or even to native functions, inspected, or modified, and all of this without any additional copying.<br />
<br />
<b>Constant strings</b><br />
All the previous methods are suitable for strings that are produced at runtime, but for constant strings, I'd advise against using any of them. Use macros instead.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:135px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222BB;">new</span> <span style="color: #2222BB;">const</span> _tips<span style="color: #000000;">[</span><span style="color: #000000;">]</span><span style="color: #000000;">[</span><span style="color: #000000;">]</span> <span style="color: #000000;">=</span> <span style="color: #000000;">{</span><br/>    <span style="color: #000066;">"Tip one"</span>,<br/>    <span style="color: #000066;">"Tip two"</span>,<br/>    <span style="color: #000066;">"Tip three"</span>,<br/>    <span style="color: #000066;">"Tip four"</span><br/><span style="color: #000000;">}</span>;<br/><span style="color: #2222AA;">#define RandomTip() (_tips[random(sizeof _tips)])</span></div></div></pre>
</div>Using this in functions like <font face="Courier New">SendClientMessage</font> requires no string copying at all, since the address of the string is used directly. You can also afford to use variable-length strings in the array, resulting in a little more efficient storage.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] How to make a simple server time system]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=663955</link>
			<pubDate>Fri, 15 Feb 2019 21:38:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=323449">TokicMajstor</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=663955</guid>
			<description><![CDATA[<div align="center">Hello this is my first tutorial Iam just gonna explain this fast (if there's anybody who needs this). This tutorial is about time on your server (not weather), how to make the server to automatically set the server time as the clock on your server...?</div>
First you need to make a timer that will set server time every 1 hour (if you have a payday sistem which repeats every hour you can just put everything there):<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">forward Time(); // you should put this timer with the other timers in you server but it is not really important
public Time()
{
    // This is what will happen when timer's time run out
}</pre>
</div>Second you need to get your server (clock) time inside that timer like this:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 114px;
		text-align: left;
		overflow: auto">forward Time();
public Time()
{
    new h; // here we make a new variable in which we will store that time we get from server
    gettime(h); // here we store it to variable 'h'
}</pre>
</div>Then we need to put server time as the variable 'h', but if in your country currently is winter probbably it is night at like 6 o'clock so you can make that too like this:<br />
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
		overflow: auto">forward Time();
public Time()
{
    new h; 
    gettime(h); 
    if(h == 18 || h == 19) // here we check if it is 19h or 18h if it is we will set the world time to current time plus 5 hours so it will be night and so we are goin on with this below
    {
         SetWorldTime(h+5);
    }
    else if(h == 20 || h == 21)
    {
        SetWorldTime(h+4);
    }
    else if(h == 22 || h == 23)
    {
        SetWorldTime(h+2);
    }
    else   // here we check if current time is not 18,19,20,21,22,23 (everything that we haven't specified before) and if time is like 9h AM it will set your world time to 9
    {
        SetWorldTime(h);
    }
}</pre>
</div>And one last thing is to actually set the timer and make it repeating every 1h (put this in your on gamemode init so it will be set as server is started):<br />
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
		overflow: auto">SetTimer("Time", 3600000, true); // this is setting the public timer which you made before, 3600000 is the one hour in milliseconds and true means that timer will be repeated every time when interval get to 0 and your interval is 1hour (3600000)</pre>
</div>This is my first tutorial and I haven't spend much time on it so don't hate a lot. And if there's mistakes type below]]></description>
			<content:encoded><![CDATA[<div align="center">Hello this is my first tutorial Iam just gonna explain this fast (if there's anybody who needs this). This tutorial is about time on your server (not weather), how to make the server to automatically set the server time as the clock on your server...?</div>
First you need to make a timer that will set server time every 1 hour (if you have a payday sistem which repeats every hour you can just put everything there):<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">forward Time(); // you should put this timer with the other timers in you server but it is not really important
public Time()
{
    // This is what will happen when timer's time run out
}</pre>
</div>Second you need to get your server (clock) time inside that timer like this:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 114px;
		text-align: left;
		overflow: auto">forward Time();
public Time()
{
    new h; // here we make a new variable in which we will store that time we get from server
    gettime(h); // here we store it to variable 'h'
}</pre>
</div>Then we need to put server time as the variable 'h', but if in your country currently is winter probbably it is night at like 6 o'clock so you can make that too like this:<br />
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
		overflow: auto">forward Time();
public Time()
{
    new h; 
    gettime(h); 
    if(h == 18 || h == 19) // here we check if it is 19h or 18h if it is we will set the world time to current time plus 5 hours so it will be night and so we are goin on with this below
    {
         SetWorldTime(h+5);
    }
    else if(h == 20 || h == 21)
    {
        SetWorldTime(h+4);
    }
    else if(h == 22 || h == 23)
    {
        SetWorldTime(h+2);
    }
    else   // here we check if current time is not 18,19,20,21,22,23 (everything that we haven't specified before) and if time is like 9h AM it will set your world time to 9
    {
        SetWorldTime(h);
    }
}</pre>
</div>And one last thing is to actually set the timer and make it repeating every 1h (put this in your on gamemode init so it will be set as server is started):<br />
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
		overflow: auto">SetTimer("Time", 3600000, true); // this is setting the public timer which you made before, 3600000 is the one hour in milliseconds and true means that timer will be repeated every time when interval get to 0 and your interval is 1hour (3600000)</pre>
</div>This is my first tutorial and I haven't spend much time on it so don't hate a lot. And if there's mistakes type below]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] Using the ternary operator :?]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=663153</link>
			<pubDate>Wed, 23 Jan 2019 14:35:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=70808">faxxe</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=663153</guid>
			<description><![CDATA[<b><div align="center"><font size="7">Ternary operator</font></div></b><br />
Ahoy everyone.<br />
This time i'll show you guys how to use the ternay operator given by many languages like C or PAWN.<br />
This time we will only talk about the condititonal operator to replace if-statements. There are also ways to perform other actions using nested ternary operator statements.<br />
<br />
It is commonly referred as the conditional operator. An expression x ? y : a evaluates to y if the value of x is true, and otherwise to a.<br />
<br />
Brief example, comparing 2 numbers <b>using if-statement.</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 210px;
		text-align: left;
		overflow: auto">new result;
new a=1;
new b=0;

if (a &gt; b) 
{
    result = x;
}
else 
{
    result = y;
}</pre>
</div>Using our beloved <b>ternary operator</b> makes it much simplier and shorter, and that's it..<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">
result = a &gt; b ? x : y;
result = a &lt; b ? printf("a is less") : printf("a is greater");</pre>
</div>... but not in any case.<br />
<br />
Now some examples from my gamemodes, in this case my spectate system to spectate a random player.<br />
<b>Using if-statement.</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
    if(!tmp) return INVALID_PLAYER_ID;
    if(idx&gt;tmp) idx=0;
    if(idx&lt;0) idx=tmp-1;
    return randoms[idx];</pre>
</div>Using ternary operator it looks like that.<br />
Unfortunately not any statements are appropriate to be written using ternary operators like this one.<br />
It might look quite weird.<br />
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
		overflow: auto">return (!tmp) ? INVALID_PLAYER_ID : randoms[(idx&gt;tmp)?0:((idx&lt;0)?(tmp-1):idx)];</pre>
</div>In conclusion that's a brief tutorial how you can use ternary operators.<br />
<br />
Unfortunately we tend to get crappy using ternary operators excessively.<br />
It will be complicated to maintain code using ternaries especially for beginners.<br />
You have to consider when to use it and not.<br />
It might be useful to increase the readability of your code, but in other cases it might do the contrary.<br />
<br />
So just use it when really necessary.<br />
<br />
For now that's it, but during the next days i'll introduce some more advanced examples using the ternary operator in PAWN.]]></description>
			<content:encoded><![CDATA[<b><div align="center"><font size="7">Ternary operator</font></div></b><br />
Ahoy everyone.<br />
This time i'll show you guys how to use the ternay operator given by many languages like C or PAWN.<br />
This time we will only talk about the condititonal operator to replace if-statements. There are also ways to perform other actions using nested ternary operator statements.<br />
<br />
It is commonly referred as the conditional operator. An expression x ? y : a evaluates to y if the value of x is true, and otherwise to a.<br />
<br />
Brief example, comparing 2 numbers <b>using if-statement.</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 210px;
		text-align: left;
		overflow: auto">new result;
new a=1;
new b=0;

if (a &gt; b) 
{
    result = x;
}
else 
{
    result = y;
}</pre>
</div>Using our beloved <b>ternary operator</b> makes it much simplier and shorter, and that's it..<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">
result = a &gt; b ? x : y;
result = a &lt; b ? printf("a is less") : printf("a is greater");</pre>
</div>... but not in any case.<br />
<br />
Now some examples from my gamemodes, in this case my spectate system to spectate a random player.<br />
<b>Using if-statement.</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">
    if(!tmp) return INVALID_PLAYER_ID;
    if(idx&gt;tmp) idx=0;
    if(idx&lt;0) idx=tmp-1;
    return randoms[idx];</pre>
</div>Using ternary operator it looks like that.<br />
Unfortunately not any statements are appropriate to be written using ternary operators like this one.<br />
It might look quite weird.<br />
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
		overflow: auto">return (!tmp) ? INVALID_PLAYER_ID : randoms[(idx&gt;tmp)?0:((idx&lt;0)?(tmp-1):idx)];</pre>
</div>In conclusion that's a brief tutorial how you can use ternary operators.<br />
<br />
Unfortunately we tend to get crappy using ternary operators excessively.<br />
It will be complicated to maintain code using ternaries especially for beginners.<br />
You have to consider when to use it and not.<br />
It might be useful to increase the readability of your code, but in other cases it might do the contrary.<br />
<br />
So just use it when really necessary.<br />
<br />
For now that's it, but during the next days i'll introduce some more advanced examples using the ternary operator in PAWN.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] How to open shops interiors! and make a system!]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=662301</link>
			<pubDate>Fri, 28 Dec 2018 19:41:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=320755">Hassanking2</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=662301</guid>
			<description><![CDATA[<b>Hi This is my first tutorial in this tutorial i am going to show you how do you can open shop interior.</b><br />
Shops interiors coord,ids from here: <a href="http://weedarr.wikidot.com/interior" target="_blank">http://weedarr.wikidot.com/interior</a> pickups ids from here:<a href="http://weedarr.wikidot.com/pickups" target="_blank">http://weedarr.wikidot.com/pickups</a> weapons ids from here:<a href="https://sampwiki.blast.hk/wiki/Weapons" target="_blank">https://sampwiki.blast.hk/wiki/Weapons</a><br />
<br />
You'll need to type /save &lt;text&gt; in game to create a enter pickup for the shops also for the exit<br />
and you'll find it in documents/GTA SAN ANDREAS USER FILES/SAMP/savedpositions<br />
Let's begin<br />
You'll need to add a pickup like this<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 226px;
		text-align: left;
		overflow: auto">// The entry pickup
new AmmuPickupEntry;

// The exit pickup
new AmmuPickupExit;

public OnGameModeInit() {
    // 1318 is the pickup model ID, followed by the coordinates in the world
    AmmuPickupEntry = CreatePickup(1318, 1, 1367.8782, -1279.7295, 13.5469);

    // And this is the exit pickup that exists inside the store
    AmmuPickupExit = CreatePickup(1318, 1, 285.3757, -41.3928, 1001.5156);
}</pre>
</div>Step 2:<br />
Now the pickups is created sucessfully now we will need to make what players will be teleported to if he stand on the pickups<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 210px;
		text-align: left;
		overflow: auto">You'll need to go to OnPlayerPickUpPickUp
}
	if(pickupid == ammupickupentry)//LS Enter ammu market the pickup that we've created
 	{
 	    SetPlayerPos(playerid, 286.1017,-41.8042, 1001.5156);// if the player stand on it he gets teleported to ammu coord
 	    SetPlayerInterior ( playerid, 1 );// and we set him into ammu-natioin id you can get both of this in <a href="http://weedarr.wikidot.com/interior
" target="_blank" rel="noopener" class="mycode_url">http://weedarr.wikidot.com/interiornl62e...4.50246843</a> 	}
 	if(pickupid == ammuoutpickupexit)//LS exit ammu market the exit pickup that we've created 
 	{
 	    SetPlayerPos(playerid, 1364.8909,-1279.5602,13.5469);// if the player stand on it he gets teleported to out of ammu you can teleport him the place that you want by /save &lt;text&gt; 
 	    SetPlayerInterior (playerid, 0);// here we get the player out of interior by setting his interior to 0
 	}</pre>
</div>Step 3:<br />
Now it's done and players can gets into the ammu-nation! <br />
Let's add a checkpoint by entering it let them buy weapons!<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 274px;
		text-align: left;
		overflow: auto">We will have to add
new ammuCP;// you can add it before ongamemodeinit
Now we go to the ammu-nation type /save in the place that we want to put the Checkpoint
After that we go to OnGamodeinit
ammuCP= CreateDynamicCP(296.6336,-38.0615,1001.5156,2,-1,-1,-1);// now we've created the cp Just put your X,y,z dont touch anything else
After that go to your dialog defines!
type
#Define DIALOG_AMMU 788// if you have this in your gamemode so change it to another id
After that go to OnPlayerEnterDynamicCP
}
	if(checkpointid == ammuCP)// now we will create what happens if player enter this checkpoint dialog will appear i've just added few Weapons you can add what you want
	{
		format(str, 956, "Sawn-off\nCombat Shotgun.nMicro SMG\nMP5\nAK47\nM4\nTec9\nSniper Rifle\nDetonator\nDesert Eagle\nBody Armour\nMinigun\n");
 		ShowPlayerDialog(playerid, DIALOG_AMMU, DIALOG_STYLE_LIST, "{FF0000}Ammu-Nation", str, "Confirm", ".: Close :.");
 	}
The Pickups is done also the Checkpoint also the Dialog</pre>
</div>Step 4:<br />
So now we'll go to OnDialogResponse<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">if(dialogid == DIALOG_AMMU)
	{
	    if(response)
	    {
	        if(listitem == 0)// Sawn-off
			{
			    if(GetPlayerMoney(playerid) &lt; 12000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");// We will check if the player have 12k to buy sawn-off if he dont have, we will send him message! that he cant buy it
   				GivePlayerWeapon(playerid, 26, 100);// this function is used to giveplayerweapon(playerid, 26 is the weapon id, 100 is the ammo
       			GivePlayerMoney(playerid, -12000);// now we will take from the player 12k
          		GameTextForPlayer(playerid,"~r~-12000~g~&#36;",5000,1);// this is a gametext for player will appear when he buy sawn-off
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Sawnoff Shotgun");//a message will appear

			}
			if(listitem == 1)//Combat Shotgun
			{
			    if(GetPlayerMoney(playerid) &lt; 10000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 27, 50);
       			GivePlayerMoney(playerid, -10000);
          		GameTextForPlayer(playerid,"~r~-10000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Combat Shotgun");
   			}
   			if(listitem == 2)//Micro SMG
   			{
   			    if(GetPlayerMoney(playerid) &lt; 6000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 28, 400);
       			GivePlayerMoney(playerid, -6000);
          		GameTextForPlayer(playerid,"~r~-6000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Micro SMG");
   			}
   			if(listitem == 3)//MP5
   			{
   			    if(GetPlayerMoney(playerid) &lt; 15000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 29, 300);
       			GivePlayerMoney(playerid, -15000);
          		GameTextForPlayer(playerid,"~r~-15000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: MP5");
			}
			if(listitem == 4)// M4
			{
                if(GetPlayerMoney(playerid) &lt; 20000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 30, 600);
       			GivePlayerMoney(playerid, -20000);
          		GameTextForPlayer(playerid,"~r~-20000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: M4");
   			}
   			if(listitem == 5)//tec9
   			{
   			    if(GetPlayerMoney(playerid) &lt; 4000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 32, 500);
       			GivePlayerMoney(playerid, -4000);
          		GameTextForPlayer(playerid,"~r~-4000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Tec9");
			}
			if(listitem == 6)//Sniper Rifle
			{
			    if(GetPlayerMoney(playerid) &lt; 15000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 34, 100);
       			GivePlayerMoney(playerid, -15000);
          		GameTextForPlayer(playerid,"~r~-15000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Sniper Rifle");
   			}
   			if(listitem == 7)//Detonator
   			{
   			    if(GetPlayerMoney(playerid) &lt; 25000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 40, 5);
       			GivePlayerMoney(playerid, -25000);
          		GameTextForPlayer(playerid,"~r~-25000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Detonator");
 			}
   			if(listitem == 8)//Desert eagle
   			{
   			    if(GetPlayerMoney(playerid) &lt; 20000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 24, 300);
       			GivePlayerMoney(playerid, -20000);
          		GameTextForPlayer(playerid,"~r~-25000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Desert Eagle");
			}
			if(listitem == 9)//body armour
			{
   				if(GetPlayerMoney(playerid) &lt; 2000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				SetPlayerArmour(playerid, 100);
				GameTextForPlayer(playerid,"~r~-2000~g~&#36;",5000,1);
				SendClientMessage(playerid, 0x22B998AA,"You Bought: Body Armour");
			}
			if(listitem == 10)//Minigun
			{
			    if(GetPlayerMoney(playerid) &lt; 150000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 38, 20);
       			GivePlayerMoney(playerid, -150000);
          		GameTextForPlayer(playerid,"~r~-150000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Minigun");
				return 1;
			}
		}
	}</pre>
</div>This was my first tutorial here i hope i can have time making more tutorials!<br />
Give Feedbacks!<br />
Also if there's something i didn't explain you can tell me in the comments i will edit it asap!<br />
Note: you dont have to use the same colors that i've typed you can use your own colors in your gamemode that you've defined]]></description>
			<content:encoded><![CDATA[<b>Hi This is my first tutorial in this tutorial i am going to show you how do you can open shop interior.</b><br />
Shops interiors coord,ids from here: <a href="http://weedarr.wikidot.com/interior" target="_blank">http://weedarr.wikidot.com/interior</a> pickups ids from here:<a href="http://weedarr.wikidot.com/pickups" target="_blank">http://weedarr.wikidot.com/pickups</a> weapons ids from here:<a href="https://sampwiki.blast.hk/wiki/Weapons" target="_blank">https://sampwiki.blast.hk/wiki/Weapons</a><br />
<br />
You'll need to type /save &lt;text&gt; in game to create a enter pickup for the shops also for the exit<br />
and you'll find it in documents/GTA SAN ANDREAS USER FILES/SAMP/savedpositions<br />
Let's begin<br />
You'll need to add a pickup like this<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 226px;
		text-align: left;
		overflow: auto">// The entry pickup
new AmmuPickupEntry;

// The exit pickup
new AmmuPickupExit;

public OnGameModeInit() {
    // 1318 is the pickup model ID, followed by the coordinates in the world
    AmmuPickupEntry = CreatePickup(1318, 1, 1367.8782, -1279.7295, 13.5469);

    // And this is the exit pickup that exists inside the store
    AmmuPickupExit = CreatePickup(1318, 1, 285.3757, -41.3928, 1001.5156);
}</pre>
</div>Step 2:<br />
Now the pickups is created sucessfully now we will need to make what players will be teleported to if he stand on the pickups<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 210px;
		text-align: left;
		overflow: auto">You'll need to go to OnPlayerPickUpPickUp
}
	if(pickupid == ammupickupentry)//LS Enter ammu market the pickup that we've created
 	{
 	    SetPlayerPos(playerid, 286.1017,-41.8042, 1001.5156);// if the player stand on it he gets teleported to ammu coord
 	    SetPlayerInterior ( playerid, 1 );// and we set him into ammu-natioin id you can get both of this in <a href="http://weedarr.wikidot.com/interior
" target="_blank" rel="noopener" class="mycode_url">http://weedarr.wikidot.com/interiornl62e...4.50246843</a> 	}
 	if(pickupid == ammuoutpickupexit)//LS exit ammu market the exit pickup that we've created 
 	{
 	    SetPlayerPos(playerid, 1364.8909,-1279.5602,13.5469);// if the player stand on it he gets teleported to out of ammu you can teleport him the place that you want by /save &lt;text&gt; 
 	    SetPlayerInterior (playerid, 0);// here we get the player out of interior by setting his interior to 0
 	}</pre>
</div>Step 3:<br />
Now it's done and players can gets into the ammu-nation! <br />
Let's add a checkpoint by entering it let them buy weapons!<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 274px;
		text-align: left;
		overflow: auto">We will have to add
new ammuCP;// you can add it before ongamemodeinit
Now we go to the ammu-nation type /save in the place that we want to put the Checkpoint
After that we go to OnGamodeinit
ammuCP= CreateDynamicCP(296.6336,-38.0615,1001.5156,2,-1,-1,-1);// now we've created the cp Just put your X,y,z dont touch anything else
After that go to your dialog defines!
type
#Define DIALOG_AMMU 788// if you have this in your gamemode so change it to another id
After that go to OnPlayerEnterDynamicCP
}
	if(checkpointid == ammuCP)// now we will create what happens if player enter this checkpoint dialog will appear i've just added few Weapons you can add what you want
	{
		format(str, 956, "Sawn-off\nCombat Shotgun.nMicro SMG\nMP5\nAK47\nM4\nTec9\nSniper Rifle\nDetonator\nDesert Eagle\nBody Armour\nMinigun\n");
 		ShowPlayerDialog(playerid, DIALOG_AMMU, DIALOG_STYLE_LIST, "{FF0000}Ammu-Nation", str, "Confirm", ".: Close :.");
 	}
The Pickups is done also the Checkpoint also the Dialog</pre>
</div>Step 4:<br />
So now we'll go to OnDialogResponse<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto">if(dialogid == DIALOG_AMMU)
	{
	    if(response)
	    {
	        if(listitem == 0)// Sawn-off
			{
			    if(GetPlayerMoney(playerid) &lt; 12000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");// We will check if the player have 12k to buy sawn-off if he dont have, we will send him message! that he cant buy it
   				GivePlayerWeapon(playerid, 26, 100);// this function is used to giveplayerweapon(playerid, 26 is the weapon id, 100 is the ammo
       			GivePlayerMoney(playerid, -12000);// now we will take from the player 12k
          		GameTextForPlayer(playerid,"~r~-12000~g~&#36;",5000,1);// this is a gametext for player will appear when he buy sawn-off
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Sawnoff Shotgun");//a message will appear

			}
			if(listitem == 1)//Combat Shotgun
			{
			    if(GetPlayerMoney(playerid) &lt; 10000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 27, 50);
       			GivePlayerMoney(playerid, -10000);
          		GameTextForPlayer(playerid,"~r~-10000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Combat Shotgun");
   			}
   			if(listitem == 2)//Micro SMG
   			{
   			    if(GetPlayerMoney(playerid) &lt; 6000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 28, 400);
       			GivePlayerMoney(playerid, -6000);
          		GameTextForPlayer(playerid,"~r~-6000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Micro SMG");
   			}
   			if(listitem == 3)//MP5
   			{
   			    if(GetPlayerMoney(playerid) &lt; 15000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 29, 300);
       			GivePlayerMoney(playerid, -15000);
          		GameTextForPlayer(playerid,"~r~-15000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: MP5");
			}
			if(listitem == 4)// M4
			{
                if(GetPlayerMoney(playerid) &lt; 20000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 30, 600);
       			GivePlayerMoney(playerid, -20000);
          		GameTextForPlayer(playerid,"~r~-20000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: M4");
   			}
   			if(listitem == 5)//tec9
   			{
   			    if(GetPlayerMoney(playerid) &lt; 4000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 32, 500);
       			GivePlayerMoney(playerid, -4000);
          		GameTextForPlayer(playerid,"~r~-4000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Tec9");
			}
			if(listitem == 6)//Sniper Rifle
			{
			    if(GetPlayerMoney(playerid) &lt; 15000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 34, 100);
       			GivePlayerMoney(playerid, -15000);
          		GameTextForPlayer(playerid,"~r~-15000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Sniper Rifle");
   			}
   			if(listitem == 7)//Detonator
   			{
   			    if(GetPlayerMoney(playerid) &lt; 25000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 40, 5);
       			GivePlayerMoney(playerid, -25000);
          		GameTextForPlayer(playerid,"~r~-25000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Detonator");
 			}
   			if(listitem == 8)//Desert eagle
   			{
   			    if(GetPlayerMoney(playerid) &lt; 20000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 24, 300);
       			GivePlayerMoney(playerid, -20000);
          		GameTextForPlayer(playerid,"~r~-25000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Desert Eagle");
			}
			if(listitem == 9)//body armour
			{
   				if(GetPlayerMoney(playerid) &lt; 2000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				SetPlayerArmour(playerid, 100);
				GameTextForPlayer(playerid,"~r~-2000~g~&#36;",5000,1);
				SendClientMessage(playerid, 0x22B998AA,"You Bought: Body Armour");
			}
			if(listitem == 10)//Minigun
			{
			    if(GetPlayerMoney(playerid) &lt; 150000) return SendClientMessage(playerid, COLOR_RED, "Error: {FFFFFF} You don't have enough money!");
   				GivePlayerWeapon(playerid, 38, 20);
       			GivePlayerMoney(playerid, -150000);
          		GameTextForPlayer(playerid,"~r~-150000~g~&#36;",5000,1);
   				SendClientMessage(playerid, 0x22B998AA,"You Bought Weapon: Minigun");
				return 1;
			}
		}
	}</pre>
</div>This was my first tutorial here i hope i can have time making more tutorials!<br />
Give Feedbacks!<br />
Also if there's something i didn't explain you can tell me in the comments i will edit it asap!<br />
Note: you dont have to use the same colors that i've typed you can use your own colors in your gamemode that you've defined]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Tutorial] "Goes To" operator: -->]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=662259</link>
			<pubDate>Thu, 27 Dec 2018 14:27:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=29176">Y_Less</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=662259</guid>
			<description><![CDATA[<div align="center"><font color="Red"><font size="8"><b><u><font color="Green">Goes To</font></u></b></font></font></div>
Just a brief tutorial to tell people about the “goes to” operator: <font face="courier new">--&gt;</font>.  The arrow design is to show it goes towards the number, thus it decrements a variable until it reaches zero, and can be used in loops to loop a number of times.  Mainly the <font face="courier new">while</font> loop:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto"><font color="Blue">new</font> i = <font color="Orange">10</font>;
<font color="Blue">while</font> (i --&gt; <font color="Orange">0</font>)
{
    printf(<font color="Red">"%d"</font>, i);
}</pre>
</div>Will print:<br />
<br />
<font face="courier new">9<br />
8<br />
7<br />
6<br />
5<br />
4<br />
3<br />
2<br />
1<br />
0<br />
</font><br />
<br />
Note that <font face="courier new">10</font> is not included, while <font face="courier new">0</font> is.  This makes it like normal loops, but backwards.<br />
<br />
You can loop over players backwards with:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto"><font color="Blue">for</font> (<font color="Blue">new</font> i = MAX_PLAYERS; i --&gt; <font color="Orange">0</font>; )
{
}</pre>
</div>Technically you can go down to any value:<br />
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
		overflow: auto"><font color="Blue">new</font> j = <font color="Orange">10</font>;
<font color="Blue">while</font> (j --&gt; <font color="Orange">5</font>) {}</pre>
</div>And yes, if you haven’t figured it out yet, this isn’t actually a new operator.  It is two operators (<font face="courier new">--</font> and <font face="courier new">&gt;</font>) with odd spacing.  That last example would be more normally written as:<br />
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
		overflow: auto"><font color="Blue">new</font> j = <font color="Orange">10</font>;
<font color="Blue">while</font> (j-- &gt; <font color="Orange">5</font>) {}</pre>
</div>I first saw this here: <a href="https://stackoverflow.com/questions/1642028/what-is-the-operator-in-c" target="_blank">https://stackoverflow.com/questions/...-operator-in-c</a> so though I’d write it here.  It is stupid, don't use it...]]></description>
			<content:encoded><![CDATA[<div align="center"><font color="Red"><font size="8"><b><u><font color="Green">Goes To</font></u></b></font></font></div>
Just a brief tutorial to tell people about the “goes to” operator: <font face="courier new">--&gt;</font>.  The arrow design is to show it goes towards the number, thus it decrements a variable until it reaches zero, and can be used in loops to loop a number of times.  Mainly the <font face="courier new">while</font> loop:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto"><font color="Blue">new</font> i = <font color="Orange">10</font>;
<font color="Blue">while</font> (i --&gt; <font color="Orange">0</font>)
{
    printf(<font color="Red">"%d"</font>, i);
}</pre>
</div>Will print:<br />
<br />
<font face="courier new">9<br />
8<br />
7<br />
6<br />
5<br />
4<br />
3<br />
2<br />
1<br />
0<br />
</font><br />
<br />
Note that <font face="courier new">10</font> is not included, while <font face="courier new">0</font> is.  This makes it like normal loops, but backwards.<br />
<br />
You can loop over players backwards with:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto"><font color="Blue">for</font> (<font color="Blue">new</font> i = MAX_PLAYERS; i --&gt; <font color="Orange">0</font>; )
{
}</pre>
</div>Technically you can go down to any value:<br />
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
		overflow: auto"><font color="Blue">new</font> j = <font color="Orange">10</font>;
<font color="Blue">while</font> (j --&gt; <font color="Orange">5</font>) {}</pre>
</div>And yes, if you haven’t figured it out yet, this isn’t actually a new operator.  It is two operators (<font face="courier new">--</font> and <font face="courier new">&gt;</font>) with odd spacing.  That last example would be more normally written as:<br />
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
		overflow: auto"><font color="Blue">new</font> j = <font color="Orange">10</font>;
<font color="Blue">while</font> (j-- &gt; <font color="Orange">5</font>) {}</pre>
</div>I first saw this here: <a href="https://stackoverflow.com/questions/1642028/what-is-the-operator-in-c" target="_blank">https://stackoverflow.com/questions/...-operator-in-c</a> so though I’d write it here.  It is stupid, don't use it...]]></content:encoded>
		</item>
	</channel>
</rss>