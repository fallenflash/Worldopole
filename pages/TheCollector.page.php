<div class="row">
	<div class="col-sm-8">
		<h1>The Collector</h1>

		<p>
			The Newest bot to hit the channels of WHG Discord. This not only will fill the rolls of the previous bots, but adds in customizable direct message notifications.&nbsp; Here is a short guide full of examples on what to do and how to do it.
		</p>
	</div>

	<div class="col-4">
		<img
			style="float: right;"
			src="https://teamrocketmap.ddns.net/images/collector.png"
			width="308"
			height="185"
		>
	</div>
</div>

<div class="row" style="padding: 20px;">
<span >
	<p>
		Bot commands can be initially given in the <strong>#bot-commands</strong> channel. After you receive your first message from the bot though you can issue commands through either that message or this channel.&nbsp;
		<br>
		<br>
</p>
</span>
</div>
<img id="commandspic"
		style="float: right; margin: 25px;"
		src="https://teamrocketmap.ddns.net/images/commands.png"
		src="https://teamrocketmap.ddns.net/images/commands.png"
		alt="commands"

		class="image-responsive pull-right mx-1-xs">
	<h3>
		<span style="text-decoration: underline;">Bot Commands</span>
	</h3>

<p>
		<span style="text-decoration: underline;">Alerts come in 3 Flavors</span>
</p>
	<ul>
		<li>
			<strong>Pokémon</strong> - for your regular spawn alerts
		</li>

		<li>
			<strong>Raids</strong> - alerts for eggs and bosses
		</li>

		<li>
			<strong>Presets</strong> - these are grouped "preset" alerts designed by us
		</li>
	</ul>

	<p>
		For standard users, you can have up to 7 Pokémon, 4 Raids, and 3 Presets
	</p>


<h3>
	<span style="text-decoration: underline;">Pokémon Alerts</span>
</h3>	
<p>&nbsp;</p>

<p>
	Commands for Pokémon Alerts are given in the form of
	<br>
	<br>
	<strong>!command Pokémon IV CP Region</strong>
</p>

<p>
	<strong>
		<span style="text-decoration: underline;">Commands</span>
	</strong>

	are listed in the screenshot, and also as a pinned message in the channel.</p>

<p>
	<strong>
		<span style="text-decoration: underline;">Pokémon:</span>
	</strong>
	This refers to the Pokémon's name, you can also choose more than one Pokémon in a single command by enclosing its name in &lt;&nbsp;&nbsp; &gt;.&nbsp; This does count towards your total limit for alerts though. Example:
</p>

<p>
	<strong>!addpokemon marill</strong>

	<br>
	or
	<br>

	<strong>
		!addpokemon &lt;marill, azumarill&gt;
	</strong>

	<br>
	<br>
</p>

<p>
	<strong>
		<span style="text-decoration: underline;">IV:</span>
	</strong>

	If you only want to receive alerts for a Pokémon if they are over a certain IV, include this after the Pokémon's name.&nbsp; Example:
</p>

<p>
	<strong>!addpokemon feebas 95iv</strong>
</p>

<p>
	If you want to include Pokémon in a range of IVs, or under a certain IV use the format &lt;minIV,maxIV&gt;. Example:
</p>

<p>
	<strong>
		!addpokemon dragonite &lt;0iv,10iv&gt;
	</strong>
</p>

<p>&nbsp;</p>

<p>
	<strong>
		<span style="text-decoration: underline;">CP</span>

		:
	</strong>

	CP modifiers work in the same way that IVs do. Example:
</p>

<p>
	<strong>!addpokemon eevee 700cp</strong>

	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or

	<br>

	<strong>
		!addpokemon onyx &lt;2900cp,3500cp&gt;
	</strong>
</p>
	
<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>


<p>
	<span style="text-decoration: underline;">
		
	</span>

<div class="row" style="padding: 10px;">

<img
		style="float:left;  margin: 15px; width: 50%; max-width: 300px;"
		src="https://teamrocketmap.ddns.net/images/regions.png"
		alt="https://teamrocketmap.ddns.net/images/collector.png"
		class="pull-left image-responsive"
	>

	<strong>
		<span style="text-decoration: underline;">Regions:</span>
	</strong>

    Regions are to control the areas over which you get notifications from. (a complete map of regions can be found

	<a
		title="MapLink"
		href="https://teamrocketmap.ddns.net/warrentonstats/whgmap"
	>Here</a>)
