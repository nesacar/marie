<template>
    <div id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="list-group list-group-flush">
                            <li><router-link tag="a" :to="'/home'">Početna</router-link></li>
                            <li>Tagovi</li>
                        </ul>
                    </div>
                </div>
            </div>

            <search-helper :lists="[]" :search="searchTag" :enableList="false" @updateSearch="search($event)"></search-helper>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5>Tagovi</h5>
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
                                <th scope="col">publikovano</th>
                                <th scope="col">kreirano</th>
                                <th>akcija</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="row in tags">
                                <td>{{ row.id }}</td>
                                <td>{{ row.title }}</td>
                                <td>{{ row.is_visible? 'Da' : 'Ne' }}</td>
                                <td>{{ row.created_at }}</td>
                                <td>
                                    <router-link tag="a" :to="'tags/' + row['id'] + '/edit'" class="edit-link"><font-awesome-icon icon="pencil-alt"/></router-link>
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
    import SearchHelper from '../helper/SearchHelper.vue';
    import swal from 'sweetalert2';
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome';

    export default {
        data(){
            return {
                tags: {},
                paginate: {}
            }
        },
        components: {
            'paginate-helper': PaginateHelper,
            'font-awesome-icon': FontAwesomeIcon
        },
        computed: {
            searchTag(){
                return this.$store.getters['search/getSearchTag'] || false;
            },
        },
        mounted(){
            this.getTag();
        },
        methods: {
            getTag(){
                axios.post('api/tags/search', this.searchTag)
                    .then(res => {
                        this.tags = res.data.tags.data;
                        this.paginate = res.data.tags;
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            search(value){
                this.$store.dispatch('search/changeSearchTag', value);
                this.$store.dispatch('search/changeSearchTagPage', 1);
                axios.post('api/tags/search', this.searchTag)
                    .then(res => {
                        this.tags = res.data.tags.data;
                        this.paginate = res.data.tags;
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            editRow(id){
                this.$router.push('tags/' + id + '/edit');
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
                        axios.delete('api/tags/' + row.id)
                            .then(res => {
                                this.tags = this.tags.filter(function (item) {
                                    return row.id != item.id;
                                });
                                swal(
                                    'Obrisano!',
                                    'Tag je uspešno obrisan.',
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
                this.$store.dispatch('search/changeSearchTagPage', index);
                axios.post('api/tags/search', this.searchTag)
                    .then(res => {
                        this.tags = res.data.tags.data;
                        this.paginate = res.data.tags;
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            addRow(){
                this.$router.push('/tags/create');
            },
        }
    }
</script>