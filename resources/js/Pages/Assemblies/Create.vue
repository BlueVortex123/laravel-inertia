<template>
    <layout>
        <div class="container py-5">
            <div class="row justify-content-center">
                <h3 class="text-center mb-5">Creeare Complex</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <form @submit.prevent="submit">
                        <div class="form-group">
                            <label for="name">Nume Complex</label>
                            <input class="form-control" id="name" v-model="form.name" />
                            <div v-if="errors.name" class="text-danger">{{ errors.name }}</div>
                        </div>
                        <div class="form-group">
                            <label for="name">Adresa</label>
                            <input class="form-control" id="address" v-model="form.address" />
                            <div v-if="errors.address" class="text-danger">{{ errors.address }}</div>
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
    },
    components: {
      Layout,
    },
    data() {
        return {
            form: {
                name: null,
                address: null,
            },
        }
    },
  methods: {
    submit() {
      this.$inertia.post('/assemblies', this.form)
    },
  },
}
</script>