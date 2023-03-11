import Dropzone from "dropzone"
Dropzone.autoDiscover = false;
const dropzone =new Dropzone('#dropzone',{
    dictDefaultMessage : 'Sube tu imagen',
    acceptedFiles : ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile:'borrar archivo',
    maxFiles:2,
    uploadMultiple:false
})