<br>
Regions whose names start with a - are larger areas comprised of multiple sub-regions.&nbsp; You can choose these or more precise locations, or any combination thereof.&nbsp; If you do not specify a region you will get alerts from our total coverage area. (This is ok for Pokemon such as Unown or Tyranitar, but it advised against for regularly spawning Pokemon.)&nbsp;&nbsp; Regions, like Pokemon names, can be assigned individually, or multiples at a time.&nbsp; These, however, do not count against your total limit.&nbsp; Regions can either be fully spelled out, or you can use their "alias". Example:
</p>

<p>
	<strong>!addpokemon unown</strong>

	<br>
	or

	<br>

	<strong>!addpokemon larvatar dv</strong>

	<br>
	or

	<br>

	<strong>
		!addpokemon pidgey &lt;-warrenton, dv, an, -bealeton&gt;
	</strong>

	<br>
	<br>
	This gives you the unown everywhere on the map, the larvatar in the Dominion Valley region or pidgey in the entire Warrenton and Bealeton areas, as well as Dominion Valley, and Auburn.

	<br>
	<br>
	These settings can all be combined in any way you want. Example
</p>


	<img
		style="width: 70%; max-width: 400px; margin-left: 15%; margin-right: 10%; margin-top: 20px;"
		src="https://teamrocketmap.ddns.net/images/example.png"
		alt="https://teamrocketmap.ddns.net/images/collector.png"
		class="image-responsive"
	>
	</div>

<p>
	<strong>
		<span style="text-decoration: underline;">!delpokemon</span>
	</strong>

	works the same way as add, but to take away filters you've requested.&nbsp; the !del command is used for deleting a pokemon alert individually, and the command should match the alert.. Example:
</p>

<p>
	If you had the filters:

	<br>
	Pikachu 80iv -haymarket&nbsp;&nbsp;&nbsp; and&nbsp;&nbsp;&nbsp; Pikachu -warrenton

	<br>
	Then
</p>

<p>
	<strong>
		!delpokemon Pikachu -warrenton,
	</strong>

	&nbsp;&nbsp;&nbsp;&nbsp; would only delete the alert in warrenton

	<br>

	<strong>!delpokemon Pikachu,</strong>

	<p>would not delete either, nor would</p>
	
	<strong>
	!delpokemon pikachu 80iv
	</strong>
	</p>so be careful when deleting alerts, and it is advised you check your exact alerts with !pokemonsettings first</P>
</p>

<p>
	<strong>
		<span style="text-decoration: underline;">!clearpokemon</span>
	</strong>

	works much in the same way as delete but is better to clear multiple filters at once, as in the second example from above.
</p>

<p>
	<strong>
		<span style="text-decoration: underline;">!pokemonsetting</span>
	</strong>

	shows all your current Pokémon filters.

	<br>
	<br>

	<strong>
		<span style="text-decoration: underline;">!resetpokemon</span>
	</strong>

	erases all of your filters
</p>

<h3>
	<span style="text-decoration: underline;">Raid Alerts</span>
</h3>

<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Raid alerts function in much of the same way as Pokemon, except without the IV or CP.&nbsp; In addition to the region, you may specify a specific gym. Similar to Pokemon if you are specifying more than one location&nbsp;

	<strong>OR</strong>

	the gym has spaces in its name. enclose with &lt; &nbsp;&nbsp; &gt;. Example:
</p>

<p>
	<strong>!addraid kyogre brentmoore</strong>

	<br>

	<strong>
		!addraid machamp &lt;long park "2" sign&gt;
	</strong>
</p>

<p>&nbsp;</p>

<h3>
	<span style="text-decoration: underline;">Presets</span>
</h3>

<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; As with raids, function very similar to the Pokemon commands.&nbsp; A major difference being the add function.&nbsp;&nbsp; Instead of !addpreset its !loadpreset. Example:
</p>

<p>
	<strong>!loadpreset 5star -bristow</strong>

	<br>
	or

	<br>

	<strong>
		!loadpreset &lt;Sattackers, Sdefenders&gt;
	</strong>
</p>

