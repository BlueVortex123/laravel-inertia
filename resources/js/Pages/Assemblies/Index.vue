<template>
    <layout>
        <div class="container py-4">
            <div class="row mx-auto">
                <h3 class="text-center mb-5">Complexe</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <Link href="/assemblies/create" class="button btn-primary btn-sm float-md-right">Creeare complexe</Link>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Numele</th>
                                <th scope="col">Adresa</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="assembly in assemblies" :key="assembly.id">
                                <td>{{ assembly.id }}</td>
                                <td>{{ assembly.name }}</td>
                                <td>{{ assembly.address }}</td>
                                <td class="row mx-auto"> 
                                    <Link :href="`/assemblies/${assembly.id}/edit`" class="btn btn-secondary btn-sm">Edit</Link>                                    
                                    <button type="submit" @click.prevent="submit(`${assembly.id}`)" class="btn btn-danger btn-sm ml-1">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '../../components/Layout.vue';
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/inertia-vue';
export default {
    components: {
        Layout,
        Link
    },
    props: {
        assemblies: []
    },

    methods: {
        submit(id) {
            Inertia.delete(`/assemblies/${id}`)
        },
    },
    
}
</script>