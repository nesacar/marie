<template>
    <div id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="list-group list-group-flush">
                            <li><router-link tag="a" :to="'/home'">Početna</router-link></li>
                            <li>Beauty Box</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5>Beauty Box</h5>
                        <font-awesome-icon icon="plus" @click="addRow()" class="new-link-add" />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card-scrollable">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">naziv</th>
                                <th scope="col">vidljivo</th>
                                <th>akcija</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="row in beauty_boxes">
                                <td>{{ row.id }}</td>
                                <td>{{ row.title }}</td>
                                <td>{{ row.is_visible? 'Da' : 'Ne' }}</td>
                                <td>
                                    <router-link tag="a" :to="'beauty-boxes/' + row['id'] + '/edit'" class="edit-link"><font-awesome-icon icon="pencil-alt"/></router-link>
                                    <font-awesome-icon icon="times" @click="deleteRow(row)" />
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <paginate-helper :paginate="paginate" @clickLink="clickToLink($event)"></paginate-helper>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PaginateHelper from '../helper/PaginateHelper.vue';
    import swal from 'sweetalert2';
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome';

    export default {
        data(){
            return {
                beauty_boxes: {},
                paginate: {},
            }
        },
        components: {
            'paginate-helper': PaginateHelper,
            'font-awesome-icon': FontAwesomeIcon,
        },
        mounted(){
            this.getBeautyBoxes();
        },
        methods: {
            getBeautyBoxes(){
                axios.get('api/beauty-boxes')
                    .then(res => {
                        this.beauty_boxes = res.data.beauty_boxes.data;
                        this.paginate = res.data.beauty_boxes;
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            editRow(id){
                this.$router.push('beauty-boxes/' + id + '/edit');
            },
            deleteRow(row){
                swal({
                    title: 'Da li ste sigurni?',
                    text: "Nećete moći da povratite radnju!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#51d2b7',
                    cancelButtonColor: '#fb9678',
                    confirmButtonText: 'Da, obriši ga!',
                    cancelButtonText: 'Odustani'
                }).then((result) => {
                    if (result.value) {
                        axios.delete('api/beauty-boxes/' + row.id)
                            .then(res => {
                                this.beauty_boxes = this.beauty_boxes.filter(function (item) {
                                    return row.id != item.id;
                                });
                                swal(
                                    'Obrisano!',
                                    'Beauty box je uspešno obrisan.',
                                    'success'
                                );
                            })
                            .catch(e => {
                                console.log(e);
                            });
                    }
                });
            },
            clickToLink(index){
                axios.get('api/beauty-boxes?page=' + index)
                    .then(res => {
                        this.beauty_boxes = res.data.beauty_boxes.data;
                        this.paginate = res.data.beauty_boxes;
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            addRow(){
                this.$router.push('/beauty-boxes/create');
            },
        },
    }
</script>