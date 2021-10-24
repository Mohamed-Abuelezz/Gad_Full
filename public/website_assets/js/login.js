const tabs = document.querySelectorAll('.tab'); 

tabs.forEach(tab => {
  tab.addEventListener('click', event => {
    console.log(event.currentTarget); // show what element was clicked in the console
    console.log(event.currentTarget.dataset); // get .dataset Object key from HTML element 
    
    // Remove 'active' class style from previously selected tab
    document.querySelector('.tab.active')?.classList.remove('active'); // optional chaining
    
    // Add 'active' class style to selected tab
    event.currentTarget.classList.add('active');
    
    // Hide previously selected tab's content
    document.querySelector('.content.show').classList.remove('show');
    
    // Show selected tab's respective content
    const selectedContent = event.currentTarget.dataset.content; // see .dataset console.log() above
    document.querySelector(selectedContent).classList.add('show');
  })
})



// Form

$(".dropdown-menu li").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
 // $(this).parents(".dropdown").find('.btn').val($(this).data('value'));

  console.log($(this).attr('data-id'));

 $("#country").val($(this).attr('data-id'));
  
});