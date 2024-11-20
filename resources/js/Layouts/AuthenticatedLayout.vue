<script setup lang="ts">
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import DarkModeToggle from '@/Components/DarkModeToggle.vue';
import Footer from '@/Components/Footer.vue';
import { Icon } from '@iconify/vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
  <body>
    <div class="size-full">
      <div class="flex overflow-hidden">
        <div class="leftmenu-wrapper">
  <a class="flex h-16 items-center justify-center" href="./dashboards-ecommerce.html">
    <!--  Start: Logo -->

    <div class="inline">
      <img
        alt="logo-dark"
        loading="lazy"
        class="hidden h-6 dark:inline"
        src="assets/images/logo/logo-dark.png" />
      <img
        alt="logo-light"
        loading="lazy"
        class="inline h-6 dark:hidden"
        src="assets/images/logo/logo-light.png" />
    </div>

    <!--  End: Logo -->
  </a>
  <div data-simplebar class="h-[calc(100vh-64px)] lg:h-[calc(100vh-230px)]">
    <ul class="menu mb-6">
      <!--  Start: Dashboard -->

      <li class="mb-0.5">
        <a class="hover:bg-base-content/15" href="./dashboards-ecommerce.html">
          <div class="flex items-center gap-2">
            <Icon icon="lucide:airplay" height="18" />
            Dashboard
          </div>
        </a>
      </li>

      <!--  End: Dashboard -->
      <!--  Start: Apps -->

      <li class="menu-title font-semibold">Apps</li>
      <li class="mb-0.5">
        <details>
          <summary>
            <div class="flex items-center gap-2">
              <Icon icon="lucide:store" height="18" />
              Ecommerce
              <div class="pro-badge">Pro</div>
            </div>
          </summary>
          <ul>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./apps-ecommerce-orders.html">
                <div class="flex items-center gap-2">
                  Orders
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./apps-ecommerce-products.html">
                <div class="flex items-center gap-2">
                  Products
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./apps-ecommerce-sellers.html">
                <div class="flex items-center gap-2">
                  Sellers
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./apps-ecommerce-customers.html">
                <div class="flex items-center gap-2">
                  Customers
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./apps-ecommerce-shops.html">
                <div class="flex items-center gap-2">
                  Shops
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
          </ul>
        </details>
      </li>
      <li class="mb-0.5">
        <a class="hover:bg-base-content/15" href="./apps-file-manager.html">
          <div class="flex items-center gap-2">
            <Icon icon="lucide:server" height="18" />
            File Manager
            <div class="pro-badge">Pro</div>
          </div>
        </a>
      </li>
      <li class="mb-0.5">
        <a class="hover:bg-base-content/15" href="./apps-chat.html">
          <div class="flex items-center gap-2">
            <Icon icon="lucide:messages-square" height="18" />
            Chat
            <div class="pro-badge">Pro</div>
          </div>
        </a>
      </li>

      <!--  End: Apps -->
      <!--  Start: Pages -->
      <li class="menu-title font-semibold">Pages</li>
      <li class="mb-0.5">
        <a class="hover:bg-base-content/15" href="./landing.html">
          <div class="flex items-center gap-2">
            <Icon icon="lucide:file" height="18" />
            Landing
            <div class="pro-badge">Pro</div>
          </div>
        </a>
      </li>
      <li class="mb-0.5">
        <details>
          <summary>
            <div class="flex items-center gap-2">
              <Icon icon="lucide:shield-check" height="18" />
              Auth
              <div class="pro-badge">Pro</div>
            </div>
          </summary>
          <ul>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./auth-login.html">
                <div class="flex items-center gap-2">
                  Login
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./auth-register.html">
                <div class="flex items-center gap-2">
                  Register
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./auth-forgot-password.html">
                <div class="flex items-center gap-2">
                  Forgot Password
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./auth-reset-password.html">
                <div class="flex items-center gap-2">
                  Reset Password
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
          </ul>
        </details>
      </li>

      <!--  End: Pages -->
      <!--  Start: UI Showcase -->
      <li class="menu-title font-semibold">UI Showcase</li>
      <li class="mb-0.5">
        <details>
          <summary>
            <div class="flex items-center gap-2">
              <Icon icon="lucide:package" height="18" />
              Components
              <div class="pro-badge">Pro</div>
            </div>
          </summary>
          <ul>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-accordion.html">
                <div class="flex items-center gap-2">
                  Accordion
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-alert.html">
                <div class="flex items-center gap-2">
                  Alert
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-avatar.html">
                <div class="flex items-center gap-2">
                  Avatar
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-badge.html">
                <div class="flex items-center gap-2">
                  Badge
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-breadcrumb.html">
                <div class="flex items-center gap-2">
                  Breadcrumb
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-button.html">
                <div class="flex items-center gap-2">
                  Button
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-countdown.html">
                <div class="flex items-center gap-2">
                  Countdown
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-drawer.html">
                <div class="flex items-center gap-2">
                  Drawer
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-dropdown.html">
                <div class="flex items-center gap-2">
                  Dropdown
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-loading.html">
                <div class="flex items-center gap-2">
                  Loading
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-menu.html">
                <div class="flex items-center gap-2">
                  Menu
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-modal.html">
                <div class="flex items-center gap-2">
                  Modal
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-pagination.html">
                <div class="flex items-center gap-2">
                  Pagination
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-progress.html">
                <div class="flex items-center gap-2">
                  Progress
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-step.html">
                <div class="flex items-center gap-2">
                  Step
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-tab.html">
                <div class="flex items-center gap-2">
                  Tab
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-timeline.html">
                <div class="flex items-center gap-2">
                  Timeline
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-toast.html">
                <div class="flex items-center gap-2">
                  Toast
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-components-tooltip.html">
                <div class="flex items-center gap-2">
                  Tooltip
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
          </ul>
        </details>
      </li>
      <li class="mb-0.5">
        <details>
          <summary>
            <div class="flex items-center gap-2">
              <Icon icon="lucide:file-text" height="18" />
              Forms
              <div class="pro-badge">Pro</div>
            </div>
          </summary>
          <ul>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-forms-checkbox.html">
                <div class="flex items-center gap-2">
                  Checkbox
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-forms-file.html">
                <div class="flex items-center gap-2">
                  File
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-forms-input.html">
                <div class="flex items-center gap-2">
                  Input
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-forms-radio.html">
                <div class="flex items-center gap-2">
                  Radio
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-forms-range.html">
                <div class="flex items-center gap-2">
                  Range
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-forms-rating.html">
                <div class="flex items-center gap-2">
                  Rating
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
            <li class="mb-0.5">
              <a class="hover:bg-base-content/15" href="./ui-forms-toggle.html">
                <div class="flex items-center gap-2">
                  Toggle
                  <div class="pro-badge">Pro</div>
                </div>
              </a>
            </li>
          </ul>
        </details>
      </li>
      <li class="mb-0.5">
        <details>
          <summary>
            <div class="flex items-center gap-2">
              <Icon icon="lucide:bar-chart-big" height="18" />
              Charts
              <div class="pro-badge">Pro</div>
            </div>
          </summary>
          <ul>
            <li class="mb-0.5">
              <details>
                <summary>
                  <div class="flex items-center gap-2">
                    Apex
                    <div class="pro-badge">Pro</div>
                  </div>
                </summary>
                <ul>
                  <li class="mb-0.5">
                    <a class="hover:bg-base-content/15" href="./ui-charts-apex-area.html">
                      <div class="flex items-center gap-2">
                        Area
                        <div class="pro-badge">Pro</div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-0.5">
                    <a class="hover:bg-base-content/15" href="./ui-charts-apex-bar.html">
                      <div class="flex items-center gap-2">
                        Bar
                        <div class="pro-badge">Pro</div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-0.5">
                    <a class="hover:bg-base-content/15" href="./ui-charts-apex-column.html">
                      <div class="flex items-center gap-2">
                        Column
                        <div class="pro-badge">Pro</div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-0.5">
                    <a class="hover:bg-base-content/15" href="./ui-charts-apex-line.html">
                      <div class="flex items-center gap-2">
                        Line
                        <div class="pro-badge">Pro</div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-0.5">
                    <a class="hover:bg-base-content/15" href="./ui-charts-apex-pie.html">
                      <div class="flex items-center gap-2">
                        Pie
                        <div class="pro-badge">Pro</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </details>
            </li>
          </ul>
        </details>
      </li>

      <!--  End: UI Showcase -->
      <!--  Start: Others -->

      <li class="menu-title font-semibold">Other</li>
      <li class="mb-0.5">
        <a class="hover:bg-base-content/15" href="https://nexus.daisyui.com/docs/introduction" target="_blank">
          <div class="flex items-center gap-2">
            <Icon icon="lucide:book-open-text" height="18" />
            Documentation
          </div>
        </a>
      </li>

      <!--  End: Others -->
    </ul>
  </div>

  <!--  Start: Note With Action -->

  <div class="mx-4 hidden rounded bg-base-200 px-3 py-4 lg:block">
    <p class="text-center text-base font-medium">Need Premium?</p>
    <p class="mt-3 text-center text-sm">Access all features with single time purchase</p>
    <div class="mt-3 text-center">
      <a target="_blank" href="https://daisyui.com/store/">
        <button class="btn btn-primary btn-sm">Purchase</button>
      </a>
    </div>
  </div>

  <!--  End: Note With Action -->
