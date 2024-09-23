/**
 * @copyright (C) 2018, PT. DEFINITE MAJI ARSANA.
 * @author Nurimansyah Rifwan <iman@definite.co.id>
 */
'use strict';

(function($)
{
    // Init
    const api = '/api/v1/';
    
    // New App
    var app = new Vue({
        el: '#search-app',
        data: {
            ffData: [],
            idbData: [], // Data from ibudanbalita.com
            frisoData: [], // Data from friso.co.id
            loading: {
                ff: false,
                idb: false,
                friso: false
            },
            tabs: {
                isFF: true,
                isIDB: false,
                isFRISO: false
            },
            total: {
                ff: 0,
                idb: 0,
                friso: 0
            },
            type: null,
            page: 1
        },
        mounted: function()
        {
            // Init
            var paths = window.location.pathname;

            // Set path
            paths = paths.split('/');
            paths = paths.filter(function(row) { return row !== ''; });
            
            // Set type
            this.type = paths[1] || 'all';

            // Load Data
            this.loadFFData();
            this.loadIDBData();
            this.loadFrisoData();
        },
        methods: {
            loadFrisoData: function()
            {
                // Init
                var vm = this;

                // Show Loading
                this.loading.friso = true;

                // Set Search Data
                var data = { q: queryString };

                // Call API
                this.$http.get(api + 'friso?' + $.param(data)).then(function(response) {
                    // Get response body
                    var res = response.body;
                    
                    // Set IDB Data
                    this.frisoData = res;
                    this.total.friso = res.length;

                    // Hide Loading
                    this.loading.friso = false;
                });
            },
            loadIDBData: function()
            {
                // Init
                var vm = this;

                // Show Loading
                this.loading.idb = true;

                // Set Search Data
                var data = { q: queryString };

                // Call API
                this.$http.get(api + 'idb?' + $.param(data)).then(function(response) {
                    // Get response body
                    var res = response.body;
                    
                    // Set IDB Data
                    this.idbData = res.results;
                    this.total.idb = res.results.length;

                    // Hide Loading
                    this.loading.idb = false;
                });
            },
            loadFFData: function(page)
            {
                // Init
                var vm = this;

                // Show Loading
                this.loading.ff = true;

                // Set Search Data
                var data = {
                    q: queryString,
                    page: page || this.page,
                    type: this.type
                };

                // Call API
                this.$http.get(api + 'search?' + $.param(data)).then(function(response) {

                    // Get response body
                    var res = response.body;
                    // Set FF Data
                    $.each(res.data, function(i, row) {
                        vm.ffData.push(row);
                    });

                    this.total.ff = res.total;
                    this.page = res.current_page;
                    
                    // Hide Loading
                    this.loading.ff = false;

                });
            }
        }
    });
    
})(jQuery);