<template>
    <div id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="list-group list-group-flush">
                            <li><router-link tag="a" :to="'/home'">Početna</router-link></li>
                            <li><router-link tag="a" :to="'/videos/' + blog.id">{{ blog.title }}</router-link></li>
                            <li>Izmeni video</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row bela">
                <div class="col-md-12">
                    <div class="card">
                        <h5>Izmeni video</h5>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="card">
                        <form @submit.prevent="submit()">

                            <text-field :value="video.title" :label="'Naziv'" :error="error? error.title : ''" @changeValue="video.title = $event"></text-field>

                            <text-area-field :value="video.href" :label="'Link videa'" :error="error? error.href : ''" @changeValue="video.href = $event"></text-area-field>

                            <text-field :value="video.order" :label="'Redosled'" :error="error? error.order : ''" @changeValue="video.order = $event"></text-field>

                            <checkbox-field :value="video.is_visible" :label="'Publikovano'" @changeValue="video.is_visible = $event"></checkbox-field>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Izmeni</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <upload-image-helper
                            :image="video.image_path"
                            :defaultImage="null"
                            :titleImage="'videa'"
                            :error="error"
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
              fillable: ['blog_id', 'title', 'href', 'order', 'image', 'is_visible'],
              video: {
                  image_path: null,
              },
              blog: {},
              error: null,
          }
        },
        components: {
            'font-awesome-icon': FontAwesomeIcon,
            'upload-image-helper': UploadImageHelper,
        },
        mounted(){
            this.getVideo();
        },
        methods: {
            submit(){
                this.video.blog_id = this.blog.id;
                let data = fillForm(this.fillable, this.video, 'PUT');
                axios.post('api/videos/' + this.video.id, data)
                    .then(res => {
                        this.blog = res.data.blog;
                        this.video = res.data.video;
                        this.video.image_path = res.data.video.image;
                        this.video.image = '';
                        swal({
                            position: 'center',
                            type: 'success',
                            title: 'Uspeh',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
            prepare(image){
                this.video.image_path = image.src;
                this.video.image = image.file;
            },
            getVideo(){
                axios.get('api/videos/' + this.$route.params.id)
                    .then(res => {
                        this.blog = res.data.blog;
                        this.video = res.data.video;
                        this.video.image_path = res.data.video.image;
                        this.video.image = '';
                    })
                    .catch(e => {
                        console.log(e);
                        this.error = e.response.data.errors;
                    });
            },
        },
    }
</script>