<p>
	<strong>
		<span style="text-decoration: underline;">!presets</span>
	</strong>

	or

	<strong>
		<span style="text-decoration: underline;">!presetlist</span>
	</strong>

	will give you a list of available presets.&nbsp; below is a description of each
</p>

<p>
	<span style="text-decoration: underline;">Sattackers</span>

	- This is for spawns of Pokémon rated S Class Gym Attackers
</p>

<p>
	<span style="text-decoration: underline;">Sdefenders</span>

	-This is for spawns of Pokémon rated S Class Gym Defenders
</p>

<p>
	<span style="text-decoration: underline;">Mythic</span>

	- This is a grouping of the spawns of the rarest Pokémon of our area
</p>

<p>
	<span style="text-decoration: underline;">5star</span>

	- This is to get alerts from Pokémon 100iv and lvl35+
</p>

<p>
	<span style="text-decoration: underline;">100UR</span>

	- This covers all The Rarest of the Pokemon that are 100iv regardless of level.
</p>

<p>
	<span style="text-decoration: underline;">100R</span>

	- This covers all Rare Pokemon that are 100iv regardless of level.
</p>
<p>
	<span style="text-decoration: underline;">100U</span>

	- This covers all Uncommon Pokemon that are 100iv regardless of level.
</p>
<p>
	<span style="text-decoration: underline;">100C</span>

	- This covers all Common Pokemon that are 100iv regardless of level.
</p>

<p>
	<span style="text-decoration: underline;">EX3</span>

	- This gives alerts to all lvl 3 raids at Ex-Raid eligible gyms
</p>

<p>
	<span style="text-decoration: underline;">EX4</span>

	- This gives alerts to all lvl 4 raids at Ex-Raid eligible gyms
</p>

<p>
	<span style="text-decoration: underline;">ExLegend</span>

	- This gives alerts to both lvl 5 raids and eggs at Ex-raid eligible gyms
</p>

<p>
	<span style="text-decoration: underline;">Waldos</span>

	- Where is he, I don't know.&nbsp; A collection of the rarest gen 3 Pokemon
</p>

<p>
	<span style="text-decoration: underline;">CantWait</span>

	- Neither can I.&nbsp; This is full of unreleased gen3 Pokemon, so you can be the first to know.
</p>

<p>&nbsp;</p>

<h3>
	<span style="text-decoration: underline;">Additional Commands</span>
</h3>

<p>&nbsp;</p>

<p>
	<span style="text-decoration: underline;">
		<strong>Stats:</strong>

		<br>
	</span>
</p>

<p>
	This Brings you some simple stats similar to our stats site.&nbsp;&nbsp; You can check them by
</p>

<p>
	<strong>
		!stats Pokemon number unitoftime&nbsp;
	</strong>
</p>

<p>Example:</p>

<p style="text-align: left;">
	<strong>!stats eevee 1 week</strong>
	</p>
	<img
		style="float: right; width: 80%; max-width: 400px;"
		src="https://teamrocketmap.ddns.net/images/stats.png"
		alt="https://teamrocketmap.ddns.net/images/collector.png"
	>


<p>
	the units of time it accepts are second, hour, day, week, month, and year.
</p>

<p>&nbsp;</p>

<p>
	<strong>
		<span style="text-decoration: underline;">Regions</span>
	</strong>
</p>

<p>
	The !regions or !regionlist will bring up a quick list of available regions.&nbsp; again a map of these regions can be found

	<a
		title="MapLink"
		href="https://teamrocketmap.ddns.net/warrentonstats/whgmap"
	>Here</a>
</p>

<p>
	<strong>
		<span style="text-decoration: underline;">Pause</span>
	</strong>
</p>

<p>
	If at any time you wish to stop alerts, but don't want to lose your settings, you can use the !pause command.&nbsp; When you wish to resume them, just do so with !unpause
</p>

<p>
	<strong>
		<span style="text-decoration: underline;">Reset</span>
	</strong>
</p>

<p>
	The !reset command resets all Pokemon, raid, and preset alerts
</p>

<p>
	<span style="text-decoration: underline;">
		<strong>Settings</strong>
	</span>
</p>

<p>
	The !settings command shows you all of your current filters
</p>

<p>
	<strong>
		<span style="text-decoration: underline;">Help</span>
	</strong>
</p>

<p>
	!help will show you a quick list of all commands.
</p>
	</div>