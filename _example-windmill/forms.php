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
?>
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              <?php echo $object["lang"]->translate("form_forms"); ?>
            </h2>
            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              <?php echo $object["lang"]->translate("form_elements"); ?>
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400"><?php echo $object["lang"]->translate("form_name"); ?></span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="<?php echo $object["lang"]->translate("form_entersmto"); ?>"
                />
              </label>

              <div class="mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  <?php echo $object["lang"]->translate("form_radio"); ?>
                </span>
                <div class="mt-2">
                  <label
                    class="inline-flex items-center text-gray-600 dark:text-gray-400"
                  >
                    <input
                      type="radio"
                      class="text-bugfish-primary-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray"
                      name="accountType"
                      value="personal"
                    />
                    <span class="ml-2"><?php echo $object["lang"]->translate("form_personal"); ?></span>
                  </label>
                  <label
                    class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400"
                  >
                    <input
                      type="radio"
                      class="text-bugfish-primary-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray"
                      name="accountType"
                      value="busines"
                    />
                    <span class="ml-2"><?php echo $object["lang"]->translate("form_business"); ?></span>
                  </label>
                </div>
              </div>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  <?php echo $object["lang"]->translate("form_select"); ?>
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray"
                >
                  <option>$1,000</option>
                  <option>$5,000</option>
                  <option>$10,000</option>
                  <option>$25,000</option>
                </select>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  <?php echo $object["lang"]->translate("form_multiselect"); ?>
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray"
                  multiple
                >
                  <option><?php echo $object["lang"]->translate("form_option"); ?> 1</option>
                  <option><?php echo $object["lang"]->translate("form_option"); ?> 2</option>
                  <option><?php echo $object["lang"]->translate("form_option"); ?> 3</option>
                  <option><?php echo $object["lang"]->translate("form_option"); ?> 4</option>
                  <option><?php echo $object["lang"]->translate("form_option"); ?> 5</option>
                </select>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400"><?php echo $object["lang"]->translate("form_textarea"); ?></span>
                <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray"
                  rows="3"
                  placeholder="<?php echo $object["lang"]->translate("form_entersmto"); ?>"
                ></textarea>
              </label>

              <div class="flex mt-6 text-sm">
                <label class="flex items-center dark:text-gray-400">
                  <input
                    type="checkbox"
                    class="text-bugfish-primary-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray"
                  />
                  <span class="ml-2">
                    <?php echo $object["lang"]->translate("form_checkbox"); ?>
                  </span>
                </label>
              </div>
            </div>

            <!-- Validation inputs -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              <?php echo $object["lang"]->translate("form_validation"); ?>
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <!-- Invalid input -->
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  <?php echo $object["lang"]->translate("form_invalid"); ?>
                </span>
                <input
                  class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input"
                  placeholder="<?php echo $object["lang"]->translate("form_entersmto"); ?>"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                  <?php echo $object["lang"]->translate("form_invalid_text"); ?>
                </span>
              </label>

              <!-- Valid input -->
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  <?php echo $object["lang"]->translate("form_valid"); ?>
                </span>
                <input
                  class="block w-full mt-1 text-sm border-green-600 dark:text-gray-300 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input"
                  placeholder="<?php echo $object["lang"]->translate("form_entersmto"); ?>"
                />
                <span class="text-xs text-green-600 dark:text-green-400">
                  <?php echo $object["lang"]->translate("form_valid_text"); ?>
                </span>
              </label>

              <!-- Helper text -->
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  <?php echo $object["lang"]->translate("form_helper"); ?>
                </span>
                <input
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray form-input"
                  placeholder="<?php echo $object["lang"]->translate("form_entersmto"); ?>"
                />
                <span class="text-xs text-gray-600 dark:text-gray-400">
                  <?php echo $object["lang"]->translate("form_helper_text"); ?>
                </span>
              </label>
            </div>

            <!-- Inputs with icons -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              <?php echo $object["lang"]->translate("form_icons"); ?>
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400"><?php echo $object["lang"]->translate("form_il"); ?></span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div
                  class="relative text-gray-500 focus-within:text-bugfish-primary-600 dark:focus-within:text-bugfish-primary-6000"
                >
                  <input
                    class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray form-input"
                    placeholder="<?php echo $object["lang"]->translate("form_entersmto"); ?>"
                  />
                  <div
                    class="absolute inset-y-0 flex items-center ml-3 pointer-events-none"
                  >
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400"><?php echo $object["lang"]->translate("form_ir"); ?></span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div
                  class="relative text-gray-500 focus-within:text-bugfish-primary-600 dark:focus-within:text-bugfish-primary-6000"
                >
                  <input
                    class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray form-input"
                    placeholder="<?php echo $object["lang"]->translate("form_entersmto"); ?>"
                  />
                  <div
                    class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none"
                  >
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </label>
            </div>

            <!-- Inputs with buttons -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              <?php echo $object["lang"]->translate("form_buttons"); ?>
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                 <?php echo $object["lang"]->translate("form_bl"); ?>
                </span>
                <div class="relative">
                  <input
                    class="block w-full pl-20 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray form-input"
                    placeholder="<?php echo $object["lang"]->translate("form_entersmto"); ?>"
                  />
                  <button
                    class="absolute inset-y-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-l-md active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray"
                  >
                    <?php echo $object["lang"]->translate("form_exec"); ?>
                  </button>
                </div>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  <?php echo $object["lang"]->translate("form_br"); ?>
                </span>
                <div
                  class="relative text-gray-500 focus-within:text-bugfish-primary-600"
                >
                  <input
                    class="block w-full pr-20 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-primary-bugfish dark:focus:shadow-outline-gray form-input"
                    placeholder="<?php echo $object["lang"]->translate("form_entersmto"); ?>"
                  />
                  <button
                    class="absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-bugfish border border-transparent rounded-r-md active:bg-primary-bugfish hover:bg-primary-bugfish focus:outline-none focus:shadow-primary-bugfish"
                  >
                    <?php echo $object["lang"]->translate("form_exec"); ?>
                  </button>
                </div>
              </label>
            </div>
          </div>