</div>
<div class="leftbar-backdrop"></div>


        <div class="main-wrapper overflow-auto">
          <div class="flex h-full flex-col">
            <div
  role="navigation"
  aria-label="Navbar"
  class="topbar-wrapper navbar z-10 border-b border-base-200 px-3">
  <div class="navbar-start gap-3">
    <!--  Start: Left Menu Toggle -->

    <button
      aria-label="Leftmenu toggle"
      data-action="leftbar-toggle"
      class="btn btn-square btn-ghost btn-sm">
      <Icon icon="lucide:menu" height="20" />
    </button>

    <!--  End: Left Menu Toggle -->
    <!--  Start: Search Button -->

    <button
      aria-label="Search button"
      onclick="search_modal.showModal()"
      class="btn btn-outline btn-sm hidden h-9 w-48 items-center justify-start gap-3 border-base-content/20 hover:border-transparent hover:bg-base-content/20 sm:flex">
      <Icon icon="lucide:search" height="16" class="text-base-content/60" />

      <span class="text-base-content/60">Search</span>
    </button>

    <!--  End: Search Button -->
    <button
      aria-label="Search button"
      onclick="search_modal.showModal()"
      class="btn btn-circle btn-outline btn-sm flex border-base-content/20 hover:border-transparent hover:bg-base-content/20 sm:hidden">
      <Icon icon="lucide:search" height="16" class="text-base-content/60" />
    </button>
    <!--  Start: Search Modal -->

    <dialog aria-label="Modal" class="modal" id="search_modal">
      <div class="modal-box p-0">
        <div class="form-control flex-row items-center rounded-box p-2 px-5">
          <iconify-icon
            icon="lucide:search"
            height="18"
            class="text-base-content/70" />

          <input
            placeholder="Search along files"
            class="input input-sm w-full text-base focus:border-transparent focus:outline-0 focus:outline-offset-0" />
          <form method="dialog">
            <button aria-label="Close search modal" class="btn btn-circle btn-ghost btn-sm gap-2">
              <Icon icon="lucide:x" height="16" />
            </button>
          </form>
        </div>
        <div class="border-t border-base-content/10">
          <ul class="menu">
            <li class="menu-title">Actions</li>
            <li class="">
              <div>
                <Icon icon="lucide:folder-plus" height="18" />

                <p class="grow text-sm">Create a new folder</p>
              </div>
            </li>
            <li class="">
              <div>
                <Icon icon="lucide:file-plus" height="18" />

                <p class="grow text-sm">Upload new document</p>
              </div>
            </li>
            <li class="">
              <div>
                <Icon icon="lucide:user-plus" height="18" />

                <p class="grow text-sm">Invite to project</p>
              </div>
            </li>
            <hr class="-mx-2 mt-3 h-px border-base-content/10" />
            <li class="menu-title">Quick Links</li>
            <li class="">
              <div>
                <Icon icon="lucide:folders" height="18" />

                <p class="grow text-sm">File Manager</p>
              </div>
            </li>
            <li class="">
              <div>
                <Icon icon="lucide:user" height="18" />

                <p class="grow text-sm">Profile</p>
              </div>
            </li>
            <li class="">
              <div>
                <Icon icon="lucide:layout-dashboard" height="18" />

                <p class="grow text-sm">Dashboard</p>
              </div>
            </li>
            <li class="">
              <div>
                <Icon icon="lucide:help-circle" height="18" />

                <p class="grow text-sm">Support</p>
              </div>
            </li>
            <li class="">
              <div>
                <Icon icon="lucide:keyboard" height="18" />

                <p class="grow text-sm">Keyboard Shortcuts</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <form method="dialog" class="modal-backdrop">
        <button>close</button>
      </form>
    </dialog>

    <!--  End: Search Modal -->
  </div>
  <div class="navbar-center"></div>
  <div class="navbar-end gap-1.5">
    <!--  Start: Theme Toggle -->

    <button
      aria-label="Theme toggler"
      class="btn btn-circle btn-ghost btn-sm"
      data-action="theme-toggle">
      <Icon icon="lucide:sun" height="20" class="hidden dark:inline" />
      <Icon icon="lucide:moon" height="20" class="inline dark:hidden" />
    </button>

    <!--  End: Theme Toggle -->

    <div>
      <!--  Start: Notification -->

      <div class="dropdown dropdown-end dropdown-bottom">
        <label tabindex="0" class="btn btn-circle btn-ghost btn-sm">
          <Icon icon="lucide:bell" height="20" />
        </label>
        <ul
          tabindex="0"
          class="menu card dropdown-content card-compact m-1 w-96 rounded-box bg-base-100 p-3 shadow"
          role="menu">
          <div class="flex items-center justify-between px-2">
            <p class="text-base font-medium">Notification</p>
            <button class="btn btn-circle btn-ghost btn-sm gap-2">
              <Icon icon="lucide:x" height="16" />
            </button>
          </div>
          <div class="flex items-center justify-center">
            <div class="rounded-full border border-base-content/10 px-3 text-center">
              <p class="text-xs text-base-content/80">Today</p>
            </div>
          </div>
          <div class="mt-3">
            <div
              class="my-0.5 flex cursor-pointer items-center gap-3 rounded-box p-1.5 transition-all hover:bg-base-content/5 active:scale-[.98]">
              <img
                alt=""
                loading="lazy"
                class="mask mask-circle size-9 bg-base-content/10 p-0.5"
                src="assets/images/avatars/1.png" />
              <div class="grow">
                <p class="text-sm">Customer has requested a return for item</p>
                <p class="text-xs text-base-content/60">1 Hour ago</p>
              </div>
            </div>
            <div
              class="my-0.5 flex cursor-pointer items-center gap-3 rounded-box p-1.5 transition-all hover:bg-base-content/5 active:scale-[.98]">
              <img
                alt=""
                loading="lazy"
                class="mask mask-circle size-9 bg-base-content/10 p-0.5"
                src="assets/images/avatars/2.png" />
              <div class="grow">
                <p class="text-sm">A new review has been submitted for product</p>
                <p class="text-xs text-base-content/60">1 Hour ago</p>
              </div>
            </div>
          </div>
          <div class="mt-2 flex items-center justify-center">
            <div class="rounded-full border border-base-content/10 px-3 text-center">
              <p class="text-xs text-base-content/80">Yesterday</p>
            </div>
          </div>
          <div class="mt-3">
            <div
              class="my-0.5 flex cursor-pointer items-center gap-3 rounded-box p-1.5 transition-all hover:bg-base-content/5 active:scale-[.98]">
              <img
                alt=""
                loading="lazy"
                class="mask mask-circle size-9 bg-base-content/10 p-0.5"
                src="assets/images/avatars/3.png" />
              <div class="grow">
                <p class="text-sm">Prepare for the upcoming weekend promotion</p>
                <p class="text-xs text-base-content/60">1 Hour ago</p>
              </div>
            </div>
            <div
              class="my-0.5 flex cursor-pointer items-center gap-3 rounded-box p-1.5 transition-all hover:bg-base-content/5 active:scale-[.98]">
              <img
                alt=""
                loading="lazy"
                class="mask mask-circle size-9 bg-base-content/10 p-0.5"
                src="assets/images/avatars/4.png" />
              <div class="grow">
                <p class="text-sm">Product 'ABC123' is running low in stock.</p>
                <p class="text-xs text-base-content/60">1 Hour ago</p>
              </div>
            </div>
            <div
              class="my-0.5 flex cursor-pointer items-center gap-3 rounded-box p-1.5 transition-all hover:bg-base-content/5 active:scale-[.98]">
              <img
                alt=""
                loading="lazy"
                class="mask mask-circle size-9 bg-base-content/10 p-0.5"
                src="assets/images/avatars/5.png" />
              <div class="grow">
                <p class="text-sm">Payment received for Order ID: #67890</p>
                <p class="text-xs text-base-content/60">1 Hour ago</p>
              </div>
            </div>
          </div>
          <hr class="-mx-2 mt-2 border-base-content/10" />
          <div class="flex items-center justify-between pt-2">
            <button class="btn btn-ghost btn-sm text-primary hover:bg-primary/10">View All</button>
            <button class="btn btn-ghost btn-sm text-base-content/80 hover:bg-base-content/10">
              Mark as read
            </button>
          </div>
        </ul>
      </div>

      <!--  End: Notification -->
    </div>
    <!--  Start: Profile With Action Item -->

    <div class="dropdown dropdown-end dropdown-bottom">
      <label tabindex="0" class="btn btn-ghost rounded-btn px-1.5 hover:bg-base-content/20">
        <div class="flex items-center gap-2">
          <div aria-label="Avatar photo" class="avatar">
            <div class="mask mask-squircle" style="width: 30px; height: 30px">
              <img src="assets/images/avatars/1.png" alt="Avatar" />
            </div>
          </div>
          <div class="flex flex-col items-start">
            <p class="text-sm/none">Deep</p>
            <p class="mt-1 text-xs/none text-primary">Edit</p>
          </div>
        </div>
      </label>
      <ul
        tabindex="0"
        class="menu dropdown-content mt-4 w-52 rounded-box bg-base-100 p-2 shadow"
        role="menu">
        <li>
          <div>
            <Icon icon="lucide:user" height="16" />

            My Profile
          </div>
        </li>
        <li>
          <div>
            <Icon icon="lucide:bell" height="16" />
            Notification
          </div>
        </li>
        <hr class="-mx-2 my-1 border-base-content/10" />
        <li>
          <div class="text-error">
            <Icon icon="lucide:log-out" height="16" />
            Logout
          </div>
        </li>
      </ul>
    </div>

    <!--  End: Profile With Action Item -->
  </div>
