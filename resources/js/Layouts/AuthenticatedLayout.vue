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

const showingNavigationDropdown = ref(false);
</script>

<template>
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
            stroke="currentColor">
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </div>
        <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
            <NavLink :href="route('welcome')">
                How it works
            </NavLink>
        </ul>
        </div>
        <!-- Menu items -->
        <ul class="menu menu-horizontal px-1">
            <NavLink :href="route('wallet')" :active="route().current('wallet')">
                Wallet
            </NavLink>
            <NavLink :href="route('buy')" :active="route().current('buy')">
                Buy
            </NavLink>
            <NavLink :href="route('sell')" :active="route().current('sell')">
                Sell
            </NavLink>
            <NavLink :href="route('deposit')" :active="route().current('deposit')">
                Deposit
            </NavLink>
        </ul>

    </div>
    <div class="navbar-center">
        <Link :href="route('wallet')">
            <ApplicationLogo
                class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"
            />
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
            stroke="currentColor">
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
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
            stroke="currentColor">
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
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
                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
            </div>
        </div>
        <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
            <DropdownLink :href="route('profile.edit')"> Profile <span class="badge">New</span></DropdownLink>
            <DropdownLink :href="route('logout')" method="post" as="button">
                Logout
            </DropdownLink>
        </ul>
        </div>    
        <!-- Dark Mode Toggle -->
        <DarkModeToggle class="ms-3" />
    </div>
    </div>
    <div>
        <div class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Page Heading -->
            <header class="bg-white dark:bg-gray-800 shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
            <Footer>
            </Footer>
        </div>
    </div>
</template>
