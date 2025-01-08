var bootstrapBasePath =      'bower_components/bootstrap-sass/',
    bootstrapScssPath =      bootstrapBasePath+'assets/stylesheets',
    bowerPath =               'bower_components/',
    bootstrapJsVendorPath =  bowerPath+'jquery/dist/',
    bootstrapJsPrefix =      bootstrapBasePath+'assets/javascripts/';

module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: [
          bootstrapScssPath,
          bowerPath + 'fancybox/dist'
        ]
      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'assets/css/app.min.css': 'src/scss/app.scss'
        }
      },
      dev: {
        options: {
          outputStyle: 'compressed',
          sourceMap : true
        },
        files: {
          '../assets/css/app.css': 'src/scss/app.scss'
        }
      }
    },

    concat: {
      options: {
        separator: ';',
        banner: '\n',
      },
      vendor: {
        src: [
          bowerPath + 'jquery/dist/jquery.js',
          bootstrapJsPrefix + 'bootstrap.js',

          bowerPath + 'jquery-ui/jquery-ui.js',
          bowerPath + 'swiper/dist/js/swiper.js',
          bowerPath + 'fancybox/dist/jquery.fancybox.js',
          bowerPath + 'adaptive.background/src/jquery.adaptive-backgrounds.js',
          bowerPath + 'slick-carousel/slick/slick.js',
          bowerPath + 'jquery-validation/dist/jquery.validate.js',
          bowerPath + 'jquery-mask-plugin/dist/jquery.mask.js',
          bowerPath + 'matchHeight/jquery.matchHeight.js',
          bowerPath + 'jscroll/jquery.jscroll.js.js',


          //your script
          'src/js/vendor/tabs-accordion.js',
          'src/js/vendor/datepicker.js',
          'src/js/vendor/fileinput/piefix.js',
          'src/js/vendor/fileinput/fileinput.js',
          'src/js/vendor/fileinput/theme.js',
          'src/js/activity.js',
          'src/js/slider.js',
          'src/js/header.js',
          'src/js/popup.js',
          'src/js/form.js',
          'src/js/search.js',
          'src/js/matcheight.js',
          'src/js/inlinesearch.js',
          'src/js/tabcontent.js',
          'src/js/faqsearch.js',
          'src/js/milkpedia.js',
          'src/js/accordion.js',
          'src/js/loadmore.js',
          'src/js/pretysocial.js',
          'src/js/table.js',
          'src/js/menu.js'
        ],

        dest: '../assets/js/app.js'
      }
    },

    uglify: {
      options: {
        mangle: true
      },
      target: {
        files: {
          '../assets/js/app.min.js':['../assets/js/app.js']
        }
      }
    },

    watch: {
      grunt: {
        files: ['Gruntfile.js'],
        tasks: ['development-task']
      },
      sass: {
        files: 'src/scss/**/*.scss',
        tasks: ['development-task']
      },
      js: {
        files: 'src/js/**/*.js',
        tasks: ['development-task']
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('development-task', ['sass:dev','concat:vendor']);
  grunt.registerTask('production-task', ['sass:dist','concat','uglify']);

  grunt.registerTask('build', ['production-task']);
  grunt.registerTask('default', ['development-task','watch']);
}
