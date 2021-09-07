<template>
    <layout>
        <div class="container py-4">
            <div class="row mx-auto">
                <h3 class="text-center mb-5">Complexe</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <table class="table" v-if="assemblies.length">
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
                                <td>{{ assembly.name }}</td>
                                <td class="row mx-auto"> 
                                    <button type="submit" class="btn btn-secondary btn-sm">Edit</button>
                                    <button type="submit" class="btn btn-danger btn-sm ml-1">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center" v-else>
                        <h5>No Categories Yet!</h5>
                        <p>
                            <Link class="btn btn-primary" href="/assemblies/create">Creare Complex</Link>
                        </p>
                    </div>
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
    
}
</script>