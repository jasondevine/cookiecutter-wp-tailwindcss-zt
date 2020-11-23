module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        clean: [
            'css/**/*',
            'js/main.js',
            'js/*.min.js',
            'js/*.map'
        ],
        compass: {
            dev: {
                options: {
                    config: 'config.rb'
                }
            },
            dist: {
                options: {
                    config: 'config.rb',
                    environment: 'production'
                }
            }
        },
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['js/application.js'],
                dest: 'js/main.js'
            }
        },
        uglify: {
            options: {
                mangle: {
                    except: ['jQuery', 'Backbone']
                },
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
                sourceMap: true
            },
            dist: {
                files: {
                    'js/bootstrap.min.js': ['js/bootstrap.js'],
                    'js/main.min.js': ['js/main.js']
                }
            }
        },
        watch: {
            css: {
                files: ['sass/**/*.scss'],
                tasks: ['compass']
            },
            js: {
                files: [
                    'js/**/*.js',
                    '!js/main.js',
                    '!js/**/*.min.js'
                ],
                tasks: ['concat','uglify']
            }
        },
        // make a zipfile
        compress: {
            main: {
                options: {
                    archive: '<%= pkg.name %>.zip'
                },
                expand: true,
                src: [
                    '**/*',
                    '!**/sass/**',
                    '!**/bootstrap/**',
                    '!**/node_modules/**',
                    '!js/bootstrap-sprockets.js',
                    '!Gruntfile.js',
                    '!package.json',
                    '!config.rb',
                    '!*.zip'
                ]
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.registerTask('default', ['clean','compass:dev','concat:dist','watch']);
    grunt.registerTask('init', ['clean','compass:dev','concat:dist']);
    grunt.registerTask('dist', ['clean', 'compass:dist', 'concat:dist', 'uglify', 'compress']);
};