</div>


            <div class="content-wrapper">
              <div>
                <div class="flex items-center justify-between">
                  <h3 class="text-lg font-medium">Business Overview</h3>
                  <div aria-label="Breadcrumbs" class="breadcrumbs hidden p-0 text-sm sm:inline">
                    <ul>
                      <li>Nexus</li>
                      <li>Dashboards</li>
                      <li>Ecommerce</li>
                    </ul>
                  </div>
                </div>
                <div class="mt-6">
                  <!--  Start: Dashboard Counter Widget -->

                  <div class="grid gap-5 lg:grid-cols-2 xl:grid-cols-4">
                    <div aria-label="Card" class="card bg-base-100 shadow">
                      <div class="card-body gap-2">
                        <div class="flex items-start justify-between gap-2 text-sm">
                          <div>
                            <p class="font-medium text-base-content/70">Revenue</p>
                            <div class="mt-4 flex items-center gap-2">
                              <h5 class="inline text-2xl/none font-semibold">$587.54</h5>
                              <div
                                aria-label="Badge"
                                class="badge badge-sm gap-1 border-0 bg-success/10 py-3 text-xs font-semibold text-success">
                                <Icon icon="lucide:arrow-up" height="14" />
                                10.8%
                              </div>
                            </div>
                          </div>
                          <div class="rounded bg-base-200 p-2">
                            <iconify-icon
                              icon="lucide:circle-dollar-sign"
                              height="20"
                              class="text-base-content/80" />
                          </div>
                        </div>
                        <p class="text-sm font-medium">
                          <span class="text-success">+$112.58</span>
                          <span class="ms-1.5 text-base-content/60">than past week</span>
                        </p>
                      </div>
                    </div>
                    <div aria-label="Card" class="card bg-base-100 shadow">
                      <div class="card-body gap-2">
                        <div class="flex items-start justify-between gap-2 text-sm">
                          <div>
                            <p class="font-medium text-base-content/70">Sales</p>
                            <div class="mt-4 flex items-center gap-2">
                              <h5 class="inline text-2xl/none font-semibold">4500</h5>
                              <div
                                aria-label="Badge"
                                class="badge badge-sm gap-1 border-0 bg-success/10 py-3 text-xs font-semibold text-success">
                                <Icon icon="lucide:arrow-up" height="14" />

                                21.2%
                              </div>
                            </div>
                          </div>
                          <div class="rounded bg-base-200 p-2">
                            <iconify-icon
                              icon="lucide:package"
                              height="20"
                              class="text-base-content/80" />
                          </div>
                        </div>
                        <p class="text-sm font-medium">
                          <span class="text-success">+25</span>
                          <span class="ms-1.5 text-base-content/60">than past week</span>
                        </p>
                      </div>
                    </div>
                    <div aria-label="Card" class="card bg-base-100 shadow">
                      <div class="card-body gap-2">
                        <div class="flex items-start justify-between gap-2 text-sm">
                          <div>
                            <p class="font-medium text-base-content/70">Customer</p>
                            <div class="mt-4 flex items-center gap-2">
                              <h5 class="inline text-2xl/none font-semibold">2200</h5>
                              <div
                                aria-label="Badge"
                                class="badge badge-sm gap-1 border-0 bg-error/10 py-3 text-xs font-semibold text-error">
                                <Icon icon="lucide:arrow-down" height="14" />
                                10.2%
                              </div>
                            </div>
                          </div>
                          <div class="rounded bg-base-200 p-2">
                            <iconify-icon
                              icon="lucide:users"
                              height="20"
                              class="text-base-content/80" />
                          </div>
                        </div>
                        <p class="text-sm font-medium">
                          <span class="text-error">-312</span>
                          <span class="ms-1.5 text-base-content/60">than past week</span>
                        </p>
                      </div>
                    </div>
                    <div aria-label="Card" class="card bg-base-100 shadow">
                      <div class="card-body gap-2">
                        <div class="flex items-start justify-between gap-2 text-sm">
                          <div>
                            <p class="font-medium text-base-content/70">Spending</p>
                            <div class="mt-4 flex items-center gap-2">
                              <h5 class="inline text-2xl/none font-semibold">$112.54</h5>
                              <div
                                aria-label="Badge"
                                class="badge badge-sm gap-1 border-0 bg-success/10 py-3 text-xs font-semibold text-success">
                                <Icon icon="lucide:arrow-up" height="14" />

                                8.5%
                              </div>
                            </div>
                          </div>
                          <div class="rounded bg-base-200 p-2">
                            <iconify-icon
                              icon="lucide:eraser"
                              height="20"
                              class="text-base-content/80" />
                          </div>
                        </div>
                        <p class="text-sm font-medium">
                          <span class="text-success">+$54.65</span>
                          <span class="ms-1.5 text-base-content/60">than past week</span>
                        </p>
                      </div>
                    </div>
                  </div>

                  <!--  End: Dashboard Counter Widget -->

                  <div class="mt-6 grid gap-6 xl:grid-cols-12">
                    <div class="xl:col-span-7">
                      <!--  Start: Revenue Statistic -->

                      <div aria-label="Card" class="card card-bordered bg-base-100">
                        <div class="card-body px-0 pb-0">
                          <div class="px-6">
                            <div class="flex items-center justify-between">
                              <span class="font-medium">Revenue Statistics</span>
                              <div
                                role="tablist"
                                class="tabs-boxed tabs tabs-sm"
                                id="revenue_statistics_options">
                                <input
                                  aria-label="Day"
                                  value="day"
                                  type="radio"
                                  name="revenue_statistics_option"
                                  role="tab"
                                  class="tab checked:!rounded-b-btn" />
                                <input
                                  aria-label="Month"
                                  value="month"
                                  type="radio"
                                  name="revenue_statistics_option"
                                  role="tab"
                                  class="tab checked:!rounded-b-btn" />
                                <input
                                  aria-label="Year"
                                  value="year"
                                  checked
                                  type="radio"
                                  name="revenue_statistics_option"
                                  role="tab"
                                  class="tab checked:!rounded-b-btn" />
                              </div>
                            </div>
                            <div class="mt-2 flex items-center gap-3">
                              <span class="text-4xl/none font-semibold" id="total_income">
                                $12,547K
                              </span>
                              <span
                                class="text-sm font-medium text-success"
                                id="total_income_growth_percentage">
                                +3.24%
                              </span>
                            </div>
                            <span
                              class="text-sm text-base-content/70"
                              id="total_income_duration_text">
                              Total income in this year
                            </span>
                          </div>
                          <div class="overflow-hidden rounded-xl">
                            <div id="revenue_statistics_chart"></div>
                          </div>
                        </div>
                      </div>

                      <!--  End: Revenue Statistic -->
                    </div>
                    <div class="xl:col-span-5">
                      <!--  Start: Customer Acquisition -->

                      <div aria-label="Card" class="card card-bordered bg-base-100">
                        <div class="card-body p-0">
                          <div class="flex items-center justify-between px-5 pt-4">
                            <span class="font-medium">Customer Acquisition</span>
                          </div>
                          <div class="mt-2 border-y border-base-content/10 py-2">
                            <div class="grid grid-cols-3 gap-5 divide-x divide-base-content/10">
                              <div class="text-center">
                                <p class="text-base font-medium">Users</p>
                                <p class="mt-1 text-2xl font-semibold">427</p>
                                <div class="mt-1 inline-flex items-center gap-1 text-success">
                                  <Icon icon="lucide:arrow-up" height="16" />

                                  <p class="text-sm">3.15%</p>
                                </div>
                              </div>
                              <div class="text-center">
                                <p class="text-base font-medium">Sessions</p>
                                <p class="mt-1 text-2xl font-semibold">34</p>
                                <div class="mt-1 inline-flex items-center gap-1 text-error">
                                  <Icon icon="lucide:arrow-down" height="16" />

                                  <p class="text-sm">-2.78%</p>
                                </div>
                              </div>
                              <div class="text-center">
                                <p class="text-base font-medium">Bounce Rate</p>
                                <p class="mt-1 text-2xl font-semibold">40.5%</p>
                                <div class="mt-1 inline-flex items-center gap-1 text-success">
                                  <Icon icon="lucide:arrow-up" height="16" />

                                  <p class="text-sm">5.14%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="p-5">
                            <div class="overflow-hidden rounded-lg">
                              <div id="customer_acquisition_chart"></div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--  End: Customer Acquisition -->
                    </div>
                  </div>
                  <div class="mt-6 grid gap-6 xl:grid-cols-5 2xl:grid-cols-12">
                    <div class="hidden sm:block xl:col-span-3 2xl:col-span-5">
                      <!--  Start: Recent Orders -->

                      <div aria-label="Card" class="card card-bordered bg-base-100">
                        <div class="card-body">
                          <div class="flex items-center justify-between">
                            <span class="font-medium">Recent Orders</span>
                            <button class="btn btn-ghost btn-sm gap-2 bg-base-content/5">
                              <Icon icon="lucide:download" height="16" />

                              Report
                            </button>
                          </div>
                          <div class="overflow-auto">
                            <table
                              class="table rounded-box"
                              id="recent_orders_table"
                              data-component="table">
                              <thead>
                                <tr>
                                  <th>
                                    <input
                                      id="recent_orders_check_all"
                                      aria-label="checked-all-order"
                                      type="checkbox"
                                      data-slot="all-checkbox"
                                      class="checkbox checkbox-xs" />
                                  </th>
                                  <th>
                                    <span class="text-sm font-medium text-base-content/80">
                                      Product
                                    </span>
                                  </th>
                                  <th>
                                    <span class="text-sm font-medium text-base-content/80">
                                      Price
                                    </span>
                                  </th>
                                  <th>
                                    <span class="text-sm font-medium text-base-content/80">
                                      Date
                                    </span>
                                  </th>
                                  <th>
                                    <span class="text-sm font-medium text-base-content/80">
                                      Status
                                    </span>
                                  </th>
                                  <th>
                                    <span class="text-sm font-medium text-base-content/80">
                                      Action
                                    </span>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="cursor-pointer">
                                  <th>
                                    <input
                                      aria-label="checked-order"
                                      id="checked-order-1"
                                      data-slot="single-checkbox"
                                      type="checkbox"
                                      class="checkbox checkbox-xs" />
                                  </th>
                                  <td>
                                    <div class="flex items-center space-x-3 truncate">
                                      <img
                                        alt="order image"
                                        loading="lazy"
                                        width="32"
                                        height="32"
                                        class="mask mask-squircle size-8 bg-base-content/10"
                                        src="assets/images/apps/ecommerce/products/1.jpg" />
                                      <p class="line-clamp-2 font-medium">Men's tracking shoes</p>
                                    </div>
                                  </td>
                                  <td>
                                    <div>
                                      <div class="font-medium">$99</div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-nowrap text-xs">25 Jun 2024</div>
                                  </td>
                                  <td>
                                    <div>
                                      <div
                                        class="inline rounded-badge border border-success/50 bg-success/5 px-3 py-1 text-xs font-medium text-success">
                                        Delivered
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="flex items-center">
                                      <button
                                        aria-label="Show product"
                                        class="btn btn-square btn-ghost btn-sm">
                                        <iconify-icon
                                          icon="lucide:eye"
                                          height="20"
                                          class="text-base-content/70" />
                                      </button>
                                      <button
                                        aria-label="Delete product"
                                        class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                                        <iconify-icon
                                          icon="lucide:trash"
                                          height="20" />
                                      </button>
                                    </div>
                                  </td>
                                </tr>
                                <tr class="cursor-pointer">
                                  <th>
                                    <input
                                      aria-label="checked-order"
                                      id="checked-order-2"
                                      data-slot="single-checkbox"
                                      type="checkbox"
                                      class="checkbox checkbox-xs" />
                                  </th>
                                  <td>
                                    <div class="flex items-center space-x-3 truncate">
                                      <img
                                        alt="order image"
                                        loading="lazy"
                                        width="32"
                                        height="32"
                                        class="mask mask-squircle size-8 bg-base-content/10"
                                        src="assets/images/apps/ecommerce/products/2.jpg" />
                                      <p class="line-clamp-2 font-medium">Cocooil body oil</p>
                                    </div>
                                  </td>
                                  <td>
                                    <div>
                                      <div class="font-medium">$99</div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-nowrap text-xs">22 Jun 2024</div>
                                  </td>
                                  <td>
                                    <div>
                                      <div
                                        class="inline rounded-badge border border-info/50 bg-info/5 px-3 py-1 text-xs font-medium text-info">
                                        On Going
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="flex items-center">
                                      <button
                                        aria-label="Show product"
                                        class="btn btn-square btn-ghost btn-sm">
                                        <iconify-icon
                                          icon="lucide:eye"
                                          height="20"
                                          class="text-base-content/70" />
                                      </button>
                                      <button
                                        aria-label="Delete product"
                                        class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                                        <iconify-icon
                                          icon="lucide:trash"
                                          height="20" />
                                      </button>
                                    </div>
                                  </td>
                                </tr>
                                <tr class="cursor-pointer">
                                  <th>
                                    <input
                                      aria-label="checked-order"
                                      id="checked-order-3"
                                      data-slot="single-checkbox"
                                      type="checkbox"
                                      class="checkbox checkbox-xs" />
                                  </th>
                                  <td>
                                    <div class="flex items-center space-x-3 truncate">
                                      <img
                                        alt="order image"
                                        loading="lazy"
                                        width="32"
                                        height="32"
                                        class="mask mask-squircle size-8 bg-base-content/10"
                                        src="assets/images/apps/ecommerce/products/3.jpg" />
                                      <p class="line-clamp-2 font-medium">Freeze air</p>
                                    </div>
                                  </td>
                                  <td>
                                    <div>
                                      <div class="font-medium">$99</div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-nowrap text-xs">17 Jun 2024</div>
                                  </td>
                                  <td>
                                    <div>
                                      <div
                                        class="inline rounded-badge border border-success/50 bg-success/5 px-3 py-1 text-xs font-medium text-success">
                                        Delivered
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="flex items-center">
                                      <button
                                        aria-label="Show product"
                                        class="btn btn-square btn-ghost btn-sm">
                                        <iconify-icon
                                          icon="lucide:eye"
                                          height="20"
                                          class="text-base-content/70" />
                                      </button>
                                      <button
                                        aria-label="Delete product"
                                        class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                                        <iconify-icon
                                          icon="lucide:trash"
                                          height="20" />
                                      </button>
                                    </div>
                                  </td>
                                </tr>
                                <tr class="cursor-pointer">
                                  <th>
                                    <input
                                      aria-label="checked-order"
                                      id="checked-order-4"
                                      data-slot="single-checkbox"
                                      type="checkbox"
                                      class="checkbox checkbox-xs" />
                                  </th>
                                  <td>
                                    <div class="flex items-center space-x-3 truncate">
                                      <img
                                        alt="order image"
                                        loading="lazy"
                                        width="32"
                                        height="32"
                                        class="mask mask-squircle size-8 bg-base-content/10"
                                        src="assets/images/apps/ecommerce/products/4.jpg" />
                                      <p class="line-clamp-2 font-medium">Ladies's shoes</p>
                                    </div>
                                  </td>
                                  <td>
                                    <div>
                                      <div class="font-medium">$99</div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-nowrap text-xs">23 Jun 2024</div>
                                  </td>
                                  <td>
                                    <div>
                                      <div
                                        class="inline rounded-badge border border-error/50 bg-error/5 px-3 py-1 text-xs font-medium text-error">
                                        Cancelled
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="flex items-center">
                                      <button
                                        aria-label="Show product"
                                        class="btn btn-square btn-ghost btn-sm">
                                        <iconify-icon
                                          icon="lucide:eye"
                                          height="20"
                                          class="text-base-content/70" />
                                      </button>
                                      <button
                                        aria-label="Delete product"
                                        class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                                        <iconify-icon
                                          icon="lucide:trash"
                                          height="20" />
                                      </button>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <!--  End: Recent Orders -->
                    </div>
                    <div class="xl:order-3 xl:col-span-3 2xl:col-span-4">
                      <!--  Start: Top Countries -->

                      <div aria-label="Card" class="card card-bordered bg-base-100">
                        <div class="card-body gap-0 p-0">
                          <div class="flex items-center gap-3 px-5 pt-5">
                            <iconify-icon
                              icon="lucide:globe-2"
                              height="16"
                              class="text-base-content/80" />

                            <span class="grow font-medium">Top Countries (% in Sales)</span>
                            <button class="btn btn-ghost btn-sm gap-2 bg-base-content/5">
                              <Icon icon="lucide:eye" height="16" />

                              Overview
                            </button>
                          </div>
                          <div class="mb-3 me-5">
                            <div id="top_countries_chart"></div>
                          </div>
                        </div>
                      </div>

                      <!--  End: Top Countries -->
                    </div>
                    <div class="xl:order-2 xl:col-span-2 2xl:col-span-3">
                      <!--  Start: Quick Chat -->

                      <div aria-label="Card" class="card card-bordered bg-base-100">
                        <div class="card-body">
                          <div class="flex items-center gap-3">
                            <iconify-icon
                              icon="lucide:messages-square"
                              height="16"
                              class="text-base-content/80" />

                            <span class="font-medium">Quick Chat</span>
                          </div>
                          <div class="mt-2">
                            <div
                              class="flex cursor-pointer gap-4 rounded-box bg-transparent p-2.5 transition-all hover:bg-base-content/10 active:scale-[.98] active:bg-base-content/15">
                              <img
                                alt="chat image"
                                loading="lazy"
                                width="40"
                                height="40"
                                class="mask mask-squircle size-10 bg-base-content/10 p-0.5"
                                src="assets/images/avatars/1.png" />
                              <div class="grow">
                                <div class="flex">
                                  <p class="grow font-medium">Mia Johnson</p>
                                  <span class="text-xs text-base-content/60">09:49 PM</span>
                                </div>
                                <p
                                  class="line-clamp-1 text-ellipsis text-sm/none text-base-content/80">
                                  It's called 'Dreamscape.' A must-watch!
                                </p>
                              </div>
                            </div>
                            <div
                              class="flex cursor-pointer gap-4 rounded-box bg-transparent p-2.5 transition-all hover:bg-base-content/10 active:scale-[.98] active:bg-base-content/15">
                              <img
                                alt="chat image"
                                loading="lazy"
                                width="40"
                                height="40"
                                class="mask mask-squircle size-10 bg-base-content/10 p-0.5"
                                src="assets/images/avatars/2.png" />
                              <div class="grow">
                                <div class="flex">
                                  <p class="grow font-medium">Ethan Patel</p>
                                  <span class="text-xs text-base-content/60">08:09 PM</span>
                                </div>
                                <p
                                  class="line-clamp-1 text-ellipsis text-sm/none text-base-content/80">
                                  Just got a new book. Excited to start reading.
                                </p>
                              </div>
                            </div>
                            <div
                              class="flex cursor-pointer gap-4 rounded-box bg-transparent p-2.5 transition-all hover:bg-base-content/10 active:scale-[.98] active:bg-base-content/15">
                              <img
                                alt="chat image"
                                loading="lazy"
                                width="40"
                                height="40"
                                class="mask mask-squircle size-10 bg-base-content/10 p-0.5"
                                src="assets/images/avatars/3.png" />
                              <div class="grow">
                                <div class="flex">
                                  <p class="grow font-medium">Sophia Nguyen</p>
                                  <span class="text-xs text-base-content/60">06:29 PM</span>
                                </div>
                                <p
                                  class="line-clamp-1 text-ellipsis text-sm/none text-base-content/80">
                                  How's your day going?
                                </p>
                              </div>
                            </div>
                            <div
                              class="flex cursor-pointer gap-4 rounded-box bg-transparent p-2.5 transition-all hover:bg-base-content/10 active:scale-[.98] active:bg-base-content/15">
                              <img
                                alt="chat image"
                                loading="lazy"
                                width="40"
                                height="40"
                                class="mask mask-squircle size-10 bg-base-content/10 p-0.5"
                                src="assets/images/avatars/4.png" />
                              <div class="grow">
                                <div class="flex">
                                  <p class="grow font-medium">Emily Chen</p>
                                  <span class="text-xs text-base-content/60">04:49 PM</span>
                                </div>
                                <p
                                  class="line-clamp-1 text-ellipsis text-sm/none text-base-content/80">
                                  Did you see that amazing sunset yesterday?
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="mt-2 text-center">
                            <a href="./apps-chat.html">
                              <button class="btn btn-ghost btn-outline btn-sm">Go To Chat</button>
                            </a>
                          </div>
                        </div>
                      </div>

                      <!--  End: Quick Chat -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  

