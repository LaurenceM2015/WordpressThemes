var channelName = 'TechGuyWeb';
//var pid = 

$(document).ready(function(){
    $.get (
        "https://www.googleapis.com/youtube/v3/channels", {

            part: 'contentDetails',
            forUsername: channelName,
            key: 'AIzaSyDvfGNQQ1e0D_ITEemsPMG8D06_5QvSLfQ'},

            function(data){
                $.each(data.items, function(i, item){
                    console.log(item);
                    pid = item.contentDetails.relatedPlaylists.uploads;

                    // function 
                    getVids(pid);
                })

            }

        
    );
    function getVids(pid){
        $.get (
            "https://www.googleapis.com/youtube/v3/playlistItems", {
    
                part: 'snippet',
                maxResults: 10,
                playlistId: pid,
                key: 'AIzaSyDvfGNQQ1e0D_ITEemsPMG8D06_5QvSLfQ'},
    
                function(data){
                    var output;
                    $.each(data.items, function(i, item){
                        console.log(item);
                        videTitle = item.snippet.title;
                        videoId = item.snippet.resourceId.videoId;
                        
                        //output = '<li>'+videTitle+'</li>'; 
                        output = '<li><iframe src=\"//www.youtube.com/embed/'+videoId+'\"></iframe></li>'; 

                        
                        // Append to result listStyleType
                        $('#results').append(output);
                      
                    })
    
                }
        );

    }
})