<?php
//moodleform is defined in formslib.php
//require_once("../../config.php");
//require_once("instanciate.php");
//moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");
/*$PAGE->set_url(new moodle_url('local/message/edit.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('Edit'); */
 class edit extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;
 
        $mform = $this->_form; // Don't forget the underscore! 
 
        $mform->addElement('text', 'email', get_string('email')); // Add elements to your form
        $mform->setType('email', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('email', 'Please enter email');        //Default value      
    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}

//$mform = new edit();
?>