import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export const router = new VueRouter({
    routes: [
        { path: "/", component: require('./components/home/Home.vue'), meta: { forAuth: true } },
        { path: "/home", component: require('./components/home/Home.vue'), meta: { forAuth: true } },

        { path: "/login", component: require('./components/auth/Login.vue'), meta: { forVisitors: true } },
        { path: "/register", component: require('./components/auth/Register.vue'), meta: { forVisitors: true } },
        { path: "/logout", component: require('./components/auth/Logout.vue'), meta: { forAuth: true } },

        { path: "/beauty-boxes", component: require('./components/beautyBox/BeautyBoxList.vue'), meta: { forAuth: true } },
        { path: "/beauty-boxes/create", component: require('./components/beautyBox/BeautyBoxCreate.vue'), meta: { forAuth: true } },
        { path: "/beauty-boxes/:id/edit", component: require('./components/beautyBox/BeautyBoxEdit.vue'), meta: { forAuth: true } },

        { path: "/banners", component: require('./components/banners/BannerList.vue'), meta: { forAuth: true } },
        { path: "/banners/create", component: require('./components/banners/BannerCreate.vue'), meta: { forAuth: true } },
        { path: "/banners/:id/edit", component: require('./components/banners/BannerEdit.vue'), meta: { forAuth: true } },

        { path: "/blogs", component: require('./components/blogs/BlogList.vue'), meta: { forAuth: true } },
        { path: "/blogs/create", component: require('./components/blogs/BlogCreate.vue'), meta: { forAuth: true } },
        { path: "/blogs/:id/edit", component: require('./components/blogs/BlogEdit.vue'), meta: { forAuth: true } },

        { path: "/clicks/:newsletter/posts/:post", component: require('./components/newsletters/clicks/ClickPost.vue'), meta: { forAuth: true } },
        { path: "/clicks/:newsletter/banners/:banner", component: require('./components/newsletters/clicks/ClickBanner.vue'), meta: { forAuth: true } },

        { path: "/brands", component: require('./components/brands/BrandList.vue'), meta: { forAuth: true } },
        { path: "/brands/create", component: require('./components/brands/BrandCreate.vue'), meta: { forAuth: true } },
        { path: "/brands/:id/edit", component: require('./components/brands/BrandEdit.vue'), meta: { forAuth: true } },

        { path: "/menus", component: require('./components/menus/MenuList.vue'), meta: { forAuth: true } },
        { path: "/menus/create", component: require('./components/menus/MenuCreate.vue'), meta: { forAuth: true } },
        { path: "/menus/:id/edit", component: require('./components/menus/MenuEdit.vue'), meta: { forAuth: true } },
        { path: "/menus/:id/sort", component: require('./components/menus/MenuSort.vue'), meta: { forAuth: true } },

        { path: "/menu-links/:id", component: require('./components/menuLinks/MenuLinks.vue'), meta: { forAuth: true } },
        { path: "/menu-links/:id/create", component: require('./components/menuLinks/MenuLinkCreate.vue'), meta: { forAuth: true } },
        { path: "/menu-links/:id/edit", component: require('./components/menuLinks/MenuLinkEdit.vue'), meta: { forAuth: true } },

        { path: "/newsletters", component: require('./components/newsletters/NewsletterList.vue'), meta: { forAuth: true } },
        { path: "/newsletters/create", component: require('./components/newsletters/NewsletterCreate.vue'), meta: { forAuth: true } },
        { path: "/newsletters/:id/edit", component: require('./components/newsletters/NewsletterEdit.vue'), meta: { forAuth: true } },

        { path: "/posts", component: require('./components/posts/PostList.vue'), meta: { forAuth: true } },
        { path: "/posts/create", component: require('./components/posts/PostCreate.vue'), meta: { forAuth: true } },
        { path: "/posts/:id/edit", component: require('./components/posts/PostEdit.vue'), meta: { forAuth: true } },
        { path: "/posts/:id/gallery", component: require('./components/posts/PostGallery.vue'), meta: { forAuth: true } },

        { path: "/roles", component: require('./components/roles/RoleList.vue'), meta: { forAdmin: true } },
        { path: "/roles/create", component: require('./components/roles/RoleCreate.vue'), meta: { forAuth: true } },
        { path: "/roles/:id/edit", component: require('./components/roles/RoleEdit.vue'), meta: { forAuth: true } },
        { path: "/roles/:id/permission", component: require('./components/roles/RolePermission.vue'), meta: { forAuth: true } },

        { path: "/permissions", component: require('./components/permissions/PermissionList.vue'), meta: { forAuth: true } },
        { path: "/permissions/create", component: require('./components/permissions/PermissionCreate.vue'), meta: { forAuth: true } },
        { path: "/permissions/:id/edit", component: require('./components/permissions/PermissionEdit.vue'), meta: { forAuth: true } },

        { path: "/permission-groups", component: require('./components/permissionGroups/PermissionGroupList.vue'), meta: { forAuth: true } },
        { path: "/permission-groups/create", component: require('./components/permissionGroups/PermissionGroupCreate.vue'), meta: { forAuth: true } },
        { path: "/permission-groups/:id/edit", component: require('./components/permissionGroups/PermissionGroupEdit.vue'), meta: { forAuth: true } },

        { path: "/categories", component: require('./components/categories/CategoryList.vue'), meta: { forAuth: true } },
        { path: "/categories/create", component: require('./components/categories/CategoryCreate.vue'), meta: { forAuth: true } },
        { path: "/categories/sort", component: require('./components/categories/CategorySort.vue'), meta: { forAuth: true } },
        { path: "/categories/:id/edit", component: require('./components/categories/CategoryEdit.vue'), meta: { forAuth: true } },

        { path: "/products", component: require('./components/products/ProductList.vue'), meta: { forAuth: true } },
        { path: "/products/create", component: require('./components/products/ProductCreate.vue'), meta: { forAuth: true } },
        { path: "/products/:id/edit", component: require('./components/products/ProductEdit.vue'), meta: { forAuth: true } },

        { path: "/settings/:id/edit", component: require('./components/settings/SettingEdit.vue'), meta: { forAuth: true } },

        { path: "/partners", component: require('./components/partners/PartnerList'), meta: { forAuth: true } },
        { path: "/partners/create", component: require('./components/partners/PartnerCreate'), meta: { forAuth: true } },
        { path: "/partners/:id/edit", component: require('./components/partners/PartnerEdit'), meta: { forAuth: true } },

        { path: "/positions", component: require('./components/positions/PositionList'), meta: { forAuth: true } },
        { path: "/positions/create", component: require('./components/positions/PositionCreate'), meta: { forAuth: true } },
        { path: "/positions/:id/edit", component: require('./components/positions/PositionEdit'), meta: { forAuth: true } },

        { path: "/tags", component: require('./components/tags/TagList.vue'), meta: { forAuth: true } },
        { path: "/tags/create", component: require('./components/tags/TagCreate.vue'), meta: { forAuth: true } },
        { path: "/tags/:id/edit", component: require('./components/tags/TagEdit.vue'), meta: { forAuth: true } },

        { path: "/statistics/:id/day", component: require('./components/newsletters/statistics/TodayNewsletter.vue'), meta: { forAuth: true } },
        { path: "/statistics/:id/month", component: require('./components/newsletters/statistics/MonthNewsletter.vue'), meta: { forAuth: true } },
        { path: "/statistics/:id/year", component: require('./components/newsletters/statistics/YearNewsletter.vue'), meta: { forAuth: true } },

        { path: "/subscribers", component: require('./components/subscribers/SubscriberList.vue'), meta: { forAuth: true } },
        { path: "/subscribers/create", component: require('./components/subscribers/SubscriberCreate.vue'), meta: { forAuth: true } },
        { path: "/subscribers/:id/edit", component: require('./components/subscribers/SubscriberEdit.vue'), meta: { forAuth: true } },

        { path: "/users", component: require('./components/users/UserList.vue'), meta: { forAuth: true } },
        { path: "/users/create", component: require('./components/users/UserCreate.vue'), meta: { forAuth: true } },
        { path: "/users/:id/edit", component: require('./components/users/UserEdit.vue'), meta: { forAuth: true } },
        { path: "/users/change-password", component: require('./components/users/UserChangePassword.vue'), meta: { forAuth: true } },

        { path: "/videos/:blog_id", component: require('./components/videos/VideoList.vue'), meta: { forAuth: true } },
        { path: "/videos/:blog_id/create", component: require('./components/videos/VideoCreate.vue'), meta: { forAuth: true } },
        { path: "/videos/:id/edit", component: require('./components/videos/VideoEdit.vue'), meta: { forAuth: true } },
    ],

    linkActiveClass: 'active',
});