module.exports = function (grunt) {
    'use strict';

    var stylelintConfig = {
        "rules": {
            "color-no-invalid-hex": true,
            "function-url-quotes": "double",
            "media-feature-colon-space-after": "always",
            "media-feature-colon-space-before": "never",
            "media-feature-name-no-vendor-prefix": true,
            "max-empty-lines": 10,
            "number-leading-zero": "never",
            "number-no-trailing-zeros": true,
            "property-no-vendor-prefix": true,
            "declaration-block-no-duplicate-properties": true,
            "block-no-single-line": true,
            "selector-no-id": true,
            "string-quotes": "double"
        }
    };

    grunt.initConfig({
        copy: {
            main: {
                files: [{
                    src: 'index.html',
                    dest: 'dist/index.html'
                }]
            },
            assets: {
                files: [{
                    expand: true,
                    cwd: 'assets/',
                    src: ['**', '!styles/**', '!scss/**'],
                    dest: 'dist/assets/'
                }]
            },
            bower_components: {
                files: [{
                    expand: true,
                    cwd: 'bower_components/',
                    src: ['**'],
                    dest: 'dist/assets/vendor/'
                }]
            }
        },

        watch: {
            options: {
                livereload: true
            },
            html: {
                files: ['index.html'],
                tasks: ['copy:main']
            },
            sass: {
                files: ['assets/scss/*.scss'],
                tasks: ['sass', 'cssmin']
            },
            assets: {
                files: ['assets/**'],
                tasks: ['copy:assets']
            },
            bower_components: {
                files: ['bower_components/**'],
                tasks: ['copy:bower_components']
            }
        },

        sass: {
            options: {
                sourceMap: true
            },
            dist: {
                files: {
                    'dist/assets/css/main.css': 'assets/scss/main.scss'
                }
            }
        },

        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'dist/assets/css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'dist/assets/css',
                    ext: '.min.css'
                }]
            }
        },

        imagemin: {
            assets: {
                files: [{
                    expand: true,
                    cwd: 'dist/assets/images',
                    src: ['**/*.{png,jpg,gif,svg, ico}'],
                    dest: 'dist/assets/images'
                }]
            }
        },

        clean: {
            release: ["dist"]
        },

        connect: {
            server: {
                options: {
                    port: 8000,
                    base: 'dist',
                    hostname: 'localhost',
                    livereload: true
                }
            }
        },

        npmcopy: {
            dist: {
                options: {
                    destPrefix: 'dist/assets'
                },
                files: {
                    'js/jquery.slim.min.js': 'node_modules/jquery/dist/jquery.slim.min.js',
                    'js/fastclick.js': 'node_modules/fastclick/lib/fastclick.js'
                }
            }
        },

        html5validate: {
            src: 'dist/*.html'
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-npmcopy');

    grunt.registerTask('default', ['copy', 'sass', 'cssmin', 'npmcopy']);
    grunt.registerTask('build', ['clean', 'copy', 'sass', 'cssmin', 'imagemin', 'npmcopy']);
    grunt.registerTask('run', ['clean', 'default', 'connect', 'watch']);
};