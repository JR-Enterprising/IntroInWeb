function myFunction(smallImage){
    var fullImg = document.getElementById("bigIMG");
    fullImg.src = smallImage.src;
    for(var i=0;i<7;i++)
    {
        var temp = document.getElementById(i);
        temp.className = 'img-fluid border-bottom-0';
    }
    smallImage.className += " clicked";
}