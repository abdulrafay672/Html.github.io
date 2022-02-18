var i=1;
function next(){
    i++
    if(i==2){
        document.getElementById('first_img').src='gettyimages-907914534-1590070809.jpg'
        document.getElementById('pre').removeAttribute('disabled')
    }
    if(i==3){
        document.getElementById('first_img').src='images (2).jfif'
    }
    if(i==4){
        document.getElementById('first_img').src='christmas-background-magic-glowing-snowflakes-winter-nature-landscape-beautiful-scene-bokeh-fairytale-illuminated-lights-154691551.jpg'
    }

    if(i==5){
        document.getElementById('first_img').src='lovely-beach-picture-beautiful-260nw-1554809048.jpg'
    }

    if(i==6){
        document.getElementById('first_img').src='images (4).JFIF'
    }

    if(i==7){
        document.getElementById('first_img').src='images.JFIF'
    }

    if(i==8){
        document.getElementById('first_img').src='images (1).jfif'
        document.getElementById('next').setAttribute('disabled',true)

    }
    
}

function pre(){
i--;
if(i==1){
    document.getElementById('first_img').src='beautiful-photos--italy.jpg'
    document.getElementById('next').setAttribute('disabled')}
    
    if(i==2){
        document.getElementById('first_img').src='gettyimages-907914534-1590070809.jpg'
        
    }
    if(i==3){
        document.getElementById('first_img').src='images (2).jfif'
        document.getElementById('next').removeAttribute('disabled')
    }
        

}