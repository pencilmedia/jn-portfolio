'use strict';
module.exports = function(grunt) {
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-php');
    grunt.loadNpmTasks('grunt-contrib-watch');
	require('load-grunt-tasks')(grunt); //loads tasks above

	grunt.initConfig({
        watch: {
			sass: {
				// We watch and compile sass files as normal but don't live reload here
				files: ['**/*.scss'],
				tasks: ['sass']
			},
            php: {
                files: ['app/**/*.php']
            },
            options: {
                spawn: false // scss will compile after browser reload without this
            }
        },
		sass: {
			options: {
				sourceMap: true
			},
			dist: {
				files: {
					'app/assets/css/main.css': 'app/assets/scss/main.scss'
				},
				livereload: true
			}
		},
        browserSync: {
            dev: {
                bsFiles: {
					src: [
						'app/**/*.html', 'app/**/*.php', 'app/**/*.scss', 'app/**/*.js', 'app/**/*.tpl' // Files you want to watch for changes
					]
                },
                options: {
                    proxy: '127.0.0.1:8010', //our PHP server
                    port: 8080, // our new port
                    open: true,
                    watchTask: true
                }
            }
        },
        php: {
            dev: {
                options: {
                    port: 8010,
                    base: 'app'
                }
            }
        }
	});
    grunt.registerTask('default', ['php', 'sass', 'browserSync', 'watch']);
};
