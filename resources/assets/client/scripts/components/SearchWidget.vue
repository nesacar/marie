<template>
    <form id="search-form" method="POST" :action="domain + '/pretraga'" v-on:submit='onSubmit'>
        <input type="hidden" name="_token" :value="token">
        <div class="search-widget">
            <button class="icon-btn search-widget_search"
                    title="Search"
                    type="submit"
            >
                <svg class="icon" role="presentation">
                    <use xlink:href="#icon_search"></use>
                </svg>
            </button>
            <input type="text"
                   ref='input'
                   title="Query"
                   name="text"
                   placeholder="Pretraži"
                   v-model='value'
            >
            <div class="search-widget_border"></div>
            <button class="icon-btn search-widget_close"
                    title="Close"
                    type="reset"
                    v-on:click='hide'
            >
                <svg class="icon" role="presentation">
                    <use xlink:href="#icon_close"></use>
                </svg>
            </button>
        </div>
    </form>
</template>

<script>
    import {classNames} from '../utils';

    export default {
        data() {
            return {
                value: '',
                show: false,
                domain: document.head.querySelector("[name=domain]").content,
                token: document.head.querySelector("[name=csrf-token]").content,
            };
        },

        watch: {
            show(newValue) {
                document.body.className = classNames(document.body, {
                    'search-open': newValue,
                });
            },
        },

        mounted() {
            window.addEventListener('keyup', this.onKeyUp);
        },

        destroyed() {
            window.removeEventListener('keyup', this.onKeyUp);
        },

        methods: {
            /**
             * `submit` handler.
             */
            onSubmit(evt) {
                if (this.value === '') {
                    evt.preventDefault();
                    this.$refs.input.focus();
                    this.show = true;
                    return;
                }
            },

            /**
             * `keyup` event handler.
             * Hides the component if the pressed key is `Esc` key.
             */
            onKeyUp(evt) {
                if (evt.keyCode === 27 && this.show) {
                    this.hide();
                }
            },

            /**
             * Convinience method for hiding the component.
             */
            hide() {
                this.show = false;
                this.value = '';
            },
        },
    }
</script>
