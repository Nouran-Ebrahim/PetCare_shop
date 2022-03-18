const inpFile=document.getElementById('inptfil');
const previewContainer=document.getElementById('image-previw')
const previewImage=previewContainer.querySelector('.image');
const previewDefaultText=previewContainer.querySelector('.image-previw_default');
inpFile.addEventListener('change',function(){
    console.log(this)
    const file=this.files[0]
    console.log(file)
    if(file){
        const reader= new FileReader()
        previewDefaultText.getElementsByClassName.display="none"
        previewImage.getElementsByClassName.display="block"
        reader.addEventListener('load',function(){
            console.log(this)
            previewImage.setAttribute("src",this.result)
        });
            reader.readAsDataURL(file);
    }
    else{
        previewDefaultText.getElementsByClassName.display=null
        previewImage.getElementsByClassName.display=null
        previewImage.setAttribute("src"," ")
    }
    
});