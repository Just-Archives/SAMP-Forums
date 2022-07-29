<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[SA-MP Forums Archive - Includes]]></title>
		<link>https://sampforum.blast.hk/</link>
		<description><![CDATA[SA-MP Forums Archive - https://sampforum.blast.hk]]></description>
		<pubDate>Thu, 28 Jul 2022 20:50:23 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[[Include] [MySQL R41-2] vlang - Create Messages for Multiple Languages]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676467</link>
			<pubDate>Tue, 09 Jun 2020 22:03:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=263294">Variable™</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676467</guid>
			<description><![CDATA[<font face="Tahoma"><font size="8"><font color="RoyalBlue">vlang</font></font><br />
<font size="2"><font color="SandyBrown">Build 2 - Beta Release - Last Update: 11/6/2020</font></font><br />
<br />
Sometimes I wanted to translate my game script in multiple languages and for all the features I have, not for client messages, game texts or dialogues only but for other features, too.<br />
<br />
I didn't really try to search for one because I had some ideas and I wanted to apply them nonetheless, so, anyway, I thought to share it with you guys and see what you think about it too.<br />
<br />
<font size="4"><font color="RoyalBLue">Additional Requirements</font></font><ul><li>y_va - <a href="https://github.com/pawn-lang/YSI-Includes" target="_blank">https://github.com/pawn-lang/YSI-Includes</a></li>
<li>y_hooks - A YSI include for hooking functions - <a href="https://github.com/pawn-lang/YSI-Includes" target="_blank">https://github.com/pawn-lang/YSI-Includes</a></li>
<li>MySQL Plugin - I tested this on R41-2 - <a href="https://github.com/pBlueG/SA-MP-MySQL/releases" target="_blank">https://github.com/pBlueG/SA-MP-MySQL/releases</a></li>
<li>GVar - By Incognito - <a href="http://[https://sampforum.blast.hk/showthread.php?tid=151076" target="_blank">[https://sampforum.blast.hk/showthread.php?tid=151076</a></li>
</ul>
<font size="4"><font color="RoyalBLue">Information</font></font><br />
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
		overflow: auto">    +---------------------------------------------------------------------------------------------------------+

    File information
    ----------------

    vlang - Create &amp; Manage server langauge(s) and server messages
    Build 2 - Beta (11/6/2020)

    Author: H2O
    Licensed under GNU GPLv3

    &copy; 2018-2020 H2O Multiplayer. All rights reserved.
    Website: h2omultiplayer.com

    Table Structure
    ---------------

    The following tables has to exist in your database for vlang to work.
    If ever asked to provide a MySQL handle, use your gamemode's.

    * Languages
        + ID ( Language ID - Primary key - Auto increment - INT(11) )
        + LanguageName ( The name of created language - Unique key - TINYTEXT(25) )
    * Messages
        + ID ( Message - Primary - INT(11) )
        + LanguageId ( The language ID that this message is created for - INT(11) )
        + Identifier ( The identifier used to search for the message, short description - VARCHAR(255) )
        + Message ( The actual long message we want to send :) - VARCHAR(1024) )

    * is table, + is column

    Dependencies
    ------------

    * a_mysql - The MySQL Plugin (Recommended version: R41-2) - Originally made by BlueG and maintained later by maddinat0r
    * y_hooks - included in the YSI library [Useful for hooking functions/callbacks/natives] - Original Author: ******
    * y_va - also included in the YSI library [We use this to format our messages using arguments] - Original Author: ******
    * GVar - Made by Incognito - We will use this instead of using array to return data directly.
    * a_samp - Made by the SA-MP team

    Remarks
    -------

    * You need to define 'FILTERSCRIPT' in case this script is to be used in a filterscript and not a gamemode.
    * This include uses threaded MySQL queries, which do not run in the server's main thread.
    * As a result of the above remark, the following precautions should be considered:
        - Language creation and message loading isn't instant and depends on how fast the query is excuted.
        - Rest of code already processes without pausing till the query is executed.
        - That means you can't return a message straight after loading/creating it.
    * Language has to be created first before returning any message coming from it.
    * All the messages for a specific language get automatically loaded once the language itself is loaded.
    * Do not use vL_CreateMessage if the messages for specific language already exist, they will get loaded automatically.

    Configuration
    -------------

    * MAX_VLANGS - The system will be told to stop creating languages after it meets this value
    * MAX_VMESSAGES - The system will stop creating messages ahead of this value
    * (define before including) VLANG_PLAYER_FUNCS - Only if you wish to use the per-player language functions
    * (define before including) VLANG_ALIAS - Only if you wish to use function aliases (look down for info)

    Errors
    ------

    #define VL_ERROR_INVALID_HANDLE         (-2) // If the MySQL connection isn't valid
    #define VL_ERROR_OUT_OF_LIMIT           (-3) // If you exceeded the configuration limits
    #define VL_ERROR_UNABLE_TO_PROCEED      (-4) // If the function failed for some reason to do what is expected
    #define VL_ERROR_DUPLICATE              (-5) // If you try to create a message that ALREADY exists

    The include's debug messages can be useful to troubleshoot issues, not to mention you can create yours!

    Aliases
    -------

    Following aliases can be used if enabled in configuration:
    #define AddLanguage                 vL_CreateLanguage
    #define AddMessage                  vL_CreateMessage
    #define GetLanguagePrefixByName     vL_GetLanguage
    #define GetMessage                  vL_ReturnMessage

    Installation
    ------------

    1. Download and prepare all the dependencies
    2. Create all the tables in the table structure above
    3. Make sure your gamemode or filterscript have a MySQL connection handle
    4. Configure the include to fit your needs
    5. Populate your database with languages/messages data.
    6. Add your language and the messages should be loaded already.
    7. Use your message identifier and language name to simply return the message!

    Functions
    ---------

    Some functions are designed for internal usage, below are list of usable functions:

    - General Functions
         - vL_GetLanguage(const LangName[25])
            Returns: Language Id if the language name exists - or otherwise returns 0

        - vL_CreateLanguage(MySQL: Handle, const LangName[25])
            Parameters:
                - Handle: Your MySQL handle
                - LangName: Language name to create or load
            Returns:
                - An error value if something happened, check errors ^
                - 1 if there was no error
            Notes:
                - Any messages found in the database will AUTOMATICALLY get loaded!

        - vL_ReturnMessage(const LangName[25], const Identifier[255], va_args&lt;&gt;)
            Parameters:
                - LangName: The language (that should be existent) to return messages for
                - Identifier: The unique identifier for this message
                - (optional) va_args: Any arguments needed for your message (specifier args)
            Returns:
                - A null string if language is invalid, or the actual message if succesful (or identifier if message didn't exist!)

    - (if defined) Per player language functions
        - SetPlayerLanguage(playerid, const LangName[25])
            Description: Set a player's language (if exists ONLY) to the specified LangName value

        - GetPlayerLanguage(playerid)
            Description: Returns the player's language name that was assigned to them beforehand (null by default)

    Example Usage

    - Add on initialization
        vL_CreateLanguage(Database, "English");
        vL_CreateLanguage(Database, "Spanish");

    - Add somewhere else
        vL_CreateMessage(Database, "English", "COMMON_IDENT", "Testing...");
    	vL_CreateMessage(Database, "Spanish", "COMMON_IDENT", "Pruebas...");

    - Display somewhere else
        print(vL_ReturnMessage("English", "COMMON_IDENT"));
    	print(vL_ReturnMessage("Spanish", "COMMON_IDENT"));

    - Expected output
        Both messages should be displayed in the two languages

    It's worth to mention that if you create the messages once, they are stored in the database.
    That means you don't need to keep creating them every time, even if it won't hurt!

    +---------------------------------------------------------------------------------------------------------+</pre>
</div><font size="4"><font color="RoyalBLue">Repository (GitHub)</font></font><br />
<br />
Before giving the link, please keep the credits and contribute if you can. Share your opinion in replies below, too.<br />
I thank anyone that I used their work to create this include (MySQL plugin maintainers, YSI maintainers, Incognito for GVar and SA-MP team).<br />
<br />
You can find it here <a href="https://github.com/h2o-variable/samp-releases/blob/master/includes/vlang.inc" target="_blank">https://github.com/h2o-variable/samp...udes/vlang.inc</a><br />
<br />
Thanks!<br />
</font>]]></description>
			<content:encoded><![CDATA[<font face="Tahoma"><font size="8"><font color="RoyalBlue">vlang</font></font><br />
<font size="2"><font color="SandyBrown">Build 2 - Beta Release - Last Update: 11/6/2020</font></font><br />
<br />
Sometimes I wanted to translate my game script in multiple languages and for all the features I have, not for client messages, game texts or dialogues only but for other features, too.<br />
<br />
I didn't really try to search for one because I had some ideas and I wanted to apply them nonetheless, so, anyway, I thought to share it with you guys and see what you think about it too.<br />
<br />
<font size="4"><font color="RoyalBLue">Additional Requirements</font></font><ul><li>y_va - <a href="https://github.com/pawn-lang/YSI-Includes" target="_blank">https://github.com/pawn-lang/YSI-Includes</a></li>
<li>y_hooks - A YSI include for hooking functions - <a href="https://github.com/pawn-lang/YSI-Includes" target="_blank">https://github.com/pawn-lang/YSI-Includes</a></li>
<li>MySQL Plugin - I tested this on R41-2 - <a href="https://github.com/pBlueG/SA-MP-MySQL/releases" target="_blank">https://github.com/pBlueG/SA-MP-MySQL/releases</a></li>
<li>GVar - By Incognito - <a href="http://[https://sampforum.blast.hk/showthread.php?tid=151076" target="_blank">[https://sampforum.blast.hk/showthread.php?tid=151076</a></li>
</ul>
<font size="4"><font color="RoyalBLue">Information</font></font><br />
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
		overflow: auto">    +---------------------------------------------------------------------------------------------------------+

    File information
    ----------------

    vlang - Create &amp; Manage server langauge(s) and server messages
    Build 2 - Beta (11/6/2020)

    Author: H2O
    Licensed under GNU GPLv3

    &copy; 2018-2020 H2O Multiplayer. All rights reserved.
    Website: h2omultiplayer.com

    Table Structure
    ---------------

    The following tables has to exist in your database for vlang to work.
    If ever asked to provide a MySQL handle, use your gamemode's.

    * Languages
        + ID ( Language ID - Primary key - Auto increment - INT(11) )
        + LanguageName ( The name of created language - Unique key - TINYTEXT(25) )
    * Messages
        + ID ( Message - Primary - INT(11) )
        + LanguageId ( The language ID that this message is created for - INT(11) )
        + Identifier ( The identifier used to search for the message, short description - VARCHAR(255) )
        + Message ( The actual long message we want to send :) - VARCHAR(1024) )

    * is table, + is column

    Dependencies
    ------------

    * a_mysql - The MySQL Plugin (Recommended version: R41-2) - Originally made by BlueG and maintained later by maddinat0r
    * y_hooks - included in the YSI library [Useful for hooking functions/callbacks/natives] - Original Author: ******
    * y_va - also included in the YSI library [We use this to format our messages using arguments] - Original Author: ******
    * GVar - Made by Incognito - We will use this instead of using array to return data directly.
    * a_samp - Made by the SA-MP team

    Remarks
    -------

    * You need to define 'FILTERSCRIPT' in case this script is to be used in a filterscript and not a gamemode.
    * This include uses threaded MySQL queries, which do not run in the server's main thread.
    * As a result of the above remark, the following precautions should be considered:
        - Language creation and message loading isn't instant and depends on how fast the query is excuted.
        - Rest of code already processes without pausing till the query is executed.
        - That means you can't return a message straight after loading/creating it.
    * Language has to be created first before returning any message coming from it.
    * All the messages for a specific language get automatically loaded once the language itself is loaded.
    * Do not use vL_CreateMessage if the messages for specific language already exist, they will get loaded automatically.

    Configuration
    -------------

    * MAX_VLANGS - The system will be told to stop creating languages after it meets this value
    * MAX_VMESSAGES - The system will stop creating messages ahead of this value
    * (define before including) VLANG_PLAYER_FUNCS - Only if you wish to use the per-player language functions
    * (define before including) VLANG_ALIAS - Only if you wish to use function aliases (look down for info)

    Errors
    ------

    #define VL_ERROR_INVALID_HANDLE         (-2) // If the MySQL connection isn't valid
    #define VL_ERROR_OUT_OF_LIMIT           (-3) // If you exceeded the configuration limits
    #define VL_ERROR_UNABLE_TO_PROCEED      (-4) // If the function failed for some reason to do what is expected
    #define VL_ERROR_DUPLICATE              (-5) // If you try to create a message that ALREADY exists

    The include's debug messages can be useful to troubleshoot issues, not to mention you can create yours!

    Aliases
    -------

    Following aliases can be used if enabled in configuration:
    #define AddLanguage                 vL_CreateLanguage
    #define AddMessage                  vL_CreateMessage
    #define GetLanguagePrefixByName     vL_GetLanguage
    #define GetMessage                  vL_ReturnMessage

    Installation
    ------------

    1. Download and prepare all the dependencies
    2. Create all the tables in the table structure above
    3. Make sure your gamemode or filterscript have a MySQL connection handle
    4. Configure the include to fit your needs
    5. Populate your database with languages/messages data.
    6. Add your language and the messages should be loaded already.
    7. Use your message identifier and language name to simply return the message!

    Functions
    ---------

    Some functions are designed for internal usage, below are list of usable functions:

    - General Functions
         - vL_GetLanguage(const LangName[25])
            Returns: Language Id if the language name exists - or otherwise returns 0

        - vL_CreateLanguage(MySQL: Handle, const LangName[25])
            Parameters:
                - Handle: Your MySQL handle
                - LangName: Language name to create or load
            Returns:
                - An error value if something happened, check errors ^
                - 1 if there was no error
            Notes:
                - Any messages found in the database will AUTOMATICALLY get loaded!

        - vL_ReturnMessage(const LangName[25], const Identifier[255], va_args&lt;&gt;)
            Parameters:
                - LangName: The language (that should be existent) to return messages for
                - Identifier: The unique identifier for this message
                - (optional) va_args: Any arguments needed for your message (specifier args)
            Returns:
                - A null string if language is invalid, or the actual message if succesful (or identifier if message didn't exist!)

    - (if defined) Per player language functions
        - SetPlayerLanguage(playerid, const LangName[25])
            Description: Set a player's language (if exists ONLY) to the specified LangName value

        - GetPlayerLanguage(playerid)
            Description: Returns the player's language name that was assigned to them beforehand (null by default)

    Example Usage

    - Add on initialization
        vL_CreateLanguage(Database, "English");
        vL_CreateLanguage(Database, "Spanish");

    - Add somewhere else
        vL_CreateMessage(Database, "English", "COMMON_IDENT", "Testing...");
    	vL_CreateMessage(Database, "Spanish", "COMMON_IDENT", "Pruebas...");

    - Display somewhere else
        print(vL_ReturnMessage("English", "COMMON_IDENT"));
    	print(vL_ReturnMessage("Spanish", "COMMON_IDENT"));

    - Expected output
        Both messages should be displayed in the two languages

    It's worth to mention that if you create the messages once, they are stored in the database.
    That means you don't need to keep creating them every time, even if it won't hurt!

    +---------------------------------------------------------------------------------------------------------+</pre>
</div><font size="4"><font color="RoyalBLue">Repository (GitHub)</font></font><br />
<br />
Before giving the link, please keep the credits and contribute if you can. Share your opinion in replies below, too.<br />
I thank anyone that I used their work to create this include (MySQL plugin maintainers, YSI maintainers, Incognito for GVar and SA-MP team).<br />
<br />
You can find it here <a href="https://github.com/h2o-variable/samp-releases/blob/master/includes/vlang.inc" target="_blank">https://github.com/h2o-variable/samp...udes/vlang.inc</a><br />
<br />
Thanks!<br />
</font>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] Sasinosoft Map Loader]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=676078</link>
			<pubDate>Fri, 29 May 2020 08:41:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=111937">Sasino97</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=676078</guid>
			<description><![CDATA[<font face="Impact"><div align="center"><font size="7"><font color="Red">S</font>asinosoft <font color="Red">M</font>ap <font color="red">L</font>oader</font></div></font><br />
<br />
<font face="Impact"><font size="6"><font color="Red">D</font>ownload</font></font><br />
<a href="https://github.com/SaSiNO97/MapLoader/releases" target="_blank">Download</a><br />
<a href="https://github.com/SaSiNO97/MapLoader" target="_blank">Source</a><br />
<br />
<font face="Impact"><font size="6"><font color="Red">D</font>escription</font></font><br />
A file format, loader and converter to import maps (or scenery) into a San Andreas Multiplayer server, compatible with <b><font color="Blue">Pawn</font></b> and <b><font color="DarkGreen">C#</font></b> (via SampSharp), and supporting Incognito's Streamer. It supports creating objects with custom materials and text, creating vehicles and attaching objects to them and removing buildings. It was designed to be as compact as possible, but readable by humans at the same time.<br />
<br />
<font face="Impact"><font size="6"><font color="Red">S</font>ML Format</font></font><br />
SML (Sasinosoft Map Language) format is a format used by the loader libraries and the converter. It is a CSV format that uses spaces as field separators.<br />
<br />
<font face="Impact"><font size="5"><font color="Red">E</font>xample</font></font><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto"># Constants
K DefaultInterior -1
K DefaultVW -1
K DefaultStreamDist 200.0
K DefaultDrawDist 200.0
K RemDist 10000.0

# Some building removals
R 955 0.0 0.0 0.0 RemDist
R 956 0.0 0.0 0.0 RemDist
R 1775 0.0 0.0 0.0 RemDist
R 1776 0.0 0.0 0.0 RemDist

# Some objects
C 1649 1110.95825 -811.06183 118.07580 0.00000 0.00000 323.50003 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist
C 1649 1107.45630 -808.49719 118.07580 0.00000 0.00000 323.50003 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist

# This object uses an array of integers as virtual worlds (only supported by the C# MapLoader)
C 1649 1105.95325 -807.36542 118.07580 0.00000 0.00000 323.50003 [500-520] DefaultInterior DefaultStreamDist DefaultDrawDist

# Some objects with custom materials
C 19379 1102.65100 -832.63092 116.35390 0.00000 90.00000 188.50000 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist
M 0 13724 docg01_lahills ws_stationfloor 0
C 19379 1107.77612 -829.53491 116.39390 0.00000 90.00000 233.50000 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist
M 0 13724 docg01_lahills ws_stationfloor 0
C 19379 1092.23718 -818.83722 119.63390 0.00000 90.00000 8.50000 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist
M 0 10944 traintunnel2_sfse ws_tunnelwall2 0
C 19379 1093.64404 -828.31921 119.63390 0.00000 90.00000 8.50000 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist
M 0 10944 traintunnel2_sfse ws_tunnelwall2 0

# An AT-400 jet with navigation lights and some text attached to it
V 577 0.0000 0.0000 0.0000 0.0000 1 1
A 19296 -30.19373 -5.69669 4.58001 0.000000 0.500000 180.000000 -1 -1 DefaultStreamDist DefaultDrawDist
A 19297 30.19373 -5.69669 4.58001 0.000000 0.500000 180.000000 -1 -1 DefaultStreamDist DefaultDrawDist
A 19290 0.00000 3.50000 7.00000 0.000000 0.500000 180.000000 -1 -1 DefaultStreamDist DefaultDrawDist
A 19482 2.3499 5.8199 6.0900 0.0000 -37.0000 0.0000 -1 -1 DefaultStreamDist DefaultDrawDist
T 0 {101010}Am 90 Arial 144 1 -1 0 1
A 19482 2.3499 9.6200 6.0900 0.0000 -37.0000 0.0000 -1 -1 DefaultStreamDist DefaultDrawDist
T 0 {101010}eri 90 Arial 144 1 -1 0 1
A 19482 2.3499 13.6500 6.0900 0.0000 -37.0000 0.0000 -1 -1 DefaultStreamDist DefaultDrawDist
T 0 {101010}can 90 Arial 144 1 -1 0 1</pre>
</div><font face="Impact"><font size="5"><font color="Red">D</font>irectives</font></font><br />
Directives are the first character found on each line. Empty lines are automatically discarded. All directives must be upper-case.<br />
<br />
<font size="4"><font color="Red">C</font>omments (#)</font><br />
Anything after the # symbol is ignored<br />
<br />
<font size="4"><font color="Red">C</font>onstants (K symbol value)</font><br />
The parser will replace the symbol with the value (works like #define in Pawn)<br />
<br />
<font size="4"><font color="Red">O</font>bjects (C or O model x y z rx ry rz [virtualWorld(s)] [interior(s)] [streamDistance] [drawDistance] [priority])</font><br />
Creates an object. If streamer.inc was included before it, it creates a dynamic object. In the C# version of the loader, it only works with Incognito's streamer plugin, and the streamer Nuget package is required.<br />
<br />
model The model id<br />
<br />
x y z The coordinates<br />
<br />
rx ry rz The rotation<br />
<br />
virtualWorld(s) The virtual world of the object. The Pawn loader only supports one virtual world, while the C# loader supports an array of virtual worlds using the array format (more on that later).<br />
<br />
interior(s) The interior of the object. The Pawn loader only supports one interior, while the C# loader supports an array of interiors using the array format.<br />
<br />
streamDistance The stream distance (no effect in the Pawn loader if streamer.inc is not included before)<br />
<br />
drawDistance The draw distance<br />
<br />
priority The stream priority (only supported by the C# loader)<br />
<br />
<font size="4"><font color="Red">V</font>ehicles (V model x y z r col1 col2)</font><br />
Creates a vehicle<br />
<br />
model The vehicle model type id<br />
<br />
x y z The coordinates<br />
<br />
r The rotation angle<br />
<br />
col1 col2 The colors<br />
<br />
<font size="4"><font color="Red">A</font>ttached Objects (A model offsetX offsetY offsetZ offsetRX offsetRY offsetRZ virtualWorld interior streamDistance drawDistance)</font><br />
Creates an object and attaches it to the last created vehicle (using the V directive). Will throw an error if no vehicle was created before.<br />
<br />
model The model id<br />
<br />
offsetX offsetY offsetZ The offsets<br />
<br />
offsetRX offsetRY offset RZ The offset rotation<br />
<br />
virtualWorld The virtual world of the object.<br />
<br />
interior The interior of the object.<br />
<br />
streamDistance The stream distance (no effect in the Pawn loader if streamer.inc is not included before)<br />
<br />
drawDistance The draw distance<br />
<br />
<font size="4"><font color="Red">M</font>aterials (M index model textureDictionary textureName color)</font><br />
Replaces the material of the last created object or attached object (using the O or A directives) with a specified material. Will throw an error if no object was created before.<br />
<br />
index The material index on the object to which change material (0-15)<br />
<br />
model The model id on which the replacement texture is located<br />
<br />
textureDictionary The name of the TXD file containing the replacement texture<br />
<br />
textureName The name of the replacement texture<br />
<br />
color The material color<br />
<br />
<font size="4"><font color="Red">M</font>aterial Texts (T index text size fontFace fontSize bold fontColor backColor textAlignment)</font><br />
Creates a text on the texture of the last created object or attached object (using the O or A directives). Will throw an error if no object was created before. Remember to escape spaces with a backslash if needed; for example, use Arial\ Black instead of Arial Black!<br />
<br />
index The material index on the object on which you want to add text (0-15)<br />
<br />
text The text to add<br />
<br />
size The size of the material (please check <a href="https://sampwiki.blast.hk/wiki/Material_Size" target="_blank">https://sampwiki.blast.hk/wiki/Material_Size</a>)<br />
<br />
fontFace The font<br />
<br />
fontSize The font size<br />
<br />
bold Whether it's bold or not<br />
<br />
fontColor The color of the text<br />
<br />
backColor The Color of the background<br />
<br />
textAlignment The alignment of text<br />
<br />
<font size="4"><font color="Red">A</font>rray format (C# only)</font><br />
In certain fields, you can use the array format to define multiple values. This feature is only available in the C# loader. Trying to load an SML file with an array specifier using the current version of the Pawn loader will throw an error.<br />
<br />
Example of the array format:<br />
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
		overflow: auto">[1,2,3,4,5,6,50,51,52]</pre>
</div>It must not contain any space! Use a comma to separate values. The array format supports ranges; the previous example could be rewritten as follow:<br />
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
		overflow: auto">[1-6,50-52]</pre>
</div><font face="Impact"><font size="6"><font color="Red">L</font>oader (Pawn)</font></font><br />
The Pawn version of the Map Loader consist of a single file, MapLoader.inc, which depends on strlib and sscanf2. In the file you can tweak the limits of each category of item, which affects the total memory used, and the error messages.<br />
<br />
There are 4 functions available:<br />
<br />
MapLoader.Load(const fileNameWithoutExtension[])<br />
Loads a .SML file into memory, without creating or removing anything in the game. The fileNameWithoutExtension parameter must not contain the extension. After this function you could then call Apply() to apply the loaded items, or you could access the loaded data directly to add custom behavior. The function returns the total number of errors encountered.<br />
<br />
MapLoader.Apply()<br />
Applies all the loaded items. Has no effect if the cache is empty (MapLoader.Load wasn't called).<br />
<br />
MapLoader.RemoveForPlayer(playerid)<br />
Call this function under OnPlayerSpawn to apply building removals (I don't like hooks).<br />
<br />
MapLoader.Clear()<br />
Completely clears the cache. You normally should never need to use this function, because it gets automatically called by MapLoader.Load(), unless you comment the #define MAPLDR_AUTO_CLEAR line; if you did, you have the option of manually choosing when to clear the cache.<br />
<br />
<font face="Impact"><font size="6"><font color="Red">L</font>oader (C#)</font></font><br />
The C# version of the Map Loader consist of a .NET Core library project, which depends on SampSharp-GameMode, SampSharp-Core and SampSharp-Streamer.<br />
<br />
There is one constructor and 4 public methods available:<br />
<br />
MapLoader(bool autoClear)<br />
Creates an instance of the MapLoader class. The autoClear parameter specifies whether after every call to Load(), the cache should be cleared. We recommend to pass true in this parameter.<br />
<br />
int Load(string fileName, out List errors)<br />
Loads a file into memory, without creating or removing anything in the game. The fileName must contain the file extension. The functions outputs a list of exceptions, containing all the errors that may have occurred, and returns the total number of lines processed.<br />
<br />
void Apply()<br />
Applies all the loaded items. Has no effect if the cache is empty (Load wasn't called).<br />
<br />
void ApplyRemovals(BasePlayer p)<br />
Equivalent of MapLoader.RemoveForPlayer(playerid) of the Pawn version, it applies all building removals, and should be called in the Spawn event of players, or under the OnSpawned method in your Player class.<br />
<br />
void Clear()<br />
Completely clears the cache. You should never need to use this method, however if you constructed the MapLoader object with the autoClear parameter set to false, then you should clear it manually.<br />
<br />
<font face="Impact"><font size="6"><font color="Red">C</font>onverter</font></font><br />
The Map Converter is a utility that given a file or a list of files, converts them from Pawn to SML and vice-versa. The converter is lossy, in fact it does not support attached objects, materials and material texts. It will only convert objects, vehicles and building removals.<br />
<br />
To use the converter, simply drag and drop a file or multiple files on the Sasinosoft.MapConverter executable file. It will automatically convert files with the .pwn extension to .sml, and files with the .sml extension to .pwn.]]></description>
			<content:encoded><![CDATA[<font face="Impact"><div align="center"><font size="7"><font color="Red">S</font>asinosoft <font color="Red">M</font>ap <font color="red">L</font>oader</font></div></font><br />
<br />
<font face="Impact"><font size="6"><font color="Red">D</font>ownload</font></font><br />
<a href="https://github.com/SaSiNO97/MapLoader/releases" target="_blank">Download</a><br />
<a href="https://github.com/SaSiNO97/MapLoader" target="_blank">Source</a><br />
<br />
<font face="Impact"><font size="6"><font color="Red">D</font>escription</font></font><br />
A file format, loader and converter to import maps (or scenery) into a San Andreas Multiplayer server, compatible with <b><font color="Blue">Pawn</font></b> and <b><font color="DarkGreen">C#</font></b> (via SampSharp), and supporting Incognito's Streamer. It supports creating objects with custom materials and text, creating vehicles and attaching objects to them and removing buildings. It was designed to be as compact as possible, but readable by humans at the same time.<br />
<br />
<font face="Impact"><font size="6"><font color="Red">S</font>ML Format</font></font><br />
SML (Sasinosoft Map Language) format is a format used by the loader libraries and the converter. It is a CSV format that uses spaces as field separators.<br />
<br />
<font face="Impact"><font size="5"><font color="Red">E</font>xample</font></font><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 498px;
		text-align: left;
		overflow: auto"># Constants
K DefaultInterior -1
K DefaultVW -1
K DefaultStreamDist 200.0
K DefaultDrawDist 200.0
K RemDist 10000.0

# Some building removals
R 955 0.0 0.0 0.0 RemDist
R 956 0.0 0.0 0.0 RemDist
R 1775 0.0 0.0 0.0 RemDist
R 1776 0.0 0.0 0.0 RemDist

# Some objects
C 1649 1110.95825 -811.06183 118.07580 0.00000 0.00000 323.50003 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist
C 1649 1107.45630 -808.49719 118.07580 0.00000 0.00000 323.50003 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist

# This object uses an array of integers as virtual worlds (only supported by the C# MapLoader)
C 1649 1105.95325 -807.36542 118.07580 0.00000 0.00000 323.50003 [500-520] DefaultInterior DefaultStreamDist DefaultDrawDist

# Some objects with custom materials
C 19379 1102.65100 -832.63092 116.35390 0.00000 90.00000 188.50000 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist
M 0 13724 docg01_lahills ws_stationfloor 0
C 19379 1107.77612 -829.53491 116.39390 0.00000 90.00000 233.50000 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist
M 0 13724 docg01_lahills ws_stationfloor 0
C 19379 1092.23718 -818.83722 119.63390 0.00000 90.00000 8.50000 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist
M 0 10944 traintunnel2_sfse ws_tunnelwall2 0
C 19379 1093.64404 -828.31921 119.63390 0.00000 90.00000 8.50000 DefaultVW DefaultInterior DefaultStreamDist DefaultDrawDist
M 0 10944 traintunnel2_sfse ws_tunnelwall2 0

# An AT-400 jet with navigation lights and some text attached to it
V 577 0.0000 0.0000 0.0000 0.0000 1 1
A 19296 -30.19373 -5.69669 4.58001 0.000000 0.500000 180.000000 -1 -1 DefaultStreamDist DefaultDrawDist
A 19297 30.19373 -5.69669 4.58001 0.000000 0.500000 180.000000 -1 -1 DefaultStreamDist DefaultDrawDist
A 19290 0.00000 3.50000 7.00000 0.000000 0.500000 180.000000 -1 -1 DefaultStreamDist DefaultDrawDist
A 19482 2.3499 5.8199 6.0900 0.0000 -37.0000 0.0000 -1 -1 DefaultStreamDist DefaultDrawDist
T 0 {101010}Am 90 Arial 144 1 -1 0 1
A 19482 2.3499 9.6200 6.0900 0.0000 -37.0000 0.0000 -1 -1 DefaultStreamDist DefaultDrawDist
T 0 {101010}eri 90 Arial 144 1 -1 0 1
A 19482 2.3499 13.6500 6.0900 0.0000 -37.0000 0.0000 -1 -1 DefaultStreamDist DefaultDrawDist
T 0 {101010}can 90 Arial 144 1 -1 0 1</pre>
</div><font face="Impact"><font size="5"><font color="Red">D</font>irectives</font></font><br />
Directives are the first character found on each line. Empty lines are automatically discarded. All directives must be upper-case.<br />
<br />
<font size="4"><font color="Red">C</font>omments (#)</font><br />
Anything after the # symbol is ignored<br />
<br />
<font size="4"><font color="Red">C</font>onstants (K symbol value)</font><br />
The parser will replace the symbol with the value (works like #define in Pawn)<br />
<br />
<font size="4"><font color="Red">O</font>bjects (C or O model x y z rx ry rz [virtualWorld(s)] [interior(s)] [streamDistance] [drawDistance] [priority])</font><br />
Creates an object. If streamer.inc was included before it, it creates a dynamic object. In the C# version of the loader, it only works with Incognito's streamer plugin, and the streamer Nuget package is required.<br />
<br />
model The model id<br />
<br />
x y z The coordinates<br />
<br />
rx ry rz The rotation<br />
<br />
virtualWorld(s) The virtual world of the object. The Pawn loader only supports one virtual world, while the C# loader supports an array of virtual worlds using the array format (more on that later).<br />
<br />
interior(s) The interior of the object. The Pawn loader only supports one interior, while the C# loader supports an array of interiors using the array format.<br />
<br />
streamDistance The stream distance (no effect in the Pawn loader if streamer.inc is not included before)<br />
<br />
drawDistance The draw distance<br />
<br />
priority The stream priority (only supported by the C# loader)<br />
<br />
<font size="4"><font color="Red">V</font>ehicles (V model x y z r col1 col2)</font><br />
Creates a vehicle<br />
<br />
model The vehicle model type id<br />
<br />
x y z The coordinates<br />
<br />
r The rotation angle<br />
<br />
col1 col2 The colors<br />
<br />
<font size="4"><font color="Red">A</font>ttached Objects (A model offsetX offsetY offsetZ offsetRX offsetRY offsetRZ virtualWorld interior streamDistance drawDistance)</font><br />
Creates an object and attaches it to the last created vehicle (using the V directive). Will throw an error if no vehicle was created before.<br />
<br />
model The model id<br />
<br />
offsetX offsetY offsetZ The offsets<br />
<br />
offsetRX offsetRY offset RZ The offset rotation<br />
<br />
virtualWorld The virtual world of the object.<br />
<br />
interior The interior of the object.<br />
<br />
streamDistance The stream distance (no effect in the Pawn loader if streamer.inc is not included before)<br />
<br />
drawDistance The draw distance<br />
<br />
<font size="4"><font color="Red">M</font>aterials (M index model textureDictionary textureName color)</font><br />
Replaces the material of the last created object or attached object (using the O or A directives) with a specified material. Will throw an error if no object was created before.<br />
<br />
index The material index on the object to which change material (0-15)<br />
<br />
model The model id on which the replacement texture is located<br />
<br />
textureDictionary The name of the TXD file containing the replacement texture<br />
<br />
textureName The name of the replacement texture<br />
<br />
color The material color<br />
<br />
<font size="4"><font color="Red">M</font>aterial Texts (T index text size fontFace fontSize bold fontColor backColor textAlignment)</font><br />
Creates a text on the texture of the last created object or attached object (using the O or A directives). Will throw an error if no object was created before. Remember to escape spaces with a backslash if needed; for example, use Arial\ Black instead of Arial Black!<br />
<br />
index The material index on the object on which you want to add text (0-15)<br />
<br />
text The text to add<br />
<br />
size The size of the material (please check <a href="https://sampwiki.blast.hk/wiki/Material_Size" target="_blank">https://sampwiki.blast.hk/wiki/Material_Size</a>)<br />
<br />
fontFace The font<br />
<br />
fontSize The font size<br />
<br />
bold Whether it's bold or not<br />
<br />
fontColor The color of the text<br />
<br />
backColor The Color of the background<br />
<br />
textAlignment The alignment of text<br />
<br />
<font size="4"><font color="Red">A</font>rray format (C# only)</font><br />
In certain fields, you can use the array format to define multiple values. This feature is only available in the C# loader. Trying to load an SML file with an array specifier using the current version of the Pawn loader will throw an error.<br />
<br />
Example of the array format:<br />
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
		overflow: auto">[1,2,3,4,5,6,50,51,52]</pre>
</div>It must not contain any space! Use a comma to separate values. The array format supports ranges; the previous example could be rewritten as follow:<br />
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
		overflow: auto">[1-6,50-52]</pre>
</div><font face="Impact"><font size="6"><font color="Red">L</font>oader (Pawn)</font></font><br />
The Pawn version of the Map Loader consist of a single file, MapLoader.inc, which depends on strlib and sscanf2. In the file you can tweak the limits of each category of item, which affects the total memory used, and the error messages.<br />
<br />
There are 4 functions available:<br />
<br />
MapLoader.Load(const fileNameWithoutExtension[])<br />
Loads a .SML file into memory, without creating or removing anything in the game. The fileNameWithoutExtension parameter must not contain the extension. After this function you could then call Apply() to apply the loaded items, or you could access the loaded data directly to add custom behavior. The function returns the total number of errors encountered.<br />
<br />
MapLoader.Apply()<br />
Applies all the loaded items. Has no effect if the cache is empty (MapLoader.Load wasn't called).<br />
<br />
MapLoader.RemoveForPlayer(playerid)<br />
Call this function under OnPlayerSpawn to apply building removals (I don't like hooks).<br />
<br />
MapLoader.Clear()<br />
Completely clears the cache. You normally should never need to use this function, because it gets automatically called by MapLoader.Load(), unless you comment the #define MAPLDR_AUTO_CLEAR line; if you did, you have the option of manually choosing when to clear the cache.<br />
<br />
<font face="Impact"><font size="6"><font color="Red">L</font>oader (C#)</font></font><br />
The C# version of the Map Loader consist of a .NET Core library project, which depends on SampSharp-GameMode, SampSharp-Core and SampSharp-Streamer.<br />
<br />
There is one constructor and 4 public methods available:<br />
<br />
MapLoader(bool autoClear)<br />
Creates an instance of the MapLoader class. The autoClear parameter specifies whether after every call to Load(), the cache should be cleared. We recommend to pass true in this parameter.<br />
<br />
int Load(string fileName, out List errors)<br />
Loads a file into memory, without creating or removing anything in the game. The fileName must contain the file extension. The functions outputs a list of exceptions, containing all the errors that may have occurred, and returns the total number of lines processed.<br />
<br />
void Apply()<br />
Applies all the loaded items. Has no effect if the cache is empty (Load wasn't called).<br />
<br />
void ApplyRemovals(BasePlayer p)<br />
Equivalent of MapLoader.RemoveForPlayer(playerid) of the Pawn version, it applies all building removals, and should be called in the Spawn event of players, or under the OnSpawned method in your Player class.<br />
<br />
void Clear()<br />
Completely clears the cache. You should never need to use this method, however if you constructed the MapLoader object with the autoClear parameter set to false, then you should clear it manually.<br />
<br />
<font face="Impact"><font size="6"><font color="Red">C</font>onverter</font></font><br />
The Map Converter is a utility that given a file or a list of files, converts them from Pawn to SML and vice-versa. The converter is lossy, in fact it does not support attached objects, materials and material texts. It will only convert objects, vehicles and building removals.<br />
<br />
To use the converter, simply drag and drop a file or multiple files on the Sasinosoft.MapConverter executable file. It will automatically convert files with the .pwn extension to .sml, and files with the .sml extension to .pwn.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] DCC V2 - Discord Command Control]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=675874</link>
			<pubDate>Sat, 23 May 2020 15:37:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=314074">GeorgeLimit</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=675874</guid>
			<description><![CDATA[<font size="7"><b><div align="center">DCC V2 - Discord Command Control</div></b></font><br />
<div align="center">Based from <a href="https://sampforum.blast.hk/showthread.php?tid=646843" target="_blank">Innocent</a></div>
I remodeled all of this with the new function of discord connector 0.3.2 and it worked.<br />
<br />
<font size="5"><b>How To Use?</b></font><br />
Still Same With DCC <br />
<font size="6">Callback</font><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 50px;
		text-align: left;
		overflow: auto">OnDCCommandPerformed(args[], success)
SendDC(channel[], const fmat[], va_args&lt;&gt;)</pre>
</div><b><font size="5">Settings</font></b><br />
Add this before include dcc2<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">#define DISCORD_CHANNEL_ID "You Admin Channel Place"
#define DISCORD_PREFIX " Your Prefix "
#include &lt;dcc2&gt;</pre>
</div>for Adding Command and SendDC Callback you can read at <a href="https://sampforum.blast.hk/showthread.php?tid=646843" target="_blank">HERE</a>.<br />
<b><font size="5">Requirements</font></b><br />
Discord Connector Plugin - <a href="https://github.com/maddinat0r/samp-discord-connector" target="_blank">This</a><br />
YSI/y_ya <a href="https://sampforum.blast.hk/showthread.php?tid=570884" target="_blank">This</a><br />
sscanf2 plugin <a href="https://github.com/maddinat0r/sscanf/releases" target="_blank">This</a><br />
<br />
<div align="center"><b><font size="6">DOWNLOAD</font></b></div>Discord Command Manager 2 <b><div align="center"><a href="https://www.solidfiles.com/v/Q4K7BKeLKp6Ya" target="_blank">Here</a><br />
</div></b><br />
<b>I did not delete the property rights because I knew this was not made by me.</b><br />
Thanks To <a href="https://forum.sa-mp.com/member.php?u=201970" target="_blank">Inn0cent</a>]]></description>
			<content:encoded><![CDATA[<font size="7"><b><div align="center">DCC V2 - Discord Command Control</div></b></font><br />
<div align="center">Based from <a href="https://sampforum.blast.hk/showthread.php?tid=646843" target="_blank">Innocent</a></div>
I remodeled all of this with the new function of discord connector 0.3.2 and it worked.<br />
<br />
<font size="5"><b>How To Use?</b></font><br />
Still Same With DCC <br />
<font size="6">Callback</font><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 50px;
		text-align: left;
		overflow: auto">OnDCCommandPerformed(args[], success)
SendDC(channel[], const fmat[], va_args&lt;&gt;)</pre>
</div><b><font size="5">Settings</font></b><br />
Add this before include dcc2<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 66px;
		text-align: left;
		overflow: auto">#define DISCORD_CHANNEL_ID "You Admin Channel Place"
#define DISCORD_PREFIX " Your Prefix "
#include &lt;dcc2&gt;</pre>
</div>for Adding Command and SendDC Callback you can read at <a href="https://sampforum.blast.hk/showthread.php?tid=646843" target="_blank">HERE</a>.<br />
<b><font size="5">Requirements</font></b><br />
Discord Connector Plugin - <a href="https://github.com/maddinat0r/samp-discord-connector" target="_blank">This</a><br />
YSI/y_ya <a href="https://sampforum.blast.hk/showthread.php?tid=570884" target="_blank">This</a><br />
sscanf2 plugin <a href="https://github.com/maddinat0r/sscanf/releases" target="_blank">This</a><br />
<br />
<div align="center"><b><font size="6">DOWNLOAD</font></b></div>Discord Command Manager 2 <b><div align="center"><a href="https://www.solidfiles.com/v/Q4K7BKeLKp6Ya" target="_blank">Here</a><br />
</div></b><br />
<b>I did not delete the property rights because I knew this was not made by me.</b><br />
Thanks To <a href="https://forum.sa-mp.com/member.php?u=201970" target="_blank">Inn0cent</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] Optidraw]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=672784</link>
			<pubDate>Sat, 29 Feb 2020 14:57:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=344184">algorhitmically</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=672784</guid>
			<description><![CDATA[<div align="center"><font face="Arial Black"><font size="5"><font color="DarkOrchid">General</font></font></font><br />
<br />
<font color="darkorchid">Addon for Incognito's streamer.<br />
This include will help you with map optimization.<br />
Download: <a href="https://github.com/algorhitmically/optidraw" target="_blank">https://github.com/algorhitmically/optidraw</a><br />
</font><br />
<br />
<font face="Arial Black"><font color="darkorchid"><font size="5">Required dependencies</font></font></font><br />
<br />
<font color="darkorchid">[<a href="https://github.com/samp-incognito/samp-streamer-plugin" target="_blank">Streamer</a>]<br />
[<a href="https://github.com/Crayder/Model-Sizes-Plus" target="_blank">Model-Sizes-Plus</a>]<br />
OR<br />
[<a href="https://github.com/algorhitmically/modelsizes-sql" target="_blank">Model-Sizes-SQL</a>]</font><br />
<br />
<font face="Arial Black"><font color="darkorchid"><font size="5">Methods</font></font></font><br />
<br />
<font color="darkorchid">These are optimization methods that you need to define before including optidraw:<br />
<br />
METHOD_BOX<br />
METHOD_SPHERE<br />
</font><br />
<font face="Arial Black"><font color="DarkOrchid"><font size="5">Use</font></font></font><br />
<br />
<font color="DarkOrchid">#define OD_METHOD your_method</font><br />
<br />
<font face="Arial Black"><font size="5"><font color="darkorchid">Tips</font></font></font><br />
<br />
<font color="darkorchid">Choose optimization method. Example: #define OD_METHOD METHOD_BOX<br />
Include optidraw below streamer!<br />
You can disable static objects with: #define OD_DISABLE_STATIC_OBJECTS<br />
You can disable startup messages with: #define OD_DISABLE_STARTUP_MESSAGE</font></div>]]></description>
			<content:encoded><![CDATA[<div align="center"><font face="Arial Black"><font size="5"><font color="DarkOrchid">General</font></font></font><br />
<br />
<font color="darkorchid">Addon for Incognito's streamer.<br />
This include will help you with map optimization.<br />
Download: <a href="https://github.com/algorhitmically/optidraw" target="_blank">https://github.com/algorhitmically/optidraw</a><br />
</font><br />
<br />
<font face="Arial Black"><font color="darkorchid"><font size="5">Required dependencies</font></font></font><br />
<br />
<font color="darkorchid">[<a href="https://github.com/samp-incognito/samp-streamer-plugin" target="_blank">Streamer</a>]<br />
[<a href="https://github.com/Crayder/Model-Sizes-Plus" target="_blank">Model-Sizes-Plus</a>]<br />
OR<br />
[<a href="https://github.com/algorhitmically/modelsizes-sql" target="_blank">Model-Sizes-SQL</a>]</font><br />
<br />
<font face="Arial Black"><font color="darkorchid"><font size="5">Methods</font></font></font><br />
<br />
<font color="darkorchid">These are optimization methods that you need to define before including optidraw:<br />
<br />
METHOD_BOX<br />
METHOD_SPHERE<br />
</font><br />
<font face="Arial Black"><font color="DarkOrchid"><font size="5">Use</font></font></font><br />
<br />
<font color="DarkOrchid">#define OD_METHOD your_method</font><br />
<br />
<font face="Arial Black"><font size="5"><font color="darkorchid">Tips</font></font></font><br />
<br />
<font color="darkorchid">Choose optimization method. Example: #define OD_METHOD METHOD_BOX<br />
Include optidraw below streamer!<br />
You can disable static objects with: #define OD_DISABLE_STATIC_OBJECTS<br />
You can disable startup messages with: #define OD_DISABLE_STARTUP_MESSAGE</font></div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] 3D Speedometer v0.2]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=672391</link>
			<pubDate>Mon, 10 Feb 2020 18:23:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=257195">Markski</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=672391</guid>
			<description><![CDATA[An easy-to-implement 3D Speedometer.<br />
<br />
- Include with y_hooks and it will work inmediatly.<br />
- If you don't have y_hooks then making it work is as simple as pasting a few lines of code in 4 callbacks.<br />
- Works automatically by taking it's own measurements, or you can give it your own numbers if preferred, your choise.<br />
- Optional parameter for providing fuel readings.<br />
- Allows to choose between KMH or MPH at compile time with a define.<br />
- Allows to choose english or spanish with a define.<br />
<br />
Screenshots:<br />
<br />
<img alt="" border="0" src="https://i.imgur.com/IekbUKn.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/28Hrrv5.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/LfNwr0O.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/EXxxQlj.png"/><br />
<br />
- TODO:<br />
Allow scripters to provide more personalization such as colour and sizes to their players.<br />
<br />
- Known issues<br />
Doesn't work correctly with Planes and other vehicles which are too wide.<br />
<br />
- How to contribute<br />
Just open a Pull Request m8<br />
<br />
Download, install and usage instructions available <a href="https://github.com/markski1/MRKS-3D-Speedometer/" target="_blank">at the repository.</a>]]></description>
			<content:encoded><![CDATA[An easy-to-implement 3D Speedometer.<br />
<br />
- Include with y_hooks and it will work inmediatly.<br />
- If you don't have y_hooks then making it work is as simple as pasting a few lines of code in 4 callbacks.<br />
- Works automatically by taking it's own measurements, or you can give it your own numbers if preferred, your choise.<br />
- Optional parameter for providing fuel readings.<br />
- Allows to choose between KMH or MPH at compile time with a define.<br />
- Allows to choose english or spanish with a define.<br />
<br />
Screenshots:<br />
<br />
<img alt="" border="0" src="https://i.imgur.com/IekbUKn.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/28Hrrv5.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/LfNwr0O.png"/><br />
<br />
<img alt="" border="0" src="https://i.imgur.com/EXxxQlj.png"/><br />
<br />
- TODO:<br />
Allow scripters to provide more personalization such as colour and sizes to their players.<br />
<br />
- Known issues<br />
Doesn't work correctly with Planes and other vehicles which are too wide.<br />
<br />
- How to contribute<br />
Just open a Pull Request m8<br />
<br />
Download, install and usage instructions available <a href="https://github.com/markski1/MRKS-3D-Speedometer/" target="_blank">at the repository.</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] perplayer.inc - collection of player-based functions (ForPlayer analogues)]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=669646</link>
			<pubDate>Sat, 28 Sep 2019 10:35:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=197022">OstGot</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=669646</guid>
			<description><![CDATA[<div align="center"><b><font face="Trebuchet MS"><font size="4">Per-player functions</font><br />
(powered by Pawn.RakNet)</font></b></div>
<b><font face="Trebuchet MS"><font size="3">Description:</font></font></b><br />
This library implements analogues of ordinary native ones like SetPlayerSkin or SetVehicleNumber, but with the possibility of applying them to one specific player, as you can do this, for example, using the existing CreateExplosion and CreateExplosionForPlayer functions. You could already see some of the functions in YSF and SKY plugins earlier (the functionality of which prompted me to create this include), but there are few of them and those plugins have a broader purpose of using that not everyone might need.<br />
<br />
<b><font face="Trebuchet MS"><font size="3">List of functions &amp; documentation:</font></font></b><br />
<ul><li>SetPlayerGravity(playerid, Float:gravity)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">Sets the gravity for a specific player.

Parameters:
* playerid - The ID of the player to set the gravity of.
* gravity - The value that the gravity should be set to (between -50.0 and 50.0).

Returns 1 on success or 0 if the specified player isn't connected or the gravity parameter is incorrect.</pre>
</div></li>
<li>SetPlayerNameForPlayer(playerid, forplayerid, const name[])<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 194px;
		text-align: left;
		overflow: auto">Sets the name of one player for another player.

Parameters:
* playerid - The ID of the player to set the name of.
* forplayerid - The ID of the player who will see the name change of playerid.
* name[] - The name to set. Must be 1-24 characters long and only contain valid characters (0-9, a-z, A-Z, [], (), &#36; @ . _ and =).

Returns:
1 if the name was successfully changed.
0 if the name is already used by someone (including playerid) or the specified player(s) isn't connected.
-1 if the name cannot be changed for other reasons (too long/short or has invalid characters).</pre>
</div></li>
<li>SetPlayerSkillLevelForPlayer(playerid, forplayerid, skill, level)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 162px;
		text-align: left;
		overflow: auto">Sets the skill level of a certain weapon type of one player for another player.

Parameters:
* playerid - The ID of the player to set the weapon skill of.
* forplayerid - The ID of the player who will see the weapon skill change of playerid.
* skill - The ID of the weapon skill (not the ID of the weapon).
* level - The skill level ranging from 0 to 999. A value that exceeds this range will be perceived as 999.

Returns 1 on success or 0 if the specified player(s) isn't connected or the skill parameter is incorrect.</pre>
</div></li>
<li>SetPlayerFightingStyleForPlayer(playerid, forplayerid, style)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 162px;
		text-align: left;
		overflow: auto">Sets the special fighting style of one player for another player.
To use in-game, aim and press the 'secondary attack' key (ENTER by default).

Parameters:
* playerid - The ID of the player to set the fighting style of.
* forplayerid - The ID of the player who will see the fighting style change of playerid.
* style - The ID of the fighting style that should be set.

Returns 1 on success or 0 if the specified player(s) isn't connected or the style parameter is incorrect.</pre>
</div></li>
<li>SetPlayerTeamForPlayer(playerid, forplayerid, teamid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Sets the team of one player for another player.

Parameters:
* playerid - The ID of the player to set the team of.
* forplayerid - The ID of the player who will see the team change of playerid.
* teamid - The ID of the team to put the player in. Use NO_TEAM to remove any team.

Returns 1 on success or 0 if the specified player(s) isn't connected.</pre>
</div></li>
<li>SetPlayerSkinForPlayer(playerid, forplayerid, skinid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Sets the skin of one player for another player.

Parameters:
* playerid - The ID of the player to set the skin of.
* forplayerid - The ID of the player who will see the skin change of playerid.
* skinid - The ID of the skin the player should use.

Returns 1 on success or 0 if the specified player(s) isn't connected.</pre>
</div></li>
<li>ApplyAnimationForPlayer(playerid, forplayerid, const animlib[], const animname[], Float:fDelta, loop, lockx, locky, freeze, time)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 242px;
		text-align: left;
		overflow: auto">Apply an animation to one player for another player.

Parameters:
* playerid - The ID of the player to apply the animation to.
* forplayerid - The ID of the player who will see the animation change of playerid.
* animlib[] - The animation library from which to apply an animation.
* animname[] - The name of the animation to apply, within the specified library.
* fDelta - The speed to play the animation.
* loop - Whether it will loop (1) or not (0).
* lockx, locky - If set to 0, the player will be returned to his old X and Y coordinates once the animation is complete.
* freeze - Setting this to 1 will freeze the player at the end of the animation.
* time - Timer in milliseconds. For a never-ending loop it should be 0.

Returns 1 on success or 0 if the specified player(s) isn't connected.</pre>
</div></li>
<li>ClearAnimationsForPlayer(playerid, forplayerid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">Clears all animations of one player for another player.

Parameters:
* playerid - The ID of the player to clear the animations of.
* forplayerid - The ID of the player who will see the animation stop of playerid.

Returns 1 on success or 0 if the specified player(s) isn't connected.</pre>
</div></li>
<li>SetPlayerChatBubbleForPlayer(playerid, forplayerid, const text[], color, Float:drawdistance, expiretime)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 194px;
		text-align: left;
		overflow: auto">Creates a chat bubble (3D text) above one player's name tag for another player.

Parameters:
* playerid - The player which should have the chat bubble.
* forplayerid - The ID of the player who will see the chat bubble above playerid.
* text[] - The text to display.
* color - The text color.
* drawdistance - The distance from which forplayerid is able to see the chat bubble.
* expiretime - The time in milliseconds the bubble should be displayed for.

Returns 1 on success or 0 if the specified player(s) isn't connected.</pre>
</div></li>
<li>SetAttachedObjectForPlayer(playerid, forplayerid, index, modelid, bone, Float:fOffsetX = 0.0, Float:fOffsetY = 0.0, Float:fOffsetZ = 0.0, Float:fRotX = 0.0, Float:fRotY = 0.0, Float:fRotZ = 0.0, Float:fScaleX = 1.0, Float:fScaleY = 1.0, Float:fScaleZ = 1.0, materialcolor1 = 0, materialcolor2 = 0)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 354px;
		text-align: left;
		overflow: auto">Attach an object to a specific bone on a player for another player.

Parameters:
* playerid - The ID of the player to attach the object to.
* forplayerid - The ID of the player who will see the attached object to playerid.
* index - The index (slot) to assign the object to (from 0 to 9).
* modelid - The model to attach.
* bone - The bone to attach the object to.
* fOffsetX - X axis offset for the object position (0.0 by default).
* fOffsetY - Y axis offset for the object position (0.0 by default).
* fOffsetZ - Z axis offset for the object position (0.0 by default).
* fRotX - X axis rotation of the object (0.0 by default).
* fRotY - Y axis rotation of the object (0.0 by default).
* fRotZ - Z axis rotation of the object (0.0 by default).
* fScaleX - X axis scale of the object (1.0 by default).
* fScaleY - Y axis scale of the object (1.0 by default).
* fScaleZ - Z axis scale of the object (1.0 by default).
* materialcolor1 - The first object color to set, as an integer or hex in ARGB color format (0 by default).
* materialcolor2 - The second object color to set, as an integer or hex in ARGB color format (0 by default).

Returns 1 on success or 0 if the specified player(s) isn't connected or the index parameter is incorrect.</pre>
</div></li>
<li>RemoveAttachedObjectForPlayer(playerid, forplayerid, index)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Removes an attached object from one player for another player.

Parameters:
* playerid - The ID of the player to remove the object from.
* forplayerid - The ID of the player who will see the removal of the attached object from playerid.
* index - The index (slot) of the object to remove (set with SetPlayerAttachedObject).

Returns 1 on success or 0 if the specified player(s) isn't connected or the index parameter is incorrect.</pre>
</div></li>
<li>ChangeVehicleColorForPlayer(playerid, vehicleid, color1, color2)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 162px;
		text-align: left;
		overflow: auto">Changes a vehicle's primary and secondary colors for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the colors of the specified vehicle.
* vehicleid - The ID of the vehicle to change the colors of.
* color1 - The new vehicle's primary color ID.
* color2 - The new vehicle's secondary color ID.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>ChangeVehiclePaintjobForPlayer(playerid, vehicleid, paintjobid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Changes a vehicle's paintjob for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the paintjob of the specified vehicle.
* vehicleid - The ID of the vehicle to change the paintjob of.
* paintjobid - The ID of the paintjob to apply. Use 3 to remove a paintjob.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>AddVehicleComponentForPlayer(playerid, vehicleid, componentid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Adds a tuning component (modification) to a vehicle for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to add the component to the specified vehicle.
* vehicleid - The ID of the vehicle to add the component to.
* componentid - The ID of the component to add to the vehicle.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>RemoveVehicleComponentForPlayer(playerid, vehicleid, componentid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Removes a tuning component from a vehicle for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to remove the component from the specified vehicle.
* vehicleid - The ID of the vehicle to remove the component from.
* componentid - The ID of the component to remove.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>LinkVehicleToInteriorForPlayer(playerid, vehicleid, interiorid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Links a vehicle to an interior for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the interior of the specified vehicle.
* vehicleid - The ID of the vehicle to link to an interior.
* interiorid - The interior ID to link it to.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehicleNumberPlateForPlayer(playerid, vehicleid, const numberplate[])<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Sets a vehicle number plate for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the number plate of the specified vehicle.
* vehicleid - The ID of the vehicle to set the number plate of.
* numberplate[] - The text that should be displayed on the number plate.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehicleHealthForPlayer(playerid, vehicleid, Float:health)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Sets a vehicle's health for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the health of the specified vehicle.
* vehicleid - The ID of the vehicle to set the health of.
* health - The health, given as a float value.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>UpdateVehDamageStatusForPlayer(playerid, vehicleid, panels, doors, lights, tires)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 210px;
		text-align: left;
		overflow: auto">Sets the various visual damage statuses of a vehicle for a specific player.
For example, popped tires, broken lights and damaged panels.

Parameters:
* playerid - The ID of the player for whom you want to change the damage status of the specified vehicle.
* vehicleid - The ID of the vehicle to set the damage of.
* panels - A set of bits containing the panel damage status.
* doors - A set of bits containing the door damage status.
* lights - A set of bits containing the light damage status.
* tires - A set of bits containing the tire damage status.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>RepairVehicleForPlayer(playerid, vehicleid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">Fully repairs a vehicle for a specific player, including visual damage (bumps, dents, scratches, popped tires).

Parameters:
* playerid - The ID of the player for whom you want to repair the specified vehicle.
* vehicleid - The ID of the vehicle to repair.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehiclePosForPlayer(playerid, vehicleid, Float:x, Float:y, Float:z)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 178px;
		text-align: left;
		overflow: auto">Sets a vehicle's position for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the position of the specified vehicle.
* vehicleid - The ID of the vehicle that you want to set new position.
* x - The X coordinate to position the vehicle at.
* y - The Y coordinate to position the vehicle at.
* z - The Z coordinate to position the vehicle at.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehicleZAngleForPlayer(playerid, vehicleid, Float:z_angle)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Sets the Z rotation (yaw) of a vehicle for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the Z angle of the specified vehicle.
* vehicleid - The ID of the vehicle to set the rotation of.
* z_angle - The Z angle to set.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehicleVelocityForPlayer(playerid, vehicleid, Float:X, Float:Y, Float:Z)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 178px;
		text-align: left;
		overflow: auto">Sets the X, Y and Z velocity of a vehicle for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the velocity of the specified vehicle.
* vehicleid - The ID of the vehicle to set the velocity of.
* X - The velocity in the X direction.
* Y - The velocity in the Y direction.
* Z - The velocity in the Z direction.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehicleAngVelocityForPlayer(playerid, vehicleid, Float:X, Float:Y, Float:Z)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 178px;
		text-align: left;
		overflow: auto">Sets the angular X, Y and Z velocity of a vehicle for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the angular velocity of the specified vehicle.
* vehicleid - The ID of the vehicle to set the angular velocity of.
* X - The amount of velocity in the angular X direction.
* Y - The amount of velocity in the angular Y direction.
* Z - The amount of velocity in the angular Z direction.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>AttachTrailerToVehicleForPlayer(playerid, trailerid, vehicleid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Attach a vehicle to another vehicle as a trailer for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to attach the trailer to the specified vehicle.
* trailerid - The ID of the vehicle that will be attached to vehicleid.
* vehicleid - The ID of the vehicle to which trailerid will be attached.

Returns 1 on success or 0 if the specified player or vehicle(s) doesn't exist.</pre>
</div></li>
<li>DetachTrailerFromVehForPlayer(playerid, vehicleid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">Detach the connection between a vehicle and its trailer for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to detach the trailer from the specified vehicle.
* vehicleid - The ID of the vehicle to detach the trailer from.

Returns 1 on success or 0 if the specified player or vehicle(s) doesn't exist.</pre>
</div></li>
</ul>
For the functions that have both playerid and forplayerid as their parameters you can specify for them either the same IDs or different player IDs, thus in the first case the changes will be visible only to the player to whom they are applied (and as a result, if it's possible, the player will synchronize them for others himself), while in the second case the changes applied to playerid will not be visible for him, as they are visible only to forplayerid.<br />
<br />
<b><font face="Trebuchet MS"><font size="3">Dependencies:</font></font></b><br />
<a href="https://sampforum.blast.hk/showthread.php?tid=640306" target="_blank">Pawn.RakNet plugin</a><br />
<br />
<b><font face="Trebuchet MS"><font size="3">Download:</font></font></b><br />
v1.2: <a href="http://www.mediafire.com/file/ruuf4mv5yt0y1ij/perplayer.inc/file" target="_blank">MediaFire</a> <a href="https://pastebin.com/i7anjDbE" target="_blank">Pastebin</a><br />
<br />
<b><font face="Trebuchet MS"><font size="3">Notes:</font></font></b><br />
This library doesn't contain functions that can get any data for a specific player (Get&lt;...&gt;ForPlayer), since their implementation on Pawn would require the allocation of a really large amount of memory most of which wouldn't be used at all during the server work, which I found ineffective. So if someone wants to do this in plugin where it would be more appropriate - don't hesitate to take the code and change it as you like, I don't mind.<br />
<br />
<b><font face="Trebuchet MS"><font size="3">Changelog:</font></font></b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">v1.0
* Initial release

v1.1
* Fixed SetPlayerNameForPlayer function

v1.2
* Compatibility with the latest Pawn.RakNet plugin version</pre>
</div><b><font face="Trebuchet MS"><font size="3">Bugs:</font></font></b><br />
Not found at the moment. If you find strange behavior of any of the functions or other errors, report them in this thread.<br />
<br />
<b><font face="Trebuchet MS"><font size="3">Credits:</font></font></b><br />
* KashCherry, BrunoBM16 - list of RPC IDs and parameters<br />
* urShadow - some help with Pawn.RakNet]]></description>
			<content:encoded><![CDATA[<div align="center"><b><font face="Trebuchet MS"><font size="4">Per-player functions</font><br />
(powered by Pawn.RakNet)</font></b></div>
<b><font face="Trebuchet MS"><font size="3">Description:</font></font></b><br />
This library implements analogues of ordinary native ones like SetPlayerSkin or SetVehicleNumber, but with the possibility of applying them to one specific player, as you can do this, for example, using the existing CreateExplosion and CreateExplosionForPlayer functions. You could already see some of the functions in YSF and SKY plugins earlier (the functionality of which prompted me to create this include), but there are few of them and those plugins have a broader purpose of using that not everyone might need.<br />
<br />
<b><font face="Trebuchet MS"><font size="3">List of functions &amp; documentation:</font></font></b><br />
<ul><li>SetPlayerGravity(playerid, Float:gravity)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">Sets the gravity for a specific player.

Parameters:
* playerid - The ID of the player to set the gravity of.
* gravity - The value that the gravity should be set to (between -50.0 and 50.0).

Returns 1 on success or 0 if the specified player isn't connected or the gravity parameter is incorrect.</pre>
</div></li>
<li>SetPlayerNameForPlayer(playerid, forplayerid, const name[])<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 194px;
		text-align: left;
		overflow: auto">Sets the name of one player for another player.

Parameters:
* playerid - The ID of the player to set the name of.
* forplayerid - The ID of the player who will see the name change of playerid.
* name[] - The name to set. Must be 1-24 characters long and only contain valid characters (0-9, a-z, A-Z, [], (), &#36; @ . _ and =).

Returns:
1 if the name was successfully changed.
0 if the name is already used by someone (including playerid) or the specified player(s) isn't connected.
-1 if the name cannot be changed for other reasons (too long/short or has invalid characters).</pre>
</div></li>
<li>SetPlayerSkillLevelForPlayer(playerid, forplayerid, skill, level)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 162px;
		text-align: left;
		overflow: auto">Sets the skill level of a certain weapon type of one player for another player.

Parameters:
* playerid - The ID of the player to set the weapon skill of.
* forplayerid - The ID of the player who will see the weapon skill change of playerid.
* skill - The ID of the weapon skill (not the ID of the weapon).
* level - The skill level ranging from 0 to 999. A value that exceeds this range will be perceived as 999.

Returns 1 on success or 0 if the specified player(s) isn't connected or the skill parameter is incorrect.</pre>
</div></li>
<li>SetPlayerFightingStyleForPlayer(playerid, forplayerid, style)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 162px;
		text-align: left;
		overflow: auto">Sets the special fighting style of one player for another player.
To use in-game, aim and press the 'secondary attack' key (ENTER by default).

Parameters:
* playerid - The ID of the player to set the fighting style of.
* forplayerid - The ID of the player who will see the fighting style change of playerid.
* style - The ID of the fighting style that should be set.

Returns 1 on success or 0 if the specified player(s) isn't connected or the style parameter is incorrect.</pre>
</div></li>
<li>SetPlayerTeamForPlayer(playerid, forplayerid, teamid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Sets the team of one player for another player.

Parameters:
* playerid - The ID of the player to set the team of.
* forplayerid - The ID of the player who will see the team change of playerid.
* teamid - The ID of the team to put the player in. Use NO_TEAM to remove any team.

Returns 1 on success or 0 if the specified player(s) isn't connected.</pre>
</div></li>
<li>SetPlayerSkinForPlayer(playerid, forplayerid, skinid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Sets the skin of one player for another player.

Parameters:
* playerid - The ID of the player to set the skin of.
* forplayerid - The ID of the player who will see the skin change of playerid.
* skinid - The ID of the skin the player should use.

Returns 1 on success or 0 if the specified player(s) isn't connected.</pre>
</div></li>
<li>ApplyAnimationForPlayer(playerid, forplayerid, const animlib[], const animname[], Float:fDelta, loop, lockx, locky, freeze, time)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 242px;
		text-align: left;
		overflow: auto">Apply an animation to one player for another player.

Parameters:
* playerid - The ID of the player to apply the animation to.
* forplayerid - The ID of the player who will see the animation change of playerid.
* animlib[] - The animation library from which to apply an animation.
* animname[] - The name of the animation to apply, within the specified library.
* fDelta - The speed to play the animation.
* loop - Whether it will loop (1) or not (0).
* lockx, locky - If set to 0, the player will be returned to his old X and Y coordinates once the animation is complete.
* freeze - Setting this to 1 will freeze the player at the end of the animation.
* time - Timer in milliseconds. For a never-ending loop it should be 0.

Returns 1 on success or 0 if the specified player(s) isn't connected.</pre>
</div></li>
<li>ClearAnimationsForPlayer(playerid, forplayerid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">Clears all animations of one player for another player.

Parameters:
* playerid - The ID of the player to clear the animations of.
* forplayerid - The ID of the player who will see the animation stop of playerid.

Returns 1 on success or 0 if the specified player(s) isn't connected.</pre>
</div></li>
<li>SetPlayerChatBubbleForPlayer(playerid, forplayerid, const text[], color, Float:drawdistance, expiretime)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 194px;
		text-align: left;
		overflow: auto">Creates a chat bubble (3D text) above one player's name tag for another player.

Parameters:
* playerid - The player which should have the chat bubble.
* forplayerid - The ID of the player who will see the chat bubble above playerid.
* text[] - The text to display.
* color - The text color.
* drawdistance - The distance from which forplayerid is able to see the chat bubble.
* expiretime - The time in milliseconds the bubble should be displayed for.

Returns 1 on success or 0 if the specified player(s) isn't connected.</pre>
</div></li>
<li>SetAttachedObjectForPlayer(playerid, forplayerid, index, modelid, bone, Float:fOffsetX = 0.0, Float:fOffsetY = 0.0, Float:fOffsetZ = 0.0, Float:fRotX = 0.0, Float:fRotY = 0.0, Float:fRotZ = 0.0, Float:fScaleX = 1.0, Float:fScaleY = 1.0, Float:fScaleZ = 1.0, materialcolor1 = 0, materialcolor2 = 0)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 354px;
		text-align: left;
		overflow: auto">Attach an object to a specific bone on a player for another player.

Parameters:
* playerid - The ID of the player to attach the object to.
* forplayerid - The ID of the player who will see the attached object to playerid.
* index - The index (slot) to assign the object to (from 0 to 9).
* modelid - The model to attach.
* bone - The bone to attach the object to.
* fOffsetX - X axis offset for the object position (0.0 by default).
* fOffsetY - Y axis offset for the object position (0.0 by default).
* fOffsetZ - Z axis offset for the object position (0.0 by default).
* fRotX - X axis rotation of the object (0.0 by default).
* fRotY - Y axis rotation of the object (0.0 by default).
* fRotZ - Z axis rotation of the object (0.0 by default).
* fScaleX - X axis scale of the object (1.0 by default).
* fScaleY - Y axis scale of the object (1.0 by default).
* fScaleZ - Z axis scale of the object (1.0 by default).
* materialcolor1 - The first object color to set, as an integer or hex in ARGB color format (0 by default).
* materialcolor2 - The second object color to set, as an integer or hex in ARGB color format (0 by default).

Returns 1 on success or 0 if the specified player(s) isn't connected or the index parameter is incorrect.</pre>
</div></li>
<li>RemoveAttachedObjectForPlayer(playerid, forplayerid, index)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Removes an attached object from one player for another player.

Parameters:
* playerid - The ID of the player to remove the object from.
* forplayerid - The ID of the player who will see the removal of the attached object from playerid.
* index - The index (slot) of the object to remove (set with SetPlayerAttachedObject).

Returns 1 on success or 0 if the specified player(s) isn't connected or the index parameter is incorrect.</pre>
</div></li>
<li>ChangeVehicleColorForPlayer(playerid, vehicleid, color1, color2)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 162px;
		text-align: left;
		overflow: auto">Changes a vehicle's primary and secondary colors for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the colors of the specified vehicle.
* vehicleid - The ID of the vehicle to change the colors of.
* color1 - The new vehicle's primary color ID.
* color2 - The new vehicle's secondary color ID.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>ChangeVehiclePaintjobForPlayer(playerid, vehicleid, paintjobid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Changes a vehicle's paintjob for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the paintjob of the specified vehicle.
* vehicleid - The ID of the vehicle to change the paintjob of.
* paintjobid - The ID of the paintjob to apply. Use 3 to remove a paintjob.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>AddVehicleComponentForPlayer(playerid, vehicleid, componentid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Adds a tuning component (modification) to a vehicle for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to add the component to the specified vehicle.
* vehicleid - The ID of the vehicle to add the component to.
* componentid - The ID of the component to add to the vehicle.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>RemoveVehicleComponentForPlayer(playerid, vehicleid, componentid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Removes a tuning component from a vehicle for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to remove the component from the specified vehicle.
* vehicleid - The ID of the vehicle to remove the component from.
* componentid - The ID of the component to remove.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>LinkVehicleToInteriorForPlayer(playerid, vehicleid, interiorid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Links a vehicle to an interior for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the interior of the specified vehicle.
* vehicleid - The ID of the vehicle to link to an interior.
* interiorid - The interior ID to link it to.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehicleNumberPlateForPlayer(playerid, vehicleid, const numberplate[])<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Sets a vehicle number plate for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the number plate of the specified vehicle.
* vehicleid - The ID of the vehicle to set the number plate of.
* numberplate[] - The text that should be displayed on the number plate.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehicleHealthForPlayer(playerid, vehicleid, Float:health)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Sets a vehicle's health for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the health of the specified vehicle.
* vehicleid - The ID of the vehicle to set the health of.
* health - The health, given as a float value.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>UpdateVehDamageStatusForPlayer(playerid, vehicleid, panels, doors, lights, tires)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 210px;
		text-align: left;
		overflow: auto">Sets the various visual damage statuses of a vehicle for a specific player.
For example, popped tires, broken lights and damaged panels.

Parameters:
* playerid - The ID of the player for whom you want to change the damage status of the specified vehicle.
* vehicleid - The ID of the vehicle to set the damage of.
* panels - A set of bits containing the panel damage status.
* doors - A set of bits containing the door damage status.
* lights - A set of bits containing the light damage status.
* tires - A set of bits containing the tire damage status.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>RepairVehicleForPlayer(playerid, vehicleid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">Fully repairs a vehicle for a specific player, including visual damage (bumps, dents, scratches, popped tires).

Parameters:
* playerid - The ID of the player for whom you want to repair the specified vehicle.
* vehicleid - The ID of the vehicle to repair.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehiclePosForPlayer(playerid, vehicleid, Float:x, Float:y, Float:z)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 178px;
		text-align: left;
		overflow: auto">Sets a vehicle's position for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the position of the specified vehicle.
* vehicleid - The ID of the vehicle that you want to set new position.
* x - The X coordinate to position the vehicle at.
* y - The Y coordinate to position the vehicle at.
* z - The Z coordinate to position the vehicle at.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehicleZAngleForPlayer(playerid, vehicleid, Float:z_angle)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Sets the Z rotation (yaw) of a vehicle for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the Z angle of the specified vehicle.
* vehicleid - The ID of the vehicle to set the rotation of.
* z_angle - The Z angle to set.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehicleVelocityForPlayer(playerid, vehicleid, Float:X, Float:Y, Float:Z)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 178px;
		text-align: left;
		overflow: auto">Sets the X, Y and Z velocity of a vehicle for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the velocity of the specified vehicle.
* vehicleid - The ID of the vehicle to set the velocity of.
* X - The velocity in the X direction.
* Y - The velocity in the Y direction.
* Z - The velocity in the Z direction.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>SetVehicleAngVelocityForPlayer(playerid, vehicleid, Float:X, Float:Y, Float:Z)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 178px;
		text-align: left;
		overflow: auto">Sets the angular X, Y and Z velocity of a vehicle for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to change the angular velocity of the specified vehicle.
* vehicleid - The ID of the vehicle to set the angular velocity of.
* X - The amount of velocity in the angular X direction.
* Y - The amount of velocity in the angular Y direction.
* Z - The amount of velocity in the angular Z direction.

Returns 1 on success or 0 if the specified player or vehicle doesn't exist.</pre>
</div></li>
<li>AttachTrailerToVehicleForPlayer(playerid, trailerid, vehicleid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">Attach a vehicle to another vehicle as a trailer for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to attach the trailer to the specified vehicle.
* trailerid - The ID of the vehicle that will be attached to vehicleid.
* vehicleid - The ID of the vehicle to which trailerid will be attached.

Returns 1 on success or 0 if the specified player or vehicle(s) doesn't exist.</pre>
</div></li>
<li>DetachTrailerFromVehForPlayer(playerid, vehicleid)<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">Detach the connection between a vehicle and its trailer for a specific player.

Parameters:
* playerid - The ID of the player for whom you want to detach the trailer from the specified vehicle.
* vehicleid - The ID of the vehicle to detach the trailer from.

Returns 1 on success or 0 if the specified player or vehicle(s) doesn't exist.</pre>
</div></li>
</ul>
For the functions that have both playerid and forplayerid as their parameters you can specify for them either the same IDs or different player IDs, thus in the first case the changes will be visible only to the player to whom they are applied (and as a result, if it's possible, the player will synchronize them for others himself), while in the second case the changes applied to playerid will not be visible for him, as they are visible only to forplayerid.<br />
<br />
<b><font face="Trebuchet MS"><font size="3">Dependencies:</font></font></b><br />
<a href="https://sampforum.blast.hk/showthread.php?tid=640306" target="_blank">Pawn.RakNet plugin</a><br />
<br />
<b><font face="Trebuchet MS"><font size="3">Download:</font></font></b><br />
v1.2: <a href="http://www.mediafire.com/file/ruuf4mv5yt0y1ij/perplayer.inc/file" target="_blank">MediaFire</a> <a href="https://pastebin.com/i7anjDbE" target="_blank">Pastebin</a><br />
<br />
<b><font face="Trebuchet MS"><font size="3">Notes:</font></font></b><br />
This library doesn't contain functions that can get any data for a specific player (Get&lt;...&gt;ForPlayer), since their implementation on Pawn would require the allocation of a really large amount of memory most of which wouldn't be used at all during the server work, which I found ineffective. So if someone wants to do this in plugin where it would be more appropriate - don't hesitate to take the code and change it as you like, I don't mind.<br />
<br />
<b><font face="Trebuchet MS"><font size="3">Changelog:</font></font></b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">HTML Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 146px;
		text-align: left;
		overflow: auto">v1.0
* Initial release

v1.1
* Fixed SetPlayerNameForPlayer function

v1.2
* Compatibility with the latest Pawn.RakNet plugin version</pre>
</div><b><font face="Trebuchet MS"><font size="3">Bugs:</font></font></b><br />
Not found at the moment. If you find strange behavior of any of the functions or other errors, report them in this thread.<br />
<br />
<b><font face="Trebuchet MS"><font size="3">Credits:</font></font></b><br />
* KashCherry, BrunoBM16 - list of RPC IDs and parameters<br />
* urShadow - some help with Pawn.RakNet]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] Chat #hashtag system]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=669626</link>
			<pubDate>Thu, 26 Sep 2019 17:39:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=255806">AbyssMorgan</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=669626</guid>
			<description><![CDATA[Include contain function for chat #hashtag system<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 386px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #FF8000">/*************************************************************************************************************************************<br/> *                                                                                                                                   *<br/> *                                                        )(   #hashtag   )(                                                         *<br/> *                                                                                                                                   *<br/> * Copyright © 2019 Abyss Morgan. All rights reserved.                                                                               *<br/> * Contributors: None                                                                                                                *<br/> *                                                                                                                                   *<br/> * Website:  adm.ct8.pl                                                                                                              *<br/> * Download: adm.ct8.pl/r/download                                                                                                   *<br/> *                                                                                                                                   *<br/> * Plugins: SScanf                                                                                                                   *<br/> * Modules: RGB                                                                                                                      *<br/> *                                                                                                                                   *<br/> * File Version: 1.0.0                                                                                                               *<br/> *                                                                                                                                   *<br/> * Functions:                                                                                                                        *<br/> * GetHashTag(playerid,text[],hashtag_color=0xCC0000FF,back_color=0xFFFFFFFF,max_len=sizeof(text));                                  *<br/> * HashTag::name(playerid);                                                                                                          *<br/> *                                                                                                                                   *<br/> * Callbacks:                                                                                                                        *<br/> * OnHashTagPresented(hashtag[]);                                                                                                    *<br/> *                                                                                                                                   *<br/> *************************************************************************************************************************************/ <br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><b>Example:</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 274px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #FF8000">//I want #suicide now :D<br/></span><span style="color: #0000BB">HashTag</span><span style="color: #007700">::</span><span style="color: #0000BB">suicide</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">){<br/>    </span><span style="color: #0000BB">SetPlayerHealth</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">0.0</span><span style="color: #007700">);<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br/>}<br/> <br/></span><span style="color: #0000BB">HashTag</span><span style="color: #007700">::</span><span style="color: #0000BB">banned</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">){<br/>    </span><span style="color: #0000BB">PlayAudioStreamForPlayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #DD0000">"https://adm.ct8.pl/upload/banned.mp3"</span><span style="color: #007700">);<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br/>}<br/> <br/>public </span><span style="color: #0000BB">OnPlayerText</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">text</span><span style="color: #007700">[]){<br/>    </span><span style="color: #0000BB">GetHashTag</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">text</span><span style="color: #007700">,</span><span style="color: #0000BB">0xCC0000FF</span><span style="color: #007700">,</span><span style="color: #0000BB">0x00AA00FF</span><span style="color: #007700">); </span><span style="color: #FF8000">//back_color the same as first chat color<br/>    </span><span style="color: #0000BB">SendClientMessageToAll</span><span style="color: #007700">(</span><span style="color: #0000BB">0x00AA00FF</span><span style="color: #007700">,</span><span style="color: #0000BB">text</span><span style="color: #007700">);<br/>    return </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br/>} <br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><b>Download:</b><br />
<a href="http://adm.ct8.pl/d/hashtag.inc" target="_blank">hashtag.inc</a><br />
<a href="http://adm.ct8.pl/d/RGB.inc" target="_blank">RGB.inc</a><br />
<br />
<i><b>Non-Registered Users:</b><br />
<a href="http://adm.ct8.pl/report/?title=hashtag%20Bug" target="_blank">Bug Report</a></i>]]></description>
			<content:encoded><![CDATA[Include contain function for chat #hashtag system<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 386px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #FF8000">/*************************************************************************************************************************************<br/> *                                                                                                                                   *<br/> *                                                        )(   #hashtag   )(                                                         *<br/> *                                                                                                                                   *<br/> * Copyright © 2019 Abyss Morgan. All rights reserved.                                                                               *<br/> * Contributors: None                                                                                                                *<br/> *                                                                                                                                   *<br/> * Website:  adm.ct8.pl                                                                                                              *<br/> * Download: adm.ct8.pl/r/download                                                                                                   *<br/> *                                                                                                                                   *<br/> * Plugins: SScanf                                                                                                                   *<br/> * Modules: RGB                                                                                                                      *<br/> *                                                                                                                                   *<br/> * File Version: 1.0.0                                                                                                               *<br/> *                                                                                                                                   *<br/> * Functions:                                                                                                                        *<br/> * GetHashTag(playerid,text[],hashtag_color=0xCC0000FF,back_color=0xFFFFFFFF,max_len=sizeof(text));                                  *<br/> * HashTag::name(playerid);                                                                                                          *<br/> *                                                                                                                                   *<br/> * Callbacks:                                                                                                                        *<br/> * OnHashTagPresented(hashtag[]);                                                                                                    *<br/> *                                                                                                                                   *<br/> *************************************************************************************************************************************/ <br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><b>Example:</b><br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">PHP Code:</div>
<div class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 274px;
		text-align: left;
		overflow: auto">
<code style="white-space:nowrap">
<!-- php buffer start --><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #FF8000">//I want #suicide now :D<br/></span><span style="color: #0000BB">HashTag</span><span style="color: #007700">::</span><span style="color: #0000BB">suicide</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">){<br/>    </span><span style="color: #0000BB">SetPlayerHealth</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">0.0</span><span style="color: #007700">);<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br/>}<br/> <br/></span><span style="color: #0000BB">HashTag</span><span style="color: #007700">::</span><span style="color: #0000BB">banned</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">){<br/>    </span><span style="color: #0000BB">PlayAudioStreamForPlayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #DD0000">"https://adm.ct8.pl/upload/banned.mp3"</span><span style="color: #007700">);<br/>    return </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br/>}<br/> <br/>public </span><span style="color: #0000BB">OnPlayerText</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">text</span><span style="color: #007700">[]){<br/>    </span><span style="color: #0000BB">GetHashTag</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">text</span><span style="color: #007700">,</span><span style="color: #0000BB">0xCC0000FF</span><span style="color: #007700">,</span><span style="color: #0000BB">0x00AA00FF</span><span style="color: #007700">); </span><span style="color: #FF8000">//back_color the same as first chat color<br/>    </span><span style="color: #0000BB">SendClientMessageToAll</span><span style="color: #007700">(</span><span style="color: #0000BB">0x00AA00FF</span><span style="color: #007700">,</span><span style="color: #0000BB">text</span><span style="color: #007700">);<br/>    return </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br/>} <br/></span><span style="color: #0000BB"></span>
</span>
</code><!-- php buffer end -->
</code>
</div>
</div><b>Download:</b><br />
<a href="http://adm.ct8.pl/d/hashtag.inc" target="_blank">hashtag.inc</a><br />
<a href="http://adm.ct8.pl/d/RGB.inc" target="_blank">RGB.inc</a><br />
<br />
<i><b>Non-Registered Users:</b><br />
<a href="http://adm.ct8.pl/report/?title=hashtag%20Bug" target="_blank">Bug Report</a></i>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] Irresistible Anticheat & Weapon Shot Sync System (Lightweight)]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665866</link>
			<pubDate>Fri, 19 Apr 2019 07:52:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=78223">Lorenc_</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665866</guid>
			<description><![CDATA[<font color="DeepSkyBlue"><font size="5"><b>Irresistible Anticheat</b></font></font><br />
<br />
An extension of my renowned fuckCleo project. More up to date and more powerful.<br />
<br />
The anticheat handles everything included in this enumerator (including the commented parts).<br />
<br />
The whole system is modular, so ideally you can copy the things you need.<br />
<br />
An example, is the recent bot attack hack. I have made a script recently to mitigate this as much as possible.<br />
<br />
I'm making a seperate thread for this because it is a key take from open sourcing my gamemode.<br />
<br />
90% of the hacks your server will face will automatically be mitigated with the help from this anticheat.<br />
<br />
<font size="4"><font size="5"><b>Download</b></font></font><br />
<br />
<b><a href="https://github.com/zeelorenc/sf-cnr/tree/master/gamemodes/irresistible/anticheat" target="_blank">zeelorenc/sf-cnr/tree/master/gamemodes/irresistible/anticheat</a></b><br />
<br />
(All the files in that link are a part of the anticheat). Put them all in a folder.<br />
<br />
<font size="4"><font size="5"><b>Documentation</b></font></font><br />
<br />
<u><b>CHEAT_TYPE_MONEY</b></u><br />
<br />
This has its own functions. I haven't bothered to hook giveplayermoney just to be absolutely safe. Only thing not Plug n Play is this.<br />
<br />
GivePlayerCash( playerid, amount )<br />
GetPlayerCash( playerid )<br />
<br />
Introduces OnPlayerMoneyChanged callback as well. <br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:199px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222AA;">#if defined AC_INCLUDED</span><br/>    <span style="color: #2222BB;">public</span> OnPlayerMoneyChanged<span style="color: #000000;">(</span> playerid, amount <span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #228822;">// save player money on each monetary movement</span><br/>        <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> IsPlayerLoggedIn<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span> <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            mysql_single_query<span style="color: #000000;">(</span> sprintf<span style="color: #000000;">(</span> <span style="color: #000066;">"UPDATE `USERS` SET `CASH` = %d WHERE `ID` = %d"</span>, GetPlayerCash<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, GetPlayerAccountID<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span> <span style="color: #000000;">)</span> <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/>    <span style="color: #000000;">}</span><br/><span style="color: #2222AA;">#endif</span></div></div></pre>
</div>
<b><u>CHEAT_TYPE_PLAYERBUGGER</u></b><br />
<br />
Restores player position if it is very exaggerated/far at random.<br />
<br />
<b><u>CHEAT_TYPE_WEAPON</u></b><br />
<br />
Almost flawless. But no ammo detection. Just simple weapon hack detection. I'd say 99% accurate.<br />
<br />
<b><u>CHEAT_TYPE_CARWARP</u></b><br />
<br />
If a car flies randomly it won't be synced to other players.<br />
<br />
<u><b>CHEAT_TYPE_FAKEKILL</b></u><br />
<br />
When a player spams deaths / or death by another individual.<br />
<br />
<u><b>CHEAT_TYPE_REMOTE_JACK</b></u><br />
<br />
Abnormal remote jacking detection. Large credit to JernejL.<br />
<br />
<u><b>CHEAT_TYPE_HEALTH / ARMOUR</b></u><br />
<br />
While writing this I noticed these types are redundant due to my new system.<br />
<br />
It is based off client-sided shooting and has the most basic/lightweight validation.<br />
<br />
10x more lightweight than slice's one. 600 lines. His is 6000. Not a diss.<br />
<br />
Replaced callbacks:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:263px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222AA;">#if defined AC_INCLUDED</span><br/><span style="color: #2222BB;">public</span> OnPlayerDeathEx<span style="color: #000000;">(</span> playerid, killerid, reason, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span> damage, bodypart <span style="color: #000000;">)</span><br/><span style="color: #2222AA;">#else</span><br/><span style="color: #2222BB;">public</span> OnPlayerDeath<span style="color: #000000;">(</span> playerid, killerid, reason <span style="color: #000000;">)</span><br/><span style="color: #2222AA;">#endif</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222AA;">#if defined AC_INCLUDED</span><br/><span style="color: #2222BB;">public</span> OnPlayerTakePlayerDamage<span style="color: #000000;">(</span> playerid, issuerid, <span style="color: #000000;">&amp;</span><span style="color: #000000;">Float</span><span style="color: #000000;">:</span> amount, weaponid, bodypart <span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>; <span style="color: #228822;">// returning 0 will prevent user from taking damage (THIS IS A BIG FEATURE!)</span><br/><span style="color: #000000;">}</span><br/><span style="color: #2222AA;">#endif</span></div></div></pre>
</div>
Note, has a RARE bug when a player dies with 99 damage. It simply will not register their death, nothing big. To be fixed by someone hopefully soon.<br />
<br />
<u><b>CHEAT_TYPE_AIRBRAKE</b></u><br />
<br />
Credit to Emmet_. I don't think I made this, but I do recall Kar helping to improve this.<br />
<br />
This was years ago. I don't speak frequently with these blokes anymore.<br />
<br />
<u><b>CHEAT_TYPE_PROAIM</b></u><br />
<br />
90% accurate at first detection. 99% accurate after 3 lines of spam.<br />
<br />
<u><b>CHEAT_TYPE_AUTOCBUG</b></u><br />
<br />
Same thing.<br />
<br />
90% accurate at first detection. 99% accurate after 3 lines of spam.<br />
<br />
<u><b>CHEAT_TYPE_FLYHACKS</b></u><br />
<br />
Pretty accurate for basic fly hack detection.<br />
<br />
<u><b>CHEAT_TYPE_RAPIDFIRE</b></u><br />
<br />
That annoying hack where people shoot snipers, and other weapons very fast.<br />
<br />
<b><u>CHEAT_TYPE_CAR_PARTICLE_SPAM</u></b><br />
<br />
When a car's doors etc are spammed all over the place by a hacker. Pretty accurate (should desync the player ideally).<br />
<br />
<b><u>CHEAT_TYPE_PICKUP_SPAM</u></b><br />
<br />
When a user picks up a lot of pickups in a short timespan.<br />
<br />
90% accurate at first detection. 99% accurate after 3 lines of spam.<br />
<br />
<font size="4"><font size="5"><b>Instructions</b></font></font><br />
<br />
It is designed to be plug and play. <b>REQUIRES YSI 3.</b><br />
<ol style="list-style-type: decimal"><li>Copy the anticheat folder into your includes folder</li>
<li>#include "anticheat\_anticheat.pwn"</li>
</ol>
Sample code in your gamemode after including (more samples in the whole sf-cnr project e.g gamemodes/sf-cnr.pwn):<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:503px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222AA;">#if defined AC_INCLUDED</span><br/>    <span style="color: #2222BB;">public</span> OnPlayerCheatDetected<span style="color: #000000;">(</span> playerid, detection, params <span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_REMOTE_JACK <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> GetPlayerScore<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span> <span style="color: #000000;">&lt;</span> <span style="color: #000000;">200</span> <span style="color: #000000;">)</span><br/>            <span style="color: #000000;">{</span><br/>                SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been kicked for abnormally jacking vehicles."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>                SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ABNORMAL JACKING]"</span>COL_GREY<span style="color: #000066;">" %s(%d) - %d score - %d ping - %s IP"</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid, GetPlayerScore<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, GetPlayerPing<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, ReturnPlayerIP<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span> <span style="color: #000000;">)</span>;<br/>                <span style="color: #2222BB;">return</span> Kick<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, <span style="color: #000000;">1</span>;<br/>            <span style="color: #000000;">}</span><br/>            SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ABNORMAL JACKING]"</span>COL_GREY<span style="color: #000066;">" %s(%d) is a suspect of jacking vehicles abnormally."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_RAPIDFIRE <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been kicked for rapid-firing."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>            Kick<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_FAKEKILL <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been banned for fake-killing."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>            BanEx<span style="color: #000000;">(</span> playerid, <span style="color: #000066;">"Fake-kill"</span> <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_CARWARP <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> <span style="color: #000000;">!</span> GetPlayerAdminLevel<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span> <span style="color: #000000;">)</span><br/>            <span style="color: #000000;">{</span><br/>                SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been banned for car warping."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>                BanEx<span style="color: #000000;">(</span> playerid, <span style="color: #000066;">"Car Warp"</span> <span style="color: #000000;">)</span>;<br/>            <span style="color: #000000;">}</span><br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_AIRBRAKE <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #228822;">//SendGlobalMessage( -1, ""COL_PINK"[ANTI-CHEAT]{FFFFFF} %s(%d) has been banned for airbraking.", ReturnPlayerName( playerid ), playerid );</span><br/>            <span style="color: #228822;">//AdvancedBan( playerid, "Server", "Airbrake", ReturnPlayerIP( playerid ) );</span><br/>            SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ABNORMAL MOVEMENT]"</span>COL_GREY<span style="color: #000066;">" %s(%d) has been detected for airbrake."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_FLYHACKS <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ABNORMAL MOVEMENT]"</span>COL_GREY<span style="color: #000066;">" %s(%d) has been detected for fly hacks."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>            <span style="color: #228822;">// SendGlobalMessage( -1, ""COL_PINK"[ANTI-CHEAT]{FFFFFF} %s(%d) has been banned for fly hacks.", ReturnPlayerName( playerid ), playerid );</span><br/>            <span style="color: #228822;">// AdvancedBan( playerid, "Server", "Fly Hacks", ReturnPlayerIP( playerid ) );</span><br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_WEAPON <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]"</span>COL_GREY<span style="color: #000066;">" %s(%d) has been detected for weapon hack (%s)."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid, ReturnWeaponName<span style="color: #000000;">(</span> params <span style="color: #000000;">)</span> <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_CAR_PARTICLE_SPAM <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been kicked for car particle spam."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>            Kick<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_PICKUP_SPAM <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been banned for rapid pickup spam."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>            BanEx<span style="color: #000000;">(</span> playerid, <span style="color: #000066;">"Pickup Spam"</span> <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span><br/>        <span style="color: #000000;">{</span><br/>            SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]"</span>COL_GREY<span style="color: #000066;">" %s(%d) has been detected for %s."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid, AC_DetectedCheatToString<span style="color: #000000;">(</span> detection <span style="color: #000000;">)</span> <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/>    <span style="color: #000000;">}</span><br/><span style="color: #2222AA;">#endif</span></div></div></pre>
</div>
Designed to work with all my (Irresisitible Gaming) gamemodes (currently only the SF-CNR &amp; COD projects).<br />
<br />
Then you are done.<br />
<br />
<font size="4"><font size="5"><b>Final notes</b></font></font><br />
<br />
I have honestly rushed to make this thread, but yeah. I've made my anticheat so simple that it should be pretty understandable to most scripters.<br />
<br />
There are a lot of samples in the SF-CNR repo. Just use the GitHub search feature for specific things etc.<br />
<br />
I'll try attend simple questions here but for now my help is honestly limited.]]></description>
			<content:encoded><![CDATA[<font color="DeepSkyBlue"><font size="5"><b>Irresistible Anticheat</b></font></font><br />
<br />
An extension of my renowned fuckCleo project. More up to date and more powerful.<br />
<br />
The anticheat handles everything included in this enumerator (including the commented parts).<br />
<br />
The whole system is modular, so ideally you can copy the things you need.<br />
<br />
An example, is the recent bot attack hack. I have made a script recently to mitigate this as much as possible.<br />
<br />
I'm making a seperate thread for this because it is a key take from open sourcing my gamemode.<br />
<br />
90% of the hacks your server will face will automatically be mitigated with the help from this anticheat.<br />
<br />
<font size="4"><font size="5"><b>Download</b></font></font><br />
<br />
<b><a href="https://github.com/zeelorenc/sf-cnr/tree/master/gamemodes/irresistible/anticheat" target="_blank">zeelorenc/sf-cnr/tree/master/gamemodes/irresistible/anticheat</a></b><br />
<br />
(All the files in that link are a part of the anticheat). Put them all in a folder.<br />
<br />
<font size="4"><font size="5"><b>Documentation</b></font></font><br />
<br />
<u><b>CHEAT_TYPE_MONEY</b></u><br />
<br />
This has its own functions. I haven't bothered to hook giveplayermoney just to be absolutely safe. Only thing not Plug n Play is this.<br />
<br />
GivePlayerCash( playerid, amount )<br />
GetPlayerCash( playerid )<br />
<br />
Introduces OnPlayerMoneyChanged callback as well. <br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:199px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222AA;">#if defined AC_INCLUDED</span><br/>    <span style="color: #2222BB;">public</span> OnPlayerMoneyChanged<span style="color: #000000;">(</span> playerid, amount <span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #228822;">// save player money on each monetary movement</span><br/>        <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> IsPlayerLoggedIn<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span> <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            mysql_single_query<span style="color: #000000;">(</span> sprintf<span style="color: #000000;">(</span> <span style="color: #000066;">"UPDATE `USERS` SET `CASH` = %d WHERE `ID` = %d"</span>, GetPlayerCash<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, GetPlayerAccountID<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span> <span style="color: #000000;">)</span> <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/>    <span style="color: #000000;">}</span><br/><span style="color: #2222AA;">#endif</span></div></div></pre>
</div>
<b><u>CHEAT_TYPE_PLAYERBUGGER</u></b><br />
<br />
Restores player position if it is very exaggerated/far at random.<br />
<br />
<b><u>CHEAT_TYPE_WEAPON</u></b><br />
<br />
Almost flawless. But no ammo detection. Just simple weapon hack detection. I'd say 99% accurate.<br />
<br />
<b><u>CHEAT_TYPE_CARWARP</u></b><br />
<br />
If a car flies randomly it won't be synced to other players.<br />
<br />
<u><b>CHEAT_TYPE_FAKEKILL</b></u><br />
<br />
When a player spams deaths / or death by another individual.<br />
<br />
<u><b>CHEAT_TYPE_REMOTE_JACK</b></u><br />
<br />
Abnormal remote jacking detection. Large credit to JernejL.<br />
<br />
<u><b>CHEAT_TYPE_HEALTH / ARMOUR</b></u><br />
<br />
While writing this I noticed these types are redundant due to my new system.<br />
<br />
It is based off client-sided shooting and has the most basic/lightweight validation.<br />
<br />
10x more lightweight than slice's one. 600 lines. His is 6000. Not a diss.<br />
<br />
Replaced callbacks:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:263px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222AA;">#if defined AC_INCLUDED</span><br/><span style="color: #2222BB;">public</span> OnPlayerDeathEx<span style="color: #000000;">(</span> playerid, killerid, reason, <span style="color: #000000;">Float</span><span style="color: #000000;">:</span> damage, bodypart <span style="color: #000000;">)</span><br/><span style="color: #2222AA;">#else</span><br/><span style="color: #2222BB;">public</span> OnPlayerDeath<span style="color: #000000;">(</span> playerid, killerid, reason <span style="color: #000000;">)</span><br/><span style="color: #2222AA;">#endif</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/><span style="color: #000000;">}</span><br/><br/><span style="color: #2222AA;">#if defined AC_INCLUDED</span><br/><span style="color: #2222BB;">public</span> OnPlayerTakePlayerDamage<span style="color: #000000;">(</span> playerid, issuerid, <span style="color: #000000;">&amp;</span><span style="color: #000000;">Float</span><span style="color: #000000;">:</span> amount, weaponid, bodypart <span style="color: #000000;">)</span><br/><span style="color: #000000;">{</span><br/>    <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>; <span style="color: #228822;">// returning 0 will prevent user from taking damage (THIS IS A BIG FEATURE!)</span><br/><span style="color: #000000;">}</span><br/><span style="color: #2222AA;">#endif</span></div></div></pre>
</div>
Note, has a RARE bug when a player dies with 99 damage. It simply will not register their death, nothing big. To be fixed by someone hopefully soon.<br />
<br />
<u><b>CHEAT_TYPE_AIRBRAKE</b></u><br />
<br />
Credit to Emmet_. I don't think I made this, but I do recall Kar helping to improve this.<br />
<br />
This was years ago. I don't speak frequently with these blokes anymore.<br />
<br />
<u><b>CHEAT_TYPE_PROAIM</b></u><br />
<br />
90% accurate at first detection. 99% accurate after 3 lines of spam.<br />
<br />
<u><b>CHEAT_TYPE_AUTOCBUG</b></u><br />
<br />
Same thing.<br />
<br />
90% accurate at first detection. 99% accurate after 3 lines of spam.<br />
<br />
<u><b>CHEAT_TYPE_FLYHACKS</b></u><br />
<br />
Pretty accurate for basic fly hack detection.<br />
<br />
<u><b>CHEAT_TYPE_RAPIDFIRE</b></u><br />
<br />
That annoying hack where people shoot snipers, and other weapons very fast.<br />
<br />
<b><u>CHEAT_TYPE_CAR_PARTICLE_SPAM</u></b><br />
<br />
When a car's doors etc are spammed all over the place by a hacker. Pretty accurate (should desync the player ideally).<br />
<br />
<b><u>CHEAT_TYPE_PICKUP_SPAM</u></b><br />
<br />
When a user picks up a lot of pickups in a short timespan.<br />
<br />
90% accurate at first detection. 99% accurate after 3 lines of spam.<br />
<br />
<font size="4"><font size="5"><b>Instructions</b></font></font><br />
<br />
It is designed to be plug and play. <b>REQUIRES YSI 3.</b><br />
<ol style="list-style-type: decimal"><li>Copy the anticheat folder into your includes folder</li>
<li>#include "anticheat\_anticheat.pwn"</li>
</ol>
Sample code in your gamemode after including (more samples in the whole sf-cnr project e.g gamemodes/sf-cnr.pwn):<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Code:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:503px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #2222AA;">#if defined AC_INCLUDED</span><br/>    <span style="color: #2222BB;">public</span> OnPlayerCheatDetected<span style="color: #000000;">(</span> playerid, detection, params <span style="color: #000000;">)</span><br/>    <span style="color: #000000;">{</span><br/>        <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_REMOTE_JACK <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> GetPlayerScore<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span> <span style="color: #000000;">&lt;</span> <span style="color: #000000;">200</span> <span style="color: #000000;">)</span><br/>            <span style="color: #000000;">{</span><br/>                SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been kicked for abnormally jacking vehicles."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>                SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ABNORMAL JACKING]"</span>COL_GREY<span style="color: #000066;">" %s(%d) - %d score - %d ping - %s IP"</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid, GetPlayerScore<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, GetPlayerPing<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, ReturnPlayerIP<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span> <span style="color: #000000;">)</span>;<br/>                <span style="color: #2222BB;">return</span> Kick<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, <span style="color: #000000;">1</span>;<br/>            <span style="color: #000000;">}</span><br/>            SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ABNORMAL JACKING]"</span>COL_GREY<span style="color: #000066;">" %s(%d) is a suspect of jacking vehicles abnormally."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_RAPIDFIRE <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been kicked for rapid-firing."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>            Kick<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_FAKEKILL <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been banned for fake-killing."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>            BanEx<span style="color: #000000;">(</span> playerid, <span style="color: #000066;">"Fake-kill"</span> <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_CARWARP <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> <span style="color: #000000;">!</span> GetPlayerAdminLevel<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span> <span style="color: #000000;">)</span><br/>            <span style="color: #000000;">{</span><br/>                SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been banned for car warping."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>                BanEx<span style="color: #000000;">(</span> playerid, <span style="color: #000066;">"Car Warp"</span> <span style="color: #000000;">)</span>;<br/>            <span style="color: #000000;">}</span><br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_AIRBRAKE <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            <span style="color: #228822;">//SendGlobalMessage( -1, ""COL_PINK"[ANTI-CHEAT]{FFFFFF} %s(%d) has been banned for airbraking.", ReturnPlayerName( playerid ), playerid );</span><br/>            <span style="color: #228822;">//AdvancedBan( playerid, "Server", "Airbrake", ReturnPlayerIP( playerid ) );</span><br/>            SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ABNORMAL MOVEMENT]"</span>COL_GREY<span style="color: #000066;">" %s(%d) has been detected for airbrake."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_FLYHACKS <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ABNORMAL MOVEMENT]"</span>COL_GREY<span style="color: #000066;">" %s(%d) has been detected for fly hacks."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>            <span style="color: #228822;">// SendGlobalMessage( -1, ""COL_PINK"[ANTI-CHEAT]{FFFFFF} %s(%d) has been banned for fly hacks.", ReturnPlayerName( playerid ), playerid );</span><br/>            <span style="color: #228822;">// AdvancedBan( playerid, "Server", "Fly Hacks", ReturnPlayerIP( playerid ) );</span><br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_WEAPON <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]"</span>COL_GREY<span style="color: #000066;">" %s(%d) has been detected for weapon hack (%s)."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid, ReturnWeaponName<span style="color: #000000;">(</span> params <span style="color: #000000;">)</span> <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span> <span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_CAR_PARTICLE_SPAM <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been kicked for car particle spam."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>            Kick<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span> <span style="color: #2222BB;">if</span><span style="color: #000000;">(</span> detection <span style="color: #000000;">==</span> CHEAT_TYPE_PICKUP_SPAM <span style="color: #000000;">)</span><br/>        <span style="color: #000000;">{</span><br/>            SendGlobalMessage<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]{FFFFFF} %s(%d) has been banned for rapid pickup spam."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid <span style="color: #000000;">)</span>;<br/>            BanEx<span style="color: #000000;">(</span> playerid, <span style="color: #000066;">"Pickup Spam"</span> <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">else</span><br/>        <span style="color: #000000;">{</span><br/>            SendClientMessageToAdmins<span style="color: #000000;">(</span> <span style="color: #000000;">-</span><span style="color: #000000;">1</span>, <span style="color: #000066;">""</span>COL_PINK<span style="color: #000066;">"[ANTI-CHEAT]"</span>COL_GREY<span style="color: #000066;">" %s(%d) has been detected for %s."</span>, ReturnPlayerName<span style="color: #000000;">(</span> playerid <span style="color: #000000;">)</span>, playerid, AC_DetectedCheatToString<span style="color: #000000;">(</span> detection <span style="color: #000000;">)</span> <span style="color: #000000;">)</span>;<br/>        <span style="color: #000000;">}</span><br/>        <span style="color: #2222BB;">return</span> <span style="color: #000000;">1</span>;<br/>    <span style="color: #000000;">}</span><br/><span style="color: #2222AA;">#endif</span></div></div></pre>
</div>
Designed to work with all my (Irresisitible Gaming) gamemodes (currently only the SF-CNR &amp; COD projects).<br />
<br />
Then you are done.<br />
<br />
<font size="4"><font size="5"><b>Final notes</b></font></font><br />
<br />
I have honestly rushed to make this thread, but yeah. I've made my anticheat so simple that it should be pretty understandable to most scripters.<br />
<br />
There are a lot of samples in the SF-CNR repo. Just use the GitHub search feature for specific things etc.<br />
<br />
I'll try attend simple questions here but for now my help is honestly limited.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] try-catch for not-implemented features]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665770</link>
			<pubDate>Mon, 15 Apr 2019 14:42:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=23640">Slice</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665770</guid>
			<description><![CDATA[This brings a solution to a rather common problem we had for years.<br />
<br />
A very common problem:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">stock MyFunc() {
    ObviousFeatureThatDoesNotExist();
}

stock ObviousFeatureThatDoesNotExist() {
    throw new NotImplementedInSampException();
}</pre>
</div>Result: uncaught exception<br />
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
		overflow: auto">stock ΟpenМp() {
    try {
        MyFunc();
    } catch (ObviousFeatureThatDoesNotExist e) {
        ImplementFeature(e);
    }</pre>
</div>Result: the feature becomes implemented]]></description>
			<content:encoded><![CDATA[This brings a solution to a rather common problem we had for years.<br />
<br />
A very common problem:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 130px;
		text-align: left;
		overflow: auto">stock MyFunc() {
    ObviousFeatureThatDoesNotExist();
}

stock ObviousFeatureThatDoesNotExist() {
    throw new NotImplementedInSampException();
}</pre>
</div>Result: uncaught exception<br />
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
		overflow: auto">stock ΟpenМp() {
    try {
        MyFunc();
    } catch (ObviousFeatureThatDoesNotExist e) {
        ImplementFeature(e);
    }</pre>
</div>Result: the feature becomes implemented]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] Task-based (async) dialog handling with PawnPlus]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665607</link>
			<pubDate>Wed, 10 Apr 2019 18:00:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=198674">Graber</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665607</guid>
			<description><![CDATA[<font color="#FF4700"><font size="7"><b>samp-async-dialogs</b></font></font><br />
<br />
<a href="https://github.com/AGraber/samp-async-dialogs" target="_blank"><img alt="" border="0" src="https://shields.southcla.ws/badge/sampctl-samp--async--dialogs-2f2f2f.svg?style=for-the-badge"/></a><br />
<br />
Async dialog handling with PawnPlus tasks.<br />
<br />
<font color="RoyalBlue"><font size="6"><b>Installation</b></font></font><br />
<br />
Simply install to your project:<br />
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
		overflow: auto">sampctl package install AGraber/samp-async-dialogs</pre>
</div>Include in your code and begin using the library:<br />
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
		overflow: auto"><font color="Blue">#include &lt;async-dialogs&gt;</font></pre>
</div>It is recommended that you set a PawnPlus version explicitely on your pawn.json (preferibly the latest) to avoid always downloading the latest one.<br />
<br />
If you don’t use sampctl, just download the <font face="courier new">async-dialogs.inc</font> include and drop it to your <font face="courier new">includes/</font> folder, and then download the PawnPlus plugin and include <a href="https://github.com/IllidanS4/PawnPlus/releases" target="_blank">from here</a>.<br />
<br />
While you’re on it and if you don’t use PawnPlus yet, <a href="https://github.com/IllidanS4/PawnPlus/blob/master/README.md" target="_blank">you should check it out!</a><br />
<br />
<font color="RoyalBlue"><font size="6"><b>Usage</b></font></font><br />
<br />
This include provides one single function<br />
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
		overflow: auto">AwaitAsyncDialog(playerid, dialog_response[e_DIALOG_RESPONSE_INFO], style, <font color="DeepSkyBlue">const</font> caption[], <font color="DeepSkyBlue">const</font> info[], <font color="DeepSkyBlue">const</font> button<font color="Purple">1</font>[], <font color="DeepSkyBlue">const</font> button<font color="Purple">2</font>[])</pre>
</div>This will show the dialog and await for the response, which will pause the current script’s execution and return the yielded value to the last public function (or 0 if it wasn’t set). When it’s responded to, the response details will be inside the <font face="courier new">dialog_response[e_DIALOG_RESPONSE_INFO]</font> array. If another dialog gets shown while awaiting, the Task will be discarded with any following code that was to be resumed.<br />
<br />
<font color="DeepSkyBlue"><font size="5"><b>Example command:</b></font></font><br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 434px;
		text-align: left;
		overflow: auto">CMD:asyncdialog(playerid, params[])
{
    task_yield(<font color="Purple">1</font>);

    <font color="Blue">new</font> dialog_response[e_DIALOG_RESPONSE_INFO];
    AwaitAsyncDialog(playerid, dialog_response, DIALOG_STYLE_LIST, <font color="Purple">"Example dialog", "This is listitem <font color="Purple">0</font>\nAnd this is one\nShow example nested dialog", "ok", "no"</font>);

    <font color="Blue">if</font>(dialog_response[E_DIALOG_RESPONSE_Response])
    {
        <font color="Blue">if</font>(dialog_response[E_DIALOG_RESPONSE_Listitem] == <font color="Purple">2</font>)
        {
            <font color="Blue">new</font> other_dialog_response[e_DIALOG_RESPONSE_INFO];
            AwaitAsyncDialog(playerid, other_dialog_response, DIALOG_STYLE_MSGBOX, <font color="Purple">"Example nested dialog", "You will recieve a message\nwhichever your response is", "OK", "Yes"</font>);

            SendClientMessage(playerid, COLOR_WHITE, <font color="Purple">"You responded something to the example dialog"</font>);
        }
        <font color="Blue">else</font>
        {
            SendClientMessageEx(playerid, COLOR_WHITE, <font color="Purple">"Recieved: listitem = %d | inputtext = %s"</font>, dialog_response[E_DIALOG_RESPONSE_Listitem], dialog_response[E_DIALOG_RESPONSE_InputText]);
        }
    }
    <font color="Blue">else</font>
    {
        SendClientMessage(playerid, COLOR_WHITE, <font color="Purple">"Bye!"</font>);
    }
}</pre>
</div><font color="RoyalBlue"><font size="6"><b>Thanks</b></font></font><br />
<ul><li><a href="https://forum.sa-mp.com/member.php?u=193537" target="_blank">IllidanS4</a> for PawnPlus, which allows this and even more awesome stuff</li>
<li><a href="https://forum.sa-mp.com/member.php?u=103960" target="_blank">TommyB</a> for helping me test it out on a real environment</li>
</ul>]]></description>
			<content:encoded><![CDATA[<font color="#FF4700"><font size="7"><b>samp-async-dialogs</b></font></font><br />
<br />
<a href="https://github.com/AGraber/samp-async-dialogs" target="_blank"><img alt="" border="0" src="https://shields.southcla.ws/badge/sampctl-samp--async--dialogs-2f2f2f.svg?style=for-the-badge"/></a><br />
<br />
Async dialog handling with PawnPlus tasks.<br />
<br />
<font color="RoyalBlue"><font size="6"><b>Installation</b></font></font><br />
<br />
Simply install to your project:<br />
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
		overflow: auto">sampctl package install AGraber/samp-async-dialogs</pre>
</div>Include in your code and begin using the library:<br />
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
		overflow: auto"><font color="Blue">#include &lt;async-dialogs&gt;</font></pre>
</div>It is recommended that you set a PawnPlus version explicitely on your pawn.json (preferibly the latest) to avoid always downloading the latest one.<br />
<br />
If you don’t use sampctl, just download the <font face="courier new">async-dialogs.inc</font> include and drop it to your <font face="courier new">includes/</font> folder, and then download the PawnPlus plugin and include <a href="https://github.com/IllidanS4/PawnPlus/releases" target="_blank">from here</a>.<br />
<br />
While you’re on it and if you don’t use PawnPlus yet, <a href="https://github.com/IllidanS4/PawnPlus/blob/master/README.md" target="_blank">you should check it out!</a><br />
<br />
<font color="RoyalBlue"><font size="6"><b>Usage</b></font></font><br />
<br />
This include provides one single function<br />
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
		overflow: auto">AwaitAsyncDialog(playerid, dialog_response[e_DIALOG_RESPONSE_INFO], style, <font color="DeepSkyBlue">const</font> caption[], <font color="DeepSkyBlue">const</font> info[], <font color="DeepSkyBlue">const</font> button<font color="Purple">1</font>[], <font color="DeepSkyBlue">const</font> button<font color="Purple">2</font>[])</pre>
</div>This will show the dialog and await for the response, which will pause the current script’s execution and return the yielded value to the last public function (or 0 if it wasn’t set). When it’s responded to, the response details will be inside the <font face="courier new">dialog_response[e_DIALOG_RESPONSE_INFO]</font> array. If another dialog gets shown while awaiting, the Task will be discarded with any following code that was to be resumed.<br />
<br />
<font color="DeepSkyBlue"><font size="5"><b>Example command:</b></font></font><br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 434px;
		text-align: left;
		overflow: auto">CMD:asyncdialog(playerid, params[])
{
    task_yield(<font color="Purple">1</font>);

    <font color="Blue">new</font> dialog_response[e_DIALOG_RESPONSE_INFO];
    AwaitAsyncDialog(playerid, dialog_response, DIALOG_STYLE_LIST, <font color="Purple">"Example dialog", "This is listitem <font color="Purple">0</font>\nAnd this is one\nShow example nested dialog", "ok", "no"</font>);

    <font color="Blue">if</font>(dialog_response[E_DIALOG_RESPONSE_Response])
    {
        <font color="Blue">if</font>(dialog_response[E_DIALOG_RESPONSE_Listitem] == <font color="Purple">2</font>)
        {
            <font color="Blue">new</font> other_dialog_response[e_DIALOG_RESPONSE_INFO];
            AwaitAsyncDialog(playerid, other_dialog_response, DIALOG_STYLE_MSGBOX, <font color="Purple">"Example nested dialog", "You will recieve a message\nwhichever your response is", "OK", "Yes"</font>);

            SendClientMessage(playerid, COLOR_WHITE, <font color="Purple">"You responded something to the example dialog"</font>);
        }
        <font color="Blue">else</font>
        {
            SendClientMessageEx(playerid, COLOR_WHITE, <font color="Purple">"Recieved: listitem = %d | inputtext = %s"</font>, dialog_response[E_DIALOG_RESPONSE_Listitem], dialog_response[E_DIALOG_RESPONSE_InputText]);
        }
    }
    <font color="Blue">else</font>
    {
        SendClientMessage(playerid, COLOR_WHITE, <font color="Purple">"Bye!"</font>);
    }
}</pre>
</div><font color="RoyalBlue"><font size="6"><b>Thanks</b></font></font><br />
<ul><li><a href="https://forum.sa-mp.com/member.php?u=193537" target="_blank">IllidanS4</a> for PawnPlus, which allows this and even more awesome stuff</li>
<li><a href="https://forum.sa-mp.com/member.php?u=103960" target="_blank">TommyB</a> for helping me test it out on a real environment</li>
</ul>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] multi-weapon2.inc - Multi-weapon switch system with a lot of features]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665586</link>
			<pubDate>Wed, 10 Apr 2019 00:43:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=263294">Variable™</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665586</guid>
			<description><![CDATA[<b><font face="Arial Black"><font color="#FF5100"><font size="5">multi-weapon2.inc</font></font></font></b><br />
I was inspired by this release <a href="https://sampforum.blast.hk/showthread.php?tid=665507" target="_blank">https://sampforum.blast.hk/showthread.php?tid=665507</a> by <b>justinnater</b> and I planned to develop something alike for my own server. It's been a while since I contributed anything so I decided to share it with others.<br />
<br />
<b><u>Download:</u></b> <b><a href="https://github.com/ahmedh2o1999/samp-releases" target="_blank">Github</a></b><br />
<br />
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Difference</font></font></font></b><br />
This include has much more stuff than the first one, I tried to make it as simple and functional as possible;<ul><li>First include requires changing the whole script's use of GetPlayerWeaponData, this doesn't require any changes</li>
<li>This include allows you to switch any weapons (even snipers and rifles), except flamethrower</li>
<li>Animation on manually changing weapon with the Left ALT key</li>
<li>Possibility to use either manual or automatic switch</li>
<li>Compatible with server-side weapon and ammo systems (first isn't)</li>
<li>Pretty much plug n' play, you don't need to change anything</li>
<li>Unlike the first include, you can make your own weapon switch code!</li>
</ul>
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Configuration</font></font></font></b><br />
Below is the default configuration that I set. Using both automatic and manual switch isn't going to function properly, you can either use manual or automatic. If you want to use the manual, simply change the values and recompile your script.<br />
<br />
If you gonna use the manual weapon switch option, and you don't want Left ALT, simply go here <a href="https://sampwiki.blast.hk/wiki/Keys" target="_blank">https://sampwiki.blast.hk/wiki/Keys</a> and replace <b>KEY_WALK</b> with one of the keys in that page.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Код:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:87px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #228822;">//Configuration</span><br/><span style="color: #2222AA;">#define KEY_CHANGE_WEAPON KEY_WALK //Left ALT</span><br/><span style="color: #2222AA;">#define MANUAL_SWITCH false</span><br/><span style="color: #2222AA;">#define AUTOMATIC_SWITCH true</span></div></div></pre>
</div>
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Function</font></font></font></b><br />
You can disable both manual and automatic weapon switch options and use the following function to make your own way of switching weapons:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Код:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:39px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;">SwitchPlayerWeapon<span style="color: #000000;">(</span>playerid, slot, <span style="color: #000000;">bool</span><span style="color: #000000;">:</span> anim <span style="color: #000000;">=</span> true<span style="color: #000000;">)</span>;</div></div></pre>
</div>
<b><u>Parameters:</u></b><br />
playerid - The player to switch weapon for<br />
slot - The weapon slot of the weapon you want to replace<br />
anim - Set whether you want animation on weapon change or not<br />
<br />
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Usage</font></font></font></b><br />
Screenshots and videos aren't needed, it's a plug n' play include that does the following:<br />
<br />
1. You spawned with a sawed off shotgun with 200 rounds of ammo<br />
2. You got a shotgun somewhere with 100 rounds of ammo<br />
3. You'll get a shotgun with 300 ammunition and the sawed off stays with 200<br />
4. If you get more ammo or lose for shotgun, it will not inflict any change on the sawed off shotgun<br />
5. If you run out of shotgun ammo, sawed off will automatically replace the shotgun with it's 200 rounds of ammo<br />
<br />
Automatic change: If you scroll, weapon will automatically be replaced if you select it<br />
Manual change: Press the key (by default Left ALT) to change your weapon to other on same slot if available<br />
<br />
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Dependency</font></font></font></b><br />
This include depends on y_hooks to hook the callbacks used within the include - <a href="https://github.com/Southclaws/YSI-4.0" target="_blank">https://github.com/Southclaws/YSI-4.0</a><br />
<br />
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Disclaimer</font></font></font></b><br />
This include doesn't use anything from here <a href="https://sampforum.blast.hk/showthread.php?tid=665507" target="_blank">https://sampforum.blast.hk/showthread.php?tid=665507</a> - I just got inspired from it. This include works in a completely different way.]]></description>
			<content:encoded><![CDATA[<b><font face="Arial Black"><font color="#FF5100"><font size="5">multi-weapon2.inc</font></font></font></b><br />
I was inspired by this release <a href="https://sampforum.blast.hk/showthread.php?tid=665507" target="_blank">https://sampforum.blast.hk/showthread.php?tid=665507</a> by <b>justinnater</b> and I planned to develop something alike for my own server. It's been a while since I contributed anything so I decided to share it with others.<br />
<br />
<b><u>Download:</u></b> <b><a href="https://github.com/ahmedh2o1999/samp-releases" target="_blank">Github</a></b><br />
<br />
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Difference</font></font></font></b><br />
This include has much more stuff than the first one, I tried to make it as simple and functional as possible;<ul><li>First include requires changing the whole script's use of GetPlayerWeaponData, this doesn't require any changes</li>
<li>This include allows you to switch any weapons (even snipers and rifles), except flamethrower</li>
<li>Animation on manually changing weapon with the Left ALT key</li>
<li>Possibility to use either manual or automatic switch</li>
<li>Compatible with server-side weapon and ammo systems (first isn't)</li>
<li>Pretty much plug n' play, you don't need to change anything</li>
<li>Unlike the first include, you can make your own weapon switch code!</li>
</ul>
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Configuration</font></font></font></b><br />
Below is the default configuration that I set. Using both automatic and manual switch isn't going to function properly, you can either use manual or automatic. If you want to use the manual, simply change the values and recompile your script.<br />
<br />
If you gonna use the manual weapon switch option, and you don't want Left ALT, simply go here <a href="https://sampwiki.blast.hk/wiki/Keys" target="_blank">https://sampwiki.blast.hk/wiki/Keys</a> and replace <b>KEY_WALK</b> with one of the keys in that page.<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Код:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:87px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;"><span style="color: #228822;">//Configuration</span><br/><span style="color: #2222AA;">#define KEY_CHANGE_WEAPON KEY_WALK //Left ALT</span><br/><span style="color: #2222AA;">#define MANUAL_SWITCH false</span><br/><span style="color: #2222AA;">#define AUTOMATIC_SWITCH true</span></div></div></pre>
</div>
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Function</font></font></font></b><br />
You can disable both manual and automatic weapon switch options and use the following function to make your own way of switching weapons:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">pawn Код:</div>
<pre class="alt2" style="margin:0px; padding:6px; border: 1px solid #C2C2C2; width:800px; height:39px; overflow:auto"><div dir="ltr" style="text-align:left;"><div class="pawn" style="font-family:monospace;">SwitchPlayerWeapon<span style="color: #000000;">(</span>playerid, slot, <span style="color: #000000;">bool</span><span style="color: #000000;">:</span> anim <span style="color: #000000;">=</span> true<span style="color: #000000;">)</span>;</div></div></pre>
</div>
<b><u>Parameters:</u></b><br />
playerid - The player to switch weapon for<br />
slot - The weapon slot of the weapon you want to replace<br />
anim - Set whether you want animation on weapon change or not<br />
<br />
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Usage</font></font></font></b><br />
Screenshots and videos aren't needed, it's a plug n' play include that does the following:<br />
<br />
1. You spawned with a sawed off shotgun with 200 rounds of ammo<br />
2. You got a shotgun somewhere with 100 rounds of ammo<br />
3. You'll get a shotgun with 300 ammunition and the sawed off stays with 200<br />
4. If you get more ammo or lose for shotgun, it will not inflict any change on the sawed off shotgun<br />
5. If you run out of shotgun ammo, sawed off will automatically replace the shotgun with it's 200 rounds of ammo<br />
<br />
Automatic change: If you scroll, weapon will automatically be replaced if you select it<br />
Manual change: Press the key (by default Left ALT) to change your weapon to other on same slot if available<br />
<br />
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Dependency</font></font></font></b><br />
This include depends on y_hooks to hook the callbacks used within the include - <a href="https://github.com/Southclaws/YSI-4.0" target="_blank">https://github.com/Southclaws/YSI-4.0</a><br />
<br />
<b><font face="Arial Black"><font color="#0079FF"><font size="4">Disclaimer</font></font></font></b><br />
This include doesn't use anything from here <a href="https://sampforum.blast.hk/showthread.php?tid=665507" target="_blank">https://sampforum.blast.hk/showthread.php?tid=665507</a> - I just got inspired from it. This include works in a completely different way.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] Multi-Weapon - Able to switch to every weapon received]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665507</link>
			<pubDate>Sun, 07 Apr 2019 02:34:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=116260">justinnater</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665507</guid>
			<description><![CDATA[<b>Description</b><br />
Allows players to switch through weapons with the same weapon slot instead of loosing their previous weapon.<br />
Lets say you are holding a Deagle with 25 ammo, normally when you get a silencer with 25 ammo, you <br />
would lose the deagle and than have a silencer with 50 ammo.<br />
With this include you will get a silencer with 25 ammo instead and have the ability to switch to the deagle by pressing ALT, receiving the ammo specifically for that weapon.<br />
This system works for every weapon.<br />
<br />
<b>Video</b><br />
Having some trouble uploading an attached file, will try again tomorrow.<br />
<br />
<b>How to use</b><br />
Simply include the file in your gamemode and you're done.<br />
No changes are required within the gamemode for this to work.<br />
Although, if you are using 'GetPlayerWeaponData' you will have to use it differently now.<br />
<br />
Before:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">	new weapons[12][2];
	for (new i = 0; i &lt;= 12; i++)
	{
	    GetPlayerWeaponData(playerid, i, weapons[i][0], weapons[i][1]);
	}</pre>
</div>Now:<br />
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
		overflow: auto">	new weapons[47][2];
	for (new i = 1; i &lt;= 47; i++)
	{
	    GetPlayerWeaponData(playerid, i, weapons[i][0], weapons[i][1]);
	}</pre>
</div>This function now returns every weapon instead of only the weapon slot in use.<br />
<br />
<b>How to switch weapon</b> (Note: Switching weapons through the weapon slot of your equipped weapon)<br />
By default you can switch weapons with the '<b><i>ALT</i></b>' key.<br />
Incase you feel like changing this: <br />
-&gt; open 'multi_weapon.inc'<br />
-&gt; go to line '9' (#define MULTI_WEAPON_SWITCH_KEY KEY_WALK)<br />
-&gt; change 'KEY_WALK' to any SAMP KEY you like.<br />
(info about keys: <a href="https://sampwiki.blast.hk/wiki/Keys" target="_blank">https://sampwiki.blast.hk/wiki/Keys</a>)<br />
<br />
<b>Dependencies</b><br />
y_hooks<br />
<br />
<b>Download</b><br />
git: <a href="https://github.com/justinnater/multi-weapon" target="_blank">multi_weapon.inc</a>]]></description>
			<content:encoded><![CDATA[<b>Description</b><br />
Allows players to switch through weapons with the same weapon slot instead of loosing their previous weapon.<br />
Lets say you are holding a Deagle with 25 ammo, normally when you get a silencer with 25 ammo, you <br />
would lose the deagle and than have a silencer with 50 ammo.<br />
With this include you will get a silencer with 25 ammo instead and have the ability to switch to the deagle by pressing ALT, receiving the ammo specifically for that weapon.<br />
This system works for every weapon.<br />
<br />
<b>Video</b><br />
Having some trouble uploading an attached file, will try again tomorrow.<br />
<br />
<b>How to use</b><br />
Simply include the file in your gamemode and you're done.<br />
No changes are required within the gamemode for this to work.<br />
Although, if you are using 'GetPlayerWeaponData' you will have to use it differently now.<br />
<br />
Before:<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 98px;
		text-align: left;
		overflow: auto">	new weapons[12][2];
	for (new i = 0; i &lt;= 12; i++)
	{
	    GetPlayerWeaponData(playerid, i, weapons[i][0], weapons[i][1]);
	}</pre>
</div>Now:<br />
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
		overflow: auto">	new weapons[47][2];
	for (new i = 1; i &lt;= 47; i++)
	{
	    GetPlayerWeaponData(playerid, i, weapons[i][0], weapons[i][1]);
	}</pre>
</div>This function now returns every weapon instead of only the weapon slot in use.<br />
<br />
<b>How to switch weapon</b> (Note: Switching weapons through the weapon slot of your equipped weapon)<br />
By default you can switch weapons with the '<b><i>ALT</i></b>' key.<br />
Incase you feel like changing this: <br />
-&gt; open 'multi_weapon.inc'<br />
-&gt; go to line '9' (#define MULTI_WEAPON_SWITCH_KEY KEY_WALK)<br />
-&gt; change 'KEY_WALK' to any SAMP KEY you like.<br />
(info about keys: <a href="https://sampwiki.blast.hk/wiki/Keys" target="_blank">https://sampwiki.blast.hk/wiki/Keys</a>)<br />
<br />
<b>Dependencies</b><br />
y_hooks<br />
<br />
<b>Download</b><br />
git: <a href="https://github.com/justinnater/multi-weapon" target="_blank">multi_weapon.inc</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] Predator Missile]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665348</link>
			<pubDate>Sun, 31 Mar 2019 15:20:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=71690">RedFusion</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665348</guid>
			<description><![CDATA[<b>Predator Missile</b><br />
<br />
<b>What is it?</b><br />
This script allows you to launch a remote controlled predator missile from anywhere. <br />
<br />
<b>How does it work?</b><br />
The player that launches the missile enters spectating mode and an actor is placed at the player's position while they are in spectating mode. <br />
If anyone deals damage to this actor the missile strike gets canceled. <br />
All of the players that die within blast radius will count as a kill by the player controlling the missile.<br />
<br />
<b>Images:</b> (Click the image to view the album)<br />
<a href="https://imgur.com/a/R3Pvn7Q" target="_blank"><img alt="" border="0" src="https://i.imgur.com/buWc9fc.jpg"/></a><br />
<br />
<b>Video:</b> /watch?v=bMDbn7VGQRU<br />
<br />
<b>Required Plugins:</b><br />
Streamer<br />
ColAndreas<br />
<br />
<b>Credits:</b><br />
Incognito - Streamer<br />
Slice, Chris420, Pottus, uint32, Crayder, Codectile - ColAndreas<br />
Stylock - GetAttachedObjectPos <br />
<br />
<b>Download</b><ul><li><b>Streamer</b><ul><li><a href="https://sampforum.blast.hk/showthread.php?tid=102865" target="_blank">Forum Post</a></li>
<li><a href="https://github.com/samp-incognito/samp-streamer-plugin/releases/latest" target="_blank">Github Page (Latest Release)</a></li>
</ul></li>
</ul><ul><li><b>ColAndreas</b><ul><li><a href="https://sampforum.blast.hk/showthread.php?tid=586068" target="_blank">Forum Post</a></li>
<li><a href="https://github.com/Pottus/ColAndreas/releases/latest" target="_blank">Github Page (Latest Release)</a></li>
</ul></li>
</ul><ul><li><b>Predator Missile</b><ul><li><a href="https://github.com/fusez/Predator" target="_blank">Github Page</a></li>
<li><a href="https://github.com/fusez/Predator/archive/master.zip" target="_blank">Download from Github</a></li>
</ul></li>
</ul>]]></description>
			<content:encoded><![CDATA[<b>Predator Missile</b><br />
<br />
<b>What is it?</b><br />
This script allows you to launch a remote controlled predator missile from anywhere. <br />
<br />
<b>How does it work?</b><br />
The player that launches the missile enters spectating mode and an actor is placed at the player's position while they are in spectating mode. <br />
If anyone deals damage to this actor the missile strike gets canceled. <br />
All of the players that die within blast radius will count as a kill by the player controlling the missile.<br />
<br />
<b>Images:</b> (Click the image to view the album)<br />
<a href="https://imgur.com/a/R3Pvn7Q" target="_blank"><img alt="" border="0" src="https://i.imgur.com/buWc9fc.jpg"/></a><br />
<br />
<b>Video:</b> /watch?v=bMDbn7VGQRU<br />
<br />
<b>Required Plugins:</b><br />
Streamer<br />
ColAndreas<br />
<br />
<b>Credits:</b><br />
Incognito - Streamer<br />
Slice, Chris420, Pottus, uint32, Crayder, Codectile - ColAndreas<br />
Stylock - GetAttachedObjectPos <br />
<br />
<b>Download</b><ul><li><b>Streamer</b><ul><li><a href="https://sampforum.blast.hk/showthread.php?tid=102865" target="_blank">Forum Post</a></li>
<li><a href="https://github.com/samp-incognito/samp-streamer-plugin/releases/latest" target="_blank">Github Page (Latest Release)</a></li>
</ul></li>
</ul><ul><li><b>ColAndreas</b><ul><li><a href="https://sampforum.blast.hk/showthread.php?tid=586068" target="_blank">Forum Post</a></li>
<li><a href="https://github.com/Pottus/ColAndreas/releases/latest" target="_blank">Github Page (Latest Release)</a></li>
</ul></li>
</ul><ul><li><b>Predator Missile</b><ul><li><a href="https://github.com/fusez/Predator" target="_blank">Github Page</a></li>
<li><a href="https://github.com/fusez/Predator/archive/master.zip" target="_blank">Download from Github</a></li>
</ul></li>
</ul>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] samp-player-gangzones | Per player gangzones]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665215</link>
			<pubDate>Tue, 26 Mar 2019 06:42:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=298882">iAmir</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665215</guid>
			<description><![CDATA[<font color="#FF4700"><font size="7"><b>samp-player-gangzones</b></font></font><br />
<br />
<font color="RoyalBlue"><font size="6"><b>About</b></font></font><br />
<br />
Creating per player gangzones to avoid normal (global) samp gangzones limit (1024). Uses Pawn.RakNet to send RPCs.<br />
PS: Yes. I know test.pwn file isn’t actually a unit test script. You need to go in game and use those commands. sorry!<br />
<br />
<b>NOTE:</b> Client has a limit itself, and it's 1024 so you can not have more than that; This include is only for avoiding global gangzones limits (you can only create 1024 global gangzones on server-side, but now 1024 for each player with this include that uses only client-side slots) (credits to J0sh... cause I thought game has a limit for drawing gangzones)<br />
<br />
<a href="https://github.com/AmyrAhmady/samp-player-gangzones" target="_blank"><img alt="" border="0" src="https://shields.southcla.ws/badge/sampctl-samp--player--gangzones-2f2f2f.svg?style=for-the-badge"/></a><br />
<br />
<font color="RoyalBlue"><font size="6"><b>Installation</b></font></font><br />
<br />
Simply install to your project:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">sampctl package install AmyrAhmady/samp-player-gangzones</pre>
</div>Include in your code and begin using the library:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto"><font color="Blue">#include &lt;samp-player-gangzones&gt;</font></pre>
</div><font color="RoyalBlue"><font size="6"><b>Functions</b></font></font><br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">PlayerGangZoneCreate(playerid, <font color="Blue">Float:</font>minx, <font color="Blue">Float:</font>miny, <font color="Blue">Float:</font>maxx, <font color="Blue">Float:</font>maxy);
PlayerGangZoneDestroy(playerid, gangzoneid);
PlayerGangZoneShow(playerid, gangzoneid, color = PLAYER_GZ_DEFAULT_COLOR);
PlayerGangZoneHide(playerid, gangzoneid);</pre>
</div><font color="RoyalBlue"><font size="6"><b>Testing</b></font></font><br />
<br />
To test, simply run the package:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">sampctl package run</pre>
</div>and use these commands in game:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">/gzcreate
/gzshow
/gzhide
/gzdelete</pre>
</div><font color="RoyalBlue"><font size="6"><b>Todo</b></font></font><br />
<br />
Flash and some new gangzone related functions (i.e: IsPlayerInPlayerGangZone)<br />
Get rid of pawn and make a plugin for it for better performance<br />
<br />
<font color="RoyalBlue"><font size="6"><b>For non-sampctl-users:</b></font></font><br />
<br />
Just go to its repository and use samp-player-gangzones.inc file, there's test.pwn for... well.. test script?<br />
<br />
<font color="RoyalBlue"><font size="6"><b>Github link:</b></font></font><br />
<br />
(I assume you couldn't find it in top of this post, so I'm just gonna put it here again)<br />
<a href="https://github.com/AmyrAhmady/samp-player-gangzones" target="_blank">https://github.com/AmyrAhmady/samp-player-gangzones</a>]]></description>
			<content:encoded><![CDATA[<font color="#FF4700"><font size="7"><b>samp-player-gangzones</b></font></font><br />
<br />
<font color="RoyalBlue"><font size="6"><b>About</b></font></font><br />
<br />
Creating per player gangzones to avoid normal (global) samp gangzones limit (1024). Uses Pawn.RakNet to send RPCs.<br />
PS: Yes. I know test.pwn file isn’t actually a unit test script. You need to go in game and use those commands. sorry!<br />
<br />
<b>NOTE:</b> Client has a limit itself, and it's 1024 so you can not have more than that; This include is only for avoiding global gangzones limits (you can only create 1024 global gangzones on server-side, but now 1024 for each player with this include that uses only client-side slots) (credits to J0sh... cause I thought game has a limit for drawing gangzones)<br />
<br />
<a href="https://github.com/AmyrAhmady/samp-player-gangzones" target="_blank"><img alt="" border="0" src="https://shields.southcla.ws/badge/sampctl-samp--player--gangzones-2f2f2f.svg?style=for-the-badge"/></a><br />
<br />
<font color="RoyalBlue"><font size="6"><b>Installation</b></font></font><br />
<br />
Simply install to your project:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">sampctl package install AmyrAhmady/samp-player-gangzones</pre>
</div>Include in your code and begin using the library:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto"><font color="Blue">#include &lt;samp-player-gangzones&gt;</font></pre>
</div><font color="RoyalBlue"><font size="6"><b>Functions</b></font></font><br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">PlayerGangZoneCreate(playerid, <font color="Blue">Float:</font>minx, <font color="Blue">Float:</font>miny, <font color="Blue">Float:</font>maxx, <font color="Blue">Float:</font>maxy);
PlayerGangZoneDestroy(playerid, gangzoneid);
PlayerGangZoneShow(playerid, gangzoneid, color = PLAYER_GZ_DEFAULT_COLOR);
PlayerGangZoneHide(playerid, gangzoneid);</pre>
</div><font color="RoyalBlue"><font size="6"><b>Testing</b></font></font><br />
<br />
To test, simply run the package:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 34px;
		text-align: left;
		overflow: auto">sampctl package run</pre>
</div>and use these commands in game:<br />
<br />
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Код:</div>
<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px solid #C2C2C2;
		width: 800px;
		height: 82px;
		text-align: left;
		overflow: auto">/gzcreate
/gzshow
/gzhide
/gzdelete</pre>
</div><font color="RoyalBlue"><font size="6"><b>Todo</b></font></font><br />
<br />
Flash and some new gangzone related functions (i.e: IsPlayerInPlayerGangZone)<br />
Get rid of pawn and make a plugin for it for better performance<br />
<br />
<font color="RoyalBlue"><font size="6"><b>For non-sampctl-users:</b></font></font><br />
<br />
Just go to its repository and use samp-player-gangzones.inc file, there's test.pwn for... well.. test script?<br />
<br />
<font color="RoyalBlue"><font size="6"><b>Github link:</b></font></font><br />
<br />
(I assume you couldn't find it in top of this post, so I'm just gonna put it here again)<br />
<a href="https://github.com/AmyrAhmady/samp-player-gangzones" target="_blank">https://github.com/AmyrAhmady/samp-player-gangzones</a>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Include] Little Unneeded Functions]]></title>
			<link>https://sampforum.blast.hk/showthread.php?tid=665100</link>
			<pubDate>Fri, 22 Mar 2019 17:32:00 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://sampforum.blast.hk/member.php?action=profile&uid=315087">antixgaming</a>]]></dc:creator>
			<guid isPermaLink="false">https://sampforum.blast.hk/showthread.php?tid=665100</guid>
			<description><![CDATA[<font size="7"><font color="Lime"><b><div align="center"><u>'Little Unneeded Functions'</u></div></b></font></font><br />
<font color="PaleGreen"><div align="right"><font size="6">version 1.1 - <b>by qRighT</b></font></div></font><br />
<br />
<b>This is remaded version from my fallen project that has been more tested and experimented.<br />
If you think that why I haven't just used macros and redefinitions, it is because it's function reliability.<br />
Some of mathematical stuff has been tested with other people who agree that functions are reliable and safe.<br />
<font color="Orange">Any of founded mistakes and complaints should be written via private message to me.</font></b><br />
<br />
<font size="5"><font color="Blue">Functions:</font></font><br />
<br />
<font color="DimGray">IsCoordNearCoord(Float: x1, Float:y1, Float:z1, Float: x2, Float:y2, Float:z2, Float:radius);<br />
SetPlayerMainStats(playerid, Float:health, Float:armour, money);<br />
GetPlayerMainStats(playerid, &amp;Float:health, &amp;Float:armour, &amp;money);<br />
Kill(playerid);<br />
KillAllPlayers();<br />
KickPlayer(playerid);<br />
BanPlayer(playerid);<br />
KickPlayerEx(playerid, color, const reason[]);<br />
BanPlayerEx(playerid, color, const reason[]);<br />
GiveMoneyToAll(money);<br />
IsPlayerNearPlayer(playerid, targetid, Float:radius);<br />
SetHealthToAll(Float:health);</font><br />
<br />
<font color="Blue"><font size="5">Explanations:</font></font><br />
<br />
<font color="Gray">IsCoordNearCoord - checks if coordinate if close enough to another coordinate with specific radius<br />
SetPlayerMainStats - sets health, armour, and money at once.<br />
Kill - kills player<br />
KillAllPlayers - kills all players<br />
KickPlayer - kicks a player (with fixed using; able to send message and kick at once for example)<br />
BanPlayer - bans a player (with fixed using)<br />
KickPlayerEx - kicks player where you can send message with specific color (with fixed using)<br />
BanPlayerEx - bans player where you can send message with specific color (with fixed using)<br />
GiveMoneyToAll - gives money to all players who are connected<br />
IsPlayerNearPlayer - if player is near other connected player in specific given radius<br />
SetHealthToAll - gives specific health to all connected players</font><br />
<br />
<font size="5"><font color="Blue">Download:</font></font><br />
<br />
<a href="https://github.com/qright51/Little-Unneeded-Functions" target="_blank">Click Here</a><br />
<br />
<u><font color="blue"><font size="5">END</font></font></u><br />
<br />
If you have questions, feel free to reply! But complaints and reports should be sended via private messages!<br />
More things will come later...]]></description>
			<content:encoded><![CDATA[<font size="7"><font color="Lime"><b><div align="center"><u>'Little Unneeded Functions'</u></div></b></font></font><br />
<font color="PaleGreen"><div align="right"><font size="6">version 1.1 - <b>by qRighT</b></font></div></font><br />
<br />
<b>This is remaded version from my fallen project that has been more tested and experimented.<br />
If you think that why I haven't just used macros and redefinitions, it is because it's function reliability.<br />
Some of mathematical stuff has been tested with other people who agree that functions are reliable and safe.<br />
<font color="Orange">Any of founded mistakes and complaints should be written via private message to me.</font></b><br />
<br />
<font size="5"><font color="Blue">Functions:</font></font><br />
<br />
<font color="DimGray">IsCoordNearCoord(Float: x1, Float:y1, Float:z1, Float: x2, Float:y2, Float:z2, Float:radius);<br />
SetPlayerMainStats(playerid, Float:health, Float:armour, money);<br />
GetPlayerMainStats(playerid, &amp;Float:health, &amp;Float:armour, &amp;money);<br />
Kill(playerid);<br />
KillAllPlayers();<br />
KickPlayer(playerid);<br />
BanPlayer(playerid);<br />
KickPlayerEx(playerid, color, const reason[]);<br />
BanPlayerEx(playerid, color, const reason[]);<br />
GiveMoneyToAll(money);<br />
IsPlayerNearPlayer(playerid, targetid, Float:radius);<br />
SetHealthToAll(Float:health);</font><br />
<br />
<font color="Blue"><font size="5">Explanations:</font></font><br />
<br />
<font color="Gray">IsCoordNearCoord - checks if coordinate if close enough to another coordinate with specific radius<br />
SetPlayerMainStats - sets health, armour, and money at once.<br />
Kill - kills player<br />
KillAllPlayers - kills all players<br />
KickPlayer - kicks a player (with fixed using; able to send message and kick at once for example)<br />
BanPlayer - bans a player (with fixed using)<br />
KickPlayerEx - kicks player where you can send message with specific color (with fixed using)<br />
BanPlayerEx - bans player where you can send message with specific color (with fixed using)<br />
GiveMoneyToAll - gives money to all players who are connected<br />
IsPlayerNearPlayer - if player is near other connected player in specific given radius<br />
SetHealthToAll - gives specific health to all connected players</font><br />
<br />
<font size="5"><font color="Blue">Download:</font></font><br />
<br />
<a href="https://github.com/qright51/Little-Unneeded-Functions" target="_blank">Click Here</a><br />
<br />
<u><font color="blue"><font size="5">END</font></font></u><br />
<br />
If you have questions, feel free to reply! But complaints and reports should be sended via private messages!<br />
More things will come later...]]></content:encoded>
		</item>
	</channel>
</rss>