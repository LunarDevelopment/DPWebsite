import Vue from 'vue/dist/vue.js';

var app = new Vue({
    el: '#meet-the-team',
    data: {
        marketing: true,
        tech: true,
        sales: true,
        facilities: true,
        admin: true,
        directors: true
    },
    methods: {
        showAll: function () {
            this.hideAll();
            this.marketing = true;
            this.tech = true;
            this.sales = true;
            this.facilities = true;
            this.admin = true;
            this.directors = true;
        },
        showMarketing: function () {
            this.hideAll();
            this.marketing = true;
        },
        showTech: function () {
            this.marketing = false;
            this.tech = true;
            this.sales = false;
            this.facilities = false;
            this.admin = false;
            this.directors = false;
        },
        showSales: function () {
            this.hideAll();
            this.sales = true;
        },
        showFacilities: function () {
            this.hideAll();
            this.facilities = true;
        },
        showAdmin: function() {
            this.hideAll();
            this.admin = true;
        },
        showDirectors: function() {
            this.hideAll();
            this.directors = true;
        },
        hideAll: function() {
            this.marketing = false;
            this.tech = false;
            this.sales = false;
            this.facilities = false;
            this.admin = false;
            this.directors = false;
        }
    }
});
