$( document ).ready(function() {
	$('#block-views-artyku-y-block .views-field-title').click(function(){
		$('#block-views-artyku-y-block .views-field-title').css('background', 'red');
		$('#block-views-artyku-y-block .views-field-body').slideDown();
		$('#block-views-artyku-y-block-1 .views-field-body').slideUp();
		$('#block-views-artyku-y-block-2 .views-field-body').slideUp();
	});
	$('#block-views-artyku-y-block-1 .views-field-title').click(function(){
		$('#block-views-artyku-y-block-1 .views-field-body').slideDown();
		$('#block-views-artyku-y-block .views-field-body').slideUp();
		$('#block-views-artyku-y-block-2 .views-field-body').slideUp();
	});
	$('#block-views-artyku-y-block-2 .views-field-title').click(function(){
		$('#block-views-artyku-y-block-2 .views-field-body').slideDown();
		$('#block-views-artyku-y-block-1 .views-field-body').slideUp();
		$('#block-views-artyku-y-block .views-field-body').slideUp();
	});
});