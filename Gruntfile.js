module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            scss: {
                src: ['build/scss/*.scss'],
                dest: 'build/scss/build/build.scss',
            }
        },
        sass: {
            dev: {
                options: {
                    style: 'extended'
                },
                files: {
                    'build/css/main.css' : 'build/scss/build/build.scss'
                }
            },
            dist: {
                options:{
                    style:'compressed'
                },
                files: {
                    'build/css/main.css' : 'build/scss/build/build.scss'
                }
            }
        },
        autoprefixer:{
            options: {
                browsers: ['last 3 versions']
            },
            dist:{
                files:{
                    'dist/css/style.css':'build/css/main.css',
                }
            }
        },
        replace: {
            version: {
                src: ['versionado.php'],
                dest: 'versionado.php',
                replacements: [{
                    from: /^\$nVersion = ([0-9])+/igm, 
                    to: '$nVersion = ' + Date.now()
                }]
            }
        },
        watch: {
            sass: {
                files: ['build/scss/*.scss'],
                tasks: ['concat', 'sass:dev', 'replace', 'autoprefixer'],
                options: {
                    livereload: true,
                }
            }
        }
    });


    grunt.loadNpmTasks('grunt-contrib-concat');
    //grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-text-replace');
    grunt.loadNpmTasks('grunt-text-replace');
    grunt.loadNpmTasks('grunt-browser-sync');



    grunt.registerTask('dev', ['watch']);
    grunt.registerTask('default', ['concat', 'sass:dist', 'replace', 'autoprefixer']);
}