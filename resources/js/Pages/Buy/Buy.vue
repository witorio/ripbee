<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { ref, onMounted } from 'vue'
import { usePage, Head } from '@inertiajs/vue3';
import { Icon } from '@iconify/vue';

const products = usePage().props.products // Access props from Inertia.js

const loadCDN = (url) => {
  return new Promise((resolve, reject) => {
    const script = document.createElement("script");
    script.src = url;
    script.async = true;
    script.onload = () => resolve();
    script.onerror = () => reject(new Error(`Failed to load ${url}`));
    document.head.appendChild(script);
  });
};

onMounted(() => {
      // Ensure the script is loaded after the component is mounted
      loadCDN("https://cdnjs.cloudflare.com/ajax/libs/choices.js/10.2.0/choices.min.js")
        .then(() => {
          console.log("Script loaded successfully!");
        })
        .catch((error) => {
          console.error("Error loading script:", error);
        });
    });

</script>


<template>

  <Head title="Buy" />

  <AuthenticatedLayout>
    <div class="content-wrapper">
      <div>
        <div class="flex items-center justify-between">
          <h3 class="text-lg font-medium">Buy</h3>
        </div>
        <div class="mt-5">
          <div aria-label="Card" class="card card-bordered mt-5 bg-base-100">
            <div class="card-body p-0">
              <div class="flex items-center justify-between px-5 pt-5">
                <!--  Start: Product Table Filter Input -->

                <div class="inline-flex items-center gap-3">
                  <div class="form-control flex flex-row items-center rounded-box border border-base-content/20 ps-3">
                    <Icon icon="lucide:search" height="15" class="text-base-content/60" />

                    <input placeholder="Search along products" aria-label="Search"
                      class="input input-sm w-full transition-all focus:border-transparent focus:outline-0 focus:outline-offset-0"
                      name="search" value="" />
                  </div>
                  <div class="hidden sm:block">
                    <div>
                      <div class="form-control w-48">
                        <select data-choice aria-label="Select Category">
                          <option value="">Category</option>
                          <option value="fashion">Fashion</option>
                          <option value="daily_need">Daily Need</option>
                          <option value="cosmetic">Cosmetic</option>
                          <option value="electronics">Electronics</option>
                          <option value="food">Food</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!--  End: Product Table Filter Input -->

                <!--  Start: Product Action -->

                <div class="inline-flex items-center gap-3">
                  <a aria-label="Create product link" href="./apps-ecommerce-products-create.html">
                    <button class="btn btn-primary btn-sm inline-flex">
                      <Icon icon="lucide:plus" height="16" />
                      <span class="hidden md:inline">New Product</span>
                    </button>
                  </a>
                  <div class="dropdown dropdown-left dropdown-bottom hidden md:inline">
                    <label tabindex="0" class="btn btn-ghost btn-xs h-8 border border-base-content/20">
                      <Icon icon="lucide:settings-2" height="16" />
                    </label>
                    <ul tabindex="0" class="menu dropdown-content w-52 rounded-box bg-base-100 p-2 text-sm shadow"
                      role="menu">
                      <li>
                        <div>
                          <Icon icon="lucide:wand" height="16" />
                          Bulk Actions
                        </div>
                      </li>
                      <hr class="-mx-2 my-1 border-base-content/10" />
                      <li>
                        <div>
                          <Icon icon="lucide:download-cloud" height="16" />
                          Import from Store
                        </div>
                      </li>
                      <li>
                        <div>
                          <Icon icon="lucide:copy-plus" height="16" />
                          Create from Existing
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <!--  End: Product Action -->
              </div>
              <div class="overflow-auto">
                <!--  Start: Product Table -->

                <table class="table mt-2 rounded-box" id="product_table" data-component="table">
                  <thead>
                    <tr>
                      <th>
                        <input id="product_check_all" aria-label="Check all" type="checkbox" data-slot="all-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <th>
                        <span class="text-sm font-medium text-base-content/80">ID</span>
                      </th>
                      <th>
                        <span class="text-sm font-medium text-base-content/80">Name</span>
                      </th>
                      <th>
                        <span class="text-sm font-medium text-base-content/80">
                          Category
                        </span>
                      </th>
                      <th>
                        <span class="text-sm font-medium text-base-content/80">Price</span>
                      </th>
                      <th>
                        <span class="text-sm font-medium text-base-content/80">
                          Ratings
                        </span>
                      </th>
                      <th>
                        <span class="text-sm font-medium text-base-content/80">Orders</span>
                      </th>
                      <th>
                        <span class="text-sm font-medium text-base-content/80">Stock</span>
                      </th>
                      <th>
                        <span class="text-sm font-medium text-base-content/80">
                          Created At
                        </span>
                      </th>
                      <th>
                        <span class="text-sm font-medium text-base-content/80">Action</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1001</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/1.jpg" />
                          <div>
                            <div class="font-medium">Men's tracking shoes</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #SHOES
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Fashion</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$29</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-success" />
                          4.7
                          <span class="text-sm text-base-content/70">(130)</span>
                        </div>
                      </td>
                      <td>
                        <div>10</div>
                      </td>
                      <td>
                        <div><span class="text-success">Available</span></div>
                      </td>
                      <td>
                        <div class="text-sm">26 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1002</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/2.jpg" />
                          <div>
                            <div class="font-medium">Cocooil body oil</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #COCOOIL
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Daily Need</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$16</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-success" />
                          4.2
                          <span class="text-sm text-base-content/70">(547)</span>
                        </div>
                      </td>
                      <td>
                        <div>15</div>
                      </td>
                      <td>
                        <div><span class="text-success">Available</span></div>
                      </td>
                      <td>
                        <div class="text-sm">23 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1003</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/3.jpg" />
                          <div>
                            <div class="font-medium">Freeze air</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #FREEAIR
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Cosmetic</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$32</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-warning" />
                          3.8
                          <span class="text-sm text-base-content/70">(862)</span>
                        </div>
                      </td>
                      <td>
                        <div>25</div>
                      </td>
                      <td>
                        <div><span class="text-success">Available</span></div>
                      </td>
                      <td>
                        <div class="text-sm">18 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1004</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/4.jpg" />
                          <div>
                            <div class="font-medium">Ladies's shoes</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #LASHOES
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Fashion</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$32</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-error" />
                          2.9
                          <span class="text-sm text-base-content/70">(861)</span>
                        </div>
                      </td>
                      <td>
                        <div>10</div>
                      </td>
                      <td>
                        <div><span class="text-error">Out of Stock</span></div>
                      </td>
                      <td>
                        <div class="text-sm">24 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1005</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/5.jpg" />
                          <div>
                            <div class="font-medium">Gamepad</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #GAMEPAD
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Electronics</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$59</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-success" />
                          4.1
                          <span class="text-sm text-base-content/70">(96)</span>
                        </div>
                      </td>
                      <td>
                        <div>42</div>
                      </td>
                      <td>
                        <div><span class="text-success">Available</span></div>
                      </td>
                      <td>
                        <div class="text-sm">21 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1006</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/6.jpg" />
                          <div>
                            <div class="font-medium">Blue &amp; Pink Clothes</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #BPCloth
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Fashion</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$27</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-success" />
                          4.24
                          <span class="text-sm text-base-content/70">(72)</span>
                        </div>
                      </td>
                      <td>
                        <div>31</div>
                      </td>
                      <td>
                        <div><span class="text-success">Available</span></div>
                      </td>
                      <td>
                        <div class="text-sm">23 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1007</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/7.jpg" />
                          <div>
                            <div class="font-medium">Ladies's shorts wear</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #LSWEAR
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Fashion</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$24</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-warning" />
                          3.5
                          <span class="text-sm text-base-content/70">(48)</span>
                        </div>
                      </td>
                      <td>
                        <div>42</div>
                      </td>
                      <td>
                        <div><span class="text-success">Available</span></div>
                      </td>
                      <td>
                        <div class="text-sm">24 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1008</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/8.jpg" />
                          <div>
                            <div class="font-medium">Kitchen's Fruits &amp; Vegetable</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #KFVEGE
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Food</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$45</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-error" />
                          2.7
                          <span class="text-sm text-base-content/70">(54)</span>
                        </div>
                      </td>
                      <td>
                        <div>36</div>
                      </td>
                      <td>
                        <div><span class="text-warning">Low</span></div>
                      </td>
                      <td>
                        <div class="text-sm">26 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1009</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/9.jpg" />
                          <div>
                            <div class="font-medium">Quokka Lemon Water</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #QUOKKA
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Food</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$7</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-success" />
                          4.1
                          <span class="text-sm text-base-content/70">(64)</span>
                        </div>
                      </td>
                      <td>
                        <div>27</div>
                      </td>
                      <td>
                        <div><span class="text-success">Available</span></div>
                      </td>
                      <td>
                        <div class="text-sm">20 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1010</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/10.jpg" />
                          <div>
                            <div class="font-medium">White &amp; Brown Candy</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #CANDY
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Food</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$14</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-warning" />
                          3.6
                          <span class="text-sm text-base-content/70">(84)</span>
                        </div>
                      </td>
                      <td>
                        <div>42</div>
                      </td>
                      <td>
                        <div><span class="text-error">Out of Stock</span></div>
                      </td>
                      <td>
                        <div class="text-sm">18 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cursor-pointer hover:bg-base-200/40">
                      <th>
                        <input aria-label="Single check" type="checkbox" data-slot="single-checkbox"
                          class="checkbox checkbox-xs" />
                      </th>
                      <td>
                        <div class="font-medium">1011</div>
                      </td>
                      <td>
                        <div class="flex items-center space-x-3 truncate">
                          <img alt="Product Image" loading="lazy" width="40" height="40" class="size-10 rounded-box"
                            src="assets/images/apps/ecommerce/products/11.jpg" />
                          <div>
                            <div class="font-medium">Yellow Ice cream</div>
                            <div class="text-xs font-medium text-base-content/70">
                              #ICECREAM
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="font-medium">Food</div>
                      </td>
                      <td>
                        <div class="text-sm font-medium">$15</div>
                      </td>
                      <td>
                        <div class="flex items-center gap-2">
                          <Icon icon="lucide:star" height="16" class="text-success" />
                          4.9
                          <span class="text-sm text-base-content/70">(52)</span>
                        </div>
                      </td>
                      <td>
                        <div>31</div>
                      </td>
                      <td>
                        <div><span class="text-success">Available</span></div>
                      </td>
                      <td>
                        <div class="text-sm">22 Jun 2024</div>
                      </td>
                      <td>
                        <div class="inline-flex w-fit">
                          <a aria-label="Edit product link" href="./apps-ecommerce-products-edit.html">
                            <button aria-label="Edit product" class="btn btn-square btn-ghost btn-sm">
                              <Icon icon="lucide:pencil" height="15" class="text-base-content/70" />
                            </button>
                          </a>
                          <button aria-label="Dummy show product" class="btn btn-square btn-ghost btn-sm">
                            <Icon icon="lucide:eye" height="16" class="text-base-content/70" />
                          </button>
                          <button onclick="delete_modal.showModal()" aria-label="Dummy delete product"
                            class="btn btn-square btn-ghost btn-sm text-error/70 hover:bg-error/20">
                            <Icon icon="lucide:trash" height="16" />
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <!--  End: Product Table -->
              </div>
              <div class="flex items-center justify-end px-5 pb-5 pt-3">
                <!--  Start: Product Table Pagination -->

                <div class="join">
                  <button aria-label="pagination-prev" class="btn join-item btn-sm gap-2">
                    <Icon icon="lucide:chevron-left" height="16" />
                  </button>
                  <button aria-label="pagination-1" class="btn btn-primary join-item btn-active btn-sm">
                    1
                  </button>
                  <button aria-label="pagination-2" class="btn join-item btn-sm">2</button>
                  <button aria-label="pagination-next" class="btn join-item btn-sm gap-2">
                    <Icon icon="lucide:chevron-right" height="16" />
                  </button>
                </div>

                <!--  End: Product Table Pagination -->
              </div>
            </div>
          </div>

          <!--  Start: Product Delete Confirmation Modal -->

          <dialog aria-label="Modal" class="modal" id="delete_modal">
            <div class="modal-box">
              <form method="dialog">
                <button aria-label="Close modal" class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">
                  <Icon icon="lucide:x" height="14" />
                </button>
              </form>
              <div class="mb-8 w-full text-xl font-bold">Confirm Delete</div>
              <div>
                You are about to delete
                <b>Product</b>
                . Would you like to proceed further ?
              </div>
              <div class="modal-action">
                <form method="dialog">
                  <button class="btn btn-error btn-sm">No</button>
                </form>
                <form method="dialog">
                  <button class="btn btn-primary btn-sm">Yes</button>
                </form>
              </div>
            </div>
            <form class="modal-backdrop" method="dialog">
              <button>close</button>
            </form>
          </dialog>

          <!--  End: Product Delete Confirmation Modal -->
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>