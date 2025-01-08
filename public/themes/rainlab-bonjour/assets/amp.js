console.log('test')
var btn = document.getElementById("buy");
btn.addEventListener('click', () => { 
   console.log("test")
    var link = document.querySelectorAll(".amp-modal-ecom-btn-details");

for( var i = 0; i < link.length; i++ ) {
    if(link[i].href.indexOf('lazada') >= 0){
        link[i].textContent = 'lazada';
    } else if(link[i].href.indexOf('jd.id') >= 0){
        link[i].text = 'jd.id';
    } else if(link[i].href.indexOf('alfagift') >= 0){
        link[i].textContent = 'Alfamart';
    } else if(link[i].href.indexOf('blibli') >= 0){
      link[i].text = 'blibli';
    } else if(link[i].href.indexOf('klikindomaret') >= 0){
      link[i].text = 'klikindomaret';
    } else if(link[i].href.indexOf('tokopedia') >= 0){
      link[i].outerText = 'tokopedia';
    } else if(link[i].href.indexOf('shopee') >= 0){
      link[i].innerText = 'shopee';
    } else if(link[i].href.indexOf('bukalapak') >= 0){
      link[i].textContent = 'bukalapak';
    }   
}      
})