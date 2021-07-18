let images_preview_upload = document.querySelectorAll('.img-dd-preview');
for (let i = 0; i < images_preview_upload.length; i++) {
    images_preview_upload[i].addEventListener('change',function(e){
        console.log(e);
        ddUploadPreviewImage(images_preview_upload[i])
    },true)
}

function ddUploadPreviewImage(e){
    if(e.files.length > 0){
        if(e.files.length === 1){
            let output = document.getElementById('preview-'+e.getAttribute('id'));
            output.src = URL.createObjectURL(e.files[0]);
            output.classList.remove('hidden');
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        }else{
            alert('Multiples')
        }
    }
}