<!-- DAISYUI OLD START -->
  <div class="navbar bg-base-100">
    <div class="navbar-start">
      <!-- Dropdown -->
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h7"
            />
          </svg>
        </div>
        <ul
          tabindex="0"
          class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow"
        >
          <NavLink :href="route('welcome')">How it works</NavLink>
        </ul>
      </div>

      <!-- Menu items -->
      <ul class="menu menu-horizontal px-1 hidden md:flex">
        <NavLink :href="route('wallet')" :active="route().current('wallet')">Wallet</NavLink>
        <NavLink :href="route('buy')" :active="route().current('buy')">Buy</NavLink>
        <NavLink :href="route('sell')" :active="route().current('sell')">Sell</NavLink>
        <NavLink :href="route('deposit')" :active="route().current('deposit')">Deposit</NavLink>
      </ul>
    </div>

    <div class="navbar-center">
      <Link :href="route('wallet')">
        <ApplicationLogo class="block h-14 w-auto fill-current text-gray-800 dark:text-gray-200" />
      </Link>
    </div>

    <div class="navbar-end">
      <!-- Search button -->
      <button class="btn btn-ghost btn-circle">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
          />
        </svg>
      </button>

      <!-- Notifications -->
      <button class="btn btn-ghost btn-circle">
        <div class="indicator">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
            />
          </svg>
          <span class="badge badge-xs badge-primary indicator-item"></span>
        </div>
      </button>

      <!-- Profile Pic Dropdown -->
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img
              alt="Tailwind CSS Navbar component"
              src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
            />
          </div>
        </div>
        <ul
          tabindex="0"
          class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow"
        >
          <DropdownLink :href="route('profile.edit')">
            Profile <span class="badge">New</span>
          </DropdownLink>
          <DropdownLink :href="route('logout')" method="post" as="button">Logout</DropdownLink>
        </ul>
      </div>

      <!-- Dark Mode Toggle -->
      <DarkModeToggle class="ms-3" />
    </div>
  </div>

  <!-- Navbar for small devices -->
    <div class="navbar bg-base-100 justify-center flex md:hidden">
        <ul class="menu menu-horizontal px-1">
        <NavLink :href="route('wallet')" :active="route().current('wallet')">Wallet</NavLink>
        <NavLink :href="route('buy')" :active="route().current('buy')">Buy</NavLink>
        <NavLink :href="route('sell')" :active="route().current('sell')">Sell</NavLink>
        <NavLink :href="route('deposit')" :active="route().current('deposit')">Deposit</NavLink>
      </ul>
    </div>

  <div>
    <div class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">
      <!-- Page Heading -->
      <!-- <header class="bg-white dark:bg-gray-800 shadow" v-if="$slots.header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <slot name="header" />
        </div>
      </header> -->

      <!-- Page Content -->
      <main>
        <slot />
      </main>
      <Footer />
    </div>
  </div>
</body>
</template>
