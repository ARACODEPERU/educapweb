<script setup>
    import AppLayout from '@/Layouts/Vristo/AppLayout.vue';
    import { useForm } from '@inertiajs/vue3';
    import { faTrashAlt, faPencilAlt } from "@fortawesome/free-solid-svg-icons";
    import Pagination from '@/Components/Pagination.vue'
    import Navigation from '@/Components/vristo/layout/Navigation.vue';

    const props = defineProps({
        providers: {
            type: Object,
            default: () => ({}),
        },
        filters: {
            type: Object,
            default: () => ({}),
        },
    })
    const form = useForm({
        search: props.filters.search,
    });

    const formDelete = useForm({});

    function destroy(id) {
        if (confirm("¿Estás seguro de que quieres eliminar?")) {
            formDelete.delete(route('providers.destroy', id));
        }
    }
</script>

<template>
    <AppLayout title="Proveedores">
        <Navigation :routeModule="route('sales_dashboard')" :titleModule="'Ventas'">
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Proveedores</span>
            </li>
        </Navigation>
        <div class="mt-5">
            <div class="panel p-0">
                <div class="w-full p-4">
                    <form @submit.prevent="form.get(route('providers.index'))">
                        <div class="grid grid-cols-3 gap-4 py-2">
                            <div>
                                <input type="search" v-model="form.search"
                                class="
                                        form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                    "
                                placeholder="Escriba nombre">
                            </div>
                            <div class="">
                                <button type='submit' class='inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out'>
                                    Buscar
                                </button>
                            </div>
                            <div class="text-right">
                                <a :href="route('providers.create')" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Nuevo</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="border-t mb-4" style="width: 100%;">
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="w-2.5 text-sm font-medium text-gray-900 px-6 py-2.5 border-r">
                                #
                                </th>
                                <th scope="col" class="w-4 text-sm font-medium text-gray-900 px-6 py-2.5 border-r">
                                    Acción
                                </th>
                                <th scope="col" class="w-4 text-sm font-medium text-gray-900 px-6 py-2.5 border-r">
                                    RUC
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2.5 border-r">
                                    Nombre de Proveedor
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2.5 border-r">
                                    Nombre Corto
                                </th>
                                <th scope="col" class="text-left text-sm font-medium text-gray-900 px-6 py-2.5">
                                    Descripción
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(provider, index) in providers.data" :key="provider.id" class="border-b">
                                <td class="text-center px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r">
                                    {{ index + 1 }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    <div class="flex space-x-2 justify-center">
                                        <div>
                                            <a :href="route('providers.edit',provider.id)" class="mr-1 inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                                                <font-awesome-icon :icon="faPencilAlt" />
                                            </a>
                                            <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                            @click="destroy(provider.id)"
                                            >
                                            <font-awesome-icon :icon="faTrashAlt" />
                                        </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ provider.number }}
                                </td>
                                <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ provider.full_name }}
                                </td>
                                <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ provider.short_name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ provider.description }}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <Pagination :data="providers" />
                    
                </div>
            </div>
        </div>
    </AppLayout>
</template>
