i=1
function next(){
    i++
    
    if(i==2){
        document.getElementById('first_img').src='https://tse4.mm.bing.net/th?id=OIP.FrGJBRzUVaR76Yh65UU7PwHaFB&pid=Api&P=0&w=229&h=156'
        document.getElementById('prives').removeAttribute('disabled')
    }
    if(i==3){
        document.getElementById('first_img').src='https://tse2.mm.bing.net/th?id=OIP.-Ehkh1u-DHgdmD6ipHLQ2wHaJ3&pid=Api&P=0&w=300&h=300'
    }
    if(i==4){
        document.getElementById('first_img').src='https://tse2.mm.bing.net/th?id=OIP.GKmxTDRbe9VHmAV0s8SaoQHaEO&pid=Api&P=0&w=272&h=156'
    }

    if(i==5){
        document.getElementById('first_img').src='https://tse1.mm.bing.net/th?id=OIP.1d3MtIIo5hdRMe03U5qrnwHaEn&pid=Api&P=0&w=250&h=156'
    }

    if(i==6){
        document.getElementById('first_img').src='https://tse1.mm.bing.net/th?id=OIP.1d3MtIIo5hdRMe03U5qrnwHaEn&pid=Api&P=0&w=250&h=156'
    }

    if(i==7){
        document.getElementById('first_img').src='https://tse1.mm.bing.net/th?id=OIP.5NJnzFgDxdNORyVDzzr29AHaJQ&pid=Api&P=0&w=300&h=300'
    }

    if(i==8){
        document.getElementById('first_img').src='https://tse3.mm.bing.net/th?id=OIP.EQh2_vQQ2x3c_t6up1gBqQHaEK&pid=Api&P=0&w=289&h=163'
        document.getElementById('next').setAttribute('disabled',true)

    }
}

function prives(){
//  i--;
    // alert("hello")   

    i--
    
    if(i==2){
        document.getElementById('first_img').src='https://tse4.mm.bing.net/th?id=OIP.FrGJBRzUVaR76Yh65UU7PwHaFB&pid=Api&P=0&w=229&h=156'
        document.getElementById('next').setAttribute('disabled',true)
    }
    if(i==3){
        document.getElementById('first_img').src='https://tse2.mm.bing.net/th?id=OIP.-Ehkh1u-DHgdmD6ipHLQ2wHaJ3&pid=Api&P=0&w=300&h=300'
    }
    if(i==4){
        document.getElementById('first_img').src='https://tse2.mm.bing.net/th?id=OIP.GKmxTDRbe9VHmAV0s8SaoQHaEO&pid=Api&P=0&w=272&h=156'
    }

    if(i==5){
        document.getElementById('first_img').src='https://tse1.mm.bing.net/th?id=OIP.1d3MtIIo5hdRMe03U5qrnwHaEn&pid=Api&P=0&w=250&h=156'
    }

    if(i==6){
        document.getElementById('first_img').src='https://tse1.mm.bing.net/th?id=OIP.1d3MtIIo5hdRMe03U5qrnwHaEn&pid=Api&P=0&w=250&h=156'
    }

    if(i==7){
        document.getElementById('first_img').src='https://tse1.mm.bing.net/th?id=OIP.5NJnzFgDxdNORyVDzzr29AHaJQ&pid=Api&P=0&w=300&h=300'
    }

    if(i==8){
        document.getElementById('first_img').src='https://tse3.mm.bing.net/th?id=OIP.EQh2_vQQ2x3c_t6up1gBqQHaEK&pid=Api&P=0&w=289&h=163'
        document.getElementById('next').removeAttribute('disabled')


    }
    
    }