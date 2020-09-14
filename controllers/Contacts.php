<?php    
    
    class Contacts extends Controller{
        
        public $contacts;

        
        public function index(){
            
            include(ROOT.'models/Contact.php');
            $listContact = new Contact();
            $contacts = $listContact->SelectAll();
            echo $this->render('contact' , compact('contacts'));

        }
        public function showContact($id){
           $user = $this->loadModel('contact');
           $contacts = $user->SelectContactFromId($id);
           $invoices = $user->SelectInvoiceForContact($id);
           echo $this->render('user', compact('contacts','invoices'));
            
        }


    }
 