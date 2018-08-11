<template>
    <div style="">
        <!-- header -->

        <template v-for="(item, index) in items">
            <component
                    :is="item.component"
                    :index="index"
                    :posts="posts"
                    :fullPosts="fullPosts"
                    :banners="banners"
                    :fullBanners="fullBanners"
                    :item="item"
                    :edit="edit"
                    :newsletter="newsletter"
                    @deleteRow="deleteRow($event)"
                    @setItem="setItem($event)"
            ></component>
        </template>

        <div style="Margin:0px auto;max-width:600px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                <tbody>
                <tr>
                    <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">

                        <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <button class="btn btn-primary" @click="create()" v-if="items.length > 0">Potvrdi</button>
                        </div>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- ./body -->

        <!-- ./footer -->
    </div>
</template>

<script>
    import leadingPost from './leadingPost.vue';
    import twoPosts from './twoPosts.vue';
    import banner from './banner.vue';
    // import header from './header.vue';
    // import footer from './footer.vue';

    export default{
        data(){
          return {
              posts: {},
              banners: {},
              fullPosts: {},
              fullBanners: {},
              attrs: [],
              domain: domain,
          }
        },
        props: ['items', 'edit', 'newsletter'],
        components: {
            'leading-post': leadingPost,
            'two-posts': twoPosts,
            'banner': banner,
            // 'header': header,
            // 'footer': footer,
        },
        mounted(){
            this.getPosts();
            this.getBanners();
        },
        methods: {
            getPosts(){
                axios.get('api/posts/lists')
                    .then(res => {
                        this.fullPosts = res.data.posts;
                        this.posts = _.map(res.data.posts, (data) => {
                            var pick = _.pick(data, 'title', 'id');
                            var object = {id: pick.id, text: pick.title};
                            return object;
                        });
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            getBanners(){
                axios.get('api/banners/lists')
                    .then(res => {
                        this.fullBanners = res.data.banners;
                        this.banners = _.map(res.data.banners, (data) => {
                            var pick = _.pick(data, 'title', 'id');
                            var object = {id: pick.id, text: pick.title};
                            return object;
                        });
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            deleteRow(index){
                this.attrs.splice(index, 1);
                this.$emit('removeMarkup', index);
            },
            setItem(item){
                this.attrs[item.index] = item;
            },
            create(){
                this.$emit('create', this.attrs);
            },
        }
    }
</script>

<style scoped>
    @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);

    #outlook a {
        padding: 0;
    }

    .ReadMsgBody {
        width: 100%;
    }

    .ExternalClass {
        width: 100%;
    }

    .ExternalClass * {
        line-height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    table,
    td {
        border-collapse: collapse;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
    }

    img {
        border: 0;
        height: auto;
        line-height: 100%;
        outline: none;
        text-decoration: none;
        -ms-interpolation-mode: bicubic;
    }

    p {
        display: block;
        margin: 13px 0;
    }

    @media only screen and (min-width:480px) {
        .mj-column-per-50 {
            width: 50% !important;
            max-width: 50%;
        }
        .mj-column-per-100 {
            width: 100% !important;
            max-width: 100%;
        }
        .mj-column-per-33 {
            width: 33.3333% !important;
            max-width: 33.3333%;
        }
    }

    @media only screen and (max-width:480px) {
        table.full-width-mobile {
            width: 100% !important;
        }
        td.full-width-mobile {
            width: auto !important;
        }
    }

    noinput.mj-menu-checkbox {
        display: block !important;
        max-height: none !important;
        visibility: visible !important;
    }

    #body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        background-color: #FFF;
        color: rgba(0, 0, 0, .87);
    }

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
</style>

<style scoped>
    .btn-primary{
        display: block;
        min-width: 70px;
        margin-left: auto;
        margin-right: auto;
    }
</style>