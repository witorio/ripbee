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
                    <a class="flex h-16 items-center justify-center">
                        <!--  Start: Logo -->

                        <div class="inline">
                            <Link :href="route('wallet')">
                            <ApplicationLogo class="block h-14 w-auto fill-current text-gray-800 dark:text-gray-200" />
                            </Link>
                        </div>

                        <!--  End: Logo -->
                    </a>
                    <div data-simplebar class="h-[calc(100vh-64px)] lg:h-[calc(100vh-230px)]">
                        <ul class="menu mb-6">
                            <!--  Start: Dashboard -->

                            <li class="mb-0.5">
                                <NavLink :href="route('wallet')" :active="route().current('wallet')">
                                    <Icon icon="lucide:wallet" height="18" />
                                    Wallet
                                </NavLink>
                            </li>

                            <!-- Start: Transactions -->
                            <li class="menu-title font-semibold">Transactions</li>
                            <li class="mb-0.5">
                                <NavLink :href="route('buy')" :active="route().current('buy')">
                                    <Icon icon="lucide:package-plus" height="18" />
                                    Buy
                                </NavLink>
                                <NavLink :href="route('sell')" :active="route().current('sell')">
                                    <Icon icon="lucide:package-minus" height="18" />
                                    Sell
                                </NavLink>
                                <NavLink :href="route('deposit')" :active="route().current('deposit')">
                                    <Icon icon="lucide:circle-dollar-sign" height="18" />
                                    Deposit
                                </NavLink>
                            </li>

                            <!-- End: Transactions -->
                            <!--  End: Dashboard -->

                            <!--  Start: Settins -->
                            <li class="menu-title font-semibold">Settings</li>
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
                                            Settings
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
                                    </ul>
                                </details>
                            </li>
                            <!--  End: Settings -->

                            <!--  Start: Learn -->
                            <li class="menu-title font-semibold">Learn</li>
                            <li class="mb-0.5">
                                <a class="hover:bg-base-content/15" href="./landing.html">
                                    <div class="flex items-center gap-2">
                                        <Icon icon="lucide:file" height="18" />
                                        Landing
                                    </div>
                                </a>
                            </li>
                            <li class="mb-0.5">
                                <details>
                                    <summary>
                                        <div class="flex items-center gap-2">
                                            <Icon icon="lucide:shield-check" height="18" />
                                            Settings
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
                                    </ul>
                                </details>
                            </li>
                            <!--  End: Learn -->

                        </ul>
                    </div>

                    <!--  Start: Note With Action -->

                    <div class="mx-4 hidden rounded bg-base-200 px-3 py-4 lg:block">
                        <p class="text-center text-base font-medium">More?</p>
                        <p class="mt-3 text-center text-sm">Learn about RipBee investing</p>
                        <div class="mt-3 text-center">
                            <a target="_blank" href="https://daisyui.com/store/">
                                <button class="btn btn-primary btn-sm">Learn</button>
                            </a>
                        </div>
                    </div>

                    <!--  End: Note With Action -->
                </div>
                <div class="leftbar-backdrop"></div>


                <div class="main-wrapper overflow-auto">
                    <div class="flex h-full flex-col">
                        <div role="navigation" aria-label="Navbar"
                            class="topbar-wrapper navbar z-10 border-b border-base-200 px-3">
                            <div class="navbar-start gap-3">
                                <!--  Start: Left Menu Toggle -->

                                <button aria-label="Leftmenu toggle" data-action="leftbar-toggle"
                                    class="btn btn-square btn-ghost btn-sm">
                                    <Icon icon="lucide:menu" height="20" />
                                </button>

                                <!--  End: Left Menu Toggle -->
                                <!--  Start: Search Button -->

                                <button aria-label="Search button" onclick="search_modal.showModal()"
                                    class="btn btn-outline btn-sm hidden h-9 w-48 items-center justify-start gap-3 border-base-content/20 hover:border-transparent hover:bg-base-content/20 sm:flex">
                                    <Icon icon="lucide:search" height="16" class="text-base-content/60" />

                                    <span class="text-base-content/60">Search</span>
                                </button>

                                <!--  End: Search Button -->
                                <button aria-label="Search button" onclick="search_modal.showModal()"
                                    class="btn btn-circle btn-outline btn-sm flex border-base-content/20 hover:border-transparent hover:bg-base-content/20 sm:hidden">
                                    <Icon icon="lucide:search" height="16" class="text-base-content/60" />
                                </button>
                                <!--  Start: Search Modal -->

                                <dialog aria-label="Modal" class="modal" id="search_modal">
                                    <div class="modal-box p-0">
                                        <div class="form-control flex-row items-center rounded-box p-2 px-5">
                                            <Icon icon="lucide:search" height="18" class="text-base-content/70" />

                                            <input placeholder="Search along files"
                                                class="input input-sm w-full text-base focus:border-transparent focus:outline-0 focus:outline-offset-0" />
                                            <form method="dialog">
                                                <button aria-label="Close search modal"
                                                    class="btn btn-circle btn-ghost btn-sm gap-2">
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
                            <div class="navbar-center">
                                <Link :href="route('wallet')">
                                <ApplicationLogo
                                    class="block h-14 w-auto fill-current text-gray-800 dark:text-gray-200" />
                                </Link>
                            </div>
                            <div class="navbar-end gap-1.5">
                                <!--  Start: Theme Toggle -->
                                <button aria-label="Theme toggler"
                                    class="btn btn-circle btn-ghost btn-sm flex items-center justify-center"
                                    data-action="theme-toggle">
                                    <DarkModeToggle class="h-5 w-5" />
                                </button>

                                <!--  End: Theme Toggle -->

                                <div>
                                    <!--  Start: Notification -->

                                    <div class="dropdown dropdown-end dropdown-bottom">
                                        <label tabindex="0" class="btn btn-circle btn-ghost btn-sm">
                                            <Icon icon="lucide:bell" height="20" />
                                        </label>
                                        <ul tabindex="0"
                                            class="menu card dropdown-content card-compact m-1 w-96 rounded-box bg-base-100 p-3 shadow"
                                            role="menu">
                                            <div class="flex items-center justify-between px-2">
                                                <p class="text-base font-medium">Notification</p>
                                                <button class="btn btn-circle btn-ghost btn-sm gap-2">
                                                    <Icon icon="lucide:x" height="16" />
                                                </button>
                                            </div>
                                            <div class="flex items-center justify-center">
                                                <div
                                                    class="rounded-full border border-base-content/10 px-3 text-center">
                                                    <p class="text-xs text-base-content/80">Today</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div
                                                    class="my-0.5 flex cursor-pointer items-center gap-3 rounded-box p-1.5 transition-all hover:bg-base-content/5 active:scale-[.98]">
                                                    <img alt="" loading="lazy"
                                                        class="mask mask-circle size-9 bg-base-content/10 p-0.5"
                                                        src="assets/images/avatars/1.png" />
                                                    <div class="grow">
                                                        <p class="text-sm">Customer has requested a return for item</p>
                                                        <p class="text-xs text-base-content/60">1 Hour ago</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="my-0.5 flex cursor-pointer items-center gap-3 rounded-box p-1.5 transition-all hover:bg-base-content/5 active:scale-[.98]">
                                                    <img alt="" loading="lazy"
                                                        class="mask mask-circle size-9 bg-base-content/10 p-0.5"
                                                        src="assets/images/avatars/2.png" />
                                                    <div class="grow">
                                                        <p class="text-sm">A new review has been submitted for product
                                                        </p>
                                                        <p class="text-xs text-base-content/60">1 Hour ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 flex items-center justify-center">
                                                <div
                                                    class="rounded-full border border-base-content/10 px-3 text-center">
                                                    <p class="text-xs text-base-content/80">Yesterday</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div
                                                    class="my-0.5 flex cursor-pointer items-center gap-3 rounded-box p-1.5 transition-all hover:bg-base-content/5 active:scale-[.98]">
                                                    <img alt="" loading="lazy"
                                                        class="mask mask-circle size-9 bg-base-content/10 p-0.5"
                                                        src="assets/images/avatars/3.png" />
                                                    <div class="grow">
                                                        <p class="text-sm">Prepare for the upcoming weekend promotion
                                                        </p>
                                                        <p class="text-xs text-base-content/60">1 Hour ago</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="my-0.5 flex cursor-pointer items-center gap-3 rounded-box p-1.5 transition-all hover:bg-base-content/5 active:scale-[.98]">
                                                    <img alt="" loading="lazy"
                                                        class="mask mask-circle size-9 bg-base-content/10 p-0.5"
                                                        src="assets/images/avatars/4.png" />
                                                    <div class="grow">
                                                        <p class="text-sm">Product 'ABC123' is running low in stock.</p>
                                                        <p class="text-xs text-base-content/60">1 Hour ago</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="my-0.5 flex cursor-pointer items-center gap-3 rounded-box p-1.5 transition-all hover:bg-base-content/5 active:scale-[.98]">
                                                    <img alt="" loading="lazy"
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
                                                <button
                                                    class="btn btn-ghost btn-sm text-primary hover:bg-primary/10">View
                                                    All</button>
                                                <button
                                                    class="btn btn-ghost btn-sm text-base-content/80 hover:bg-base-content/10">
                                                    Mark as read
                                                </button>
                                            </div>
                                        </ul>
                                    </div>

                                    <!--  End: Notification -->
                                </div>
                                <!--  Start: Profile With Action Item -->

                                <div class="dropdown dropdown-end dropdown-bottom">
                                    <label tabindex="0"
                                        class="btn btn-ghost rounded-btn px-1.5 hover:bg-base-content/20">
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
                                    <ul tabindex="0"
                                        class="menu dropdown-content mt-4 w-52 rounded-box bg-base-100 p-2 shadow"
                                        role="menu">
                                        <li>
                                            <div>
                                                <Icon icon="lucide:user" height="16" />
                                                <DropdownLink :href="route('profile.edit')">My Profile</DropdownLink>
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
                                                <DropdownLink :href="route('logout')" method="post" as="span">Logout
                                                </DropdownLink>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <!--  End: Profile With Action Item -->
                            </div>
                        </div>

                        <!-- here -->
                        <main>
                            <slot />
                            <Footer />
                        </main>
                    </div>
                </div>
            </div>
        </div>


    </body>
</template>
