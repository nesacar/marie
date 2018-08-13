<template>

    <div style="Margin:0px auto;max-width:600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
            <tbody>
            <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                    <!-- body -->
                    <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                            <!-- fetured article -->
                            <tr>
                                <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:0;word-break:break-word;position: relative;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                        <tbody>
                                        <tr>

                                            <img class="close" :src="domain + 'img/close.png'" @click="deleteRow(index)" v-if="!newsletter.send">
                                            <router-link tag="a" class="clicks" :to="'/clicks/' + newsletter.id + '/posts/' + item.post.id" v-if="newsletter.send">{{ clicks }}</router-link>

                                            <td style="width:550px;" v-if="item.post == null">
                                                <a href="#" target="_blank">
                                                    <img height="auto" :src="domain + 'img/newsletter-post.jpg'" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="550"/>
                                                </a>
                                            </td>

                                            <td style="width:550px;" v-else>
                                                <a :href="item.post.link" target="_blank">
                                                    <img height="auto" :src="domain + item.post.image" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="550"/>
                                                </a>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                        <tbody>
                                        <tr>

                                            <td style="width:550px; position: relative;">
                                                <select2 :options="posts" :value="item.item1" :name="item.component" @input="input($event)" v-if="!newsletter.send">
                                                    <option value="0">select one</option>
                                                </select2>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                    <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;" v-if="item.post == null">
                                        <div class="detail"> <a class="detail_cat" href="$">kategory</a> | <span class="detail_date">01.02.2018</span> </div>
                                        <h1 class="serif">Naslov članka</h1>
                                        <p class="p">Kratak opis članka</p>
                                        <div class="action-footer"> <a class="btn" href="#">saznaj više</a> </div>
                                    </div>
                                    <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;" v-else>
                                        <div class="detail"> <a class="detail_cat" :href="item.post.blog[0].link">{{ item.post.blog[0].title }}</a> | <span class="detail_date">01.02.2018</span> </div>
                                        <h1 class="serif">{{ item.post.title }}</h1>
                                        <p class="p">{{ item.post.short }}</p>
                                        <div class="action-footer"> <a class="btn" :href="item.post.link">saznaj više</a> </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- ./fetured article -->

                </td>
            </tr>
            </tbody>
        </table>
    </div>


</template>

<script>
    import Select2 from '../../helper/Select2Helper.vue';
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome';

    export default {
        data(){
          return {
              domain: domain,
              clicks: 0
          }
        },
        props: ['posts', 'fullPosts', 'index', 'item', 'edit', 'newsletter'],
        mounted(){
            if(this.edit){
                this.$emit('setItem', {type: 'post', item1: this.item.post, item2: null, index: this.index});
                this.getClicks();
            }
        },
        components: {
            'font-awesome-icon': FontAwesomeIcon,
            'select2': Select2,
        },
        methods: {
            deleteRow(index){
                this.$emit('deleteRow', index);
            },
            input(post_id){
                if(post_id == 0){
                    this.item.post = null;
                    this.$emit('setItem', {type: 'post', item1: this.item.post, item2: null, index: this.index});
                }else{
                    this.item.post = this.fullPosts.find(p => p.id == post_id);
                    this.$emit('setItem', {type: 'post', item1: this.item.post, item2: null, index: this.index});
                }
            },
            getClicks(){
                axios.get('api/clicks/' + this.newsletter.id + '/posts/' + this.item.post.id)
                    .then(res => {
                        this.clicks = res.data.clicks;
                    })
                    .catch(e => {
                        console.log(e);
                    });
            }
        }
    }
</script>

<style scoped>
    a {
        color: inherit;
    }

    .serif {
        font-family: "Playfair", serif;
    }

    .link {
        color: inherit;
    }

    .link:hover {
        color: #1ca9c7;
    }

    .sub-footer {
        font-size: 12px;
        line-height: 1.5;
        margin: 0;
        color: #9E9E9E;
    }

    .detail {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 12px;
        color: #9E9E9E;
        padding: 4px 0;
    }

    .detail_cat {
        color: rgba(0, 0, 0, .87);

        text-decoration: none;
        margin-right: 4px;
    }

    .detail_cat:hover {
        text-decoration: underline;
        color: rgba(0, 0, 0, .87);
    }

    .detail_date {
        margin-left: 4px;
    }

    .p {
        font-size: 14px;
        line-height: 1.5;
    }

    .action-footer {
        text-align: right;
    }

    .btn {
        text-decoration: none;
        text-transform: uppercase;
        font-weight: bold;
        display: inline-block;
        padding: 10px 12px;
        border: 1px solid rgba(0, 0, 0, .12);
        color: #9E9E9E;
    }

    .btn:hover {
        color: initial;
    }

    .close{
        display: block !important;
        width: 25px !important;
        height: 25px !important;
        cursor: pointer;
        position: absolute;
        top: 15px;
        left: 35px;
        color: red;
    }
    .clicks{
        display: block;
        position: absolute;
        top: 10px;
        right: 35px;
        border: 1px solid #008a88;
        font-size: 18px;
        background-color: white;
        padding: 0 2px;
    }
</style>