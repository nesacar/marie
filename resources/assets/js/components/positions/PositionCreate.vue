<template>
    <div id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="list-group list-group-flush">
                            <li><router-link tag="a" :to="'/home'">Početna</router-link></li>
                            <li><router-link tag="a" :to="'/positions'">Banerske pozicije</router-link></li>
                            <li>Kreiranje banerske pozicije</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row bela">
                <div class="col-md-12">
                    <div class="card">
                        <h5>Kreiranje banerske pozicije</h5>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="card">
                        <form @submit.prevent="submit()">

                            <text-field :value="position.position_id" :label="'ID'" :error="error? error.position_id : ''" :required="true" @changeValue="position.position_id = $event"></text-field>

                            <text-field :value="position.title" :label="'Naziv'" :error="error? error.title : ''" :required="true" @changeValue="position.title = $event"></text-field>

                            <text-field :value="position.numero" :label="'Numero'" :error="error? error.numero : ''" :required="true" @changeValue="position.numero = $event"></text-field>

                            <text-field :value="position.class" :label="'Klasa'" :error="error? error.class : ''" :required="true" @changeValue="position.class = $event"></text-field>

                            <checkbox-field :value="position.is_visible" :label="'Vidljivo'" @changeValue="position.is_visible = $event"></checkbox-field>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Kreiraj</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
    import swal from 'sweetalert2';

    export default {
        data(){
          return {
              fillable: ['position_id', 'title', 'numero', 'class', 'is_visible'],
              position: {},
              error: null,
          }
        },
        computed: {
            user(){
                return this.$store.getters['user/getUser'];
            },
            admin(){
                return this.$store.getters['user/isAdmin'];
            },
        },
        components: {
            'font-awesome-icon': FontAwesomeIcon,
        },
        methods: {
            submit(){
                let data = fillForm(this.fillable, this.position)
                axios.post('api/positions', data)
                    .then(res => {
                        swal({
                            position: 'center',
                            type: 'success',
                            title: 'Success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        this.$router.push('/positions');
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
        },
    }
</script>