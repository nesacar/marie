<template>
    <div id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="list-group list-group-flush">
                            <li><router-link tag="a" :to="'/home'">Početna</router-link></li>
                            <li><router-link tag="a" :to="'/beauty-boxes'">Beauty box</router-link></li>
                            <li>Izmena Beauty box-a</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row bela">
                <div class="col-md-12">
                    <div class="card">
                        <h5>Kreiranje Beauty box-a</h5>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="card">
                        <form @submit.prevent="submit()" v-if="trigger">

                            <text-field :value="beauty_box.title" :label="'Naziv'" :error="error? error.title : ''" :required="true" @changeValue="beauty_box.title = $event"></text-field>

                            <text-field :value="beauty_box.slug" :label="'Slug'" :error="error? error.title : ''" :required="true" @changeValue="beauty_box.slug = $event"></text-field>

                            <text-field :value="beauty_box.overtitle" :label="'Nad naslov'" :error="error? error.overtitle : ''" @changeValue="beauty_box.overtitle = $event"></text-field>

                            <text-field :value="beauty_box.subtitle" :label="'Podnaslov'" :error="error? error.subtitle : ''" @changeValue="beauty_box.subtitle = $event"></text-field>

                            <text-field :value="beauty_box.link" :label="'Link'" :error="error? error.link : ''" @changeValue="beauty_box.link = $event"></text-field>

                            <text-field :value="beauty_box.price" :label="'Cena'" :error="error? error.price : ''" @changeValue="beauty_box.price = $event"></text-field>

                            <date-time-picker :label="'Publikovano od'" :value="beauty_box.start_from" :error="error? error.start_from : ''" @changeValue="beauty_box.start_from = $event"></date-time-picker>

                            <date-time-picker :label="'Publikovano do'" :value="beauty_box.end_to" :error="error? error.end_to : ''" @changeValue="beauty_box.end_to = $event"></date-time-picker>

                            <select-multiple-field v-if="products" :error="error? error.product_ids : ''" :options="products" :value="beauty_box.product_ids" :labela="'Proizvodi'" @changeValue="beauty_box.product_ids = $event"></select-multiple-field>

                            <checkbox-field :value="beauty_box.is_visible" :label="'Vidljivo'" @changeValue="beauty_box.is_visible = $event"></checkbox-field>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Izmeni</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <upload-image-helper
                            :image="beauty_box.image_path"
                            :defaultImage="null"
                            :titleImage="'Beauty box'"
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
              fillable: ['title', 'slug', 'overtitle', 'subtitle', 'link', 'price', 'image', 'start_from', 'end_to', 'is_visible', 'product_ids'],
              trigger: false,
              beauty_box: {
                  title: null,
                  is_visible: false,
              },
              products: false,
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
        mounted(){
            this.getProducts();
        },
        methods: {
            getBeautyBox(){
                axios.get('api/beauty-boxes/' + this.$route.params.id)
                    .then(res => {
                        this.beauty_box = res.data.beauty_box;
                        this.beauty_box.product_ids = res.data.product_ids;
                        this.beauty_box.image_path = this.beauty_box.image;
                        this.beauty_box.image = null;
                        this.trigger = true;
                    })
                    .catch(e => {
                        console.log(e);
                        this.error = e.response.data.errors;
                    });
            },
            getProducts(){
                axios.get('api/products/lists')
                    .then(res => {
                        this.products = res.data.products;
                        this.getBeautyBox();
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
            submit(){
                let data = fillForm(this.fillable, this.beauty_box, 'PUT')
                axios.post('api/beauty-boxes/' + this.beauty_box.id, data)
                    .then(res => {
                        this.beauty_box = res.data.beauty_box;
                        this.beauty_box.product_ids = res.data.product_ids;
                        this.beauty_box.image_path = this.beauty_box.image;
                        this.beauty_box.image = null;
                        swal({
                            position: 'center',
                            type: 'success',
                            title: 'Success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
            prepare(image){
                this.beauty_box.image_path = image.src;
                this.beauty_box.image = image.file;
            },
        },
        watch: {
            'beauty_box.title'(){
                this.beauty_box.slug = Slug(this.beauty_box.title);
            },
        },
    }
</script>