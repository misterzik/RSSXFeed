module.exports = function(grunt) {
  // Do grunt-related things in here

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    /*cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'stylesheets',
          src: ['*.css', '!*.min.css'],
          dest: 'src',
          ext: '.min.css'
        }]
      }
    },
  */
  compass: {                  // Task
dist: {                   // Target
  options: {              // Target options
    sassDir: 'assets/scss',
    cssDir: 'public/css',
    environment: 'production'
  }
}

},
watch: {
			css: {
				files: '**/**/*.scss',
				tasks: ['compass']
			}
		},

  php: {
        dist: {
            options: {
                keepalive: true,
                open: false,
                port: 5000,
                base: 'public'
            }
        }
    }
  });

  // Load the plugin that provides the "uglify" task.

	grunt.loadNpmTasks('grunt-contrib-watch');
  //grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-compass');
  //grunt.loadNpmTasks('grunt-php');


  // Default task(s).
  //grunt.registerTask('default', ['cssmin']);
  grunt.registerTask('default', ['compass', 'watch']);
};
