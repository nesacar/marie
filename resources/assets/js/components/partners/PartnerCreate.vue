<template>
    <div id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="list-group list-group-flush">
                            <li><router-link tag="a" :to="'/home'">Početna</router-link></li>
                            <li><router-link tag="a" :to="'/partners'">Partneri</router-link></li>
                            <li>Kreiranje partnera</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row bela">
                <div class="col-md-12">
                    <div class="card">
                        <h5>Kreiranje partnera</h5>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="card">
                        <form @submit.prevent="submit()">

                            <text-field :value="partner.title" :label="'Naziv'" :error="error? error.title : ''" :required="true" @changeValue="partner.title = $event"></text-field>

                            <text-field :value="partner.slug" :label="'slug'" :error="error? error.slug : ''" @changeValue="partner.slug = $event"></text-field>

                            <text-field :value="partner.link" :label="'Link'" :error="error? error.link : ''" @changeValue="partner.link = $event"></text-field>

                            <text-area-ckeditor-field :value="partner.short" :label="'Kratak opis'" :error="error? error.short : ''" @changeValue="partner.short = $event"></text-area-ckeditor-field>

                            <text-field :value="partner.order" :label="'Redosled'" :error="error? error.order : ''" @changeValue="partner.order = $event"></text-field>

                            <checkbox-field :value="partner.is_visible" :label="'Vidljivo'" @changeValue="partner.is_visible = $event"></checkbox-field>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Kreiraj</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <upload-image-helper
                            :image="partner.image_path"
                            :defaultImage="null"
                            :titleImage="'partnera'"
                            :error="error"
                            :dimensions="''"
                            @uploadImage="prepare($event)"
                            @removeRow="remove($event)"
                    ></upload-image-helper>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
    import UploadImageHelper from '../helper/UploadImageHelper.vue';
    import swal from 'sweetalert2';

    export default {
        data(){
            return {
                fillable: ['title', 'slug', 'link', 'short', 'order', 'image', 'is_visible'],
                partner: {
                    title: null,
                    is_visible: false,
                },
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
            'upload-image-helper': UploadImageHelper,
        },
        methods: {
            submit(){
                let data = fillForm(this.fillable, this.partner)
                axios.post('api/partners', data)
                    .then(res => {
                        this.partner = res.data.partner;
                        swal({
                            position: 'center',
                            type: 'success',
                            title: 'Success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        this.$router.push('/partners');
                    }).catch(e => {
                    console.log(e.response);
                    this.error = e.response.data.errors;
                });
            },
            prepare(image){
                this.partner.image_path = image.src;
                this.partner.image = image.file;
            },
        },
        watch: {
            'partner.title'(){
                this.partner.slug = Slug(this.partner.title);
            },
        },
    }
</script>