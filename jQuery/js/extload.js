//we use # for a specific id
$('#iframe').load(function() {
	alert('#iframe Loaded');
});

//we DON'T use # in case of global selectors
$('img').load(function() {
	alert('img Loaded');	//it will alert for EACH of them
});
/*
difference between 'document' and 'window' selectors:
document: the whole html code
window: the viewable part of the document
=> document may be bigger than the actual window
*/