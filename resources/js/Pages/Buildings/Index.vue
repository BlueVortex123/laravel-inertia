<template>
    <layout>
        <div class="container py-4">
            <div class="row mx-auto">
                <h3 class="text-center mb-5">Cladiri</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                     <Link href="/buildings/create" class="button btn-primary btn-sm float-md-right">Creeare Bloc</Link>
                    <table class="table" v-if="buildings.length">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Numele Bloc</th>
                                <th scope="col">Nume Complex</th>
                                <th scope="col">Numar etaje</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="building in buildings" :key="building.id">
                                <td>{{ building.id }}</td>
                                <td>{{ building.name }}</td>
                                <td>{{ building.assembly.name }}</td>
                                <td>{{ building.no_floors }}</td>
                                <td class="row mx-auto"> 
                                    <a href="#" class="btn btn-secondary btn-sm">Edit</a>                                    
                                    <button type="submit" class="btn btn-danger btn-sm ml-1">Delete</button>
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
        buildings: []
    },
    data() {
        return {
            message: ''
        }
    },
    
}
</script>