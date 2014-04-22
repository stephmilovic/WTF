module.exports = function(grunt) {
  grunt.initConfig({
    copy: {
      dist: {
        cwd: 'src/', expand: true, src: '**', dest: 'dist/'
      }
    },
    // Remove unused CSS across multiple files, compressing the final output
    uncss: {
      dist: {
        src: ['index.html'],
        dest: 'css/tidy.css'
      }
    }

  });
  // Load the plugins
  grunt.loadNpmTasks('grunt-uncss');
  // Default tasks.
  grunt.registerTask('default', ['uncss']);
};