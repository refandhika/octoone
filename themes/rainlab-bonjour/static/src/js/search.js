jQuery(document).ready(function($) {
    if (window.location.href.indexOf("search") > -1) {
        // Define Variable
        var CurrURL = window.location.href,
            newURL = new URL(CurrURL),
            paramURL = newURL.searchParams.get('q'),
            paramURLseparated = paramURL.split(' ').join('+');
            total = 0,
            friso = $('#friso .content'),
            ibu = $('#ibudanbalita .content'),
            pathArray = window.location.pathname.split( '/' );


        // Search ke friso
        $.get(home + '/api/search?type=friso&keyword=' + paramURL, function(resp) {
            var data = JSON.parse(resp);
            total += data.length;
            $('#total').text(total);

            // friso.empty();

            if (data.length > 0) {
                friso.empty();
                // friso.parent().removeClass('external');
                $.each(data, function(i, row) {

                    friso.append(
                        $("<div class='searchresult__item'>" +
                            "<h4><a href=" + row.link + ">" + row.title + "</a></h4>" +
                            "<div class='date'>" +
                            "<label class='lowercase'>https://www.friso.co.id</label> | " + moment(row.created_at).format("DD MMM YYYY") + "" +
                            "</div>" +
                            "<p>" + row.description.substr(0, 200) + "...</p>" +
                            "<p class='ss-result__url'><a href=" + row.link + ">Lebih lanjut &rarr;</a></p>" +
                            "<hr />" +
                            "</div>")
                    );

                });

            } 
        });


        // Search ke ibu
        $.get(home + '/api/search?type=ibu&keyword=' + paramURL, function(resp) {
            var data = JSON.parse(resp);

            total += data.results.length;
            $('#total').text(total);

            // ibu.empty();

            if (data.results.length > 0) {
                ibu.empty();
                // ibu.parent().removeClass('external');
                $.each(data.results, function(i, row) {


                    ibu.append(
                        $("<div class='searchresult__item'>" +
                            "<h4><a href=" + row.link + ">" + row.title + "</a></h4>" +
                            "<div class='date'>" +
                            "<label class='lowercase'>https://www.ibudanbalita.com</label> | " + moment(row.created_at).format("DD MMM YYYY") + "" +
                            "</div>" +
                            "<p>" + row.description.substr(0, 200) + "...</p>" +
                            "<p class='ss-result__url'><a href=" + row.link + ">Lebih lanjut &rarr;</a></p>" +
                            "<hr />" +
                            "</div>")
                    );

                });

            }
        });


        // Change :slug from pagination url
          $('.pagination li').each(function() {
             var link = $(this).find('a');
             var href = link.attr('href');
             if (href != null) {
                var newURL = href.replace(/:slug/, pathArray[2]);
                link.attr('href', newURL);
             }
          });

          // Hide and show Friso and Ibu balita section
          if (window.location.href.indexOf(pathArray[2]+"?q=" + paramURLseparated) > -1) {
                $("li#"+pathArray[2]).addClass('active');
                $('.pagination').show();
          } 

          if (window.location.href.indexOf("semua?q=" + paramURLseparated) > -1) {
              $('.pagination').hide();
              friso.parent().removeClass('external');
              ibu.parent().removeClass('external');
          }

        // Set URL HREF for Tabs
        $('#search-tab li, #dropdown-search li').each(function() {
            var tabId = $(this).attr('id');
            $(this).find('a').attr('href', home+'/'+pathArray[1]+'/'+tabId+'?q='+paramURLseparated);
            if ($(window).width() < 640) {
              $(this).not(':first').find('a').attr('href', home+'/'+pathArray[1]+'/'+tabId+'?q='+paramURLseparated);
            }
        });

  }
});