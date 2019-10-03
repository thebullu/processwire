

<html>
<form method="POST" action='' >
<input type="SUBMIT" name="page" value="CREATE PAGE">

</form>



<?php

$out = '';


    
    if (isset($_POST['page']))
    {
        echo "Created";
                                


        $p = new \ProcessWire\Page(); 
        $p->template = "newhotel";
        $p->parent = "/hotel/" ;
        $p->name = "hotel/MYHOTEL6"; 
        $p->title = "MY HOTEL 6";
        $p->body="THIS IS MY 6 HOTEL BODY";
        
        echo $p->title;
        echo $p->body;


        $p->save();
    }
    


    $form = $modules->get("InputfieldForm");
    $form->name="form";
    $form->method = "post";
    $form->action = "./";
    

    
    
    // create text field
    $field = $modules->get("InputfieldText");
    $field->label = 'Text User Input';
    $field->name = 'text';
    
   
    $form->append($field); // append the field

    // add a submit button to the form
    $submit = $modules->get("InputfieldSubmit"); 
    $submit->name='enter';
    $submit->value='Enter';
    $form->append($submit); 

    // process the form if it was submitted
    if($input->post->submit){
        $form->processInput($input->post);
        $errors = $form->getErrors();
        if(count($errors))
        {
            echo "Unsuccessful form creation";
            echo $form->render();
        }
        else{
            $text = $form->get('text')->attr('value');
        }
    }
    else{
        $form->render();
    }
    
        
      
    echo "working";

                               

/*
$form = $modules->get('InputfieldForm');

$field = $modules->get('InputfieldText');
$field->attr('name', 'your_name');
$field->label = 'Your Name';
$form->add($field);

$field = $modules->get('InputfieldEmail');
$field->attr('name', 'your_email');
$field->label = 'Your Email Address';
$field->required = true;
$form->add($field);

$submit = $modules->get('InputfieldSubmit');
$submit->attr('name', 'submit_subscribe');
$form->add($submit);

if($input->post('submit_subscribe')) {
  // form submitted
  $form->processInput($input->post);
  $errors = $form->getErrors();
  if(count($errors)) {
    // unsuccessful submit, re-display form
    echo "<h3>There were errors, please fix</h3>";
    echo $form->render();
  } else {
    // successful submit (save $name and $email somewhere)
    $name = $form->get('your_name')->attr('value');
    $email = $form->get('your_email')->attr('value');
    echo $email;
    echo "<h3>Thank you, you have been subscribed!</h3>";
  }
} else {
  // form not submitted, just display it
  echo $form->render();
}
*/
?>
</html>


