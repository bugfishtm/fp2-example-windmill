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
		
		// Example Windmill Login Page
	*/
	if(!is_array($object)) { @http_response_code(404); Header("Location: ../"); exit(); }
?>    <div class="flex items-center p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800 xfpe_maxheight500px_f"
      >

        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="<?php echo _HIVE_URL_REL_."/_core/_image/bugfish-fp2-logo.jpg"; ?>"
              alt="Office"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="<?php echo _HIVE_URL_REL_."/_core/_image/bugfish-fp2-logo.jpg"; ?>"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                <?php echo $object["lang"]->translate("login_create"); ?>
              </h1>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400"><?php echo $object["lang"]->translate("login_mail"); ?></span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Bug Fish"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400"><?php echo $object["lang"]->translate("login_pass"); ?></span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  type="password"
                />
              </label>

              <div class="flex mt-6 text-sm">
                <label class="flex items-center dark:text-gray-400">
                  <input
                    type="checkbox"
                    class="text-bugfish-primary-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray"
                  />
                  <span class="ml-2">
                    <?php echo $object["lang"]->translate("login_agb"); ?>
                  </span>
                </label>
              </div>

              <a
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-lg active:bg-primary-bugfish hover:bg-purple-700 focus:outline-none focus:shadow-primary-bugfish"
                href="../?site=general"
              >
                <?php echo $object["lang"]->translate("login_create"); ?>
              </a>

              <hr class="my-8" />
              <p class="mt-4">
                <a
                  class="text-sm font-medium text-bugfish-primary-600 dark:text-bugfish-primary hover:underline"
                  href="../?site=general"
                >
                 <?php echo $object["lang"]->translate("login_already"); ?>
                </a>
              </p>
            </div>
          </div>
        </div>
       </div>
      </div>