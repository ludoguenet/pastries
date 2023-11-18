<template>
    <div class="bg-white">
        <div class="py-16 sm:py-24">
            <div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8">
                <div class="max-w-2xl px-4 lg:max-w-4xl lg:px-0">
                    <h1
                        class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl"
                    >
                        Historique de vos pâtisseries
                    </h1>
                    <p class="mt-2 text-sm text-gray-500">
                        Vérifiez l'état des commandes récentes, gérez les
                        retours et découvrez des produits similaires.
                    </p>
                </div>
            </div>

            <div class="mt-16">
                <h2 class="sr-only">Commandes récentes</h2>
                <div class="mx-auto max-w-5xl sm:px-2 lg:px-8">
                    <div
                        class="max-w-2xl space-y-8 sm:px-4 lg:max-w-4xl lg:px-0"
                    >
                        <div
                            class="border-b border-t border-gray-200 bg-white shadow-sm sm:rounded-lg sm:border"
                        >
                            <h3 class="sr-only">
                                Order placed on
                                <time datetime="2021-07-06">Jul 6, 2021</time>
                            </h3>

                            <div
                                class="flex items-center border-b border-gray-200 p-4 sm:grid sm:grid-cols-4 sm:gap-x-6 sm:p-6"
                            >
                                <dl
                                    class="grid flex-1 grid-cols-2 gap-x-6 text-sm sm:col-span-3 sm:grid-cols-3 lg:col-span-2"
                                >
                                    <div>
                                        <dt class="font-medium text-gray-900">
                                            Numéro
                                        </dt>
                                        <dd class="mt-1 text-gray-500">
                                            WU88191111
                                        </dd>
                                    </div>
                                    <div class="hidden sm:block">
                                        <dt class="font-medium text-gray-900">
                                            Commandé le
                                        </dt>
                                        <dd class="mt-1 text-gray-500">
                                            <time datetime="2021-07-06"
                                                >Jul 6, 2021</time
                                            >
                                        </dd>
                                    </div>
                                    <div>
                                        <dt class="font-medium text-gray-900">
                                            Montant
                                        </dt>
                                        <dd
                                            class="mt-1 font-medium text-gray-900"
                                        >
                                            160,00 €
                                        </dd>
                                    </div>
                                </dl>

                                <div
                                    class="relative flex justify-end lg:hidden"
                                >
                                    <div class="flex items-center">
                                        <button
                                            type="button"
                                            class="-m-2 flex items-center p-2 text-gray-400 hover:text-gray-500"
                                            id="menu-0-button"
                                            aria-expanded="false"
                                            aria-haspopup="true"
                                        >
                                            <span class="sr-only"
                                                >Options for order
                                                WU88191111</span
                                            >
                                            <svg
                                                class="h-6 w-6"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                aria-hidden="true"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"
                                                />
                                            </svg>
                                        </button>
                                    </div>

                                    <!--
                  Dropdown menu, show/hide based on menu state.

                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                                    <div
                                        class="absolute right-0 z-10 mt-2 w-40 origin-bottom-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu"
                                        aria-orientation="vertical"
                                        aria-labelledby="menu-0-button"
                                        tabindex="-1"
                                    >
                                        <div class="py-1" role="none">
                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                            <a
                                                href="#"
                                                class="text-gray-700 block px-4 py-2 text-sm"
                                                role="menuitem"
                                                tabindex="-1"
                                                id="menu-0-item-0"
                                                >View</a
                                            >
                                            <a
                                                href="#"
                                                class="text-gray-700 block px-4 py-2 text-sm"
                                                role="menuitem"
                                                tabindex="-1"
                                                id="menu-0-item-1"
                                                >Invoice</a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="hidden lg:col-span-2 lg:flex lg:items-center lg:justify-end lg:space-x-4"
                                >
                                    <a
                                        href="#"
                                        class="flex items-center justify-center rounded-md border border-gray-300 bg-white px-2.5 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2"
                                    >
                                        <span>Voir commande</span>
                                        <span class="sr-only">WU88191111</span>
                                    </a>
                                    <a
                                        href="#"
                                        class="flex items-center justify-center rounded-md border border-gray-300 bg-white px-2.5 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2"
                                    >
                                        <span>Voir facture</span>
                                        <span class="sr-only"
                                            >for order WU88191111</span
                                        >
                                    </a>
                                </div>
                            </div>

                            <!-- Products -->
                            <h4 class="sr-only">Items</h4>
                            <ul role="list" class="divide-y divide-gray-200">
                                <li
                                    v-for="pastry in pastries"
                                    class="p-4 sm:p-6"
                                >
                                    <div
                                        class="flex items-center sm:items-start"
                                    >
                                        <div
                                            class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-lg bg-gray-200 sm:h-40 sm:w-40"
                                        >
                                            <img
                                                :src="`/storage/pastries/${pastry.image_path}`"
                                                alt="Moss green canvas compact backpack with double top zipper, zipper front pouch, and matching carry handle and backpack straps."
                                                class="h-full w-full object-cover object-center"
                                            />
                                        </div>
                                        <div class="ml-6 flex-1 text-sm">
                                            <div
                                                class="font-medium text-gray-900 sm:flex sm:justify-between"
                                            >
                                                <h5 v-text="pastry.name" />
                                                <p class="mt-2 sm:mt-0">
                                                    {{
                                                        new Intl.NumberFormat(
                                                            "de-DE",
                                                            {
                                                                style: "currency",
                                                                currency: "EUR",
                                                            }
                                                        ).format(
                                                            pastry.price_in_cents /
                                                                100
                                                        )
                                                    }}
                                                </p>
                                            </div>
                                            <p
                                                class="hidden text-gray-500 sm:mt-2 sm:block"
                                            >
                                                {{ pastry.description }}
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="mt-6 sm:flex sm:justify-between"
                                    >
                                        <div class="flex items-center">
                                            <svg
                                                class="h-5 w-5 text-sky-500"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                                aria-hidden="true"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                            <p
                                                class="ml-2 text-sm font-medium text-gray-500"
                                            >
                                                Acheté le
                                                <time datetime="2021-07-12">{{
                                                    formatDate(
                                                        pastry.delivered_at
                                                    )
                                                }}</time>
                                            </p>
                                        </div>

                                        <div
                                            class="mt-6 flex items-center space-x-4 divide-x divide-gray-200 border-t border-gray-200 pt-4 text-sm font-medium sm:ml-4 sm:mt-0 sm:border-none sm:pt-0"
                                        >
                                            <div
                                                class="flex flex-1 justify-center"
                                            >
                                                <a
                                                    href="#"
                                                    class="whitespace-nowrap text-amber-600 hover:text-amber-500"
                                                    >Voir le produit</a
                                                >
                                            </div>
                                            <div
                                                class="flex flex-1 justify-center pl-4"
                                            >
                                                <a
                                                    @click.prevent="
                                                        refundAction(pastry.id)
                                                    "
                                                    href="#"
                                                    class="whitespace-nowrap text-amber-600 hover:text-amber-500"
                                                >
                                                    Demande un remboursement
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- More orders... -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { onMounted, ref } from "vue";
import axios from "axios";

const pastries = ref([]);

const formatDate = (dateToFormat: string) => {
    let date = new Date(dateToFormat);

    let year = date.getUTCFullYear();
    let month = (date.getUTCMonth() + 1).toString().padStart(2, "0"); // Les mois sont de 0 à 11, donc on ajoute 1
    let day = date.getUTCDate().toString().padStart(2, "0");

    let formattedDate = `${day}/${month}/${year}`;

    return formattedDate;
};

const refundAction = async (id: number) => {
    try {
        let { data } = await axios.post(`/api/pastries/refund/${id}`, {
            type: "refund",
        });

        console.log(data);
    } catch (error) {
        new Error(error);
    }
};

onMounted(async () => {
    await axios
        .post("/login", {
            email: "test@example.com",
            password: "password",
        })
        .then((res) => console.log(res));

    await axios.get("/api/pastries").then((res) => (pastries.value = res.data));
});
</script>
