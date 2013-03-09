module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		watch: {
			files: 'themes/<%= pkg.name %>/scripts/src/*.js',
			tasks: ['uglify']
		},
		uglify: {
			build: {
				src: 'themes/<%= pkg.name %>/scripts/src/*.js',
				dest: 'themes/<%= pkg.name %>/scripts/<%= pkg.name %>.min.js'
			}
		}
	});

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task(s).
	grunt.registerTask('default', ['watch']);
};