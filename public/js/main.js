/********************************************************************************

The UL is assigned the class "accordion" and the DIV that is the control tab
is assigned the class "accordion-control"

When the UL is clicked, if one of the control tabs is what is clicked, do the
following:

1. Prevent default behavior
2. Get the element on which the user clicked and select the next panel
3. And if that element is not currently being animated,
4. Use slideToggle to either hide or show the element

********************************************************************************/

$(".accordion").on("click", ".accordion-control", function(e) {
	e.preventDefault();
	$(this)
		.next('.accordion-panel')
		.not(':animated')
		.slideToggle();
});

/********************************************************************************

There are two components to this behavior, making the clicked tab the active one
and making the appropriate content active.

First the reference information needs to be maintained for the tab-list, the li
that is currently active, the content of the href attribute which is used to 
designate the what div should be set to active.

In the click function:

1. Prevent default behavior
2. Get the element and href of the clicked tab
3. And if that element is not currently being active, make the current tab and 
   panel inactive by removing the active class and then making the clicked
   tab and panel active by adding the active class.

********************************************************************************/

$('.tab-list').each(function(){
	var $this = $(this);
	var $tab = $this.find('li.active');
	var $link = $tab.find('a');
	var $panel = $($link.attr('href'));

$this.on('click', '.tab-control', function(e) {
	e.preventDefault();
	var $link = $(this);
	var id = this.hash;

	if (id && !$link.is('.active')) {
		$panel.removeClass('active');
		$tab.removeClass('active');

		$panel = $(id).addClass('active');
		$tab = $link.parent().addClass('active');
	}
});
});
