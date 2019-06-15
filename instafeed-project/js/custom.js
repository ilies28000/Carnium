$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '8718204609',
        limit: 30,
        resolution: 'low_resolution',
        accessToken: '8718204609.1677ed0.0bf6880ec66d47d9b7a67b9ed975af88',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});