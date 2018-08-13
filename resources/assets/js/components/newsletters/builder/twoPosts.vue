<template>

        <div style="Margin:0px auto;max-width:600px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                <tbody>
                <tr>
                    <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">

                        <div class="mj-column-per-50 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                <!-- signle article -->
                                <tr>
                                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:0;word-break:break-word;">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;position:relative;">
                                            <tbody>
                                            <tr>

                                                <img class="close" :src="domain + 'img/close.png'" @click="deleteRow(index)" v-if="!newsletter.send">
                                                <router-link tag="a" class="clicks" :to="'/clicks/' + newsletter.id + '/posts/' + item.post1.id" v-if="newsletter.send">{{ clicks1 }}</router-link>

                                                <td style="width:250px;" v-if="item.post1 == null">
                                                    <a href="#" target="_blank">
                                                        <img height="auto" :src="domain + 'img/newsletter-post.jpg'" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="250"/>
                                                    </a>
                                                </td>
                                                <td style="width:250px;" v-else>
                                                    <a :href="item.post1.link" target="_blank">
                                                        <img height="auto" :src="domain + item.post1.image" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="250"/>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:0;word-break:break-word;">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                            <tbody>
                                            <tr>
                                                <td style="width:250px; padding-top: 20px;">

                                                    <select2 :options="posts" :value="item.item1" :name="item.component" @input="input1($event)" v-if="!newsletter.send">
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
                                        <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;" v-if="item.post1 == null">
                                            <div class="detail"> <a class="detail_cat" href="#">kategory</a> | <span class="detail_date">01.02.2018</span> </div>
                                            <h2 class="serif">Article title</h2>
                                            <p class="p">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            <div class="action-footer"> <a class="btn" href="#">saznaj više</a> </div>
                                        </div>

                                        <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;" v-else>
                                            <div class="detail">
                                                <a class="detail_cat" :href="item.post1.blog[0].link">{{ item.post1.blog[0].title }}</a> | <span class="detail_date">01.02.2018</span> </div>
                                            <h2 class="serif">{{ item.post1.title }}</h2>
                                            <p class="p">{{ item.post1.short }}</p>
                                            <div class="action-footer"> <a class="btn" :href="item.post1.link">saznaj više</a> </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <!-- ./single article -->

                        <div class="mj-column-per-50 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                <!-- signle article -->
                                <tr>
                                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:0;word-break:break-word;">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;position:relative;">
                                            <tbody>
                                            <tr>
                                                <router-link tag="a" class="clicks" :to="'/clicks/' + newsletter.id + '/posts/' + item.post2.id" v-if="newsletter.send">{{ clicks2 }}</router-link>

                                                <td style="width:250px;" v-if="item.post2 == null">
                                                    <a href="#" target="_blank">
                                                        <img height="auto" :src="domain + 'img/newsletter-post.jpg'" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="250"/>
                                                    </a>
                                                </td>
                                                <td style="width:250px;" v-else>
                                                    <a :href="item.post2.link" target="_blank">
                                                        <img height="auto" :src="domain + item.post2.image" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="250"/>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:0;word-break:break-word;">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                            <tbody>
                                            <tr>
                                                <td style="width:250px; padding-top: 20px;">

                                                    <select2 :options="posts" :value="item.item2" :name="item.component" @input="input2($event)" v-if="!newsletter.send">
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
                                        <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;" v-if="item.post2 == null">
                                            <div class="detail"> <a class="detail_cat" href="#">kategory</a> | <span class="detail_date">01.02.2018</span> </div>
                                            <h2 class="serif">Article title</h2>
                                            <p class="p">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            <div class="action-footer"> <a class="btn" href="#">saznaj više</a> </div>
                                        </div>

                                        <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;" v-else>
                                            <div class="detail">
                                                <a class="detail_cat" :href="item.post2.blog[0].link">{{ item.post2.blog[0].title }}</a> | <span class="detail_date">01.02.2018</span> </div>
                                            <h2 class="serif">{{ item.post2.title }}</h2>
                                            <p class="p">{{ item.post2.short }}</p>
                                            <div class="action-footer"> <a class="btn" :href="item.post2.link">saznaj više</a> </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <!-- ./single article -->
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
              clicks1: 0,
              clicks2: 0,
          }
        },
        props: ['posts', 'fullPosts', 'index', 'item', 'edit', 'newsletter'],
        components: {
            'select2': Select2,
            'font-awesome-icon': FontAwesomeIcon
        },
        created(){
            if(this.edit){
                this.$emit('setItem', {type: 'posts', item1: this.item.post1, item2: this.item.post2, index: this.index});
                this.getClicks1();
                this.getClicks2();
            }
        },
        methods: {
            deleteRow(index){
                this.$emit('deleteRow', index);
            },
            input1(post_id){
                if(post_id == 0){
                    this.item.post1 = null;
                    this.$emit('setItem', {type: 'post', item1: this.item.post1, item2: this.item.post2, index: this.index});
                }else{
                    this.item.post1 = this.fullPosts.find(p => p.id == post_id);
                    this.$emit('setItem', {type: 'posts', item1: this.item.post1, item2: this.item.post2, index: this.index});
                }
            },
            input2(post_id){
                if(post_id == 0){
                    this.item.post2 = null;
                    this.$emit('setItem', {type: 'post', item1: this.item.post1, item2: this.item.post2, index: this.index});
                }else{
                    this.item.post2 = this.fullPosts.find(p => p.id == post_id);
                    this.$emit('setItem', {type: 'posts', item1: this.item.post1, item2: this.item.post2, index: this.index});
                }
            },
            getClicks1(){
                axios.get('api/clicks/' + this.newsletter.id + '/posts/' + this.item.post1.id)
                    .then(res => {
                        this.clicks1 = res.data.clicks;
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            getClicks2(){
                axios.get('api/clicks/' + this.newsletter.id + '/posts/' + this.item.post2.id)
                    .then(res => {
                        this.clicks2 = res.data.clicks;
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

    @media only screen and (min-width:480px) {
        .mj-column-per-50 {
            width: 50% !important;
        }
    }

    .close{
        display: block !important;
        width: 25px !important;
        height: 25px !important;
        cursor: pointer;
        position: absolute;
        top: 5px;
        left: 5px;
        color: red;
    }

    table, td {
        display: inline-block;
        vertical-align: top;
    }

    .clicks{
        display: block;
        position: absolute;
        top: 5px;
        right: 10px;
        border: 1px solid #008a88;
        font-size: 18px;
        background-color: white;
        padding: 0 2px;
    }
</style>