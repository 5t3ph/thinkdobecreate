module.exports = function (grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: { // Task
            dist: { // Target
                options: { // Target options
                    style: 'compressed',
					sourcemap: 'none'
                },
                files: { 
					// Dictionary of files
					// distribution : source
                    'dist/styles.css': 'scss/init.scss'
					
					// Promote to theme also
					//'../wp-content/themes/theme/css/styles.css': 'scss/init.scss'
                }
            }
        },
        postcss: {
			options: {
			  map: false,

			  processors: [
				require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
			  ]
			},
			dist: {
			  src: ['dist/*.css'] //, '../wp-content/themes/theme/css/*.css']
			}
		  },
		watch: {
		  css: {
			files: ['scss/*.scss', 'scss/*/*.scss'],
			tasks: ['sass', 'postcss']
		  }
		}
    });
	grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.registerTask('default', ['watch']);

};