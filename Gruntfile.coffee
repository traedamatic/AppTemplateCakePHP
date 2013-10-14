'use strict';

module.exports = (grunt)->	
	grunt.initConfig
		pkg: grunt.file.readJSON('package.json')
		
		#Project configuration.
		config : 
			src : "Assets"
			web : "webroot"

		#cssmin task
		cssmin:
			compile:
				files:
					'<%= config.web %>/css/style_min.css' : '<%= config.web %>/css/style.css'  

		# stylus
		stylus:
			compile:
				files:
					'<%= config.web %>/css/style.css': '<%= config.src %>/css/style.styl',
					'<%= config.web %>/css/manager.css': '<%= config.src %>/css/manager.styl'    
			dev:
				options:
					compress: false
				files:
					'<%= config.web %>/css/style.css': '<%= config.src %>/css/style.styl'
					'<%= config.web %>/css/manager.css': '<%= config.src %>/css/manager.styl'
		# compile coffee
		coffee:
			compile:
				files:
					'<%= config.web %>/js/application.js' : '<%= config.src %>/javascripts/main.coffee'
					'<%= config.web %>/js/manager.js' : '<%= config.src %>/javascripts/manager.coffee'					
				options :
					bare : true
			dev:
				files:
					'<%= config.web %>/js/application.js' : '<%= config.src %>/javascripts/main.coffee'
					'<%= config.web %>/js/manager.js' : '<%= config.src %>/javascripts/manager.coffee'					
				options :
					bare : true
		uglify:
		    options:
		    	mangle : true		   
		    app :
		    	files : 
		        	'<%= config.web %>/js/application_min.js' : ['<%= config.web %>/js/application.js']
		        	'<%= config.web %>/js/manager_min.js': ['<%= config.web %>/js/manager.js']	
		        	'<%= config.web %>/js/plugins_min.js' : ['<%= config.web %>/js/plugins.js']	 
		# the plugins concat to one file.
		# EDIT FOR MORE JS PLUGINS TO add
		concat:
			libs:
				files: 
					'<%= config.web %>/js/plugins.js': []
		# watch task
		watch:
			scripts:
				files: ['<%= config.src %>/javascripts/*.coffee']
				tasks: ['coffee:dev']
			styles:
				files: ['<%= config.src %>/css/*.styl']
				tasks: ['stylus:dev']
			libs:
				files: ['<%= config.src %>/javascripts/*.js']
				tasks: ['concat:libs']

	#Load the plugin tasks.
	grunt.loadNpmTasks('grunt-contrib-uglify')
	grunt.loadNpmTasks('grunt-contrib-stylus')
	grunt.loadNpmTasks('grunt-contrib-coffee')
	grunt.loadNpmTasks('grunt-regarde')
	grunt.loadNpmTasks('grunt-parallel')
	grunt.loadNpmTasks('grunt-contrib-cssmin')
	grunt.loadNpmTasks('grunt-contrib-concat')
	grunt.loadNpmTasks('grunt-shell')
	grunt.loadNpmTasks('grunt-contrib-uglify');

	grunt.renameTask('regarde', 'watch');	

	#Default task(s).
	grunt.registerTask('default', ['stylus:dev','coffee:dev'])

	#compile task
	grunt.registerTask('compile', [
		'stylus:compile',
		'coffee:compile',
		'concat:libs',
		'cssmin:compile'
	]);

	#concat only the plugins
	grunt.registerTask('plugins', [
		"concat:libs"
	]);

	#concat only the plugins
	grunt.registerTask('build', [
		'stylus:compile',
		'coffee:compile',
		'concat:libs',
		'cssmin:compile',
		"uglify:app"
	]);

