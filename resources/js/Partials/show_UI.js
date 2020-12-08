$(document).ready(function() {
    if (($(".input").val() == "UI")) {
        // modal messages bg 
        var modalMessagesBg = document.querySelector('.modal_messages_bg');
        // button messages modal
        var modalMessagesBtn = document.querySelector('.modal_messages_button');
        // close modal messages button
        var closeMessages = document.querySelector('.close_messages_modal');

        // make a stats button event click function to add the class active
        modalMessagesBtn.addEventListener('click', function() {
            modalMessagesBg.classList.add('bg_active');
        });

        // make an event click function to remove the class active
        closeMessages.addEventListener('click', function() {
            modalMessagesBg.classList.remove('bg_active'); 
        });
    }
});