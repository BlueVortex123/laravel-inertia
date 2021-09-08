<template>
    <layout>
        <div class="container py-5">
            <div class="row justify-content-center">
                <h3 class="text-center mb-5">Editare cladire {{ building.name }}</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <form @submit.prevent="submit">
                        <div class="form-group">
                            <label for='assembly_id'>Complex</label>
                            <select v-model="form.assembly_id" class="custom-select">
                                <option v-for="assembly in assemblies" :key="assembly.id" :value="assembly.id">{{ assembly.name }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Nume</label>
                            <input class="form-control" id="title" v-model="form.name" />
                            <div v-if="errors.name" class="text-danger">{{ errors.name }}</div>
                        </div>
                        <div class="form-group">
                            <label for="title">Numar Etaje</label>
                            <input class="form-control" id="title" v-model="form.no_floors" />
                            <div v-if="errors.no_floors" class="text-danger">{{ errors.no_floors }}</div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '../../components/Layout.vue'
export default {
    props: {
        errors: Object,
        building: Object,
        assemblies: []
    },
    components: {
      Layout,
    },
    data() {
        return {
            form: {
                name: this.building.name,
                no_floors: this.building.no_floors,
                assembly_id: this.building.assembly_id,
            },
        }
    },
    methods: {
        submit() {
            this.$inertia.put(`/buildings/${this.building.id}`, this.form)
        },
    },
}
</script>