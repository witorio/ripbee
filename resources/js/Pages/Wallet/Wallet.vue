<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Icon } from '@iconify/vue';
</script>

<template>
    <Head title="Wallet" />

    <AuthenticatedLayout>

        <div class="content-wrapper">
              <div>
                <div class="flex items-center justify-between">
                  <h3 class="text-lg font-medium">Wallet</h3>
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
                            <Icon
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
                            <Icon
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
                            <Icon
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
                            <Icon
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
                                        <Icon
                                          icon="lucide:eye"
                                          height="20"
                                          class="text-base-content/70" />
                                      </button>
                                      <button
                                        aria-label="Delete product"
                                        class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                                        <Icon
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
                                        <Icon
                                          icon="lucide:eye"
                                          height="20"
                                          class="text-base-content/70" />
                                      </button>
                                      <button
                                        aria-label="Delete product"
                                        class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                                        <Icon
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
                                        <Icon
                                          icon="lucide:eye"
                                          height="20"
                                          class="text-base-content/70" />
                                      </button>
                                      <button
                                        aria-label="Delete product"
                                        class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                                        <Icon
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
                                        <Icon
                                          icon="lucide:eye"
                                          height="20"
                                          class="text-base-content/70" />
                                      </button>
                                      <button
                                        aria-label="Delete product"
                                        class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                                        <Icon
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
                            <Icon
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
                            <Icon
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
    </AuthenticatedLayout>
</template>
