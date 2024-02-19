<?php
	/* 	__________ ____ ___  ___________________.___  _________ ___ ___  
		\______   \    |   \/  _____/\_   _____/|   |/   _____//   |   \ 
		 |    |  _/    |   /   \  ___ |    __)  |   |\_____  \/    ~    \
		 |    |   \    |  /\    \_\  \|     \   |   |/        \    Y    /
		 |______  /______/  \______  /\___  /   |___/_______  /\___|_  / 
				\/                 \/     \/                \/       \/  	
							www.bugfish.eu
							
	    Bugfish Fast PHP Page Framework
		Copyright (C) 2024 Jan Maurice Dahlmanns [Bugfish]

		This program is free software: you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 3 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program.  If not, see <https://www.gnu.org/licenses/>.
	*/
	if(!is_array($object)) { @http_response_code(404); Header("Location: ../"); exit(); }
?>	<div class="container px-6 mx-auto grid">
          
		<?php hive__windmill_h2($object["lang"]->translate("g_gggithub")); ?>
		  <?php hive__windmill_alert_url($object["lang"]->translate("g_seegit"), "bx bxs-star", "https://github.com/bugfishtm/fast-php-page", true, false, $object["lang"]->translate("g_seegitm")); ?>
		  <?php hive__windmill_alert_url($object["lang"]->translate("g_seedoc"), "bx bxs-star", "https://bugfishtm.github.io/fast-php-page/", true, false, $object["lang"]->translate("g_seegitm")); ?>
		  
		<?php hive__windmill_h2($object["lang"]->translate("g_info")); ?>

		<?php hive__windmill_box_full($object["lang"]->translate("g_info_t")); ?>

		<?php hive__windmill_h2($object["lang"]->translate("g_goal")); ?>		
		
		<?php hive__windmill_box_full($object["lang"]->translate("g_goal_t")); ?>

		<?php hive__windmill_h2($object["lang"]->translate("g_credit")); ?>
		
		<?php hive__windmill_box_full($object["lang"]->translate("g_credit_t")); ?>
		
		<?php hive__windmill_h2($object["lang"]->translate("g_alerts")); ?>		
		  <?php hive__windmill_alert_danger($object["lang"]->translate("g_modal")); ?>
		  <?php hive__windmill_alert_success($object["lang"]->translate("g_ok")); ?>
		  <?php hive__windmill_alert_warning($object["lang"]->translate("g_warning")); ?>
		  <?php hive__windmill_alert_info($object["lang"]->translate("g_info")); ?>
		  <?php hive__windmill_alert_primary($object["lang"]->translate("g_primary")); ?>

		<?php hive__windmill_h2($object["lang"]->translate("g_buttons")); ?>
		<?php hive__windmill_h4($object["lang"]->translate("g_sizes")); ?>
		
		<div
		  class="flex flex-col flex-wrap mb-4 space-y-4 md:flex-row md:items-end md:space-x-4"
		>
            <!-- Divs are used just to display the examples. Use only the button. -->
            <?php hive__windmill_button($object["lang"]->translate("g_regularbutton"), "bx bxs-pear", "#030303", "#ffffff", "a", "#", "", ""); ?>
		</div>
		<p class="mb-8 text-gray-700 dark:text-gray-400">
		  <?php echo $object["lang"]->translate("g_applytext"); ?>
		</p>

            
		<?php hive__windmill_h4($object["lang"]->translate("g_icons")); ?>
		<div
		  class="flex flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4"
		>
		  <!-- Divs are used just to display the examples. Use only the button. -->
			<!--text icon color tcolor type[submit/button/a] url name js classes-->
			<?php hive__windmill_button_icright($object["lang"]->translate("form_ir"), "bx bxs-pear", "#030303", "#ffffff", "a", "#", "", ""); ?>
			
		  <!-- Divs are used just to display the examples. Use only the button. -->
			<?php hive__windmill_button_icleft($object["lang"]->translate("form_il"), "bx bxs-pear", "#030303","#ffffff", "a", "#", "", ""); ?>

		  <!-- Divs are used just to display the examples. Use only the button. -->
			<?php hive__windmill_button_small("bx bxs-pear", "#030303","#ffffff", "a", "#", "", ""); ?>

		  <!-- Divs are used just to display the examples. Use only the button. -->
			<?php hive__windmill_button_small_round("bx bxs-pear", "#030303","#ffffff", "a", "#", "", ""); ?>
		</div>
		
		<?php hive__windmill_h2($object["lang"]->translate("g_modal_title")); ?>
		<div
		  class="flex flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4"
		>
			<?php
				if(@$_POST["modal"] == true) {
					hive__windmill_modal($object["lang"]->translate("g_modal"), false, "info");
				}
			?>
			<form method="post">
			<input type="hidden" name="modal" value="true">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_modal"); ?>
			  </button>
			 </form>
			  <button
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
				onclick="xjs_popup('<?php echo $object["lang"]->translate("g_xjspopup"); ?> ', '<?php echo $object["lang"]->translate("g_xjspopup_close"); ?>')"
			  >
				<?php echo $object["lang"]->translate("g_xjspopup"); ?>
			  </button>
		</div>

		<?php hive__windmill_h2($object["lang"]->translate("g_evb")); ?>
		<div
		  class="flex flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4"
		>		
			<?php
				if(@$_POST["evb1"] == true) {
					$object["eventbox"]->ok($object["lang"]->translate("g_ok"));
				}
				if(@$_POST["evb2"] == true) {
					$object["eventbox"]->warning($object["lang"]->translate("g_warning"));
				}
				if(@$_POST["evb3"] == true) {
					$object["eventbox"]->error($object["lang"]->translate("g_error"));
				}
				if(@$_POST["evb4"] == true) {
					$object["eventbox"]->info($object["lang"]->translate("g_info"));
				}
				if(@$_POST["evb5"] == true) {
					$object["eventbox"]->info($object["lang"]->translate("g_multiple"));
					$object["eventbox"]->error($object["lang"]->translate("g_multiple"));
					$object["eventbox"]->warning($object["lang"]->translate("g_multiple"));
					$object["eventbox"]->ok($object["lang"]->translate("g_multiple"));
				}
			?>
			<form method="post">
			<input type="hidden" name="evb1" value="true">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_ok"); ?>
			  </button>
			 </form>
			<form method="post">
			<input type="hidden" name="evb2" value="true">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_warning"); ?>
			  </button>
			 </form>
			<form method="post">
			<input type="hidden" name="evb3" value="true">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_error"); ?>
			  </button>
			 </form>
			<form method="post">
			<input type="hidden" name="evb4" value="true">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_info"); ?>
			  </button>
			 </form>
			<form method="post">
			<input type="hidden" name="evb5" value="true">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_multiple"); ?>
			  </button>
			 </form>
		</div>
		
		
		<?php hive__windmill_h2($object["lang"]->translate("g_theme_changes")); ?>
		<div
		  class="flex flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4"
		>		
			<form method="get">
			<input type="hidden" name="site" value="general">
			<input type="hidden" name="hive__db_theme" value="orange">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_theme_orange"); ?>
			  </button>
			 </form>
			<form method="get">
			<input type="hidden" name="site" value="general">
			<input type="hidden" name="hive__db_theme" value="green">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_theme_green"); ?>
			  </button>
			 </form>
			<form method="get">
			<input type="hidden" name="site" value="general">
			<input type="hidden" name="hive__db_theme" value="dynamic">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_theme_dyn"); ?>
			  </button>
			 </form>
			<form method="get">
			<input type="hidden" name="site" value="general">
			<input type="hidden" name="hive__db_theme" value="purple">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_theme_purple"); ?>
			  </button>
			 </form>
		</div>
		
		<?php hive__windmill_h2($object["lang"]->translate("g_theme_color")); ?>
		<div
		  class="flex flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4"
		>		
			<form method="get">
			<input type="hidden" name="site" value="general">
			<input type="color" name="hive__db_color" value="<?php echo _HIVE_COLOR_; ?>">
			  <button
				type="submit"
				class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
			  >
				<?php echo $object["lang"]->translate("g_theme_color_change"); ?>
			  </button>
			 </form>
		</div>		
		<!-- Header for Cards -->
		<?php hive__windmill_h2($object["lang"]->translate("g_cards")); ?>
		<?php hive__windmill_h4($object["lang"]->translate("g_bigsectioncard")); ?>
		<?php hive__windmill_box_full("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga, cum commodi a omnis numquam quod? Totam exercitationem quos hic ipsam at qui cum numquam, sed amet ratione! Ratione, nihil dolorum. "); ?>
		
		<!-- Responsive cards -->
		<?php hive__windmill_h4($object["lang"]->translate("g_responsivecards")); ?>
		<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
			<?php echo hive__windmill_box_card($object["lang"]->translate("g_example"), $object["lang"]->translate("g_example"), "white", "bx bxs-pear"); ?>
			<?php echo hive__windmill_box_card($object["lang"]->translate("g_example"), $object["lang"]->translate("g_example"), "white", "bx bxs-pear"); ?>
			<?php echo hive__windmill_box_card($object["lang"]->translate("g_example"), $object["lang"]->translate("g_example"), "white", "bx bxs-pear"); ?>
		</div>
		
		<!-- Cards with title -->
		<?php hive__windmill_h4($object["lang"]->translate("g_cardswithtitle")); ?>
		<div class="grid gap-6 mb-8 md:grid-cols-2">
			<?php hive__windmill_box("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga, cum commodi a omnis numquam quod? Totam exercitationem quos hic ipsam at qui cum numquam, sed amet ratione! Ratione, nihil dolorum. ", $object["lang"]->translate("g_example")); ?>
			<?php hive__windmill_box_colored("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga, cum commodi a omnis numquam quod? Totam exercitationem quos hic ipsam at qui cum numquam, sed amet ratione! Ratione, nihil dolorum. ", $object["lang"]->translate("g_example")); ?>
		</div>
		
	<!-- End Website Div -->
	</div>






   