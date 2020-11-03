$(document).ready(function() {

    setTimeout(() => {
        $('.message_alert').fadeOut(500)
    }, 1000);

});

/**
 * ajax requests handler
 *
 * object of options contains the url, data to send, headers
 */
const ajax= async (options) => {
    // console.log('options',options)
    try{
        let data=options.data,
            method=options.method?options.method:'post',
            config={
                method:method,
                url:options.url,
                onUploadProgress: function (progressEvent) {

                },
                onDownloadProgress: function (progressEvent) {

                },
            }

        if(options.method=='get'){
            config.params=data
        }else{
            config.data=data
        }
        $('.loading').show();
        // console.log('config',config)
        const response= await axios(config);
        $('.loading').hide();
        if(response.status==200){
            return response.data;
        }

        let message=response.data&&response.data.message?response.data.message: 'internetConnectionProblem'
        //   alert(message)
        return false;
    } catch ({response: {data}}) {

        $('.loading').hide();

        console.log('error ',{data})

        $('.ajaxErrorResponse').html(data.message || 'Request Error').fadeIn(500)
        setTimeout(() => {
            // $('.ajaxErrorResponse').fadeOut(500)
        }, 1000);

        return false;
    }
};
