module.exports = function(grunt) {
	
	// config
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		less: {
    		options: {
    			banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */'
    		},
    		build: {
    			src: 'styles/<%= pkg.name %>.less',
    			dest: 'styles/<%= pkg.name %>.css'
    		},
		},
		cssmin: {
    		build: {
    			src: 'styles/<%= pkg.name %>.css',
    			dest: 'styles/<%= pkg.name %>.min.css'
    		},
		},
		removecss: {
    		name: '<%= pkg.name %>'
    	}
	});
	
	// Load plugins
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	
	// custom task
	grunt.registerTask('removecss', 'Removes generated css file', function(){
    	var removecss = grunt.config.get('removecss');
		grunt.file.delete('styles/'+removecss.name+'.css', {force:true});
		grunt.log.writeln('Removed generated CSS file styles/'+removecss.name+'.css');
	});
	
	// Default task(s).
	grunt.registerTask('default', ['less','cssmin', 'removecss']);
};